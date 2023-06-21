-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2021 at 04:05 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fitness_tracker`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `article_ID` int(11) NOT NULL,
  `ArticleTitle` varchar(255) NOT NULL,
  `ArticleAuthors` varchar(255) NOT NULL,
  `urls` varchar(225) NOT NULL,
  `ArticleTopic_1` varchar(225) DEFAULT NULL,
  `ArticleTopic_2` varchar(225) DEFAULT NULL,
  `ArticleTopic_3` varchar(225) DEFAULT NULL,
  `ArticleTag_1` varchar(225) DEFAULT NULL,
  `ArticleTag_2` varchar(225) DEFAULT NULL,
  `ArticleTag_3` varchar(225) DEFAULT NULL,
  `ArticleTag_4` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`article_ID`, `ArticleTitle`, `ArticleAuthors`, `urls`, `ArticleTopic_1`, `ArticleTopic_2`, `ArticleTopic_3`, `ArticleTag_1`, `ArticleTag_2`, `ArticleTag_3`, `ArticleTag_4`) VALUES
(1, 'Diet Plans for Obese People', 'KELSEY CASSELBURY', 'https://www.livestrong.com/article/304859-diet-plans-for-obese-people/', 'obese', 'food', 'diet plan', 'healthy', 'eating', 'lose weight', 'null'),
(2, 'Exercise for Obese People', 'Shirley Armstrong', 'https://www.healthline.com/health/fitness-exercise/exercise-for-obese-people#4', 'obese', 'exercise', 'fitness plan', 'healthy', 'fit', 'lose weight', 'null'),
(3, '10 Exercise to keep you healthy and fit', 'Tom MacMurry', 'https://www.daimanuel.com/2014/03/02/top-10-best-exercises-to-keep-you-healthy-and-fit/', 'fitness', 'food', 'exercise', 'healthy', 'stay fit', 'lose weight', 'null'),
(4, 'Hike it Out', 'Siobhan Harmer', 'https://www.lifehack.org/articles/lifestyle/30-the-worlds-most-breathtaking-hiking-trails-you-must-visit.html', 'fitness', 'hike', 'fit', 'obese', 'wellness', 'lose weight', 'null');

-- --------------------------------------------------------

--
-- Table structure for table `cardiotracker`
--

CREATE TABLE `cardiotracker` (
  `username` varchar(255) NOT NULL,
  `cardio_date` date NOT NULL,
  `cardio_minutes` int(11) DEFAULT NULL,
  `cardio_heartrate` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `challenges`
--

CREATE TABLE `challenges` (
  `username` varchar(225) NOT NULL,
  `challenge_name` varchar(255) NOT NULL,
  `submission` text NOT NULL,
  `points_granted` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `diettracker`
--

CREATE TABLE `diettracker` (
  `username` varchar(255) NOT NULL,
  `diet_date` date NOT NULL,
  `calories_consumed` int(11) DEFAULT 0,
  `weight` int(11) DEFAULT NULL,
  `gProteinConsumed` int(11) DEFAULT 0,
  `gCarbsConsumed` int(11) DEFAULT 0,
  `gFatConsumed` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(255) NOT NULL,
  `fromEmail` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `followedexercises`
--

CREATE TABLE `followedexercises` (
  `username` varchar(255) NOT NULL,
  `user_exercise1_name` varchar(255) DEFAULT NULL,
  `user_exercise2_name` varchar(255) DEFAULT NULL,
  `user_exercise3_name` varchar(255) DEFAULT NULL,
  `user_exercise4_name` varchar(255) DEFAULT NULL,
  `user_exercise5_name` varchar(255) DEFAULT NULL,
  `user_exercise6_name` varchar(255) DEFAULT NULL,
  `user_exercise7_name` varchar(255) DEFAULT NULL,
  `user_exercise8_name` varchar(255) DEFAULT NULL,
  `user_exercise9_name` varchar(255) DEFAULT NULL,
  `user_exercise10_name` varchar(255) DEFAULT NULL,
  `user_exercise11_name` varchar(255) DEFAULT NULL,
  `user_exercise12_name` varchar(255) DEFAULT NULL,
  `user_exercise13_name` varchar(255) DEFAULT NULL,
  `user_exercise14_name` varchar(255) DEFAULT NULL,
  `user_exercise15_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `followedexercises`
--

INSERT INTO `followedexercises` (`username`, `user_exercise1_name`, `user_exercise2_name`, `user_exercise3_name`, `user_exercise4_name`, `user_exercise5_name`, `user_exercise6_name`, `user_exercise7_name`, `user_exercise8_name`, `user_exercise9_name`, `user_exercise10_name`, `user_exercise11_name`, `user_exercise12_name`, `user_exercise13_name`, `user_exercise14_name`, `user_exercise15_name`) VALUES
('testuser123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fooditem`
--

CREATE TABLE `fooditem` (
  `name` varchar(225) NOT NULL,
  `quantity` varchar(225) NOT NULL,
  `calories` int(11) NOT NULL,
  `gProtein` int(11) NOT NULL,
  `gFat` int(11) NOT NULL,
  `gCarbs` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `listofchallenges`
--

CREATE TABLE `listofchallenges` (
  `challenge_name` varchar(225) NOT NULL,
  `challenge_description` varchar(225) NOT NULL,
  `points_submission` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userpoints`
--

CREATE TABLE `userpoints` (
  `username` varchar(225) NOT NULL,
  `points` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `first_name` varchar(225) NOT NULL,
  `last_name` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `email`, `password`, `first_name`, `last_name`) VALUES
('testuser123', 'testuser123@gmail.com', '202cb962ac59075b964b07152d234b70', 'test', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `userwellnesstest`
--

CREATE TABLE `userwellnesstest` (
  `testID` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `Age` int(11) NOT NULL,
  `Height_cm` varchar(225) NOT NULL,
  `Weight_kg` varchar(225) NOT NULL,
  `BMI_calculated` varchar(225) NOT NULL,
  `Test_Date` date NOT NULL,
  `Sex` varchar(225) NOT NULL,
  `ActivityLevel` varchar(225) NOT NULL,
  `WeightGoal` varchar(225) NOT NULL,
  `restingPulse` varchar(225) NOT NULL,
  `MaxHeartRate` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `weightliftingtracker`
--

CREATE TABLE `weightliftingtracker` (
  `username` varchar(255) NOT NULL,
  `weights_date` date NOT NULL,
  `user_exercise1_name` varchar(255) DEFAULT NULL,
  `user_exercise1_weight` int(11) DEFAULT NULL,
  `user_exercise1_reps` int(11) DEFAULT NULL,
  `user_exercise2_name` varchar(255) DEFAULT NULL,
  `user_exercise2_weight` int(11) DEFAULT NULL,
  `user_exercise2_reps` int(11) DEFAULT NULL,
  `user_exercise3_name` varchar(255) DEFAULT NULL,
  `user_exercise3_weight` int(11) DEFAULT NULL,
  `user_exercise3_reps` int(11) DEFAULT NULL,
  `user_exercise4_name` varchar(255) DEFAULT NULL,
  `user_exercise4_weight` int(11) DEFAULT NULL,
  `user_exercise4_reps` int(11) DEFAULT NULL,
  `user_exercise5_name` varchar(255) DEFAULT NULL,
  `user_exercise5_weight` int(11) DEFAULT NULL,
  `user_exercise5_reps` int(11) DEFAULT NULL,
  `user_exercise6_name` varchar(255) DEFAULT NULL,
  `user_exercise6_weight` int(11) DEFAULT NULL,
  `user_exercise6_reps` int(11) DEFAULT NULL,
  `user_exercise7_name` varchar(255) DEFAULT NULL,
  `user_exercise7_weight` int(11) DEFAULT NULL,
  `user_exercise7_reps` int(11) DEFAULT NULL,
  `user_exercise8_name` varchar(255) DEFAULT NULL,
  `user_exercise8_weight` int(11) DEFAULT NULL,
  `user_exercise8_reps` int(11) DEFAULT NULL,
  `user_exercise9_name` varchar(255) DEFAULT NULL,
  `user_exercise9_weight` int(11) DEFAULT NULL,
  `user_exercise9_reps` int(11) DEFAULT NULL,
  `user_exercise10_name` varchar(255) DEFAULT NULL,
  `user_exercise10_weight` int(11) DEFAULT NULL,
  `user_exercise10_reps` int(11) DEFAULT NULL,
  `user_exercise11_name` varchar(255) DEFAULT NULL,
  `user_exercise11_weight` int(11) DEFAULT NULL,
  `user_exercise11_reps` int(11) DEFAULT NULL,
  `user_exercise12_name` varchar(255) DEFAULT NULL,
  `user_exercise12_weight` int(11) DEFAULT NULL,
  `user_exercise12_reps` int(11) DEFAULT NULL,
  `user_exercise13_name` varchar(255) DEFAULT NULL,
  `user_exercise13_weight` int(11) DEFAULT NULL,
  `user_exercise13_reps` int(11) DEFAULT NULL,
  `user_exercise14_name` varchar(255) DEFAULT NULL,
  `user_exercise14_weight` int(11) DEFAULT NULL,
  `user_exercise14_reps` int(11) DEFAULT NULL,
  `user_exercise15_name` varchar(255) DEFAULT NULL,
  `user_exercise15_weight` int(11) DEFAULT NULL,
  `user_exercise15_reps` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`article_ID`),
  ADD UNIQUE KEY `urls` (`urls`);

--
-- Indexes for table `cardiotracker`
--
ALTER TABLE `cardiotracker`
  ADD PRIMARY KEY (`username`,`cardio_date`);

--
-- Indexes for table `challenges`
--
ALTER TABLE `challenges`
  ADD KEY `username` (`username`),
  ADD KEY `challenge_name` (`challenge_name`);

--
-- Indexes for table `diettracker`
--
ALTER TABLE `diettracker`
  ADD PRIMARY KEY (`username`,`diet_date`);

--
-- Indexes for table `followedexercises`
--
ALTER TABLE `followedexercises`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `fooditem`
--
ALTER TABLE `fooditem`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `listofchallenges`
--
ALTER TABLE `listofchallenges`
  ADD PRIMARY KEY (`challenge_name`);

--
-- Indexes for table `userpoints`
--
ALTER TABLE `userpoints`
  ADD KEY `username` (`username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `userwellnesstest`
--
ALTER TABLE `userwellnesstest`
  ADD PRIMARY KEY (`testID`);

--
-- Indexes for table `weightliftingtracker`
--
ALTER TABLE `weightliftingtracker`
  ADD PRIMARY KEY (`username`,`weights_date`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `article_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `userwellnesstest`
--
ALTER TABLE `userwellnesstest`
  MODIFY `testID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cardiotracker`
--
ALTER TABLE `cardiotracker`
  ADD CONSTRAINT `cardiotracker_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`);

--
-- Constraints for table `challenges`
--
ALTER TABLE `challenges`
  ADD CONSTRAINT `challenges_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`),
  ADD CONSTRAINT `challenges_ibfk_2` FOREIGN KEY (`challenge_name`) REFERENCES `listofchallenges` (`challenge_name`);

--
-- Constraints for table `diettracker`
--
ALTER TABLE `diettracker`
  ADD CONSTRAINT `diettracker_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`);

--
-- Constraints for table `followedexercises`
--
ALTER TABLE `followedexercises`
  ADD CONSTRAINT `followedexercises_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`);

--
-- Constraints for table `userpoints`
--
ALTER TABLE `userpoints`
  ADD CONSTRAINT `userpoints_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`);

--
-- Constraints for table `weightliftingtracker`
--
ALTER TABLE `weightliftingtracker`
  ADD CONSTRAINT `weightliftingtracker_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
