-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18-Dez-2024 às 20:50
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
-- Estrutura da tabela `tb_codigo_recuperacao`
--

CREATE TABLE `tb_codigo_recuperacao` (
  `id_codigo_recuperacao` int(11) NOT NULL,
  `codigo_codigo_recuperacao` varchar(250) NOT NULL,
  `email_codigo_recuperacao` varchar(100) NOT NULL,
  `data_codigo_recuperacao` date NOT NULL,
  `status_codigo_recuperacao` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_codigo_recuperacao`
--

INSERT INTO `tb_codigo_recuperacao` (`id_codigo_recuperacao`, `codigo_codigo_recuperacao`, `email_codigo_recuperacao`, `data_codigo_recuperacao`, `status_codigo_recuperacao`) VALUES
(1, '68344', 'luannogueira093@gmail.com', '2024-12-18', 'A'),
(2, '59740', 'luannogueira093@gmail.com', '2024-12-18', 'A'),
(3, '$2y$10$vT8hTtSd1JKIMU/nHXVOUODtV0avrsOl59i9oE4LN3oa2n/VGmkOW', 'luannogueira093@gmail.com', '2024-12-18', 'A'),
(4, '$2y$10$5VheGeS7hiuUZwvHTxSO3uyNUYfNOGuo6D80IN7NjGA42vGrcPJ7y', 'luannogueira093@gmail.com', '2024-12-18', 'A'),
(5, '$2y$10$cgbwIFpLIlcIy0.lpGu1xOU57LKUimow.pLViVU3XH0J65ATqH2aS', 'luannogueira093@gmail.com', '2024-12-18', 'A');

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
  `status_manifestacao` varchar(1) NOT NULL,
  `data_manifestacao` date NOT NULL,
  `protocolo_manifestacao` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_manifestacoes`
--

INSERT INTO `tb_manifestacoes` (`id_manifestacao`, `motivo_manifestacao`, `id_entidade_manifestacao`, `id_tipo_manifestacao`, `conteudo_manifestacao`, `observacoes_manifestacao`, `local_manifestacao`, `arquivo_manifestacao`, `id_usuario_manifestacao`, `status_manifestacao`, `data_manifestacao`, `protocolo_manifestacao`) VALUES
(17, 'Falta de transparencia', 1, 1, 'sum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including version', 'sum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including version', 'Portal da transpar&ecirc;ncia', 'assets/comprovantes/1-071124120707.jpeg', 2, 'A', '2024-11-07', '1-2-071124121110'),
(18, 'Palmeirina em chamas', 2, 2, 'Palmei', 'Sem observações', 'Sem observações', 'Sem anexos', 2, 'A', '2024-11-07', '2-2-071124121104'),
(19, 'Falta de transparencia', 3, 3, 'bcdedit -set testsigning off', 'Me ajude com a corre&ccedil;&atilde;o desta consulta\r\n\r\n\r\n\r\nEu quero trazer todas a linhas que tenham o id do usuario, por&eacute;m a na tabela o campo entidade que nela tem entidades diferentes, por&eacute;m quando eu trago ele replica a mesma linha 3 vzs s&oacute; que com o nome das entidades diferentes e lista. COmo ajusto, essa &eacute; a consulta\r\n\r\n$query = &#039;SELECT m.id_manifestacao, m.protocolo_manifestacao, m.motivo_manifestacao, m.status_manifestacao, e.nome_entidade FROM tb_manifestacoes m JOIN tb_entidades e WHERE m.id_usuario_manifestacao = :id_usuario_manifestacao&#039;;\r\n\r\n\r\n\r\nArray\r\n\r\n(\r\n\r\n    [0] =&gt; Array\r\n\r\n        (\r\n\r\n            [id_manifestacao] =&gt; 17\r\n\r\n            [protocolo_manifestacao] =&gt; 1-2-071124121110\r\n\r\n            [motivo_manifestacao] =&gt; Falta de transparencia\r\n\r\n            [status_manifestacao] =&gt; A\r\n\r\n            [nome_entidade] =&gt; Prefeitura de Garanhuns\r\n\r\n        )\r\n\r\n\r\n\r\n    [1] =&gt; Array\r\n\r\n        (\r\n\r\n            [id_manifestacao] =&gt; 17\r\n\r\n            [protocolo_manifestacao] =&gt; 1-2-071124121110\r\n\r\n            [motivo_manifestacao] =&gt; Falta de transparencia\r\n\r\n            [status_manifestacao] =&gt; A\r\n\r\n            [nome_entidade] =&gt; Prefeitura de Palmeirina\r\n\r\n        )\r\n\r\n\r\n\r\n    [2] =&gt; Array\r\n\r\n        (\r\n\r\n            [id_manifestacao] =&gt; 17\r\n\r\n            [protocolo_manifestacao] =&gt; 1-2-071124121110\r\n\r\n            [motivo_manifestacao] =&gt; Falta de transparencia\r\n\r\n            [status_manifestacao] =&gt; A\r\n\r\n            [nome_entidade] =&gt; C&acirc;mara Municipal de Garanhuns\r\n\r\n        )\r\n\r\n\r\n\r\n)\r\n\r\n\r\n\r\nO array retorna assim', 'Garanhuns', 'assets/comprovantes/3-071124124422.jpeg', 2, 'F', '2024-11-07', '3-2-071124121125'),
(20, 'Solicito meu contra Cheque', 2, 2, 'Essa proposta demonstra o compromisso em promover o desenvolvimento do esporte local e oferecer &agrave; comunidade um espa&ccedil;o adequado para a pr&aacute;tica esportiva. A constru&ccedil;&atilde;o de um gin&aacute;sio municipal n&atilde;o apenas incentiva a atividade f&iacute;sica, mas tamb&eacute;m fortalece o esp&iacute;rito esportivo na cidade.\r\n', 'Sem observações', 'Portal da transpar&ecirc;ncia', 'assets/comprovantes/2-071124142342.jpeg', 2, 'A', '2024-11-07', '2-2-071124141152'),
(21, '5tf45t', 3, 1, 'ft45tf45', 't4f4', '5tf45ft', 'Sem anexos', 10, 'A', '2024-11-07', '3-10-071124141132'),
(22, 'wrtwt', 1, 2, 'tertertrwe', 'wtwrtetetwe', 'wetrewt', 'Sem anexos', 2, 'A', '2024-11-23', '1-2-231124181150'),
(23, 'Solicito meu contra Cheque', 2, 2, 'Esvre kdfpalksbqob wuus bs ifd lah wb psbbbb', 'Sem observações', 'Portal da transpar&ecirc;ncia', 'assets/comprovantes/2-181224122533.pdf', 3, 'A', '2024-12-18', '2-3-181224121237');

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
(3, 'Luan', 'Leandro Nogueira', '11769868488', 'luannogueira093@gmail.com', '', '$2y$10$rucwrlLkMwGwnm56QMCpHuivevU2XW4oR63GaaKqfrTfr0FS/j05O');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_codigo_recuperacao`
--
ALTER TABLE `tb_codigo_recuperacao`
  ADD PRIMARY KEY (`id_codigo_recuperacao`);

--
-- Índices para tabela `tb_manifestacoes`
--
ALTER TABLE `tb_manifestacoes`
  ADD PRIMARY KEY (`id_manifestacao`),
  ADD KEY `fk_id_entidade_manifestacao` (`id_entidade_manifestacao`);

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
-- AUTO_INCREMENT de tabela `tb_codigo_recuperacao`
--
ALTER TABLE `tb_codigo_recuperacao`
  MODIFY `id_codigo_recuperacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tb_manifestacoes`
--
ALTER TABLE `tb_manifestacoes`
  MODIFY `id_manifestacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

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
