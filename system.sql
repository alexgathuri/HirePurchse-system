-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2017 at 09:09 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `system`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(15) NOT NULL,
  `category` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`, `date`, `image`) VALUES
(7, 'Automotive', '2017-10-31', 'image1.jpg'),
(8, 'Kitchen Aplliances', '2017-10-31', 'image1.jpg'),
(9, 'Home appliances', '2017-11-02', 'dvd.jpg'),
(12, 'Electronics', '2017-11-24', '');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `feedback` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `username`, `email`, `feedback`) VALUES
(20, 'Baraza', 'baraza@gmail.com', 'Thank you for the wonderful product'),
(21, 'mary', 'mary@gmail.com', 'The product did not arrive, thank you.');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `username`, `email`, `message`) VALUES
(1, 'Alex', 'alex@gmail.com', 'mpesa-12ijw2ij2iww21w1'),
(2, 'Alex', 'alex@gmail.com', 'nfbnfnf'),
(3, 'Alex', 'alex@gmail.com', 'tonito1234'),
(4, 'John', 'johnwafula@gmail.com', 'mpsacode1234');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(30) NOT NULL,
  `account` int(20) NOT NULL,
  `business` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `type` varchar(15) NOT NULL,
  `price` varchar(10) NOT NULL,
  `oldprice` varchar(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `date` date NOT NULL,
  `category` varchar(20) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `type`, `price`, `oldprice`, `quantity`, `date`, `category`, `description`, `image`) VALUES
(74, 'Hp', 'laptop', '65000', '60000', 11, '2017-11-02', 'Electronics', '<p>8gb RAM with hard disk space og 1TB</p>', 'hp.jpg'),
(75, 'BMW V8', 'vehicle', '1000000', '900000', 10, '2017-11-02', 'Automotive', '<p>2017 model. Black in color</p>', 'v8 bmw.jpg'),
(77, 'DVD', 'LG', '50000', '40000', 3, '2017-11-02', 'Electronics', '<p>black i n color</p>', 'dvd.jpg'),
(82, 'Dell', 'laptop', '100000', '90000', 10, '2017-11-06', 'Electronics', '<p>i7 with 8gb RAM</p>', 'dell.jpg'),
(83, 'Asus', 'laptop', '90000', '80000', 15, '2017-11-06', 'Electronics', '<p>i7 with 8gb RAM&nbsp;</p>', 'asus.jpg'),
(88, 'Fridge', 'Electronics', '80000', '60000', 5, '2017-11-13', 'Kitchen Aplliances', '<p>black in color</p>', 'fridge.jpg'),
(89, 'Toaster', 'tp', '80000', '70000', 9, '2017-11-14', 'Kitchen Aplliances', '<p>black in color</p>', 'toaster.jpg'),
(90, 'Iphone x', 'mobile phone', '100000', '90000', 1, '2017-11-15', 'Electronics', '<p>3gb RAM</p>', 'iphone x.jpg'),
(91, 'Washing machine', 'LG', '80000', '50000', 4, '2017-11-27', 'Home appliances', '<p>New model</p>', 'washing machine.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `id` int(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cartprice` int(200) NOT NULL,
  `date` date NOT NULL,
  `pending` varchar(20) NOT NULL,
  `transit` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`id`, `email`, `cartprice`, `date`, `pending`, `transit`) VALUES
(56, 'mary4@gmail.com', 1115000, '2017-11-27', 'ACCEPT', ''),
(57, 'mary4@gmail.com', 1115000, '2017-11-27', 'ACCEPT', ''),
(58, 'alex@gmail.com', 1050000, '2017-11-28', '', ''),
(59, 'alex@gmail.com', 1050000, '2017-11-28', '', ''),
(60, 'alex@gmail.com', 1050000, '2017-11-28', '', ''),
(61, 'alex@gmail.com', 1065000, '2017-11-29', '', ''),
(62, 'johnwafula@gmail.com', 90000, '2017-11-29', 'ACCEPT', '');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(12) NOT NULL,
  `category` varchar(20) NOT NULL,
  `sale` int(12) NOT NULL,
  `purchase` int(12) NOT NULL,
  `profit` int(12) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `category`, `sale`, `purchase`, `profit`, `date`) VALUES
(1, 'Electronics', 40000, 30000, 10000, '2017-10-23'),
(2, 'Automotive', 50000, 40000, 10000, '2017-10-24'),
(3, 'house appliances', 30000, 10000, 20000, '2017-10-25'),
(4, 'kitchen appliances', 10000, 5000, 5000, '2017-10-26');

-- --------------------------------------------------------

--
-- Table structure for table `transit`
--

CREATE TABLE `transit` (
  `id` int(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `installment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transit`
--

INSERT INTO `transit` (`id`, `email`, `date`, `installment`) VALUES
(2, 'mary4@gmail.com', '0000-00-00', ''),
(3, 'mary4@gmail.com', '2017-11-27', '1st installment complete'),
(4, 'johnwafula@gmail.com', '2017-11-29', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `lastname`, `email`, `contact`, `password`) VALUES
(27, 'John', 'Waweru', 'john@gmail.com', '0715488707', '5f4dcc3b5aa765d61d8327deb882cf99'),
(26, 'Mary', 'Kamau', 'mary@gmail.com', '0715488707', '5f4dcc3b5aa765d61d8327deb882cf99'),
(24, 'Hellen', 'Joan', 'hellen@gmail.com', '0715488707', '5f4dcc3b5aa765d61d8327deb882cf99'),
(33, 'Penina', 'Gathuri', 'peninagathuri@yahoo.com', '0722679570', '1f66ec49f59b800b08192fe075a04101'),
(47, 'John', 'Wafula', 'johnwafula@gmail.com', '0715488707', '1a1dc91c907325c69271ddf0c944bc72'),
(39, 'Mary', 'Wahome', 'mary4@gmail.com', '0715488070', '5f4dcc3b5aa765d61d8327deb882cf99'),
(46, 'Alex', 'Gathuri', 'alex4@gmail.com', '0715488707', '5f4dcc3b5aa765d61d8327deb882cf99'),
(43, 'Alex', 'Wafula', 'alex@gmail.com', '0715488707', '5f4dcc3b5aa765d61d8327deb882cf99');

-- --------------------------------------------------------

--
-- Table structure for table `workers`
--

CREATE TABLE `workers` (
  `id` int(10) NOT NULL,
  `username` varchar(15) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `contact` int(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(25) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workers`
--

INSERT INTO `workers` (`id`, `username`, `lastname`, `email`, `contact`, `password`, `role`, `image`) VALUES
(32, 'John', 'Thiongo', 'john@gmail.com', 715478963, '5f4dcc3b5aa765d61d8327deb882cf99', 'MANAGER', ''),
(34, 'Mary', 'Njoki', 'mary@gmail.com', 71234567, '5f4dcc3b5aa765d61d8327deb882cf99', 'HEAD OF DEPARTMENT', ''),
(35, 'Jane', 'Mary', 'jane@gmail.com', 715488707, '5f4dcc3b5aa765d61d8327deb882cf99', 'MANAGER', ''),
(36, 'Dean', 'Winchester', 'winch@gmail.com', 715488707, '5f4dcc3b5aa765d61d8327deb882cf99', 'SECRETARY', ''),
(37, 'William', 'Queen', 'william@gmail.com', 715488707, '5f4dcc3b5aa765d61d8327deb882cf99', 'ADMIN', ''),
(38, 'Samuel', 'Winchester', 'samwinch@gmail.com', 721109276, '5f4dcc3b5aa765d61d8327deb882cf99', '', ''),
(39, 'Peter', 'Parker', 'peter@gmail.com', 712345678, '5f4dcc3b5aa765d61d8327deb882cf99', '', ''),
(43, 'Alex', 'Gathuri', 'alex@gmail.com', 715488707, '5f4dcc3b5aa765d61d8327deb882cf99', 'ADMIN', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transit`
--
ALTER TABLE `transit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workers`
--
ALTER TABLE `workers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;
--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `transit`
--
ALTER TABLE `transit`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `workers`
--
ALTER TABLE `workers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
