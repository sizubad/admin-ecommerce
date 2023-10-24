<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index(){
        $kategoris = kategori::all();
        return view('admin/kategori', compact('kategoris'));
    }

    public function create(){
        return view('admin/tambah_kategori');
    }

    public function store(Request $request){
        //dd($request->except(['_token', 'submit']));
        kategori::create($request->except(['_token', 'submit']));
        return redirect('/admin/kategori')->with('Succes','Data Kategori Berhasil Ditambah');
    }

    public function edit($kategori_id){
        $kategoris=kategori::find($kategori_id);
       //dd($id_kategori);
        return view('/admin/edit_kategori', compact('kategoris'));
    }

    public function update($kategori_id, Request $request)  {

        $kategoris = kategori::find($kategori_id);
        $kategoris-> update($request->except(['_token', 'submit']));
        return redirect('/admin/kategori')->with('Succes','Data Kategori Berhasil Diubah');
    }



    public function destroy($id_kategori){
        //dd($id_kategori);
       $kategoris = kategori::find($id_kategori);
        $kategoris->delete();
        return redirect('/admin/kategori')->with('Succes','Data Kategori Berhasil Dihapus');

    }
}
