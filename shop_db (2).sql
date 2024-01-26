-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2024 at 05:49 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `name`, `price`, `image`, `quantity`) VALUES
(98, 0, '2323', '2323', 'a1c20e60f1fea66ea40521175382fd94.jpg', 1),
(103, 30, 'Cristopher Sosa Chan', '676', 'images/wallpaperflare.com_wallpaper (21).jpg', 1),
(104, 30, 'glass', '250', 'images/e57868374b2a2dfd4c182ae38871ce3f.jpg', 1),
(105, 30, 'bamboo', '250', 'images/ph-11134207-7qul7-lizba2ceuqu475.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `id` int(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `adds` varchar(220) NOT NULL,
  `code` varchar(220) NOT NULL,
  `number` int(220) NOT NULL,
  `payments` varchar(220) NOT NULL,
  `name` varchar(222) NOT NULL,
  `total_products` varchar(220) NOT NULL,
  `total_price` int(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`id`, `email`, `adds`, `code`, `number`, `payments`, `name`, `total_products`, `total_price`) VALUES
(68, 'cristopher.chan@tup.edu.ph', '2121', '32423', 432423, 'Ewallet', 'Cristopher Sosa Chan', '2323 (1) , Cristopher Sosa Chan (1) ', 676),
(69, 'cristopher.chan@tup.edu.ph', 'asa', '121', 1212, 'banks', 'Cristopher Sosa Chan', '2323 (1) , Cristopher Sosa Chan (1) ', 676),
(70, 'cristopher.chan@tup.edu.ph', '2323', '323', 2323, 'Ewallet', 'Cristopher Sosa Chan', '2323 (1) , Cristopher Sosa Chan (1) ', 676),
(71, 'cristopher.chan@tup.edu.ph', '2323', '323', 2323, 'Ewallet', 'Cristopher Sosa Chan', '2323 (1) , Cristopher Sosa Chan (1) ', 676),
(72, 'cristopher.chan@tup.edu.ph', '2323', '323', 2323, 'Ewallet', 'Cristopher Sosa Chan', '2323 (1) , Cristopher Sosa Chan (1) ', 676);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(220) NOT NULL,
  `name` varchar(220) NOT NULL,
  `number` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `pin_code` varchar(220) NOT NULL,
  `total_products` varchar(220) NOT NULL,
  `total_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`) VALUES
(18, 'glass', '250', 'images/e57868374b2a2dfd4c182ae38871ce3f.jpg'),
(19, 'bamboo', '250', 'images/ph-11134207-7qul7-lizba2ceuqu475.jpg'),
(20, 'Cristopher Sosa Chan', '676', 'images/wallpaperflare.com_wallpaper (21).jpg'),
(21, '2323', '2323', 'a1c20e60f1fea66ea40521175382fd94.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(220) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `img` text NOT NULL,
  `user_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `fname`, `lname`, `email`, `password`, `img`, `user_type`) VALUES
(30, 'Cristopher', 'Chan', 'chan@gmail.com', 'b220ee2eb110e04999d6aaa434a9d965cd98a2e3', '91924714.jpg', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id` int(220) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(220) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
