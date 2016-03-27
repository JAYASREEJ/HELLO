-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2016 at 04:14 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task`
--

-- --------------------------------------------------------

--
-- Table structure for table `addclient`
--

CREATE TABLE `addclient` (
  `c_id` int(11) NOT NULL,
  `client_id` varchar(250) COLLATE big5_bin NOT NULL,
  `c_name` varchar(250) COLLATE big5_bin NOT NULL,
  `c_p_title` varchar(250) COLLATE big5_bin NOT NULL,
  `c_file` varchar(250) COLLATE big5_bin NOT NULL,
  `c_email` varchar(250) COLLATE big5_bin NOT NULL,
  `c_pass` varchar(250) COLLATE big5_bin NOT NULL,
  `c_s_date` date NOT NULL,
  `c_e_date` date NOT NULL,
  `c_notes` varchar(250) COLLATE big5_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=big5 COLLATE=big5_bin;

-- --------------------------------------------------------

--
-- Table structure for table `a_login`
--

CREATE TABLE `a_login` (
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `a_login`
--

INSERT INTO `a_login` (`user`, `pass`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `p_id` varchar(250) NOT NULL,
  `p_title` varchar(250) NOT NULL,
  `p_des` text NOT NULL,
  `p_doc` varchar(250) NOT NULL,
  `s_date` date NOT NULL,
  `e_date` date NOT NULL,
  `notes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `u_login`
--

CREATE TABLE `u_login` (
  `id` int(11) NOT NULL,
  `f_name` varchar(250) NOT NULL,
  `l_name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `pass` varchar(250) NOT NULL,
  `mobile` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `u_login`
--

INSERT INTO `u_login` (`id`, `f_name`, `l_name`, `email`, `pass`, `mobile`) VALUES
(23, 'Mathavan', 'Maathu', 'mathavan161293@gmail.com', '123456', '7598296286'),
(24, '5', '5', '5@5', '5', '5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addclient`
--
ALTER TABLE `addclient`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `u_login`
--
ALTER TABLE `u_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addclient`
--
ALTER TABLE `addclient`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `u_login`
--
ALTER TABLE `u_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
