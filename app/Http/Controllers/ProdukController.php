<?php

namespace App\Http\Controllers;

use App\Models\Produk;

class ProdukController extends Controller
{
    public function menampilkan()
    {
        $produk = Produk::all();

        return view('produks.template2', compact('produk'));

    }

    public function show($id) {
        $produk = Produk::findOrFail($id);

        return view('produks.show-produk', compact('produk'));
    }
}
