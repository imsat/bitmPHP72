-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2018 at 08:37 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `blog72`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE IF NOT EXISTS `blogs` (
  `id` int(11) NOT NULL,
  `categoryId` int(11) NOT NULL,
  `blogTitle` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `shortDescription` text COLLATE utf8_croatian_ci NOT NULL,
  `longDescription` text COLLATE utf8_croatian_ci NOT NULL,
  `blogImage` text COLLATE utf8_croatian_ci NOT NULL,
  `publicationStatus` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `categoryId`, `blogTitle`, `shortDescription`, `longDescription`, `blogImage`, `publicationStatus`) VALUES
(17, 17, 'Short Description', 'Short DescriptionShort DescriptionShort DescriptionShort DescriptionShort Description', '<p>Short DescriptionShort DescriptionShort DescriptionShort Description</p>', '../assets/images/c81a0e5eb7.jpg', 1),
(18, 18, '	Shamur - Let The Music Play', ' Let The Music Play Let The Music Play', '<h1>&nbsp;Let The Music Play&nbsp;Let The Music Play&nbsp;Let The Music Play&nbsp;Let The Music Play&nbsp;Let The Music Play&nbsp;Let The Music Play&nbsp;Let The Music Play&nbsp;Let The Music Play&nbsp;Let The Music Play&nbsp;Let The Music Play&nbsp;Let The Music Play</h1>', '../assets/images/fb0266c9d5.jpg', 1),
(19, 0, 'à¦¶à¦¾à¦¨à§à¦¤à¦¨à¦¾ à¦ªà§‡à¦¤à§‡à¦“ à¦¬à¦¿à¦°à¦•à§à¦¤à¦¿ ', 'à¦¶à¦¾à¦¨à§à¦¤à¦¨à¦¾ à¦ªà§‡à¦¤à§‡à¦“ à¦¬à¦¿à¦°à¦•à§à¦¤à¦¿ à¦²à¦¾à¦—à§‡à¦¶à¦¾à¦¨à§à¦¤à¦¨à¦¾ à¦ªà§‡à¦¤à§‡à¦“ à¦¬à¦¿à¦°à¦•à§à¦¤à¦¿ à¦²à¦¾à¦—à§‡à¦¶à¦¾à¦¨à§à¦¤à¦¨à¦¾ à¦ªà§‡à¦¤à§‡à¦“ à¦¬à¦¿à¦°à¦•à§à¦¤à¦¿ à¦²à¦¾à¦—à§‡', '<h1><span style="color: #1d2129; font-family: Helvetica, Arial, sans-serif; font-size: 24px;">à¦¶à¦¾à¦¨à§à¦¤à¦¨à¦¾ à¦ªà§‡à¦¤à§‡à¦“ à¦¬à¦¿à¦°à¦•à§à¦¤à¦¿ à¦²à¦¾à¦—à§‡</span><span style="color: #1d2129; font-family: Helvetica, Arial, sans-serif; font-size: 24px;">à¦¶à¦¾à¦¨à§à¦¤à¦¨à¦¾ à¦ªà§‡à¦¤à§‡à¦“ à¦¬à¦¿à¦°à¦•à§à¦¤à¦¿ à¦²à¦¾à¦—à§‡</span><span style="color: #1d2129; font-family: Helvetica, Arial, sans-serif; font-size: 24px;">à¦¶à¦¾à¦¨à§à¦¤à¦¨à¦¾ à¦ªà§‡à¦¤à§‡à¦“ à¦¬à¦¿à¦°à¦•à§à¦¤à¦¿ à¦²à¦¾à¦—à§‡</span><span style="color: #1d2129; font-family: Helvetica, Arial, sans-serif; font-size: 24px;">à¦¶à¦¾à¦¨à§à¦¤à¦¨à¦¾ à¦ªà§‡à¦¤à§‡à¦“ à¦¬à¦¿à¦°à¦•à§à¦¤à¦¿ à¦²à¦¾à¦—à§‡</span><span style="color: #1d2129; font-family: Helvetica, Arial, sans-serif; font-size: 24px;">à¦¶à¦¾à¦¨à§à¦¤à¦¨à¦¾ à¦ªà§‡à¦¤à§‡à¦“ à¦¬à¦¿à¦°à¦•à§à¦¤à¦¿ à¦²à¦¾à¦—à§‡</span><span style="color: #1d2129; font-family: Helvetica, Arial, sans-serif; font-size: 24px;">à¦¶à¦¾à¦¨à§à¦¤à¦¨à¦¾ à¦ªà§‡à¦¤à§‡à¦“ à¦¬à¦¿à¦°à¦•à§à¦¤à¦¿ à¦²à¦¾à¦—à§‡</span><span style="color: #1d2129; font-family: Helvetica, Arial, sans-serif; font-size: 24px;">à¦¶à¦¾à¦¨à§à¦¤à¦¨à¦¾ à¦ªà§‡à¦¤à§‡à¦“ à¦¬à¦¿à¦°à¦•à§à¦¤à¦¿ à¦²à¦¾à¦—à§‡</span><span style="color: #1d2129; font-family: Helvetica, Arial, sans-serif; font-size: 24px;">à¦¶à¦¾à¦¨à§à¦¤à¦¨à¦¾ à¦ªà§‡à¦¤à§‡à¦“ à¦¬à¦¿à¦°à¦•à§à¦¤à¦¿ à¦²à¦¾à¦—à§‡</span><span style="color: #1d2129; font-family: Helvetica, Arial, sans-serif; font-size: 24px;">à¦¶à¦¾à¦¨à§à¦¤à¦¨à¦¾ à¦ªà§‡à¦¤à§‡à¦“ à¦¬à¦¿à¦°à¦•à§à¦¤à¦¿ à¦²à¦¾à¦—à§‡</span><span style="color: #1d2129; font-family: Helvetica, Arial, sans-serif; font-size: 24px;">à¦¶à¦¾à¦¨à§à¦¤à¦¨à¦¾ à¦ªà§‡à¦¤à§‡à¦“ à¦¬à¦¿à¦°à¦•à§à¦¤à¦¿ à¦²à¦¾à¦—à§‡</span><span style="color: #1d2129; font-family: Helvetica, Arial, sans-serif; font-size: 24px;">à¦¶à¦¾à¦¨à§à¦¤à¦¨à¦¾ à¦ªà§‡à¦¤à§‡à¦“ à¦¬à¦¿à¦°à¦•à§à¦¤à¦¿ à¦²à¦¾à¦—à§‡</span></h1>', '../assets/images/322e59cb27.png', 1),
(20, 11, '2 Different Sides Of The World!', '2 Different Sides Of The World!2 Different Sides Of The World!', '<h1><span style="color: #1d2129; font-family: Helvetica, Arial, sans-serif;">2 Different Sides Of The World!</span><span style="color: #1d2129; font-family: Helvetica, Arial, sans-serif;">2 Different Sides Of The World!</span><span style="color: #1d2129; font-family: Helvetica, Arial, sans-serif;">2 Different Sides Of The World!</span><span style="color: #1d2129; font-family: Helvetica, Arial, sans-serif;">2 Different Sides Of The World!</span><span style="color: #1d2129; font-family: Helvetica, Arial, sans-serif;">2 Different Sides Of The World!</span><span style="color: #1d2129; font-family: Helvetica, Arial, sans-serif;">2 Different Sides Of The World!</span><span style="color: #1d2129; font-family: Helvetica, Arial, sans-serif;">2 Different Sides Of The World!</span><span style="color: #1d2129; font-family: Helvetica, Arial, sans-serif;">2 Different Sides Of The World!</span><span style="color: #1d2129; font-family: Helvetica, Arial, sans-serif;">2 Different Sides Of The World!</span></h1>', '../assets/images/9d069e4e0b.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL,
  `categoryName` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `categoryDescription` text COLLATE utf8_croatian_ci NOT NULL,
  `publicationStatus` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categoryName`, `categoryDescription`, `publicationStatus`) VALUES
(3, 'PHP', 'PHP Description Goes here', 1),
(4, 'Java', 'Java Description Goes Here', 1),
(5, 'CSS', 'CSS Description Goes here', 0),
(6, 'Python', 'Python Description Goes Here', 1),
(7, 'Dot-NET', 'Dot-NET article goes here', 0),
(11, 'Html', 'Html Goes Here', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_croatian_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'Satyajit', 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 'Sudipto', 'vigi@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
