-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2019 at 08:49 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `LIB_NAME` varchar(40) NOT NULL,
  `LIB_EMAIL` varchar(30) NOT NULL,
  `LReg_NO` varchar(8) NOT NULL,
  `LIB_PHONE` varchar(13) NOT NULL,
  `LIB_IMAGE` varchar(350) NOT NULL,
  `LIB_PASSWORD` varchar(20) NOT NULL,
  `CONFIRM` varchar(1) NOT NULL,
  `Request_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`LIB_NAME`, `LIB_EMAIL`, `LReg_NO`, `LIB_PHONE`, `LIB_IMAGE`, `LIB_PASSWORD`, `CONFIRM`, `Request_date`) VALUES
('GAURAV SOMANI', 'gourav@somani.com', 'UI17CO06', '9211420786', 'piclib/AngelFalls_1920x1200.jpg', '123456', 'Y', '2019-03-31'),
('TAPENDRA KUMAR', 'tapendrakmr786@gmail.com', 'UI17CO15', '8077200186', 'piclib/IMG_20180205_145450.jpg', '9058485729', 'Y', '2019-04-08'),
('ABHISHEK TYAGI', 'tyagi@abhishek.com', 'UI17CO17', '12544876', 'piclib/BlastFurnace_EN-US12741719913_1920x1200.jpg', '17458964', 'N', '2019-03-31');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `ID` varchar(10) NOT NULL,
  `NAME` varchar(30) NOT NULL,
  `AUTHOR` varchar(30) NOT NULL,
  `PUBLICATION` varchar(30) NOT NULL,
  `PURCHASE_DATE` date NOT NULL,
  `AMNT` int(11) NOT NULL,
  `IMAGE` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`ID`, `NAME`, `AUTHOR`, `PUBLICATION`, `PURCHASE_DATE`, `AMNT`, `IMAGE`) VALUES
('100', 'Operating System', 'WILLIAM Stalling', 'TATA', '2019-04-09', 52, 'piclib/BledSnow_EN-US8798115621_1920x1200.jpg'),
('101', 'OOT', 'NIDHI MAM', 'ABC', '2019-04-09', 48, 'piclib/CanadianSnails_EN-US13407952508_1920x1200.jpg'),
('102', 'DBMS', 'KOMAL MAM', 'ABC', '2019-04-14', 51, 'piclib/CourtshipDisplay_EN-US9705529569_1920x1200.jpg'),
('103', 'DAA', 'XYZ', 'VOP', '2019-04-16', 62, 'piclib/DeadMariachiBand_EN-US8717043507_1920x1200.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `issuebook`
--

CREATE TABLE `issuebook` (
  `USERID` varchar(8) NOT NULL,
  `BID` varchar(5) NOT NULL,
  `STATUS` varchar(3) NOT NULL,
  `ISSUED_DATE` date NOT NULL,
  `RETURN_DATE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issuebook`
--

INSERT INTO `issuebook` (`USERID`, `BID`, `STATUS`, `ISSUED_DATE`, `RETURN_DATE`) VALUES
('UI17CO17', '456', 'NO', '0000-00-00', '0000-00-00'),
('UI17CO17', '456', 'NO', '0000-00-00', '2019-04-16'),
('UI17CO17', '456', 'NO', '2019-04-01', '2016-04-19'),
('UI17CO17', '456', 'NO', '2019-04-01', '2019-04-16'),
('UI17CO17', '456', 'NO', '2019-04-01', '2019-04-16'),
('UI17CO05', '1245', 'NO', '2019-04-08', '2019-04-23'),
('UI17CO15', '101', 'YES', '2019-04-08', '2019-04-23'),
('UI17CO10', '101', 'YES', '2019-04-09', '2019-04-24'),
('UI17CO15', '102', 'NO', '2019-04-09', '2019-04-24'),
('UI17CO15', '103', 'YES', '2019-04-09', '2019-04-24'),
('UI17CO15', '100', 'NO', '2019-04-09', '2019-04-24'),
('UI17CO15', '102', 'NO', '2019-04-09', '2019-04-24'),
('UI17CO15', '102', 'NO', '2019-04-09', '2019-04-24');

-- --------------------------------------------------------

--
-- Table structure for table `librariansignin`
--

CREATE TABLE `librariansignin` (
  `NAME` varchar(40) NOT NULL,
  `EMAIL` varchar(70) NOT NULL,
  `Reg_NO` varchar(8) NOT NULL,
  `PHONE` varchar(13) NOT NULL,
  `IMAGE` varchar(350) NOT NULL,
  `PASSWORD` varchar(20) NOT NULL,
  `Aprve_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `librariansignin`
--

INSERT INTO `librariansignin` (`NAME`, `EMAIL`, `Reg_NO`, `PHONE`, `IMAGE`, `PASSWORD`, `Aprve_date`) VALUES
('GAURAV SOMANI', 'gourav@somani.com', 'UI17CO06', '9211420786', 'piclib/AngelFalls_1920x1200.jpg', '123456', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `sfsignin`
--

CREATE TABLE `sfsignin` (
  `NAME` varchar(30) NOT NULL,
  `EMAIL` varchar(70) NOT NULL,
  `REG_NO` varchar(8) NOT NULL,
  `PHONE` varchar(13) NOT NULL,
  `IMAGE` varchar(350) NOT NULL,
  `PASSWORD` varchar(20) NOT NULL,
  `TYPE` varchar(1) NOT NULL,
  `APROV_DATE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sfsignin`
--

INSERT INTO `sfsignin` (`NAME`, `EMAIL`, `REG_NO`, `PHONE`, `IMAGE`, `PASSWORD`, `TYPE`, `APROV_DATE`) VALUES
('ABHISHEK', 'abhishek@tyagi.com', 'UI17CO17', '9541278632', 'piclib/CanadianSnails_EN-US13407952508_1920x1200.jpg', 'PASSWORD', 'F', '0000-00-00'),
('GAURAV', 'gaurav@somain.com', 'ghj', '77654123', 'piclib/BledSnow_EN-US8798115621_1920x1200.jpg', '456', 'F', '0000-00-00'),
('HIMANSHU', 'himanshu@singh.com', 'UI17CO03', '9541278632', 'piclib/BlastFurnace_EN-US12741719913_1920x1200.jpg', 'PASSWORD', 'F', '0000-00-00'),
('RAHUL SHANKER', 'rahul@shanker.com', 'UI17CO10', '8769898284', 'piclib/IMG_20171203_170557.jpg', '123456', 'S', '0000-00-00'),
('RAMESH', 'ramesh@gmail.com', 'UI17CO09', '9210457862', 'piclib/Animal-tiger-bing-background.jpg', '12345', 'F', '0000-00-00'),
('TAPENDRA', 'tapendrakmr66@gmail.com', 'UI17CO15', '9214538752', 'piclib/BlydeRiverCanyon_1920x1200.jpg', '123456', 'S', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `stduentinfo`
--

CREATE TABLE `stduentinfo` (
  `NAME` varchar(30) NOT NULL,
  `EMAIL` varchar(40) NOT NULL,
  `Reg_NO` varchar(8) NOT NULL,
  `PHONE` varchar(13) NOT NULL,
  `IMAGE` varchar(350) NOT NULL,
  `PASSWORD` varchar(20) NOT NULL,
  `Type` varchar(1) NOT NULL,
  `Confirm` varchar(1) NOT NULL DEFAULT 'N',
  `Request_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stduentinfo`
--

INSERT INTO `stduentinfo` (`NAME`, `EMAIL`, `Reg_NO`, `PHONE`, `IMAGE`, `PASSWORD`, `Type`, `Confirm`, `Request_date`) VALUES
('GAURAV', 'gaurav@somain.com', 'ghj', '77654123', 'piclib/BledSnow_EN-US8798115621_1920x1200.jpg', '456', 'F', 'Y', '0000-00-00'),
('RAM', 'ra@f.com', 'sajkfd', '929181564', 'piclib/EurasianRed_1920x1200.jpg', '636454', 'S', 'N', '2019-03-30'),
('RAHUL SHANKER', 'rahul@shanker.com', 'UI17CO10', '8769898284', 'piclib/IMG_20171203_170557.jpg', '123456', 'S', 'Y', '2019-04-09'),
('TAPENDRA', 'tapendrakmr66@gmail.com', 'UI17CO05', '9214538752', 'piclib/BlydeRiverCanyon_1920x1200.jpg', '123456', 'S', 'Y', '2019-03-31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`LIB_EMAIL`,`LIB_PHONE`),
  ADD UNIQUE KEY `LReg_NO` (`LReg_NO`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `librariansignin`
--
ALTER TABLE `librariansignin`
  ADD PRIMARY KEY (`EMAIL`,`PHONE`),
  ADD UNIQUE KEY `Reg_NO` (`Reg_NO`);

--
-- Indexes for table `sfsignin`
--
ALTER TABLE `sfsignin`
  ADD PRIMARY KEY (`EMAIL`,`PHONE`),
  ADD UNIQUE KEY `REG_NO` (`REG_NO`);

--
-- Indexes for table `stduentinfo`
--
ALTER TABLE `stduentinfo`
  ADD PRIMARY KEY (`EMAIL`,`PHONE`),
  ADD UNIQUE KEY `Reg_NO` (`Reg_NO`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
