-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2024 at 12:16 PM
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
  `price` varchar(255) DEFAULT NULL,
  `driver_no` varchar(255) DEFAULT NULL,
  `image` varchar(25566) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `cargo`
--

INSERT INTO `cargo` (`id`, `car_name`, `plate_no`, `price`, `driver_no`, `image`) VALUES
(1, 'white truck', 'jdh94827ju', '2000', '09073526498', '1000_F_211970322_UvUwWvox6YWcNTRDG35QWDYVyT7wmBS6-removebg-preview.png'),
(2, 'F-450', 'hhu8873ll9', '3000', '07098264719', 'depositphotos_207715714-stock-photo-modern-orange-truck-orange-trailer-removebg-preview.png'),
(3, 'FF-012', 'VVA7834GA8', '3000', '08167482953', 'istockphoto-1058465270-1024x1024-removebg-preview.png'),
(4, 'FF-21', 'ZR-021', '2000', '09174639824', 'delivery-truck-600nw-25848550-removebg-preview.png'),
(5, 'CR-7a', 'QRT-089', '3500', '07073629816', 'download-removebg-preview (4).png'),
(6, 'FF-018', 'ZRT-018', '1300', '09073629841', 'download-removebg-preview (3).png'),
(7, 'FF-098', 'ZRT-098', '3000', '08037461930', 'download-removebg-preview (2).png'),
(8, 'FF-123', 'ZRT-123', '4000', '09123456789', 'download-removebg-preview (1).png'),
(9, 'FF-308', 'ZRT-308', '2500', '09036481030', 'download-removebg-preview.png');

-- --------------------------------------------------------

--
-- Table structure for table `cargo_services`
--

CREATE TABLE `cargo_services` (
  `id` int(11) NOT NULL,
  `customer` varchar(255) DEFAULT NULL,
  `car_name` varchar(255) DEFAULT NULL,
  `plate` varchar(255) DEFAULT NULL,
  `arrival_date` varchar(255) DEFAULT NULL,
  `arrival_time` varchar(255) DEFAULT NULL,
  `pickup_location` varchar(255) DEFAULT NULL,
  `drop_location` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `cargo_services`
--

INSERT INTO `cargo_services` (`id`, `customer`, `car_name`, `plate`, `arrival_date`, `arrival_time`, `pickup_location`, `drop_location`) VALUES
(1, 'vefidi135@gmail.com', 'F-450', 'hhu8873ll9', '2024-02-10', '09:14', 'magodo', 'magodo'),
(2, 'wilson@gmail.com', 'FF-308', 'ZRT-308', '2024-03-18', '12:21', 'magodo', 'magodo');

-- --------------------------------------------------------

--
-- Table structure for table `rental_cars`
--

CREATE TABLE `rental_cars` (
  `id` int(11) NOT NULL,
  `car_name` varchar(255) DEFAULT NULL,
  `plate_no` varchar(255) DEFAULT NULL,
  `image` varchar(25566) NOT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `rental_cars`
--

INSERT INTO `rental_cars` (`id`, `car_name`, `plate_no`, `image`, `price`) VALUES
(1, 'hyundai', 'qqu7820o87', 'download-removebg-preview (9).png', '10000'),
(2, 'nissan', 'krd889-ljk', 'download-removebg-preview (10).png', '8000'),
(3, 'kia', 'tyr678hjn6', 'download-removebg-preview (11).png', '9000'),
(4, 'mlp', 'ZT6359ikju', 'download-removebg-preview (12).png', '6000'),
(5, 'toyota GR-8', 'KRD1874mjg', 'download-removebg-preview (13).png', '9000'),
(6, 'Toyota Hybrid', 'ZTR-476-JLKU', 'download-removebg-preview (14).png', '9600'),
(7, 'Toyota Prius', 'ZTR098ADRE', 'istockphoto-970028668-612x612-removebg-preview.png', '8000'),
(8, 'Hyundai Elantra', 'ASDF-8763-OP', 'istockphoto-1148853697-612x612-removebg-preview.png', '12000'),
(9, 'Hyundai Accent', 'GFD-HDA-8762', 'image1_0-removebg-preview.png', '');

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
  `location` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `rental_services`
--

INSERT INTO `rental_services` (`id`, `customer`, `car_name`, `plate`, `start_date`, `end_date`, `location`) VALUES
(1, 'vefidi135@gmail.com', 'nissan', 'krd889-ljk', '2024-01-30', '2024-02-06', 'magodo'),
(2, 'vefidi135@gmail.com', 'hyundai', 'qqu7820o87', '2024-01-30', '2024-02-19', 'magodo'),
(3, 'vefidi135@gmail.com', 'nissan', 'krd889-ljk', '2024-02-28', '2024-02-05', 'magodo'),
(4, 'wilson@gmail.com', 'Hyundai Accent', 'GFD-HDA-8762', '2024-03-29', '2024-03-29', 'magodo'),
(5, 'wilson@gmail.com', 'Hyundai Accent', 'GFD-HDA-8762', '2024-03-29', '2024-03-29', 'magodo');

-- --------------------------------------------------------

--
-- Table structure for table `taxi_cars`
--

CREATE TABLE `taxi_cars` (
  `id` int(11) NOT NULL,
  `car_name` varchar(255) DEFAULT NULL,
  `plate_no` varchar(255) DEFAULT NULL,
  `driver_no` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `image` varchar(2557) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `taxi_cars`
--

INSERT INTO `taxi_cars` (`id`, `car_name`, `plate_no`, `driver_no`, `price`, `image`) VALUES
(1, 'toyota camry', 'zcr2893jut', '09076341098', '2000', 'download-removebg-preview.png'),
(2, 'toyota camry', 'KRD33912', '08108747264', '1200', 'download-removebg-preview (1).png'),
(3, 'mercedez benz', 'KRD37j18', '08063892343', '2300', 'download-removebg-preview (3).png'),
(4, 'Hyundai Cross', 'ZTPO-89473C', '09074638294', '3000', 'download-removebg-preview (6).png'),
(5, 'Hyundai Velaro', 'KRD-989-HYU9', '07092637198', '2000', 'download-removebg-preview (7).png'),
(6, 'Honda City', 'ZIO-UIO-908-P', '08194639826', '1500', 'download-removebg-preview (8).png'),
(7, 'Honda Civic', 'ART-090-UIO-2', '09073562763', '1320', 'download-removebg-preview (5).png'),
(8, 'Hundai Celantro', 'ZXC-PKL-UYT-B', '09084725381', '2300', 'download-removebg-preview (4).png'),
(9, 'Toyota Corolla', 'DFG-PCE-CXD-0', '08164729835', '2000', 'download-removebg-preview (2).png');

-- --------------------------------------------------------

--
-- Table structure for table `taxi_services`
--

CREATE TABLE `taxi_services` (
  `id` int(11) NOT NULL,
  `customer` varchar(255) DEFAULT NULL,
  `car_name` varchar(255) DEFAULT NULL,
  `plate` varchar(255) DEFAULT NULL,
  `arrival_date` varchar(255) DEFAULT NULL,
  `arrival_time` varchar(255) DEFAULT NULL,
  `location` varchar(25555) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `taxi_services`
--

INSERT INTO `taxi_services` (`id`, `customer`, `car_name`, `plate`, `arrival_date`, `arrival_time`, `location`) VALUES
(1, 'vefidi135@gmail.com', 'mercedez benz', 'KRD37j18', '2024-02-17', '18:03', 'magodo'),
(2, 'vefidi135@gmail.com', 'Hyundai Velaro', 'KRD-989-HYU9', '2024-02-16', '09:30', 'tee-tops'),
(3, '', 'Honda Civic', 'ART-090-UIO-2', '2024-03-06', '11:44', 'magodo'),
(4, 'wilson@gmail.com', 'Hundai Celantro', 'ZXC-PKL-UYT-B', '2024-03-29', '11:47', 'magodo');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rental_cars`
--
ALTER TABLE `rental_cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `rental_services`
--
ALTER TABLE `rental_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `taxi_cars`
--
ALTER TABLE `taxi_cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `taxi_services`
--
ALTER TABLE `taxi_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
