-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25-Out-2024 às 16:52
-- Versão do servidor: 10.4.32-MariaDB
-- versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_ouvidoriaweb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_manifestacoes`
--

CREATE TABLE `tb_manifestacoes` (
  `id_manifestacao` int(11) NOT NULL,
  `tipo_manifestacao` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_tipo_manifestacoes`
--

CREATE TABLE `tb_tipo_manifestacoes` (
  `id_tipo_manifestacao` int(11) NOT NULL,
  `nome_tipo_manifestacao` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_tipo_manifestacoes`
--

INSERT INTO `tb_tipo_manifestacoes` (`id_tipo_manifestacao`, `nome_tipo_manifestacao`) VALUES
(1, 'ELOGIO'),
(2, 'OUVIDORIA'),
(3, 'RECLAMAÇÃO'),
(4, 'SOLICITAÇÃO'),
(5, 'DENÚNCIA');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `id_usuario` int(11) NOT NULL,
  `nome_usuario` varchar(100) NOT NULL,
  `sobrenome_usuario` varchar(200) NOT NULL,
  `cpf_usuario` varchar(15) NOT NULL,
  `email_usuario` varchar(100) NOT NULL,
  `login_usuario` varchar(100) NOT NULL,
  `senha_usuario` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_usuario`
--

INSERT INTO `tb_usuario` (`id_usuario`, `nome_usuario`, `sobrenome_usuario`, `cpf_usuario`, `email_usuario`, `login_usuario`, `senha_usuario`) VALUES
(2, 'Luan ', 'Leandro Nogueira', '11769868488', 'luannogueira093@gmail.com', 'luanleandronogueira', '$2y$10$jzQSAyxizTuM/mrmo13xK.owpOmy4s9DAzCsWxVPcb6vA/0rHl/k6'),
(3, 'Aylla De K&aacute;ssia', 'Alves Ferreira Leite', '08635248422', 'aylla@aylla.com', '', '$2y$10$jzQSAyxizTuM/mrmo13xK.owpOmy4s9DAzCsWxVPcb6vA/0rHl/k6');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_manifestacoes`
--
ALTER TABLE `tb_manifestacoes`
  ADD PRIMARY KEY (`id_manifestacao`);

--
-- Índices para tabela `tb_tipo_manifestacoes`
--
ALTER TABLE `tb_tipo_manifestacoes`
  ADD PRIMARY KEY (`id_tipo_manifestacao`);

--
-- Índices para tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_manifestacoes`
--
ALTER TABLE `tb_manifestacoes`
  MODIFY `id_manifestacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tb_tipo_manifestacoes`
--
ALTER TABLE `tb_tipo_manifestacoes`
  MODIFY `id_tipo_manifestacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
