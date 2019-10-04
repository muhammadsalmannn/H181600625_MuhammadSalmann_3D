<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Galeri;

class galericontroller extends Controller
{
    public function index(){
        //Eloquent => ORM (Obejct Relational Mapping)
        $listGaleri=Galeri::all(); //select * from kategori_artikel

        //blade
        return view ( 'galeri.index' ,compact ('listGaleri'));
        //return view('kategori_artikel.index')->with ('data', $listKategoriArtikel);
    }

    public function show($id){
            //eloquent
            //$KategoriArtikel=KategoriArtikel::where('id',$id)->first(); //select * from kategori_artikel where id=$id limit 1
            $Galeri=Galeri::find($id);

            return view ( 'galeri.show' ,compact ( 'listGaleri'));
        }
}
