<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriPengumuman;

class kategoripengumumancontroller extends Controller
{
    public function index(){
        //Eloquent => ORM (Obejct Relational Mapping)
        $listKategoriPengumuman=KategoriPengumuman::all(); //select * from kategori_berita

        //blade
        return view ( 'kategori_pengumuman.index' ,compact ('listKategoriPengumuman'));
        //return view('kategori_berita.index')->with ('data', $listKategoriBerita);
    }

    public function show($id){
            //eloquent
            //$KategoriArtikel=KategoriArtikel::where('id',$id)->first(); //select * from kategori_artikel where id=$id limit 1
            $KategoriPengumuman=KategoriPengumuman::find($id);

            return view ( 'kategori_pengumuman.show' ,compact ( 'listKategoriPengumuman'));
        }

        public function create (){
            return view( 'kategori_pengumuman.create');
        }
        public function store (Request $request){
            $input= $request->all();
            
            KategoriPengumuman::create($input);

            return redirect(route ( 'kategori_pengumuman.index'));
        }
}
