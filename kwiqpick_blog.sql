-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 03, 2017 at 06:18 PM
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
(1, 'foodie'),
(2, 'Pizza'),
(3, 'Momo'),
(5, 'biriyani'),
(6, 'Table Reservation'),
(7, 'Restaurant');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `post_category_id` int(11) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_author` varchar(255) NOT NULL,
  `post_date` date NOT NULL,
  `post_image` text NOT NULL,
  `post_content` text NOT NULL,
  `post_tags` varchar(255) NOT NULL,
  `post_comment_count` varchar(255) NOT NULL,
  `post_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_category_id`, `post_title`, `post_author`, `post_date`, `post_image`, `post_content`, `post_tags`, `post_comment_count`, `post_status`) VALUES
(19, 1, 'fffff', 'fdsddd', '2017-07-03', 'cartoon-characters-3v.jpg', '<p>updatde</p>', 'fdvdfv', '0', 'publish'),
(20, 3, 'Adriana Lima', 'Adriana Lima', '2017-07-03', '1488793992_tmp_img2.jpg', 'dddd', 'dfdsf', '0', 'publish'),
(21, 5, 'Sasuke Uchiha', 'Naruto', '2017-07-03', '68168819-portgas-d-ace-wallpapers.jpg', '<p>dddddd</p>', 'aaaaa', '0', 'publish'),
(22, 2, 'Test', 'Test', '2017-07-03', 'cartoon-characters-1v.jpg', '<p>tset</p>', 'panda', '0', 'publish'),
(23, 5, 'Lorem Ipsum', 'Lorem Ipsum', '2017-07-03', 'mwKfgpX.jpg', '<p><strong style="margin: 0px; padding: 0px; font-family: \'Open Sans\', Arial, sans-serif; text-align: justify;">Lorem Ipsum</strong><span style="font-family: \'Open Sans\', Arial, sans-serif; text-align: justify;">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', 'Lorem Ipsum', '0', 'publish'),
(24, 1, 'Sasuke Uchiha', 'Adriana Lima', '2017-07-03', 'cartoon-characters-41a.jpg', '<p>ddddd</p>', 'dddd', '0', 'publish'),
(25, 1, 'Lorem Ipsum2', 'Lorem Ipsum2', '2017-07-03', 'cartoon-characters-67v.jpg', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><p><br><img src="https://i.froala.com/download/2197b451033f1e3ea044bbab82f73df120ba0fad.jpg?1499077027" style="width: 470px; height: 264.767px;" class="fr-fic fr-dib"></p><p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><p><br></p>', 'Lorem Ipsum', '0', 'publish'),
(26, 6, 'Online Table Reservation at Restaurants', 'Stany Jude', '2017-07-03', 'Food.jpeg', '<p>However, people today eat at restaurants often; a few even on a regular basis as hectic work lives make it impossible to prepare and eat a meal at home. This and many other reasons have made larger crowds visit all types of restaurants not just on weekends, but weekdays too. For this reason, many restaurants have realized the need to increase convenience for their customers. The idea is that the customers must experience fine dining.</p><p>One service that most of the restaurants have begun offering is the online restaurant reservation systems. Due to this system, patrons can reserve a table for themselves based on the number of people. The efficacy of the system is such that people don&rsquo;t have to wait for a table, during peak hours. It is an extremely helpful alternative when dining in large numbers because it not just eliminates the chance of waiting, but ensures that you have a table for all the people, who have accompanied you.</p><p>This restaurant reservation system is helpful when planning corporate lunches or dinners as it ensures that no delay occurs in a scheduled business meeting. Most individuals usually choose to reserve their tables on public holidays or busy weekends, as it&rsquo;s at these times restaurants are crowded. Most restaurants accept booking requests via phone calls. But some of them have gone to make things even easier for their clients. Many restaurants have begun to make their presence felt in the wide world of internet and because of this, they offer online restaurant reservations. With this alternative, you don&rsquo;t need to call up at a restaurant and talk to the representative to reserve a table. All that you need is to log onto the chosen restaurant&rsquo;s website and select to make an online table reservation.</p><p>With online restaurant reservation, you can save on a great amount of time as well as energy. Most restaurants accept reservations on a short notice too. In contrast, you will require a longer reservation period for high-end restaurants probably. Of course, this time period of reservation is something, which the restaurant&rsquo;s management can help you with. While it may seem like a novel thing to do, it&rsquo;s definitely worth the efforts, which is quite nominal since it saves you from the problem of worrying whether you will get a table at a good &nbsp;restaurant or not.</p><p data-empty=\'"true"\'>However, not every restaurant offers this restaurant reservation service. It would be a good idea to check out the different restaurants, which accept bookings and reservations. It will help you take a more informed choice, when it comes to planning advanced or large dinners for colleagues, family, or friends. This restaurant reservation system can help you to save energy, time, and troubleScience Articles, and that is why it&rsquo;s becoming more popular in the contemporary times.</p>', 'Table, Reservation, Comfort, Restaurant', '0', 'publish');

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
(7, 'itachi', 'Uchiha', 'Itachi', 'itachi_uchiha_by_belchii96-dbbc2ab.jpg', 'Subscriber', 'itachi@i.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

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
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
