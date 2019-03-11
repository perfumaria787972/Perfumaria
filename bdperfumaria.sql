-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 11-Mar-2019 às 11:43
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdperfumaria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `g3_administrador`
--

CREATE TABLE `g3_administrador` (
  `cod_admin` int(4) NOT NULL,
  `cod_end` int(4) NOT NULL,
  `nome_admin` varchar(40) NOT NULL,
  `sobrenome_admin` varchar(20) NOT NULL,
  `login` varchar(50) NOT NULL,
  `senha` text NOT NULL,
  `situacao` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `g3_administrador`
--

INSERT INTO `g3_administrador` (`cod_admin`, `cod_end`, `nome_admin`, `sobrenome_admin`, `login`, `senha`, `situacao`) VALUES
(13, 16, 'a', 'a', 'a@ggmail.com', 'aaaaaa', 'ativo'),
(14, 17, 'b', 'b', 'a@ds', 'as', 'ativo'),
(15, 18, 'b', 'b', 'a@ds', 'za', 'ativo'),
(16, 24, 'a', 'a', 'a@a', 'a', 'ativo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `g3_empresa`
--

CREATE TABLE `g3_empresa` (
  `cod_empresa` int(4) NOT NULL,
  `cod_end` int(4) NOT NULL,
  `nome_empresa` varchar(40) NOT NULL,
  `cnpj` int(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `g3_empresa`
--

INSERT INTO `g3_empresa` (`cod_empresa`, `cod_end`, `nome_empresa`, `cnpj`) VALUES
(10, 28, 'a', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `g3_endereco`
--

CREATE TABLE `g3_endereco` (
  `cod_end` int(4) NOT NULL,
  `logradouro` varchar(100) NOT NULL,
  `cep` int(8) NOT NULL,
  `numero` int(100) NOT NULL,
  `bairro` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `g3_endereco`
--

INSERT INTO `g3_endereco` (`cod_end`, `logradouro`, `cep`, `numero`, `bairro`) VALUES
(16, 'a', 0, 0, 'a'),
(17, 'b', 12, 0, 'b'),
(18, 'b', 12, 0, 'b'),
(19, 'a', 0, 0, 'a'),
(20, 'a', 0, 0, 'a'),
(21, 'a', 0, 0, 'a'),
(22, 'a', 0, 0, 'a'),
(23, 'a', 0, 0, 'a'),
(24, 'a', 0, 0, 'a'),
(25, 'a', 0, 0, 'a'),
(26, 'a', 0, 0, 'a'),
(27, 'a', 0, 0, 'a'),
(28, 'a', 0, 0, 'a'),
(29, 'a', 0, 0, 'a');

-- --------------------------------------------------------

--
-- Estrutura da tabela `g3_produto`
--

CREATE TABLE `g3_produto` (
  `cod_produto` int(4) NOT NULL,
  `cod_empresa` int(4) NOT NULL,
  `nome_produto` varchar(40) NOT NULL,
  `descricao` varchar(40) NOT NULL,
  `marca` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `g3_administrador`
--
ALTER TABLE `g3_administrador`
  ADD PRIMARY KEY (`cod_admin`),
  ADD UNIQUE KEY `cod_admin` (`cod_admin`),
  ADD KEY `cod_end` (`cod_end`);

--
-- Indexes for table `g3_empresa`
--
ALTER TABLE `g3_empresa`
  ADD PRIMARY KEY (`cod_empresa`),
  ADD UNIQUE KEY `cod_empresa` (`cod_empresa`),
  ADD KEY `cod_end` (`cod_end`);

--
-- Indexes for table `g3_endereco`
--
ALTER TABLE `g3_endereco`
  ADD PRIMARY KEY (`cod_end`),
  ADD UNIQUE KEY `cod_end` (`cod_end`);

--
-- Indexes for table `g3_produto`
--
ALTER TABLE `g3_produto`
  ADD PRIMARY KEY (`cod_produto`),
  ADD UNIQUE KEY `cod_produto` (`cod_produto`),
  ADD KEY `cod_empresa` (`cod_empresa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `g3_administrador`
--
ALTER TABLE `g3_administrador`
  MODIFY `cod_admin` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `g3_empresa`
--
ALTER TABLE `g3_empresa`
  MODIFY `cod_empresa` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `g3_endereco`
--
ALTER TABLE `g3_endereco`
  MODIFY `cod_end` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `g3_produto`
--
ALTER TABLE `g3_produto`
  MODIFY `cod_produto` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `g3_administrador`
--
ALTER TABLE `g3_administrador`
  ADD CONSTRAINT `g3_administrador_ibfk_1` FOREIGN KEY (`cod_end`) REFERENCES `g3_endereco` (`cod_end`);

--
-- Limitadores para a tabela `g3_empresa`
--
ALTER TABLE `g3_empresa`
  ADD CONSTRAINT `g3_empresa_ibfk_1` FOREIGN KEY (`cod_end`) REFERENCES `g3_endereco` (`cod_end`);

--
-- Limitadores para a tabela `g3_produto`
--
ALTER TABLE `g3_produto`
  ADD CONSTRAINT `g3_produto_ibfk_1` FOREIGN KEY (`cod_empresa`) REFERENCES `g3_empresa` (`cod_empresa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
