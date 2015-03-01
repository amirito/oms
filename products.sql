-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 28, 2015 at 10:03 AM
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

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(250) NOT NULL,
  `product_code` varchar(250) NOT NULL,
  `product_size` varchar(250) NOT NULL,
  `product_description` varchar(250) NOT NULL,
  `product_count` varchar(250) NOT NULL,
  `product_handle` varchar(250) NOT NULL,
  `product_colors` varchar(250) NOT NULL,
  `product_image` varchar(250) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `sub_cat_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_code`, `product_size`, `product_description`, `product_count`, `product_handle`, `product_colors`, `product_image`, `cat_id`, `sub_cat_id`) VALUES
(10, 'مهرداد خان2', '1008', '15.7', 'پارسا نژاد', '3', '', '#fcfcc5-', '1425048113.jpg', 1, 1),
(11, 'wegweg', '1008', '10-15-18', 'sdsd', '12', '', '#dc0b0b-#3abde3-#9d7f44-#8b008b-#fcfcc5-#ffb6c1-', '1425048169.jpg', 1, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
