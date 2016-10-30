-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 30, 2016 at 09:46 PM
-- Server version: 5.6.28
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `c9`
--

-- --------------------------------------------------------

--
-- Table structure for table `isfollowing`
--

CREATE TABLE `isfollowing` (
	  `id` int(11) NOT NULL,
	  `follower` text NOT NULL,
	  `isfollow` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `isfollowing`
--

INSERT INTO `isfollowing` (`id`, `follower`, `isfollow`) VALUES
(77, '', '581529be38cc4'),
(81, '581529be38cc4', '581529be38cc4'),
(82, '581529be38cc4', '581529ae82f9d');

-- --------------------------------------------------------

--
-- Table structure for table `tweets`
--

CREATE TABLE `tweets` (
	  `id` int(11) NOT NULL,
	  `tweet` text NOT NULL,
	  `uid` text NOT NULL,
	  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tweets`
--

INSERT INTO `tweets` (`id`, `tweet`, `uid`, `datetime`) VALUES
(36, 'Iam the One', '581529ae82f9d', '2016-10-30 04:29:00'),
(37, 'iam id3m', '581529be38cc4', '2016-10-30 04:29:18'),
(38, 'am none', '5815bdf209852', '2016-10-30 15:01:41'),
(39, 'my tweets ', '581529be38cc4', '2016-10-30 15:43:16'),
(40, 'ثبثصبث', '581529be38cc4', '2016-10-30 17:15:48'),
(41, 'efwefew', '581529be38cc4', '2016-10-30 17:15:54'),
(42, 'fwew', '581529be38cc4', '2016-10-30 23:54:04'),
(43, 'wfew', '581529be38cc4', '2016-10-30 23:54:15'),
(44, 'e', '58163e5f1b7c2', '2016-10-31 00:09:28'),
(45, 'fewfew', '58163e5f1b7c2', '2016-10-31 00:11:36'),
(46, 'few', '58163e5f1b7c2', '2016-10-31 00:11:42'),
(47, 'wfe', '58163e5f1b7c2', '2016-10-31 00:11:44'),
(48, 'few', '58163e5f1b7c2', '2016-10-31 00:12:31'),
(49, 'fewfew', '58163e5f1b7c2', '2016-10-31 00:12:39'),
(50, 'fewefw', '58163e5f1b7c2', '2016-10-31 00:17:13'),
(51, 'few', '58163e5f1b7c2', '2016-10-31 00:17:32'),
(52, 'xxx', '58163e5f1b7c2', '2016-10-31 00:17:34'),
(53, 'xw', '581640ca0acf4', '2016-10-31 00:19:48'),
(54, 'fwfw', '581640ca0acf4', '2016-10-31 00:20:02'),
(55, 'fwq', '581640ca0acf4', '2016-10-31 00:20:04'),
(56, 'fwq', '581640ca0acf4', '2016-10-31 00:20:05'),
(57, 'fwq', '581640ca0acf4', '2016-10-31 00:20:06'),
(58, 'fqw', '581640ca0acf4', '2016-10-31 00:20:07'),
(59, 'fwq', '581640ca0acf4', '2016-10-31 00:20:09'),
(60, 'fwq', '581640ca0acf4', '2016-10-31 00:20:11'),
(61, 'fefwe', '581640ca0acf4', '2016-10-31 00:32:22'),
(62, 'few', '581640ca0acf4', '2016-10-31 00:32:26'),
(63, 'few', '581640ca0acf4', '2016-10-31 00:32:47'),
(64, 'few', '581640ca0acf4', '2016-10-31 00:32:49'),
(65, 'xxxxx', '581640ca0acf4', '2016-10-31 00:32:51'),
(66, 'few', '581640ca0acf4', '2016-10-31 00:49:45'),
(67, 'dwqdwq', '581640ca0acf4', '2016-10-31 00:49:55'),
(68, 'dwq', '581640ca0acf4', '2016-10-31 00:50:00'),
(69, 'xe', '581640ca0acf4', '2016-10-31 00:50:04'),
(70, 'xex', '581640ca0acf4', '2016-10-31 00:50:08'),
(71, 'gre', '581640ca0acf4', '2016-10-31 00:50:59'),
(72, 'gew', '581640ca0acf4', '2016-10-31 00:51:36'),
(73, 'fewfew', '581640ca0acf4', '2016-10-31 00:52:00'),
(74, 'vew', '581640ca0acf4', '2016-10-31 00:52:39'),
(75, 'few', '581640ca0acf4', '2016-10-31 01:37:55'),
(76, 'few', '581640ca0acf4', '2016-10-31 01:40:31'),
(77, 'fwe', '581640ca0acf4', '2016-10-31 01:40:33'),
(78, 'few', '581640ca0acf4', '2016-10-31 01:40:35'),
(79, 'few', '581640ca0acf4', '2016-10-31 01:40:37');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
	  `id` text NOT NULL,
	  `email` text NOT NULL,
	  `password` text NOT NULL,
	  `username` text NOT NULL,
	  `tweet` text NOT NULL,
	  `passwd` text NOT NULL,
	  `rank` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `username`, `tweet`, `passwd`, `rank`) VALUES
('581529ae82f9d', 'the@One.com', '2c836017d80511e8285ba07ee6b551f95bac143a5e932ed42748331b42325be0', 'theone', '', '84c9b51c', 1),
('581529be38cc4', 'admin@id3m.net', '41f81a3a1cfa1a02df231ea152ac191dd0f600425029591f95d9e482f700f147', '', '', 'f757913c', 3),
('5815bdf209852', 'none@none', '607f75936f8112168f7b82b367ad69c214e11f962a26d8ed053972584623763e', '', '', 'b684af2f', 2),
('58163e5f1b7c2', 'amazon@id3m.net', '794cd29e3de40cc29a54ff3bf3bd0359bbba6726b879e561446aee8ee170a174', '', '', '2fef00b2', 0),
('581640ca0acf4', 'a22740264wwob@gmail.com', 'c055c3f6b75a67145336368997efe3e1aedc0d84742897c3cb2cc92723454b88', '', '', 'a2f99796', 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `isfollowing`
--
ALTER TABLE `isfollowing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tweets`
--
ALTER TABLE `tweets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`(13));

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `isfollowing`
--
ALTER TABLE `isfollowing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
--
-- AUTO_INCREMENT for table `tweets`
--
ALTER TABLE `tweets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
