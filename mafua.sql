-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2024 at 08:48 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mafua`
--

-- --------------------------------------------------------

--
-- Table structure for table `mafuatable`
--

CREATE TABLE `mafuatable` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile_number` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mafuatable`
--

INSERT INTO `mafuatable` (`id`, `full_name`, `email`, `mobile_number`, `password`) VALUES
(1, 'Edge', 'edge@gmail.come', '0797223505', '$2y$10$L0CTFBTNpvV4y622xlHqtOtfCx5la.RdhP7e/of6be1Bz5vsBByMa'),
(2, 'Ronan lion', 'ronan@gmail.com', '0797223505', '$2y$10$lV/obMRdUljlvXUdIuWisOUnR6zQe0tdLgN0H32418o70hxLaxa0W');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile_number` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `mobile_number`, `password`) VALUES
(1, 'Caleb Kipkemboi Toromo', 'calebtoromo@gmail.com', '0797223505', '$2y$10$gROIp5Ek/qUs.b1KCqx9NuPvPlt//ibhSxd6rROl4OZkAdtRYurIq'),
(2, 'leon mpunje', 'leon@gmail.com', '0797223505', '$2y$10$vGnCYcjx9vkaels4Ud1JO./mjQkFbG15Xr.M5ZVRlhe62mYbqZlke'),
(3, 'Mr Krabs', 'krabu@gmail.com', '0797223505', '$2y$10$4XYHmyH/u4u9xDd/irofQ.apERaX5HQ.xTB9uNRxDhHeldxwLRtqa'),
(4, 'Engine', 'ronan@gmail.com', '0797223505', '$2y$10$idTwdvSmJ.6oi8oRhEXwvuIATIOklkdEfM/V2pBKsOyBGxJOLfZ/m'),
(5, 'Stongman', 'strongman@gmail.com', '0797223505', '$2y$10$xkMZRgpKg4Wr8Zc6eG0KTeR4L71MwSjpvr.k3w24UGI2a7esLrjOu'),
(6, 'John Cena', 'john@gmail.com', '0797223505', '$2y$10$jTHjdJl2IYct5Jn51x8FSOldv/Irz5nlmUpRnsiETEW9A90iIaRxa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mafuatable`
--
ALTER TABLE `mafuatable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mafuatable`
--
ALTER TABLE `mafuatable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
