-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2019 at 10:04 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_profile` varchar(255) NOT NULL,
  `user_country` text NOT NULL,
  `user_gender` text NOT NULL,
  `forgotten_answer` varchar(100) NOT NULL,
  `log_in` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_password`, `user_profile`, `user_country`, `user_gender`, `forgotten_answer`, `log_in`) VALUES
(1, ' Arif', 'arifhussainmizi@gmail.com', 'ARIFCOSMA', 'images/download.jpg36', 'Bangladesh', 'Male', 'Harun', 'Online'),
(2, 'Abir', 'abirhussainmizi@gmail.com', '12345678', 'images/profile2.png', 'Bangladesh', 'Male', '', 'offline'),
(3, 'jannat', 'jannat@yahoo.com', '456789123', 'images/profile1.png', 'India', 'Female', '', ''),
(4, 'Hassel', 'hess546@gmail.com', '12345678', 'images/profile2.png', 'Canada', 'Female', '', ''),
(5, ' Bijon', 'bijon@yahoo.com', '12345678', 'images/64626820_157509668633826_9209251588839833600_n.jpg77', 'Germany', 'Male', 'Hello', 'Online'),
(6, 'Kamal', 'kamal@yahoo.com', '12345678', 'images/profile2.png', 'India', 'Male', '', 'Online');

-- --------------------------------------------------------

--
-- Table structure for table `user_chat`
--

CREATE TABLE `user_chat` (
  `msg_id` int(11) NOT NULL,
  `sender_username` varchar(100) NOT NULL,
  `receiver_username` varchar(100) NOT NULL,
  `msg_contant` varchar(255) NOT NULL,
  `msg_status` text NOT NULL,
  `msg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_chat`
--

INSERT INTO `user_chat` (`msg_id`, `sender_username`, `receiver_username`, `msg_contant`, `msg_status`, `msg_date`) VALUES
(1, 'Bijon', 'Bijon', 'hello', 'read', '2019-11-03 17:51:51'),
(2, 'Bijon', 'Abir', 'How? are u?', 'read', '2019-11-03 17:52:23'),
(3, 'Abir', 'Bijon', 'fine. U?', 'read', '2019-11-03 17:55:14'),
(4, 'Bijon', 'Abir', 'I am so so', 'read', '2019-11-03 17:55:55'),
(5, 'Abir', 'Bijon', 'fine. U?', 'read', '2019-11-03 17:56:08'),
(6, 'Abir', 'Bijon', 'jkdf', 'read', '2019-11-03 17:56:22'),
(7, 'Abir', 'Bijon', 'fdsfdfds', 'read', '2019-11-03 17:56:25'),
(8, 'Abir', 'Bijon', 'u', 'read', '2019-11-03 17:56:30'),
(9, 'Abir', 'Bijon', 'u', 'read', '2019-11-03 17:56:34'),
(10, 'Abir', 'Bijon', 'dsjfjdsl', 'read', '2019-11-03 17:56:38'),
(11, 'Abir', 'Bijon', 'dsfds', 'read', '2019-11-03 17:56:42'),
(12, 'Abir', 'Bijon', 'fkdsfd', 'read', '2019-11-03 17:56:50'),
(13, 'Arif', 'Kamal', 'Ki khobor, kamal?', 'unread', '2019-11-04 06:14:41'),
(14, 'Arif', 'Kamal', 'Ki khobor, kamal?', 'unread', '2019-11-04 06:14:44'),
(15, 'Arif', 'Bijon', 'hey', 'read', '2019-11-04 06:24:51'),
(16, 'Bijon', 'Bijon', 'Hi', 'read', '2019-11-04 06:25:55'),
(17, 'Bijon', 'Arif', 'Hi', 'read', '2019-11-04 06:26:17'),
(18, 'Bijon', 'Arif', 'Hi', 'read', '2019-11-04 06:26:20'),
(19, 'Bijon', 'Arif', 'hello', 'read', '2019-11-04 06:33:37'),
(20, 'Bijon', 'Arif', 'hello', 'read', '2019-11-04 06:33:40'),
(21, 'Arif', 'Arif', 'ki', 'read', '2019-11-04 06:34:14'),
(22, 'Arif', 'Arif', 'ki', 'read', '2019-11-04 06:34:17'),
(23, 'Arif', 'Bijon', 'hello', 'read', '2019-11-04 06:35:09'),
(24, 'Arif', 'Kamal', 'hello', 'unread', '2019-11-04 06:39:15'),
(25, 'Arif', 'Kamal', 'hello', 'unread', '2019-11-04 06:39:17'),
(26, 'Arif', 'Kamal', 'hello', 'unread', '2019-11-04 06:39:52'),
(27, 'Bijon', 'Arif', 'tmr ki khobor', 'read', '2019-11-04 06:40:29'),
(28, 'Arif', 'Kamal', 'hello', 'unread', '2019-11-04 06:40:51'),
(29, 'Arif', 'Kamal', 'hello', 'unread', '2019-11-04 06:41:05'),
(30, 'Arif', 'Abir', 'Hello', 'read', '2019-11-04 07:59:52'),
(31, 'Arif', 'Abir', 'Hello', 'read', '2019-11-04 07:59:55'),
(32, 'Abir', 'Arif', 'Hi', 'read', '2019-11-04 08:01:28'),
(33, 'Abir', 'Arif', 'Hi', 'read', '2019-11-04 08:01:30'),
(34, 'Arif', 'Abir', 'fjdfds', 'unread', '2019-11-04 08:02:15'),
(35, 'Arif', 'Abir', 'dsfdsfkds', 'unread', '2019-11-04 08:02:21'),
(36, 'Arif', 'Abir', 'dsfdsfkds', 'unread', '2019-11-04 08:02:24'),
(37, 'Bijon', 'Kamal', 'ki khobor kamal', 'unread', '2019-11-05 14:12:54'),
(38, 'Bijon', 'Kamal', 'ki khobor kamal', 'unread', '2019-11-05 14:12:56'),
(39, 'Arif', 'Arif', 'jfdsjflj', 'read', '2019-11-05 14:32:55'),
(40, 'Arif', 'Arif', 'jfdsjflj', 'read', '2019-11-05 14:32:58'),
(41, 'Bijon', 'jannat', 'hey', 'unread', '2019-11-05 14:33:14'),
(42, 'Bijon', 'jannat', 'hey', 'unread', '2019-11-05 14:33:16'),
(43, 'Bijon', 'Arif', 'valo', 'unread', '2019-11-05 14:37:10'),
(44, 'Bijon', 'Arif', 'valo', 'unread', '2019-11-05 14:37:15'),
(45, ' Bijon', 'Kamal', 'hello', 'unread', '2019-11-10 18:25:38'),
(46, ' Bijon', 'Kamal', 'hello', 'unread', '2019-11-10 18:25:42'),
(47, ' Bijon', ' Arif', 'Hi', 'unread', '2019-11-14 16:22:25'),
(48, ' Bijon', ' Arif', 'Hi', 'unread', '2019-11-14 16:22:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_chat`
--
ALTER TABLE `user_chat`
  ADD PRIMARY KEY (`msg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_chat`
--
ALTER TABLE `user_chat`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
