-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 22, 2018 at 05:32 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eyesite`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `customer_id` int(10) NOT NULL AUTO_INCREMENT,
  `customer_last_name` varchar(25) NOT NULL,
  `customer_first_name` varchar(25) NOT NULL,
  `customer_phone` varchar(10) NOT NULL,
  `customer_address` varchar(30) NOT NULL,
  `custumer_city` varchar(25) NOT NULL,
  `customer_state` varchar(2) NOT NULL,
  `customer_country` varchar(30) NOT NULL,
  `customer_email` varchar(40) NOT NULL,
  `customer_zip` varchar(9) NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `glasses`
--

DROP TABLE IF EXISTS `glasses`;
CREATE TABLE IF NOT EXISTS `glasses` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `frame` varchar(32) NOT NULL,
  `size` varchar(32) NOT NULL,
  `price` int(10) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `img` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `glasses`
--

INSERT INTO `glasses` (`product_id`, `frame`, `size`, `price`, `gender`, `img`) VALUES
(1, 'Maeve', 'Medium', 145, 'F', '\r\nhttps://i.warbycdn.com/s/c/bf906d55936e612f9910c38a009a5134574c59e0?quality=75&width=360'),
(2, 'Hugo', 'Wide', 145, 'F', '\r\nhttps://i.warbycdn.com/s/c/e8281391b83f68e92ba7d55549b7c23d3f2fa7cc?quality=75&width=360'),
(3, 'Louise', 'Wide', 95, 'F', '\r\nhttps://i.warbycdn.com/s/c/a96bd0e453d95ddd95e55dcc3b84d31522c456c9?quality=75&width=360'),
(4, 'Haley', 'Wide', 95, 'F', '\r\nhttps://i.warbycdn.com/s/c/3bd3e59f487ca08ea2bed69b87385092db70072c?quality=75&width=360'),
(5, 'Hudson', 'Wide', 95, 'F', '\r\nhttps://i.warbycdn.com/s/c/d950c37f47b726394e0baecf32399d8fe19ccc09?quality=75&width=360'),
(6, 'Laurel', 'Medium', 95, 'F', '\r\n\r\nhttps://i.warbycdn.com/-/c/women-laurel-eyeglasses-tea-rose-fade-front-1399-37a9ca59?quality=75&width=360'),
(7, 'Watts', 'Medium', 95, 'F', '\r\nhttps://i.warbycdn.com/d/c/f2b3ff15b5335481cd6a5c20f50b612452c19179?quality=75&width=360'),
(8, 'Bell', 'Medium', 95, 'F', '\r\nhttps://i.warbycdn.com/s/c/e3882009041516376e2db6d8fcafdd9599d2d0bd?quality=75&width=360'),
(9, 'Hugo', 'Wide', 145, 'M', '\r\nhttps://i.warbycdn.com/s/c/9dc4d599470e79b20f356183a7f619a3f2b06ce5?quality=75&width=360'),
(10, 'Hugo', 'Wide', 145, 'M', '\r\nhttps://i.warbycdn.com/s/c/9dc4d599470e79b20f356183a7f619a3f2b06ce5?quality=75&width=360'),
(11, 'Alcott', 'Medium', 145, 'M', '\r\nhttps://i.warbycdn.com/s/c/c205441d04408e767979b2f4354704ea31c61bba?quality=75&width=360'),
(12, 'Crane', 'Narrow', 95, 'M', '\r\nhttps://i.warbycdn.com/-/c/men-crane-eyeglasses-jet-black-front-1073-eb6b9feb?quality=75&width=360'),
(13, 'Crane', 'Narrow', 95, 'M', '\r\nhttps://i.warbycdn.com/-/c/men-crane-eyeglasses-jet-black-front-1073-eb6b9feb?quality=75&width=360'),
(14, 'Wilkie', 'Narrow', 95, 'M', '\r\nhttps://i.warbycdn.com/s/c/d61767550c75af33d73aea6f293e993f0fba8c77?quality=75&width=360'),
(15, 'Hardy', 'Medium', 145, 'M', '\r\nhttps://i.warbycdn.com/s/c/6e26a9fecfe1ce60cf7a679cd5ff7e5566081792?quality=75&width=360'),
(16, 'Bensen', 'Medium', 95, 'M', '\r\nhttps://i.warbycdn.com/-/c/men-bensen-eyeglasses-whiskey-tortoise-front-918-3c24673f?quality=75&width=360\r\n'),
(17, 'Burke', 'Medium', 95, 'M', '\r\n\r\nhttps://i.warbycdn.com/-/c/men-burke-eyeglasses-tennessee-whiskey-front-583-d2ee127d?quality=75&width=360');

-- --------------------------------------------------------

--
-- Table structure for table `ordertable`
--

DROP TABLE IF EXISTS `ordertable`;
CREATE TABLE IF NOT EXISTS `ordertable` (
  `order_id` int(10) NOT NULL AUTO_INCREMENT,
  `order_total` decimal(8,2) NOT NULL,
  `date_paid` date NOT NULL,
  `quantity` int(6) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `forename` varchar(32) NOT NULL,
  `surname` varchar(32) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`forename`, `surname`, `username`, `password`) VALUES
('Jason', 'Silva', 'JSilva', 'J@sonSilv@95');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
