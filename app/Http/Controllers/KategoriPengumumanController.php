<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriPengumuman;

class KategoriPengumumanController extends Controller
{
    function index(){
        $kategoriPengumuman=KategoriPengumuman::all();

    return view('kategori_pengumuman.index',compact ('kategoriPengumuman'));
    }
    public function show($id){
        
        $kategoriPengumuman=KategoriPengumuman::find($id);

        return view('kategori_pengumuman.show',compact('kategoriPengumuman'));

    }
    public function create(){
        return view( 'kategori_pengumuman.create');
      }
      public function store(Request $request)
      {
        $input= $request->all();
        KategoriPengumuman::create($input);
  
        return redirect(route('KategoriPengumuman.index'));
      }
      public function edit($id){
        $KategoriPengumuman=KategoriPengumuman::find($id);
  
        if(empty($KategoriPengumuman)){
          return redirect(route('KategoriPengumuman.index'));
        }
  
        return view( 'kategori_pengumuman.edit',compact('KategoriPengumuman'));
        }
        public function update($id,Request $request){
          $KategoriPengumuman=KategoriPengumuman::find($id);
          $input= $request->all();
  
  
        if(empty($KategoriPengumuman)){
          return redirect(route('KategoriPengumuman.index'));
        }
        $KategoriPengumuman->update($input);
  
        return redirect(route('KategoriPengumuman.index'));
      }
      public function destroy($id)
      {
        $KategoriPengumuman=KategoriPengumuman::find($id);
  
        if(empty($KategoriPengumuman)){
          return redirect(route('KategoriPengumuman.index')); }
  
          $KategoriPengumuman->delete();
          return redirect(route('KategoriPengumuman.index'));
        }
}
