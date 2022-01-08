<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function posts()
    {
        $posts = [
            'Créer un projet Laravel',
            'Utiliser Blade',
            'Tout savoir sur Eloquent',
            'Les sources'
        ];

        return $this->show('posts', [
            'posts' => $posts
        ]);
    }

    public function onePost($id)
    {
        $posts = [
            1 => 'Créer un projet Laravel',
            2 => 'Utiliser Blade',
            3 => 'Tout savoir sur Eloquent',
            4 => 'Les sources',
        ];

        // DOC - opérateur Null coalescent https://www.php.net/manual/fr/migration70.new-features.php#migration70.new-features.null-coalesce-op
        $post = $posts[$id] ?? 'Pas d\'articles';

        return view('post', [
            'post' => $post,
        ]);
    }
}
