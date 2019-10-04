<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;

class beritacontroller extends Controller
{
    public function index(){
        //Eloquent => ORM (Obejct Relational Mapping)
        $listBerita=Berita::all(); //select * from kategori_artikel

        //blade
        return view ( 'berita.index' ,compact ('listBerita'));
        //return view('kategori_artikel.index')->with ('data', $listKategoriArtikel);
    }

    public function show($id){
            //eloquent
            //$KategoriArtikel=KategoriArtikel::where('id',$id)->first(); //select * from kategori_artikel where id=$id limit 1
            $Berita=Berita::find($id);

            return view ( 'berita.show' ,compact ( 'listBerita'));
        }

        
}
