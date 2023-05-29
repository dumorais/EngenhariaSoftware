-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29/05/2023 às 19:03
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `flash_entregas`
--

CREATE DATABASE flash_entregas;
USE flash_entregas;
-- --------------------------------------------------------

--
-- Estrutura para tabela `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `dt_nasc` date NOT NULL,
  `senha` varchar(60) NOT NULL,
  `telefone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nome`, `email`, `cpf`, `dt_nasc`, `senha`, `telefone`) VALUES
(1, 'Teste ', 'teste@hotmail.com', '123.456.789-10', '2013-05-01', 'teste123', '(11) 92786-0987'),
(2, 'Eduardo', 'eduardo@hotmail.com', '', '2001-01-01', 'edu123', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `endereco`
--

CREATE TABLE `endereco` (
  `id_endereco` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `rua` varchar(100) NOT NULL,
  `numero` int(11) NOT NULL,
  `bairro` varchar(20) NOT NULL,
  `cidade` varchar(30) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `cep` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `endereco`
--

INSERT INTO `endereco` (`id_endereco`, `id_cliente`, `rua`, `numero`, `bairro`, `cidade`, `estado`, `cep`) VALUES
(4, 1, 'Rua Silva Teixeira', 301, 'Maua', 'São Caetano', 'São Paulo', '09876-330'),
(5, 1, 'Rua Carlos Alberto', 301, 'Maua', 'São Caetano', 'São Paulo', '09767-330');

-- --------------------------------------------------------

--
-- Estrutura para tabela `entregador`
--

CREATE TABLE `entregador` (
  `id_entregador` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `dt_nasc` date NOT NULL,
  `telefone` varchar(16) NOT NULL,
  `rua` varchar(50) NOT NULL,
  `numero` int(11) NOT NULL,
  `bairro` varchar(20) NOT NULL,
  `cidade` varchar(20) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `cep` varchar(10) NOT NULL,
  `raio_atendimento` int(11) NOT NULL,
  `senha` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `entregador`
--

INSERT INTO `entregador` (`id_entregador`, `nome`, `email`, `cpf`, `dt_nasc`, `telefone`, `rua`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `raio_atendimento`, `senha`) VALUES
(1, 'Sujiroq Memami', 'SujiroqMemami@gmail.com', '12312312312', '2002-01-01', '(11) 91234-1234', 'amanssa corno', 69, 'F rainha', 'São Paulo', 'São Paulo', '1002', 10, 'tesaodevaca'),
(5, 'teste', 'aaa@Aaa', '123.123.123-22', '2023-05-27', '(11) 11111-1111', 'teste', 11, 'teat', 'sp', 'sp', '06160-880', 100, '1231234'),
(9, 'Fujiro Kamyamoto', 'FujiroKamyamoto@gmail.com', '12312312311', '2002-01-01', '11912341234', 'pele morreu', 6969, 'pele vive', 'São Paulo', 'São Paulo', '01003-001', 10, 'tesaodevaca'),
(10, 'Eduardo Morais', 'eduardomorais@hotmail.com', '121.212.424-34', '2001-01-01', '(13) 82372-8478', 'rua silva', 211, 'Maua', 'São Caetano', 'São Paulo', '71204', 15, 'edu123');

-- --------------------------------------------------------

--
-- Estrutura para tabela `pagamento`
--

CREATE TABLE `pagamento` (
  `id_pagamento` int(11) NOT NULL,
  `desc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `pagamento`
--

INSERT INTO `pagamento` (`id_pagamento`, `desc`) VALUES
(1, 'Cartão de débito'),
(2, 'Cartão de crédito');

-- --------------------------------------------------------

--
-- Estrutura para tabela `pedido`
--

CREATE TABLE `pedido` (
  `id_pedido` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `valor` double NOT NULL,
  `id_entregador` int(11) DEFAULT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_pagamento` int(11) NOT NULL,
  `emitido` datetime NOT NULL,
  `id_endereco` int(11) NOT NULL,
  `endereco_retirada` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `pedido`
--

INSERT INTO `pedido` (`id_pedido`, `status`, `valor`, `id_entregador`, `id_cliente`, `id_pagamento`, `emitido`, `id_endereco`, `endereco_retirada`) VALUES
(3, 'Finalizado', 10, NULL, 1, 1, '2023-05-28 21:53:50', 4, 'Rua conceicao, 500 - Santa Paula'),
(4, 'Finalizado', 15, NULL, 1, 1, '2023-05-29 03:05:24', 4, 'Rua São Paulo, 200 - Santa Paula'),
(5, 'Finalizado', 10, 1, 1, 1, '2023-05-28 22:52:35', 5, 'teste'),
(6, 'Finalizado', 10, 10, 1, 1, '2023-05-28 23:49:29', 5, 'rua conceição, 234 - Santa Paula'),
(7, 'Finalizado', 10, NULL, 1, 1, '2023-05-29 10:27:51', 5, 'eehfuehfueh'),
(11, 'Finalizado', 20, 10, 1, 1, '2023-05-29 13:56:20', 4, 'Rua y, 200');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`);

--
-- Índices de tabela `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`id_endereco`),
  ADD KEY `id_cliente_idx` (`id_cliente`);

--
-- Índices de tabela `entregador`
--
ALTER TABLE `entregador`
  ADD PRIMARY KEY (`id_entregador`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`),
  ADD UNIQUE KEY `cpf_UNIQUE` (`cpf`);

--
-- Índices de tabela `pagamento`
--
ALTER TABLE `pagamento`
  ADD PRIMARY KEY (`id_pagamento`);

--
-- Índices de tabela `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `id_entregador_idx` (`id_entregador`),
  ADD KEY `id_cliente_idx` (`id_cliente`),
  ADD KEY `id_pagamento_idx` (`id_pagamento`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `endereco`
--
ALTER TABLE `endereco`
  MODIFY `id_endereco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `entregador`
--
ALTER TABLE `entregador`
  MODIFY `id_entregador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `pagamento`
--
ALTER TABLE `pagamento`
  MODIFY `id_pagamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `endereco`
--
ALTER TABLE `endereco`
  ADD CONSTRAINT `id_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`);

--
-- Restrições para tabelas `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `id_cliente_pedido` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`),
  ADD CONSTRAINT `id_entregador` FOREIGN KEY (`id_entregador`) REFERENCES `entregador` (`id_entregador`),
  ADD CONSTRAINT `id_pagamento` FOREIGN KEY (`id_pagamento`) REFERENCES `pagamento` (`id_pagamento`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
