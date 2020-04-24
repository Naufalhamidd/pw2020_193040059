-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2020 at 05:02 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_193040059`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `no` int(100) NOT NULL,
  `nama alat musik` varchar(100) NOT NULL,
  `cara main` varchar(100) NOT NULL,
  `harga` int(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `no`, `nama alat musik`, `cara main`, `harga`, `gambar`) VALUES
(1, 1, 'Gitar', 'Dipetik', 500, 'pic1.jpg'),
(2, 2, 'Angklung', 'Digoyang', 450, 'pic2.jpg'),
(3, 3, 'Piano', 'Ditekan', 900, 'pic3.jpg'),
(4, 4, 'Suling', 'Ditiup', 600, 'pic4.jpg'),
(5, 5, 'Kendang', 'Dipukul', 350, 'pic5.jpg'),
(6, 6, 'Sexophone', 'Ditiup', 1000000, 'pic6.jpg'),
(7, 7, 'Harmonika', 'Ditiup', 550, 'pic7.jpg'),
(8, 8, 'Kajon', 'Dipukul', 400, 'pic8.jpg'),
(9, 9, 'Drum', 'Dipukul', 15000000, 'pic9.jpg'),
(10, 10, 'Saron', 'Dipukul', 780, 'pic10.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
