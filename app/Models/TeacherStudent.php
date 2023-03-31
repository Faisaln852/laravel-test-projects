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


    public function studentUser()
    {
        return $this->hasOneThrough(User::class,Student::class,'id','id','student_id','user_id');
    }

    // public function teacherName(){
    //     return $this->belongsTo(Teacher::class,'teacher_id','id');
    // }
    public function teacherUser()
    {
        return $this->hasOneThrough(User::class,Teacher::class,'id','id','teacher_id','user_id');
    }



}
