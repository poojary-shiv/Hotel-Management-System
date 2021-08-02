-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2021 at 12:09 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hoteldeck`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `transaction_id` int(3) NOT NULL,
  `room_id` int(3) NOT NULL,
  `room_no` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`transaction_id`, `room_id`, `room_no`) VALUES
(1, 2, 'A110'),
(2, 1, 'A101'),
(3, 6, 'B112'),
(4, 1, 'A102'),
(5, 1, 'A103'),
(6, 4, 'A141'),
(7, 2, 'A111'),
(8, 3, 'A131'),
(9, 3, 'A132'),
(10, 1, 'A104'),
(45, 1, ''),
(47, 1, ''),
(48, 1, ''),
(50, 1, ''),
(51, 1, ''),
(52, 1, ''),
(53, 1, ''),
(54, 1, ''),
(55, 1, ''),
(56, 1, ''),
(57, 1, ''),
(57, 6, ''),
(58, 1, ''),
(58, 6, ''),
(59, 1, ''),
(59, 6, ''),
(60, 1, ''),
(60, 6, ''),
(61, 1, ''),
(61, 6, ''),
(62, 1, ''),
(62, 6, ''),
(63, 1, ''),
(63, 6, ''),
(64, 1, ''),
(64, 6, '');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `req_id` int(3) NOT NULL,
  `hotel_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`req_id`, `hotel_id`) VALUES
(1, 5),
(2, 4),
(3, 4),
(4, 2),
(5, 1),
(6, 2),
(7, 1),
(8, 3),
(9, 3),
(10, 4);

-- --------------------------------------------------------

--
-- Table structure for table `coupon`
--

CREATE TABLE `coupon` (
  `coupon_id` int(3) NOT NULL,
  `amount` int(5) DEFAULT NULL,
  `percentage` int(2) DEFAULT NULL,
  `name` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coupon`
--

INSERT INTO `coupon` (`coupon_id`, `amount`, `percentage`, `name`) VALUES
(1, 500, NULL, 'WELCOME'),
(2, 1000, NULL, '500_OFF'),
(3, NULL, 20, '20%_OFF'),
(4, NULL, 15, 'FESTIVE'),
(5, NULL, 5, 'HOLIDAY'),
(6, NULL, 30, 'LUCKY'),
(7, NULL, 5, '5%_OFF'),
(8, NULL, 10, '10%_OFF'),
(9, NULL, 15, '15%_OFF');

-- --------------------------------------------------------

--
-- Table structure for table `coupon_holder`
--

CREATE TABLE `coupon_holder` (
  `cust_id` int(3) NOT NULL,
  `coupon_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coupon_holder`
--

INSERT INTO `coupon_holder` (`cust_id`, `coupon_id`) VALUES
(1, 2),
(2, 3),
(3, 7),
(5, 2),
(5, 7),
(6, 9),
(7, 8),
(8, 2),
(8, 7),
(10, 7);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(3) NOT NULL,
  `password` varchar(15) DEFAULT NULL,
  `type` int(1) DEFAULT 0,
  `book` varchar(30) DEFAULT NULL,
  `colour` varchar(20) DEFAULT NULL,
  `tourist` varchar(30) DEFAULT NULL,
  `person_id` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `password`, `type`, `book`, `colour`, `tourist`, `person_id`) VALUES
(1, '*2BAAB2EF285AD0', 0, NULL, NULL, NULL, 11),
(2, '*EF7F9B8C409F37', 0, NULL, NULL, NULL, 12),
(3, '*F86BBBB611ADE8', 0, NULL, NULL, NULL, 13),
(4, '*76F8F3D6904500', 0, NULL, NULL, NULL, 14),
(5, '*35EBEA8FCE30C6', 0, NULL, NULL, NULL, 15),
(6, '*C95E0F179CA845', 0, NULL, NULL, NULL, 16),
(7, '*8B5B3D18C56174', 0, NULL, NULL, NULL, 17),
(8, '*C4EBBEBCF4063B', 0, NULL, NULL, NULL, 18),
(9, '*8AB9DF98A0F5B6', 0, NULL, NULL, NULL, 19),
(10, '*56708783284451', 0, NULL, NULL, NULL, 20),
(11, 'd6b0ab7f1c8ab8f', 0, NULL, NULL, NULL, 21),
(13, '783ae7e2fa08c7c', 0, NULL, NULL, NULL, 22),
(17, 'abc12345', 1, NULL, NULL, NULL, 23),
(18, 'abcdefgh', 0, NULL, NULL, NULL, 28),
(24, 'pqr12345', 2, NULL, NULL, NULL, 34),
(25, 'efg12345', 2, NULL, NULL, NULL, 35),
(26, 'abcdefgh', 0, NULL, NULL, NULL, 36),
(27, 'abcdefgh', 0, NULL, NULL, NULL, 37),
(28, 'abcdlmno', 0, NULL, NULL, NULL, 38),
(29, 'abcdefgh', 2, NULL, NULL, NULL, 39),
(30, 'abcdlmno', 2, NULL, NULL, NULL, 40),
(31, 'lmnopqrs', 2, 'Ignited Minds', 'White', 'Switzerland', 41);

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `req_id` int(3) NOT NULL,
  `f_name` varchar(20) DEFAULT NULL,
  `m_name` varchar(20) DEFAULT NULL,
  `l_name` varchar(20) DEFAULT NULL,
  `email_id` varchar(30) DEFAULT NULL,
  `staff_id` int(3) DEFAULT NULL,
  `message` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`req_id`, `f_name`, `m_name`, `l_name`, `email_id`, `staff_id`, `message`) VALUES
(1, 'Arpit', 'Suresh', 'Chanchlani', 'arprit@gmail.com', 1, NULL),
(2, 'Gautam', 'Harish', 'Chavan', 'gautam@gmail.com', 1, NULL),
(3, 'Anita', 'Jayesh', 'Modi', 'anita@gmail.com', 1, NULL),
(4, 'Bhavika', 'Rajesh', 'Sinha', 'bhavika@gmail.com', 3, NULL),
(5, 'Rahul', 'Shekhar', 'Pandey', 'rahul@gmail.com', 1, NULL),
(6, 'Shivani', 'Ramesh', 'Chouhan', 'shivani@gmail.com', 3, NULL),
(7, 'Vikram', 'Anil', 'Naval', 'vikram@gmail.com', 6, NULL),
(8, 'Krish', 'Anand', 'Dave', 'krish@gmail.com', 5, NULL),
(9, 'Vishal', 'Manish', 'Mangaonkar', 'vishal@gmail.com', 5, NULL),
(10, 'Nisha', 'Mohit', 'Sharma', 'nisha@gmail.com', 1, NULL),
(13, 'Manisha', NULL, 'Sinha', 'manishasinha@gmail.com', 1, ''),
(14, 'Aaradhya', NULL, 'Sinha', 'aaradhyasinha@gmail.com', 10, ''),
(15, 'Anil', NULL, 'Shetty', 'anilshetty@gmail.com', 6, ''),
(16, 'Prajwal', NULL, 'Dave', 'prajwaldave@gmail.com', 5, ''),
(17, 'Pratik', NULL, 'Suvarna', 'pratiksuvarna@gmail.com', 8, ''),
(18, 'Manisha', NULL, 'Suvarna', 'manishasinha@gmail.com', 4, 'Enquire about membership'),
(19, 'Anita', NULL, 'Shinde', 'anitashinde@gmail.com', 10, ''),
(20, 'Aaradhya', NULL, 'Sinha', 'aaradhyasinha@gmail.com', 1, 'Enquire about membership'),
(21, 'Jayesh', NULL, 'Pillai', 'jayeshpillai@gmail.com', 10, 'Enquire about membership');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry_phone`
--

CREATE TABLE `enquiry_phone` (
  `req_id` int(3) NOT NULL,
  `phone_no` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enquiry_phone`
--

INSERT INTO `enquiry_phone` (`req_id`, `phone_no`) VALUES
(1, 7386392461),
(1, 8286393333),
(2, 7386392222),
(3, 7355552461),
(3, 9386391161),
(4, 7386392666),
(4, 7666392461),
(5, 8386543461),
(5, 8986392461),
(6, 7388888861),
(6, 9387777461),
(7, 8386111161),
(8, 7111192461),
(9, 7386367891),
(9, 9345692461),
(10, 8386112461),
(13, 8291500633),
(13, 8291500733),
(14, 8291500633),
(14, 8291500733),
(15, 8291500633),
(15, 8291500733),
(16, 8291500633),
(16, 8291500733),
(17, 8291500633),
(17, 8291500733),
(18, 8291500733),
(19, 8291500733),
(20, 8291500633),
(20, 8291500733),
(21, 8291500633),
(21, 8291500733);

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `hotel_id` int(3) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `city` varchar(15) DEFAULT NULL,
  `avg_rating` float(2,1) DEFAULT NULL,
  `email_id` varchar(30) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`hotel_id`, `name`, `city`, `avg_rating`, `email_id`, `address`) VALUES
(1, 'Okwen', 'Mangaluru', 4.8, 'okwensupport@hd.ac.in', 'M.G Road, Nehru Nagar, Udupi, Karnataka'),
(2, 'Piroj', 'Mumbai', 4.5, 'pirojsupport@hd.ac.in', 'N.M Road, Shivaji Nagar, Chembur-71, Mumbai, Maharashtra'),
(3, 'Galaxy', 'Pune', 4.5, 'galaxysupport@hd.ac.in', 'LBS Road, Jagruti Nagar, Pune, Maharashtra'),
(4, 'Emerald Bay', 'Kolkata', 4.8, 'emeraldbaysupport@hd.ac.in', 'Service Road, JB Nagar, Kolkata, West Bengal'),
(5, 'Crown Plaza', 'Ahmedabad', 4.5, 'crownplazasupport@hd.ac.in', 'Sardar Patel Road, Vasant Nagar, Ahmedabad, Gujarat');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_has`
--

CREATE TABLE `hotel_has` (
  `hotel_id` int(3) NOT NULL,
  `room_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotel_has`
--

INSERT INTO `hotel_has` (`hotel_id`, `room_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(2, 1),
(2, 2),
(2, 3),
(2, 4),
(2, 5),
(2, 6),
(2, 7),
(2, 8),
(2, 9),
(2, 10),
(3, 1),
(3, 2),
(3, 3),
(3, 4),
(3, 5),
(3, 6),
(3, 7),
(3, 8),
(3, 9),
(3, 10),
(4, 1),
(4, 2),
(4, 3),
(4, 4),
(4, 5),
(4, 6),
(4, 7),
(4, 8),
(4, 9),
(4, 10),
(5, 1),
(5, 2),
(5, 3),
(5, 4),
(5, 5),
(5, 6),
(5, 7),
(5, 8),
(5, 9),
(5, 10);

-- --------------------------------------------------------

--
-- Table structure for table `looked_by`
--

CREATE TABLE `looked_by` (
  `staff_id` int(3) NOT NULL,
  `room_id` int(3) NOT NULL,
  `room_no` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `looked_by`
--

INSERT INTO `looked_by` (`staff_id`, `room_id`, `room_no`) VALUES
(1, 1, 'A101'),
(1, 1, 'A102'),
(1, 1, 'B101'),
(1, 2, 'A110'),
(1, 3, 'A115'),
(2, 1, 'A101'),
(3, 1, 'A101'),
(4, 2, 'A110'),
(5, 6, 'B601'),
(7, 6, 'B601');

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `person_id` int(3) NOT NULL,
  `f_name` varchar(20) DEFAULT NULL,
  `m_name` varchar(20) DEFAULT NULL,
  `l_name` varchar(20) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `email_id` varchar(30) DEFAULT NULL,
  `address` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`person_id`, `f_name`, `m_name`, `l_name`, `dob`, `gender`, `email_id`, `address`) VALUES
(1, 'Ajay', 'Sunil', 'Shetty', '2000-12-01', 'Male', 'ajay@gmail.com', NULL),
(2, 'Aaradhya', 'Sunil', 'Poojary', '2000-11-01', 'Female', 'aaradhya@gmail.com', NULL),
(3, 'Chaitra', 'Prakash', 'Shetty', '1996-12-01', 'Female', 'chaitra@gmail.com', NULL),
(4, 'Manisha', 'Mohan', 'Shirke', '1990-02-11', 'Female', 'manisha@gmail.com', NULL),
(5, 'Sachin', 'Krishna', 'Patel', '1985-12-01', 'Male', 'sachin@gmail.com', NULL),
(6, 'Jasprit', 'Manindar', 'Singh', '2002-06-01', 'Male', 'jasprit@gmail.com', NULL),
(7, 'Iram', 'Faizan', 'Qazi', '1992-12-01', 'Female', 'iram@gmail.com', NULL),
(8, 'Prakash', 'Pravin', 'Shinde', '1999-08-27', 'Male', 'prakash@gmail.com', NULL),
(9, 'Neha', 'Nitin', 'Suvarna', '1970-11-09', 'Female', 'neha@gmail.com', NULL),
(10, 'Aakash', 'Vishith', 'Oza', '1980-12-01', 'Male', 'aakash@gmail.com', NULL),
(11, 'Aayansh', 'Prashanth', 'Sharma', '1998-12-31', 'Male', 'aayansh@gmail.com', NULL),
(12, 'Avnish', 'Prajwal', 'Amin', '2000-03-11', 'Male', 'avnish@gmail.com', NULL),
(13, 'Hia', 'Dhiraj', 'Thakur', '2000-02-09', 'Female', 'hia@gmail.com', NULL),
(14, 'Ninad', 'Atul', 'Patil', '1997-02-09', 'Male', 'ninad@gmail.com', NULL),
(15, 'Rishabh', 'Pranav', 'Waingankar', '1996-08-25', 'Male', 'rishabh@gmail.com', NULL),
(16, 'Aranya', 'Anand', 'Mhaske', '2000-04-12', 'Female', 'aranya@gmail.com', NULL),
(17, 'Hitesh', 'Sathyesh', 'Lalmalani', '2001-08-09', 'Male', 'hitesh@gmail.com', NULL),
(18, 'Aman', 'Nasir', 'Malik', '1995-02-09', 'Male', 'aman@gmail.com', NULL),
(19, 'Sahil', 'Pradeep', 'Shinde', '2001-02-22', 'Male', 'sahil@gmail.com', NULL),
(20, 'Myra', 'Ranjith', 'Poojary', '1990-10-09', 'Female', 'myra@gmail.com', NULL),
(21, 'Shivprasad', 'Sundar', 'Poojary', '2000-09-27', 'Male', 'shiv@gmail.com', NULL),
(22, 'Aakash', 'Sunil', 'Singh', '2000-02-25', 'Male', 'aakash@gmail.com', NULL),
(23, 'Sachin', 'Mahesh', 'Rajawat', '1998-02-02', 'Male', 'rajawatmahesh@gmail.com', NULL),
(28, 'Hitesh', NULL, 'Poojary', '1996-02-07', 'Male', 'hiteshpoojary@gmail.com', NULL),
(34, 'Amit', NULL, 'Salunkhe', '1990-06-04', 'Male', 'amitsalunkhe@gmail.com', ''),
(35, 'Gautam', NULL, 'Shetty', '1999-01-05', 'Male', 'gautamshetty@gmail.com', ''),
(36, 'Pratik', NULL, 'Poojary', '2001-01-09', 'Male', 'pratikpoojary@gmail.com', ''),
(37, 'Vishith', NULL, 'Sinha', '1993-06-01', 'Male', 'vishithsinha2@gmail.com', ''),
(38, 'Vishith', NULL, 'Suvarna', '1988-05-16', 'Male', 'vishithsuvarna@gmail.com', ''),
(39, 'Pratik', NULL, 'Poojary', '1990-06-12', 'Male', 'pratikpoojary15@gmail.com', ''),
(40, 'Vishith', NULL, 'Suvarna', '1996-02-06', 'Male', 'vishithsuvarna7@gmail.com', ''),
(41, 'Nikhil', NULL, 'Shetty', '1989-02-07', 'Male', 'nikhilshetty@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `phone_hotel`
--

CREATE TABLE `phone_hotel` (
  `hotel_id` int(3) NOT NULL,
  `phone_no` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `phone_hotel`
--

INSERT INTO `phone_hotel` (`hotel_id`, `phone_no`) VALUES
(1, 8267847389),
(1, 8297899999),
(1, 8555556389),
(2, 7117847389),
(2, 7267667389),
(2, 7557847389),
(3, 9267833389),
(3, 9267847119),
(3, 9267847322),
(4, 8167847339),
(4, 8227841389),
(4, 8567547389),
(5, 8266647389),
(5, 8267947399),
(5, 8297847387);

-- --------------------------------------------------------

--
-- Table structure for table `phone_person`
--

CREATE TABLE `phone_person` (
  `person_id` int(3) NOT NULL,
  `phone_no` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `phone_person`
--

INSERT INTO `phone_person` (`person_id`, `phone_no`) VALUES
(1, 8771500733),
(1, 9225100218),
(2, 8291600733),
(2, 8391600733),
(3, 8221600733),
(3, 8491600733),
(4, 8291600711),
(4, 8291600755),
(5, 8291677733),
(5, 8291699733),
(6, 7619651328),
(6, 9619641328),
(7, 7229641328),
(7, 8619642222),
(8, 9777641328),
(9, 9748333275),
(9, 9748359275),
(10, 9848359475),
(11, 8748359111),
(11, 8848359275),
(33, 8291500633),
(33, 8291500733),
(34, 8291500633),
(34, 8291500733),
(35, 8291500633),
(35, 8291500733),
(36, 8291500633),
(36, 8291500733),
(37, 8291500633),
(37, 8291500733),
(38, 8291500733),
(39, 8291500633),
(39, 8291500733),
(40, 8291500633),
(40, 8291500733),
(41, 8291500633),
(41, 8291500733);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `hotel_id` int(3) NOT NULL,
  `room_id` int(3) NOT NULL,
  `room_no` varchar(10) NOT NULL,
  `floor_no` int(2) DEFAULT NULL,
  `balcony_y_n` varchar(5) DEFAULT NULL,
  `cust_id` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`hotel_id`, `room_id`, `room_no`, `floor_no`, `balcony_y_n`, `cust_id`) VALUES
(1, 1, 'A101', 1, 'Yes', 1),
(1, 1, 'A102', 1, 'No', 4),
(1, 1, 'A103', 1, 'Yes', 5),
(1, 1, 'A104', 1, 'No', 7),
(1, 1, 'A105', 1, 'Yes', NULL),
(1, 1, 'A106', 2, 'No', NULL),
(1, 1, 'A107', 2, 'Yes', NULL),
(1, 1, 'A108', 2, 'No', 8),
(1, 1, 'A109', 2, 'Yes', NULL),
(1, 1, 'A110', 2, 'No', NULL),
(1, 2, 'A111', 3, 'Yes', NULL),
(1, 2, 'A112', 3, 'No', NULL),
(1, 3, 'A120', 4, 'Yes', 5),
(1, 3, 'A121', 4, 'No', NULL),
(1, 4, 'A131', 5, 'Yes', NULL),
(1, 5, 'A141', 6, 'Yes', NULL),
(1, 5, 'A142', 6, 'No', NULL),
(1, 10, 'B701', 7, 'Yes', 1),
(1, 10, 'B801', 8, 'Yes', 9),
(1, 10, 'B901', 9, 'Yes', 10);

-- --------------------------------------------------------

--
-- Table structure for table `room_type`
--

CREATE TABLE `room_type` (
  `room_id` int(3) NOT NULL,
  `type` varchar(20) DEFAULT NULL,
  `max_no_of_people` int(2) DEFAULT NULL,
  `pricing` int(6) DEFAULT NULL,
  `rooms_available` int(2) DEFAULT NULL,
  `no_of_beds` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_type`
--

INSERT INTO `room_type` (`room_id`, `type`, `max_no_of_people`, `pricing`, `rooms_available`, `no_of_beds`) VALUES
(1, 'Single Room', 4, 3000, 20, 1),
(2, 'Twin Bedded Room', 4, 4000, 10, 2),
(3, 'Suite', 4, 7000, 10, 1),
(4, 'Royal', 4, 12000, 5, 1),
(5, 'Hoteldeck Grand', 4, 15000, 3, 1),
(6, 'Double Room', 8, 5000, 15, 2),
(7, 'Interconnected Room', 8, 6000, 5, 2),
(8, 'Royal Plus', 8, 22000, 5, 2),
(9, 'Triple Room', 12, 8000, 10, 3),
(10, 'Quad', 16, 11000, 8, 4);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(3) NOT NULL,
  `experience` int(2) DEFAULT NULL,
  `designation` varchar(25) DEFAULT NULL,
  `salary` int(6) DEFAULT NULL,
  `person_id` int(3) DEFAULT NULL,
  `hotel_id` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `experience`, `designation`, `salary`, `person_id`, `hotel_id`) VALUES
(1, 18, 'Manager', 50000, 1, 1),
(2, 10, 'Assistant manager', 40000, 2, 1),
(3, 22, 'Head Chef', 50000, 3, 3),
(4, 5, 'Receptionist', 25000, 4, 3),
(5, 7, 'Chef', 35000, 5, 5),
(6, 11, 'Guard', 20000, 6, 2),
(7, 13, 'Assistant manager', 40000, 7, 5),
(8, 2, 'Receptionist', 25000, 8, 2),
(9, 4, 'Accountant', 30000, 9, 1),
(10, 5, 'Receptionist', 25000, 10, 4);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `test_id` int(3) NOT NULL,
  `date_test` date DEFAULT NULL,
  `time_test` time DEFAULT NULL,
  `r_value` float(2,1) DEFAULT NULL,
  `cust_id` int(3) DEFAULT NULL,
  `hotel_id` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`test_id`, `date_test`, `time_test`, `r_value`, `cust_id`, `hotel_id`) VALUES
(1, '2020-09-11', '18:34:45', 4.5, 1, 3),
(2, '2020-09-17', '15:24:56', 5.0, 2, 5),
(3, '2020-09-24', '18:44:56', 4.0, 3, 2),
(4, '2020-09-25', '08:24:56', 4.0, 4, 3),
(5, '2020-09-30', '11:24:56', 5.0, 6, 4),
(6, '2020-10-03', '15:21:56', 4.5, 8, 1),
(7, '2020-10-04', '14:27:55', 4.0, 9, 5),
(8, '2020-10-06', '22:24:56', 4.5, 10, 4),
(9, '2020-10-08', '15:49:56', 5.0, 10, 5),
(10, '2020-10-10', '19:11:55', 5.0, 8, 5);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `transaction_id` int(3) NOT NULL,
  `transaction_date` date DEFAULT NULL,
  `transaction_time` time DEFAULT NULL,
  `total_amount` int(6) DEFAULT NULL,
  `check_in` date DEFAULT NULL,
  `check_out` date DEFAULT NULL,
  `no_of_people` int(2) DEFAULT NULL,
  `no_rooms` int(1) DEFAULT NULL,
  `payment_type` varchar(20) DEFAULT NULL,
  `document_submitted` varchar(30) DEFAULT NULL,
  `cust_id` int(3) DEFAULT NULL,
  `hotel_id` int(3) DEFAULT NULL,
  `coupon_id` int(3) DEFAULT NULL,
  `f_name` varchar(20) DEFAULT NULL,
  `l_name` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `mobile` bigint(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`transaction_id`, `transaction_date`, `transaction_time`, `total_amount`, `check_in`, `check_out`, `no_of_people`, `no_rooms`, `payment_type`, `document_submitted`, `cust_id`, `hotel_id`, `coupon_id`, `f_name`, `l_name`, `email`, `mobile`) VALUES
(1, '2020-09-01', '16:54:12', 8000, '2020-09-04', '2020-09-06', 3, NULL, 'Debit Card', 'Aadhar Card', 1, 2, 1, NULL, NULL, NULL, NULL),
(2, '2020-09-03', '15:22:12', 6000, '2020-09-04', '2020-09-05', 2, NULL, 'Credit card', 'PAN Card', 2, 5, 1, NULL, NULL, NULL, NULL),
(3, '2020-09-05', '11:45:12', 10000, '2020-09-08', '2020-09-10', 4, NULL, 'Debit Card', 'Voter ID', 4, 4, 1, NULL, NULL, NULL, NULL),
(4, '2020-09-06', '08:50:01', 12000, '2020-09-10', '2020-09-12', 1, NULL, 'Debit Card', 'Driving License', 7, 3, 1, NULL, NULL, NULL, NULL),
(5, '2020-09-08', '14:54:12', 20000, '2020-09-12', '2020-09-15', 4, NULL, 'Debit Card', 'Aadhar Card', 8, 1, 1, NULL, NULL, NULL, NULL),
(6, '2020-09-10', '21:45:12', 3000, '2020-09-11', '2020-09-12', 1, NULL, 'Debit Card', 'Aadhar Card', 10, 2, NULL, NULL, NULL, NULL, NULL),
(7, '2020-09-20', '13:54:55', 9000, '2020-09-24', '2020-09-25', 2, NULL, 'Debit Card', 'PAN Card', 1, 4, 1, NULL, NULL, NULL, NULL),
(8, '2020-09-22', '19:54:14', 14000, '2020-09-24', '2020-09-27', 3, NULL, 'Credit Card', 'Aadhar Card', 9, 3, 1, NULL, NULL, NULL, NULL),
(9, '2020-09-23', '23:33:09', 5000, '2020-09-26', '2020-09-27', 1, NULL, 'Credit Card', 'Voter ID', 2, 3, 1, NULL, NULL, NULL, NULL),
(10, '2020-09-25', '19:14:29', 4000, '2020-09-28', '2020-09-29', 1, NULL, 'Debit Card', 'Aadhar Card', 4, 4, NULL, NULL, NULL, NULL, NULL),
(46, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(47, '2020-11-16', '00:16:29', 6000, '2020-11-18', '2020-11-20', 3, 1, 'Debit Card', 'PAN Card', 17, 2, NULL, 'Hitesh', 'Poojary', 'hitesh@gmail.com', 8291500733),
(48, '2020-11-16', '00:26:17', 6000, '2020-11-19', '2020-11-21', 3, 1, 'Credit Card', 'Aadhar Card', 17, 4, NULL, 'Manisha', 'Sinha', 'manishasinha@gmail.com', 8291500733),
(50, '2020-11-16', '00:38:53', 3000, '2020-11-18', '2020-11-19', 3, 1, 'Debit Card', 'Voter ID', 17, 5, NULL, 'Aaradhya', 'Suvarna', 'vishithsinha@gmail.com', 8291500733),
(51, '2020-11-16', '00:43:19', 6000, '2020-11-19', '2020-11-21', 3, 1, 'Debit Card', 'Voter ID', 17, 5, NULL, 'Manisha', 'Amin', 'hitesh@gmail.com', 8291500733),
(52, '2020-11-16', '02:40:25', 3000, '2020-11-19', '2020-11-20', 3, 1, 'Debit Card', 'Aadhar Card', 17, 4, NULL, 'Manisha', 'Sinha', 'manishasinha@gmail.com', 8291500733),
(53, '2020-11-16', '02:41:10', 3000, '2020-11-19', '2020-11-20', 3, 1, 'Debit Card', 'Aadhar Card', 17, 4, NULL, 'Manisha', 'Sinha', 'manishasinha@gmail.com', 8291500733),
(54, '2020-11-16', '02:48:56', 3000, '2020-11-19', '2020-11-20', 3, 1, 'Debit Card', 'Aadhar Card', 17, 4, NULL, 'Manisha', 'Sinha', 'manishasinha@gmail.com', 8291500733),
(55, '2020-11-16', '02:50:19', 6000, '2020-11-19', '2020-11-21', 3, 1, 'Debit Card', 'Aadhar Card', 17, 5, NULL, 'Hitesh', 'Poojary', 'hitesh@gmail.com', 8291500733),
(56, '2020-11-16', '03:08:16', 2940, '2020-11-18', '2020-11-19', 3, 1, 'Debit Card', 'Aadhar Card', 17, 5, NULL, 'Hitesh', 'Poojary', 'hitesh@gmail.com', 8291500733),
(57, '2020-11-16', '03:11:28', 7840, '2020-11-18', '2020-11-19', 7, 2, 'Debit Card', 'PAN Card', 17, 5, NULL, 'shivprasad', 'poojary', 'hitesh@gmail.com', 8291500733),
(58, '2020-11-17', '20:35:05', 8000, '2020-11-19', '2020-11-20', 7, 2, 'Debit Card', 'PAN Card', 25, 2, NULL, 'Aaradhya', 'Poojary', 'aaradhyasinha@gmail.com', 8291500733),
(59, '2020-11-24', '17:40:15', 8000, '2020-11-26', '2020-11-27', 10, 2, 'Debit Card', 'Voter ID', 26, 2, NULL, 'Hitesh', 'Sinha', 'hitesh@gmail.com', 8291500733),
(60, '2020-11-24', '17:40:32', 8000, '2020-11-26', '2020-11-27', 10, 2, 'Debit Card', 'Voter ID', 26, 2, NULL, 'Hitesh', 'Sinha', 'hitesh@gmail.com', 8291500733);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`transaction_id`,`room_id`,`room_no`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`req_id`,`hotel_id`);

--
-- Indexes for table `coupon`
--
ALTER TABLE `coupon`
  ADD PRIMARY KEY (`coupon_id`);

--
-- Indexes for table `coupon_holder`
--
ALTER TABLE `coupon_holder`
  ADD PRIMARY KEY (`cust_id`,`coupon_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`),
  ADD KEY `customer_person_fk` (`person_id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`req_id`),
  ADD KEY `enquiry_staff_fk` (`staff_id`);

--
-- Indexes for table `enquiry_phone`
--
ALTER TABLE `enquiry_phone`
  ADD PRIMARY KEY (`req_id`,`phone_no`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`hotel_id`);

--
-- Indexes for table `hotel_has`
--
ALTER TABLE `hotel_has`
  ADD PRIMARY KEY (`hotel_id`,`room_id`);

--
-- Indexes for table `looked_by`
--
ALTER TABLE `looked_by`
  ADD PRIMARY KEY (`staff_id`,`room_id`,`room_no`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`person_id`);

--
-- Indexes for table `phone_hotel`
--
ALTER TABLE `phone_hotel`
  ADD PRIMARY KEY (`hotel_id`,`phone_no`);

--
-- Indexes for table `phone_person`
--
ALTER TABLE `phone_person`
  ADD PRIMARY KEY (`person_id`,`phone_no`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`hotel_id`,`room_id`,`room_no`);

--
-- Indexes for table `room_type`
--
ALTER TABLE `room_type`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`),
  ADD KEY `staff_person_fk` (`person_id`),
  ADD KEY `staff_hotel_fk` (`hotel_id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`test_id`),
  ADD KEY `testimonials_customer_fk` (`cust_id`),
  ADD KEY `testimonials_hotel_fk` (`hotel_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transaction_id`),
  ADD KEY `transaction_customer_fk` (`cust_id`),
  ADD KEY `transaction_hotel_fk` (`hotel_id`),
  ADD KEY `transaction_coupon_fk` (`coupon_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coupon`
--
ALTER TABLE `coupon`
  MODIFY `coupon_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `req_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `hotel_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `person_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `room_type`
--
ALTER TABLE `room_type`
  MODIFY `room_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `test_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `transaction_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_person_fk` FOREIGN KEY (`person_id`) REFERENCES `person` (`person_id`);

--
-- Constraints for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD CONSTRAINT `enquiry_staff_fk` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staff_id`);

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_hotel_fk` FOREIGN KEY (`hotel_id`) REFERENCES `hotel` (`hotel_id`),
  ADD CONSTRAINT `staff_person_fk` FOREIGN KEY (`person_id`) REFERENCES `person` (`person_id`);

--
-- Constraints for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD CONSTRAINT `testimonials_customer_fk` FOREIGN KEY (`cust_id`) REFERENCES `customer` (`cust_id`),
  ADD CONSTRAINT `testimonials_hotel_fk` FOREIGN KEY (`hotel_id`) REFERENCES `hotel` (`hotel_id`);

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_coupon_fk` FOREIGN KEY (`coupon_id`) REFERENCES `coupon` (`coupon_id`),
  ADD CONSTRAINT `transaction_customer_fk` FOREIGN KEY (`cust_id`) REFERENCES `customer` (`cust_id`),
  ADD CONSTRAINT `transaction_hotel_fk` FOREIGN KEY (`hotel_id`) REFERENCES `hotel` (`hotel_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
