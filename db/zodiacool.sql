-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2015 at 01:19 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `zodiacool`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `article_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `horoscope`
--

CREATE TABLE IF NOT EXISTS `horoscope` (
  `horoscope_id` int(11) NOT NULL,
  `id_sign` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `horoscope_date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `horoscope`
--

INSERT INTO `horoscope` (`horoscope_id`, `id_sign`, `description`, `horoscope_date`) VALUES
(16, 1, 'Berbec', '2015-05-21'),
(17, 2, 'taur', '2015-05-21'),
(18, 3, 'gemeni', '2015-05-21'),
(19, 4, 'rac', '2015-05-21'),
(20, 5, 'leu', '2015-05-21'),
(21, 6, 'fecioara', '2015-05-21'),
(22, 7, 'balanta', '2015-05-21'),
(23, 8, 'scorpion', '2015-05-21'),
(24, 9, 'sagetator', '2015-05-21'),
(25, 10, 'capricorn', '2015-05-21'),
(26, 11, 'varsator', '2015-05-21'),
(27, 12, 'pesti', '2015-05-21'),
(28, 1, 'brebec 21 mai test ', '2015-05-21');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `news_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sign`
--

CREATE TABLE IF NOT EXISTS `sign` (
  `sign_id` int(11) NOT NULL,
  `sign_name` varchar(50) NOT NULL,
  `sign_date` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sign`
--

INSERT INTO `sign` (`sign_id`, `sign_name`, `sign_date`) VALUES
(1, 'aries', '21.03-20.04'),
(2, 'taurus', '21.04-20.05'),
(3, 'gemini', '21.05-21.06'),
(4, 'cancer', '22.06-22.07'),
(5, 'leo', '23.07-23.08'),
(6, 'virgo', '24.08-23.09'),
(7, 'libra', '24.09-23.10'),
(8, 'scorpio', '24.10-22.11'),
(9, 'sagittarius', '23.11-21.12'),
(10, 'capricorn', '22.12-20.01'),
(11, 'aquarius', '21.01-20.02'),
(12, 'pisces', '21.02-20.03');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL,
  `email` varchar(70) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `email`, `password`) VALUES
(1, 'nicu_lrpr@mail.ru', '1111'),
(2, 'nicu@gmail.com', '1111'),
(3, 'nicu@gmail.com', '1111'),
(4, 'nicunicu', '1111'),
(5, 'nicunicu', '1111'),
(6, 'nicunicu', '1111'),
(7, 'n', '1111'),
(8, 'ni', '1111'),
(9, 'nic', '1111'),
(10, 'nicu', '1111'),
(11, '11', '1111'),
(12, '111', '1111'),
(13, '1111', '1111'),
(14, '12', '12'),
(15, 'asd', 'as'),
(16, 'sad', '1'),
(17, 's', 's'),
(18, 'g', 'g'),
(19, '2', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`article_id`);

--
-- Indexes for table `horoscope`
--
ALTER TABLE `horoscope`
  ADD PRIMARY KEY (`horoscope_id`), ADD KEY `id_sign` (`id_sign`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `sign`
--
ALTER TABLE `sign`
  ADD PRIMARY KEY (`sign_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `horoscope`
--
ALTER TABLE `horoscope`
  MODIFY `horoscope_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sign`
--
ALTER TABLE `sign`
  MODIFY `sign_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `horoscope`
--
ALTER TABLE `horoscope`
ADD CONSTRAINT `horoscope_ibfk_1` FOREIGN KEY (`id_sign`) REFERENCES `sign` (`sign_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
