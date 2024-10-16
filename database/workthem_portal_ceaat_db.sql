-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16/10/2024 às 02:36
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `workthem_portal_ceaat_db`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `alunos`
--

CREATE TABLE `alunos` (
  `aluno_id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `sobrenome` varchar(100) NOT NULL,
  `data_nascimento` date NOT NULL,
  `genero` enum('Masculino','Feminino','Outro') NOT NULL,
  `nacionalidade` varchar(50) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `cep` char(8) DEFAULT NULL,
  `matricula` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` char(64) NOT NULL,
  `curso` varchar(100) NOT NULL,
  `ano_ingresso` year(4) NOT NULL,
  `telefone` text NOT NULL,
  `status` enum('Ativo','Inativo','Formado') NOT NULL DEFAULT 'Ativo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `alunos`
--

INSERT INTO `alunos` (`aluno_id`, `nome`, `sobrenome`, `data_nascimento`, `genero`, `nacionalidade`, `cidade`, `cep`, `matricula`, `email`, `senha`, `curso`, `ano_ingresso`, `telefone`, `status`) VALUES
(7, 'Fernanda', 'Almeida da Silva', '2002-07-18', 'Feminino', 'Brasileira', 'Porto Alegre', '90010000', '20220007', '', '', 'Enfermagem', '2022', '', 'Ativo'),
(8, 'Ricardo', 'Mendes da Costa e Silva', '1999-12-12', 'Masculino', 'Brasileiro', 'Recife', '50020000', '20210008', '', '', 'Psicologia', '2021', '71999105051', 'Ativo'),
(9, 'Laura', 'Martins', '2001-01-28', 'Feminino', 'Brasileira', 'Fortaleza', '60030000', '20230009', '', '', 'Biomedicina', '2023', '', 'Ativo');

-- --------------------------------------------------------

--
-- Estrutura para tabela `professores`
--

CREATE TABLE `professores` (
  `professor_id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `sobrenome` varchar(100) NOT NULL,
  `titulacao` enum('Professor REGULAR','Professor TÉCNICO') NOT NULL,
  `area_expertise` varchar(100) DEFAULT NULL,
  `data_admissao` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` char(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `professores`
--

INSERT INTO `professores` (`professor_id`, `nome`, `sobrenome`, `titulacao`, `area_expertise`, `data_admissao`, `email`, `senha`) VALUES
(9, 'Tatiane', 'Barbosa chagas', 'Professor REGULAR', 'Geografia', '2021-09-01', 'fafa@gmail.com', '123456'),
(10, 'Felipe', 'Nogueira', 'Professor TÉCNICO', 'Banco de Dados', '2023-03-05', '', ''),
(18, 'Lazaro', 'Baggi', 'Professor REGULAR', '', '2024-10-24', 'baggitech@gmail.com', '$2y$10$/BIA7eFO29sLXAP9TKGx2eizwQk9k5xkLI1Ym1BZ6B0aPCM5GySI6');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario_id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` char(64) NOT NULL,
  `data_criacao` timestamp NOT NULL DEFAULT current_timestamp(),
  `ultimo_login` timestamp NULL DEFAULT NULL,
  `status` enum('Ativo','Inativo','Bloqueado') NOT NULL,
  `usuario_role` enum('Professor','Aluno','Diretor','Admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`usuario_id`, `nome`, `email`, `senha`, `data_criacao`, `ultimo_login`, `status`, `usuario_role`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$S0B.EBl8EnvwLjoYTkR7FeUy1frge8AxRWOscWTdigD9767pWJpbC', '2024-10-15 23:18:19', NULL, 'Ativo', 'Admin'),
(2, 'fafa', 'fafa@gmail.com', '$2y$10$S0B.EBl8EnvwLjoYTkR7FeUy1frge8AxRWOscWTdigD9767pWJpbC', '2024-10-03 19:33:03', NULL, 'Ativo', 'Professor'),
(3, 'fefe', 'fefe@gmail.com', '$2y$10$S0B.EBl8EnvwLjoYTkR7FeUy1frge8AxRWOscWTdigD9767pWJpbC', '2024-10-03 21:26:29', NULL, 'Ativo', 'Aluno');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`aluno_id`);

--
-- Índices de tabela `professores`
--
ALTER TABLE `professores`
  ADD PRIMARY KEY (`professor_id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `alunos`
--
ALTER TABLE `alunos`
  MODIFY `aluno_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de tabela `professores`
--
ALTER TABLE `professores`
  MODIFY `professor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
