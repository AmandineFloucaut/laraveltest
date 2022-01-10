<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // DOC - Mass Assignments - https://laravel.com/docs/8.x/eloquent#mass-assignment
    protected $fillable = ['title', 'content'];
}
