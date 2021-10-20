-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2020 at 06:29 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tshimologong`
--

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE `survey` (
  `surname` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `contact_no` varchar(11) NOT NULL,
  `date_submitted` date NOT NULL,
  `age` int(11) NOT NULL,
  `food` varchar(255) NOT NULL,
  `eat_out` varchar(100) NOT NULL,
  `like_movies` varchar(100) NOT NULL,
  `like_tv` varchar(100) NOT NULL,
  `like_radio` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `survey`
--

INSERT INTO `survey` (`surname`, `first_name`, `contact_no`, `date_submitted`, `age`, `food`, `eat_out`, `like_movies`, `like_tv`, `like_radio`) VALUES
('fdzdf', 'dds', '0021332221', '2020-12-13', 4, '', 'Strongly Agree(1)', 'Strongly Agree(1)', 'Strongly Agree(1)', ''),
('fvvxcf', 'cvzv', '0112', '2020-12-13', 6, 'pizza,pasta,', 'Strongly Agree(1)', 'Strongly Agree(1)', 'Strongly Agree(1)', 'Strongly Agree(1)'),
('nsyhduer', 'hfjufhyr', '01245668977', '2021-07-29', 30, '', 'Strongly Agree(1)', 'Strongly Agree(1)', 'Disagree(4)', 'Neutral(3)'),
('lucky', 'mkhonto', '01245877885', '2023-06-14', 25, '', 'Agree(2)', 'Strongly Agree(1)', 'Neutral(3)', 'Agree(2)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `survey`
--
ALTER TABLE `survey`
  ADD PRIMARY KEY (`contact_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
