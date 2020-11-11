<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Book extends Model
{
    protected $table = 'books';
    protected $fillable = ['name','price','status'];
    protected $primaryKey = 'id';

    public function student()
    {
        return $this->belongsTo('App\Models\Student');
    }
    
}
