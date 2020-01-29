-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2020 at 04:56 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `viral_job`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `descr` text NOT NULL,
  `date` datetime NOT NULL,
  `img_src` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL COMMENT '0-no 1-yes',
  `isDelete` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `title`, `descr`, `date`, `img_src`, `status`, `isDelete`, `created_at`, `updated_at`) VALUES
(1, 'Tammy Dixon', '<p><span style=\"color:rgb(119, 119, 119); font-family:open sans,sans-serif; font-size:14px\">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam eu velit cursus, tempor ipsum in, tempus lectus. Nullam tempus nisi id nisl luctus, non tempor justo molestie.</span></p>\r\n\r\n<p><span style=\"color:rgb(119, 119, 119); font-family:open sans,sans-serif; font-size:14px\">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam eu velit cursus, tempor ipsum in, tempus lectus. Nullam tempus nisi id nisl luctus, non tempor justo molestie.</span></p>\r\n\r\n<p><span style=\"color:rgb(119, 119, 119); font-family:open sans,sans-serif; font-size:14px\">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam eu velit cursus, tempor ipsum in, tempus lectus. Nullam tempus nisi id nisl luctus, non tempor justo molestie.</span></p>\r\n\r\n<p><span style=\"color:rgb(119, 119, 119); font-family:open sans,sans-serif; font-size:14px\">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam eu velit cursus, tempor ipsum in, tempus lectus. Nullam tempus nisi id nisl luctus, non tempor justo molestie.</span></p>\r\n', '2020-01-28 00:00:00', '5e306c3481601_1.jpg', 1, 0, '2020-01-28 17:49:05', '2020-01-28 19:01:53'),
(2, 'Tammy Dixon', '<p><span style=\"color:rgb(119, 119, 119); font-family:open sans,sans-serif; font-size:14px\">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam eu velit cursus, tempor ipsum in, tempus lectus. Nullam tempus nisi id nisl luctus, non tempor justo molestie.</span></p>\r\n', '2020-01-28 00:00:00', '5e306c3d80a3a_1.jpg', 1, 0, '2020-01-28 17:51:50', '2020-01-28 18:15:42'),
(3, 'Tammy Dixon', '<p><span style=\"color:rgb(119, 119, 119); font-family:open sans,sans-serif; font-size:14px\">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam eu velit cursus, tempor ipsum in, tempus lectus. Nullam tempus nisi id nisl luctus, non tempor justo molestie.</span></p>\r\n', '2020-01-28 00:00:00', '5e306c448e2a5_1.jpg', 1, 0, '2020-01-28 17:52:09', '2020-01-28 18:15:49'),
(4, 'New Article', '<p><span style=\"color:rgb(119, 119, 119); font-family:open sans,sans-serif; font-size:14px\">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam eu velit cursus, tempor ipsum in, tempus lectus. Nullam tempus nisi id nisl luctus, non tempor justo molestie.</span></p>\r\n\r\n<p><span style=\"color:rgb(119, 119, 119); font-family:open sans,sans-serif; font-size:14px\">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam eu velit cursus, tempor ipsum in, tempus lectus. Nullam tempus nisi id nisl luctus, non tempor justo molestie.</span></p>\r\n\r\n<p><span style=\"color:rgb(119, 119, 119); font-family:open sans,sans-serif; font-size:14px\">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam eu velit cursus, tempor ipsum in, tempus lectus. Nullam tempus nisi id nisl luctus, non tempor justo molestie.</span></p>\r\n\r\n<p><span style=\"color:rgb(119, 119, 119); font-family:open sans,sans-serif; font-size:14px\">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam eu velit cursus, tempor ipsum in, tempus lectus. Nullam tempus nisi id nisl luctus, non tempor justo molestie.</span></p>\r\n', '2020-01-28 00:00:00', '5e30775655fd2_job_1.png', 1, 0, '2020-01-28 19:03:03', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
