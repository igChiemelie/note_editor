-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 24, 2023 at 09:47 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `note_editor`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `post` text NOT NULL,
  `file` varchar(255) DEFAULT NULL,
  `date_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `post`, `file`, `date_created`, `updated_on`) VALUES
(3, 'A et sit vel in volu', 'Quo temporibus maxim..', NULL, '2023-03-23 21:29:15', '2023-03-23 21:29:15'),
(4, 'Rerum id eiusmod ut ', '&lt;div style=&quot;text-align: center;&quot;&gt;&lt;b style=&quot;font-size: 1rem;&quot;&gt;Voluptas officiis vo.&lt;/b&gt;&lt;/div&gt;', NULL, '2023-03-23 22:58:06', '2023-03-23 22:58:06'),
(5, 'Rerum id eiusmod ut ', '&lt;div style=&quot;text-align: center;&quot;&gt;&lt;b style=&quot;font-size: 1rem;&quot;&gt;&lt;u&gt;&lt;strike&gt;Voluptas &lt;/strike&gt;&lt;/u&gt;officiis vo.&lt;/b&gt;&lt;/div&gt;', NULL, '2023-03-23 22:59:13', '2023-03-23 22:59:13'),
(23, 'dffd', '&lt;div style=&quot;color: rgb(212, 212, 212); font-family: Consolas, &amp;quot;Courier New&amp;quot;, monospace; font-size: 13px; line-height: 18px; white-space: pre;&quot;&gt;&lt;span style=&quot;color: rgb(156, 220, 254); background-color: rgb(255, 0, 0);&quot;&gt;img_random&lt;/span&gt;&lt;/div&gt;', '1679614626Screenshot (22).png', '2023-03-23 23:37:06', '2023-03-23 23:37:06'),
(24, 'dfdf', '&lt;p&gt;&lt;b style=&quot;background-color: rgb(255, 255, 0);&quot;&gt;dsdsddssd &lt;/b&gt;&lt;b style=&quot;background-color: rgb(255, 0, 255);&quot;&gt;fggfgfgf &lt;/b&gt;&lt;b&gt;&lt;span style=&quot;background-color: rgb(66, 66, 66);&quot;&gt;ffggfgfsss&amp;nbsp; &amp;nbsp;&lt;/span&gt;&lt;/b&gt;gfgfgfg&amp;nbsp;&lt;/p&gt;', NULL, '2023-03-23 23:51:50', '2023-03-23 23:51:50'),
(25, 'a', '&lt;p&gt;asavda&lt;/p&gt;', NULL, '2023-03-24 09:40:52', '2023-03-24 09:40:52'),
(26, 'sd', '&lt;p&gt;dssdsd&lt;/p&gt;', NULL, '2023-03-24 09:43:17', '2023-03-24 09:43:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
