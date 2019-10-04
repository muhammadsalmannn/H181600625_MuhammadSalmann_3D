<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriGaleri;

class kategorigalericontroller extends Controller
{
    public function index(){
        //Eloquent => ORM (Obejct Relational Mapping)
        $listKategoriGaleri=KategoriGaleri::all(); //select * from kategori_berita

        //blade
        return view ( 'kategori_galeri.index' ,compact ('listKategoriGaleri'));
        //return view('kategori_berita.index')->with ('data', $listKategoriBerita);
    }

    public function show($id){
            //eloquent
            //$KategoriArtikel=KategoriArtikel::where('id',$id)->first(); //select * from kategori_artikel where id=$id limit 1
            $KategoriGaleri=KategoriGaleri::find($id);

            return view ( 'kategori_galeri.show' ,compact ( 'listKategoriGaleri'));
        }

        public function create (){
            return view( 'kategori_galeri.create');
        }
        public function store (Request $request){
            $input= $request->all();
            
            KategoriGaleri::create($input);

            return redirect(route ( 'kategori_galeri.index'));
        }

}
