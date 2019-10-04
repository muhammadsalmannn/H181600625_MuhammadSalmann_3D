<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengumuman;

class pengumumancontroller extends Controller
{
    public function index(){
        //Eloquent => ORM (Obejct Relational Mapping)
        $listPengumuman=Pengumuman::all(); //select * from kategori_artikel

        //blade
        return view ( 'pengumuman.index' ,compact ('listPengumuman'));
        //return view('kategori_artikel.index')->with ('data', $listKategoriArtikel);
    }

    public function show($id){
            //eloquent
            //$KategoriArtikel=KategoriArtikel::where('id',$id)->first(); //select * from kategori_artikel where id=$id limit 1
            $Pengumuman=Pengumuman::find($id);

            return view ( 'pengumuman.show' ,compact ( 'listPengumuman'));
        }
}
