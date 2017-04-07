-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2017 at 01:24 PM
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
(1, 'Personal', 'Your Internet Service Provider or Domain Registrar may offer you free server space for you to create your own website that might include some family photos and an online diary. Usually these will have a web address (URL) looking something like this: www.your-isp.com/~your-user-name/. This type of site is useful for a family, teenagers, grandparents, etc. to stay in touch with each other. This type is not advisable for a small business because the URL is not search engine friendly and the limited server capabilities your hosting company offer may not be sophisticated enough for a small business website. ', 'img/cat1.png', '2017-04-06 16:33:48'),
(2, 'Authors', 'Writer''s and Author''s websites are part of what''s known as the Writer''s or Author''s Platform in the publishing business. The platform includes, a website, a Facebook presence, blog, Twitter account, and the old fashioned mailing list. Many publishers will ask a prospective client about their platform. In other words, "If we publish your book, what sort of a reader base do you already have that we can count on to buy your new publication?" Fairly weighty request, wouldn''t you say? For now, let''s concentrate on the website part. A writers website would include a biography, a catalog of published books and works, perhaps excerpts from some works, links to publications on sites like Amazon.com, a link to the writer''s blog, reviews and comments on the author''s publications. You get the idea, and that is to build a following, a fan base to which future publications can be directly marketed. ', 'img/cat2.png', '2017-04-06 16:36:49'),
(4, 'Photo sharing', 'These types of website are cropping up like fleas on dog. There are web sites like, Flickr.com, Photosite.com, and Google''s Picasa. There could easily be over a hundred such sites that offer free photo sharing paid for by their online advertising. Also, many digital cameras and photo printers now come with software enabling mere mortals to create digital photo slide shows and upload them to the web. Most smart phones have apps to accomplish the same ends. ', 'img/cat3.png', '2017-04-06 16:36:49');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `theme`
--

INSERT INTO `theme` (`id`, `name`, `description`, `theme_image`, `url`, `category_id`, `user_name`, `date_created`) VALUES
(1, 'blog website', 'People took the words Web Logs and shortened it to Blogs—online diaries, journals, or editorials, if you will. My, how Blogs have taken over the Internet. A person used to be outdated if he/she did not have a website, now having a blog is de rigeur. A blog owner will log-on daily, weekly, or whenever, and write about whatever is going on in their lives or business, or they may comment on politics and news. How wonderful the Internet is! ', 'img/theme1.png', '#', 1, 'rahul shaw', '2017-04-06 18:56:11'),
(2, 'information website', 'A major informational site is wikipedia.org, the online encyclopedia. And it is unique, because it allows members to contribute and edit articles. Now your small business may not want such a comprehensive site, but if you have information to share or sell, an informational website would fill the bill. Suppose you have a landscaping business. ', 'img/theme2.png', '#', 1, 'mayank patodia', '2017-04-06 19:17:36');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
