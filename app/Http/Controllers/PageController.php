<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function archive(){
        return view('personas.archive');
    }

    public function single(){
        return view('personas.single');
    }
}
