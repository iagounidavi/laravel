<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function list ()
    {
        return view('layout.form.form');
    }

    public function store($movie)
    {
        $movieList = [];
        $movieList = array_push($movie);
        return $movieList;
    }
}
