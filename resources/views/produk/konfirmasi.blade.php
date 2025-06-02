@extends('layouts.app')

@section('content')
<div class="container">
    <div id="popup-berhasil" style="display: none; position:fixed; top:0; left:0; width:100%; height:100%; background:#00000080; z-index:999;">
        <div style="background:white; width:400px; margin:100px auto; padding:20px; border-radius:8px; position:relative;">
            <h3>Checkout Berhasil</h3>
            <p>Terima kasih! Anda telah berhasil melakukan checkout.</p>

            <ul class="mb-3">
                @foreach($produkDipilih as $item)
                    <li>{{ $item['nama'] }} - Rp{{ number_format($item['harga'] * $item['jumlah'], 0, ',', '.') }}</li>
                @endforeach
            </ul>
            <p><strong>Total Bayar: Rp{{ number_format($totalHarga, 0, ',', '.') }}</strong></p>

            <a href="{{ route('keranjang.index') }}" class="btn mt-3">Kembali ke Keranjang</a>
        </div>
    </div>
</div>

<script>
    // Tampilkan popup otomatis setelah halaman dimuat
    window.onload = function () {
        document.getElementById('popup-berhasil').style.display = 'block';
    }
</script>
@endsection
