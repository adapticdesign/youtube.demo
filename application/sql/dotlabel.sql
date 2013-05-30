-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 23, 2013 at 08:46 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dotlabel`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE IF NOT EXISTS `applicants` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `cv_attached` varchar(10) DEFAULT NULL,
  `email` varchar(120) NOT NULL,
  `job_id` bigint(20) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`id`, `name`, `cv_attached`, `email`, `job_id`) VALUES
(1, 'scott 9', 'hkjhjhj', 'kjhkjhkj', 4),
(2, 'peter', '0', 'fdsfsd@SDfsdfs.com', 0),
(5, 'john', '0', 'dsfsdf@SDfsdf.com', 3),
(6, 'aaa', 'aaa', 'aaaa', 6),
(7, 'nnkjkj', 'njnkjnjk', 'nkjnkj', 4);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `job_title` varchar(100) NOT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `description` text,
  `date_created` int(20) DEFAULT NULL,
  `closing_date` int(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `job_title`, `keywords`, `description`, `date_created`, `closing_date`) VALUES
(6, 'Web Developer', 'php web developer development', 'kjckjadbcdksjv sdjn sdkj ', 1369353600, 1369872000),
(7, 'Administrator', 'admin', 'djsk skjvn skj vj', 1369612800, 1369785600),
(8, 'Manager', 'manager delegate', 'sdvnk nfskj vnsfkjd vnskj', 1369785600, 1369872000);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
