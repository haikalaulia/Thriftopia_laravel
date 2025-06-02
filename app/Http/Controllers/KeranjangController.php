<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class KeranjangController extends Controller
{
    public function index()
    {
        // Ambil keranjang dari session, default kosong
        $keranjang = session('keranjang', []);

        return view('produk.index', compact('keranjang'));
    }

    public function tambah(Request $request)
    {
        $produk = Produk::find($request->id);

        if (!$produk) {
            return redirect()->back()->with('error', 'Produk tidak ditemukan');
        }

        $keranjang = session('keranjang', []);

        if (isset($keranjang[$produk->id])) {
            $keranjang[$produk->id]['jumlah'] += 1;
        } else {
            $keranjang[$produk->id] = [
                'nama' => $produk->nama,
                'harga' => $produk->harga,
                'gambar' => $produk->gambar,
                'jumlah' => 1,
            ];
        }

        // Simpan kembali ke session
        session(['keranjang' => $keranjang]);

        return redirect()->route('keranjang.index')->with('success', 'Produk berhasil ditambahkan ke keranjang');
    }

    public function hapus($id)
    {
        $keranjang = session('keranjang', []);

        if (isset($keranjang[$id])) {
            unset($keranjang[$id]);
            session(['keranjang' => $keranjang]);
        }

        return redirect()->route('keranjang.index')->with('success', 'Produk berhasil dihapus dari keranjang');
    }

    public function checkout(Request $request)
{
    $keranjang = session()->get('keranjang', []);
    $checkoutItems = $request->checkout_items ?? [];

    $produkDipilih = [];
    $totalHarga = 0;

    foreach ($checkoutItems as $index) {
        if (isset($keranjang[$index])) {
            $item = $keranjang[$index];
            $totalHarga += $item['harga'] * $item['jumlah'];
            $produkDipilih[] = $item;

            // Hapus dari keranjang
            unset($keranjang[$index]);
        }
    }

    // Simpan kembali keranjang yang sudah dihapus sebagian
    session()->put('keranjang', $keranjang);

    // Kirim data ke view popup
    return view('produk.konfirmasi', [
        'produkDipilih' => $produkDipilih,
        'totalHarga' => $totalHarga,
    ]);
}



}
