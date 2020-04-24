-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2020 at 11:33 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_193040059`
--

-- --------------------------------------------------------

--
-- Table structure for table `musik`
--

CREATE TABLE `musik` (
  `id` int(11) NOT NULL,
  `no` int(100) NOT NULL,
  `nama alat musik` varchar(100) NOT NULL,
  `cara main` varchar(100) NOT NULL,
  `harga` int(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `musik`
--

INSERT INTO `musik` (`id`, `no`, `nama alat musik`, `cara main`, `harga`, `gambar`) VALUES
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
-- Indexes for table `musik`
--
ALTER TABLE `musik`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `musik`
--
ALTER TABLE `musik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
