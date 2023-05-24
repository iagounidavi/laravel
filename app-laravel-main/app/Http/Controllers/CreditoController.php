<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreditoController extends Controller
{
    public function credito ()
    {
        return view('layout.credito.credito');
    }
}
