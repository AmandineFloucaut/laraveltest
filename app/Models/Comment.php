<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;

    /**
     * Get the post that owns the Image
     * Warning : method name in singular because one comments can be have only one post
     * DOC https://laravel.com/docs/8.x/eloquent-relationships#one-to-many-inverse
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }
}
