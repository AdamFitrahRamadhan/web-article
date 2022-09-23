-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2022 at 04:57 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `article`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `category` varchar(200) NOT NULL,
  `created_date` date NOT NULL DEFAULT current_timestamp(),
  `updated_date` date NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `category`, `created_date`, `updated_date`, `status`) VALUES
(10, 'q', 'q', 'ARTIKEL-MINUMAN', '2022-09-22', '2022-09-22', 'PUBLISHED'),
(11, 'bbc', 'aaa', 'ARTIKEL-MINUMAN', '2022-09-22', '2022-09-22', 'DRAFTED'),
(13, 'a', 'b', 'ARTIKEL-MAKANAN', '2022-09-22', '0000-00-00', 'PUBLISHED'),
(14, 'a', 'a', 'ARTIKEL-MAKANAN', '2022-09-22', '2022-09-22', 'DRAFTED'),
(15, 'qr', 'qr', 'ARTIKEL-MAKANAN', '2022-09-22', '2022-09-22', 'TRASHED'),
(16, 'ttt', 'ttt', 'ARTIKEL-MAKANAN', '2022-09-22', '2022-09-22', 'PUBLISHED'),
(17, '', '', '', '2022-09-22', '2022-09-22', 'TRASHED'),
(18, 'dfff', 'dfff', 'ARTIKEL-MAKANAN', '2022-09-22', '2022-09-22', 'TRASHED'),
(19, 'ffffffffffffff', 'fffffffffffff', 'ARTIKEL-MINUMAN', '2022-09-22', '0000-00-00', 'TRASHED'),
(20, 'b', 'b', 'ARTIKEL-MINUMAN', '2022-09-22', '2022-09-22', 'DRAFTED'),
(21, 'coba', 'coba', 'ARTIKEL-MINUMAN', '2022-09-22', '0000-00-00', 'PUBLISHED'),
(23, 'abcdefghijlaaaaaaaaa', 'dsfishgjfdkhglkdjflgjdflkgjkdfgkdfnkgjdfgjdfjg;ljdflgjdlfkgjlkdjfglkjdlfkgjlkdfjglkjdflgkjldkfjglkdjflgkjdflkgjldkfjglkdfjglkdjflgkjdflkgjdlfkgjlkdfjgsdlfklsdkjflkdjkljdlkjkdfjgkdfjgkdjfkdfgkdjfgokljdfg', 'aaa', '2022-09-22', '0000-00-00', 'PUBLISHED'),
(24, 'ratsdjaskfldsfksdkfasd', 'dsfishgjfdkhglkdjflgjdflkgjkdfgkdfnkgjdfgjdfjg;ljdflgjdlfkgjlkdjfglkjdlfkgjlkdfjglkjdflgkjldkfjglkdjflgkjdflkgjldkfjglkdfjglkdjflgkjdflkgjdlfkgjlkdfjgsdlfklsdkjflkdjkljdlkjkdfjgkdfjgkdjfkdfgkdjfgokljdfg', 'aaa', '2022-09-22', '0000-00-00', 'DRAFTED');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
