-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 20 Mei 2019 pada 20.17
-- Versi Server: 5.7.24-0ubuntu0.18.04.1
-- PHP Version: 7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thaitea`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` tinyint(4) DEFAULT NULL,
  `token` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `role`, `token`, `created_at`, `updated_at`) VALUES
(2, 'ar_yo23@yahoo.co.id', '', '$2y$10$y.O/Zp.I.uu/7jAw8PLFcuZIU5cyuOzyTF7dI9qC9NpxZK5RghB9i', 1, 'j0tYocSAuQOgKqlM', '2019-01-13 08:48:21', '2019-01-13 08:48:21'),
(3, 'ardi@hotmail.co', '', '$2y$10$fMVfm46BCLmTSLcy2bdQzePnei7qoXF7ti1WhBpdqLiuhHIH.9hru', NULL, 'wNdKCLYV3bqE5xlQ', '2019-01-13 08:50:32', '2019-01-13 08:50:32'),
(4, 'kiki@hotmail.co', '', '$2y$10$qQfLujeDAK3V63tXUKL5DukyzcvJ3MouEUvNB2iwAC/DFETnKx8n2', NULL, 'UHiVlDoZ6YWCOt9h', '2019-01-13 09:10:58', '2019-01-13 09:10:58'),
(5, 'ar_yo23@mail.co.id', '', '$2y$10$nqaXCd5sNN.IErcuJKq/UuYyk6adSQOpQTCc4kmxoYqiAGh7ps7MW', 1, 'M3WcLaxVhNGUiT5j', '2019-01-13 09:19:24', '2019-01-13 09:19:24'),
(6, 'sasa@haha.com', '', '$2y$10$JwK8e0vZvJf/hGxszpLzNuqiXRpac2SK4OTdWvCnJCsQ/ZrvdlBSa', 1, 'l5fMoZd0YLDbVeCq', '2019-01-13 09:25:23', '2019-01-13 09:25:23'),
(7, 'mue@hehe.com', '', '$2y$10$SY1Dyx1NkOvBhcSYSJfIueec4a5KxooTw75fRKSrRvjeVFq2sk3/S', 1, 'm8M7ZlkiaRTvKDXY', '2019-01-13 09:26:42', '2019-01-13 09:26:42'),
(8, 'jaka@ssss.vo', '', '$2y$10$bfd0uULYh4/Kua6b7YZm6uX/7r1FSzb0YqqUXCSMuopKEvhSC5kcm', 1, 'eoLwb1sr7mIQyU4J', '2019-01-13 09:34:08', '2019-01-13 09:34:08'),
(9, 'baru@new.co', '', '$2y$10$haUP9GtryRdCApFBlNrxG.6fBYk8kd9N.ScGUyHDVaCqgt77z1gRq', 1, 'jUaVhtgdXM4nEemu', '2019-01-13 09:51:37', '2019-01-13 09:51:37'),
(10, 'arhm@yahoo.co.id', '', '$2y$10$dA19sjVxHxhKckvn6Ez6mOO/aNO8QPUCRSGS75PCLTAEjE2WhdDXK', 1, 'fwZjW2SXHvbo8UsC', '2019-05-13 07:18:10', '2019-05-13 07:18:10'),
(18, 'ahmadardiyanto23@gmail.com', 'admin', '$2y$10$7xtwoyVdO72WlG2D7G1luOumMcT2dnC0AZVrYWwWnjz2faMfrp8je', 1, 'itRBuPOIlzNwSCfo', '2019-05-19 07:23:49', '2019-05-19 07:23:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `waralaba`
--

CREATE TABLE `waralaba` (
  `id` int(10) NOT NULL,
  `nama_waralaba` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `jarak` int(5) NOT NULL,
  `bobot_jarak` int(1) NOT NULL,
  `laba` int(15) NOT NULL,
  `bobot_laba` int(1) NOT NULL,
  `modal` int(15) NOT NULL,
  `bobot_modal` int(1) NOT NULL,
  `jumlah_cabang` int(10) NOT NULL,
  `bobot_jumlah_cabang` int(1) NOT NULL,
  `deskripsi_waralaba` text NOT NULL,
  `logo` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `waralaba`
--

INSERT INTO `waralaba` (`id`, `nama_waralaba`, `phone`, `alamat`, `jarak`, `bobot_jarak`, `laba`, `bobot_laba`, `modal`, `bobot_modal`, `jumlah_cabang`, `bobot_jumlah_cabang`, `deskripsi_waralaba`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'Rachacha Thaitea', '081', 'Kartasura', 51, 5, 8100000, 3, 10000000, 2, 90, 2, '', '5ce24dffd8df5.jpg', '2019-05-19 15:25:05', NULL),
(2, 'Thaitea Man', '081', 'Solo', 59, 5, 14800000, 5, 12000000, 2, 40, 1, '', '5ce24e1d131b8.png', '2019-05-19 15:29:07', NULL),
(3, 'Fremilt', '081', 'Sukoharjo', 56, 5, 16500000, 5, 18000000, 1, 230, 5, '', '5ce24e2b73985.png', '2019-05-19 15:30:23', NULL),
(4, 'Nyot Nyot Thaitea', '081', 'Surakarta', 59, 5, 16000000, 5, 13000000, 1, 100, 3, '', '5ce24e346ec24.png', '2019-05-19 15:31:21', NULL),
(5, 'Kako Thaitea', '081', 'Jakarta Utara', 559, 1, 20600000, 5, 22750000, 1, 50, 2, '', '5ce24e40adc27.png', '2019-05-19 15:32:26', NULL),
(6, 'Khabkun Thaitea', '081', 'Semarang', 108, 5, 16500000, 5, 1500000, 5, 120, 3, '', '5ce24e4a79039.png', '2019-05-19 15:33:26', NULL),
(7, 'Mao Mao Thaitea', '081', 'Tangerang', 583, 1, 14400000, 5, 12000000, 2, 40, 1, '', '5ce24e55cec62.png', '2019-05-19 15:34:29', NULL),
(9, 'THai', '091', 'tetet', 76, 5, 81030900, 5, 192840020, 1, 1738494038, 5, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '5ce2a520976b61.png', '2019-05-20 13:01:21', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `waralaba`
--
ALTER TABLE `waralaba`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `waralaba`
--
ALTER TABLE `waralaba`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
