-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 22, 2011 at 08:24 AM
-- Server version: 5.1.33
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `serial` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(200) NOT NULL,
  `book_id` varchar(200) NOT NULL,
  `booking_date` datetime NOT NULL,
  `release_date` datetime NOT NULL,
  `status` int(5) NOT NULL COMMENT '1=Request, 2=Booked ',
  `fine` int(11) NOT NULL DEFAULT '0',
  `fine_update` datetime NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=55 ;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`serial`, `user_id`, `book_id`, `booking_date`, `release_date`, `status`, `fine`, `fine_update`) VALUES
(19, 'MSC 043 5171', '3', '2011-02-12 12:34:02', '0000-00-00 00:00:00', 2, 155, '2011-12-22 11:34:29'),
(27, 'MSC 043 5152', '5', '2011-02-07 11:35:03', '0000-00-00 00:00:00', 2, 135, '2011-12-22 11:34:29'),
(26, 'MSC 043 5171', '16', '2011-02-27 11:09:03', '0000-00-00 00:00:00', 2, 135, '2011-12-22 11:34:29'),
(45, 'MSC125', '4', '2011-10-16 01:46:10', '0000-00-00 00:00:00', 2, 20, '2011-12-22 11:34:29'),
(36, 'MSC125', '1', '2011-08-08 11:33:08', '0000-00-00 00:00:00', 2, 20, '2011-12-22 11:34:29'),
(53, 'MSC124', '11', '2011-12-17 12:42:12', '0000-00-00 00:00:00', 1, 0, '2011-12-17 12:42:12'),
(48, 'admin', '6', '2011-12-12 15:26:12', '0000-00-00 00:00:00', 2, 5, '2011-12-22 11:34:29'),
(54, 'MSC124', '17', '2011-12-22 12:41:12', '0000-00-00 00:00:00', 1, 0, '2011-12-22 12:41:12');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `author` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `accession_no` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `facility` varchar(100) NOT NULL,
  `publisher` varchar(200) NOT NULL,
  `keyword` varchar(200) NOT NULL,
  `isbn` varchar(100) NOT NULL,
  `call_no` varchar(100) NOT NULL,
  `edition` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `price` int(10) NOT NULL,
  `create_date` datetime NOT NULL,
  `modify_date` datetime NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `accession_no` (`accession_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=64 ;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `author`, `subject`, `title`, `accession_no`, `image`, `location`, `category`, `facility`, `publisher`, `keyword`, `isbn`, `call_no`, `edition`, `description`, `price`, `create_date`, `modify_date`, `status`) VALUES
(1, 'Taylor, Jeff.', 'Computer crime', 'Computer crime, investigation, and the law / Chuck Easttom and Jeff Taylor.', '110001', 'Jacket.jpg', 'f2s30r5', 'books', 'reading', 'BloomBecker, Buck. Homewood, Ill. : Dow Jones-Irwin, c1990. ', 'Computer crime', '1435455320 (pbk.)', 'JBE 90-1603', '3rd', 'ix, 242 p. ; 24 cm.', 12, '2010-12-12 16:44:51', '0000-00-00 00:00:00', 0),
(2, 'Taylor, Jeff.', 'Computer crime', 'Computer crime, investigation, and the law / Chuck Easttom and Jeff Taylor.', '110002', 'Jacket.jpg', 'f2s30r5', 'books', 'reading', 'BloomBecker, Buck. Homewood, Ill. : Dow Jones-Irwin, c1990. ', 'Computer crime', '1435455321 (pbk.)', 'JBE 90-1604', '3rd', 'ix, 242 p. ; 24 cm.', 12, '2010-12-12 16:45:43', '0000-00-00 00:00:00', 0),
(3, 'Institute for Career Research.', 'Software engineering -- Vocational guidance', 'Careers in computer software engineering', '111003', 'Jacket_002.jpg', 'f2', 'books', 'reading', 'Chicago : Institute for Career Research, c2010.', 'Software engineering', '1585114545', 'R-SIBL QA76.6 .C37 2010 Job Search Central', '2nd', '19, [1] p. : ill. ; 28 cm.', 24, '2010-12-13 15:43:03', '0000-00-00 00:00:00', 0),
(4, 'Institute for Career Research.', 'Software engineering -- Vocational guidance', 'Careers in computer software engineering', '111004', 'Jacket_002.jpg', 'f2', 'books', 'reading', 'Chicago : Institute for Career Research, c2010.', 'Software engineering', '1585114545', 'R-SIBL QA76.6 .C37 2010 Job Search Central', '2nd', '19, [1] p. : ill. ; 28 cm.', 24, '2010-12-13 15:43:26', '0000-00-00 00:00:00', 0),
(5, 'Kolimbiris, Harold.', 'Optical fibers', 'Digital communications systems : with satellite and fibre-optics  applications', '111005', 'Jacket.aspx.jpg', 'f2s8r1', 'books', 'reading', 'Upper Saddle River, N.J. : Prentice Hall, c2000. ', '', '0130815438', 'JSE 06-68', '2nd', ' xiii, 466 p. : ill. ; 25 cm.', 25, '2010-12-13 19:32:40', '0000-00-00 00:00:00', 0),
(6, 'Kolimbiris, Harold.', 'Optical fibers', 'Digital communications systems : with satellite and fibre-optics  applications', '111006', 'Jacket.aspx.jpg', 'f2s8r1', 'books', 'reading', 'Upper Saddle River, N.J. : Prentice Hall, c2000. ', '', '0130815438', 'JSE 06-68', '2nd', ' xiii, 466 p. : ill. ; 25 cm.', 25, '2010-12-13 19:33:13', '0000-00-00 00:00:00', 0),
(10, 'Institute for Career Research.', 'Software engineering -- Vocational guidance', 'Careers in computer software engineering', '1110010', 'Jacket.jpg', 'f2s8r1', 'e-books', 'reading', 'Chicago : Institute for Career Research, c2010.', 'Software engineering', '1585114545', 'R-SIBL QA76.6 .C37 2010 Job Search Central', '2nd', 'xiii, 466 p. : ill. ; 25 cm.', 24, '2010-12-23 16:00:03', '0000-00-00 00:00:00', 0),
(11, 'Institute for Career Research.', 'Software engineering -- Vocational guidance', 'Careers in computer software engineering', '1110011', 'Jacket.jpg', 'f2s8r1', 'e-books', 'reading', 'Chicago : Institute for Career Research, c2010.', 'Software engineering', '1585114545', 'R-SIBL QA76.6 .C37 2010 Job Search Central', '2nd', 'xiii, 466 p. : ill. ; 25 cm.', 24, '2010-12-23 16:00:22', '0000-00-00 00:00:00', 0),
(12, 'Institute for Career Research.', 'Software engineering -- Vocational guidance', 'Careers in computer software engineering', '1110012', 'Jacket.jpg', 'f2s8r1', 'e-books', 'reading', 'Chicago : Institute for Career Research, c2010.', 'Software engineering', '1585114545', 'R-SIBL QA76.6 .C37 2010 Job Search Central', '2nd', 'xiii, 466 p. : ill. ; 25 cm.', 24, '2010-12-23 16:00:36', '0000-00-00 00:00:00', 0),
(13, 'Institute for Career Research.', 'Software engineering -- Vocational guidance', 'Careers in computer software engineering', '1110013', 'Jacket.jpg', 'f2s8r1', 'e-books', 'reading', 'Chicago : Institute for Career Research, c2010.', 'Software engineering', '1585114545', 'R-SIBL QA76.6 .C37 2010 Job Search Central', '2nd', 'xiii, 466 p. : ill. ; 25 cm.', 24, '2010-12-23 16:00:51', '0000-00-00 00:00:00', 0),
(14, 'Institute for Career Research.', 'Software engineering -- Vocational guidance', 'Careers in computer software engineering', '1110014', 'Jacket.jpg', 'f2s8r1', 'e-books', 'reading', 'Chicago : Institute for Career Research, c2010.', 'Software engineering', '1585114545', 'R-SIBL QA76.6 .C37 2010 Job Search Central', '2nd', 'xiii, 466 p. : ill. ; 25 cm.', 24, '2010-12-23 16:01:02', '0000-00-00 00:00:00', 0),
(15, 'Institute for Career Research.', 'Software engineering -- Vocational guidance', 'Careers in computer software engineering', '1110015', 'Jacket.jpg', 'f2s8r1', 'e-books', 'reading', 'Chicago : Institute for Career Research, c2010.', 'Software engineering', '1585114545', 'R-SIBL QA76.6 .C37 2010 Job Search Central', '2nd', 'xiii, 466 p. : ill. ; 25 cm.', 24, '2010-12-23 16:01:14', '0000-00-00 00:00:00', 0),
(16, 'Wicker, Stephen B.', 'Digital communications', 'Error control systems for digital communication and storage / Stephen B. Wicker. ', '1110157', 'Digital_Communication.jpg', 'f5s105r45', 'books', 'lending', 'Englewood Cliffs, NJ : Prentice Hall, c1995. ', 'Digital communications', '0132008092', 'JSE 10-128', '5th', 'xvi, 512 p. : ill. ; 24 cm.', 20, '2010-12-29 12:53:36', '0000-00-00 00:00:00', 0),
(17, 'Wicker, Stephen B.', 'Digital communications', 'Error control systems for digital communication and storage / Stephen B. Wicker. ', '1110158', 'Digital_Communication.jpg', 'f5s105r45', 'books', 'lending', 'Englewood Cliffs, NJ : Prentice Hall, c1995. ', 'Digital communications', '0132008092', 'JSE 10-128', '5th', 'xvi, 512 p. : ill. ; 24 cm.', 20, '2010-12-29 12:53:59', '0000-00-00 00:00:00', 0),
(18, 'Wicker, Stephen B.', 'Digital communications', 'Error control systems for digital communication and storage / Stephen B. Wicker. ', '1110159', 'Digital_Communication.jpg', 'f5s105r45', 'books', 'lending', 'Englewood Cliffs, NJ : Prentice Hall, c1995. ', 'Digital communications', '0132008092', 'JSE 10-128', '5th', 'xvi, 512 p. : ill. ; 24 cm.', 20, '2010-12-29 12:54:49', '0000-00-00 00:00:00', 0),
(19, 'Wicker, Stephen B.', 'Digital communications', 'Error control systems for digital communication and storage / Stephen B. Wicker. ', '1110160', 'Digital_Communication.jpg', 'f5s105r45', 'books', 'lending', 'Englewood Cliffs, NJ : Prentice Hall, c1995. ', 'Digital communications', '0132008092', 'JSE 10-128', '5th', 'xvi, 512 p. : ill. ; 24 cm.', 20, '2010-12-29 12:54:59', '0000-00-00 00:00:00', 0),
(20, 'Wicker, Stephen B.', 'Digital communications', 'Error control systems for digital communication and storage / Stephen B. Wicker. ', '1110161', 'Digital_Communication.jpg', 'f5s105r45', 'books', 'lending', 'Englewood Cliffs, NJ : Prentice Hall, c1995. ', 'Digital communications', '0132008092', 'JSE 10-128', '5th', 'xvi, 512 p. : ill. ; 24 cm.', 20, '2010-12-29 12:55:08', '0000-00-00 00:00:00', 0),
(21, 'Wicker, Stephen B.', 'Digital communications', 'Error control systems for digital communication and storage / Stephen B. Wicker. ', '1110162', 'Digital_Communication.jpg', 'f5s105r45', 'books', 'lending', 'Englewood Cliffs, NJ : Prentice Hall, c1995. ', 'Digital communications', '0132008092', 'JSE 10-128', '5th', 'xvi, 512 p. : ill. ; 24 cm.', 20, '2010-12-29 12:55:17', '0000-00-00 00:00:00', 0),
(22, 'Wicker, Stephen B.', 'Digital communications', 'Error control systems for digital communication and storage / Stephen B. Wicker. ', '1110163', 'Digital_Communication.jpg', 'f5s105r45', 'books', 'lending', 'Englewood Cliffs, NJ : Prentice Hall, c1995. ', 'Digital communications', '0132008092', 'JSE 10-128', '5th', 'xvi, 512 p. : ill. ; 24 cm.', 20, '2010-12-29 12:56:12', '0000-00-00 00:00:00', 0),
(23, 'Wicker, Stephen B.', 'Digital communications', 'Error control systems for digital communication and storage / Stephen B. Wicker. ', '1110164', 'Digital_Communication.jpg', 'f5s105r45', 'books', 'lending', 'Englewood Cliffs, NJ : Prentice Hall, c1995. ', 'Digital communications', '0132008092', 'JSE 10-128', '5th', 'xvi, 512 p. : ill. ; 24 cm.', 20, '2010-12-29 12:56:23', '0000-00-00 00:00:00', 0),
(24, 'Wicker, Stephen B.', 'Digital communications', 'Error control systems for digital communication and storage / Stephen B. Wicker. ', '1110165', 'Digital_Communication.jpg', 'f5s105r45', 'books', 'lending', 'Englewood Cliffs, NJ : Prentice Hall, c1995. ', 'Digital communications', '0132008092', 'JSE 10-128', '5th', 'xvi, 512 p. : ill. ; 24 cm.', 20, '2010-12-29 12:56:31', '0000-00-00 00:00:00', 0),
(25, 'Wicker, Stephen B.', 'Digital communications', 'Error control systems for digital communication and storage / Stephen B. Wicker. ', '1110166', 'Digital_Communication.jpg', 'f5s105r45', 'books', 'lending', 'Englewood Cliffs, NJ : Prentice Hall, c1995. ', 'Digital communications', '0132008092', 'JSE 10-128', '5th', 'xvi, 512 p. : ill. ; 24 cm.', 20, '2010-12-29 12:56:38', '0000-00-00 00:00:00', 0),
(26, 'Wicker, Stephen B.', 'Digital communications', 'Error control systems for digital communication and storage / Stephen B. Wicker. ', '1110167', 'Digital_Communication.jpg', 'f5s105r45', 'books', 'lending', 'Englewood Cliffs, NJ : Prentice Hall, c1995. ', 'Digital communications', '0132008092', 'JSE 10-128', '5th', 'xvi, 512 p. : ill. ; 24 cm.', 20, '2010-12-29 12:56:48', '0000-00-00 00:00:00', 0),
(27, 'Wicker, Stephen B.', 'Digital communications', 'Error control systems for digital communication and storage / Stephen B. Wicker. ', '1110168', 'Digital_Communication.jpg', 'f5s105r45', 'books', 'lending', 'Englewood Cliffs, NJ : Prentice Hall, c1995. ', 'Digital communications', '0132008092', 'JSE 10-128', '5th', 'xvi, 512 p. : ill. ; 24 cm.', 20, '2010-12-29 12:57:00', '0000-00-00 00:00:00', 0),
(28, 'Wicker, Stephen B.', 'Digital communications', 'Error control systems for digital communication and storage / Stephen B. Wicker. ', '1110169', 'Digital_Communication.jpg', 'f5s105r45', 'books', 'lending', 'Englewood Cliffs, NJ : Prentice Hall, c1995. ', 'Digital communications', '0132008092', 'JSE 10-128', '5th', 'xvi, 512 p. : ill. ; 24 cm.', 20, '2010-12-29 12:57:08', '0000-00-00 00:00:00', 0),
(29, 'Wicker, Stephen B.', 'Digital communications', 'Error control systems for digital communication and storage / Stephen B. Wicker. ', '1110170', 'Digital_Communication.jpg', 'f5s105r45', 'books', 'lending', 'Englewood Cliffs, NJ : Prentice Hall, c1995. ', 'Digital communications', '0132008092', 'JSE 10-128', '5th', 'xvi, 512 p. : ill. ; 24 cm.', 20, '2010-12-29 12:57:16', '0000-00-00 00:00:00', 0),
(30, 'Wicker, Stephen B.', 'Digital communications', 'Error control systems for digital communication and storage / Stephen B. Wicker. ', '1110171', 'Digital_Communication.jpg', 'f5s105r45', 'books', 'lending', 'Englewood Cliffs, NJ : Prentice Hall, c1995. ', 'Digital communications', '0132008092', 'JSE 10-128', '5th', 'xvi, 512 p. : ill. ; 24 cm.', 20, '2010-12-29 12:57:24', '0000-00-00 00:00:00', 0),
(31, 'Wicker, Stephen B.', 'Digital communications', 'Error control systems for digital communication and storage / Stephen B. Wicker. ', '1110172', 'Digital_Communication.jpg', 'f5s105r45', 'books', 'lending', 'Englewood Cliffs, NJ : Prentice Hall, c1995. ', 'Digital communications', '0132008092', 'JSE 10-128', '5th', 'xvi, 512 p. : ill. ; 24 cm.', 20, '2010-12-29 12:57:39', '0000-00-00 00:00:00', 0),
(36, 'Dimitrijev, Sima, 1958-', 'Semiconductors', 'Principles of semiconductor devices / Sima Dimitrijev. ', '5487965412', 'semicondutor1.jpg', 'f8s15r85', 'books', 'reading', 'New York : Oxford University Press, 2006. ', 'Semiconductors', '0195161130 (alk. paper)', 'JSF 05-817', '6th', 'xviii, 588 p. : ill. (chiefly col.) ; 25 cm.', 25, '2010-12-29 13:24:07', '0000-00-00 00:00:00', 0),
(35, 'Dimitrijev, Sima, 1958-', 'Semiconductors', 'Principles of semiconductor devices / Sima Dimitrijev. ', '5487965411', 'semicondutor.jpg', 'f8s15r85', 'books', 'reading', 'New York : Oxford University Press, 2006. ', 'Semiconductors', '0195161130 (alk. paper)', 'JSF 05-817', '6th', 'xviii, 588 p. : ill. (chiefly col.) ; 25 cm.', 25, '2010-12-29 13:23:57', '0000-00-00 00:00:00', 0),
(37, 'Dimitrijev, Sima, 1958-', 'Semiconductors', 'Principles of semiconductor devices / Sima Dimitrijev. ', '5487965413', 'semicondutor2.jpg', 'f8s15r85', 'books', 'reading', 'New York : Oxford University Press, 2006. ', 'Semiconductors', '0195161130 (alk. paper)', 'JSF 05-817', '6th', 'xviii, 588 p. : ill. (chiefly col.) ; 25 cm.', 25, '2010-12-29 13:24:16', '0000-00-00 00:00:00', 0),
(38, 'Dimitrijev, Sima, 1958-', 'Semiconductors', 'Principles of semiconductor devices / Sima Dimitrijev. ', '5487965414', 'semicondutor3.jpg', 'f8s15r85', 'books', 'reading', 'New York : Oxford University Press, 2006. ', 'Semiconductors', '0195161130 (alk. paper)', 'JSF 05-817', '6th', 'xviii, 588 p. : ill. (chiefly col.) ; 25 cm.', 25, '2010-12-29 13:24:25', '0000-00-00 00:00:00', 0),
(39, 'Dimitrijev, Sima, 1958-', 'Semiconductors', 'Principles of semiconductor devices / Sima Dimitrijev. ', '5487965415', 'semicondutor4.jpg', 'f8s15r85', 'books', 'reading', 'New York : Oxford University Press, 2006. ', 'Semiconductors', '0195161130 (alk. paper)', 'JSF 05-817', '6th', 'xviii, 588 p. : ill. (chiefly col.) ; 25 cm.', 25, '2010-12-29 13:24:33', '0000-00-00 00:00:00', 0),
(40, 'Dimitrijev, Sima, 1958-', 'Semiconductors', 'Principles of semiconductor devices / Sima Dimitrijev. ', '5487965416', 'semicondutor5.jpg', 'f8s15r85', 'books', 'reading', 'New York : Oxford University Press, 2006. ', 'Semiconductors', '0195161130 (alk. paper)', 'JSF 05-817', '6th', 'xviii, 588 p. : ill. (chiefly col.) ; 25 cm.', 25, '2010-12-29 13:24:44', '0000-00-00 00:00:00', 0),
(41, 'Dimitrijev, Sima, 1958-', 'Semiconductors', 'Principles of semiconductor devices / Sima Dimitrijev. ', '5487965417', 'semicondutor6.jpg', 'f8s15r85', 'books', 'reading', 'New York : Oxford University Press, 2006. ', 'Semiconductors', '0195161130 (alk. paper)', 'JSF 05-817', '6th', 'xviii, 588 p. : ill. (chiefly col.) ; 25 cm.', 25, '2010-12-29 13:24:53', '0000-00-00 00:00:00', 0),
(42, 'Dimitrijev, Sima, 1958-', 'Semiconductors', 'Principles of semiconductor devices / Sima Dimitrijev. ', '5487965418', 'semicondutor7.jpg', 'f8s15r85', 'books', 'reading', 'New York : Oxford University Press, 2006. ', 'Semiconductors', '0195161130 (alk. paper)', 'JSF 05-817', '6th', 'xviii, 588 p. : ill. (chiefly col.) ; 25 cm.', 25, '2010-12-29 13:25:03', '0000-00-00 00:00:00', 0),
(43, 'Dimitrijev, Sima, 1958-', 'Semiconductors', 'Principles of semiconductor devices / Sima Dimitrijev. ', '5487965419', 'semicondutor8.jpg', 'f8s15r85', 'books', 'reading', 'New York : Oxford University Press, 2006. ', 'Semiconductors', '0195161130 (alk. paper)', 'JSF 05-817', '6th', 'xviii, 588 p. : ill. (chiefly col.) ; 25 cm.', 25, '2010-12-29 13:25:11', '0000-00-00 00:00:00', 0),
(44, 'Dimitrijev, Sima, 1958-', 'Semiconductors', 'Principles of semiconductor devices / Sima Dimitrijev. ', '5487965420', 'semicondutor9.jpg', 'f8s15r85', 'books', 'reading', 'New York : Oxford University Press, 2006. ', 'Semiconductors', '0195161130 (alk. paper)', 'JSF 05-817', '6th', 'xviii, 588 p. : ill. (chiefly col.) ; 25 cm.', 25, '2010-12-29 13:25:22', '0000-00-00 00:00:00', 0),
(45, 'Shaw, Steve.', 'Oracle (Computer file)', 'Pro Oracle database 11g RAC on Linux / Steve Shaw, Martin Bach. ', '8457125461', 'Oracle_database.jpg', 'f5s105r1547', 'books', 'reading', '[Berkeley, Calif.] : Apress ; New York : Distributed to the book trade worldwide by Springer Science+Business Media, c2010. ', 'oracle database', '9781430229582 (pbk.)', 'JSE 10-12874', '5th', 'xxiii, 815 p. : ill. ; 24 cm.', 20, '2010-12-31 13:25:32', '0000-00-00 00:00:00', 0),
(46, 'Shaw, Steve.', 'Oracle (Computer file)', 'Pro Oracle database 11g RAC on Linux / Steve Shaw, Martin Bach. ', '8457125462', 'Oracle_database1.jpg', 'f5s105r1547', 'books', 'lending', '[Berkeley, Calif.] : Apress ; New York : Distributed to the book trade worldwide by Springer Science+Business Media, c2010. ', 'oracle database', '9781430229582 (pbk.)', 'JSE 10-12874', '5th', 'xxiii, 815 p. : ill. ; 24 cm.', 20, '2010-12-31 13:26:11', '0000-00-00 00:00:00', 0),
(47, 'Shaw, Steve.', 'Oracle (Computer file)', 'Pro Oracle database 11g RAC on Linux / Steve Shaw, Martin Bach. ', '8457125463', 'Oracle_database2.jpg', 'f5s105r1547', 'books', 'lending', '[Berkeley, Calif.] : Apress ; New York : Distributed to the book trade worldwide by Springer Science+Business Media, c2010. ', 'oracle database', '9781430229582 (pbk.)', 'JSE 10-12874', '5th', 'xxiii, 815 p. : ill. ; 24 cm.', 20, '2010-12-31 13:26:21', '0000-00-00 00:00:00', 0),
(48, 'Shaw, Steve.', 'Oracle (Computer file)', 'Pro Oracle database 11g RAC on Linux / Steve Shaw, Martin Bach. ', '8457125464', 'Oracle_database3.jpg', 'f5s105r1547', 'books', 'lending', '[Berkeley, Calif.] : Apress ; New York : Distributed to the book trade worldwide by Springer Science+Business Media, c2010. ', 'oracle database', '9781430229582 (pbk.)', 'JSE 10-12874', '5th', 'xxiii, 815 p. : ill. ; 24 cm.', 20, '2010-12-31 13:26:30', '0000-00-00 00:00:00', 0),
(49, 'Shaw, Steve.', 'Oracle (Computer file)', 'Pro Oracle database 11g RAC on Linux / Steve Shaw, Martin Bach. ', '8457125465', 'Oracle_database4.jpg', 'f5s105r1547', 'books', 'lending', '[Berkeley, Calif.] : Apress ; New York : Distributed to the book trade worldwide by Springer Science+Business Media, c2010. ', 'oracle database', '9781430229582 (pbk.)', 'JSE 10-12874', '5th', 'xxiii, 815 p. : ill. ; 24 cm.', 20, '2010-12-31 13:26:45', '0000-00-00 00:00:00', 0),
(50, 'Shaw, Steve.', 'Oracle (Computer file)', 'Pro Oracle database 11g RAC on Linux / Steve Shaw, Martin Bach. ', '8457125466', 'Oracle_database5.jpg', 'f5s105r1547', 'books', 'lending', '[Berkeley, Calif.] : Apress ; New York : Distributed to the book trade worldwide by Springer Science+Business Media, c2010. ', 'oracle database', '9781430229582 (pbk.)', 'JSE 10-12874', '5th', 'xxiii, 815 p. : ill. ; 24 cm.', 20, '2010-12-31 13:27:10', '0000-00-00 00:00:00', 0),
(51, 'Shaw, Steve.', 'Oracle (Computer file)', 'Pro Oracle database 11g RAC on Linux / Steve Shaw, Martin Bach. ', '8457125467', 'Oracle_database7.jpg', 'f5s105r1547', 'books', 'lending', '[Berkeley, Calif.] : Apress ; New York : Distributed to the book trade worldwide by Springer Science+Business Media, c2010. ', 'oracle database', '9781430229582 (pbk.)', 'JSE 10-12874', '5th', 'xxiii, 815 p. : ill. ; 24 cm.', 20, '2010-12-31 13:27:24', '0000-00-00 00:00:00', 0),
(52, 'Shaw, Steve.', 'Oracle (Computer file)', 'Pro Oracle database 11g RAC on Linux / Steve Shaw, Martin Bach. ', '8457125468', 'Oracle_database12.jpg', 'f5s105r1547', 'books', 'lending', '[Berkeley, Calif.] : Apress ; New York : Distributed to the book trade worldwide by Springer Science+Business Media, c2010. ', 'oracle database', '9781430229582 (pbk.)', 'JSE 10-12874', '5th', 'xxiii, 815 p. : ill. ; 24 cm.', 20, '2010-12-31 13:41:02', '0000-00-00 00:00:00', 0),
(53, 'Shaw, Steve.', 'Oracle (Computer file)', 'Pro Oracle database 11g RAC on Linux / Steve Shaw, Martin Bach. ', '8457125469', 'Oracle_database15.jpg', 'f5s105r1547', 'books', 'lending', '[Berkeley, Calif.] : Apress ; New York : Distributed to the book trade worldwide by Springer Science+Business Media, c2010. ', 'oracle database', '9781430229582 (pbk.)', 'JSE 10-12874', '5th', 'xxiii, 815 p. : ill. ; 24 cm.', 20, '2010-12-31 13:42:12', '0000-00-00 00:00:00', 0),
(54, 'Fibre Channel Industry Association.', 'Fibre Channel (Standard)', 'Fibre channel storage area networks / Fibre Channel Industry Association. ', '465687451', 'Fibre_storage.jpg', 'f5s105r1547', 'books', 'reading', 'Eagle Rock, Va. : LLH Technology Pub., c2001. ', 'Fibre storage', '1878707973 (pbk. : alk. paper)', 'JSE 02-419', '1st ed.', 'vii, 80 p. : col. ill. ; 23 cm.', 25, '2010-12-31 15:40:33', '0000-00-00 00:00:00', 0),
(55, 'Fibre Channel Industry Association.', 'Fibre Channel (Standard)', 'Fibre channel storage area networks / Fibre Channel Industry Association. ', '465687452', 'Fibre_storage14.jpg', 'f5s105r1547', 'books', 'reading', 'Eagle Rock, Va. : LLH Technology Pub., c2001. ', 'Fibre storage', '1878707973 (pbk. : alk. paper)', 'JSE 02-419', '1st ed.', 'vii, 80 p. : col. ill. ; 23 cm.', 25, '2010-12-31 15:54:32', '0000-00-00 00:00:00', 0),
(56, 'Fibre Channel Industry Association.', 'Fibre Channel (Standard)', 'Fibre channel storage area networks / Fibre Channel Industry Association. ', '465687453', 'Fibre_storage15.jpg', 'f5s105r1547', 'books', 'reading', 'Eagle Rock, Va. : LLH Technology Pub., c2001. ', 'Fibre storage', '1878707973 (pbk. : alk. paper)', 'JSE 02-419', '1st ed.', 'vii, 80 p. : col. ill. ; 23 cm.', 25, '2010-12-31 15:54:42', '0000-00-00 00:00:00', 0),
(57, 'Fibre Channel Industry Association.', 'Fibre Channel (Standard)', 'Fibre channel storage area networks / Fibre Channel Industry Association. ', '465687454', 'Fibre_storage16.jpg', 'f5s105r1547', 'books', 'reading', 'Eagle Rock, Va. : LLH Technology Pub., c2001. ', 'Fibre storage', '1878707973 (pbk. : alk. paper)', 'JSE 02-419', '1st ed.', 'vii, 80 p. : col. ill. ; 23 cm.', 25, '2010-12-31 15:54:51', '0000-00-00 00:00:00', 0),
(58, 'Fibre Channel Industry Association.', 'Fibre Channel (Standard)', 'Fibre channel storage area networks / Fibre Channel Industry Association. ', '465687455', 'Fibre_storage17.jpg', 'f5s105r1547', 'books', 'reading', 'Eagle Rock, Va. : LLH Technology Pub., c2001. ', 'Fibre storage', '1878707973 (pbk. : alk. paper)', 'JSE 02-419', '1st ed.', 'vii, 80 p. : col. ill. ; 23 cm.', 25, '2010-12-31 15:55:01', '0000-00-00 00:00:00', 0),
(59, 'Fibre Channel Industry Association.', 'Fibre Channel (Standard)', 'Fibre channel storage area networks / Fibre Channel Industry Association. ', '465687456', 'Fibre_storage19.jpg', 'f5s105r1547', 'books', 'reading', 'Eagle Rock, Va. : LLH Technology Pub., c2001. ', 'Fibre storage', '1878707973 (pbk. : alk. paper)', 'JSE 02-419', '1st ed.', 'vii, 80 p. : col. ill. ; 23 cm.', 25, '2010-12-31 15:55:47', '0000-00-00 00:00:00', 0),
(60, 'Fibre Channel Industry Association.', 'Fibre Channel (Standard)', 'Fibre channel storage area networks / Fibre Channel Industry Association. ', '465687457', 'Fibre_storage20.jpg', 'f5s105r1547', 'books', 'reading', 'Eagle Rock, Va. : LLH Technology Pub., c2001. ', 'Fibre storage', '1878707973 (pbk. : alk. paper)', 'JSE 02-419', '1st ed.', 'vii, 80 p. : col. ill. ; 23 cm.', 25, '2010-12-31 15:55:57', '0000-00-00 00:00:00', 0),
(61, 'Fibre Channel Industry Association.', 'Fibre Channel (Standard)', 'Fibre channel storage area networks / Fibre Channel Industry Association. ', '465687458', 'Fibre_storage21.jpg', 'f5s105r1547', 'books', 'reading', 'Eagle Rock, Va. : LLH Technology Pub., c2001. ', 'Fibre storage', '1878707973 (pbk. : alk. paper)', 'JSE 02-419', '1st ed.', 'vii, 80 p. : col. ill. ; 23 cm.', 25, '2010-12-31 15:56:14', '0000-00-00 00:00:00', 0),
(62, 'Test author', 'Test Subject', 'Test Title', 'Test:0123456', 'test_book.jpg', 'F2S5R12', 'books', 'rent', 'Test Publisher', 'Test Keyword', 'TestIsbd', 'Test Call number', 'Test Edition', 'Test Description', 120, '2011-03-07 20:11:48', '0000-00-00 00:00:00', 0),
(63, 'Test author', 'Test Subject', 'Test Title', 'Test:012345689', 'test_book2.jpg', 'F2S5R12', 'books', 'lending', 'Test Publisher', 'Test Keyword', 'TestIsbd', 'Test Call number', 'Test Edition', 'Test Description', 120, '2011-03-08 09:32:36', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ebooks`
--

CREATE TABLE IF NOT EXISTS `ebooks` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `ebooks` varchar(200) NOT NULL,
  `ebook_file` varchar(200) NOT NULL,
  `create_date` datetime NOT NULL,
  `modify_date` datetime NOT NULL,
  `total_download` int(100) NOT NULL DEFAULT '0',
  `status` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `ebooks`
--

INSERT INTO `ebooks` (`id`, `ebooks`, `ebook_file`, `create_date`, `modify_date`, `total_download`, `status`) VALUES
(1, 'Test Book', 'mcq1.txt', '2011-01-05 16:55:20', '0000-00-00 00:00:00', 11, 1),
(2, 'DHTML', 'DHTML_Sheet_of_08Dec2010_Class.pdf', '2010-12-31 17:44:36', '0000-00-00 00:00:00', 8, 1),
(4, 'Web portal', 'TaslimSir_Chapter10_Web_Portals_and_Web_Services_PART1A.pdf', '2010-12-31 18:27:32', '0000-00-00 00:00:00', 7, 1),
(5, 'Test magento', 'Sample_Work.pdf', '2011-01-05 14:19:20', '0000-00-00 00:00:00', 9, 1),
(6, 'Test Book', 'Mysoftheaven_SARC_Ltd.docx', '2011-02-28 15:07:29', '0000-00-00 00:00:00', 4, 1),
(7, 'Digital Logic Design', 'DiabeticsHospitalLalmonirhat.pdf', '2011-10-15 17:59:36', '0000-00-00 00:00:00', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `category` varchar(50) NOT NULL,
  `rank` varchar(10) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `id_number` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `category`, `rank`, `address`, `email`, `mobile`, `image`, `id_number`, `password`, `level`) VALUES
(1, 'Sumon Khondoker', 'Student', 'student', 'Mohammadpur', 'rasedislam10@gmail.com', '017154879654', 'uploads/profile_images/Sumon.jpg', 'MSC124', '123', '0'),
(2, 'Admin', 'Staff', 'Major', 'MIST', 'mist@mist.ca.bd', '01818999999', 'uploads/profile_images/test.jpg', 'admin', 'admin', '1'),
(3, 'Mamun ur Rashid', 'Staff', 'Major', 'MIST', 'mamun@mist.ca.bd', '01514789654', 'uploads/profile_images/Sumon1.jpg', 'MSC123', '123', '0'),
(4, 'testname', 'Student', 'student', '123, kafrul', 'tareq_cs7@yahoo.com', '017154879654', 'uploads/profile_images/test_member.jpg', 'MSC125', '123', '0'),
(5, 'Hasan al mahmud', '	Student', 'student', 'Mohammadpur 	', 'mamun22@mist.ca.bd', '01719555555', 'uploads/profile_images/test2.jpg', 'MSC 043 5171', '123', '0'),
(6, 'rokon khan', 'student', 'student', 'Mohammadpur 	', 'mamunk223@mist.ca.bd', '01719554555', 'uploads/profile_images/test3.jpg', 'MSC 043 5152', '123', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fine`
--

CREATE TABLE IF NOT EXISTS `tbl_fine` (
  `serial` int(100) NOT NULL,
  `booking_serial` int(100) NOT NULL,
  `user_id` varchar(200) NOT NULL,
  `book_id` varchar(200) NOT NULL,
  `fine` int(100) NOT NULL AUTO_INCREMENT,
  `fine_date` datetime NOT NULL,
  `status` int(10) NOT NULL,
  PRIMARY KEY (`fine`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_fine`
--


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` varchar(100) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(100) NOT NULL COMMENT '0=Member, 1=Admin',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `full_name`, `password`, `status`) VALUES
('MIST100', 'Tareque', 'Md. Kamrul Hasan Tareq', '2011', 0),
('MSC124', 'hasan', 'Rajiul Hasan Rony', '123', 0),
('MSC125', 'tareq', 'Tareq Hasan', '123', 0),
('1', 'admin', 'Admin', 'admin', 1);
