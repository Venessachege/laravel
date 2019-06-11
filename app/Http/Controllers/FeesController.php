<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\fees;
use App\student;

class FeesController extends Controller
{
    public function storeFees(Request $request){
        $this->validate($request,[
            'studentnumber'=>'required|exists:students,student_no',
            'amount'=>'required',
        ]);
        $student = Student::where('student_no', $request->input('studentnumber'))->firstOrFail();
        $fees=new fees;
        $fees->student_id=$student->id;
        $fees->amount=$request->input('amount');
        $fees->save();
        return redirect('/')->withSuccess('Fee payment inserted');
    }
    


}
