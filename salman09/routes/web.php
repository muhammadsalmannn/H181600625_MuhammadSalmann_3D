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
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('my-captcha','HomeController@myCaptcha')->name('myCaptcha');
Route::post('my-captcha','HomeController@myCaptcha')->name('myCaptcha.post');
Route::get('refresh_captcha','HomeController@myCaptcha')->name('refresh_Captcha');


Route::get('/kategori_artikel','KategoriArtikelController@index')->name('kategori_artikel.index');
Route::get('/kategori_artikel/create','KategoriArtikelController@create')->name('kategori_artikel.create');
Route::post('/kategori_artikel','KategoriArtikelController@store')->name('kategori_artikel.store');
Route::get('/kategori_artikel/{id}','KategoriArtikelController@show')->name('kategori_artikel.show');

Route::get('/kategori_berita','KategoriBeritaController@index')->name('kategori_berita.index');
Route::get('/kategori_berita/create','KategoriBeritaController@create')->name('kategori_berita.create');
Route::post('/kategori_berita','KategoriBeritaController@store')->name('kategori_berita.store');
Route::get('/kategori_berita/{id}','KategoriBeritaController@show')->name('kategori_berita.show');

Route::get('/kategori_galeri','KategoriGaleriController@index')->name('kategori_galeri.index');
Route::get('/kategori_galeri/create','KategoriGaleriController@create')->name('kategori_galeri.create');
Route::post('/kategori_galeri','KategoriGaleriController@store')->name('kategori_galeri.store');
Route::get('/kategori_galeri/{id}','KategoriGaleriController@show')->name('kategori_galeri.show');

Route::get('/kategori_pengumuman','KategoriPengumumanController@index')->name('kategori_pengumuman.index');
Route::get('/kategori_pengumuman/create','KategoriPengumumanController@create')->name('kategori_pengumuman.create');
Route::post('/kategori_pengumuman','KategoriPengumumanController@store')->name('kategori_pengumuman.store');
Route::get('/kategori_pengumuman/{id}','KategoriPengumumanController@show')->name('kategori_pengumuman.show');

Route::get('/artikel','ArtikelController@index')->name('artikel.index');
Route::get('/artikel/{id}','ArtikelController@show')->name('artikel.show');

Route::get('/berita','BeritaController@index')->name('berita.index');
Route::get('/berita/{id}','BeritaController@show')->name('berita.show');

Route::get('/galeri','GaleriController@index')->name('galeri.index');
Route::get('/galeri/{id}','GaleriController@show')->name('galeri.show');

Route::get('/pengumuman','PengumumanController@index')->name('pengumuman.index');
Route::get('/pengumuman/{id}','PengumumanController@show')->name('pengumuman.show');

