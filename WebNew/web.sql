-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 15, 2021 at 06:11 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

DROP TABLE IF EXISTS `contactus`;
CREATE TABLE IF NOT EXISTS `contactus` (
  `fName` varchar(30) NOT NULL,
  `lName` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `msg` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`fName`, `lName`, `email`, `msg`) VALUES
('test', 'tes', 'tes', 'tes'),
('Priskila', 'Athauda', 'shivakumar.priskila@gmail.com', 'test'),
('hsdfksh', 'sdnfkjsjbdck', 'assdkjsd@asn.com', 'testsdkjfnskdjfskjfsj'),
('kUSAL', 'Mendis', 'abc@gmail.com', 'Hello '),
('      fgdfgd', 'sdfd', 'dgdg@gbf.com', 'dgffdg'),
('Hello', 'Kapila', 'dias@gmail.com', 'Nice website'),
('Sethiya', 'Nisal', 'nisal@gmail.com', 'Hello'),
('Dileepa ', 'Bandara', 'dileepa@gmail.com', 'Message'),
('dsd', 'fsdfs', 'amal@hotmail.com', 'sdfs'),
('0865252986', '   ', 'amal@hotmail.com', 'dfdf'),
('dfs', 'asda', 'amal@hotmail.com', 'asddas'),
('0865252986', 'sdfsd', 'amal@hotmail.com', 'sdfsd');

-- --------------------------------------------------------

--
-- Table structure for table `final`
--

DROP TABLE IF EXISTS `final`;
CREATE TABLE IF NOT EXISTS `final` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `person_name` varchar(255) NOT NULL,
  `position` varchar(100) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact_number` varchar(25) NOT NULL,
  `established_date` varchar(100) NOT NULL,
  `company_category` varchar(255) NOT NULL,
  `company_role` varchar(100) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `discription` varchar(255) NOT NULL,
  `numberof_employees` varchar(100) NOT NULL,
  `user_role` varchar(2) NOT NULL,
  `is_deleted` varchar(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `final`
--

INSERT INTO `final` (`id`, `person_name`, `position`, `company_name`, `email`, `password`, `address`, `contact_number`, `established_date`, `company_category`, `company_role`, `logo`, `discription`, `numberof_employees`, `user_role`, `is_deleted`) VALUES
(19, ' Nisal', 'Student', 'UCSC', 'ucsc', 'ucsc', '35 ,Reid Avenue, Colombo 7 SRI LANKA', '0112 581 245', '2002-11-15', ' Art,Photography & Creative Services', ' Manufacturer', 'IMG-601c1c5e7a25b3.21356191.jpg', 'INSTITUTE', '67', '0', '0'),
(20, ' Amal', 'Owner', 'Alive Fashion Studio', 'amal1998@gmail.com', '12345', 'No 25/A, Temple Rd, Col 10.', '072 1235627', '2021-02-25', 'Art,Photography & Creative Services', '  None', 'IMG-601c1d79450fd5.35613211.png', '\r\nOur mission is to provide outstanding service, an enjoyable experience in front of the camera as well as Photographs you will love.', '120', '0', '0'),
(22, ' Paul', 'Manager', 'Alpha Computers', 'alpha@gmail.com', ' sdjkcvhudj', 'No 24/431, Kotta Rd, Borella', '076 5436782', '2020-12-16', 'Web,Tech & Media', '  Suplire', 'IMG-601c1ebf0cfd58.42536783.jpg', '\r\nWe are an authorized dealer of pc parts distribution ,Call us our hotline and Oder all your parts for your dream pc build ,we have a 24 hour customer solution for our customers ,with trusted guaranteed', '100', '0', '0'),
(23, ' Mihin Mamaa', 'Manager', 'L & G Construction', 'mihin@gmail.com', 'dnkcjs', 'No 01/F, Flower Rd, Moratuwa', '078 2345674', '2009-06-10', 'Construction & Home Improvement', '  None', 'IMG-601c1f2e399525.19231750.png', ' A leader in providing value-added construction services to our customers by creating a successful partnership with them throughout the construction process. \r\n\r\n', '2030', '0', '0'),
(24, ' John', 'Manager', 'STA LUCIA Health Care Center', 'johnwp@gmail.com', 'john123', 'No 25/02, Parliament Rd, Colombo ', '075 1238982', '2015-05-06', 'Medical,Dental & Health', '  None', 'IMG-601c1fc0575482.18476392.png', '\r\na community hospital dedicated to providing quality, value driven health care to all we serve. Individuals within the communities we serve are assured access to quality health care regardless of ability to pay.', '12', '0', '0'),
(25, ' Kavishan', 'Owner', 'National Hardware', 'kavi123@gmail.com', '123qdsdfs', 'No 20, Mihindu Mawatha, Negombo', '075 2346753', '2020-11-09', 'Medical,Dental & Health', '  Suplire', 'IMG-601c20449f5b72.90659346.png', '\r\nOur mission is to make your shopping experience enjoyable, help you find all the products you need, and serve you quickly and efficiently.\r\n', '200', '0', '0'),
(26, ' kamal', 'Secretary', 'AMG Consultants', 'kamal33', '123dfsdf', 'No 4/230, Marians Rd, Kandana', '077 2564782', '2019-12-31', 'Consulting & Professional Services', '  None', 'IMG-601c20bc9f4da7.11828005.png', '\r\nOur mission is to increase wedding consulting standards by improving professional relationships', '80', '0', '0'),
(27, ' Sirimal', 'Manager', 'COS Software Solutions ', 'siri123@gmail.com', '123asa c', 'No 190/F, Maligawa Rd, Kandy', '076 3452673', '2018-02-22', 'Web,Tech & Media', '  None', 'IMG-601c217bb2d4f6.39679186.png', 'to build and market products for companies in need of innovative technology to transform expanding amounts of stored data into the knowledge that drives their business success.\r\n\r\n', '110', '0', '0'),
(28, ' Saman', 'Manager', 'AVIVA Insurance', 'saman25@gmail.com', '123xwdhjwj', 'No 32/G, Mendis Rd, Kiribathgoda', '077 5637264', '2016-06-15', 'Financial Services & Insurance', '  None', 'IMG-601c223b3f3f78.06976902.png', 'To be the company of choice for insurance and other financial products and services while maintaining superior financial strength.\r\n\r\n', '211', '0', '0'),
(29, ' Amali', 'Owner', 'LEXINGTON Dental Care', 'amali@gmail.com', 'Lexi123', 'No 54/01, Third Lane, Horana', '071 5683426', '2017-06-06', 'Medical,Dental & Health', '  None', 'IMG-601c228d1b23d7.96608915.png', 'Our goal is to provide patients with highest quality dental care in a comfortable, relaxed and friendly environment.\r\n', '12', '0', '0'),
(30, ' Sajith', 'Manager', 'Vimto Solutions', 'sajith@gmail.com', '123Sajith', 'No 56/K, Mihindu Mawatha, Rajagiriya', '077 2567788', '2014-01-06', 'Medical,Dental & Health', '  Manufacturer', 'IMG-601c23027db7e5.32008669.png', '\r\nThe Vimto Solutions is a beverage retailer, manufacturer and marketer of non-alcoholic beverage concentrates and syrups', '324', '0', '0'),
(32, ' Dejavu', 'Owner', 'Dejavu Hair Saloon', 'nishani@gmail.com', '123asdasda', 'No 21/2/B, Vihara Mawatha, Nugegoda.', '070 2628728', '2019-01-09', 'Hair,Spa & Aesthetics', '  None', 'IMG-601c255ad2f5e2.34969548.jpg', '\r\nWe create environments for people to explore and express their individual style by providing top-quality hair and makeup services', '20', '0', '0'),
(33, 'Dileepa', '', '', 'dileepa@gmail.com', '123', '', '', '', '', '', '', '', '', '1', '0'),
(34, 'Dinithi', '', '', 'Dinithi@gmail.com', '123', '', '', '', '', '', '', '', '', '1', '0'),
(35, 'Waruna', '', '', 'waruna@gmail.com', '123', '', '', '', '', '', '', '', '', '1', '0'),
(36, 'UCSC', '', '', 'ucsc', 'ucsc123', '', '', '', '', '', '', '', '', '1', '0');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
