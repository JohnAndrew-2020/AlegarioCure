-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 02, 2023 at 06:05 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospitalcore2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(20) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `contact_number` int(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `first_name`, `last_name`, `contact_number`, `email`, `pass`) VALUES
(1, 'Andrew', 'Fallurin', 2147483647, 'sample@email.com', 'pass123'),
(2, 'doctor', 'doctor', 123, 'doctor@email.com', 'pass123');

-- --------------------------------------------------------

--
-- Table structure for table `core2hmo_insurance`
--

CREATE TABLE `core2hmo_insurance` (
  `id` int(20) NOT NULL,
  `insurance` varchar(255) NOT NULL,
  `application_id` int(20) NOT NULL,
  `hospital_bill` float NOT NULL,
  `deductible` int(20) NOT NULL,
  `insurance_type` varchar(255) NOT NULL,
  `discharge_bill` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `core2_hmo_applicaiton`
--

CREATE TABLE `core2_hmo_applicaiton` (
  `id` int(20) NOT NULL,
  `application_id` int(20) NOT NULL,
  `admin_id` int(20) NOT NULL,
  `insurance_name` varchar(255) NOT NULL,
  `insurance_type` varchar(255) NOT NULL,
  `date_applied` date NOT NULL,
  `member_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `core2_laboratory_request`
--

CREATE TABLE `core2_laboratory_request` (
  `id` int(20) NOT NULL,
  `patient_id` int(20) NOT NULL,
  `request_info` varchar(255) NOT NULL,
  `request_type` varchar(255) NOT NULL,
  `date_request` date NOT NULL,
  `request_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `core2_laboratory_result`
--

CREATE TABLE `core2_laboratory_result` (
  `id` int(20) NOT NULL,
  `test_id` int(20) NOT NULL,
  `result` varchar(255) NOT NULL,
  `release_date` date NOT NULL,
  `examine_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `core2_laboratory_test`
--

CREATE TABLE `core2_laboratory_test` (
  `id` int(20) NOT NULL,
  `request_id` int(20) NOT NULL,
  `test_name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `test_date` date NOT NULL,
  `prepared_by` varchar(255) NOT NULL,
  `amount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `core2_outpatient_treatment`
--

CREATE TABLE `core2_outpatient_treatment` (
  `id` int(20) NOT NULL,
  `test_id` int(20) NOT NULL,
  `outpatient_id` int(20) NOT NULL,
  `outpatient_type` varchar(255) NOT NULL,
  `findings` varchar(255) NOT NULL,
  `treatment_status` varchar(255) NOT NULL,
  `treatment_result` varchar(255) NOT NULL,
  `doctor_application_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `core2_requisition`
--

CREATE TABLE `core2_requisition` (
  `id` int(20) NOT NULL,
  `requisition_id` int(20) NOT NULL,
  `equipment_id` int(20) NOT NULL,
  `tools_id` int(20) NOT NULL,
  `quantity` int(20) NOT NULL,
  `test_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `core2_scheduler`
--

CREATE TABLE `core2_scheduler` (
  `id` int(20) NOT NULL,
  `schedule_start_time` varchar(255) NOT NULL,
  `schedule_end_time` varchar(255) NOT NULL,
  `surgery_reference_id` int(20) NOT NULL,
  `admin_id` int(20) NOT NULL,
  `doctor_application_id` int(20) NOT NULL,
  `registration_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `core2_surgery_reference`
--

CREATE TABLE `core2_surgery_reference` (
  `id` int(20) NOT NULL,
  `surgery_reference_id` int(20) NOT NULL,
  `surgery_type` varchar(255) NOT NULL,
  `surgery_producer` varchar(255) NOT NULL,
  `surgery_bills` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `diet_management`
--

CREATE TABLE `diet_management` (
  `id` int(20) NOT NULL,
  `list_of_foods` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(20) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `contact_number` int(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `first_name`, `last_name`, `contact_number`, `email`, `password`) VALUES
(1, 'doctor', 'doctor', 123123123, 'doctor@email.com', 'pass123');

-- --------------------------------------------------------

--
-- Table structure for table `hospital_staff`
--

CREATE TABLE `hospital_staff` (
  `id` int(20) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `contact_number` int(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `medical_technologist`
--

CREATE TABLE `medical_technologist` (
  `id` int(20) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `contact_number` int(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `nutritionist`
--

CREATE TABLE `nutritionist` (
  `id` int(20) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `contact_number` int(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `outpatient`
--

CREATE TABLE `outpatient` (
  `id` int(20) NOT NULL,
  `patient_id` int(20) NOT NULL,
  `doctor_id` int(20) NOT NULL,
  `patient_status` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(20) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `contact_number` int(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `birth_date` date NOT NULL,
  `age` int(20) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `civil_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `first_name`, `last_name`, `contact_number`, `email`, `password`, `address`, `birth_date`, `age`, `gender`, `civil_status`) VALUES
(1, 'test', 'test', 0, 'test@test.com', 'password', 'test', '2023-02-02', 1, 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `patient_lab_result`
--

CREATE TABLE `patient_lab_result` (
  `id` int(10) NOT NULL,
  `patient_id` int(10) NOT NULL,
  `test_name` varchar(255) NOT NULL,
  `test_result` varchar(255) NOT NULL,
  `normal_range` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `surgery_scheduler`
--

CREATE TABLE `surgery_scheduler` (
  `id` int(20) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `contact_number` int(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `core2hmo_insurance`
--
ALTER TABLE `core2hmo_insurance`
  ADD PRIMARY KEY (`id`),
  ADD KEY `application_id` (`application_id`);

--
-- Indexes for table `core2_hmo_applicaiton`
--
ALTER TABLE `core2_hmo_applicaiton`
  ADD PRIMARY KEY (`id`),
  ADD KEY `application_id` (`application_id`),
  ADD KEY `admin_id` (`admin_id`),
  ADD KEY `member_id` (`member_id`);

--
-- Indexes for table `core2_laboratory_request`
--
ALTER TABLE `core2_laboratory_request`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_id` (`patient_id`);

--
-- Indexes for table `core2_laboratory_result`
--
ALTER TABLE `core2_laboratory_result`
  ADD PRIMARY KEY (`id`),
  ADD KEY `test_id` (`test_id`);

--
-- Indexes for table `core2_laboratory_test`
--
ALTER TABLE `core2_laboratory_test`
  ADD PRIMARY KEY (`id`),
  ADD KEY `request_id` (`request_id`);

--
-- Indexes for table `core2_outpatient_treatment`
--
ALTER TABLE `core2_outpatient_treatment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `test_id` (`test_id`),
  ADD KEY `outpatient_id` (`outpatient_id`),
  ADD KEY `doctor_application_id` (`doctor_application_id`);

--
-- Indexes for table `core2_requisition`
--
ALTER TABLE `core2_requisition`
  ADD PRIMARY KEY (`id`),
  ADD KEY `requisition_id` (`requisition_id`),
  ADD KEY `equipment_id` (`equipment_id`),
  ADD KEY `tools_id` (`tools_id`),
  ADD KEY `test_id` (`test_id`);

--
-- Indexes for table `core2_scheduler`
--
ALTER TABLE `core2_scheduler`
  ADD PRIMARY KEY (`id`),
  ADD KEY `surgery_reference_id` (`surgery_reference_id`),
  ADD KEY `admin_id` (`admin_id`),
  ADD KEY `doctor_application_id` (`doctor_application_id`),
  ADD KEY `registration_id` (`registration_id`);

--
-- Indexes for table `core2_surgery_reference`
--
ALTER TABLE `core2_surgery_reference`
  ADD PRIMARY KEY (`id`),
  ADD KEY `surgery_reference_id` (`surgery_reference_id`);

--
-- Indexes for table `diet_management`
--
ALTER TABLE `diet_management`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `hospital_staff`
--
ALTER TABLE `hospital_staff`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `medical_technologist`
--
ALTER TABLE `medical_technologist`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `nutritionist`
--
ALTER TABLE `nutritionist`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `outpatient`
--
ALTER TABLE `outpatient`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_id` (`patient_id`),
  ADD KEY `doctor_id` (`doctor_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `patient_lab_result`
--
ALTER TABLE `patient_lab_result`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_id` (`patient_id`);

--
-- Indexes for table `surgery_scheduler`
--
ALTER TABLE `surgery_scheduler`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `core2hmo_insurance`
--
ALTER TABLE `core2hmo_insurance`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `core2_hmo_applicaiton`
--
ALTER TABLE `core2_hmo_applicaiton`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `core2_laboratory_request`
--
ALTER TABLE `core2_laboratory_request`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `core2_laboratory_result`
--
ALTER TABLE `core2_laboratory_result`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `core2_laboratory_test`
--
ALTER TABLE `core2_laboratory_test`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `core2_requisition`
--
ALTER TABLE `core2_requisition`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `core2_scheduler`
--
ALTER TABLE `core2_scheduler`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `core2_surgery_reference`
--
ALTER TABLE `core2_surgery_reference`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `diet_management`
--
ALTER TABLE `diet_management`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hospital_staff`
--
ALTER TABLE `hospital_staff`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medical_technologist`
--
ALTER TABLE `medical_technologist`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nutritionist`
--
ALTER TABLE `nutritionist`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `patient_lab_result`
--
ALTER TABLE `patient_lab_result`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `surgery_scheduler`
--
ALTER TABLE `surgery_scheduler`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
