-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02-Dez-2022 às 21:29
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cwm-db`
--
CREATE DATABASE IF NOT EXISTS `cwm-db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cwm-db`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `catequista`
--

CREATE TABLE `catequista` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fone` int(9) NOT NULL,
  `nasc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `catequista`
--

INSERT INTO `catequista` (`id`, `nome`, `email`, `fone`, `nasc`) VALUES
(16, 'assim nao', 'ass@gmail.com', 99345, '2022-11-07');

-- --------------------------------------------------------

--
-- Estrutura da tabela `catequizando`
--

CREATE TABLE `catequizando` (
  `id` int(11) NOT NULL,
  `centcat` varchar(80) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cidade` varchar(30) NOT NULL,
  `nasc` date NOT NULL,
  `batparoq` varchar(50) NOT NULL,
  `npai` varchar(50) NOT NULL,
  `nmae` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fone` int(9) NOT NULL,
  `endereco` varchar(30) NOT NULL,
  `etapa` varchar(30) NOT NULL,
  `anoetapa` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `catequizando`
--

INSERT INTO `catequizando` (`id`, `centcat`, `nome`, `cidade`, `nasc`, `batparoq`, `npai`, `nmae`, `email`, `fone`, `endereco`, `etapa`, `anoetapa`) VALUES
(17, 'b', 'a', 'a', '2022-11-16', 'a', 'a', 'a', 'a', 9, 'a', 'a', '2022-11-02');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `catequista`
--
ALTER TABLE `catequista`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `catequizando`
--
ALTER TABLE `catequizando`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `catequista`
--
ALTER TABLE `catequista`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `catequizando`
--
ALTER TABLE `catequizando`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
