<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class SubkategoriController extends Controller
{
    public function show($subkategori)
    {
        $produks = Produk::where('subkategori', $subkategori)->get();
        return view('produk.subkategori', compact('produks', 'subkategori'));
    }
}
