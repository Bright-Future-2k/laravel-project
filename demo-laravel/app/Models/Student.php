<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';
    protected $fillable = ['name','age','avatar'];
    protected $primaryKey = 'id';

    public function books()
    {
        return $this->hasMany('App\Models\Book');
    }

    public function roles()
    {
        return $this->belongsToMany('App\Models\Role', 'student_role');
    }

    public function card()
    {
        return $this->hasOne('App\Models\Card');
    }
}
