@extends('layouts.app')

@section('content')
<div class="cart-container">
    <h2>Keranjang Belanja</h2>

    @if(count($keranjang) > 0)
        <form id="checkout-form" action="{{ route('keranjang.checkout') }}" method="POST">
            @csrf
            <table class="cart-table">
                <thead>
                    <tr>
                        <th>Pilih</th>
                        <th>Gambar</th>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($keranjang as $index => $item)
                        <tr>
                            <td>
                                <input type="checkbox" name="checkout_items[]" value="{{ $index }}" class="produk-checkbox" data-nama="{{ $item['nama'] }}" data-harga="{{ number_format($item['harga'], 0, ',', '.') }}">
                            </td>
                            <td>
                                <img src="{{ $item['gambar'] }}" alt="{{ $item['nama'] }}" style="width: 50px;">
                            </td>
                            <td>{{ $item['nama'] }}</td>
                            <td>Rp{{ number_format($item['harga'], 0, ',', '.') }}</td>
                            <td>
                                <a href="{{ route('keranjang.hapus', $index) }}">Hapus</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <button type="button" class="btn mt-3" onclick="showPopup()">Checkout</button>

            <!-- Popup -->
            <div id="popup" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:#00000080; z-index:999;">
                <div style="background:white; width:400px; margin:100px auto; padding:20px; border-radius:8px; position:relative;">
                    <h3>Konfirmasi Checkout</h3>
                    <ul id="popup-list" class="mb-4"></ul>
                    <button type="submit" class="btn">Konfirmasi</button>
                    <button type="button" onclick="hidePopup()" class="btn ml-2">Batal</button>
                </div>
            </div>
        </form>
    @else
        <p>Keranjang Anda kosong.</p>
    @endif
</div>

<script>
    function showPopup() {
        const checkboxes = document.querySelectorAll('.produk-checkbox:checked');
        const list = document.getElementById('popup-list');
        list.innerHTML = '';

        if (checkboxes.length === 0) {
            alert('Pilih produk terlebih dahulu!');
            return;
        }

        checkboxes.forEach(cb => {
            const nama = cb.dataset.nama;
            const harga = cb.dataset.harga;
            const li = document.createElement('li');
            li.textContent = `${nama} - Rp${harga}`;
            list.appendChild(li);
        });

        document.getElementById('popup').style.display = 'block';
    }

    function hidePopup() {
        document.getElementById('popup').style.display = 'none';
    }
</script>
@endsection

<style>
    /* Membuat checkbox berbentuk persegi 20x20 */
    input[type="checkbox"].produk-checkbox {
        width: 20px;
        height: 20px;
        appearance: none;
        -webkit-appearance: none;
        background-color: #fff;
        border: 2px solid #555;
        border-radius: 2px; /* persegi sedikit membulat */
        cursor: pointer;
        position: relative;
    }

    /* Styling saat dicentang */
    input[type="checkbox"].produk-checkbox:checked {
        background-color: #2563eb; /* biru */
        border-color: #2563eb;
    }

    /* Centang kotak dengan tanda ✔ */
    input[type="checkbox"].produk-checkbox:checked::after {
        content: '';
        color: white;
        font-size: 16px;
        position: absolute;
        top: 0;
        left: 3px;
    }
</style>
