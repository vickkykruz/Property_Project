-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2023 at 02:26 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `propertyproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `propertydetail`
--

CREATE TABLE `propertydetail` (
  `id` int(11) NOT NULL,
  `propertyId` int(11) DEFAULT NULL,
  `bedRoom` int(11) DEFAULT NULL,
  `bathRoom` int(11) DEFAULT NULL,
  `squareF` int(11) DEFAULT NULL,
  `toilet` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `propertydetail`
--

INSERT INTO `propertydetail` (`id`, `propertyId`, `bedRoom`, `bathRoom`, `squareF`, `toilet`) VALUES
(1, 1, 1, 1, 0, 1),
(2, 2, 2, 2, 1, 2),
(3, 3, 5, 4, 3, 4),
(4, 4, 4, 3, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `propertyinfo`
--

CREATE TABLE `propertyinfo` (
  `id` int(11) NOT NULL,
  `catigory` varchar(4) DEFAULT NULL,
  `propertyName` varchar(150) DEFAULT NULL,
  `properyImage` varchar(150) DEFAULT NULL,
  `propertyDesc` text DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `marketStatus` varchar(11) DEFAULT NULL,
  `recommandStatus` varchar(3) DEFAULT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `propertyinfo`
--

INSERT INTO `propertyinfo` (`id`, `catigory`, `propertyName`, `properyImage`, `propertyDesc`, `amount`, `marketStatus`, `recommandStatus`, `Date`) VALUES
(1, 'rent', 'Self contain (s', 'images/houses/house1.jpg', 'Everything here is 10/ 10 good light 24hr light best lekki water clean environment nice neighbour parking space available cooker with oven\r\n', 1800000, 'avaliable', 'yes', '0000-00-00 00:00:00'),
(2, 'rent', '2 Bedroom Flat / Apartment For Rent', 'images/houses/house2.jpg', 'Newly Built 2 bedroom with all rooms ensuite, visitors toilet,all round tiles,water heater,kitchen cabinet,wardrobes,prepaid meter etc.', 100000, 'avaliable', 'yes', '0000-00-00 00:00:00'),
(3, 'rent', '5 Bedroom Detached Duplex For Rent', 'images/houses/house3.jpg', 'Massive compound 5 bedroom fully detached duplex with 2 rooms bq swimming pool and gym also comes with green area features.', 508000, 'avaliable', 'yes', '2023-10-06 15:06:36'),
(4, 'rent', '4 Bedroom Detached Duplex For Rent', 'images/houses/house4.jpg', '4 bedroom semi detached duplex with big in a gated estate with 24 hrs power very clean just like brand new', 500300, 'avaliable', 'yes', '2023-10-06 15:06:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `propertydetail`
--
ALTER TABLE `propertydetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `propertyinfo`
--
ALTER TABLE `propertyinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `propertydetail`
--
ALTER TABLE `propertydetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `propertyinfo`
--
ALTER TABLE `propertyinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
