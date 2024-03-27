-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 27, 2024 at 06:59 PM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uni_hostel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_form`
--

DROP TABLE IF EXISTS `admin_form`;
CREATE TABLE IF NOT EXISTS `admin_form` (
  `a_id` int NOT NULL AUTO_INCREMENT,
  `a_email` varchar(100) NOT NULL,
  `a_password` varchar(100) NOT NULL,
  PRIMARY KEY (`a_id`)
);

-- --------------------------------------------------------

--
-- Table structure for table `landlord_form`
--

DROP TABLE IF EXISTS `landlord_form`;
CREATE TABLE IF NOT EXISTS `landlord_form` (
  `L_id` int NOT NULL AUTO_INCREMENT,
  `L_name` varchar(100) NOT NULL,
  `L_email` varchar(100) NOT NULL,
  `L_password` varchar(100) NOT NULL,
  `L_phone` varchar(100) NOT NULL,
  `location` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL,
  PRIMARY KEY (`L_id`)
);

-- --------------------------------------------------------

--
-- Table structure for table `student_form`
--

DROP TABLE IF EXISTS `student_form`;
CREATE TABLE IF NOT EXISTS `student_form` (
  `s_id` int NOT NULL AUTO_INCREMENT,
  `s_name` varchar(100) NOT NULL,
  `s_email` varchar(100) NOT NULL,
  `s_password` varchar(100) NOT NULL,
  `s_phone` varchar(100) NOT NULL,
  PRIMARY KEY (`s_id`)
);

--
-- Dumping data for table `student_form`
--

INSERT INTO `student_form` (`s_id`, `s_name`, `s_email`, `s_password`, `s_phone`) VALUES
(1, 'nipuna', 'nipunaf18@gmail.com', '70010935', '0779619847'),
(2, 'nipuni', 'nipunaf@gmail.com', '70010935@f', '0779619848'),
(3, 'kaveesha', 'kaveesha@gmail.com', 'kaveesha', '0779768798'),
(4, 'kaveesh', 'kaveesh@gmail.com', 'kaveesh', '0779068798');

-- --------------------------------------------------------

--
-- Table structure for table `warden_form`
--

DROP TABLE IF EXISTS `warden_form`;
CREATE TABLE IF NOT EXISTS `warden_form` (
  `w_id` int NOT NULL AUTO_INCREMENT,
  `w_email` varchar(100) NOT NULL,
  `w_password` int NOT NULL,
  PRIMARY KEY (`w_id`)
);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
