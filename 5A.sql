-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2022 at 01:34 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yeshiwas`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(13, 'Tax Law'),
(14, 'Merger and Aqcutistion'),
(15, 'Intellectual Property'),
(16, 'Corporate and Buisness Law'),
(17, 'Family Law');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `client_id` int(3) NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `client_phone` varchar(255) NOT NULL,
  `client_email` varchar(255) NOT NULL,
  `client_number` varchar(255) NOT NULL,
  `client_balance` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`client_id`, `client_name`, `client_phone`, `client_email`, `client_number`, `client_balance`) VALUES
(1, 'Fiker', '326546', 's@s.com', '456456', '20555'),
(2, 'Yeshiwas', '+251933817881', 'samueladdisu@sa.com', '456876', '20,000'),
(3, 'Samuel', '+251933817881', 'samueladdisu9@gmail.com', '123456', '20,000');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(3) NOT NULL,
  `comment_post_id` int(3) NOT NULL,
  `comment_author` varchar(255) NOT NULL,
  `comment_email` varchar(255) NOT NULL,
  `comment_content` text NOT NULL,
  `comment_status` varchar(255) NOT NULL,
  `comment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_post_id`, `comment_author`, `comment_email`, `comment_content`, `comment_status`, `comment_date`) VALUES
(12, 5, 'samuel', 'add@add.com', 'the best comment ever', 'unapproved', '2021-09-21'),
(13, 5, 'addisu samuel', 'add@add.com', 'improved comment', 'unapproved', '2021-09-21'),
(14, 5, 'peter tsegaye', 'add@add.com', 'nice blog', 'unapproved', '2021-09-21'),
(15, 5, 'nardi', 'nardi@nardi.com', 'dsfjs;dlfjsdlkfjsd', 'unapproved', '2021-09-21'),
(16, 5, 'samuel', 'add@add.com', 'dsafasd', 'unapproved', '2021-09-21'),
(19, 6, 'samuel addisu', 'peter@versavvy.com', 'comment', 'unapproved', '2021-09-21'),
(20, 5, 'samuel', 'add@add.com', 'sss', 'approved', '2021-09-22'),
(21, 5, 'samuel', 'add@add.com', 'dfsdfasd', 'unapproved', '2021-09-23'),
(22, 5, 'mulugeta ', 'muluge@gmail.com', 'nice lkf', 'unapproved', '2021-09-25'),
(23, 12, 'samuel', 'add@add.com', 'nice blog', 'approved', '2021-09-28'),
(24, 5, 'samuel addisu', 'add@add.com', 'The new comment sdssssss', 'unapproved', '2021-09-28');

-- --------------------------------------------------------

--
-- Table structure for table `confirm_payment`
--

CREATE TABLE `confirm_payment` (
  `id` int(3) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ref_number` varchar(255) NOT NULL,
  `balance` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Not Confirmed'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `confirm_payment`
--

INSERT INTO `confirm_payment` (`id`, `name`, `email`, `ref_number`, `balance`, `date`, `status`) VALUES
(1, 'samuel', 'sam@ssam.com', '456828', '', '2021-09-25 11:15:38', ''),
(2, 'samuel', 'sam@ssam.com', '456828', '', '2021-09-28 11:55:52', 'confirmed');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(3) NOT NULL,
  `payment_name` varchar(255) NOT NULL,
  `payment_email` varchar(255) NOT NULL,
  `payment_phone` varchar(255) NOT NULL,
  `payment_bank` varchar(255) NOT NULL,
  `payment_crm` varchar(255) NOT NULL,
  `payment_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(3) NOT NULL,
  `post_category_id` int(3) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_date` date NOT NULL,
  `post_image` text NOT NULL,
  `post_content` text NOT NULL,
  `post_tags` varchar(255) NOT NULL,
  `post_comment_count` varchar(255) NOT NULL,
  `post_status` varchar(255) NOT NULL DEFAULT 'draft',
  `post_duration` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_category_id`, `post_title`, `post_date`, `post_image`, `post_content`, `post_tags`, `post_comment_count`, `post_status`, `post_duration`) VALUES
(5, 13, 'The Ethiopian Tax Law', '2021-09-20', 'blogpic.jpg', 'Curabitur senectus tellus diam aliquam, sed. Vivamus eget sit amet etiam. Sed sit eget vel viverra cursus proin condimentum. Molestie scelerisque amet vitae turpis pulvinar commodo.    Curabitur senectus tellus diam aliquam, sed. Vivamus eget sit amet etiam. Sed sit eget vel viverra cursus proin condimentum. Molestie scelerisque amet vitae turpis pulvinar commodo.    Curabitur senectus tellus diam aliquam, sed. Vivamus eget sit amet etiam. Sed sit eget vel viverra cursus proin condimentum. Molestie scelerisque amet vitae turpis pulvinar commodo.    Curabitur senectus tellus diam aliquam, sed. Vivamus eget sit amet etiam. Sed sit eget vel viverra cursus proin condimentum. Molestie scelerisque amet vitae turpis pulvinar commodo.    Curabitur senectus tellus diam aliquam, sed. Vivamus eget sit amet etiam. Sed sit eget vel viverra cursus proin condimentum. Molestie scelerisque amet vitae turpis pulvinar commodo.    Curabitur senectus tellus diam aliquam, sed. Vivamus eget sit amet etiam. Sed sit eget vel viverra cursus proin condimentum. Molestie scelerisque amet vitae turpis pulvinar commodo.    Curabitur senectus tellus diam aliquam, sed. Vivamus eget sit amet etiam. Sed sit eget vel viverra cursus proin condimentum. Molestie scelerisque amet vitae turpis pulvinar commodo.    Curabitur senectus tellus diam aliquam, sed. Vivamus eget sit amet etiam. Sed sit eget vel viverra cursus proin condimentum. Molestie scelerisque amet vitae turpis pulvinar commodo.    Curabitur senectus tellus diam aliquam, sed. Vivamus eget sit amet etiam. Sed sit eget vel viverra cursus proin condimentum. Molestie scelerisque amet vitae turpis pulvinar commodo.    Curabitur senectus tellus diam aliquam, sed. Vivamus eget sit amet etiam. Sed sit eget vel viverra cursus proin condimentum. Molestie scelerisque amet vitae turpis pulvinar commodo.                ', 'taxlaw, ethiopia', '4', 'published', '23min  read'),
(6, 13, 'Police Brutality is more common than you think', '2021-09-20', 'blogpic3.jpg', 'Curabitur senectus tellus diam aliquam, sed. Vivamus eget sit amet etiam. Sed sit eget vel viverra cursus proin condimentum. Molestie scelerisque amet vitae turpis pulvinar commodo. Curabitur senectus tellus diam aliquam, sed. Vivamus eget sit amet etiam. Sed sit eget vel viverra cursus proin condimentum. Molestie scelerisque amet vitae turpis pulvinar commodo.        Curabitur senectus tellus diam aliquam, sed. Vivamus eget sit amet etiam. Sed sit eget vel viverra cursus proin condimentum. Molestie scelerisque amet vitae turpis pulvinar commodo.        Curabitur senectus tellus diam aliquam, sed. Vivamus eget sit amet etiam. Sed sit eget vel viverra cursus proin condimentum. Molestie scelerisque amet vitae turpis pulvinar commodo.        Curabitur senectus tellus diam aliquam, sed. Vivamus eget sit amet etiam. Sed sit eget vel viverra cursus proin condimentum. Molestie scelerisque amet vitae turpis pulvinar commodo.        Curabitur senectus tellus diam aliquam, sed. Vivamus eget sit amet etiam. Sed sit eget vel viverra cursus proin condimentum. Molestie scelerisque amet vitae turpis pulvinar commodo.        Curabitur senectus tellus diam aliquam, sed. Vivamus eget sit amet etiam. Sed sit eget vel viverra cursus proin condimentum. Molestie scelerisque amet vitae turpis pulvinar commodo.        Curabitur senectus tellus diam aliquam, sed. Vivamus eget sit amet etiam. Sed sit eget vel viverra cursus proin condimentum. Molestie scelerisque amet vitae turpis pulvinar commodo.        Curabitur senectus tellus diam aliquam, sed. Vivamus eget sit amet etiam. Sed sit eget vel viverra cursus proin condimentum. Molestie scelerisque amet vitae turpis pulvinar commodo.        Curabitur senectus tellus diam aliquam, sed. Vivamus eget sit amet etiam. Sed sit eget vel viverra cursus proin condimentum. Molestie scelerisque amet vitae turpis pulvinar commodo.        Curabitur senectus tellus diam aliquam, sed. Vivamus eget sit amet etiam. Sed sit eget vel viverra cursus proin condimentum. Molestie scelerisque amet vitae turpis pulvinar commodo.        Curabitur senectus tellus diam aliquam, sed. Vivamus eget sit amet etiam. Sed sit eget vel viverra cursus proin condimentum. Molestie scelerisque amet vitae turpis pulvinar commodo.                        ', 'police, country', '1', 'published', '23min  read'),
(16, 13, '', '2022-01-28', '', '', '', '', 'draft', '');

-- --------------------------------------------------------

--
-- Table structure for table `proclamation`
--

CREATE TABLE `proclamation` (
  `pro_id` int(11) NOT NULL,
  `pro_title` varchar(255) NOT NULL,
  `pro_img` text NOT NULL,
  `pro_pdf` text NOT NULL,
  `pro_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `proclamation`
--

INSERT INTO `proclamation` (`pro_id`, `pro_title`, `pro_img`, `pro_pdf`, `pro_date`) VALUES
(4, 'This is a Test', 'Metadata.png', 'Fikir Law Office  (In Progress).pdf', '2021-10-26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(3) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_image` text NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `randSalt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_password`, `user_firstname`, `user_lastname`, `user_email`, `user_image`, `user_role`, `randSalt`) VALUES
(1, 'nardi', 'sadfsdafasd', 'Nardos ', 'Atnaw', 'nardi@nardi.com', 'dd', 'Admin', ''),
(4, 'samu', '123', 'Samuel ', 'Addisu', 'samuel@samuel.com', '', 'Admin', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `confirm_payment`
--
ALTER TABLE `confirm_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `proclamation`
--
ALTER TABLE `proclamation`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `client_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `confirm_payment`
--
ALTER TABLE `confirm_payment`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `proclamation`
--
ALTER TABLE `proclamation`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
