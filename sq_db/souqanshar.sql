-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 19, 2015 at 02:41 AM
-- Server version: 5.1.33
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `souqanshar`
--

-- --------------------------------------------------------

--
-- Table structure for table `cat_accesories`
--

CREATE TABLE IF NOT EXISTS `cat_accesories` (
  `sub_cat_id` int(100) NOT NULL AUTO_INCREMENT,
  `sub_cat` varchar(100) NOT NULL,
  PRIMARY KEY (`sub_cat_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `cat_accesories`
--


-- --------------------------------------------------------

--
-- Table structure for table `cat_clothing`
--

CREATE TABLE IF NOT EXISTS `cat_clothing` (
  `sub_cat_id` int(100) NOT NULL AUTO_INCREMENT,
  `sub_cat` varchar(100) NOT NULL,
  PRIMARY KEY (`sub_cat_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `cat_clothing`
--


-- --------------------------------------------------------

--
-- Table structure for table `cat_house`
--

CREATE TABLE IF NOT EXISTS `cat_house` (
  `sub_cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `sub_cat` varchar(100) NOT NULL,
  PRIMARY KEY (`sub_cat_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `cat_house`
--


-- --------------------------------------------------------

--
-- Table structure for table `cat_pet`
--

CREATE TABLE IF NOT EXISTS `cat_pet` (
  `sub_cat_id` int(100) NOT NULL AUTO_INCREMENT,
  `sub_cat` varchar(100) NOT NULL,
  PRIMARY KEY (`sub_cat_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `cat_pet`
--


-- --------------------------------------------------------

--
-- Table structure for table `cat_shoes`
--

CREATE TABLE IF NOT EXISTS `cat_shoes` (
  `sub_cat_id` int(100) NOT NULL AUTO_INCREMENT,
  `sub_cat` varchar(100) NOT NULL,
  PRIMARY KEY (`sub_cat_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `cat_shoes`
--


-- --------------------------------------------------------

--
-- Table structure for table `sa_buyer`
--

CREATE TABLE IF NOT EXISTS `sa_buyer` (
  `by_fullname` varchar(1000) NOT NULL,
  `by_address` varchar(1000) NOT NULL,
  `by_phone` int(20) NOT NULL,
  `by_methodpayment` varchar(100) NOT NULL,
  `userID` varchar(100) NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sa_buyer`
--


-- --------------------------------------------------------

--
-- Table structure for table `sa_cart`
--

CREATE TABLE IF NOT EXISTS `sa_cart` (
  `cr_itemID` varchar(1000) NOT NULL,
  `pl_name` varchar(1000) NOT NULL,
  `pl_price` varchar(10000) NOT NULL,
  `cr_quantity` int(100) NOT NULL,
  `cr_currentcost` int(100) NOT NULL,
  PRIMARY KEY (`cr_itemID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sa_cart`
--


-- --------------------------------------------------------

--
-- Table structure for table `sa_category`
--

CREATE TABLE IF NOT EXISTS `sa_category` (
  `cat_house` varchar(100) NOT NULL,
  `cat_accesories` varchar(100) NOT NULL,
  `cat_shoes` varchar(100) NOT NULL,
  `cat_clothing` varchar(100) NOT NULL,
  `cat_pets` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sa_category`
--


-- --------------------------------------------------------

--
-- Table structure for table `sa_productlistings`
--

CREATE TABLE IF NOT EXISTS `sa_productlistings` (
  `pl_name` varchar(100) NOT NULL,
  `pl_category` varchar(100) NOT NULL,
  `pl_subcategory` varchar(100) NOT NULL,
  `pl_price` mediumtext NOT NULL,
  `seller_id` int(100) NOT NULL,
  `pl_category_id` varchar(10000) NOT NULL,
  `pl_sub_cat_id` mediumtext NOT NULL,
  PRIMARY KEY (`seller_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sa_productlistings`
--


-- --------------------------------------------------------

--
-- Table structure for table `sa_sellerdetails`
--

CREATE TABLE IF NOT EXISTS `sa_sellerdetails` (
  `sd_id` int(100) NOT NULL,
  `sd_license` varchar(100) NOT NULL,
  `sd_phone` int(100) NOT NULL,
  `d_status` varchar(100) NOT NULL,
  PRIMARY KEY (`sd_license`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sa_sellerdetails`
--


-- --------------------------------------------------------

--
-- Table structure for table `sa_user`
--

CREATE TABLE IF NOT EXISTS `sa_user` (
  `userID` int(100) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `userEmail` varchar(100) NOT NULL,
  PRIMARY KEY (`userID`),
  UNIQUE KEY `userEmail` (`userEmail`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sa_user`
--

