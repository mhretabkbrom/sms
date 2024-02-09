<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = 'departments';
    protected $primaryKey = 'Department_id';
    protected $fillable = ['Name', 'Faculty_id',];

    public function faculty()
    {
        return $this->belongsTo('App\Faculty', 'Faculty_id', 'Faculty_id');
    }


    public function students(){
        return $this->hasMany('App\Student', 'Department_id', 'Department_id');
    }
}