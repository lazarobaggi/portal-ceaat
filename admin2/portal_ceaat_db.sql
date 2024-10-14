-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18/09/2024 às 18:11
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
-- Banco de dados: `portal_ceaat_db`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `alunos`
--

CREATE TABLE `alunos` (
  `aluno_id` int(11) NOT NULL,
  `pessoa_id` int(11) NOT NULL,
  `matricula` varchar(50) NOT NULL,
  `data_matricula` date NOT NULL,
  `turma_id` int(11) DEFAULT NULL,
  `semestre` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `alunos_turmas`
--

CREATE TABLE `alunos_turmas` (
  `aluno_id` int(11) NOT NULL,
  `turma_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `cursos`
--

CREATE TABLE `cursos` (
  `curso_id` int(11) NOT NULL,
  `nome_curso` varchar(100) NOT NULL,
  `descricao` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `diretores`
--

CREATE TABLE `diretores` (
  `diretor_id` int(11) NOT NULL,
  `pessoa_id` int(11) NOT NULL,
  `data_admissao` date NOT NULL,
  `area_responsabilidade` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `pessoas`
--

CREATE TABLE `pessoas` (
  `pessoa_id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `sobrenome` varchar(100) NOT NULL,
  `data_nascimento` date NOT NULL,
  `genero` enum('Masculino','Feminino','Outro') NOT NULL,
  `nacionalidade` varchar(50) DEFAULT NULL,
  `cpf` char(11) NOT NULL,
  `rg` char(9) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `endereco` text DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `estado` varchar(2) DEFAULT NULL,
  `cep` char(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `pessoas`
--

INSERT INTO `pessoas` (`pessoa_id`, `nome`, `sobrenome`, `data_nascimento`, `genero`, `nacionalidade`, `cpf`, `rg`, `telefone`, `endereco`, `cidade`, `estado`, `cep`) VALUES
(1, 'Ana', 'Silva', '2005-03-21', 'Feminino', 'Brasileira', '12345678901', '123456789', '11987654321', 'Rua A, 123', 'São Paulo', 'SP', '01001000'),
(2, 'Carlos', 'Pereira', '2004-07-15', 'Masculino', 'Brasileiro', '23456789012', '234567890', '11987654322', 'Rua B, 456', 'São Paulo', 'SP', '01002000'),
(3, 'Mariana', 'Oliveira', '2005-10-10', 'Feminino', 'Brasileira', '34567890123', '345678901', '11987654323', 'Rua C, 789', 'São Paulo', 'SP', '01003000'),
(4, 'Lucas', 'Costa', '2004-02-28', 'Masculino', 'Brasileiro', '45678901234', '456789012', '11987654324', 'Rua D, 101', 'São Paulo', 'SP', '01004000'),
(5, 'Beatriz', 'Santos', '2005-09-05', 'Feminino', 'Brasileira', '56789012345', '567890123', '11987654325', 'Rua E, 202', 'São Paulo', 'SP', '01005000'),
(6, 'Ricardo', 'Mendes', '2004-11-18', 'Masculino', 'Brasileiro', '67890123456', '678901234', '11987654326', 'Rua F, 303', 'São Paulo', 'SP', '01006000'),
(7, 'Juliana', 'Lima', '2005-01-12', 'Feminino', 'Brasileira', '78901234567', '789012345', '11987654327', 'Rua G, 404', 'São Paulo', 'SP', '01007000'),
(8, 'Felipe', 'Almeida', '2004-08-20', 'Masculino', 'Brasileiro', '89012345678', '890123456', '11987654328', 'Rua H, 505', 'São Paulo', 'SP', '01008000'),
(9, 'Laura', 'Martins', '2005-06-25', 'Feminino', 'Brasileira', '90123456789', '901234567', '11987654329', 'Rua I, 606', 'São Paulo', 'SP', '01009000'),
(10, 'Gabriel', 'Souza', '2004-05-30', 'Masculino', 'Brasileiro', '01234567890', '012345678', '11987654330', 'Rua J, 707', 'São Paulo', 'SP', '01010000');

-- --------------------------------------------------------

--
-- Estrutura para tabela `professores`
--

CREATE TABLE `professores` (
  `professor_id` int(11) NOT NULL,
  `pessoa_id` int(11) NOT NULL,
  `titulacao` enum('Graduação','Pós-Graduação','Mestrado','Doutorado') NOT NULL,
  `area_expertise` varchar(100) DEFAULT NULL,
  `data_admissao` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `professores_turmas`
--

CREATE TABLE `professores_turmas` (
  `professor_id` int(11) NOT NULL,
  `turma_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `turmas`
--

CREATE TABLE `turmas` (
  `turma_id` int(11) NOT NULL,
  `nome_turma` varchar(100) NOT NULL,
  `curso_id` int(11) NOT NULL,
  `ano` int(11) NOT NULL,
  `semestre` int(11) NOT NULL,
  `periodo` enum('Manhã','Tarde','Noite') NOT NULL,
  `data_inicio` date NOT NULL,
  `data_fim` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario_id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha_hash` char(64) NOT NULL,
  `data_criacao` timestamp NOT NULL DEFAULT current_timestamp(),
  `ultimo_login` timestamp NULL DEFAULT NULL,
  `status` enum('Ativo','Inativo','Bloqueado') NOT NULL,
  `papel` enum('Professor','Aluno','Diretor','Admin') NOT NULL,
  `pessoa_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`aluno_id`),
  ADD UNIQUE KEY `matricula` (`matricula`),
  ADD KEY `pessoa_id` (`pessoa_id`),
  ADD KEY `turma_id` (`turma_id`);

--
-- Índices de tabela `alunos_turmas`
--
ALTER TABLE `alunos_turmas`
  ADD PRIMARY KEY (`aluno_id`,`turma_id`),
  ADD KEY `turma_id` (`turma_id`);

--
-- Índices de tabela `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`curso_id`);

--
-- Índices de tabela `diretores`
--
ALTER TABLE `diretores`
  ADD PRIMARY KEY (`diretor_id`),
  ADD KEY `pessoa_id` (`pessoa_id`);

--
-- Índices de tabela `pessoas`
--
ALTER TABLE `pessoas`
  ADD PRIMARY KEY (`pessoa_id`),
  ADD UNIQUE KEY `cpf` (`cpf`);

--
-- Índices de tabela `professores`
--
ALTER TABLE `professores`
  ADD PRIMARY KEY (`professor_id`),
  ADD KEY `pessoa_id` (`pessoa_id`);

--
-- Índices de tabela `professores_turmas`
--
ALTER TABLE `professores_turmas`
  ADD PRIMARY KEY (`professor_id`,`turma_id`),
  ADD KEY `turma_id` (`turma_id`);

--
-- Índices de tabela `turmas`
--
ALTER TABLE `turmas`
  ADD PRIMARY KEY (`turma_id`),
  ADD KEY `curso_id` (`curso_id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuario_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `pessoa_id` (`pessoa_id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `alunos`
--
ALTER TABLE `alunos`
  MODIFY `aluno_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de tabela `cursos`
--
ALTER TABLE `cursos`
  MODIFY `curso_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `diretores`
--
ALTER TABLE `diretores`
  MODIFY `diretor_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pessoas`
--
ALTER TABLE `pessoas`
  MODIFY `pessoa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `professores`
--
ALTER TABLE `professores`
  MODIFY `professor_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `turmas`
--
ALTER TABLE `turmas`
  MODIFY `turma_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `alunos`
--
ALTER TABLE `alunos`
  ADD CONSTRAINT `alunos_ibfk_1` FOREIGN KEY (`pessoa_id`) REFERENCES `pessoas` (`pessoa_id`),
  ADD CONSTRAINT `alunos_ibfk_2` FOREIGN KEY (`turma_id`) REFERENCES `turmas` (`turma_id`);

--
-- Restrições para tabelas `alunos_turmas`
--
ALTER TABLE `alunos_turmas`
  ADD CONSTRAINT `alunos_turmas_ibfk_1` FOREIGN KEY (`aluno_id`) REFERENCES `alunos` (`aluno_id`),
  ADD CONSTRAINT `alunos_turmas_ibfk_2` FOREIGN KEY (`turma_id`) REFERENCES `turmas` (`turma_id`);

--
-- Restrições para tabelas `diretores`
--
ALTER TABLE `diretores`
  ADD CONSTRAINT `diretores_ibfk_1` FOREIGN KEY (`pessoa_id`) REFERENCES `pessoas` (`pessoa_id`);

--
-- Restrições para tabelas `professores`
--
ALTER TABLE `professores`
  ADD CONSTRAINT `professores_ibfk_1` FOREIGN KEY (`pessoa_id`) REFERENCES `pessoas` (`pessoa_id`);

--
-- Restrições para tabelas `professores_turmas`
--
ALTER TABLE `professores_turmas`
  ADD CONSTRAINT `professores_turmas_ibfk_1` FOREIGN KEY (`professor_id`) REFERENCES `professores` (`professor_id`),
  ADD CONSTRAINT `professores_turmas_ibfk_2` FOREIGN KEY (`turma_id`) REFERENCES `turmas` (`turma_id`);

--
-- Restrições para tabelas `turmas`
--
ALTER TABLE `turmas`
  ADD CONSTRAINT `turmas_ibfk_1` FOREIGN KEY (`curso_id`) REFERENCES `cursos` (`curso_id`);

--
-- Restrições para tabelas `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`pessoa_id`) REFERENCES `pessoas` (`pessoa_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
