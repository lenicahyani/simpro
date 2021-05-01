-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Bulan Mei 2021 pada 13.01
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stisla`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_customer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id`, `nama_customer`, `email`, `telepon`, `alamat`, `created_at`, `updated_at`) VALUES
(2, 'Reza Rahardian', 'rezaa@gmail.com', '08976653455', 'surabaya', '2021-04-16 18:33:25', '2021-04-30 22:59:54'),
(3, 'Fatir Alfarizi', 'fatir@gmail.com', '0827765543', 'Cilacap', '2021-04-20 23:37:42', '2021-04-30 23:00:34'),
(4, 'Adelia Devian', 'lenicahyani@gmail.com', '0866534332', 'Sidoarjo', '2021-04-24 00:50:17', '2021-04-30 23:01:09'),
(5, 'Nur Faizah', 'nurr@gmail.com', '0857886543', 'Jakarta', '2021-04-30 23:01:43', '2021-04-30 23:01:43'),
(6, 'Putri Titina', 'putriiti@gmail.com', '0887366524', 'Magelang', '2021-04-30 23:02:27', '2021-04-30 23:02:27'),
(7, 'Robin Hut', 'robbin@gmail.com', '0887654333', 'Madura', '2021-04-30 23:03:11', '2021-04-30 23:03:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2021_04_09_155118_create_customer_table', 2),
(10, '2014_10_12_000000_create_users_table', 3),
(13, '2021_04_16_015706_create_customer_table', 4),
(14, '2021_04_16_035325_create_proyek_table', 5),
(15, '2021_04_16_111145_create_subproyek_table', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` int(11) NOT NULL,
  `customer` varchar(50) NOT NULL,
  `nama_proyek` varchar(50) NOT NULL,
  `termin` int(11) NOT NULL,
  `tanggal_bayar` date NOT NULL,
  `total_bayar` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`id`, `customer`, `nama_proyek`, `termin`, `tanggal_bayar`, `total_bayar`, `created_at`, `updated_at`) VALUES
(2, 'Nur Faizah', 'SI Universitas', 1, '2021-05-21', 1000000, '2021-05-01 06:16:49', '2021-04-30 23:16:49'),
(3, 'Adelia Devian', 'SIMPRO', 1, '2021-05-19', 9, '2021-05-01 06:16:55', '2021-04-30 23:16:55'),
(4, 'Putri Titina', 'ARTIKEL', 2, '2021-05-27', 1000000, '2021-05-01 06:17:04', '2021-04-30 23:17:04'),
(5, 'Robin Hut', 'SIMPRO', 2, '2021-05-14', 1000000, '2021-05-01 06:17:11', '2021-04-30 23:17:11'),
(6, 'Reza Rahardian', 'SEO ANALISA', 3, '2021-05-26', 1000000, '2021-05-01 06:17:18', '2021-04-30 23:17:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `proyek`
--

CREATE TABLE `proyek` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_proyek` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai_proyek` int(11) NOT NULL,
  `termin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pimpinan_proyek` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_estimasi` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `proyek`
--

INSERT INTO `proyek` (`id`, `customer`, `nama_proyek`, `nilai_proyek`, `termin`, `pimpinan_proyek`, `status`, `tanggal_estimasi`, `created_at`, `updated_at`) VALUES
(7, 'Rohman Nirhim', 'ARTIKEL', 1500000, '2', 'Nur Iqu Lukmanul Hakim', 'Selesai', '2021-04-28', '2021-04-19 18:27:10', '2021-04-28 21:30:15'),
(9, 'Rohman Nirhim', 'SIMPRO', 1500000, '1', 'Nur Iqu Lukmanul Hakim', 'Belum Diproses', '2021-04-14', '2021-04-19 19:32:24', '2021-04-19 19:32:24'),
(12, 'Rohman', 'SEO ANALISA', 11, '1', 'Nur Iqu Lukmanul Hakim', 'Belum Diproses', '2021-04-21', '2021-04-19 22:05:42', '2021-04-19 22:05:42'),
(13, 'Rohim', 'SEO ANALISA', 11, '1', 'Leni Cahyani', 'Sedang Diproses', '2021-04-21', '2021-04-19 22:06:24', '2021-04-19 23:04:49'),
(16, 'priyanto', 'SI Universitas', 15000000, '2', 'Leni Cahyani', 'Sedang Diproses', '2021-05-08', '2021-04-20 19:42:38', '2021-04-28 21:39:34'),
(21, 'ROhman', 'SIA', 15000000, '3', 'Leni Cahyani', 'Sedang Diproses', '2021-05-08', '2021-04-28 21:38:03', '2021-04-28 21:38:03'),
(22, 'Putri Titina', 'SIU', 2500000, '2', 'Adelia Devian', 'Sedang Diproses', '2021-05-13', '2021-04-30 23:34:54', '2021-04-30 23:34:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `proyek_worker`
--

CREATE TABLE `proyek_worker` (
  `id` int(11) NOT NULL,
  `proyek_id` int(11) NOT NULL,
  `worker_id` int(11) NOT NULL,
  `nama_subproyek` varchar(50) NOT NULL,
  `nilai_subproyek` int(11) NOT NULL,
  `deskripsi` varchar(50) DEFAULT NULL,
  `gaji` varchar(50) DEFAULT NULL,
  `progres` varchar(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `proyek_worker`
--

INSERT INTO `proyek_worker` (`id`, `proyek_id`, `worker_id`, `nama_subproyek`, `nilai_subproyek`, `deskripsi`, `gaji`, `progres`, `created_at`, `updated_at`) VALUES
(20, 7, 22, 'Master Customer', 600000, NULL, 'Sudah Dibayar', '73', '2021-04-24 01:25:54', '2021-05-01 06:07:37'),
(29, 8, 22, 'Master User', 350000, NULL, 'Sudah Dibayar', '56', '2021-04-24 22:48:08', '2021-05-01 06:07:15'),
(31, 7, 24, 'Membuat Rancangan Database', 100000, NULL, 'Sudah Dibayar', '50', '2021-04-25 21:24:44', '2021-05-01 06:05:11'),
(32, 9, 23, 'Menambahkan Autentifikasi', 1000000, NULL, 'Sudah Dibayar', '0', '2021-04-28 21:40:56', '2021-04-29 04:40:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tim`
--

CREATE TABLE `tim` (
  `id` bigint(20) NOT NULL,
  `nama_proyek` varchar(50) NOT NULL,
  `nama_tugas` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `tim` varchar(50) NOT NULL,
  `progres` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tim`
--

INSERT INTO `tim` (`id`, `nama_proyek`, `nama_tugas`, `deskripsi`, `tim`, `progres`) VALUES
(1, 'SEO', 'Analisa Lapangan', '', 'LENI,BELA', '100%');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'leni cahyani', 'lenicahyani12tkj216@gmail.com', NULL, '$2y$10$PcMnk/0upAh8j5rEMhM.de4OQQrNFHLWoZ9zjmFqCIfyinlFNTmtW', NULL, '2021-04-30 08:09:26', '2021-04-30 08:09:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` tinyint(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `worker`
--

CREATE TABLE `worker` (
  `id` bigint(20) NOT NULL,
  `nama_worker` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `role` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telepon` varchar(13) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `worker`
--

INSERT INTO `worker` (`id`, `nama_worker`, `alamat`, `role`, `status`, `email`, `telepon`, `created_at`, `updated_at`) VALUES
(22, 'Nur Iqu Lukmanul Hakim', 'Mojokerto', 'Administrator', 'DB DESIGNER', 'nuriqu6@gmail.com', '0897665432', NULL, '2021-04-30 23:12:59'),
(23, 'Leni Cahyani', 'Cilacap', 'Worker', 'TESTER', 'leni@gmail.comm', '08777555544', '2021-04-19 17:53:09', '2021-04-30 23:13:29'),
(24, 'Novica Ogidia Bella', 'Jombang', 'Administrator', 'FRONTEND PROGRAMMER', 'novicao@gmail.com', '08223444455', '2021-04-20 23:36:54', '2021-04-30 23:13:57'),
(25, 'Adelia Devian', 'Sidoarjo', 'Administrator', 'DB DESIGNER', 'adelia@gmail.com', '0866543335', '2021-04-30 22:41:25', '2021-04-30 23:14:28'),
(26, 'Ni Kadaek Eva A', 'Bali', 'Administrator', 'BACKEND PROGRAMMER', 'kadekkka@gmail.com', '0888433356', '2021-04-30 22:41:45', '2021-04-30 23:15:03'),
(27, 'Asmiati', 'Nusa Tenggara Timur', 'Administrator', 'PM', 'asmmiti@gmail.com', '08776543334', '2021-04-30 22:42:01', '2021-04-30 23:15:45');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

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
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `proyek`
--
ALTER TABLE `proyek`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `proyek_worker`
--
ALTER TABLE `proyek_worker`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tim`
--
ALTER TABLE `tim`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `user_roles`
--
ALTER TABLE `user_roles`
  ADD UNIQUE KEY `user_role_unique` (`user_id`,`role_id`);

--
-- Indeks untuk tabel `worker`
--
ALTER TABLE `worker`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `proyek`
--
ALTER TABLE `proyek`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `proyek_worker`
--
ALTER TABLE `proyek_worker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `tim`
--
ALTER TABLE `tim`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `worker`
--
ALTER TABLE `worker`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
