-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 05, 2017 at 07:09 PM
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
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `comment_post_id` int(11) NOT NULL,
  `comment_author` varchar(255) NOT NULL,
  `comment_email` varchar(255) NOT NULL,
  `comment_content` text NOT NULL,
  `comment_status` varchar(255) NOT NULL,
  `comment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_post_id`, `comment_author`, `comment_email`, `comment_content`, `comment_status`, `comment_date`) VALUES
(4, 26, 'Stany Jude', 'stathdehjk@hskdk.com', 'cvhjkh', 'unapproved', '2017-07-04'),
(5, 26, 'gjhuv', 'xgfh', 'However, people today eat at restaurants often; a few even on a regular basis as hectic work lives make it impossible to prepare and eat a meal at home. This and many other reasons have made larger crowds visit all types of restaurants not just on weekends, but weekdays too. For this reason, many restaurants have realized the need to increase convenience for their customers. The idea is that the customers must experience fine dining.', 'unapproved', '2017-07-04');

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
(26, 6, 'Online Table Reservation at Restaurants', 'Stany Jude', '2017-07-05', 'Food.jpeg', '<p>However, people today eat at restaurants often; a few even on a regular basis as hectic work lives make it impossible to prepare and eat a meal at home. This and many other reasons have made larger crowds visit all types of restaurants not just on weekends, but weekdays too. For this reason, many restaurants have realized the need to increase convenience for their customers. The idea is that the customers must experience fine dining.</p><p>One service that most of the restaurants have begun offering is the online restaurant reservation systems. Due to this system, patrons can reserve a table for themselves based on the number of people. The efficacy of the system is such that people don&rsquo;t have to wait for a table, during peak hours. It is an extremely helpful alternative when dining in large numbers because it not just eliminates the chance of waiting, but ensures that you have a table for all the people, who have accompanied you.</p><p>This restaurant reservation system is helpful when planning corporate lunches or dinners as it ensures that no delay occurs in a scheduled business meeting. Most individuals usually choose to reserve their tables on public holidays or busy weekends, as it&rsquo;s at these times restaurants are crowded. Most restaurants accept booking requests via phone calls. But some of them have gone to make things even easier for their clients. Many restaurants have begun to make their presence felt in the wide world of internet and because of this, they offer online restaurant reservations. With this alternative, you don&rsquo;t need to call up at a restaurant and talk to the representative to reserve a table. All that you need is to log onto the chosen restaurant&rsquo;s website and select to make an online table reservation.</p><p>With online restaurant reservation, you can save on a great amount of time as well as energy. Most restaurants accept reservations on a short notice too. In contrast, you will require a longer reservation period for high-end restaurants probably. Of course, this time period of reservation is something, which the restaurant&rsquo;s management can help you with. While it may seem like a novel thing to do, it&rsquo;s definitely worth the efforts, which is quite nominal since it saves you from the problem of worrying whether you will get a table at a good &nbsp;restaurant or not.</p><p>However, not every restaurant offers this restaurant reservation service. It would be a good idea to check out the different restaurants, which accept bookings and reservations. It will help you take a more informed choice, when it comes to planning advanced or large dinners for colleagues, family, or friends. This restaurant reservation system can help you to save energy, time, and troubleScience Articles, and that is why it&rsquo;s becoming more popular in the contemporary times.</p>', 'Table, Reservation, Comfort, Restaurant, Management, Restaurant', '0', 'publish'),
(27, 2, 'Itachi Uchiha', 'Sasuke Uchiha', '2017-07-05', 'itachi_anbu_black_0ps_by_elitegh0st-dbaujov.png', '<p><strong>Itachi Uchiha</strong> (<span lang=\'"ja"\'>ã†ã¡ã¯ã‚¤ã‚¿ãƒ</span>, <em>Uchiha Itachi</em>) was a prodigy of <a href="%5C%22http%3A//naruto.wikia.com/wiki/Konohagakure%5C%22" title=\'"Konohagakure"\'>Konohagakure</a>&#39;s <a href="%5C%22http%3A//naruto.wikia.com/wiki/Uchiha_clan%5C%22" title=\'"Uchiha\'>Uchiha clan</a>. He became an international criminal after <a href="%5C%22http%3A//naruto.wikia.com/wiki/Uchiha_Clan_Downfall%5C%22" title=\'"Uchiha\'>murdering</a> his entire clan, sparing only his younger brother, <a href="%5C%22http%3A//naruto.wikia.com/wiki/Sasuke%5C%22" title=\'"Sasuke"\'>Sasuke</a>. He afterwards joined the international criminal organisation known as <a href="%5C%22http%3A//naruto.wikia.com/wiki/Akatsuki%5C%22" title=\'"Akatsuki"\'>Akatsuki</a>, whose activity brought him into frequent conflict with Konoha and its ninja &mdash; including Sasuke &mdash; who sought to avenge their clan. Following his death, Itachi&#39;s motives were revealed to be more complicated than they seemed and that his actions were only ever in the interest of his brother and village, remaining a loyal <a href="%5C%22http%3A//naruto.wikia.com/wiki/Shinobi%5C%22" title=\'"Shinobi"\'>shinobi</a> of Konohagakure to the very end.</p><p><img src="%5C%22https%3A//i.froala.com/download/8fa0c66df957c85acff082fbe6e27df8d92954f0.png?1499260811%5C%22" class="&quot;fr-fic fr-fic fr-dii" fr-dib="" fr-fir="" fr-rounded"=""></p><p>At age 11, he entered the <a href="%5C%22http%3A//naruto.wikia.com/wiki/Anbu%5C%22" title=\'"Anbu"\'>Anbu</a>. Itachi&#39;s accomplishments were a source of great pride for his family, his father viewing him as proof of the Uchiha&#39;s future prosperity and his brother viewing him as a model to live up to. Itachi spent a great deal of time with Sasuke, training with him (though rarely actually training him) and giving him the recognition their father did not. However, for all the attention he received, few truly understood Itachi, &nbsp;believing his isolation to be a result of the gap between his abilities and theirs and not his dissatisfaction with the shinobi&#39;s life of conflict. Eventually, the Uchiha&#39;s disdain for their unfair treatment lead them to plan a coup d&#39;&eacute;tat. Fugaku, head of the Uchiha and the coup&#39;s chief conspirator, encouraged Itachi&#39;s advancement into the Anbu&#39;s ranks as a means of spying on the village. Itachi, however, knew an Uchiha coup would lead to intervention from other villages and ultimately start another World War, something he could not support. He instead became a double agent, reporting the Uchiha&#39;s actions to the <a href="%5C%22http%3A//naruto.wikia.com/wiki/Third_Hokage%5C%22" title=\'"Third\'>Third Hokage</a> and the <a href="%5C%22http%3A//naruto.wikia.com/wiki/Konoha_Council%5C%22" title=\'"Konoha\'>Konoha Council</a> in the hopes it would help them find a peaceful resolution.Itachi</p>', 'Itachi Uchiha, Itachi, Uchiha, Naruto', '0', 'publish');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `subscriber_id` int(11) NOT NULL,
  `subscriber_email` varchar(255) NOT NULL,
  `susbcriber_time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(7, 'itachi', 'Uchiha', 'Itachi', 'itachi_vs_yagura_by_elitegh0st-dbauft0.png', 'Admin', 'itachi@ace.com', '$2y$10$zUATM1.fc7Gx2zhr0aen2unm9KiaE5kziFPZ58V18Uz8moXbxp.f6'),
(8, 'naruto', 'Uzumaki', 'Naruto', 'cartoon-characters-135a.jpg', 'admin', 'a@a.com', '$2y$10$ITjCRY18Aaw3e5dFMI1Rw.pzqA3SE7xs6/5zC7OEj/lgJ872ZTeC.'),
(9, 'ace', 'Portugas', '.D.Ace', '68168819-portgas-d-ace-wallpapers.jpg', 'admin', 'ace@ace.com', '$2y$10$c4PzjnRea/tY5K2YVl309.AZ6I4fi4gGmJGL4J6eA5rwjUhpHfHHa');

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
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `subscriber_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
