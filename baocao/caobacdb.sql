-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 28, 2022 at 04:54 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `caobacdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `parent_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'GIỚI THIỆU', 0, NULL, NULL, NULL),
(3, 'SẢN PHẨM', 0, NULL, NULL, NULL),
(4, 'CẨM NANG SỬ DỤNG', 0, NULL, NULL, NULL),
(5, 'LIÊN HỆ', 0, NULL, NULL, NULL),
(6, 'Nhẫn', 3, NULL, NULL, NULL),
(7, 'Nhẫn đôi', 3, NULL, NULL, NULL),
(8, 'Khuyên', 3, NULL, NULL, NULL),
(9, 'Dây chuyền', 3, NULL, NULL, NULL),
(10, 'Lắc tay', 3, NULL, NULL, NULL),
(11, 'Blog trang sức', 4, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category_product`
--

CREATE TABLE `category_product` (
  `id_category` int(11) NOT NULL,
  `id_product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL COMMENT 'tên sp',
  `category_id` int(11) DEFAULT NULL,
  `description` longtext COMMENT 'mô tả sp',
  `price` int(11) DEFAULT NULL,
  `branch` varchar(255) DEFAULT NULL COMMENT 'thương hiệu',
  `img` varchar(255) DEFAULT NULL COMMENT 'ảnh sp',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `date_of_birth` varchar(50) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `password`, `user_name`, `email`, `date_of_birth`, `avatar`, `first_name`, `middle_name`, `last_name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '123456', 'new_ngthuy', 'newtest@gmail.com', '2000-01-01 00:00:00', '', 'nguyen', 'thi', 'thuy', '2021-12-20 23:18:28', '2021-12-20 23:20:28', '2021-12-20 23:40:28'),
(47, 'e10adc3949ba59abbe56e057f20f883e', 'thchii', 'thchi@gmial.com', '2022-02-09', 'public/avatar/thchii-1644647996.jpg', 'lê', 'thùy', 'chi', '2022-01-19 00:51:29', '2022-02-22 12:06:49', '2022-02-22 12:06:49'),
(49, 'e10adc3949ba59abbe56e057f20f883e', 'ngthuy', 'ngthuy@gmail.com', '2021-12-27', 'public/avatar/ngthuy-1648191738.jpg', 'Thúy', 'Thị', 'Nguyễn', '2022-01-19 08:32:03', '2022-03-25 00:02:18', NULL),
(53, 'e10adc3949ba59abbe56e057f20f883e', 'huyenvk', 'huyenvk@gmail.com', '2000-12-27', 'public/avatar/huyenvk-1647258606.jpg', 'huyen', 'khanh', 'vu', '2022-01-19 22:07:06', '2022-03-14 04:50:06', NULL),
(58, 'e10adc3949ba59abbe56e057f20f883e', 'qqqhuy', 'qhuy@gmail.com', '2000-12-27', 'public/avatar/qqqhuy-1644381543.jpg', 'pham', 'quang', 'huy', '2022-01-24 09:48:52', '2022-02-08 21:39:03', NULL),
(59, 'e10adc3949ba59abbe56e057f20f883e', 'hhdang', 'hdang@gmail.com', '2021-11-30', 'public/avatar/hhdang-1645363663.jpg', 'đăng', 'hải', 'nguyễn', '2022-01-25 05:50:26', '2022-02-20 06:27:43', NULL),
(60, '698d51a19d8a121ce581499d7b701668', 'ffdfdf', 'thyy@hd', '2022-04-06', '', 'thu', 'th', 'ng', '2022-04-01 19:39:29', '2022-04-01 19:39:38', '2022-04-01 19:39:38'),
(61, '698d51a19d8a121ce581499d7b701668', 'dfggsd', 'gdshf@gsfd', '2022-04-06', '', 'ffd', '', 'dssdf', '2022-04-01 19:41:15', '2022-04-01 19:41:23', '2022-04-01 19:41:23'),
(62, 'e10adc3949ba59abbe56e057f20f883e', 'y12345', 'yyy@11', '2000-03-27', NULL, 'ý', 'như', 'nguyễn', '2022-04-12 09:22:29', '2022-04-12 09:22:29', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `category_product`
--
ALTER TABLE `category_product`
  ADD KEY `id_category` (`id_category`),
  ADD KEY `id_product` (`id_product`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`) USING BTREE,
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `duy_nhat` (`id`,`user_name`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `category_product`
--
ALTER TABLE `category_product`
  ADD CONSTRAINT `category_product_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `category_product_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
