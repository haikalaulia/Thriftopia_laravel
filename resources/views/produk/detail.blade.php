@extends('layouts.app')

@section('content')

<div class="produk-detail">
    <div class="produk-detail-image">
        <img src="{{ $produk->gambar }}" alt="{{ $produk->nama }}"class="produk-gambar">
    </div>
    <div class="produk-detail-info">
        <h2>{{ $produk->nama }}</h2>
        <p>Harga: Rp{{ number_format($produk->harga, 0, ',', '.') }}</p>
        <p>Toko: {{ $produk->toko }}</p>
        <p>Kategori: {{ $produk->kategori }}</p>
        <p>Subkategori: {{ $produk->subkategori }}</p>

        {{-- Form Tambah ke Keranjang --}}
        <form action="{{ route('keranjang.tambah') }}" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{ $produk->id }}">
            <button type="submit" class="beli-btn">Tambah ke Keranjang</button>
        </form>

        <a href="{{ url('/') }}" class="back-btn">Kembali ke Dashboard</a>
    </div>
</div>

@endsection
