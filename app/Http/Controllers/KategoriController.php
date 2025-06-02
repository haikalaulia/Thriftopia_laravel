<?php
// app/Http/Controllers/KategoriController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class KategoriController extends Controller
{
    public function index($kategori)
    {
        $produks = Produk::where('kategori', $kategori)->get();
        return view('produk.kategori', compact('produks', 'kategori'));
    }
}
