<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;

class artikelcontroller extends Controller
{
    public function index(){
        //Eloquent => ORM (Obejct Relational Mapping)
        $listArtikel=Artikel::all(); //select * from kategori_artikel

        //blade
        return view ( 'artikel.index' ,compact ('listArtikel'));
        //return view('kategori_artikel.index')->with ('data', $listKategoriArtikel);
    }

    public function show($id){
            //eloquent
            //$KategoriArtikel=KategoriArtikel::where('id',$id)->first(); //select * from kategori_artikel where id=$id limit 1
            $Artikel=Artikel::find($id);

            return view ( 'artikel.show' ,compact ( 'Artikel'));
        }

        
}
