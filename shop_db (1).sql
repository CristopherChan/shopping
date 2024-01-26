-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2024 at 02:08 PM
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
(37, 26, 'Cristopher Sosa Chan', '12121', 'images/wallpaperflare.com_wallpaper (15).jpg', 1),
(38, 25, '1212', '3333', 'images/Screenshot (47).png', 1212),
(41, 25, 'Cristopher Sosa Chan', '1212', 'images/3boxes.png', 1),
(42, 25, 'cristopher pogi s chan', '121', 'images/wallpaperflare.com_wallpaper (17).jpg', 1),
(52, 25, 'glass', '250', 'images/e57868374b2a2dfd4c182ae38871ce3f.jpg', 1),
(54, 27, '<br />\r\n<b>Warning</b>:  Undefined variable $fetch_product in <b>C:xampphtdocsshoppingcheckout.php</', '<br />\r\n<b>Warning</b>:  Undefined variable $fetch_product in <b>C:xampphtdocsshoppingcheckout.php</', '<br />\r\n<b>Warning</b>:  Undefined variable $fetch_product in <b>C:xampphtdocsshoppingcheckout.php</b> on line <b>50</b><br />\r\n<br />\r\n<b>Warning</b>:  Trying to access array offset on value of type null in <b>C:xampphtdocsshoppingcheckout.php</b> on lin', 1212),
(55, 27, '<br />\r\n<b>Warning</b>:  Undefined variable $fetch_product in <b>C:xampphtdocsshoppingcheckout.php</', '<br />\r\n<b>Warning</b>:  Undefined variable $fetch_product in <b>C:xampphtdocsshoppingcheckout.php</', '<br />\r\n<b>Warning</b>:  Undefined variable $fetch_product in <b>C:xampphtdocsshoppingcheckout.php</b> on line <b>50</b><br />\r\n<br />\r\n<b>Warning</b>:  Trying to access array offset on value of type null in <b>C:xampphtdocsshoppingcheckout.php</b> on lin', 1),
(56, 27, '<br />\r\n<b>Warning</b>:  Undefined variable $fetch_product in <b>C:xampphtdocsshoppingcheckout.php</', '<br />\r\n<b>Warning</b>:  Undefined variable $fetch_product in <b>C:xampphtdocsshoppingcheckout.php</', '<br />\r\n<b>Warning</b>:  Undefined variable $fetch_product in <b>C:xampphtdocsshoppingcheckout.php</b> on line <b>50</b><br />\r\n<br />\r\n<b>Warning</b>:  Trying to access array offset on value of type null in <b>C:xampphtdocsshoppingcheckout.php</b> on lin', 1),
(57, 27, '<br />\r\n<b>Warning</b>:  Undefined variable $fetch_product in <b>C:xampphtdocsshoppingcheckout.php</', '<br />\r\n<b>Warning</b>:  Undefined variable $fetch_product in <b>C:xampphtdocsshoppingcheckout.php</', '<br />\r\n<b>Warning</b>:  Undefined variable $fetch_product in <b>C:xampphtdocsshoppingcheckout.php</b> on line <b>50</b><br />\r\n<br />\r\n<b>Warning</b>:  Trying to access array offset on value of type null in <b>C:xampphtdocsshoppingcheckout.php</b> on lin', 1),
(58, 27, '<br />\r\n<b>Warning</b>:  Undefined variable $fetch_product in <b>C:xampphtdocsshoppingcheckout.php</', '<br />\r\n<b>Warning</b>:  Undefined variable $fetch_product in <b>C:xampphtdocsshoppingcheckout.php</', '<br />\r\n<b>Warning</b>:  Undefined variable $fetch_product in <b>C:xampphtdocsshoppingcheckout.php</b> on line <b>50</b><br />\r\n<br />\r\n<b>Warning</b>:  Trying to access array offset on value of type null in <b>C:xampphtdocsshoppingcheckout.php</b> on lin', 1),
(59, 27, '<br />\r\n<b>Warning</b>:  Undefined variable $fetch_product in <b>C:xampphtdocsshoppingcheckout.php</', '<br />\r\n<b>Warning</b>:  Undefined variable $fetch_product in <b>C:xampphtdocsshoppingcheckout.php</', '<br />\r\n<b>Warning</b>:  Undefined variable $fetch_product in <b>C:xampphtdocsshoppingcheckout.php</b> on line <b>50</b><br />\r\n<br />\r\n<b>Warning</b>:  Trying to access array offset on value of type null in <b>C:xampphtdocsshoppingcheckout.php</b> on lin', 1),
(60, 27, '<br />\r\n<b>Warning</b>:  Undefined variable $fetch_product in <b>C:xampphtdocsshoppingcheckout.php</', '<br />\r\n<b>Warning</b>:  Undefined variable $fetch_product in <b>C:xampphtdocsshoppingcheckout.php</', '<br />\r\n<b>Warning</b>:  Undefined variable $fetch_product in <b>C:xampphtdocsshoppingcheckout.php</b> on line <b>50</b><br />\r\n<br />\r\n<b>Warning</b>:  Trying to access array offset on value of type null in <b>C:xampphtdocsshoppingcheckout.php</b> on lin', 1),
(61, 27, '<br />\r\n<b>Warning</b>:  Undefined variable $fetch_product in <b>C:xampphtdocsshoppingcheckout.php</', '<br />\r\n<b>Warning</b>:  Undefined variable $fetch_product in <b>C:xampphtdocsshoppingcheckout.php</', '<br />\r\n<b>Warning</b>:  Undefined variable $fetch_product in <b>C:xampphtdocsshoppingcheckout.php</b> on line <b>50</b><br />\r\n<br />\r\n<b>Warning</b>:  Trying to access array offset on value of type null in <b>C:xampphtdocsshoppingcheckout.php</b> on lin', 1),
(62, 27, '<br />\r\n<b>Warning</b>:  Undefined variable $fetch_product in <b>C:xampphtdocsshoppingcheckout.php</', '<br />\r\n<b>Warning</b>:  Undefined variable $fetch_product in <b>C:xampphtdocsshoppingcheckout.php</', '<br />\r\n<b>Warning</b>:  Undefined variable $fetch_product in <b>C:xampphtdocsshoppingcheckout.php</b> on line <b>50</b><br />\r\n<br />\r\n<b>Warning</b>:  Trying to access array offset on value of type null in <b>C:xampphtdocsshoppingcheckout.php</b> on lin', 1),
(63, 27, '<br />\r\n<b>Warning</b>:  Undefined variable $fetch_product in <b>C:xampphtdocsshoppingcheckout.php</', '<br />\r\n<b>Warning</b>:  Undefined variable $fetch_product in <b>C:xampphtdocsshoppingcheckout.php</', '<br />\r\n<b>Warning</b>:  Undefined variable $fetch_product in <b>C:xampphtdocsshoppingcheckout.php</b> on line <b>50</b><br />\r\n<br />\r\n<b>Warning</b>:  Trying to access array offset on value of type null in <b>C:xampphtdocsshoppingcheckout.php</b> on lin', 1),
(64, 27, '<br />\r\n<b>Warning</b>:  Undefined variable $fetch_product in <b>C:xampphtdocsshoppingcheckout.php</', '<br />\r\n<b>Warning</b>:  Undefined variable $fetch_product in <b>C:xampphtdocsshoppingcheckout.php</', '<br />\r\n<b>Warning</b>:  Undefined variable $fetch_product in <b>C:xampphtdocsshoppingcheckout.php</b> on line <b>50</b><br />\r\n<br />\r\n<b>Warning</b>:  Trying to access array offset on value of type null in <b>C:xampphtdocsshoppingcheckout.php</b> on lin', 1),
(65, 27, '<br />\r\n<b>Warning</b>:  Undefined variable $fetch_product in <b>C:xampphtdocsshoppingcheckout.php</', '<br />\r\n<b>Warning</b>:  Undefined variable $fetch_product in <b>C:xampphtdocsshoppingcheckout.php</', '<br />\r\n<b>Warning</b>:  Undefined variable $fetch_product in <b>C:xampphtdocsshoppingcheckout.php</b> on line <b>50</b><br />\r\n<br />\r\n<b>Warning</b>:  Trying to access array offset on value of type null in <b>C:xampphtdocsshoppingcheckout.php</b> on lin', 1),
(66, 27, '<br />\r\n<b>Warning</b>:  Undefined variable $fetch_product in <b>C:xampphtdocsshoppingcheckout.php</', '<br />\r\n<b>Warning</b>:  Undefined variable $fetch_product in <b>C:xampphtdocsshoppingcheckout.php</', '<br />\r\n<b>Warning</b>:  Undefined variable $fetch_product in <b>C:xampphtdocsshoppingcheckout.php</b> on line <b>50</b><br />\r\n<br />\r\n<b>Warning</b>:  Trying to access array offset on value of type null in <b>C:xampphtdocsshoppingcheckout.php</b> on lin', 1),
(67, 27, '<br />\r\n<b>Warning</b>:  Undefined variable $fetch_product in <b>C:xampphtdocsshoppingcheckout.php</', '<br />\r\n<b>Warning</b>:  Undefined variable $fetch_product in <b>C:xampphtdocsshoppingcheckout.php</', '<br />\r\n<b>Warning</b>:  Undefined variable $fetch_product in <b>C:xampphtdocsshoppingcheckout.php</b> on line <b>50</b><br />\r\n<br />\r\n<b>Warning</b>:  Trying to access array offset on value of type null in <b>C:xampphtdocsshoppingcheckout.php</b> on lin', 1),
(68, 27, '<br />\r\n<b>Warning</b>:  Undefined variable $fetch_product in <b>C:xampphtdocsshoppingcheckout.php</', '<br />\r\n<b>Warning</b>:  Undefined variable $fetch_product in <b>C:xampphtdocsshoppingcheckout.php</', '<br />\r\n<b>Warning</b>:  Undefined variable $fetch_product in <b>C:xampphtdocsshoppingcheckout.php</b> on line <b>50</b><br />\r\n<br />\r\n<b>Warning</b>:  Trying to access array offset on value of type null in <b>C:xampphtdocsshoppingcheckout.php</b> on lin', 1),
(69, 27, '<br />\r\n<b>Warning</b>:  Undefined variable $fetch_product in <b>C:xampphtdocsshoppingcheckout.php</', '<br />\r\n<b>Warning</b>:  Undefined variable $fetch_product in <b>C:xampphtdocsshoppingcheckout.php</', '<br />\r\n<b>Warning</b>:  Undefined variable $fetch_product in <b>C:xampphtdocsshoppingcheckout.php</b> on line <b>50</b><br />\r\n<br />\r\n<b>Warning</b>:  Trying to access array offset on value of type null in <b>C:xampphtdocsshoppingcheckout.php</b> on lin', 1),
(70, 27, '<br />\r\n<b>Warning</b>:  Undefined variable $fetch_product in <b>C:xampphtdocsshoppingcheckout.php</', '<br />\r\n<b>Warning</b>:  Undefined variable $fetch_product in <b>C:xampphtdocsshoppingcheckout.php</', '<br />\r\n<b>Warning</b>:  Undefined variable $fetch_product in <b>C:xampphtdocsshoppingcheckout.php</b> on line <b>50</b><br />\r\n<br />\r\n<b>Warning</b>:  Trying to access array offset on value of type null in <b>C:xampphtdocsshoppingcheckout.php</b> on lin', 1),
(71, 27, '<br />\r\n<b>Warning</b>:  Undefined variable $fetch_product in <b>C:xampphtdocsshoppingcheckout.php</', '<br />\r\n<b>Warning</b>:  Undefined variable $fetch_product in <b>C:xampphtdocsshoppingcheckout.php</', '<br />\r\n<b>Warning</b>:  Undefined variable $fetch_product in <b>C:xampphtdocsshoppingcheckout.php</b> on line <b>50</b><br />\r\n<br />\r\n<b>Warning</b>:  Trying to access array offset on value of type null in <b>C:xampphtdocsshoppingcheckout.php</b> on lin', 1),
(72, 27, '<br />\r\n<b>Warning</b>:  Undefined variable $fetch_product in <b>C:xampphtdocsshoppingcheckout.php</', '<br />\r\n<b>Warning</b>:  Undefined variable $fetch_product in <b>C:xampphtdocsshoppingcheckout.php</', '<br />\r\n<b>Warning</b>:  Undefined variable $fetch_product in <b>C:xampphtdocsshoppingcheckout.php</b> on line <b>50</b><br />\r\n<br />\r\n<b>Warning</b>:  Trying to access array offset on value of type null in <b>C:xampphtdocsshoppingcheckout.php</b> on lin', 1),
(73, 27, '<br />\r\n<b>Warning</b>:  Undefined variable $fetch_product in <b>C:xampphtdocsshoppingcheckout.php</', '<br />\r\n<b>Warning</b>:  Undefined variable $fetch_product in <b>C:xampphtdocsshoppingcheckout.php</', '<br />\r\n<b>Warning</b>:  Undefined variable $fetch_product in <b>C:xampphtdocsshoppingcheckout.php</b> on line <b>50</b><br />\r\n<br />\r\n<b>Warning</b>:  Trying to access array offset on value of type null in <b>C:xampphtdocsshoppingcheckout.php</b> on lin', 1),
(74, 27, '<br />\r\n<b>Warning</b>:  Undefined variable $fetch_product in <b>C:xampphtdocsshoppingcheckout.php</', '<br />\r\n<b>Warning</b>:  Undefined variable $fetch_product in <b>C:xampphtdocsshoppingcheckout.php</', '<br />\r\n<b>Warning</b>:  Undefined variable $fetch_product in <b>C:xampphtdocsshoppingcheckout.php</b> on line <b>50</b><br />\r\n<br />\r\n<b>Warning</b>:  Trying to access array offset on value of type null in <b>C:xampphtdocsshoppingcheckout.php</b> on lin', 1),
(75, 27, '<br />\r\n<b>Warning</b>:  Undefined variable $fetch_product in <b>C:xampphtdocsshoppingcheckout.php</', '<br />\r\n<b>Warning</b>:  Undefined variable $fetch_product in <b>C:xampphtdocsshoppingcheckout.php</', '<br />\r\n<b>Warning</b>:  Undefined variable $fetch_product in <b>C:xampphtdocsshoppingcheckout.php</b> on line <b>50</b><br />\r\n<br />\r\n<b>Warning</b>:  Trying to access array offset on value of type null in <b>C:xampphtdocsshoppingcheckout.php</b> on lin', 1),
(76, 27, '<br />\r\n<b>Warning</b>:  Undefined variable $fetch_product in <b>C:xampphtdocsshoppingcheckout.php</', '<br />\r\n<b>Warning</b>:  Undefined variable $fetch_product in <b>C:xampphtdocsshoppingcheckout.php</', '<br />\r\n<b>Warning</b>:  Undefined variable $fetch_product in <b>C:xampphtdocsshoppingcheckout.php</b> on line <b>50</b><br />\r\n<br />\r\n<b>Warning</b>:  Trying to access array offset on value of type null in <b>C:xampphtdocsshoppingcheckout.php</b> on lin', 1),
(77, 27, '<br />\r\n<b>Warning</b>:  Undefined variable $fetch_product in <b>C:xampphtdocsshoppingcheckout.php</', '<br />\r\n<b>Warning</b>:  Undefined variable $fetch_product in <b>C:xampphtdocsshoppingcheckout.php</', '<br />\r\n<b>Warning</b>:  Undefined variable $fetch_product in <b>C:xampphtdocsshoppingcheckout.php</b> on line <b>50</b><br />\r\n<br />\r\n<b>Warning</b>:  Trying to access array offset on value of type null in <b>C:xampphtdocsshoppingcheckout.php</b> on lin', 1),
(78, 27, 'bamboo', '250', 'images/ph-11134207-7qul7-lizba2ceuqu475.jpg', 1),
(79, 27, 'glass', '250', 'images/e57868374b2a2dfd4c182ae38871ce3f.jpg', 1),
(80, 28, 'glass', '250', 'images/e57868374b2a2dfd4c182ae38871ce3f.jpg', 1),
(81, 28, 'bamboo', '250', 'images/ph-11134207-7qul7-lizba2ceuqu475.jpg', 1),
(82, 27, 'Cristopher Sosa Chan', '676', 'images/wallpaperflare.com_wallpaper (21).jpg', 1),
(87, 29, 'cristopher.chan@tup.edu.ph', 'asdasdasdasd', '1212', 212),
(88, 29, 'Cristopher Sosa Chan', '676', 'images/wallpaperflare.com_wallpaper (21).jpg', 1),
(90, 23, '', '', '', 1),
(91, 23, 'Cristopher Sosa Chan', '676', 'images/wallpaperflare.com_wallpaper (21).jpg', 1),
(92, 23, 'bamboo', '250', 'images/ph-11134207-7qul7-lizba2ceuqu475.jpg', 1),
(96, 30, 'bamboo', '250', 'images/ph-11134207-7qul7-lizba2ceuqu475.jpg', 1),
(97, 30, 'Cristopher Sosa Chan', '676', 'images/wallpaperflare.com_wallpaper (21).jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `id` int(220) NOT NULL,
  `fname` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `adds` varchar(220) NOT NULL,
  `code` varchar(220) NOT NULL,
  `number` int(220) NOT NULL,
  `payments` varchar(220) NOT NULL,
  `product_image` text NOT NULL,
  `quantity` int(220) NOT NULL,
  `name` varchar(222) NOT NULL
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
(20, 'Cristopher Sosa Chan', '676', 'images/wallpaperflare.com_wallpaper (21).jpg');

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
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id` int(220) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
