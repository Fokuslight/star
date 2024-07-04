<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function comments()
    {
        return $this->hasManyThrough(Comment::class, Post::class,
            'category_id',
            'commentable_id',
            'id',
            'id');
    }


    public function comment()
    {
        return $this->hasOneThrough(Comment::class, Post::class)->latest();
    }

}
