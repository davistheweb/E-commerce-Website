-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2024 at 01:01 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mystore`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(11) NOT NULL,
  `brand_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_title`) VALUES
(1, 'nike'),
(2, 'hello'),
(3, 'Dav'),
(4, 'Brand');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_title`) VALUES
(1, 'Juice'),
(2, 'Fruit'),
(3, 'Vegetable'),
(4, 'Milk product'),
(5, 'Books'),
(6, 'Chips'),
(7, 'Dav'),
(8, 'host');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(200) NOT NULL,
  `product_description` varchar(200) NOT NULL,
  `product_keyword` varchar(200) NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_image1` varchar(200) NOT NULL,
  `product_image2` varchar(200) NOT NULL,
  `product_image3` varchar(255) NOT NULL,
  `product_price` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_title`, `product_description`, `product_keyword`, `category_id`, `brand_id`, `product_image1`, `product_image2`, `product_image3`, `product_price`, `date`, `status`) VALUES
(1, 'Shirt', 'Wear', 'Sale', 6, 4, 'best_selling_3.jpg', 'best_selling_2.jpg', 'best_selling_1.jpg', '$50', '2023-11-17 13:33:54', '1'),
(2, 'Wear', 'nelly', 'hey', 2, 2, 'best_selling_1.jpg', 'c_formal_gray_shirt.png', 'c_t-shirt_men.png', 'fed', '2023-11-17 13:35:00', '1'),
(3, 'HEY', 'Key', 'cloth', 2, 1, 'on_sale_3.jpg', 'on_sale_2.jpg', 'offer_img.jpg', '$30', '2023-11-17 13:40:16', '1'),
(4, 'lolo', 'gr', 'ee', 1, 1, 'about_us.jpg', 'special_product_1.jpg', 'top_rated_2.jpg', 'hey', '2023-11-17 13:57:29', '1'),
(5, 'EBUKA', 'EMMANUEL', 'EB', 1, 1, 'WhatsApp Image 2023-04-05 at 10.04.07.jpg', 'WhatsApp Image 2023-08-09 at 17.48.26.jpg', 'davis.png', '%5k', '2023-11-21 10:10:18', '1'),
(6, 'Hola', 'DEV', 'fest', 6, 3, 'top_rated_3.jpg', 'c_polo-shirt.png', 'c_pant_girl.png', '5', '2023-11-21 10:12:52', '1'),
(7, 'eRWKJBKESD', 'QEjy', 'sakjsas', 3, 3, 'on_sale_1.jpg', 'blog_3.jpg', 'blog_2.jpg', 'as,j', '2023-11-21 10:13:53', '1'),
(8, 'dsckj', 'sa;o', 'adjd', 4, 3, 'download.png', 'on_sale_2.jpg', 'top_rated_2.jpg', 'xzh', '2023-11-21 10:14:30', '1'),
(9, 'sjhj', 'adsajk', 's', 3, 3, 'pexels-jean-van-der-meulen-1457841.jpg', 'pexels-pixabay-259580.jpg', 'pexels-max-vakhtbovych-7535054.jpg', '33', '2023-11-21 10:16:41', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
