-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2017 at 05:33 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `simply_click`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `category_logo` longtext NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `description`, `category_logo`, `date_created`) VALUES
(1, 'App', 'The word "app" is an abbreviation for application. An app is a piece of software. It can run on the internet, on your computer, or on your phone or any other electronic device. The word "app" is a more modern usage, but this is really the same thing as a software program. \r\n\r\nIn modern use, most people refer to apps as applications or software programs that run specifically on phones or other mobile devices.\r\n\r\nThis is probably the most common way to discuss apps. The Google Play store, for example (which sells movies, e-books, and music in addition to software), has a section on apps and "My apps." Amazon has a section called Appstore for Android. Apple has an App Store for iOS devices. However, these are all just mobile apps.\r\n\r\nWhile the word "app" has gained popularity in the context of mobile devices, it still applies more broadly to programs in general, and this usage has become more common. Apple now sells official software for Macs on the Mac App Store.', 'img/category_app_cover.png', '2017-04-11 14:06:25'),
(2, 'Personal', 'A personal category is a category that is named with your WikiTree ID.\r\n\r\nEach WikiTree ID is unique so when you make a category named with your ID you are making a unique category that will be there exclusively for your use. You can add subcategories to it or you can just use it alone to hold notes and profiles on which you need to do additional work.', 'img/category_personal_cover.png', '2017-04-11 14:11:54'),
(3, 'Author', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'img/category_author_cover.png', '2017-04-11 14:14:14'),
(4, 'Other', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'img/category_other_cover.jpg', '2017-04-11 14:16:25');

-- --------------------------------------------------------

--
-- Table structure for table `theme`
--

CREATE TABLE IF NOT EXISTS `theme` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `theme_image` longtext NOT NULL,
  `url` longtext NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `theme`
--

INSERT INTO `theme` (`id`, `name`, `description`, `theme_image`, `url`, `category_id`, `user_name`, `date_created`) VALUES
(1, 'flatty', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'img/theme_flatty.jpg', '../_templates/App/flatty/', 1, 'Mayank Patodia', '2017-04-11 14:43:30'),
(2, 'xeon', 'xeon is the most amazing theme ever built on this planet. This is so awesome.', 'img/theme_xeon.jpg', '../_templates/App/xeon/', 1, 'Rahul Shaw', '2017-04-11 14:58:46'),
(3, 'grayscale', 'grayscale is the second most awesome theme ever', 'img/grayscae.jpg', '../_templates/Other/grayscale/', 4, 'Rahul Shaw', '2017-04-11 15:05:48');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
