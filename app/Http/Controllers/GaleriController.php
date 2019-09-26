<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Galeri;

class GaleriController extends Controller
{
    function index(){
        $Galeri=Galeri::all();

    return view('galeri.index',compact ('Galeri'));
    }
}
