<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;

class ArtikelController extends Controller
{
    function index(){
        $Artikel=Artikel::all();

    return view('artikel.index',compact ('Artikel'));
    }
}
