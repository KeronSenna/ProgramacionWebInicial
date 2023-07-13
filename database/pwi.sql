-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2023 at 10:33 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pwi`
--

-- --------------------------------------------------------

--
-- Table structure for table `consultas`
--

CREATE TABLE `consultas` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Apellido` varchar(30) NOT NULL,
  `Correo` varchar(70) NOT NULL,
  `Mensaje` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `empleados`
--

CREATE TABLE `empleados` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `edad` int(3) NOT NULL,
  `birth_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `empleados`
--

INSERT INTO `empleados` (`id`, `name`, `surname`, `edad`, `birth_date`) VALUES
(1, 'Gary', 'Esponja', 4, '2025-04-02'),
(2, 'Patricio', 'Estrella', 21, '2014-12-12'),
(3, 'Bob', 'Esponja', 20, '2012-06-27'),
(4, 'Sandy', 'Arenita', 21, '2014-07-16'),
(5, 'Calamardo', 'Tortellini', 27, '2011-03-19');

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `Producto` text NOT NULL,
  `Tipo de producto` text NOT NULL,
  `Precio base` int(11) NOT NULL,
  `Ultimo precio descontado` int(11) NOT NULL,
  `Fecha de ingreso` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`id`, `Producto`, `Tipo de producto`, `Precio base`, `Ultimo precio descontado`, `Fecha de ingreso`) VALUES
(1, 'Camara Web Webcam Iqual Iqlive Full Hd 1080p Windows Mac Usb', 'CAMARAS', 4500, 3500, '2023-07-01'),
(2, 'Webcam Vidlok W90 HD', 'CAMARAS', 5500, 4580, '2023-07-03'),
(3, 'Camara Ip Nexxt Exterior a Bateria (Nhc-o630) Smart Home', 'CAMARAS', 6000, 4500, '2023-07-02'),
(4, 'Hub Usb 3.0 Tp-link Uh400 4 Puertos Usb 3.0', 'ACCESORIOS DE PC', 3500, 1347, '2023-06-20'),
(5, 'Mouse Con Luces Gamer GTC Mgg-015', 'ACCESORIOS DE PC', 3000, 2354, '2023-06-12'),
(6, 'Kit Teclado Y Mouse Logitech Mk120 Español Usb Negro', 'ACCESORIOS DE PC', 2500, 2000, '2023-06-18'),
(7, 'Parlante Portátil Philco 94DJP15 Bluetooth Full Led', 'PARLANTES', 6650, 4754, '2023-04-11'),
(8, 'Parlante Bluetooth Bose Home Speaker 500', 'PARLANTES', 4050, 2956, '2023-04-26'),
(9, 'Parlante Stromberg Bump Woofer 12 Pulgadas Bafle Potenciado', 'PARLANTES', 5000, 4500, '2023-04-28'),
(10, 'Modem Adsl Router Tp-link Td-w8961nd Wireless 300m', 'ROUTERS Y MODEMS', 5000, 3697, '2023-05-23'),
(11, 'Mr30g Router Wir Mercusys Gigabit Ac1200 4 Ant (0615) Tp-link', 'ROUTERS Y MODEMS', 6850, 4953, '2023-05-29'),
(12, 'Router Wireless Nexxt Nebula 301 Plus - 300mbps 4 Antenas (Ncr-n301-a)', 'ROUTERS Y MODEMS', 4000, 2500, '2023-05-23'),
(13, 'Motorola Edge 30 Fusion XT 2243-1 256 GB Negro Cuarzo', 'CELULARES', 26550, 18965, '2023-07-10'),
(14, 'Samsung Galaxy A04e 64 GB / 3 GB RAM Blue SM-A042MLBFARO', 'CELULARES', 21550, 16985, '2023-07-09'),
(15, 'Samsung Galaxy Z Flip4 5G 256 GB / 8 GB RAM Grafito', 'CELULARES', 20000, 17550, '2023-07-08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `consultas`
--
ALTER TABLE `consultas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `consultas`
--
ALTER TABLE `consultas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
