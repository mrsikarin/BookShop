-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2022 at 05:19 PM
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
-- Database: `storebook`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` varchar(10) NOT NULL,
  `admin_pass` varchar(30) NOT NULL,
  `admin_name` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_pass`, `admin_name`, `phone`) VALUES
('00001', '123456', 'bad bad', '0812345678');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `bill_id` int(11) NOT NULL,
  `detail` text NOT NULL,
  `u_id` int(10) NOT NULL,
  `b_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`bill_id`, `detail`, `u_id`, `b_id`) VALUES
(15, 'ราคารวม :850', 1, 14),
(16, 'ราคารวม :416', 1, 16);

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `b_id` int(10) NOT NULL,
  `b_name` varchar(80) NOT NULL,
  `price` float NOT NULL,
  `amount` int(11) NOT NULL,
  `Type` varchar(30) NOT NULL,
  `admin_id` varchar(11) NOT NULL,
  `imagebook` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`b_id`, `b_name`, `price`, `amount`, `Type`, `admin_id`, `imagebook`) VALUES
(14, 'เรื่องวุ่นๆ กับ มนุษย์เหมียว เล่ม 2', 85, 10, 'การ์ตูน', '00001', '1000246875_front_XL.jpg'),
(15, 'ปิศาจเทพกับเด็กหนุ่มนักวาดภาพ เล่ม 2 (MG)', 90, 10, 'การ์ตูน', '00001', '1000246874_front_XXL.jpg'),
(16, 'วัดอุณหภูมิใจให้รู้ว่ารัก', 52, 8, 'การ์ตูน', '00001', '1000246841_front_XXL.jpg'),
(17, 'เทพแห่งกับดักเปิดโหมดล่าผู้กล้าต่างโลก เล่ม 2', 147, 5, 'การ์ตูน', '00001', '1000246663_front_XXL.jpg'),
(18, 'สโนไวท์ผมแดง เล่ม 23', 66.5, 50, 'การ์ตูน', '00001', '1000246664_front_XXL.jpg'),
(19, 'ไม่ค่อยเข้าใจหรอกค่ะ แต่เหมือนจะมาเกิดใหม่ในต่างโลกซะแล้ว เล่ม 2', 147, 8, 'การ์ตูน', '00001', '1000246667_front_XXL.jpg'),
(20, 'Solo Leveling เล่ม 2 (Mg)', 247, 2, 'การ์ตูน', '00001', '1000246754_front_XL.jpg'),
(21, 'แฟนผมเป็นคุณครู', 135, 5, 'การ์ตูน', '00001', '1000246723_front_XL.jpg'),
(22, 'วันว่างๆ ของขุนนางสายชิล เล่ม 2', 85.5, 20, 'การ์ตูน', '00001', '1000246714_front_XXL.jpg'),
(23, 'GINTAMA กินทามะ เล่ม 76', 66, 5, 'การ์ตูน', '00001', '1000246545_front_XXL.jpg'),
(24, 'คุณปิศาจขา มาเป็นมาม้าหนูหน่อย เล่ม 1', 90, 15, 'การ์ตูน', '00001', '1000246541_front_XL.jpg'),
(25, 'คุณคามุยลุยหลังผี เล่ม 1', 85, 10, 'การ์ตูน', '00001', '1000246441_front_XXL.jpg'),
(26, 'ช่างฝีมือเวท ดาลิยาขอมุ่งหน้าสู่วันฟ้าใส เล่ม 1', 85, 10, 'การ์ตูน', '00001', '1000245729_front_XXL.jpg'),
(27, 'ไขคดีกับโคนันใน 10 นาที เล่ม 2', 109.25, 10, 'การ์ตูน', '00001', '1000246481_front_XXL.jpg'),
(28, 'ครอบครัวป่วน ก๊วน ม.ปลาย เล่ม 2 ยุคทองของพวกเรา', 85, 5, 'การ์ตูน', '00001', '1000246871_front_XXL.jpg'),
(29, 'สะดุดรักยัยแฟนเช่า เล่มที่ 22 +', 200, 2, 'โดจิน', '00001', 'Opera สแนปช็อต_2022-03-15_23111.png'),
(30, 'รีเวิร์สออนเซ็น', 90, 10, 'โดจิน', '00001', '32528.jpg'),
(31, 'เมียนายนั้น เสร็จฉันเมือคืนนี้ ', 211, 10, 'โดจิน', '00001', 'doujin_27611_no_0.jpg'),
(32, 'สานรัก อาซาโตะ', 350, 21, 'โดจิน', '00001', 'doujin_26770_no_0.jpg'),
(33, 'เสน่ห์รักเด็กข้างบ้าน 5', 90, 10, 'โดจิน', '00001', 'doujin_24845_no_0.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `u_name` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `e-mail` varchar(50) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `username`, `pass`, `u_name`, `phone`, `gender`, `e-mail`, `address`) VALUES
(1, 'mrsikarin', '123456', 'Sikarin Suksai', '0812345678', '', '', 'hkjhkjgkjgjhgjhg'),
(8, 'mrsikarin1', '123456', 'bad bad', '0815234678', '', '', '995/21 หมู่บ้านทรัพย์รุ่งเรืองซิตี้');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`bill_id`),
  ADD KEY `bill_ibfk_1` (`u_id`),
  ADD KEY `bill_ibfk_2` (`b_id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`b_id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `b_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `user` (`u_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `bill_ibfk_2` FOREIGN KEY (`b_id`) REFERENCES `book` (`b_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
