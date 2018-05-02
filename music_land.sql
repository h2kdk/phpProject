-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 05, 2018 at 07:44 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `music_land`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `productType` varchar(55) NOT NULL,
  `brand` varchar(55) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL,
  `added_day` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `productType`, `brand`, `productName`, `image`, `price`, `added_day`) VALUES
(8, 'guitar', 'Alesis', 'Arcadia', 'guitar04.jpg', 199.99, '2018-04-05 13:30:46'),
(5, 'guitar', 'Casio', 'Luna Fauna', 'guitar01.jpg', 399.99, '2018-04-05 11:16:26'),
(7, 'guitar', 'Yamaha', 'Hal Leonard', 'guitar03.jpg', 197.99, '2018-04-05 11:16:33'),
(12, 'drum', 'Bangor', 'Pearl Drum', 'drum01.jpg', 349.99, '2018-04-05 11:15:03'),
(14, 'drum', 'Bangor', 'Tycoon Percussion', 'drum03.jpg', 99.99, '2018-04-05 11:15:03'),
(13, 'drum', 'Yamaha', 'Yamaha DD-75', 'drum02.jpg', 239.99, '2018-04-05 11:15:03'),
(15, 'drum', 'Alesis', 'Strike Pro 11-piece', 'drum04.jpg', 2299.99, '2018-04-05 11:15:03'),
(17, 'guitar', 'Casio', 'Woodroo', 'guitar02.jpg', 35.99, '2018-04-05 11:16:51'),
(18, 'keyboard', 'Casio', 'CAS LK280 PPK', 'keyboard01.jpg', 219.99, '2018-04-05 11:15:03'),
(19, 'keyboard', 'Casio', 'CAS CTK2400', 'keyboard03.jpg', 99.95, '2018-04-05 11:15:03'),
(20, 'keyboard', 'Yamaha', 'YAM P115B', 'keyboard02.jpg', 599.99, '2018-04-05 11:15:03'),
(21, 'keyboard', 'Alesis', 'VI25', 'keyboard04.jpg', 179.99, '2018-04-05 11:15:03');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `userId` int(6) UNSIGNED NOT NULL,
  `password` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `role` varchar(6) CHARACTER SET utf8mb4 NOT NULL,
  `firstName` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `lastName` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `email` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `phone` varchar(8) NOT NULL,
  `address` varchar(50) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`userId`, `password`, `role`, `firstName`, `lastName`, `email`, `phone`, `address`) VALUES
(1, 'Passw0rd', 'normal', 'Hoang', 'Khoa', 'hoangkhoa_90@yahoo.com', '', ''),
(5, 'Passw0rd', 'admin', 'Admin', 'Hoang', 'admin@yahoo.com', '', 'Laerkevej 1B'),
(6, '654321', 'normal', 'Pete', 'Howl', 'pete@yahoo.com', '', 'pete@yahoo.com'),
(7, '123456', 'normal', 'Karl', 'Hansen', 'karl@gmail.com', '', 'karl@gmail.com'),
(8, '123456', 'normal', 'Jens', 'Nielsen', 'jen@yahoo.com', '12344321', 'Address 1B'),
(9, '654321', 'normal', 'Mike', 'Mike', 'mike@gmail.vom', '65432123', 'Address 1A'),
(10, '123456', 'normal', 'Niclas', 'Sloth', 'nick@gmail.com', '43214321', 'Address 101'),
(11, '123456', 'normal', 'Alex', 'Alexen', 'alex@gmail.com', '54322345', 'Byvej 15'),
(12, '654321', 'normal', 'Turbo', 'Ng', 'turbo@gmail.com', '12345687', 'Vognporten 14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `userId` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
