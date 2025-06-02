<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    // Tabel yang digunakan di database
    protected $table = 'produks';

    // Kolom yang bisa diisi massal
    protected $fillable = [
        'nama',
        'harga',
        'toko',
        'gambar',
        'kategori',
        'subkategori',
    ];
}
