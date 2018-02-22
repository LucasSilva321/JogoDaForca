-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Servidor: sql313.epizy.com
-- Tempo de Geração: 22/02/2018 às 08:33:21
-- Versão do Servidor: 5.6.35-81.0
-- Versão do PHP: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `epiz_20722867_sapo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `palavras`
--

CREATE TABLE IF NOT EXISTS `palavras` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `dica` varchar(100) NOT NULL,
  `id_tema` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `palavras`
--

INSERT INTO `palavras` (`id`, `nome`, `dica`, `id_tema`) VALUES
(1, 'Futebol', '11 jogadores ', 1),
(2, 'Basquete', 'O ponto Ã© chamado de cesta', 1),
(3, 'Corrida', 'Esporte de Correr', 1),
(5, 'Baixo', 'O contriÃ¡rio de alto', 2),
(6, 'Teclado', 'Possui teclas', 2),
(7, 'Rio de Janeiro', 'Capital do Estado RJ', 5),
(8, 'Naruto', 'NÃ£o Ã© Dragonball', 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `recordes`
--

CREATE TABLE IF NOT EXISTS `recordes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jogador` varchar(100) NOT NULL,
  `tempo` int(11) NOT NULL,
  `id_palavra` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

--
-- Extraindo dados da tabela `recordes`
--

INSERT INTO `recordes` (`id`, `jogador`, `tempo`, `id_palavra`) VALUES
(2, 'Alguem', 40, 3),
(4, 'Alguem', 30, 2),
(5, 'Eu mesmo', 76, 2),
(6, 'Eu de novo', 84, 1),
(7, 'Jogador de Teste', 48, 2),
(8, 'eu', 89, 3),
(17, 'Eu', 34, 3),
(28, 'Lucas', 51, 5),
(19, 'Thiago', 68, 7),
(20, 'Rafa', 71, 8),
(21, 'Rafa', 25, 1),
(22, 'Rafa', 48, 7),
(23, 'lucao', 33, 5),
(24, 'Thiago Gomes', 59, 5),
(25, 'Bruno', 62, 2),
(26, 'Abner', 74, 7),
(27, 'Pedro rodrigues', 22, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `temas`
--

CREATE TABLE IF NOT EXISTS `temas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `temas`
--

INSERT INTO `temas` (`id`, `nome`) VALUES
(1, 'Esporte'),
(2, 'Musica'),
(3, 'Teste'),
(5, 'Cidades');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
