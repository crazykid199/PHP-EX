-- phpMyAdmin SQL Dump
-- version 3.5.8.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 04, 2014 at 02:33 AM
-- Server version: 5.0.96
-- PHP Version: 5.3.28

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `demophp`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(255) default NULL,
  `password` varchar(32) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE IF NOT EXISTS `tbl_products` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(255) default NULL,
  `price` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`id`, `title`, `price`) VALUES
(1, 'Product 1', 100),
(2, 'Product 2', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_session`
--

CREATE TABLE IF NOT EXISTS `tbl_session` (
  `session` varchar(255) NOT NULL default '',
  `yes` int(10) NOT NULL default '0',
  `no` int(10) NOT NULL default '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_session`
--

INSERT INTO `tbl_session` (`session`, `yes`, `no`) VALUES
('bb0b121741efe527469e8c76cd5e4111', 0, 1),
('bc8006a846d89273068d8198300bd5ab', 0, 0),
('a', 1, 0),
('bb0b121741efe527469e8c76cd5e4489', 0, 0),
('dc40fbf348bf35961fe3a6448e424e1c', 0, 0),
('7f10d1789b7d467c3c0df2e00265ffff', 0, 0),
('7f10d1789b7d467c3c0df2e00265feec', 0, 0),
('1f31f350697824e8e0f22d09d4f18111', 0, 1),
('1f31f350697824e8e0f22d09d4f18647', 0, 0),
('6933eca7e5a7ad08e9fbfaef8fdbb727', 0, 1),
('cca497754565cbe1425fc97e621e95eb', 0, 1),
('4c554f60f6ad6d3db5d535af0b2ee81a', 0, 1),
('1eb4118f082e6f9a50eeb7fe4042b63c', 1, 0),
('70386c75fc9929412c6878013ef7c029', 0, 0),
('cc4f6b1e19668e2d364e8fca870299a2', 1, 0),
('86ed557392e39450c4e0898a7f86dbd0', 0, 0),
('9f0d39f1164b76ae37f8a54b1ad20d56', 0, 0),
('8ef5d9ac2abf0c6b26057a87b0bc3d50', 1, 0),
('ea017b535034c56a4413d62db50e700b', 1, 0),
('23f27a8bd60f7c4474c84046c7d1d9a8', 0, 0),
('3224c72aacaf3d09d093712a05817609', 0, 0),
('729a1b9d9fe8b7714d7f628867538ee3', 0, 0);
