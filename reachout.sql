-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2021 at 09:51 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reachout`
--

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `first_name` varchar(250) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `emil` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `phone` int(250) NOT NULL,
  `admin` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `first_name`, `last_name`, `emil`, `password`, `phone`, `admin`) VALUES
(13, 'abdelrhman', 'hassan', 'abdelrhmanatwa39@gmail.com', '12345', 1224078648, ''),
(15, 'reach', 'out', 'reachout@info.com', 'reachout.info', 1029840784, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `storys`
--

CREATE TABLE `storys` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `story` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `storys`
--

INSERT INTO `storys` (`id`, `username`, `story`) VALUES
(6, 'abdelrhman', 'The following blog posts are written by people with personal experience of depression. By talking openly, our bloggers hope to increase understanding around mental health, break stereotypes and take the taboo out of something that Ã¢â‚¬â€œ like physi'),
(8, 'reach', 'Growing up in my household was a bit of a struggle. Around the age of 12, I was bullied quite severely, which in turn had an impact on my mental health. I began to experience symptoms of anxiety and depression. I was always a reserved, quiet person b'),
(9, 'reach', 'I can almost set my clock by it. Seasonal affective disorder, or SAD, is a sneaky illness, at least in my experience. Iâ€™ve had this leafy, dark cloak in my closet for about seven years now. It comes out only from about mid-October and gets shoved a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `storys`
--
ALTER TABLE `storys`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `storys`
--
ALTER TABLE `storys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
