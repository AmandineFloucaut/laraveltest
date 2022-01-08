<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SourceController extends Controller
{
    public function sources()
    {
        $sources = [
            'Documentation officielle' => "https://laravel.com/docs/8.x/",
            'Formation YouTube Nord Coders' => "https://www.youtube.com/watch?v=EaSgftRyvAM&list=PLeeuvNW2FHVj4vHJRj9UDeDsXshHlnHJk",
            'Blade' => 'https://laravel.com/docs/8.x/blade',
        ];

        return $this->show('sources', [
            'sources' => $sources
        ]);
    }
}
