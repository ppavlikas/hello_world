-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2018 at 12:43 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `eidikotites`
--

CREATE TABLE `eidikotites` (
  `eidikotita` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `eidikotites`
--

INSERT INTO `eidikotites` (`eidikotita`) VALUES
('Chemistry'),
('Computer Science'),
('Math');

-- --------------------------------------------------------

--
-- Table structure for table `lessons`
--

CREATE TABLE `lessons` (
  `lesson` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lessons`
--

INSERT INTO `lessons` (`lesson`) VALUES
('ECDL'),
('Gaming'),
('GCE Î Î»Î·ÏÎ¿Ï†Î¿ÏÎ¹ÎºÎ®'),
('Î Î»Î·ÏÎ¿Ï†Î¿ÏÎ¹ÎºÎ®'),
('Î’Î¹Î¿Î»Î¿Î³Î¯Î±'),
('Î§Î·Î¼ÎµÎ¯Î± Î’'),
('Î§Î®Î¼ÎµÎ¹Î± Î‘'),
('Î§Î®Î¼ÎµÎ¹Î± Î“'),
('Î¦Ï…ÏƒÎ¹ÎºÎ®'),
('ÎœÎ±Î¸Î·Î¼Î±Ï„Î¹ÎºÎ¬'),
('STEM Club'),
('STEM Robotis');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `dob` date NOT NULL,
  `taksi` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sxoleio` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nameM` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nameP` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phoneM` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phoneP` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `poli` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tk` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comments` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` int(11) NOT NULL,
  `onoma` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fromUser` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `dob`, `taksi`, `sxoleio`, `nameM`, `nameP`, `phoneM`, `phoneP`, `address`, `poli`, `tk`, `email`, `comments`, `facebook`, `onoma`, `fromUser`) VALUES
(1, '2018-03-08', '', '', '', '', '', '', '', '', '', '', '', 0, '', ''),
(2, '2018-03-08', 'ΡςΕ', 'ςΕΡ', 'Μαμα', 'Παπάς', '', '', '', '', '', '', '', 0, '', ''),
(3, '2018-03-08', 'ΡςΕ', 'ςΕΡ', 'Μαμα', 'Παπάς', '234', '', 'ΦΣΔ', 'ΑΣΔ', '32ΣΔ', '', '', 0, '', ''),
(4, '2018-03-08', 'ΡςΕ', 'ςΕΡ', 'Μαμα', 'Παπάς', '234', '', 'ΦΣΔ', 'ΑΣΔ', '32ΣΔ', '', '', 0, '', ''),
(5, '2018-03-08', 'ΡςΕ', 'ςΕΡ', 'Μαμα', 'Παπάς', '234', '', 'ΦΣΔ', 'ΑΣΔ', '32ΣΔ', '', 'pp', 0, '', ''),
(6, '2018-03-08', 'ΡςΕ', 'ςΕΡ', 'Μαμα', 'Παπάς', '234', '', 'ΦΣΔ', 'ΑΣΔ', '32ΣΔ', 'pp', 'c', 6, 'sSA', ''),
(7, '2018-03-06', 'a', 'Prodromou', 'artemis', 'mariow', '99', '22', 'kerky', 'larna', '601', 'ppavlikas@gmail.com', 'no comment', 1, 'das', ''),
(8, '2018-03-06', 'a', 'Prodromou', 'artemis', 'mariow', '99', '22', 'kerky', 'larna', '601', 'ppavlikas@gmail.com', 'no comment', 0, 'das', ''),
(9, '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', 1, 'test 6', 'test'),
(10, '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', 1, 'Test 2', 'test'),
(11, '2018-03-20', '', '', '', '', '', '', '', '', '', '', '', 1, 'tt', 'test'),
(12, '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', 1, 'rr', 'test'),
(14, '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', 1, 'www', 'test'),
(15, '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', 1, 'qq', 'test'),
(16, '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', 1, ';Ï‚ÎµÏ', 'test'),
(17, '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', 1, 'xz', 'test'),
(18, '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', 1, 'gf', 'test'),
(19, '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', 1, 'gfd', 'test'),
(20, '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', 1, 'xza', 'test'),
(21, '2018-03-01', 'Î‘', 'Î›Î‘Î“', 'Î†ÏÏ„ÎµÎ¼Î¹Ï‚', 'ÎœÎ¬ÏÎ¹Î¿Ï‚', '', '', '', '', '', '', '', 1, 'Î Î±ÏÎ»Î¿Ï‚ Î Î±Ï…Î»Î¹ÎºÎºÎ¬Ï‚', 'test'),
(22, '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', 1, 'pavlos', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `students_lessons`
--

CREATE TABLE `students_lessons` (
  `student_id` int(11) NOT NULL,
  `lesson` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students_lessons`
--

INSERT INTO `students_lessons` (`student_id`, `lesson`) VALUES
(15, 'Î§Î·Î¼ÎµÎ¯Î± Î’'),
(15, 'ÎœÎ±Î¸Î·Î¼Î±Ï„Î¹ÎºÎ¬'),
(15, 'STEM Robotics'),
(16, 'Î’Î¹Î¿Î»Î¿Î³Î¯Î±'),
(16, 'Î¦Ï…ÏƒÎ¹ÎºÎ®'),
(17, 'GCE Î Î»Î·ÏÎ¿Ï†Î¿ÏÎ¹ÎºÎ®'),
(18, 'STEM Club'),
(19, 'STEM Club'),
(20, 'ECDL'),
(21, 'Î Î»Î·ÏÎ¿Ï†Î¿ÏÎ¹ÎºÎ®'),
(21, 'Î§Î·Î¼ÎµÎ¯Î± Î‘'),
(21, 'ÎœÎ±Î¸Î·Î¼Î±Ï„Î¹ÎºÎ¬'),
(21, 'STEM Club'),
(22, 'GCE Î Î»Î·ÏÎ¿Ï†Î¿ÏÎ¹ÎºÎ®'),
(22, 'Î Î»Î·ÏÎ¿Ï†Î¿ÏÎ¹ÎºÎ®'),
(22, 'Î’Î¹Î¿Î»Î¿Î³Î¯Î±');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `taskID` int(11) NOT NULL,
  `fromUser` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `toUser` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `taskType` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AF` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DOA` date NOT NULL,
  `DOC` date DEFAULT NULL,
  `Comments` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`taskID`, `fromUser`, `toUser`, `taskType`, `AF`, `DOA`, `DOC`, `Comments`) VALUES
(1, 'test', 'test2', 'Egkiklios', 'q11', '2017-07-06', '2017-07-18', 'qwert'),
(2, 'test', 'test2', 'Diereunisi', '12dsa', '2017-07-24', '2017-07-26', 'qwe'),
(3, 'test', 'test2', 'Egkiklios', 'em123', '2017-07-27', '0000-00-00', 'test em all');

-- --------------------------------------------------------

--
-- Table structure for table `tasktype`
--

CREATE TABLE `tasktype` (
  `ttype` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tasktype`
--

INSERT INTO `tasktype` (`ttype`) VALUES
('Diereunisi'),
('Egkiklios'),
('Ypodomi');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `onoma` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tid` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eidikotita` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `onoma`, `tid`, `eidikotita`) VALUES
(1, 'Pavlos Pavlikas', '1122334', 'Computer Science');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access` int(11) NOT NULL,
  `uname` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usurname` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `access`, `uname`, `usurname`) VALUES
('test', '$2y$10$zXfJOEI3ICA.QWdlZT/MR.N/LWZNyna14SfvBPFhj9TtF8.mFmtua', 3, 'Pavlos', 'Pavlikas'),
('test2', '12345', 3, 'Tester 2', 'User2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `eidikotites`
--
ALTER TABLE `eidikotites`
  ADD PRIMARY KEY (`eidikotita`);

--
-- Indexes for table `lessons`
--
ALTER TABLE `lessons`
  ADD PRIMARY KEY (`lesson`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students_lessons`
--
ALTER TABLE `students_lessons`
  ADD PRIMARY KEY (`student_id`,`lesson`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`taskID`),
  ADD KEY `taskType` (`taskType`),
  ADD KEY `toUser` (`toUser`),
  ADD KEY `fromUser` (`fromUser`);

--
-- Indexes for table `tasktype`
--
ALTER TABLE `tasktype`
  ADD PRIMARY KEY (`ttype`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `taskID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tasks`
--
ALTER TABLE `tasks`
  ADD CONSTRAINT `tasks_ibfk_1` FOREIGN KEY (`taskType`) REFERENCES `tasktype` (`ttype`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tasks_ibfk_2` FOREIGN KEY (`fromUser`) REFERENCES `users` (`username`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
