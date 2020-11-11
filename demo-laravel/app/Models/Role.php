<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';
    protected $fillable = ['name_role'];
    protected $primaryKey = 'id';

    public function students()
    {
        return $this->belongsToMany('App\Models\Student', 'student_role');
    }
}
