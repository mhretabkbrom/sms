<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    //


    protected $table = 'semesters';
    protected $primaryKey = 'Semester_id';
    protected $fillable = ['semeName', 'year',];


    public function grades(){
        return $this->hasMany('App\Grade', 'Semester_id', 'Semester_id');
    }
}
