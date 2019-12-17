-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2019 at 03:13 AM
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
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `job_id` int(11) NOT NULL,
  `employer_id` int(11) NOT NULL,
  `job_date` varchar(255) NOT NULL,
  `job_date_expired` varchar(255) NOT NULL,
  `job_title` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `job_industry` varchar(255) NOT NULL,
  `job_location` varchar(255) NOT NULL,
  `job_job_function` varchar(255) NOT NULL,
  `job_education` varchar(255) NOT NULL,
  `job_exp_year` int(11) NOT NULL,
  `job_exp_month` int(11) NOT NULL,
  `job_salary` varchar(255) NOT NULL,
  `job_skill` text NOT NULL,
  `job_additional_skill` text NOT NULL,
  `job_descr` text NOT NULL,
  `job_additional_role` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0-no 1-yes',
  `pay_info` tinyint(4) NOT NULL DEFAULT '1',
  `isDelete` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`job_id`, `employer_id`, `job_date`, `job_date_expired`, `job_title`, `slug`, `job_industry`, `job_location`, `job_job_function`, `job_education`, `job_exp_year`, `job_exp_month`, `job_salary`, `job_skill`, `job_additional_skill`, `job_descr`, `job_additional_role`, `status`, `pay_info`, `isDelete`, `created_at`, `updated_at`) VALUES
(1, 0, '', '', '', 'clerk', '', '', '', '', 0, 0, '', '', '', '', '', 1, 1, 0, '2019-12-15 03:03:58', '0000-00-00 00:00:00'),
(2, 0, '', '', '', 'supervisor', '', '', '', '', 0, 0, '', '', '', '', '', 1, 1, 0, '2019-12-15 03:04:06', '0000-00-00 00:00:00'),
(3, 0, '', '', '', 'assistant-manager', '', '', '', '', 0, 0, '', '', '', '', '', 1, 1, 0, '2019-12-15 03:04:15', '0000-00-00 00:00:00'),
(4, 9, '12/04/2019', '12/18/2019', 'job title', '', '2,3', '2,3', '2,3', '1,2,3,4,5', 11, 4, '5600', 'skill', 'adddi', 'job descr', 'roles- asdfasd\r\nasd\r\n\r\nasdf', 1, 1, 0, '2019-12-16 22:29:46', '2019-12-16 23:15:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`job_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
