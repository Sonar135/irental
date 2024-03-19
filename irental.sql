-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2024 at 12:12 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `irental`
--

-- --------------------------------------------------------

--
-- Table structure for table `cargo`
--

CREATE TABLE `cargo` (
  `id` int(11) NOT NULL,
  `car_name` varchar(255) DEFAULT NULL,
  `plate_no` varchar(255) DEFAULT NULL,
  `driver_name` varchar(255) DEFAULT NULL,
  `driver_no` varchar(255) DEFAULT NULL,
  `image` varchar(25566) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `cargo`
--

INSERT INTO `cargo` (`id`, `car_name`, `plate_no`, `driver_name`, `driver_no`, `image`) VALUES
(1, 'white truck', 'jdh94827ju', 'john krueger', '09073526498', 'white_truck.png'),
(2, 'F-450', 'hhu8873ll9', 'kenneth johnson', '07098264719', 'orange_truck.png'),
(3, 'FF-012', 'VVA7834GA8', 'somto james', '08167482953', 'image (1).png'),
(4, 'FF-21', 'ZR-021', 'matthew chris', '09174639824', 'cargo-truck-png-transparent-image-cargo-truck-11563648003ojyusvbb2h-removebg-preview.png'),
(5, 'CR-7a', 'QRT-089', 'gabriel augustine', '07073629816', 'yellow-truck-white-background-with-shadow-generative-ai_955884-13220_11zon-removebg-preview.png'),
(6, 'FF-018', 'ZRT-018', 'hristopher nolan', '09073629841', 'ff018.png'),
(7, 'FF-098', 'ZRT-098', 'selena gomez', '08037461930', 'ff-098.png'),
(8, 'FF-123', 'ZRT-123', 'james emmanuel', '09123456789', 'ff-123.png'),
(9, 'FF-308', 'ZRT-308', 'johnson something', '09036481030', 'ff-308.png');

-- --------------------------------------------------------

--
-- Table structure for table `cargo_services`
--

CREATE TABLE `cargo_services` (
  `id` int(11) NOT NULL,
  `customer` varchar(255) DEFAULT NULL,
  `car_name` varchar(255) DEFAULT NULL,
  `plate` varchar(255) DEFAULT NULL,
  `driver_name` varchar(255) DEFAULT NULL,
  `arrival_date` varchar(255) DEFAULT NULL,
  `arrival_time` varchar(255) DEFAULT NULL,
  `pickup_location` varchar(255) DEFAULT NULL,
  `drop_location` varchar(255) DEFAULT NULL,
  `booking_time` varchar(255) DEFAULT NULL,
  `customer_no` varchar(255) DEFAULT NULL,
  `car_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `cargo_services`
--

INSERT INTO `cargo_services` (`id`, `customer`, `car_name`, `plate`, `driver_name`, `arrival_date`, `arrival_time`, `pickup_location`, `drop_location`, `booking_time`, `customer_no`, `car_id`) VALUES
(1, 'vefidi135@gmail.com', 'F-450', 'hhu8873ll9', 'kenneth johnson', '2024-02-10', '09:14', 'magodo', 'magodo', '2024-02-01 09:15:00', '08109495127', '2');

-- --------------------------------------------------------

--
-- Table structure for table `rental_cars`
--

CREATE TABLE `rental_cars` (
  `id` int(11) NOT NULL,
  `car_name` varchar(255) DEFAULT NULL,
  `plate_no` varchar(255) DEFAULT NULL,
  `image` varchar(25566) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `rental_cars`
--

INSERT INTO `rental_cars` (`id`, `car_name`, `plate_no`, `image`) VALUES
(1, 'hyundai', 'qqu7820o87', 'download-removebg-preview (9)'),
(2, 'nissan', 'krd889-ljk', 'download-removebg-preview (10)'),
(3, 'kia', 'tyr678hjn6', 'download-removebg-preview (11)'),
(4, 'mlp', 'ZT6359ikju', 'download-removebg-preview (12)'),
(5, 'toyota GR-8', 'KRD1874mjg', 'download-removebg-preview (13)'),
(6, 'Toyota Hybrid', 'ZTR-476-JLKU', 'download-removebg-preview (14)'),
(7, 'Toyota Prius', 'ZTR098ADRE', 'istockphoto-970028668-612x612-removebg-preview'),
(8, 'Hyundai Elantra', 'ASDF-8763-OP', 'istockphoto-1148853697-612x612-removebg-preview'),
(9, 'Hyundai Accent', 'GFD-HDA-8762', 'image1_0-removebg-preview');

-- --------------------------------------------------------

--
-- Table structure for table `rental_services`
--

CREATE TABLE `rental_services` (
  `id` int(11) NOT NULL,
  `customer` varchar(255) DEFAULT NULL,
  `car_name` varchar(255) DEFAULT NULL,
  `plate` varchar(255) DEFAULT NULL,
  `start_date` varchar(255) DEFAULT NULL,
  `end_date` varchar(500) NOT NULL,
  `arrival_time` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `customer_no` varchar(255) DEFAULT NULL,
  `car_id` varchar(255) DEFAULT NULL,
  `booking_time` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `rental_services`
--

INSERT INTO `rental_services` (`id`, `customer`, `car_name`, `plate`, `start_date`, `end_date`, `arrival_time`, `location`, `customer_no`, `car_id`, `booking_time`) VALUES
(1, 'vefidi135@gmail.com', 'nissan', 'krd889-ljk', '2024-01-30', '2024-02-06', '01:50', 'magodo', '08109495127', '2', '2024-02-01 13:48:27'),
(2, 'vefidi135@gmail.com', 'hyundai', 'qqu7820o87', '2024-01-30', '2024-02-19', '13:51', 'magodo', '08109495127', '1', '2024-02-01 13:50:11'),
(3, 'vefidi135@gmail.com', 'nissan', 'krd889-ljk', '2024-02-28', '2024-02-05', '13:54', 'magodo', '08109495127', '2', '2024-02-01 13:52:31');

-- --------------------------------------------------------

--
-- Table structure for table `taxi_cars`
--

CREATE TABLE `taxi_cars` (
  `id` int(11) NOT NULL,
  `car_name` varchar(255) DEFAULT NULL,
  `plate_no` varchar(255) DEFAULT NULL,
  `driver_no` varchar(255) DEFAULT NULL,
  `driver_name` varchar(255) DEFAULT NULL,
  `image` varchar(2557) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `taxi_cars`
--

INSERT INTO `taxi_cars` (`id`, `car_name`, `plate_no`, `driver_no`, `driver_name`, `image`) VALUES
(1, 'toyota camry', 'zcr2893jut', '09076341098', 'Michael Ogumah', 'download-removebg-preview'),
(2, 'toyota camry', 'KRD33912', '08108747264', 'jacob christian', 'download-removebg-preview (1)'),
(3, 'mercedez benz', 'KRD37j18', '08063892343', 'Nathan Gideon', 'download-removebg-preview (3)'),
(4, 'Hyundai Cross', 'ZTPO-89473C', '09074638294', 'caleb prince', 'download-removebg-preview (6).png'),
(5, 'Hyundai Velaro', 'KRD-989-HYU9', '07092637198', 'sunday ola', 'download-removebg-preview (7).png'),
(6, 'Honda City', 'ZIO-UIO-908-P', '08194639826', 'heritage isaac', 'download-removebg-preview (8).png'),
(7, 'Honda Civic', 'ART-090-UIO-2', '09073562763', 'chris emmanuel', 'download-removebg-preview (5)'),
(8, 'Hundai Celantro', 'ZXC-PKL-UYT-B', '09084725381', 'Fortune Christopher', 'download-removebg-preview (4).png'),
(9, 'Toyota Corolla', 'DFG-PCE-CXD-0', '08164729835', 'david ola', 'download-removebg-preview (2).png');

-- --------------------------------------------------------

--
-- Table structure for table `taxi_services`
--

CREATE TABLE `taxi_services` (
  `id` int(11) NOT NULL,
  `customer` varchar(255) DEFAULT NULL,
  `car_name` varchar(255) DEFAULT NULL,
  `plate` varchar(255) DEFAULT NULL,
  `driver_name` varchar(255) DEFAULT NULL,
  `arrival_date` varchar(255) DEFAULT NULL,
  `arrival_time` varchar(255) DEFAULT NULL,
  `location` varchar(25555) DEFAULT NULL,
  `booking_time` varchar(255) DEFAULT NULL,
  `customer_no` varchar(677) NOT NULL,
  `car_id` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `taxi_services`
--

INSERT INTO `taxi_services` (`id`, `customer`, `car_name`, `plate`, `driver_name`, `arrival_date`, `arrival_time`, `location`, `booking_time`, `customer_no`, `car_id`) VALUES
(1, 'vefidi135@gmail.com', 'mercedez benz', 'KRD37j18', 'Nathan Gideon', '2024-02-17', '18:03', 'magodo', '2024-02-01 17:02:47', '08109495127', '3'),
(2, 'vefidi135@gmail.com', 'Hyundai Velaro', 'KRD-989-HYU9', 'sunday ola', '2024-02-16', '09:30', 'tee-tops', '2024-02-02 17:26:24', '08109495127', '5');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Fname` varchar(255) DEFAULT NULL,
  `Lname` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Fname`, `Lname`, `phone`, `email`, `password`) VALUES
(1, 'Victor', 'okechukwu', '08109495127', 'vefidi135@gmail.com', '$2y$10$p6NcQCA0kmpOLVjfTUj.bOmiWoaEAGjJQOU5KCVBNBwcc9XANMhDK'),
(2, 'Victor', 'okechukwu', '08109495127', 'wilson@gmail.com', '$2y$10$wkt26SiNHGvAL9RvSlEV0uAQCo5X2hNoqMxcWt9kwkEPoCbzvX9vK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cargo_services`
--
ALTER TABLE `cargo_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rental_cars`
--
ALTER TABLE `rental_cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rental_services`
--
ALTER TABLE `rental_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taxi_cars`
--
ALTER TABLE `taxi_cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taxi_services`
--
ALTER TABLE `taxi_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cargo`
--
ALTER TABLE `cargo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cargo_services`
--
ALTER TABLE `cargo_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rental_cars`
--
ALTER TABLE `rental_cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `rental_services`
--
ALTER TABLE `rental_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `taxi_cars`
--
ALTER TABLE `taxi_cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `taxi_services`
--
ALTER TABLE `taxi_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
