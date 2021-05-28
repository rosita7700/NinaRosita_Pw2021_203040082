-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2021 at 10:02 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `praktikum`
--

-- --------------------------------------------------------

--
-- Table structure for table `pw_tubes_203040082`
--

CREATE TABLE `pw_tubes_203040082` (
  `id` int(50) NOT NULL,
  `img` varchar(50) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `detail` varchar(50) NOT NULL,
  `ukuran` varchar(50) NOT NULL,
  `warna` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pw_tubes_203040082`
--

INSERT INTO `pw_tubes_203040082` (`id`, `img`, `nama_barang`, `detail`, `ukuran`, `warna`) VALUES
(2, '2.jpeg', 'tay day modelo', 'bahan katun, lengan pendek', 'm', 'navy'),
(3, '3.jpeg', 'tay day tamanho blusa', 'bahan ringan', 'm, s, l, xl', 'satu warna'),
(4, '4.jpeg', 'tay day pink sky', 'bahan katun, lengan pendek', 'm, s, l, xl', 'satu warna'),
(5, '5.jpeg', 'tay day masker', '-', '-', 'warna random'),
(6, '6.jpeg', 'tay day black gold', 'bahan katun, lengan pendek, crop.', 'm, s, l, xl', 'satu warna'),
(7, '7.jpeg', 'tay day black gold', 'bahan katun, lengan pendek, crop.', 'size jumbo', 'satu warna'),
(8, '8.jpeg', 'tay day tamanho', 'bahan katun, lengan pendek', 'm, s, l, xl', 'galaksi black, galaksi white.'),
(10, '1.jpeg', 'tay day modelo', 'bahan katun, lengan pendek', 'm', 'pink');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$TQpBP2dc15VHJn50FekpceG0cjoMNiK7E8qYyM7iuC2KjuhjVIvHm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pw_tubes_203040082`
--
ALTER TABLE `pw_tubes_203040082`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pw_tubes_203040082`
--
ALTER TABLE `pw_tubes_203040082`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
