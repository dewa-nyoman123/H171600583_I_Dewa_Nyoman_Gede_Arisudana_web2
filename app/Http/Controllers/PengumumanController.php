<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengumuman;

class PengumumanController extends Controller
{
    function index(){
        $Pengumuman=Pengumuman::all();

    return view('pengumuman.index',compact ('Pengumuman'));
    }
}
