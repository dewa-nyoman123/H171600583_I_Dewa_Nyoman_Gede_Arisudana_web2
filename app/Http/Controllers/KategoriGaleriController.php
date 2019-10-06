<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriGaleri;

class KategoriGaleriController extends Controller
{
    function index(){
        $kategoriGaleri=kategoriGaleri::all();

    return view('kategori_galeri.index',compact ('kategoriGaleri'));
    }
    public function show($id){
        
        $kategoriGaleri=KategoriGaleri::find($id);

        return view('kategori_galeri.show',compact('kategoriGaleri'));

    }
    public function create(){
        return view( 'kategori_galeri.create');
      }
      public function store(Request $request)
      {
        $input= $request->all();
        KategoriGaleri::create($input);
  
        return redirect(route('KategoriGaleri.index'));
      }
}
