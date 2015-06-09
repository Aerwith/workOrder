-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 09, 2015 at 09:10 PM
-- Server version: 5.6.20-log
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `maint`
--

-- --------------------------------------------------------

--
-- Table structure for table `pending`
--

CREATE TABLE IF NOT EXISTS `pending` (
`ID` int(11) NOT NULL,
  `DateField` int(11) NOT NULL,
  `CN` int(11) NOT NULL,
  `Issue` text NOT NULL,
  `Time` time NOT NULL,
  `ProductLine` text NOT NULL,
  `Status` text NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `pending`
--

INSERT INTO `pending` (`ID`, `DateField`, `CN`, `Issue`, `Time`, `ProductLine`, `Status`) VALUES
(13, 1420174800, 866, 'Halp! Robot Revolution', '07:00:00', 'VO', 'Pending'),
(14, 1433563200, 866, 'Agh it broke. again and again and again. Can you fix this damn thing?', '09:00:00', 'VO', 'Pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pending`
--
ALTER TABLE `pending`
 ADD PRIMARY KEY (`ID`), ADD UNIQUE KEY `ID` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pending`
--
ALTER TABLE `pending`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
