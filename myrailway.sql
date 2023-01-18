-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2022 at 03:41 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myrailway`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `AdminUsername` varchar(30) NOT NULL,
  `AdminName` varchar(30) NOT NULL,
  `AdminEmail` varchar(40) NOT NULL,
  `Passwords` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`AdminUsername`, `AdminName`, `AdminEmail`, `Passwords`) VALUES
('kaiyum', 'Md. Abdul Kaiyum', 'kaiyum.gub@gmail.com', '1122');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `BookingID` int(11) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `NameOfPassenger` varchar(20) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `Age` int(11) NOT NULL,
  `TrainName` varchar(30) NOT NULL,
  `SeatClass` varchar(10) NOT NULL,
  `BookingDate` date NOT NULL,
  `TotalBookedSeats` int(11) NOT NULL,
  `FromStation` varchar(50) NOT NULL,
  `ToStation` varchar(50) NOT NULL,
  `TravelingDate` date NOT NULL,
  `TotalFare` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`BookingID`, `Username`, `NameOfPassenger`, `Gender`, `Age`, `TrainName`, `SeatClass`, `BookingDate`, `TotalBookedSeats`, `FromStation`, `ToStation`, `TravelingDate`, `TotalFare`) VALUES
(217, 'a_kaiyum', 'Md. Abdul Kaiyum', 'male', 22, 'Azimpur Metro', 'Economical', '2022-08-25', 2, 'Azimpur', 'Green University of Bangladesh', '2022-08-27', 160),
(218, 'a_kaiyum', 'Md. Abdul Kaiyum', 'male', 22, 'Drutojan Metro', 'Standard', '2022-09-02', 2, 'Dhaka', 'Parbatipur', '2022-09-04', 880),
(219, 'a_kaiyum', 'Md. Abdul Kaiyum', 'male', 22, 'Ekota Metro', 'Economical', '2022-09-02', 2, 'Parbatipur', 'Dhaka', '2022-09-04', 1540);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `username` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phoneno` varchar(12) NOT NULL,
  `address` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`username`, `name`, `email`, `phoneno`, `address`, `gender`, `age`) VALUES
('ansarul_islam', 'Ansarul Islam', 'ansarul@gmail.com', '01871376675', 'Dinajpur', 'Male', 27),
('a_kaiyum', 'Md. Abdul Kaiyum', 'kaiyum.gub@gmail.com', '01961859445', 'Azimpur,Dhaka,Bangladesh. Dhaka-1205', 'Male', 22),
('megh_hasan', 'Megh Hasan', 'meghraj4522@gmail.com', '01302347732', 'Dhaka', 'Male', 22),
('sinthia_mitu', 'Sinthia Afrin', 'mitu@gmail.com', '01789213278', 'Kustia', 'Female', 23);

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE `route` (
  `id` int(11) NOT NULL,
  `TrainName` varchar(30) NOT NULL,
  `FromStation` varchar(50) NOT NULL,
  `ToStation` varchar(50) NOT NULL,
  `BusinessClassFare` int(11) NOT NULL,
  `EconomicalClassFare` int(11) NOT NULL,
  `StandardClassFare` int(11) NOT NULL,
  `ArrivalTime` time NOT NULL,
  `DepartureTime` time NOT NULL,
  `TotalDistance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`id`, `TrainName`, `FromStation`, `ToStation`, `BusinessClassFare`, `EconomicalClassFare`, `StandardClassFare`, `ArrivalTime`, `DepartureTime`, `TotalDistance`) VALUES
(1, 'Uttara Metro', 'Uttara ', 'Motijheel', 70, 50, 30, '07:40:00', '07:00:00', 20),
(2, 'Mirpur Metro', 'Mirpur 10', 'Motijheel', 60, 40, 20, '08:40:00', '08:00:00', 15),
(3, 'GUB Metro', 'Green University of Bangladesh', 'Azimpur', 100, 80, 50, '20:30:00', '19:30:00', 18),
(4, 'Azimpur Metro', 'Azimpur', 'Green University of Bangladesh', 100, 80, 50, '08:30:00', '07:30:00', 18),
(5, 'Motijheel Metro', 'Motijheel', 'Uttara ', 70, 50, 30, '11:40:00', '10:00:00', 20),
(6, 'Shabag Metro', 'Shahbag', 'Uttara ', 50, 40, 30, '13:00:00', '14:00:00', 15),
(7, 'Drutojan Metro', 'Dhaka', 'Parbatipur', 1170, 770, 440, '10:00:00', '20:00:00', 330),
(8, 'Ekota Metro', 'Parbatipur', 'Dhaka', 1170, 770, 440, '11:30:00', '21:30:00', 330),
(9, 'Dinajpur Metro', 'Dinajpur', 'Dhaka', 1250, 820, 520, '13:30:00', '23:40:00', 350),
(10, 'Nil Sagor Metro', 'Dhaka', 'Dinajpur', 1250, 820, 520, '07:00:00', '12:00:00', 350),
(11, 'Sundarban Metro', 'Dhaka', 'Kustia', 920, 660, 480, '14:30:00', '08:30:00', 220),
(12, 'Chitra Metro', 'Kustia', 'Dhaka', 920, 660, 480, '10:00:00', '23:30:30', 220);

-- --------------------------------------------------------

--
-- Table structure for table `seatavailablility`
--

CREATE TABLE `seatavailablility` (
  `ID` int(11) NOT NULL,
  `TrainName` varchar(30) NOT NULL,
  `BusinessBookedseats` int(11) DEFAULT NULL,
  `BusinessAvailableseats` int(11) DEFAULT NULL,
  `EconomicalBookedseats` int(11) DEFAULT NULL,
  `EconomicalAvailableseats` int(11) DEFAULT NULL,
  `StandardBookedseats` int(11) DEFAULT NULL,
  `StandardAvailableseats` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seatavailablility`
--

INSERT INTO `seatavailablility` (`ID`, `TrainName`, `BusinessBookedseats`, `BusinessAvailableseats`, `EconomicalBookedseats`, `EconomicalAvailableseats`, `StandardBookedseats`, `StandardAvailableseats`) VALUES
(1, 'Uttara Metro', 0, 50, 0, 80, 0, 150),
(2, 'Mirpur Metro', 0, 50, 0, 80, 0, 150),
(3, 'GUB Metro', 0, 50, 0, 80, 0, 150),
(4, 'Azimpur Metro', 0, 50, 2, 78, 0, 150),
(5, 'Motijheel Metro', 0, 50, 0, 80, 0, 150),
(6, 'Shabag Metro', 0, 50, 0, 80, 0, 150),
(7, 'Drutojan Metro', 0, 50, 0, 80, 2, 148),
(8, 'Ekota Metro', 0, 50, 2, 78, 0, 150),
(9, 'Dinajpur Metro', 0, 50, 0, 80, 0, 150),
(10, 'Nil Sagor Metro', 0, 50, 0, 80, 0, 150),
(11, 'Sundarban Metro', 0, 50, 0, 80, 0, 150),
(12, 'Chitra Metro', 0, 50, 0, 80, 0, 150);

-- --------------------------------------------------------

--
-- Table structure for table `station`
--

CREATE TABLE `station` (
  `StationID` int(11) NOT NULL,
  `StationName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `station`
--

INSERT INTO `station` (`StationID`, `StationName`) VALUES
(7, 'Azimpur'),
(11, 'Chattagram'),
(8, 'Dhaka'),
(9, 'Dinajpur'),
(4, 'Farmgate'),
(3, 'Green University of Bangladesh'),
(12, 'Kustia'),
(2, 'Mirpur 10'),
(5, 'Motijheel'),
(10, 'Parbatipur'),
(6, 'Shahbag'),
(13, 'Sylhet'),
(1, 'Uttara ');

-- --------------------------------------------------------

--
-- Table structure for table `status of booking`
--

CREATE TABLE `status of booking` (
  `booking id` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `trains`
--

CREATE TABLE `trains` (
  `TrainNo` varchar(10) NOT NULL,
  `TrainName` varchar(30) NOT NULL,
  `FromStation` varchar(50) NOT NULL,
  `ToStation` varchar(50) NOT NULL,
  `TotalDistance` int(11) NOT NULL,
  `BusinessSeats` int(11) NOT NULL,
  `EconomicalSeats` int(11) NOT NULL,
  `StandardSeats` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trains`
--

INSERT INTO `trains` (`TrainNo`, `TrainName`, `FromStation`, `ToStation`, `TotalDistance`, `BusinessSeats`, `EconomicalSeats`, `StandardSeats`, `id`) VALUES
('metro-1', 'Uttara Metro', 'Uttara ', 'Motijheel', 20, 50, 80, 150, 1),
('metro-2', 'Mirpur Metro', 'Mirpur 10', 'Motijheel', 15, 50, 80, 150, 2),
('metro-3', 'GUB Metro', 'Green University of Bangladesh', 'Azimpur', 18, 50, 80, 150, 3),
('metro-4', 'Azimpur Metro', 'Azimpur', 'Green University of Bangladesh', 18, 50, 80, 150, 4),
('metro-5', 'Motijheel Metro', 'Motijheel', 'Uttara ', 20, 50, 80, 150, 5),
('metro-6', 'Shabag Metro', 'Shahbag', 'Uttara ', 15, 50, 80, 150, 6),
('metro-7', 'Drutojan Metro', 'Dhaka', 'Parbatipur', 330, 50, 80, 150, 7),
('metro-8', 'Ekota Metro', 'Parbatipur', 'Dhaka', 330, 50, 80, 150, 8),
('metro-9', 'Dinajpur Metro', 'Dinajpur', 'Dhaka', 350, 50, 80, 150, 9),
('metro-10', 'Nil Sagor Metro', 'Dhaka', 'Dinajpur', 350, 50, 80, 150, 10),
('metro-11', 'Sundarban Metro', 'Dhaka', 'Kustia', 220, 50, 80, 150, 11),
('metro-12', 'Chitra Metro', 'Kustia', 'Dhaka', 220, 50, 80, 150, 12);

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `UserID` int(30) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Passwords` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`UserID`, `Username`, `Passwords`) VALUES
(39, 'a_kaiyum', '1122'),
(74, 'sinthia_mitu', '2323'),
(75, 'megh_hasan', '4522'),
(77, 'ansarul_islam', '2222');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`AdminUsername`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`BookingID`),
  ADD KEY `Username` (`Username`),
  ADD KEY `TrainNo` (`TrainName`),
  ADD KEY `FromStation` (`FromStation`),
  ADD KEY `ToStation` (`ToStation`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `route`
--
ALTER TABLE `route`
  ADD PRIMARY KEY (`id`,`TrainName`,`FromStation`,`ToStation`),
  ADD KEY `TrainName` (`TrainName`),
  ADD KEY `FromStation` (`FromStation`),
  ADD KEY `ToStation` (`ToStation`);

--
-- Indexes for table `seatavailablility`
--
ALTER TABLE `seatavailablility`
  ADD KEY `TrainName` (`TrainName`);

--
-- Indexes for table `station`
--
ALTER TABLE `station`
  ADD PRIMARY KEY (`StationID`),
  ADD UNIQUE KEY `StationName` (`StationName`);

--
-- Indexes for table `status of booking`
--
ALTER TABLE `status of booking`
  ADD KEY `booking id` (`booking id`);

--
-- Indexes for table `trains`
--
ALTER TABLE `trains`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `TrainName` (`TrainName`),
  ADD KEY `FromStation` (`FromStation`),
  ADD KEY `ToStation` (`ToStation`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`UserID`,`Username`),
  ADD KEY `Username` (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `BookingID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=220;

--
-- AUTO_INCREMENT for table `route`
--
ALTER TABLE `route`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `station`
--
ALTER TABLE `station`
  MODIFY `StationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `trains`
--
ALTER TABLE `trains`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `UserID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`Username`) REFERENCES `customers` (`username`),
  ADD CONSTRAINT `bookings_ibfk_3` FOREIGN KEY (`FromStation`) REFERENCES `station` (`StationName`),
  ADD CONSTRAINT `bookings_ibfk_4` FOREIGN KEY (`ToStation`) REFERENCES `station` (`StationName`);

--
-- Constraints for table `route`
--
ALTER TABLE `route`
  ADD CONSTRAINT `route_ibfk_1` FOREIGN KEY (`FromStation`) REFERENCES `station` (`StationName`),
  ADD CONSTRAINT `route_ibfk_2` FOREIGN KEY (`ToStation`) REFERENCES `station` (`StationName`);

--
-- Constraints for table `seatavailablility`
--
ALTER TABLE `seatavailablility`
  ADD CONSTRAINT `seatavailablility_ibfk_1` FOREIGN KEY (`TrainName`) REFERENCES `trains` (`TrainName`);

--
-- Constraints for table `status of booking`
--
ALTER TABLE `status of booking`
  ADD CONSTRAINT `status of booking_ibfk_1` FOREIGN KEY (`booking id`) REFERENCES `bookings` (`BookingID`);

--
-- Constraints for table `trains`
--
ALTER TABLE `trains`
  ADD CONSTRAINT `trains_ibfk_1` FOREIGN KEY (`FromStation`) REFERENCES `station` (`StationName`),
  ADD CONSTRAINT `trains_ibfk_2` FOREIGN KEY (`ToStation`) REFERENCES `station` (`StationName`);

--
-- Constraints for table `user_login`
--
ALTER TABLE `user_login`
  ADD CONSTRAINT `user_login_ibfk_1` FOREIGN KEY (`Username`) REFERENCES `customers` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
