-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11-Mar-2023 às 02:15
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `login`
--
CREATE DATABASE IF NOT EXISTS `login` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `login`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `cpf` int(15) NOT NULL,
  `senha` varchar(200) NOT NULL,
  `int` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`int`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `int` int(11) NOT NULL AUTO_INCREMENT;
--
-- Banco de dados: `processa_formulario`
--
CREATE DATABASE IF NOT EXISTS `processa_formulario` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `processa_formulario`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabela_processa_formulario`
--

CREATE TABLE `tabela_processa_formulario` (
  `cpf` varchar(15) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `rua` varchar(150) NOT NULL,
  `numero` int(5) NOT NULL,
  `bairro` varchar(25) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` int(12) NOT NULL,
  `senha` varchar(500) NOT NULL,
  `int` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tabela_processa_formulario`
--

INSERT INTO `tabela_processa_formulario` (`cpf`, `nome`, `rua`, `numero`, `bairro`, `cidade`, `estado`, `email`, `telefone`, `senha`, `int`) VALUES
('123', 'geovani', 'sanches', 751, 'bosque', 'ZANAGÃO', 'ZANAGÃO', 'kalio@gmail.com', 2147483647, '123', 2),
('123', 'Luiz', 'sanches', 751, 'bosque', 'ZANAGÃO', 'BA', 'kalio@gmail.com', 2147483647, '123', 3),
('456', 'luiz', 'Avelino', 146, 'Bossa', 'Sumare', 'AL', 'kalio@gmail.com', 2147483647, '123', 4);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tabela_processa_formulario`
--
ALTER TABLE `tabela_processa_formulario`
  ADD PRIMARY KEY (`int`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tabela_processa_formulario`
--
ALTER TABLE `tabela_processa_formulario`
  MODIFY `int` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Banco de dados: `processa_produtos`
--
CREATE DATABASE IF NOT EXISTS `processa_produtos` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `processa_produtos`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabela_processa_produtos`
--

CREATE TABLE `tabela_processa_produtos` (
  `nome` varchar(15) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `quantidade` int(20) NOT NULL,
  `preco1` varchar(20) NOT NULL,
  `preco2` varchar(20) NOT NULL,
  `int` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tabela_processa_produtos`
--

INSERT INTO `tabela_processa_produtos` (`nome`, `categoria`, `quantidade`, `preco1`, `preco2`, `int`) VALUES
('João', 'Educação', 40, 'R$12,25', 'R$15,42', 1),
('luiz', 'Educação', 40, '12', '15', 2),
('luiz', 'Educação', 40, '40', '15', 3);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tabela_processa_produtos`
--
ALTER TABLE `tabela_processa_produtos`
  ADD PRIMARY KEY (`int`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tabela_processa_produtos`
--
ALTER TABLE `tabela_processa_produtos`
  MODIFY `int` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
