<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;

class StudentController extends Controller
{
    public function storeStudent(Request $request){
        $this->validate($request,[
            'studentnumber'=>'required',
            'fullname'=>'required',
            'dob'=>'required',
            'Address'=>'required',
        ]);
        $student=new student;
        $student->student_no=$request->input('studentnumber');
        $student->fullname=$request->input('fullname');
        $student->dob=$request->input('dob');
        $student->address=$request->input('Address');
        $student->save();
    }


}
