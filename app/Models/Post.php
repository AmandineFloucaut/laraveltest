<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Image;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    // DOC - Mass Assignments - https://laravel.com/docs/8.x/eloquent#mass-assignment
    protected $fillable = ['title', 'content'];

    // Warning : method name in singular because one post can have several comments
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function image()
    {
        return $this->hasOne(Image::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
