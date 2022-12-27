-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2022 at 09:37 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moretech`
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
(20, 'Biology'),
(21, 'Physics'),
(22, 'Chemistry'),
(23, 'Mathematics'),
(24, 'Environmental Protection Laboratory Equipment '),
(25, 'Lab Ware Equipment '),
(26, 'Glass Ware Equipment '),
(27, 'Dish and Tube '),
(28, 'Life Science Equipment '),
(29, 'Separation and Concentration Equipment'),
(30, 'Chromatography'),
(31, 'Laboratory Equipment '),
(32, 'Analytical Equipment'),
(33, 'Work Ware and Safety '),
(34, 'Ready  Prepared Media'),
(35, 'Dehydrated Culture Media Bases and Supplements'),
(36, 'Plant Tissue Culture '),
(37, 'Molecular Biology kits, Chemicals, Reagents & Growth'),
(38, 'Laboratory Aids '),
(39, 'Beekeeping (apiculture) Instruments '),
(40, 'Poultry Production Equipment '),
(41, 'Dairy  Production Equipment and Milk Analyzing Equipment '),
(42, 'Electrical Engineering Equipment '),
(43, 'Mechanical Engineering '),
(44, 'Chemical Engineering Equipment '),
(45, 'None'),
(46, ' ');

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
-- Table structure for table `imageposts`
--

CREATE TABLE `imageposts` (
  `post_id` int(11) NOT NULL,
  `post_titlecategory` varchar(255) NOT NULL,
  `post_subcategory` varchar(255) NOT NULL,
  `post_name` varchar(255) NOT NULL,
  `post_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `post_titlecategory` varchar(255) NOT NULL,
  `post_category` varchar(256) NOT NULL,
  `post_subcategory` varchar(255) NOT NULL,
  `post_name` varchar(255) NOT NULL,
  `post_image` text NOT NULL,
  `post_content` text NOT NULL,
  `post_subcontent` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `subcat_id` int(11) NOT NULL,
  `subcat_title` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`subcat_id`, `subcat_title`) VALUES
(2, 'Tools'),
(3, 'Measurement'),
(4, 'Mechanics'),
(5, 'Wave and Sound '),
(6, 'Termology'),
(7, 'Properties of Matter '),
(8, 'Electricity '),
(9, 'Magnetism '),
(10, 'Light and Optics '),
(11, 'Energy'),
(12, 'Slides'),
(13, 'Human Physiology and Anatomy '),
(14, 'Apparatus'),
(15, 'Molecular Models '),
(16, 'Number and Algebra '),
(17, 'Measurement and Geometry '),
(18, 'Soil Quality Analytical Equipment'),
(19, 'Water Quality Analytical Equipment '),
(20, 'Air Quality Analytical Equipment '),
(21, 'Genomics '),
(22, 'None'),
(23, ' ');

-- --------------------------------------------------------

--
-- Table structure for table `titlecategory`
--

CREATE TABLE `titlecategory` (
  `titlecat_id` int(11) NOT NULL,
  `titlecat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `titlecategory`
--

INSERT INTO `titlecategory` (`titlecat_id`, `titlecat_title`) VALUES
(1, 'Educational'),
(2, 'Analytical'),
(3, 'Laboratory '),
(4, ' Modern Agricultural Equipment and Machineries '),
(5, 'Equipment for Teaching Engineering and Vocational Training Institute '),
(6, 'Aluminum Door and Widow Works   '),
(7, 'None'),
(8, ' ');

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
-- Indexes for table `imageposts`
--
ALTER TABLE `imageposts`
  ADD PRIMARY KEY (`post_id`);

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
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`subcat_id`);

--
-- Indexes for table `titlecategory`
--
ALTER TABLE `titlecategory`
  ADD PRIMARY KEY (`titlecat_id`);

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
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

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
-- AUTO_INCREMENT for table `imageposts`
--
ALTER TABLE `imageposts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT for table `proclamation`
--
ALTER TABLE `proclamation`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `subcat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `titlecategory`
--
ALTER TABLE `titlecategory`
  MODIFY `titlecat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
