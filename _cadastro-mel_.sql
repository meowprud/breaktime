-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Out-2022 às 21:27
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cadastro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `info`
--

CREATE TABLE `info` (
  `nome` varchar(120) NOT NULL,
  `usuario` varchar(120) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `confirmesenha` varchar(32) DEFAULT NULL,
  `celular` varchar(12) DEFAULT NULL,
  `genero` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `codigo` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `info`
--

INSERT INTO `info` (`nome`, `usuario`, `senha`, `confirmesenha`, `celular`, `genero`, `email`, `codigo`) VALUES
('mel', 'melmel', '12345', '12345', '123456789', 'feminino', 'alalal@gmail.com', 6),
('norma', 'normalinda', 'norma123', 'norma123', '123456789', 'feminino', 'norma@gmail.com', 7),
('van', 'van123', '123456', '123456', '123456789', 'feminino', 'van@gmail.com', 8);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `info`
--
ALTER TABLE `info`
  MODIFY `codigo` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
