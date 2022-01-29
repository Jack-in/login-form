-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2022 at 09:20 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password1` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `firstName`, `email`, `password1`) VALUES
(1, 'jfhh', 'jshh@jjdn.com', 'aaa'),
(2, 'jfhh', 'jshh@jjdn.com', 'aaa'),
(3, 'jfhh', 'jshh@jjdn.com', 'aaa'),
(4, 'jfhh', 'jshh@jjdn.com', 'aaa'),
(5, 'dddd', 'jshh@jjdn.com', 'sss'),
(6, 'jfhh', 'jshh@jjdn.com', 'aaa'),
(7, 'jfhh', 'jshh@jjdn.com', 'aaa'),
(8, 'hhhh', 'jjjjj@s.com', 'aaa'),
(9, 'jjjj', 'jjjhh@s.com', 'aaa'),
(10, 'jjjjhhx', 'jjjhhx@s.com', '$2y$10$4OCckHYSRRzKgIAsyX2kNOqAZZmE35UUGDAxdsQARcTUGKsUaveQW'),
(11, 'jjjjhhxx', 'jjjhhxx@s.com', '$2y$10$4WRIs08A3WqrFRTKaHKUe.qrCu9OQu6hZjnJ41PWQu6vC/5WAGGTi'),
(12, 'jjjjhhxxr', '', '$2y$10$b760cNHo0xrDGfkVxuIMYuP66ut5ycsilKJr3EYwTA95KlaRthRI.'),
(13, 'jjjjhhxxrs', 'jjjhhxxsr@s.com', '$2y$10$s8Vb0sZoH4aYKf.U.MXfJOPIeqQDkCZR1fJxoZ80orWhBGsSZB9Ii'),
(14, 'njn', 'asd@gmail.com', '$2y$10$9N8a823Rnjs8U6e4ot5PAeBmjlHd/cko42g4Fmj4nQ2zeLEFuIiCO'),
(15, 'jfhhy', 'jshhr@jjdn.com', '$2y$10$lSVKZsWOhhD5plrkNK.QK.aV3p4kPHbAnt.teT6TZ9LP36NWsPD9q'),
(16, 'jjjjhhxxrsz', 'jshhx@jjdn.com', '$2y$10$ZArBFqGORDY1him9TZ9WSe72f3tfQaCS/Kh3oufnDzoQIFbV8bgNm'),
(17, 'jfhhz', 'jshhc@jjdn.com', '$2y$10$znvQ7.kq4.RbYpDqNSuC1.i6DQi3iw3qpIwe8.eTUtHbuecXYIQd.'),
(18, 'jkjbsdfj', 'sjdjd@gmail.com', '$2y$10$4rw7xVlnOVPI32PganJ6BumiR9xqHPffQ0vmtAiTZz7QDzqGoco7u'),
(19, 'zzzxx', 'zxxx@cc', '$2y$10$pnCaxRMoToIgVSlHL8ZpQOGAhvlTUcxF2oX4nGji0NCqb/UqBA88O'),
(20, 'sdfsa', 'idbj@kk', '$2y$10$rST33tBDS.Nixewm34DgFO0RlkoteLU3A7IxvMlanVJzGSR05tL/m'),
(21, 'jfhhdff', 'jshhdfdf@jjdn.com', '$2y$10$k7GNjXKWC6VfLDfgycaXm.MSRZPU3z9jBueySVgf7DOwUs2LdJj0q'),
(22, 'jfhhdf', 'jshhdfmdf@jjdn.com', '$2y$10$o/l3ynyccOHRiEyYsH7b7.65dc5wCsRUa115CPclRgyBaY53J2E7i'),
(23, 'jfnnnf', 'nnnjndf@jjdn.com', '$2y$10$YPz5MM/lWF88HBOzoaZnyexdX5nwRW8ciDsuRMZMt.rWnlNeIId0u'),
(24, 'hjnnn', 'ftu@dff', '$2y$10$6nGSrE9oHD2QXW1PYiT6ku.3SAInP6Z37/q/wVSSEoYDa3F8ANqCW'),
(25, 'hfgjl', 'hgjuih@gmial.com', '$2y$10$jt5Yg8rm1ZmY6HIgk7p8u.EdzB/g4xqAMCuhPRLiB2TH5GiA6pb9S'),
(26, 'k', 'k@k', '$2y$10$2dsMWA2XGFLKgYVL6uoCaOIuPHLw7QVqS0fHHRATPj1Lm/Q15ivMy'),
(27, 'Jachin', 'jack@gmail.com', '$2y$10$0BzTdxV3dX3v1QO6Qwft6.1hHTqW458icdqoF7mMzeEgfmxHniiZC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
