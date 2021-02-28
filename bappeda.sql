-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Feb 2021 pada 14.01
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bappeda`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `aplikasis`
--

CREATE TABLE `aplikasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'image.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `aplikasis`
--

INSERT INTO `aplikasis` (`id`, `uuid`, `name`, `url`, `image`, `created_at`, `updated_at`) VALUES
(1, '839724b1-5f0b-4a4c-b3b3-b4ceef821e2b', 'E-Planning', 'http://sipd.merantikab.go.id/e-planning/', '1614127627.png', '2021-02-23 17:47:08', '2021-02-24 05:57:42'),
(2, 'f6d58bb0-1ed6-455e-8e94-307c98d6cd16', 'E-Data', 'http://sipd.merantikab.go.id/e-data/', '1614170930.png', '2021-02-24 05:48:52', '2021-02-24 05:58:04'),
(3, '73a9aea0-b66a-4b6b-9a47-316c0a1364eb', 'E-Sakip', 'http://e-sakip.merantikab.go.id/', '1614170948.png', '2021-02-24 05:49:08', '2021-02-24 05:58:20'),
(4, '6a02555b-95d6-4f0b-8800-2f5ea45647fb', 'SATUHATI', 'http:/satuhati.merantikab.go.id/', '1614170956.png', '2021-02-24 05:49:16', '2021-02-24 05:58:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `uuid`, `category_name`, `slug`, `created_at`, `updated_at`) VALUES
(1, '973ba7d8-0035-4ef2-9093-cfd28328f997', 'Pendidikan', 'pendidikan', '2020-12-23 03:12:36', '2021-02-22 20:25:56'),
(2, '424e0f5b-f26f-4199-bc91-8eba164cd63d', 'Budaya', 'budaya', '2020-12-23 03:12:41', '2021-02-22 20:25:56'),
(3, '25b86fed-5c9e-486f-be2d-4de89ce79e7a', 'Nasional', 'nasional', '2020-12-23 03:12:44', '2021-02-22 20:25:56'),
(4, '5dacb0d9-9ca0-47b9-a3f0-dfb1364ab342', 'Agama', 'agama', '2020-12-23 03:12:46', '2021-02-22 20:25:56'),
(5, 'f3a44de1-194b-4b0b-8ff5-3105be7d9997', 'Pemerintahan', 'pemerintahan', '2020-12-23 03:12:51', '2021-02-22 20:25:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `contacts`
--

INSERT INTO `contacts` (`id`, `content`, `created_at`, `updated_at`) VALUES
(1, '<h3>Contact</h3>\n\n<p>Assalamu&rsquo;alaikum wr. wb.</p>\n\n<p>Jangan lupa like fanspage kami fb.com/hcode dan subscribe channel youtube kami youtube.com/hcode2 🙂</p>\n\n<p>Bagi yang ingin berdiskusi / masuk hcode Forum silakan bisa join :</p>\n\n<ul>\n	<li>Channel telegram @hcode / t.me/hcode</li>\n	<li>Grup telegram @hcodeID / t.me/hcodeid</li>\n</ul>\n\n<p>Untuk order source code, jasa pembuatan web / aplikasi, donasi, kerjasama, mitra programmer, saran, kritik, request tutorial, konsultasi pemrograman dan hal penting lainnya silakan menghubungi kami melalui :</p>\n\n<ul>\n	<li>Facebook : fb.me/hcode (recommended)</li>\n	<li>Instagram : @hcode</li>\n	<li>WA : +62812-2576-4094</li>\n	<li>Email : dev.hcode@gmail.com</li>\n	<li>Official : hcode.co.id</li>\n	<li>Blog : hcode.blogspot.com</li>\n</ul>\n\n<p>* Silakan pergunakan bahasa yang baik dan sopan.</p>\n\n<p>Mohon maaf yang sebesar-besarnya dan harap maklum apabila respon kami terkadang agak lama, karena admin juga memiliki aktivitas dan kesibukan lainnya.</p>\n\n<p>Thanks a lot for your nice attention 🙂</p>\n\n<p>Wassalamu&rsquo;alaikum wr. wb.</p>', '2020-12-26 16:33:55', '2020-12-26 16:33:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokumens`
--

CREATE TABLE `dokumens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'file.pdf',
  `tahun` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sumber` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `versi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `dokumens`
--

INSERT INTO `dokumens` (`id`, `uuid`, `name`, `file`, `tahun`, `sumber`, `versi`, `kategori`, `pic`, `keterangan`, `slug`, `created_at`, `updated_at`) VALUES
(7, '1d6a97ab-c082-4a4f-afb8-4477e9a098dd', 'test dokumen', '1613843441.pdf', '2021', 'Sumber Dinas Kesehatan', 'Versi Final', 'Kategori [Produk Hukum] -> [Pemprov Riau] -> [Peraturan Gubernur]', 'PIC Bidang Perencanaan Strategis dan Pendanaan Pembangunan', 'RPJPD', 'test-dokumen', '2021-02-20 10:50:41', '2021-02-20 23:31:03'),
(8, '49df13f9-fdb4-4200-9021-39666aaa2dcb', 'dokumen asli aja', '1613891482.pdf', '2021', 'Sumber Bappenas. Kementerian Dalam Negeri, Kementerian keuangan', 'Versi Final', NULL, NULL, 'RKPD', 'dokumen-asli-aja', '2021-02-21 00:11:23', '2021-02-21 00:11:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fotos`
--

CREATE TABLE `fotos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `fotos`
--

INSERT INTO `fotos` (`id`, `uuid`, `name`, `image`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'bc01d3a9-a904-46ec-b705-db32108b0803', 'sunt in culpa qui officia deserunt mollit anim id est laborum.', '1613706287.jpeg', 'sunt-in-culpa-qui-officia-deserunt-mollit-anim-id-est-laborum', '2021-02-18 19:49:04', '2021-02-18 20:44:47'),
(2, '7c710448-b591-4497-be27-5a8a392d0b47', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', '1613706151.jpeg', 'lorem-ipsum-dolor-sit-amet-consectetur-adipisicing-elit', '2021-02-18 20:42:31', '2021-02-18 20:42:31'),
(3, '713b2976-0755-46ad-bfd5-cd6e17ca30f3', 'consectetur adipisicing elit', '1613706583.jpeg', 'consectetur-adipisicing-elit', '2021-02-18 20:49:43', '2021-02-18 20:49:43'),
(4, '135ad06f-48eb-4759-9874-336fd2090af5', 'Parfum', '1613707226.jpeg', 'parfum', '2021-02-18 21:00:26', '2021-02-18 21:00:26'),
(5, '1525d888-3b17-46ce-9e52-75cbcc7ab2d6', 'cream', '1613707241.jpeg', 'cream', '2021-02-18 21:00:41', '2021-02-18 21:00:41'),
(6, 'b1b59144-14cc-461c-84be-02425af5b697', 'Roti', '1613707252.jpeg', 'roti', '2021-02-18 21:00:52', '2021-02-18 21:00:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `iklans`
--

CREATE TABLE `iklans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `iklan_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'iklan.jpg',
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cupon_code` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `iklans`
--

INSERT INTO `iklans` (`id`, `iklan_name`, `url`, `image`, `position`, `cupon_code`, `created_at`, `updated_at`) VALUES
(1, 'Niagahoster', 'https://panel.niagahoster.co.id/ref/176139', '1609002845.jpeg', 'single', NULL, '2020-12-26 17:14:05', '2020-12-26 17:42:21'),
(2, 'Jago React Firebase', 'https://bit.ly/reactjs-firebase', '1609003764.jpeg', 'single', NULL, '2020-12-26 17:29:24', '2020-12-26 17:42:14'),
(3, 'React AWS Serverless', 'https://bit.ly/react-aws-serverless', '1609003901.jpeg', 'depan', 'HAQQAGROUP', '2020-12-26 17:31:41', '2020-12-26 17:42:04'),
(4, 'Mari Shop', 'https://www.marishop.store/', '1609007055.png', 'depan', NULL, '2020-12-26 17:43:00', '2020-12-26 18:24:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jasas`
--

CREATE TABLE `jasas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jasas`
--

INSERT INTO `jasas` (`id`, `content`, `created_at`, `updated_at`) VALUES
(1, '<h3>Jasa Pembuatan Aplikasi (Web / Mobile / Desktop / etc)</h3>\n\n<p>Assalamu&rsquo;alaikum wr. wb.</p>\n\n<p>Selain membuat tutorial pemrograman gratis dan menjual beberapa source code aplikasi, kami juga membuka berbagai jasa pembuatan :</p>\n\n<ul>\n	<li>Toko Online, Marketplace, Company Profile, Web WordPress, Personal Blog, etc.</li>\n	<li>Berbagai Macam Aplikasi Berbasis Web (PHP Native, CodeIgniter, Laravel, Node.js, Web Scraping, Restful API, WP-Plugin, etc).</li>\n	<li>Berbagai Macam Aplikasi Berbasis Desktop (Java, VB.Net, etc).</li>\n	<li>Berbagai Macam Aplikasi Berbasis Mobile (Android Native, Kotlin, Flutter, IOS, React Native, Ionic, etc).</li>\n	<li>Berbagai macam aplikasi referensi Skripsi / Thesis / TA, etc.</li>\n	<li>Project per Part, Update, Maintenance, Support, etc.</li>\n	<li>dan lain sebagainya.</li>\n	<li>Jasa lain :</li>\n</ul>\n\n<ul>\n	<li>Kursus pemrograman online &ldquo;from zero to be hero&rdquo; (hcode Course)</li>\n	<li>Bootcamp coding offline (<strong>hcode Academy + hcode Space</strong>)</li>\n	<li>Internet Marketing / SEO</li>\n	<li>Kerjasama bisnis.</li>\n	<li>dan lain-lain.</li>\n</ul>\n\n<p>* Perlu Anda ketahui bahwa kami memiliki tim (<strong>hcode Dev</strong>) dengan berbagai macam kualifikasi dan skills, jadi kami menerima berbagai level order, baik project profesional (company, instansi, go-live, maintenance, support) ataupun project untuk latihan oprek. Anda juga berkesempatan menjadi bagian dari hcode Dev, silakan kirim cv terbaik ke dev.hcode@gmail.com</p>\n\n<p>* Demo beberapa aplikasi yang sudah kami kerjakan : https://goo.gl/Un75yS, @hcode, hcode.co.id</p>\n\n<p>* Client kami dari berbagai golongan seperti : perusahaan, instansi pemerintahan, instansi pendidikan, startup, ukm, karyawan, dan lain-lain.</p>\n\n<p>Anda dapat menghubungi kami melalui :</p>\n\n<ul>\n	<li>Official Facebook : https://fb.com/hcode</li>\n	<li>WhatsApp : +62812-2576-4094</li>\n	<li>Email : dev.hcode@gmail.com</li>\n	<li>Official Website : https://hcode.co.id</li>\n	<li>* Kepuasan Anda adalah prioritas kami 🙂</li>\n</ul>\n\n<p>Terimakasih banyak atas kepercayaan dan kerjasamanya.</p>\n\n<p>Wassalamu&rsquo;alaikum wr. wb.</p>', '2020-12-26 16:24:42', '2020-12-26 16:24:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_dokumens`
--

CREATE TABLE `kategori_dokumens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kategori_dokumens`
--

INSERT INTO `kategori_dokumens` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Kategori [Produk Hukum] -> [Pemprov Riau] -> [Peraturan Gubernur]', '2021-02-19 08:15:18', '2021-02-19 08:16:14'),
(2, 'Kategori [Informasi Pembangunan] -> [Infografis]', '2021-02-19 08:15:31', '2021-02-19 08:15:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keterangan_docs`
--

CREATE TABLE `keterangan_docs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `keterangan_docs`
--

INSERT INTO `keterangan_docs` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'RPJPD', '2021-02-20 23:24:54', '2021-02-20 23:24:54'),
(2, 'RPJMD', '2021-02-20 23:25:01', '2021-02-20 23:25:01'),
(3, 'RKPD', '2021-02-20 23:25:09', '2021-02-20 23:25:09'),
(4, 'KUA-PPA', '2021-02-20 23:25:16', '2021-02-20 23:25:16'),
(5, 'LKPJ', '2021-02-20 23:25:24', '2021-02-20 23:25:24'),
(6, 'RTRW', '2021-02-20 23:25:29', '2021-02-20 23:25:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `levels`
--

CREATE TABLE `levels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_role` int(11) NOT NULL,
  `nama_level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `levels`
--

INSERT INTO `levels` (`id`, `id_role`, `nama_level`, `created_at`, `updated_at`) VALUES
(1, 1, 'Admin', '2020-12-29 13:24:47', '2020-12-29 13:24:47'),
(2, 2, 'User', '2020-12-29 13:24:53', '2020-12-29 13:24:53'),
(3, 3, 'Author', '2021-02-21 19:40:12', '2021-02-21 19:40:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `messages`
--

INSERT INTO `messages` (`id`, `uuid`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, '3c9b68f2-668b-46ed-948e-a519133c48c4', 'rian', 'amikrian8@gmail.com', 'test', 'test aja', '2021-02-23 17:43:47', '2021-02-23 17:43:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_12_20_132209_create_categories_table', 1),
(4, '2020_12_21_023554_create_tags_table', 1),
(5, '2020_12_21_035610_create_posts_table', 1),
(6, '2020_12_26_134444_create_products_table', 2),
(7, '2020_12_26_152325_create_contacts_table', 3),
(8, '2020_12_26_152339_create_jasas_table', 3),
(9, '2020_12_26_161402_create_iklans_table', 4),
(10, '2020_12_29_130958_create_levels_table', 5),
(11, '2021_02_18_153704_create_fotos_table', 6),
(12, '2021_02_18_154922_create_videos_table', 6),
(13, '2021_02_19_124625_create_tahuns_table', 7),
(14, '2021_02_19_124739_create_sumbers_table', 7),
(15, '2021_02_19_124759_create_versis_table', 7),
(16, '2021_02_19_124842_create_kategori_dokumens_table', 7),
(17, '2021_02_19_124913_create_pic_dokumens_table', 7),
(18, '2021_02_19_125951_create_dokumens_table', 7),
(19, '2021_02_20_171907_create_slides_table', 8),
(20, '2021_02_21_061637_create_keterangan_docs_table', 9),
(21, '2021_02_21_140005_create_visi_misis_table', 10),
(22, '2021_02_21_140137_create_tugas_pokok_fungsis_table', 10),
(23, '2021_02_21_140206_create_struktur_organisasis_table', 10),
(24, '2021_02_22_123946_create_pengaturans_table', 11),
(25, '2021_02_23_235202_create_aplikasis_table', 12),
(26, '2021_02_23_235249_create_messages_table', 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaturans`
--

CREATE TABLE `pengaturans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pengaturans`
--

INSERT INTO `pengaturans` (`id`, `uuid`, `name`, `created_at`, `updated_at`) VALUES
(1, 'cbd9086b-4829-4660-a84a-2584f71bf766', '{\"header\":{\"email\":\"bappeda@merantikab.go.id\",\"hp\":\"+1 5589 55488 55\",\"logo\":\"logo.png\"},\"contact\":{\"alamat\":\"Jl. Johari Dagang\"},\"content\":{\"video\":\"https:\\/\\/www.youtube.com\\/watch?v=U3D_1uzJJoo\",\"img_video\":\"video.jpg\",\"judul\":\"Kabupaten Kepulauan Meranti\",\"keterangan\":\"Selatpanjang adalah ibu kota Kabupaten Kepulauan Meranti, provinsi Riau, Indonesia. Kota Selatpanjang juga merupakan Ibu kota kecamatan Tebing Tinggi, kota ini terletak di bagian pesisir utara Pulau Tebingtinggi dan memiliki wilayah seluas 12,50 km dan jumlah penduduk berdasarkan Badan Pusat Statistik 2020 sebanyak 39.855 jiwa dengan kepadatan 3.188,4 jiwa\\/km\\u00b2. Kota Selatpanjang juga berjulukan sebagai Kota Sagu karena daerah ini termasuk salah satu Kawasan Pengembangan Ketahanan Pangan Nasional karena penghasil sagu terbesar di Indonesia\"},\"footer\":{\"keterangan\":\"Badan Perencanaan Pembangunan Daerah bertugas melaksanakan fungsi penunjang urusan pemerintahan bidang perencanaan, meliputi perencanaan, pengendalian dan evaluasi pembangunan daerah, pemerintahan dan pembangunan manusia, perekonomian dan sumber daya alam, serta infrastruktur dan kewilayahan, yang menjadi kewenangan Daerah Provinsi, menyelenggarakan tugas dekonsentrasi dan melaksanakan tugas pembantuan sesuai bidang tugasnya berdasarkan ketentuan peraturan perundang-undangan\",\"footer_name\":\"bappeda.merantikab.go.id\"}}', NULL, '2021-02-22 19:47:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pic_dokumens`
--

CREATE TABLE `pic_dokumens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pic_dokumens`
--

INSERT INTO `pic_dokumens` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'PIC Pusat Inovasi Pengembangan Perkotaan', '2021-02-19 08:25:15', '2021-02-19 08:25:15'),
(2, 'PIC Bidang Perencanaan Strategis dan Pendanaan Pembangunan', '2021-02-19 08:25:29', '2021-02-19 08:25:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `tag` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eye` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `posts`
--

INSERT INTO `posts` (`id`, `uuid`, `user_id`, `category_id`, `tag`, `judul`, `image`, `content`, `slug`, `eye`, `created_at`, `updated_at`) VALUES
(2, 'b16ebf4f-9e2e-454b-8b4f-2405e8897539', 1, 5, '[\"Teknologi\", \"RKPD\"]', 'Bangun Data Center Daerah Terhubung Online untuk Satu Data Indonesia, FGD Pemkab dan BPS Meranti', '1613963916.jpeg', '<p><strong>KEPULAUAN MERANTI</strong> - Forum Grup Diskusi (FGD) bersama pihak BPS Kepulauan Meranti, di aula kantor BPS Meranti, Selasa (8/12/2020) mengambil tema diskusi tentang membangun data center untuk mensukseskan satu data Indonesia .</p>\n\n<p>Kegiatan yang juga dihadiri Sekretaris Daerah Kepulauan Meranti Dr. H. Kamsol MM ini sesuai dengan Perpres No. 39 Tahun 2019 tentang Satu Data Indonesia ini.</p>\n\n<p>Turut hadir dalam FGD, Kepala BPS Meranti Setiadi Gunawan, Plt Kepala Bappeda Meranti Rizki Hidayat, Kabag Kominfo Meranti Wan Fachriarmi.</p>\n\n<p>Kemudian, Sekretaris Disduk Capil Meranti Ramdan, Bagian Humas dan Protokol Meranti.</p>\n\n<p>Kegiatan ini menindak lanjuti Peraturan Presiden Republik Indonesia Nomor 39 Tahun 2019 tentang Satu Data Indonesia pada tanggal 12 Juni 2019.</p>\n\n<p>Dalam FGD tersebut, Kepala BPS Meranti Setiadi Gunawan menjelaskan, dengan dikeluarkannya Perpres No. 39 Tahun 2019 tersebut, BPS Se-Indonesia berkomitmen untuk mensukseskan Perpres itu.</p>\n\n<p>Agar hal ini berjalan dengan lancar perlu kerjasama antara BPS dengan pemerintah daerah yang memiliki wilayah, dengan begitu tercipta keseragaman data.</p>\n\n<p>Nantinya dilaporkan ke pusat dan menjadi data nasional.</p>\n\n<p>Satu Data Indonesia adalah kebijakan tata kelola data pemerintah untuk menghasilkan data yang akurat, mutakhir, terpadu, dan dapat dipertanggungjawabkan.</p>\n\n<p>Serta mudah diakses dan dibagipakaikan antar instansi pusat dan instansi daerah melalui pemenuhan standar data, metadata, interoperabilitas data, dan menggunakan kode referensi dan data induk.</p>', 'bangun-data-center-daerah-terhubung-online-untuk-satu-data-indonesia-fgd-pemkab-dan-bps-meranti', '23', '2020-12-23 03:16:49', '2021-02-21 20:32:56'),
(3, '0d66913f-ca0b-414a-b177-edee361d9f26', 1, 5, '[\"RKPD\"]', 'Konsultasi Publik Rancangan Awal RKPD 2022, Pemkab Kepulauan Meranti Gesa Peningkatan Kesejahteraan Masyarakat', '1613963615.jpeg', '<p><strong>SELATPANJANG &ndash; </strong>Dalam rangka penyusunan Rencana Kerja Pemerintah Daerah (RKPD) Kepulauan Meranti Tahun 2022, Pemerintah Kabupaten Kepulauan Meranti dalam hal ini Badan Perencanaan Pembangunan Daerah (Bappeda) menggelar forum konsultasi publik rancangan awal RKPD, kegiatan langsung dibuka oleh Plh Bupati Kepulauan Meranti, Dr H Kamsol MM, bertempat di Aula Afifa, Selatpanjang, Kamis (18/2/2021).</p>\n\n<p>Turut hadir Sekretaris Bappeda Meranti, Randolf, Danramil 02/Tebingtinggi, Mayor Arm Bismi Tambunan, Wakapolres Meranti, Kompol Nipwin Bonar Hutabarat, Danposal Selatpanjang, Letda Laut Jery Hendra, Ketua MUI, H Mustafa, jajaran pejabat eselon II dan III Dilingkungan Pemkab Meranti, serta pihak terkait lainnya.</p>\n\n<p>Sekedar informasi kegiatan forum konsultasi publik rancangan awal RKPD ini diatur dalam Permendagri 86 tahun 2017 tentang tata cara perencanaan, pengendalian dan evaluasi rancangan peraturan daerah tentang rencana pembangunan jangka panjang daerah dan rencana pembangunan jangka menengah daerah, serta tata cara perubahan rencana pembangunan jangka panjang daerah, rencana pembangunan jangka menengah daerah dan rencana kerja pemerintah daerah, Pasal 80 ayat (1) mengamanahkan bahwa rancangan awal RKPD dibahas bersama dengan kepala perangkat daerah dan pemangku kepentingan dalam forum konsultasi publik untuk memperoleh masukan dan saran penyempurnaan.&nbsp;&nbsp;</p>\n\n<p>Seperti dijelaskan oleh Kepala Bappeda Meranti yang diwakili Sekretaris, Randolf, Bappeda selaku OPD yang melaksanakan fungsi koordinasi perencanaan pembangunan daerah, melaksanakan konsultasi publik rancangan awal RKPD Kabupaten Meranti bertujuan&nbsp;untuk menjaring aspirasi pemangku kepentingan pada tahap awal dengan&nbsp; tujuan untuk menghimpun aspirasi dan harapan para pemangku kepentingan terhadap prioritas dan sasaran pembangunan tahun 2022.</p>\n\n<p>RKPD Kabupaten Meranti yang akan disusun ini merupakan dokumen perencanaan daerah periode tahun 2022, yang berdasarkan arah kebijakan pembangunan daerah, mengacu pada dokumen RPJMD Kabupaten Meranti tahun 2019-2023, serta memperhatikan prioritas pembangunan nasional dan Pemerintah Provinsi Riau.&nbsp;</p>\n\n<p>Plh Bupati Kepulauan Meranti, Dr H Kamsol dalam sambutannya mengatakan, forum konsultasi publik ini&nbsp;bertujuan untuk menampung saran dan masukan seluruh pihak yang berkepentingan, baik masyarakat, maupun organisasi kemasyarakatan dan lembaga pemerintah kabupaten untuk merumuskan rancangan program prioritas pembangunan daerah tahun 2022.&nbsp;</p>\n\n<p>Pelaksanaan konsultasi publik ini merupakan momen yang sangat strategis untuk mengkomunikasikan dan mengkoordinasikan rencana pelaksanaan pembangunan yang mampu menjawab isu-isu strategis pada tahun 2022 seperti pemulihan ekonomi akibat dampak wabah Covid-19, peningkatan kualitas dan daya saing sumber daya manusia, percepatan dan pemerataan pembangunan daerah, optimalisasi pembangunan dan peningkatan infrastruktur dasar dan aksesbilitas wilayah yang berwawasan lingkungan, optimalisasi tata kelola pemerintahan yang baik, efesiensi dan efektifitas perencanaan dan pelaksanaan anggaran akibat refocusing anggaran.&nbsp;</p>\n\n<p>Untuk itu Plh Bupati Meranti berharap&nbsp;pelaksanaan forum konsultasi publik ini dan berharap semua peserta dapat memberikan masukan dan saran demi kesempurnaan rancangan RKPD Meranti Tahun 2022, dan menghasilkan kesepakatan bersama dari berbagai pihak yang disesuaikan dan disinergikan dengan visi dan misi bupati terpilih.</p>\n\n<p>Terakhir,&nbsp;Plh bupati&nbsp;menegaskan agar seluruh organisasi perangkat daerah dapat melaksanakan tugas pokok dan fungsinya dengan sungguh-sungguh demi peningkatan taraf ekonomi dan kesejahteraan masyarakat di Kepulauan Meranti.</p>\n\n<p>Dari pemaparan pihak Bappeda Meranti permasalahan yang dihadapi Meranti saat ini meliputi angka kemiskinan masih cukup tinggi berkisar&nbsp;25 persen lebih, masih tingginya pengangguran dampak dari pandemi Covid-19, nilai hasil pertanian masih rendah, transportasi orang dan barang masih mahal, akses dan layanan kesehatan masih perlu ditingkatkan, rata-rata kwalitas pendidikan masih ditingkat SMP, pengelolaan dan pemanfaatan sumberdaya ekonomi kurang optimal dimana komoditi unggul Meranti belum diolah hingga ke Industri Hilir, abrasi pantai yang rawan banjir.<strong>(rls)</strong></p>', 'konsultasi-publik-rancangan-awal-rkpd-2022-pemkab-kepulauan-meranti-gesa-peningkatan-kesejahteraan-masyarakat', '4', '2020-12-23 03:18:25', '2021-02-21 20:13:35'),
(4, '30fff4a2-d683-4055-b7f7-736dce1c9030', 1, 5, '[\"RPJMD\"]', 'Pemkab Meranti Himpun Aspirasi Masyarakat Susun RPJMD 2021-2026', '1613962576.jpeg', '<p><strong>MERANTI, RIAULINK.COM -&nbsp;</strong>Pemerintah Kabupaten Kepulauan Meranti dalam hal ini Bappeda Meranti menggelar kegiatan Konsultasi Publik kajian lingkungan hidup strategis (KLHS), Rencana Pembangunan Jangka Menengah Daerah (RPJMD) Kabupaten Kepulaan Meranti 2021-2026, dalam kegiatan itu masalah infrastruktur untuk meningkatkan aksesbilitas dan tingginya angka kemiskinan masih menjadi Isu strategis untuk segera dituntaskan.</p>\n\n<p>Kegiatan dalam rangka mendengarkan isu aktual dan menghimpun masukan dari sejumlah tokoh masyarakat sesuai dengan UU No. 32 Tahun 2009 terkait penyusunan RPJMD tersebut dibuka langsung oleh Sekretaris Daerah Kepulauan Meranti, Dr. Kamsol MM didampingi Plt. Kepala Bappeda Meranti Rizki Hidayat, bertempat di Gedung Biru Kantor Bupati, Jumat (23/10/2020).</p>\n\n<p>Turut hadir bersama Sekda, Kepala Kantor Kemenag Meranti, Agustiar MA, Wakapolres Meranti, Kompol Ipwin Bonar Hutabarat, Kepala Disparpora Meranti, Rizki Hidayat, Pemateri, Dr Suwondo, Danposal Letda Jeri Hendra, Perwakilan OPD serta tokoh masyarakat di Kepulauan Meranti.</p>\n\n<p>Pada kesempatan itu, Sekretaris Daerah, Dr Kamsol mengatakan Pemerintah Daerah akan terus fokus pada upaya-upaya untuk menekan angka kemiskinan yang masih cukup tinggi di Kepulauan Meranti. Meski sudah jauh menurun dari sejak pertama Meranti berdiri 10 tahun yang lalu berada di angka 40 persen kini angka kemiskinan berhasil ditekan menjadi 26 persen lebih.</p>\n\n<p>Hal ini menurut Sekda berkat keseriusan dan konsistensi dari tiap OPD dilingkungan Pemkab Meranti untuk bersinergi mengatasi berbagai persoalan yang terjadi ditengah masyarakat. Adapu. Isu-isu yang terus dibenahi adalah masalah minimnya infrastruktur dasar seperti jalan yang menyebabkan terkendalanya aksesbilitas, alhasil biaya transportasi menjadi tinggi, mahalnya harga kebutuhan pokok, sementara daya beli semakin lemah.</p>\n\n<p>&quot;Jadi masalah inftastruktur ini sangat berkaitan erat dengan masih tingginya angka kemiskinan di Meranti untuk itu pembangunan inftastruktur tetap menjadi fokus kita ditahun tahun yang akan datang,&quot; jelas Sekda.</p>\n\n<p>Agar upaya-upaya menekan angka kemiskinan dan peningkatan pembangunan berjalan dengan baik, Pemkab. Meranti sangat berharap masukan dari berbagai elemen dan tokoh masyarakat untuk bersama-sama memberikan saran yang nantinya akan menjadi pertimbangan bagi Kepala Daerah selanjutnya dalam penyusunan RPJMD 2021-2025.</p>\n\n<p>&quot;Disni kita mencoba untuk menggali berbagai isu strategis yang terjadi ditengah masyarakat baik masalah Kemiskinan, Minimnya Infrastruktur, Melemahnya Ekonomi, Sosial, Kesehatan, hingga masalah lingkungan Abrasi, serta Kemanan dan lainnya,&quot; ujar Sekda.</p>\n\n<p>Selain malasah infrastruktur Isu lainnya yang juga harus menjadi pertimbangan menurut Sekda Kamsol adalah, kondisi Pandemi Covid-19 saat ini yang menyebabkan melemahnya semua sektor terutama ekonomi masyarakat, untuk itu Sekda mengintruksikan kepada semua OPD terkait untuk terus fokus kepada program-program pemberdayaan yang benar-benar bersentuhan dan memberikan manfaat langsung kepada masyarakat dengan begitu segala permasalahan dapat ditanggulangi dengan baik.</p>\n\n<p>Terakhir, Sekda Kamsol berjanji segala masukan dan saran yang diperoleh dari kegiatan Konsultasi Publik ini akan dicatat dan akan dijadikan sebagai pertimbangan bagi Pemda Meranti khususnya Kepala Daerah dalam penyusunan RPJMD yang akan datang.</p>\n\n<p>&quot;Harapan kita kedepannya semua Isu dan permasalah yang terjadi dapat ditanggulangi dengan baik yang ditandai dengan sejahteranya masyarakat dan pemerataan pembangunan mulai dari Kota hingga pelosok Desa,&quot; pungkasnya. (Aldo).</p>', 'pemkab-meranti-himpun-aspirasi-masyarakat-susun-rpjmd-2021-2026', NULL, '2021-02-21 19:56:16', '2021-02-21 19:56:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'product.jpg',
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `product_name`, `price`, `tag`, `content`, `image`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Aplikasi Web desa', '500000', '[\"Express.js\",\"Axios\"]', '<p>Aplikasi ini terbaik sangat</p>', '1608994521.png', 'aplikasi-web-desa', '2020-12-26 14:55:22', '2020-12-26 14:55:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `slides`
--

CREATE TABLE `slides` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slide` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `index` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `slides`
--

INSERT INTO `slides` (`id`, `uuid`, `name`, `slide`, `index`, `created_at`, `updated_at`) VALUES
(1, '384a83bc-a439-49e5-8670-bc840fab12fc', 'Kantor Bupati Selatpanjang', '1614055640.jpg', '1', '2021-02-20 10:47:22', '2021-02-22 21:47:27'),
(2, 'ea866caa-334c-4e51-aa97-7141e9da1011', 'uiiii', '1613887330.jpg', '1', '2021-02-20 10:49:14', '2021-02-20 23:02:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `struktur_organisasis`
--

CREATE TABLE `struktur_organisasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `struktur_organisasis`
--

INSERT INTO `struktur_organisasis` (`id`, `content`, `created_at`, `updated_at`) VALUES
(1, '<p><strong>BADAN PERENCANAAN PEMBANGUNAN DAERAH PROVINSI RIAU</strong></p>', NULL, '2021-02-21 08:10:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sumbers`
--

CREATE TABLE `sumbers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sumbers`
--

INSERT INTO `sumbers` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Sumber bappeda', '2021-02-19 07:06:51', '2021-02-19 07:06:51'),
(2, 'Sumber Bappeda Provinsi Riau', '2021-02-19 07:07:12', '2021-02-19 07:07:12'),
(3, 'Sumber Bidang PPP Bappeda', '2021-02-19 07:07:25', '2021-02-19 07:07:25'),
(4, 'Sumber Badan Perencanaan Pembangunan Daerah Provinsi Riau', '2021-02-19 07:07:39', '2021-02-19 07:07:39'),
(5, 'Sumber Tim Anggaran Pemerintah Daerah', '2021-02-19 07:07:55', '2021-02-19 07:07:55'),
(6, 'Sumber Tim Anggaran Pemerintah Daerah (TAPD)', '2021-02-19 07:08:04', '2021-02-19 07:08:48'),
(8, 'Sumber Kementerian Keuangan, Dalam Negeri, PAN RB, Bappenas', '2021-02-19 07:15:34', '2021-02-19 07:15:34'),
(9, 'Sumber Bappenas. Kementerian Dalam Negeri, Kementerian keuangan', '2021-02-19 07:15:40', '2021-02-19 07:15:40'),
(10, 'Sumber Dinas Kesehatan', '2021-02-19 07:16:15', '2021-02-19 07:16:15'),
(11, 'Sumber Dinas Pendidikan', '2021-02-19 07:16:20', '2021-02-19 07:16:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tags`
--

INSERT INTO `tags` (`id`, `uuid`, `tag_name`, `slug`, `created_at`, `updated_at`) VALUES
(11, '34ab552b-7588-4867-b4c4-3213112b1b4e', 'RPJMD', 'rpjmd', '2021-02-21 19:38:45', '2021-02-22 20:23:02'),
(12, '265e802c-54a1-4940-a6e8-cffa4a7e17da', 'RKPD', 'rkpd', '2021-02-21 19:38:52', '2021-02-22 20:23:02'),
(13, '4f9757c3-0cf2-46ea-885a-514152c85d05', 'Musrembang Desa', 'musrembang-desa', '2021-02-21 19:39:06', '2021-02-22 20:23:02'),
(14, 'f24a60da-749f-4735-8b9d-5663fbf7e602', 'Musrembang Kecamatan', 'musrembang-kecamatan', '2021-02-21 19:39:11', '2021-02-22 20:23:02'),
(15, '2932e9d8-7374-4617-a738-1f7e8b9eafff', 'Musrembang Kabupaten', 'musrembang-kabupaten', '2021-02-21 19:39:21', '2021-02-22 20:23:02'),
(16, '73354f8d-79a0-4e3a-b94b-b1aed5bac75e', 'Sakip', 'sakip', '2021-02-21 19:39:29', '2021-02-22 20:23:03'),
(17, 'b5e16bd4-f4f8-4559-9d6e-86a545a7fbb5', 'Renja', 'renja', '2021-02-21 19:39:37', '2021-02-22 20:23:03'),
(18, 'ebefe358-047c-48ff-926e-232280968d32', 'Teknologi', 'teknologi', '2021-02-21 20:15:32', '2021-02-22 20:23:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tahuns`
--

CREATE TABLE `tahuns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tahuns`
--

INSERT INTO `tahuns` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, '2018', '2021-02-19 07:01:33', '2021-02-19 07:01:33'),
(3, '2020', '2021-02-19 07:01:39', '2021-02-19 07:01:39'),
(4, '2021', '2021-02-19 07:01:43', '2021-02-19 07:01:43'),
(5, 'Sumber bappeda', '2021-02-19 07:05:33', '2021-02-19 07:05:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tugas_pokok_fungsis`
--

CREATE TABLE `tugas_pokok_fungsis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tugas_pokok_fungsis`
--

INSERT INTO `tugas_pokok_fungsis` (`id`, `content`, `created_at`, `updated_at`) VALUES
(1, '<p><strong>KEDUDUKAN</strong></p>\r\n\r\n<ol>\r\n	<li>Bappeda merupakan unsur perencanaan pembangunan pemerintahan daerah;</li>\r\n	<li>Bappeda dipimpin oleh seorang Kepala Badan yang berkedudukan di bawah dan bertanggung jawab kepada Gubernur melalui Sekretaris Daerah;</li>\r\n	<li>Dalam melaksanakan tugasnya Kepala Badan dibantu oleh seorang Wakil Kepala Badan.</li>\r\n</ol>\r\n\r\n<p><strong>TUGAS POKOK</strong></p>\r\n\r\n<p>Bappeda mempunyai tugas menyusun, mengendalikan dan mengevaluasi pelaksanaan rencana pembangunan daerah, penyelenggaraan penelitian dan pengembangan, dan pengelolaan statistik daerah.</p>\r\n\r\n<p><strong>FUNGSI</strong></p>\r\n\r\n<ol>\r\n	<li>Penyusunan dan pelaksanaan Rencana Kerja dan Anggaran Badan Perencanaan Pembangunan Daerah</li>\r\n	<li>Perumusan kebijakan perencanaan pembangunan, penelitian dan pengembangan serta statistik daerah;</li>\r\n	<li>Pengoordinasian penyusunan Rencana Tata Ruang Wilayah (RTRW), Rencana Pembangunan Jangka Panjang Daerah (RPJPD), Rencana Pembangunan Jangka Menengah Daerah (RPJMD), dan Rencana Kerja Pemerintah Daerah (RKPD);</li>\r\n	<li>Penyusunan Kebijakan Umum Anggaran (KUA) berkoordinasi dengan Badan Pengelola Keuangan Daerah (BPKD);</li>\r\n	<li>Penyusunan Prioritas dan Plafon Anggaran (PPA) berkoordinasi dengan Badan Pengelola Keuangan Daerah (BPKD);</li>\r\n	<li>Pengendalian kesesuaian antaran indikator, kinerja RKPD dengan Kebijakan Umum Anggaran (KUA) dan Prioritas dan Plafon Anggaran (PPA), output/hasil kegiiatan di Rencana Kerja Satuan Kerja Perangkat Daerah (Renja SKPD) dan Rencana Kerja dan Anggaran Satuan Kerja Perangkat Daerah (RKA SKPD);</li>\r\n	<li>Pengoordinasian kebijakan perencanaan di bidang pembangunan perekonomian, pembangunan prasarana dan sarana, pembangunan kesejahteraan masyarakat, pembangunan tata praja, pembangunan aparatur dan keuangan;</li>\r\n	<li>Pengoordinasian perencanaan pembangunan secara terpadu lintas negara, lintas daerah, lintas urusan pemerintah, antar pemerintah daerah dengan pusat dan antar lintas pelaku lainnya;</li>\r\n	<li>Evaluasi pelaksanaan rencana pembangunan;</li>\r\n	<li>Penyelenggaraan pengoordinasian penelitian dan pengembangan daerah;</li>\r\n	<li>Penyelenggaraan pengoordinasian statistik daerah;</li>\r\n	<li>Penyediaan, penatausahaan, penggunaan, pemeliharaan, dan perawatan prasarana dan sarana kerja Bappeda;</li>\r\n	<li>Pemberian dukungan teknis perencanaan pembangunan kepada perangkat daerah;</li>\r\n	<li>Pengoordinasian penyusunan laporan kinerja pemerintah daerah;</li>\r\n	<li>Pengelolaan kepegawaian, keuangan, barang dan ketatausahaan Bappeda; dan</li>\r\n	<li>Pelaporan, dan pertanggungjawaban pelaksanaan tugas dan fungsi.</li>\r\n</ol>', NULL, '2021-02-21 08:00:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fb` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ig` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bio` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'foto.jpeg',
  `status` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `level`, `fb`, `ig`, `bio`, `image`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mis Arianto', 'admin', 'admin@admin.com', '$2y$10$BBzgEtJCujJBznMqb6R.4ukUIckp6ZvLECJHbIgcSPVeeXmAu4vaO', 'admin', 'Mis Arianto', 'rian_haqqa', 'cinta pemograman', 'foto.jpeg', '1', NULL, NULL, '2020-12-27 15:35:04'),
(2, 'user', 'user', 'user@user.com', '$2y$10$q3ZmAAbLViDnAusjayeQEe1i0ev4r0381qBpfzZvSfQRnGhubxCRO', 'user', 'user', 'user', NULL, 'foto.jpeg', '0', NULL, '2020-12-29 13:57:27', '2020-12-29 13:57:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `versis`
--

CREATE TABLE `versis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `versis`
--

INSERT INTO `versis` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Versi 1/1/2015_final', '2021-02-19 07:13:33', '2021-02-19 07:13:33'),
(2, 'Versi 1/1/2016_final', '2021-02-19 07:13:44', '2021-02-19 07:13:44'),
(3, 'Versi 1/1/2014_final', '2021-02-19 07:13:52', '2021-02-19 07:13:52'),
(4, 'Versi 1/1/2018_final', '2021-02-19 07:13:58', '2021-02-19 07:13:58'),
(5, 'Versi 1/1/2005_final', '2021-02-19 07:14:05', '2021-02-19 07:14:05'),
(6, 'Versi Final', '2021-02-19 07:14:15', '2021-02-19 07:14:15'),
(7, 'Versi 16/04/2018/Final', '2021-02-19 07:14:26', '2021-02-19 07:14:26'),
(8, 'Versi 1/1/2017_final', '2021-02-19 07:15:14', '2021-02-19 07:15:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `index` tinyint(4) NOT NULL DEFAULT '0',
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `videos`
--

INSERT INTO `videos` (`id`, `uuid`, `name`, `video`, `index`, `slug`, `created_at`, `updated_at`) VALUES
(2, '98738d23-d2fc-427a-8066-a35c473a9ba1', 'tet', '1613841068.mp4', 1, 'tet', '2021-02-20 10:11:08', '2021-02-21 08:48:53'),
(3, '4b5e0326-07da-44de-8871-22537778ed2a', 'tttt', '1613841435.mp4', 0, 'tttt', '2021-02-20 10:17:15', '2021-02-21 08:48:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `visi_misis`
--

CREATE TABLE `visi_misis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `visi_misis`
--

INSERT INTO `visi_misis` (`id`, `content`, `created_at`, `updated_at`) VALUES
(1, '<p><strong>VISI</strong></p>\r\n\r\n<p><strong>&ldquo;Menjadi&nbsp; Lembaga Perencanaan yang Memiliki Integritas dan Profesionalisme Untuk&nbsp; Mewujudkan Sinergitas Perencanaan Pembangunan Jakarta Baru&rdquo;</strong></p>\r\n\r\n<ol>\r\n	<li><strong>Integritas&nbsp;</strong>menunjukkan sebuah sikap yang berpegang teguh pada nilai-nilai yang benar dan teguh sikap yang bertanggung jawab dalam melaksanakan tugas pelayanan publik</li>\r\n	<li><strong>Profesional&nbsp;</strong>menggambarkan sebuah kinerja yang berorientasi pada hasil dan dengan menjaga kaidah-kaidah proses dalam sebuah kerangka organisasi perencanaan yang modern.</li>\r\n	<li><strong>Sinergis</strong><strong>&nbsp;</strong>merupakan suatu proses pembangunan yang saling mendukung dan saling bahu membahu satu sama lain untuk mewujudkan tujuan organisasi.</li>\r\n</ol>\r\n\r\n<p><strong>MISI</strong></p>\r\n\r\n<ol>\r\n	<li>Mengembangkan Sumber Daya Manusia Perencana yang handal dan berwawasan global;</li>\r\n	<li>Menyusun rencana pembangunan daerah yang berkualitas;</li>\r\n	<li>Memantapkan fungsi koordinasi, pemantauan, pengendalian serta evaluasi kinerja dalam perencanaan dan pelaksanaan pembangunan daerah;</li>\r\n	<li>Mengembangkan fungsi statistik dan penelitian daerah.</li>\r\n</ol>\r\n\r\n<p><strong>TUJUAN</strong></p>\r\n\r\n<ol>\r\n	<li>Terwujudnya sumber daya manusia yang cukup, berkualitas dan berkinerja optimal.</li>\r\n	<li>Terwujudnya rencana pembangunan yang tepat sasaran dan responsif.</li>\r\n	<li>Terwujudnya program dan kegiatan pembangunan yang tepat sasaran dan melibatkan seluruh pemangku kepentingan berbasis Teknologi&nbsp; Informasi.</li>\r\n	<li>Terlaksananya pengembangan dan fasilitasi statistik daerah serta penelitian yang implementatif dan inovatif.</li>\r\n</ol>\r\n\r\n<p><strong>SASARAN</strong></p>\r\n\r\n<ol>\r\n	<li>Sasaran dari tujuan pertama: &ldquo;Terwujudnya sumber daya manusia yang cukup, berkualitas dan berkinerja optimal&rdquo; adalah:\r\n	<ul>\r\n		<li>Tercukupinya jumlah dan sebaran SDM sesuai dengan analisis jabatan dan analisis beban kerja, yang baik dapat diukur melalui:\r\n		<ol>\r\n			<li>Kecukupan kebutuhan jumlah SDM berdasarkan analisis beban kerja.</li>\r\n			<li>Persentase pemerataan sebaran SDM berdasarkan analisis beban kerja.</li>\r\n			<li>Persentase kesesuaian penempatan SDM berdasarkan analisis jabatan.</li>\r\n		</ol>\r\n		</li>\r\n		<li>Meningkatnya kualitas aparatur yang berwawasan global yang handal, yang dapat diukur:\r\n		<ol>\r\n			<li>Persentase SDM yang memiliki sertifikat perencana.</li>\r\n			<li>Peningkatan jumlah SDM dengan tingkat pendidikan S2 dan S3 di dalam dan luar negeri.</li>\r\n			<li>Jumlah SDM yang mengikuti pelatihan di luar negeri setiap tahun.</li>\r\n		</ol>\r\n		</li>\r\n		<li>Meningkatnya kinerja Bappeda, yang dapat diukur dari:\r\n		<ol>\r\n			<li>Tingkat pencapaian kinerja kegiatan tahunan.</li>\r\n			<li>Prosentase rata-rata tingkat kehadiran SDM Bappeda</li>\r\n		</ol>\r\n		</li>\r\n	</ul>\r\n	</li>\r\n	<li>Sasaran dari tujuan kedua: &ldquo;Terwujudnya rencana pembangunan yang tepat sasaran dan responsif&rdquo; adalah:\r\n	<ul>\r\n		<li>Meningkatnya kualitas dokumen perencanaan, yang dapat diukur dari:\r\n		<ol>\r\n			<li>Peningkatan prosentase usulan masyarakat yang berkualtas untuk diakomodasi di dalam APBD.</li>\r\n			<li>Tingkat kesesuaian antara indikator RPJPD, RPJMD, RKPD dan APBD.</li>\r\n		</ol>\r\n		</li>\r\n	</ul>\r\n	</li>\r\n	<li>Sasaran dari tujuan ketiga: &ldquo;Terwujudnya program dan kegiatan pembangunan yang tepat sasaran dan melibatkan seluruh pemangku kepentingan berbasis Teknologi&nbsp; Informasi&rdquo; adalah:\r\n	<ul>\r\n		<li>Meningkatnya kesesuaian program dan kegiatan pembangunan daerah, yang dapat diukur dari:\r\n		<ol>\r\n			<li>Kesesuaian antara program dan kegiatan pembangunan.</li>\r\n			<li>Kesesuaian target indikator kinerja antara RPJMD dengan RKPD dan APBD.</li>\r\n		</ol>\r\n		</li>\r\n		<li>Meningkatnya kualitas pelaporan pelaksanaan pembangunan tahunan daerah, yang dapat diukur dari:\r\n		<ol>\r\n			<li>Kesesuaian hasil evaluasi yang digunakan dalam perencanaan pembangunan.</li>\r\n		</ol>\r\n		</li>\r\n	</ul>\r\n	</li>\r\n	<li>Sasaran dari tujuan keempat: &nbsp;&ldquo;Terlaksananya pengembangan dan fasilitasi statistik daerah serta penelitian yang implementatif dan inovatif&rdquo; adalah:\r\n	<ul>\r\n		<li>Meningkatnya kualitas pengelolaan data statistik sesuai dengan kebutuhan daerah, yang dapat diukur dari:\r\n		<ol>\r\n			<li>Persentase ketersediaan data statistik daerah sesuai kebutuhan.</li>\r\n		</ol>\r\n		</li>\r\n		<li>Terbangunnya jejaring kerjasama pelaku inovasi daerah, yang dapat diukur dari:\r\n		<ol>\r\n			<li>Ketersediaan basis data pelaku inovasi daerah.</li>\r\n		</ol>\r\n		</li>\r\n	</ul>\r\n	</li>\r\n</ol>', NULL, '2021-02-21 07:39:21');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `aplikasis`
--
ALTER TABLE `aplikasis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dokumens`
--
ALTER TABLE `dokumens`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `iklans`
--
ALTER TABLE `iklans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jasas`
--
ALTER TABLE `jasas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori_dokumens`
--
ALTER TABLE `kategori_dokumens`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `keterangan_docs`
--
ALTER TABLE `keterangan_docs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_username_index` (`username`);

--
-- Indeks untuk tabel `pengaturans`
--
ALTER TABLE `pengaturans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pic_dokumens`
--
ALTER TABLE `pic_dokumens`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`),
  ADD KEY `posts_category_id_foreign` (`category_id`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `struktur_organisasis`
--
ALTER TABLE `struktur_organisasis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sumbers`
--
ALTER TABLE `sumbers`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tahuns`
--
ALTER TABLE `tahuns`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tugas_pokok_fungsis`
--
ALTER TABLE `tugas_pokok_fungsis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `versis`
--
ALTER TABLE `versis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `visi_misis`
--
ALTER TABLE `visi_misis`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `aplikasis`
--
ALTER TABLE `aplikasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `dokumens`
--
ALTER TABLE `dokumens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `fotos`
--
ALTER TABLE `fotos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `iklans`
--
ALTER TABLE `iklans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `jasas`
--
ALTER TABLE `jasas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kategori_dokumens`
--
ALTER TABLE `kategori_dokumens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `keterangan_docs`
--
ALTER TABLE `keterangan_docs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `levels`
--
ALTER TABLE `levels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `pengaturans`
--
ALTER TABLE `pengaturans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pic_dokumens`
--
ALTER TABLE `pic_dokumens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `slides`
--
ALTER TABLE `slides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `struktur_organisasis`
--
ALTER TABLE `struktur_organisasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `sumbers`
--
ALTER TABLE `sumbers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `tahuns`
--
ALTER TABLE `tahuns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tugas_pokok_fungsis`
--
ALTER TABLE `tugas_pokok_fungsis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `versis`
--
ALTER TABLE `versis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `visi_misis`
--
ALTER TABLE `visi_misis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
