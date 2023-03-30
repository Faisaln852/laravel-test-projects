<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $students = Student::all();
        return view('student.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        return view('student.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        foreach ($request->user_id as $reqUser_id) {
            $teacher = new Student();
            $teacher->user_id = $reqUser_id;
            $teacher->save();
        }
        return redirect()->route('student.index')->with('success', 'Students added');
    }


    public function selectStudents()
    {
        $students = Student::all();
        return view('student.select-students', compact('students'));
    }
    /**
     * Display the specified resource.
     */

    public function viewStudentTeachers(Request $request)
    {
        $student = Student::where('id', $request->student_id)->first();
        return view('student.show-student-teachers', compact('student'));
    }
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('student.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::where('id', $id)->first();
        $user->name = $request->name;
        $user->update();
        return redirect()->route('student.index')->with('success', 'Student Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('student.index')->with('danger', 'Student Deleted successfully');
    }
}
