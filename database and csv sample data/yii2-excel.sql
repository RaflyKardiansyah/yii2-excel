-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2019 at 05:30 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yii2-excel`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_csv`
--

CREATE TABLE `tbl_csv` (
  `csv_id` int(10) UNSIGNED NOT NULL,
  `csv_first_name` varchar(500) NOT NULL,
  `csv_last_name` varchar(500) NOT NULL,
  `csv_email` varchar(500) NOT NULL,
  `csv_csv_file_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_csv`
--

INSERT INTO `tbl_csv` (`csv_id`, `csv_first_name`, `csv_last_name`, `csv_email`, `csv_csv_file_id`) VALUES
(1, 'Riordan', 'Bruff', 'rbruff0@delicious.com', 1),
(2, 'Laurena', 'Tonry', 'ltonry1@gov.uk', 1),
(3, 'Kariotta', 'Jeratt', 'kjeratt2@typepad.com', 1),
(4, 'Brooke', 'Sanz', 'bsanz3@shop-pro.jp', 1),
(5, 'Hortense', 'Burchett', 'hburchett4@devhub.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_csv_file`
--

CREATE TABLE `tbl_csv_file` (
  `csv_file_id` int(10) UNSIGNED NOT NULL,
  `csv_file_name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_csv_file`
--

INSERT INTO `tbl_csv_file` (`csv_file_id`, `csv_file_name`) VALUES
(1, 'VPco_MOCK_DATA.csv');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_csv`
--
ALTER TABLE `tbl_csv`
  ADD PRIMARY KEY (`csv_id`);

--
-- Indexes for table `tbl_csv_file`
--
ALTER TABLE `tbl_csv_file`
  ADD PRIMARY KEY (`csv_file_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_csv`
--
ALTER TABLE `tbl_csv`
  MODIFY `csv_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_csv_file`
--
ALTER TABLE `tbl_csv_file`
  MODIFY `csv_file_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
