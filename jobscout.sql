-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 27, 2023 at 05:37 AM
-- Server version: 8.0.31
-- PHP Version: 8.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobscout`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_logs`
--

DROP TABLE IF EXISTS `activity_logs`;
CREATE TABLE IF NOT EXISTS `activity_logs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `initiated_by` varchar(255) NOT NULL,
  `activity` varchar(255) NOT NULL,
  `activity_on` varchar(255) NOT NULL,
  `activity_type` varchar(255) NOT NULL,
  `activity_from_ip` varchar(255) NOT NULL,
  `activity_from` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `initiator_id` int NOT NULL,
  `initiator_type` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `activity_logs`
--

INSERT INTO `activity_logs` (`id`, `initiated_by`, `activity`, `activity_on`, `activity_type`, `activity_from_ip`, `activity_from`, `created_at`, `updated_at`, `initiator_id`, `initiator_type`) VALUES
(1, 'Nujan Sitaula', 'Applied for a job', '2023-05-01 19:55:05', 'apply', '::1', 'Chrome on Windows', '2023-05-01 14:10:05', '2023-05-01 14:10:05', 1, 'employee'),
(2, 'Nujan Sitaula', 'Applied for a job', '2023-05-02 09:52:35', 'apply', '::1', 'Chrome on Windows', '2023-05-02 04:07:35', '2023-05-02 04:07:35', 1, 'employee'),
(3, 'Nujan Sitaula', 'Applied for a job - <a href=\"http://localhost/jobscout/public/job/7\">Data Center Technician I</a>', '2023-05-03 07:29:40', 'apply', '::1', 'Chrome on Windows', '2023-05-03 01:44:40', '2023-05-03 01:44:40', 1, 'employee'),
(4, 'Nujan Sitaula', 'Applied for a job - <a href=\"http://localhost/jobscout/public/job/1\">Senior Laravel Developer</a>', '2023-05-13 17:43:30', 'apply', '::1', 'Chrome on Windows', '2023-05-13 11:58:30', '2023-05-13 11:58:30', 1, 'employee'),
(5, 'Nujan Sitaula', 'Applied for a job - <a href=\"http://localhost/jobscout/public/job/1\">Senior Laravel Developer</a>', '2023-05-13 18:44:14', 'apply', '::1', 'Chrome on Windows', '2023-05-13 12:59:14', '2023-05-13 12:59:14', 1, 'employee'),
(6, 'Nujan Sitaula', 'Applied for a job - <a href=\"http://localhost/jobscout/public/job/6\">Research Intern - Human-AI Experiences (HAX) Team</a>', '2023-05-17 18:07:03', 'apply', '::1', 'Chrome on Windows', '2023-05-17 12:22:03', '2023-05-17 12:22:03', 1, 'employee'),
(7, 'Elizabeth Fitzgerald', 'Applied for a job - <a href=\"http://localhost/jobscout/public/job/1\">Senior Laravel Developer</a>', '2023-05-18 19:13:57', 'apply', '::1', 'Chrome on Windows', '2023-05-18 13:28:57', '2023-05-18 13:28:57', 9, 'employee');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `otp` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci,
  `phone` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `photo`, `token`, `created_at`, `updated_at`, `otp`, `phone`) VALUES
(1, 'Nujan Sitaula', 'sitaula.nujan@gmail.com', '$2y$10$PiuuuXASjEpZRnN4iBdhSuf2AOJomdWzkcKfOlNw7Pb.iJHrx5cqe', 'adminPhoto.jpg', '', NULL, '2023-05-04 04:15:52', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `boost_orders`
--

DROP TABLE IF EXISTS `boost_orders`;
CREATE TABLE IF NOT EXISTS `boost_orders` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `employer_id` int NOT NULL,
  `package_id` int NOT NULL,
  `package_price` varchar(255) NOT NULL,
  `tnxID` varchar(255) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `isActive` tinyint NOT NULL,
  `date_purchased` varchar(255) NOT NULL,
  `date_expired` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `boost_orders`
--

INSERT INTO `boost_orders` (`id`, `employer_id`, `package_id`, `package_price`, `tnxID`, `payment_method`, `isActive`, `date_purchased`, `date_expired`, `created_at`, `updated_at`) VALUES
(12, 2, 1, '300.0', '0005JUY', 'Esewa Epay', 1, '2023-05-19 01:40:40', '2023-05-23 01:40:39', '2023-05-18 19:55:40', '2023-05-18 19:55:40'),
(11, 2, 1, '300.0', '0005JUX', 'Esewa Epay', 1, '2023-05-18 18:38:09', '2023-05-18 18:38:08', '2023-05-18 12:53:09', '2023-05-18 12:53:09'),
(10, 2, 1, '400.0', '0005HZD', 'Esewa Epay', 1, '2023-05-06 08:39:27', '2023-05-10 08:39:25', '2023-05-06 02:54:27', '2023-05-06 02:54:27'),
(9, 2, 3, '300.0', '0005HZ8', 'Esewa Epay', 1, '2023-05-06 00:03:31', '2023-05-09 00:03:29', '2023-05-05 18:18:31', '2023-05-05 18:18:31');

-- --------------------------------------------------------

--
-- Table structure for table `conversations`
--

DROP TABLE IF EXISTS `conversations`;
CREATE TABLE IF NOT EXISTS `conversations` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `sender_id` bigint UNSIGNED NOT NULL,
  `recipient_id` bigint UNSIGNED NOT NULL,
  `last_message_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `conversations_sender_id_foreign` (`sender_id`),
  KEY `conversations_recipient_id_foreign` (`recipient_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `conversations`
--

INSERT INTO `conversations` (`id`, `sender_id`, `recipient_id`, `last_message_at`, `created_at`, `updated_at`) VALUES
(3, 2, 1, '2023-05-11 09:42:45', '2023-04-10 14:00:58', '2023-05-11 09:42:45'),
(4, 2, 4, '2023-04-11 14:15:31', '2023-04-10 14:48:03', '2023-04-11 14:15:31'),
(5, 2, 5, '2023-04-14 03:36:58', '2023-04-10 14:48:21', '2023-04-14 03:36:58');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
CREATE TABLE IF NOT EXISTS `employees` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `zip` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `isMarried` varchar(100) DEFAULT NULL,
  `dateOfBirth` varchar(255) DEFAULT NULL,
  `bio` text,
  `facebook` text,
  `twitter` text,
  `linkedin` text,
  `instagram` text,
  `github` text,
  `isverified` tinyint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `isDeleted` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `employees_username_unique` (`username`),
  UNIQUE KEY `employees_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `firstname`, `lastname`, `username`, `email`, `password`, `designation`, `photo`, `website`, `token`, `phone`, `address`, `city`, `state`, `country`, `zip`, `gender`, `isMarried`, `dateOfBirth`, `bio`, `facebook`, `twitter`, `linkedin`, `instagram`, `github`, `isverified`, `created_at`, `updated_at`, `isDeleted`) VALUES
(1, 'Nujan', 'Sitaula', 'nujansitaula', 'sitaula.nujan@gmail.com', '$2y$10$DyrP.xWRhYU.s6dG83CrGu/kyiM2sVvgmktVLYMsZmMs7VsPVnL02', 'Full Stack Developer', 'a090f98770ea0c0779584d07668fa6269ed1427d81a1ec507d352d42b1932bd4_userphoto.jpg', 'nujan.com.np', 'ef66bdad63bee3b6bcdb9eedf1aa393065b3f2fdb0c06549d09e913bb46ae788', '9840938854', 'Buddha Marga, Golfutar', 'Kathmandu', 'Bagmati', 'Nepal', NULL, NULL, 'Prefer Not To Say', '2001-07-02', 'As a full stack Laravel developer from Nepal, I have honed my skills over the years to become a versatile and adaptable programmer who can tackle any challenge thrown my way. I have a passion for developing clean and efficient code that is both easy to read and maintainable for other developers.\n\nMy journey as a Laravel developer began several years ago when I discovered my love for programming. Since then, I have devoted countless hours to learning and mastering the Laravel framework. This dedication has paid off, as I am now confident in my ability to build and deploy full-stack web applications using Laravel and other related technologies.\n\nOne of my core strengths as a developer is my ability to understand the needs of my clients and to develop custom solutions that meet their specific requirements. Whether it\'s building a simple website or developing a complex enterprise-level application, I have the skills and expertise needed to deliver high-quality results on time and within budget.\n\nIn addition to my technical skills, I also possess excellent communication skills that allow me to work effectively with clients, stakeholders, and team members. I am a good listener and able to translate complex technical concepts into simple, easy-to-understand terms.\n\nAs a developer, I am always striving to learn and grow. I keep up-to-date with the latest trends and best practices in web development and regularly attend conferences, meetups, and online courses to expand my knowledge. I am also a strong believer in open source software and have contributed to several Laravel-related projects on GitHub.\n\nOverall, I am a highly motivated and dedicated Laravel developer from Nepal who is passionate about building innovative and user-friendly web applications that solve real-world problems. With my technical skills, attention to detail, and commitment to excellence, I am confident that I can deliver exceptional results for any project I work on.', 'https://facebook.com/vamp.nujan', 'https://instagram.com/_nujan_', 'https://linkedin.com/in/nujansitaula', NULL, 'https://github.com/nujansitaula', 1, '2023-03-09 02:26:09', '2023-05-18 14:14:11', 0),
(2, 'Yogeshwor', 'Kharel', 'yogeshwor', 'npress.software@gmail.com', '$2y$10$fpLDf7HZtYDjDGwbGdJB9uQxC/iH1YlVIGR6P4GmzRdra3JhY4.H6', NULL, NULL, NULL, '93e9dd5d1fe5511e9d384fabafd8f0d46a255ce6d7f7dfd7928acd05562df2e3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2023-04-07 06:16:42', '2023-05-18 19:31:58', 0),
(3, 'Adarsha', 'Ghimire', 'adarsha', 'nujan.shotcoder@gmail.com', '$2y$10$StlrgcIn7V0QtC61p36t3uazhIXxkzhD4suGJ/WTkiFB.yCSZ/5OW', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2023-04-07 07:02:11', '2023-04-07 07:04:14', 0),
(4, 'Raymon', 'Basnyat', 'raymonbasnyat', 'basnetraymonn@gmail.com', '$2y$10$jF4nwddZGD8mZ1gJHaswUOpGLvl0NXWKthQvavkKJfjz/7fSf73JK', '', NULL, NULL, '', NULL, 'Ramechhap, Nepal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2023-04-07 10:49:09', '2023-04-07 10:50:25', 0),
(5, 'Gaurav', 'Thapaliya', 'gaurav33', 'thapaliyagaurav1@gmail.com', '$2y$10$S8H.J9onuif0x1L1moYhrusZYCe2Oy7WkMgjrRVZykR7CHQvXrWaS', 'React Developer', NULL, NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2023-04-08 04:57:03', '2023-04-08 04:58:07', 0),
(6, 'Avram', 'Keller', 'xukok', 'myzudimeze@mailinator.com', '$2y$10$myRkQq4LHKn6YnjneRIxHOygmgwnc6Fsl7SA6.y/NtfrBwNzg.qiW', NULL, NULL, NULL, '0dd96f9a6a3625d62bbaa193d2b0b3f3081bc8519f5355b72e37348bc24c2f82', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2023-04-24 09:42:01', '2023-04-24 09:42:01', 0),
(7, 'Zena', 'Griffin', 'jajew', 'nukicaweze@mailinator.com', '$2y$10$FPpkss2OF3ILvyHVexz3dOlKY32sc4Cejkro04XcWsQlyTfgcb2sO', NULL, NULL, NULL, 'a9944564b66d0dc871a704c98ef36400a1c2e89b711aeb68058c9b51ce2778c6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2023-04-24 09:43:03', '2023-04-24 09:43:03', 0),
(8, 'Deleted', 'User', 'likepyxeb', '2iyJPfM9ea@gmail.com', '$2y$10$po0QIYUwmzb7Kq0D5ShKvOmxiKqAVzWLSAfS0Xj5FgcPtwjXYHHS2', NULL, NULL, 'Unknown', 'a08037443db03ee38655e5cc8cb9f17db5ffee28803e706b1cb0f43d8f05c750', '0000000000', 'Unknown', 'Unknown', 'Unknown', 'Unknown', NULL, NULL, 'Unknown', 'Unknown', 'Unknown', 'Unknown', 'Unknown', 'Unknown', NULL, 'Unknown', 1, '2023-04-24 09:45:36', '2023-05-18 19:21:56', 0),
(9, 'Deleted', 'User', 'wowipi', 'aXKaCT2HJC@gmail.com', '$2y$10$Vq0Hbqfl2aH1dztebjcnhOunANnOF5uLHfKDw.RcNaM3iciM3jbtK', NULL, NULL, 'Unknown', '', '0000000000', 'Unknown', 'Unknown', 'Unknown', 'Unknown', NULL, NULL, 'Unknown', 'Unknown', 'Unknown', 'Unknown', 'Unknown', 'Unknown', NULL, 'Unknown', 1, '2023-04-25 00:27:09', '2023-05-18 18:40:54', 1),
(10, 'Suyogya', 'Gautam', 'suyogyag', 'gsuyogya@gmail.com', '$2y$10$/K5hedIAo8VP8goaZEb9vuk3q2/owgGjr0NmOObPEDI/QocYf2Aqa', NULL, NULL, NULL, 'eeb0db16609b3a97ac226a9e3bcf35e4ed71f1a00590b55a3814dfcd136aebc1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2023-05-10 09:50:53', '2023-05-10 09:50:53', 0);

-- --------------------------------------------------------

--
-- Table structure for table `employee_applications`
--

DROP TABLE IF EXISTS `employee_applications`;
CREATE TABLE IF NOT EXISTS `employee_applications` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `employee_id` int NOT NULL,
  `job_id` varchar(255) NOT NULL,
  `cover_letter` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `similarityScore` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `employee_applications`
--

INSERT INTO `employee_applications` (`id`, `employee_id`, `job_id`, `cover_letter`, `status`, `created_at`, `updated_at`, `similarityScore`) VALUES
(21, 9, '1', 'I want this job.', 'Applied', '2023-05-18 13:28:53', '2023-05-18 13:28:53', 0),
(19, 1, '1', 'I want this job.', 'Applied', '2023-05-13 12:59:10', '2023-05-13 12:59:10', 67),
(20, 1, '6', 'Nujan Sitaula', 'Applied', '2023-05-17 12:21:57', '2023-05-17 12:21:57', 42);

-- --------------------------------------------------------

--
-- Table structure for table `employee_bookmarks`
--

DROP TABLE IF EXISTS `employee_bookmarks`;
CREATE TABLE IF NOT EXISTS `employee_bookmarks` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `job_id` varchar(255) NOT NULL,
  `employee_id` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `employee_bookmarks`
--

INSERT INTO `employee_bookmarks` (`id`, `job_id`, `employee_id`, `created_at`, `updated_at`) VALUES
(7, '7', '1', '2023-04-21 01:16:16', '2023-04-21 01:16:16');

-- --------------------------------------------------------

--
-- Table structure for table `employers`
--

DROP TABLE IF EXISTS `employers`;
CREATE TABLE IF NOT EXISTS `employers` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `employer_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `zip` varchar(255) DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `industry` int DEFAULT NULL,
  `founded` varchar(255) DEFAULT NULL,
  `about` text,
  `hours_sunday` varchar(255) DEFAULT NULL,
  `hours_monday` varchar(255) DEFAULT NULL,
  `hours_tuesday` varchar(255) DEFAULT NULL,
  `hours_wednesday` varchar(255) DEFAULT NULL,
  `hours_thursday` varchar(255) DEFAULT NULL,
  `hours_friday` varchar(255) DEFAULT NULL,
  `hours_saturday` varchar(255) DEFAULT NULL,
  `map` text,
  `facebook` text,
  `twitter` text,
  `linkedin` text,
  `instagram` text,
  `github` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `isverified` tinyint NOT NULL,
  `address_id` int DEFAULT NULL,
  `employer_type` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci,
  `isSuspended` varchar(100) NOT NULL DEFAULT 'no',
  PRIMARY KEY (`id`),
  UNIQUE KEY `employers_email_unique` (`email`),
  UNIQUE KEY `employers_username_unique` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `employers`
--

INSERT INTO `employers` (`id`, `employer_name`, `email`, `username`, `password`, `firstname`, `lastname`, `logo`, `website`, `token`, `phone`, `address`, `city`, `state`, `country`, `zip`, `size`, `industry`, `founded`, `about`, `hours_sunday`, `hours_monday`, `hours_tuesday`, `hours_wednesday`, `hours_thursday`, `hours_friday`, `hours_saturday`, `map`, `facebook`, `twitter`, `linkedin`, `instagram`, `github`, `created_at`, `updated_at`, `isverified`, `address_id`, `employer_type`, `isSuspended`) VALUES
(2, 'ShotCoder Tech', 'letstalk@shotcoder.com', 'shotcodertech', '$2y$10$OSkEbaxBDdP.Uxz96VFCheyBm.Ede89t6BlkmgBy/bMMfWUP.UclO', 'Nujan', 'Sitaula', 'shotcoder.jpg', 'shotcoder.com', '', '9840791750', 'jhapa rural municipality', 'jhapa', 'province1', 'Nepal', '11111', '2', 8, '2019', 'ShotCoder Tech is a tech company that was established in 2019. It is a young and dynamic organization that is dedicated to developing cutting-edge solution.', '10 AM - 6 PM', '10 AM - 6 PM', '10 AM - 6 PM', '10 AM - 6 PM', '10 AM - 6 PM', '10 AM - 6 PM', 'Closed', NULL, 'https://facebook.com/', 'https://facebook.com/', 'https://facebook.com/', NULL, 'https://facebook.com/', '2023-03-08 07:24:54', '2023-05-18 11:27:57', 1, 2, 'Information Technology', 'no'),
(1, 'HCRC Hospital', 'vamp.nujan@gmail.com', 'hcrchospital', '$2y$10$oDzWPQjzh6UqTfaQ5nBjJOEsYLIz04fCRoxHAgdR6Ml.mjIN7WVI.', 'Ramesh', 'Sitaula', 'hcrclogo.jpeg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-08 09:38:37', '2023-05-07 02:13:47', 1, 3, 'Information Technology', 'no'),
(4, 'Herald College', 'hekyxysawo@mailinator.com', 'sacoharik', '$2y$10$JpN2S5vQREz2DIPs1r6y2.0jprMq5lnFbPzSPGNKSUQWfJO/dYFou', 'Uma', 'Sweeney', 'heraldcollege.png', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-14 09:22:36', '2023-05-18 09:29:48', 1, 3, 'Information Technology', 'no'),
(6, 'Microsoft Corp.', 'fapor@mailinator.com', 'jediqon', '$2y$10$SuqMXWAq0zjDhTjp9l.RD.YxgOkGxbezluc/1JxtOkZg6FMguSbuC', 'Jasmine', 'Herrera', 'microsoftlogo.png', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-14 09:30:40', '2023-04-14 09:31:16', 1, 3, 'Information Technology', 'no'),
(5, 'Facebook Inc.', 'luduta@mailinator.com', 'xuzavo', '$2y$10$oqXfNVN6WbJjdbbZI/HH9.tn2e8LHqat.7qeKl6sPlL0VmOM04rai', 'Stewart', 'Dyer', 'facebooklogo.jpg', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-14 09:24:54', '2023-04-14 09:26:45', 1, 3, 'Information Technology', 'no'),
(7, 'Starbucks Corp.', 'kaca@mailinator.com', 'qesyde', '$2y$10$hKIvUmgBUqr1WBOqufrGpuAGrSuUa4j2go4luYvEP5PP7Y.qtMXK.', 'Rajah', 'Emerson', 'starbuckslogo.jpg', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-14 09:33:10', '2023-05-07 00:56:21', 1, 3, 'Information Technology', 'no'),
(8, 'Adobe Inc.', 'kuridudim@mailinator.com', 'rihuhevo', '$2y$10$gaJxmd94byyZ27x5pgE1OerREhDDCLkOtM4wr.GOdY4HR4mtE5YcW', 'Eagan', 'Rodriguez', 'adobelogo.jpg', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-14 09:35:32', '2023-05-07 01:16:36', 1, 3, 'Information Technology', 'no'),
(9, 'Caesar Clemons', 'rawimuhuh@mailinator.com', 'ponijih', '$2y$10$cy5cLWgwNNCqkUJvC9b0x.OPDN155iUYcpP/uvNrrduR9icfmxQc2', 'Eden', 'Bean', NULL, NULL, 'fbdadaca3bd831ab10da81257f8b56c8d03b9bd451284cd5087f07da722cf1e5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-24 08:13:00', '2023-05-07 01:16:37', 0, NULL, 'Information Technology', 'no'),
(10, 'Madonna Christensen', 'puvyjinoxa@mailinator.com', 'zaxofica', '$2y$10$AwyjtqJu6XXpbTJkoBRZ0.YF6Cb7xnYSKZkoy6karqawBtAOu4gK2', 'Kendall', 'Stephens', NULL, NULL, '1cd03d23176287a3138bb000c01cea559ee4f43e95b9d7a62c29eee6356bbe50', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-24 08:14:50', '2023-05-07 00:56:18', 0, NULL, 'Information Technology', 'no'),
(11, 'Belle Cummings', 'litylynalo@mailinator.com', 'moxapaxa', '$2y$10$XsVxiSgPeMkV7arjCfNebuRrpJBL87poZCodAgUI18QyFtgUfPuXq', 'Akeem', 'Orr', NULL, NULL, 'e09bcb1180b78d8d290cd7a28705d6204ecf82d3ba4e4d84307efe15b1547e5b', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-24 08:21:52', '2023-05-07 02:02:36', 0, NULL, 'Information Technology', 'no'),
(12, 'Raja Harrell', 'hese@mailinator.com', 'fubynavy', '$2y$10$vwWNkRnrpHRrAMKLicAhyOgiR9AxxYEb5FanLhl7KSRrYr/kmfPxe', 'Colton', 'Conner', NULL, NULL, '9b2ef65fd92d705bfd92c20a294ba2f3960d6292b3930f366578639aeb99b5f7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-24 09:19:21', '2023-04-24 09:19:21', 0, NULL, 'Information Technology', 'no'),
(13, 'Stone Burnett', 'buber@mailinator.com', 'neqek', '$2y$10$U80dDsiVNyhPZ5bNL23BPeYm9zhtF6mv67bKx6ompHpzAMQYdT8Ii', 'Hakeem', 'Haney', NULL, NULL, '35819b4b900ad006392cac1e011519521b03ede45ccd6b3af589cf01e8f5d818', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-24 09:20:08', '2023-04-24 09:20:08', 0, NULL, 'Information Technology', 'no'),
(14, 'Vanna Knox', 'beqe@mailinator.com', 'ruquxaleso', '$2y$10$fExFaq1HO/A32A3D1oz.lOPsSlhpgIOpC.24nQ9HAQ4VKHgYIEssy', 'Warren', 'Cherry', NULL, NULL, 'fbec304e2161c980d8e2575281d1eabb7ea60cc6c6b3a346457ca39f684c41e1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-24 09:21:20', '2023-04-24 09:21:20', 0, NULL, 'Information Technology', 'no'),
(15, 'Berk Haley', 'vufuh@mailinator.com', 'xubyzevafe', '$2y$10$/8fdfazqUJnjB6lBw5glJuyMLPU1nr2eZAGQotvPOF.6idluHAgdm', 'Maggy', 'Rollins', NULL, NULL, '340e63a17ed4405d843d082f50a36e9cf622c591f85b4019cf1584a61f097d2a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-24 09:22:40', '2023-05-07 00:56:16', 0, NULL, 'Information Technology', 'no'),
(16, 'Alexis Sharpe', 'sariqohiku@mailinator.com', 'zezemoby', '$2y$10$7RjPQp4LXWscPLIp9I.z.O8JCXessZwgbzdGNZ/VeCbUSosjfA5tK', 'Madeson', 'Gaines', NULL, NULL, '5b9c00b46114fa8f0db43474071203bbebf0a6fb0ee587defa2e90b603f97bf3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-24 09:22:58', '2023-04-24 09:22:58', 0, NULL, 'Information Technology', 'no'),
(17, 'Iona Morgan', 'felol@mailinator.com', 'cobaja', '$2y$10$zOxkHxUtT3H45kM1SptEqO0Wp./iR8.WhGEQ0AsMOjG6JL1ZGUCYS', 'Steel', 'Quinn', NULL, NULL, 'ec2b2242bac32c3e0d9673f530d46a92886f5379ef95dc8d13005d7ce2affcf7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-24 09:23:15', '2023-04-24 09:23:15', 0, NULL, 'Information Technology', 'no'),
(18, 'Kay Horn', 'fotilyby@mailinator.com', 'liwucevan', '$2y$10$AdPgywp1keDAzN8yHiXwh.siwKj3PN6e7tDwJWd7MaHjPW4hQCHqi', 'Charlotte', 'Dunlap', NULL, NULL, 'e7e8446f8794b3b6d09a3d28b63f19731039f9e196e367773a82754459b65220', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-24 09:24:08', '2023-04-24 09:24:08', 0, NULL, 'Information Technology', 'no'),
(19, 'Nita Abbott', 'jyhixir@mailinator.com', 'rigov', '$2y$10$k2Fk02MKLBHlV.xT7dsYd.nPSrn8UpxWuWIF2BQv7RHsAYz1MUWwe', 'Quinn', 'Hutchinson', NULL, NULL, '25a018967c9d3a8f1ec17f4a1413450f328ad55f27037314e2561036c6ab0f9c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-24 09:28:11', '2023-04-24 09:28:11', 0, NULL, 'Information Technology', 'no'),
(20, 'Donovan Garrett', 'body@mailinator.com', 'nurygugani', '$2y$10$BYKuKQrpeeFdNCcybquZ1uJwOSfdvugo/bdjrGA.yIobV6nilL8ru', 'Belle', 'Gill', NULL, NULL, '893590b13859c1d2e8456ebed5a5625141a461238d643d3126d028338e5b3156', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-24 09:29:52', '2023-04-24 09:29:52', 0, NULL, 'Information Technology', 'no'),
(21, 'Ina Davenport', 'damazudoc@mailinator.com', 'lokoku', '$2y$10$UEUL336fEOTrQPGNyrpH5u9Ha3PWdmAAbG7k6RAd1mBfncgU2KHma', 'Nyssa', 'Hull', NULL, NULL, 'd9ccc06fa76079b489083417cea64707d3c5c12aee23deb55fdb30e4549a9f69', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-24 09:31:16', '2023-05-07 01:16:44', 0, NULL, 'Information Technology', 'no'),
(22, 'Cassidy Kinney', 'sivo@mailinator.com', 'vyjedypipa', '$2y$10$CU43umrxRQd58pVBxPikZ.wfhJJPWty5iFuRIV/CwP1/gcHnvXGtm', 'Joshua', 'Pate', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-24 09:35:56', '2023-04-24 09:36:48', 1, NULL, 'Information Technology', 'no'),
(23, 'Ella Hall', 'vupewu@mailinator.com', 'welom', '$2y$10$Yh5aLxXIgvA19KEIYSK1mOS0yjQ0.V2Bx.lLP2rkBXqOhtQnQybWW', 'Blythe', 'Walters', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-24 09:38:09', '2023-05-07 01:16:49', 1, NULL, 'Information Technology', 'no'),
(24, 'Alvin Parrish', 'tycutocete@mailinator.com', 'gyxesum', '$2y$10$SCNnA0lswshH/sAdZO2HP.Od5eijsuQYRJOe9Iyr7HwSnSCRAbcd6', 'Wilma', 'Gonzales', NULL, NULL, '6f468be55aa7c28ce0b6aced0ac47af27339f5a788b3632657c87300a875576b', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-24 09:40:49', '2023-05-07 00:57:20', 0, NULL, 'Information Technology', 'no'),
(25, 'Otto Santos', 'decizehulu@mailinator.com', 'xywokinuly', '$2y$10$g4idmPAUVlK.YVpLnMsffeT1i3GrRjcFw.cClhTdz5zBewoORmGl2', 'Yvette', 'Carson', NULL, NULL, '5d5c9a93c892b018739a66859b769d1c5b5147e04ceb193c380226a60811266e', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-24 10:10:34', '2023-04-24 10:10:34', 0, NULL, 'Information Technology', 'no'),
(26, 'Jin Harrison', 'conituja@mailinator.com', 'vyzas', '$2y$10$Li5A14oC19hPv5OFFYmsLeJwwv49dDAc/2eUq/uPNMB5P0kIszC9S', 'Paul', 'Saunders', NULL, NULL, '14ed516c0a3e37cbd4e3dab585e106d8015e32d68ef536f1f6897d2ce4846bac', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-24 10:12:19', '2023-04-24 10:12:19', 0, NULL, 'Information Technology', 'no'),
(27, 'XYZ Company', 'kuxohazawo@mailinator.com', 'pojyr', '$2y$10$sySi5KNy91/5Cy50AeP/euBUNw7II0rNSbKK8.IQPXQWOvjbZ.x3y', 'Thane', 'Rivera', NULL, NULL, 'd3054356289a7622b9b77d5c092cb72cc19bc67c042b97193d1cdf25599127b9', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-15 09:21:49', '2023-05-15 09:21:49', 0, NULL, NULL, 'no'),
(28, 'Npress Software', 'megedih@mailinator.com', 'najado', '$2y$10$QaKLVDZsEh1o2Vn7IFjiyOaKh.dnkWFyYOU6to83ojKWViyyG52KW', 'Tanner', 'Mcdowell', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-15 09:23:19', '2023-05-15 09:43:55', 1, NULL, NULL, 'no'),
(29, 'Logan Pearson', 'konijowyro@mailinator.com', 'kucafohas', '$2y$10$YdrYjXf4wZDDEnPRXLnlrOytP6pkiXUUnJrr/mtBaa.jAoidoQJhK', 'Hasad', 'Moody', NULL, NULL, 'd20186184fc925272f426b0bc6d24857905554003bbb8853deac8d093e8072db', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-15 11:05:27', '2023-05-15 11:05:27', 0, NULL, NULL, 'no');

-- --------------------------------------------------------

--
-- Table structure for table `employer_awards`
--

DROP TABLE IF EXISTS `employer_awards`;
CREATE TABLE IF NOT EXISTS `employer_awards` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `award_name` varchar(255) NOT NULL,
  `award_year` varchar(255) NOT NULL,
  `award_description` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `employer_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `employer_awards`
--

INSERT INTO `employer_awards` (`id`, `award_name`, `award_year`, `award_description`, `employer_id`, `created_at`, `updated_at`) VALUES
(1, 'Best Hosting Provider 2020', '2019', 'This award is given out annually to the web hosting provider that PCMag\'s editorial team believes offers the best overall service and features. To win this award, a hosting provider must excel in a variety of areas, including speed, uptime, customer support, and user-friendly features.', 2, NULL, NULL),
(2, 'Best Hosting Provider 2020', '2018', 'This award is given out annually to the web hosting provider that PCMag\'s editorial team believes offers the best overall service and features. To win this award, a hosting provider must excel in a variety of areas, including speed, uptime, customer suppo', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employer_locations`
--

DROP TABLE IF EXISTS `employer_locations`;
CREATE TABLE IF NOT EXISTS `employer_locations` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `employer_locations`
--

INSERT INTO `employer_locations` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'Kathmandu, Nepal', '2023-04-01 11:49:10', '2023-04-01 11:49:10'),
(3, 'Birtamode, Nepal', '2023-04-01 11:49:17', '2023-04-01 11:49:17');

-- --------------------------------------------------------

--
-- Table structure for table `employer_sizes`
--

DROP TABLE IF EXISTS `employer_sizes`;
CREATE TABLE IF NOT EXISTS `employer_sizes` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `employer_sizes`
--

INSERT INTO `employer_sizes` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, '0 - 10 Employees', '2023-04-01 23:03:05', '2023-04-01 23:03:12'),
(2, '10 - 50 Employees', '2023-04-01 23:03:30', '2023-04-01 23:03:57'),
(3, '50 - 100 Employees', '2023-04-01 23:03:43', '2023-04-01 23:04:04'),
(4, '100 < Employees', '2023-04-01 23:04:25', '2023-04-01 23:04:25');

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

DROP TABLE IF EXISTS `experiences`;
CREATE TABLE IF NOT EXISTS `experiences` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, '1 Year', '2023-03-09 13:17:29', '2023-04-23 11:16:29'),
(4, '2 Years', '2023-04-23 11:16:38', '2023-04-23 11:16:51'),
(5, '5+ Years', '2023-04-23 11:16:47', '2023-04-23 11:17:23'),
(6, '3 Years', '2023-04-23 11:17:05', '2023-04-23 11:17:05'),
(7, '4 Years', '2023-04-23 11:17:13', '2023-04-23 11:17:13');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `footer_contents`
--

DROP TABLE IF EXISTS `footer_contents`;
CREATE TABLE IF NOT EXISTS `footer_contents` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `copyright_text` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `footer_contents`
--

INSERT INTO `footer_contents` (`id`, `address`, `phone`, `email`, `facebook`, `twitter`, `instagram`, `linkedin`, `youtube`, `copyright_text`, `created_at`, `updated_at`) VALUES
(1, 'Buddha Marga 44622<br> Golfutar \nKathmandu 75601', '01-5845256', 'support@jobscout.tech', '#', '#', '#', '#', '#', '© 2023 JobScout.', '2023-05-17 18:54:25', '2023-05-17 18:54:25');

-- --------------------------------------------------------

--
-- Table structure for table `hirings`
--

DROP TABLE IF EXISTS `hirings`;
CREATE TABLE IF NOT EXISTS `hirings` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `location` varchar(255) NOT NULL,
  `salary` varchar(255) DEFAULT NULL,
  `company_id` int DEFAULT NULL,
  `tags` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci,
  `vacancies` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `deadline` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `experiance` varchar(255) NOT NULL,
  `education` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `map` varchar(255) DEFAULT NULL,
  `isfeatured` varchar(255) NOT NULL DEFAULT 'no',
  `isBoosted` varchar(255) NOT NULL DEFAULT 'no',
  `status` varchar(255) NOT NULL DEFAULT 'active',
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `hirings`
--

INSERT INTO `hirings` (`id`, `title`, `description`, `location`, `salary`, `company_id`, `tags`, `vacancies`, `deadline`, `category`, `type`, `experiance`, `education`, `gender`, `map`, `isfeatured`, `isBoosted`, `status`, `token`, `created_at`, `updated_at`) VALUES
(1, 'Senior Laravel Developer', 'Company Overview: We are a fast-growing tech company that specializes in creating innovative software solutions for businesses of all sizes. Our team is made up of passionate and creative individuals who are dedicated to delivering exceptional results to our clients.\n\nJob Description: We are currently seeking a Senior Laravel Developer to join our team. As a Senior Laravel Developer, you will be responsible for designing, developing, and maintaining complex web applications using Laravel, PHP, MySQL, and other related technologies. You will work closely with our project managers, designers, and other developers to create scalable and reliable software solutions that meet our clients\' needs.', '27', '1', 2, 'php,laravel,wordpress,mysql', '3', '2024-04-13', '1', '1', '1', 'Graduation', 'All Gender', NULL, 'yes', 'yes', 'Published', '642d8f475069c', '2023-04-04 09:27:14', '2023-05-18 20:31:43'),
(3, 'Junior MERN Stack Developer Edited', 'Company Overview: We are a growing tech company that specializes in creating innovative software solutions for businesses. Our team is made up of passionate and creative individuals who are dedicated to delivering exceptional results to our clients.\r\n\r\nJob Description: We are currently seeking a Junior MERN Stack Developer to join our team. As a Junior MERN Stack Developer, you will be responsible for developing web applications using MERN (MongoDB, Express, React, and Node.js) stack technologies. You will work closely with our project managers, designers, and other developers to create scalable and reliable software solutions that meet our clients\' needs.', '3', '1', 2, 'php,laravel', '4', '2024-04-30', '1', '1', '1', 'Master Degree', 'All Gender', NULL, 'yes', 'no', 'Published', '642d966d7c168', '2023-04-05 09:58:14', '2023-05-18 11:30:48'),
(5, 'UI/UX Designer', 'sjifgsd sdhfisod sidof', '8', '1', 1, 'php,laravel', '1', '2024-04-07', '1', '1', '1', 'Graduation', 'Male', NULL, 'yes', 'no', 'Published', '6431467be6849', '2023-04-08 05:04:46', '2023-05-18 11:30:48'),
(8, 'Executive Communications Manager - Speechwriter', 'We’re looking for a highly experienced Executive Communications Manager to support communications efforts for Meta leadership. The ideal candidate will have a diverse portfolio of written material that underscores their ability to convey complicated or nuanced topics in simple but elegant prose for a variety of audiences. This individual excels at working collaboratively with executives and colleagues alike and consistently delivers high-quality work even under extreme time constraints. We want someone who is deeply curious and can come up with thought-provoking ideas, turn beautiful copy on tight deadlines, and challenge us to be better.', '13', '2', 5, 'Facebook,Cloud,Datacenter', NULL, '2024-04-30', '8', '3', '1', 'P.H.D', 'All Gender', NULL, 'yes', 'no', 'Published', '643a28f658755', '2023-04-14 22:49:18', '2023-05-18 11:30:48'),
(6, 'Research Intern - Human-AI Experiences (HAX) Team', 'Research Internships at Microsoft provide a dynamic environment for research careers with a network of world-class research labs led by globally-recognized scientists and engineers. Our researchers and engineers pursue innovation in a range of scientific and technical disciplines to help solve complex challenges in diverse fields, including computing, healthcare, economics, and the environment. The Human-AI eXperiences (HAX) Team at Microsoft Research is an interdisciplinary and collaborative team that conducts fundamental research at the intersection of human-computer interaction (HCI), artificial intelligence (AI), and software engineering. Our mission is to empower the creation of responsible human-AI experiences to help ensure our AI technologies benefit people and society while mitigating potential harms. We believe that creating responsible human-AI experiences requires a holistic approach including technical advances that touch every aspect of AI-driven technologies including their interfaces, models, data, and underlying systems and socio-technical advances that facilitate the everyday work of AI creators.', '41', '2', 6, 'Microsoft,Cloud,Intern', NULL, '2024-11-27', '2', '1', '1', 'Graduation', 'All Gender', NULL, 'yes', 'no', 'Published', '643a254e7877b', '2023-04-14 22:39:35', '2023-05-18 11:30:48'),
(7, 'Data Center Technician I', 'In alignment with our Microsoft values, we are committed to cultivating an inclusive work environment for all employees to positively impact our culture every day and we need you as a Datacenter Technician (DCT).\r\n\r\nMicrosoft’s Cloud Operations & Innovation (CO+I) is the engine that powers our cloud services. As a CO+I DCT, you will perform a key role in delivering the core infrastructure and foundational technologies for Microsoft\'s online services including Bing, Office 365, Xbox, OneDrive, and the Microsoft Azure platform. As a group, CO+I is focused on the personal and professional development for all employees and offers trainings and growth opportunities including Career Rotation Programs, Diversity & Inclusion trainings and events, and professional certifications.', '8', '2', 6, 'Microsoft,Cloud,Datacenter', NULL, '2024-04-16', '4', '3', '1', 'P.H.D', 'All Gender', NULL, 'yes', 'no', 'Published', '643a2710bda99', '2023-04-14 22:43:23', '2023-05-18 11:30:48'),
(9, 'Summer: Barista: Starbucks', 'This position contributes to Starbucks success by providing legendary customer service to all customers. This job creates the Starbucks Experience for our customers by providing customers with prompt service, quality beverages and products, and maintaining a clean and comfortable store environment. Models and acts in accordance with Starbucks guiding principles.', '20', '2', 7, 'StarBucks,Barista,Employeement', NULL, '2024-04-30', '9', '3', '1', 'BPharma', 'All Gender', NULL, 'yes', 'no', 'Published', '643a294b0dbb5', '2023-04-14 22:53:33', '2023-05-18 11:30:48'),
(10, 'Field Sales Account Executive, Document Cloud', 'Changing the world through digital experiences is what Adobe’s all about. We give everyone—from emerging artists to global brands—everything they need to design and deliver exceptional digital experiences! We’re passionate about empowering people to create beautiful and powerful images, videos, and apps, and transform how companies interact with customers across every screen. We’re on a mission to hire the very best and are committed to creating exceptional employee experiences where everyone is respected and has access to equal opportunity. We realize that new ideas can come from everywhere in the organization, and we know the next big idea could be yours!', '18', '2', 8, 'Adobe,Photoshop,Cloud', NULL, '2024-04-30', '8', '3', '1', 'BPharma', 'All Gender', NULL, 'yes', 'no', 'Published', '643a2a4999981', '2023-04-14 22:56:45', '2023-05-18 11:30:48');

-- --------------------------------------------------------

--
-- Table structure for table `industries`
--

DROP TABLE IF EXISTS `industries`;
CREATE TABLE IF NOT EXISTS `industries` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `industries`
--

INSERT INTO `industries` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Information Technology', '2023-04-01 13:24:33', '2023-04-02 02:30:41'),
(3, 'Healthcare', '2023-04-02 02:30:49', '2023-04-02 02:30:49'),
(4, 'Aerospace and Defense', '2023-04-02 02:30:57', '2023-04-02 02:30:57'),
(5, 'Automotive', '2023-04-02 02:31:05', '2023-04-02 02:31:05'),
(6, 'Consumer Goods', '2023-04-02 02:31:17', '2023-04-02 02:31:17'),
(7, 'Hospitality and Tourism', '2023-04-02 02:31:24', '2023-04-02 02:31:24'),
(8, 'Banking and Finance', '2023-04-02 02:31:31', '2023-04-02 02:31:31'),
(9, 'Telecommunications', '2023-04-02 02:31:36', '2023-04-02 02:31:36'),
(10, 'Media and Communications', '2023-04-02 02:31:44', '2023-04-02 02:31:44'),
(11, 'Computer Software', '2023-04-02 02:32:03', '2023-04-02 02:32:03');

-- --------------------------------------------------------

--
-- Table structure for table `job_categories`
--

DROP TABLE IF EXISTS `job_categories`;
CREATE TABLE IF NOT EXISTS `job_categories` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `icon` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `job_categories`
--

INSERT INTO `job_categories` (`id`, `name`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Software Company', 'lni lni-laptop-phone fs-lg theme-cl', '2023-03-04 04:00:49', '2023-03-04 05:54:22'),
(2, 'Cloud Computing', 'lni lni-cloud fs-lg theme-cl', '2023-03-04 04:17:10', '2023-03-04 04:17:10'),
(3, 'Logistics/Shipping', 'lni lni-shopify fs-lg theme-cl', '2023-03-04 04:18:03', '2023-03-04 04:18:03'),
(4, 'Engineering Services', 'lni lni-construction fs-lg theme-cl', '2023-03-04 04:18:34', '2023-03-04 04:18:34'),
(5, 'Telecom/Internet ', 'lni lni-phone-set fs-lg theme-cl', '2023-03-04 04:18:58', '2023-03-04 04:18:58'),
(6, 'Healthcare/Pharma', 'lni lni-sthethoscope fs-lg theme-cl', '2023-03-04 04:19:45', '2023-03-04 04:19:45'),
(7, 'Finance/Insurance', 'lni lni-money-protection fs-lg theme-cl', '2023-03-04 04:20:17', '2023-03-04 04:20:17'),
(8, 'Product Software', 'lni lni-layout fs-lg theme-cl', '2023-03-04 04:20:36', '2023-03-04 05:53:42'),
(9, 'Diversified/Retail', 'lni lni-briefcase fs-lg theme-cl', '2023-03-04 04:20:59', '2023-03-04 04:20:59'),
(10, 'Education', 'lni lni-graduation fs-lg theme-cl', '2023-03-04 04:21:18', '2023-03-04 04:21:18'),
(11, 'Banking/BPO', 'lni lni-mastercard fs-lg theme-cl', '2023-03-04 04:22:02', '2023-03-04 04:22:02'),
(15, 'Printing/Packaging', 'lni lni-gallery', '2023-03-05 03:40:36', '2023-03-05 08:08:02');

-- --------------------------------------------------------

--
-- Table structure for table `job_types`
--

DROP TABLE IF EXISTS `job_types`;
CREATE TABLE IF NOT EXISTS `job_types` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `job_types`
--

INSERT INTO `job_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Internship', '2023-03-09 13:01:47', '2023-03-09 13:02:51'),
(3, 'Full Time', '2023-04-06 14:03:56', '2023-04-06 14:03:56'),
(4, 'Remote', '2023-04-06 14:04:06', '2023-04-06 14:04:06'),
(5, 'Part Time', '2023-04-06 14:04:12', '2023-04-06 14:04:12'),
(6, 'Contract', '2023-04-06 14:04:18', '2023-04-06 14:04:18');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

DROP TABLE IF EXISTS `locations`;
CREATE TABLE IF NOT EXISTS `locations` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=83 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `name`, `created_at`, `updated_at`) VALUES
(6, 'Achham, Nepal', NULL, NULL),
(3, 'Birtamode, Nepal', '2023-03-09 12:50:15', '2023-03-09 12:50:15'),
(8, 'Baglung, Nepal', NULL, NULL),
(7, 'Arghakhanchi, Nepal', NULL, NULL),
(9, 'Baitadi, Nepal', NULL, NULL),
(10, 'Bajhang, Nepal', NULL, NULL),
(11, 'Bajura, Nepal', NULL, NULL),
(12, 'Banke, Nepal', NULL, NULL),
(13, 'Bara, Nepal', NULL, NULL),
(14, 'Bardiya, Nepal', NULL, NULL),
(15, 'Bhaktapur, Nepal', NULL, NULL),
(16, 'Bhojpur, Nepal', NULL, NULL),
(17, 'Chitwan, Nepal', NULL, NULL),
(18, 'Dadeldhura, Nepal', NULL, NULL),
(19, 'Dailekh, Nepal', NULL, NULL),
(20, 'Dang, Nepal', NULL, NULL),
(21, 'Darchula, Nepal', NULL, NULL),
(22, 'Dhading, Nepal', NULL, NULL),
(23, 'Dhankuta, Nepal', NULL, NULL),
(24, 'Dhanusa, Nepal', NULL, NULL),
(25, 'Dholkha, Nepal', NULL, NULL),
(26, 'Dolpa, Nepal', NULL, NULL),
(27, 'Doti, Nepal', NULL, NULL),
(28, 'Eastern Rukum, Nepal', NULL, NULL),
(29, 'Gorkha, Nepal', NULL, NULL),
(30, 'Gulmi, Nepal', NULL, NULL),
(31, 'Humla, Nepal', NULL, NULL),
(32, 'Ilam, Nepal', NULL, NULL),
(33, 'Jajarkot, Nepal', NULL, NULL),
(34, 'Jhapa, Nepal', NULL, NULL),
(35, 'Jumla, Nepal', NULL, NULL),
(36, 'Kailali, Nepal', NULL, NULL),
(37, 'Kalikot, Nepal', NULL, NULL),
(38, 'Kanchanpur, Nepal', NULL, NULL),
(39, 'Kapilvastu, Nepal', NULL, NULL),
(40, 'Kaski, Nepal', NULL, NULL),
(41, 'Kathmandu, Nepal', NULL, NULL),
(42, 'Kavrepalanchok, Nepal', NULL, NULL),
(43, 'Khotang, Nepal', NULL, NULL),
(44, 'Lalitpur, Nepal', NULL, NULL),
(45, 'Lamjung, Nepal', NULL, NULL),
(46, 'Mahottari, Nepal', NULL, NULL),
(47, 'Makwanpur, Nepal', NULL, NULL),
(48, 'Manang, Nepal', NULL, NULL),
(49, 'Morang, Nepal', NULL, NULL),
(50, 'Mugu, Nepal', NULL, NULL),
(51, 'Mustang, Nepal', NULL, NULL),
(52, 'Myagdi, Nepal', NULL, NULL),
(53, 'Nawalparasi East, Nepal', NULL, NULL),
(54, 'Nawalparasi West, Nepal', NULL, NULL),
(55, 'Nuwakot, Nepal', NULL, NULL),
(56, 'Okhaldhunga, Nepal', NULL, NULL),
(57, 'Palpa, Nepal', NULL, NULL),
(58, 'Panchthar, Nepal', NULL, NULL),
(59, 'Parbat, Nepal', NULL, NULL),
(60, 'Parsa, Nepal', NULL, NULL),
(61, 'Pyuthan, Nepal', NULL, NULL),
(62, 'Ramechhap, Nepal', NULL, NULL),
(63, 'Rasuwa, Nepal', NULL, NULL),
(64, 'Rautahat, Nepal', NULL, NULL),
(65, 'Rolpa, Nepal', NULL, NULL),
(66, 'Rupandehi, Nepal', NULL, NULL),
(67, 'Salyan, Nepal', NULL, NULL),
(68, 'Sankhuwasabha, Nepal', NULL, NULL),
(69, 'Saptari, Nepal', NULL, NULL),
(70, 'Sarlahi, Nepal', NULL, NULL),
(71, 'Sindhuli, Nepal', NULL, NULL),
(72, 'Sindhupalchok, Nepal', NULL, NULL),
(73, 'Siraha, Nepal', NULL, NULL),
(74, 'Solukhumbu, Nepal', NULL, NULL),
(75, 'Sunsari, Nepal', NULL, NULL),
(76, 'Surkhet, Nepal', NULL, NULL),
(77, 'Syangja, Nepal', NULL, NULL),
(78, 'Tanahu, Nepal', NULL, NULL),
(79, 'Taplejung, Nepal', NULL, NULL),
(80, 'Terhathum, Nepal', NULL, NULL),
(81, 'Udayapur, Nepal', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `conversation_id` bigint UNSIGNED NOT NULL,
  `sender_id` bigint UNSIGNED NOT NULL,
  `recipient_id` bigint UNSIGNED NOT NULL,
  `is_read` tinyint(1) DEFAULT '0',
  `body` text,
  `type` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `messages_conversation_id_foreign` (`conversation_id`),
  KEY `messages_sender_id_foreign` (`sender_id`),
  KEY `messages_recipient_id_foreign` (`recipient_id`)
) ENGINE=MyISAM AUTO_INCREMENT=80 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `conversation_id`, `sender_id`, `recipient_id`, `is_read`, `body`, `type`, `created_at`, `updated_at`) VALUES
(2, 3, 2, 1, 0, 'Hello World!!!', NULL, '2023-04-10 14:00:58', '2023-04-10 14:00:58'),
(3, 4, 2, 4, 0, 'This is the message', NULL, '2023-04-10 14:48:03', '2023-04-10 14:48:03'),
(4, 5, 2, 5, 0, 'Okay Now I Have Messages', NULL, '2023-04-10 14:48:22', '2023-04-10 14:48:22'),
(5, 3, 2, 1, 0, 'Hi', NULL, '2023-04-11 12:16:45', '2023-04-11 12:16:45'),
(6, 3, 2, 1, 0, 'Yogesh is bhadwa.', NULL, '2023-04-11 12:17:05', '2023-04-11 12:17:05'),
(7, 4, 2, 4, 0, 'I\'m sending a new message', NULL, '2023-04-11 12:47:27', '2023-04-11 12:47:27'),
(8, 4, 2, 4, 0, 'I am sending a message', NULL, '2023-04-11 12:47:45', '2023-04-11 12:47:45'),
(9, 4, 2, 4, 0, 'I am sending a messageI am sending a messageI am sending a message', NULL, '2023-04-11 12:53:43', '2023-04-11 12:53:43'),
(10, 4, 2, 4, 0, 'Hello Raymon?', NULL, '2023-04-11 12:56:07', '2023-04-11 12:56:07'),
(11, 5, 2, 5, 0, 'Hello? Gaurav?\n', NULL, '2023-04-11 12:58:04', '2023-04-11 12:58:04'),
(12, 5, 2, 5, 0, 'hi?', NULL, '2023-04-11 12:58:52', '2023-04-11 12:58:52'),
(13, 4, 2, 4, 0, 'Hello Raymon?', NULL, '2023-04-11 13:06:23', '2023-04-11 13:06:23'),
(14, 4, 2, 4, 0, 'Hello Raymon?', NULL, '2023-04-11 13:06:25', '2023-04-11 13:06:25'),
(15, 4, 2, 4, 0, 'Hello Raymon?', NULL, '2023-04-11 13:06:27', '2023-04-11 13:06:27'),
(16, 4, 2, 4, 0, 'Hello Raymon?', NULL, '2023-04-11 13:06:31', '2023-04-11 13:06:31'),
(17, 4, 2, 4, 0, 'Hello Raymon?', NULL, '2023-04-11 13:06:33', '2023-04-11 13:06:33'),
(18, 4, 2, 4, 0, 'something', NULL, '2023-04-11 13:15:24', '2023-04-11 13:15:24'),
(19, 4, 2, 4, 0, 'is nothing', NULL, '2023-04-11 13:18:47', '2023-04-11 13:18:47'),
(20, 4, 2, 4, 0, 'and', NULL, '2023-04-11 13:19:08', '2023-04-11 13:19:08'),
(21, 4, 2, 4, 0, 'Okay', NULL, '2023-04-11 13:19:27', '2023-04-11 13:19:27'),
(22, 4, 2, 4, 0, 'How are you?', NULL, '2023-04-11 13:22:49', '2023-04-11 13:22:49'),
(23, 4, 2, 4, 0, 'hi', NULL, '2023-04-11 13:25:42', '2023-04-11 13:25:42'),
(24, 4, 2, 4, 0, 'ok', NULL, '2023-04-11 13:25:52', '2023-04-11 13:25:52'),
(25, 4, 2, 4, 0, 'Hi?', NULL, '2023-04-11 13:45:24', '2023-04-11 13:45:24'),
(26, 4, 2, 4, 0, 'Hi?', NULL, '2023-04-11 13:45:34', '2023-04-11 13:45:34'),
(27, 4, 2, 4, 0, 'Hello?\n', NULL, '2023-04-11 14:15:31', '2023-04-11 14:15:31'),
(28, 3, 2, 1, 0, 'hi?', NULL, '2023-04-11 14:41:45', '2023-04-11 14:41:45'),
(29, 3, 1, 2, 0, 'Bhadwe', NULL, '2023-04-11 14:41:58', '2023-04-11 14:41:58'),
(30, 3, 2, 1, 0, 'No', NULL, '2023-04-11 14:42:50', '2023-04-11 14:42:50'),
(31, 3, 1, 2, 0, 'Yes You are', NULL, '2023-04-11 14:43:02', '2023-04-11 14:43:02'),
(32, 3, 2, 1, 0, 'Hi?', NULL, '2023-04-11 15:27:05', '2023-04-11 15:27:05'),
(33, 3, 2, 1, 0, 'ok', NULL, '2023-04-11 15:28:10', '2023-04-11 15:28:10'),
(34, 3, 2, 1, 0, 'umm', NULL, '2023-04-11 15:29:23', '2023-04-11 15:29:23'),
(35, 3, 2, 1, 0, 'Hi?', NULL, '2023-04-11 15:32:45', '2023-04-11 15:32:45'),
(36, 3, 2, 1, 0, 'testing', NULL, '2023-04-11 15:35:53', '2023-04-11 15:35:53'),
(37, 3, 2, 1, 0, 'oe', NULL, '2023-04-11 15:39:16', '2023-04-11 15:39:16'),
(38, 3, 2, 1, 0, 'hmm', NULL, '2023-04-11 15:44:13', '2023-04-11 15:44:13'),
(39, 3, 2, 1, 0, 'umm', NULL, '2023-04-11 15:44:38', '2023-04-11 15:44:38'),
(40, 3, 2, 1, 0, 'Hi Yogesh?', NULL, '2023-04-12 00:51:59', '2023-04-12 00:51:59'),
(41, 3, 1, 2, 0, 'Hello', NULL, '2023-04-12 00:52:14', '2023-04-12 00:52:14'),
(42, 3, 2, 1, 0, 'K xa khabar.', NULL, '2023-04-12 00:52:28', '2023-04-12 00:52:28'),
(43, 3, 2, 1, 0, 'thikcha nigger', NULL, '2023-04-12 08:21:28', '2023-04-12 08:21:28'),
(44, 3, 1, 2, 0, 'okay\n', NULL, '2023-04-12 08:22:08', '2023-04-12 08:22:08'),
(45, 3, 2, 1, 0, 'Hi?\n', NULL, '2023-04-14 02:43:29', '2023-04-14 02:43:29'),
(46, 3, 2, 1, 0, 'hi', NULL, '2023-04-14 02:46:46', '2023-04-14 02:46:46'),
(47, 3, 2, 1, 0, 'hi', NULL, '2023-04-14 02:48:31', '2023-04-14 02:48:31'),
(48, 3, 2, 1, 0, 'ok', NULL, '2023-04-14 02:49:25', '2023-04-14 02:49:25'),
(49, 3, 2, 1, 0, 'ok', NULL, '2023-04-14 02:49:58', '2023-04-14 02:49:58'),
(50, 3, 2, 1, 0, 'test', NULL, '2023-04-14 02:51:02', '2023-04-14 02:51:02'),
(51, 3, 2, 1, 0, 'hi?', NULL, '2023-04-14 02:56:29', '2023-04-14 02:56:29'),
(52, 3, 2, 1, 0, 'hu.', NULL, '2023-04-14 03:00:28', '2023-04-14 03:00:28'),
(53, 3, 2, 1, 0, 'ji', NULL, '2023-04-14 03:06:18', '2023-04-14 03:06:18'),
(54, 5, 2, 5, 0, 'hi?', NULL, '2023-04-14 03:20:18', '2023-04-14 03:20:18'),
(55, 5, 2, 5, 0, 'Hi Gaurav?', NULL, '2023-04-14 03:28:28', '2023-04-14 03:28:28'),
(56, 5, 2, 5, 0, 'd', NULL, '2023-04-14 03:29:00', '2023-04-14 03:29:00'),
(57, 5, 2, 5, 0, 's', NULL, '2023-04-14 03:29:19', '2023-04-14 03:29:19'),
(58, 5, 2, 5, 0, 's', NULL, '2023-04-14 03:34:11', '2023-04-14 03:34:11'),
(59, 5, 2, 5, 0, 'a', NULL, '2023-04-14 03:36:42', '2023-04-14 03:36:42'),
(60, 5, 2, 5, 0, 'b', NULL, '2023-04-14 03:36:58', '2023-04-14 03:36:58'),
(61, 3, 1, 2, 0, 'Hello?', NULL, '2023-04-14 03:51:13', '2023-04-14 03:51:13'),
(62, 3, 2, 1, 0, 'Hi?', NULL, '2023-04-14 03:52:11', '2023-04-14 03:52:11'),
(63, 3, 1, 2, 0, 'hi', NULL, '2023-04-14 03:53:02', '2023-04-14 03:53:02'),
(64, 3, 2, 1, 0, 'Hello?', NULL, '2023-04-14 03:54:42', '2023-04-14 03:54:42'),
(65, 3, 2, 1, 0, 'hi.', NULL, '2023-04-14 03:55:33', '2023-04-14 03:55:33'),
(66, 3, 1, 2, 0, 'hi', NULL, '2023-04-14 03:55:46', '2023-04-14 03:55:46'),
(67, 3, 1, 2, 0, 'hi?\n', NULL, '2023-04-14 03:59:12', '2023-04-14 03:59:12'),
(68, 3, 2, 1, 0, 'ok', NULL, '2023-04-14 03:59:23', '2023-04-14 03:59:23'),
(69, 3, 2, 1, 0, 'Okay, I will be waiting.', NULL, '2023-04-14 04:00:28', '2023-04-14 04:00:28'),
(70, 3, 1, 2, 0, 'Sure, Thanks.', NULL, '2023-04-14 04:00:52', '2023-04-14 04:00:52'),
(71, 3, 1, 2, 0, 'Hi Yogesh?', NULL, '2023-04-23 12:00:05', '2023-04-23 12:00:05'),
(72, 3, 2, 1, 0, 'Hello, Nujan.', NULL, '2023-04-23 12:00:19', '2023-04-23 12:00:19'),
(73, 3, 2, 1, 0, 'How are you doing?', NULL, '2023-04-23 12:00:33', '2023-04-23 12:00:33'),
(74, 3, 1, 2, 0, 'I\'m Fine.', NULL, '2023-04-23 12:00:43', '2023-04-23 12:00:43'),
(75, 3, 2, 1, 0, 'It\'s good to hear that.', NULL, '2023-04-23 12:00:54', '2023-04-23 12:00:54'),
(76, 3, 1, 2, 0, 'Okay Bye.', NULL, '2023-04-23 12:00:59', '2023-04-23 12:00:59'),
(77, 3, 2, 1, 0, 'Hi, Nujan.', NULL, '2023-05-04 04:25:48', '2023-05-04 04:25:48'),
(78, 3, 1, 2, 0, 'Hello Yogesh?', NULL, '2023-05-04 04:25:57', '2023-05-04 04:25:57'),
(79, 3, 2, 1, 0, 'hi\n', NULL, '2023-05-11 09:42:45', '2023-05-11 09:42:45');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_02_25_055937_create_admin_table', 1),
(6, '2023_03_02_170921_create_page_home_items', 2),
(7, '2023_03_04_080134_create_job_category_table', 3),
(8, '2023_03_04_124055_add_new_column_to_existing_table', 4),
(9, '2023_03_04_155930_create_blog_posts_table', 5),
(10, '2023_03_06_102644_create_package_table', 6),
(11, '2023_03_08_102534_create_employers_table', 7),
(12, '2023_03_09_073626_create_employees_table', 8),
(14, '2023_03_09_180846_create_locations_table', 9),
(15, '2023_03_09_183709_create_job_types_table', 10),
(16, '2023_03_09_185520_create_experiances_table', 11),
(17, '2023_03_10_133137_create_salary_range_table', 12),
(18, '2023_04_01_151829_create_boost_orders_table', 13),
(19, '2023_04_01_164941_create_employer_locations_table', 14),
(20, '2023_04_01_175711_create_industries_table', 15),
(21, '2023_04_02_042826_create_employer_sizes_table', 16),
(22, '2023_04_04_175734_create_requirements_table', 17),
(23, '2023_04_04_164949_create_hirings_table', 18),
(24, '2023_04_07_060800_create_employee_applications_table', 19),
(26, '2023_04_10_123418_create_conversations_table', 20),
(27, '2023_04_10_124054_create_messages_table', 20),
(28, '2023_04_14_125125_create_employee_bookmarks_table', 21),
(29, '2023_04_15_155355_create_resume_educations_table', 22),
(30, '2023_04_15_155436_create_resume_experiences_table', 22),
(31, '2023_04_15_171646_create_resume_skills_table', 22),
(32, '2023_05_01_192310_create_activity_logs_table', 23),
(33, '2023_05_06_180534_create_user_testimonials_table', 24),
(34, '2023_05_07_184125_create_employer_awards_table', 25),
(35, '2023_05_17_142229_create_top_bars_table', 26),
(36, '2023_05_17_163925_create_footer_contents_table', 27);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

DROP TABLE IF EXISTS `packages`;
CREATE TABLE IF NOT EXISTS `packages` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` int NOT NULL,
  `duration` int NOT NULL,
  `duration_type` varchar(255) NOT NULL,
  `jobs_count` int NOT NULL,
  `featured_count` int NOT NULL,
  `photos_count` int NOT NULL,
  `videos_count` int NOT NULL,
  `button` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `name`, `price`, `duration`, `duration_type`, `jobs_count`, `featured_count`, `photos_count`, `videos_count`, `button`, `created_at`, `updated_at`) VALUES
(1, 'Starter', 10, 5, 'Days', 10, 2, 2, 2, NULL, '2023-04-01 05:34:20', '2023-04-01 09:22:59');

-- --------------------------------------------------------

--
-- Table structure for table `page_home_items`
--

DROP TABLE IF EXISTS `page_home_items`;
CREATE TABLE IF NOT EXISTS `page_home_items` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `heading` text NOT NULL,
  `description` text,
  `image` text NOT NULL,
  `job_placeholder` text NOT NULL,
  `job_button` text NOT NULL,
  `location_placeholder` text NOT NULL,
  `category_placeholder` text NOT NULL,
  `job_category_heading` text NOT NULL,
  `job_category_description` text,
  `job_category_status` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `page_home_items`
--

INSERT INTO `page_home_items` (`id`, `created_at`, `updated_at`, `heading`, `description`, `image`, `job_placeholder`, `job_button`, `location_placeholder`, `category_placeholder`, `job_category_heading`, `job_category_description`, `job_category_status`) VALUES
(1, NULL, '2023-05-04 04:17:21', 'Your <span class=\"theme-cl\">Amazing Career</span> Starts Here', 'Discover your dream job in Nepal with our extensive database of over thousands of job listings. This could be the start of something great for your career.', 'homepage_1682926346.png', 'Job Title, Keyword or Company', 'Get Started', 'Select Location', 'Select Category', 'Browse Top Categories', 'Popular Categories', 'Show');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `slug` text NOT NULL,
  `content` text NOT NULL,
  `status` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci,
  `image` text NOT NULL,
  `view_count` text NOT NULL,
  `category` text,
  `tags` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `content`, `status`, `image`, `view_count`, `category`, `tags`, `created_at`, `updated_at`) VALUES
(2, 'The Benefits of Learning a New Language', 'the-benefits-of-learning-a-new-language', '<p>Learning a new language is a valuable skill that can have numerous benefits. Whether you are learning a language for personal or professional reasons, the advantages are many. Here are some of the benefits of learning a new language:</p>\n<ol>\n<li>\n<p>Improved cognitive function: Learning a new language can improve cognitive function, including memory, problem-solving skills, and attention. This is because learning a new language requires your brain to work in new and different ways, which can improve overall brain function.</p>\n</li>\n<li>\n<p>Increased cultural understanding: When you learn a new language, you gain a deeper understanding of the culture and people who speak that language. This can help you to communicate more effectively with people from different backgrounds and to appreciate different cultures.</p>\n</li>\n<li>\n<p>Career opportunities: Learning a new language can open up new career opportunities, especially in fields such as international business, diplomacy, and tourism. Many employers value employees who are proficient in multiple languages and may offer higher salaries or promotions for those with language skills.</p>\n</li>\n<li>\n<p>Personal growth: Learning a new language can be a challenging and rewarding experience that can help you to grow personally. It can give you a sense of accomplishment and confidence, and can also help you to meet new people and experience new things.</p>\n</li>\n<li>\n<p>Travel and exploration: Knowing a new language can make travel and exploration more enjoyable and rewarding. It can help you to communicate with locals, understand signs and menus, and get more out of your travel experiences.</p>\n</li>\n</ol>\n<p>In conclusion, learning a new language can have numerous benefits, including improved cognitive function, increased cultural understanding, career opportunities, personal growth, and travel and exploration. So if you\'ve ever thought about learning a new language, now is the time to start!</p>', 'Published', 'blogPost1678392446.png', '4', 'Category 3', 'Information', '2023-03-09 14:22:26', '2023-04-07 15:09:17'),
(4, 'The Benefits of Learning a New Language 3', 'dummy-blog-post-1', '<p>Learning a new language is a valuable skill that can have numerous benefits. Whether you are learning a language for personal or professional reasons, the advantages are many. Here are some of the benefits of learning a new language:</p>\r\n<ol>\r\n<li>\r\n<p>Improved cognitive function: Learning a new language can improve cognitive function, including memory, problem-solving skills, and attention. This is because learning a new language requires your brain to work in new and different ways, which can improve overall brain function.</p>\r\n</li>\r\n<li>\r\n<p>Increased cultural understanding: When you learn a new language, you gain a deeper understanding of the culture and people who speak that language. This can help you to communicate more effectively with people from different backgrounds and to appreciate different cultures.</p>\r\n</li>\r\n<li>\r\n<p>Career opportunities: Learning a new language can open up new career opportunities, especially in fields such as international business, diplomacy, and tourism. Many employers value employees who are proficient in multiple languages and may offer higher salaries or promotions for those with language skills.</p>\r\n</li>\r\n<li>\r\n<p>Personal growth: Learning a new language can be a challenging and rewarding experience that can help you to grow personally. It can give you a sense of accomplishment and confidence, and can also help you to meet new people and experience new things.</p>\r\n</li>\r\n<li>\r\n<p>Travel and exploration: Knowing a new language can make travel and exploration more enjoyable and rewarding. It can help you to communicate with locals, understand signs and menus, and get more out of your travel experiences.</p>\r\n</li>\r\n</ol>\r\n<p>In conclusion, learning a new language can have numerous benefits, including improved cognitive function, increased cultural understanding, career opportunities, personal growth, and travel and exploration. So if you\'ve ever thought about learning a new language, now is the time to start!</p>', 'Draft', 'blogPost1678392854.png', '66', 'Category 1', 'Information', '2023-03-09 14:29:14', '2023-05-08 13:21:07'),
(3, 'The Benefits of Learning a New Language 2', 'climbing-the-mountains', '<p>Learning a new language is a valuable skill that can have numerous benefits. Whether you are learning a language for personal or professional reasons, the advantages are many. Here are some of the benefits of learning a new language:</p>\r\n<ol>\r\n<li>\r\n<p>Improved cognitive function: Learning a new language can improve cognitive function, including memory, problem-solving skills, and attention. This is because learning a new language requires your brain to work in new and different ways, which can improve overall brain function.</p>\r\n</li>\r\n<li>\r\n<p>Increased cultural understanding: When you learn a new language, you gain a deeper understanding of the culture and people who speak that language. This can help you to communicate more effectively with people from different backgrounds and to appreciate different cultures.</p>\r\n</li>\r\n<li>\r\n<p>Career opportunities: Learning a new language can open up new career opportunities, especially in fields such as international business, diplomacy, and tourism. Many employers value employees who are proficient in multiple languages and may offer higher salaries or promotions for those with language skills.</p>\r\n</li>\r\n<li>\r\n<p>Personal growth: Learning a new language can be a challenging and rewarding experience that can help you to grow personally. It can give you a sense of accomplishment and confidence, and can also help you to meet new people and experience new things.</p>\r\n</li>\r\n<li>\r\n<p>Travel and exploration: Knowing a new language can make travel and exploration more enjoyable and rewarding. It can help you to communicate with locals, understand signs and menus, and get more out of your travel experiences.</p>\r\n</li>\r\n</ol>\r\n<p>In conclusion, learning a new language can have numerous benefits, including improved cognitive function, increased cultural understanding, career opportunities, personal growth, and travel and exploration. So if you\'ve ever thought about learning a new language, now is the time to start!</p>', 'Published', 'blogPost1678392742.png', '9', 'Category 2', 'tag', '2023-03-09 14:27:22', '2023-05-16 00:56:36');

-- --------------------------------------------------------

--
-- Table structure for table `requirements`
--

DROP TABLE IF EXISTS `requirements`;
CREATE TABLE IF NOT EXISTS `requirements` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `requirements` text NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=116 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `requirements`
--

INSERT INTO `requirements` (`id`, `requirements`, `token`, `created_at`, `updated_at`) VALUES
(85, 'Improving human interaction with AI (e.g., with large language models). For example, through human-centered innovations to ML models, training, and evaluation procedures (e.g., metrics), user interfaces, user training procedures, etc.', '643a254e7877b', '2023-04-14 22:39:35', '2023-04-14 22:39:35'),
(83, 'Good communication', '6431467be6849', '2023-04-08 05:04:46', '2023-04-08 05:04:46'),
(84, 'Understanding, evaluating, and testing human-AI teams.', '643a254e7877b', '2023-04-14 22:39:35', '2023-04-14 22:39:35'),
(82, '3 years of experience', '6431467be6849', '2023-04-08 05:04:46', '2023-04-08 05:04:46'),
(81, 'Bachelor\'s degree in Computer Science or a related field.', '6431467be6849', '2023-04-08 05:04:46', '2023-04-08 05:04:46'),
(78, 'Bachelor\'s degree in Computer Science or a related field.', '642eb6cb4cc04', '2023-04-07 10:52:56', '2023-04-07 10:52:56'),
(80, 'Bachelor\'s degree in Computer Science or a related field. Nujan', '642d8f475069c', '2023-04-07 15:26:38', '2023-04-07 15:26:38'),
(77, 'Bachelor\'s degree in Computer Science or a related field.s', '642eb6cb4cc04', '2023-04-07 10:52:56', '2023-04-07 10:52:56'),
(76, 'Bachelor\'s degree in Computer Science or a related field.', '642eb6cb4cc04', '2023-04-07 10:52:56', '2023-04-07 10:52:56'),
(75, 'Bachelor\'s degree in Computer Science or a related field.', '642d966d7c168', '2023-04-06 08:39:46', '2023-04-06 08:39:46'),
(74, 'Bachelor\'s degree in Computer Science or a related field.', '642d966d7c168', '2023-04-06 08:39:46', '2023-04-06 08:39:46'),
(73, 'Bachelor\'s degree in Computer Science or a related field.', '642d966d7c168', '2023-04-06 08:39:46', '2023-04-06 08:39:46'),
(79, 'Bachelor\'s degree in Computer Science or a related field. Ashim', '642d8f475069c', '2023-04-07 15:26:38', '2023-04-07 15:26:38'),
(68, 'Bachelor\'s degree in Computer Science or a related field.', '642d8f475069c', '2023-04-06 08:39:14', '2023-04-06 08:39:14'),
(69, 'Bachelor\'s degree in Computer Science or a related field.', '642d8f475069c', '2023-04-06 08:39:14', '2023-04-06 08:39:14'),
(70, 'Bachelor\'s degree in Computer Science or a related field.', '642d8f475069c', '2023-04-06 08:39:14', '2023-04-06 08:39:14'),
(71, 'Bachelor\'s degree in Computer Science or a related field.', '642d966d7c168', '2023-04-06 08:39:46', '2023-04-06 08:39:46'),
(72, 'Bachelor\'s degree in Computer Science or a related field.', '642d966d7c168', '2023-04-06 08:39:46', '2023-04-06 08:39:46'),
(66, 'Bachelor\'s degree in Computer Science or a related field.', '642d8f475069c', '2023-04-06 08:39:14', '2023-04-06 08:39:14'),
(86, 'Prototyping, simulating, and testing AI systems with humans-in-the-loop.', '643a254e7877b', '2023-04-14 22:39:35', '2023-04-14 22:39:35'),
(87, 'Novel theories for human-AI interaction, e.g., defining and establishing appropriate levels of human trust and reliance on AI systems.', '643a254e7877b', '2023-04-14 22:39:35', '2023-04-14 22:39:35'),
(88, 'Novel applications of AI (e.g., LLMs) for augmenting human performance.', '643a254e7877b', '2023-04-14 22:39:35', '2023-04-14 22:39:35'),
(89, 'Novel mechanisms for improving human-AI interaction, e.g., by enabling meaningful human oversight, control of, and collaboration with AI systems.', '643a254e7877b', '2023-04-14 22:39:35', '2023-04-14 22:39:35'),
(90, 'Developing interactive tools for responsible data collection, model building, and analyses of AI or LLMs.', '643a254e7877b', '2023-04-14 22:39:35', '2023-04-14 22:39:35'),
(91, 'Studying and addressing technical or sociotechnical issues related to the creation of responsible AI systems.', '643a254e7877b', '2023-04-14 22:39:35', '2023-04-14 22:39:35'),
(92, 'Receives guidance and supervision to develop an understanding of standard processes and procedures for preparing, installing, performing diagnostics, troubleshooting, replacing, and/or decommissioning equipment.', '643a2710bda99', '2023-04-14 22:43:23', '2023-04-14 22:43:23'),
(93, 'Asks questions when they do not have required information.', '643a2710bda99', '2023-04-14 22:43:23', '2023-04-14 22:43:23'),
(94, 'Complies with Data Center Services (DCS) business unit and service-level policies, procedures, and deadlines with guidance from other technicians.', '643a2710bda99', '2023-04-14 22:43:23', '2023-04-14 22:43:23'),
(95, 'Completes assigned tickets efficiently and in alignment with Key Performance Indicators (KPIs) while meeting established Service Level Agreements (SLAs) with guidance from other technicians.', '643a2710bda99', '2023-04-14 22:43:23', '2023-04-14 22:43:23'),
(96, 'Work cross-functionally internally and externally to outline and develop impactful speeches, keynote presentations, talking points, social media posts, narratives, opinion pieces and other written materials. Internal cross-functional teams include the Communications, Policy, Marketing, Sales, Product, Platform, and Monetization teams on an international scale. Externally, this includes working with agencies, conference organizers, industry associations and with clients on tailored engagements', '643a28f658755', '2023-04-14 22:49:18', '2023-04-14 22:49:18'),
(97, 'Partner with a designer to help develop complementary visuals and videos for speaking engagements and meetings', '643a28f658755', '2023-04-14 22:49:18', '2023-04-14 22:49:18'),
(98, 'Research and package content from internal and external resources to develop insightful and engaging written pieces that fit the authentic style of leadership', '643a28f658755', '2023-04-14 22:49:18', '2023-04-14 22:49:18'),
(99, 'Research and package content from internal and external resources to develop insightful and engaging written pieces that fit the authentic style of leadership', '643a28f658755', '2023-04-14 22:49:18', '2023-04-14 22:49:18'),
(100, 'Work closely with the communications team to identify new opportunities for executives and to maximize their impact', '643a28f658755', '2023-04-14 22:49:18', '2023-04-14 22:49:18'),
(101, 'Oversee the development of social media content and draft posts', '643a28f658755', '2023-04-14 22:49:18', '2023-04-14 22:49:18'),
(102, 'Acts with integrity, honesty and knowledge that promote the culture, values and mission of Starbucks.', '643a294b0dbb5', '2023-04-14 22:53:33', '2023-04-14 22:53:33'),
(103, 'Maintains a calm demeanor during periods of high volume or unusual events to keep store operating to standard and to set a positive example for the shift team.', '643a294b0dbb5', '2023-04-14 22:53:33', '2023-04-14 22:53:33'),
(104, 'Anticipates customer and store needs by constantly evaluating environment and customers for cues. Communicates information to manager so that the team can respond as necessary to create the Third Place environment during each shift.', '643a294b0dbb5', '2023-04-14 22:53:33', '2023-04-14 22:53:33'),
(105, 'Assists with new partner training by positively reinforcing successful performance and giving respectful and encouraging coaching as needed.', '643a294b0dbb5', '2023-04-14 22:53:33', '2023-04-14 22:53:33'),
(106, 'Contributes to positive team environment by recognizing alarms or changes in partner morale and performance and communicating them to the store manager.', '643a294b0dbb5', '2023-04-14 22:53:33', '2023-04-14 22:53:33'),
(107, 'Delivers legendary customer service to all customers by acting with a customer comes first attitude and connecting with the customer. Discovers and responds to customer needs.', '643a294b0dbb5', '2023-04-14 22:53:33', '2023-04-14 22:53:33'),
(108, 'Assists with overall restroom cleanliness and duties when needed', '643a294b0dbb5', '2023-04-14 22:53:33', '2023-04-14 22:53:33'),
(109, 'Drive consistent pipeline generation via outbound activity via customer outreach and contract follow-up', '643a2a4999981', '2023-04-14 22:56:45', '2023-04-14 22:56:45'),
(110, 'Deal qualification & contract negotiation passionate about solution selling and adding customer value', '643a2a4999981', '2023-04-14 22:56:45', '2023-04-14 22:56:45'),
(111, 'Deal qualification & contract negotiation passionate about solution selling and adding customer value', '643a2a4999981', '2023-04-14 22:56:45', '2023-04-14 22:56:45'),
(112, 'Help customers migrate to the Enterprise version of the software from older licensing programs', '643a2a4999981', '2023-04-14 22:56:45', '2023-04-14 22:56:45'),
(113, 'Grow the customer’s use of Adobe’s products and annual spending with Adobe', '643a2a4999981', '2023-04-14 22:56:45', '2023-04-14 22:56:45'),
(114, 'Accurately forecast and lead pipeline on a monthly and quarterly basis and keep accurate reporting in a CRM tool', '643a2a4999981', '2023-04-14 22:56:45', '2023-04-14 22:56:45'),
(115, '3+ years of successful sales experience, preferably in B2B software', '643a2a4999981', '2023-04-14 22:56:45', '2023-04-14 22:56:45');

-- --------------------------------------------------------

--
-- Table structure for table `resume_education`
--

DROP TABLE IF EXISTS `resume_education`;
CREATE TABLE IF NOT EXISTS `resume_education` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `school_name` varchar(255) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `start_date` varchar(255) NOT NULL,
  `end_date` varchar(255) NOT NULL,
  `employee_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `resume_education`
--

INSERT INTO `resume_education` (`id`, `school_name`, `degree`, `details`, `start_date`, `end_date`, `employee_id`, `created_at`, `updated_at`) VALUES
(1, 'Bagmati Modern College', 'Computer Science', 'It is a nice college.', '2019-01-18', '2021-01-18', 1, '2023-04-18 09:04:44', '2023-04-18 09:04:44'),
(2, 'Herald College Kathmandu', 'BSc. (Hons) Computing', 'This is also a nice college.', '2021-01-18', '2023-07-01', 1, '2023-04-18 09:09:57', '2023-04-18 09:09:57'),
(3, 'Amity Education Foundation', 'Primary Education', 'This was a nice school tbh.', '2016-01-18', '2019-01-18', 1, '2023-04-18 09:11:59', '2023-04-18 09:11:59'),
(4, 'Little Buddha English School', 'Basic School Level', 'Nice School', '2012-01-05', '2016-02-05', 1, '2023-05-05 07:13:29', '2023-05-05 07:13:29');

-- --------------------------------------------------------

--
-- Table structure for table `resume_experiences`
--

DROP TABLE IF EXISTS `resume_experiences`;
CREATE TABLE IF NOT EXISTS `resume_experiences` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `work_name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `start_date` varchar(255) NOT NULL,
  `end_date` varchar(255) NOT NULL,
  `employee_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `resume_experiences`
--

INSERT INTO `resume_experiences` (`id`, `work_name`, `designation`, `details`, `start_date`, `end_date`, `employee_id`, `created_at`, `updated_at`) VALUES
(1, 'ShotCoder Tech Pvt. Ltd.', 'Clief Operating Officer', 'Nice Place To Work', '2023-04-01', '2023-04-21', 1, '2023-04-21 01:56:12', '2023-04-21 01:56:12');

-- --------------------------------------------------------

--
-- Table structure for table `resume_skills`
--

DROP TABLE IF EXISTS `resume_skills`;
CREATE TABLE IF NOT EXISTS `resume_skills` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `skill_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `employee_id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `resume_skills`
--

INSERT INTO `resume_skills` (`id`, `skill_name`, `created_at`, `updated_at`, `employee_id`) VALUES
(1, 'Laravel', '2023-04-21 09:51:12', '2023-04-21 09:51:12', 1),
(2, 'WordPress', '2023-04-21 09:54:24', '2023-04-21 09:54:24', 1);

-- --------------------------------------------------------

--
-- Table structure for table `salary_ranges`
--

DROP TABLE IF EXISTS `salary_ranges`;
CREATE TABLE IF NOT EXISTS `salary_ranges` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `salary_ranges`
--

INSERT INTO `salary_ranges` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, '$100 USD - $200 USD', NULL, NULL),
(2, '$300 USD - $500 USD', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `top_bars`
--

DROP TABLE IF EXISTS `top_bars`;
CREATE TABLE IF NOT EXISTS `top_bars` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `topbar_contact` varchar(255) NOT NULL,
  `topbar_center_text` varchar(255) NOT NULL,
  `isHidden` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `top_bars`
--

INSERT INTO `top_bars` (`id`, `topbar_contact`, `topbar_center_text`, `isHidden`, `created_at`, `updated_at`) VALUES
(1, '+977 015912023', 'Get 10% Discount on Boosting', 0, '2023-05-17 16:02:33', '2023-05-17 10:31:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `user_testimonials`
--

DROP TABLE IF EXISTS `user_testimonials`;
CREATE TABLE IF NOT EXISTS `user_testimonials` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `testimonial` varchar(255) NOT NULL,
  `isFeatured` varchar(255) NOT NULL DEFAULT 'no',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `user_testimonials`
--

INSERT INTO `user_testimonials` (`id`, `name`, `designation`, `company`, `image`, `testimonial`, `isFeatured`, `created_at`, `updated_at`) VALUES
(1, 'Raymon Basnet', 'Kitchen Helper', 'ShotCoder Tech', 'raymon.png', 'Using JobScout has allowed me to stay informed about the latest trends and developments in my industry, and has given me the tools and resources I need to succeed in my career.', 'yes', '2023-05-06 18:15:00', '0000-00-00 00:00:00'),
(2, 'Punam Katwal', 'Strong Fighter', 'ShotCoder Tech', 'punam.jpg', 'Thanks to JobScout, I have been able to connect with other professionals in my field, explore new job opportunities, and take my career to the next level.', 'yes', '2023-05-06 18:18:14', '0000-00-00 00:00:00'),
(3, 'Prabesh Bhattarai', 'Cleaner', 'ShotCoder Tech', 'prabesh.png', 'JobScout has been a very useful platform for my career buildup, providing me with access to a wide range of job postings and resources to help me develop my skills and knowledge.', 'yes', '2023-05-06 18:17:12', '2023-05-06 18:17:12');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
