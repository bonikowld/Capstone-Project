-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2018 at 01:29 PM
-- Server version: 10.1.30-MariaDB
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
  `quantity` varchar(45) NOT NULL DEFAULT '0',
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
(40, '7200-980986-1', 'Dianne Estrada', 'AB+', 'Whole Blood', '1', '2018-05-10', '2018-06-20', 'Tangub City', 'Successfull', '', '', 0),
(42, '7207-000000-1', 'Aljanly Tayone', 'AB+', 'Whole Blood', '1', '2018-05-10', '2018-06-20', 'Oroquieta City', 'Successfull', '', '', 0),
(73, '7200-678555-1', 'Dove', 'O', 'Whole Blood', '1', '2018-09-24', '2018-10-21', 'Ozamiz City', 'Successfull', NULL, NULL, 1),
(74, '7200-456654-1', 'Datu Puti', 'O', 'Whole Blood', '1', '2018-09-24', '2018-10-28', 'Ozamiz City', 'Successfull', NULL, NULL, 1),
(75, '7200-000000-1', 'Bobot Vidanes', 'O', 'Whole Blood', '1', '2018-09-27', '2018-10-27', 'Ozamiz City', 'Unsuccessfull', NULL, NULL, 1),
(76, '7200-999999-1', 'Dodong Gadon', 'O', 'Whole Blood', '1', '2018-09-27', '2018-10-28', 'Ozamiz City', 'Unsuccessfull', NULL, NULL, 0),
(77, '7200-888888-1', 'Harlem Shake', 'O', 'Whole Blood', '1', '2018-09-27', '2018-10-28', 'Ozamiz City', 'Unsuccessfull', NULL, NULL, 0),
(78, '7200-454545-1', 'Aljan', 'O', 'Whole Blood', '1', '2018-09-28', '2018-10-31', 'Ozamiz City', 'Unsuccessfull', NULL, NULL, 0),
(82, '7200-222222-1', 'Eva Mapendo', 'O-', 'Whole Blood', '1', '2018-11-20', '2018-12-23', 'Ozamiz City', 'Successfull', NULL, NULL, NULL),
(84, '7200-555555-1', 'Manny Pacquiao', 'O-', 'Whole Blood', '1', '2018-11-22', '2018-12-23', 'Ozamiz City', 'Successfull', NULL, NULL, NULL),
(87, '7200-343454-2', 'Jane L. Loslos', 'O+', 'Whole Blood', '1', '2018-12-04', '2019-01-18', 'Ozamiz City', 'Successfull', NULL, NULL, NULL),
(88, '7200-023535-2', 'Kaye Ouano', 'AB+', 'Whole Blood', '1', '2018-12-07', '2019-01-18', 'Ozamiz City', 'Successfull', NULL, NULL, NULL),
(89, '7200-544733-3', 'Janril S. Tayone', 'O+', 'Whole Blood', '1', '2018-12-06', '2019-01-11', 'Ozamiz City', 'Successfull', NULL, NULL, NULL),
(98, '7200-123456-2', 'Rosario', 'AB-', 'Whole Blood', '1', '2018-12-06', '2019-01-24', 'Ozamiz City', 'Successfull', NULL, NULL, NULL),
(99, '7200-333222-2', ' Hannah Acapulco', 'O+', 'Whole Blood', '1', '2018-12-07', '2019-01-23', 'Ozamiz City', 'Successfull', NULL, NULL, NULL),
(100, '7203-009358-2', 'John Mark Lampinig', 'AB-', 'Whole Blood', '1', '2018-12-06', '2019-01-18', 'Oroquieta City', 'Successfull', NULL, NULL, NULL);

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
(4, 'PRC Oroquieta', 'Oroquieta City', 'Julios Babao', 'Oroquieta City', '09094387890', 'julios@gmail.com', 'AdminOroquieta', 'test'),
(6, 'Tawi Tawi', 'Tawi Tawi City', 'shalana', 'Tawi Tawi, Lamak ', '092334656565', 'shalana@gmail.com', 'AdminTawiTawi', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `donate_blood`
--

CREATE TABLE `donate_blood` (
  `iddonate_blood` int(11) NOT NULL,
  `fullname` varchar(45) NOT NULL,
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

INSERT INTO `donate_blood` (`iddonate_blood`, `fullname`, `age`, `birthdate`, `sex`, `nationality`, `civilstatus`, `education`, `occupation`, `cellphonenum`, `email`, `identificationno`, `bloodbank`, `homeaddress`) VALUES
(19, 'Jerome', '24', '12-09-1998', 'Male', 'Filipino', 'Single', 'No formal education', 'Fisherman', '090978675', 'ponce@gmail.com', '1145679087574', 'Ozamiz City', 'Tudela'),
(20, 'Selva', '24', '12-08-1998', 'Male', 'Filipino', 'Single', 'No formal education', 'Dishwasher', '0989078766', 'santos@gmail.com', '18909789687587', 'Ozamiz City', 'Clarin'),
(17, 'Hernan', '45', '24-05-1998', 'Male', 'Filipino', 'Single', 'No formal education', 'Carpenter', '090978686', 'hernan@gmail.com', '11444655', 'Ozamiz City', 'Sinacaban'),
(21, 'Kim Atienza', '45', '24-10-1978', 'Male', 'Filipino', 'Single', 'No formal education', 'Fisherman', '09096765756', 'kim@gmail.com', '789789796', 'Ozamiz City', 'Ozamiz City'),
(22, 'Jane A. Veloso', '23', '21-04-1995', 'Female', 'Filipino', 'Single', 'Secondary education', 'Utility I', '09126947548', 'janevelos@gmail.com', '1135678', 'Ozamiz City', 'Purok 5, Barangay Gango, Ozamiz City'),
(25, 'la salle', '20', '12-12-1998', 'Male', 'Filipino', 'Single', 'Vocational qualification', 'Teacher', '0989786765', 'lasalle@gmail.com', '2343424', 'Ozamiz City', 'Ozamiz City'),
(26, 'Aljan Labrusca', '20', '24-01-1998', 'Male', 'Filipino', 'Single', 'Secondary education', 'Utility', '0976543678896', 'aljan@gmail.com', '11456534', 'Ozamiz City', 'Lapasan Clarin'),
(27, 'Jane Pascal', '20', '24-01-1998', 'Female', 'Filipino', 'Single', 'Bachelors degree', 'Utility Worker', '0976543678896', 'jane@gmail.com', '11456534', 'Ozamiz City', 'Lapasan Clarin'),
(28, 'John Mark Lampinig', '20', '24-03-1998', 'Male', 'Filipino', 'Single', 'Bachelors degree', 'Teacher', '0976543678896', 'aljan@gmail.com', '114678', 'Oroquieta City', 'Gango'),
(29, 'Josefina Acalcal', '21', '26-03-1997', 'Female', 'Filipino', 'Single', 'Masters degree', 'Administrative Officer', '0976543678896', 'josefina@gmail.com', '11456534', 'Ozamiz City', 'Malaubang, Ozamiz City'),
(30, 'John Mark Lampinig', '21', '24-01-1997', 'Female', 'Filipino', 'Single', 'Masters degree', 'Teacher', '0976543678896', 'aljan@gmail.com', '11456534', 'Ozamiz City', 'Gango'),
(31, 'Jane Pascal', '20', '24-01-1998', 'Female', 'Filipino', 'Single', 'Bachelors degree', 'Teacher', '0976543678896', 'jane@gmail.com', '11456534', 'Tawi Tawi City', 'Tawi Tawi'),
(32, 'Joebert Saavedra', '21', '24-03-1997', 'Male', 'Filipino', 'Single', 'Masters degree', 'Master Teacher II', '09246739279', 'joe@gmail.com', '11435567', 'Ozamiz City', 'Pulot, Ozamiz City'),
(33, 'Janril S. Tayone', '20', '20-07-1998', 'Male', 'Filipino', 'Single', 'Bachelors degree', 'Accounting Clerk', '09457893547', 'janril@gmail.com', '556565656', 'Ozamiz City', 'Lawis, Ozamiz City'),
(34, 'Joebert Saavedra', '21', '24-03-1997', 'Male', 'Filipino', 'Single', 'Masters degree', 'Master Teacher II', '09246739279', 'joe@gmail.com', '11435567', 'Tawi Tawi City', 'Pulot, Ozamiz City'),
(35, 'Janril S. Tayone', '20', '12-02-1998', 'Male', 'Filipino', 'Single', 'Masters degree', 'Master Teacher II', '09246739279', 'janril@gmail.com', '233445454', 'Tawi Tawi City', 'Lapak, Tawi Tawi City'),
(36, 'Joebert Saavedra', '20', '24-03-1997', 'Male', 'Filipino', 'Single', 'Masters degree', 'Accounting Clerk', '09246739279', 'janril@gmail.com', '11435567', 'Pagadian City', 'Pulot, Ozamiz City'),
(39, ' Jane Pascal', '21', '20-07-1997', 'Male', 'Filipino', 'Single', 'Primary education', 'Accounting Clerk', '09246739279', 'joe@gmail.com', '11435567', 'Pagadian City', 'Lawis, Ozamiz City'),
(38, 'Joebert Saavedra', '20', '24-03-1997', 'Male', 'Filipino', 'Single', 'Bachelors degree', 'Master Teacher II', '09246739279', 'janril@gmail.com', '11435567', 'Pagadian City', 'Pulot, Ozamiz City'),
(40, 'Loychris', '20', '24-03-1997', 'Male', 'Filipino', 'Single', 'Masters degree', 'Accounting Clerk', '09246739279', 'jane@gmail.com', '11435567', 'Ozamiz City', 'Pulot, Ozamiz City'),
(41, 'Hannah Acapulco', '20', '24-03-1998', 'Female', 'Filipino', 'Single', 'Masters degree', 'Accounting Clerk', '09246739279', 'hannah@gmail.com', '11435567', 'Ozamiz City', 'Pulot, Ozamiz City'),
(42, 'Hannah Acapulco', '20', '24-03-1998', 'Female', 'Filipino', 'Single', 'Masters degree', 'Accounting Clerk', '09246739279', 'hannah@gmail.com', '11435567', 'Ozamiz City', 'Pulot, Ozamiz City'),
(43, 'Virginia Blazer', '20', '25-02-1998', 'Female', 'Filipino', 'Single', 'Bachelors degree', 'Teacher', '09125764680', 'virginia@gmail.com', '114556788', 'Tawi Tawi City', 'Lamak, Tawi Tawi City');

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `donorid` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `dateofbirth` varchar(45) NOT NULL,
  `contactnum` varchar(45) NOT NULL,
  `homeaddress` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `bloodtype` varchar(45) DEFAULT NULL,
  `lastdonation` varchar(45) DEFAULT NULL,
  `remarks` varchar(45) DEFAULT NULL,
  `donorstatus` varchar(45) DEFAULT NULL,
  `diagnosis` varchar(45) DEFAULT NULL,
  `bloodbank` varchar(45) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`donorid`, `name`, `dateofbirth`, `contactnum`, `homeaddress`, `email`, `bloodtype`, `lastdonation`, `remarks`, `donorstatus`, `diagnosis`, `bloodbank`) VALUES
(2, 'Rosario', '9-24-1997', '09097675643', 'Aloran', 'test@gmail.com', '', '2018-11-22', NULL, '', '', 'Oroquieta City'),
(5, 'Gamboa', '12-12-1983', '09094358434', 'Mobod Oroquieta City', 'jurosgamboa@gmail.com', '', NULL, NULL, '', '', 'Oroquieta City'),
(9, 'Padilla', '12-1-1997', '09093435202', 'Mobod Oroquieta City', 'bonniepadilla40@yahoo.com', '', NULL, NULL, '', '', 'Oroquieta City'),
(8, 'Dela Cruz', '1-1-1967', '09098887764', 'Carangan Ozamiz City', 'juantamad@gmail.com', '', NULL, NULL, '', '', 'Ozamiz City'),
(14, 'Jane A. Veloso', ' 21-04-1995', ' 09126947548', ' Purok 5, Barangay Gango, Ozamiz City', 'janevelos@gmail.com', 'AB+', '2018-12-02', NULL, NULL, NULL, 'Ozamiz City'),
(20, 'Jane Pascal', ' 24-01-1998', ' 0976543678896', ' Tawi Tawi', 'jane@gmail.com', 'O+', '2018-12-06', NULL, NULL, NULL, 'Tawi Tawi City'),
(19, 'Janril S. Tayone', ' 20-07-1998', ' 09457893547', ' Lawis, Ozamiz City', 'janril@gmail.com', 'B+', '', NULL, NULL, NULL, 'Ozamiz City'),
(17, 'John Mark Lampinig', ' 24-03-1998', ' 0976543678896', ' Gango', 'aljan@gmail.com', 'A+', '2018-12-06', NULL, NULL, NULL, 'Ozamiz City'),
(18, 'Joebert Saavedra', ' 24-03-1997', ' 09246739279', ' Pulot, Ozamiz City', 'joe@gmail.com', 'AB-', '2018-12-06', NULL, NULL, NULL, 'Ozamiz City'),
(21, 'Jane Pascal', ' 24-01-1998', ' 0976543678896', ' Tawi Tawi', 'jane@gmail.com', 'O+', '2018-12-06', NULL, NULL, NULL, 'Tawi Tawi City'),
(22, ' Hannah Acapulco', ' 24-03-1998', ' 09246739279', ' Pulot, Ozamiz City', 'hannah@gmail.com', 'O+', '2018-12-06', NULL, NULL, NULL, 'Ozamiz City'),
(27, 'Virginia Blazer', '25-02-1998', '09125764680', 'Lamak, Tawi Tawi City', 'virginia@gmail.com', 'A+', '2018-12-07', NULL, NULL, NULL, 'Tawi Tawi City'),
(26, 'Janril S. Tayone', '12-02-1998', '09246739279', 'Lapak, Tawi Tawi City', 'janril@gmail.com', 'B-', '2018-12-07', NULL, NULL, NULL, 'Tawi Tawi City'),
(28, 'John Mark Lampinig', '24-03-1998', '0976543678896', 'Gango', 'aljan@gmail.com', 'AB-', '2018-12-07', NULL, NULL, NULL, 'Oroquieta City');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `idinventory` int(11) NOT NULL,
  `serialnumber` varchar(45) NOT NULL,
  `donor` varchar(45) NOT NULL,
  `bloodtype` varchar(45) NOT NULL,
  `component` varchar(45) NOT NULL,
  `unit` varchar(45) NOT NULL,
  `city` varchar(45) NOT NULL,
  `extractiondate` varchar(45) NOT NULL,
  `expirationdate` varchar(45) NOT NULL,
  `remarks` varchar(45) NOT NULL,
  `findings` varchar(45) NOT NULL,
  `checkoutmonth` varchar(45) DEFAULT NULL,
  `checkoutyear` varchar(45) DEFAULT NULL,
  `flag` int(2) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`idinventory`, `serialnumber`, `donor`, `bloodtype`, `component`, `unit`, `city`, `extractiondate`, `expirationdate`, `remarks`, `findings`, `checkoutmonth`, `checkoutyear`, `flag`) VALUES
(24, ' 7200-999999-1 ', ' Dodong Gadon ', 'O+', ' Whole Blood ', ' 1 ', 'Ozamiz City', ' 2018-09-27 ', ' 2018-10-28 ', ' Unsuccessfull ', 'Active', NULL, NULL, 0),
(37, '7200-333222-2', ' Hannah Acapulco', 'O+', 'Whole Blood', '1', 'Ozamiz City', '2018-12-07', '2019-01-23', 'Successfull', 'Active', NULL, NULL, 0),
(27, ' 7200-000000-1 ', ' Bobot Vidanes ', 'O-', ' Whole Blood ', ' 1 ', 'Ozamiz City ', ' 2018-09-27 ', ' 2018-10-27 ', ' Unsuccessfull ', 'Active', NULL, NULL, 0),
(40, '7200-567432-1', 'Daisy summer', 'O+', 'Whole Blood', '1', 'Oroquieta City', '2018-04-24', '2018-05-24', 'Successfull', 'Active', NULL, NULL, 0),
(36, '7200-023535-2', 'Kaye Ouano', 'AB+', 'Whole Blood', '1', 'Ozamiz City', '2018-12-07', '2019-01-18', 'Successfull', 'Active', NULL, NULL, 0),
(29, '7200-888888-1', 'Harlem Shake', 'O+', 'Whole Blood', '1', 'Ozamiz City', '2018-09-27', '2018-10-28', 'Unsuccessfull', 'Active', NULL, NULL, 0),
(30, '7200-555555-1', 'Manny Pacquiao', 'O-', 'Whole Blood', '1', 'Ozamiz City', '2018-11-22', '2018-12-23', 'Successfull', 'Active', NULL, NULL, 0),
(31, '7200-343454-2', 'Jane L. Loslos', 'O+', 'Whole Blood', '1', 'Ozamiz City', '2018-12-04', '2019-01-18', 'Successfull', 'Active', NULL, NULL, 0),
(32, '7200-789654-1', 'Jubilee Serna', 'B+', 'Whole Blood', '1', 'Oroquieta City', '2018-03-06', '2018-04-27', 'Successfull', 'Active', NULL, NULL, 0),
(39, '7200-678555-1', 'Dove', 'O+', 'Whole Blood', '1', 'Ozamiz City', '2018-09-24', '2018-10-21', 'Successfull', 'Active', NULL, NULL, 0),
(35, '7200-222222-1', 'Eva Mapendo', 'O-', 'Whole Blood', '1', 'Ozamiz City', '2018-11-20', '2018-12-23', 'Successfull', 'Active', NULL, NULL, 0);

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
  `remarks` varchar(45) NOT NULL,
  `findings` varchar(45) NOT NULL,
  `bloodbank` varchar(45) NOT NULL,
  `reciever` varchar(45) NOT NULL,
  `recieveraddress` varchar(45) NOT NULL,
  `contactnumber` varchar(45) NOT NULL,
  `ornumber` varchar(45) NOT NULL,
  `checkoutmonth` varchar(45) DEFAULT NULL,
  `checkoutyear` varchar(45) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`idreport`, `serialnumber`, `donor`, `bloodtype`, `component`, `quantity`, `extractiondate`, `expirationdate`, `remarks`, `findings`, `bloodbank`, `reciever`, `recieveraddress`, `contactnumber`, `ornumber`, `checkoutmonth`, `checkoutyear`) VALUES
(86, ' 7200-000000-1 ', ' Bobot Vidanes ', 'O-', ' Whole Blood ', ' 1 ', ' 2018-09-27 ', ' 2018-10-27 ', ' Unsuccessfull ', 'Active', 'Ozamiz City ', 'jefferson padilla', 'Sinacaban', '0943434354', '222222222', 'December', '2018'),
(85, ' 7200-999999-1 ', ' Dodong Gadon ', 'O+', ' Whole Blood ', ' 1 ', ' 2018-09-27 ', ' 2018-10-28 ', ' Unsuccessfull ', 'Active', 'Ozamiz City', 'Boni Padilla', 'Sinacaban', '0943434354', '111111111111', 'December', '2018'),
(81, '7200-555555-1', 'Manny Pacquiao', 'O-', 'Whole Blood', '1', '2018-11-22', '2018-12-23', 'Successfull', 'Active', 'Ozamiz City', 'lalalala', 'ozamiz', '09548692476', '23454656', 'December', '2018'),
(78, '7200-456654-1', 'Datu Puti', 'O', 'Whole Blood', '1', '2018-09-24', '2018-10-28', 'Successfull', 'Active', 'Ozamiz City', 'Josefina Tayone', 'Lapasan Clarin', '09958365474', '23454656', 'December', '2018'),
(77, '7200-222222-1', 'Eva Mapendo', 'O-', 'Whole Blood', '1', '2018-11-20', '2018-12-23', 'Successfull', 'Active', 'Ozamiz City', 'Patrick Gonzales', 'Tinago, Ozamiz City', '09765343570', '22446632', 'December', '2018'),
(64, '  7200-999999-1  ', '  Dodong Gadon  ', '  O  ', '  Whole Blood  ', '  1  ', '  2018-09-27  ', '  2018-10-28  ', '  Unsuccessfull  ', ' Active ', ' Ozamiz City  ', 'Jane Veloso', 'Gango, Ozamiz City', '09678953578', '999557888', 'December', '2018'),
(66, ' 7200-000000-1 ', ' Bobot Vidanes ', ' O ', ' Whole Blood ', ' 1 ', ' 2018-09-27 ', ' 2018-10-27 ', ' Unsuccessfull ', 'Active', 'Ozamiz City ', 'Aljan Labrusca', 'Lapasan Clarin', '0934343543', '4546567', 'December', '2018'),
(67, '7200-888888-1', 'Harlem Shake', 'O', 'Whole Blood', '1', '2018-09-27', '2018-10-28', 'Unsuccessfull', 'Active', 'Ozamiz City', 'Aljan Labrusca', 'Lapasan Clarin', '0934343543', '4546567', 'December', '2018'),
(76, '7200-678555-1', 'Dove', 'O', 'Whole Blood', '1', '2018-09-24', '2018-10-21', 'Successfull', 'Active', 'Ozamiz City', 'Josefina Tayone', 'Lapasan Clarin', '09967654336', '22446567', 'December', '2018'),
(70, '7200-555555-1', 'Manny Pacquiao', 'O-', 'Whole Blood', '1', '2018-11-22', '2018-12-23', 'Successfull', 'Active', 'Ozamiz City', 'Jinky Napoles', 'Pulot, Ozamiz City', '09127958737', '9956883', 'December', '2018'),
(71, '7200-789654-1', 'Jubilee Serna', 'B+', 'Whole Blood', '1', '2018-03-06', '2018-04-27', 'Successfull', 'Active', 'Oroquieta City', 'Josefina Acalcal', 'Lapasan Clarin', '0934343543', '9956883', 'December', '2018'),
(79, ' 7200-000000-1 ', ' Bobot Vidanes ', 'O-', ' Whole Blood ', ' 1 ', ' 2018-09-27 ', ' 2018-10-27 ', ' Unsuccessfull ', 'Active', 'Ozamiz City ', 'Albert Ozamiz', 'Gango', '09548692476', '32345464', 'December', '2018'),
(73, '7200-343454-2', 'Jane L. Loslos', 'O+', 'Whole Blood', '1', '2018-12-04', '2019-01-18', 'Successfull', 'Active', 'Ozamiz City', 'Lane Larlar', 'Gango, Ozamiz City', '0908976535', '354656767', 'December', '2018');

-- --------------------------------------------------------

--
-- Table structure for table `request_blood`
--

CREATE TABLE `request_blood` (
  `idrequestBlood` int(11) NOT NULL,
  `fullname` varchar(45) NOT NULL,
  `birthdate` varchar(45) NOT NULL,
  `age` int(11) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `dateofrequest` varchar(45) NOT NULL,
  `bloodtype` varchar(45) NOT NULL,
  `component` varchar(45) NOT NULL,
  `units` varchar(45) NOT NULL,
  `hospital` varchar(45) NOT NULL,
  `roomnum` varchar(45) NOT NULL,
  `cellphonenum` varchar(45) NOT NULL,
  `physician` varchar(45) NOT NULL,
  `diagnosis` varchar(100) NOT NULL,
  `city` varchar(45) NOT NULL,
  `serialnumber` varchar(45) NOT NULL,
  `timerequested` timestamp(6) NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_blood`
--

INSERT INTO `request_blood` (`idrequestBlood`, `fullname`, `birthdate`, `age`, `sex`, `dateofrequest`, `bloodtype`, `component`, `units`, `hospital`, `roomnum`, `cellphonenum`, `physician`, `diagnosis`, `city`, `serialnumber`, `timerequested`) VALUES
(84, 'St John Baptist De La Salle', '12-12-1998', 20, 'Male', '25-03-2018', 'A+', 'Whole Blood', '1', 'MUMC', '357', '098665354656', 'Dr. Sy', 'Dengue', 'Tangub City', '7200-890345-1', NULL),
(80, 'John Vincent R. Acapulco', '11-01-1998', 20, 'Male', '29-11-2018', 'AB+', 'Whole Blood', '1', 'Faith Hospital', '267', '09951549836', 'Dr. Sy', 'Hepatitis B', 'Oroquieta City', '7207-000000-1', NULL),
(81, 'Shiela M. Gonzalez', '11-02-1998', 20, 'Female', '30-11-2018', 'O', 'Whole Blood', '1', 'Mhars', '537', '09951572533', 'Dr. Sy', 'Hepatitis B', 'Ozamiz City', '7200-000000-1', NULL),
(82, 'Jane Veloso', '11-01-1998', 20, 'Female', '28-11-2018', 'A+', 'Whole Blood', '1', 'MUMC', '267', '09951549836', 'Dr. Rasonable', 'Dengue', 'Tangub City', '7200-890345-1', NULL),
(83, 'Shiela M. Gonzalez', '11-01-1998', 20, 'Female', '29-11-2018', 'A+', 'Whole Blood', '1', 'Faith Hospital', '537', '09951572533', 'Dr. Sy', 'Dengue', 'Tangub City', '7200-890345-1', NULL),
(85, 'jay harold', '12-12-1998', 20, 'Male', '04-12-2018', 'A+', 'Whole Blood', '1', 'MUMC', '357', '098665354656', 'Dr. Sy', 'Dengue', 'Tangub City', '7200-890345-1', NULL),
(86, 'Aljan Labrusca', '24-01-1998', 20, 'Male', '04-12-2018', 'A+', 'Whole Blood', '1', 'MUMC', '256', '09578999544', 'Dr. Sy', 'Dengue', 'Tangub City', '7200-890345-1', NULL),
(87, 'Jane Malmal', '12-02-1998', 20, 'Female', '04-12-2018', 'A+', 'Whole Blood', '1', 'MUMC', '256', '09578999544', 'Dr. Simbahon', 'Dengue', 'Tangub City', '7200-890345-1', NULL),
(88, 'Janna Lapus', '21-03-1998', 20, 'Female', '04-12-2018', 'O', 'Whole Blood', '1', 'MUMC', '379', '09958365474', 'Dr. Acapulco', 'Dengue', 'Ozamiz City', '7200-678555-1', NULL),
(89, 'John Mark Lampinig', '25-01-1998', 20, 'Male', '04-12-2018', 'O', 'Whole Blood', '1', 'MUMC', '379', '0976543678', 'Dr. Acapulco', 'Fever', 'Ozamiz City', '7200-456654-1', NULL),
(90, 'Josefina Acalcal', '25-03-1998', 20, 'Female', '04-12-2018', 'B+', 'Whole Blood', '1', 'MUMC', '379', '09957835789', 'Dr. Acapulco', 'Dengue', 'Oroquieta City', '7200-789654-1', NULL),
(91, 'Joebert Saavedra', '20-03-1997', 20, 'Male', '06-12-2018', 'O', 'Whole Blood', '1', 'MUMC', '232', '0324343', 'Dr. Sy', 'Dengue', 'Ozamiz City', '7200-678555-1', '2018-12-05 19:48:39.000000');

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
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`idinventory`,`serialnumber`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`idreport`,`serialnumber`);

--
-- Indexes for table `request_blood`
--
ALTER TABLE `request_blood`
  ADD PRIMARY KEY (`idrequestBlood`,`serialnumber`);

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
  MODIFY `idblood` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `branchid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `donate_blood`
--
ALTER TABLE `donate_blood`
  MODIFY `iddonate_blood` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `donors`
--
ALTER TABLE `donors`
  MODIFY `donorid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `idinventory` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `idreport` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `request_blood`
--
ALTER TABLE `request_blood`
  MODIFY `idrequestBlood` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `reserve_blood`
--
ALTER TABLE `reserve_blood`
  MODIFY `idblood` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
