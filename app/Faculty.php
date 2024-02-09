<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    protected $table = 'faculties';
    protected $primaryKey = 'Faculty_id';
    protected $fillable = [
        'FacultyName',
    ];

    public function departments()
    {
        return $this->hasMany('App\Department', 'Faculty_id', 'Faculty_id');
    }

}