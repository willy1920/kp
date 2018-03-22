-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 22 Des 2017 pada 17.47
-- Versi Server: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spkpemilihanlaptop`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `laptop`
--

CREATE TABLE `laptop` (
  `id` int(50) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `processor` varchar(50) NOT NULL,
  `vga` varchar(50) NOT NULL,
  `ram` int(10) NOT NULL,
  `hdd` varchar(50) NOT NULL,
  `ukuran` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `laptop`
--

INSERT INTO `laptop` (`id`, `tipe`, `processor`, `vga`, `ram`, `hdd`, `ukuran`) VALUES
(1, 'E203NAH-FD011T', 'Intel N3350', 'Intel(R) HD Graphics', 2, '500', '11,6'),
(2, 'T101HA-GR011T', 'Intel X5-Z8350', 'Intel(R) HD Graphics', 2, '128 eMMC', '10'),
(3, 'TP203NAH-BP101T', 'Intel N3350', 'Intel(R) HD Graphics', 4, '500', '11,6'),
(4, 'TP203NAH-BP001T', 'Intel Quad Core N4200', 'Intel(R) HD Graphics', 4, '500', '11,6'),
(5, 'TP410UA-EC301T', 'Intel Core i3-7100U', 'Intel(R) HD Graphics', 4, '500', '14'),
(6, 'TP410UR-EC301T', 'Intel Core i3-7100U', 'Nvidia GT930Mx 2GB', 4, '500', '14'),
(7, 'TP410UA-E501T', 'Intel Core i5-7200', 'Intel HD Graphics', 8, '1000', '14'),
(8, 'TP410UR-EC501T', 'Intel Core i5-7200', 'Nvidia GT930Mx 2GB', 8, '1000', '14'),
(9, 'TP410UR-EC701T', 'Intel Core i7-7500', 'Nvidia GT930Mx 2GB', 8, '1000', '14'),
(10, 'X454YA-BX801D', 'AMD A8-7410', 'ATI Radeon R5 m320 shared', 4, '500', '14'),
(11, 'X555BP-BX921T', 'AMD A9-9420', 'ATI Radeon R4 + R5 2GB', 4, '1000', '15,6'),
(12, 'X555QG-BX101D', 'AMD A10-9600P', 'ATI Radeon R8 M435DX 2GB', 4, '1000', '15,6'),
(13, 'X441NA-BX001D', 'Intel N3350', 'Intel HD Graphics', 2, '500', '14'),
(14, 'X441NA-BX401D', 'Intel N3350', 'Intel(R) HD Graphics', 4, '500', '14'),
(15, 'X441NA-PQ401D', 'Intel Quad Core N4200', 'Intel HD Graphics', 4, '500', '14'),
(16, 'X441UA-WX095D', 'Intel Core i3-6006U', 'Intel(R) HD Graphics', 4, '500', '14'),
(17, 'X541UA-GO1383D', 'Intel Core i3-6006U', 'Intel HD Graphics', 4, '1000', '15,6'),
(18, 'X441UV-WX091D', 'Intel Core i3-6006U', 'Nvidia GT920Mx 2GB', 4, '500', '14'),
(19, 'X541UV-GO1351T', 'Intel Core i3-6006U', 'Nvidia GT920Mx 2GB', 4, '1000', '15,6'),
(20, 'X441UV-GA280T', 'Intel Core i3-6100U', 'Nvidia GT920Mx 2GB', 4, '1000', '14'),
(21, 'A442UR-GA016T', 'Intel Core i5-7200U', 'Nvidia GT930Mx 2GB', 4, '1000', '14'),
(22, 'A442UR-GA041T', 'Intel Core i5-8250U', 'Nvidia GT930Mx 2GB', 4, '1000', '14'),
(23, 'A456UQ-FA072', 'Intel Core i5-7200U', 'Nvidia GT940Mx 2GB', 8, '1000', '14'),
(24, 'N550JV-CN301D', 'Intel Core i5-4200U', 'Nvidia GT750Mx 2GB', 8, '1000', '15,6'),
(25, 'S510UQ-BQ439', 'Intel Core i5-7200U', 'Nvidia GT940Mx 2GB', 4, '1000 + 128 SSD', '15,6'),
(26, 'A442UR-GA031D', 'Intel Core i7-7500HQ', 'Nvidia GT930Mx 2GB', 4, '1000', '14'),
(27, 'FX553VD-DM001', 'Intel Core i7-7700HQ', 'Nvidia GTX1050 2GB', 8, '1000', '15,6'),
(28, 'ROG GL553VD-FY280T', 'Intel Core i7-7700HQ', 'Nvidia GTX1050 4GB', 8, '1000', '15,6'),
(29, 'ROG GL553VD-FY380T', 'Intel Core i7-7700HQ', 'Nvidia GTX1050 4GB', 16, '1000 + 128 SSD', '15,6');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `id` int(50) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `processor` int(50) NOT NULL,
  `vga` int(50) NOT NULL,
  `ram` int(10) NOT NULL,
  `hdd` varchar(50) NOT NULL,
  `ukuran` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`id`, `tipe`, `processor`, `vga`, `ram`, `hdd`, `ukuran`) VALUES
(1, 'E203NAH-FD011T', 1, 1, 2, '500', 12),
(2, 'T101HA-GR011T', 2, 1, 2, '128', 10),
(3, 'TP203NAH-BP101T', 1, 1, 4, '500', 12),
(4, 'TP203NAH-BP001T', 3, 1, 4, '500', 12),
(5, 'TP410UA-EC301T', 5, 1, 4, '500', 14),
(6, 'TP410UR-EC301T', 5, 6, 4, '500', 14),
(7, 'TP410UA-E501T', 7, 1, 8, '1000', 14),
(8, 'TP410UR-EC501T', 7, 6, 8, '1000', 14),
(9, 'TP410UR-EC701T', 9, 6, 8, '1000', 14),
(10, 'X454YA-BX801D', 5, 5, 4, '500', 14),
(11, 'X555BP-BX921T', 6, 6, 4, '1000', 16),
(12, 'X555QG-BX101D', 7, 7, 4, '1000', 16),
(13, 'X441NA-BX001D', 1, 1, 2, '500', 14),
(14, 'X441NA-BX401D', 1, 1, 4, '500', 14),
(15, 'X441NA-PQ401D', 3, 1, 4, '500', 14),
(16, 'X441UA-WX095D', 3, 1, 4, '500', 14),
(17, 'X541UA-GO1383D', 3, 1, 4, '1000', 16),
(18, 'X441UV-WX091D', 3, 5, 4, '500', 14),
(19, 'X541UV-GO1351T', 3, 5, 4, '1000', 16),
(20, 'X441UV-GA280T', 4, 5, 4, '1000', 14),
(21, 'A442UR-GA016T', 7, 6, 4, '1000', 14),
(22, 'A442UR-GA041T', 8, 6, 4, '1000', 14),
(23, 'A456UQ-FA072', 7, 7, 8, '1000', 14),
(24, 'N550JV-CN301D', 4, 3, 8, '1000', 16),
(25, 'S510UQ-BQ439', 7, 7, 4, '1128', 16),
(26, 'A442UR-GA031D', 9, 6, 4, '1000', 14),
(27, 'FX553VD-DM001', 10, 10, 8, '1000', 16),
(28, 'ROG GL553VD-FY280T', 10, 12, 8, '1000', 16),
(29, 'ROG GL553VD-FY380T', 10, 12, 16, '1128', 16);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laptop`
--
ALTER TABLE `laptop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
