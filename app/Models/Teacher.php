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
        return $this->hasManyThrough(
            Student::class, // T1: jis table ma sy data chahihy (T1, has relatioon with T2)
            TeacherStudent::class, // T2: jo in between table hy ()
            'teacher_id', // FK1: Foreign key of T2 (against which we will match, current table field) {6: [2,3]}
            'id', // FK2: Foreign key of T1, using which we will select the rows of T1
            'id', // LK1: local key of this current table, this value will get passed to FK1 (mean we will select the rows from T2, where FK2 is equal this this LK1)
            'student_id' // LK2: local key of T2 (TeacherStudent), which we will match with the FK2 (Student column key)
        )->with('user');

        // 'Select * from students where student_id In { Select student_id from teacher_student where teacher_id = 6 }'
    }

    public function studentUserData()
    {
        return $this->hasManyThrough(User::class, TeacherStudent::class, 'teacher_id', 'id', 'id', 'student_id');
    }
}
