-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 10, 2017 at 12:21 PM
-- Server version: 5.7.18-0ubuntu0.16.04.1
-- PHP Version: 5.6.30-12~ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kwiqpick_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(9, 'Cat8'),
(10, 'Cat10'),
(11, 'Cat3'),
(12, 'Cat4'),
(13, 'sss'),
(14, 'ddd'),
(15, 'ss'),
(16, 'Food'),
(17, 'ddd'),
(18, 'dsdfs'),
(19, 'dcsf');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `comment_post_id` int(11) NOT NULL,
  `comment_author` varchar(255) NOT NULL,
  `comment_email` varchar(255) NOT NULL,
  `comment_content` text NOT NULL,
  `comment_status` varchar(255) NOT NULL,
  `comment_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_post_id`, `comment_author`, `comment_email`, `comment_content`, `comment_status`, `comment_date`) VALUES
(18, 45, 'Name1', 'email@email.com', 'vtuybiujnkjl', 'Approved', 'July 7, 2017');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `post_category_id` int(11) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_author` varchar(255) NOT NULL,
  `post_date` text NOT NULL,
  `publish_date` text,
  `post_image` text,
  `post_content` text NOT NULL,
  `post_tags` varchar(255) NOT NULL,
  `post_comment_count` varchar(255) NOT NULL,
  `post_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_category_id`, `post_title`, `post_author`, `post_date`, `publish_date`, `post_image`, `post_content`, `post_tags`, `post_comment_count`, `post_status`) VALUES
(43, 9, 'This is the First Post', 'SJ', 'July 7, 2017', 'July 6, 2017', '', '<p>This post doesn&#39;t have an image.</p>', 'Tag1', '0', 'publish'),
(44, 10, 'This is the second post title 200 letters', 'SJSJ', 'July 7, 2017', 'July 7, 2017', '', '<p>ONE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TENE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TENE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TENE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TENE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TENE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TENE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TENE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TENE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TENE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TENE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TENE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TENE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TENE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TENE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TENE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TENE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TENE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TENE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TENE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TENE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TENE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TEN</p>', '200', '0', 'publish'),
(45, 9, '400 letter post', 'SJ', 'July 7, 2017', 'July 8, 2017', '', '<p>ONE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TENE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TENE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TENE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TENE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TENE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TENE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TENE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TENE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TENE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TENE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TENE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TENE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TENE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TENE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TENE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TENE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TENE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TENE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TENE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TENE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TENE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TEN</p><p>ONE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TENE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TENE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TENE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TENE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TENE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TENE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TENE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TENE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TENE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TENE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TENE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TENE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TENE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TENE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TENE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TENE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TENE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TENE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TENE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TENE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TENE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TEN</p><p>ONE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TENE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TENE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TENE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TENE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TENE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TENE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TENE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TENE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TENE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TENE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TENE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TENE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TENE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TENE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TENE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TENE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TENE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TENE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TENE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TENE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TENE TWO THREE FOUR FIVE SIX SEVEN EIGHT NINE TEN</p>', 'gvjh', '0', 'publish');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `subscriber_id` int(11) NOT NULL,
  `subscriber_email` varchar(255) NOT NULL,
  `subscriber_time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`subscriber_id`, `subscriber_email`, `subscriber_time`) VALUES
(13, 's@s.com', 'July 7, 2017');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_image` text NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `user_firstname`, `user_lastname`, `user_image`, `user_role`, `user_email`, `user_password`) VALUES
(9, 'stanyjude', 'Stany', 'Jude', 'Kwiqpick_Logo_512x512.jpg', 'Admin', 'stanyjude@yahoo.com', '$2y$10$dJZFM4ItA2hXQagNs11H9OF1YQt6AUIgrb/rn8Afnm6lkuz1LTF8O'),
(11, 'ace', 'Portugas.D.', 'Ace', '', 'Subscriber', 'ace@ace.com', 'ace');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`subscriber_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `subscriber_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
