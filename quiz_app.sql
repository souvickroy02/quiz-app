-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2022 at 04:51 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `q_and_a`
--

CREATE TABLE `q_and_a` (
  `numb` int(11) NOT NULL,
  `question` varchar(500) NOT NULL,
  `answer` varchar(500) NOT NULL,
  `options` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `q_and_a`
--

INSERT INTO `q_and_a` (`numb`, `question`, `answer`, `options`) VALUES
(1, 'What does HTML stand for?', 'Hyper Text Markup Languag', 'Hyper Text Preprocessor,Hyper Text Markup Language,Hyper Text Multiple Language,Hyper Tool Multi Language'),
(2, 'What does CSS stand for?', 'Cascading Style Sheet', 'Common Style Sheet,Colorful Style Sheet,Computer Style Sheet,Cascading Style Sheet'),
(3, 'what is the shape of earth?', 'ellipsoid', 'square,round,ellipsoid,triangle'),
(4, 'Which among the following was the venue of first South Asian Games?', 'Kathmandu', 'Dhaka,Kathmandu,Colombo,New Delhi'),
(5, 'After whose name is the Uber Cup named?', 'Betty Uber', 'Sarah Uber,Betty Uber,Jonna Uber,Katrina Uber');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `gender` enum('male','female') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `full_name`, `phone`, `gender`) VALUES
(1, 'souvickroy02@gamil.com', 'souvick007', 'Souvick Roy', '6291994175', 'male'),
(2, 'diya.banerjee.cse22@heritageit.edu.in', 'diya1234', 'Diya Banerjee', '8902390455', 'female'),
(3, 'sagnik.samaddar.cse22@heritageit.edu.in', 'sagnik1234', 'Sagnik Samaddar', '6290956551', 'male'),
(4, 'harsh.kumarshinha.cse22@heritageit.edu.in', 'harsh1234', 'Harsh Kumar Sinha', '7033136493', 'male'),
(5, 'ankur.kayal.cse22@heritageit.edu.in', 'ankur1234', 'Ankur Kayal', '6291665261', 'male'),
(6, 'pushan@gmail.com', '123456', 'pushan', '6294887568', 'male'),
(7, 'raj@gmail.com', '123415', 'raj', '6291994175', 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `q_and_a`
--
ALTER TABLE `q_and_a`
  ADD PRIMARY KEY (`numb`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `q_and_a`
--
ALTER TABLE `q_and_a`
  MODIFY `numb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
