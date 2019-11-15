-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08-Nov-2019 às 05:31
-- Versão do servidor: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistemacep`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `consultacep`
--

CREATE TABLE `consultacep` (
  `idConsultaCEP` int(11) NOT NULL,
  `cep` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `logradouro` varchar(265) COLLATE utf8_bin DEFAULT NULL,
  `bairro` varchar(265) COLLATE utf8_bin DEFAULT NULL,
  `uf` varchar(2) COLLATE utf8_bin DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `consultacep`
--
ALTER TABLE `consultacep`
  ADD PRIMARY KEY (`idConsultaCEP`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `consultacep`
--
ALTER TABLE `consultacep`
  MODIFY `idConsultaCEP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
