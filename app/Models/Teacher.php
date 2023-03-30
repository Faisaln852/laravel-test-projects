<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $table = 'teachers';
    protected $fillable = [
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function students()
    {
        return $this->hasMany(TeacherStudent::class, 'teacher_id', 'id');
    }

    // public function name(): HasManyThrough{
    //     return $this->hasManyThrough(Student::class, User::class);
    // }

    public function studentsData()
    {
        return $this->hasManyThrough(Student::class, TeacherStudent::class, 'teacher_id', 'id', 'id', 'student_id');
    }
}
