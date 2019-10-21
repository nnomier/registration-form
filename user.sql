-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2019 at 06:54 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `registration_date` timestamp NULL DEFAULT current_timestamp(),
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `registration_date`, `email`) VALUES
(1, 'testpass', '$2y$10$FoJAfuI6W9qW89IPd3pcteylGldJLbPOhxuEsomnwWphy6ax6Hbm6', '2019-10-19 20:03:36', 'password@check.com'),
(31, 'noha', '$2y$10$OukPgDLNn3cGCmk/0Dj0rOp.wRJhElcD/Stvvdq6mtaUVy065HCBG', '2019-10-20 06:53:45', 'noha@gmail.com'),
(32, 'rana', '$2y$10$ZA7QQ7siuCxhyQ12bL6Euucqyo7/xwNAcmbx47FzVipNHA89edxaq', '2019-10-20 16:28:49', 'rana@gmail.com'),
(34, 'noha2', '$2y$10$eEqekkq2NFObpigU5BTqnOg8MiB4Fnb1BJoIbRGa.YM7rFVVzdCD.', '2019-10-20 19:05:11', 'm.nomier@alexu.edu.eg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
