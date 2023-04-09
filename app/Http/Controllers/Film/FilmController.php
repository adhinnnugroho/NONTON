<?php

namespace App\Http\Controllers\Film;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function index()
    {
        return view('film.index_film');
    }
}
