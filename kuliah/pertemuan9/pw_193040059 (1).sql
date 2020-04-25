-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2020 at 04:04 PM
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
  `nama` varchar(100) DEFAULT NULL,
  `nrp` char(9) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `jurusan` varchar(100) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`, `gambar`) VALUES
(1, 'bangbang', '74983909', 'bangbang@gmail.com', 'Teknik Informatika', 'pic1.jpg'),
(2, 'nartam', '133040123', 'nartam@gmail.com', 'Teknik mesin', 'pic2.jpg'),
(3, 'berto', '153030321', 'berto@gmail.com', 'Ekonomi', 'pic3.jpg'),
(4, 'Rayhan', '193040044', 'rayhan@gmail.com', 'Teknik Informatika', 'pic4.jpg'),
(5, 'Aldi', '193040054', 'aldi@yahoo.com', 'Teknik Informatika', 'pic5.jpg'),
(6, 'Viqri', '193040041', 'viqri@gmail.com', 'Teknik Informatika', 'pic6.jpg'),
(7, 'Usep', '193040051', 'usep@yahoo.com', 'Teknik Informatika', 'pic7.jpg'),
(8, 'Rifky', '193040068', 'rifky@gmail.com', 'Teknik Informatika', 'pic8.jpg'),
(9, 'Aji', '193040046', 'aji@yahoo.com', 'Teknik Informatika', 'pic9.jpg'),
(10, 'Rio', '193040057', 'rio@gmail.com', 'Teknik Informatika', 'pic10.jpg'),
(11, 'kahis', '89012039', 'kahis@gmail.com', 'pangan', 'pic11.jpg'),
(12, 'kahis', '89012039', 'hahah@gmail.com', 'pangan', 'pic1.jpg');

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
