-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2020 at 02:46 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dashboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `mes_cliente` varchar(50) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `estado` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `mes_cliente`, `quantidade`, `estado`) VALUES
(1, 'Julho', 795, 'RJ'),
(2, 'Dezembro', 423, 'SP'),
(3, 'Outubro', 974, 'MG');

-- --------------------------------------------------------

--
-- Table structure for table `vendas`
--

CREATE TABLE `vendas` (
  `id_venda` int(11) DEFAULT NULL,
  `mes_venda` varchar(50) DEFAULT NULL,
  `qtd_venda` int(11) DEFAULT NULL,
  `valor_venda` int(11) DEFAULT NULL,
  `ano_venda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendas`
--

INSERT INTO `vendas` (`id_venda`, `mes_venda`, `qtd_venda`, `valor_venda`, `ano_venda`) VALUES
(10, 'Jan', 29, 276, 2020),
(83, 'Fev', 93, 354, 2020),
(44, 'Marc', 50, 362, 2020),
(19, 'Abr', 91, 397, 2020),
(21, 'Mai', 99, 440, 2020),
(30, 'Jun', 34, 428, 2020),
(84, 'Jul', 10, 142, 2020),
(97, 'Ago', 73, 276, 2020),
(36, 'Set', 9, 247, 2020),
(43, 'Out', 25, 281, 2020),
(69, 'Nov', 93, 329, 2020),
(28, 'Dez', 29, 116, 2020);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
