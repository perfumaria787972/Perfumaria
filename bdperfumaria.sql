-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 01-Mar-2019 às 14:55
-- Versão do servidor: 10.1.10-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `cod_contato` int(4) NOT NULL,
  `nome_admin` int(40) NOT NULL,
  `sobrenome_admin` int(20) NOT NULL,
  `login` int(14) NOT NULL,
  `senha` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `g3_contato`
--

CREATE TABLE `g3_contato` (
  `cod_contato` int(4) NOT NULL,
  `email` varchar(20) NOT NULL,
  `telefone` int(40) NOT NULL,
  `celular` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `g3_empresa`
--

CREATE TABLE `g3_empresa` (
  `cod_empresa` int(4) NOT NULL,
  `cod_end` int(4) NOT NULL,
  `nome_empresa` varchar(40) NOT NULL,
  `cnpj` int(22) NOT NULL,
  `contato` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Estrutura da tabela `g3_produto`
--

CREATE TABLE `g3_produto` (
  `cod_produto` int(4) NOT NULL,
  `cod_empresa` int(4) NOT NULL,
  `nome_produto` varchar(40) NOT NULL,
  `descrição` varchar(40) NOT NULL,
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
  ADD KEY `cod_end` (`cod_end`),
  ADD KEY `cod_contato` (`cod_contato`);

--
-- Indexes for table `g3_contato`
--
ALTER TABLE `g3_contato`
  ADD PRIMARY KEY (`cod_contato`),
  ADD UNIQUE KEY `cod_contato` (`cod_contato`);

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
  MODIFY `cod_admin` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `g3_contato`
--
ALTER TABLE `g3_contato`
  MODIFY `cod_contato` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `g3_empresa`
--
ALTER TABLE `g3_empresa`
  MODIFY `cod_empresa` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `g3_endereco`
--
ALTER TABLE `g3_endereco`
  MODIFY `cod_end` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `g3_produto`
--
ALTER TABLE `g3_produto`
  MODIFY `cod_produto` int(4) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `g3_administrador`
--
ALTER TABLE `g3_administrador`
  ADD CONSTRAINT `g3_administrador_ibfk_1` FOREIGN KEY (`cod_end`) REFERENCES `g3_endereco` (`cod_end`),
  ADD CONSTRAINT `g3_administrador_ibfk_2` FOREIGN KEY (`cod_contato`) REFERENCES `g3_contato` (`cod_contato`);

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
