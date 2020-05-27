-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2020 at 07:59 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sliced`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `type` tinyint(1) NOT NULL COMMENT '1=home,2=work,3=other',
  `user_id` int(11) NOT NULL,
  `latitude` varchar(55) NOT NULL,
  `longitude` varchar(55) NOT NULL,
  `address` text DEFAULT NULL,
  `address1` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `postalcode` varchar(10) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `type`, `user_id`, `latitude`, `longitude`, `address`, `address1`, `address2`, `city`, `postalcode`, `state`, `country`) VALUES
(18, 2, 54, '0.000000', '0.000000', NULL, '3214 N University Ave', '#409,Provo', 'Rajkot', '84604', 'Gujrat', 'India'),
(20, 1, 54, '0.000000', '0.000000', NULL, '3214 N University Ave', '#409,Provo', 'Rajkot', '84604', 'Gujrat', 'India'),
(21, 1, 54, '0.000000', '0.000000', NULL, '3214 N University Ave', '#409,Provo', 'Rajkot', '84604', 'Gujrat', 'India'),
(22, 1, 0, '0.000000', '0.000000', NULL, '3214 N University Ave', '#409,Provo', 'Rajkot', '84604', 'Gujrat', 'India'),
(23, 1, 0, '0.000000', '0.000000', NULL, '3214 N University Ave', '#409,Provo', 'Rajkot', '84604', 'Gujrat', 'India'),
(24, 2, 55, '0.000000', '0.000000', NULL, '3214 N University Ave', '#409,Provo', 'Rajkot', '84604', 'Gujrat', 'India'),
(25, 1, 55, '0.000001', '0.000000', NULL, '3214 N University Ave', '#409,Provo', 'Rajkot', '84604', 'Gujrat', 'India'),
(27, 2, 58, '0.000000', '0.000000', NULL, '3214 N University Ave', '#409,Provo', 'Rajkot', '84604', 'Gujrat', 'India'),
(30, 1, 58, '20010.00', '20010.00', NULL, ' ITInfoway 1st Floor,', 'Heritage complex', 'Rajkot', '360004', 'Gujrat', 'indin'),
(31, 3, 58, '21323213', '12323232', NULL, 'Heritage Complex 50 feet Road,', 'Nr. Balaji Hall, 150 feet Ring Road,', 'Rajkot', '360005', 'Gujarat', 'India'),
(32, 2, 66, '22.3231127', '70.7785746', 'Jamnagar Bypass Road, GIDC Phase III, GIDC Phase-2, Dared, Jamnagar, Gujarat, India', ' asdf sdaf dsf asf', 'Jamnagar Bypass Road', 'Jamnagar', '360004', 'Gujarat', 'India');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `dsfafe` varchar(55) NOT NULL,
  `paspsas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `dsfafe`, `paspsas`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `alacarte`
--

CREATE TABLE `alacarte` (
  `id` int(11) NOT NULL,
  `pass` varchar(25) NOT NULL,
  `credit` int(11) NOT NULL,
  `youpay` int(11) NOT NULL,
  `validity` int(11) NOT NULL,
  `savings` int(25) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alacarte`
--

INSERT INTO `alacarte` (`id`, `pass`, `credit`, `youpay`, `validity`, `savings`, `status`) VALUES
(1, 'delightful', 3, 13000, 8, 2000, 2),
(2, 'tasty', 2, 12000, 12, 3000, 1),
(3, 'savory', 2, 12000, 13, 3000, 2),
(4, 'charming', 5, 12000, 12, 1000, 1),
(5, 'heavenly', 2, 20, 12, 2000, 2),
(6, 'delightful', 5, 10, 13, 2000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `blog_category_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `img` text NOT NULL,
  `description` longtext NOT NULL,
  `short_description` text NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `blog_category_id`, `title`, `img`, `description`, `short_description`, `date_time`) VALUES
(1, 1, 'my apple', '5ec4cd42274a7.png', '<p><span style=\"color: rgb(33, 37, 41); font-family: &quot;Multicolore Regular&quot;; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: center; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">We all know that we want beautiful, healthy skin. What we don’t know is how to get it. From toners and cleansers to lotions and masks, there are thousands of products all claiming to provide that radiant glow we’re all looking for.</span></p><p><br><span style=\"color: rgb(33, 37, 41); font-family: &quot;Multicolore Regular&quot;; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: center; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\"><span style=\"color: rgb(33, 37, 41); font-family: &quot;Multicolore Regular&quot;; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: center; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">We all know that we want beautiful, healthy skin. What we don’t know is how to get it. From toners and cleansers to lotions and masks, there are thousands of products all claiming to provide that radiant glow we’re all looking for.</span></span></p><p><br><span style=\"color: rgb(33, 37, 41); font-family: &quot;Multicolore Regular&quot;; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: center; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\"><span style=\"color: rgb(33, 37, 41); font-family: &quot;Multicolore Regular&quot;; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: center; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\"><span style=\"color: rgb(33, 37, 41); font-family: &quot;Multicolore Regular&quot;; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: center; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">We all know that we want beautiful, healthy skin. What we don’t know is how to get it. From toners and cleansers to lotions and masks, there are thousands of products all claiming to provide that radiant glow we’re all looking for.</span></span></span></p><p><br><span style=\"color: rgb(33, 37, 41); font-family: &quot;Multicolore Regular&quot;; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: center; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\"><span style=\"color: rgb(33, 37, 41); font-family: &quot;Multicolore Regular&quot;; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: center; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\"><span style=\"color: rgb(33, 37, 41); font-family: &quot;Multicolore Regular&quot;; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: center; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\"><span style=\"color: rgb(33, 37, 41); font-family: &quot;Multicolore Regular&quot;; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: center; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">We all know that we want beautiful, healthy skin. What we don’t know is how to get it. From toners and cleansers to lotions and masks, there are thousands of products all claiming to provide that radiant glow we’re all looking for.</span></span></span></span></p><p><br><span style=\"color: rgb(33, 37, 41); font-family: &quot;Multicolore Regular&quot;; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: center; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\"><span style=\"color: rgb(33, 37, 41); font-family: &quot;Multicolore Regular&quot;; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: center; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\"><span style=\"color: rgb(33, 37, 41); font-family: &quot;Multicolore Regular&quot;; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: center; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\"><span style=\"color: rgb(33, 37, 41); font-family: &quot;Multicolore Regular&quot;; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: center; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\"><span style=\"color: rgb(33, 37, 41); font-family: &quot;Multicolore Regular&quot;; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: center; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">We all know that we want beautiful, healthy skin. What we don’t know is how to get it. From toners and cleansers to lotions and masks, there are thousands of products all claiming to provide that radiant glow we’re all looking for.</span></span></span></span></span></p>', 'We all know that we want beautiful, healthy skin. What we don’t know is how to get it. From toners and cleansers to lotions and masks, there are thousands of products all claiming to provide that radiant glow we’re all looking for.', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `blog_category`
--

CREATE TABLE `blog_category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_category`
--

INSERT INTO `blog_category` (`id`, `name`) VALUES
(1, 'apple');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('03b609vj9ak66266r0tsvra5f62dinrl', '::1', 1590213237, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539303231323934373b757365727c4f3a383a22737464436c617373223a383a7b733a383a22757365726e616d65223b733a31323a225061727468616a7564697961223b733a353a22666e616d65223b733a353a227061727468223b733a353a226c6e616d65223b733a373a22616a7564697961223b733a353a22656d61696c223b733a32353a2270617274682e702e616a756469796140676d61696c2e636f6d223b733a333a22696d67223b733a31373a22356537643938646234613766642e706e67223b733a323a226964223b733a323a223636223b733a383a2273747269705f6964223b733a31383a226375735f4835454e61636479517a67763157223b733a363a22737461747573223b733a313a2231223b7d757365725f6c6f67696e7c623a313b),
('1k4hjc6o4csckdqvg23coo9khlceorko', '::1', 1590208970, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539303230383833363b757365727c4f3a383a22737464436c617373223a383a7b733a383a22757365726e616d65223b733a31323a225061727468616a7564697961223b733a353a22666e616d65223b733a353a227061727468223b733a353a226c6e616d65223b733a373a22616a7564697961223b733a353a22656d61696c223b733a32353a2270617274682e702e616a756469796140676d61696c2e636f6d223b733a333a22696d67223b733a31373a22356537643938646234613766642e706e67223b733a323a226964223b733a323a223636223b733a383a2273747269705f6964223b733a31383a226375735f4835454e61636479517a67763157223b733a363a22737461747573223b733a313a2231223b7d757365725f6c6f67696e7c623a313b),
('4d5qt3g4h53o81qsoeu7il4e7sm5g224', '::1', 1590243135, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539303234323933333b61646d696e7c613a313a7b693a303b4f3a383a22737464436c617373223a333a7b733a323a226964223b733a313a2231223b733a363a22647366616665223b733a353a2261646d696e223b733a373a2270617370736173223b733a353a2261646d696e223b7d7d61646d696e5f6c6f67696e7c623a313b),
('5l3kcj46eo72lcnjj949h9hn85camtsd', '::1', 1590243995, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539303234333933313b61646d696e7c613a313a7b693a303b4f3a383a22737464436c617373223a333a7b733a323a226964223b733a313a2231223b733a363a22647366616665223b733a353a2261646d696e223b733a373a2270617370736173223b733a353a2261646d696e223b7d7d61646d696e5f6c6f67696e7c623a313b),
('634tfhh9p0neluvktn6979h8vlg5q8he', '::1', 1590212329, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539303231323332363b757365727c4f3a383a22737464436c617373223a383a7b733a383a22757365726e616d65223b733a31323a225061727468616a7564697961223b733a353a22666e616d65223b733a353a227061727468223b733a353a226c6e616d65223b733a373a22616a7564697961223b733a353a22656d61696c223b733a32353a2270617274682e702e616a756469796140676d61696c2e636f6d223b733a333a22696d67223b733a31373a22356537643938646234613766642e706e67223b733a323a226964223b733a323a223636223b733a383a2273747269705f6964223b733a31383a226375735f4835454e61636479517a67763157223b733a363a22737461747573223b733a313a2231223b7d757365725f6c6f67696e7c623a313b),
('81g4fnkactj1108u6l341o5qh9oh5g8j', '::1', 1590245998, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539303234353737383b61646d696e7c613a313a7b693a303b4f3a383a22737464436c617373223a333a7b733a323a226964223b733a313a2231223b733a363a22647366616665223b733a353a2261646d696e223b733a373a2270617370736173223b733a353a2261646d696e223b7d7d61646d696e5f6c6f67696e7c623a313b70726576696f75735f75726c7c733a33363a22687474703a2f2f6c6f63616c686f73742f697466727569742f616464726573732f616464223b757365727c4f3a383a22737464436c617373223a383a7b733a383a22757365726e616d65223b733a31323a225061727468616a7564697961223b733a353a22666e616d65223b733a353a227061727468223b733a353a226c6e616d65223b733a373a22616a7564697961223b733a353a22656d61696c223b733a32353a2270617274682e702e616a756469796140676d61696c2e636f6d223b733a333a22696d67223b733a31373a22356537643938646234613766642e706e67223b733a323a226964223b733a323a223636223b733a383a2273747269705f6964223b733a31383a226375735f4835454e61636479517a67763157223b733a363a22737461747573223b733a313a2231223b7d757365725f6c6f67696e7c623a313b),
('8sfheehcj914bnvb489ks8jhi1s7e85n', '::1', 1590130763, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539303133303630393b757365727c4f3a383a22737464436c617373223a383a7b733a383a22757365726e616d65223b733a31323a225061727468616a7564697961223b733a353a22666e616d65223b733a353a227061727468223b733a353a226c6e616d65223b733a373a22616a7564697961223b733a353a22656d61696c223b733a32353a2270617274682e702e616a756469796140676d61696c2e636f6d223b733a333a22696d67223b733a31373a22356537643938646234613766642e706e67223b733a323a226964223b733a323a223636223b733a383a2273747269705f6964223b733a31383a226375735f4835454e61636479517a67763157223b733a363a22737461747573223b733a313a2231223b7d757365725f6c6f67696e7c623a313b70726576696f75735f75726c7c733a34393a22687474703a2f2f6c6f63616c686f73742f697466727569742f616c612d636172742d736c696365642f636865636b6f7574223b),
('9ar9sldp6mqu8jg8gicsm51m4br8masi', '::1', 1590245144, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539303234343836333b61646d696e7c613a313a7b693a303b4f3a383a22737464436c617373223a333a7b733a323a226964223b733a313a2231223b733a363a22647366616665223b733a353a2261646d696e223b733a373a2270617370736173223b733a353a2261646d696e223b7d7d61646d696e5f6c6f67696e7c623a313b),
('9prgieghi39ofu6u63odv7ughno0bgvc', '::1', 1590242157, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539303234323039323b61646d696e7c613a313a7b693a303b4f3a383a22737464436c617373223a333a7b733a323a226964223b733a313a2231223b733a363a22647366616665223b733a353a2261646d696e223b733a373a2270617370736173223b733a353a2261646d696e223b7d7d61646d696e5f6c6f67696e7c623a313b),
('9rc6fvjsg2hdir0t5ujg36ehb174e32d', '::1', 1590239935, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539303233393933353b),
('ai0shobmrjpdq7se0148mi8mfeq1hj4a', '::1', 1590244551, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539303234343532303b61646d696e7c613a313a7b693a303b4f3a383a22737464436c617373223a333a7b733a323a226964223b733a313a2231223b733a363a22647366616665223b733a353a2261646d696e223b733a373a2270617370736173223b733a353a2261646d696e223b7d7d61646d696e5f6c6f67696e7c623a313b),
('dnqk3esjmhk6m2v8c2ivsahvm8pcbeee', '::1', 1590211966, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539303231313833353b757365727c4f3a383a22737464436c617373223a383a7b733a383a22757365726e616d65223b733a31323a225061727468616a7564697961223b733a353a22666e616d65223b733a353a227061727468223b733a353a226c6e616d65223b733a373a22616a7564697961223b733a353a22656d61696c223b733a32353a2270617274682e702e616a756469796140676d61696c2e636f6d223b733a333a22696d67223b733a31373a22356537643938646234613766642e706e67223b733a323a226964223b733a323a223636223b733a383a2273747269705f6964223b733a31383a226375735f4835454e61636479517a67763157223b733a363a22737461747573223b733a313a2231223b7d757365725f6c6f67696e7c623a313b),
('dtpdk71d8kpsgsgssupbgropbe7ia9r3', '::1', 1590295161, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539303239353135383b),
('ela83dtsjkm7uo8sfu9t3u3t4udi77kq', '::1', 1590246960, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539303234363737393b61646d696e7c613a313a7b693a303b4f3a383a22737464436c617373223a333a7b733a323a226964223b733a313a2231223b733a363a22647366616665223b733a353a2261646d696e223b733a373a2270617370736173223b733a353a2261646d696e223b7d7d61646d696e5f6c6f67696e7c623a313b70726576696f75735f75726c7c733a35383a22687474703a2f2f6c6f63616c686f73742f697466727569742f737562736372697074696f6e2f64656c69766572792d696e666f726d6174696f6e223b757365727c4f3a383a22737464436c617373223a383a7b733a383a22757365726e616d65223b733a31323a225061727468616a7564697961223b733a353a22666e616d65223b733a353a227061727468223b733a353a226c6e616d65223b733a373a22616a7564697961223b733a353a22656d61696c223b733a32353a2270617274682e702e616a756469796140676d61696c2e636f6d223b733a333a22696d67223b733a31373a22356537643938646234613766642e706e67223b733a323a226964223b733a323a223636223b733a383a2273747269705f6964223b733a31383a226375735f4835454e61636479517a67763157223b733a363a22737461747573223b733a313a2231223b7d757365725f6c6f67696e7c623a313b),
('hdv08k1eon5b975r7ikoovef8qicaane', '::1', 1590212887, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539303231323633333b757365727c4f3a383a22737464436c617373223a383a7b733a383a22757365726e616d65223b733a31323a225061727468616a7564697961223b733a353a22666e616d65223b733a353a227061727468223b733a353a226c6e616d65223b733a373a22616a7564697961223b733a353a22656d61696c223b733a32353a2270617274682e702e616a756469796140676d61696c2e636f6d223b733a333a22696d67223b733a31373a22356537643938646234613766642e706e67223b733a323a226964223b733a323a223636223b733a383a2273747269705f6964223b733a31383a226375735f4835454e61636479517a67763157223b733a363a22737461747573223b733a313a2231223b7d757365725f6c6f67696e7c623a313b),
('i2fouoota0gaghusfemv2ntqimb249uv', '::1', 1590242515, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539303234323531353b61646d696e7c613a313a7b693a303b4f3a383a22737464436c617373223a333a7b733a323a226964223b733a313a2231223b733a363a22647366616665223b733a353a2261646d696e223b733a373a2270617370736173223b733a353a2261646d696e223b7d7d61646d696e5f6c6f67696e7c623a313b),
('j1ee324m2t32kdkckl3ur90kmhvrf29j', '::1', 1590131220, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539303133303933353b757365727c4f3a383a22737464436c617373223a383a7b733a383a22757365726e616d65223b733a31323a225061727468616a7564697961223b733a353a22666e616d65223b733a353a227061727468223b733a353a226c6e616d65223b733a373a22616a7564697961223b733a353a22656d61696c223b733a32353a2270617274682e702e616a756469796140676d61696c2e636f6d223b733a333a22696d67223b733a31373a22356537643938646234613766642e706e67223b733a323a226964223b733a323a223636223b733a383a2273747269705f6964223b733a31383a226375735f4835454e61636479517a67763157223b733a363a22737461747573223b733a313a2231223b7d757365725f6c6f67696e7c623a313b70726576696f75735f75726c7c733a34393a22687474703a2f2f6c6f63616c686f73742f697466727569742f616c612d636172742d736c696365642f636865636b6f7574223b),
('k0leif81mf2qhagb7qvp6pnqa40hers2', '::1', 1590241615, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539303234313333373b61646d696e7c613a313a7b693a303b4f3a383a22737464436c617373223a333a7b733a323a226964223b733a313a2231223b733a363a22647366616665223b733a353a2261646d696e223b733a373a2270617370736173223b733a353a2261646d696e223b7d7d61646d696e5f6c6f67696e7c623a313b),
('kd0f5l90agaql6ovbrqspbp8pfdggal8', '::1', 1590131473, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539303133313437333b757365727c4f3a383a22737464436c617373223a383a7b733a383a22757365726e616d65223b733a31323a225061727468616a7564697961223b733a353a22666e616d65223b733a353a227061727468223b733a353a226c6e616d65223b733a373a22616a7564697961223b733a353a22656d61696c223b733a32353a2270617274682e702e616a756469796140676d61696c2e636f6d223b733a333a22696d67223b733a31373a22356537643938646234613766642e706e67223b733a323a226964223b733a323a223636223b733a383a2273747269705f6964223b733a31383a226375735f4835454e61636479517a67763157223b733a363a22737461747573223b733a313a2231223b7d757365725f6c6f67696e7c623a313b70726576696f75735f75726c7c733a34393a22687474703a2f2f6c6f63616c686f73742f697466727569742f616c612d636172742d736c696365642f636865636b6f7574223b),
('l51sts5ifl2tpbq678lfajqgubf0b9mm', '::1', 1590248473, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539303234383335313b61646d696e7c613a313a7b693a303b4f3a383a22737464436c617373223a333a7b733a323a226964223b733a313a2231223b733a363a22647366616665223b733a353a2261646d696e223b733a373a2270617370736173223b733a353a2261646d696e223b7d7d61646d696e5f6c6f67696e7c623a313b70726576696f75735f75726c7c733a35383a22687474703a2f2f6c6f63616c686f73742f697466727569742f737562736372697074696f6e2f64656c69766572792d696e666f726d6174696f6e223b757365727c4f3a383a22737464436c617373223a383a7b733a383a22757365726e616d65223b733a31323a225061727468616a7564697961223b733a353a22666e616d65223b733a353a227061727468223b733a353a226c6e616d65223b733a373a22616a7564697961223b733a353a22656d61696c223b733a32353a2270617274682e702e616a756469796140676d61696c2e636f6d223b733a333a22696d67223b733a31373a22356537643938646234613766642e706e67223b733a323a226964223b733a323a223636223b733a383a2273747269705f6964223b733a31383a226375735f4835454e61636479517a67763157223b733a363a22737461747573223b733a313a2231223b7d757365725f6c6f67696e7c623a313b),
('li0d5rtf69ur7q4heamak1lcdn4pi4vk', '::1', 1590130041, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539303133303034313b757365727c4f3a383a22737464436c617373223a383a7b733a383a22757365726e616d65223b733a31323a225061727468616a7564697961223b733a353a22666e616d65223b733a353a227061727468223b733a353a226c6e616d65223b733a373a22616a7564697961223b733a353a22656d61696c223b733a32353a2270617274682e702e616a756469796140676d61696c2e636f6d223b733a333a22696d67223b733a31373a22356537643938646234613766642e706e67223b733a323a226964223b733a323a223636223b733a383a2273747269705f6964223b733a31383a226375735f4835454e61636479517a67763157223b733a363a22737461747573223b733a313a2231223b7d757365725f6c6f67696e7c623a313b70726576696f75735f75726c7c733a34393a22687474703a2f2f6c6f63616c686f73742f697466727569742f616c612d636172742d736c696365642f636865636b6f7574223b),
('mgc6ul7ngfmfud3vhcugkacf7vtah75k', '::1', 1590208277, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539303230383038393b757365727c4f3a383a22737464436c617373223a383a7b733a383a22757365726e616d65223b733a31323a225061727468616a7564697961223b733a353a22666e616d65223b733a353a227061727468223b733a353a226c6e616d65223b733a373a22616a7564697961223b733a353a22656d61696c223b733a32353a2270617274682e702e616a756469796140676d61696c2e636f6d223b733a333a22696d67223b733a31373a22356537643938646234613766642e706e67223b733a323a226964223b733a323a223636223b733a383a2273747269705f6964223b733a31383a226375735f4835454e61636479517a67763157223b733a363a22737461747573223b733a313a2231223b7d757365725f6c6f67696e7c623a313b737563636573737c733a31373a227375636365737366756c79206c6f67696e223b),
('mkut3j5k170a50fpp9411b735886rri5', '::1', 1590248969, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539303234383835333b61646d696e7c613a313a7b693a303b4f3a383a22737464436c617373223a333a7b733a323a226964223b733a313a2231223b733a363a22647366616665223b733a353a2261646d696e223b733a373a2270617370736173223b733a353a2261646d696e223b7d7d61646d696e5f6c6f67696e7c623a313b70726576696f75735f75726c7c733a35383a22687474703a2f2f6c6f63616c686f73742f697466727569742f737562736372697074696f6e2f64656c69766572792d696e666f726d6174696f6e223b757365727c4f3a383a22737464436c617373223a383a7b733a383a22757365726e616d65223b733a31323a225061727468616a7564697961223b733a353a22666e616d65223b733a353a227061727468223b733a353a226c6e616d65223b733a373a22616a7564697961223b733a353a22656d61696c223b733a32353a2270617274682e702e616a756469796140676d61696c2e636f6d223b733a333a22696d67223b733a31373a22356537643938646234613766642e706e67223b733a323a226964223b733a323a223636223b733a383a2273747269705f6964223b733a31383a226375735f4835454e61636479517a67763157223b733a363a22737461747573223b733a313a2231223b7d757365725f6c6f67696e7c623a313b),
('n2tqmbih1tt1tg2n7e376nsjs2q2vvc4', '::1', 1590241954, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539303234313731343b61646d696e7c613a313a7b693a303b4f3a383a22737464436c617373223a333a7b733a323a226964223b733a313a2231223b733a363a22647366616665223b733a353a2261646d696e223b733a373a2270617370736173223b733a353a2261646d696e223b7d7d61646d696e5f6c6f67696e7c623a313b),
('nruejp5tb8ttea9v0bg0sfap0junfqo8', '::1', 1590243310, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539303234333235363b61646d696e7c613a313a7b693a303b4f3a383a22737464436c617373223a333a7b733a323a226964223b733a313a2231223b733a363a22647366616665223b733a353a2261646d696e223b733a373a2270617370736173223b733a353a2261646d696e223b7d7d61646d696e5f6c6f67696e7c623a313b),
('o9gbq2t7r7udorak7p4m30ikmgo2d9rl', '::1', 1590207514, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539303230373531343b),
('qsfgkhs2oaeav6l3p1hsi60e4hm9esvp', '::1', 1590248345, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539303234383034353b61646d696e7c613a313a7b693a303b4f3a383a22737464436c617373223a333a7b733a323a226964223b733a313a2231223b733a363a22647366616665223b733a353a2261646d696e223b733a373a2270617370736173223b733a353a2261646d696e223b7d7d61646d696e5f6c6f67696e7c623a313b70726576696f75735f75726c7c733a35383a22687474703a2f2f6c6f63616c686f73742f697466727569742f737562736372697074696f6e2f64656c69766572792d696e666f726d6174696f6e223b757365727c4f3a383a22737464436c617373223a383a7b733a383a22757365726e616d65223b733a31323a225061727468616a7564697961223b733a353a22666e616d65223b733a353a227061727468223b733a353a226c6e616d65223b733a373a22616a7564697961223b733a353a22656d61696c223b733a32353a2270617274682e702e616a756469796140676d61696c2e636f6d223b733a333a22696d67223b733a31373a22356537643938646234613766642e706e67223b733a323a226964223b733a323a223636223b733a383a2273747269705f6964223b733a31383a226375735f4835454e61636479517a67763157223b733a363a22737461747573223b733a313a2231223b7d757365725f6c6f67696e7c623a313b),
('qvo0ff011v99ga289ck51m8l2h1104ca', '::1', 1590292234, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539303239323233343b),
('tjdpk6vg5o8fv47gaclcsp3havt54cg3', '::1', 1590245493, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539303234353230343b61646d696e7c613a313a7b693a303b4f3a383a22737464436c617373223a333a7b733a323a226964223b733a313a2231223b733a363a22647366616665223b733a353a2261646d696e223b733a373a2270617370736173223b733a353a2261646d696e223b7d7d61646d696e5f6c6f67696e7c623a313b),
('u111egft37iu100b8ms4r1mju85c3kc5', '::1', 1590214047, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539303231333837303b757365727c4f3a383a22737464436c617373223a383a7b733a383a22757365726e616d65223b733a31323a225061727468616a7564697961223b733a353a22666e616d65223b733a353a227061727468223b733a353a226c6e616d65223b733a373a22616a7564697961223b733a353a22656d61696c223b733a32353a2270617274682e702e616a756469796140676d61696c2e636f6d223b733a333a22696d67223b733a31373a22356537643938646234613766642e706e67223b733a323a226964223b733a323a223636223b733a383a2273747269705f6964223b733a31383a226375735f4835454e61636479517a67763157223b733a363a22737461747573223b733a313a2231223b7d757365725f6c6f67696e7c623a313b),
('u12km9rd1c1ru31mvhktchs2ms2reibl', '::1', 1590240956, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539303234303935323b);

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact_number` varchar(13) NOT NULL,
  `msg` text NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 1,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `date`, `ip_address`, `name`, `email`, `contact_number`, `msg`, `type`, `status`) VALUES
(17, '2020-03-09', '', 'slice', 'slice@gmail.com', '8796541203', 'Take a quick demo to check out our SMS site features. ', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `position` int(11) NOT NULL,
  `qus` text NOT NULL,
  `ans` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `position`, `qus`, `ans`) VALUES
(3, 1, 'What kind of fruit is a kumquat?', ' Small Orange');

-- --------------------------------------------------------

--
-- Table structure for table `favorite`
--

CREATE TABLE `favorite` (
  `id` int(11) NOT NULL,
  `type` tinyint(1) NOT NULL,
  `users_id` int(11) NOT NULL,
  `fruit_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `fruit`
--

CREATE TABLE `fruit` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `vitamin_ids` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fruit`
--

INSERT INTO `fruit` (`id`, `name`, `description`, `vitamin_ids`, `img`) VALUES
(28, 'APPLE', '', '[12]', 'user_demo.png'),
(31, 'Strawberry', '', '[24]', '5e75ae7e88558.png'),
(32, 'Grapes', '', '[24]', '5e75aeefa9e57.png'),
(33, 'Orange', '', '[24]', '5e75afd604e65.png'),
(34, 'Banana', '', '[14]', '5e75b0392a2c4.png'),
(35, 'Cherry', '', '[\"13\"]', '5e900b7a3108e.png'),
(36, 'Mango', 'A mango is a juicy stone fruit (drupe) produced from numerous species of tropical trees belonging to the flowering plant genus Mangifera, cultivated mostly for their edible fruit. Most of these species are found in nature as wild mangoes. The genus belongs to the cashew family Anacardiaceae.', '[\"14\",\"24\"]', '5ec22520214be.png');

-- --------------------------------------------------------

--
-- Table structure for table `ledger`
--

CREATE TABLE `ledger` (
  `id` int(11) NOT NULL,
  `type` tinyint(1) NOT NULL,
  `orderid` varchar(55) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `amount` decimal(8,2) DEFAULT NULL,
  `credit` int(11) NOT NULL,
  `exp_date_time` timestamp NULL DEFAULT NULL,
  `stripe_card_code` text NOT NULL,
  `item_name` varchar(55) DEFAULT NULL,
  `item_number` varchar(55) DEFAULT NULL,
  `item_price` decimal(8,2) DEFAULT NULL,
  `item_price_currency` varchar(4) DEFAULT NULL,
  `paid_amount_currency` varchar(4) DEFAULT NULL,
  `txn_id` text DEFAULT NULL,
  `payment_status` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ledger`
--

INSERT INTO `ledger` (`id`, `type`, `orderid`, `user_id`, `date_time`, `amount`, `credit`, `exp_date_time`, `stripe_card_code`, `item_name`, `item_number`, `item_price`, `item_price_currency`, `paid_amount_currency`, `txn_id`, `payment_status`) VALUES
(1, 1, 'WALLET20204120001', 66, '2020-04-14 05:38:53', '13000.00', 50, '2020-04-13 00:41:17', '', 'delightful', 'ALA001', '999999.99', 'sgd', 'sgd', 'txn_1GX3uaC8LWDsx1pc1Mn9qrNk', 'succeeded'),
(2, 2, 'ALACARTE20204140004', 66, '2020-04-14 05:39:37', NULL, -8, '2020-04-14 18:30:00', '', NULL, NULL, NULL, NULL, NULL, NULL, ''),
(3, 1, 'WALLET202005100002', 66, '0000-00-00 00:00:00', '13000.00', 3, '0000-00-00 00:00:00', '', 'delightful', 'ALA001', '13000.00', 'sgd', 'sgd', 'txn_1GhIDiC8LWDsx1pcFCjGwsBp', 'succeeded'),
(4, 1, 'WALLET202005100003', 66, '0000-00-00 00:00:00', '13000.00', 3, '0000-00-00 00:00:00', '', 'delightful', 'ALA001', '13000.00', 'sgd', 'sgd', 'txn_1GhIEYC8LWDsx1pcaEtxl084', 'succeeded'),
(5, 1, 'WALLET202005100004', 66, '0000-00-00 00:00:00', '20.00', 2, '0000-00-00 00:00:00', '', 'heavenly', 'ALA005', '20.00', 'sgd', 'sgd', 'txn_1GhJgxC8LWDsx1pcH9PQgYuo', 'succeeded'),
(6, 1, 'WALLET202005120005', 66, '0000-00-00 00:00:00', '13000.00', 3, '0000-00-00 00:00:00', '', 'delightful', 'ALA001', '13000.00', 'sgd', 'sgd', 'txn_1Gi2UCC8LWDsx1pc87ME7Mia', 'succeeded'),
(7, 3, 'SUBSCRIPTION202005130001', 66, '0000-00-00 00:00:00', '200.00', 0, NULL, '', '202005140005', 'SUBS000005', '0.00', 'sgd', 'sgd', 'txn_1GiGjCC8LWDsx1pcdZV2YZmg', 'succeeded'),
(8, 3, 'SUBSCRIPTION202005130001', 66, '0000-00-00 00:00:00', '600.00', 0, NULL, '', '202005140004', 'SUBS000004', '0.00', 'sgd', 'sgd', 'txn_1GiGjDC8LWDsx1pcdwmeC98s', 'succeeded'),
(9, 3, 'SUBSCRIPTION202005130001', 66, '0000-00-00 00:00:00', '600.00', 0, NULL, '', '202005140003', 'SUBS000003', '0.00', 'sgd', 'sgd', 'txn_1GiGjEC8LWDsx1pcEnZEi69W', 'succeeded'),
(10, 3, 'SUBSCRIPTION202005130001', 66, '0000-00-00 00:00:00', '600.00', 0, NULL, '', '202005140002', 'SUBS000002', '0.00', 'sgd', 'sgd', 'txn_1GiGjGC8LWDsx1pcnCv0Xl8h', 'succeeded'),
(11, 3, 'SUBSCRIPTION202005130001', 66, '0000-00-00 00:00:00', '200.00', 0, NULL, '', '202005140001', 'SUBS000001', '0.00', 'sgd', 'sgd', 'txn_1GiGjHC8LWDsx1pck8aRwiGQ', 'succeeded'),
(12, 3, 'SUBSCRIPTION202005130001', 66, '0000-00-00 00:00:00', '200.00', 0, NULL, '', '202005140005', 'SUBS000005', '200.00', 'sgd', 'sgd', 'txn_1GiGl5C8LWDsx1pcHNlcd3CZ', 'succeeded'),
(13, 3, 'SUBSCRIPTION202005130001', 66, '0000-00-00 00:00:00', '600.00', 0, NULL, '', '202005140004', 'SUBS000004', '600.00', 'sgd', 'sgd', 'txn_1GiGl6C8LWDsx1pccIw5Ocam', 'succeeded'),
(14, 3, 'SUBSCRIPTION202005130001', 66, '0000-00-00 00:00:00', '600.00', 0, NULL, '', '202005140003', 'SUBS000003', '600.00', 'sgd', 'sgd', 'txn_1GiGl8C8LWDsx1pclYdbWi2D', 'succeeded'),
(15, 3, 'SUBSCRIPTION202005130001', 66, '0000-00-00 00:00:00', '600.00', 0, NULL, '', '202005140002', 'SUBS000002', '600.00', 'sgd', 'sgd', 'txn_1GiGl9C8LWDsx1pc4FfMBSXH', 'succeeded'),
(16, 3, 'SUBSCRIPTION202005130001', 66, '0000-00-00 00:00:00', '200.00', 0, NULL, '', '202005140001', 'SUBS000001', '200.00', 'sgd', 'sgd', 'txn_1GiGlAC8LWDsx1pciO0MqQeg', 'succeeded'),
(17, 3, 'SUBSCRIPTION202005130016', 66, '0000-00-00 00:00:00', '200.00', 0, NULL, '', '202005140005', 'SUBS000005', '200.00', 'sgd', 'sgd', 'txn_1GiGmEC8LWDsx1pcUtBkaPFJ', 'succeeded'),
(18, 3, 'SUBSCRIPTION202005130017', 66, '0000-00-00 00:00:00', '600.00', 0, NULL, '', '202005140004', 'SUBS000004', '600.00', 'sgd', 'sgd', 'txn_1GiGmFC8LWDsx1pckY2yDTOf', 'succeeded'),
(19, 3, 'SUBSCRIPTION202005130018', 66, '0000-00-00 00:00:00', '600.00', 0, NULL, '', '202005140003', 'SUBS000003', '600.00', 'sgd', 'sgd', 'txn_1GiGmGC8LWDsx1pcWSw0HRq2', 'succeeded'),
(20, 3, 'SUBSCRIPTION202005130019', 66, '0000-00-00 00:00:00', '600.00', 0, NULL, '', '202005140002', 'SUBS000002', '600.00', 'sgd', 'sgd', 'txn_1GiGmIC8LWDsx1pcmaqPVy13', 'succeeded'),
(21, 3, 'SUBSCRIPTION202005130020', 66, '0000-00-00 00:00:00', '200.00', 0, NULL, '', '202005140001', 'SUBS000001', '200.00', 'sgd', 'sgd', 'txn_1GiGmJC8LWDsx1pcW2KlMzu7', 'succeeded'),
(22, 3, 'SUBSCRIPTION202005130021', 66, '0000-00-00 00:00:00', '200.00', 0, NULL, '', '202005140005', 'SUBS000005', '200.00', 'sgd', 'sgd', 'txn_1GiKKCC8LWDsx1pc4jtlCVki', 'succeeded'),
(23, 3, 'SUBSCRIPTION202005130022', 66, '0000-00-00 00:00:00', '600.00', 0, NULL, '', '202005140004', 'SUBS000004', '600.00', 'sgd', 'sgd', 'txn_1GiKKEC8LWDsx1pcmousLP6R', 'succeeded'),
(24, 3, 'SUBSCRIPTION202005130023', 66, '0000-00-00 00:00:00', '600.00', 0, NULL, '', '202005140003', 'SUBS000003', '600.00', 'sgd', 'sgd', 'txn_1GiKKFC8LWDsx1pciI5FPPT2', 'succeeded'),
(25, 3, 'SUBSCRIPTION202005130024', 66, '0000-00-00 00:00:00', '600.00', 0, NULL, '', '202005140002', 'SUBS000002', '600.00', 'sgd', 'sgd', 'txn_1GiKKGC8LWDsx1pcgmtE8SlK', 'succeeded'),
(26, 3, 'SUBSCRIPTION202005130025', 66, '0000-00-00 00:00:00', '200.00', 0, NULL, '', '202005140001', 'SUBS000001', '200.00', 'sgd', 'sgd', 'txn_1GiKKIC8LWDsx1pcgvEoEx1L', 'succeeded'),
(27, 3, 'SUBSCRIPTION202005140026', 66, '0000-00-00 00:00:00', '200.00', 0, NULL, '', '202005150005', 'SUBS000005', '200.00', 'sgd', 'sgd', 'txn_1GiYwBC8LWDsx1pcuN6RT1aZ', 'succeeded'),
(28, 3, 'SUBSCRIPTION202005140027', 66, '0000-00-00 00:00:00', '600.00', 0, NULL, '', '202005150004', 'SUBS000004', '600.00', 'sgd', 'sgd', 'txn_1GiYwCC8LWDsx1pcaazvucNU', 'succeeded'),
(29, 3, 'SUBSCRIPTION202005140028', 66, '0000-00-00 00:00:00', '600.00', 0, NULL, '', '202005150003', 'SUBS000003', '600.00', 'sgd', 'sgd', 'txn_1GiYwDC8LWDsx1pc6PNxjfzK', 'succeeded'),
(30, 3, 'SUBSCRIPTION202005140029', 66, '0000-00-00 00:00:00', '600.00', 0, NULL, '', '202005150002', 'SUBS000002', '600.00', 'sgd', 'sgd', 'txn_1GiYwFC8LWDsx1pczYkG1Ujh', 'succeeded'),
(31, 3, 'SUBSCRIPTION202005140030', 66, '0000-00-00 00:00:00', '200.00', 0, NULL, '', '202005150001', 'SUBS000001', '200.00', 'sgd', 'sgd', 'txn_1GiYwGC8LWDsx1pcsF0PL3HU', 'succeeded'),
(32, 2, 'ALACARTE202005170031', 66, '2020-05-17 11:25:20', NULL, -16, '2020-05-17 18:30:00', '', NULL, NULL, NULL, NULL, NULL, NULL, ''),
(33, 1, 'WALLET202005220032', 66, '2020-05-22 02:08:58', '20.00', 2, '0000-00-00 00:00:00', '', 'heavenly', 'ALA005', '20.00', 'sgd', 'sgd', 'txn_1GlTayC8LWDsx1pcmMIQMU8S', 'succeeded'),
(34, 1, 'WALLET202005220033', 66, '2020-05-22 02:12:31', '20.00', 2, '0000-00-00 00:00:00', '', 'heavenly', 'ALA005', '20.00', 'sgd', 'sgd', 'txn_1GlTePC8LWDsx1pc7ocrZZpm', 'succeeded');

-- --------------------------------------------------------

--
-- Table structure for table `local_setting`
--

CREATE TABLE `local_setting` (
  `id` int(11) NOT NULL,
  `smtp_user` varchar(255) NOT NULL,
  `smtp_pass` varchar(255) NOT NULL,
  `smtp_port` int(11) NOT NULL,
  `publishable_key` varchar(55) NOT NULL,
  `secret_key` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `local_setting`
--

INSERT INTO `local_setting` (`id`, `smtp_user`, `smtp_pass`, `smtp_port`, `publishable_key`, `secret_key`) VALUES
(1, 'no-reply@sliced.tk', 'p@rth008', 465, 'pk_test_KawbGy2gc6t9OohQBJyiPDdg0005TSNdg6', 'sk_test_ZGxw4hbgjxm2yJYm26gYehh500HKVfhULA');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 1,
  `order_date` date NOT NULL,
  `delivered_on_day` tinyint(1) NOT NULL,
  `products` text NOT NULL,
  `delivered_on_date` date NOT NULL,
  `delivered_on_time` varchar(55) NOT NULL,
  `order_loading_id` int(11) DEFAULT NULL,
  `total_item` int(11) NOT NULL,
  `total_price` decimal(8,2) NOT NULL,
  `total_credit` int(11) NOT NULL,
  `address_type` tinyint(1) NOT NULL,
  `lat_lng` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(255) NOT NULL,
  `postalcode` varchar(10) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `user_id`, `type`, `order_date`, `delivered_on_day`, `products`, `delivered_on_date`, `delivered_on_time`, `order_loading_id`, `total_item`, `total_price`, `total_credit`, `address_type`, `lat_lng`, `address`, `city`, `postalcode`, `state`, `country`, `status`) VALUES
(1, 66, 1, '2020-04-12', 1, '{\"ABCD\":\"1\"}', '2020-04-13', '2 PM', 1, 2, '0.00', 8, 1, '', 'Crystal Mall Rajkot, Jyoti Nagar Main Road, Opp. Rani Tower, Ghanshyam Nagar, Rajkot, Gujarat, India', 'Rajkot', '360001', 'Gujarat', 'India', 1),
(4, 66, 1, '2020-04-14', 3, '{\"ABCD\":\"1\"}', '2020-04-15', '2 PM', 3, 2, '0.00', 8, 2, '22.28418106673757,70.75902926957721', '6 Nandi Park Main Rd Ghanshyam Nagar, Nandi Park Main Road', 'Rajkot', '360005', 'Gujarat', 'India', 1),
(5, 66, 2, '2020-05-13', 4, '{\"dip\":\"2\"}', '2020-05-14', '', NULL, 200, '0.00', 0, 1, '22.28418106673757,70.75902926957721', '6 Nandi Park Main Rd Ghanshyam Nagar, Nandi Park Main Rd, Ghanshyam Nagar, Rajkot, Gujarat 360005, India', '0', '360005', 'Gujarat', 'India', 1),
(6, 66, 2, '2020-05-13', 4, '{\"dip\":\"2\"}', '2020-05-14', '', NULL, 200, '0.00', 0, 1, '22.28418106673757,70.75902926957721', '6 Nandi Park Main Rd Ghanshyam Nagar, Nandi Park Main Rd, Ghanshyam Nagar, Rajkot, Gujarat 360005, India', '0', '360005', 'Gujarat', 'India', 1),
(7, 66, 2, '2020-05-13', 4, '{\"dip\":\"2\"}', '2020-05-14', '', NULL, 600, '0.00', 0, 2, '22.28418106673757,70.75902926957721', '6 Nandi Park Main Rd Ghanshyam Nagar, Nandi Park Main Rd, Ghanshyam Nagar, Rajkot, Gujarat 360005, India', '0', '360005', 'Gujarat', 'India', 1),
(8, 66, 2, '2020-05-13', 4, '{\"dip\":\"2\"}', '2020-05-14', '', NULL, 600, '0.00', 0, 1, '22.28418106673757,70.75902926957721', '6 Nandi Park Main Rd Ghanshyam Nagar, Nandi Park Main Rd, Ghanshyam Nagar, Rajkot, Gujarat 360005, India', '0', '360005', 'Gujarat', 'India', 1),
(9, 66, 2, '2020-05-13', 4, '{\"dip\":\"2\"}', '2020-05-14', '', NULL, 600, '0.00', 0, 2, '22.28418106673757,70.75902926957721', '6 Nandi Park Main Rd Ghanshyam Nagar, Nandi Park Main Rd, Ghanshyam Nagar, Rajkot, Gujarat 360005, India', '0', '360005', 'Gujarat', 'India', 1),
(10, 66, 2, '2020-05-13', 4, '{\"dip\":\"2\"}', '2020-05-14', '', NULL, 200, '0.00', 0, 1, '22.28418106673757,70.75902926957721', '6 Nandi Park Main Rd Ghanshyam Nagar, Nandi Park Main Rd, Ghanshyam Nagar, Rajkot, Gujarat 360005, India', '0', '360005', 'Gujarat', 'India', 1),
(11, 66, 2, '2020-05-13', 4, '{\"dip\":\"2\"}', '2020-05-14', '', NULL, 200, '0.00', 0, 1, '22.28418106673757,70.75902926957721', '6 Nandi Park Main Rd Ghanshyam Nagar, Nandi Park Main Rd, Ghanshyam Nagar, Rajkot, Gujarat 360005, India', '0', '360005', 'Gujarat', 'India', 1),
(12, 66, 2, '2020-05-13', 4, '{\"dip\":\"2\"}', '2020-05-14', '', NULL, 600, '0.00', 0, 2, '22.28418106673757,70.75902926957721', '6 Nandi Park Main Rd Ghanshyam Nagar, Nandi Park Main Rd, Ghanshyam Nagar, Rajkot, Gujarat 360005, India', '0', '360005', 'Gujarat', 'India', 1),
(13, 66, 2, '2020-05-13', 4, '{\"dip\":\"2\"}', '2020-05-14', '', NULL, 600, '0.00', 0, 1, '22.28418106673757,70.75902926957721', '6 Nandi Park Main Rd Ghanshyam Nagar, Nandi Park Main Rd, Ghanshyam Nagar, Rajkot, Gujarat 360005, India', '0', '360005', 'Gujarat', 'India', 1),
(14, 66, 2, '2020-05-13', 4, '{\"dip\":\"2\"}', '2020-05-14', '', NULL, 600, '0.00', 0, 2, '22.28418106673757,70.75902926957721', '6 Nandi Park Main Rd Ghanshyam Nagar, Nandi Park Main Rd, Ghanshyam Nagar, Rajkot, Gujarat 360005, India', '0', '360005', 'Gujarat', 'India', 1),
(15, 66, 2, '2020-05-13', 4, '{\"dip\":\"2\"}', '2020-05-14', '', NULL, 200, '0.00', 0, 1, '22.28418106673757,70.75902926957721', '6 Nandi Park Main Rd Ghanshyam Nagar, Nandi Park Main Rd, Ghanshyam Nagar, Rajkot, Gujarat 360005, India', '0', '360005', 'Gujarat', 'India', 1),
(16, 66, 2, '2020-05-13', 4, '{\"dip\":\"2\"}', '2020-05-14', '', NULL, 200, '0.00', 0, 1, '22.28418106673757,70.75902926957721', '6 Nandi Park Main Rd Ghanshyam Nagar, Nandi Park Main Rd, Ghanshyam Nagar, Rajkot, Gujarat 360005, India', '0', '360005', 'Gujarat', 'India', 1),
(17, 66, 2, '2020-05-13', 4, '{\"dip\":\"2\"}', '2020-05-14', '', NULL, 600, '0.00', 0, 2, '22.28418106673757,70.75902926957721', '6 Nandi Park Main Rd Ghanshyam Nagar, Nandi Park Main Rd, Ghanshyam Nagar, Rajkot, Gujarat 360005, India', '0', '360005', 'Gujarat', 'India', 1),
(18, 66, 2, '2020-05-13', 4, '{\"dip\":\"2\"}', '2020-05-14', '', NULL, 600, '0.00', 0, 1, '22.28418106673757,70.75902926957721', '6 Nandi Park Main Rd Ghanshyam Nagar, Nandi Park Main Rd, Ghanshyam Nagar, Rajkot, Gujarat 360005, India', '0', '360005', 'Gujarat', 'India', 1),
(19, 66, 2, '2020-05-13', 4, '{\"dip\":\"2\"}', '2020-05-14', '', NULL, 600, '0.00', 0, 2, '22.28418106673757,70.75902926957721', '6 Nandi Park Main Rd Ghanshyam Nagar, Nandi Park Main Rd, Ghanshyam Nagar, Rajkot, Gujarat 360005, India', '0', '360005', 'Gujarat', 'India', 1),
(20, 66, 2, '2020-05-13', 4, '{\"dip\":\"2\"}', '2020-05-14', '', NULL, 200, '0.00', 0, 1, '22.28418106673757,70.75902926957721', '6 Nandi Park Main Rd Ghanshyam Nagar, Nandi Park Main Rd, Ghanshyam Nagar, Rajkot, Gujarat 360005, India', '0', '360005', 'Gujarat', 'India', 1),
(21, 66, 2, '2020-05-13', 4, '{\"dip\":\"2\"}', '2020-05-14', '', NULL, 200, '0.00', 0, 1, '22.28418106673757,70.75902926957721', '6 Nandi Park Main Rd Ghanshyam Nagar, Nandi Park Main Rd, Ghanshyam Nagar, Rajkot, Gujarat 360005, India', '0', '360005', 'Gujarat', 'India', 1),
(22, 66, 2, '2020-05-13', 4, '{\"dip\":\"2\"}', '2020-05-14', '', NULL, 600, '0.00', 0, 2, '22.28418106673757,70.75902926957721', '6 Nandi Park Main Rd Ghanshyam Nagar, Nandi Park Main Rd, Ghanshyam Nagar, Rajkot, Gujarat 360005, India', '0', '360005', 'Gujarat', 'India', 1),
(23, 66, 2, '2020-05-13', 4, '{\"dip\":\"2\"}', '2020-05-14', '', NULL, 600, '0.00', 0, 1, '22.28418106673757,70.75902926957721', '6 Nandi Park Main Rd Ghanshyam Nagar, Nandi Park Main Rd, Ghanshyam Nagar, Rajkot, Gujarat 360005, India', '0', '360005', 'Gujarat', 'India', 1),
(24, 66, 2, '2020-05-13', 4, '{\"dip\":\"2\"}', '2020-05-14', '', NULL, 600, '0.00', 0, 2, '22.28418106673757,70.75902926957721', '6 Nandi Park Main Rd Ghanshyam Nagar, Nandi Park Main Rd, Ghanshyam Nagar, Rajkot, Gujarat 360005, India', '0', '360005', 'Gujarat', 'India', 1),
(25, 66, 2, '2020-05-13', 4, '{\"dip\":\"2\"}', '2020-05-14', '', NULL, 200, '0.00', 0, 1, '22.28418106673757,70.75902926957721', '6 Nandi Park Main Rd Ghanshyam Nagar, Nandi Park Main Rd, Ghanshyam Nagar, Rajkot, Gujarat 360005, India', '0', '360005', 'Gujarat', 'India', 1),
(26, 66, 2, '2020-05-14', 5, '{\"dip\":\"2\"}', '2020-05-15', '', NULL, 1, '200.00', 0, 1, '22.28418106673757,70.75902926957721', '6 Nandi Park Main Rd Ghanshyam Nagar, Nandi Park Main Rd, Ghanshyam Nagar, Rajkot, Gujarat 360005, India', '0', '360005', 'Gujarat', 'India', 1),
(27, 66, 2, '2020-05-14', 5, '{\"dip\":\"2\"}', '2020-05-15', '', NULL, 3, '600.00', 0, 2, '22.28418106673757,70.75902926957721', '6 Nandi Park Main Rd Ghanshyam Nagar, Nandi Park Main Rd, Ghanshyam Nagar, Rajkot, Gujarat 360005, India', '0', '360005', 'Gujarat', 'India', 1),
(28, 66, 2, '2020-05-14', 5, '{\"dip\":\"2\"}', '2020-05-15', '', NULL, 3, '600.00', 0, 1, '22.28418106673757,70.75902926957721', '6 Nandi Park Main Rd Ghanshyam Nagar, Nandi Park Main Rd, Ghanshyam Nagar, Rajkot, Gujarat 360005, India', '0', '360005', 'Gujarat', 'India', 1),
(29, 66, 2, '2020-05-14', 5, '{\"dip\":\"2\"}', '2020-05-15', '', NULL, 3, '600.00', 0, 2, '22.28418106673757,70.75902926957721', '6 Nandi Park Main Rd Ghanshyam Nagar, Nandi Park Main Rd, Ghanshyam Nagar, Rajkot, Gujarat 360005, India', '0', '360005', 'Gujarat', 'India', 1),
(30, 66, 2, '2020-05-14', 5, '{\"dip\":\"2\"}', '2020-05-15', '', NULL, 1, '200.00', 0, 1, '22.28418106673757,70.75902926957721', '6 Nandi Park Main Rd Ghanshyam Nagar, Nandi Park Main Rd, Ghanshyam Nagar, Rajkot, Gujarat 360005, India', '0', '360005', 'Gujarat', 'India', 2),
(31, 66, 1, '2020-05-17', 1, '{\"ABCD\":\"1\"}', '2020-05-18', '2 PM', 1, 4, '0.00', 16, 2, '22.3231127,70.7785746', ' asdf sdaf dsf asf, Jamnagar Bypass Road', 'Jamnagar', '360004', 'Gujarat', 'India', 3);

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

CREATE TABLE `order_item` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_details_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `fruits_name` text NOT NULL,
  `items` int(5) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `total_price` decimal(8,2) NOT NULL,
  `credit` int(11) NOT NULL,
  `total_credit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_item`
--

INSERT INTO `order_item` (`id`, `product_id`, `order_details_id`, `name`, `fruits_name`, `items`, `price`, `total_price`, `credit`, `total_credit`) VALUES
(1, 1, 1, 'ABCD', '[\"Apple\":28,\"banana\":34,\"Strawberry\":31,\"Grapes\":32,\"Orange\":33]', 2, '0.00', '0.00', 4, 8),
(4, 1, 4, 'ABCD', '[\"APPLE\",\"Strawberry\",\"Grapes\",\"Orange\",\"Banana\"]', 2, '0.00', '0.00', 4, 8),
(5, 2, 6, '', '[\"APPLE\",\"Strawberry\",\"Grapes\",\"Orange\",\"Banana\"]', 1, '200.00', '0.00', 0, 0),
(6, 2, 7, '', '[\"APPLE\",\"Strawberry\",\"Grapes\",\"Orange\",\"Banana\"]', 3, '200.00', '0.00', 0, 0),
(7, 2, 8, '', '[\"APPLE\",\"Strawberry\",\"Grapes\",\"Orange\",\"Banana\"]', 3, '200.00', '0.00', 0, 0),
(8, 2, 9, '', '[\"APPLE\",\"Strawberry\",\"Grapes\",\"Orange\",\"Banana\"]', 3, '200.00', '0.00', 0, 0),
(9, 2, 10, '', '[\"APPLE\",\"Strawberry\",\"Grapes\",\"Orange\",\"Banana\"]', 1, '200.00', '0.00', 0, 0),
(10, 2, 11, '', '[\"APPLE\",\"Strawberry\",\"Grapes\",\"Orange\",\"Banana\"]', 1, '200.00', '200.00', 0, 0),
(11, 2, 12, '', '[\"APPLE\",\"Strawberry\",\"Grapes\",\"Orange\",\"Banana\"]', 3, '200.00', '600.00', 0, 0),
(12, 2, 13, '', '[\"APPLE\",\"Strawberry\",\"Grapes\",\"Orange\",\"Banana\"]', 3, '200.00', '600.00', 0, 0),
(13, 2, 14, '', '[\"APPLE\",\"Strawberry\",\"Grapes\",\"Orange\",\"Banana\"]', 3, '200.00', '600.00', 0, 0),
(14, 2, 15, '', '[\"APPLE\",\"Strawberry\",\"Grapes\",\"Orange\",\"Banana\"]', 1, '200.00', '200.00', 0, 0),
(15, 2, 16, '', '[\"APPLE\",\"Strawberry\",\"Grapes\",\"Orange\",\"Banana\"]', 1, '200.00', '200.00', 0, 0),
(16, 2, 17, '', '[\"APPLE\",\"Strawberry\",\"Grapes\",\"Orange\",\"Banana\"]', 3, '200.00', '600.00', 0, 0),
(17, 2, 18, '', '[\"APPLE\",\"Strawberry\",\"Grapes\",\"Orange\",\"Banana\"]', 3, '200.00', '600.00', 0, 0),
(18, 2, 19, '', '[\"APPLE\",\"Strawberry\",\"Grapes\",\"Orange\",\"Banana\"]', 3, '200.00', '600.00', 0, 0),
(19, 2, 20, '', '[\"APPLE\",\"Strawberry\",\"Grapes\",\"Orange\",\"Banana\"]', 1, '200.00', '200.00', 0, 0),
(20, 2, 21, 'dip', '[\"APPLE\",\"Strawberry\",\"Grapes\",\"Orange\",\"Banana\"]', 1, '200.00', '200.00', 0, 0),
(21, 2, 22, 'dip', '[\"APPLE\",\"Strawberry\",\"Grapes\",\"Orange\",\"Banana\"]', 3, '200.00', '600.00', 0, 0),
(22, 2, 23, 'dip', '[\"APPLE\",\"Strawberry\",\"Grapes\",\"Orange\",\"Banana\"]', 3, '200.00', '600.00', 0, 0),
(23, 2, 24, 'dip', '[\"APPLE\",\"Strawberry\",\"Grapes\",\"Orange\",\"Banana\"]', 3, '200.00', '600.00', 0, 0),
(24, 2, 25, 'dip', '[\"APPLE\",\"Strawberry\",\"Grapes\",\"Orange\",\"Banana\"]', 1, '200.00', '200.00', 0, 0),
(25, 2, 26, 'dip', '[\"APPLE\",\"Strawberry\",\"Grapes\",\"Orange\",\"Banana\"]', 1, '200.00', '200.00', 0, 0),
(26, 2, 27, 'dip', '[\"APPLE\",\"Strawberry\",\"Grapes\",\"Orange\",\"Banana\"]', 3, '200.00', '600.00', 0, 0),
(27, 2, 28, 'dip', '[\"APPLE\",\"Strawberry\",\"Grapes\",\"Orange\",\"Banana\"]', 3, '200.00', '600.00', 0, 0),
(28, 2, 29, 'dip', '[\"APPLE\",\"Strawberry\",\"Grapes\",\"Orange\",\"Banana\"]', 3, '200.00', '600.00', 0, 0),
(29, 2, 30, 'dip', '[\"APPLE\",\"Strawberry\",\"Grapes\",\"Orange\",\"Banana\"]', 1, '200.00', '200.00', 0, 0),
(30, 1, 31, 'ABCD', '[\"APPLE\",\"Strawberry\",\"Grapes\",\"Orange\",\"Banana\"]', 4, '0.00', '0.00', 4, 16);

-- --------------------------------------------------------

--
-- Table structure for table `order_loading`
--

CREATE TABLE `order_loading` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `week_day` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1= monday...7= sunday  ',
  `ala_carte_loading` int(11) NOT NULL,
  `subscription_loading` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_loading`
--

INSERT INTO `order_loading` (`id`, `name`, `week_day`, `ala_carte_loading`, `subscription_loading`) VALUES
(1, '2 PM', 1, 10, 20),
(2, '2 PM', 2, 20, 15),
(3, '2 PM', 3, 2, 2),
(4, '2 PM', 4, 3, 3),
(5, '2 PM', 5, 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE `partner` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` text NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `partner`
--

INSERT INTO `partner` (`id`, `name`, `img`, `link`) VALUES
(11, 'ADMIN', 'user_demo.png', 'HTTP://WWW.GOOGLE.COM/'),
(12, 'aloha', '5e6a37b1b3088.png', 'https://www.alohacreativeagency.com/');

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

CREATE TABLE `people` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`id`, `name`, `comment`, `img`) VALUES
(7, 'ADMIN', 'QUICKLY IDENTIFY ', 'user_demo.png'),
(8, ' Johnson Andrew', 'Choose from our 10 handcrafted curated fruit boxes, date and time. Choose from our 10 handcrafted curated fruit boxes, date and time', '5e6a3b391cce6.png');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `type` tinyint(1) NOT NULL COMMENT '1=ala carte,2=subscription',
  `img` text NOT NULL,
  `name` varchar(55) NOT NULL,
  `fruit_ids` text NOT NULL,
  `min_credit` int(11) NOT NULL,
  `price` float(8,2) NOT NULL,
  `price1` decimal(8,2) NOT NULL,
  `price2` decimal(8,2) NOT NULL,
  `price3` decimal(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `type`, `img`, `name`, `fruit_ids`, `min_credit`, `price`, `price1`, `price2`, `price3`) VALUES
(1, 1, 'user_demo.png', 'ABCD', '[\"28\",\"31\",\"32\",\"33\",\"34\"]', 4, 0.00, '0.00', '0.00', '0.00'),
(2, 2, '5ec929f3183b8.png', 'dip', '[\"28\",\"31\",\"32\",\"33\",\"34\"]', 0, 100.00, '125.00', '150.00', '200.00'),
(3, 1, '5e900c17df4b2.png', 'dip', '[\"28\",\"31\",\"32\",\"33\",\"34\",\"35\"]', 20, 0.00, '0.00', '0.00', '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` text NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `name`, `img`, `link`) VALUES
(7, 'ADMIN', '5e6f2ea6e8d9e.png', 'HTTP://WWW.GOOGLE.COM/');

-- --------------------------------------------------------

--
-- Table structure for table `slidermain`
--

CREATE TABLE `slidermain` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` text NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slidermain`
--

INSERT INTO `slidermain` (`id`, `name`, `img`, `link`) VALUES
(11, 'slider3', '5e6f47c172d3e.png', 'http://google.com'),
(12, 'slider 2', '5e6f390c17ac7.png', 'https://www.google.com/');

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `products_ids` text NOT NULL,
  `products` text NOT NULL,
  `total_amount` decimal(10,2) NOT NULL,
  `day_of_week` varchar(5) NOT NULL,
  `last_order_date` date DEFAULT NULL,
  `next_order_date` date DEFAULT NULL,
  `address_type` tinyint(1) NOT NULL,
  `address` text NOT NULL,
  `latitude` varchar(55) NOT NULL,
  `longitude` varchar(55) NOT NULL,
  `city` varchar(255) NOT NULL,
  `postalcode` int(10) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `stripe_card_id` text NOT NULL,
  `days` text NOT NULL,
  `fruit` text NOT NULL,
  `card` int(5) NOT NULL,
  `card_type` varchar(55) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscription`
--

INSERT INTO `subscription` (`id`, `user_id`, `from_date`, `to_date`, `products_ids`, `products`, `total_amount`, `day_of_week`, `last_order_date`, `next_order_date`, `address_type`, `address`, `latitude`, `longitude`, `city`, `postalcode`, `state`, `country`, `stripe_card_id`, `days`, `fruit`, `card`, `card_type`, `status`) VALUES
(1, 66, '2020-05-12', '2020-05-20', '{\"Mg==\":{\"c\":1,\"p\":\"200.00\"}}', '[{\"id\":\"2\",\"type\":\"2\",\"img\":\"5e8dc2c6c75d5.png\",\"name\":\"dip\",\"fruit_ids\":\"[\\\"28\\\",\\\"31\\\",\\\"32\\\",\\\"33\\\",\\\"34\\\"]\",\"min_credit\":\"0\",\"price\":\"200.00\",\"fruit\":[\"APPLE\",\"Strawberry\",\"Grapes\",\"Orange\",\"Banana\"],\"item\":1,\"total_amount\":200}]', '200.00', '5d', '2020-05-15', '2020-05-16', 1, '6 Nandi Park Main Rd Ghanshyam Nagar, Nandi Park Main Rd, Ghanshyam Nagar, Rajkot, Gujarat 360005, India', '22.28418106673757', '70.75902926957721', '0', 360005, 'Gujarat', 'India', 'card_1GfLLMC8LWDsx1pc4WiCmbZl', '[1,2,3,4,5]', '{\"1\":[\"28\",\"31\"]}', 1234, 'VISA', 0),
(2, 66, '2020-05-12', '2020-05-20', '{\"Mg==\":{\"c\":3,\"p\":\"200.00\"}}', '[{\"id\":\"2\",\"type\":\"2\",\"img\":\"5e8dc2c6c75d5.png\",\"name\":\"dip\",\"fruit_ids\":\"[\\\"28\\\",\\\"31\\\",\\\"32\\\",\\\"33\\\",\\\"34\\\"]\",\"min_credit\":\"0\",\"price\":\"200.00\",\"fruit\":[\"APPLE\",\"Strawberry\",\"Grapes\",\"Orange\",\"Banana\"],\"item\":3,\"total_amount\":600}]', '600.00', '5d', '2020-05-15', '2020-05-16', 2, '6 Nandi Park Main Rd Ghanshyam Nagar, Nandi Park Main Rd, Ghanshyam Nagar, Rajkot, Gujarat 360005, India', '22.28418106673757', '70.75902926957721', '0', 360005, 'Gujarat', 'India', 'card_1GfLLMC8LWDsx1pc4WiCmbZl', '[1,2,3,4,5]', '{\"1\":[\"28\",\"31\"]}', 1234, 'VISA', 0),
(3, 66, '2020-05-12', '2020-05-20', '{\"Mg==\":{\"c\":3,\"p\":\"200.00\"}}', '[{\"id\":\"2\",\"type\":\"2\",\"img\":\"5e8dc2c6c75d5.png\",\"name\":\"dip\",\"fruit_ids\":\"[\\\"28\\\",\\\"31\\\",\\\"32\\\",\\\"33\\\",\\\"34\\\"]\",\"min_credit\":\"0\",\"price\":\"200.00\",\"fruit\":[\"APPLE\",\"Strawberry\",\"Grapes\",\"Orange\",\"Banana\"],\"item\":3,\"total_amount\":600}]', '600.00', '5d', '2020-05-15', '2020-05-16', 1, '6 Nandi Park Main Rd Ghanshyam Nagar, Nandi Park Main Rd, Ghanshyam Nagar, Rajkot, Gujarat 360005, India', '22.28418106673757', '70.75902926957721', '0', 360005, 'Gujarat', 'India', 'card_1GfLLMC8LWDsx1pc4WiCmbZl', '[1,2,3,4,5]', '{\"1\":[\"28\",\"31\"]}', 1234, 'VISA', 0),
(4, 66, '2020-05-12', '2020-05-20', '{\"Mg==\":{\"c\":3,\"p\":\"200.00\"}}', '[{\"id\":\"2\",\"type\":\"2\",\"img\":\"5e8dc2c6c75d5.png\",\"name\":\"dip\",\"fruit_ids\":\"[\\\"28\\\",\\\"31\\\",\\\"32\\\",\\\"33\\\",\\\"34\\\"]\",\"min_credit\":\"0\",\"price\":\"200.00\",\"fruit\":[\"APPLE\",\"Strawberry\",\"Grapes\",\"Orange\",\"Banana\"],\"item\":3,\"total_amount\":600}]', '600.00', '5d', '2020-05-15', '2020-05-16', 2, '6 Nandi Park Main Rd Ghanshyam Nagar, Nandi Park Main Rd, Ghanshyam Nagar, Rajkot, Gujarat 360005, India', '22.28418106673757', '70.75902926957721', '0', 360005, 'Gujarat', 'India', 'card_1GfLLMC8LWDsx1pc4WiCmbZl', '[1,2,3,4,5]', '{\"1\":[\"28\",\"31\"]}', 1234, 'VISA', 0),
(5, 66, '2020-05-13', '2020-05-21', '{\"Mg==\":{\"c\":1,\"p\":\"200.00\"}}', '[{\"id\":\"2\",\"type\":\"2\",\"img\":\"5e8dc2c6c75d5.png\",\"name\":\"dip\",\"fruit_ids\":\"[\\\"28\\\",\\\"31\\\",\\\"32\\\",\\\"33\\\",\\\"34\\\"]\",\"min_credit\":\"0\",\"price\":\"200.00\",\"fruit\":[\"APPLE\",\"Strawberry\",\"Grapes\",\"Orange\",\"Banana\"],\"item\":1,\"total_amount\":200}]', '200.00', '5d', '2020-05-15', '2020-05-16', 1, '6 Nandi Park Main Rd Ghanshyam Nagar, Nandi Park Main Rd, Ghanshyam Nagar, Rajkot, Gujarat 360005, India', '22.28418106673757', '70.75902926957721', '0', 360005, 'Gujarat', 'India', 'card_1GhJe5C8LWDsx1pcGpAWXPLl', '[1,2,3,4,5]', '{\"1\":[\"28\",\"31\"]}', 1234, 'VISA', 0),
(6, 66, '2020-05-24', '2020-06-22', '{\"Mg==\":{\"c\":3,\"p\":\"200.00\"}}', '[{\"id\":\"2\",\"type\":\"2\",\"img\":\"5ec929f3183b8.png\",\"name\":\"dip\",\"fruit_ids\":\"[\\\"28\\\",\\\"31\\\",\\\"32\\\",\\\"33\\\",\\\"34\\\"]\",\"min_credit\":\"0\",\"price\":\"100.00\",\"price1\":\"125.00\",\"price2\":\"150.00\",\"price3\":\"200.00\",\"fruit\":[\"APPLE\",\"Strawberry\",\"Grapes\",\"Orange\",\"Banana\"],\"item\":3,\"total_amount\":600}]', '600.00', '1d2w', NULL, NULL, 2, 'Jamnagar Bypass Road, GIDC Phase III, GIDC Phase-2, Dared, Jamnagar, Gujarat, India', '22.3231127', '70.7785746', 'Jamnagar', 360004, 'Gujarat', 'India', 'card_1GfLLMC8LWDsx1pc4WiCmbZl', '[3]', '{\"1\":[null,null,null,null,\"28\",\"31\",null],\"2\":[\"31\"],\"3\":[\"32\",\"28\"]}', 5556, 'Visa', 0);

-- --------------------------------------------------------

--
-- Stand-in structure for view `today_order`
-- (See below for the actual view)
--
CREATE TABLE `today_order` (
`delivered_on_date` date
,`delivered_on_day` tinyint(1)
,`order_loading_id` int(11)
,`total_item_sum` decimal(32,0)
,`type` tinyint(1)
);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `username` varchar(55) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(13) NOT NULL,
  `password` text NOT NULL,
  `img` text NOT NULL,
  `lastattempt` bigint(20) NOT NULL,
  `attempt` tinyint(1) NOT NULL DEFAULT 0,
  `ip_attempt` varchar(64) DEFAULT NULL,
  `email_v` varchar(255) NOT NULL,
  `strip_id` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `username`, `email`, `mobile`, `password`, `img`, `lastattempt`, `attempt`, `ip_attempt`, `email_v`, `strip_id`, `status`) VALUES
(44, 'ADMIN ', 'ADMIN', 'ADMIN', 'ADMIN@GMAIL.COM', '7894562031', '', '5e6a453d876ac.png', 1584040561, 0, NULL, '', '', 1),
(57, 'ADMIN ', 'ADMIN', 'ADMINADMIN', 'ADMINGBF@GMAIL.COM', '7894563199', '', '5e6a449e0a630.png', 1584040561, 0, NULL, '', '', 1),
(58, 'parth', 'parth', 'parth', 'parth@gmail.com', '8264651501', 'admin', '5e6ca301d0e96.png', 1590245910, 0, '::1', '', '', 1),
(66, 'parth', 'ajudiya', 'Parthajudiya', 'parth.p.ajudiya@gmail.com', '8264651501', 'P@rth008', '5e7d98db4a7fd.png', 1590245910, 0, '::1', '85325', 'cus_H5ENacdyQzgv1W', 1);

-- --------------------------------------------------------

--
-- Table structure for table `vitamin`
--

CREATE TABLE `vitamin` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vitamin`
--

INSERT INTO `vitamin` (`id`, `name`) VALUES
(12, 'Vitamin D'),
(13, 'Vitamin B-6'),
(14, 'Vitamin C'),
(15, 'Vitamin B1 (Thiamine)'),
(16, 'Vitamin B2 (Riboflavin)'),
(17, 'Vitamin B3 (Niacin)'),
(18, 'Vitamin B5 (Pantothenic acid)'),
(19, 'Vitamin B6 (Pyridoxine)'),
(20, 'Vitamin B9 (Folic acid)'),
(21, 'Vitamin B12 (Cobalamin)'),
(22, 'Vitamin H (Biotin)'),
(23, 'Vitamin C (Ascorbic acid)'),
(24, 'Vitamin A (Retinoids)');

-- --------------------------------------------------------

--
-- Structure for view `today_order`
--
DROP TABLE IF EXISTS `today_order`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `today_order`  AS  select `order_details`.`delivered_on_date` AS `delivered_on_date`,`order_details`.`delivered_on_day` AS `delivered_on_day`,`order_details`.`order_loading_id` AS `order_loading_id`,sum(`order_details`.`total_item`) AS `total_item_sum`,`order_details`.`type` AS `type` from `order_details` group by `order_details`.`delivered_on_date`,`order_details`.`order_loading_id`,`order_details`.`type` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alacarte`
--
ALTER TABLE `alacarte`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_category`
--
ALTER TABLE `blog_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favorite`
--
ALTER TABLE `favorite`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fruit`
--
ALTER TABLE `fruit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ledger`
--
ALTER TABLE `ledger`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `local_setting`
--
ALTER TABLE `local_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_item`
--
ALTER TABLE `order_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_loading`
--
ALTER TABLE `order_loading`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slidermain`
--
ALTER TABLE `slidermain`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscription`
--
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vitamin`
--
ALTER TABLE `vitamin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `alacarte`
--
ALTER TABLE `alacarte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog_category`
--
ALTER TABLE `blog_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `favorite`
--
ALTER TABLE `favorite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fruit`
--
ALTER TABLE `fruit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `ledger`
--
ALTER TABLE `ledger`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `order_item`
--
ALTER TABLE `order_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `order_loading`
--
ALTER TABLE `order_loading`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `partner`
--
ALTER TABLE `partner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `people`
--
ALTER TABLE `people`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `slidermain`
--
ALTER TABLE `slidermain`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `subscription`
--
ALTER TABLE `subscription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `vitamin`
--
ALTER TABLE `vitamin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
