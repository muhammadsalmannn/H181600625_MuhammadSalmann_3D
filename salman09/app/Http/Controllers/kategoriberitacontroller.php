<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriBerita;
class kategoriberitacontroller extends Controller
{
    public function index(){
        //Eloquent => ORM (Obejct Relational Mapping)
        $listKategoriBerita=KategoriBerita::all(); //select * from kategori_berita

        //blade
        return view ( 'kategori_berita.index' ,compact ('listKategoriBerita'));
        //return view('kategori_berita.index')->with ('data', $listKategoriBerita);
    }

    public function show($id){
            //eloquent
            //$KategoriArtikel=KategoriArtikel::where('id',$id)->first(); //select * from kategori_artikel where id=$id limit 1
            $KategoriBerita=KategoriBerita::find($id);

            return view ( 'kategori_berita.show' ,compact ( 'listKategoriBerita'));
        }

        public function create (){
            return view( 'kategori_berita.create');
        }
        public function store (Request $request){
            $input= $request->all();
            
            KategoriBerita::create($input);

            return redirect(route ( 'kategori_berita.index'));
        }


    }
