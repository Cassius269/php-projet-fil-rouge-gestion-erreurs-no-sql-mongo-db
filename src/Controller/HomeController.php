<?php

namespace App\Controller;

use App\Renderer;

class HomeController {
    public function index(): Renderer
    {
        // echo 'La page d\'accueil';
        return Renderer::make('home/index');
    }
}