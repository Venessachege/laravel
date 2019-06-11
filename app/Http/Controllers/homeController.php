<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\student;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $students = Student::has('installments')->withCount(['installments as amount' =>function($query){
            $query->select(DB::raw('sum(amount)'));
        }])->get();
        return view("99927.home",['students'=>$students]);

    }
    public function retrieve(Request $request){
        $this->validate($request,[
            'studentnumber'=>'required|exists:students,student_no',
        ]);

        $student = Student::has('installments')->where('student_no',$request->input('studentnumber'))->firstOrFail();
        return view("99927.record")->with("student",$student);
    }

    function studentsForm() {
        return view('99927.student');
    }

    function feesForm() {
        return view('99927.fees');
    }


}
