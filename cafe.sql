-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: ינואר 09, 2019 בזמן 10:45 PM
-- גרסת שרת: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coffee`
--

-- --------------------------------------------------------

--
-- מבנה טבלה עבור טבלה `category`
--

CREATE TABLE `category` (
  `category_name` varchar(50) NOT NULL,
  `category_id` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- הוצאת מידע עבור טבלה `category`
--

INSERT INTO `category` (`category_name`, `category_id`) VALUES
('coffee', 1),
('\r\ndisposable', 2),
('pastries', 3);

-- --------------------------------------------------------

--
-- מבנה טבלה עבור טבלה `products`
--

CREATE TABLE `products` (
  `product_id` int(250) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_category` int(50) NOT NULL,
  `product_price` decimal(5,2) NOT NULL,
  `product_amount` int(250) NOT NULL,
  `product_picture` varchar(100) NOT NULL,
  `product_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- הוצאת מידע עבור טבלה `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_category`, `product_price`, `product_amount`, `product_picture`, `product_date`) VALUES
(2, 'napkins', 2, '1.00', 100, 'images/napkins.jpg', '1111-11-21'),
(3, 'espresso beans', 1, '300.00', 1000, 'images/10442926_xl-2.jpg', '2018-08-10'),
(17, 'cheesecake', 3, '50.00', 20, 'images/73773.jpg', '2018-10-22'),
(22, 'espresso spoons', 2, '20.00', 200, 'images/1618.jpg', '2017-09-20'),
(23, 'grated instant coffee \"GOLD\"', 1, '20.00', 100, 'images/4046234767650.jpg', '2016-10-29'),
(24, 'grated instant coffee \"JACOBS\"', 1, '10.00', 90, 'images/Q936379.jpg', '2018-01-29'),
(28, 'coffee cups', 2, '5.00', 500, 'images/images (1).jpg', '2018-10-28');

--
-- Indexes for dumped tables
--

--
-- אינדקסים לטבלה `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- אינדקסים לטבלה `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
