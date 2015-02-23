-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 23, 2015 at 07:04 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `oms`
--
CREATE DATABASE IF NOT EXISTS `oms` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `oms`;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`) VALUES
(1, 'استیل'),
(2, 'سرامیک');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name_id` int(11) NOT NULL,
  `product_code` varchar(250) NOT NULL,
  `product_size` varchar(250) NOT NULL,
  `product_description` varchar(250) NOT NULL,
  `product_count` varchar(250) NOT NULL,
  `product_handle` varchar(250) NOT NULL,
  `product_colors` varchar(250) NOT NULL,
  `product_image` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name_id`, `product_code`, `product_size`, `product_description`, `product_count`, `product_handle`, `product_colors`, `product_image`) VALUES
(1, 1, '1008', '10-15-18', '8 لیوان', '', 'قرمز', '', '577.jpg'),
(2, 2, '1008', '10-15-18', '8 لیوان', '', 'قرمز', '#dc0b0b-#8b008b-#ffb6c1-', '2014-09-16 22.24.55.jpg'),
(3, 2, '1008', '10-15-18', '8 لیوان', '', 'قرمز', '#dc0b0b-#8b008b-#ffb6c1-', '1424260973'),
(4, 2, '1008', '10-15-18', '8 لیوان', '', 'قرمز', '#dc0b0b-#8b008b-#ffb6c1-', '1424261001.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `products_name`
--

CREATE TABLE IF NOT EXISTS `products_name` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(250) NOT NULL,
  `cat_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `products_name`
--

INSERT INTO `products_name` (`id`, `product_name`, `cat_id`) VALUES
(1, 'سرویس قابلمه(درب نیم پیرکس)', 1),
(2, 'سرویس قابلمه سرامیک(درب پیرکس)', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
