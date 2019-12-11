-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2019 at 01:36 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bbm`
--

-- --------------------------------------------------------

--
-- Table structure for table `bb`
--

CREATE TABLE `bb` (
  `bb_id` int(11) UNSIGNED NOT NULL,
  `bb_name` varchar(20) NOT NULL,
  `bb_address` text NOT NULL,
  `bb_phno` bigint(10) NOT NULL,
  `bb_city` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bb`
--

INSERT INTO `bb` (`bb_id`, `bb_name`, `bb_address`, `bb_phno`, `bb_city`) VALUES
(1, 'BLOOD BANK 1', 'NEAR RTC COMPLEX', 9876543210, 'VIZAG'),
(2, 'BLOOD BANK 2', 'NEAR RTC COMPLEX', 9876543211, 'VIJAYAWADA'),
(3, 'BLOOD BANK 3', 'NEAR RTC COMPLEX', 9876543221, 'HYDERABAD'),
(4, 'BLOOD BANK 4', 'NEAR RTC COMPLEX', 9876543231, 'WARANGAL'),
(5, 'BLOOD BANK 5', 'NEAR RTC COMPLEX', 9876543241, 'LOHIT'),
(6, 'BLOOD BANK 6', 'NEAR RTC COMPLEX', 9876543251, 'TIRAP'),
(7, 'BLOOD BANK 7', 'NEAR RTC COMPLEX', 9848022338, 'CACHAR'),
(8, 'BLOOD BANK 8', 'NEAR RTC COMPLEX', 8341511221, 'HAILAKANDI'),
(9, 'BLOOD BANK 9', 'NEAR POLICE STATION', 9848047537, 'PATNA'),
(10, 'BLOOD BANK 10', 'NEAR RTC COMPLEX', 8433930866, 'VAISHALI'),
(15, 'BLOOD BANK 15', 'NEAR RTC COMPLEX', 9889001221, 'BIJAPUR'),
(16, 'BLOOD BANK 16', 'NEAR RTC COMPLEX', 9856003454, 'KOREA'),
(17, 'BLOOD BANK 17', 'NEAR RTC COMPLEX', 9119288237, 'GOA'),
(18, 'BLOOD BANK 18', 'NEAR RTC COMPLEX', 9229456312, 'PANJI'),
(19, 'BLOOD BANK 19', 'NEAR RTC COMPLEX', 9454569671, 'AHMEDABAD'),
(20, 'BLOOD BANK 20', 'NEAR RTC COMPLEX', 7861349831, 'DWARKA'),
(21, 'BLOOD BANK 21', 'NEAR RTC COMPLEX', 7809434322, 'AMBALA'),
(22, 'BLOOD BANK 22', 'NEAR RTC COMPLEX', 8884540990, 'HISAR'),
(23, 'BLOOD BANK 23', 'NEAR RTC COMPLEX', 9087988709, 'BILASPUR'),
(24, 'BLOOD BANK 24', 'NEAR RTC COMPLEX', 8987876776, 'KINNAUR'),
(25, 'BLOOD BANK 25', 'NEAR RTC COMPLEX', 9119288234, 'LEH'),
(26, 'BLOOD BANK 26', 'NEAR RTC COMPLEX', 9449733780, 'SRINAGAR'),
(27, 'BLOOD BANK 27', 'NEAR RTC COMPLEX', 9667455432, 'BOKARO'),
(28, 'BLOOD BANK 28', 'NEAR RTC COMPLEX', 9000056754, 'CHATRA'),
(29, 'BLOOD BANK 29', 'NEAR RTC COMPLEX', 7887909011, 'BANGALORE'),
(30, 'BLOOD BANK 30', 'NEAR RTC COMPLEX', 8886134897, 'BIJAPUR'),
(31, 'BLOOD BANK 31', 'NEAR RTC COMPLEX', 9875543221, 'ALLEPPEY'),
(32, 'BLOOD BANK 32', 'NEAR RTC COMPLEX', 9876593231, 'KANNUR'),
(33, 'BLOOD BANK 33', 'NEAR RTC COMPLEX', 9876943231, 'BHOPAL'),
(34, 'BLOOD BANK 34', 'NEAR RTC COMPLEX', 9876543232, 'DHAR'),
(35, 'BLOOD BANK 35', 'NEAR RTC COMPLEX', 8876543231, 'DHULE'),
(36, 'BLOOD BANK 36', 'NEAR RTC COMPLEX', 8876543031, 'LATUR'),
(37, 'BLOOD BANK 37', 'NEAR RTC COMPLEX', 9875543222, 'CHANDEL'),
(38, 'BLOOD BANK 38', 'NEAR RTC COMPLEX', 9876593239, 'BISHNUPUR'),
(39, 'BLOOD BANK 39', 'NEAR RTC COMPLEX', 9876943281, 'SHILLONG'),
(40, 'BLOOD BANK 40', 'NEAR RTC COMPLEX', 9876543237, 'JAINTIA HILLS'),
(41, 'BLOOD BANK 41', 'NEAR RTC COMPLEX', 8876543230, 'CHAMPHAI'),
(42, 'BLOOD BANK 42', 'NEAR RTC COMPLEX', 8876543901, 'LUNGLEI'),
(43, 'BLOOD BANK 43', 'NEAR RTC COMPLEX', 9805543222, 'DIMAPUR'),
(44, 'BLOOD BANK 44', 'NEAR RTC COMPLEX', 8341533332, 'PHEK'),
(45, 'BLOOD BANK 45', 'NEAR RTC COMPLEX', 9276943281, 'BALESWAR'),
(46, 'BLOOD BANK 46', 'NEAR RTC COMPLEX', 9876540237, 'CUTTACK'),
(47, 'BLOOD BANK 47', 'NEAR RTC COMPLEX', 8876541230, 'AMRITSAR'),
(48, 'BLOOD BANK 48', 'NEAR RTC COMPLEX', 9876543901, 'BARNALA'),
(49, 'BLOOD BANK 49', 'NEAR RTC COMPLEX', 9805443222, 'ALWAR'),
(50, 'BLOOD BANK 50', 'NEAR RTC COMPLEX', 7341533332, 'DHOLPUR'),
(51, 'BLOOD BANK 51', 'NEAR RTC COMPLEX', 9976943281, 'GANGTOK'),
(52, 'BLOOD BANK 52', 'NEAR RTC COMPLEX', 9076540237, 'CHUBA'),
(53, 'BLOOD BANK 53', 'NEAR RTC COMPLEX', 8876571230, 'CHENNAI'),
(54, 'BLOOD BANK 54', 'NEAR RTC COMPLEX', 9876043901, 'OOTY'),
(55, 'BLOOD BANK 55', 'NEAR RTC COMPLEX', 9806643222, 'AGARTALA'),
(56, 'BLOOD BANK 56', 'NEAR RTC COMPLEX', 8341533312, 'DHALAI'),
(57, 'BLOOD BANK 57', 'NEAR RTC COMPLEX', 9805543322, 'VARANASI'),
(58, 'BLOOD BANK 58', 'NEAR RTC COMPLEX', 8341588332, 'AGRA'),
(59, 'BLOOD BANK 59', 'NEAR RTC COMPLEX', 9276947281, 'HARIDWAR'),
(60, 'BLOOD BANK 60', 'NEAR RTC COMPLEX', 9823540237, 'DEHRADUN'),
(61, 'BLOOD BANK 61', 'NEAR RTC COMPLEX', 8876549130, 'ASANSOL'),
(62, 'BLOOD BANK 62', 'NEAR RTC COMPLEX', 9879943901, 'KOLKATA');

-- --------------------------------------------------------

--
-- Table structure for table `bcompatibility`
--

CREATE TABLE `bcompatibility` (
  `d_bg` tinyint(50) UNSIGNED NOT NULL,
  `r_bg` tinyint(50) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bcompatibility`
--

INSERT INTO `bcompatibility` (`d_bg`, `r_bg`) VALUES
(1, 1),
(1, 7),
(2, 1),
(2, 2),
(2, 7),
(2, 8),
(3, 3),
(3, 7),
(4, 3),
(4, 4),
(4, 7),
(4, 8),
(5, 1),
(5, 2),
(5, 3),
(5, 4),
(5, 5),
(5, 6),
(5, 7),
(5, 8),
(6, 1),
(6, 3),
(6, 6),
(6, 7),
(7, 7),
(8, 7),
(8, 8);

-- --------------------------------------------------------

--
-- Table structure for table `blood`
--

CREATE TABLE `blood` (
  `b_id` tinyint(50) UNSIGNED NOT NULL,
  `b_name` char(10) NOT NULL,
  `b_cost` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood`
--

INSERT INTO `blood` (`b_id`, `b_name`, `b_cost`) VALUES
(1, 'A+', 200),
(2, 'A-', 180),
(3, 'B+', 200),
(4, 'B-', 180),
(5, 'O-', 180),
(6, 'O+', 200),
(7, 'AB+', 180),
(8, 'AB-', 200);

-- --------------------------------------------------------

--
-- Table structure for table `donate`
--

CREATE TABLE `donate` (
  `d_id` int(11) NOT NULL,
  `duser_id` int(11) NOT NULL,
  `dbb_id` int(11) UNSIGNED NOT NULL,
  `d_date` date NOT NULL,
  `d_quantity` int(11) NOT NULL,
  `d_check` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donate`
--

INSERT INTO `donate` (`d_id`, `duser_id`, `dbb_id`, `d_date`, `d_quantity`, `d_check`) VALUES
(3, 3, 1, '2019-10-01', 100, 0),
(53, 5, 23, '2019-10-09', 200, 0);

-- --------------------------------------------------------

--
-- Stand-in structure for view `donations`
-- (See below for the actual view)
--
CREATE TABLE `donations` (
`d_id` int(11)
,`duser_id` int(11)
,`dbb_id` int(11) unsigned
,`d_date` date
,`d_quantity` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `m_id` int(11) NOT NULL,
  `m_name` varchar(20) NOT NULL,
  `m_phno` bigint(20) NOT NULL,
  `m_email` varchar(20) NOT NULL,
  `m_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`m_id`, `m_name`, `m_phno`, `m_email`, `m_password`) VALUES
(1, 'MANAGER 1', 8976543200, 'MANAGER 1@gmail.com', 'p'),
(2, 'MANAGER 2', 8976543201, 'MANAGER 2@gmail.com', 'p'),
(3, 'MANAGER 3', 8976543202, 'MANAGER 3@gmail.com', 'p'),
(4, 'MANAGER 4', 8976543203, 'MANAGER 4@gmail.com', 'p'),
(5, 'MANAGER 5', 8976543204, 'MANAGER 5@gmail.com', 'p'),
(6, 'MANAGER 6', 8976543205, 'MANAGER 6@gmail.com', 'p'),
(7, 'MANAGER 7', 8976543206, 'MANAGER 7@gmail.com', 'p'),
(8, 'MANAGER 8', 8976543207, 'MANAGER 8@gmail.com', 'p'),
(9, 'MANAGER 9', 8976543208, 'MANAGER 9@gmail.com', 'p'),
(10, 'MANAGER 10', 8976543209, 'MANAGER 10@gmail.com', 'p'),
(15, 'MANAGER 15', 8976543214, 'MANAGER 15@gmail.com', 'p'),
(16, 'MANAGER 16', 8976543215, 'MANAGER 16@gmail.com', 'p'),
(17, 'MANAGER 17', 8976543216, 'MANAGER 17@gmail.com', 'p'),
(18, 'MANAGER 18', 8976543217, 'MANAGER 18@gmail.com', 'p'),
(19, 'MANAGER 19', 8976543218, 'MANAGER 19@gmail.com', 'p'),
(20, 'MANAGER 20', 8976543219, 'MANAGER 20@gmail.com', 'p'),
(21, 'MANAGER 21', 8976543220, 'MANAGER 21@gmail.com', 'p'),
(22, 'MANAGER 22', 8976543221, 'MANAGER 22@gmail.com', 'p'),
(23, 'MANAGER 23', 8976543222, 'MANAGER 23@gmail.com', 'p'),
(24, 'MANAGER 24', 8976543223, 'MANAGER 24@gmail.com', 'p'),
(25, 'MANAGER 25', 8976543224, 'MANAGER 25@gmail.com', 'p'),
(26, 'MANAGER 26', 8976543225, 'MANAGER 26@gmail.com', 'p'),
(27, 'MANAGER 27', 8976543226, 'MANAGER 27@gmail.com', 'p'),
(28, 'MANAGER 28', 8976543227, 'MANAGER 28@gmail.com', 'p'),
(29, 'MANAGER 29', 8976543228, 'MANAGER 29@gmail.com', 'p'),
(30, 'MANAGER 30', 8976543229, 'MANAGER 30@gmail.com', 'p'),
(31, 'MANAGER 31', 8976543230, 'MANAGER 31@gmail.com', 'p'),
(32, 'MANAGER 32', 8976543231, 'MANAGER 32@gmail.com', 'p'),
(33, 'MANAGER 33', 8976543232, 'MANAGER 33@gmail.com', 'p'),
(34, 'MANAGER 34', 8976543233, 'MANAGER 34@gmail.com', 'p'),
(35, 'MANAGER 35', 8976543234, 'MANAGER 35@gmail.com', 'p'),
(36, 'MANAGER 36', 8976543235, 'MANAGER 36@gmail.com', 'p'),
(37, 'MANAGER 37', 8976543236, 'MANAGER 37@gmail.com', 'p'),
(38, 'MANAGER 38', 8976543237, 'MANAGER 38@gmail.com', 'p'),
(39, 'MANAGER 39', 8976543238, 'MANAGER 39@gmail.com', 'p'),
(40, 'MANAGER 40', 8976543239, 'MANAGER 40@gmail.com', 'p'),
(41, 'MANAGER 41', 8976543240, 'MANAGER 41@gmail.com', 'p'),
(42, 'MANAGER 42', 8976543241, 'MANAGER 42@gmail.com', 'p'),
(43, 'MANAGER 43', 8976543242, 'MANAGER 43@gmail.com', 'p'),
(44, 'MANAGER 44', 8976543243, 'MANAGER 44@gmail.com', 'p'),
(45, 'MANAGER 45', 8976543244, 'MANAGER 45@gmail.com', 'p'),
(46, 'MANAGER 46', 8976543245, 'MANAGER 46@gmail.com', 'p'),
(47, 'MANAGER 47', 8976543246, 'MANAGER 47@gmail.com', 'p'),
(48, 'MANAGER 48', 8976543247, 'MANAGER 48@gmail.com', 'p'),
(49, 'MANAGER 49', 8976543248, 'MANAGER 49@gmail.com', 'p'),
(50, 'MANAGER 50', 8976543249, 'MANAGER 50@gmail.com', 'p'),
(51, 'MANAGER 51', 8976543250, 'MANAGER 51@gmail.com', 'p'),
(52, 'MANAGER 52', 8976543251, 'MANAGER 52@gmail.com', 'p'),
(53, 'MANAGER 53', 8976543252, 'MANAGER 53@gmail.com', 'p'),
(54, 'MANAGER 54', 8976543253, 'MANAGER 54@gmail.com', 'p'),
(55, 'MANAGER 55', 8976543254, 'MANAGER 55@gmail.com', 'p'),
(56, 'MANAGER 56', 8976543255, 'MANAGER 56@gmail.com', 'p'),
(57, 'MANAGER 57', 8976543256, 'MANAGER 57@gmail.com', 'p'),
(58, 'MANAGER 58', 8976543257, 'MANAGER 58@gmail.com', 'p'),
(59, 'MANAGER 59', 8976543258, 'MANAGER 59@gmail.com', 'p'),
(60, 'MANAGER 60', 8976543259, 'MANAGER 60@gmail.com', 'p'),
(61, 'MANAGER 61', 8976543260, 'MANAGER 61@gmail.com', 'p'),
(62, 'MANAGER 62', 8945612307, 'MANAGER 62@gmail.com', 'p');

-- --------------------------------------------------------

--
-- Table structure for table `manages`
--

CREATE TABLE `manages` (
  `mbb_id` int(11) UNSIGNED NOT NULL,
  `mm_id` int(11) NOT NULL,
  `m_doj` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manages`
--

INSERT INTO `manages` (`mbb_id`, `mm_id`, `m_doj`) VALUES
(1, 1, '2019-10-02'),
(2, 2, '2019-10-02'),
(3, 3, '2019-10-02'),
(4, 4, '2019-10-02'),
(5, 5, '2019-10-02'),
(6, 6, '2019-10-02'),
(7, 7, '2019-10-02'),
(8, 8, '2019-10-02'),
(9, 9, '2019-10-02'),
(10, 10, '2019-10-02'),
(15, 15, '2019-10-02'),
(16, 16, '2019-10-02'),
(17, 17, '2019-10-02'),
(18, 18, '2019-10-02'),
(19, 19, '2019-10-02'),
(20, 20, '2019-10-02'),
(21, 21, '2019-10-02'),
(22, 22, '2019-10-02'),
(23, 23, '2019-10-02'),
(24, 24, '2019-10-02'),
(25, 25, '2019-10-02'),
(26, 26, '2019-10-02'),
(27, 27, '2019-10-02'),
(28, 28, '2019-10-02'),
(29, 29, '2019-10-02'),
(30, 30, '2019-10-02'),
(31, 31, '2019-10-02'),
(32, 32, '2019-10-02'),
(33, 33, '2019-10-02'),
(34, 34, '2019-10-02'),
(35, 35, '2019-10-02'),
(36, 36, '2019-10-02'),
(37, 37, '2019-10-02'),
(38, 38, '2019-10-02'),
(39, 39, '2019-10-02'),
(40, 40, '2019-10-02'),
(41, 41, '2019-10-02'),
(42, 42, '2019-10-02'),
(43, 43, '2019-10-02'),
(44, 44, '2019-10-02'),
(45, 45, '2019-10-02'),
(46, 46, '2019-10-02'),
(47, 47, '2019-10-02'),
(48, 48, '2019-10-02'),
(49, 49, '2019-10-02'),
(50, 50, '2019-10-02'),
(51, 51, '2019-10-02'),
(52, 52, '2019-10-02'),
(53, 53, '2019-10-02'),
(54, 54, '2019-10-02'),
(55, 55, '2019-10-02'),
(56, 56, '2019-10-02'),
(57, 57, '2019-10-02'),
(58, 58, '2019-10-02'),
(59, 59, '2019-10-02'),
(60, 60, '2019-10-02'),
(61, 61, '2019-10-02'),
(62, 62, '2019-10-19');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `o_id` int(11) NOT NULL,
  `ouser_id` int(11) NOT NULL,
  `obb_id` int(11) UNSIGNED NOT NULL,
  `o_quantity` int(11) NOT NULL,
  `ob_id` tinyint(50) UNSIGNED NOT NULL,
  `o_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`o_id`, `ouser_id`, `obb_id`, `o_quantity`, `ob_id`, `o_date`) VALUES
(1, 1, 1, 152, 3, '2019-10-07'),
(2, 1, 38, 13, 3, '2019-10-07'),
(3, 3, 29, 163, 6, '2019-10-07'),
(4, 5, 38, 120, 1, '2019-10-07'),
(5, 5, 33, 200, 1, '2019-10-18'),
(6, 5, 48, 520, 1, '2019-10-18'),
(7, 5, 47, 20, 1, '2019-10-18'),
(8, 5, 47, 20, 1, '2019-10-18'),
(9, 5, 45, 520, 1, '2019-10-18'),
(10, 5, 45, 520, 5, '2019-10-18');

-- --------------------------------------------------------

--
-- Table structure for table `stored`
--

CREATE TABLE `stored` (
  `sb_id` int(11) NOT NULL,
  `sbb_id` int(11) NOT NULL,
  `s_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stored`
--

INSERT INTO `stored` (`sb_id`, `sbb_id`, `s_quantity`) VALUES
(1, 1, 5000),
(1, 2, 5000),
(1, 3, 5000),
(1, 4, 5000),
(1, 5, 5000),
(1, 6, 5000),
(1, 7, 5000),
(1, 8, 5000),
(1, 9, 5000),
(1, 10, 5000),
(1, 15, 5000),
(1, 16, 5000),
(1, 17, 5000),
(1, 18, 5000),
(1, 19, 5000),
(1, 20, 5000),
(1, 21, 5000),
(1, 22, 5000),
(1, 23, 5000),
(1, 24, 5000),
(1, 25, 5000),
(1, 26, 5000),
(1, 27, 5000),
(1, 28, 5000),
(1, 29, 5000),
(1, 30, 5000),
(1, 31, 5000),
(1, 32, 5000),
(1, 33, 5000),
(1, 34, 5000),
(1, 35, 5000),
(1, 36, 5000),
(1, 37, 5000),
(1, 38, 5000),
(1, 39, 5000),
(1, 40, 5000),
(1, 41, 5000),
(1, 42, 5000),
(1, 43, 5000),
(1, 44, 5000),
(1, 45, 5000),
(1, 46, 5000),
(1, 47, 5000),
(1, 48, 5000),
(1, 49, 5000),
(1, 50, 5000),
(1, 51, 5000),
(1, 52, 5000),
(1, 53, 5000),
(1, 54, 5000),
(1, 55, 5000),
(1, 56, 5000),
(1, 57, 5000),
(1, 58, 5000),
(1, 59, 5000),
(1, 60, 5000),
(1, 61, 5000),
(1, 62, 5000),
(2, 1, 5000),
(2, 2, 5000),
(2, 3, 5000),
(2, 4, 5000),
(2, 5, 5000),
(2, 6, 5000),
(2, 7, 5000),
(2, 8, 5000),
(2, 9, 5000),
(2, 10, 5000),
(2, 15, 5000),
(2, 16, 5000),
(2, 17, 5000),
(2, 18, 5000),
(2, 19, 5000),
(2, 20, 5000),
(2, 21, 5000),
(2, 22, 5000),
(2, 23, 5000),
(2, 24, 5000),
(2, 25, 5000),
(2, 26, 5000),
(2, 27, 5000),
(2, 28, 5000),
(2, 29, 5000),
(2, 30, 5000),
(2, 31, 5000),
(2, 32, 5000),
(2, 33, 5000),
(2, 34, 5000),
(2, 35, 5000),
(2, 36, 5000),
(2, 37, 5000),
(2, 38, 5000),
(2, 39, 5000),
(2, 40, 5000),
(2, 41, 5000),
(2, 42, 5000),
(2, 43, 5000),
(2, 44, 5000),
(2, 45, 5000),
(2, 46, 5000),
(2, 47, 5000),
(2, 48, 5000),
(2, 49, 5000),
(2, 50, 5000),
(2, 51, 5000),
(2, 52, 5000),
(2, 53, 5000),
(2, 54, 5000),
(2, 55, 5000),
(2, 56, 5000),
(2, 57, 5000),
(2, 58, 5000),
(2, 59, 5000),
(2, 60, 5000),
(2, 61, 5000),
(2, 62, 5000),
(3, 1, 5000),
(3, 2, 5000),
(3, 3, 5000),
(3, 4, 5000),
(3, 5, 5000),
(3, 6, 5000),
(3, 7, 5000),
(3, 8, 5000),
(3, 9, 5000),
(3, 10, 5000),
(3, 15, 5000),
(3, 16, 5000),
(3, 17, 5000),
(3, 18, 5000),
(3, 19, 5000),
(3, 20, 5000),
(3, 21, 5000),
(3, 22, 5000),
(3, 23, 5000),
(3, 24, 5000),
(3, 25, 5000),
(3, 26, 5000),
(3, 27, 5000),
(3, 28, 5000),
(3, 29, 5000),
(3, 30, 5000),
(3, 31, 5000),
(3, 32, 5000),
(3, 33, 5000),
(3, 34, 5000),
(3, 35, 5000),
(3, 36, 5000),
(3, 37, 5000),
(3, 38, 5000),
(3, 39, 5000),
(3, 40, 5000),
(3, 41, 5000),
(3, 42, 5000),
(3, 43, 5000),
(3, 44, 5000),
(3, 45, 5000),
(3, 46, 5000),
(3, 47, 5000),
(3, 48, 5000),
(3, 49, 5000),
(3, 50, 5000),
(3, 51, 5000),
(3, 52, 5000),
(3, 53, 5000),
(3, 54, 5000),
(3, 55, 5000),
(3, 56, 5000),
(3, 57, 5000),
(3, 58, 5000),
(3, 59, 5000),
(3, 60, 5000),
(3, 61, 5000),
(3, 62, 5000),
(4, 1, 5000),
(4, 2, 5000),
(4, 3, 5000),
(4, 4, 5000),
(4, 5, 5000),
(4, 6, 5000),
(4, 7, 5000),
(4, 8, 5000),
(4, 9, 5000),
(4, 10, 5000),
(4, 15, 5000),
(4, 16, 5000),
(4, 17, 5000),
(4, 18, 5000),
(4, 19, 5000),
(4, 20, 5000),
(4, 21, 5000),
(4, 22, 5000),
(4, 23, 5000),
(4, 24, 5000),
(4, 25, 5000),
(4, 26, 5000),
(4, 27, 5000),
(4, 28, 5000),
(4, 29, 5000),
(4, 30, 5000),
(4, 31, 5000),
(4, 32, 5000),
(4, 33, 5000),
(4, 34, 5000),
(4, 35, 5000),
(4, 36, 5000),
(4, 37, 5000),
(4, 38, 5000),
(4, 39, 5000),
(4, 40, 5000),
(4, 41, 5000),
(4, 42, 5000),
(4, 43, 5000),
(4, 44, 5000),
(4, 45, 5000),
(4, 46, 5000),
(4, 47, 5000),
(4, 48, 5000),
(4, 49, 5000),
(4, 50, 5000),
(4, 51, 5000),
(4, 52, 5000),
(4, 53, 5000),
(4, 54, 5000),
(4, 55, 5000),
(4, 56, 5000),
(4, 57, 5000),
(4, 58, 5000),
(4, 59, 5000),
(4, 60, 5000),
(4, 61, 5000),
(4, 62, 5000),
(5, 1, 5000),
(5, 2, 5000),
(5, 3, 5000),
(5, 4, 5000),
(5, 5, 5000),
(5, 6, 5000),
(5, 7, 5000),
(5, 8, 5000),
(5, 9, 5000),
(5, 10, 5000),
(5, 15, 5000),
(5, 16, 5000),
(5, 17, 5000),
(5, 18, 5000),
(5, 19, 5000),
(5, 20, 5000),
(5, 21, 5000),
(5, 22, 5000),
(5, 23, 5000),
(5, 24, 5000),
(5, 25, 5000),
(5, 26, 5000),
(5, 27, 5000),
(5, 28, 5000),
(5, 29, 5000),
(5, 30, 5000),
(5, 31, 5000),
(5, 32, 5000),
(5, 33, 5000),
(5, 34, 5000),
(5, 35, 5000),
(5, 36, 5000),
(5, 37, 5000),
(5, 38, 5000),
(5, 39, 5000),
(5, 40, 5000),
(5, 41, 5000),
(5, 42, 5000),
(5, 43, 5000),
(5, 44, 5000),
(5, 45, 5000),
(5, 46, 5000),
(5, 47, 5000),
(5, 48, 5000),
(5, 49, 5000),
(5, 50, 5000),
(5, 51, 5000),
(5, 52, 5000),
(5, 53, 5000),
(5, 54, 5000),
(5, 55, 5000),
(5, 56, 5000),
(5, 57, 5000),
(5, 58, 5000),
(5, 59, 5000),
(5, 60, 5000),
(5, 61, 5000),
(5, 62, 5000),
(6, 1, 5000),
(6, 2, 5000),
(6, 3, 5000),
(6, 4, 5000),
(6, 5, 5000),
(6, 6, 5000),
(6, 7, 5000),
(6, 8, 5000),
(6, 9, 5000),
(6, 10, 5000),
(6, 15, 5000),
(6, 16, 5000),
(6, 17, 5000),
(6, 18, 5000),
(6, 19, 5000),
(6, 20, 5000),
(6, 21, 5000),
(6, 22, 5000),
(6, 23, 5000),
(6, 24, 5000),
(6, 25, 5000),
(6, 26, 5000),
(6, 27, 5000),
(6, 28, 5000),
(6, 29, 5000),
(6, 30, 5000),
(6, 31, 5000),
(6, 32, 5000),
(6, 33, 5000),
(6, 34, 5000),
(6, 35, 5000),
(6, 36, 5000),
(6, 37, 5000),
(6, 38, 5000),
(6, 39, 5000),
(6, 40, 5000),
(6, 41, 5000),
(6, 42, 5000),
(6, 43, 5000),
(6, 44, 5000),
(6, 45, 5000),
(6, 46, 5000),
(6, 47, 5000),
(6, 48, 5000),
(6, 49, 5000),
(6, 50, 5000),
(6, 51, 5000),
(6, 52, 5000),
(6, 53, 5000),
(6, 54, 5000),
(6, 55, 5000),
(6, 56, 5000),
(6, 57, 5000),
(6, 58, 5000),
(6, 59, 5000),
(6, 60, 5000),
(6, 61, 5000),
(6, 62, 5000),
(7, 1, 5000),
(7, 2, 5000),
(7, 3, 5000),
(7, 4, 5000),
(7, 5, 5000),
(7, 6, 5000),
(7, 7, 5000),
(7, 8, 5000),
(7, 9, 5000),
(7, 10, 5000),
(7, 15, 5000),
(7, 16, 5000),
(7, 17, 5000),
(7, 18, 5000),
(7, 19, 5000),
(7, 20, 5000),
(7, 21, 5000),
(7, 22, 5000),
(7, 23, 5000),
(7, 24, 5000),
(7, 25, 5000),
(7, 26, 5000),
(7, 27, 5000),
(7, 28, 5000),
(7, 29, 5000),
(7, 30, 5000),
(7, 31, 5000),
(7, 32, 5000),
(7, 33, 5000),
(7, 34, 5000),
(7, 35, 5000),
(7, 36, 5000),
(7, 37, 5000),
(7, 38, 5000),
(7, 39, 5000),
(7, 40, 5000),
(7, 41, 5000),
(7, 42, 5000),
(7, 43, 5000),
(7, 44, 5000),
(7, 45, 5000),
(7, 46, 5000),
(7, 47, 5000),
(7, 48, 5000),
(7, 49, 5000),
(7, 50, 5000),
(7, 51, 5000),
(7, 52, 5000),
(7, 53, 5000),
(7, 54, 5000),
(7, 55, 5000),
(7, 56, 5000),
(7, 57, 5000),
(7, 58, 5000),
(7, 59, 5000),
(7, 60, 5000),
(7, 61, 5000),
(7, 62, 5000),
(8, 1, 5000),
(8, 2, 5000),
(8, 3, 5000),
(8, 4, 5000),
(8, 5, 5000),
(8, 6, 5000),
(8, 7, 5000),
(8, 8, 5000),
(8, 9, 5000),
(8, 10, 5000),
(8, 15, 5000),
(8, 16, 5000),
(8, 17, 5000),
(8, 18, 5000),
(8, 19, 5000),
(8, 20, 5000),
(8, 21, 5000),
(8, 22, 5000),
(8, 23, 5000),
(8, 24, 5000),
(8, 25, 5000),
(8, 26, 5000),
(8, 27, 5000),
(8, 28, 5000),
(8, 29, 5000),
(8, 30, 5000),
(8, 31, 5000),
(8, 32, 5000),
(8, 33, 5000),
(8, 34, 5000),
(8, 35, 5000),
(8, 36, 5000),
(8, 37, 5000),
(8, 38, 5000),
(8, 39, 5000),
(8, 40, 5000),
(8, 41, 5000),
(8, 42, 5000),
(8, 43, 5000),
(8, 44, 5000),
(8, 45, 5000),
(8, 46, 5000),
(8, 47, 5000),
(8, 48, 5000),
(8, 49, 5000),
(8, 50, 5000),
(8, 51, 5000),
(8, 52, 5000),
(8, 53, 5000),
(8, 54, 5000),
(8, 55, 5000),
(8, 56, 5000),
(8, 57, 5000),
(8, 58, 5000),
(8, 59, 5000),
(8, 60, 5000),
(8, 61, 5000),
(8, 62, 5000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_fname` varchar(50) NOT NULL,
  `user_username` varchar(30) NOT NULL,
  `user_password` varchar(30) NOT NULL,
  `user_age` int(11) NOT NULL,
  `user_gender` varchar(1) NOT NULL,
  `user_weight` int(11) NOT NULL,
  `user_bloodgroup` varchar(10) NOT NULL,
  `user_city` varchar(20) NOT NULL,
  `user_address` text NOT NULL,
  `user_state` varchar(20) NOT NULL,
  `user_phoneNumber` bigint(10) NOT NULL,
  `user_emailId` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_fname`, `user_username`, `user_password`, `user_age`, `user_gender`, `user_weight`, `user_bloodgroup`, `user_city`, `user_address`, `user_state`, `user_phoneNumber`, `user_emailId`) VALUES
(1, 'LATCHIPATRUNI KALYAN PAVAN', 'Sr', '317126510091', 'kp', 20, 'M', 80, 'B+', 'BOBBILI', '40-250/208, GUEST HOUSE COLONY,OPP GOVT ITI,BOBBILI', 'AndhraPradesh', 9492164946, 'kalyanpavan1179@gmail.com'),
(3, 'doki.keerthana', 'doki.kesava', '317126510067', 'doki', 19, 'F', 50, 'O+', 'vizag', '40-250/208, GUEST HOUSE COLONY,OPP GOVT ITI,BOBBILI', 'AndhraPradesh', 6982456662, 'keerthana.doki@gmail.com'),
(4, 'ADMIN', 'FATHER OF ADMIN', 'admin', 'nopassword', 35, 'M', 64, 'AB+', 'VIZAG', 'NEAR RTC COMPLEX', 'ANDHRA PRADESH', 8123456789, 'admin@bloodyforneedy.org'),
(5, 'kv', 'ck', 'ck', 'ck', 90, 'O', 200, 'A+', '', 'red light area', 'Bihar', 1234567890, 'kvck@gmail.com');

-- --------------------------------------------------------

--
-- Structure for view `donations`
--
DROP TABLE IF EXISTS `donations`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `donations`  AS  select `donate`.`d_id` AS `d_id`,`donate`.`duser_id` AS `duser_id`,`donate`.`dbb_id` AS `dbb_id`,`donate`.`d_date` AS `d_date`,`donate`.`d_quantity` AS `d_quantity` from `donate` where (`donate`.`d_date` <= curdate()) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bb`
--
ALTER TABLE `bb`
  ADD PRIMARY KEY (`bb_id`),
  ADD UNIQUE KEY `bb_phno` (`bb_phno`);

--
-- Indexes for table `bcompatibility`
--
ALTER TABLE `bcompatibility`
  ADD PRIMARY KEY (`d_bg`,`r_bg`),
  ADD KEY `bcompatibility_ibfk_2` (`r_bg`);

--
-- Indexes for table `blood`
--
ALTER TABLE `blood`
  ADD PRIMARY KEY (`b_id`),
  ADD UNIQUE KEY `b_name` (`b_name`);

--
-- Indexes for table `donate`
--
ALTER TABLE `donate`
  ADD PRIMARY KEY (`d_id`),
  ADD KEY `donate_ibfk_1` (`duser_id`),
  ADD KEY `donate_ibfk_2` (`dbb_id`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`m_id`),
  ADD UNIQUE KEY `m_email` (`m_email`);

--
-- Indexes for table `manages`
--
ALTER TABLE `manages`
  ADD PRIMARY KEY (`mbb_id`),
  ADD KEY `manages_ibfk_1` (`mm_id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`o_id`),
  ADD KEY `request_ibfk_1` (`ouser_id`),
  ADD KEY `request_ibfk_2` (`obb_id`),
  ADD KEY `request_ibfk_3` (`ob_id`);

--
-- Indexes for table `stored`
--
ALTER TABLE `stored`
  ADD PRIMARY KEY (`sb_id`,`sbb_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_username` (`user_username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bb`
--
ALTER TABLE `bb`
  MODIFY `bb_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `blood`
--
ALTER TABLE `blood`
  MODIFY `b_id` tinyint(50) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `donate`
--
ALTER TABLE `donate`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bcompatibility`
--
ALTER TABLE `bcompatibility`
  ADD CONSTRAINT `bcompatibility_ibfk_1` FOREIGN KEY (`d_bg`) REFERENCES `blood` (`b_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bcompatibility_ibfk_2` FOREIGN KEY (`r_bg`) REFERENCES `blood` (`b_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `donate`
--
ALTER TABLE `donate`
  ADD CONSTRAINT `donate_ibfk_1` FOREIGN KEY (`duser_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `donate_ibfk_2` FOREIGN KEY (`dbb_id`) REFERENCES `bb` (`bb_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `manages`
--
ALTER TABLE `manages`
  ADD CONSTRAINT `manages_ibfk_1` FOREIGN KEY (`mm_id`) REFERENCES `manager` (`m_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `manages_ibfk_2` FOREIGN KEY (`mbb_id`) REFERENCES `bb` (`bb_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `request_ibfk_1` FOREIGN KEY (`ouser_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `request_ibfk_2` FOREIGN KEY (`obb_id`) REFERENCES `bb` (`bb_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `request_ibfk_3` FOREIGN KEY (`ob_id`) REFERENCES `blood` (`b_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
