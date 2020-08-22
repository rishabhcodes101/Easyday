-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 24, 2019 at 07:03 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `easyday`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `admid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`admid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admid`, `username`, `password`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_answer`
--

CREATE TABLE IF NOT EXISTS `tbl_answer` (
  `ansid` int(11) NOT NULL AUTO_INCREMENT,
  `ques_id` int(11) NOT NULL,
  `reg_id` int(11) NOT NULL,
  `answer` varchar(250) NOT NULL,
  `date` varchar(10) NOT NULL,
  PRIMARY KEY (`ansid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_answer`
--

INSERT INTO `tbl_answer` (`ansid`, `ques_id`, `reg_id`, `answer`, `date`) VALUES
(1, 1, 1, 'php is best.', '2019-07-22'),
(2, 1, 1, 'php is a coding language\r\n', '2019-07-24');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE IF NOT EXISTS `tbl_cart` (
  `cart_id` int(11) NOT NULL AUTO_INCREMENT,
  `pro_id` int(11) NOT NULL,
  `reg_id` int(11) NOT NULL,
  `date` varchar(10) NOT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_cart`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE IF NOT EXISTS `tbl_category` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(30) NOT NULL,
  `date` varchar(10) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`cat_id`, `category`, `date`) VALUES
(1, 'Households', '2019-07-17'),
(2, 'kitchen', '2019-07-17'),
(3, 'beverages', '2019-07-17'),
(4, 'Bread&Brakery', '2019-07-17'),
(5, 'frozen foods', '2019-07-17'),
(6, 'pet foods', '2019-07-17');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE IF NOT EXISTS `tbl_contact` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `email` varchar(20) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `message` varchar(150) NOT NULL,
  `date` varchar(10) NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`contact_id`, `name`, `email`, `mobile`, `message`, `date`) VALUES
(1, 'rishabh', '', '7897338014', 'hiii', '2019-07-20'),
(2, 'kshitiz', 'k@gmail.com', '7894661233', 'skj', '2019-07-20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE IF NOT EXISTS `tbl_product` (
  `pro_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `price` varchar(10) NOT NULL,
  `peice` varchar(6) NOT NULL,
  `pic` varchar(1000) NOT NULL,
  `description` text NOT NULL,
  `expiry` varchar(10) NOT NULL,
  `date` varchar(10) NOT NULL,
  PRIMARY KEY (`pro_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`pro_id`, `name`, `cat_id`, `price`, `peice`, `pic`, `description`, `expiry`, `date`) VALUES
(1, 'pepsi', 3, '75', '4', '2.png', 'pepsi is strongest soft drink.', '2019-07-03', '2019-07-17'),
(2, 'Diet Coke', 3, '120', '2', '15.png', 'its the diet coke having no added sugar ', '2019-08-24', '2019-07-17'),
(4, 'Sprite', 3, '85', '2', '16.png', 'sprite is a light taste softdrink', '2020-01-11', '2019-07-19'),
(5, 'pedigery', 6, '180', '5', '28.png', 'Its the most healty dog food.', '2020-01-31', '2019-07-19');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_question`
--

CREATE TABLE IF NOT EXISTS `tbl_question` (
  `ques_id` int(11) NOT NULL AUTO_INCREMENT,
  `reg_id` int(11) NOT NULL,
  `question` varchar(250) NOT NULL,
  `date` varchar(10) NOT NULL,
  PRIMARY KEY (`ques_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_question`
--

INSERT INTO `tbl_question` (`ques_id`, `reg_id`, `question`, `date`) VALUES
(1, 1, 'what is php?', '2019-07-22'),
(2, 1, 'what is html?\r\n', '2019-07-22');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_register`
--

CREATE TABLE IF NOT EXISTS `tbl_register` (
  `reg_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `fname` varchar(60) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `locality` varchar(50) NOT NULL,
  `date` varchar(10) NOT NULL,
  PRIMARY KEY (`reg_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_register`
--

INSERT INTO `tbl_register` (`reg_id`, `name`, `fname`, `gender`, `email`, `password`, `address`, `pincode`, `mobile`, `locality`, `date`) VALUES
(1, 'rishabh dubey', 'Mr. Rajesh Dubey', 'Male', 'rishabhsher@gmail.com', '8090', 'k-581,ashiyana,lko', '226012', '8318946725', 'INDIA', '2019-07-15'),
(2, 'Rajat dubey', 'Mr. Rajesh Dubey', 'Male', 'rajatvegito@gmail.com', '7582', 'k-581,ashiyana,lko', '226012', '8318946725', 'INDIA', '2019-07-15'),
(4, 'sonu', 'Mr. C.P.  DUBEY', 'Male', 'sonu@gmail.com', '12345', 'gdusfsjk', '226014', '457845785', 'INDIA', '2019-07-15');
