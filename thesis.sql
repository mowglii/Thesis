-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2015 at 09:55 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `thesis`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE IF NOT EXISTS `activities` (
  `user_id` int(11) NOT NULL,
  `exer_id` int(11) NOT NULL,
  `activities_date` date NOT NULL,
  `activities_duration` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `eating`
--

CREATE TABLE IF NOT EXISTS `eating` (
  `user_id` int(11) NOT NULL,
  `food_id` int(11) NOT NULL,
  `eating_date` date NOT NULL,
  `eating_meal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exercise`
--

CREATE TABLE IF NOT EXISTS `exercise` (
`exer_id` int(11) NOT NULL,
  `exer_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `exer_kcal` double NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exercise`
--

INSERT INTO `exercise` (`exer_id`, `exer_name`, `exer_kcal`) VALUES
(26, 'นั่งสบายๆ', 1.4),
(27, 'ยืนสบายๆ', 1.7),
(28, 'แต่งตัว', 2.8),
(29, 'เดินธรรมดา', 2.3),
(30, 'เดินเร็ว', 3.1),
(31, 'เดินลงบันได', 5.2),
(32, 'เดินขึ้นบันได', 9),
(33, 'ขับรถ', 2.8),
(34, 'โบว์ลิ่ง', 4.4),
(35, 'เล่นกอล์ฟ', 5),
(36, 'ว่ายน้ำ(ความเร็ว 20 หลา/นาที)', 5),
(37, 'วิ่ง', 11),
(38, 'เล่นเทนนิส', 7.1),
(39, 'พายเรือ', 10),
(40, 'ปั่นจักรยาน(ความเร็ว 30 กม./ชม.)', 8.3),
(41, 'ปั่นจักรยาน(ความเร็ว 20 กม./ชม.)', 5.5),
(42, 'ซักผ้าด้วยมือ', 2),
(43, 'ทำสวน', 2.5),
(44, 'ทำงานบ้าน', 3.3),
(45, 'รีดผ้า', 1.25),
(46, 'เต้นรำ', 2.9),
(47, 'เล่นฮูลาฮูป', 7),
(48, 'โยคะ', 3),
(49, 'เต้นแอโรบิค', 5.9),
(50, 'วิ่งเหยาะๆ', 6.4),
(51, 'กระโดดเชือก', 6.5);

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE IF NOT EXISTS `food` (
`food_id` int(11) NOT NULL,
  `food_type` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `food_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `food_weight` int(11) NOT NULL,
  `food_kcal` int(11) NOT NULL,
  `food_fat` int(11) NOT NULL,
  `food_cholesterol` int(11) NOT NULL,
  `food_protein` int(11) NOT NULL,
  `food_carbohydrate` int(11) NOT NULL,
  `food_sugar` int(11) NOT NULL,
  `food_salt` int(11) NOT NULL,
  `food_vita` int(11) NOT NULL,
  `food_vitb1` int(11) NOT NULL,
  `food_vitb2` int(11) NOT NULL,
  `food_calcium` int(11) NOT NULL,
  `food_iron` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`food_id`, `food_type`, `food_name`, `food_weight`, `food_kcal`, `food_fat`, `food_cholesterol`, `food_protein`, `food_carbohydrate`, `food_sugar`, `food_salt`, `food_vita`, `food_vitb1`, `food_vitb2`, `food_calcium`, `food_iron`) VALUES
(1, 'อาหารจานเดียว', 'ข้าวพะแนงหมู', 300, 760, 44, 75, 18, 71, 6, 690, 0, 15, 8, 4, 15),
(2, 'อาหารจานเดียว', 'ข้าวสเต็กหมู', 325, 690, 34, 75, 18, 79, 4, 750, 6, 8, 4, 4, 8),
(3, 'อาหารจานเดียว', 'ข้าวแกงเขียวหวานไก่', 290, 470, 15, 45, 16, 68, 5, 930, 10, 4, 8, 6, 15),
(4, 'อาหารจานเดียว', 'ข้าวแกงเขียวหวานลูกชิ้นปลายอดมะพร้าว', 320, 500, 11, 30, 18, 82, 5, 640, 6, 4, 2, 2, 4),
(5, 'อาหารจานเดียว', 'ข้าวปลาซาลมอนผัดฉ่า', 370, 610, 24, 45, 22, 77, 2, 470, 8, 2, 2, 4, 4),
(6, 'อาหารจานเดียว', 'ข้าวญี่ปุ่นหน้าไก่ซอสเทอริยากิ', 320, 500, 12, 90, 24, 73, 5, 300, 4, 4, 10, 2, 8),
(7, 'อาหารจานเดียว', 'ข้าวหมูทอดกระเทียมพริกไทย', 280, 720, 40, 75, 17, 72, 2, 750, 6, 4, 4, 4, 8),
(8, 'อาหารจานเดียว', 'ข้าวหน้าไก่', 280, 440, 8, 30, 22, 71, 1, 440, 0, 4, 10, 2, 6),
(9, 'อาหารจานเดียว', 'ข้าวกระเพราไก่', 295, 500, 11, 90, 28, 71, 5, 950, 8, 6, 10, 6, 8),
(10, 'อาหารจานเดียว', 'มักโรนีผักโขมอบชีส', 260, 560, 24, 75, 22, 63, 1, 700, 10, 4, 8, 30, 8),
(11, 'อาหารจานเดียว', 'ข้าวผัดน้ำพริกลงเรือ', 230, 640, 32, 90, 14, 74, 6, 1000, 0, 10, 6, 4, 15),
(12, 'อาหารจานเดียว', 'ข้าวผัดอเมริกัน', 300, 510, 16, 55, 21, 72, 2, 1100, 0, 2, 8, 4, 14),
(13, 'อาหารจานเดียว', 'เกี๊ยวกุ้งน้ำ', 320, 190, 7, 100, 17, 16, 1, 1000, 0, 0, 0, 4, 8),
(14, 'อาหารจานเดียว', 'สปาเก็ตตี้เบคอนผัดซอสมะเขือเทศ', 220, 450, 21, 40, 22, 43, 1, 710, 8, 4, 4, 4, 4),
(15, 'อาหารจานเดียว', 'สปาเก็ตตี้ขี้เมาไก่', 250, 300, 5, 70, 26, 37, 5, 950, 17, 6, 8, 4, 10),
(16, 'อาหารจานเดียว', 'สปาเก็ตตี้ซาลมอนและซอสเพสโต้', 240, 370, 19, 35, 16, 33, 2, 410, 0, 0, 0, 2, 4),
(17, 'อาหารจานเดียว', 'สปาเก็ตตี้ซอสไก่', 250, 280, 7, 19, 14, 40, 2, 580, 6, 4, 6, 4, 10),
(18, 'อาหารจานเดียว', 'สปาเก็ตตี้คาโบนาร่า', 245, 470, 27, 55, 25, 33, 2, 950, 10, 0, 0, 4, 10),
(19, 'ขนมขบเคี้ยว', 'เมล็ดมะม่วงหิมพานต์อบเนย', 35, 220, 16, 0, 6, 12, 4, 20, 0, 8, 4, 0, 15),
(20, 'ขนมขบเคี้ยว', 'ขนมอบกรอบพันสาหร่าย', 32, 120, 0, 0, 3, 26, 2, 260, 0, 14, 6, 2, 4),
(21, 'ขนมขบเคี้ยว', 'ถั่วลันเตาอบกรอบ', 35, 160, 6, 0, 7, 20, 2, 125, 0, 4, 4, 4, 10),
(22, 'ขนมขบเคี้ยว', 'ถั่วลันเตารสวาซาบิ', 40, 170, 5, 0, 6, 27, 5, 160, 0, 4, 4, 4, 10),
(23, 'ขนมขบเคี้ยว', 'คุกกี้เนย', 75, 410, 25, 40, 5, 45, 21, 250, 0, 0, 0, 0, 0),
(24, 'ขนมขบเคี้ยว', 'คุกกี้นม', 75, 410, 25, 30, 5, 43, 20, 220, 0, 0, 0, 0, 0),
(25, 'ขนมขบเคี้ยว', 'คุกกี้กาแฟ', 75, 410, 23, 40, 5, 45, 21, 230, 0, 0, 0, 0, 0),
(26, 'ขนมขบเคี้ยว', 'คุกกี้กลิ่นใบเตย', 75, 410, 23, 40, 5, 44, 21, 260, 0, 0, 0, 0, 0),
(27, 'ของหวาน', 'ข้าวเหนียวน้ำกะทิทุเรียน', 200, 360, 12, 0, 4, 57, 25, 190, 0, 8, 2, 0, 4),
(28, 'ของหวาน', 'โอนี้แปะก๊วย', 150, 29, 8, 0, 3, 52, 13, 250, 0, 0, 0, 0, 4),
(29, 'น้ำ', 'น้ำเบอร์รี่รวม', 200, 110, 0, 0, 0, 28, 26, 35, 40, 0, 0, 0, 2),
(30, 'น้ำ', 'น้ำองุ่นแดง', 200, 110, 0, 0, 0, 27, 22, 25, 2, 0, 0, 0, 0),
(31, 'น้ำ', 'น้ำแอปเปิ้ลผสมน้ำทับทิมรวม', 200, 90, 0, 0, 0, 23, 23, 25, 0, 0, 0, 0, 2),
(32, 'น้ำ', 'น้ำแครอทม่วงผสมน้ำผลไม้ผักรวม', 200, 100, 0, 0, 0, 26, 22, 70, 30, 0, 0, 2, 2),
(33, 'น้ำ', 'น้ำส้มวาเลนเซีย', 200, 100, 0, 0, 2, 25, 24, 25, 0, 0, 0, 2, 4),
(34, 'น้ำ', 'น้ำนมข้าวโพด', 180, 80, 1, 0, 2, 18, 12, 150, 30, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`user_id` int(11) NOT NULL,
  `user_weight` int(11) NOT NULL,
  `user_height` int(11) NOT NULL,
  `user_birthday` date NOT NULL,
  `user_gender` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_frequency` float NOT NULL,
  `user_goal` double NOT NULL,
  `user_mode` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_weight`, `user_height`, `user_birthday`, `user_gender`, `user_frequency`, `user_goal`, `user_mode`) VALUES
(1, 88, 160, '1992-09-21', 'f', 1.2, 0.75, 0.75);

-- --------------------------------------------------------

--
-- Table structure for table `user_weight`
--

CREATE TABLE IF NOT EXISTS `user_weight` (
`user_weight_id` int(11) NOT NULL,
  `user_weight_date` date NOT NULL,
  `user_weight_weight` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exercise`
--
ALTER TABLE `exercise`
 ADD PRIMARY KEY (`exer_id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
 ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_weight`
--
ALTER TABLE `user_weight`
 ADD PRIMARY KEY (`user_weight_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exercise`
--
ALTER TABLE `exercise`
MODIFY `exer_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
MODIFY `food_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user_weight`
--
ALTER TABLE `user_weight`
MODIFY `user_weight_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
