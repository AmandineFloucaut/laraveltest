<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show()
    {
        $homeData = [
            'Après Lumen, voici mon premier projet Laravel',
            'Créer un projet Laravel',
        ];

        return view('home', [
            'homeData' => $homeData,
        ]);
    }
}
