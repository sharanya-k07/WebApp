-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2021 at 07:26 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `addpet`
--

CREATE TABLE `addpet` (
  `petid` int(100) NOT NULL,
  `pname` varchar(200) NOT NULL,
  `nickname` varchar(100) NOT NULL,
  `age` varchar(4) NOT NULL,
  `health` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `image1` varchar(100) NOT NULL,
  `image2` varchar(100) NOT NULL,
  `image3` varchar(100) NOT NULL,
  `image4` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addpet`
--

INSERT INTO `addpet` (`petid`, `pname`, `nickname`, `age`, `health`, `description`, `image1`, `image2`, `image3`, `image4`) VALUES
(0, '', 'doggy', '12', 'good', 'super', '', 'about-img.png', 'ani1.jpg', 'abt.png'),
(0, '', 'doggy', '12', 'good', 'super', '', 'about-img.png', 'ani1.jpg', 'abt.png'),
(0, 'bull dog', 'doggy', '12', 'good', 'super', 'bull dog', 'bull dogabout-img.png', 'bull dogani1.jpg', 'bull dogabt.png'),
(0, '', '', '', '', '', '', '', '', ''),
(0, 'beens', 'doggy', '12', 'good', 'very good gdog', 'beens04TB-DOGS-videoSixteenByNineJumbo1600.jpg', 'beens', 'beensabt.png', 'beensani3.jpg'),
(0, 'beens', 'doggy', '12', 'good', 'very good gdog', 'beens04TB-DOGS-videoSixteenByNineJumbo1600.jpg', 'beens', 'beensabt.png', 'beensani3.jpg'),
(0, 'beens', 'doggy', '12', 'good', 'very good gdog', 'beens04TB-DOGS-videoSixteenByNineJumbo1600.jpg', 'beens', 'beensabt.png', 'beensani3.jpg'),
(0, 'umbrella', 'doggy', '12', 'good', 'giid', 'umbrella04TB-DOGS-videoSixteenByNineJumbo1600.jpg', 'umbrellaabout-img.png', 'umbrellaabt.png', 'umbrellaani3.jpg'),
(0, 'umbrella', 'doggy', '12', 'good', 'giid', 'umbrella04TB-DOGS-videoSixteenByNineJumbo1600.jpg', 'umbrellaabout-img.png', 'umbrellaabt.png', 'umbrellaani3.jpg'),
(0, 'umbrella', 'doggy', '12', 'good', 'giid', 'umbrella04TB-DOGS-videoSixteenByNineJumbo1600.jpg', 'umbrellaabout-img.png', 'umbrellaabt.png', 'umbrellaani3.jpg'),
(0, 'umbrella', 'doggy', '12', 'good', 'giid', 'umbrella04TB-DOGS-videoSixteenByNineJumbo1600.jpg', 'umbrellaabout-img.png', 'umbrellaabt.png', 'umbrellaani3.jpg'),
(0, 'dog', 'doggy', '12', 'godd', 'good pet', 'dog04TB-DOGS-videoSixteenByNineJumbo1600.jpg', 'dogabout-img.png', 'dogabt.png', 'dogani3.jpg'),
(0, 'pen', 'doggy', '12', 'zxc', 'cccsc', 'penabout-img.png', 'penabt.png', 'penani3.jpg', 'penani2.png'),
(0, 'dress', 'doggy', '12', 'goohhshshs', 'assddd wda as a   asddad', 'dress04TB-DOGS-videoSixteenByNineJumbo1600.jpg', 'dressabout-img.png', 'dressabt.png', 'dressani3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `donorregister`
--

CREATE TABLE `donorregister` (
  `did` int(5) NOT NULL,
  `dname` varchar(500) NOT NULL,
  `demail` varchar(50) NOT NULL,
  `dquestion` varchar(50) NOT NULL,
  `danswer` varchar(50) NOT NULL,
  `dphone` varchar(10) NOT NULL,
  `daddress` varchar(100) NOT NULL,
  `dpassword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donorregister`
--

INSERT INTO `donorregister` (`did`, `dname`, `demail`, `dquestion`, `danswer`, `dphone`, `daddress`, `dpassword`) VALUES
(1, '', '', 'Question', 'Ans:', '', '', ''),
(2, 'deepthi kulal', 'deepthikulal@gmail.com', 'food', 'fried ric', '9902509657', 'kuthina house machina village and post belthangady taluk', '789456');

-- --------------------------------------------------------

--
-- Table structure for table `petshopregister`
--

CREATE TABLE `petshopregister` (
  `psid` int(10) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `psname` varchar(100) NOT NULL,
  `psemail` varchar(100) NOT NULL,
  `psphone1` varchar(10) NOT NULL,
  `psphone2` varchar(10) NOT NULL,
  `psaddress` varchar(100) NOT NULL,
  `psquestion` varchar(50) NOT NULL,
  `psanswer` varchar(50) NOT NULL,
  `pspassword` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petshopregister`
--

INSERT INTO `petshopregister` (`psid`, `pname`, `psname`, `psemail`, `psphone1`, `psphone2`, `psaddress`, `psquestion`, `psanswer`, `pspassword`) VALUES
(1, 'deepthi', 'Hash infotech', 'hash@gmail.com', '5825214252', '9638527412', 'kulashekara manglore', '', 'obama', '575005'),
(2, '', '', 'hashit@gmail.com', '', '', '', 'dream job', 'IT', '8546');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pid` int(10) NOT NULL,
  `name` varchar(25) DEFAULT NULL,
  `pprice` float DEFAULT NULL,
  `oldprice` float DEFAULT NULL,
  `sstatus` varchar(25) DEFAULT NULL,
  `quantity` varchar(25) DEFAULT NULL,
  `pdetails` varchar(150) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `name`, `pprice`, `oldprice`, `sstatus`, `quantity`, `pdetails`, `image`) VALUES
(11, 'cotton', 220, 300, 'Available', '50', 'test test test test test test test test test test test test test test test test test test test test test ', 'cottonbanner.jpg'),
(13, 'nai', 800, 1000, 'Available', '150', 'bbb bbbb  bb  bb bb b bbb b bb ', 'naid7-removebg-preview.png'),
(14, 'nai da kini', 1000, 1500, 'Available', '150', 'zzzzzzzzzzzzzzz xxxxxxxxxxx cccccccccccccc ffffffffffffffff gggggggggggggggggggggg ssssssssssssssss qqqqqqqqqqqqqqqqqqq', 'nai da kinipett-removebg-preview.png');

-- --------------------------------------------------------

--
-- Table structure for table `userfeedback`
--

CREATE TABLE `userfeedback` (
  `id` int(100) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `uemail` varchar(100) NOT NULL,
  `umessage` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userfeedback`
--

INSERT INTO `userfeedback` (`id`, `uname`, `uemail`, `umessage`) VALUES
(3, 'deep S', 'deeps2322@gmail.com', 'rcvlb;nm'),
(4, 'deep S ghb', 'deeps23@gmail.com', 'good wealth help to us by the way to you'),
(5, 'deep S', 'deepsdee23@gmail.com', 'sdfghjkl;qwertyuiokl;  sddfghjklcvbnm \r\nxcv,. '),
(6, 'deep S', 'dees23@gmail.com', 'zxcvbndfcvbnm');

-- --------------------------------------------------------

--
-- Table structure for table `userregister`
--

CREATE TABLE `userregister` (
  `id` int(3) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `question` varchar(100) NOT NULL,
  `answer` varchar(200) NOT NULL,
  `phone` varchar(22) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userregister`
--

INSERT INTO `userregister` (`id`, `name`, `email`, `question`, `answer`, `phone`, `password`) VALUES
(1, 'deep S', 'deeps23@gmail.com', 'What is your dream job?', 'Ans:sse', '08546987456', ''),
(2, 'deep S', 'deeps233@gmail.com', 'What is your dream job?', 'Ans:se', '085464487456', '546213'),
(3, 'shrijith', 'shrijith@gmail.com', 'who is your favorite person?', 'Ans:deepthi', '6325412563', '789456123'),
(4, 'boomika', 'boomika@gmail.com', 'whats your favorite food?', 'Ans: dosa', '9902509753', '1234'),
(5, 'priya', 'priya@gmail.com', 'who is your favorite person?', 'Ans:wertui', '8524752471', '1234'),
(6, 'shrijith', 'shri@gmail.com', 'whats your favorite food?', 'aaa', '8546942416', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donorregister`
--
ALTER TABLE `donorregister`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `petshopregister`
--
ALTER TABLE `petshopregister`
  ADD PRIMARY KEY (`psid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `userfeedback`
--
ALTER TABLE `userfeedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userregister`
--
ALTER TABLE `userregister`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donorregister`
--
ALTER TABLE `donorregister`
  MODIFY `did` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `petshopregister`
--
ALTER TABLE `petshopregister`
  MODIFY `psid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `userfeedback`
--
ALTER TABLE `userfeedback`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `userregister`
--
ALTER TABLE `userregister`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
