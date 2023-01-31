<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\movies;

class MainController extends Controller
{
    public function home(){
        return view('pages.home');
    }
}
