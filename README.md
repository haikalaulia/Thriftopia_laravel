<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
  </a>
</p>

<p align="center">
  <a href="https://github.com/laravel/framework/actions">
    <img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/l/laravel/framework" alt="License">
  </a>
</p>

---

# Thriftopia - Laravel Thrift Marketplace

## 👨‍💻 Kelompok Pengembang
- **Haikal Aulia** (2308017010063)  
- **Dwi Hamdan Sukran** (2308017010065)

Kami Mengerjakan Project Ini di dalam satu device karena salah satu laptop tidak mendukung

---

## 🛍️ Deskripsi Website Thriftopia
Thriftopia adalah sebuah platform e-commerce modern yang dirancang khusus untuk menyediakan berbagai pilihan produk fashion thrift (secondhand) yang berkualitas dan terjangkau. Dengan memadukan tampilan antarmuka yang bersih, navigasi yang intuitif, serta pengalaman pengguna yang ramah, Thriftopia hadir sebagai solusi digital bagi para pecinta fashion yang ingin tampil gaya tanpa harus menguras dompet.
Website ini dibangun untuk memfasilitasi pembelian barang-barang fashion bekas yang masih layak pakai dan memiliki nilai estetika tinggi. Tujuan utamanya adalah mendorong budaya belanja berkelanjutan (sustainable fashion) dan mengurangi limbah tekstil dengan cara memperpanjang umur pakaian melalui sirkulasi kembali di pasar.

## ✨ Fitur Unggulan
Tampilan Responsif dan Modern
Thriftopia didesain dengan antarmuka yang bersih, rapi, dan mudah dinavigasi, sehingga pengguna dapat menjelajahi website baik melalui komputer maupun perangkat seluler dengan nyaman.

Navigasi Kategori Lengkap
Website ini mengelompokkan produk ke dalam berbagai kategori seperti Baju Kaos, Jaket, Hoodie, Kemeja, Celana Panjang, Celana Pendek, Topi, Sepatu, dan Ikat Pinggang, yang ditampilkan secara visual agar pengguna dapat memilih dengan cepat dan tepat.

Fitur Pencarian Cepat
Disediakan kolom pencarian di bagian atas halaman, yang memungkinkan pengguna menemukan produk secara langsung berdasarkan kata kunci yang diinginkan.

Rekomendasi Produk
Sistem menampilkan produk-produk rekomendasi yang menarik, memberikan inspirasi berbelanja kepada pengguna sekaligus memperkenalkan item-item populer yang sedang tren.

User-Friendly Experience
Website dirancang dengan prinsip kemudahan penggunaan, di mana proses menemukan, melihat, dan membeli produk dapat dilakukan dengan langkah yang sederhana dan jelas.

---

## 🚀 Cara Menjalankan Proyek Laravel

Ikuti langkah-langkah berikut untuk menjalankan aplikasi ini secara lokal:

### 1. Clone Repository
```bash
git clone https://github.com/haikalaulia/Thriftopia_laravel.git
cd Thriftopia_laravel
```

### 2. Install Dependensi Backend
```bash
composer install
```

### 3. Salin File .env dari Template
```bash
cp .env.example .env
```

### 4. Konfigurasi Database
Edit file `.env` dan sesuaikan bagian berikut:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=thriftopia
DB_USERNAME=root
DB_PASSWORD=
```

### 5. Generate Application Key
```bash
php artisan key:generate
```

### 6. Import Database via phpMyAdmin
File databasenya berada di folder dumpfile
1. Buka `http://localhost/phpmyadmin`
2. Buat database baru dengan nama: `thriftopia`
3. Pilih database tersebut → klik tab **Import**
4. Pilih file SQL dump (`.sql`) dari folder proyek
5. Klik **Go**

### 7. Install Dependensi Frontend
```bash
npm install
```

### 8. Build Aset untuk Produksi
```bash
npm run build
```

### 9. Jalankan Server Frontend (Opsional)
```bash
npm run dev
```
*Jalankan ini saat mengembangkan agar perubahan frontend terlihat secara langsung.*

### 10. Jalankan Server Laravel
```bash
php artisan serve
```

Akses aplikasi di: **http://127.0.0.1:8000**

---

## 📚 Referensi Laravel
- 📘 [Dokumentasi Laravel](https://laravel.com/docs)
- 🚀 [Laravel Bootcamp](https://bootcamp.laravel.com)
- 🎥 [Laracasts](https://laracasts.com)
