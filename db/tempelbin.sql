-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 20 Agu 2021 pada 10.11
-- Versi server: 5.6.38
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tempelbae`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `report`
--

CREATE TABLE `report` (
  `report_id` bigint(20) NOT NULL,
  `report_name` varchar(100) NOT NULL,
  `report_email` varchar(150) NOT NULL,
  `report_message` text NOT NULL,
  `tempel_param` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `report`
--

INSERT INTO `report` (`report_id`, `report_name`, `report_email`, `report_message`, `tempel_param`, `created_at`) VALUES
(1, 'Wkwk Awokawok', 'wkwkw@wwk.com', 'Emmm', 'HGJTJLH736', '2021-08-20 06:25:14'),
(2, 'Wkwk Awokawok', 'wkwkw@wwk.com', 'Lapor pak', 'HGJTJLH736', '2021-08-20 06:29:31'),
(3, 'Wkwk Awokawok', 'wkwkw@wwk.com', 'Ddd', 'HGJTJLH736', '2021-08-20 06:29:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tempel`
--

CREATE TABLE `tempel` (
  `tempel_id` bigint(20) NOT NULL,
  `tempel_title` varchar(100) NOT NULL,
  `tempel_text` text NOT NULL,
  `tempel_type` varchar(100) NOT NULL DEFAULT '.txt',
  `tempel_param` varchar(225) NOT NULL,
  `user_id` bigint(20) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `expired_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tempel`
--

INSERT INTO `tempel` (`tempel_id`, `tempel_title`, `tempel_text`, `tempel_type`, `tempel_param`, `user_id`, `created_at`, `expired_at`) VALUES
(9, 'Urur', 'Kdkd', '.txt', 'J67NhCLL5I', 0, '2021-08-20 07:38:24', '2021-08-21 07:38:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` bigint(20) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_level` enum('admin','user_free','user_premium') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_password`, `user_level`) VALUES
(1, 'bil abror', 'admin@example.com', '$2y$10$u2udmt741DveckE8FkX/Deho3FGt.RcmO9Xn9WTzQabZMug7dw2gW', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`report_id`);

--
-- Indeks untuk tabel `tempel`
--
ALTER TABLE `tempel`
  ADD PRIMARY KEY (`tempel_id`),
  ADD UNIQUE KEY `tempel_param` (`tempel_param`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `report`
--
ALTER TABLE `report`
  MODIFY `report_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tempel`
--
ALTER TABLE `tempel`
  MODIFY `tempel_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
