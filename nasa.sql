-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 21-Out-2018 às 07:24
-- Versão do servidor: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nasa`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `benefits`
--

CREATE TABLE `benefits` (
  `id` int(11) NOT NULL,
  `benefit` varchar(255) NOT NULL,
  `cost` int(11) NOT NULL,
  `partner_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `benefits`
--

INSERT INTO `benefits` (`id`, `benefit`, `cost`, `partner_id`) VALUES
(1, 'Voucher de R$20,00', 500, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `partners`
--

CREATE TABLE `partners` (
  `id` int(11) NOT NULL,
  `company` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `balance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `partners`
--

INSERT INTO `partners` (`id`, `company`, `logo`, `balance`) VALUES
(1, 'Uber', 'https://http2.mlstatic.com/adesivo-uber-logo-para-drivers-14-x-19-cm-D_NQ_NP_816622-MLB27245869419_042018-F.jpg', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tree`
--

CREATE TABLE `tree` (
  `id` int(11) NOT NULL,
  `lat` decimal(10,8) NOT NULL,
  `lng` decimal(11,8) NOT NULL,
  `specie` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `nickname` varchar(255) NOT NULL,
  `owner_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tree`
--

INSERT INTO `tree` (`id`, `lat`, `lng`, `specie`, `age`, `nickname`, `owner_id`) VALUES
(1, '10.00000000', '10.00000000', 'teste', 0, 'teste', 18),
(2, '-19.96799410', '-43.95403560', 'AcÃ¡cia', 0, 'Teste', 18);

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `balance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `name`, `phone`, `balance`) VALUES
(1, 'teste@teste.com', 'teste', 'Test User', '31987654321', 0),
(18, 'contato@arnaudlanna.com', '123456', 'Arnaud Lanna', '3166569898', 1000),
(19, 'teste2@teste.com', '123456', 'Teste', '123456789', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `benefits`
--
ALTER TABLE `benefits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `partner_id` (`partner_id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tree`
--
ALTER TABLE `tree`
  ADD PRIMARY KEY (`id`),
  ADD KEY `owner_id` (`owner_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `benefits`
--
ALTER TABLE `benefits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tree`
--
ALTER TABLE `tree`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `benefits`
--
ALTER TABLE `benefits`
  ADD CONSTRAINT `benefits_ibfk_1` FOREIGN KEY (`partner_id`) REFERENCES `partners` (`id`);

--
-- Limitadores para a tabela `tree`
--
ALTER TABLE `tree`
  ADD CONSTRAINT `tree_ibfk_1` FOREIGN KEY (`owner_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
