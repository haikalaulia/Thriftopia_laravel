@extends('layouts.app')

@section('title', 'Kategori: ' . $kategori)

@section('content')
    <div class="container mx-auto px-4 py-6">
        <h2 class="text-2xl font-semibold mb-4">Produk Kategori: {{ $kategori }}</h2>

        @if($produks->isEmpty())
            <p>Tidak ada produk dalam kategori ini.</p>
        @else
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                @foreach($produks as $produk)
                    <a href="{{ route('produk.detail', $produk->id) }}" class="border rounded shadow hover:shadow-lg p-2">
                        <img src="{{ asset('foto/' . $produk->gambar) }}" alt="{{ $produk->nama }}" class="w-full h-40 object-cover">
                        <div class="mt-2">
                            <h3 class="font-semibold">{{ $produk->nama }}</h3>
                            <p class="text-gray-600">Rp{{ number_format($produk->harga, 0, ',', '.') }}</p>
                            <p class="text-sm text-gray-500">{{ $produk->toko }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        @endif

        <div class="mt-6">
            <a href="{{ url('/') }}" class="text-blue-600 hover:underline">← Kembali ke Dashboard</a>
        </div>
    </div>
@endsection
