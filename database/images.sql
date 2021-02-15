-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2015 年 12 月 01 日 20:52
-- サーバのバージョン： 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `todo`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `tasks`
--

CREATE TABLE IF NOT EXISTS `images` (
  `image_id` int(11) NOT NULL,
  `image_name` varchar(256) NOT NULL,
  `image_type` varchar(64),
  `image_content` mediumblob NOT NULL,
  `image_size` int NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `tasks`
--

-- INSERT INTO `images` (`image_id`, `image_name`, `image_type`, `image_content`, `image_size`, `created_at`) VALUES
-- (1, '도깨비', '', '2016-01-01', '도께비♡은탁', '너와 함께한 시간 모두 눈부셨다. 날이 좋아서 날이 좋지 않아서 날이 적당해서 모든 날이 좋았다.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tasks`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`image_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `images`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;