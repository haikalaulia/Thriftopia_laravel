<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    public function show($id)
    {
        $produk = Produk::find($id);

        if (!$produk) {
            abort(404, 'Produk tidak ditemukan.');
        }

        return view('produk.detail', compact('produk'));
    }

    public function search(Request $request)
{
    $query = $request->input('q');

    $produks = Produk::where('nama', 'LIKE', '%' . $query . '%')
        ->orWhere('kategori', 'LIKE', '%' . $query . '%')
        ->orWhere('subkategori', 'LIKE', '%' . $query . '%')
        ->orWhere('toko', 'LIKE', '%' . $query . '%')
        ->get();

    return view('produk.search_results', compact('produks', 'query'));
}
}
