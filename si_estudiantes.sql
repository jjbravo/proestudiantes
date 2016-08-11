-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 22, 2016 at 11:13 AM
-- Server version: 5.5.46-0ubuntu0.14.04.2
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `si_estudiantes`
--
CREATE DATABASE IF NOT EXISTS `si_estudiantes` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `si_estudiantes`;

-- --------------------------------------------------------

--
-- Table structure for table `cursos`
--

CREATE TABLE IF NOT EXISTS `cursos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) NOT NULL,
  `estado` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `cursos`
--

INSERT INTO `cursos` (`id`, `nombre`, `estado`) VALUES
(1, 'Scrum', 1),
(2, 'Python', 0),
(3, 'Java', 1);

-- --------------------------------------------------------

--
-- Table structure for table `estudiantes`
--

CREATE TABLE IF NOT EXISTS `estudiantes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `edad` int(11) NOT NULL,
  `promedio` int(11) NOT NULL,
  `imagen` varchar(30) NOT NULL,
  `fecha` date NOT NULL,
  `fk_curso` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_curso` (`fk_curso`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `estudiantes`
--

INSERT INTO `estudiantes` (`id`, `nombre`, `edad`, `promedio`, `imagen`, `fecha`, `fk_curso`) VALUES
(5, 'Juan Armando Casas Mendoza', 23, 4, '53511448men.jpg', '2015-11-07', 1),
(6, 'Maria Camila Gil Espinoza', 24, 4, '54193701estudiante3.jpg', '2015-11-07', 2),
(7, 'Laura Marcela Cardenas Mendoza', 24, 4, '14563614estudiante1.jpg', '2015-11-07', 2),
(8, 'Maria Jose Olguin Bravo', 23, 4, '5825estudiante2.jpg', '2015-11-10', 1);

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `username`, `password`) VALUES
(1, 'jhon', '912ec803b2ce49e4a541068d495ab570'),
(2, 'bravo', '962012d09b8170d912f0669f6d7d9d07');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD CONSTRAINT `fk_cursos` FOREIGN KEY (`fk_curso`) REFERENCES `cursos` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
