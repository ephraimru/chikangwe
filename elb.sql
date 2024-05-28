-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2024 at 05:16 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_assets`
--

CREATE TABLE `tbl_assets` (
  `id` int(10) NOT NULL,
  `sn` varchar(255) NOT NULL,
  `property_name` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `new_old` varchar(255) NOT NULL,
  `status` varchar(15) NOT NULL,
  `department` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_assets`
--

INSERT INTO `tbl_assets` (`id`, `sn`, `property_name`, `date`, `new_old`, `status`, `department`) VALUES
(1, '121233TS', 'Core i7 Laptop', '2024-05-18 00:00:00', 'new', '1', 'Engineering'),
(2, '111223123', 'MFP HP - Printer ', '2024-05-22 00:00:00', 'old', '0', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employees`
--

CREATE TABLE `tbl_employees` (
  `id` int(10) NOT NULL,
  `empno` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `department` varchar(15) NOT NULL,
  `date` date NOT NULL,
  `cv_file` varchar(255) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_employees`
--

INSERT INTO `tbl_employees` (`id`, `empno`, `first_name`, `last_name`, `department`, `date`, `cv_file`, `status`) VALUES
(2, '0107M', 'Shingai', 'Mash', 'ICT', '2023-11-12', '', ''),
(3, '1306T', 'Ephraim', 'Talisman', 'AI', '2023-12-02', 'eland4.jpg', 'active'),
(5, '0122B', 'Panch', 'Babab', 'water', '2023-11-17', 'IMG_20211026_154423.jpg', 'active'),
(6, '0712R', 'Tawananyasha', 'Rusike', 'Health', '2023-11-12', '', 'active'),
(9, '1010N', 'Tawonehama', 'Nyamugoneka', 'Audit', '2023-11-08', '../uploads/', 'active'),
(11, '1212E', 'Prince ', 'Efisha', 'AI', '2023-11-07', 'efisha-elb-2417.jpg', 'active'),
(13, '2010R', 'Adlight', 'Rusike', 'Marketing', '2023-12-01', 'Errroooor check codes', 'active'),
(16, '1122D', 'Anesu', 'Deborah ', 'Engineering', '2023-11-08', 'SITEURL/uploads/', 'active'),
(20, '2006R', 'Patience', 'Rusike', 'Marketing', '2023-11-30', '', 'active'),
(21, '1310R', 'Blessing', 'Rusike', 'Procurement ', '2023-12-01', 'Errroooor check codes', 'active'),
(23, '2412R', 'Tabitha ', 'Rusike', 'Health', '2023-11-07', '', 'active'),
(24, '9000M', 'Rumbidzai', 'Mhepo', 'Sales', '2024-01-11', 'efisha-elb-1996.jpg', 'active'),
(25, '7571', 'Trish', 'Taderera', 'Health', '2024-05-24', 'efisha-elb-4878.png', 'active'),
(26, '8595', 'Deren', 'Rusike', 'Engineering', '2024-11-29', 'efisha-elb-2522.pdf', 'active'),
(27, '6656', 'Blessed', 'Mhlanga', 'Health', '2024-06-20', 'efisha-elb-7003.png', 'active'),
(28, '1036u', 'Takudzwa', 'Rusike', 'Engineering', '2023-11-11', 'efisha-elb-78.docx', 'active'),
(29, '959', 'Vincent', 'Rusike', 'Engineering', '2024-07-26', 'efisha-elb-6676.xcf', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(10) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `full_name`, `username`, `status`, `password`) VALUES
(1, 'Ephraim Rusike', 'Efisha@rusike.com', 'active', 'a529412794510c6df5e8a8b76a599f70'),
(2, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(3, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(4, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(5, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(6, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(7, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(8, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(9, 'Shingairai love Mashereni', 'fd@maichairman.com', 'active', '7710ee057edcf6308674890641523a06'),
(10, 'test2', 'mayuri.infospace@gmail.com', '', '670da91be64127c92faac35c8300e814'),
(11, 'www', 'wwww', '', 'e34a8899ef6468b74f8a1048419ccc8b'),
(12, 'test2', 'dvr', '', '2aa3a5835854786d8310663cf445351c'),
(13, 'Tawana#2009', 'tawana@2##9', 'Delete', '2ffc779c4d055813813d6497ed60d6d6'),
(14, 'Newe customer', 'fd@maichairman.com', '', 'b59c67bf196a4758191e42f76670ceba');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_assets`
--
ALTER TABLE `tbl_assets`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `tbl_employees`
--
ALTER TABLE `tbl_employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `empno` (`empno`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_assets`
--
ALTER TABLE `tbl_assets`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_employees`
--
ALTER TABLE `tbl_employees`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
