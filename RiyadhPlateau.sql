-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 08, 2021 at 01:39 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `RiyadhPlateau`
--

-- --------------------------------------------------------

--
-- Table structure for table `Items`
--

CREATE TABLE `Items` (
  `Item_ID` varchar(7) NOT NULL,
  `category` varchar(15) NOT NULL,
  `price` int(8) NOT NULL,
  `Area` varchar(10) NOT NULL,
  `Name` varchar(15) NOT NULL,
  `Number_of_Rooms` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Items`
--

INSERT INTO `Items` (`Item_ID`, `category`, `price`, `Area`, `Name`, `Number_of_Rooms`) VALUES
('IT0000', 'Villa', 10000, '300x500', 'Plateau Villa', 10),
('IT0001', 'Studio', 4000, '11x11', 'Studio99', 2),
('IT0002', 'Studio', 2800, '12x9', 'Studio56', 2),
('IT0003', 'Studio', 2400, '14x10', 'Studio11', 3),
('IT0004', 'Condos', 8000, '30x47', 'Condos23', 4),
('IT0005', 'Condos', 3000, '40x80', 'Condos44', 4),
('IT0006', 'Condos', 6000, '40x80', 'Condos78', 3);

-- --------------------------------------------------------

--
-- Table structure for table `Rent`
--

CREATE TABLE `Rent` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `DOB` varchar(50) NOT NULL,
  `N_ID` int(11) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `IName` varchar(50) NOT NULL,
  `IID` varchar(50) NOT NULL,
  `RentStart` date NOT NULL,
  `RentEnd` date NOT NULL,
  `Comments` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Rent`
--

INSERT INTO `Rent` (`ID`, `Name`, `DOB`, `N_ID`, `Phone`, `Email`, `IName`, `IID`, `RentStart`, `RentEnd`, `Comments`) VALUES
(1, 'Lateefah', '2000-02-16', 1234567890, '+966123456789', 'L@gmail.com', 'Plateau villa', 'IT0000', '2021-04-08', '2021-04-15', ''),
(2, 'Nora', '1999-11-25', 1234567890, '+966123456789', 'N@gmail.com', 'studio99', 'IT0001', '2021-05-01', '2022-04-30', ''),
(3, 'Reem', '1999-11-25', 1234567890, '+966123456789', 'R@gmail.com', 'condos44', 'IT0005', '2021-05-05', '2021-10-14', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Items`
--
ALTER TABLE `Items`
  ADD PRIMARY KEY (`Item_ID`);

--
-- Indexes for table `Rent`
--
ALTER TABLE `Rent`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Rent`
--
ALTER TABLE `Rent`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
