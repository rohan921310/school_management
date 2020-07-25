-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2020 at 09:21 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schooll`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id_admin` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id_admin`, `name`, `username`, `password`) VALUES
(1, 'Rohan', 'admin@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `all_attendance`
--

CREATE TABLE `all_attendance` (
  `all_attendance_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `attendance` varchar(22) NOT NULL,
  `date` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `all_attendance`
--

INSERT INTO `all_attendance` (`all_attendance_id`, `student_id`, `class_id`, `teacher_id`, `attendance`, `date`) VALUES
(1, 3, 3, 2, 'p', '20-07-15'),
(2, 4, 3, 2, 'p', '20-07-15'),
(3, 5, 3, 2, 'p', '20-07-15'),
(4, 6, 3, 2, 'a', '20-07-15');

-- --------------------------------------------------------

--
-- Table structure for table `assign`
--

CREATE TABLE `assign` (
  `assign_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assign`
--

INSERT INTO `assign` (`assign_id`, `class_id`, `subject_id`, `teacher_id`) VALUES
(7, 3, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `assign_attendance`
--

CREATE TABLE `assign_attendance` (
  `assign_attendance_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assign_attendance`
--

INSERT INTO `assign_attendance` (`assign_attendance_id`, `teacher_id`, `class_id`) VALUES
(1, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `class_id` int(11) NOT NULL,
  `class` varchar(255) NOT NULL,
  `remark` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_id`, `class`, `remark`, `username`, `password`) VALUES
(3, '5e ', 'rohan', 'rohan', 'rohang');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `student` varchar(255) NOT NULL,
  `class_id` int(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `roll` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `student`, `class_id`, `dob`, `username`, `password`, `roll`) VALUES
(3, 'rohan', 3, '2020-07-22', '', '', ''),
(4, 'fad dsf', 3, '2020-07-30 ', '', '', ''),
(5, 'afd', 3, '2020-07-09', '', '', ''),
(6, 'afdas', 3, '2020-07-22', 'afd', 'df', 'fdsa');

-- --------------------------------------------------------

--
-- Table structure for table `student_assignment`
--

CREATE TABLE `student_assignment` (
  `student_assignment_id` int(11) NOT NULL,
  `student_assignment` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `roll` varchar(255) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_assignment`
--

INSERT INTO `student_assignment` (`student_assignment_id`, `student_assignment`, `name`, `roll`, `teacher_id`, `class_id`, `subject_id`) VALUES
(1, 'NCERT_Class_10_Hindi_Sparsh_Chapter_4_Manushyata.pdf', 'fdsf', '40', 0, 3, 2),
(2, 'NCERT_Class_10_Hindi_Sparsh_Chapter_4_Manushyata1.pdf', 'fda', '40', 0, 3, 2),
(3, 'his_hhw.pdf', 'fdsf', '40', 2, 3, 2),
(4, 'geo_holiday_home_work.pdf', 'rohan', '2', 2, 3, 2),
(5, 'geo_holiday_home_work1.pdf', '', '', 2, 3, 2),
(6, 'geo_holiday_home_work2.pdf', '', '', 2, 3, 2),
(7, 'physics_hhw.pdf', 'afdas', 'fdsa', 2, 3, 2),
(8, 'physics_hhw1.pdf', 'afdas', 'fdsa', 2, 3, 2),
(9, 'geo_holiday_home_work3.pdf', 'afdas', 'fdsa', 0, 3, 0),
(10, 'NCERT_Class_10_Hindi_Sparsh_Chapter_4_Manushyata2.pdf', 'afdas', 'fdsa', 0, 3, 0),
(11, 'NCERT_Class_10_Hindi_Sparsh_Chapter_4_Manushyata3.pdf', 'afdas', 'fdsa', 0, 3, 0),
(12, 'NCERT_Class_10_Hindi_Sparsh_Chapter_4_Manushyata4.pdf', 'afdas', 'fdsa', 0, 3, 0),
(13, 'physics_hhw2.pdf', 'afdas', 'fdsa', 2, 3, 2),
(14, 'geo_holiday_home_work4.pdf', 'afdas', 'fdsa', 0, 3, 0),
(15, 'geo_holiday_home_work5.pdf', 'afdas', 'fdsa', 2, 3, 2),
(16, 'geo_holiday_home_work6.pdf', 'afdas', 'fdsa', 0, 3, 0),
(17, 'geo_holiday_home_work7.pdf', 'afdas', 'fdsa', 2, 3, 2),
(18, 'NCERT_Class_10_Hindi_Sparsh_Chapter_4_Manushyata5.pdf', 'afdas', 'fdsa', 2, 3, 2),
(19, 'NCERT_Class_10_Hindi_Sparsh_Chapter_4_Manushyata6.pdf', 'afdas', 'fdsa', 0, 3, 0),
(20, 'physics_hhw3.pdf', 'afdas', 'fdsa', 2, 3, 2),
(21, 'NCERT_Class_10_Hindi_Sparsh_Chapter_4_Manushyata7.pdf', 'afdas', 'fdsa', 2, 3, 0),
(22, 'geo_holiday_home_work10.pdf', 'afdas', 'fdsa', 2, 3, 2),
(23, 'geo_holiday_home_work11.pdf', 'afdas', 'fdsa', 2, 3, 2),
(24, 'geo_holiday_home_work12.pdf', 'afdas', 'fdsa', 2, 3, 2),
(25, 'NCERT_Class_10_Hindi_Sparsh_Chapter_4_Manushyata8.pdf', 'afdas', 'fdsa', 2, 3, 2),
(26, 'geo_holiday_home_work13.pdf', 'afdas', 'fdsa', 2, 3, 2),
(27, 'geo_holiday_home_work14.pdf', 'afdas', 'fdsa', 2, 3, 2),
(28, 'geo_holiday_home_work15.pdf', 'afdas', 'fdsa', 0, 3, 0),
(29, 'geo_holiday_home_work16.pdf', 'afdas', 'fdsa', 0, 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `remark` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `subject`, `remark`) VALUES
(1, 'hindi', 'aaa'),
(2, 'english', 'afd sss');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacher_id` int(11) NOT NULL,
  `teacher` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `teacher`, `email`, `mobile`, `username`, `password`, `address`) VALUES
(2, 'sharmarajesh1077@gmail.com', 'sharmarajesh1077@gmail.com', '+19213109261', 'dd', 'dd', 'Rz-g-148,sita Puri-ii, Gali No-5,p.o. Palam'),
(3, 'sharmarajesh1077@gmail.com ', 'sharmarajesh1077@gmail.com ', '+19213109261 ', 'dd ', 'dd aff', 'Rz-g-148,sita Puri-ii, Gali No-5,p.o. Palam ');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_assignment`
--

CREATE TABLE `teacher_assignment` (
  `teacher_assignment_id` int(11) NOT NULL,
  `teacher_assignment` varchar(255) NOT NULL,
  `class_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `remark` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher_assignment`
--

INSERT INTO `teacher_assignment` (`teacher_assignment_id`, `teacher_assignment`, `class_id`, `teacher_id`, `subject_id`, `remark`) VALUES
(1, 'HOLIDAYS_HOMEWORK_krish1.pdf', 3, 2, 2, 'saddd'),
(2, 'physics_hhw.pdf', 3, 2, 2, 'rohan');

-- --------------------------------------------------------

--
-- Table structure for table `time_table`
--

CREATE TABLE `time_table` (
  `time_table_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `time_table` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `time_table`
--

INSERT INTO `time_table` (`time_table_id`, `class_id`, `time_table`) VALUES
(0, 3, '<p>vzx</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `work_done`
--

CREATE TABLE `work_done` (
  `work_done_id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `work_done` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `work_done`
--

INSERT INTO `work_done` (`work_done_id`, `date`, `teacher_id`, `work_done`) VALUES
(1, '20-07-15', 2, 'dgd'),
(2, '20-07-15', 2, 'vxc'),
(3, '20-07-15', 2, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `all_attendance`
--
ALTER TABLE `all_attendance`
  ADD PRIMARY KEY (`all_attendance_id`);

--
-- Indexes for table `assign`
--
ALTER TABLE `assign`
  ADD PRIMARY KEY (`assign_id`);

--
-- Indexes for table `assign_attendance`
--
ALTER TABLE `assign_attendance`
  ADD PRIMARY KEY (`assign_attendance_id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `student_assignment`
--
ALTER TABLE `student_assignment`
  ADD PRIMARY KEY (`student_assignment_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacher_id`);

--
-- Indexes for table `teacher_assignment`
--
ALTER TABLE `teacher_assignment`
  ADD PRIMARY KEY (`teacher_assignment_id`);

--
-- Indexes for table `work_done`
--
ALTER TABLE `work_done`
  ADD PRIMARY KEY (`work_done_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `all_attendance`
--
ALTER TABLE `all_attendance`
  MODIFY `all_attendance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `assign`
--
ALTER TABLE `assign`
  MODIFY `assign_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `assign_attendance`
--
ALTER TABLE `assign_attendance`
  MODIFY `assign_attendance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `student_assignment`
--
ALTER TABLE `student_assignment`
  MODIFY `student_assignment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `teacher_assignment`
--
ALTER TABLE `teacher_assignment`
  MODIFY `teacher_assignment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `work_done`
--
ALTER TABLE `work_done`
  MODIFY `work_done_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
