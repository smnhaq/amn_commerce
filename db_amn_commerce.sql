-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 16, 2014 at 03:25 PM
-- Server version: 5.0.41
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_amn_commerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `admin_id` int(3) NOT NULL auto_increment,
  `admin_name` varchar(50) NOT NULL,
  `admin_email_address` varchar(256) NOT NULL,
  `admin_password` varchar(50) NOT NULL,
  `current_date_time` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`admin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `admin_email_address`, `admin_password`, `current_date_time`) VALUES
(1, 'asim', 'ask2asim@gmail.com', '123', '2014-01-13 04:49:53'),
(2, 'smnhaq', 'smnhaq@gmail.com', '123', '2014-01-13 04:52:13'),
(3, 'gazi', 'gazimoshiul@gmail.com', '123', '2014-01-13 04:52:13');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE IF NOT EXISTS `tbl_category` (
  `category_id` int(4) NOT NULL auto_increment,
  `category_name` varchar(50) NOT NULL,
  `category_description` varchar(256) NOT NULL,
  `category_image` varchar(256) NOT NULL,
  `publication_status` tinyint(1) NOT NULL,
  `sort_order` int(3) default NULL,
  `last_modefied` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `current_date_time` timestamp NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`, `category_description`, `category_image`, `publication_status`, `sort_order`, `last_modefied`, `current_date_time`) VALUES
(1, 'Mobile', 'Nokia N97', 'http://localhost/amn_commerce/images/product_images/About-Us.jpg', 1, NULL, '2014-01-15 16:50:33', '0000-00-00 00:00:00'),
(2, 'Computer', 'Brand PC HP', 'http://localhost/amn_commerce/images/product_images/Back_Button.png', 1, NULL, '2014-01-15 16:54:30', '0000-00-00 00:00:00'),
(3, 'TV', 'Samsung', 'http://localhost/amn_commerce/images/product_images/back-2-13.png', 0, NULL, '2014-01-15 16:54:38', '0000-00-00 00:00:00'),
(4, 'Video Games', 'Kids Play', 'http://localhost/amn_commerce/images/product_images/GreenHome_Rendering1.JPEG', 1, NULL, '2014-01-15 16:52:27', '0000-00-00 00:00:00'),
(5, 'Entertainment', 'For Unmarried Person.', 'http://localhost/amn_commerce/images/product_images/parki_sea_beach.jpg', 1, NULL, '2014-01-15 16:53:10', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE IF NOT EXISTS `tbl_customer` (
  `customer_id` int(8) NOT NULL auto_increment,
  `customer_first_name` varchar(50) NOT NULL,
  `customer_last_name` varchar(50) NOT NULL,
  `customer_date_of_birth` datetime NOT NULL,
  `customer_email_address` varchar(256) NOT NULL,
  `customer_address` varchar(256) NOT NULL,
  `customer_gender` varchar(10) NOT NULL,
  `customer_phone` varchar(20) NOT NULL,
  `customer_password` varchar(50) NOT NULL,
  `current_date_time` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer_info`
--

CREATE TABLE IF NOT EXISTS `tbl_customer_info` (
  `customer_info_id` int(8) NOT NULL auto_increment,
  `customer_id` int(8) NOT NULL,
  `customer_info_date_of_last_logon` datetime NOT NULL,
  `customer_info_number_of_logon` int(4) NOT NULL,
  `customer_info_date_account_created` datetime NOT NULL,
  `customer_info_date_last_modefied` datetime NOT NULL,
  PRIMARY KEY  (`customer_info_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE IF NOT EXISTS `tbl_product` (
  `product_id` int(5) NOT NULL auto_increment,
  `category_id` int(4) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_description` varchar(256) NOT NULL,
  `product_image` varchar(256) NOT NULL,
  `product_price` double NOT NULL,
  `product_quantity` int(5) NOT NULL,
  `current_date_time` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
