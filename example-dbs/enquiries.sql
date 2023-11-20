-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2023 at 08:29 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `netmatters-homepage`
--

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

CREATE TABLE `enquiries` (
  `ID` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `company` text DEFAULT NULL,
  `phone` bigint(20) NOT NULL,
  `message` text NOT NULL,
  `marketing` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enquiries`
--

INSERT INTO `enquiries` (`ID`, `name`, `email`, `company`, `phone`, `message`, `marketing`) VALUES
(0, 'John', 'smith@gmail.com', 'JSC', 7450474355, 'Hi please call me', 'yes'),
(1, 'Elle', 'elle.jones@hotmail.com', 'Jones', 7911820625, 'I will send a follow up email again soon', 'yes'),
(2, 'Joe Luige', 'joeburn@gmail.com', '', 7457264989, 'Contacting to enquire about prices please contact me', 'no'),
(3, 'Jason Bourne', 'jason.bourne@yahoo.com', '', 7457736959, 'Hi I am interest I will follow up again soon', 'no'),
(4, 'Jane Holden', 'Jane.bssolution@gmail.com', 'Blue Smith solutions', 7452154453, 'Enquiring about widescale business integration of your solution and the potential costs', 'yes'),
(5, 'Luis Talylor', 'Luis.taylor@vcs.com', 'VCS', 7700063278, 'Enquiring about corporate contract', 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `enquiries`
--
ALTER TABLE `enquiries`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `enquiries`
--
ALTER TABLE `enquiries`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
