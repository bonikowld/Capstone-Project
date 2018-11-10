-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2018 at 11:59 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood`
--

CREATE TABLE `blood` (
  `idblood` int(11) NOT NULL,
  `serialnumber` varchar(45) NOT NULL,
  `donor` varchar(45) NOT NULL,
  `bloodtype` varchar(45) NOT NULL,
  `component` varchar(45) NOT NULL,
  `quantity` varchar(45) NOT NULL,
  `extractiondate` varchar(45) NOT NULL,
  `expirationdate` varchar(45) NOT NULL,
  `city` varchar(45) NOT NULL,
  `remarks` varchar(45) DEFAULT NULL,
  `checkoutmonth` varchar(45) DEFAULT NULL,
  `checkoutyear` varchar(45) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood`
--

INSERT INTO `blood` (`idblood`, `serialnumber`, `donor`, `bloodtype`, `component`, `quantity`, `extractiondate`, `expirationdate`, `city`, `remarks`, `checkoutmonth`, `checkoutyear`, `status`) VALUES
(21, '7200-890345-1', 'Lebron James', 'A+', 'Whole Blood', '1', '2018-02-05', '2018-03-25', 'Tangub City', 'Successfull', '', '', 0),
(23, '7200-789654-1', 'Jubilee Serna', 'B+', 'Whole Blood', '1', '2018-03-06', '2018-04-27', 'Oroquieta City', 'Successfull', '', '', 0),
(24, '7201-854390-1', 'Jay Harold Reazol', 'O-', 'Whole Blood', '1', '2018-03-12', '2018-04-27', 'Oroquieta City', 'Successfull', '', '', 0),
(31, '7200-567432-1', 'Daisy summer', 'O', 'Whole Blood', '1', '2018-04-24', '2018-05-24', 'Oroquieta City', 'Successfull', '', '', 0),
(40, '7200-980986-1', 'Dianne Estrada', 'AB+', 'Whole Blood', '1', '2018-05-10', '2018-06-20', 'Tangub City', 'Successfull', '', '', 0),
(42, '7207-000000-1', 'Aljanly Tayone', 'AB+', 'Whole Blood', '1', '2018-05-10', '2018-06-20', 'Oroquieta City', 'Successfull', '', '', 0),
(73, '7200-678555-1', 'Dove', 'O', 'Whole Blood', '1', '2018-09-24', '2018-10-21', 'Ozamiz City', 'Successfull', NULL, NULL, 1),
(74, '7200-456654-1', 'Datu Puti', 'O', 'Whole Blood', '1', '2018-09-24', '2018-10-28', 'Ozamiz City', 'Successfull', NULL, NULL, 1),
(75, '7200-000000-1', 'Bobot Vidanes', 'O', 'Whole Blood', '1', '2018-09-27', '2018-10-27', 'Ozamiz City', 'Unsuccessfull', NULL, NULL, 1),
(76, '7200-999999-1', 'Dodong Gadon', 'O', 'Whole Blood', '1', '2018-09-27', '2018-10-28', 'Ozamiz City', 'Unsuccessfull', NULL, NULL, 0),
(77, '7200-888888-1', 'Harlem Shake', 'O', 'Whole Blood', '1', '2018-09-27', '2018-10-28', 'Ozamiz City', 'Unsuccessfull', NULL, NULL, 0),
(78, '7200-454545-1', 'Aljan', 'O', 'Whole Blood', '1', '2018-09-28', '2018-10-31', 'Ozamiz City', 'Unsuccessfull', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `branchid` int(11) NOT NULL,
  `branchname` varchar(45) NOT NULL,
  `branchaddress` varchar(45) NOT NULL,
  `adminname` varchar(45) NOT NULL,
  `adminaddress` varchar(45) NOT NULL,
  `contactnumber` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`branchid`, `branchname`, `branchaddress`, `adminname`, `adminaddress`, `contactnumber`, `email`, `username`, `password`) VALUES
(1, 'PRC Pagadian', 'Pagadian City', 'Jasmine Romero', 'Pagadian City', '0909089782', 'jasmine@gmail.com', 'jasmine', 'test'),
(2, 'PRC Ozamiz', 'Ozamiz City', 'Ted Failon', 'Ozamiz City', '09098887668', 'tedfailon@gmail.com', 'AdminOzamiz', 'test'),
(3, 'PRC Tangub', 'Tangub City', 'Korina Sanchez', 'Tangub City', '09094568890', 'korina@gmail.com', 'AdminTangub', 'test'),
(4, 'PRC Oroquieta', 'Oroquieta City', 'Julios Babao', 'Oroquieta City', '09094387890', 'julios@gmail.com', 'AdminOroquieta', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `donate_blood`
--

CREATE TABLE `donate_blood` (
  `iddonate_blood` int(11) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `firstname` varchar(45) NOT NULL,
  `middlename` varchar(45) NOT NULL,
  `age` varchar(45) NOT NULL,
  `birthdate` varchar(45) NOT NULL,
  `sex` varchar(45) NOT NULL,
  `nationality` varchar(45) NOT NULL,
  `civilstatus` varchar(45) NOT NULL,
  `education` varchar(45) NOT NULL,
  `occupation` varchar(45) NOT NULL,
  `cellphonenum` varchar(45) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `identificationno` varchar(45) NOT NULL,
  `bloodbank` varchar(45) NOT NULL,
  `homeaddress` varchar(45) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donate_blood`
--

INSERT INTO `donate_blood` (`iddonate_blood`, `lastname`, `firstname`, `middlename`, `age`, `birthdate`, `sex`, `nationality`, `civilstatus`, `education`, `occupation`, `cellphonenum`, `email`, `identificationno`, `bloodbank`, `homeaddress`) VALUES
(19, 'Ponce', 'Jerome', 'Tan', '24', '12-09-1998', 'Male', 'Filipino', 'Single', 'No formal education', 'Fisherman', '090978675', 'ponce@gmail.com', 'Ozamiz City', '1145679087574', 'Tudela'),
(20, 'Santos', 'Selva', 'Ino', '24', '12-08-1998', 'Male', 'Filipino', 'Single', 'No formal education', 'Dishwasher', '0989078766', 'santos@gmail.com', 'Ozamiz City', '18909789687587', 'Clarin'),
(17, 'Sarosa', 'Hernan', 'Miguel', '45', '24-05-1998', 'Male', 'Filipino', 'Single', 'No formal education', 'Carpenter', '090978686', 'hernan@gmail.com', 'Ozamiz City', '11444655', 'Sinacaban');

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `donorid` int(11) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `firstname` varchar(45) NOT NULL,
  `middlename` varchar(45) NOT NULL,
  `dateofbirth` varchar(45) NOT NULL,
  `contactnum` varchar(45) NOT NULL,
  `homeaddress` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `pass` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `lastdonation` varchar(45) DEFAULT NULL,
  `remarks` varchar(45) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`donorid`, `lastname`, `firstname`, `middlename`, `dateofbirth`, `contactnum`, `homeaddress`, `username`, `pass`, `email`, `lastdonation`, `remarks`) VALUES
(2, 'Rosario', 'Angelita', 'Cabanglit', '9-24-1997', '09097675643', 'Aloran', 'Donor', '12345', 'test@gmail.com', NULL, NULL),
(5, 'Gamboa', 'Juros', 'Gago', '12-12-1983', '09094358434', 'Mobod Oroquieta City', 'juros', 'test', 'jurosgamboa@gmail.com', NULL, NULL),
(9, 'Padilla', 'Bonnie Jefferson', 'Manliquez', '12-1-1997', '09093435202', 'Mobod Oroquieta City', 'Bonikowld', 'test', 'bonniepadilla40@yahoo.com', NULL, NULL),
(8, 'Dela Cruz', 'Juan', 'Tamad', '1-1-1967', '09098887764', 'Carangan Ozamiz City', 'Juan', 'test', 'juantamad@gmail.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `idreport` int(11) NOT NULL,
  `serialnumber` varchar(45) NOT NULL,
  `donor` varchar(45) NOT NULL,
  `bloodtype` varchar(45) NOT NULL,
  `component` varchar(45) NOT NULL,
  `quantity` varchar(45) NOT NULL,
  `extractiondate` varchar(45) NOT NULL,
  `expirationdate` varchar(45) NOT NULL,
  `bloodbank` varchar(45) NOT NULL,
  `borrowersname` varchar(45) NOT NULL,
  `borrowersaddress` varchar(45) NOT NULL,
  `borrowerscontactnum` varchar(45) NOT NULL,
  `ornum` varchar(45) NOT NULL,
  `checkoutmonth` varchar(45) DEFAULT NULL,
  `checkoutyear` varchar(45) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`idreport`, `serialnumber`, `donor`, `bloodtype`, `component`, `quantity`, `extractiondate`, `expirationdate`, `bloodbank`, `borrowersname`, `borrowersaddress`, `borrowerscontactnum`, `ornum`, `checkoutmonth`, `checkoutyear`) VALUES
(44, ' 7200-000000-1 ', ' Bobot Vidanes ', ' O ', ' Whole Blood ', ' 1 ', ' 2018-09-27 ', ' 2018-10-27 ', 'Ozamiz City', 'Aljan', 'Ozamiz', '0909546450', '54560463', 'September', '2018');

-- --------------------------------------------------------

--
-- Table structure for table `request_blood`
--

CREATE TABLE `request_blood` (
  `idrequestBlood` int(11) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `firstname` varchar(45) NOT NULL,
  `middlename` varchar(45) NOT NULL,
  `age` int(11) NOT NULL,
  `birthdate` varchar(45) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `hospital` varchar(45) NOT NULL,
  `roomnum` varchar(45) NOT NULL,
  `physician` varchar(45) NOT NULL,
  `cellphonenum` varchar(45) NOT NULL,
  `diagnosis` varchar(100) NOT NULL,
  `dateofrequest` varchar(45) NOT NULL,
  `bloodtype` varchar(45) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_blood`
--

INSERT INTO `request_blood` (`idrequestBlood`, `lastname`, `firstname`, `middlename`, `age`, `birthdate`, `sex`, `hospital`, `roomnum`, `physician`, `cellphonenum`, `diagnosis`, `dateofrequest`, `bloodtype`) VALUES
(50, 'Padilla', 'Bonnie', 'Manliquez', 16, '12-08-1998', 'Male', 'Faith Hospital', 'LS212', 'Dr. Wong', '9093778040', 'Dengue', '27-09-2018', 'O'),
(49, 'Racal', 'Maris', 'Boss', 38, '12-08-1998', 'Male', 'Medina Hospital', 'LS214', 'Dr. Wong', '09090978987', 'Dengue', '27-09-2018', 'O'),
(48, 'dsad', 'das', 'dsad', 45, '34-43-4343', 'Male', 'ds', 'rwe4', 'asdas', '35345', 'dasd', '67-76-76', 'O');

-- --------------------------------------------------------

--
-- Table structure for table `reserve_blood`
--

CREATE TABLE `reserve_blood` (
  `idblood` int(11) NOT NULL,
  `serialnumber` varchar(45) NOT NULL,
  `bloodtype` varchar(45) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `firstname` varchar(45) NOT NULL,
  `middlename` varchar(45) NOT NULL,
  `homeaddress` varchar(45) NOT NULL,
  `contactnum` int(20) NOT NULL,
  `purpose` varchar(100) NOT NULL,
  `city` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blood`
--
ALTER TABLE `blood`
  ADD PRIMARY KEY (`idblood`,`serialnumber`),
  ADD UNIQUE KEY `serialnumber_UNIQUE` (`serialnumber`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`branchid`),
  ADD UNIQUE KEY `adminId_UNIQUE` (`branchid`);

--
-- Indexes for table `donate_blood`
--
ALTER TABLE `donate_blood`
  ADD PRIMARY KEY (`iddonate_blood`);

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`donorid`),
  ADD UNIQUE KEY `userid_UNIQUE` (`donorid`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`idreport`,`serialnumber`);

--
-- Indexes for table `request_blood`
--
ALTER TABLE `request_blood`
  ADD PRIMARY KEY (`idrequestBlood`);

--
-- Indexes for table `reserve_blood`
--
ALTER TABLE `reserve_blood`
  ADD PRIMARY KEY (`idblood`,`serialnumber`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blood`
--
ALTER TABLE `blood`
  MODIFY `idblood` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `branchid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `donate_blood`
--
ALTER TABLE `donate_blood`
  MODIFY `iddonate_blood` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `donors`
--
ALTER TABLE `donors`
  MODIFY `donorid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `idreport` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `request_blood`
--
ALTER TABLE `request_blood`
  MODIFY `idrequestBlood` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `reserve_blood`
--
ALTER TABLE `reserve_blood`
  MODIFY `idblood` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
