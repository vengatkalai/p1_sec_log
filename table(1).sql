-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 20, 2022 at 11:42 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `s_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `table`
--

DROP TABLE IF EXISTS `table`;
CREATE TABLE IF NOT EXISTS `table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `aadhar` varchar(255) DEFAULT NULL,
  `hundred_days` varchar(255) DEFAULT NULL,
  `pip_num_or_bpl_card` varchar(255) DEFAULT NULL,
  `community` varchar(255) DEFAULT NULL,
  `smartcard` varchar(255) DEFAULT NULL,
  `marksheet` varchar(255) DEFAULT NULL,
  `passbook` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table`
--

INSERT INTO `table` (`id`, `name`, `email`, `password`, `image`, `aadhar`, `hundred_days`, `pip_num_or_bpl_card`, `community`, `smartcard`, `marksheet`, `passbook`) VALUES
(15, 'ranjith', 'ren@gmail.com', '123456', 'upload/1670654236ca (6).jpg', '123456', NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'magi', 'magi@email.com', '12345', 'upload/1670653299ca (4).jpg', '123456', NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'selva', 'selva@gmail.com', '12345', 'upload/1670648474ca (2).jpg', '123456', NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'isu', 'isu@gmail.com', '123456', 'upload/1670652257ca (6).jpg', '123456', NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'kalai1', 'kalai@gmail.com', '1234', 'upload/1670648344ca (1).jpg', '123456', NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'yassar', 'yasar@gmail.com', '1234', 'upload/1670822817showicon.png', '123456', NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'anbu', 'anbu@gmail.com', '1234', 'upload/1670822933tiger-head_23-2148003322.jpg', '123456', NULL, NULL, NULL, NULL, NULL, NULL),
(18, '', '', '1234', 'upload/1670837922showicon.png', '123456', NULL, NULL, NULL, NULL, NULL, NULL),
(19, '', '', '1234', 'upload/1670838097tiger-head_23-2148003322.jpg', '123456', NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'name', 'email', 'aaaa', 'upload/1670838258showicon.png', '123456', NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'aaaa', 'aaa@aaa.aaa', 'aaaa', 'upload/1670838313tiger-head_23-2148003322.jpg', '123456', NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'sss', 'sss@sss.sss', 'ssss', 'upload/1670843693showicon.png', '123456', NULL, NULL, NULL, NULL, NULL, NULL),
(23, 'yasar', 'yasar@gmail.com', '1234', 'upload/1670844337tiger-head_23-2148003322.jpg', '123456', NULL, NULL, NULL, NULL, NULL, NULL),
(24, 'zzz', 'zzz@zzz.zzz', 'zzzz', 'upload/1670857888Bye.gif', '123456', NULL, NULL, NULL, NULL, NULL, NULL),
(25, 'ponraj', 'ponraj@gmail.com', '1234', 'upload/1670914036tiger-head_23-2148003322.jpg', '123456', NULL, NULL, NULL, NULL, NULL, NULL),
(26, 'ranjith', 'ranjith@gmail.com', '123456789', 'upload/1670999185360_F_290273933_ukYZjDv8nqgpOBcBUo5CQyFcxAzYlZRW.jpg', '123456', NULL, NULL, NULL, NULL, NULL, NULL),
(27, 'aaa', 'trial@gmail.com', '1234', 'upload/1671000987chimpanzee-sitting-sad-mammal.jpg', '123456', NULL, NULL, NULL, NULL, NULL, NULL),
(28, 'akash', 'akash@gmail.com', '1234', 'upload/1671075883chimpanzee-sitting-sad-mammal.jpg', '123456', NULL, NULL, NULL, NULL, NULL, NULL),
(29, 'cadd', 'cadd@gmail.com', 'cadd', 'upload/1671172106logo.png', 'sdfghj', NULL, NULL, NULL, NULL, NULL, 'sdfghj'),
(30, 'anbu', 'ANBU123@GMAIL.COM', '1234', 'upload/1671188978squirrel-animal-cute-rodents-47547.jpeg', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, 'thangaraj', 'thangaraj2789@gmail.com', '9585432789', 'upload/1671251163squirrel-animal-cute-rodents-47547.jpeg', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(32, 'qqq', 'qqq@qqq.qqq', 'qqqq', 'upload/1671252978pexels-photo-1661179.jpeg', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, 'ranjith', 'ranjith@gmail.com', '1234', 'upload/1671253656Felis_silvestris_silvestris_small_gradual_decrease_of_quality.png', 'documents/1671259802Felis_silvestris_silvestris_small_gradual_decrease_of_quality.png', NULL, NULL, NULL, NULL, NULL, 'documents/1671259433pexels-photo-1661179.jpeg'),
(34, 'indrajith', 'indragith@gmail.com', '1234', 'upload/1671262288pexels-photo-247502.jpeg', 'documents/1671268313images.jpg', 'documents/1671267179images.jpg', 'documents/1671268437Felis_silvestris_silvestris_small_gradual_decrease_of_quality.png', 'documents/1671266419images.jpg', NULL, 'documents/1671266642images.jpg', 'documents/1671268494images.jpg'),
(35, 'final', 'final@gmail.com', '1234', 'upload/167126854330tb-panda-superJumbo.jpg', 'documents/1671268695aadhar.jpg', 'documents/1671268704100_days.png', 'documents/1671268714pip_number.jpeg', 'documents/1671268791100_days.png', 'documents/1671268756smart.jpg', 'documents/1671268771marksheet.jpeg', 'documents/1671268783passbook.jpeg'),
(37, 'gokul', 'gokul@gmail.com', '1234', 'upload/1671269022pexels-photo-247502.jpeg', 'documents/1671269077aadhar.jpg', 'documents/1671269084100_days.png', 'documents/1671269095pip_number.jpeg', NULL, NULL, NULL, NULL),
(38, 'kalaiselvam', 'kalai@gmail.com', '12345', 'upload/16714292661670605728IMG_20220303_232307_compress7.jpg', 'documents/16715318022.jpg', 'documents/16714292991670653299ca (4).jpg', 'documents/16714293061670654236ca (6).jpg', 'documents/16714293141670911058showicon.png', 'documents/16714293321670908930tiger-head_23-2148003322.jpg', 'documents/167153143701-min.png', 'documents/16714293451670648474ca (2).jpg'),
(39, 'sss', 'sss@sss.sss', 'ssss', 'upload/16714301341670822817showicon.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(40, 'isuuu', 'isu@isu.isu', 'isuu', 'upload/16714303021670857888Bye.gif', 'documents/16714304281670648344ca (1).jpg', NULL, 'documents/16714307541670908930tiger-head_23-2148003322.jpg', NULL, NULL, NULL, NULL),
(41, 'aaa', 'aaa@aaa.aaa', 'aaaa', 'upload/16714405431670822817showicon.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(42, 'surya', 'surya@gmail.com', '00000', 'upload/167151414416714405431670822817showicon.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
