-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Mar 2024 pada 06.00
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kopi_gembira`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_category` varchar(255) NOT NULL,
  `name_category_slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `name_category`, `name_category_slug`, `created_at`, `updated_at`) VALUES
(1, 'Coffee', 'coffee', '2024-03-03 07:58:21', '2024-03-03 07:58:21'),
(2, 'Tea And Beverages', 'tea-and-beverages', '2024-03-03 07:58:21', '2024-03-03 07:58:21'),
(3, 'Grinders', 'grinders', '2024-03-03 07:58:21', '2024-03-03 07:58:21'),
(4, 'Coffee Machines', 'coffee-machines', '2024-03-03 07:58:21', '2024-03-03 07:58:21'),
(5, 'Manual Brewers', 'manual-brewers', '2024-03-03 07:58:21', '2024-03-03 07:58:21'),
(6, 'Coffee Tools', 'coffee-tools', '2024-03-03 07:58:21', '2024-03-03 07:58:21');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_01_24_073118_create_categories_table', 1),
(6, '2024_02_18_170540_create_tb_barangs_table', 1),
(7, '2024_02_24_131407_create_tb_transaksis_table', 1),
(8, '2024_02_24_150020_create_tb_rincian_transaksis_table', 1),
(9, '2024_02_27_054545_create_sub_categories_table', 1),
(10, '2024_02_28_054555_create_tb_ukuran_gilingan_kopis_table', 1),
(11, '2024_03_03_145711_create_tb_rincian_transaksi_twos_table', 1);

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
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_category` varchar(255) NOT NULL,
  `name_category_slug` varchar(255) NOT NULL,
  `id_kategori` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) DEFAULT NULL,
  `image_category` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `name_category`, `name_category_slug`, `id_kategori`, `category`, `image_category`, `created_at`, `updated_at`) VALUES
(1, 'Coffee Beans', 'coffee-beans', 1, 'coffee', 'coffee-beans.jpg', '2024-03-03 07:58:21', '2024-03-03 07:58:21'),
(2, 'Drip Coffee', 'drip-coffee', 1, 'coffee', 'drip-coffee.jpg', '2024-03-03 07:58:21', '2024-03-03 07:58:21'),
(3, 'Cold Brew', 'cold-brew', 1, 'coffee', 'cold-brew.jpg', '2024-03-03 07:58:21', '2024-03-03 07:58:21'),
(4, 'Ready To Drink', 'ready-to-drink', 1, 'coffee', 'ready-to-drink.jpg', '2024-03-03 07:58:21', '2024-03-03 07:58:21'),
(5, 'Kopi Luwak', 'kopi-luwak', 1, 'coffee', 'kopi-luwak.jpg', '2024-03-03 07:58:21', '2024-03-03 07:58:21'),
(6, 'Green Bean', 'green-bean', 1, 'coffee', 'green-bean.jpg', '2024-03-03 07:58:21', '2024-03-03 07:58:21'),
(7, 'Capsules', 'capsules', 1, 'coffee', 'capsules.jpg', '2024-03-03 07:58:21', '2024-03-03 07:58:21'),
(8, 'Syrups', 'syrups', 2, 'tea-and-beverages', 'syrups.jpg', '2024-03-03 07:58:21', '2024-03-03 07:58:21'),
(9, 'Powder', 'powder', 2, 'tea-and-beverages', 'powder.jpg', '2024-03-03 07:58:21', '2024-03-03 07:58:21'),
(10, 'Tea', 'tea', 2, 'tea-and-beverages', 'tea.jpg', '2024-03-03 07:58:21', '2024-03-03 07:58:21'),
(11, 'Milk And Dairy', 'milk-and-dairy', 2, 'tea-and-beverages', 'milk-and-dairy.jpg', '2024-03-03 07:58:21', '2024-03-03 07:58:21'),
(12, 'Electric Grinder', 'electric-grinder', 3, 'grinders', 'electric-grinder.jpg', '2024-03-03 07:58:21', '2024-03-03 07:58:21'),
(13, 'Manual Grinder', 'manual-grinder', 3, 'grinders', 'manual-grinder.jpg', '2024-03-03 07:58:21', '2024-03-03 07:58:21'),
(14, 'Electric Grinder Sparepart', 'electric-grinder-sparepart', 3, 'grinders', 'electric-grinder-sparepart.jpg', '2024-03-03 07:58:21', '2024-03-03 07:58:21'),
(15, 'Manual Grinder Sparepart', 'manual-grinder-sparepart', 3, 'grinders', 'manual-grinder-sparepart.jpg', '2024-03-03 07:58:21', '2024-03-03 07:58:21'),
(16, 'Fully Automatic Espresso Machines', 'fully-automatic-espresso-machines', 4, 'coffee-machines', 'fully-automatic-espresso-machines.jpg', '2024-03-03 07:58:21', '2024-03-03 07:58:21'),
(17, 'Mesin Kopi untuk Cafe', 'mesin-kopi-untuk-cafe', 4, 'coffee-machines', 'mesin-kopi-untuk-cafe.jpg', '2024-03-03 07:58:21', '2024-03-03 07:58:21'),
(18, 'Home Espresso Machines', 'home-espresso-machines', 4, 'coffee-machines', 'home-espresso-machines.jpg', '2024-03-03 07:58:21', '2024-03-03 07:58:21'),
(19, 'Automatic Coffee Brewers', 'automatic-coffee-brewers', 4, 'coffee-machines', 'automatic-coffee-brewers.jpg', '2024-03-03 07:58:21', '2024-03-03 07:58:21'),
(20, 'Spareparts', 'spareparts', 4, 'coffee-machines', 'spareparts.jpg', '2024-03-03 07:58:21', '2024-03-03 07:58:21'),
(21, 'Espresso Maker', 'espresso-maker', 5, 'manual-brewers', 'espresso-maker.jpg', '2024-03-03 07:58:21', '2024-03-03 07:58:21'),
(22, 'Pour Over', 'pour-over', 5, 'manual-brewers', 'pour-over.jpg', '2024-03-03 07:58:21', '2024-03-03 07:58:21'),
(23, 'French Press', 'french-press', 5, 'manual-brewers', 'french-press.jpg', '2024-03-03 07:58:21', '2024-03-03 07:58:21'),
(24, 'Mokapot', 'mokapot', 5, 'manual-brewers', 'mokapot.jpg', '2024-03-03 07:58:21', '2024-03-03 07:58:21'),
(25, 'Vietnam Drip', 'vietnam-drip', 5, 'manual-brewers', 'vietnam-drip.jpg', '2024-03-03 07:58:21', '2024-03-03 07:58:21'),
(26, 'All In One', 'all-in-one', 5, 'manual-brewers', 'all-in-one.jpg', '2024-03-03 07:58:21', '2024-03-03 07:58:21'),
(27, 'Press Brewers', 'press-brewers', 5, 'manual-brewers', 'press-brewers.jpg', '2024-03-03 07:58:21', '2024-03-03 07:58:21'),
(28, 'Cold Brewers', 'cold-brewers', 5, 'manual-brewers', 'cold-brewers.jpg', '2024-03-03 07:58:21', '2024-03-03 07:58:21'),
(29, 'Syphon', 'syphon', 5, 'manual-brewers', 'syphon.jpg', '2024-03-03 07:58:21', '2024-03-03 07:58:21'),
(30, 'Turkish Pot', 'turkish-pot', 5, 'manual-brewers', 'turkish-pot.jpg', '2024-03-03 07:58:21', '2024-03-03 07:58:21'),
(31, 'Tea Brewers', 'tea-brewers', 5, 'manual-brewers', 'tea-brewers.jpg', '2024-03-03 07:58:21', '2024-03-03 07:58:21'),
(32, 'Kettles', 'kettles', 6, 'coffee-tools', 'kettles.jpg', '2024-03-03 07:58:21', '2024-03-03 07:58:21'),
(33, 'Filters', 'filters', 6, 'coffee-tools', 'filters.jpg', '2024-03-03 07:58:21', '2024-03-03 07:58:21'),
(34, 'Servers', 'servers', 6, 'coffee-tools', 'servers.jpg', '2024-03-03 07:58:21', '2024-03-03 07:58:21'),
(35, 'Canisters', 'canisters', 6, 'coffee-tools', 'canisters.jpg', '2024-03-03 07:58:21', '2024-03-03 07:58:21'),
(36, 'Measuring Spoon', 'measuring-spoon', 6, 'coffee-tools', 'measuring-spoon.jpg', '2024-03-03 07:58:21', '2024-03-03 07:58:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barangs`
--

CREATE TABLE `tb_barangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_barang` varchar(255) NOT NULL,
  `slug_name_barang` varchar(255) NOT NULL,
  `keterangan_barang` text DEFAULT NULL,
  `id_kategori_barang` bigint(20) UNSIGNED NOT NULL,
  `kategori_barang` varchar(255) DEFAULT NULL,
  `slug_category_barang` varchar(255) DEFAULT NULL,
  `harga_barang` int(11) DEFAULT NULL,
  `berat_barang` int(11) DEFAULT NULL,
  `gambar_barang` text DEFAULT NULL,
  `stok_barang` int(11) DEFAULT NULL,
  `keterangan_pesanan` varchar(255) DEFAULT NULL,
  `id_gilingan` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_barangs`
--

INSERT INTO `tb_barangs` (`id`, `name_barang`, `slug_name_barang`, `keterangan_barang`, `id_kategori_barang`, `kategori_barang`, `slug_category_barang`, `harga_barang`, `berat_barang`, `gambar_barang`, `stok_barang`, `keterangan_pesanan`, `id_gilingan`, `created_at`, `updated_at`) VALUES
(1, 'Crema Espresso - Kopi House Blend 500gr', 'crema-espresso-kopi-house-blend-500gr', 'Crema Espresso - Kopi House Blend 500gr\n\n            Kopi Crema Espresso diracik sempurna kombinas antara kopi Arabika Gayo Atu Lintang dengan kopi Robusta Dampit, sehingga menciptakan rasa begitu berkesan seperti kacang panggang, manis karamel dan cokelat hitam. Disangrai begitu khas dengan level medium dark roast untuk mengoptimalkan karakter rasa, memiliki cita rasa yang kuat sangat tepat untuk espresso dan variasi resep kopi susu.\n            Paling populer dan banyak yang menyukainya, Anda buktikan segera coba kreasikan sajian kopi favorit dengan ini. Crema Espresso - Kopi House Blend 500gr merupakan biji kopi premium blend, racikan biji kopi terbaik yang disangrai teliti untuk lebih mengoptimalkan lagi kompleksitas rasa. Profil rasa inilah yang membuat premium blend Crema Espresso selalu dipesan kembali untuk kebutuhan sajian espresso di kedai kopi ataupun rumahan. Keunikan rasa yang tercipta rahasianya ada pada racikan tepat arabika aceh dan robusta dampit, penasaran ingin mencobanya? Otten Coffee sangat senang untuk merekomendasikannya pada Anda.\n            Crema Espresso sesuai namanya, espresso yang tercipta akan menghasilkan crema yang kaya. Dan bukan rahasia umum lagi, crema adalah syarat wajib sajian espresso yang nikmat. Untuk lebih mengetahui potensi apa yang ada pada crema espresso, Anda harus mencobanya sendiri, kreasikan potensi sajian resep kopi lain dengan crema espresso.\n            Anda juga bisa pesan kopi Crema Espresso dalam bentuk biji kopi maupun bubuk kopi yang digiling begitu presisi sesuai pilihan alat seduh.\n            Tunggu apa lagi, masukkan ke keranjang belanja Anda sekarang juga, dan pesan hanya di ottencoffee.co.id\n            ---\n\n            Kesegaran aroma biji kopi Anda terjaga karena menggunakan kemasan lapisan alumunium dengan fitur One Way Air Valve dan Zip Lock.\n            Pemesanan dalam bentuk bubuk, biji kopi digiling dengan mesin penggiling kokoh dari Mahlkonig sesaat kopi akan dikirimkan ke Anda.\n            Rekomendasi level gilingan:\n            Super fine: Turkish coffee\n            Fine: Espresso\n            Medium fine: Mokapot\n            Medium: Pour over (V60, Chemex, Kalita) syphon, Aeropress, Vietnam Drip\n            Medium coarse: French press\n            Coarse: Cold drip, cold brew​', 1, 'Coffee Beans', 'coffee-beans', 119000, 500, 'crema-espresso-kopi-house-blend-500gr.jpg', 388, NULL, 1, '2024-03-03 07:58:21', '2024-03-04 09:55:26'),
(2, 'Kopi Susu Blend - 500gr', 'kopi-susu-blend-500gr', 'Kopi Susu Blend - 500gr\n\n            Kopi Susu Blend ini perpaduan dari Arabika Gayo Atu Lintang dan Robusta Temanggung diracik sempurna dengan nama Susu Blend yang memiliki cita rasa cokelat hitam, kesan rasa kacang panggang dan gurih, karakter rasa yang kuat. Susu Blend ini tergolong komersial yang sangat cocok untuk kebutuhan kedai kopi dan paling direkomendasikan untuk penggunaan espresso. Cita rasa espresso yang nikmat dan sesuai untuk membuat variasi resep kopi yang enak.\n            Kopi Susu Blend, Biji kopi pilihan eksklusif, diracik khusus dan didedikasikan untuk para pecinta kopi susu nusantara. Sangat mudah menemukan rasio tepat untuk konsistensi rasa hanya dengan menggunakan Kopi Susu Blend di tiap seduhannya. Oleh karena itu, Otten Coffee antusias merekomendasikan racikan kopi istimewa ini untuk kebutuhan sajian kopi susu di rumah dan bahkan cocok sebagai persediaan kopi untuk kebutuhan bisnis kedai kopi Anda.\n            Sajian kopi susu dengan biji kopi berkualitas akan memberikan pengalaman menikmati kopi di rumah ataupun untuk pelanggan di kedai kopi anda. Karakter Kopi Susu Blend memberikan kesan aftertaste yang panjang dengan body yang kuat serta memiliki profil rasa coklat hitam, umami, kacang panggang. Kopi Susu Blend akan menjadi favorit baru Anda dalam penyajian setiap hari dengan tambahan rasa yang juga bisa Anda sesuaikan jika ingin menambahkan syrup. ​\n            Anda juga bisa pesan kopi Susu Blend dalam bentuk biji kopi maupun bubuk kopi yang digiling begitu presisi sesuai pilihan alat seduh.\n            Tunggu apa lagi, masukkan ke keranjang belanja Anda sekarang juga, dan pesan hanya di ottencoffee.co.id\n            ---\n            Kesegaran aroma biji kopi Anda terjaga karena menggunakan kemasan lapisan alumunium dengan fitur One Way Air Valve dan Zip Lock.\n            Pemesanan dalam bentuk bubuk, biji kopi digiling dengan mesin penggiling kokoh dari Mahlkonig sesaat kopi akan dikirimkan ke Anda.\n            Rekomendasi level gilingan:\n            Super fine: Turkish coffee\n            Fine: Espresso\n            Medium fine: Mokapot\n            Medium: Pour over (V60, Chemex, Kalita) syphon, Aeropress, Vietnam Drip\n            Medium coarse: French press\n            Coarse: Cold drip, cold brew​\n            ---\n            \n            Cara Mudah Membuat Sajian Kopi Susu Sesuai Selera\n\n            1. Persiapkan alat kopi favorit (rekomendasi: Manual Espresso Maker seperti Flair, Staresso, Leverpresso)\n            2. Lakukan pre-heat pada peralatan dan cangkir, serta giling halus Kopi Susu Blend\n            3. Sesuaikan kebutuhan rasio kopi (gram) dan jumlah air seduhan (ml) (suhu 92-96° C), kemudian lakukan proses seduh menggunakan Manual Espresso Maker\n            4. Ketika espresso telah selesai, sesuaikan kebutuhan susu yang digunakan,\n            5. Susu Kental Manis untuk sajian kopi susu yang nikmat nan berkesan\n            6. Susu Segar untuk sajian latte dengan tekstur lembut yang istimewa\n            7. Anda bisa melakukan improvisasi selama proses menyajikan kopi susu, sesuaikan sajian dengan selera, disajikan hangat lebih nikmat, dingin pun rasanya menarik.\n            8. Opsional pada tahap akhir, menambahkan sedikit ekstrak sirup atau bubuk matcha akan menciptakan sajian kopi susu yang luar biasa Kemasan Kopi Susu Blend mampu menjaga kesegaran biji kopi hingga proses seduh, komposisi 500 gram untuk ragam keperluan, dari seduh kopi di rumah hingga bisnis kedai kopi. Ketika menyeduh kopi susu, sesuaikan varian susu favorit Anda untuk cita rasa sesuai selera.', 1, 'Coffee Beans', 'coffee-beans', 74000, 500, 'kopi-susu-blend-500gr.jpg', 400, NULL, 1, '2024-03-03 07:58:21', '2024-03-03 07:58:21'),
(3, 'Golden Crema - Kopi House Blend 500gr', 'golden-crema-kopi-house-blend-500gr', 'Golden Crema - Kopi House Blend 500gr\n\n            Kopi Golden Crema merupakan perpaduan antara Arabika Mandheling Wet Process dan Robusta Temanggung, diracik begitu teliti dengan nama Golden Crema yang memiliki cita rasa cokelat, jeruk, biji-bijian gandum dan rempah. Direkomendasikan untuk penggunaan mesin espresso, paling sesuai untuk kebutuhan kedai kopi maupun variasi resep kopi enak dari espresso.\n            Rasakan pengalaman mencoba biji kopi terbaru ini, Golden Crema pun mampu hasilkan espresso dengan crema yang tebal estetis. Kesan rasa yang cukup lama dengan karakter rasa keseluruhan begitu seimbang. Tantang diri Anda untuk menemukan cita rasa terbaik maupun resep kopi favorit dengan Golden Crema.\n            Anda juga bisa pesan kopi Golden Crema dalam bentuk biji kopi maupun bubuk kopi yang digiling begitu presisi sesuai pilihan alat seduh.\n            Tunggu apa lagi, masukkan ke keranjang belanja Anda sekarang juga, dan pesan hanya di ottencoffee.co.id\n            ---\n            Kesegaran aroma biji kopi Anda terjaga karena menggunakan kemasan lapisan alumunium dengan fitur One Way Air Valve dan Zip Lock.\n            Pemesanan dalam bentuk bubuk, biji kopi digiling dengan mesin penggiling kokoh dari Mahlkonig sesaat kopi akan dikirimkan ke Anda.\n\n            Rekomendasi level gilingan:\n\n            Super fine: Turkish coffee\n            Fine: Espresso\n            Medium fine: Mokapot\n            Medium: Pour over (V60, Chemex, Kalita) syphon, Aeropress, Vietnam Drip\n            Medium coarse: French press\n            Coarse: Cold drip, cold brew​', 1, 'Coffee Beans', 'coffee-beans', 125000, 500, 'golden-crema-kopi-house-blend-500gr.jpg', 265, NULL, 1, '2024-03-03 07:58:21', '2024-03-04 09:40:39'),
(4, 'Premium Arabica - Kopi House Blend 500gr', 'premium-arabica-kopi-house-blend-500gr', 'Premium Arabica - Kopi House Blend 500gr\n\n            Kopi Blend Arabika diracik premium sehingga hadirkan cita rasa buah ceri hitam yang kaya, dengan ketebalan rasa layaknya sirup, tingkat keasaman rendah berkarakter cokelat, keseluruhan rasanya begitu alami. Premium arabica ini tergolong kopi komersial untuk kedai kopi dan paling tepat untuk penggunaan mesin espresso. Cita rasa espresso yang dihasilkan begitu nikmat, sesuai untuk membuat variasi resep kopi yang enak.\n            Anda juga bisa pesan kopi Premium Arabica dalam bentuk biji kopi maupun bubuk kopi yang digiling begitu presisi sesuai pilihan alat seduh.\n            Tunggu apa lagi, masukkan ke keranjang belanja Anda sekarang juga, dan pesan hanya di ottencoffee.co.id\n            ---\n            Kesegaran aroma biji kopi Anda terjaga karena menggunakan kemasan lapisan alumunium dengan fitur One Way Air Valve dan Zip Lock.\n            Pemesanan dalam bentuk bubuk, biji kopi digiling dengan mesin penggiling kokoh dari Mahlkonig sesaat kopi akan dikirimkan ke Anda.\n            Rekomendasi level gilingan:\n\n            Super fine: Turkish coffee\n            Fine: Espresso\n            Medium fine: Mokapot\n            Medium: Pour over (V60, Chemex, Kalita) syphon, Aeropress, Vietnam Drip\n            Medium coarse: French press\n            Coarse: Cold drip, cold brew​', 1, 'Coffee Beans', 'coffee-beans', 107000, 500, 'premium-arabica-kopi-house-blend-500gr.jpg', 390, NULL, 1, '2024-03-03 07:58:21', '2024-03-03 07:58:21'),
(5, 'Sidikalang 200g Kopi Arabica', 'sidikalang-200g-kopi-arabica', 'Sidikalang 200g Kopi Arabica\n\n            Kopi Arabika Sidikalang memiliki aroma yang khas memikat dengan perpaduan cita rasa teh hitam, cokelat dan rasa yang alami. Biji kopi yang berasal dari ketinggian 1350 mdpl di wilayah Sidikalang kabupaten Dairi provinsi Sumatera Utara ini setelah panen diproses giling basah (semi washed). Kemudian disangrai dengan sempurna pada level medium dark untuk mengoptimalkan cita rasa paling istimewa.\n            Rasakan pengalaman menyeduh kopi arabika Sidikalang dengan alat kopi favorit Anda seperti pour over V60 maupun french press. Temukan resep kopi yang paling sesuai dengan selera Anda. Tiap tegukan begitu berkesan, mengingatkan kopi pertama yang membuat Anda jatuh cinta.\n            Anda juga bisa pesan single origin Sidikalang dalam bentuk biji kopi maupun bubuk kopi yang digiling begitu presisi sesuai pilihan alat seduh.\n            Tunggu apa lagi, masukkan ke keranjang belanja Anda sekarang juga, dan pesan hanya di ottencoffee.co.id\n            ---\n            Kesegaran aroma biji kopi Anda terjaga karena menggunakan kemasan lapisan alumunium dengan fitur One Way Air Valve dan Zip Lock.\n            Pemesanan dalam bentuk bubuk, biji kopi digiling dengan mesin penggiling kokoh dari Mahlkonig sesaat kopi akan dikirimkan ke Anda.\n\n            Rekomendasi level gilingan:\n\n            Super fine: Turkish coffee\n            Fine: Espresso\n            Medium fine: Mokapot\n            Medium: Pour over (V60, Chemex, Kalita) syphon, Aeropress, Vietnam Drip\n            Medium coarse: French press\n            Coarse: Cold drip, cold brew​', 1, 'Coffee Beans', 'coffee-beans', 84000, 200, 'sidikalang-200g-kopi-arabica.jpg', 247, NULL, 1, '2024-03-03 07:58:21', '2024-03-03 07:58:21'),
(6, 'Aceh Gayo Atu Lintang 200g Kopi Arabica', 'aceh-gayo-atu-lintang-200g-kopi-arabica', 'Aceh Gayo Atu Lintang 200g Kopi Arabica\n\n            Kopi Arabika Aceh Gayo Atu Lintang menyimpan cita rasa gula merah, sensasi kulit jeruk, jahe dan buah pala, temukan perpaduan khas ini di setiap seduhan kopi Anda. Biji kopi yang berasal dari ketinggian 1.500 mdpl gampong Atu Lintang wilayah Gayo kabupaten Aceh Tengah provinsi Aceh, hasil panennya diproses giling basah (semi washed) yang kemudian disangrai sempurna level medium roast untuk memaksimalkan cita rasa.\n            Tantang diri Anda untuk menyeduh kopi arabika aceh gayo atu lintang dengan alat seduh kopi favorit seperti pour over v60 maupun cara seduh tradisional. Temukan resep kopi paling istimewa di setiap momen minum kopi Anda, rasakan bagaimana kopi ini mampu menjangkau selera Anda.\n            Anda juga bisa pesan kopi arabika aceh gayo atu lintang dalam bentuk biji kopi maupun bubuk kopi yang digiling begitu presisi sesuai pilihan alat seduh.\n            Tunggu apa lagi, masukkan ke keranjang belanja Anda sekarang juga, dan pesan hanya di ottencoffee.co.id\n            ---\n            Kesegaran aroma biji kopi Anda terjaga karena menggunakan kemasan lapisan alumunium dengan fitur One Way Air Valve dan Zip Lock.\n            Pemesanan dalam bentuk bubuk, biji kopi digiling dengan mesin penggiling kokoh dari Mahlkonig sesaat kopi akan dikirimkan ke Anda.\n            Rekomendasi level gilingan:\n            Super fine: Turkish coffee\n            Fine: Espresso\n            Medium fine: Mokapot\n            Medium: Pour over (V60, Chemex, Kalita) syphon, Aeropress, Vietnam Drip\n            Medium coarse: French press', 1, 'Coffee Beans', 'coffee-beans', 79000, 200, 'aceh-gayo-atu-lintang-200g-kopi-arabica.jpg', 190, NULL, 1, '2024-03-03 07:58:21', '2024-03-03 07:58:21'),
(7, 'Drip Coffee 10g Arabica Toraja Sapan (4 Sachet)', 'drip-coffee-10g-arabica-toraja-sapan-(4 Sachet)', 'Drip Coffee Arabica Toraja \n            MENIKMATI kopi nikmat ketika bepergian atau saat bertualang ke alam bebas kini bukan lagi masalah. Jika Anda tidak ingin bepergian dengan repot dan membawa alat-alat kopi, maka opsi Drip Coffee dari Otten Coffee ini mungkin akan menjadi piliahan yang paling pas untuk Anda.\n            Drip Coffee adalah kemasan kopi siap minum yang sangat praktis karena Anda hanya tinggal perlu menyobek bagian luarnya dan mengeluarkan bagian dalam yang telah dilengkapi dengan filter. Bagian filter inilah yang kemudian hanya tinggal perlu diseduh dengan air panas dan bisa bagian filter ini bisa diseduh di atas wadah cangkir apa saja. Kopi yang tersedia dalam set coffee drip ini pun telah digiling menurut ukuran kebutuhan seduh ala filter coffee, yaitu medium dan dengan takaran gramasi yang khusus untuk keperluan perorangan. Karenanya set coffee drip ini benar-benar sangat praktis untuk dibawa bepergian.\n            Set coffee drip Toraja ini adalah kopi-kopi siap minum dari single origin Toraja Sapan. Single origin Toraja Sapan sendiri merupakan salah satu single origin favorit di Otten Coffee karena karakternya yang eksotis dan menarik.\n            Tasting notes Toraja Sapan: full body, dark chocolate yang cukup panjang, ada taste herbal dengan acidity cukup tajam dan sweet spicy. –Satu set coffee drip Toraja terdiri dari 4 pieces.', 2, 'Drip Coffe', 'drip-coffee', 70000, 10, 'drip-coffee-10g-arabica-toraja-sapan-(4 Sachet).jpg', 300, NULL, 0, '2024-03-03 07:58:21', '2024-03-03 07:58:21'),
(8, 'Drip Coffee 10g Arabica Aceh Gayo Atu Lintang (4 Sachet)', 'drip-coffee-10g-arabica-aceh-gayo-atu-lintang-(4 Sachet)', 'Drip Coffee 10g Arabica Gayo Atu Lintang\n            MENIKMATI kopi nikmat ketika bepergian atau saat bertualang ke alam bebas kini bukan lagi masalah. Jika Anda tidak ingin bepergian dengan repot dan membawa alat-alat kopi, maka opsi Drip Coffee dari Otten Coffee ini mungkin akan menjadi piliahan yang paling pas untuk Anda.\n            Drip Coffee adalah kemasan kopi siap minum yang sangat praktis karena Anda hanya tinggal perlu menyobek bagian luarnya dan mengeluarkan bagian dalam yang telah ‘dilengkapi’ dengan filter. Bagian filter inilah yang kemudian hanya tinggal perlu diseduh dengan air panas dan bisa bagian filter ini bisa diseduh di atas wadah cangkir apa saja. Kopi yang tersedia dalam set coffee drip ini pun telah digiling menurut ukuran kebutuhan seduh ala filter coffee, yaitu medium dan dengan takaran gramasi yang khusus untuk keperluan perorangan. Karenanya set coffee drip ini benar-benar sangat praktis untuk dibawa bepergian. –Satu set coffee drip Gayo Atu Lintang terdiri dari 4 pieces.', 2, 'Drip Coffee', 'drip-coffee', 60000, 10, 'drip-coffee-10g-arabica-aceh-gayo-atu-lintang-(4 Sachet).jpg', 700, NULL, 0, '2024-03-03 07:58:21', '2024-03-03 07:58:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rincian_transaksis`
--

CREATE TABLE `tb_rincian_transaksis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_order` varchar(255) DEFAULT NULL,
  `id_pembeli` bigint(20) UNSIGNED NOT NULL,
  `tb_barang_id` bigint(20) UNSIGNED NOT NULL,
  `gambar_barang` text DEFAULT NULL,
  `nama_barang` varchar(255) DEFAULT NULL,
  `stok_barang` int(11) DEFAULT NULL,
  `harga_barang` int(11) DEFAULT NULL,
  `berat_barang` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `sub_total` bigint(20) DEFAULT NULL,
  `kategori_barang` varchar(255) DEFAULT NULL,
  `keterangan_pesanan` varchar(255) DEFAULT NULL,
  `ukuran_gilingan_kopi` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_rincian_transaksis`
--

INSERT INTO `tb_rincian_transaksis` (`id`, `no_order`, `id_pembeli`, `tb_barang_id`, `gambar_barang`, `nama_barang`, `stok_barang`, `harga_barang`, `berat_barang`, `qty`, `sub_total`, `kategori_barang`, `keterangan_pesanan`, `ukuran_gilingan_kopi`, `created_at`, `updated_at`) VALUES
(6, '20240304Qa75NdvKn3I4iw59rdjk', 1, 1, 'crema-espresso-kopi-house-blend-500gr.jpg', 'Crema Espresso - Kopi House Blend 500gr', 393, 119000, 500, 5, 595000, 'Coffee Beans', NULL, 'Wholebean', '2024-03-04 09:55:26', '2024-03-04 09:55:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rincian_transaksi_twos`
--

CREATE TABLE `tb_rincian_transaksi_twos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_order` varchar(255) DEFAULT NULL,
  `id_pembeli` bigint(20) UNSIGNED NOT NULL,
  `tb_barang_id` bigint(20) UNSIGNED NOT NULL,
  `gambar_barang` text DEFAULT NULL,
  `nama_barang` varchar(255) DEFAULT NULL,
  `stok_barang` int(11) DEFAULT NULL,
  `harga_barang` int(11) DEFAULT NULL,
  `berat_barang` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `sub_total` bigint(20) DEFAULT NULL,
  `kategori_barang` varchar(255) DEFAULT NULL,
  `keterangan_pesanan` varchar(255) DEFAULT NULL,
  `ukuran_gilingan_kopi` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_rincian_transaksi_twos`
--

INSERT INTO `tb_rincian_transaksi_twos` (`id`, `no_order`, `id_pembeli`, `tb_barang_id`, `gambar_barang`, `nama_barang`, `stok_barang`, `harga_barang`, `berat_barang`, `qty`, `sub_total`, `kategori_barang`, `keterangan_pesanan`, `ukuran_gilingan_kopi`, `created_at`, `updated_at`) VALUES
(6, '20240304Qa75NdvKn3I4iw59rdjk', 1, 1, 'crema-espresso-kopi-house-blend-500gr.jpg', 'Crema Espresso - Kopi House Blend 500gr', 393, 119000, 500, 5, 595000, 'Coffee Beans', NULL, 'Wholebean', '2024-03-04 09:55:26', '2024-03-04 09:55:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_transaksis`
--

CREATE TABLE `tb_transaksis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_pembeli` bigint(20) UNSIGNED NOT NULL,
  `no_order` varchar(255) NOT NULL,
  `tanggal_order` varchar(255) DEFAULT NULL,
  `tipe_alamat` varchar(255) DEFAULT NULL,
  `nama_penerima` varchar(255) DEFAULT NULL,
  `no_handphone_penerima` varchar(255) DEFAULT NULL,
  `alamat_lengkap_penerima` varchar(255) DEFAULT NULL,
  `kecamatan` varchar(255) DEFAULT NULL,
  `kode_pos` varchar(255) DEFAULT NULL,
  `kota` varchar(255) DEFAULT NULL,
  `provinsi` varchar(255) DEFAULT NULL,
  `total_bayar` int(11) DEFAULT NULL,
  `total_berat` int(11) NOT NULL,
  `status_bayar` enum('Unpaid','Paid') DEFAULT NULL,
  `metode_pembayaran` varchar(255) DEFAULT NULL,
  `bank_pembayaran` varchar(255) DEFAULT NULL,
  `bukti_bayar` text DEFAULT NULL,
  `atas_nama` varchar(255) DEFAULT NULL,
  `nama_bank` varchar(255) DEFAULT NULL,
  `no_rek` varchar(255) DEFAULT NULL,
  `status_order` int(11) DEFAULT NULL,
  `bukti_diterima` text DEFAULT NULL,
  `penilaian_barang` varchar(255) DEFAULT NULL,
  `origin` varchar(255) DEFAULT NULL,
  `destination` varchar(255) DEFAULT NULL,
  `courier` varchar(255) DEFAULT NULL,
  `total_ongkir` int(11) DEFAULT NULL,
  `etd` varchar(255) DEFAULT NULL,
  `service` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `total_bayar_keseluruhan` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_transaksis`
--

INSERT INTO `tb_transaksis` (`id`, `id_pembeli`, `no_order`, `tanggal_order`, `tipe_alamat`, `nama_penerima`, `no_handphone_penerima`, `alamat_lengkap_penerima`, `kecamatan`, `kode_pos`, `kota`, `provinsi`, `total_bayar`, `total_berat`, `status_bayar`, `metode_pembayaran`, `bank_pembayaran`, `bukti_bayar`, `atas_nama`, `nama_bank`, `no_rek`, `status_order`, `bukti_diterima`, `penilaian_barang`, `origin`, `destination`, `courier`, `total_ongkir`, `etd`, `service`, `description`, `total_bayar_keseluruhan`, `created_at`, `updated_at`) VALUES
(6, 1, '20240304Qa75NdvKn3I4iw59rdjk', '2024-03-04 16:55:26', 'Rumah', 'Muhammad Abdillah Asyhar', '081386052908', 'Bumi Telukjambe Blok T/567 rt 006/ rw 011, Desa Sukaharja Kecamatan Telukjambe Timur, Kabupaten Karawang Jawa Barat', 'teluk', '41361', 'Karawang', 'JAWA BARAT', 595000, 2500, 'Paid', NULL, NULL, NULL, NULL, NULL, NULL, 3, 'bukti_diterima/CcKSmsWfCSLZ2jWS02vZ7mArR5JpBrJLqH81uhqH.jpg', 'Pengiriman Cepat', '171', '1', 'Jalur Nugraha Ekakurir (JNE)', 192000, '2-3', 'REG', 'Layanan Reguler', 787000, '2024-03-04 09:55:26', '2024-03-04 21:40:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ukuran_gilingan_kopis`
--

CREATE TABLE `tb_ukuran_gilingan_kopis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_ukuran_gilingan` varchar(255) NOT NULL,
  `slug_name_ukuran_gilingan` varchar(255) NOT NULL,
  `id_ukuran_gilingan` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_ukuran_gilingan_kopis`
--

INSERT INTO `tb_ukuran_gilingan_kopis` (`id`, `name_ukuran_gilingan`, `slug_name_ukuran_gilingan`, `id_ukuran_gilingan`, `created_at`, `updated_at`) VALUES
(1, 'Wholebean', 'wholebean', 1, '2024-03-03 07:58:21', '2024-03-03 07:58:21'),
(2, 'Fine', 'fine', 1, '2024-03-03 07:58:21', '2024-03-03 07:58:21'),
(3, 'Medium', 'medium', 1, '2024-03-03 07:58:21', '2024-03-03 07:58:21'),
(4, 'Medium Coarse', 'medium-coarse', 1, '2024-03-03 07:58:21', '2024-03-03 07:58:21'),
(5, 'Super Fine', 'super-fine', 1, '2024-03-03 07:58:21', '2024-03-03 07:58:21'),
(6, 'Medium Fine', 'medium-fine', 1, '2024-03-03 07:58:21', '2024-03-03 07:58:21'),
(7, 'Coarse', 'coarse', 1, '2024-03-03 07:58:21', '2024-03-03 07:58:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `kota` varchar(255) DEFAULT NULL,
  `provinsi` varchar(255) DEFAULT NULL,
  `negara` varchar(255) DEFAULT NULL,
  `kode_pos` char(255) DEFAULT NULL,
  `no_telepon` char(255) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` tinyint(4) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `jenis_kelamin`, `alamat`, `kota`, `provinsi`, `negara`, `kode_pos`, `no_telepon`, `image`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Muhammad Abdillah Asyhar', 'Pria', 'Bumi Telukjambe Blok T/567 rt 006/ rw 011, Desa Sukaharja Kecamatan Telukjambe Timur, Kabupaten Karawang Jawa Barat', 'Karawang', NULL, NULL, '41361', '081386052908', 'default.jpg', 'muhammadabdillahasyhar68@gmail.com', '2024-03-03 08:00:53', '$2y$12$Sl1XdA3yonf/KbOdCIyPde7oHr3d2hogUbuWuRwIm.XQCBEBKA8VK', 0, NULL, '2024-03-03 08:00:27', '2024-03-03 08:01:05'),
(2, 'Abdillahhh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'default.jpg', 'mabdillahasyhar758@gmail.com', NULL, '$2y$12$bIwKY3DgiD28wuhSU3owYOQhbXz4r29ne3HiTWC/NN01vUd8gOXt2', 0, NULL, '2024-03-04 01:52:43', '2024-03-04 01:52:43');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_category_unique` (`name_category`),
  ADD UNIQUE KEY `categories_name_category_slug_unique` (`name_category_slug`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sub_categories_name_category_unique` (`name_category`),
  ADD UNIQUE KEY `sub_categories_name_category_slug_unique` (`name_category_slug`);

--
-- Indeks untuk tabel `tb_barangs`
--
ALTER TABLE `tb_barangs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tb_barangs_name_barang_unique` (`name_barang`),
  ADD UNIQUE KEY `tb_barangs_slug_name_barang_unique` (`slug_name_barang`);

--
-- Indeks untuk tabel `tb_rincian_transaksis`
--
ALTER TABLE `tb_rincian_transaksis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_rincian_transaksi_twos`
--
ALTER TABLE `tb_rincian_transaksi_twos`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_transaksis`
--
ALTER TABLE `tb_transaksis`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tb_transaksis_no_order_unique` (`no_order`);

--
-- Indeks untuk tabel `tb_ukuran_gilingan_kopis`
--
ALTER TABLE `tb_ukuran_gilingan_kopis`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tb_ukuran_gilingan_kopis_name_ukuran_gilingan_unique` (`name_ukuran_gilingan`),
  ADD UNIQUE KEY `tb_ukuran_gilingan_kopis_slug_name_ukuran_gilingan_unique` (`slug_name_ukuran_gilingan`);

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
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `tb_barangs`
--
ALTER TABLE `tb_barangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_rincian_transaksis`
--
ALTER TABLE `tb_rincian_transaksis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_rincian_transaksi_twos`
--
ALTER TABLE `tb_rincian_transaksi_twos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_transaksis`
--
ALTER TABLE `tb_transaksis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_ukuran_gilingan_kopis`
--
ALTER TABLE `tb_ukuran_gilingan_kopis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
