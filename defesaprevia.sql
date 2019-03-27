-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 25-Mar-2019 às 11:52
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `getranmc_cadastro_estacionamento`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `defesaprevia`
--

CREATE TABLE `defesaprevia` (
  `id` int(11) NOT NULL,
  `requerente` varchar(200) DEFAULT NULL,
  `processo` int(10) DEFAULT NULL,
  `penalidade` varchar(200) DEFAULT NULL,
  `auto` varchar(20) DEFAULT NULL,
  `veiculo_modelo` varchar(200) DEFAULT NULL,
  `placa` varchar(50) DEFAULT NULL,
  `cor` varchar(20) DEFAULT NULL,
  `ano_fab` int(4) DEFAULT NULL,
  `dos_fatos` text,
  `dos_meritos` text,
  `decisao` text,
  `data_entrada` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `defesaprevia`
--
ALTER TABLE `defesaprevia`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `defesaprevia`
--
ALTER TABLE `defesaprevia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
