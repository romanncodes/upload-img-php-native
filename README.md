# upload-img-php-native

-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 06, 2021 at 06:31 PM
-- Server version: 5.7.25
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `integracion_demo`
--
CREATE DATABASE IF NOT EXISTS `integracion_demo` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `integracion_demo`;

-- --------------------------------------------------------

--
-- Table structure for table `producto`
--

CREATE TABLE `producto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `precio` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `foto` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `producto`
--

INSERT INTO `producto` (`id`, `nombre`, `precio`, `stock`, `foto`) VALUES
(1, 'test', 333, 333, 'http://localhost/integracion_demo/uploads/daft-punk-14852-1920x1200.jpeg'),
(2, 'test', 111, 111, 'http://localhost/integracion_demo/uploads/guason.jpg'),
(3, 'test', 432, 233, 'http://localhost/integracion_demo/uploads/foto_2021-06-06_18:14:06.jpeg'),
(4, 'CocaCola', 1200, 1234, 'http://localhost/integracion_demo/uploads/CocaCola_2021-06-06_18:15:54.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
