<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $homeData = [
            'Après Lumen, voici mon premier projet Laravel',
            'Vous pouvez suivre l\'avancée de mon apprentissage et de l\'évolution de mes compétences sur ce frameworks',
        ];

        return $this->show('home', [
            'homeData' => $homeData,
        ]);
    }
}
