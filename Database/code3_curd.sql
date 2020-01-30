-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2020 at 12:47 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `code3_curd`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(11) NOT NULL,
  `student_name` varchar(200) NOT NULL,
  `father_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `student_name`, `father_name`, `email`, `address`) VALUES
(3, 'Abdullah Ahmed Awan', 'Muhammad Zubair Awan', 'abdullah@gmail.com', 'Abbottabad Pakistan'),
(5, 'Habib Akbar', 'Muhammad Akbar Abbasi', 'abbasi@gmail.coom', 'Abbottabad Murree'),
(6, 'Nadim Abbasi', 'Muhmmad Anjum', 'abbasi@gmail.com', 'Abbasipura Abbasyain Murree'),
(8, 'Muzmail', 'Saqib Abbasi', 'muzmil@gmail.com', 'Islamabad Pakistan'),
(9, 'Muzmail', 'Saqib Abbasi', 'muzmil@gmail.com', 'Islamabad'),
(10, 'Hamza Khan', 'Muhammad Mushtaq', 'muhstaqson@gmail.com', 'Abbottabad'),
(11, 'Mujeeb', 'Muhammad Zubair', 'kesaxopij@5sun.net', 'Abbottabad Pakistan'),
(13, 'Touqeer Mirza', 'Muhmmad Arshad', 'kesaxopij@5sun.net', 'Abbottabadd Pakistan'),
(14, 'Umer Mirza', 'Muhammad Ahsan', 'tefotof740@mail3tech.com', 'Abbottabad'),
(16, 'Ayesha Abdullah', 'Muhammad Zubair', 'kesaxopij@5sun.net', 'Muzaffarabad Pakistan'),
(17, 'Haleem Malik', 'Muhammad Zubair', 'mirza@gmail.com', 'Abbottabad'),
(18, 'Saad Zaman Khan', 'Abdual Javeed', 'kesaxopij@5sun.net', 'Haripr'),
(23, 'Kashif', 'Miezkkj', 'napakil654@mtsg.me', 'salkdjakd'),
(25, 'Hamid Mir', 'Lj', 'napakil654@mtsg.me', 'asdaslkd'),
(30, 'Naeem Bukari', 'aaj', 'bukari@gmail.com', 'Abbadalksdkasj'),
(31, 'sadjh', 'djkashj', 'harmiboy@gmail.com', 'sadjasdjlasd'),
(32, 'Hot Boy', 'SonOfNone', 'noneson@gmaill.com', 'California USA'),
(33, 'Hot Boy', 'SonOfNone', 'noneson@gmaill.com', 'California USA'),
(34, 'Hot Boy', 'SonOfNone', 'noneson@gmaill.com', 'California USA'),
(36, 'SAA', 'SSS', 'S@gmail.com', 'aSKask;AS'),
(40, 'Mujeeb', 'Muhammad Akbar Abbasi', 'kesaxopij@5sun.net', 'DSADASD'),
(42, 'HARIS', 'Muqbool', 'mu1@gmail.com', 'dasdkasdk'),
(43, 'Saqib Javed', 'Muhammad Amir', 'Saqib@gmail.com', 'Abbottabad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
