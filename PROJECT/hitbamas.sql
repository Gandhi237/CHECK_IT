-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2024 at 12:15 PM
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
-- Database: `hitbamas`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `s_No` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`s_No`, `Name`, `Email`, `Password`) VALUES
(1, 'Dr. Naha', 'nahafer@gmail.com', 'Fer123n@'),
(2, 'Gandhi', 'pigandhi@edu.in', 'Gan321@');

-- --------------------------------------------------------

--
-- Table structure for table `civil_engineering`
--

CREATE TABLE `civil_engineering` (
  `sl_No` int(11) NOT NULL,
  `Day` varchar(12) NOT NULL,
  `8:00am - 10:00am` varchar(150) NOT NULL,
  `10:15am - 12:15pm` varchar(150) NOT NULL,
  `12:15pm - 1:00pm` varchar(150) NOT NULL,
  `1:00pm - 3:00pm` varchar(150) NOT NULL,
  `3:15pm - 5:15pm` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `civil_engineering`
--

INSERT INTO `civil_engineering` (`sl_No`, `Day`, `8:00am - 10:00am`, `10:15am - 12:15pm`, `12:15pm - 1:00pm`, `1:00pm - 3:00pm`, `3:15pm - 5:15pm`) VALUES
(1, 'Monday', 'Geotechnics, Lecturer: Eng Haoulassa', 'Engineering Mathematics 3, Lecturer: Eng Tsasse', 'Break', 'Physics 3, Lecturer: Eng Ngwafor', 'SPW'),
(2, 'Tuesday', 'Civil Engineering Quantity and Specification, Lecturer: Eng Madaha Marie', 'Quantity Specification, Lecturer: Eng Madaha Marie', 'Break', 'SPW', 'SPW'),
(3, 'Wednesday', 'Design and Transportation 2, Lecturer: Eng Haoulassa', 'Highway Engineering, Lecturer: Eng Madaha', 'Break', 'Technical Drawing, Lecturer: Eng Haoulassa', 'SPW'),
(4, 'Thursday', 'SPW', 'Chemistry, Lecturer: Eng Ngotcho', 'Break', 'SPW', 'SPW'),
(5, 'Friday', 'SPW', 'SPW', 'Break', 'SPW', 'Law and Citizenship, Lecturer: Mrs. Edith');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `C_No` int(11) NOT NULL,
  `C_ID` varchar(11) NOT NULL,
  `Name` varchar(55) NOT NULL,
  `D_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`C_No`, `C_ID`, `Name`, `D_ID`) VALUES
(1, 'SWE02', 'Cyber Security', 4),
(2, 'MLS03', 'Blood Transfusion', 1),
(3, 'EDM01', 'Living Online', 2),
(4, 'ME05', 'Industrial Materials', 5),
(5, 'CE04', 'Highway Engineering', 3);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `D_ID` int(11) NOT NULL,
  `Name` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`D_ID`, `Name`) VALUES
(3, 'Civil Engineering'),
(2, 'E-Commerce and Digital Marketing'),
(5, 'Mechanical Engineering'),
(1, 'Medical Laboratory Sciences'),
(4, 'Software Engineering');

-- --------------------------------------------------------

--
-- Table structure for table `e_commerce_and_digital_marketing`
--

CREATE TABLE `e_commerce_and_digital_marketing` (
  `sl_No` int(11) NOT NULL,
  `Day` varchar(12) NOT NULL,
  `8:00am - 10:00am` varchar(150) NOT NULL,
  `10:15am - 12:15pm` varchar(150) NOT NULL,
  `12:15pm - 1:00pm` varchar(150) NOT NULL,
  `1:00pm - 3:00pm` varchar(150) NOT NULL,
  `3:15pm - 5:15pm` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `e_commerce_and_digital_marketing`
--

INSERT INTO `e_commerce_and_digital_marketing` (`sl_No`, `Day`, `8:00am - 10:00am`, `10:15am - 12:15pm`, `12:15pm - 1:00pm`, `1:00pm - 3:00pm`, `3:15pm - 5:15pm`) VALUES
(1, 'Monday', 'Digital Marketing, Lecturer: DR. Naha Fernand', 'Living Online, Lecturer: DR. Naha Fernand', 'Break', 'Web Programming 2, Lecturer: DR. Naha Fernand', 'Law and Citizenship, Lecturer: Mrs. Edith'),
(2, 'Tuesday', 'Object Oriented Programming, Lecturer: Mme Ytembe Therese', 'Factual Programming and HCI, Lecturer: Mr. Abang', 'Break', 'Technical Communication, Lecturer: DR. Etamba', 'SPW'),
(3, 'Wednesday', 'Computer Networks, Lecturer: Eng Mbumbo', 'Structural Programming, Lecturer: Mr.Abang', 'Break', 'Financial Analysis, Lecturer: Mme Satu Melanie', 'SPW'),
(4, 'Thursday', 'ERP Technology, Lecturer: Mr. Mambou', 'E-Commerce Technology, Lecturer: Mr. Mambou', 'Break', 'Technological Infrastructure for E-Commerce, Lecturer: Mr. Mambou', 'SPW'),
(5, 'Friday', 'Advanced Algorithms, Lecturer: Mr. Abang', 'Linear Algebra, Lecturer: Mr. Efou Fabrice', 'Break', 'Analysis 3, Lecturer: Mr. Efou Fabrice', 'SPW');

-- --------------------------------------------------------

--
-- Table structure for table `lecturer`
--

CREATE TABLE `lecturer` (
  `S_No` int(11) NOT NULL,
  `L_ID` varchar(11) NOT NULL,
  `Name` varchar(55) NOT NULL,
  `Course` varchar(55) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lecturer`
--

INSERT INTO `lecturer` (`S_No`, `L_ID`, `Name`, `Course`, `Email`, `Password`) VALUES
(1, '202301', 'Mr. Che', 'Operating System', 'che@gmail.com', '123'),
(2, '202302', 'DR. Naha Fernand', 'Web Programming', 'fernand@gmail.com', '123'),
(3, '202303', 'Mme Ytembe Therese', 'Database Administration', 'ytembe@gmail.com', '1234'),
(4, '202304', 'Mr. Abang Tanyi', 'Factual Programming', 'abang@gmail.com', '12345'),
(5, '202305', 'Eng Ernest Mbumbo', 'Computer Networks', 'mbumbo@gmail.com', '1235'),
(6, '202306', 'Mr. Efou Fabrice', 'Analysis', 'efou@gmail.com', '12355'),
(7, '202307', 'DR. Etamba', 'Technical Communication', 'eta@gmail.com', '1234'),
(8, '202308', 'DR. Nnoko', 'Conventional Machining', 'nnoko@gmail.com', '1234'),
(9, '202309', 'Eng Obassi Benard', 'Mechanics and Materials', 'obassi@gmail.com', '246'),
(10, '202310', 'Eng Madaha Marie', 'Highway Enginering', 'madaha@gmail.com', '1246'),
(11, '202311', 'Eng Haoulassa', 'Design and Transportation', 'lass@gmail.com', '1357'),
(12, '202312', 'DR. Gandhi Pius', 'Cyber Security', 'pius@gmail.com', '1390');

-- --------------------------------------------------------

--
-- Table structure for table `mechanical_engineering`
--

CREATE TABLE `mechanical_engineering` (
  `sl_No` int(11) NOT NULL,
  `Day` varchar(12) NOT NULL,
  `8:00am - 10:00am` varchar(150) NOT NULL,
  `10:15am - 12:15pm` varchar(150) NOT NULL,
  `12:15pm - 1:00pm` varchar(150) NOT NULL,
  `1:00pm - 3:00pm` varchar(150) NOT NULL,
  `3:15pm - 5:15pm` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mechanical_engineering`
--

INSERT INTO `mechanical_engineering` (`sl_No`, `Day`, `8:00am - 10:00am`, `10:15am - 12:15pm`, `12:15pm - 1:00pm`, `1:00pm - 3:00pm`, `3:15pm - 5:15pm`) VALUES
(1, 'Monday', 'Non-Conventional Machining: DR. Nnoko', 'Industrial Safety, Lecturer: Eng Obassi', 'Break', 'Physics 3, Lecturer: Eng Ngwafor', 'SPW'),
(2, 'Tuesday', 'Mechanical Analysis 2, Lecturer: Eng Obassi', 'Mechanical Manufacturing 2, Lecturer: Eng Obassi', 'Break', 'Mechanics and Materials, Lecturer: Eng Obassi', 'SPW'),
(3, 'Wednesday', 'Computer Aided Manufacturing 1, Lecturer: Eng Obassi', 'Computer Aided Design(CAD) 2, Lecturer: Eng Obassi', 'Break', 'Jigs, Fixtures, Automation, Lecturer: Eng Obassi', 'SPW'),
(4, 'Thursday', 'Engineering Mathematics 3, Lecturer: Eng Tsasse', 'Chemistry, Lecturer: Eng Ngotcho', 'Break', 'SPW', 'SPW'),
(5, 'Friday', 'SPW', 'SPW', 'Break', 'SPW', 'Law and Citizenship, Lecturer: Mrs. Edith');

-- --------------------------------------------------------

--
-- Table structure for table `medical_laboratory_sciences`
--

CREATE TABLE `medical_laboratory_sciences` (
  `sl_No` int(11) NOT NULL,
  `Day` varchar(12) NOT NULL,
  `8:00am - 10:00am` varchar(150) NOT NULL,
  `10:15am - 12:15pm` varchar(150) NOT NULL,
  `12:15pm - 1:00pm` varchar(150) NOT NULL,
  `1:00pm - 3:00pm` varchar(150) NOT NULL,
  `3:15pm - 5:15pm` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `medical_laboratory_sciences`
--

INSERT INTO `medical_laboratory_sciences` (`sl_No`, `Day`, `8:00am - 10:00am`, `10:15am - 12:15pm`, `12:15pm - 1:00pm`, `1:00pm - 3:00pm`, `3:15pm - 5:15pm`) VALUES
(1, 'Monday', 'Human Nutrition and Associated Pathologies, Lecturer: Mme Audrine', 'Medical Pathologies, Lecturer: Mme Audrine', 'Break', 'Medical Imaging Techniques, Lecturer: Mr. Blaise', 'SPW'),
(2, 'Tuesday', 'Biosecurity and EMS, Lecturer: Mme Clavella', 'Quality Assurance Control and Quality Management, Lecturer: Mme Clavella', 'Break', 'Medical French, Lecturer: Mme Taiyo', 'Community Health, Lecturer: Mr. Joel'),
(3, 'Wednesday', 'Clinical Biochemistry 1, Lecturer: Mr. Achiri', 'Virology, Lecturer: Mr. Apeh', 'Break', 'Health and Development, Lecturer: Mr. Apeh', 'CBC, Lecturer: Mr. Mukom'),
(4, 'Thursday', 'Clinical Parasitology 1, Lecturer: Mme Njilla', 'Clinical Pharmacology, Lecturer: Dr. Bate', 'Break', 'Medical Entomology, Lecturer: Mr. Basga', 'Medical Mycology, Lecturer: Mr. Basga'),
(5, 'Friday', 'Clinical Hematology and Blood Transfusion, Lecturer: Mr. Munguh', 'Clinical Bacteriology, Lecturer: Mr. Munguh', 'Break', 'Practicals, Lecturer: Mme Jaff', 'Immunology/Serology, Lecturer: Mme Jaff');

-- --------------------------------------------------------

--
-- Table structure for table `software_engineering`
--

CREATE TABLE `software_engineering` (
  `sl_No` int(11) NOT NULL,
  `Day` varchar(12) NOT NULL,
  `8:00am - 10:00am` varchar(150) NOT NULL,
  `10:15am - 12:15pm` varchar(150) NOT NULL,
  `12:15pm - 1:00pm` varchar(150) NOT NULL,
  `1:00pm - 3:00pm` varchar(150) NOT NULL,
  `3:15pm - 5:15pm` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `software_engineering`
--

INSERT INTO `software_engineering` (`sl_No`, `Day`, `8:00am - 10:00am`, `10:15am - 12:15pm`, `12:15pm - 1:00pm`, `1:00pm - 3:00pm`, `3:15pm - 5:15pm`) VALUES
(1, 'Monday', 'Management of Computer Projects, Lecturer: Mr. Che', 'Operating System 2, Lecturer: Mr. Che', 'Break', 'Web Programming 2, Lecturer: DR. Naha Fernand', 'Law and Citizenship, Lecturer: Mrs. Edith'),
(2, 'Tuesday', 'Object Oriented Programming, Lecturer: Mme Ytembe Therese', 'Factual Programming and HCI, Lecturer: Mr. Abang', 'Break', 'Advanced Data Structure, Lecturer: Mr. Abang', 'SPW'),
(3, 'Wednesday', 'Computer Networks, Lecturer: Eng Mbumbo', 'Windows Server and Linux Administration, Lecturer: Enr Mbumbo', 'Break', 'Application Security, Lecturer: Eng Mbumbo', 'SPW'),
(4, 'Thursday', 'Database Administration, Lecturer: Mme Ytembe Therese', 'Object Oriented Modelling, Lecturer: Mme Ytembe Therese', 'Break', 'Mobile Terminals, Lecturer: Mme Ytembe Therese', 'SPW'),
(5, 'Friday', 'Advanced Algorithms, Lecturer: Mr. Abang', 'Data Structure, Lecturer: Mr. Abang', 'Break', 'Analysis 3, Lecturer: Mr. Efou Fabrice', 'SPW');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `S_No` int(11) NOT NULL,
  `S_ID` varchar(11) NOT NULL,
  `Name` varchar(55) NOT NULL,
  `Department` varchar(55) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`S_No`, `S_ID`, `Name`, `Department`, `Email`, `Password`) VALUES
(1, 'MLS202301', 'Serena Samayoung', 'Medical Laboratory Sciences (MLS)', 'serena@gmail.com', '1234'),
(2, 'EDM202301', 'Mopembe Ashley', 'E-Commerce and Digital Marketing (EDM)', 'ashley@gmail.com', '12345'),
(3, 'CE202301', 'Aturi Velma', 'Civil Engineering (CE)', 'velma@edu.in', 'v3lm@'),
(4, 'SWE202301', 'Marco Patt', 'Software Engineering (SWE)', 'pacman@edu.in', '$2pat6*'),
(5, 'ME202301', 'Kenjo Kevin', 'Mechanical Engineering (ME)', 'kenkel@iou.com', 'Ken237'),
(6, 'NS202301', 'Kameni Dorian', 'Network and Security (NS)', 'dorian@gmail.com', '123'),
(7, 'NS202315', 'Ngwa Joy', 'NetworkandSecurity', 'joy@edu.in', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`s_No`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `civil_engineering`
--
ALTER TABLE `civil_engineering`
  ADD PRIMARY KEY (`sl_No`),
  ADD UNIQUE KEY `Day` (`Day`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`C_No`),
  ADD UNIQUE KEY `C_ID` (`C_ID`),
  ADD KEY `D_ID` (`D_ID`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`D_ID`),
  ADD UNIQUE KEY `Name` (`Name`);

--
-- Indexes for table `e_commerce_and_digital_marketing`
--
ALTER TABLE `e_commerce_and_digital_marketing`
  ADD PRIMARY KEY (`sl_No`),
  ADD UNIQUE KEY `Day` (`Day`);

--
-- Indexes for table `lecturer`
--
ALTER TABLE `lecturer`
  ADD PRIMARY KEY (`S_No`),
  ADD UNIQUE KEY `L_ID` (`L_ID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `mechanical_engineering`
--
ALTER TABLE `mechanical_engineering`
  ADD PRIMARY KEY (`sl_No`),
  ADD UNIQUE KEY `Day` (`Day`);

--
-- Indexes for table `medical_laboratory_sciences`
--
ALTER TABLE `medical_laboratory_sciences`
  ADD PRIMARY KEY (`sl_No`),
  ADD UNIQUE KEY `Day` (`Day`);

--
-- Indexes for table `software_engineering`
--
ALTER TABLE `software_engineering`
  ADD PRIMARY KEY (`sl_No`),
  ADD UNIQUE KEY `Day` (`Day`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`S_No`),
  ADD UNIQUE KEY `S_ID` (`S_ID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `s_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `civil_engineering`
--
ALTER TABLE `civil_engineering`
  MODIFY `sl_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `C_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `D_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `e_commerce_and_digital_marketing`
--
ALTER TABLE `e_commerce_and_digital_marketing`
  MODIFY `sl_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `lecturer`
--
ALTER TABLE `lecturer`
  MODIFY `S_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `mechanical_engineering`
--
ALTER TABLE `mechanical_engineering`
  MODIFY `sl_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `medical_laboratory_sciences`
--
ALTER TABLE `medical_laboratory_sciences`
  MODIFY `sl_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `software_engineering`
--
ALTER TABLE `software_engineering`
  MODIFY `sl_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `S_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`D_ID`) REFERENCES `department` (`D_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
