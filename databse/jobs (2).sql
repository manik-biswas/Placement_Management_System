-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2023 at 10:29 PM
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
-- Database: `jobs`
--

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` int(11) NOT NULL,
  `message` text NOT NULL,
  `cv` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`id`, `name`, `email`, `mobile`, `message`, `cv`) VALUES
(1, 'Manik Biswas', 'manikbiswas1225@gmail.com', 2147483647, 'I think that i am the best for this position of job in you comany.', 'Software Engineering Suggestions (1).pdf'),
(2, 'aryan sharma', 'aryan@gmail.com', 2147483647, 'jhashufhyafhak kjhashfaui  absjfha kjakfjshd', 'pr_class2.pdf'),
(3, 'Roshan Yadav', 'roshan@gmail.com', 2147483647, 'jhdsaijdha jhahsfh ayudya jkahsfja khasfda kashfjk.', 'Introduction  to JavaScript.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `org_name` varchar(255) NOT NULL,
  `org_type` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `fname`, `lname`, `org_name`, `org_type`, `email`, `phone`, `password`) VALUES
(1, 'manik', 'biswas', 'xyz', 'Product-Based', 'xyz@gmail.com', 2147483647, '123'),
(2, 'Rosy', 'khan', 'khan tech. solution', 'Others', 'khan@gmail.com', 2147483647, '123'),
(3, 'Shiva', 'Biswas', 'Shivaji tech. Solution', 'Service-based', 'shiva@gmail.com', 986534565, '123'),
(4, 'Ram', 'Rahju', 'ram solution', 'Product-Based', 'ram@gmail.com', 2147483647, '123');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `id` int(11) NOT NULL,
  `position` varchar(255) NOT NULL,
  `ctc` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `stime` varchar(255) NOT NULL,
  `eligibility` text NOT NULL,
  `jd` text NOT NULL,
  `skill` text NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`id`, `position`, `ctc`, `location`, `stime`, `eligibility`, `jd`, `skill`, `file`) VALUES
(1, 'Full Stack Developer', 800000, 'Kalyani', 'full time', 'Candidates should have completed their high school. Students should also have an excellent working knowledge of HTML, CSS, and JavaScript.\r\nStudents should also have the necessary computer skills and the ability to install the software.', 'A Full-Stack developer is a professional responsible for working on both front-end and back-end development processes. They design, develop, and maintain fully-fledged and functioning platforms with databases or servers. These servers do not need other third-party applications to build an entire system from scratch.', 'Programming a browser (By using JavaScript, jQuery, Angular, or Vue)\r\n\r\nProgramming a server (By using PHP, ASP, Python, or Node)\r\n', ''),
(2, 'Developer', 700000, 'noida', 'part time', 'Developer should  have knowledge of all the basic subjects.\r\nmust pass 10th ,10+2, and should have b.tech degree or equal to b.tech degree.  ', 'this is not a very tough work, if you know the basic development then you can do  this job.', 'all the basics and some masters in particular subjects like HTML , CSS, Bootstrap, PHP, etc ', '');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `college` varchar(255) NOT NULL,
  `reg_no` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `fname`, `lname`, `dob`, `gender`, `email`, `phone`, `college`, `reg_no`, `course`, `branch`, `password`) VALUES
(1, 'Manik', 'Biswas', '2023-05-05', 'Male', 'manikmanik1225@gmail.com', 2147483647, 'university of kalyani', '190027', 'b.tech', 'i.t', 'abc'),
(2, 'Manik', 'Biswas', '2023-06-14', 'Male', 'manikbiswas1225@gmail.com', 2147483647, 'university of kalyani', '190027', 'b.tech', 'i.t', '123'),
(3, 'rohit', 'yadav', '2023-06-22', 'Male', 'rohit@gmail.com', 2147483647, 'university of kalyani', '190028', 'b.tech', 'i.t', '123'),
(4, 'Apurba ', 'Saha ', '2023-06-30', 'Male', 'apurba@gmail.com', 2147483647, 'university of kalyani', '190008', 'b.tech', 'i.t', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
