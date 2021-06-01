-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2021 at 05:42 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edumi`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'dika', '$2y$10$m6/E1.e3QoTeF1GgnUiKO.R4HpcCQLnbMwlrscBiVHkX3hBruveru'),
(2, 'triandikaabriansyah', '$2y$10$AhWgf5goLI4NKG80XZJCsefWISa5RdLdn1m.HHLpF7DxwBSogq5Ji'),
(3, 'admin', '$2y$10$h1e48oBgSrmdxS6yEQWy9uSErKg2Vot8vluLIyX8t/GzSEoJBGSye'),
(5, 'triandika', '$2y$10$dG/C1FyIv8PAv6oL/OWsr.agQ6KL0c6V.KCYnjeQaW/i9HcgerLMK'),
(6, 'triandikaabriansyahaaa', '$2y$10$xlfijs/b84i9tPTpmRc5O.JHNnBMrXGzqdXK2uDVuhTWpjr2JONzy'),
(7, 'dikaa', '$2y$10$gssupeFTgcCkmyUhNIFz/.Nk4eCRtDdlO1ivN/RY0USEX2GGP8XAO'),
(8, 'dikaaa', '$2y$10$vfSBo0Kphpqej.dOQgYmIu49osq5wa7NTDj.toPw8FfqylvDyYnGW'),
(10, 'operator', '$2y$10$uI/rw6MCzyGNpPPNuBxdMOzCwcKJOsDqtctihXFgof12rerme0VS2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
