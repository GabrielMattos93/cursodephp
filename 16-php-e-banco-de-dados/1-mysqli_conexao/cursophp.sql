-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Mar-2022 às 23:29
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cursophp`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `carros`
--

CREATE TABLE `carros` (
  `id` int(11) NOT NULL,
  `marca` varchar(500) DEFAULT NULL,
  `cor` int(11) NOT NULL,
  `motor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `itens`
--

CREATE TABLE `itens` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `descricao` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `itens`
--

INSERT INTO `itens` (`id`, `nome`, `descricao`) VALUES
(2, 'Bola de gude', 'Carrinho de controle remoto'),
(3, 'bola', 'Bola de futebol'),
(4, 'Boneca', 'Boneca'),
(5, 'Teclado da Microsoft', 'Este teclado é novo, e está na caixa'),
(7, 'Microfone de Lapela', 'Microfone de Lapela novo'),
(8, 'Abajur', 'Abajur antigo vindo da china'),
(9, 'Xícara', 'É uma xícara de cor rosa'),
(10, 'Sofá', 'Sofá de 6 lados'),
(11, 'Suporte de Microfone', 'O suporte é novo e foi fabricado na China'),
(13, 'Notebook da Sony', 'Notebook novo com placa de vídeo nvidia geo force'),
(15, 'Celular da Samsung', 'O Celular é um A7 da Samsung');

-- --------------------------------------------------------

--
-- Estrutura da tabela `mailmarketing`
--

CREATE TABLE `mailmarketing` (
  `email` varchar(255) NOT NULL,
  `nome` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `notnull`
--

CREATE TABLE `notnull` (
  `nome` varchar(100) NOT NULL,
  `idade` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `notnull`
--

INSERT INTO `notnull` (`nome`, `idade`) VALUES
('Gabriel', 28),
('', 28),
('teste', 28),
('João', NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `itens`
--
ALTER TABLE `itens`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `mailmarketing`
--
ALTER TABLE `mailmarketing`
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `itens`
--
ALTER TABLE `itens`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
