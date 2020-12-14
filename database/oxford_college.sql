-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2020 at 10:20 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oxford_college`
--

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE `admission` (
  `id` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`id`, `name`, `email`, `phone`) VALUES
(4, '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `admission_notices`
--

CREATE TABLE `admission_notices` (
  `id` int(100) NOT NULL,
  `date` date NOT NULL,
  `msg` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admission_notices`
--

INSERT INTO `admission_notices` (`id`, `date`, `msg`) VALUES
(1, '2020-12-09', 'Admission notices will be come her'),
(2, '2020-12-11', 'Here we goes the first message will be come her'),
(3, '2020-12-04', 'Here we goes the first message will be come her');

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `a_id` int(100) NOT NULL,
  `a_date` date NOT NULL,
  `a_msg` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`a_id`, `a_date`, `a_msg`) VALUES
(9, '2020-12-14', 'Hello how rae you its here the notification'),
(10, '2020-12-07', 'Hello how rae you its here the notification'),
(11, '2020-12-06', 'Hello how rae you its here the notification'),
(12, '2020-12-03', 'Hello how rae you its here the notification'),
(13, '2020-12-02', 'Hello how rae you its here the notification');

-- --------------------------------------------------------

--
-- Table structure for table `college_news`
--

CREATE TABLE `college_news` (
  `id` int(100) NOT NULL,
  `date` date NOT NULL,
  `title` varchar(200) NOT NULL,
  `msg` varchar(300) NOT NULL,
  `type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college_news`
--

INSERT INTO `college_news` (`id`, `date`, `title`, `msg`, `type`) VALUES
(1, '2020-12-07', 'Some event name', 'Message of the news will be shown here.Chekc her more detials', 'Culture'),
(2, '2020-12-06', 'Some event name', 'Message of the news will be shown here.Chekc her more detials', 'Education'),
(3, '2020-12-07', 'Some text her', 'news her will be shown news her will be shown', 'Miscellaneous'),
(4, '2020-12-02', 'Some text will be shown here', 'news her will be shownnews her will be shownnews her will be shown', 'Education'),
(5, '2020-12-02', 'Education News', 'news will be her so that it will be displayed', 'Education'),
(6, '2020-12-07', 'Education News', 'news will be her so that it will be displayed', 'Education');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `image` varchar(400) NOT NULL,
  `type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `new_admission`
--

CREATE TABLE `new_admission` (
  `id` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` int(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `program` varchar(200) NOT NULL,
  `comments` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new_admission`
--

INSERT INTO `new_admission` (`id`, `name`, `email`, `phone`, `address`, `program`, `comments`) VALUES
(3, 'Akhilesh', 'thakurakhilesh200@gmail.com', 2147483647, 'Ward no. 4 Hadsar Vill. Panoul Hadsar P.O. Amarpur', 'B.Tech', '');

-- --------------------------------------------------------

--
-- Table structure for table `placement`
--

CREATE TABLE `placement` (
  `id` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `passrate` varchar(400) NOT NULL,
  `company` varchar(400) NOT NULL,
  `profile_img` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `placement`
--

INSERT INTO `placement` (`id`, `name`, `passrate`, `company`, `profile_img`) VALUES
(3, 'Ankush Kumar', '87%', 'images/tata.png', 'images/law.jpg'),
(4, 'Sunny', '89%', 'images/capegeminir.png', 'images/commerce.png'),
(5, 'Neha', '75%', 'images/cognizant.png', 'images/biology.jpg'),
(6, 'Thakur', '56%', 'images/tata.png', 'images/science.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `id` int(100) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `admission_notices`
--
ALTER TABLE `admission_notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `college_news`
--
ALTER TABLE `college_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_admission`
--
ALTER TABLE `new_admission`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `placement`
--
ALTER TABLE `placement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admission`
--
ALTER TABLE `admission`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admission_notices`
--
ALTER TABLE `admission_notices`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `a_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `college_news`
--
ALTER TABLE `college_news`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `new_admission`
--
ALTER TABLE `new_admission`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `placement`
--
ALTER TABLE `placement`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
