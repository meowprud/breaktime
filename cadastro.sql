-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Dez-2022 às 09:19
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
-- Banco de dados: `cadastro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `reservas`
--

CREATE TABLE `reservas` (
  `idreserva` int(11) NOT NULL,
  `dia` date NOT NULL,
  `hora` time NOT NULL,
  `qtdhoras` int(11) NOT NULL,
  `senha` varchar(30) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `planos` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `reservas`
--

INSERT INTO `reservas` (`idreserva`, `dia`, `hora`, `qtdhoras`, `senha`, `usuario`, `planos`) VALUES
(100, '2020-01-07', '10:00:00', 3, '123456', 'melmelaa', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(10) UNSIGNED ZEROFILL NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `celular` varchar(12) DEFAULT NULL,
  `genero` varchar(25) DEFAULT NULL,
  `login` varchar(30) DEFAULT NULL,
  `senha` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`ID`, `nome`, `email`, `celular`, `genero`, `login`, `senha`) VALUES
(0000000014, NULL, 'mel123@gmail.com', '21968161463', 'feminino', 'mel123', '103469'),
(0000000015, NULL, 'dkona@gmail.com', '123456', 'feminino', 'mel123', '123456'),
(0000000016, NULL, 'mel@gmail.com', '123456789', 'feminino', 'mel123', '123456'),
(0000000017, NULL, 'mel@gmail.com', '123456789', 'feminino', 'mel123', 'dsad'),
(0000000018, NULL, 'mel@gmail.com', '123456789', 'feminino', 'mel123', 'dsad'),
(0000000019, NULL, 'lissa@gmail.com', '1234566', 'feminino', 'mel12', '123456'),
(0000000020, NULL, 'lissa@gmail.com', '1234566', 'feminino', 'mel1', '123456'),
(0000000021, NULL, 'linda@gmail.com', '964585222', 'feminino', 'melissa15', 'mel345'),
(0000000022, NULL, 'linda@gmail.com', '964585222', 'feminino', 'melissa15', 'mel345'),
(0000000023, NULL, 'melissa@gmail.com', '21961861463', 'feminino', 'mel345', '123456789'),
(0000000024, 'melissa ', 'lissapruds@gmail.com', '123456789', 'feminino', 'melmelprincess', 'lindalinda123'),
(0000000025, 'Melissa Mendes Prudêncio dos Santos', 'lissapruds@gmail.com', '21968161463', 'feminino', 'meprudencio', '103469'),
(0000000026, 'Vanieli', 'vmf2002@gamil.com', '982424367', 'feminino', 'vanvan1', '1231234'),
(0000000027, 'vinicius', 'vini@gmail.com', '987456123', 'feminino', 'vinivini', '123456'),
(0000000028, 'juliana', 'juju@gmail.com', '219999999', 'feminino', 'juju', '103469'),
(0000000029, 'rayssa', 'rayssa@gmail.com', '2196546565', 'feminino', 'rayemidio', '123456'),
(0000000030, 'vanieli', 'van@gmail.com', '2199996', 'feminino', 'van123', '123456'),
(0000000031, 'Melissa', 'melissa@gmail.com', '21969636364', 'feminino', 'melmelaa', '123456');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`idreserva`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `reservas`
--
ALTER TABLE `reservas`
  MODIFY `idreserva` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
