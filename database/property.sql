-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2020 at 10:44 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `property`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(3) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `password`) VALUES
(1, 'amt', 'noble'),
(2, '', '19b19ffc30caef1c9376cd2982992a59'),
(3, 'adebz@aol.com', '56ab24c15b72a457069c5ea42fcfc640'),
(4, 'funtymama@aol.com', 'ab334feeb31c05124cb73fa12571c2f6'),
(5, 'ewr', '818f9c45cfa30eeff277ef38bcbe9910'),
(6, 'barry@yahoo.com', '564f60a2dd82ea24bfa3f2f615348f7c'),
(7, 'cr', '035ed2311b96d2a65ec6a6fe71046c14'),
(8, 'w', 'f1290186a5d0b1ceab27f4e77c0c5d68'),
(9, 'afr', '9dd4e461268c8034f5c8564e155c67a6'),
(10, 'fr@yahoo.com', '4a8a08f09d37b73795649038408b5f33'),
(11, '45@yahoo.com', 'e5bb23797bfea314a3db43d07dbd6a74'),
(12, 'aft@aol.com', '0708a5063ae282ad69314d68f1742051'),
(13, 'Nola@aol.com', 'f0f16651d58cb4576ce35de241fcbce4'),
(14, 'kol@aol.com', '36b1c5be249ad6a533dcfa9654e73396'),
(15, 'afr@yahoo.com', '818f9c45cfa30eeff277ef38bcbe9910'),
(16, 'Mark@aol.com', 'd497cda21fa23ed2198fe2a576cfe023'),
(17, 'ree@aol.com', '56ab24c15b72a457069c5ea42fcfc640'),
(18, 'ade@aol.com', '3285874894eb917449adefa88fd503e9'),
(19, 'afar@aol.com', '93557d21507da6a06a532d6c94a2259c'),
(20, 'qw@aol.com', '6050ce63e4bce6764cb34cac51fb44d1'),
(21, 'rfrge@aol.com', 'ff1ccf57e98c817df1efcd9fe44a8aeb'),
(22, 'ara@aol.com', '90e2dc3713503218f87a1b2c8f25e54b'),
(23, 'wtq3@aol.com', '2875bb6838fa9e0c59ef52b4cae4f37a'),
(24, '4f43@aol.com', 'f66edb196bffbb6fac7fcc8ef6e8b230'),
(25, 'debz@aol.com', '9b0d6b8b82f0af7ca85d5a216f97f5b8'),
(26, 'joy@aol.com', 'c2c8e798aecbc26d86e4805114b03c51'),
(27, 'admin@aol.com', 'c8ffe9a587b126f152ed3d89a146b445'),
(28, 'Ike@aol.com', 'c2c8e798aecbc26d86e4805114b03c51'),
(29, 'gbohuns@aol.com', '56ab24c15b72a457069c5ea42fcfc640'),
(30, 'ade@aol.com', '56ab24c15b72a457069c5ea42fcfc640'),
(31, 'Gbo@aol.com', 'c2c8e798aecbc26d86e4805114b03c51'),
(32, 'Ghohuns', '56ab24c15b72a457069c5ea42fcfc640'),
(33, 'Daniel', '56ab24c15b72a457069c5ea42fcfc640'),
(34, 'Gbenga Dorothy', 'd18746ae98dc791dfb72e4afdbc707d6'),
(35, 'Gbohunmi', '695e06655143c0d6c31e47e356558132'),
(36, 'debz@aol.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(37, '3r32', '714d9d020091de8ceb37a24063664810'),
(38, 'r', '4b43b0aee35624cd95b910189b3dc231'),
(39, 'ft', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `city_name`) VALUES
(1, 'Ikeja'),
(2, 'VI'),
(3, 'Dopemu'),
(4, 'Ketu'),
(5, 'Ikosi'),
(6, 'Ogba'),
(7, 'Maryland'),
(8, 'Akowonjo'),
(9, 'Sango'),
(10, 'Epe'),
(11, 'Lekki'),
(12, 'Aja'),
(13, 'Badagry'),
(14, 'Agabara'),
(15, 'Sagamu');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `images` varchar(255) NOT NULL,
  `proid` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `post` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`images`, `proid`, `id`, `post`) VALUES
('index.jfif', 0, 1, 'The Sales\' advert for 2019 runs through to the last quarter of the year. You can post your property with no extra advertising cost. '),
('indext.jfif', 0, 2, ''),
('64.jpg', 0, 3, ''),
('74.jpg', 0, 4, ''),
('621a28715bdf9ddc3d5efa7925228d9el-m0xd-w480_h480_q80gt.jpg', 0, 5, ''),
('23.jpg', 0, 6, ''),
('80.jpg', 0, 7, ''),
('3850bca4ca3d83ef3162c68b7d24d15c3ada1882.jpg', 0, 8, ''),
('56528ddfaca0a_thumb900.jpg', 0, 9, ''),
('qeqe.jfif', 0, 10, ''),
('r44.jfif', 0, 11, ''),
('t55tt5.jfif', 0, 12, ''),
('ththt.jfif', 0, 13, ''),
('tom.jpg', 0, 14, ''),
('genMid.15017350_1.jpg', 0, 15, ''),
('genMid.15029203_2.jpg', 0, 16, ''),
('genMid.DW19023543_0.jpg', 0, 17, ''),
('cb1.jfif', 0, 18, ''),
('cb2.jpg', 0, 19, ''),
('cb5.jfif', 0, 20, ''),
('genMid.878476_2.jpg', 0, 21, ''),
('24.jpg', 0, 22, ''),
('79n.jpg', 0, 23, ''),
('84.webp', 0, 24, ''),
('24.jpg', 0, 25, ''),
('79n.jpg', 0, 26, ''),
('84.webp', 0, 27, ''),
('65.jfif', 0, 28, ''),
('70.jpg', 0, 29, ''),
('74.jpg', 0, 30, ''),
('74.jpg', 0, 31, ''),
('79n.jpg', 0, 32, ''),
('84.webp', 0, 33, ''),
('621a28715bdf9ddc3d5efa7925228d9el-m0xd-w480_h480_q80gt.jpg', 0, 34, ''),
('thumbnail1.jpg', 0, 35, ''),
('thumbnail2.jpg', 0, 36, ''),
('thumbnail3.jpg', 0, 37, ''),
('thumbnail1.jpg', 0, 38, ''),
('thumbnail2.jpg', 0, 39, ''),
('thumbnail3.jpg', 0, 40, ''),
('genMid.15017350_1.jpg', 0, 41, ''),
('genMid.15029203_2.jpg', 0, 42, ''),
('genMid.15017350_1.jpg', 0, 43, ''),
('genMid.15029203_2.jpg', 0, 44, ''),
('genMid.15017350_1.jpg', 0, 45, ''),
('genMid.15029203_2.jpg', 0, 46, ''),
('3.jpg', 0, 47, ''),
('3s.jpg', 0, 48, ''),
('4.jpg', 0, 49, ''),
('', 0, 50, ''),
('', 0, 51, '');

-- --------------------------------------------------------

--
-- Table structure for table `estate`
--

CREATE TABLE `estate` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `charge` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `access` varchar(100) NOT NULL,
  `floor` varchar(100) NOT NULL,
  `utility` varchar(255) NOT NULL,
  `descrip` text NOT NULL,
  `images` varchar(255) NOT NULL,
  `rooms` decimal(50,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `estate`
--

INSERT INTO `estate` (`id`, `name`, `charge`, `address`, `access`, `floor`, `utility`, `descrip`, `images`, `rooms`) VALUES
(192, 'Town hall', '90,000,000', '78 Okota rd, Ogba.', 'Public', '200sqm', 'Commercial', 'Sale', '621a28715bdf9ddc3d5efa7925228d9el-m0xd-w480_h480_q80gt.jpg', '4'),
(194, 'Wealth Spot Apartment', '2million naira', '7 Jun St, Lagos', 'Public', '450sqm', 'Housing', 'Housing for Elite', '79n.jpg', '12'),
(195, 'Kilo Housing Scheme', '89million', '67 Yawe Street, Lagos', 'Public', 'Large', 'Housing', 'Full Housing', '24.jpg', '9'),
(207, 'Abraham Crescents', '2,000,000', '66 Taiwo Drive', 'Any', '250sqm', 'Housing', 'Rent', '70.jpg', '42'),
(208, 'Terrain Mansions', '7.2million', '44 Eloyo Street Ogba, Lagos.', 'Public', '1 echre', 'Lease', 'Guest House', '40.jpg', '9'),
(209, 'Bollington Homes', '3.5million', '17, Coral Homes, Lagos', 'Public', '450sqm', 'Home', 'For quick rent', 'cb2.jpg', '5'),
(210, 'Zebra Column Homes', '67million', '112, Block 16, Harrison Waay', 'Public/Private', 'Large', '400sqm', 'Self detached rooms and independent lodge', 'ISql9bwmopghvn1000000000.jpg', '5'),
(211, 'Bm Apartments', '342million', 'Plot 4, Sea Grade View, Lagos', 'Private', '260km', 'Housing', 'Full View', '180415285.jpg', '12'),
(213, 'Gallon Story', '12million', 'Island', 'Public', '300sqm', 'Project Based', 'Fully furnished', '80.jpg', '4'),
(220, 'Blu Buildings', '78 million', 'Greenview Estates', 'Public', 'Wide', 'Housing', 'Fully Equipped', 'htth.jpg', '7'),
(262, 'Bull', '1,000,000', '13 Fifth Av, Lagos', 'Public', 'Reserved', 'Housing', 'Multipurpose', '64.jpg', '7'),
(263, 'Bricks and Gardens', '600,000', '102 West End, Lagos', 'Private', '102sq km', 'Housing', 'For annual rent', '84.webp', '7'),
(265, 'Sky Towers', '2,000,000 ', '23 Monroe Av, Dallas, USA', 'Public', '1000 sqm', 'Commercial', 'Commercial Center ready for use', '2.jpg', '300');

-- --------------------------------------------------------

--
-- Table structure for table `estatelog`
--

CREATE TABLE `estatelog` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `estatelog`
--

INSERT INTO `estatelog` (`id`, `username`, `email`, `firstname`, `lastname`, `password`, `name`) VALUES
(1, '', 'newton@aol.com', '', '', '', ''),
(2, '', 'newton@aol.com', '', '', '', ''),
(3, '', 'sampolitics@aol.com', '', '', '', ''),
(4, '', 'tunde@gmail.om', '', '', '', ''),
(5, '', 'funt@yahoo.com', '', '', '', ''),
(6, '', 'babatunde@faise.com', '', '', '', ''),
(7, '', 'ade@yahoo.com', '', '', '', ''),
(8, '', 'babe@yahoo.com', '', '', '', ''),
(9, '', 'adebzee@gmail.com', 'adebz', 'gth', 'b54aec7aa025d07993c1e95ce57fce91', ''),
(10, '', 'biyilog@yahoo.com', 'tol', 'tola', '3d14b3015782e3bb005d2d4c4e8f568e', ''),
(11, '', 'debjet@aol.com', '', '', '00ed0f1d6fa0f51775d9fd969adb4e3b', ''),
(12, '', 'gbenga@aol.com', '', '', '', ''),
(13, '', 'adebz@aol.com', '', '', '373633ec8af28e5afaf6e5f4fd87469b', ''),
(14, '', 'debx@yahoo.com', '', '', '', ''),
(15, '', 'debzeet07@yahoo.com', 'Jerry', 'Gwier', '49d46ecf58aa33473aff0feedc5a086c', ''),
(16, '', 'dejy@aol.com', '', '', 'a09baee418897842ff2184ead91a81ac', ''),
(17, '', 'g@gbohuns.com', '', '', '', 'debzee'),
(18, '', 'g@gbohuns.com', '', '', '', 'debzee'),
(19, '', 'g@gbohuns.com', '', '', '', 'debzee'),
(20, '', 'g@gbohuns.com', '', '', '', 'debzee'),
(21, '', 'g@gbohuns.com', '', '', '', 'debzee');

-- --------------------------------------------------------

--
-- Table structure for table `keyword`
--

CREATE TABLE `keyword` (
  `keyword_id` int(11) NOT NULL,
  `keyword` varchar(250) NOT NULL,
  `post_topic` varchar(250) NOT NULL,
  `post_title` varchar(250) NOT NULL,
  `post` varchar(250) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keyword`
--

INSERT INTO `keyword` (`keyword_id`, `keyword`, `post_topic`, `post_title`, `post`, `date`) VALUES
(1, 'sale', 'Post 2017 advert', 'July Post', 'The Sales advert for 2019 runs through to the last quarter', '2019-07-09'),
(2, 'rent', '', '', '', '2019-07-17'),
(3, 'short-let', '', '', '', '2019-07-15'),
(4, 'lease', '', '', '', '2019-08-02');

-- --------------------------------------------------------

--
-- Table structure for table `livesearch`
--

CREATE TABLE `livesearch` (
  `id` int(30) NOT NULL,
  `type` varchar(200) NOT NULL,
  `bedrooms` varchar(50) NOT NULL,
  `city` varchar(200) NOT NULL,
  `min_price` varchar(200) NOT NULL,
  `max_price` varchar(200) NOT NULL,
  `purpose` varchar(200) NOT NULL,
  `city_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `livesearch`
--

INSERT INTO `livesearch` (`id`, `type`, `bedrooms`, `city`, `min_price`, `max_price`, `purpose`, `city_id`) VALUES
(1, 'Duplex, Apartment, Storey Building, Town Housing, Estate, Event Center', '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12', 'Lagos, Ikeja, VI, Dopemu, Agege, Mushin, ', '100,000, 200,000, 300,000', '800,000, 900,000, 1,200,000, 2,000,000', 'Rent, Sale, Short-let, Lease', 0);

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`) VALUES
(5, 'Joy@gmail.com'),
(6, 'Joy@gmail.com'),
(7, 'Joy@gmail.com'),
(8, 'Joy@gmail.com'),
(9, 'fg@aol.com'),
(10, 'bola@gmail.com'),
(11, 'bola@gmail.com'),
(12, 'bolaoyelewa@gmail.com'),
(13, 'bolaoyelewa@gmail.com'),
(14, 'unclejay@aol.com'),
(15, 'kemi@yahoo.com'),
(16, 'olawale@yahoo.com'),
(17, 'jh@yahoo.com'),
(18, 'gh@aol.com'),
(19, ''),
(20, ''),
(21, ''),
(22, ''),
(23, 'kj@aol.com'),
(24, ''),
(25, ''),
(26, ''),
(27, ''),
(28, ''),
(29, 'kola@yahoo.comi'),
(30, 'brostmo@aol.com'),
(31, 'brostmo@aol.com'),
(32, 'timo@aol.com'),
(33, 'gfge@aol.com'),
(34, 'bola@yahoo.com'),
(35, 'gfge@aol.com'),
(36, 'mark@aol.com'),
(37, 'mark@aol.com'),
(38, 'mark@aol.com'),
(39, 'mark@aol.com'),
(40, 'mark@aol.com'),
(41, 'mark@aol.com'),
(42, 'solip@yahoo.com'),
(43, 'ben@yahoo.com'),
(44, 'folaranmi@yahoo.com'),
(45, 'gbemi@hotmail.com'),
(46, 'slyzi@aol.com');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `post_topic` varchar(250) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post` varchar(250) NOT NULL,
  `description` longtext NOT NULL,
  `keyword` longtext NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `post_topic`, `post_title`, `post`, `description`, `keyword`, `date`) VALUES
(1, 'Kosofe Post ', 'VALUATION', 'The Sales\' advert for 2019 runs through to the last quarter of the year. You can post your property with no extra advertising cost.', 'Property Post 2019', 'sale', '2019-07-24 01:19:00'),
(2, 'Maryland Post', 'PROPERTY COUNT', 'The valuation for property indices is always carried out by process evaluations and work scope', 'Valuation of property', 'lease', '2019-07-22 04:35:07'),
(3, 'VI Post', 'QUICK SURVEY ', 'We Service property consultants are available from 16th October 2019 to 1st April 2020 for property survey', 'Service survey', 'short-let', '2019-07-04 08:21:19');

-- --------------------------------------------------------

--
-- Table structure for table `purpose`
--

CREATE TABLE `purpose` (
  `id` int(11) NOT NULL,
  `purpose_id` int(11) NOT NULL,
  `purpose` text NOT NULL,
  `city_id` int(11) NOT NULL,
  `city_name` varchar(250) NOT NULL,
  `image` text NOT NULL,
  `rooms` varchar(250) NOT NULL,
  `keyword_id` int(3) NOT NULL,
  `keyword` longtext NOT NULL,
  `minprice` varchar(250) NOT NULL,
  `maxprice` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purpose`
--

INSERT INTO `purpose` (`id`, `purpose_id`, `purpose`, `city_id`, `city_name`, `image`, `rooms`, `keyword_id`, `keyword`, `minprice`, `maxprice`) VALUES
(1, 1, 'Private', 1, 'Ikeja', 'prop2.jpg', '3', 2, 'Rent', '200,000', '1,000,000'),
(2, 2, 'Commercial', 2, 'VI', '79b.jpg', '5', 1, 'Sale', '100,000', '3,000,000'),
(3, 1, 'Private', 4, 'Dopemu', '79n.jpg', '4', 3, 'Short-Let', '150,000', '800,000'),
(4, 1, 'Private', 4, 'Ketu', '81.jpg', '2', 4, 'Lease', '400,000', '700,000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `estate`
--
ALTER TABLE `estate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `estatelog`
--
ALTER TABLE `estatelog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keyword`
--
ALTER TABLE `keyword`
  ADD PRIMARY KEY (`keyword_id`);

--
-- Indexes for table `livesearch`
--
ALTER TABLE `livesearch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purpose`
--
ALTER TABLE `purpose`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `estate`
--
ALTER TABLE `estate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=266;
--
-- AUTO_INCREMENT for table `estatelog`
--
ALTER TABLE `estatelog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `keyword`
--
ALTER TABLE `keyword`
  MODIFY `keyword_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `livesearch`
--
ALTER TABLE `livesearch`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `purpose`
--
ALTER TABLE `purpose`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
