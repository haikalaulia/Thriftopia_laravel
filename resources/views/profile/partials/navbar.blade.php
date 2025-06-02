<div class="navbar">
    <h1 class="logo">Thriftopia</h1>

    <form action="{{ route('produk.search') }}" method="GET" class="search-form">
        <input
            type="text"
            name="q"
            class="search-bar"
            placeholder="Cari..."
            value="{{ request('q') }}"
        >
    </form>

    <div class="icons">
        <a href="{{ route('produk.index') }}">
            <!-- ikon home atau kosong -->
        </a>

        <a href="{{ route('keranjang.index') }}" class="btn-cart">
            <img src="{{ asset('foto/cart.png') }}" alt="Cart" class="icon">
        </a>

        <!-- Bungkus tombol & dropdown profil dengan wrapper agar posisinya tidak bentrok -->
        <div class="profil-wrapper" style="position: relative;">
            <button id="profil-btn" class="btn-profil" type="button" style="background:none; border:none; cursor:pointer;">
                <img src="{{ asset('foto/profil.png') }}" alt="Profil" class="profil" />
            </button>

            <!-- Dropdown kecil -->
            <div id="profil-modal" class="dropdown" style="display:none;">
                <div class="dropdown-content">
                    <span id="close-modal" class="close">&times;</span>

                    @auth
                        <p style="color: black;">Halo, <strong>{{ Auth::user()->name }}</strong>!</p>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="btn-logout">Logout</button>
                        </form>
                    @else
                        <p style="color: black;">Silakan login terlebih dahulu untuk mengakses profil.</p>
                        <a href="{{ route('login') }}" class="btn-login">Login</a>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</div>

<div class="menu-navbar">   
    <a href="{{ url('dashboard') }}">
        <img src="{{ asset('foto/home.png') }}" alt="Home" class="menu-icon">
    </a>

    @foreach($kategoris as $kategori)
        <a href="{{ route('kategori.index', ['kategori' => $kategori]) }}">{{ $kategori }}</a>
    @endforeach
</div>

<style>
    .search-form {
    flex: 1;
    display: flex;
    justify-content: center;
}

    .search-bar {
        width: 100%;
        max-width: 500px;
        padding: 10px 15px;
        font-size: 14px;
        color: #000;
        background-color: #fff;
        border: 1px solid #ccc;
        border-radius: 8px;
    }

    .profil {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        vertical-align: middle;
    }

    .btn-cart .icon {
        width: 28px;
        height: 28px;
    }

    .navbar, .menu-navbar {
        display: flex;
        align-items: center;
        gap: 1rem;
        padding: 0.5rem 1rem;
    }

    /* Dropdown styles */
    .dropdown {
        position: absolute;
        top: 40px; /* di bawah tombol profil */
        right: 0;
        background-color: white;
        border: 1px solid #ccc;
        border-radius: 10px;
        box-shadow: 0 8px 20px rgba(0,0,0,0.1);
        min-width: 250px;
        padding: 15px 20px;
        z-index: 1000;
    }

    .dropdown-content {
        position: relative;
        text-align: center;
    }

    .close {
        position: absolute;
        top: 6px;
        right: 10px;
        font-size: 20px;
        font-weight: bold;
        cursor: pointer;
    }

    .btn-login, .btn-logout {
        display: inline-block;
        padding: 10px 20px;
        background-color: #2563eb;
        border: none;
        border-radius: 6px;
        color: white;
        font-weight: 600;
        cursor: pointer;
        text-decoration: none;
        margin-top: 15px;
        width: 100%;
    }

    .btn-login:hover, .btn-logout:hover {
        background-color: #1e40af;
    }

    .btn-cart .icon{
        background: transparent;
    width: 30px;
    margin-left: 25px;
    position: absolute; top: 13px; left: 1400px;
    }
    
    
</style>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const profilBtn = document.getElementById('profil-btn');
        const dropdown = document.getElementById('profil-modal');
        const closeBtn = document.getElementById('close-modal');

        profilBtn.addEventListener('click', () => {
            dropdown.style.display = (dropdown.style.display === 'block' || dropdown.style.display === '') ? 'none' : 'block';
        });

        closeBtn.addEventListener('click', () => {
            dropdown.style.display = 'none';
        });

        window.addEventListener('click', (event) => {
            if (!profilBtn.contains(event.target) && !dropdown.contains(event.target)) {
                dropdown.style.display = 'none';
            }
        });
    });
</script>
