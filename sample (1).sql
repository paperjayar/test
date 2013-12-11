-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 11, 2013 at 05:43 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sample`
--

-- --------------------------------------------------------

--
-- Table structure for table `cruds`
--

CREATE TABLE IF NOT EXISTS `cruds` (
  `crud_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `crud_value` varchar(255) NOT NULL,
  PRIMARY KEY (`crud_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `cruds`
--

INSERT INTO `cruds` (`crud_id`, `name`, `crud_value`) VALUES
(7, '', 'dsadasdasd');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `items_id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `photo_url` varchar(255) NOT NULL,
  `episode` varchar(255) NOT NULL,
  `site` varchar(255) NOT NULL,
  `views` int(255) NOT NULL DEFAULT '0',
  `datetime` varchar(255) NOT NULL,
  PRIMARY KEY (`items_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`items_id`, `name`, `photo_url`, `episode`, `site`, `views`, `datetime`) VALUES
(1, 'Kagney Karter', 'http://www.paperstreetmedia.com/search/images/kagney_karter.jpg', 'Eye On The Balls', 'The Real Workout', 22, '2012-08-24 00:00:00'),
(2, 'Kylie Wylde', 'http://www.paperstreetmedia.com/search/images/kylie_wylde.jpg', 'All up in There', 'Solo Interviews', 15, '2012-08-16 00:00:00'),
(3, 'Tami Martinelly', 'http://www.paperstreetmedia.com/search/images/tami_martinelly.jpg', 'Hookup Hangup', 'Oye Loca', 6, '2012-08-09 00:00:00'),
(4, 'Ally Ann', 'http://www.paperstreetmedia.com/search/images/ally_ann.jpg', 'On The House', 'Innocent High', 2, '2012-08-01 00:00:00'),
(5, 'jayar', 'http://static3.wikia.nocookie.net/__cb20120819083414/naruto/images/e/e3/Deva_Path.png', 'Six Paths of Pain', 'naruto shipuuden', 10, '2013-12-31'),
(6, 'neji', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRc0Jca9XYsutsMtIlQT1D94dmo61E8-_BtEYVEEo3fFc8uEU0OIw', 'naruto - episode 1', 'naruto shipuuden', 11, '2013-12-23'),
(7, 'lee', 'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcQROqpl80K-Q7r9L53sranMw2ai2Sqb30pk08BGwcWNBfWvIx_b', 'naruto - episode 3', 'naruto shipuuden', 4, '2013-12-02'),
(8, 'gaara', 'http://static1.wikia.nocookie.net/__cb20100925142053/naruto/images/9/90/Gaara_part_1.jpg', 'naruto - episode 3', 'naruto shipuuden', 2, '2013-12-04'),
(9, 'sasuke', 'http://static1.wikia.nocookie.net/__cb20111112213451/naruto/images/f/f0/Sasuke.jpeg', 'naruto - episode 5', 'naruto shipuuden', 0, '2013-12-27'),
(10, 'kiba', 'http://images2.wikia.nocookie.net/__cb20130419221124/narutofanon/images/6/6d/Gen_Kiba.jpg', 'naruto - episode 22', 'naruto shipuuden', 0, '2013-12-28'),
(11, 'shino', 'http://images2.wikia.nocookie.net/__cb20110430180713/naruto/images/f/fb/Shino2.jpg', 'naruto - episode 11', 'naruto shipuuden', 1, '2013-12-05');

-- --------------------------------------------------------

--
-- Table structure for table `rates`
--

CREATE TABLE IF NOT EXISTS `rates` (
  `rates_id` int(255) NOT NULL AUTO_INCREMENT,
  `items_id` int(255) NOT NULL,
  `rate_value` int(255) NOT NULL,
  PRIMARY KEY (`rates_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=110 ;

--
-- Dumping data for table `rates`
--

INSERT INTO `rates` (`rates_id`, `items_id`, `rate_value`) VALUES
(1, 1, 6),
(2, 1, 6),
(3, 1, 7),
(4, 1, 6),
(5, 1, 9),
(6, 1, 5),
(7, 1, 6),
(8, 1, 7),
(9, 1, 5),
(10, 1, 5),
(11, 1, 6),
(12, 1, 6),
(13, 1, 6),
(14, 1, 6),
(15, 1, 10),
(16, 1, 10),
(17, 1, 10),
(18, 1, 10),
(19, 1, 9),
(20, 1, 7),
(21, 1, 10),
(22, 1, 10),
(23, 1, 10),
(24, 1, 10),
(25, 1, 10),
(26, 2, 10),
(27, 2, 10),
(28, 2, 9),
(29, 2, 7),
(30, 2, 5),
(31, 2, 2),
(32, 2, 1),
(33, 2, 10),
(34, 3, 7),
(35, 4, 5),
(36, 1, 8),
(37, 1, 10),
(38, 1, 5),
(39, 1, 10),
(40, 2, 8),
(41, 4, 10),
(42, 4, 10),
(43, 4, 10),
(44, 4, 10),
(45, 4, 10),
(46, 4, 10),
(47, 4, 10),
(48, 4, 10),
(49, 4, 10),
(50, 5, 8),
(51, 5, 10),
(52, 5, 10),
(53, 5, 10),
(54, 5, 10),
(55, 5, 10),
(56, 5, 10),
(57, 5, 10),
(58, 5, 10),
(59, 5, 10),
(60, 11, 10),
(61, 11, 10),
(62, 11, 10),
(63, 11, 10),
(64, 11, 10),
(65, 11, 10),
(66, 11, 10),
(67, 11, 10),
(68, 11, 10),
(69, 11, 10),
(70, 11, 10),
(71, 6, 10),
(72, 6, 10),
(73, 6, 10),
(74, 6, 10),
(75, 6, 9),
(76, 6, 8),
(77, 6, 7),
(78, 6, 10),
(79, 6, 10),
(80, 6, 10),
(81, 6, 10),
(82, 6, 10),
(83, 6, 10),
(84, 6, 10),
(85, 6, 10),
(86, 6, 10),
(87, 6, 10),
(88, 6, 10),
(89, 6, 10),
(90, 6, 10),
(91, 6, 10),
(92, 6, 10),
(93, 6, 10),
(94, 6, 10),
(95, 6, 10),
(96, 6, 10),
(97, 6, 10),
(98, 6, 10),
(99, 6, 10),
(100, 6, 10),
(101, 6, 10),
(102, 6, 10),
(103, 6, 10),
(104, 6, 10),
(105, 6, 10),
(106, 8, 10),
(107, 8, 1),
(108, 8, 10),
(109, 8, 10);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'administrator'),
(2, 'default');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `settings_id` int(11) NOT NULL AUTO_INCREMENT,
  `settings_name` varchar(50) NOT NULL,
  `settings_value` varchar(50) NOT NULL,
  `readable_name` varchar(50) NOT NULL,
  `group` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `show` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0-editable;1-no',
  `options` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`settings_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`settings_id`, `settings_name`, `settings_value`, `readable_name`, `group`, `type`, `show`, `options`) VALUES
(1, 'site_title', 'S A M P L E', 'Site Title', 'site setting', 'text', 0, NULL),
(2, 'meta_description', 'S A M P L E', 'Meta-description', 'site setting', 'text', 0, NULL),
(3, 'meta_keyword', 'S A M P L E', 'Meta_keyword', 'site setting', 'text', 0, NULL),
(4, 'site_mail', 'sample@gmail.com', 'Site Email', 'site setting', 'text', 0, NULL),
(5, 'site_user', 'sample', 'Site User', 'site setting', 'text', 0, NULL),
(6, 'site_header', 'http://localhost/sample', 'Site Header', 'site setting', 'text', 0, NULL),
(7, 'footer_copyright', '© Copyright 2013 ', 'Footer Copyright', 'site setting', 'text', 0, NULL),
(8, 'address_full', '20 Milner Estate  East London  5201  ', 'Adress (Full)', 'site setting', 'text', 0, NULL),
(9, 'address_coordinates', 'some coordinates', 'Address (Coordinates)', 'site setting', 'text', 0, NULL),
(10, 'theme_path', 'default', 'Theme Path', '', 'text', 1, NULL),
(18, 'require_email_validation', 'no', 'Require Email Validation', '', 'select', 0, 'yes,no');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
  `tags_id` int(255) NOT NULL AUTO_INCREMENT,
  `items_id` int(255) NOT NULL,
  `items_tag` varchar(255) NOT NULL,
  PRIMARY KEY (`tags_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`tags_id`, `items_id`, `items_tag`) VALUES
(25, 2, 'tits'),
(26, 2, 'boobs'),
(27, 5, 'naruto'),
(28, 6, 'naruto'),
(29, 7, 'naruto');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `user_login` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `role_id` int(255) NOT NULL,
  `user_nicename` varchar(255) NOT NULL,
  `activation_key` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_login`, `user_email`, `user_pass`, `role_id`, `user_nicename`, `activation_key`, `status`) VALUES
(7, 'awaw', 'awaw@awaw.com', '733b5e6a2e24f2764086325a28b6013d', 1, 'awaw', '78388473a10c87762bb14d9385796ed2', 1),
(8, 'wawa', 'wawa@wawa.wawa', '892a9944cf14665375630c06a1902152', 0, 'wawa', '7c8b06627404d3081d30a786d52ff9a9', 1),
(9, 'sample', 'sample@sample.com', '5e8ff9bf55ba3508199d22e984129be6', 0, 'sample', '9c8bf14cc2a6ab37146911964f90ead6', 0),
(10, 'sample2', 'sample2@sample.com', '656b38f3402a1e8b4211fac826efd433', 0, 'sample2', '925c7d63b20dc6f13008be6b5f54cf4d', 1),
(11, 'sample3', 'sample3@sample.com', 'b043c293ecf0bf5c81da0b0fc704d524', 2, 'sample3', '169f771f0b072b3b50a13c56be102593', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users_roles`
--

CREATE TABLE IF NOT EXISTS `users_roles` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `role_id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users_roles`
--

INSERT INTO `users_roles` (`id`, `role_id`, `user_id`) VALUES
(1, 1, 7),
(2, 2, 8),
(3, 2, 9),
(4, 2, 10),
(5, 2, 11);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
