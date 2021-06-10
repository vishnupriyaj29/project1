-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2020 at 10:48 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `record`
--

-- --------------------------------------------------------

--
-- Table structure for table `ktr`
--

CREATE TABLE `ktr` (
  `school_name` varchar(50) NOT NULL,
  `ug1` int(11) NOT NULL,
  `approv_ug1` int(11) NOT NULL,
  `ug2` int(11) NOT NULL,
  `approv_ug2` int(11) NOT NULL,
  `ug3` int(11) NOT NULL,
  `approv_ug3` int(11) NOT NULL,
  `ug4` int(11) NOT NULL,
  `approv_ug4` int(11) NOT NULL,
  `ugtotal` int(11) NOT NULL,
  `approv_ugtotal` int(11) NOT NULL,
  `pg1` int(11) NOT NULL,
  `approv_pg1` int(11) NOT NULL,
  `pg2` int(11) NOT NULL,
  `approv_pg2` int(11) NOT NULL,
  `pgtotal` int(11) NOT NULL,
  `approv_pgtotal` int(11) NOT NULL,
  `factotal` int(11) NOT NULL,
  `professor` int(11) NOT NULL,
  `assoc_prof` int(11) NOT NULL,
  `with_phd` int(11) NOT NULL,
  `without_phd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ktr`
--

INSERT INTO `ktr` (`school_name`, `ug1`, `approv_ug1`, `ug2`, `approv_ug2`, `ug3`, `approv_ug3`, `ug4`, `approv_ug4`, `ugtotal`, `approv_ugtotal`, `pg1`, `approv_pg1`, `pg2`, `approv_pg2`, `pgtotal`, `approv_pgtotal`, `factotal`, `professor`, `assoc_prof`, `with_phd`, `without_phd`) VALUES
('School of Basic Sciences', 8, 0, 8, 0, 8, 0, 8, 0, 32, 0, 8, 0, 8, 0, 16, 0, 24, 8, 8, 8, 0),
('School of Bio - Engineering', 1, 0, 1, 0, 1, 0, 1, 0, 4, 0, 1, 0, 1, 0, 2, 0, 6, 4, 1, 1, 0),
('School of Chemical and Material Technology', 5, 0, 6, 0, 6, 0, 6, 0, 23, 0, 6, 0, 66, 0, 72, 0, 18, 6, 6, 6, 0),
('School of Civil Engineering', 3, 0, 3, 0, 3, 0, 3, 0, 12, 0, 3, 0, 3, 0, 6, 0, 9, 3, 3, 3, 0),
('School of Computing', 8, 0, 8, 0, 8, 0, 8, 0, 32, 0, 8, 0, 8, 0, 16, 0, 24, 8, 8, 8, 0),
('School of Electrical and Electronics Engineering', 959, 0, 45, 0, 9, 0, 9, 0, 1022, 0, 9, 0, 9, 0, 18, 0, 27, 9, 9, 9, 0),
('School of Languages', 2, 0, 2, 0, 2, 0, 2, 0, 8, 0, 2, 0, 2, 0, 4, 0, 6, 2, 2, 2, 0),
('School of Mechanical Engineering', 7, 0, 7, 0, 7, 0, 7, 0, 28, 0, 7, 0, 7, 0, 14, 0, 91, 7, 7, 77, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ncr`
--

CREATE TABLE `ncr` (
  `school_name` varchar(50) NOT NULL,
  `ug1` int(11) NOT NULL,
  `approv_ug1` int(11) NOT NULL,
  `ug2` int(11) NOT NULL,
  `approv_ug2` int(11) NOT NULL,
  `ug3` int(11) NOT NULL,
  `approv_ug3` int(11) NOT NULL,
  `ug4` int(11) NOT NULL,
  `approv_ug4` int(11) NOT NULL,
  `ugtotal` int(11) NOT NULL,
  `approv_ugtotal` int(11) NOT NULL,
  `pg1` int(11) NOT NULL,
  `approv_pg1` int(11) NOT NULL,
  `pg2` int(11) NOT NULL,
  `approv_pg2` int(11) NOT NULL,
  `pgtotal` int(11) NOT NULL,
  `approv_pgtotal` int(11) NOT NULL,
  `factotal` int(11) NOT NULL,
  `professor` int(11) NOT NULL,
  `assoc_prof` int(11) NOT NULL,
  `with_phd` int(11) NOT NULL,
  `without_phd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ncr`
--

INSERT INTO `ncr` (`school_name`, `ug1`, `approv_ug1`, `ug2`, `approv_ug2`, `ug3`, `approv_ug3`, `ug4`, `approv_ug4`, `ugtotal`, `approv_ugtotal`, `pg1`, `approv_pg1`, `pg2`, `approv_pg2`, `pgtotal`, `approv_pgtotal`, `factotal`, `professor`, `assoc_prof`, `with_phd`, `without_phd`) VALUES
('School of Basic Sciences', 8, 0, 8, 0, 8, 0, 8, 0, 0, 0, 8, 0, 8, 0, 0, 0, 0, 8, 8, 8, 0),
('School of Bio - Engineering', 1, 0, 1, 0, 1, 0, 1, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, 1, 1, 1, 0),
('School of Chemical and Material Technology', 5, 0, 6, 0, 6, 0, 6, 0, 0, 0, 6, 0, 66, 0, 0, 0, 0, 6, 6, 6, 0),
('School of Civil Engineering', 3, 0, 3, 0, 3, 0, 3, 0, 0, 0, 3, 0, 3, 0, 0, 0, 0, 3, 3, 3, 0),
('School of Computing', 8, 0, 8, 0, 8, 0, 8, 0, 32, 0, 8, 0, 8, 0, 16, 0, 16, 8, 8, 8, 0),
('School of Electrical and Electronics Engineering', 9, 0, 9, 0, 9, 0, 9, 0, 0, 0, 9, 0, 9, 0, 0, 0, 0, 9, 9, 9, 0),
('School of Languages', 2, 0, 2, 0, 2, 0, 2, 0, 0, 0, 2, 0, 2, 0, 0, 0, 0, 2, 2, 2, 0),
('School of Mechanical Engineering', 7, 0, 7, 0, 7, 0, 7, 0, 28, 0, 7, 0, 7, 0, 14, 0, 14, 7, 7, 77, 0);

-- --------------------------------------------------------

--
-- Table structure for table `rmp`
--

CREATE TABLE `rmp` (
  `school_name` varchar(50) NOT NULL,
  `ug1` int(11) NOT NULL,
  `approv_ug1` int(11) NOT NULL,
  `ug2` int(11) NOT NULL,
  `approv_ug2` int(11) NOT NULL,
  `ug3` int(11) NOT NULL,
  `approv_ug3` int(11) NOT NULL,
  `ug4` int(11) NOT NULL,
  `approv_ug4` int(11) NOT NULL,
  `ugtotal` int(11) NOT NULL,
  `approv_ugtotal` int(11) NOT NULL,
  `pg1` int(11) NOT NULL,
  `approv_pg1` int(11) NOT NULL,
  `pg2` int(11) NOT NULL,
  `approv_pg2` int(11) NOT NULL,
  `pgtotal` int(11) NOT NULL,
  `approv_pgtotal` int(11) NOT NULL,
  `factotal` int(11) NOT NULL,
  `professor` int(11) NOT NULL,
  `assoc_prof` int(11) NOT NULL,
  `with_phd` int(11) NOT NULL,
  `without_phd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rmp`
--

INSERT INTO `rmp` (`school_name`, `ug1`, `approv_ug1`, `ug2`, `approv_ug2`, `ug3`, `approv_ug3`, `ug4`, `approv_ug4`, `ugtotal`, `approv_ugtotal`, `pg1`, `approv_pg1`, `pg2`, `approv_pg2`, `pgtotal`, `approv_pgtotal`, `factotal`, `professor`, `assoc_prof`, `with_phd`, `without_phd`) VALUES
('School of Basic Sciences', 8, 0, 8, 0, 8, 0, 8, 0, 0, 0, 8, 0, 8, 0, 0, 0, 0, 8, 8, 8, 0),
('School of Bio - Engineering', 1, 0, 1, 0, 1, 0, 1, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, 1, 1, 1, 0),
('School of Chemical and Material Technology', 5, 0, 6, 0, 6, 0, 6, 0, 0, 0, 6, 0, 66, 0, 0, 0, 0, 6, 6, 6, 0),
('School of Civil Engineering', 3, 0, 3, 0, 3, 0, 3, 0, 0, 0, 3, 0, 3, 0, 0, 0, 0, 3, 3, 3, 0),
('School of Computing', 8, 0, 8, 0, 8, 0, 8, 0, 32, 0, 8, 0, 8, 0, 16, 0, 16, 8, 8, 8, 0),
('School of Electrical and Electronics Engineering', 9, 0, 9, 0, 9, 0, 9, 0, 0, 0, 9, 0, 9, 0, 0, 0, 0, 9, 9, 9, 0),
('School of Languages', 2, 0, 2, 0, 2, 0, 2, 0, 0, 0, 2, 0, 2, 0, 0, 0, 0, 2, 2, 2, 0),
('School of Mechanical Engineering', 7, 0, 7, 0, 7, 0, 7, 0, 28, 0, 7, 0, 7, 0, 14, 0, 14, 7, 7, 77, 0);

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `frstname` text NOT NULL,
  `lastname` text NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `campus` varchar(10) NOT NULL,
  `school_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`frstname`, `lastname`, `username`, `password`, `email`, `contact`, `campus`, `school_name`) VALUES
('Baibhav', 'Singh', 'admin', 'admin', 'pd5289@srmist.edu.in', '8789284763', 'ktr', 'admin'),
('Baibhav', 'Singh', 'user', 'user', 'pd5289@srmist.edu.in', '8789284763', 'vdp', 'School Of Computing');

-- --------------------------------------------------------

--
-- Table structure for table `vdp`
--

CREATE TABLE `vdp` (
  `school_name` varchar(50) NOT NULL,
  `ug1` int(11) NOT NULL,
  `approv_ug1` int(11) NOT NULL,
  `ug2` int(11) NOT NULL,
  `approv_ug2` int(11) NOT NULL,
  `ug3` int(11) NOT NULL,
  `approv_ug3` int(11) NOT NULL,
  `ug4` int(11) NOT NULL,
  `approv_ug4` int(11) NOT NULL,
  `ugtotal` int(11) NOT NULL,
  `approv_ugtotal` int(11) NOT NULL,
  `pg1` int(11) NOT NULL,
  `approv_pg1` int(11) NOT NULL,
  `pg2` int(11) NOT NULL,
  `approv_pg2` int(11) NOT NULL,
  `pgtotal` int(11) NOT NULL,
  `approv_pgtotal` int(11) NOT NULL,
  `factotal` int(11) NOT NULL,
  `professor` int(11) NOT NULL,
  `assoc_prof` int(11) NOT NULL,
  `with_phd` int(11) NOT NULL,
  `without_phd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vdp`
--

INSERT INTO `vdp` (`school_name`, `ug1`, `approv_ug1`, `ug2`, `approv_ug2`, `ug3`, `approv_ug3`, `ug4`, `approv_ug4`, `ugtotal`, `approv_ugtotal`, `pg1`, `approv_pg1`, `pg2`, `approv_pg2`, `pgtotal`, `approv_pgtotal`, `factotal`, `professor`, `assoc_prof`, `with_phd`, `without_phd`) VALUES
('School of Basic Sciences', 8, 0, 8, 0, 8, 0, 8, 0, 0, 0, 8, 0, 8, 0, 0, 0, 0, 8, 8, 8, 0),
('School of Bio - Engineering', 1, 0, 1, 0, 1, 0, 1, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, 1, 1, 1, 0),
('School of Chemical and Material Technology', 5, 0, 6, 0, 6, 0, 6, 0, 0, 0, 6, 0, 66, 0, 0, 0, 0, 6, 6, 6, 0),
('School of Civil Engineering', 3, 0, 3, 0, 3, 0, 3, 0, 0, 0, 3, 0, 3, 0, 0, 0, 0, 3, 3, 3, 0),
('School of Computing', 8, 0, 18, 0, 8, 0, 8, 0, 42, 0, 8, 0, 8, 0, 16, 0, 24, 8, 8, 8, 0),
('School of Electrical and Electronics Engineering', 9, 0, 9, 0, 9, 0, 9, 0, 0, 0, 9, 0, 9, 0, 0, 0, 0, 9, 9, 9, 0),
('School of Languages', 2, 0, 2, 0, 2, 0, 2, 0, 0, 0, 2, 0, 2, 0, 0, 0, 0, 2, 2, 2, 0),
('School of Mechanical Engineering', 7, 0, 7, 0, 7, 0, 7, 0, 28, 0, 7, 0, 7, 0, 14, 0, 14, 7, 7, 77, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ktr`
--
ALTER TABLE `ktr`
  ADD PRIMARY KEY (`school_name`);

--
-- Indexes for table `ncr`
--
ALTER TABLE `ncr`
  ADD PRIMARY KEY (`school_name`);

--
-- Indexes for table `rmp`
--
ALTER TABLE `rmp`
  ADD PRIMARY KEY (`school_name`);

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `vdp`
--
ALTER TABLE `vdp`
  ADD PRIMARY KEY (`school_name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
