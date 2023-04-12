<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class studentController extends Controller
{
    public function students()

    {
        $data = Student::all();
        return view('student', ['data' => $data]);
    }

    public function addStudent(Request $req)
    {
        $student = new Student();
        $student->name = $req->name;
        $student->email = $req->email;
        $student->address = $req->address;
        $student->save();
        return redirect()->back();
    }
    public function editStudent($id)

    {
        $data = student::find($id);
        return view('edit', ['data' => $data]);
    }
    public function updateStudent(Request $req, $id)

    {
        $student = student::find($id);
        $student->name = $req->name;
        $student->email = $req->email;
        $student->address = $req->address;
        $student->save();
        return redirect()->back();
    }
    public function deleteStudent($id)
    {
        $data = student::find($id);
        $data->delete();
        return redirect()->back();
    }
}
