<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';
    protected $fillable = ['name','author','price','category_id','avatar','status'];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
