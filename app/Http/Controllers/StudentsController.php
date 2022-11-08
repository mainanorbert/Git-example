<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentsController extends Controller
{
    //
    function index(){
        $students=Student::all();
        return view('students',[
            'students'=>$students
        ]);
    }

    function store(Request $request){
        // dd($request);
        // $student=new Student();
        // $student->name=$request('name');
        // $student->save();
        $mys=$request->validate([
            'name'=>'required|min:4',
            'email'=>'required|email'
        ]);
Student::create($mys);
return back();
// return redirect('students');

    }
}
