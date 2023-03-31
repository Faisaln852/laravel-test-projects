<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table='students';
    protected $fillable =[
        'user_id',
    ];
    public function user(){
       return  $this->belongsTo(User::class,'user_id','id');
    }

    // public function teachers(){
    //     return $this->hasMany(TeacherStudent::class,'student_id','id');
    // }

    public function teachers(){
        return $this->belongsToMany(Teacher::class,'teacher_student','student_id','teacher_id');
    }



}
