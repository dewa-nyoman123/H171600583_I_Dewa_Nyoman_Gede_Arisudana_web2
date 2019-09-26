<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriBerita;

class KategoriBeritaController extends Controller
{
    function index(){
        $kategoriBerita=kategoriBerita::all();

    return view('kategori_berita.index',compact ('kategoriBerita'));
    }
}
