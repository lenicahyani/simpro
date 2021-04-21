-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Apr 2021 pada 07.39
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
-- Struktur dari tabel `cus`
--

CREATE TABLE `cus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(60) CHARACTER SET latin1 NOT NULL,
  `email` varchar(191) CHARACTER SET latin1 NOT NULL,
  `alamat` varchar(191) CHARACTER SET latin1 NOT NULL,
  `telepon` varchar(191) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `cus`
--

INSERT INTO `cus` (`id`, `nama`, `email`, `alamat`, `telepon`) VALUES
(4, 'DENI', 'lenicahyani@gmail.com', '80459457', '98786');

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
(2, 'Anjay', 'novicaogidiabella@gmail.com', '987867', 'surabaya', '2021-04-16 18:33:25', '2021-04-16 18:35:23');

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
(7, 'Rohman Nirhim', 'ARTIKEL', 1500000, '1', 'Nur Iqu Lukmanul Hakim', 'Sedang Diproses', '2021-04-28', '2021-04-19 18:27:10', '2021-04-19 18:27:10'),
(8, 'ROhman', 'ARTIKEL', 1500000, '1', 'Nur Iqu Lukmanul Hakim', 'Sedang Diproses', '2021-04-21', '2021-04-19 19:26:06', '2021-04-19 19:26:06'),
(9, 'Rohman Nirhim', 'SIMPRO', 1500000, '1', 'Nur Iqu Lukmanul Hakim', 'Belum Diproses', '2021-04-14', '2021-04-19 19:32:24', '2021-04-19 19:32:24'),
(10, 'Rohman', 'SEO ANALISA', 11, '1', 'Nur Iqu Lukmanul Hakim', 'Sedang Diproses', '2021-04-21', '2021-04-19 21:39:34', '2021-04-19 21:39:34'),
(11, 'Rohman', 'SEO ANALISA', 11, '1', 'Nur Iqu Lukmanul Hakim', 'Sedang Diproses', '2021-04-21', '2021-04-19 21:39:56', '2021-04-19 21:39:56'),
(12, 'Rohman', 'SEO ANALISA', 11, '1', 'Nur Iqu Lukmanul Hakim', 'Belum Diproses', '2021-04-21', '2021-04-19 22:05:42', '2021-04-19 22:05:42'),
(13, 'Rohim', 'SEO ANALISA', 11, '1', 'Leni Cahyani', 'Sedang Diproses', '2021-04-21', '2021-04-19 22:06:24', '2021-04-19 23:04:49'),
(14, 'Rohimmmmmmmm', 'SEO ANALISUS', 11, '1', 'ambil dari tabel worker', 'Selesai', '2021-04-21', '2021-04-19 22:07:52', '2021-04-19 22:34:06'),
(15, 'anjir', 'ARTIKEL', 1500000, '1', 'Nur Iqu Lukmanul Hakim', 'Selesai', '2021-04-15', '2021-04-20 19:34:11', '2021-04-20 19:34:11'),
(16, 'priyanto', 'ADEHI', 15000000, '2', 'Leni Cahyani', 'Sedang Diproses', '2021-05-08', '2021-04-20 19:42:38', '2021-04-20 20:07:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `subproyek`
--

CREATE TABLE `subproyek` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_proyek` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tim` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_tugas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nilai` int(11) NOT NULL,
  `progres` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `subproyek`
--

INSERT INTO `subproyek` (`id`, `nama_proyek`, `tim`, `nama_tugas`, `deskripsi`, `nilai`, `progres`, `created_at`, `updated_at`) VALUES
(1, 'SEO', 'Leni', 'Analisis Database', '-', 10000000, '20%', '2021-04-07 17:00:00', '2021-04-21 17:00:00');

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
  `role` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(22, 'Nur Iqu Lukmanul Hakim', 'sidoarjo', 'Administrator', 'DB DESIGNER', 'lenicahyani12tkj216@gmail.com', '0897665432', NULL, '2021-04-19 18:20:47'),
(23, 'Leni Cahyani', '0887665443', 'Worker', 'ANALIS', 'novicaogidiabella1411@gmail.com', '987867876', '2021-04-19 17:53:09', '2021-04-19 18:21:05');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cus`
--
ALTER TABLE `cus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customer_email_unique` (`email`);

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
-- Indeks untuk tabel `proyek`
--
ALTER TABLE `proyek`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `subproyek`
--
ALTER TABLE `subproyek`
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
-- AUTO_INCREMENT untuk tabel `cus`
--
ALTER TABLE `cus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
-- AUTO_INCREMENT untuk tabel `proyek`
--
ALTER TABLE `proyek`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `subproyek`
--
ALTER TABLE `subproyek`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tim`
--
ALTER TABLE `tim`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `worker`
--
ALTER TABLE `worker`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
