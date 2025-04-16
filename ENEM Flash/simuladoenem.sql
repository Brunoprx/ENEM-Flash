-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Tempo de geração: 25-Out-2023 às 16:24
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `simulado`
--

CREATE DATABASE IF NOT EXISTS `simulado` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `simulado`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `alternativa`
--

DROP TABLE IF EXISTS `alternativa`;
CREATE TABLE `alternativa` (
  `idalternativa` int(11) NOT NULL,
  `textoalternativa` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

DROP TABLE IF EXISTS `aluno`;
CREATE TABLE `aluno` (
  `idaluno` int(11) NOT NULL,
  `nomealuno` varchar(55) DEFAULT NULL,
  `senhaaluno` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `area`
--

DROP TABLE IF EXISTS `area`;
CREATE TABLE `area` (
  `idarea` int(11) NOT NULL,
  `nomearea` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pergunta`
--

DROP TABLE IF EXISTS `pergunta`;
CREATE TABLE `pergunta` (
  `idpergunta` int(11) NOT NULL,
  `textopergunta` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `perguntaalternativa`
--

DROP TABLE IF EXISTS `perguntaalternativa`;
CREATE TABLE `perguntaalternativa` (
  `idalternativa` int(11) NOT NULL,
  `idpergunta` int(11) NOT NULL,
  `correta` enum('S','N') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

DROP TABLE IF EXISTS `professor`;
CREATE TABLE `professor` (
  `idprofessor` int(11) NOT NULL,
  `nomeprofessor` varchar(55) DEFAULT NULL,
  `senhaprofessor` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `prova`
--

DROP TABLE IF EXISTS `prova`;
CREATE TABLE `prova` (
  `idprova` int(11) NOT NULL,
  `idprofessor` int(11) DEFAULT NULL,
  `idaluno` int(11) DEFAULT NULL,
  `nomeprova` varchar(255) DEFAULT NULL,
  `idalternativa` int(11) DEFAULT NULL,
  `idpergunta` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tentativaprova`
--

DROP TABLE IF EXISTS `tentativaprova`;
CREATE TABLE `tentativaprova` (
  `idtentativaprova`int(11) unsigned auto_increment PRIMARY KEY,
  `idprova` int(11) DEFAULT NULL,
  `idaluno` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `alternativa`
--
ALTER TABLE `alternativa`
  ADD PRIMARY KEY (`idalternativa`);
  
  ALTER TABLE alternativa
  ADD COLUMN pontuacao int
  DEFAULT 0 AFTER textoalternativa;

--
-- Índices para tabela `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`idaluno`);

--
-- Índices para tabela `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`idarea`);

--
-- Índices para tabela `pergunta`
--
ALTER TABLE `pergunta`
  ADD PRIMARY KEY (`idpergunta`);

--
-- Índices para tabela `perguntaalternativa`
--
ALTER TABLE `perguntaalternativa`
  ADD PRIMARY KEY (`idpergunta`,`idalternativa`),
  ADD KEY `fk_idalternativa` (`idalternativa`);

--
-- Índices para tabela `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`idprofessor`);

--
-- Índices para tabela `prova`
--
ALTER TABLE `prova`
  ADD PRIMARY KEY (`idprova`),
  ADD KEY `fk_idpergunta2` (`idpergunta`),
  ADD KEY `fk_idalternativa2` (`idalternativa`);

--
-- Índices para tabela `tentativaprova`
--
-- ALTER TABLE `tentativaprova`
 -- ADD PRIMARY KEY (`idtentativaprova`),
 -- ADD KEY `fk_idprova` (`idprova`),
 -- ADD KEY `fk_idaluno` (`idaluno`);
  
--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `alternativa`
--
ALTER TABLE `alternativa`
  MODIFY `idalternativa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `aluno`
--
ALTER TABLE `aluno`
  MODIFY `idaluno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `area`
--
ALTER TABLE `area`
  MODIFY `idarea` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pergunta`
--
ALTER TABLE `pergunta`
  MODIFY `idpergunta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `professor`
--
ALTER TABLE `professor`
  MODIFY `idprofessor` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `perguntaalternativa`
--
ALTER TABLE `perguntaalternativa`
  ADD CONSTRAINT `fk_idalternativa` FOREIGN KEY (`idalternativa`) REFERENCES `alternativa` (`idalternativa`),
  ADD CONSTRAINT `fk_idpergunta` FOREIGN KEY (`idpergunta`) REFERENCES `pergunta` (`idpergunta`);

--
-- Limitadores para a tabela `prova`
--
ALTER TABLE `prova`
  ADD CONSTRAINT `fk_idalternativa2` FOREIGN KEY (`idalternativa`) REFERENCES `perguntaalternativa` (`idalternativa`),
  ADD CONSTRAINT `fk_idpergunta2` FOREIGN KEY (`idpergunta`) REFERENCES `perguntaalternativa` (`idpergunta`);

--
-- Limitadores para a tabela `tentativaprova`
--
 ALTER TABLE `tentativaprova`
 ADD CONSTRAINT `fk_idaluno` FOREIGN KEY (`idaluno`) REFERENCES `aluno` (`idaluno`),
 ADD CONSTRAINT `fk_idprova` FOREIGN KEY (`idprova`) REFERENCES `prova` (`idprova`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;




CREATE TABLE perguntaprova (
    idprova int,
    idpergunta int,
    PRIMARY KEY (idprova, idpergunta),
     constraint fk_idprova1 foreign key (idprova) references prova(idprova),
      constraint fk_pergunta1 foreign key (idpergunta) references pergunta(idpergunta)
);

CREATE TABLE tentativapergunta (
    idtentativaprova int unsigned,
    idrespostaAluno int,
    idperguntaProva int,
    primary key (idtentativaprova, idrespostaAluno, idperguntaProva),
    constraint fk_idtentativaprova foreign key (idtentativaprova) references tentativaprova (idtentativaprova), 
    foreign key (idrespostaAluno) references perguntaalternativa (idalternativa), 
    foreign key (idperguntaProva) references perguntaprova (idpergunta)
);




ALTER TABLE `prova`
add idarea int, 
add constraint fk_idarea foreign key (idarea) references area(idarea);

alter table prova 
add constraint fk_idprofessor foreign key (idprofessor) references professor(idprofessor);



INSERT INTO `area` (`idarea`, `nomearea`) VALUES
(1, 'Matemática'),
(2, 'Português'),
(3, 'Ciências'),
(4, 'História'),
(5, 'Geografia'),
(6, 'Física'),
(7, 'Química'),
(8, 'Inglês');

-- adicionando professor
INSERT INTO `professor` (`idprofessor`, `nomeprofessor`) VALUES
(1, 'Pedro');

-- adicionando aluno
INSERT INTO aluno (idaluno, nomealuno) VALUES
(1, 'Braya');

-- adicionando pergunta matematica
INSERT INTO pergunta(idpergunta,textopergunta) values
(1,'Quanto é 2+2?');

-- adicionando alternativa matematica
INSERT INTO alternativa(idalternativa,textoalternativa) values
(1,'4'),
(2,'22');

-- adicionando pergunta ciencias
INSERT INTO pergunta(idpergunta,textopergunta) values
(2,'A Biologia Celular, também chamada de Citologia, é o ramo da Biologia dedicado ao estudo das células e o desenvolvimento tecnológico na área da microscopia permitiu desvendar, em detalhes, as estruturas celulares.');

-- adicionando alternativa ciencias
INSERT INTO alternativa(idalternativa,textoalternativa) values
(3,'citoplasma, material genético e parede celular.'),
(4,'membrana plasmática, citoplasma e núcleo definido.');

-- cienica
INSERT INTO perguntaalternativa (idpergunta, idalternativa, correta) VALUES (2, 3, 'N');
INSERT INTO perguntaalternativa (idpergunta, idalternativa, correta) VALUES (2, 4, 'S');

-- adicionando prova matematica 
INSERT INTO prova(nomeprova,idprova,idprofessor,idarea) values
('Prova 1',1,1,1);

-- matematica
INSERT INTO perguntaprova (idprova, idpergunta) VALUES (1, 1);

-- matematica
INSERT INTO perguntaalternativa (idpergunta, idalternativa, correta) VALUES (1, 1, 'S');
INSERT INTO perguntaalternativa (idpergunta, idalternativa, correta) VALUES (1, 2, 'N');

-- adicionando prova ciencia 
INSERT INTO prova(nomeprova,idprova,idprofessor,idarea) values
('Prova Ciências',2,1,3);

-- ciencias
INSERT INTO perguntaprova (idprova, idpergunta) VALUES (2, 2);

-- PORTUGUES

-- adicionando pergunta de português
INSERT INTO pergunta(idpergunta, textopergunta) VALUES
(3, 'Qual é o sujeito da frase "O gato mia alto à noite"?');

-- adição alternativa de português
INSERT INTO alternativa(idalternativa, textoalternativa) VALUES
(5, 'O gato'),
(6, 'Mia alto à noite');

-- adicionando prova de português
INSERT INTO prova(nomeprova, idprova, idprofessor, idarea) VALUES
('Prova de Português', 3, 1, 2);

-- relacionando pergunta com prova de português
INSERT INTO perguntaprova (idprova, idpergunta) VALUES (3, 3);

-- relacionando alternativa correta com pergunta de português
INSERT INTO perguntaalternativa (idpergunta, idalternativa, correta) VALUES (3, 5, 'S');
INSERT INTO perguntaalternativa (idpergunta, idalternativa, correta) VALUES (3, 4, 'N');


-- HISTORIA

-- adicionando pergunta da história
INSERT INTO pergunta(idpergunta, textopergunta) VALUES
(4, 'Quem foi o líder do movimento pela independência do Brasil em 1822?');

-- adicionando alternativa de história
INSERT INTO alternativa(idalternativa, textoalternativa) VALUES
(7, 'Dom Pedro II'),
(8, 'Dom Pedro I');

-- adicionando prova de história
INSERT INTO prova(nomeprova, idprova, idprofessor, idarea) VALUES
('Prova de História', 4, 1, 4);

-- relacionando pergunta com prova de história
INSERT INTO perguntaprova (idprova, idpergunta) VALUES (4, 4);

-- relacionando alternativa correta com pergunta de história
INSERT INTO perguntaalternativa (idpergunta, idalternativa, correta) VALUES (4, 7, 'S');
INSERT INTO perguntaalternativa (idpergunta, idalternativa, correta) VALUES (4, 8, 'N');


-- GEOGRAFIA

-- adicionando pergunta de geografia
INSERT INTO pergunta(idpergunta, textopergunta) VALUES
(5, 'Qual é o maior rio do mundo em extensão?');

-- adição alternativa de geografia
INSERT INTO alternativa(idalternativa, textoalternativa) VALUES
(9, 'Rio Nilo'),
(10, 'Rio Amazonas');

-- adicionando prova de geografia
INSERT INTO prova(nomeprova, idprova, idprofessor, idarea) VALUES
('Prova de Geografia', 5, 1, 5);

-- relacionando pergunta com prova de geografia
INSERT INTO perguntaprova (idprova, idpergunta) VALUES (5, 5);

-- relacionando alternativa correta com pergunta de geografia
INSERT INTO perguntaalternativa (idpergunta, idalternativa, correta) VALUES (5, 9, 'S');
INSERT INTO perguntaalternativa (idpergunta, idalternativa, correta) VALUES (5, 10, 'N');



-- FISICA


-- adicionando pergunta de física
INSERT INTO pergunta(idpergunta, textopergunta) VALUES
(6, 'Qual é a fórmula da lei da gravitação universal?');

-- adição alternativa de física
INSERT INTO alternativa(idalternativa, textoalternativa) VALUES
(11, 'F = m * a'),
(12, 'F = G * (m1 * m2) / d^2');

-- adicionando prova de física
INSERT INTO prova(nomeprova, idprova, idprofessor, idarea) VALUES
('Prova de Física', 6, 1, 6);

-- relacionando pergunta com prova de física
INSERT INTO perguntaprova (idprova, idpergunta) VALUES (6, 6);

-- relacionando alternativa correta com pergunta de física
INSERT INTO perguntaalternativa (idpergunta, idalternativa, correta) VALUES (6, 11, 'S');
INSERT INTO perguntaalternativa (idpergunta, idalternativa, correta) VALUES (6, 12, 'N');


-- QUIMICA


-- adicionando pergunta de química
INSERT INTO pergunta(idpergunta, textopergunta) VALUES
(7, 'Qual é a fórmula química da água?');

-- adição alternativa de química
INSERT INTO alternativa(idalternativa, textoalternativa) VALUES
(13, 'H2O'),
(14, 'CO2');

-- adicionando prova de química
INSERT INTO prova(nomeprova, idprova, idprofessor, idarea) VALUES
('Prova de Química', 7, 1, 7);

-- relacionando pergunta com prova de química
INSERT INTO perguntaprova (idprova, idpergunta) VALUES (7, 7);

-- relacionando alternativa correta com pergunta de química
INSERT INTO perguntaalternativa (idpergunta, idalternativa, correta) VALUES (7, 13, 'S');
INSERT INTO perguntaalternativa (idpergunta, idalternativa, correta) VALUES (7, 14, 'N');


-- INGLES


-- adicionando pergunta de inglês
INSERT INTO pergunta(idpergunta, textopergunta) VALUES
(8, 'Qual é a forma correta do verbo "to be" no presente simples na terceira pessoa do singular?');

-- adicionando alternativa de inglês
INSERT INTO alternativa(idalternativa, textoalternativa) VALUES
(15, 'am'),
(16, 'are'),
(17, 'is');

-- adicionando prova de inglês
INSERT INTO prova(nomeprova, idprova, idprofessor, idarea) VALUES
('Prova de Inglês', 8, 1, 8);

-- relacionando pergunta com prova de inglês
INSERT INTO perguntaprova (idprova, idpergunta) VALUES (8, 8);

-- relacionando alternativa correta com pergunta de inglês
INSERT INTO perguntaalternativa (idpergunta, idalternativa, correta) VALUES (8, 15, 'S');
INSERT INTO perguntaalternativa (idpergunta, idalternativa, correta) VALUES (8, 16, 'N');
INSERT INTO perguntaalternativa (idpergunta, idalternativa, correta) VALUES (8, 17, 'N');