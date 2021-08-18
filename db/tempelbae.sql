-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 18 Agu 2021 pada 12.52
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
-- Struktur dari tabel `tempel`
--

CREATE TABLE `tempel` (
  `tempel_id` bigint(20) NOT NULL,
  `tempel_title` varchar(100) NOT NULL,
  `tempel_text` text NOT NULL,
  `tempel_param` varchar(225) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `expired_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tempel`
--

INSERT INTO `tempel` (`tempel_id`, `tempel_title`, `tempel_text`, `tempel_param`, `created_at`, `expired_at`) VALUES
(1, 'Kwkw', '<?php\r\n\r\nclass Home extends Controller {\r\n\r\n\r\n  public function index($param = \'\') {\r\n    if ($param == \'\') {\r\n      $data[\'judul\'] = \'Home\';\r\n      $this->view(\'index\');\r\n    } else {\r\n      echo $param;\r\n    }\r\n  }\r\n\r\n  public function raw($param) {\r\n    $data[\'judul\'] = \'Raw tempel\';\r\n    $tempel_data = $this->model(\'Tempel_model\')->getWhereParam($param);\r\n    if (count($tempel_data) > 0) {\r\n      echo $tempel_data[\'tempel_text\'];\r\n    } else {\r\n      echo \'not found 404\';\r\n    }\r\n  }\r\n\r\n\r\n}', 'yOEZ4eXIxH', '2021-08-17 23:53:26', '2021-08-24 23:53:26'),
(2, 'Wkwk', 'Wkwk', 'gmnHELcIaQ', '2021-08-17 23:58:36', '2021-08-24 23:58:36'),
(3, 'Wkwk', 'Wkwk', '70b4RMzXd4', '2021-08-17 23:58:58', '2021-08-24 23:58:58'),
(4, 'Baeu', 'Baeu', '9RFGz5B2Gu', '2021-08-17 23:59:12', '2021-08-24 23:59:12'),
(5, 'Baru lg8', 'Baru lg8', 'kyLBO98SSV', '2021-08-18 00:00:36', '2021-08-25 00:00:36'),
(6, 'Coba lgi ah', 'Coba lgi ah', 'bzFf01GHRR', '2021-08-18 00:08:45', '2021-08-25 00:08:45'),
(7, '', '', 'A0rT8wFekJ', '2021-08-18 00:21:28', '2021-08-25 00:21:28'),
(8, 'Kwkw', '&lt;?php\r\necho &#039;aku suka kamu&#039;;', 'A8oDrEY89e', '2021-08-18 08:54:30', '0000-00-00 00:00:00'),
(9, 'Kwkwkwfe', 'Pertama\r\nKedua\r\nKetiga', 'OI7E2hHjVr', '2021-08-18 08:56:23', '0000-00-00 00:00:00'),
(10, 'Ba4u nih', '&lt;h1&gt;aku cinga kamu&lt;h1&gt;', 'w3aNE8oJ5Z', '2021-08-18 10:18:41', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tempel`
--
ALTER TABLE `tempel`
  ADD PRIMARY KEY (`tempel_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tempel`
--
ALTER TABLE `tempel`
  MODIFY `tempel_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
