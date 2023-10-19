-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2023 at 08:46 AM
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
-- Table structure for table `duration_table`
--

CREATE TABLE `duration_table` (
  `id` int(11) NOT NULL,
  `propertyId` int(11) DEFAULT NULL,
  `checkin` date DEFAULT NULL,
  `checkout` date DEFAULT NULL,
  `adult` int(11) DEFAULT NULL,
  `child` int(11) DEFAULT NULL,
  `room` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `duration_table`
--

INSERT INTO `duration_table` (`id`, `propertyId`, `checkin`, `checkout`, `adult`, `child`, `room`) VALUES
(1, 3, '2023-10-02', '2023-11-14', 2, 1, 1),
(2, 2, '2023-10-16', '2023-11-06', 1, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `id` int(11) NOT NULL,
  `propertyId` int(11) DEFAULT NULL,
  `revseredId` int(11) DEFAULT NULL,
  `type` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `facilities_infos`
--

CREATE TABLE `facilities_infos` (
  `id` int(11) NOT NULL,
  `details` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
-- Table structure for table `propertyimages`
--

CREATE TABLE `propertyimages` (
  `id` int(11) NOT NULL,
  `properyId` int(11) DEFAULT NULL,
  `reservedId` int(11) DEFAULT NULL,
  `images` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `propertyimages`
--

INSERT INTO `propertyimages` (`id`, `properyId`, `reservedId`, `images`) VALUES
(1, 3, NULL, 'images/home/ABJ/home_images/home_one1.jpg'),
(2, 3, NULL, 'images/home/ABJ/home_images/home_one2.jpg'),
(3, 3, NULL, 'images/home/ABJ/home_images/home_one3.jpg'),
(4, 3, NULL, 'images/home/ABJ/home_images/home_one4.jpg'),
(5, 3, NULL, 'images/home/ABJ/home_images/home_one5.jpg'),
(6, 3, NULL, 'images/home/ABJ/home_images/home_one6.jpg');

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
  `state` varchar(50) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `marketStatus` varchar(11) DEFAULT NULL,
  `recommandStatus` varchar(3) DEFAULT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `propertyinfo`
--

INSERT INTO `propertyinfo` (`id`, `catigory`, `propertyName`, `properyImage`, `propertyDesc`, `amount`, `state`, `address`, `marketStatus`, `recommandStatus`, `Date`) VALUES
(1, 'Rent', 'Armed Forces Officers Mess Asokoro', 'images/home/ABJ/home_one.webp', 'Located in Abuja, 3.9 miles from IBB Golf Club, Armed Forces Officers Mess Asokoro has accommodations with an outdoor swimming pool, free private parking, a fitness center and a garden. Each room at the 5-star hotel has garden views, and guests can enjoy access to a restaurant and to a bar. The property provides a 24-hour front desk, airport transportation, room service and free WiFi throughout the property. <br> At the hotel rooms include air conditioning, a desk, a terrace with a pool view, a private bathroom, a flat-screen TV, bed linen and towels. Each room comes with a safety deposit box, while certain rooms have a balcony and others also feature city views. The rooms will provide guests with a closet and an electric tea pot. <br> A buffet, continental or Full English/Irish breakfast is served at the property. <br> Magic Land Abuja is 8.7 miles from Armed Forces Officers Mess Asokoro. The nearest airport is Nnamdi Azikiwe International Airport, 22 miles from the accommodation.', 430983, 'Abuja', 'Armed Forces Officers Mess Asokoro 3GP9+48G, 900103, After Lungi Baracks, Abuja, Federal Capital Territory, 900103 Abuja, Nigeria', 'available', 'No', '2023-10-16 15:15:50'),
(2, 'Rent', 'Pinkish By RiAva', 'images/home/ABJ/home_two.webp', 'Located 7.1 miles from Magic Land Abuja, Pinkish By RiAva has accommodations with free Wifi and free private parking. <br> Some units have a terrace and/or a balcony with mountain views. <br> IBB Golf Club is 9.4 miles from the bed and breakfast. The nearest airport is Nnamdi Azikiwe International Airport, 16 miles from Pinkish By RiAva.', 441452, 'Abuja', 'Olanrewaju Smart Wasiu Street, 900108 Abuja, Nigeria', 'available', 'No', '2023-10-16 15:22:15'),
(3, 'Rent', 'SHORTLETFOREXPATRIATES', 'images/home/ABJ/home_three.webp', 'Located 10 miles from IBB Golf Club and 11 miles from Magic Land Abuja, SHORTLETFOREXPATRIATES offers accommodations with a kitchen in Abuja. This property has a balcony, free private parking and free Wifi. <br> This 2-bedroom apartment will provide you with a flat-screen TV, air conditioning and a living room. <br> The nearest airport is Nnamdi Azikiwe International Airport, 17 miles from the apartment.', 237302, 'Abuja', 'HORTLETFOREXPATRIATES  Regent service apartment katampe extension Block C2, 900108 Abuja, Nigeria', 'available', 'No', '2023-10-16 15:29:35'),
(4, 'Rent', '4 Bedroom Brains and Hammers', 'images/home/ABJ/home_four.webp', '4 Bedroom Brains and Hammers offers accommodations in Abuja, 5.5 miles from Magic Land Abuja and 12 miles from IBB Golf Club. This property has a balcony, free private parking and free Wifi. <br> Opening onto a terrace with garden views, the air-conditioned vacation home consists of 4 bedrooms and a fully equipped kitchen. A flat-screen TV is provided.\n <br> The nearest airport is Nnamdi Azikiwe International Airport, 12 miles from the vacation home', 209385, 'Abuja', 'Life Camp, 900108 Abuja, Nigeria', 'available', 'No', '2023-10-16 15:36:48');

-- --------------------------------------------------------

--
-- Table structure for table `room_prices`
--

CREATE TABLE `room_prices` (
  `id` int(11) NOT NULL,
  `roomId` int(11) DEFAULT NULL,
  `priceFor` int(11) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room_prices`
--

INSERT INTO `room_prices` (`id`, `roomId`, `priceFor`, `amount`) VALUES
(1, 1, 3, 234549),
(2, 1, 4, 248346),
(3, 1, 5, 275940),
(4, 1, 2, 220752);

-- --------------------------------------------------------

--
-- Table structure for table `room_type`
--

CREATE TABLE `room_type` (
  `id` int(11) NOT NULL,
  `propertyId` int(11) DEFAULT NULL,
  `propertyTitle` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room_type`
--

INSERT INTO `room_type` (`id`, `propertyId`, `propertyTitle`) VALUES
(1, 3, 'Two-Bedroom Apartment');

-- --------------------------------------------------------

--
-- Table structure for table `special_reserve`
--

CREATE TABLE `special_reserve` (
  `id` int(11) NOT NULL,
  `propertyId` int(11) NOT NULL,
  `roomType` int(11) NOT NULL,
  `priceFor` int(11) NOT NULL,
  `noBed` int(11) NOT NULL,
  `propertyDesc` int(11) NOT NULL,
  `checkIn` int(11) NOT NULL,
  `checkOut` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `duration_table`
--
ALTER TABLE `duration_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facilities_infos`
--
ALTER TABLE `facilities_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `propertydetail`
--
ALTER TABLE `propertydetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `propertyimages`
--
ALTER TABLE `propertyimages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `propertyinfo`
--
ALTER TABLE `propertyinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_prices`
--
ALTER TABLE `room_prices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_type`
--
ALTER TABLE `room_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `special_reserve`
--
ALTER TABLE `special_reserve`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `duration_table`
--
ALTER TABLE `duration_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `facilities_infos`
--
ALTER TABLE `facilities_infos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `propertydetail`
--
ALTER TABLE `propertydetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `propertyimages`
--
ALTER TABLE `propertyimages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `propertyinfo`
--
ALTER TABLE `propertyinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `room_prices`
--
ALTER TABLE `room_prices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `room_type`
--
ALTER TABLE `room_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `special_reserve`
--
ALTER TABLE `special_reserve`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
