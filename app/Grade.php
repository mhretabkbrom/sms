<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    //
    protected $table = 'grades';
    protected $primaryKey = 'Grade_id';
    protected $fillable = ['student_id', 'Semester_id', 'Course_id','Mark',];

    public function semester(){
        return $this->belongsTo('App\Semester', 'Semester_id', 'Semester_id');
    }


    public function course(){
        return $this->belongsTo('App\Course', 'Course_id', 'Course_id');
    }

    public function student(){
        return $this->belongsTo('App\Student', 'student_id', 'student_id');
    }
    



}
