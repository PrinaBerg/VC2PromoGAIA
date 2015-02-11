-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 11-Fev-2015 às 18:25
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `doubts`
--

CREATE TABLE IF NOT EXISTS `doubts` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `partner` varchar(255) NOT NULL,
  `problem` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Extraindo dados da tabela `doubts`
--

INSERT INTO `doubts` (`id`, `name`, `last_name`, `email`, `partner`, `problem`) VALUES
(12, '23142314', '2134213', 'thitheguy@gmail.com', '2134213', 'Detalhe aqui... '),
(13, 'thiago', 'thiago', 'thitheguy@gmail.com', 'sfas', 'Detalhe aqui... '),
(15, 'THIAGO', 'brito', 'thitheguy@gmail.com', 'beira ma', 'noix Detalhe aqui... '),
(16, 'thiago', 'brito', 'thitheguy@gmail.com', 'ca promo', 'Detalhe aqui... '),
(17, 'thiago', 'lima', 'thitheguy@gmail.com', 'ca promo', 'Detalhe aqui... '),
(18, 'sadfs', 'sdaf', 'sadf@sadf', 'asdf', 'Detalhsadfe aqui... '),
(19, 'thiago', 'lima', 'thitheguy@gmail.com', 'thiago', 'Detalhe aqui... '),
(20, 'thiago', 'thiago', 'thitheguy@gmail.com', 'thiago', 'Detalhe aqui... '),
(21, 'thiago', 'brito', 'thitheguy@gmail.com', 'thiago', 'Detalhe aqui... '),
(22, 'sadfsa', 'sdafsa', 'thitheguy@gmail.com', 'sadfsadfs', 'Detalhe aqui... '),
(23, 'thiago', 'qthas', 'thitheguy@gmail.com', 'sadfas', 'Detalhe aqui... ');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
