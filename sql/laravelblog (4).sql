-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 08, 2016 at 11:26 pm
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `laravelblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `content` varchar(500) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=86 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `post_id`, `content`, `created_at`, `updated_at`, `deleted_at`) VALUES
(13, 5, 2, 'sdfsdf', '2016-03-08 22:04:25', '2016-03-07 16:55:59', NULL),
(14, 5, 2, 'WWWWWWWWW', '2016-03-08 22:04:29', '2016-03-07 16:56:14', NULL),
(15, 5, 3, 'No', '2016-03-08 22:04:32', '2016-03-07 16:56:30', NULL),
(16, 5, 1, 'Something to add', '2016-03-08 22:04:35', '2016-03-07 17:09:15', NULL),
(37, 5, 1, 'dddd Hi Jet', '2016-03-08 22:04:38', '2016-03-08 06:44:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
`id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `subtitle` varchar(50) NOT NULL,
  `content` varchar(10000) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `subtitle`, `content`, `photo`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Something About Birds', 'Birds are awesome', 'Because they can fly. Because they can fly. Because they can fly. Because they can fly. Because they can fly. Because they can fly. Because they can fly.  Edited! Twice! Trice! Again! And Again!', 'photo1.jpg', '2016-03-08 12:47:44', '2016-03-07 16:42:06', NULL),
(2, 'Something About The Ocean', 'Ocean is big', 'Something about the ocean. Something about the ocean. Something about the ocean. Something about the ocean. Something about the ocean. Something about the ocean. Something about the ocean. ', 'photo2.jpg', '2016-03-08 12:47:50', '2016-03-07 23:45:47', NULL),
(3, 'Something About The Sky', 'The sky is blue', 'Is the sky really blue?', 'pic03.jpg', '2016-03-08 12:47:52', '2016-03-07 23:30:55', NULL),
(4, 'Something About The Sky', 'The sky is blue', 'Is the sky really blue?', 'pic04.jpg', '2016-03-08 12:30:59', '2016-03-07 23:30:59', '2016-03-07 23:30:59'),
(5, 'Something About The Sky', 'The sky is blue', 'Is the sky really blue?', 'pic05.jpg', '2016-03-07 06:07:34', '2016-03-06 17:01:31', '0000-00-00 00:00:00'),
(6, 'Something about New Zealand', 'Something About The Sky', 'Something About The Sky', 'pic06.jpg', '2016-03-07 06:13:38', '2016-03-06 17:08:05', '0000-00-00 00:00:00'),
(7, 'Something about New Zealand', 'test', 'test', 'pic07.jpg', '2016-03-07 06:13:26', '2016-03-06 17:11:35', '0000-00-00 00:00:00'),
(8, 'Something About The Sky', 'Something About The Sky', 'Something About The Sky', 'photo8.jpg', '2016-03-08 08:49:47', '2016-03-07 19:49:47', '0000-00-00 00:00:00'),
(9, 'Title', 'Sub-title', 'Conent', 'photo9.jpg', '2016-03-08 08:47:31', '2016-03-07 19:47:31', '0000-00-00 00:00:00'),
(10, 'Dangerous Dave', 'Dave', 'As per Ben', 'pic07.jpg', '2016-03-08 12:31:05', '2016-03-07 23:31:05', '2016-03-07 23:31:05'),
(11, 'Astro', '43243', '24234', 'photo11.jpg', '2016-03-08 08:11:24', '2016-03-07 19:11:24', '0000-00-00 00:00:00'),
(12, '32423', '43243', '24234', 'pic01.jpg', '2016-03-07 21:10:06', '2016-03-07 08:10:06', '0000-00-00 00:00:00'),
(13, 'sadfas', 'dasd', 'sadasd', 'pic07.jpg', '2016-03-07 22:00:06', '2016-03-07 08:11:12', '0000-00-00 00:00:00'),
(14, 'sadfas', 'dasd', 'sadasd', 'pic01.jpg', '2016-03-07 21:11:47', '2016-03-07 08:11:47', '0000-00-00 00:00:00'),
(15, 'WWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWW', 'qwerew', 'rewrewr', 'pic01.jpg', '2016-03-07 21:12:15', '2016-03-07 08:12:15', '0000-00-00 00:00:00'),
(16, 'Something about Work', 'Work', 'About work', 'photo16.jpg', '2016-03-08 08:08:56', '2016-03-07 19:08:56', '0000-00-00 00:00:00'),
(17, 'Test', 'test', 'asdsad', 'photo17.jpg', '2016-03-08 08:16:00', '2016-03-07 19:16:00', '0000-00-00 00:00:00'),
(18, '23rew', 'rwer', 'werewr', 'photo18.jpg', '2016-03-08 12:14:38', '2016-03-07 23:14:38', '0000-00-00 00:00:00'),
(19, 'wertfwe', 'rewrewr', 'werwer', 'photo19.jpg', '2016-03-08 12:17:39', '2016-03-07 23:17:39', '2016-03-07 23:17:39'),
(20, '3wrwer', 'ewrewr', 'ewrewrewr', 'photo20.jpg', '2016-03-08 12:16:21', '2016-03-07 23:16:21', '0000-00-00 00:00:00'),
(21, 'School', 'ewrewr', 'ewrewr', 'photo21.jpg', '2016-03-08 12:30:47', '2016-03-07 23:30:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `password` varchar(300) NOT NULL,
  `email` varchar(40) NOT NULL,
  `avatar_photo` varchar(200) NOT NULL,
  `admin_status` int(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `remember_token` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `firstname`, `lastname`, `password`, `email`, `avatar_photo`, `admin_status`, `created_at`, `updated_at`, `deleted_at`, `remember_token`) VALUES
(1, 'bernie', '', '', '1', 'bernie@gmail.com', 'bernie.jpg', 1, '2016-03-06 20:48:34', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(2, 'jetsss', 'jet', 'torrano', '1', 'jet@gmail.com', '', 0, '2016-03-07 06:46:16', '2016-03-06 17:45:30', '0000-00-00 00:00:00', 0),
(3, 'jetss', 'jet', 'torrano', '$2y$10$kUB9NbLeEpoWKQLojT88deTeT0QhjR/fmJN0rbJvpoo6EXc4ggZS2', 'jet@gmail.com', 'pic01.jpg', 0, '2016-03-07 06:46:03', '2016-03-06 17:46:03', '0000-00-00 00:00:00', 0),
(4, 'mark', 'mark', 'torrano', '$2y$10$EipHb4Hyhq9sDKaaflWsNuW7sRKNAmbZ9YdefGuQdWm7z3Dc7S5Qi', 'mark@gmail.com', 'pic01.jpg', 0, '2016-03-07 06:50:19', '2016-03-06 17:49:58', '0000-00-00 00:00:00', 0),
(5, 'jet', 'Jet', 'Li', '$2y$10$/QWUSugQmymgw1nuDkcWYuAzQ0xIcSBr38iy4pr4p7Nbtpqi4bJlC', 'jet@mail.com', 'pic01.jpg', 1, '2016-03-08 19:31:34', '2016-03-08 06:31:34', '0000-00-00 00:00:00', 0),
(6, '9', '9', '9', '$2y$10$Aa48iXciUVXv.HuyufsEyu3E3XZY./GEBSecxvKVR4UwUFNqgD8d.', '9', 'pic01.jpg', 0, '2016-03-08 12:35:25', '2016-03-07 23:35:25', '0000-00-00 00:00:00', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
 ADD PRIMARY KEY (`id`), ADD KEY `user_id` (`user_id`,`post_id`), ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
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
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=86;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
