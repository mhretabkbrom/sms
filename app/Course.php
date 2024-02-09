<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    protected $table = 'courses';
    protected $primaryKey = 'Course_id';
    protected $fillable = ['cono', 'costitle', 'CH',];


    public function grades(){
        return $this->hasMany('App\Grade', 'Course_id', 'Course_id');
    }
}
