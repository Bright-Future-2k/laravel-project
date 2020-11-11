<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title', 'article_text'];

    public function tag()
    {
        return $this->belongsToMany(Tag::class, 'article_tag');
    }
}
