-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: May 30, 2024 at 11:10 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carrental`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `book_id` int(20) NOT NULL,
  `userid` int(20) NOT NULL,
  `vehicle_id` int(30) NOT NULL,
  `rs_date` date NOT NULL,
  `re_date` date NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`book_id`, `userid`, `vehicle_id`, `rs_date`, `re_date`, `status`) VALUES
(28, 20, 7, '2024-05-31', '2024-06-08', 'Booking Confirmed');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(50) NOT NULL,
  `brand_name` varchar(30) NOT NULL,
  `image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_name`, `image`) VALUES
(1, 'mercedes', 'mercedes1.JPG'),
(2, 'lamborghini', 'lamborghini1.JPG'),
(3, 'audi', 'audi1.JPG'),
(4, 'BMW', 'bmw1.JPG'),
(5, 'ford', 'ford1.JPG'),
(6, 'Porsche', 'porsche1.JPG'),
(9, 'Volkswagen', 'volkswagen.JPG'),
(10, 'Lexus', 'lexus1.JPG'),
(13, 'Toyota', 'toyota.JPG'),
(14, 'Honda', 'honda1.JPG'),
(15, 'Renault', 'renault1.JPG'),
(16, 'Suzuki', 'suzuki1.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'jok', 'jok@jok.com', 'what is this', 'HI'),
(3, 'gyan', 'gyan@gmail.com', 'wonderfull', 'nice work'),
(4, 'Abin', 'abin@gmail.com', 'About Car ', 'Its good');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `rev_id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `site_rev` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `image` varchar(300) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` text DEFAULT NULL,
  `phno` int(11) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `licenceno` varchar(15) DEFAULT NULL,
  `adharno` int(20) DEFAULT NULL,
  `usertype` varchar(50) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `image`, `name`, `address`, `phno`, `dob`, `email`, `password`, `gender`, `licenceno`, `adharno`, `usertype`) VALUES
(1, '-353974024.jpg', 'saad', '   kodugalloor po', 963258741, '2000-05-17', 'saad@gmail.com', 'saad', 'Male', NULL, NULL, 'admin'),
(20, 'Tanjiro.jpg', 'Abin', ' Chemmayath House', 2147483647, '2000-02-11', 'abin@gmail.com', 'aa', 'Male', '3456789', 3456789, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `vehicle_id` int(30) NOT NULL,
  `brand_id` int(30) NOT NULL,
  `car_title` varchar(30) NOT NULL,
  `brand_name` varchar(50) NOT NULL,
  `car_type` varchar(20) NOT NULL,
  `car_color` varchar(15) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `fuel` varchar(10) NOT NULL,
  `model_year` int(5) NOT NULL,
  `seating_capacity` int(10) NOT NULL,
  `transmission` varchar(30) NOT NULL,
  `door` int(20) NOT NULL,
  `image1` varchar(150) NOT NULL,
  `image2` varchar(150) NOT NULL,
  `image3` varchar(150) NOT NULL,
  `accessories` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`vehicle_id`, `brand_id`, `car_title`, `brand_name`, `car_type`, `car_color`, `description`, `price`, `fuel`, `model_year`, `seating_capacity`, `transmission`, `door`, `image1`, `image2`, `image3`, `accessories`) VALUES
(1, 1, 'mercedes Benz GLS', 'mercedes', 'sedan', 'black', 'powerfull performance', 85000.00, 'Petrol', 2019, 4, 'Manual', 4, 'wp9888223-mercedes-benz-gls-wallpapers.jpg', 'wp2082021-mercedes-benz-gls-wallpapers.jpg', 'mercedes benz GLS inside.jpg', 'Air Conditioner,Power Door Lock,Child Seat,AntiLock Braking System,Brake Assist,'),
(2, 3, 'audi', 'audi', 'sedan', 'black', 'powerfull', 1000.00, 'Petrol', 2018, 4, '', 0, 'audi-r8-v10.jpg', 'audi_r8_gt2-1920x1080.jpg', 'audi_r8_2011-1920x1200.jpg', 'air conditioner\r\npower steering'),
(3, 1, 'mercedes AMG', 'mercedes', 'sedan', 'black', 'powerfull stylish', 500.00, 'Diesel', 2019, 2, '', 0, 'royal_mercedes_benz-1920x1080.jpg', 'mercedes_benz_amg_vision_gran_turismo-1600x900.jpg', 'Mercedes Amg Gt 2015.jpg', 'powersteering\r\nairbag'),
(4, 4, 'BMW M3', 'BMW', 'sedan', 'blue', 'powerfull ', 800.00, 'Diesel', 2019, 4, '', 0, 'vorsteiner-gts-bmw-m-276642.jpg', 'Bmw Pininfarina Gran Lusso Coupe.jpg', 'Bmw Pininfarina Gran Lusso Coupe.jpg', 'power steering\r\nair conditioner\r\nairbag'),
(5, 7, 'ford', 'ford', 'hachback', 'black', 'powerfull', 8000.00, 'Petrol', 2019, 4, '', 0, 'ford_shelby_gt500_car-1920x1080.jpg', 'ford-mustang-gt500-1600x900.jpg', 'ford-mustang-gt500-1600x900.jpg', ' Bike Bike Bike Bike'),
(6, 7, 'ford', 'ford', 'hachback', 'black', 'ififig', 8000.00, 'Petrol', 2019, 4, '', 0, '-1368931998.jpg', '2014_audi_r8_v10_spyder_regula_tuning-1440x900 - Copy.jpg', '1601815064.jpg', ' air conditioner powersteering'),
(7, 2, 'lamborghini', 'lamborghini', 'hachback', 'black', 'jyfurur', 9000.00, 'Petrol', 2016, 4, '', 0, 'lamborghini_aventador_art-wide.jpg', 'lamborghini_aventador_j-1600x900.jpg', 'lamborghini_aventador_j-1600x900.jpg', ' air conditioner powersteering powerdoorlock driverairbag'),
(8, 5, 'Ford MUSTANG', 'ford', 'SPORTS CAR', 'black', 'most powerfull car', 5000.00, 'Petrol', 2005, 4, 'Automatic', 4, 'ford_mustang_shelby_gt500_2013-wide.jpg', 'ford_mustang_2015-1920x1080.jpg', 'ford_mustang_2015-1920x1080.jpg', 'Air Conditioner,Power Steering,Power Door Lock,Driver Airbag,Child Seat,Central Locking,AntiLock Braking System,Crash Sensor,Brake Assist,Climate Control '),
(9, 13, 'Toyota Fortuner', 'Toyota', 'SUV', 'black', 'powerfull', 5000.00, 'Petrol', 20184, 4, 'Manual', 4, '1775964.jpg', '1775997.jpg', '1775997.jpg', 'Air Conditioner,Power Door Lock,Child Seat,AntiLock Braking System,Brake Assist,'),
(10, 16, 'Suzuki Beleno', 'Suzuki', 'SEDAN', 'blue', 'powerfull performance', 8000.00, 'Petrol', 2020, 4, 'Manual', 4, 'wp3921684-suzuki-baleno-wallpapers.jpg', 'wp3921668-suzuki-baleno-wallpapers.jpg', 'wp3921668-suzuki-baleno-wallpapers.jpg', 'Air Conditioner,Power Door Lock,Child Seat,Central Locking,AntiLock Braking System,Crash Sensor,Brake Assist,Climate Control '),
(11, 9, 'Volkswagen Jetta GLI', 'Volkswagen', 'COUPE', 'Red', 'powerfull performance', 10000.00, 'Petrol', 2019, 4, 'Automatic', 4, 'wp9764586-2022-volkswagen-jetta-gli-wallpapers.jpg', 'wp9764584-2022-volkswagen-jetta-gli-wallpapers.jpg', 'wp9764584-2022-volkswagen-jetta-gli-wallpapers.jpg', 'Air Conditioner,Power Steering,Power Door Lock,Driver Airbag,AntiLock Braking System,Crash Sensor,'),
(12, 14, 'Honda Civic', 'Honda', 'SEDAN', 'Yellow', 'powerfull performance', 12000.00, 'Diesel', 2018, 4, 'Manual', 4, 'wp8327505-honda-civic-type-r-2021-wallpapers.jpg', 'wp8327484-honda-civic-type-r-2021-wallpapers.jpg', 'wp8327484-honda-civic-type-r-2021-wallpapers.jpg', 'Air Conditioner,Power Steering,Power Door Lock,Driver Airbag,Child Seat,AntiLock Braking System,Brake Assist,'),
(13, 15, 'Renault ', 'Renault', 'SUV', 'black', 'powerfull performance', 12000.00, 'Petrol', 2020, 4, 'Manual', 4, 'wp2531479-renault-duster-wallpapers.jpg', 'wp7061148-renault-duster-wallpapers.jpg', 'wp7061148-renault-duster-wallpapers.jpg', 'Air Conditioner,Power Door Lock,Child Seat,Central Locking,AntiLock Braking System,Crash Sensor,Brake Assist,Climate Control '),
(14, 10, 'Lexus RX', 'Lexus', 'SEDAN', 'black', 'powerfull performance', 13000.00, 'Petrol', 2019, 4, 'Manual', 4, 'wp4264215-lexus-rx-wallpapers.jpg', 'wp4264241-lexus-rx-wallpapers.jpg', 'wp4264241-lexus-rx-wallpapers.jpg', 'Air Conditioner,Power Steering,Power Door Lock,Driver Airbag,Child Seat,Central Locking,AntiLock Braking System,Brake Assist,'),
(15, 6, 'Porsche Panemera', 'Porsche', 'SEDAN', 'black', 'powerfull performance', 15000.00, 'Petrol', 2019, 4, 'Automatic', 4, 'wc1782647-porche-panamera-4k-wallpapers.jpg', 'wp9311681-porche-panamera-4k-wallpapers.jpg', 'wp9311681-porche-panamera-4k-wallpapers.jpg', 'Air Conditioner,Power Steering,Power Door Lock,Driver Airbag,Child Seat,AntiLock Braking System,Crash Sensor,Brake Assist,');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`rev_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`vehicle_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `book_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `rev_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `vehicle_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
