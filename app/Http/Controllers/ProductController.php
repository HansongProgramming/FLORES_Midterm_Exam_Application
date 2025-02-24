<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $movies = [
            ['title' => 'The Gorge', 'duration' => 120, 'category' => 'scifi'],
            ['title' => 'Interstellar', 'duration' => 145, 'category' => 'scifi'],
            ['title' => 'Everything Everywhere All At Once', 'duration' => 160, 'category' => 'drama'],
            ['title' => 'Train to Busan', 'duration' => 107, 'category' => 'horror']
        ];

        return view('movies', compact('movies'));
    }
}
