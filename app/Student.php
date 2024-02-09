<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //

    protected $table = 'students';
    protected $primaryKey = 'student_id';
    protected $fillable = ['Fname', 'Mname', 'Lname', 'email', 'date_of_birth', 'Department_id',];

public function department(){
    return $this->belongsTo('App\Department','Department_id', 'Department_id');
}



public function grades(){
    return $this->hasMany('App\Grade', 'student_id', 'student_id');
}


}
