-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 14, 2017 at 06:30 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Cap_Dev_Run`
--

-- --------------------------------------------------------

--
-- Table structure for table `Class`
--

CREATE TABLE `Class` (
  `ClassID` varchar(2) NOT NULL,
  `CourseID` varchar(8) NOT NULL,
  `Syllabus` blob NOT NULL,
  `Semester` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Class`
--

INSERT INTO `Class` (`ClassID`, `CourseID`, `Syllabus`, `Semester`) VALUES
('01', 'CHEM2016', '', 'SPR 2017'),
('02', 'CHEM2016', '', 'FALL 2016'),
('03', 'MATH2050', '', 'SPR 2017'),
('04', 'CSCI4098', '', 'SPR 2017'),
('06', 'MATH1040', '', 'SPR 2017');

-- --------------------------------------------------------

--
-- Table structure for table `Course`
--

CREATE TABLE `Course` (
  `CourseID` varchar(8) NOT NULL,
  `CourseTitle` varchar(50) NOT NULL,
  `InstructorID` int(6) NOT NULL,
  `CourseDescription` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Course`
--

INSERT INTO `Course` (`CourseID`, `CourseTitle`, `InstructorID`, `CourseDescription`) VALUES
('CHEM2016', 'Organic_Chemistry_II_Lecture', 111111, 'This course is fun.'),
('CSCI4098', 'CS_Capstone_Experience_I', 123456, 'This course is setup like a group project. '),
('ENGL1002', 'College_Writing', 101010, 'Course everyone takes.'),
('MATH1040', 'College_Algebra', 111111, 'This is Algebra'),
('MATH2050', 'Discrete_Mathematics', 101010, 'This is the most challenging math course at La Roche.');

-- --------------------------------------------------------

--
-- Table structure for table `Course_Assessment_Form_Section_1`
--

CREATE TABLE `Course_Assessment_Form_Section_1` (
  `CAFS1ID` varchar(255) NOT NULL,
  `NewSLOs` longblob NOT NULL,
  `Upgrades` longblob NOT NULL,
  `Enhancements` longblob NOT NULL,
  `Modifications` longblob NOT NULL,
  `Other` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Course_Assessment_Form_Section_1`
--

INSERT INTO `Course_Assessment_Form_Section_1` (`CAFS1ID`, `NewSLOs`, `Upgrades`, `Enhancements`, `Modifications`, `Other`) VALUES
('CHEM2016-SPR2017', 0x6e6f6e6565, 0x68656c6c6f2066726f6d20746865206f746865722073696465, 0x4d75737420686176652063616c6c656420612074686f7573616e642074696d6573, 0x57686572652061726520796f7520686964696e67206174, 0x49206661696c6564206469736372657465206d617468),
('MATH2050-SPR2017', 0x4d6174682069732066756e, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `Course_Assessment_Form_Section_2`
--

CREATE TABLE `Course_Assessment_Form_Section_2` (
  `CAFS1ID` varchar(255) NOT NULL,
  `ChemConcept` longblob NOT NULL,
  `ObjectivesContent` longblob NOT NULL,
  `GeneralComments` longblob NOT NULL,
  `percentA` varchar(25) NOT NULL,
  `percentB` varchar(25) NOT NULL,
  `percentC` varchar(25) NOT NULL,
  `percentD` varchar(25) NOT NULL,
  `percentF` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Course_Assessment_Form_Section_2`
--

INSERT INTO `Course_Assessment_Form_Section_2` (`CAFS1ID`, `ChemConcept`, `ObjectivesContent`, `GeneralComments`, `percentA`, `percentB`, `percentC`, `percentD`, `percentF`) VALUES
('CHEM2016-SPR2017', 0x4e6f7468696e67, 0x45766572797468696e67, 0x416e797468696e67, '2', '1', '0', '0', '0'),
('MATH2050-SPR2017', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `Course_Assessment_Form_Section_3`
--

CREATE TABLE `Course_Assessment_Form_Section_3` (
  `CAFS1ID` varchar(255) NOT NULL,
  `CoursePreReq` longblob NOT NULL,
  `Textbooks` longblob NOT NULL,
  `StudentAsse` longblob NOT NULL,
  `Pedagogy` longblob NOT NULL,
  `Faculty` longblob NOT NULL,
  `MinorCapitalEq` longblob NOT NULL,
  `Other` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Course_Assessment_Form_Section_3`
--

INSERT INTO `Course_Assessment_Form_Section_3` (`CAFS1ID`, `CoursePreReq`, `Textbooks`, `StudentAsse`, `Pedagogy`, `Faculty`, `MinorCapitalEq`, `Other`) VALUES
('CHEM2016-SPR2017', 0x4348454d31303130, 0x436f6f6c, '', '', '', '', ''),
('MATH2050-SPR2017', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `Course_Assessment_Form_Section_4`
--

CREATE TABLE `Course_Assessment_Form_Section_4` (
  `CAFS1ID` varchar(255) NOT NULL,
  `Sec4Num` int(20) NOT NULL,
  `IDNum` int(20) NOT NULL,
  `LearningIssue` varchar(255) NOT NULL,
  `ExtentInstructor` longblob NOT NULL,
  `InstructorRecommendations` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Course_Assessment_Form_Section_4`
--

INSERT INTO `Course_Assessment_Form_Section_4` (`CAFS1ID`, `Sec4Num`, `IDNum`, `LearningIssue`, `ExtentInstructor`, `InstructorRecommendations`) VALUES
('CHEM2016-SPR2017', 1, 1, '1', 0x31, 0x31),
('CHEM2016-SPR2017', 0, 0, '', '', ''),
('CHEM2016-SPR2017', 0, 0, '', '', ''),
('CHEM2016-SPR2017', 0, 0, '', '', ''),
('CHEM2016-SPR2017', 0, 0, '', '', ''),
('MATH2050-SPR2017', 1, 0, '', '', ''),
('MATH2050-SPR2017', 0, 0, '', '', ''),
('MATH2050-SPR2017', 0, 0, '', '', ''),
('MATH2050-SPR2017', 0, 0, '', '', ''),
('MATH2050-SPR2017', 0, 0, '', '', ''),
('CHEM2016-SPR2017', 1, 1, '1', 0x31, 0x31),
('CHEM2016-SPR2017', 0, 0, '', '', ''),
('CHEM2016-SPR2017', 0, 0, '', '', ''),
('CHEM2016-SPR2017', 0, 0, '', '', ''),
('CHEM2016-SPR2017', 0, 0, '', '', ''),
('CHEM2016-SPR2017', 1, 1, '1', 0x31, 0x31),
('CHEM2016-SPR2017', 0, 0, '', '', ''),
('CHEM2016-SPR2017', 0, 0, '', '', ''),
('CHEM2016-SPR2017', 0, 0, '', '', ''),
('CHEM2016-SPR2017', 0, 0, '', '', ''),
('CHEM2016-SPR2017', 1, 1, '1', 0x31, 0x31),
('CHEM2016-SPR2017', 0, 0, '', '', ''),
('CHEM2016-SPR2017', 0, 0, '', '', ''),
('CHEM2016-SPR2017', 0, 0, '', '', ''),
('CHEM2016-SPR2017', 0, 0, '', '', ''),
('CHEM2016-SPR2017', 1, 1, '1', 0x31, 0x31),
('CHEM2016-SPR2017', 0, 0, '', '', ''),
('CHEM2016-SPR2017', 0, 0, '', '', ''),
('CHEM2016-SPR2017', 0, 0, '', '', ''),
('CHEM2016-SPR2017', 0, 0, '', '', ''),
('CHEM2016-SPR2017', 1, 1, '1', 0x31, 0x31),
('CHEM2016-SPR2017', 0, 0, '', '', ''),
('CHEM2016-SPR2017', 0, 0, '', '', ''),
('CHEM2016-SPR2017', 0, 0, '', '', ''),
('CHEM2016-SPR2017', 0, 0, '', '', ''),
('CHEM2016-SPR2017', 1, 1, '1', 0x31, 0x31),
('CHEM2016-SPR2017', 0, 0, '', '', ''),
('CHEM2016-SPR2017', 0, 0, '', '', ''),
('CHEM2016-SPR2017', 0, 0, '', '', ''),
('CHEM2016-SPR2017', 0, 0, '', '', ''),
('CHEM2016-SPR2017', 1, 1, '1', 0x31, 0x31),
('CHEM2016-SPR2017', 0, 0, '', '', ''),
('CHEM2016-SPR2017', 0, 0, '', '', ''),
('CHEM2016-SPR2017', 0, 0, '', '', ''),
('CHEM2016-SPR2017', 0, 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `Course_Assessment_Form_Section_5`
--

CREATE TABLE `Course_Assessment_Form_Section_5` (
  `CAFS1ID` varchar(255) NOT NULL,
  `Sec5Num` int(20) NOT NULL,
  `IDNum` int(20) NOT NULL,
  `Grade` varchar(1) NOT NULL,
  `LearningIssue` varchar(255) NOT NULL,
  `ExtentInstructorInt` longblob NOT NULL,
  `InstructorEvalRecommendations` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Course_Assessment_Form_Section_5`
--

INSERT INTO `Course_Assessment_Form_Section_5` (`CAFS1ID`, `Sec5Num`, `IDNum`, `Grade`, `LearningIssue`, `ExtentInstructorInt`, `InstructorEvalRecommendations`) VALUES
('', 2, 1, 'A', '1, 7', 0x7477656e7479, ''),
('', 0, 0, '', '', '', ''),
('', 0, 0, '', '', '', ''),
('', 0, 0, '', '', '', ''),
('', 0, 0, '', '', '', ''),
('CHEM2016-SPR2017', 1, 2, 'A', '1, 7', 0x6e6f6e65, ''),
('CHEM2016-SPR2017', 0, 0, '', '', '', ''),
('CHEM2016-SPR2017', 0, 0, '', '', '', ''),
('CHEM2016-SPR2017', 0, 0, '', '', '', ''),
('CHEM2016-SPR2017', 0, 0, '', '', '', ''),
('CHEM2016-SPR2017', 1, 2, 'A', '1, 7', 0x6e6f6e65, ''),
('CHEM2016-SPR2017', 0, 0, 'A', '', '', ''),
('CHEM2016-SPR2017', 0, 0, '', '', '', ''),
('CHEM2016-SPR2017', 0, 0, '', '', '', ''),
('CHEM2016-SPR2017', 0, 0, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `course_assessment_review_section`
--

CREATE TABLE `course_assessment_review_section` (
  `ReviewID` int(11) NOT NULL,
  `DepReview` longblob NOT NULL,
  `DepReviewer` longblob NOT NULL,
  `NewActPlan` longblob NOT NULL,
  `NewBudgItem` longblob NOT NULL,
  `DivChairReview` longblob NOT NULL,
  `DivChairSig` longblob NOT NULL,
  `DivChairRevDate` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `course_assessment_review_section`
--

INSERT INTO `course_assessment_review_section` (`ReviewID`, `DepReview`, `DepReviewer`, `NewActPlan`, `NewBudgItem`, `DivChairReview`, `DivChairSig`, `DivChairRevDate`) VALUES
(0, '', '', '', '', '', '', 0x31322f31342f3137),
(11111, 0x667364616673, 0x666473, 0x6664736166, 0x6664736166736166617366, 0x666473, 0x666461736661736466736466, 0x31322f30362f3137);

-- --------------------------------------------------------

--
-- Table structure for table `Course_SLOs`
--

CREATE TABLE `Course_SLOs` (
  `CourseSLOID` int(6) NOT NULL,
  `CourseID` varchar(10) NOT NULL,
  `SLO1` varchar(255) DEFAULT NULL,
  `SLO2` varchar(255) DEFAULT NULL,
  `SLO3` varchar(255) DEFAULT NULL,
  `SLO4` varchar(255) DEFAULT NULL,
  `SLO5` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Course_SLOs`
--

INSERT INTO `Course_SLOs` (`CourseSLOID`, `CourseID`, `SLO1`, `SLO2`, `SLO3`, `SLO4`, `SLO5`) VALUES
(38854, 'CHEM2016', 'false', 'false', 'false', 'false', 'false'),
(40628, 'CHEM2016', 'false', 'false', 'false', 'false', 'false'),
(74722, 'CSCI4098', 'false', 'true', 'false', 'false', 'false'),
(101554, 'MATH1040', 'true', 'false', 'false', 'false', 'true'),
(105356, 'CHEM2016', 'false', 'false', 'false', 'false', 'false'),
(117102, 'CHEM2016', 'false', 'false', 'false', 'false', 'false'),
(151761, 'CHEM2016', 'false', 'false', 'false', 'false', 'false'),
(175939, 'CHEM2016', 'false', 'false', 'false', 'false', 'false'),
(188064, 'MATH2050', 'false', 'false', 'false', 'false', 'false'),
(201481, 'CHEM2016', 'false', 'false', 'false', 'false', 'false'),
(230719, 'CHEM2016', 'false', 'false', 'false', 'false', 'true'),
(232296, 'CHEM2016', 'false', 'false', 'false', 'false', 'false'),
(266812, 'CHEM2016', 'false', 'false', 'false', 'false', 'false'),
(299611, 'CHEM2016', 'true', 'false', 'false', 'false', 'true'),
(310873, 'CHEM2016', 'false', 'false', 'false', 'false', 'false'),
(314401, 'CHEM2016', 'false', 'false', 'false', 'false', 'false'),
(316839, 'MATH2050', 'false', 'true', 'false', 'false', 'false'),
(339119, 'CHEM2016', 'false', 'false', 'false', 'false', 'true'),
(369594, 'MATH2050', 'false', 'false', 'false', 'false', 'false'),
(372130, 'MATH1040', 'false', 'false', 'true', 'false', 'false'),
(473927, 'CHEM2016', 'false', 'false', 'false', 'true', 'false'),
(557469, 'CHEM2016', 'true', 'false', 'false', 'false', 'true'),
(588416, 'CSCI4098', 'false', 'true', 'false', 'false', 'false'),
(655797, 'CHEM2016', 'false', 'false', 'false', 'false', 'false'),
(661880, 'CHEM2016', 'false', 'false', 'false', 'false', 'false'),
(696643, 'CHEM2016', 'false', 'false', 'false', 'false', 'false'),
(723426, 'MATH1040', 'false', 'false', 'true', 'false', 'false'),
(744669, 'MATH2050', 'false', 'true', 'false', 'true', 'false'),
(744857, 'CHEM2016', 'false', 'false', 'false', 'false', 'false'),
(756017, 'MATH2050', 'false', 'true', 'false', 'true', 'false'),
(757858, 'CHEM2016', 'false', 'false', 'false', 'false', 'false'),
(759507, 'CSCI4098', 'true', 'true', 'false', 'true', 'false'),
(792656, 'CHEM2016', 'false', 'false', 'false', 'false', 'false'),
(800294, 'CHEM2016', 'false', 'false', 'false', 'false', 'false'),
(816287, 'CHEM2016', 'false', 'false', 'false', 'true', 'false'),
(848128, 'CSCI4098', 'true', 'true', 'false', 'true', 'false'),
(860122, 'MATH2050', 'false', 'true', 'false', 'false', 'false'),
(893447, 'MATH2050', 'false', 'false', 'false', 'false', 'false'),
(922396, 'CHEM2016', 'false', 'false', 'false', 'false', 'false'),
(977745, 'MATH2050', 'false', 'false', 'false', 'false', 'false');

-- --------------------------------------------------------

--
-- Table structure for table `Instructor`
--

CREATE TABLE `Instructor` (
  `InstructorID` int(6) NOT NULL,
  `InstructorName` varchar(40) NOT NULL,
  `InstructorTitle` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Instructor`
--

INSERT INTO `Instructor` (`InstructorID`, `InstructorName`, `InstructorTitle`) VALUES
(101010, 'Brian_Smith', 'Professor of Mathematics'),
(111111, 'Dr._D._T._Fujito', 'Professor / Chair of Chemistry'),
(123456, 'Gregory_Lang', 'Prince of Azkaban');

-- --------------------------------------------------------

--
-- Table structure for table `Misc_Notes`
--

CREATE TABLE `Misc_Notes` (
  `Misc_ID` int(11) NOT NULL,
  `Notes` text,
  `Date` datetime DEFAULT NULL,
  `Author` varchar(255) DEFAULT NULL,
  `Student_ID` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Misc_Notes`
--

INSERT INTO `Misc_Notes` (`Misc_ID`, `Notes`, `Date`, `Author`, `Student_ID`) VALUES
(26, 'A new note', '2017-12-05 03:43:27', 'johnfnicholson123@gmail.com', 123456),
(27, 'another note', '2017-12-05 04:02:05', 'johnfnicholson123@gmail.com', 123456),
(28, 'fdsaf', '2017-12-05 04:02:15', 'johnfnicholson123@gmail.com', 123456),
(29, 'fdafsfa', '2017-12-05 04:02:24', 'johnfnicholson123@gmail.com', 123456),
(30, 'This note is longer in order to test how the styling is effected by it. Hopefully this works correctly when posted or at least looks good.', '2017-12-05 04:23:33', 'johnfnicholson123@gmail.com', 123456),
(31, 'new note', '2017-12-06 21:50:48', 'johnfnicholson123@gmail.com', 123456);

-- --------------------------------------------------------

--
-- Table structure for table `SLOs`
--

CREATE TABLE `SLOs` (
  `SLOID` int(2) NOT NULL,
  `SLOName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `SLOs`
--

INSERT INTO `SLOs` (`SLOID`, `SLOName`) VALUES
(1, 'Knowledge Base'),
(2, 'Lab Skills'),
(3, 'Practice'),
(4, 'Societal Connects'),
(5, 'Capstone');

-- --------------------------------------------------------

--
-- Table structure for table `Student`
--

CREATE TABLE `Student` (
  `Student_ID` int(32) NOT NULL,
  `Student_Name` varchar(255) NOT NULL,
  `Student_Major` varchar(255) NOT NULL,
  `Student_Year` varchar(32) NOT NULL,
  `Student_Semester` varchar(32) NOT NULL,
  `Student_Date` datetime DEFAULT NULL,
  `Student_Photo` varchar(255) DEFAULT NULL,
  `Student_Math_Grade` varchar(10) DEFAULT NULL,
  `Student_Athletics` varchar(255) DEFAULT NULL,
  `Student_Housing_Status` varchar(255) DEFAULT NULL,
  `Student_Honors` varchar(255) DEFAULT NULL,
  `International_Student` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Student`
--

INSERT INTO `Student` (`Student_ID`, `Student_Name`, `Student_Major`, `Student_Year`, `Student_Semester`, `Student_Date`, `Student_Photo`, `Student_Math_Grade`, `Student_Athletics`, `Student_Housing_Status`, `Student_Honors`, `International_Student`) VALUES
(0, 'Johnny Nicholson', 'Chemistry', '2017', 'Spring', '2017-12-04 19:06:20', '', 'B', 'no', 'resident', 'No', 'No'),
(121212, 'New Guy', 'Chemistry', '2014', 'Fall', '2017-11-29 22:20:29', '', 'A', 'no', 'commuter', 'No', 'No'),
(123456, 'Johnny Nicholson', 'Chemistry', '2015', 'Summer', '2017-12-06 21:50:29', 'Controller/Independent-Learning-Record-Controllers/Student-Photos/Johnny Nicholson/IMG_1209.JPG', 'B+', 'no', 'resident', 'Yes', 'No'),
(323232, 'New Tester', 'Chemistry', '2014', 'Fall', '2017-11-14 22:49:48', '', 'A', 'fdsf', 'commuter', 'No', 'No'),
(545454, 'Steven Foster', 'Chemistry', '2014', 'Fall', '2017-11-29 22:21:32', '', 'A', 'no', 'commuter', 'No', 'Cross Country'),
(555555, 'New Guy', 'Chemistry', '2014', 'Fall', '2017-11-14 20:27:00', '', 'A', 'no', 'commuter', 'No', 'No'),
(654321, 'Andrew Leach', 'Biochemistry', '2016', 'Spring', '2017-12-06 17:51:55', 'Controller/Independent-Learning-Record-Controllers/Student-Photos/Andrew Leach/IMG_1158.JPG', 'A', 'no', 'commuter', 'No', 'No'),
(666666, 'New Guy', 'Chemistry', '2014', 'Fall', '2017-11-14 20:28:36', '', 'A', 'no', 'commuter', 'No', 'No'),
(777777, 'TEST', 'Chemistry', '2014', 'Fall', '2017-11-14 20:46:10', '', 'A', 'Football', 'commuter', 'No', 'Tiwan'),
(989898, 'John Nich', 'Chemistry', '2014', 'Fall', '2017-11-15 17:20:29', '', 'B-', 'no', 'resident', 'No', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(12) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(3, 'Abdullah@test.com', '6afd8707350fc31ca57a204757757a71'),
(4, 'test@test.com', 'f5183be9aa9e17875c6994340f0c738c'),
(5, 'johnfnicholson123@gmail.com', '0210d7b9161eabe72bc4e5789c6243f8'),
(6, 'anotherdude@test.com', '220f06a64abb879538c7a805e3f0d116'),
(7, 'newaccount@new.com', '909d9ac85cd90b022644c495a6d7d181'),
(8, 'new@new.com', '5d0a8818287329f50362ca1283691079');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Class`
--
ALTER TABLE `Class`
  ADD PRIMARY KEY (`ClassID`),
  ADD UNIQUE KEY `ClassID` (`ClassID`);

--
-- Indexes for table `Course`
--
ALTER TABLE `Course`
  ADD PRIMARY KEY (`CourseID`),
  ADD UNIQUE KEY `CourseID` (`CourseID`);

--
-- Indexes for table `Course_Assessment_Form_Section_1`
--
ALTER TABLE `Course_Assessment_Form_Section_1`
  ADD PRIMARY KEY (`CAFS1ID`),
  ADD UNIQUE KEY `CAFS1ID` (`CAFS1ID`);

--
-- Indexes for table `Course_Assessment_Form_Section_2`
--
ALTER TABLE `Course_Assessment_Form_Section_2`
  ADD PRIMARY KEY (`CAFS1ID`),
  ADD UNIQUE KEY `CAFS1ID` (`CAFS1ID`);

--
-- Indexes for table `Course_Assessment_Form_Section_3`
--
ALTER TABLE `Course_Assessment_Form_Section_3`
  ADD PRIMARY KEY (`CAFS1ID`),
  ADD UNIQUE KEY `CAFS1ID` (`CAFS1ID`);

--
-- Indexes for table `course_assessment_review_section`
--
ALTER TABLE `course_assessment_review_section`
  ADD PRIMARY KEY (`ReviewID`);

--
-- Indexes for table `Course_SLOs`
--
ALTER TABLE `Course_SLOs`
  ADD PRIMARY KEY (`CourseSLOID`);

--
-- Indexes for table `Instructor`
--
ALTER TABLE `Instructor`
  ADD PRIMARY KEY (`InstructorID`),
  ADD UNIQUE KEY `InstructorID` (`InstructorID`);

--
-- Indexes for table `Misc_Notes`
--
ALTER TABLE `Misc_Notes`
  ADD PRIMARY KEY (`Misc_ID`);

--
-- Indexes for table `SLOs`
--
ALTER TABLE `SLOs`
  ADD PRIMARY KEY (`SLOID`),
  ADD UNIQUE KEY `SLOID` (`SLOID`);

--
-- Indexes for table `Student`
--
ALTER TABLE `Student`
  ADD PRIMARY KEY (`Student_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Misc_Notes`
--
ALTER TABLE `Misc_Notes`
  MODIFY `Misc_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
