-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 19, 2024 at 07:26 PM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elysian_interiors`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(10) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `emailAddress` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `firstName`, `lastName`, `emailAddress`, `password`) VALUES
(100000000, 'Hailah', 'Alshehri', 'hailah@gmail.com', '$2y$10$IWFy0cfd5M5bzrt4xRWH..1IvJ3AEO6XYIvLeOIZW.MeLG7Jzqvcy'),
(100000001, 'Sarah', 'Ahmad', 'sarah@gmail.com', '$2y$10$DJrJWHpBMC09YqjuppLuve6QveLu9vGfIM/HY9Few5/oW/Hs5Ms5y'),
(100000002, 'Ali', 'Jamal', 'Ali@gmail.com', '$2y$10$iysjJuj9P/Sh4Yjfw8.ZQO73Q0.hAhvL/idVz1qfRSv/xFGbLrM8u');

-- --------------------------------------------------------

--
-- Table structure for table `designcategory`
--

CREATE TABLE `designcategory` (
  `id` int(10) NOT NULL,
  `category` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `designcategory`
--

INSERT INTO `designcategory` (`id`, `category`) VALUES
(1000, 'Coastal'),
(1001, 'Country'),
(1002, 'Minimalist'),
(1003, 'Modern');

-- --------------------------------------------------------

--
-- Table structure for table `designconsultation`
--

CREATE TABLE `designconsultation` (
  `id` int(10) NOT NULL,
  `requestID` int(10) NOT NULL,
  `consultation` varchar(500) NOT NULL,
  `consultationImgFileName` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `designconsultation`
--

INSERT INTO `designconsultation` (`id`, `requestID`, `consultation`, `consultationImgFileName`) VALUES
(10000000, 1000000, 'I\'m looking to revamp my living room space. It\'s the heart of the home, and I want it to be cozy yet stylish. I enjoy a blend of modern and traditional elements. We use it for everything from family movie nights to entertaining guests. Any ideas?', 'Consultation1.JPG'),
(10000001, 1000001, 'I\'ve been thinking about redesigning my bedroom, and I\'d love to get your input. \r\nI generally like Coastal style, but I want it to feel cozy and inviting. I prefer neutral colors, \r\nbut maybe with a pop of something. Also, I need plenty of storage, and it would be great to have a cozy reading nook. What are your thoughts?', 'Consultation2.JPG'),
(10000002, 1000002, 'I\'m excited about renovating my kitchen! It\'s the most important place of our home, and I want it to be both stylish and practical. We love to cook and entertain, so functionality is key. Any suggestions?', 'Consultation3.JPG'),
(10000003, 1000003, 'I\'m in need of a functional and inspiring home office space. I work remotely and spend a lot of time here, so it needs to be comfortable and conducive to productivity. Any ideas on how to create the perfect workspace?', 'Consultation4.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `designconsultationrequest`
--

CREATE TABLE `designconsultationrequest` (
  `id` int(10) NOT NULL,
  `clientID` int(10) NOT NULL,
  `designerID` int(10) NOT NULL,
  `roomTypeID` int(10) NOT NULL,
  `designCategoryID` int(10) NOT NULL,
  `roomWidth` int(3) NOT NULL,
  `roomLength` int(3) NOT NULL,
  `colorPrefrences` varchar(40) NOT NULL,
  `date` date NOT NULL,
  `statusID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `designconsultationrequest`
--

INSERT INTO `designconsultationrequest` (`id`, `clientID`, `designerID`, `roomTypeID`, `designCategoryID`, `roomWidth`, `roomLength`, `colorPrefrences`, `date`, `statusID`) VALUES
(1000000, 100000001, 100000000, 100000000, 1003, 4, 5, 'Beige and Green	', '2024-01-09', 100000000),
(1000001, 100000002, 100000000, 100000001, 1000, 3, 4, 'Blue and White	', '2024-01-15', 100000001),
(1000002, 100000000, 100000002, 100000002, 1002, 3, 3, 'Black And White	', '2024-01-05', 100000002),
(1000003, 100000000, 100000001, 100000003, 1003, 4, 5, 'Black And White', '2024-02-03', 100000001);

-- --------------------------------------------------------

--
-- Table structure for table `designer`
--

CREATE TABLE `designer` (
  `id` int(10) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `emailAddress` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `brandName` varchar(50) NOT NULL,
  `logoImgFileName` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `designer`
--

INSERT INTO `designer` (`id`, `firstName`, `lastName`, `emailAddress`, `password`, `brandName`, `logoImgFileName`) VALUES
(100000000, 'Shaden', 'Albader', 'shadnalbadr@gmail.com', '$2y$10$e61EYOGPy8CyU6IeG0slt.WIWOD3QcGj/GelRZJIW/LK4M/6poIfy', 'Serenity Spaces', 'SerenitySpacesLogo.PNG'),
(100000001, 'Olivia', 'Wilson', 'olivia@hotmail.com', '$2y$10$CjYUWN869iAmD8LKloEa6uG9jSOXI5jqpj5yZs5YgWmfPO2uTiu1W', 'Artistic Design', 'ArtisticDesignLogo.PNG'),
(100000002, 'Sami', 'Wester', 'sami@gmail.com', '$2y$10$kzBZtr5sjavevf61frq/NeHlo9lWFGNfjA5HN570lOlzBFnU4WHkC', 'Interior Space', 'InteriorSpaceLogo.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `designerspeciality`
--

CREATE TABLE `designerspeciality` (
  `designerID` int(10) NOT NULL,
  `designCategoryID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `designerspeciality`
--

INSERT INTO `designerspeciality` (`designerID`, `designCategoryID`) VALUES
(100000000, 1001),
(100000000, 1003),
(100000000, 1002),
(100000001, 1001),
(100000001, 1003),
(100000002, 1002);

-- --------------------------------------------------------

--
-- Table structure for table `designportoflioproject`
--

CREATE TABLE `designportoflioproject` (
  `id` int(10) NOT NULL,
  `designerID` int(10) NOT NULL,
  `projectName` varchar(30) NOT NULL,
  `projectImgFileName` varchar(30) NOT NULL,
  `description` varchar(300) NOT NULL,
  `designCategoryID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `designportoflioproject`
--

INSERT INTO `designportoflioproject` (`id`, `designerID`, `projectName`, `projectImgFileName`, `description`, `designCategoryID`) VALUES
(100000000, 100000000, 'Sun House', 'SerenitySpacesProject1.JPEG', 'Rustic white sun house that has many green\r\nplants and windows with a country style.', 1001),
(100000001, 100000000, 'Home Office', 'SerenitySpacesProject2.JPG', 'White and black minimalist home office with clean lines.	', 1003),
(100000002, 100000001, 'Sun House', 'ArtisticDesignProject1.JPEG', 'Rustic white sun house that has many green\r\nplants and windows with a country style.', 1001),
(100000003, 100000001, 'Home Office', 'ArtisticDesignProject2.JPG', 'White and black minimalist home office with clean lines.', 1003),
(100000004, 100000002, 'Home Office', 'InteriorSpaceProject1.JPG', 'White and black minimalist home office with clean lines.', 1003);

-- --------------------------------------------------------

--
-- Table structure for table `requeststatus`
--

CREATE TABLE `requeststatus` (
  `id` int(10) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `requeststatus`
--

INSERT INTO `requeststatus` (`id`, `status`) VALUES
(100000000, 'Pending Consultation'),
(100000001, 'Consultation Provided '),
(100000002, 'Consultation Declined ');

-- --------------------------------------------------------

--
-- Table structure for table `roomtype`
--

CREATE TABLE `roomtype` (
  `id` int(10) NOT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roomtype`
--

INSERT INTO `roomtype` (`id`, `type`) VALUES
(100000000, 'Living Room'),
(100000001, 'Bedroom'),
(100000002, 'Kitchen'),
(100000003, 'Home Office');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designcategory`
--
ALTER TABLE `designcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designconsultation`
--
ALTER TABLE `designconsultation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `requestID` (`requestID`);

--
-- Indexes for table `designconsultationrequest`
--
ALTER TABLE `designconsultationrequest`
  ADD PRIMARY KEY (`id`),
  ADD KEY `clientID` (`clientID`),
  ADD KEY `designCategoryID` (`designCategoryID`),
  ADD KEY `designerID` (`designerID`),
  ADD KEY `statusID` (`statusID`),
  ADD KEY `roomTypeID` (`roomTypeID`);

--
-- Indexes for table `designer`
--
ALTER TABLE `designer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designerspeciality`
--
ALTER TABLE `designerspeciality`
  ADD KEY `designerID` (`designerID`),
  ADD KEY `designCategoryID` (`designCategoryID`);

--
-- Indexes for table `designportoflioproject`
--
ALTER TABLE `designportoflioproject`
  ADD PRIMARY KEY (`id`),
  ADD KEY `designCategoryID` (`designCategoryID`),
  ADD KEY `designerID` (`designerID`);

--
-- Indexes for table `requeststatus`
--
ALTER TABLE `requeststatus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roomtype`
--
ALTER TABLE `roomtype`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100000003;

--
-- AUTO_INCREMENT for table `designcategory`
--
ALTER TABLE `designcategory`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1004;

--
-- AUTO_INCREMENT for table `designconsultation`
--
ALTER TABLE `designconsultation`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10000004;

--
-- AUTO_INCREMENT for table `designconsultationrequest`
--
ALTER TABLE `designconsultationrequest`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000004;

--
-- AUTO_INCREMENT for table `designer`
--
ALTER TABLE `designer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100000003;

--
-- AUTO_INCREMENT for table `designportoflioproject`
--
ALTER TABLE `designportoflioproject`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100000005;

--
-- AUTO_INCREMENT for table `requeststatus`
--
ALTER TABLE `requeststatus`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100000003;

--
-- AUTO_INCREMENT for table `roomtype`
--
ALTER TABLE `roomtype`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100000004;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `designconsultation`
--
ALTER TABLE `designconsultation`
  ADD CONSTRAINT `designconsultation_ibfk_1` FOREIGN KEY (`requestID`) REFERENCES `designconsultationrequest` (`id`);

--
-- Constraints for table `designconsultationrequest`
--
ALTER TABLE `designconsultationrequest`
  ADD CONSTRAINT `designconsultationrequest_ibfk_10` FOREIGN KEY (`roomTypeID`) REFERENCES `roomtype` (`id`),
  ADD CONSTRAINT `designconsultationrequest_ibfk_6` FOREIGN KEY (`clientID`) REFERENCES `client` (`id`),
  ADD CONSTRAINT `designconsultationrequest_ibfk_7` FOREIGN KEY (`designCategoryID`) REFERENCES `designcategory` (`id`),
  ADD CONSTRAINT `designconsultationrequest_ibfk_8` FOREIGN KEY (`designerID`) REFERENCES `designer` (`id`),
  ADD CONSTRAINT `designconsultationrequest_ibfk_9` FOREIGN KEY (`statusID`) REFERENCES `requeststatus` (`id`);

--
-- Constraints for table `designerspeciality`
--
ALTER TABLE `designerspeciality`
  ADD CONSTRAINT `designerspeciality_ibfk_1` FOREIGN KEY (`designCategoryID`) REFERENCES `designcategory` (`id`),
  ADD CONSTRAINT `designerspeciality_ibfk_2` FOREIGN KEY (`designerID`) REFERENCES `designer` (`id`);

--
-- Constraints for table `designportoflioproject`
--
ALTER TABLE `designportoflioproject`
  ADD CONSTRAINT `designportoflioproject_ibfk_2` FOREIGN KEY (`designCategoryID`) REFERENCES `designcategory` (`id`),
  ADD CONSTRAINT `designportoflioproject_ibfk_3` FOREIGN KEY (`designerID`) REFERENCES `designer` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
