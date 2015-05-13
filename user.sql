-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 08/05/2015 às 13:58
-- Versão do servidor: 5.5.43-0ubuntu0.14.04.1
-- Versão do PHP: 5.5.9-1ubuntu4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `ecomerce`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Fazendo dump de dados para tabela `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`, `created`, `modified`, `email`) VALUES
(1, 'admin', '$2a$10$d6o1WRlUEOzGdaWFTulHBejNjnEqfKmZlJbWo4kY7henTu9VeL9za', 'admin', '2015-03-20 18:04:16', '2015-04-28 11:46:11', 'eltonantunes@hotmail.com'),
(8, 'celeste', '$2a$10$iOLF9kwoW3fAfe6FTUYwIeGZ95qLVLv681l1YW7dVBfcrT1beGDve', '', '2015-04-28 22:48:10', '2015-04-28 22:48:10', 'celeste.rb@hotmail.com'),
(9, 'glaube', '$2a$10$OK2h/Kvvm3wbOCt1G4E5xe6ZgjU1EWeCCuQe8argWGRSe.3pZT4Bu', '', '2015-04-30 18:32:59', '2015-04-30 18:32:59', 'glaub@teste.com'),
(10, 'teste', '$2a$10$Dh6mQesoXnkNg7vKDPybk.xihvllsaGnXTQga2GWk4Qnl.4f2Rw7G', '', '2015-04-30 18:33:32', '2015-04-30 18:33:32', 'teste@teste.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
