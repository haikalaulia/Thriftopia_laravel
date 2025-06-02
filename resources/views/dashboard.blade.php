@extends('layouts.app')

@section('title', 'Dashboard') {{-- Jika kamu mau ubah title --}}

@section('content')

<style>
    /* Reset dan dasar */
body {
    margin: 0;
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
}

/* ======= KATEGORI ======= */
.kategori {
    padding: 20px;
    background-color: #f0f0f0;
}

.kategori h2 {
    font-size: 24px;
    color: #333;
    margin-bottom: 15px;
    text-align: left;
    padding-left: 20px;
}

/* Scroll container horizontal */
.scroll-container {
    overflow-x: auto;
    white-space: nowrap;
    scrollbar-width: thin;
    scrollbar-color: #888 #f0f0f0;
    padding-bottom: 10px;
}

/* Flex container kategori */
.kategori-container {
    display: flex;
    gap: 15px;
    padding: 10px;
    flex-wrap: nowrap; /* supaya tidak turun baris */
}

/* Kartu kategori */
.kategori-card {
    min-width: 150px;
    height: 180px;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    border-radius: 10px;
    box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
    display: flex;
    align-items: flex-end;
    justify-content: center;
    cursor: pointer;
    position: relative;
}

/* Overlay gelap di bawah untuk teks */
.kategori-card::before {
    content: "";
    position: absolute;
    bottom: 0;
    width: 100%;
    height: 40px;
    background: rgba(0, 0, 0, 0.5);
    border-radius: 0 0 10px 10px;
}

/* Teks kategori */
.kategori-card span {
    position: absolute;
    bottom: 10px;
    color: white;
    font-size: 16px;
    font-weight: bold;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);
    z-index: 2;
}

/* Scrollbar Chrome */
.scroll-container::-webkit-scrollbar {
    height: 5px;
}

.scroll-container::-webkit-scrollbar-thumb {
    background: #888;
    border-radius: 10px;
}

.scroll-container::-webkit-scrollbar-track {
    background: #f0f0f0;
}

/* Background gambar kategori */
.kategori-card.baju-kaos {
    background-image: url('{{ asset("foto/kaos.jpg") }}');
}

.kategori-card.celana-panjang {
    background-image: url('{{ asset("foto/cpanjang.jpg") }}');
}

.kategori-card.celana-pendek {
    background-image: url('{{ asset("foto/cpendek.jpg") }}');
}

.kategori-card.jaket {
    background-image: url('{{ asset("foto/jaket.jpg") }}');
}

.kategori-card.hoodie {
    background-image: url('{{ asset("foto/hoodie.jpg") }}');
}

.kategori-card.kemeja {
    background-image: url('{{ asset("foto/kemeja.jpg") }}');
}

.kategori-card.topi {
    background-image: url('{{ asset("foto/topi.jpg") }}');
}

.kategori-card.sepatu {
    background-image: url('{{ asset("foto/sepatu.jpg") }}');
}

.kategori-card.ikat-pinggang {
    background-image: url('{{ asset("foto/ikat.jpg") }}');
}

.kategori-card.kacamata {
    background-image: url('{{ asset("foto/kacamata.jpg") }}');
}

/* ======= PRODUK REKOMENDASI ======= */
h2 {
    padding: 20px;
    color: #333;
    font-size: 24px;
    font-weight: bold;
}

.produk-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
    padding: 20px;
}

.produk-card {
    width: 200px;
    border-radius: 15px;
    overflow: hidden;
    border: 2px solid #4A90E2;
    background: white;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
    text-align: center;
    font-family: Arial, sans-serif;
    text-decoration: none;
    color: inherit;
    transition: transform 0.3s ease;
}

.produk-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.25);
}

.produk-gambar {
    width: 100%;
    height: 200px;
    object-fit: cover;
    background: #f0f0f0;
}

.produk-info {
    padding: 10px;
    background: white;
    position: relative;
}

.nama {
    font-size: 15px;
    font-weight: bold;
    color: #0e0e0e;
    text-align: center;
    margin-bottom: 5px;
}

.harga {
    font-size: 15px;
    font-weight: bold;
    color: red;
    text-align: center;
    margin-bottom: 5px;
}

.toko {
    font-size: 10px;
    color: #666;
    text-align: center;
}

/* ======= RESPONSIVE ======= */
@media (max-width: 768px) {
    .kategori-card {
        min-width: 120px;
        height: 150px;
    }

    .kategori-card span {
        font-size: 14px;
    }

    .produk-card {
        width: 150px;
    }

    .produk-gambar {
        height: 150px;
    }

    .kategori-container {
        gap: 10px;
        padding: 8px;
    }

    h2 {
        padding: 15px;
        font-size: 20px;
    }
}

</style>
    <!-- Kategori -->
    <section class="kategori">
        <h2>Kategori</h2>
        <div class="scroll-container">
            <div class="kategori-container">
                <a href="{{ route('subkategori.show', 'Baju Kaos') }}" class="kategori-card baju-kaos"><span>Baju Kaos</span></a>
                <a href="{{ route('subkategori.show', 'Celana Panjang') }}" class="kategori-card celana-panjang"><span>Celana Panjang</span></a>
                <a href="{{ route('subkategori.show', 'Celana Pendek') }}" class="kategori-card celana-pendek"><span>Celana Pendek</span></a>
                <a href="{{ route('subkategori.show', 'Jaket') }}" class="kategori-card jaket"><span>Jaket</span></a>
                <a href="{{ route('subkategori.show', 'Hoodie') }}" class="kategori-card hoodie"><span>Hoodie</span></a>
                <a href="{{ route('subkategori.show', 'Kemeja') }}" class="kategori-card kemeja"><span>Kemeja</span></a>
                <a href="{{ route('subkategori.show', 'Topi') }}" class="kategori-card topi"><span>Topi</span></a>
                <a href="{{ route('subkategori.show', 'Sepatu') }}" class="kategori-card sepatu"><span>Sepatu</span></a>
                <a href="{{ route('subkategori.show', 'Ikat Pinggang') }}" class="kategori-card ikat-pinggang"><span>Ikat Pinggang</span></a>
                <a href="{{ route('subkategori.show', 'Kacamata') }}" class="kategori-card kacamata"><span>Kacamata</span></a>
            </div>
        </div>
    </section>

    <!-- Produk Rekomendasi -->
    <h2>Rekomendasi</h2>
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
@endsection
