-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2021 at 12:24 PM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
  `petid` int(10) NOT NULL,
  `pname` varchar(200) NOT NULL,
  `nickname` varchar(200) NOT NULL,
  `age` varchar(4) NOT NULL,
  `health` varchar(40) NOT NULL,
  `description` varchar(500) NOT NULL,
  `image1` varchar(200) NOT NULL,
  `donorid` varchar(200) NOT NULL,
  `donorname` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addpet`
--

INSERT INTO `addpet` (`petid`, `pname`, `nickname`, `age`, `health`, `description`, `image1`, `donorid`, `donorname`) VALUES
(16, 'deepthi', 'deeps', '22', 'sssas', 'sasv afdf gfhgf thg ', 'deepthiani7.jpg', 'deepthikulal@gmail.com', 'Deepthi k'),
(18, 'deepthi', 'doggy', '12', 'ghjk', 'yihjkl', 'deepthiani2.png', 'deepthikulal@gmail.com', 'Deepthi k'),
(21, 'food', 'doggy', '2', 'dhghgd', 'ffdgd', 'foodban.png', 'deepthikulal@gmail.com', 'Deepthi k'),
(22, 'aaaa', 'jaan', '4', 'swsdad', 'wdssfs', 'aaaaani5.jpg', 'deepthikulal@gmail.com', 'Deepthi k'),
(25, 'bulldog', 'bogre', '5', 'good to heath', 'for each and every thing as the good product to purchae', 'bulldogani7.jpg', 'deepthikulal@gmail.com', 'Deepthi k');

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `aid` int(30) NOT NULL,
  `address1` varchar(100) NOT NULL,
  `address2` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pin` varchar(10) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `userid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`aid`, `address1`, `address2`, `city`, `pin`, `contact`, `userid`) VALUES
(1, 'TT Road temple', 'Carstreet', 'Mangalore', '575002', '8546987456', 'prajna@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(12) NOT NULL,
  `user` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `user`, `password`) VALUES
(1, 'adminpets123@gmail.com', 'admin123@pets');

-- --------------------------------------------------------

--
-- Table structure for table `adoptpet`
--

CREATE TABLE `adoptpet` (
  `adoptid` int(30) NOT NULL,
  `petid` varchar(30) NOT NULL,
  `userid` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adoptpet`
--

INSERT INTO `adoptpet` (`adoptid`, `petid`, `userid`) VALUES
(1, '16', 'prajna@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cid` int(30) NOT NULL,
  `pid` varchar(30) NOT NULL,
  `quantity` int(30) NOT NULL,
  `userid` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 'shrijith kulal', 'shrijithkulal@gmail.com', 'food', 'chkn', '8574968596', 'manglore karnataka', '963852'),
(2, 'Deepthi k', 'deepthikulal@gmail.com', 'food', 'fried ric', '9902509657', '   kuthina house machina village and post belthangady taluk', '789456');

-- --------------------------------------------------------

--
-- Table structure for table `ordertb`
--

CREATE TABLE `ordertb` (
  `oid` int(30) NOT NULL,
  `pid` varchar(20) NOT NULL,
  `quantity` int(20) NOT NULL,
  `userid` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ordertb`
--

INSERT INTO `ordertb` (`oid`, `pid`, `quantity`, `userid`) VALUES
(1, '13', 2, 'prajna@gmail.com'),
(2, '14', 3, 'prajna@gmail.com'),
(4, '17', 2, 'prajna@gmail.com'),
(5, '17', 1, 'prajna@gmail.com');

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
(1, 'Deepthi kulal', 'hash infotech', 'hash@gmail.com', '7098675564', '9089765564', '  manglore, tt road , karnataka', 'person', 'obama', '575005'),
(3, 'prajna', 'prajna products', 'prajna@gmail.com', '8521478521', '8523698521', 'bc road', 'person', 'hash', '456789'),
(4, 'shijith r kulal', 'hash products shrijith', 'hashshrijith@gmail.com', '8574961236', '7893692581', 'TT Road\r\nCarstreet', 'roll model', 'deeps', 'deeps');

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
  `image` varchar(100) DEFAULT NULL,
  `shopuser` varchar(100) NOT NULL,
  `psname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `name`, `pprice`, `oldprice`, `sstatus`, `quantity`, `pdetails`, `image`, `shopuser`, `psname`) VALUES
(13, 'nai', 800, 1000, 'Available', '150', 'bbb bbbb  bb  bb bb b bbb b bb ', 'naid7-removebg-preview.png', '', ''),
(14, 'nai da kini', 1000, 1500, 'Available', '150', 'zzzzzzzzzzzzzzz xxxxxxxxxxx cccccccccccccc ffffffffffffffff gggggggggggggggggggggg ssssssssssssssss qqqqqqqqqqqqqqqqqqq', 'nai da kinipett-removebg-preview.png', '', ''),
(15, 'food meals', 400, 500, 'available', '230', 'dxgfvhbnsm,.cv', 'food meals1.jpeg', '', ''),
(16, 'food', 400, 500, 'available', '12', 'zsdsfhgtyh', 'foodpr1.jpg', '', ''),
(17, 'food meals chicken', 4000, 5000, 'available', '90', 'good best product it was amzing', 'food meals chickenpr6.jpg', 'hash@gmail.com', 'hash infotech'),
(18, 'deep S', 400, 5000, 'available', '230', 'dfghjkl;', 'deep Sani2.png', 'hashshrijith@gmail.com', 'hash products shrijith');

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
(6, 'deep S', 'dees23@gmail.com', 'zxcvbndfcvbnm'),
(8, 'Deepthi k', 'hash@gmail.com', 'zscxdfcgvbhjnkm'),
(9, 'prajna', 'prajna@gmail.com', 'some of the errorrs'),
(10, 'prajna', 'prajna@gmail.com', 'some of the errorrs'),
(11, 'prajna', 'prajna@gmail.com', 'some of the xbcygzhdnjgvsudyshs'),
(12, 'prajna kulal', 'prajna@gmail.com', 'sdfghjkl gdfghj'),
(13, 'deepthi kulal', 'deepthikulal@gmail.com', 'super website');

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
  `address` varchar(500) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userregister`
--

INSERT INTO `userregister` (`id`, `name`, `email`, `question`, `answer`, `phone`, `address`, `password`) VALUES
(2, 'deep S', 'deeps233@gmail.com', 'What is your dream job?', 'Ans:se', '085464487456', 'manglore', '546213'),
(3, 'shrijith', 'shrijith@gmail.com', 'who is your favorite person?', 'Ans:deepthi', '6325412563', 'belthangady', '789456123'),
(4, 'boomika', 'boomika@gmail.com', 'whats your favorite food?', 'Ans: dosa', '9902509753', 'ujire', '1234'),
(5, 'priya', 'priya@gmail.com', 'who is your favorite person?', 'Ans:wertui', '8524752471', 'bunts circle', '1234'),
(6, 'shrijith', 'shri@gmail.com', 'whats your favorite food?', 'aaa', '8546942416', 'vamanjoor', '123456'),
(7, 'shrijith', 'shrijithdeeps@gmail.com', 'whats your favorite food?', 'Ans: fried rice', '8547754585', 'madanthyar', '852'),
(8, 'prajna kulal', 'prajna@gmail.com', 'whats your favorite food?', 'Ans: veg', '7412589632', '  manglore,  karnataka\r\n', '789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addpet`
--
ALTER TABLE `addpet`
  ADD PRIMARY KEY (`petid`);

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `adoptpet`
--
ALTER TABLE `adoptpet`
  ADD PRIMARY KEY (`adoptid`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `donorregister`
--
ALTER TABLE `donorregister`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `ordertb`
--
ALTER TABLE `ordertb`
  ADD PRIMARY KEY (`oid`);

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
-- AUTO_INCREMENT for table `addpet`
--
ALTER TABLE `addpet`
  MODIFY `petid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `aid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `adoptpet`
--
ALTER TABLE `adoptpet`
  MODIFY `adoptid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cid` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donorregister`
--
ALTER TABLE `donorregister`
  MODIFY `did` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ordertb`
--
ALTER TABLE `ordertb`
  MODIFY `oid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `petshopregister`
--
ALTER TABLE `petshopregister`
  MODIFY `psid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `userfeedback`
--
ALTER TABLE `userfeedback`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `userregister`
--
ALTER TABLE `userregister`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
