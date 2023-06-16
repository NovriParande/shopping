<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produk;
class admin extends Controller
{
    function index () {
    return view('admin.index');
    }

    function produk () {
        $produk = produk::all();
        return view ('admin.produk', [

            'produk'=>$produk
        ]);
    }

    function add_produk () {
        return view ('admin.add_produk');
    }

    function save_produk (Request $request) 
    {
        $produk = new produk;
        $produk->nama_produk = $request->nama_produk;
        $produk->harga = $request->harga;
        $produk->gambar = $request->gambar;
        $produk->save();
        return redirect('admin/produk');
    }

    function edit_produk ($id) 
    {
        $produk = produk::find($id);
        return view ('admin.edit_produk', 
        [
            'produk'=>$produk
        ]);
    }
    function update_produk($id, Request $request)
    {
        $produk = produk::find($id);
        $produk->nama_produk = $request-> input('nama_produk');
        $produk->harga = $request-> input('harga');
        $produk->gambar = $request-> input('gambar');
        $produk->save();
        return redirect('admin/produk');
    }

    function delete_produk ($id) 
    {
        $produk = produk::find($id);
        $produk->delete();
        return redirect('admin/produk');
    }
}