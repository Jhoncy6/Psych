-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Set-2022 às 23:54
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `psych`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `diario`
--

CREATE TABLE `diario` (
  `dataD` date NOT NULL,
  `tituloD` varchar(50) DEFAULT NULL,
  `textoD` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pacientes`
--

CREATE TABLE `pacientes` (
  `nomePA` text NOT NULL,
  `emailPA` varchar(50) NOT NULL,
  `senhaPA` varchar(15) NOT NULL,
  `telPA` varchar(12) NOT NULL,
  `estadoPA` text NOT NULL,
  `cidadePA` text NOT NULL,
  `bairroPA` text NOT NULL,
  `convenioPA` varchar(20) NOT NULL,
  `genero` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pacientes`
--

INSERT INTO `pacientes` (`nomePA`, `emailPA`, `senhaPA`, `telPA`, `estadoPA`, `cidadePA`, `bairroPA`, `convenioPA`, `genero`) VALUES
('ALICE', 'licebraga7@gmail.com', 'ghhhhhhh', '24-89655-867', 'RJ', 'ALAGOAS', 'santa ines', 'Unimed', 'masculino'),
('joana', 'joana@hotmail.com', '12345', '24-99270-281', 'PA', 'sao jose das letras', 'santa ines', 'Bradesco', 'feminino');

-- --------------------------------------------------------

--
-- Estrutura da tabela `profissional`
--

CREATE TABLE `profissional` (
  `nomePR` text NOT NULL,
  `emailPR` varchar(50) NOT NULL,
  `senhaPR` varchar(15) NOT NULL,
  `telPR` varchar(12) NOT NULL,
  `estadoPR` text NOT NULL,
  `cidadePR` text NOT NULL,
  `bairroPR` text NOT NULL,
  `ruaPR` text NOT NULL,
  `numeroPR` int(5) NOT NULL,
  `complementoPR` varchar(50) DEFAULT NULL,
  `cpf` varchar(50) NOT NULL,
  `especialidade` varchar(200) DEFAULT NULL,
  `planodesaude` tinyint(1) DEFAULT NULL,
  `genero` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `profissional`
--

INSERT INTO `profissional` (`nomePR`, `emailPR`, `senhaPR`, `telPR`, `estadoPR`, `cidadePR`, `bairroPR`, `ruaPR`, `numeroPR`, `complementoPR`, `cpf`, `especialidade`, `planodesaude`, `genero`) VALUES
('pedro paulo', 'licebraga7@gmail.com', 'ghhhhhhh', '24-9987-6325', 'RS', 'amapa', 'rocinha', '252', 1, 'DASDSAD', '2', 'terapeuta', 0, 'masculino');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
