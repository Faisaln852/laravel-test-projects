<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\TeacherStudent;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $teachers = Teacher::all();

        return view('teacher.index', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        return view('teacher.create', compact('users'));
    }
    public function createAssignStudents()
    {
        $teachers = Teacher::all();
        $students = Student::all();
        return view('teacher.create-assign-students', compact('teachers', 'students'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        foreach ($request->user_id as $reqUser_id) {
            $teacher = new Teacher();
            $teacher->user_id = $reqUser_id;
            $teacher->save();
        }
        return redirect()->route('teacher.index')->with('success', 'Teachers added');
    }

    public function assignStudents(Request $request)
    {

        foreach ($request->student_id as $reqStudent_id) {
            $teacherStudent = new TeacherStudent();
            $teacherStudent->teacher_id = $request->teacher_id;
            $teacherStudent->student_id = $reqStudent_id;
            $teacherStudent->save();
        }
        return redirect()->back()->with('success', 'Students Assigned');
    }

    public function selectTeacher()
    {
        $teachers = Teacher::all();
        return view('teacher.select-teacher', compact('teachers'));
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $data = Teacher::where('id', 6)->with('studentsData')->get();

        dd($data);
    }
    public function viewAssignedStudents(Request $request)
    {

        $teacher = Teacher::where('id', $request->teacher_id)->first();
        return view('teacher.show-assigned-students', compact('teacher'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Teacher $teacher)
    {
        return view('teacher.edit', compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $user = User::where('id', $id)->first();
        $user->name = $request->name;
        $user->update();
        return redirect()->route('teacher.index')->with('success', 'Teacher updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        return redirect()->route('teacher.index')->with('danger', "Teacher Deleted successfully");
    }
}
