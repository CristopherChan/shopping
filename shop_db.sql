-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2024 at 10:18 AM
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
(26, 1, 'Cristopher Sosa Chan', '12312', 'images/philhealth id.jpg', 1),
(27, 2, 'Cristopher Sosa Chan', '12312', 'images/philhealth id.jpg', 1),
(33, 3, 'cristopher pogi s chan', '121', 'images/wallpaperflare.com_wallpaper (17).jpg', 1),
(34, 3, 'Cristopher Sosa Chan', '12121', 'images/wallpaperflare.com_wallpaper (15).jpg', 1),
(35, 24, 'cristopher pogi s chan', '121', 'images/wallpaperflare.com_wallpaper (17).jpg', 1),
(36, 26, 'cristopher pogi s chan', '121', 'images/wallpaperflare.com_wallpaper (17).jpg', 11212),
(37, 26, 'Cristopher Sosa Chan', '12121', 'images/wallpaperflare.com_wallpaper (15).jpg', 1);

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
(9, 'cristopher pogi s chan', '121', 'images/wallpaperflare.com_wallpaper (17).jpg'),
(10, 'Cristopher Sosa Chan', '12121', 'images/wallpaperflare.com_wallpaper (15).jpg'),
(12, 'Cristopher Sosa Chan', '343', 'images/Screenshot 2023-10-22 131024.png'),
(13, 'Cristopher Sosa Chan', '1212', 'images/3boxes.png'),
(14, 'cristopher pogi s chan', '65645646', 'images/Screenshot 2023-04-20 113617.png'),
(15, '1212', '3333', 'images/Screenshot (47).png'),
(16, '3122', '2121', 'images/Screenshot 2023-05-25 161542.png');

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
(20, 'Cristopher', 'Chan', '1121@gmail.com', 'b220ee2eb110e04999d6aaa434a9d965cd98a2e3', '75238137.png', 'admin'),
(21, 'cristopher ', '', 'cristopher.chah@tup.edu.ph', '26c322652770620e64ac90682eb6504c', '', ''),
(22, 'cristopher ', '', 'cristopher@gmail.com', '26c322652770620e64ac90682eb6504c', '', ''),
(23, 'chan', 'chan', 'cristopher11@gmail.com', 'b220ee2eb110e04999d6aaa434a9d965cd98a2e3', '21830404.png', 'admin'),
(24, 'cristopher ', '', 'chan2121@gmail.com', 'b220ee2eb110e04999d6aaa434a9d965cd98a2e3', '', ''),
(25, 'Cristopher', 'Chan', '1@gmail.com', 'b220ee2eb110e04999d6aaa434a9d965cd98a2e3', '92732244.png', 'admin'),
(26, 'cristopher pogi', 'chan', 'cristopherchan2121@gmail.com', 'b220ee2eb110e04999d6aaa434a9d965cd98a2e3', '6663117.png', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
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
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
