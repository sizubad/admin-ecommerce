<?php

namespace App\Http\Controllers;

use App\Models\produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index(){
        $produks = Produk ::all();
        return view('admin/produk', compact('produks'));
    }
    public function create(){
        return view('admin/tambah_produk');
    }
    public function store(Request $request){
        //dd($request->except(['_token', 'submit']));
       produk::create($request->except(['_token', 'submit']));
        return redirect('/admin/produk')->with('Succes','Data Produk Berhasil Ditambah');
    }

}