<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::any('login', function() {
    if (request()->getMethod() == 'POST') {
        $rules = ['captcha' => 'required|captcha'];
        $validator = validator()->make(request()->all(), $rules);
        if ($validator->fails()) {
            echo '<p style="color: #ff0000;">Incorrect!</p>';
        } else {
            echo '<p style="color: #00ff30;">Matched :)</p>';
        }
    }

    $form = '<form method="post" action="captcha-test">';
    $form .= '<input type="hidden" name="_token" value="' . csrf_token() . '">';
    $form .= '<p>' . captcha_img() . '</p>';
    $form .= '<p><input type="text" name="captcha"></p>';
    $form .= '<p><button type="submit" name="check">Check</button></p>';
    $form .= '</form>';
    return $form;
});


Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('KategoriArtikel','KategoriArtikelController');
Route::get('kategori_artikel/trash','KategoriArtikelController@trash')->name('KategoriArtikel.trash');

/*Route::get('/kategori_artikel', 'KategoriArtikelController@index')->name('KategoriArtikel.index');
Route::get('/kategori_artikel/create', 'KategoriArtikelController@create')->name('KategoriArtikel.create');
Route::post('/kategori_artikel','KategoriArtikelController@store')->name('KategoriArtikel.store');
Route::get('/kategori_artikel/{id}','KategoriArtikelController@show')->name('KategoriArtikel.show');
Route::get('/kategori_artikel/{id}/edit', 'KategoriArtikelController@edit')->name('KategoriArtikel.edit');
Route::patch('/kategori_artikel/{id}', 'KategoriArtikelController@update')->name('KategoriArtikel.update');
Route::delete('/kategori_artikel/{id}', 'KategoriArtikelController@destroy')->name('KategoriArtikel.destroy');*/


Route::resource('KategoriBerita','KategoriBeritaController');

/*Route::get('/kategori_berita', 'KategoriBeritaController@index')->name('KategoriBerita.index');
Route::get('/kategori_berita/create', 'KategoriBeritaController@create')->name('KategoriBerita.create');
Route::post('/kategori_berita','KategoriBeritaController@store')->name('KategoriBerita.store');
Route::get('/kategori_berita/{id}','KategoriBeritaController@show')->name('KategoriBerita.show');
Route::get('/kategori_berita/{id}/edit', 'KategoriBeritaController@edit')->name('KategoriBerita.edit');
Route::patch('/kategori_berita/{id}', 'KategoriBeritaController@update')->name('KategoriBerita.update');
Route::delete('/kategori_berita/{id}', 'KategoriBeritaController@destroy')->name('KategoriBerita.destroy');*/


Route::resource('KategoriGaleri','KategoriGaleriController');

/*Route::get('/kategori_galeri', 'KategoriGaleriController@index')->name('KategoriGaleri.index');
Route::get('/kategori_galeri/create', 'KategoriGaleriController@create')->name('KategoriGaleri.create');
Route::post('/kategori_galeri','KategoriGaleriController@store')->name('KategoriGaleri.store');
Route::get('/kategori_galeri/{id}','KategoriGaleriController@show')->name('KategoriGaleri.show');*/


Route::resource('KategoriPengumuman','KategoriPengumumanController');

/*Route::get('/kategori_pengumuman', 'KategoriPengumumanController@index')->name('KategoriPengumuman.index');
Route::get('/kategori_pengumuman/create', 'KategoriPengumumanController@create')->name('KategoriPengumuman.create');
Route::post('/kategori_pengumuman','KategoriPengumumanController@store')->name('KategoriPengumuman.store');
Route::get('/kategori_pengumuman/{id}','KategoriPengumumanController@show')->name('KategoriPengumuman.show');
Route::get('/kategori_pengumuman/{id}/edit', 'KategoriPengumumanController@edit')->name('KategoriPengumuman.edit');
Route::patch('/kategori_pengumuman/{id}', 'KategoriPengumumanController@update')->name('KategoriPengumuman.update');
Route::delete('/kategori_pengumuman/{id}', 'KategoriPengumumanController@destroy')->name('KategoriPengumuman.destroy');*/


Route::resource('artikel','ArtikelController');

/*Route::get('/artikel', 'ArtikelController@index')->name('artikel.index');
Route::get('/artikel/create', 'ArtikelController@create')->name('artikel.create');
Route::post('/artikel', 'ArtikelController@store')->name('artikel.store');
Route::get('/artikel/{id}', 'ArtikelController@show')->name('artikel.show');
Route::get('/artikel/{id}/edit', 'ArtikelController@edit')->name('artikel.edit');
Route::patch('/artikel/{id}', 'ArtikelController@update')->name('artikel.update');
Route::delete('/artikel/{id}', 'ArtikelController@destroy')->name('artikel.destroy');*/


Route::resource('berita','BeritaController');

/*Route::get('/berita', 'BeritaController@index')->name('berita.index');
Route::get('/berita/create', 'BeritaController@create')->name('berita.create');
Route::post('/berita', 'BeritaController@store')->name('berita.store');
Route::get('/berita/{id}', 'BeritaController@show')->name('berita.show');
Route::get('/berita/{id}/edit', 'BeritaController@edit')->name('berita.edit');
Route::patch('/berita/{id}', 'BeritaController@update')->name('berita.update');
Route::delete('/berita/{id}', 'BeritaController@destroy')->name('berita.destroy');*/


Route::resource('galeri','GaleriController');

/*Route::get('/galeri', 'GaleriController@index')->name('galeri.index');
Route::get('/galeri/create', 'GaleriController@create')->name('galeri.create');
Route::post('/galeri', 'GaleriController@store')->name('galeri.store');
Route::get('/galeri/{id}', 'GaleriController@show')->name('galeri.show');*/


Route::resource('pengumuman','PengumumanController');


/*Route::get('/pengumuman', 'PengumumanController@index')->name('pengumuman.index');
Route::get('/pengumuman/create', 'PengumumanController@create')->name('pengumuman.create');
Route::post('/pengumuman', 'PengumumanController@store')->name('pengumuman.store');
Route::get('/pengumuman/{id}', 'PengumumanController@show')->name('pengumuman.show');
Route::get('/pengumuman/{id}/edit', 'PengumumanController@edit')->name('pengumuman.edit');
Route::patch('/pengumuman/{id}', 'PengumumanController@update')->name('pengumuman.update');
Route::delete('/pengumuman/{id}', 'PengumumanController@destroy')->name('pengumuman.destroy');*/




Route::get('login', 'HomeController@myCaptcha')->name('myCaptcha');
Route::post('login', 'HomeController@myCaptchaPost')->name('myCaptcha.post');
Route::get('refresh_captcha', 'HomeController@refreshCaptcha')->name('refresh_captcha');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');