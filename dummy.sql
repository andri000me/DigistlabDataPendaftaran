-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: sql212.epizy.com
-- Generation Time: Aug 27, 2019 at 10:53 PM
-- Server version: 5.6.41-84.1
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `epiz_23865027_favian`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(3, 'dhymas', '201db9a9c68c24d88f9383779a7ee526');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE IF NOT EXISTS `data` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `pembayaran` varchar(100) NOT NULL,
  `pmelalui` varchar(100) NOT NULL,
  `hp` varchar(100) NOT NULL,
  `asal` varchar(100) NOT NULL,
  `prodi` varchar(100) NOT NULL,
  `editoleh` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=83 ;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `nama`, `pembayaran`, `pmelalui`, `hp`, `asal`, `prodi`, `editoleh`) VALUES
(1, 'Nanda Jannata', '85000', 'MIRA', '081261111869', 'UIN SUSKA RIAU', 'TIF19', 'favian'),
(2, 'nurfadillah mz', '85000', 'MIRA', '082388567336', 'UIN SUSKA RIAU', 'TIF15', 'mira');

-- --------------------------------------------------------

--
-- Table structure for table `waktu`
--

CREATE TABLE IF NOT EXISTS `waktu` (
  `waktupre` datetime NOT NULL,
  `wakture` datetime NOT NULL,
  `waktuevent` datetime NOT NULL,
  `waktuselesai` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `waktu`
--

INSERT INTO `waktu` (`waktupre`, `wakture`, `waktuevent`, `waktuselesai`) VALUES
('2019-08-04 23:59:59', '2019-08-15 23:59:59', '2019-08-19 00:00:00', '2019-08-22 23:59:59');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
