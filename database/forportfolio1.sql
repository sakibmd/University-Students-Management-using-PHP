-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2020 at 09:44 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forportfolio1`
--

-- --------------------------------------------------------

--
-- Table structure for table `myclass`
--

CREATE TABLE `myclass` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `roll` int(11) NOT NULL,
  `cgpa` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '3'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `myclass`
--

INSERT INTO `myclass` (`id`, `name`, `email`, `password`, `roll`, `cgpa`, `gender`, `status`) VALUES
(5, 'Shaker', 'shaker@gmail.com', '$2y$10$sTzW7zchjXqEgU3./IBvtuALsFjDLbrW8CsjjWhnml2v/tw/PFEGi', 56, '3.11', 'Male', 2),
(7, 'Salman', 'salman@gmail.com', '$2y$10$DvtZPywjtrNNChi1too1BOJ7uNjIbegk9xzkuX71fsOAWcDiRHd.W', 44, '3.94', 'Male', 3),
(9, 'Sonia', 'sonia@gmail.com', '$2y$10$.J0MaOuKzG7v2wiNqRSPu.0CptnfKQzTnymjoegjcLRfewmOTB3E.', 50, '3.25', 'Female', 3),
(11, 'Sakib', 'admin@gmail.com', '$2y$10$9d9ZH6jlXccnYQ4vO2jwH.eiYrvwms0vtFvvwjBBcNhjzFmVFICQS', 42, '3.86', 'Male', 1),
(14, 'Akash', 'akash@gmail.com', '$2y$10$OnrNsJAR2h.V4RH0lZ0xTuJBcGEWb0kECcUDPLS1vMncQ3cBnO9GS', 43, '3.56', 'Male', 3),
(15, 'Partho', 'partho@gmail.com', '$2y$10$Y598H4oW16QTy7OHOixdTOZaerI6K9xdjcnr888c48TDAfW9nLlU2', 45, '3.35', 'Male', 3),
(16, 'Maher', 'maher@gmail.com', '$2y$10$l/.uczu0K2NOKEWpCw/x0OJLqVyMy5K2pLwKy3R6BNJ58r35.zx7C', 46, '2.66', 'Male', 3),
(17, 'Ashraf', 'ashraf@gmail.com', '$2y$10$P05Bv55cVqr4myBSVa11x.NHgBQZK5.O4PqRyeBxTUQZKcNLa96Zu', 47, '3.11', 'Male', 3),
(18, 'Samad', 'samad@gmail.com', '$2y$10$m/khIuJSrQodGXjVLzf9QuNe3R9a6yMpVzfFCEFgOEO2yF9r7XvEe', 48, '3.21', 'Male', 3),
(19, 'Azhar', 'azhar@gmail.com', '$2y$10$hdTU4eXbBCthkZK8cs/DfegyCd9z4D4XUsEM01tS80YVKUiY60G3W', 49, '2.96', 'Male', 3),
(20, 'Nafa', 'nafa@gmail.com', '$2y$10$Ih.bSivWc/AfDZOGtNOpze9.4P4TWNjWMvOfrOClhPh2o/IhGFkmu', 65, '3.36', 'Female', 3),
(21, 'Sayeda', 'sayeda@gmail.com', '$2y$10$Ky2uckNLQ0WP9/bToOCflOlCfyJVab8bt/EYkzIwSPwfZFITUI91W', 58, '3.25', 'Female', 3),
(22, 'Sushmita', 'sushmita@gmail.com', '$2y$10$okV9992/wMW8M0nhipRvfeK3.tdIPG3tSL78M0/poNz4b3TORmAQ.', 59, '3.48', 'Female', 3),
(23, 'Tania', 'tania@gmail.com', '$2y$10$r5mMYeDAkZj25Kyza05PV.c6psxFhSsaTBF/xBo1Z5zwXvHJr2cxS', 80, '3.56', 'Female', 3),
(24, 'Nowshad', 'nowshad@gmail.com', '$2y$10$BRYKaXEhFsXw8/b0TYsax.dXBnjbVB/gMYMuh/FfaczMjz5bBqgXC', 79, '3.73', 'Male', 2),
(25, 'IslamNayeem', 'islamnayeem@gmail.com', '$2y$10$S2jzx3GKtMb1/mz.kBASeOKIOuoWefITKimpvIPkMfr7GUt7q1bdK', 78, '3.57', 'Male', 3),
(26, 'Sobuj', 'sobuj@gmail.com', '$2y$10$dQDGMBYCzaXir7OF1beL9O8UYHLhTCtmg6P4nMfWZ22rNe8BHLz1a', 51, '3.15', 'Male', 3),
(27, 'Tareq', 'tareq@gmail.com', '$2y$10$NskU/WFbvTireDSt0Au6Kei.2XbHuJhvs14tmx7S9tAyfuS1575Le', 52, '3.08', 'Male', 3),
(28, 'Fahim', 'fahim@gmail.com', '$2y$10$rcKFDUr1Mnj082TiXk8hW./Z0BSNuEPQp.Be82RjPYBu.eMkXV38q', 53, '3.16', 'Male', 3),
(29, 'NayeemAzraf', 'nayeemazraf@gmail.com', '$2y$10$UiQQwzsggCrbzZUbs.mEk.D4jUh8osHsTUE4ZSo03lgUws4EnIrTm', 54, '2.88', 'Male', 3),
(30, 'Myful', 'myful@gmail.com', '$2y$10$WRrU38Yo96B6zPeLzy0ArOJspeegOFc1i6PHqaUxskkHliT7HHwBW', 55, '3.86', 'Female', 3),
(31, 'Soumit', 'soumit@gmail.com', '$2y$10$gYG3RFZZCTqhzAIMP8kavO0kSsp6f2iG9yqLRnQ2GTJODAGelllRS', 57, '3.05', 'Male', 3),
(32, 'Turjo', 'turjo@gmail.com', '$2y$10$54KEaLFySYNdIwmKueUHTelNicpyKE5PDimRrFjablVF40EVvRzTe', 60, '2.75', 'Male', 3),
(33, 'Shahibur', 'shahibur@gmail.com', '$2y$10$A1TqNcs/8ZhBcLK8BmBxPeBJmqeeVclRyCWHxKJVNaVqlSXBjRysK', 61, '3.82', 'Male', 3),
(34, 'Sabbir', 'sabbir@gmail.com', '$2y$10$i0N2mPIZo54RUaNDIe/cx.0vIwodzEmMH0CKFiYka/jHvbq7.7YsO', 62, '2.92', 'Male', 2),
(35, 'Kamrul', 'kamrul@gmail.com', '$2y$10$uPPIewpkBJkALJs6Rz66zOr3PmubqNLXy/ZolJuRJCkxcepnYg0aq', 63, '2.75', 'Male', 3),
(36, 'Maruf', 'maruf@gmail.com', '$2y$10$QVYCgPELiwCCnO15EVlITeSvR21zVdSsOA7k7xvSEH1z8N681tabS', 64, '3.22', 'Male', 3),
(37, 'Rezwan', 'rezwan@gmail.com', '$2y$10$iYlHM.eHfINiL2TAx7RLE.FCFukuQY30agzMMw4O.18MoV2.GQk1S', 66, '2.75', 'Male', 3),
(38, 'Kawsar', 'kawsar@gmail.com', '$2y$10$vYLneyelS4G.tQq5/Re0fOk31CRRTl.HzKtLuiEPgap.3ZA8dC3YK', 67, '2.88', 'Male', 3),
(39, 'Shanto', 'shanto@gmail.com', '$2y$10$munzVG0R.MyhVsG327PwdOzm5Nd5M5fDtVYUComIddmEYnoUtM4Tm', 68, '2.75', 'Male', 3),
(40, 'Atiq', 'atiq@gmail.com', '$2y$10$y4zJYDnRFd8zLgZE8FqObu9v3TjtMekZBn39/7wH8tn.2bbbicqhC', 69, '3.11', 'Male', 3),
(41, 'Rakib', 'rakib@gmail.com', '$2y$10$g47tWVzmZV2V.xJ8B0xWMe95uTri8Wu8y.eUA52BZ8XePnVrcrhEe', 70, '3.65', 'Male', 3),
(43, 'Piplu', 'piplu@gmail.com', '$2y$10$wbxsRAc7ELxxBzvfEECP3OoLmOFj2F0biakQiTdp8igHLIuqCZKom', 41, '3.25', 'Male', 3),
(44, 'Habib', 'habib@gmail.com', '$2y$10$0NGkl7/hBvZFp.jkyRI7Se7aHFAQlmWiPeDvLz0tG16vDi7vqNV/K', 71, '2.69', 'Male', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `myclass`
--
ALTER TABLE `myclass`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `roll` (`roll`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `myclass`
--
ALTER TABLE `myclass`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
