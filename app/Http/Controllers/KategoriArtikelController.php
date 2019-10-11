<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriArtikel;

class KategoriArtikelController extends Controller
{
    function index(){
        $kategoriArtikel=KategoriArtikel::all();

    return view('kategori_artikel.index',compact ('kategoriArtikel'));
    }
    public function show($id){
        
        $kategoriArtikel=KategoriArtikel::find($id);

        return view('kategori_artikel.show',compact('kategoriArtikel'));
    }
    public function create(){
        return view( 'kategori_artikel.create');
      }
      public function store(Request $request)
      {
        $input= $request->all();
        KategoriArtikel::create($input);
  
        return redirect(route('KategoriArtikel.index'));
      }
      public function edit($id){
        $KategoriArtikel=KategoriArtikel::find($id);
  
        if(empty($KategoriArtikel)){
          return redirect(route('KategoriArtikel.index'));
        }
  
        return view( 'kategori_artikel.edit',compact('KategoriArtikel'));
        }
        public function update($id,Request $request){
          $KategoriArtikel=KategoriArtikel::find($id);
          $input= $request->all();
  
  
        if(empty($KategoriArtikel)){
          return redirect(route('KategoriArtikel.index'));
        }
        $KategoriArtikel->update($input);
  
        return redirect(route('KategoriArtikel.index'));
      }
      public function destroy($id)
      {
        $KategoriArtikel=KategoriArtikel::find($id);
  
        if(empty($KategoriArtikel)){
          return redirect(route('KategoriArtikel.index')); }
  
          $KategoriArtikel->delete();
          return redirect(route('KategoriArtikel.index'));
        }
        public function trash(){
          $KategoriArtikel=KategoriArtikel::onlyTrashed();

          return view('kategori_artikel.index',compact ('KategoriArtikel'));
        }
}
