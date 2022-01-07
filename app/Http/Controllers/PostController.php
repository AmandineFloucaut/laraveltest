<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function postList()
    {
        $posts = [
            'Créer un projet Laravel',
            'Utiliser Blade',
            'Tout savoir sur Eloquent',
        ];

        return view('posts', [
            'posts' => $posts,
        ]);
    }
}
