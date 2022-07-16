-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2022 at 05:38 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbgateweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--

CREATE TABLE `tblcategory` (
  `categoryworkId` varchar(10) NOT NULL,
  `categoryName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblcategory`
--

INSERT INTO `tblcategory` (`categoryworkId`, `categoryName`) VALUES
('cate_1', 'Website'),
('cate_2', 'Line Notification');

-- --------------------------------------------------------

--
-- Table structure for table `tblcustomer`
--

CREATE TABLE `tblcustomer` (
  `tel` varchar(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `contact` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblcustomer`
--

INSERT INTO `tblcustomer` (`tel`, `name`, `contact`) VALUES
('081-1351254', 'Herrod Chandler', 'LineID : HERROD'),
('083-3966521', 'Garrett Winters', 'LineID : GAR'),
('085-2555693', 'Tiger Nixon', 'LineID : TNI'),
('085-5210213', 'Brielle Williamson', 'LineID : BRIELLE'),
('086-4952584', 'Nadeera PaRee', 'LineID : 1254213'),
('087-4111256', 'Steve Var', 'LineID : SV'),
('087-7451211', 'Cedric Kelly', 'LineID : CED'),
('088-5562354', 'Tuntee Tar', 'LineID : TTT_11'),
('088-8513564', 'Ashton Cox', 'LineID : ASHT'),
('089-4581256', 'Puna Lustee', 'LineID : Puna_22'),
('089-6653223', 'Airi Satou', 'LineID : AIRI');

-- --------------------------------------------------------

--
-- Table structure for table `tblemployee`
--

CREATE TABLE `tblemployee` (
  `employeeId` varchar(10) NOT NULL,
  `employeeName` varchar(30) NOT NULL,
  `employeeLastname` varchar(20) NOT NULL,
  `partId` varchar(10) NOT NULL,
  `countWorking` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblemployee`
--

INSERT INTO `tblemployee` (`employeeId`, `employeeName`, `employeeLastname`, `partId`, `countWorking`) VALUES
('emp_1', 'Krisorn', 'Chaypudsa', 'part_1', 2),
('emp_2', 'Sahasawat', 'Semee', 'part_1', 1),
('emp_3', 'Wuttiporn', 'Meejumras', 'part_1', 15),
('emp_4', 'Natdanai', 'Taimai', 'part_2', 200);

-- --------------------------------------------------------

--
-- Table structure for table `tblpart`
--

CREATE TABLE `tblpart` (
  `partId` varchar(10) NOT NULL,
  `partName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblpart`
--

INSERT INTO `tblpart` (`partId`, `partName`) VALUES
('part_1', 'WEB DAVERLOPER'),
('part_2', 'NOTIFICATION DEV');

-- --------------------------------------------------------

--
-- Table structure for table `tblwork`
--

CREATE TABLE `tblwork` (
  `idWork` varchar(30) NOT NULL,
  `tel` varchar(11) NOT NULL,
  `headingWork` text NOT NULL,
  `requireWork` text NOT NULL,
  `progress` text NOT NULL,
  `dateLine` date NOT NULL,
  `categoryWorkId` varchar(10) NOT NULL,
  `earnestMoney` int(20) NOT NULL,
  `totalCash` int(20) NOT NULL,
  `employeeId` varchar(10) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblwork`
--

INSERT INTO `tblwork` (`idWork`, `tel`, `headingWork`, `requireWork`, `progress`, `dateLine`, `categoryWorkId`, `earnestMoney`, `totalCash`, `employeeId`, `status`) VALUES
('w_1', '081-1351254', 'Web Design THAI Business ,LTD.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum magnam optio esse cum minus dolore sint ut molestiae natus necessitatibus quam dolorem porro placeat, dolor doloremque. Qui porro deleniti laudantium quaerat rerum nisi quae dolor architecto voluptate ullam molestias, praesentium odio temporibus odit maxime iure ipsam officiis. Nobis aliquam culpa vitae optio recusandae, debitis architecto magni harum velit voluptatem sequi. Ipsum sed quod culpa accusantium dolores odio aliquid aut autem debitis necessitatibus neque, similique rem nulla eaque quasi non dolorum rerum eum unde totam fugit illum aliquam tempore delectus. Dolorum pariatur voluptate eos dolorem accusantium alias eaque officia, nihil quod.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum magnam optio esse cum minus dolore sint ut molestiae natus necessitatibus quam dolorem porro placeat, dolor doloremque. Qui porro deleniti laudantium quaerat rerum nisi quae dolor architecto voluptate ullam molestias, praesentium odio temporibus odit maxime iure ipsam officiis. Nobis aliquam culpa vitae optio recusandae, debitis architecto magni harum velit voluptatem sequi. Ipsum sed quod culpa accusantium dolores odio aliquid aut autem debitis necessitatibus neque, similique rem nulla eaque quasi non dolorum rerum eum unde totam fugit illum aliquam tempore delectus. Dolorum pariatur voluptate eos dolorem accusantium alias eaque officia, nihil quod.', '2022-05-22', 'cate_1', 50000, 100000, 'emp_1', 1),
('w_2', '083-3966521', 'Line Notification', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum magnam optio esse cum minus dolore sint ut molestiae natus necessitatibus quam dolorem porro placeat, dolor doloremque. Qui porro deleniti laudantium quaerat rerum nisi quae dolor architecto voluptate ullam molestias, praesentium odio temporibus odit maxime iure ipsam officiis. Nobis aliquam culpa vitae optio recusandae, debitis architecto magni harum velit voluptatem sequi. Ipsum sed quod culpa accusantium dolores odio aliquid aut autem debitis necessitatibus neque, similique rem nulla eaque quasi non dolorum rerum eum unde totam fugit illum aliquam tempore delectus. Dolorum pariatur voluptate eos dolorem accusantium alias eaque officia, nihil quod.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum magnam optio esse cum minus dolore sint ut molestiae natus necessitatibus quam dolorem porro placeat, dolor doloremque. Qui porro deleniti laudantium quaerat rerum nisi quae dolor architecto voluptate ullam molestias, praesentium odio temporibus odit maxime iure ipsam officiis. Nobis aliquam culpa vitae optio recusandae, debitis architecto magni harum velit voluptatem sequi. Ipsum sed quod culpa accusantium dolores odio aliquid aut autem debitis necessitatibus neque, similique rem nulla eaque quasi non dolorum rerum eum unde totam fugit illum aliquam tempore delectus. Dolorum pariatur voluptate eos dolorem accusantium alias eaque officia, nihil quod.', '2022-05-24', 'cate_2', 60000, 120000, 'emp_4', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblcategory`
--
ALTER TABLE `tblcategory`
  ADD PRIMARY KEY (`categoryworkId`);

--
-- Indexes for table `tblcustomer`
--
ALTER TABLE `tblcustomer`
  ADD PRIMARY KEY (`tel`);

--
-- Indexes for table `tblemployee`
--
ALTER TABLE `tblemployee`
  ADD PRIMARY KEY (`employeeId`),
  ADD KEY `partId` (`partId`);

--
-- Indexes for table `tblpart`
--
ALTER TABLE `tblpart`
  ADD PRIMARY KEY (`partId`);

--
-- Indexes for table `tblwork`
--
ALTER TABLE `tblwork`
  ADD PRIMARY KEY (`idWork`),
  ADD KEY `employeeId` (`employeeId`),
  ADD KEY `categoryWorkId` (`categoryWorkId`),
  ADD KEY `tel` (`tel`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblemployee`
--
ALTER TABLE `tblemployee`
  ADD CONSTRAINT `tblemployee_ibfk_1` FOREIGN KEY (`partId`) REFERENCES `tblpart` (`partId`);

--
-- Constraints for table `tblwork`
--
ALTER TABLE `tblwork`
  ADD CONSTRAINT `tblwork_ibfk_1` FOREIGN KEY (`categoryWorkId`) REFERENCES `tblcategory` (`categoryworkId`),
  ADD CONSTRAINT `tblwork_ibfk_2` FOREIGN KEY (`employeeId`) REFERENCES `tblemployee` (`employeeId`),
  ADD CONSTRAINT `tblwork_ibfk_3` FOREIGN KEY (`tel`) REFERENCES `tblcustomer` (`tel`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
