<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $table='teachers';
    protected $fillable=[
        'user_id',
    ];

    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    // public function students(){
    //     return $this->hasMany(TeacherStudent::class,'teacher_id','id');
    // }
    public function students(){
        return $this->belongsToMany(Student::class,'teacher_student','teacher_id','student_id');
    }

    // public function studentUser(){
    //     return $this->hasManyThrough(Student::class,'teacher_student');
    // }

}
