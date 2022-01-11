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

     /**
     * Get all of the post's image.
     */
    public function image()
    {
        return $this->hasOne(Image::class);
    }

     /**
     * Get all of the post's tags.
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    /**
     * Get all of the post's comments.
     */
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
