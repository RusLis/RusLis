-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 19, 2018 at 01:32 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `survival`
--

-- --------------------------------------------------------

--
-- Table structure for table `dalyviai`
--

CREATE TABLE `dalyviai` (
  `uid` int(6) NOT NULL,
  `vardas` varchar(20) CHARACTER SET latin7 NOT NULL,
  `lname` varchar(30) CHARACTER SET latin7 NOT NULL,
  `gimimo_data` date NOT NULL,
  `gps_id` varchar(16) DEFAULT '0',
  `points` int(6) NOT NULL,
  `runner` enum('no','yes') NOT NULL DEFAULT 'no',
  `email` varchar(30) NOT NULL,
  `phone` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dalyviai`
--

INSERT INTO `dalyviai` (`uid`, `vardas`, `lname`, `gimimo_data`, `gps_id`, `points`, `runner`, `email`, `phone`) VALUES
(1, 'Darius', 'Stanevičius', '0000-00-00', '0', 10, 'no', '', 0),
(2, 'Andius', 'Zaremba', '0000-00-00', '0', 10, 'no', '', 0),
(3, 'Karolis', 'Janavičius', '0000-00-00', '0', 15, 'yes', '', 0),
(4, 'Žygimantas', 'Brazauskas', '0000-00-00', '0', 10, 'no', '', 0),
(5, 'Vitalijus', 'Dargužis', '0000-00-00', '0', 10, 'no', '', 0),
(6, 'Rimas', 'Žilinskas', '0000-00-00', '0', 13, 'yes', '', 0),
(7, 'Nerijus', 'Misevičius', '0000-00-00', '0', 10, 'no', '', 0),
(8, 'Gintaras', 'Raudonikis', '0000-00-00', '0', 10, 'no', '', 0),
(9, 'Donatas', 'Naglys', '0000-00-00', '0', 10, 'no', '', 0),
(10, 'Matas', 'Linkevičius', '0000-00-00', '0', 10, 'no', '', 0),
(11, 'Vygintas', 'Kuskys', '0000-00-00', '0', 10, 'no', '', 0),
(12, 'Arūnas', 'Višiamirskis', '0000-00-00', '0', 30, 'no', 'test@test.lt', 0),
(13, 'Klaudijus', 'Višiamirskis', '0000-00-00', '0', 10, 'no', '', 0),
(14, 'Žilvinas', 'Dilys', '0000-00-00', '0', 10, 'no', '', 0),
(15, 'Vaidas', 'Jankus', '0000-00-00', '0', 30, 'no', '', 0),
(16, 'Denisas', 'Gulbė', '0000-00-00', '0', 20, 'no', '', 0),
(17, 'Modestas', 'Kavaliauskas', '0000-00-00', '0', 10, 'no', '', 0),
(18, 'Jonas', 'Levickas', '0000-00-00', '0', 10, 'no', '', 0),
(19, 'Justina', 'Švedytė', '0000-00-00', '0', 16, 'yes', '', 0),
(20, 'Viktoras', 'Lošys', '0000-00-00', '0', 25, 'yes', '', 0),
(21, 'Karolis', 'Šmigelskis', '0000-00-00', '0', 10, 'no', '', 0),
(22, 'Kamilė', 'Kasparavičiūtė', '0000-00-00', '0', 16, 'yes', '', 0),
(23, 'Gytis', 'Kasparavičius', '0000-00-00', '0', 16, 'yes', '', 0),
(24, 'Česlovas', 'Poscevičius', '0000-00-00', '0', 14, 'yes', '', 0),
(25, 'Ričardas', 'Vaičiūnas', '0000-00-00', '0', 10, 'no', '', 0),
(26, 'Gytis', 'Vaičiūnas', '0000-00-00', '0', 10, 'no', '', 0),
(27, 'Vilius', 'Ivanovas', '0000-00-00', '0', 10, 'no', '', 0),
(28, 'Gediminas', 'Girkis', '0000-00-00', '0', 10, 'no', '', 0),
(29, 'Jonas', 'Vaičiūnas', '0000-00-00', '0', 10, 'no', '', 0),
(30, 'Haroldas', 'Mažekelis', '0000-00-00', '0', 10, 'no', '', 0),
(31, 'Arnas', 'Šiušia', '0000-00-00', '0', 10, 'no', 'test@test.lt', 0),
(32, 'Berčinskis', 'Mindaugas', '0000-00-00', '0', 10, 'no', '', 0),
(33, 'Mantas', 'Pečiulaitis', '0000-00-00', '0', 10, 'no', '', 0),
(34, 'Mangirdas', 'Sakalauskas', '0000-00-00', '0', 20, 'no', '', 0),
(35, 'Audrius', 'Adomaitis', '0000-00-00', '0', 15, 'yes', '', 0),
(36, 'Jonas', 'Rudminas', '0000-00-00', '0', 10, 'no', '', 0),
(37, 'Mantas', 'Stakerauskas', '0000-00-00', '0', 10, 'no', '', 0),
(38, 'Saulius', 'Varapnickas', '0000-00-00', '0', 20, 'yes', '', 0),
(39, 'Julius', 'Grinius', '0000-00-00', '0', 20, 'yes', '', 0),
(40, 'Vaida', 'Lošytė', '0000-00-00', '0', 25, 'yes', '', 0),
(41, 'Mantas', 'Atkočiūnas', '0000-00-00', '0', 10, 'no', '', 0),
(42, 'Dainius', 'Atkočiūnas', '0000-00-00', '0', 10, 'no', '', 0),
(43, 'Andrius', 'Užmedzkis', '0000-00-00', '0', 10, 'no', '', 0),
(44, 'Erikas', 'Pečkaitis', '0000-00-00', '0', 10, 'no', '', 0),
(45, 'Egidijus', 'Žiška', '0000-00-00', '0', 10, 'no', '', 0),
(46, 'Asta', 'Užmedzkienė', '0000-00-00', '0', 10, 'no', 'test@test.lt', 0),
(47, 'Vilius', 'Ūksas', '0000-00-00', '0', 10, 'no', '', 0),
(48, 'Ridas', 'Ūksas', '0000-00-00', '0', 10, 'no', '', 0),
(49, 'Ruslan', 'Lisovskij', '0000-00-00', '0', 10, 'no', 'admin@ldl.lt', 869915795),
(50, 'Gintarė', 'Lošienė', '0000-00-00', '0', 10, 'no', '', 0),
(51, 'Žilvinas', 'Dilys', '0000-00-00', '0', 20, 'no', '', 0),
(52, 'Jonas', 'Ramonas', '0000-00-00', '0', 0, '', 'fdsfsdf@fdsfd.ll', 869915795),
(53, 'Jonas', 'Ramonas', '1981-10-04', '0', 0, '', 'dasdsa@fdssd.lt', 869915795),
(54, 'gfsdgfsd', '', '0000-00-00', '', 0, '', 'gfds@dffs.ll', 869915795),
(55, 'fdsfds', '', '0000-00-00', '', 0, '', 'fdsfdsafdsa@fdsfds.ll', 869915795);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(2) NOT NULL,
  `data` date NOT NULL,
  `time_from` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `time_to` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `data`, `time_from`, `time_to`) VALUES
(0, '2018-06-09', '2018-06-09 08:00:00', '2018-06-09 13:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `name` varchar(15) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `birthdate` date NOT NULL,
  `telefonas` int(9) NOT NULL,
  `email` varchar(30) NOT NULL,
  `uid` int(4) NOT NULL,
  `GPS_id` varchar(15) NOT NULL,
  `eventid` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`name`, `lname`, `birthdate`, `telefonas`, `email`, `uid`, `GPS_id`, `eventid`) VALUES
('Žilvinas', 'Dilys', '0000-00-00', 0, '', 51, '', 0),
('Ruslanas', 'Lisovskij', '0000-00-00', 869915795, 'admin@ldl.lt', 49, '', 0),
('gfsdgfsd', '', '0000-00-00', 869915795, 'gfds@dffs.ll', 54, '', 0),
('fdsfds', '', '0000-00-00', 869915795, 'fdsfdsafdsa@fdsfds.ll', 55, '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dalyviai`
--
ALTER TABLE `dalyviai`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dalyviai`
--
ALTER TABLE `dalyviai`
  MODIFY `uid` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
