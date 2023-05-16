-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2023 at 11:28 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectrpl2`
--

-- --------------------------------------------------------

--
-- Table structure for table `pustaka`
--

CREATE TABLE `pustaka` (
  `idbuku` int(11) NOT NULL,
  `judulbuku` varchar(255) NOT NULL,
  `namapenerbit` varchar(255) NOT NULL,
  `tahunterbit` varchar(255) NOT NULL,
  `coverbuku` varchar(255) NOT NULL,
  `jenisbuku` varchar(255) NOT NULL,
  `statusbuku` varchar(255) NOT NULL,
  `kondisi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pustaka`
--

INSERT INTO `pustaka` (`idbuku`, `judulbuku`, `namapenerbit`, `tahunterbit`, `coverbuku`, `jenisbuku`, `statusbuku`, `kondisi`) VALUES
(2222, 'gtw', 'aku', '2022', '../pages/images/alam semesta.jpg', 'ipa', 'rusak', 'tidak dipinjam'),
(3238, 'divp', 'jer', '2020', '../pages/images/classname.png', 'coding', 'baik', 'tidak dipinjam'),
(3239, 'ngurah', 'jeremy', '2021', '../pages/images/enkapsulasi.png', 'coding', 'baik', 'dipinjam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pustaka`
--
ALTER TABLE `pustaka`
  ADD PRIMARY KEY (`idbuku`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pustaka`
--
ALTER TABLE `pustaka`
  MODIFY `idbuku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3242;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
