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
    public function show($id){
        
        $kategoriBerita=KategoriBerita::find($id);

        return view('kategori_berita.show',compact('kategoriBerita'));

    }
    public function create(){
        return view( 'kategori_berita.create');
      }
      public function store(Request $request)
      {
        $input= $request->all();
        KategoriBerita::create($input);
  
        return redirect(route('KategoriBerita.index'));
      }
}
