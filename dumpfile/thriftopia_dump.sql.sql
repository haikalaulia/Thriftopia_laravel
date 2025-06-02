-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Jun 2025 pada 18.06
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thriftopia`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('laravel_cache_haikalaulia109@gmail.com|127.0.0.1', 'i:1;', 1748688112),
('laravel_cache_haikalaulia109@gmail.com|127.0.0.1:timer', 'i:1748688112;', 1748688112);

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(9, '0001_01_01_000000_create_users_table', 1),
(10, '0001_01_01_000001_create_cache_table', 1),
(11, '0001_01_01_000002_create_jobs_table', 1),
(12, '2025_05_31_051807_create_produks_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `produks`
--

CREATE TABLE `produks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `toko` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `subkategori` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id;nama;harga;toko;gambar;kategori;subkategori` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `produks`
--

INSERT INTO `produks` (`id`, `nama`, `harga`, `toko`, `gambar`, `kategori`, `subkategori`, `created_at`, `updated_at`, `id;nama;harga;toko;gambar;kategori;subkategori`) VALUES
(1, 'Blouse Floral', 50000, 'Thrift Atasan', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTLqsOF5jDOMGp8WGBE08DE9e4LJ9epEt5sVQ&s', 'Atasan', 'Baju Kaos', NULL, NULL, NULL),
(2, 'Kaos Polos', 25000, 'Kaos Murah', 'https://images.tokopedia.net/img/cache/500-square/product-1/2020/10/16/44177218/44177218_8d4d1bcb-c962-467b-b3ab-aba2d8110201_1200_1200', 'Atasan', 'Baju Kaos', NULL, NULL, NULL),
(3, 'Celana Adidas', 60000, 'Sporty Thrift', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQwEeI9eK9WZ5oTtDeLl0PYAjEiPkMfo9P_ug&s', 'Atasan', 'Celana Panjang', NULL, NULL, NULL),
(4, 'Kemeja Uniqlo', 70000, 'Kemeja Keren', 'https://image.uniqlo.com/UQ/ST3/AsianCommon/imagesgoods/431479/item/goods_66_431479_3x4.jpg?width=494', 'Atasan', 'Kemeja', NULL, NULL, NULL),
(5, 'Jaket Parasut', 70000, 'mantap store', 'https://down-id.img.susercontent.com/file/a92276a63bf8e89e943483f2f2894ab9', 'Atasan', 'Jaket', NULL, NULL, NULL),
(6, 'Hoodie Uniqlo', 70000, 'Hoodie', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSOOEnHgvui-tNunjawxxCdhhULxuRC3JHCVg&s', 'Atasan', 'Hoodie', NULL, NULL, NULL),
(7, 'Celana Jeans', 70000, 'Bawahan Store', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQHNW60A2_Q9u4pFviXXXmbdZS8bJv_9co_MQ&s', 'Bawahan', 'Celana Panjang', NULL, NULL, NULL),
(8, 'Rok Hitam', 55000, 'Thrift Rok', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTGg6QqIDwSa3HT00G_M5lCnQ47glr_HHvdlA&s', 'Bawahan', 'Rok', NULL, NULL, NULL),
(9, 'Celana Army', 45000, 'Celana Keren', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJZloELgM_phWmLLjtDs8WC42kCVj4xnm71w&s', 'Bawahan', 'Celana Panjang', NULL, NULL, NULL),
(10, 'Celana Kulot', 40000, 'Kulot Cantik', 'https://down-id.img.susercontent.com/file/id-11134207-7rasl-m2sbhfmo0wck37', 'Bawahan', 'Celana Panjang', NULL, NULL, NULL),
(11, 'Celana Pendek Consina', 40000, 'mantap store', 'https://static.birudaun.net.consina.com/wp-content/uploads/2023/01/2.jpg', 'Bawahan', 'Celana Pendek', NULL, NULL, NULL),
(12, 'Kacamata Hitam', 20000, 'AksesorisKeren', 'https://img.lazcdn.com/g/p/7fff832acf33a10a768816e4c92c9d8f.jpg_720x720q80.jpg', 'Aksesoris', 'Kacamata', NULL, NULL, NULL),
(13, 'Anting Cantik', 15000, 'Toko Aksesori', 'https://bucket-tmj-woocommerce.s3.ap-southeast-1.amazonaws.com/wp-content/uploads/2022/08/20095347/50.1.jpg', 'Aksesoris', 'Anting', NULL, NULL, NULL),
(14, 'Ikat Pinggang Kulit Buaya', 18000, 'Gaya Kulit', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSEcb5iU0ZfQz_fgogYUJGDRoy5-hJWK6_jxA&s', 'Aksesoris', 'Ikat Pinggang', NULL, NULL, NULL),
(15, 'Topi Brand', 70000, 'hatstore', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQInqYdl2qpMcSCbrqPlC4cqQ3nwYJtaWMeLA&s', 'Aksesoris', 'Topi', NULL, NULL, NULL),
(16, 'Topi Polo', 70000, 'hatstore', 'https://img.id.my-best.com/section_component/sub_contents/1dcc8627e76e73aea5dc469be4ccd053.jpeg?ixlib=rails-4.3.1&q=70&lossless=0&w=690&fit=max&s=adc137b9dbf8229660b033da4197ea86', 'Aksesoris', 'Topi', NULL, NULL, NULL),
(17, 'Sepatu Sneakers', 90000, 'Preloved Shoes', 'https://d12x8ezp3au6m3.akulaku.net/item/-tK149MvY78l6m8G34_C-kAkPmYjwGXZmidJdGFm9ag.jpg?w=726&q=80&fit=1', 'Sepatu', 'Sepatu', NULL, NULL, NULL),
(18, 'Sandal Nike', 30000, 'Toko Sandal', 'https://down-id.img.susercontent.com/file/2a23d4ce9f05806381d1450581e6007c', 'Sepatu', 'Sepatu', NULL, NULL, NULL),
(19, 'Flat Shoes', 25000, 'Flat Cantik', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRTFcwZkVOUnSgOlG3TpOw5-1nFXqvubw2nMQ&s', 'Sepatu', 'Sepatu', NULL, NULL, NULL),
(20, 'Sepatu Converse', 80000, 'Retro Shoes', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRiOkeNYCK5KJ6dC61BnO2eTvVTMxhecb0sbg&s', 'Sepatu', 'Sepatu', NULL, NULL, NULL),
(21, 'Sepatu Vans', 85000, 'Vans Store', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSgmKPbXTc5TT9PuuK66fkFXYMuyPkj_28JAA&s', 'Sepatu', 'Sepatu', NULL, NULL, NULL),
(22, 'Kaos Devis', 91800, 'Zalora Indonesia', 'https://dynamic.zacdn.com/rxXiPB3meR0wKOTwgMbWvNLYZ1o=/filters:quality(70):format(webp)/https://static-id.zacdn.com/p/orkids-wear-0342-2546134-4.jpg', 'Atasan', 'Baju Kaos', NULL, NULL, NULL),
(23, 'Kaos Kurta', 80000, 'desty store', 'https://static.desty.app/desty-store/mustmuslimstreetwear/product/7c57bfa846154b1caa32196aeb8ae617?x-oss-process=image/format,webp', 'Atasan', 'Baju Kaos', NULL, NULL, NULL),
(24, 'Kaos Eiger', 100000, 'Carousell', 'https://media.karousell.com/media/photos/products/2024/3/10/baju__kaos_eiger_original_seco_1710088928_e0a9a055.jpg', 'Atasan', 'Baju Kaos', NULL, NULL, NULL),
(25, 'Kaos Eiger Original', 120000, 'Carousell', 'https://down-id.img.susercontent.com/file/4c259bb31df6563ee3feb6fec23eb650', 'Atasan', 'Baju Kaos', NULL, NULL, NULL),
(26, 'Kaos Distro Adem', 102000, 'PaDi UMKM', 'https://smb-padiumkm-images-public-prod.oss-ap-southeast-5.aliyuncs.com/product/image/09022025/674f9a402079749f6a3a2954/67a82c49af08762e1523094c/32b06805c74fa2da2b6baf35e78eb4.jpg?x-oss-process=image/resize,m_pad,w_432,h_432/quality,Q_70', 'Atasan', 'Baju Kaos', NULL, NULL, NULL),
(27, 'Hoodie Essentials', 119000, 'Ubuy Indonesia', 'https://images-cdn.ubuy.co.id/635679b16742e7267254f368-yourhoody-fear-of-god-essentials-hoodie.jpg', 'Atasan', 'Hoodie', NULL, NULL, NULL),
(28, 'Hoodie WY Korea', 120000, 'Ubuy Indonesia', 'https://images.tokopedia.net/img/cache/700/VqbcmM/2021/5/3/e1809aaa-13cd-442d-ab8b-0c96a88a5a4d.jpg', 'Atasan', 'Hoodie', NULL, NULL, NULL),
(29, 'Retro Full Zip Hoodie', 141900, 'Converse', 'https://www.converse.id/media/catalog/product/cache/ae7cee22ac1ff58c2794c87414f27b45/0/8/0888-CONMJ21140010050XL-1.jpg', 'Atasan', 'Hoodie', NULL, NULL, NULL),
(30, 'House of Smith Hoodie', 128000, 'Smith', 'https://houseofsmith.co.id/wp-content/uploads/2022/10/Fontgage-Hood-6-a.jpg', 'Atasan', 'Hoodie', NULL, NULL, NULL),
(31, 'Newsboy Cap Wool', 50000, 'Apolo', 'https://www.elfs-shop.com/~img/to3_import_apolo_garis_cm0-cddd9-3073_7690-t2494_81.webp', 'Aksesoris', 'Topi', NULL, NULL, NULL),
(32, 'Topi Rimba', 50000, 'parto', 'https://parto.id/asset/foto_produk/3A423A52-233B-45BC-B282-5307270B0197.jpeg', 'Aksesoris', 'Topi', NULL, NULL, NULL),
(33, 'Kupluk Rajut', 17900, 'Urgentman', 'https://upload.jaknot.com/images/products/d12948/original/topi-kupluk-wool-korean-style-smiley-face.jpg', 'Aksesoris', 'Topi', NULL, NULL, NULL),
(34, 'Sepatu Jogging', 280000, 'Decathlon', 'https://contents.mediadecathlon.com/p2606751/k$5211ddac45b25d0224e88eb6ddac9ff3/sepatu-jogging-pria-run-active-biru-tua-kalenji-8559090.jpg?f=1920x0&format=auto', 'Sepatu', 'Sepatu', NULL, NULL, NULL),
(35, 'Topi Koboi', 54000, 'iStock', 'https://media.istockphoto.com/id/1184522745/id/foto/rodeo-horse-rider-wild-west-culture-americana-dan-american-country-music-concept-tema-dengan.jpg?s=612x612&w=0&k=20&c=tqeEkztaQyCXHsbbhAF9JUgDFH9rQGVZM39CPhDpMG0=', 'Aksesoris', 'Topi', NULL, NULL, NULL),
(36, 'Kacamata Sepeda', 68000, 'Rodalink', 'https://www.rodalink.com/pub/media/catalog/product/cache/image/680x510/e9c3970ab036de70892d86c6d221abfe/p/a/pa01597.jpg', 'Aksesoris', 'Kacamata', NULL, NULL, NULL),
(37, 'Frame Kacamata', 50000, 'Zalora Indonesia', 'https://dynamic.zacdn.com/KgOseU_ZT5aTY16tx_WRZ-Dy6t0=/filters:quality(70):format(webp)/https://static-id.zacdn.com/p/oppaglasses-5016-9122814-1.jpg', 'Aksesoris', 'Kacamata', NULL, NULL, NULL),
(38, 'Kacamata Anti radiasi', 40000, 'PaDi UMKM', 'https://smb-padiumkm-images-public-prod.oss-ap-southeast-5.aliyuncs.com/product/image/02102022/6323705cfa2b0fb2daa2d5a6/63398c74c9b7bda004829509/a56ff0bbb4a2d088ad39c849313794.jpg?x-oss-process=image/resize,m_pad,w_432,h_432/quality,Q_70', 'Aksesoris', 'Kacamata', NULL, NULL, NULL),
(39, 'Sabuk Military', 28000, 'Jadi Store', 'https://jadistore.com/wp-content/uploads/2021/01/rhodey-tali-ikat-pinggang-canvas-military-tactical-125cm-mu055-black-34.jpg', 'Aksesoris', 'Ikat Pinggang', NULL, NULL, NULL),
(40, 'Kalibre Sabuk ', 119000, 'Kalibre', 'https://s3-ap-southeast-1.amazonaws.com/cdn.jarvis-store.com/kalibre-upload/produk/large/20220207-101611.jpg', 'Aksesoris', 'Ikat Pinggang', NULL, NULL, NULL),
(41, 'Ikat Pinggang Kulit', 90000, 'PaDi UMKM', 'https://smb-padiumkm-images-public-prod.oss-ap-southeast-5.aliyuncs.com/product/image/21122022/6389a7d29f68e3ff02edcbfc/63a26a76ba6af2659da0c684/a54ecf3900d3bf83324b0b46cb0ff9.jpg?x-oss-process=image/resize,m_pad,w_432,h_432/quality,Q_70', 'Aksesoris', 'Ikat Pinggang', NULL, NULL, NULL),
(42, 'Boardshort Bokser', 34960, 'Blibli', 'https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//catalog-image/102/MTA-142959621/no_brands_celana_pendek_cowo_boardshort_pantai_boxer_full03_tn4sw094.jpg', 'Bawahan', 'Celana Pendek', NULL, NULL, NULL),
(43, 'Celana Pendek Katun', 50000, 'H&M Indonesia', 'https://d29c1z66frfv6c.cloudfront.net/pub/media/catalog/product/zoom/427521ba2f61321f29dea6083c2c38ca10c051f5_xxl-1.jpg', 'Bawahan', 'Celana Pendek', NULL, NULL, NULL),
(44, 'Celana Pendek Tali', 98000, 'H&M Indonesia', 'https://images.tokopedia.net/img/cache/500-square/VqbcmM/2021/3/24/e541d54b-1a7c-4b9b-9e4a-93ab105feafb.jpg', 'Bawahan', 'Celana Pendek', NULL, NULL, NULL),
(45, 'Jaket Bomber', 200000, 'Evernext ', 'https://images.tokopedia.net/img/cache/700/VqbcmM/2023/5/31/6727164d-4865-40c7-853d-ba58c81e291c.jpg', 'Atasan', 'Jaket', NULL, NULL, NULL),
(46, 'Jaket Varsity', 179000, 'Jadi Store', 'https://img.lazcdn.com/g/p/2b57248f0dc2433d73581c7fbb307b80.jpg_720x720q80.jpg', 'Atasan', 'Jaket', NULL, NULL, NULL),
(47, 'Jaket Bulu Angsa', 230000, 'woodfriend', 'https://hikenrun.com/cdn/shop/files/SKU-01_72bf9369-7fca-42f5-9a30-9d8fc1a03cdf.jpg?v=1747813634', 'Atasan', 'Jaket', NULL, NULL, NULL),
(48, 'Jaket Denim', 90000, 'Diamond Konveksi', 'https://konveksidiamond.com/wp-content/uploads/2023/02/Jaket-denim-jogja.jpeg', 'Atasan', 'Jaket', NULL, NULL, NULL),
(49, 'Jaket Gunung', 140000, 'Arei Outdoor', 'https://areioutdoorgear.co.id/wp-content/uploads/2022/12/47f7c1a2bfa90aa49a7684211b6a4975-1000x1000.jpg', 'Atasan', 'Jaket', NULL, NULL, NULL),
(50, 'Jaket Casual', 160000, 'Blibli', 'https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//catalog-image/101/MTA-134475815/brd-44261_jaket-pria-terbaru-jaket-casual-pria-terbaru-jaket-keren-stylis-pria_full03-8647b206.jpg', 'Atasan', 'Jaket', NULL, NULL, NULL),
(51, 'Kemeja Lengan Pendek', 88000, 'Tenue de Attire', 'https://tenuedeattire.com/cdn/shop/products/TDAJ23067_1.jpg?v=1744372096', 'Atasan', 'Kemeja', NULL, NULL, NULL),
(52, 'Sepatu Bola Kulit', 490000, 'Kipsta', 'https://contents.mediadecathlon.com/p2380087/k$555b63e7e5a697c49d66460cb004a64f/sepatu-bola-kulit-bertali-anak-viralto-ii-fg-hitam-lighting-kipsta-8767824.jpg?f=1920x0&format=auto', 'Sepatu', 'Sepatu', NULL, NULL, NULL),
(53, 'Sepatu Gunung', 600000, 'Arei Outdoor', 'https://areioutdoorgear.co.id/wp-content/uploads/2024/03/areioutdoorgear_20250426_680c6fe91fae7.webp', 'Sepatu', 'Sepatu', NULL, NULL, NULL),
(54, 'Sepatu PDH', 500000, 'Cartenz Tactical', 'https://cartenztactical.com/wp-content/uploads/2024/03/CIPP-028-SEPATU-PDH-SHOES-0.2-2.jpg', 'Sepatu', 'Sepatu', NULL, NULL, NULL),
(55, 'Sandal Crocs Baya', 685000, 'Ubuy Indonesia', 'https://images-cdn.ubuy.co.id/67c507bf35c8bd3b0c23f684-crocs-unisex-baya-clog.jpg', 'Sepatu', 'Sepatu', NULL, NULL, NULL),
(56, 'Sandal Swallow', 18000, 'PaDi UMKM', 'https://smb-padiumkm-images-public-prod.oss-ap-southeast-5.aliyuncs.com/product/image/27122024/676a67f2d26a15c580827d3f/676e565b62d8005ed7781418/6c9a27a5730b1512a8ae3fab785a60.jpg?x-oss-process=image/resize,m_pad,w_432,h_432/quality,Q_70', 'Sepatu', 'Sepatu', NULL, NULL, NULL),
(57, 'Kemeja Polos Lengan Panjang', 150000, 'Blibli', 'https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full/catalog-image/113/MTA-156964487/no-brand_kemeja-polos-pria-lengan-panjang-kemeja-slimfit_full05.jpg', 'Atasan', 'Kemeja', NULL, NULL, NULL),
(58, 'Kemeja Uniqlo Polos', 240000, 'Blibli', 'https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full/catalog-image/111/MTA-156964476/no-brand_kemeja-pria-kekinian-kemeja-casual-pria-terbaru-kemeja-polos-pria_full12.jpg', 'Atasan', 'Kemeja', NULL, NULL, NULL),
(59, 'Kemeja Hitam', 180000, 'H&M Indonesia', 'https://d29c1z66frfv6c.cloudfront.net/pub/media/catalog/product/zoom/86b6f0a5fa2daf8c1292f8857e6905e3e18e8904_xxl-1.jpg', 'Atasan', 'Kemeja', NULL, NULL, NULL),
(60, 'Kemeja Putih', 180000, 'H&M Indonesia', 'https://cdn.idntimes.com/content-images/post/20240417/119744-ed45eca513e380ec415c9b8ea54c3c06.jpg', 'Atasan', 'Kemeja', NULL, NULL, NULL),
(61, 'Kemeja H&M', 200000, 'H&M Indonesia', 'https://img.lazcdn.com/g/p/6d38b6b10d9ecdc313d97492e25a187e.jpg_720x720q80.jpg', 'Atasan', 'Kemeja', NULL, NULL, NULL),
(62, 'Celana Panjang Cargo', 180000, 'Solognac', 'https://contents.mediadecathlon.com/p2696025/k$4e89727db748269941fc755f6de87acd/celana-panjang-cargo-berburu-pria-light-500-hijau-solognac-8842662.jpg?f=1920x0&format=auto', 'Bawahan', 'Celana Panjang', NULL, NULL, NULL),
(63, 'Celana Denim ', 170000, 'Jeans', 'https://www.elfs-shop.com/~img/cjj_soft_jeans_ripped_emblem_bt2-deab4-3073_8791-t2494_81.webp', 'Bawahan', 'Celana Panjang', NULL, NULL, NULL),
(64, 'Celana Chino Panjang', 200000, 'Cardinal', 'https://cardinal.co.id/cdn/shop/files/GBUBPP0019_03D_1.jpg?v=1738903538', 'Bawahan', 'Celana Panjang', NULL, NULL, NULL),
(65, 'Kemeja Kotak-kotak', 150000, 'Blibli', 'https://sampurasun.co.id/wp-content/uploads/2022/06/Kemeja-Pria.webp', 'Atasan', 'Kemeja', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('ftUZjVvSKkZErXytiZO3gnbOuj63ZXyZg5NJPqUM', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiNFgzOXllM0s3cXM4cFNKSE1ud3B2WVU1SlRFbDBwZjN3aTBCb21tRiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1748793797);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Haikal Aulia', 'haikal09@gmail.com', NULL, '$2y$12$SWYwrnGzZXC5vMxJx2B9WOQLy75y6BiT4oOIoUs1/K3bEV8cWwqB2', NULL, '2025-05-30 23:01:38', '2025-05-30 23:01:38'),
(2, 'haikal aulia', 'haikal@gmail.com', NULL, '$2y$12$8QoPEgIoNFYcquiAP1DcA.XPd7l6sdwX.DUS4N58o4TmWXT4m3kLe', NULL, '2025-06-01 08:01:04', '2025-06-01 08:01:04');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indeks untuk tabel `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `produks`
--
ALTER TABLE `produks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `produks`
--
ALTER TABLE `produks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
