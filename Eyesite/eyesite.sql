-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 30, 2018 at 05:55 AM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `eyesite`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `customer`
--


-- --------------------------------------------------------

--
-- Table structure for table `glasses`
--

CREATE TABLE IF NOT EXISTS `glasses` (
  `img` varchar(200) DEFAULT NULL,
  `frame` varchar(32) NOT NULL,
  `price` int(10) NOT NULL,
  `size` varchar(32) NOT NULL,
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `gender` varchar(1) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `glasses`
--

INSERT INTO `glasses` (`img`, `frame`, `price`, `size`, `product_id`, `gender`) VALUES
('\r\nhttps://i.warbycdn.com/s/c/bf906d55936e612f9910c38a009a5134574c59e0?quality=75&width=360', 'Maeve', 145, 'Medium', 1, 'F'),
('\r\nhttps://i.warbycdn.com/s/c/e8281391b83f68e92ba7d55549b7c23d3f2fa7cc?quality=75&width=360', 'Hugo', 145, 'Wide', 2, 'F'),
('\r\nhttps://i.warbycdn.com/s/c/a96bd0e453d95ddd95e55dcc3b84d31522c456c9?quality=75&width=360', 'Louise', 95, 'Wide', 3, 'F'),
('\r\nhttps://i.warbycdn.com/s/c/3bd3e59f487ca08ea2bed69b87385092db70072c?quality=75&width=360', 'Haley', 95, 'Wide', 4, 'F'),
('\r\nhttps://i.warbycdn.com/s/c/d950c37f47b726394e0baecf32399d8fe19ccc09?quality=75&width=360', 'Hudson', 95, 'Wide', 5, 'F'),
('\r\n\r\nhttps://i.warbycdn.com/-/c/women-laurel-eyeglasses-tea-rose-fade-front-1399-37a9ca59?quality=75&width=360', 'Laurel', 95, 'Medium', 6, 'F'),
('\r\nhttps://i.warbycdn.com/d/c/f2b3ff15b5335481cd6a5c20f50b612452c19179?quality=75&width=360', 'Watts', 95, 'Medium', 7, 'F'),
('\r\nhttps://i.warbycdn.com/s/c/e3882009041516376e2db6d8fcafdd9599d2d0bd?quality=75&width=360', 'Bell', 95, 'Medium', 8, 'F'),
('\r\nhttps://i.warbycdn.com/s/c/9dc4d599470e79b20f356183a7f619a3f2b06ce5?quality=75&width=360', 'Hugo', 145, 'Wide', 9, 'M'),
('\r\nhttps://i.warbycdn.com/s/c/9dc4d599470e79b20f356183a7f619a3f2b06ce5?quality=75&width=360', 'Hugo', 145, 'Wide', 10, 'M'),
('\r\nhttps://i.warbycdn.com/s/c/c205441d04408e767979b2f4354704ea31c61bba?quality=75&width=360', 'Alcott', 145, 'Medium', 11, 'M'),
('\r\nhttps://i.warbycdn.com/-/c/men-crane-eyeglasses-jet-black-front-1073-eb6b9feb?quality=75&width=360', 'Crane', 95, 'Narrow', 12, 'M'),
('\r\nhttps://i.warbycdn.com/-/c/men-crane-eyeglasses-jet-black-front-1073-eb6b9feb?quality=75&width=360', 'Crane', 95, 'Narrow', 13, 'M'),
('\r\nhttps://i.warbycdn.com/s/c/d61767550c75af33d73aea6f293e993f0fba8c77?quality=75&width=360', 'Wilkie', 95, 'Narrow', 14, 'M'),
('\r\nhttps://i.warbycdn.com/s/c/6e26a9fecfe1ce60cf7a679cd5ff7e5566081792?quality=75&width=360', 'Hardy', 145, 'Medium', 15, 'M'),
('\r\nhttps://i.warbycdn.com/-/c/men-bensen-eyeglasses-whiskey-tortoise-front-918-3c24673f?quality=75&width=360\r\n', 'Bensen', 95, 'Medium', 16, 'M'),
('\r\n\r\nhttps://i.warbycdn.com/-/c/men-burke-eyeglasses-tennessee-whiskey-front-583-d2ee127d?quality=75&width=360', 'Burke', 95, 'Medium', 17, 'M');

-- --------------------------------------------------------

--
-- Table structure for table `ordertable`
--

CREATE TABLE IF NOT EXISTS `ordertable` (
  `order_id` int(10) NOT NULL AUTO_INCREMENT,
  `order_total` decimal(8,2) NOT NULL,
  `date_paid` date NOT NULL,
  `quantity` int(6) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `ordertable`
--

INSERT INTO `ordertable` (`order_id`, `order_total`, `date_paid`, `quantity`) VALUES
(1, '0.00', '0000-00-00', 0),
(2, '0.00', '0000-00-00', 0),
(3, '0.00', '0000-00-00', 0),
(4, '0.00', '0000-00-00', 0),
(5, '0.00', '0000-00-00', 0),
(6, '0.00', '0000-00-00', 0),
(7, '0.00', '0000-00-00', 0),
(8, '0.00', '0000-00-00', 0),
(9, '0.00', '0000-00-00', 0),
(10, '0.00', '0000-00-00', 0),
(11, '0.00', '0000-00-00', 0),
(12, '0.00', '0000-00-00', 0),
(13, '0.00', '0000-00-00', 0),
(14, '0.00', '0000-00-00', 0),
(15, '0.00', '0000-00-00', 0),
(16, '0.00', '0000-00-00', 0),
(17, '0.00', '0000-00-00', 0),
(18, '0.00', '0000-00-00', 0),
(19, '0.00', '0000-00-00', 0),
(20, '0.00', '0000-00-00', 0),
(21, '0.00', '0000-00-00', 0),
(22, '0.00', '0000-00-00', 0),
(23, '0.00', '0000-00-00', 0),
(24, '0.00', '0000-00-00', 0),
(25, '0.00', '0000-00-00', 0),
(26, '0.00', '0000-00-00', 0),
(27, '0.00', '0000-00-00', 0),
(28, '0.00', '0000-00-00', 0),
(29, '0.00', '0000-00-00', 0),
(30, '0.00', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `paymentid` int(11) NOT NULL AUTO_INCREMENT,
  `custname` varchar(128) NOT NULL,
  `cardnumber` int(16) NOT NULL,
  `payment_type` varchar(128) NOT NULL,
  `exp_month` varchar(128) NOT NULL,
  `exp_year` int(2) NOT NULL,
  PRIMARY KEY (`paymentid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `payment`
--


-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `username`, `role`) VALUES
(1, 'ckonesavanh', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

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
('Chris', 'Konesavanh', 'ckonesavanh', 'dfa1f555d38f5ccf38e1aeafcf2c07f8'),
('Jason', 'Silva', 'JSilva', 'J@sonSilv@95');
