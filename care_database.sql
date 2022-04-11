-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2020 at 12:57 PM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `care_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE IF NOT EXISTS `admin_table` (
  `Admin_Id` int(11) NOT NULL,
  `Admin_Name` varchar(50) NOT NULL,
  `Admin_Address` varchar(100) NOT NULL,
  `Admin_Phone` varchar(50) NOT NULL,
  `Admin_Email` varchar(50) NOT NULL,
  `User_Id` int(11) NOT NULL,
  `Admin_Image` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`Admin_Id`, `Admin_Name`, `Admin_Address`, `Admin_Phone`, `Admin_Email`, `User_Id`, `Admin_Image`) VALUES
(4, 'Altamash', 'Bufferzone, Karachi', '03123345678', 'aaltamash846@gmail.com', 3, '../Images/1c2d40fee053d56b9ca610f4148583c4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `appointments_table`
--

CREATE TABLE IF NOT EXISTS `appointments_table` (
  `Appointment_Id` int(11) NOT NULL,
  `Patient` int(11) NOT NULL,
  `Doctor` int(11) NOT NULL,
  `Appointment_Date` date NOT NULL,
  `Timing` int(11) NOT NULL,
  `Appointment_Info` varchar(100) DEFAULT NULL,
  `Price` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointments_table`
--

INSERT INTO `appointments_table` (`Appointment_Id`, `Patient`, `Doctor`, `Appointment_Date`, `Timing`, `Appointment_Info`, `Price`) VALUES
(13, 1, 1, '2020-03-25', 1, 'asdsad', 500);

-- --------------------------------------------------------

--
-- Table structure for table `availability_table`
--

CREATE TABLE IF NOT EXISTS `availability_table` (
  `Availability_Id` int(11) NOT NULL,
  `Availability_Doctor` int(11) NOT NULL,
  `Availability_Date` date NOT NULL,
  `Availability` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `availability_table`
--

INSERT INTO `availability_table` (`Availability_Id`, `Availability_Doctor`, `Availability_Date`, `Availability`) VALUES
(1, 1, '2020-03-25', 1),
(2, 1, '2020-03-26', 1);

-- --------------------------------------------------------

--
-- Table structure for table `available_table`
--

CREATE TABLE IF NOT EXISTS `available_table` (
  `Available_Id` int(11) NOT NULL,
  `Available` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `available_table`
--

INSERT INTO `available_table` (`Available_Id`, `Available`) VALUES
(1, 'Available'),
(2, 'Not Available');

-- --------------------------------------------------------

--
-- Table structure for table `cities_table`
--

CREATE TABLE IF NOT EXISTS `cities_table` (
  `City_Id` int(11) NOT NULL,
  `City_Name` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cities_table`
--

INSERT INTO `cities_table` (`City_Id`, `City_Name`) VALUES
(1, 'Karachi'),
(2, 'Lahore'),
(3, 'Islamabad'),
(4, 'Multan');

-- --------------------------------------------------------

--
-- Table structure for table `comments_table`
--

CREATE TABLE IF NOT EXISTS `comments_table` (
  `Comments_Id` int(11) NOT NULL,
  `Viewer_Name` varchar(50) NOT NULL,
  `Viewer_Email` varchar(50) NOT NULL,
  `Comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `disease_table`
--

CREATE TABLE IF NOT EXISTS `disease_table` (
  `Disease_Id` int(11) NOT NULL,
  `Disease_Name` varchar(50) NOT NULL,
  `Disease_Symptom` varchar(50) NOT NULL,
  `Disease_Description` varchar(100) NOT NULL,
  `Disease_Prevention` varchar(50) DEFAULT NULL,
  `Disease_Cure` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disease_table`
--

INSERT INTO `disease_table` (`Disease_Id`, `Disease_Name`, `Disease_Symptom`, `Disease_Description`, `Disease_Prevention`, `Disease_Cure`) VALUES
(1, 'Coronavirus', 'Common signs of infection include respiratory symp', 'Coronaviruses are zoonotic, meaning they are transmitted between animals and people.  Detailed inves', 'Standard recommendations to prevent infection spre', 'There is no specific medicine to prevent or treat ');

-- --------------------------------------------------------

--
-- Table structure for table `doctors_table`
--

CREATE TABLE IF NOT EXISTS `doctors_table` (
  `Doctors_Id` int(11) NOT NULL,
  `Doctors_Name` varchar(50) NOT NULL,
  `Doctors_Address` varchar(50) NOT NULL,
  `Doctors_Phone` varchar(50) NOT NULL,
  `Doctors_Email` varchar(50) NOT NULL,
  `User_Id` int(11) NOT NULL,
  `Doctors_Image` varchar(50) DEFAULT NULL,
  `Specialty` int(11) NOT NULL,
  `Location` int(11) NOT NULL,
  `Fee` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors_table`
--

INSERT INTO `doctors_table` (`Doctors_Id`, `Doctors_Name`, `Doctors_Address`, `Doctors_Phone`, `Doctors_Email`, `User_Id`, `Doctors_Image`, `Specialty`, `Location`, `Fee`) VALUES
(1, 'Sahar', 'North Nazimabad', '033-033-0333', 'sahar12@gmail.com', 5, '../Images/download.jpg', 9, 1, 500),
(2, 'Dr. Sana Zeeshan', 'Karachi', '01234567890', 'sanazeeshan', 6, '../Images/download.jpg', 19, 2, 10000);

-- --------------------------------------------------------

--
-- Table structure for table `location_table`
--

CREATE TABLE IF NOT EXISTS `location_table` (
  `Location_Id` int(11) NOT NULL,
  `City` int(11) NOT NULL,
  `State` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location_table`
--

INSERT INTO `location_table` (`Location_Id`, `City`, `State`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 2, 1),
(6, 2, 2),
(7, 2, 3),
(8, 2, 4),
(9, 3, 1),
(10, 3, 2),
(11, 3, 3),
(12, 3, 4),
(13, 4, 1),
(14, 4, 2),
(15, 4, 3),
(16, 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `news_table`
--

CREATE TABLE IF NOT EXISTS `news_table` (
  `News_Id` int(11) NOT NULL,
  `Medical_News` varchar(50) NOT NULL,
  `News_Date` date NOT NULL,
  `News_Image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news_table`
--

INSERT INTO `news_table` (`News_Id`, `Medical_News`, `News_Date`, `News_Image`) VALUES
(1, 'Breaking News!', '2020-03-03', '../Images/InkedInkeda53c50f15d198831b25ab0e6dfc28fc3_LI.jpg'),
(2, 'Breaking News!', '2020-03-03', '../Images/InkedInkeda53c50f15d198831b25ab0e6dfc28fc3_LI.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `patient_table`
--

CREATE TABLE IF NOT EXISTS `patient_table` (
  `Patient_Id` int(11) NOT NULL,
  `Patient_Name` varchar(50) NOT NULL,
  `Patient_Address` varchar(50) NOT NULL,
  `Patient_Phone` varchar(50) NOT NULL,
  `Patient_Email` varchar(50) NOT NULL,
  `User_Id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_table`
--

INSERT INTO `patient_table` (`Patient_Id`, `Patient_Name`, `Patient_Address`, `Patient_Phone`, `Patient_Email`, `User_Id`) VALUES
(1, 'Maib', 'Karachi', '01234567890', 'maib@gmail.com', 7),
(7, 'Hamza Shoaib', 'Karachi', '01234567890', 'hamza@gmail.com', 10);

-- --------------------------------------------------------

--
-- Table structure for table `roles_table`
--

CREATE TABLE IF NOT EXISTS `roles_table` (
  `Role_Id` int(11) NOT NULL,
  `Role_Type` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles_table`
--

INSERT INTO `roles_table` (`Role_Id`, `Role_Type`) VALUES
(1, 'Admin'),
(2, 'Doctor'),
(3, 'Patient');

-- --------------------------------------------------------

--
-- Table structure for table `specialty_table`
--

CREATE TABLE IF NOT EXISTS `specialty_table` (
  `Specialty_Id` int(11) NOT NULL,
  `Specialty_Type` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `specialty_table`
--

INSERT INTO `specialty_table` (`Specialty_Id`, `Specialty_Type`) VALUES
(1, 'ALLERGY & IMMUNOLOGY'),
(2, 'ANESTHESIOLOGY'),
(3, 'DERMATOLOGY'),
(4, 'DIAGNOSTIC RADIOLOGY'),
(5, 'EMERGENCY MEDICINE'),
(6, 'FAMILY MEDICINE'),
(7, 'INTERNAL MEDICINE'),
(8, 'MEDICAL GENETICS'),
(9, 'NEUROLOGY'),
(10, 'NUCLEAR MEDICINE'),
(11, 'OBSTETRICS AND GYNECOLOGY'),
(12, 'OPHTHALMOLOGY'),
(13, 'PATHOLOGY'),
(14, 'PEDIATRICS'),
(15, 'PHYSICAL MEDICINE & REHABILITATION'),
(16, 'PREVENTIVE MEDICINE'),
(17, 'PSYCHIATRY'),
(18, 'RADIATION ONCOLOGY'),
(19, 'SURGERY'),
(20, 'UROLOGY');

-- --------------------------------------------------------

--
-- Table structure for table `states_table`
--

CREATE TABLE IF NOT EXISTS `states_table` (
  `State_Id` int(11) NOT NULL,
  `State_Name` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `states_table`
--

INSERT INTO `states_table` (`State_Id`, `State_Name`) VALUES
(1, 'North'),
(2, 'West'),
(3, 'East'),
(4, 'South');

-- --------------------------------------------------------

--
-- Table structure for table `timings_table`
--

CREATE TABLE IF NOT EXISTS `timings_table` (
  `Timing_Id` int(11) NOT NULL,
  `Starting_Time` time NOT NULL,
  `Ending_Time` time NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timings_table`
--

INSERT INTO `timings_table` (`Timing_Id`, `Starting_Time`, `Ending_Time`) VALUES
(1, '09:00:00', '12:00:00'),
(2, '02:00:00', '05:00:00'),
(3, '07:00:00', '10:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users_table`
--

CREATE TABLE IF NOT EXISTS `users_table` (
  `User_Id` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `User_Role` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_table`
--

INSERT INTO `users_table` (`User_Id`, `Username`, `Password`, `User_Role`) VALUES
(3, 'altu', 'aptech', 1),
(4, 'sahar', 'aptech', 1),
(5, 'sahar12', 'aptech', 2),
(6, 'sana', 'aptech', 2),
(7, 'Maib', 'aptech', 3),
(9, 'sara', 'aptech', 2),
(10, 'hamza', 'aptech', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`Admin_Id`),
  ADD KEY `User_Id` (`User_Id`);

--
-- Indexes for table `appointments_table`
--
ALTER TABLE `appointments_table`
  ADD PRIMARY KEY (`Appointment_Id`),
  ADD KEY `Patient` (`Patient`,`Doctor`,`Timing`),
  ADD KEY `Doctor` (`Doctor`),
  ADD KEY `Timing` (`Timing`);

--
-- Indexes for table `availability_table`
--
ALTER TABLE `availability_table`
  ADD PRIMARY KEY (`Availability_Id`),
  ADD KEY `Doctors_Name` (`Availability_Doctor`,`Availability`),
  ADD KEY `Available` (`Availability`);

--
-- Indexes for table `available_table`
--
ALTER TABLE `available_table`
  ADD PRIMARY KEY (`Available_Id`);

--
-- Indexes for table `cities_table`
--
ALTER TABLE `cities_table`
  ADD PRIMARY KEY (`City_Id`);

--
-- Indexes for table `comments_table`
--
ALTER TABLE `comments_table`
  ADD PRIMARY KEY (`Comments_Id`);

--
-- Indexes for table `disease_table`
--
ALTER TABLE `disease_table`
  ADD PRIMARY KEY (`Disease_Id`),
  ADD KEY `Disease_Prevention` (`Disease_Prevention`,`Disease_Cure`),
  ADD KEY `Disease_Cure` (`Disease_Cure`);

--
-- Indexes for table `doctors_table`
--
ALTER TABLE `doctors_table`
  ADD PRIMARY KEY (`Doctors_Id`),
  ADD KEY `User_Id` (`User_Id`,`Specialty`,`Location`),
  ADD KEY `Specialty` (`Specialty`),
  ADD KEY `Location` (`Location`);

--
-- Indexes for table `location_table`
--
ALTER TABLE `location_table`
  ADD PRIMARY KEY (`Location_Id`),
  ADD KEY `City` (`City`,`State`),
  ADD KEY `State` (`State`);

--
-- Indexes for table `news_table`
--
ALTER TABLE `news_table`
  ADD PRIMARY KEY (`News_Id`);

--
-- Indexes for table `patient_table`
--
ALTER TABLE `patient_table`
  ADD PRIMARY KEY (`Patient_Id`),
  ADD KEY `User_Id` (`User_Id`);

--
-- Indexes for table `roles_table`
--
ALTER TABLE `roles_table`
  ADD PRIMARY KEY (`Role_Id`);

--
-- Indexes for table `specialty_table`
--
ALTER TABLE `specialty_table`
  ADD PRIMARY KEY (`Specialty_Id`);

--
-- Indexes for table `states_table`
--
ALTER TABLE `states_table`
  ADD PRIMARY KEY (`State_Id`);

--
-- Indexes for table `timings_table`
--
ALTER TABLE `timings_table`
  ADD PRIMARY KEY (`Timing_Id`);

--
-- Indexes for table `users_table`
--
ALTER TABLE `users_table`
  ADD PRIMARY KEY (`User_Id`),
  ADD UNIQUE KEY `Username` (`Username`),
  ADD KEY `Role` (`User_Role`),
  ADD KEY `Username_2` (`Username`),
  ADD KEY `Username_3` (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `Admin_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `appointments_table`
--
ALTER TABLE `appointments_table`
  MODIFY `Appointment_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `availability_table`
--
ALTER TABLE `availability_table`
  MODIFY `Availability_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `available_table`
--
ALTER TABLE `available_table`
  MODIFY `Available_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cities_table`
--
ALTER TABLE `cities_table`
  MODIFY `City_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `comments_table`
--
ALTER TABLE `comments_table`
  MODIFY `Comments_Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `disease_table`
--
ALTER TABLE `disease_table`
  MODIFY `Disease_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `doctors_table`
--
ALTER TABLE `doctors_table`
  MODIFY `Doctors_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `location_table`
--
ALTER TABLE `location_table`
  MODIFY `Location_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `news_table`
--
ALTER TABLE `news_table`
  MODIFY `News_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `patient_table`
--
ALTER TABLE `patient_table`
  MODIFY `Patient_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `roles_table`
--
ALTER TABLE `roles_table`
  MODIFY `Role_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `specialty_table`
--
ALTER TABLE `specialty_table`
  MODIFY `Specialty_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `states_table`
--
ALTER TABLE `states_table`
  MODIFY `State_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `timings_table`
--
ALTER TABLE `timings_table`
  MODIFY `Timing_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users_table`
--
ALTER TABLE `users_table`
  MODIFY `User_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD CONSTRAINT `admin_table_ibfk_1` FOREIGN KEY (`User_Id`) REFERENCES `users_table` (`User_Id`);

--
-- Constraints for table `appointments_table`
--
ALTER TABLE `appointments_table`
  ADD CONSTRAINT `appointments_table_ibfk_1` FOREIGN KEY (`Doctor`) REFERENCES `doctors_table` (`Doctors_Id`),
  ADD CONSTRAINT `appointments_table_ibfk_2` FOREIGN KEY (`Patient`) REFERENCES `patient_table` (`Patient_Id`),
  ADD CONSTRAINT `appointments_table_ibfk_3` FOREIGN KEY (`Timing`) REFERENCES `timings_table` (`Timing_Id`);

--
-- Constraints for table `availability_table`
--
ALTER TABLE `availability_table`
  ADD CONSTRAINT `availability_table_ibfk_1` FOREIGN KEY (`Availability_Doctor`) REFERENCES `doctors_table` (`Doctors_Id`),
  ADD CONSTRAINT `availability_table_ibfk_2` FOREIGN KEY (`Availability`) REFERENCES `available_table` (`Available_Id`);

--
-- Constraints for table `doctors_table`
--
ALTER TABLE `doctors_table`
  ADD CONSTRAINT `doctors_table_ibfk_1` FOREIGN KEY (`Specialty`) REFERENCES `specialty_table` (`Specialty_Id`),
  ADD CONSTRAINT `doctors_table_ibfk_2` FOREIGN KEY (`Location`) REFERENCES `location_table` (`Location_Id`),
  ADD CONSTRAINT `doctors_table_ibfk_3` FOREIGN KEY (`User_Id`) REFERENCES `users_table` (`User_Id`);

--
-- Constraints for table `location_table`
--
ALTER TABLE `location_table`
  ADD CONSTRAINT `location_table_ibfk_1` FOREIGN KEY (`City`) REFERENCES `cities_table` (`City_Id`),
  ADD CONSTRAINT `location_table_ibfk_2` FOREIGN KEY (`State`) REFERENCES `states_table` (`State_Id`);

--
-- Constraints for table `patient_table`
--
ALTER TABLE `patient_table`
  ADD CONSTRAINT `patient_table_ibfk_1` FOREIGN KEY (`User_Id`) REFERENCES `users_table` (`User_Id`);

--
-- Constraints for table `users_table`
--
ALTER TABLE `users_table`
  ADD CONSTRAINT `users_table_ibfk_1` FOREIGN KEY (`User_Role`) REFERENCES `roles_table` (`Role_Id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
