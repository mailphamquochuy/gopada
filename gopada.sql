-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2016 at 11:12 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.5.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gopada`
--

-- --------------------------------------------------------

--
-- Table structure for table `catalog`
--

CREATE TABLE `catalog` (
  `catalogid` int(50) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catalog`
--

INSERT INTO `catalog` (`catalogid`, `name`) VALUES
(1, 'Intro Company'),
(2, 'Business'),
(3, 'Shop cart'),
(4, 'New');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(50) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `level` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `new`
--

CREATE TABLE `new` (
  `id` int(50) UNSIGNED NOT NULL,
  `title` text NOT NULL,
  `intro` text,
  `content` text,
  `catalogid` int(100) UNSIGNED DEFAULT NULL,
  `img` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new`
--

INSERT INTO `new` (`id`, `title`, `intro`, `content`, `catalogid`, `img`) VALUES
(1, 'Hot new', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non malesuada libero. Maecenas vestibulum elit sit amet pellentesque aliquam. Integer cursus eleifend ante ac lacinia. Aenean tempus eget ante vel ornare. Proin nulla eros, pretium sed orci et, ultricies tempus nisi. Nam id urna quis tortor consectetur imperdiet sed vitae elit. Fusce molestie diam leo, quis aliquet quam vehicula congue. Maecenas et diam a purus condimentum suscipit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non malesuada libero. Maecenas vestibulum elit sit amet pellentesque aliquam. Integer cursus eleifend ante ac lacinia. Aenean tempus eget ante vel ornare. Proin nulla eros, pretium sed orci et, ultricies tempus nisi. Nam id urna quis tortor consectetur imperdiet sed vitae elit. Fusce molestie diam leo, quis aliquet quam vehicula congue. Maecenas et diam a purus condimentum suscipit', 4, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(50) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `info` text,
  `content` text,
  `catalogid` int(50) UNSIGNED DEFAULT NULL,
  `price` int(100) UNSIGNED NOT NULL,
  `img` text,
  `imgthumb1` text,
  `imgthumb2` text,
  `imgthumb3` text,
  `methodpay` varchar(100) NOT NULL,
  `pecentpay` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `info`, `content`, `catalogid`, `price`, `img`, `imgthumb1`, `imgthumb2`, `imgthumb3`, `methodpay`, `pecentpay`) VALUES
(3, 'Theme Shop cart', 'ÄÃ¢y lÃ  theme shopping cart', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non malesuada libero. Maecenas vestibulum elit sit amet pellentesque aliquam. Integer cursus eleifend ante ac lacinia. Aenean tempus eget ante vel ornare. Proin nulla eros, pretium sed orci et, ultricies tempus nisi. Nam id urna quis tortor consectetur imperdiet sed vitae elit. Fusce molestie diam leo, quis aliquet quam vehicula congue. Maecenas et diam a purus condimentum suscipit', 3, 2500000, 'http://localhost/gopada/upload/product/thoitrang.png', 'http://localhost/gopada/upload/product/thumb/detail1.png', 'http://localhost/gopada/upload/product/thumb/detail2.png', 'http://localhost/gopada/upload/product/thumb/detail3.png', '2 thang', 50),
(4, 'Theme business', 'Theme dÃ nh cho kinh doanh', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non malesuada libero. Maecenas vestibulum elit sit amet pellentesque aliquam. Integer cursus eleifend ante ac lacinia. Aenean tempus eget ante vel ornare. Proin nulla eros, pretium sed orci et, ultricies tempus nisi. Nam id urna quis tortor consectetur imperdiet sed vitae elit. Fusce molestie diam leo, quis aliquet quam vehicula congue. Maecenas et diam a purus condimentum suscipit', 2, 3500000, 'http://localhost/gopada/upload/product/mypham.png', 'http://localhost/gopada/upload/product/thumb/detail1.png', 'http://localhost/gopada/upload/product/thumb/detail2.png', 'http://localhost/gopada/upload/product/thumb/detail3.png', '3 thang', 30),
(5, 'Theme Foods', 'Theme nÃ y dÃ nh cho nhÃ  hÃ ng quÃ¡n Äƒn', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non malesuada libero. Maecenas vestibulum elit sit amet pellentesque aliquam. Integer cursus eleifend ante ac lacinia. Aenean tempus eget ante vel ornare. Proin nulla eros, pretium sed orci et, ultricies tempus nisi. Nam id urna quis tortor consectetur imperdiet sed vitae elit. Fusce molestie diam leo, quis aliquet quam vehicula congue. Maecenas et diam a purus condimentum suscipit', 3, 5000000, 'http://localhost/gopada/upload/product/doan.png', 'http://localhost/gopada/upload/product/thumb/detail1.png', 'http://localhost/gopada/upload/product/thumb/detail2.png', 'http://localhost/gopada/upload/product/thumb/detail3.png', '5 thng', 20),
(6, 'Theme Quáº§n Ão', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non malesuada libero. Maecenas vestibulum elit sit amet pellentesque aliquam. Integer cursus eleifend ante ac lacinia. Aenean tempus eget ante vel ornare. Proin nulla eros, pretium sed orci et, ultricies tempus nisi. Nam id urna quis tortor consectetur imperdiet sed vitae elit. Fusce molestie diam leo, quis aliquet quam vehicula congue. Maecenas et diam a purus condimentum suscipit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non malesuada libero. Maecenas vestibulum elit sit amet pellentesque aliquam. Integer cursus eleifend ante ac lacinia. Aenean tempus eget ante vel ornare. Proin nulla eros, pretium sed orci et, ultricies tempus nisi. Nam id urna quis tortor consectetur imperdiet sed vitae elit. Fusce molestie diam leo, quis aliquet quam vehicula congue. Maecenas et diam a purus condimentum suscipit', 2, 3000000, 'http://localhost/gopada/upload/product/shop.png', 'http://localhost/gopada/upload/product/thumb/detail1.png', 'http://localhost/gopada/upload/product/thumb/detail2.png', 'http://localhost/gopada/upload/product/thumb/detail3.png', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`catalogid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new`
--
ALTER TABLE `new`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `catalogid` (`catalogid`),
  ADD KEY `catalogid_2` (`catalogid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `catalogid` (`catalogid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catalog`
--
ALTER TABLE `catalog`
  MODIFY `catalogid` int(50) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(50) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `new`
--
ALTER TABLE `new`
  MODIFY `id` int(50) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(50) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `new`
--
ALTER TABLE `new`
  ADD CONSTRAINT `new_ibfk_1` FOREIGN KEY (`catalogid`) REFERENCES `catalog` (`catalogid`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`catalogid`) REFERENCES `catalog` (`catalogid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
