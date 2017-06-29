-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2017 at 05:20 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `idiot`
--

-- --------------------------------------------------------

--
-- Table structure for table `1318710001`
--

CREATE TABLE `1318710001` (
  `id` int(10) UNSIGNED NOT NULL,
  `testname` varchar(50) NOT NULL,
  `marks` varchar(10) NOT NULL,
  `rank` varchar(10) NOT NULL
) ;

--
-- Dumping data for table `1318710001`
--

INSERT INTO `1318710001` (`id`, `testname`, `marks`, `rank`) VALUES
(1, 'test', '2', ''),
(2, 'Aaku', '2', '');

-- --------------------------------------------------------

--
-- Table structure for table `1318710001ans`
--

CREATE TABLE `1318710001ans` (
  `id` int(10) UNSIGNED NOT NULL,
  `qno` int(50) UNSIGNED DEFAULT NULL,
  `so` int(8) UNSIGNED DEFAULT NULL
) ;

--
-- Dumping data for table `1318710001ans`
--

INSERT INTO `1318710001ans` (`id`, `qno`, `so`) VALUES
(4, 4, 1),
(5, 5, 4),
(6, 6, 2),
(7, 1, 3),
(8, 10, 2);

-- --------------------------------------------------------

--
-- Table structure for table `aaku`
--

CREATE TABLE `aaku` (
  `id` int(10) NOT NULL,
  `question` longtext NOT NULL,
  `op1` varchar(50) NOT NULL,
  `op2` varchar(50) NOT NULL,
  `op3` varchar(50) NOT NULL,
  `op4` varchar(50) NOT NULL,
  `cop` varchar(50) NOT NULL
) ;

--
-- Dumping data for table `aaku`
--

INSERT INTO `aaku` (`id`, `question`, `op1`, `op2`, `op3`, `op4`, `cop`) VALUES
(1, 'sdfsd', 'asd', 'asd', 'sad', 'sads', ''),
(2, 'djsdl slfjsd ifjsidofjs', 'sjdflksaf<br>', 'ajdlsf<br>', 'sfjsldkf<br>', 'sdfjsdlk<br>', ''),
(3, 'sdslkfj  sfjsdlfj jsfjsidfj slfjsi fjsdi', 'sdfjksldf<br>', 'l kfjsdlkf<br>', 's fklsjd<br>', 'djklsdf<br>', ''),
(4, 'This is aakarsh yadah vdsf in the world of the dtabase in tha main ', 'aaku', 'yadaav', 'ji', 'sadk;', ''),
(5, 'Asdfjs sjkldjflk sdfjlksdfjsdlk fjs', 'sjflk sflk', 'j klsjfslk', 'jsdfk lsdjflk', 'jsdf lksdjf', ''),
(6, ' djflsjf fj fjsdjif ijldkfj oifjli vjsdlkfj sjxlkfj sl ifj slkjsflk jsdlfkjs flksjlksdf lksjflkjf lksdjfowrpo k;ldfo sdfjs dfjlk jsdij id', 'lkdjf lskf', 'dlk fjsdklf ', 'sdjfk lsdjfkl', ' jslkf', ''),
(7, 'd hfsdj hf  jfjsdfjs difoj n jai sjdfoisdj fn lkjeiofjsoidfj sdif', 'ajd ijfios fj', 'sd fjsdifjio', 'ds lksdjflsdk', 'd flksdjf', ''),
(8, 'This is now how to find the main lead in inda', 'option a', 'option b', 'option c', 'vkjsdf ', ''),
(9, '', '', '', '', '', ''),
(10, 'dsfhksdjf', 'slkfjsdlkf', 'jsdlkf', 'sdklfj', 'sdklfj', ''),
(11, 'sdkasldkasj', 'sdslka', 'sdjl', 'sdskl', 'sad', '');

-- --------------------------------------------------------

--
-- Table structure for table `correct`
--

CREATE TABLE `correct` (
  `id` int(5) NOT NULL,
  `qno` smallint(3) NOT NULL,
  `co` tinyint(1) NOT NULL
) ;

--
-- Dumping data for table `correct`
--

INSERT INTO `correct` (`id`, `qno`, `co`) VALUES
(1, 4, 1),
(2, 5, 3),
(3, 6, 2);

-- --------------------------------------------------------

--
-- Table structure for table `englishquiz`
--

CREATE TABLE `englishquiz` (
  `id` int(10) NOT NULL,
  `question` longtext NOT NULL,
  `op1` varchar(50) NOT NULL,
  `op2` varchar(50) NOT NULL,
  `op3` varchar(50) NOT NULL,
  `op4` varchar(50) NOT NULL,
  `cop` varchar(50) NOT NULL
) ;

-- --------------------------------------------------------

--
-- Table structure for table `name of quiz`
--

CREATE TABLE `name of quiz` (
  `id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` tinyint(1) DEFAULT NULL
) ;

--
-- Dumping data for table `name of quiz`
--

INSERT INTO `name of quiz` (`id`, `name`, `status`) VALUES
(52, 'Englishquiz', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `newregr`
--

CREATE TABLE `newregr` (
  `id` int(13) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `roll` bigint(13) NOT NULL,
  `branch` varchar(5) NOT NULL,
  `password` varchar(50) NOT NULL,
  `present` tinyint(1) NOT NULL
) ;

--
-- Dumping data for table `newregr`
--

INSERT INTO `newregr` (`id`, `name`, `email`, `roll`, `branch`, `password`, `present`) VALUES
(1, 'awda', 'akarshgdps@gmail.com', 1318710001, 'cse', '123', 0);

-- --------------------------------------------------------

--
-- Table structure for table `starttest`
--

CREATE TABLE `starttest` (
  `id` int(10) UNSIGNED NOT NULL,
  `qno` int(100) NOT NULL,
  `so` int(5) NOT NULL
) ;

--
-- Dumping data for table `starttest`
--

INSERT INTO `starttest` (`id`, `qno`, `so`) VALUES
(1, 1, 1),
(2, 1, 1),
(3, 1, 1),
(4, 1, 1),
(5, 1, 1),
(6, 4, 1),
(7, 4, 1),
(8, 4, 1),
(9, 4, 1),
(10, 5, 0),
(11, 6, 0),
(12, 7, 0),
(13, 8, 0),
(14, 9, 0),
(15, 0, 1),
(16, 0, 1),
(17, 0, 1),
(18, 0, 1),
(19, 0, 1),
(20, 4, 1),
(21, 5, 1),
(22, 6, 4),
(23, 4, 1),
(24, 4, 1),
(25, 5, 0),
(26, 5, 0),
(27, 5, 0),
(28, 5, 0),
(29, 5, 0),
(30, 5, 0),
(31, 5, 0),
(32, 5, 0),
(33, 5, 0),
(34, 5, 0),
(35, 5, 0),
(36, 5, 0),
(37, 5, 0),
(38, 5, 0),
(39, 5, 0),
(40, 5, 0),
(41, 5, 0),
(42, 5, 0),
(43, 5, 0),
(44, 5, 0),
(45, 5, 0),
(46, 5, 0),
(47, 5, 0),
(48, 5, 0),
(49, 5, 0),
(50, 5, 0),
(51, 5, 0),
(52, 5, 0),
(53, 6, 3),
(54, 4, 1),
(55, 4, 1),
(56, 5, 4),
(57, 6, 4),
(58, 4, 1),
(59, 5, 4),
(60, 6, 4),
(61, 6, 4),
(62, 6, 4),
(63, 6, 4),
(64, 6, 4),
(65, 6, 4),
(66, 6, 4),
(67, 6, 4),
(68, 6, 4),
(69, 6, 4),
(70, 6, 4),
(71, 6, 4),
(72, 5, 4),
(73, 6, 2),
(74, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(10) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `roll` bigint(20) NOT NULL,
  `branch` varchar(25) NOT NULL,
  `password` varchar(30) NOT NULL,
  `present` tinyint(1) DEFAULT NULL
) ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `email`, `roll`, `branch`, `password`, `present`) VALUES
(1, 'Aakarsh Yadav', 'aaku@gmail.com', 1318710001, 'cse', '1', 1),
(2, 'ankit', 'nndchaudhary8@gmail.com', 123, 'cse', '1', NULL),
(3, 'dsa', 'ankitjnv6@gmail.com', 12, 'sax', 'a', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(10) NOT NULL,
  `question` longtext NOT NULL,
  `op1` varchar(50) NOT NULL,
  `op2` varchar(50) NOT NULL,
  `op3` varchar(50) NOT NULL,
  `op4` varchar(50) NOT NULL,
  `cop` varchar(50) NOT NULL
) ;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `question`, `op1`, `op2`, `op3`, `op4`, `cop`) VALUES
(4, 'who is ankit', 'chutiya', 'gandu', 'mahagandu', 'all of these', 'all of these'),
(5, 'who is anand', 'madarchod', 'mahamadarchod', 'bhot bada madarchod', 'all of these', 'all of these'),
(6, 'who is mannu???', 'gud person', 'very good person', 'maha purush', 'all of these', 'all of these');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `1318710001`
--
ALTER TABLE `1318710001`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `1318710001ans`
--
ALTER TABLE `1318710001ans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `qno` (`qno`);

--
-- Indexes for table `aaku`
--
ALTER TABLE `aaku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `correct`
--
ALTER TABLE `correct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `englishquiz`
--
ALTER TABLE `englishquiz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `name of quiz`
--
ALTER TABLE `name of quiz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newregr`
--
ALTER TABLE `newregr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `starttest`
--
ALTER TABLE `starttest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `1318710001`
--
ALTER TABLE `1318710001`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `1318710001ans`
--
ALTER TABLE `1318710001ans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `aaku`
--
ALTER TABLE `aaku`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `correct`
--
ALTER TABLE `correct`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `englishquiz`
--
ALTER TABLE `englishquiz`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `name of quiz`
--
ALTER TABLE `name of quiz`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `newregr`
--
ALTER TABLE `newregr`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `starttest`
--
ALTER TABLE `starttest`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
