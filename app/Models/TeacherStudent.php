<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TeacherStudent extends Model
{
    use HasFactory;
    protected $table='teacher_student';
    protected $fillable=[
        'student_id',
        'teacher_id'
    ];

    // public function studentName(){
    //     return $this->belongsTo(Student::class,'student_id','id');
    // }
    public function studentUser()
    {
        return $this->hasOneThrough(Student::class,User::class,'student_id','id','user_id');
    }

    public function teacherName(){
        return $this->belongsTo(Teacher::class,'teacher_id','id');
    }
    // public function studentName(){
    //     return $this->hasOneThrough(::class,'')
    // }


}
