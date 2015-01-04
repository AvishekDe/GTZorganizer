-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 04, 2015 at 11:13 AM
-- Server version: 5.5.37-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `GTZorganizer`
--

-- --------------------------------------------------------

--
-- Table structure for table `assists`
--

CREATE TABLE IF NOT EXISTS `assists` (
  `serial` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `dname` text NOT NULL,
  `player` text NOT NULL,
  `tassists` int(11) NOT NULL,
  UNIQUE KEY `serial` (`serial`),
  UNIQUE KEY `serial_2` (`serial`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `central`
--

CREATE TABLE IF NOT EXISTS `central` (
  `rank` int(11) NOT NULL,
  `fname` text NOT NULL,
  `dname` text NOT NULL,
  `team` text NOT NULL,
  `grp` text NOT NULL,
  `played` int(11) NOT NULL DEFAULT '0',
  `won` int(11) NOT NULL DEFAULT '0',
  `drew` int(11) NOT NULL DEFAULT '0',
  `lost` int(11) NOT NULL DEFAULT '0',
  `gf` int(11) NOT NULL DEFAULT '0',
  `gfa` int(11) NOT NULL DEFAULT '0',
  `ga` int(11) NOT NULL DEFAULT '0',
  `gd` int(11) NOT NULL DEFAULT '0',
  `points` int(11) NOT NULL DEFAULT '0',
  UNIQUE KEY `rank` (`rank`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `goals`
--

CREATE TABLE IF NOT EXISTS `goals` (
  `serial` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `dname` text NOT NULL,
  `player` text NOT NULL,
  `tgoals` int(11) NOT NULL,
  UNIQUE KEY `serial` (`serial`),
  UNIQUE KEY `serial_2` (`serial`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `knockouts`
--

CREATE TABLE IF NOT EXISTS `knockouts` (
  `serialno` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `matchno` int(11) NOT NULL,
  `round` text NOT NULL,
  `hdname` text NOT NULL,
  `hscore` text,
  `ascore` text,
  `adname` text NOT NULL,
  UNIQUE KEY `serialno` (`serialno`),
  UNIQUE KEY `serialno_2` (`serialno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `randomizer`
--

CREATE TABLE IF NOT EXISTS `randomizer` (
  `rank` int(11) NOT NULL,
  UNIQUE KEY `rank` (`rank`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE IF NOT EXISTS `results` (
  `serial` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `hdname` text NOT NULL,
  `hscore` int(11) NOT NULL,
  `ascore` int(11) NOT NULL,
  `adname` text NOT NULL,
  `grp` text NOT NULL,
  UNIQUE KEY `serial` (`serial`),
  UNIQUE KEY `serial_2` (`serial`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
