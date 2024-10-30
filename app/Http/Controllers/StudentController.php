<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index(Request $req){
        $students = Student::all();
        return  view('welcome')->with("students", $students);
    }

    public function add(Request $req){
        $student = new Student;
        $student->email = $req->email;
        $student->phone = $req->phone;
        $student->birth_date = $req->birth_date;
        $student->save();
        return redirect()->back();
    }

    public function delete(Request $req){
        $student = Student::find($req->id);
        $student->delete();
        return redirect()->back();
    }

    public function edit(Request $req){
        $student = Student::find($req->id);
        return view('edit')->with("student", $student);
    }

    public function update(Request $req){
        $student = Student::find($req->id);
        $student->update([
            'birth_date' => $req->birth_date,
            'phone' => $req->phone,
            'email' => $req->email,
        ]);

        return back();
    }
}
