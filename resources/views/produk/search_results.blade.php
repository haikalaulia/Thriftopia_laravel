@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-xl font-bold mb-4">Hasil pencarian untuk: "{{ $query }}"</h2>

    <div class="produk-container">
        @if(isset($produks) && $produks->count() > 0)
            @foreach($produks as $produk)
                <a href="{{ route('produk.detail', $produk->id) }}" class="produk-card">
                    <img src="{{ $produk->gambar }}" alt="{{ $produk->nama }}"class="produk-gambar">
                    <div class="produk-info">
                        <p class="nama">{{ $produk->nama }}</p>
                        <p class="harga">Rp{{ number_format($produk->harga, 0, ',', '.') }}</p>
                        <p class="toko">{{ $produk->toko }}</p>
                    </div>
                </a>
            @endforeach
        @else
            <p>Tidak ada produk tersedia</p>
        @endif
    </div>
</div>
@endsection
