<?php

namespace App\Http\Controllers;

use App\Models\produk;
use Illuminate\Http\Request;

class home extends Controller
{

    public function home () {       
        return view ('home', [
            "judul"=>"shopping",
        ]);
    }

    public function produk () {
        $produk = produk::all();
        return view ('produk', [
            "judul"=>"shopping",
            'produk'=>$produk
        ]);
    }
}
