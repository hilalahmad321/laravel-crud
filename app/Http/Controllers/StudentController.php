<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $student = Student::all();
        return view("home", ["student" => $student]);
    }
    public function add_student()
    {
        return view("add-student");
    }
    public function create_student(Request $request)
    {
        // return $request->input();
        $validate = $request->validate([
            "stdname" => "required",
            "stdage" => "required",
            "stdcity" => "required",
        ]);
        if ($validate) {
            $student = new Student();
            $student->stdname = $request->stdname;
            $student->stdage = $request->stdage;
            $student->stdcity = $request->stdcity;
            $saveData = $student->save();
            if ($saveData) {
                return redirect(route("home"))->with("status", "Data Add Successfully");
            } else {
                return redirect(route("home"))->with("status", "Data Not Add Successfully");
            }
        } else {
            return redirect(route("home"));
        }
    }

    public function edit_student($id)
    {
        $student = Student::find($id);
        return view("edit-student", ["student" => $student]);
    }

    public function update_student(Request $request, $id)
    {
        // return $request->input();
        $validate = $request->validate([
            "stdname" => "required",
            "stdage" => "required",
            "stdcity" => "required",
        ]);
        if ($validate) {
            $student = Student::find($id);
            $student->stdname = $request->stdname;
            $student->stdage = $request->stdage;
            $student->stdcity = $request->stdcity;
            $saveData = $student->save();
            if ($saveData) {
                return redirect(route("home"))->with("status", "Data update Successfully");
            } else {
                return redirect(route("home"))->with("status", "Data Not update Successfully");
            }
        } else {
            return redirect(route("home"));
        }
    }

    public function delete_student($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect(route("home"))->with("status", "Data Delete Successfully");
    }
}