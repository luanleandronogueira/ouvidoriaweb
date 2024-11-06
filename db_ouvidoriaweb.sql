-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06-Nov-2024 às 18:50
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
-- Estrutura da tabela `tb_entidades`
--

CREATE TABLE `tb_entidades` (
  `id_entidade` int(11) NOT NULL,
  `nome_entidade` varchar(200) NOT NULL,
  `email_entidade` varchar(200) NOT NULL,
  `telefone_entidade` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_entidades`
--

INSERT INTO `tb_entidades` (`id_entidade`, `nome_entidade`, `email_entidade`, `telefone_entidade`) VALUES
(1, 'Prefeitura de Garanhuns', 'ouvidoria_@garanhuns.pe.gov.br', ''),
(2, 'Prefeitura de Palmeirina', 'ouvidoria_@palmeirina.pe.gov.br', ''),
(3, 'Câmara Municipal de Garanhuns', 'ouvidoria_@garanhuns.pe.leg.br', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_manifestacoes`
--

CREATE TABLE `tb_manifestacoes` (
  `id_manifestacao` int(11) NOT NULL,
  `motivo_manifestacao` varchar(100) NOT NULL,
  `id_entidade_manifestacao` int(11) NOT NULL,
  `id_tipo_manifestacao` int(11) NOT NULL,
  `conteudo_manifestacao` text NOT NULL,
  `observacoes_manifestacao` text NOT NULL,
  `local_manifestacao` varchar(200) NOT NULL,
  `arquivo_manifestacao` varchar(200) NOT NULL,
  `id_usuario_manifestacao` int(11) NOT NULL,
  `status_manifestacao` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_manifestacoes`
--

INSERT INTO `tb_manifestacoes` (`id_manifestacao`, `motivo_manifestacao`, `id_entidade_manifestacao`, `id_tipo_manifestacao`, `conteudo_manifestacao`, `observacoes_manifestacao`, `local_manifestacao`, `arquivo_manifestacao`, `id_usuario_manifestacao`, `status_manifestacao`) VALUES
(6, 'Falta de transparencia', 1, 1, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#039;Content here, content here&#039;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#039;lorem ipsum&#039; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 'observacoes_manifestacao', '$caminho', 'Sem anexos', 2, ''),
(7, 'Falta de transparencia', 1, 1, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#039;Content here, content here&#039;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#039;lorem ipsum&#039; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 'Fatal error: Uncaught Exception: Erro ao inserir o tipo de manifesta&ccedil;&atilde;o: SQLSTATE[HY093]: Invalid parameter number: number of bound variables does not match number of tokens in C:\\xampp\\htdocs\\ouvidoriaweb\\provedores\\Classes.php:176 Stack trace: #0 C:\\xampp\\htdocs\\ouvidoriaweb\\provedores\\CadastraManifestacao.php(43): Manifestacoes-&gt;inserir_manifestacao(&#039;Falta de transp...&#039;, &#039;1&#039;, &#039;1&#039;, &#039;It is a long es...&#039;, &#039;observacoes_man...&#039;, &#039;$caminho&#039;, &#039;Sem anexos&#039;, &#039;2&#039;) #1 {main} thrown in C:\\xampp\\htdocs\\ouvidoriaweb\\provedores\\Classes.php on line 176', 'Portal da transpar&ecirc;ncia', 'assets/comprovantes/1-061124131114.jpeg', 2, ''),
(8, 'Falta de transparencia', 1, 1, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#039;Content here, content here&#039;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#039;lorem ipsum&#039; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 'Fatal error: Uncaught Exception: Erro ao inserir o tipo de manifesta&ccedil;&atilde;o: SQLSTATE[HY093]: Invalid parameter number: number of bound variables does not match number of tokens in C:\\xampp\\htdocs\\ouvidoriaweb\\provedores\\Classes.php:176 Stack trace: #0 C:\\xampp\\htdocs\\ouvidoriaweb\\provedores\\CadastraManifestacao.php(43): Manifestacoes-&gt;inserir_manifestacao(&#039;Falta de transp...&#039;, &#039;1&#039;, &#039;1&#039;, &#039;It is a long es...&#039;, &#039;observacoes_man...&#039;, &#039;$caminho&#039;, &#039;Sem anexos&#039;, &#039;2&#039;) #1 {main} thrown in C:\\xampp\\htdocs\\ouvidoriaweb\\provedores\\Classes.php on line 176', 'Portal da transpar&ecirc;ncia', 'assets/comprovantes/1-061124131114.jpeg', 2, 'A');

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
-- Índices para tabela `tb_entidades`
--
ALTER TABLE `tb_entidades`
  ADD PRIMARY KEY (`id_entidade`);

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
-- AUTO_INCREMENT de tabela `tb_entidades`
--
ALTER TABLE `tb_entidades`
  MODIFY `id_entidade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tb_manifestacoes`
--
ALTER TABLE `tb_manifestacoes`
  MODIFY `id_manifestacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
