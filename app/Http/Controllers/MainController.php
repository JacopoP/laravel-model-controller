<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\movies;

class MainController extends Controller
{
    public function home(){

        $movies = movies::all();

        $data = [
            'movies' => $movies
        ];
        return view('pages.home', $data);
    }
}
