-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2016 at 05:18 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tradfashion`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE IF NOT EXISTS `adminlogin` (
  `username` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`username`, `pass`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cms`
--

CREATE TABLE IF NOT EXISTS `cms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_id` int(11) NOT NULL,
  `page_title` varchar(200) NOT NULL,
  `page_content` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `cms`
--

INSERT INTO `cms` (`id`, `page_id`, `page_title`, `page_content`) VALUES
(1, 1, 'Home', 'Welcome to your Homepage Aamir ..'),
(2, 2, 'About', '<b> KunalEditPlus</b><br/> Version 3 License Agreement\r\n< Prev | Next >NO WARRANTY\r\n\r\nEDITPLUS IS SOLD "AS IS" AND WITHOUT ANY WARRANTY AS TO MERCHANTABILITY OR FITNESS FOR A PARTICULAR PURPOSE OR ANY OTHER WARRANTIES EITHER EXPRESSED OR IMPLIED. THE AUTHOR WILL NOT BE LIABLE FOR DATA LOSS, DAMAGES, LOSS OF PROFITS OR ANY OTHER KIND OF LOSS WHILE USING OR MISUSING THIS SOFTWARE.\r\n\r\nEvaluation and Purchase\r\n\r\nEditPlus is not free software. You may use this software for evaluation purposes without charge for a period of 30 days. If you use this software after the 30 day evaluation period, you must buy the license.\r\n\r\nDistribution of the evaluation version\r\n\r\nYou may copy the evaluation version of this software and documentation as you wish, and give exact copies of the original evaluation version to anyone, and distribute the evaluation version of the software and documentation in its unmodified form via electronic means. But you should not charge or requesting donations for any such copies however made and from distributing the software and/or documentation with other products without the author''s written permission.\r\n\r\nLicensed copy\r\n\r\nOne licensed copy of EditPlus may either be used by a single person who uses the software personally on one or more computers, or installed on a single workstation used non-simultaneously by multiple people, but not both. You may access the licensed copy of EditPlus through a network, provided that you have obtained individual licenses for the software covering all workstations that will access the software through the network.');

-- --------------------------------------------------------

--
-- Table structure for table `contact_info`
--

CREATE TABLE IF NOT EXISTS `contact_info` (
  `ID` int(3) NOT NULL AUTO_INCREMENT,
  `First_Name` varchar(20) NOT NULL,
  `Last_Name` varchar(20) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Tel` int(10) NOT NULL,
  `Enquiry` varchar(1000) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `contact_info`
--

INSERT INTO `contact_info` (`ID`, `First_Name`, `Last_Name`, `Email`, `Tel`, `Enquiry`) VALUES
(1, 'Amir', 'abc', 'shaista@gmail.com', 123456, 'HELLO'),
(2, 'Amir', 'abc', 'shaista@gmail.com', 1234567, 'HELLO'),
(3, 'Amir', 'abc', 'shaista@gmail.com', 123456789, 'HELLO'),
(4, 'Amir', 'abc', 'shaista@gmail.com', 1234567891, 'HELLO'),
(5, 'Amir ', 'Mustafa', 'amirmustafa777@gmail.com', 2147483647, 'need to learn angular js'),
(6, 'A', 'a', 'a', 1, 'test'),
(7, 'Amir', 'Mustafa', 'amirmustafa2012@gmail.com', 123456, 'sdsd'),
(8, 'aas', 'abc', 'amirmustafa2012@gmail.com', 2147483647, 's'),
(9, 'Amir', 'q', 'q', 0, 'a'),
(10, 'Amir', 'abc', 'amirmustafa2012@gmail.com', 123456, 'www'),
(11, 'Amir', 'Mustafa', 'amirmustafa2012@gmail.com', 123456, 'aa'),
(12, 'Amir', 'abc', 'amirmustafa2012@gmail.com', 1, 'test'),
(13, 'Amir', 'abc', 'amirengg15@gmail.com', 123456, 'testtest'),
(14, 'Amir', 'Mustafa', 'amirmustafa777@gmail.com', 111, 'twst'),
(15, 'Rakhi', 'Sawant', 'rs@gmail.com', 121212, 'hello madam'),
(16, 'Malika', 'S', 'ms@gmail.com', 456, 'test'),
(17, 'Malika', 'S', 'ms@gmail.com', 456, 'test'),
(18, 'Aamir', 'Mustafa', 'amirengg15@gmail.com', 2147483647, 'Hello Sir'),
(19, 'Kunal', 'Adam', 'kunal@gmail.com', 2147483647, 'i need a good trainer');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE IF NOT EXISTS `info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fn` varchar(100) NOT NULL,
  `mn` varchar(100) NOT NULL,
  `ln` varchar(100) NOT NULL,
  `eml` varchar(100) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `mobile` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `city` varchar(20) NOT NULL,
  `img` varchar(100) NOT NULL,
  `cv` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `eml` (`eml`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `fn`, `mn`, `ln`, `eml`, `pwd`, `mobile`, `gender`, `city`, `img`, `cv`) VALUES
(1, 'Amir', '-', 'Mustafa', 'amirmustafa777@gmail.com', '123456', 2147483647, 'male', 'Asansol', 'img/Amir.jpg', 'cv/Amir Resume.docx'),
(3, 'Amir', 'k', 'Mustafa`', 'amirmustafa77@gmail.com', '786', 2147483647, 'male', 'Mumbai', 'img/Jellyfish.jpg', 'cv/Amir Resume.docx'),
(4, 'a', 'b', 'c', 'ac@gmail.com', '123456', 2147483647, 'male', 'Pune', 'img/Penguins.jpg', 'cv/Amir Resume.docx');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
