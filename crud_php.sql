-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 24-Jan-2022 às 14:30
-- Versão do servidor: 10.4.20-MariaDB
-- versão do PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `form`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `crud_php`
--

CREATE TABLE `crud_php` (
  `id` int(11) NOT NULL,
  `embarcador` varchar(250) NOT NULL,
  `transportadora` varchar(250) NOT NULL,
  `statu` varchar(250) NOT NULL,
  `inconsistencia` varchar(250) NOT NULL,
  `destinatario_cnpj` varchar(250) NOT NULL,
  `destinatario_razao` varchar(250) NOT NULL,
  `tipo_destinatario` varchar(250) NOT NULL,
  `tipo_operacao` varchar(250) NOT NULL,
  `data_importacao` varchar(90) NOT NULL,
  `data_emissao` varchar(90) NOT NULL,
  `numero_nf` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `crud_php`
--

INSERT INTO `crud_php` (`id`, `embarcador`, `transportadora`, `statu`, `inconsistencia`, `destinatario_cnpj`, `destinatario_razao`, `tipo_destinatario`, `tipo_operacao`, `data_importacao`, `data_emissao`, `numero_nf`) VALUES
(132, 'Brasif', 'gt-rp', 'entregue', 'nenhuma', '01.246.798-50', 'GT-Peças LTDA', '2', '2', '23/01/2020', '23/01/2020', '256987'),
(133, 'VOESTALPINE', 'MELLO', 'ENTREGUE', 'NENHUMA', '01.148.578/0001-20', 'PEÇAS SP LTDA', '2', '4', '21/01/2021', '21/01/2021', '896574'),
(134, 'VOESTALPINE', 'MELLO', 'ENTREGUE', 'NENHUMA', '01.148.578/0001-20', 'PEÇAS SP LTDA', '2', '4', '21/01/2021', '21/01/2021', '896574'),
(135, 'VOESTALPINE', 'MELLO', 'ENTREGUE', 'NENHUMA', '01.148.578/0001-20', 'PEÇAS SP LTDA', '2', '4', '21/01/2021', '21/01/2021', '896574'),
(136, 'VOESTALPINE', 'MELLO', 'ENTREGUE', 'NENHUMA', '01.148.578/0001-20', 'PEÇAS SP LTDA', '2', '4', '21/01/2021', '21/01/2021', '896574'),
(137, 'VOESTALPINE', 'MELLO', 'ENTREGUE', 'NENHUMA', '01.148.578/0001-20', 'PEÇAS SP LTDA', '2', '4', '21/01/2021', '21/01/2021', '896574'),
(138, 'VOESTALPINE', 'MELLO', 'ENTREGUE', 'NENHUMA', '01.148.578/0001-20', 'PEÇAS SP LTDA', '2', '4', '21/01/2021', '21/01/2021', '896574'),
(139, 'VOESTALPINE', 'MELLO', 'ENTREGUE', 'NENHUMA', '01.148.578/0001-20', 'PEÇAS SP LTDA', '2', '4', '21/01/2021', '21/01/2021', '896574'),
(140, 'VOESTALPINE', 'MELLO', 'ENTREGUE', 'NENHUMA', '01.148.578/0001-20', 'PEÇAS SP LTDA', '2', '4', '21/01/2021', '21/01/2021', '896574'),
(141, 'VOESTALPINE', 'MELLO', 'ENTREGUE', 'NENHUMA', '01.148.578/0001-20', 'PEÇAS SP LTDA', '2', '4', '21/01/2021', '21/01/2021', '896574'),
(142, 'VOESTALPINE', 'MELLO', 'ENTREGUE', 'NENHUMA', '01.148.578/0001-20', 'PEÇAS SP LTDA', '2', '4', '21/01/2021', '21/01/2021', '896574'),
(143, 'VOESTALPINE', 'MELLO', 'ENTREGUE', 'NENHUMA', '01.148.578/0001-20', 'PEÇAS SP LTDA', '2', '4', '21/01/2021', '21/01/2021', '896574'),
(144, 'VOESTALPINE', 'MELLO', 'ENTREGUE', 'NENHUMA', '01.148.578/0001-20', 'PEÇAS SP LTDA', '2', '4', '21/01/2021', '21/01/2021', '896574'),
(145, 'VOESTALPINE', 'MELLO', 'ENTREGUE', 'NENHUMA', '01.148.578/0001-20', 'PEÇAS SP LTDA', '2', '4', '21/01/2021', '21/01/2021', '896574'),
(146, 'VOESTALPINE', 'MELLO', 'ENTREGUE', 'NENHUMA', '01.148.578/0001-20', 'PEÇAS SP LTDA', '2', '4', '21/01/2021', '21/01/2021', '896574'),
(147, 'VOESTALPINE', 'MELLO', 'ENTREGUE', 'NENHUMA', '01.148.578/0001-20', 'PEÇAS SP LTDA', '2', '4', '21/01/2021', '21/01/2021', '896574'),
(148, 'VOESTALPINE', 'MELLO', 'ENTREGUE', 'NENHUMA', '01.148.578/0001-20', 'PEÇAS SP LTDA', '2', '4', '21/01/2021', '21/01/2021', '896574'),
(149, 'VOESTALPINE', 'MELLO', 'ENTREGUE', 'NENHUMA', '01.148.578/0001-20', 'PEÇAS SP LTDA', '2', '4', '21/01/2021', '21/01/2021', '896574'),
(150, 'VOESTALPINE', 'MELLO', 'ENTREGUE', 'NENHUMA', '01.148.578/0001-20', 'PEÇAS SP LTDA', '2', '4', '21/01/2021', '21/01/2021', '896574'),
(151, 'VOESTALPINE', 'MELLO', 'ENTREGUE', 'NENHUMA', '01.148.578/0001-20', 'PEÇAS SP LTDA', '2', '4', '21/01/2021', '21/01/2021', '896574'),
(152, 'VOESTALPINE', 'MELLO', 'ENTREGUE', 'NENHUMA', '01.148.578/0001-20', 'PEÇAS SP LTDA', '2', '4', '21/01/2021', '21/01/2021', '896574');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `crud_php`
--
ALTER TABLE `crud_php`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `crud_php`
--
ALTER TABLE `crud_php`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
