-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Oct 16, 2020 at 02:21 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_book_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(10) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('seraj', '123456'),
('rehan', '123456'),
('ajay', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

DROP TABLE IF EXISTS `carts`;
CREATE TABLE IF NOT EXISTS `carts` (
  `isbn10` varchar(10) DEFAULT NULL,
  `id` varchar(10) DEFAULT NULL,
  `numberofitem` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`isbn10`, `id`, `numberofitem`) VALUES
('1138505714', 'seraj', 14),
('070207277X', 'seraj', 4),
('8126579900', 'seraj', 3),
('938605230X', 'seraj', 2),
('8123907974', 'seraj', 1),
('1632406241', 'seraj', 1);

-- --------------------------------------------------------

--
-- Table structure for table `medical`
--

DROP TABLE IF EXISTS `medical`;
CREATE TABLE IF NOT EXISTS `medical` (
  `ISBN10` varchar(10) NOT NULL,
  `ISBN13` varchar(14) NOT NULL,
  `name` varchar(60) NOT NULL,
  `img` varchar(20) NOT NULL,
  `writer` varchar(40) NOT NULL,
  `price` varchar(11) NOT NULL,
  `discount` int(3) NOT NULL,
  `old_price` varchar(11) NOT NULL,
  `save` varchar(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `pages` int(11) NOT NULL,
  `dimensions` varchar(20) NOT NULL,
  `publisher` varchar(20) NOT NULL,
  `language` varchar(10) NOT NULL,
  `department` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `medical`
--

INSERT INTO `medical` (`ISBN10`, `ISBN13`, `name`, `img`, `writer`, `price`, `discount`, `old_price`, `save`, `weight`, `pages`, `dimensions`, `publisher`, `language`, `department`) VALUES
('1138505714', '978-1138505711', 'Aesthetic Facial Anatomy Essentials for Injections (The PRIM', '411pIKN2VeL._SX359_B', 'Ali Pirayesh, Dario Bertossi, Izolda Hey', '9,839.00', 35, '15,246.00', '5,407.00', 940, 257, '21.59 x 27.89', 'CRC Press (16 June 2', 'English', 'anatomy'),
('070207277X', '978-0702072772', 'ROSS AND WILSON ANATOMY AND PHYSIOLOGY IN HEALTH AND ILLNESS', '41c1qJgukVL._SX389_B', ' WAUGH A.', '940.00', 19, '1160.00', '220.00', 1660, 420, '27.8 x 3.1 x 22', 'ELSEVIER IE (SHORT D', 'English', 'anatomy'),
('938605230X', '978-9386052308', 'Core Python Programming Paperback – 1 January 2018', '51Ss-7j3v5L._SX362_B', 'R. Nageswara Rao', '661.00', 17, '799.00', '138.00', 1150, 680, '20 x 14 x 4', 'Dreamtech Press', 'English', 'cse'),
('9333218564', '978-9333218566', 'Human Anatomy and Physiology I for B. PHARMACY PCI 17 (I - B', '51quQBdtiLL._SX339_B', 'Swati V. Joggdand Prashant Sarda Dr. Nai', '120.00', 99, '18,630.00', '18,510.00', 848, 240, '27.8 x 3.1 x 22', 'Technical Publicatio', 'English', 'anatomy'),
('9780808924', '978-0808924517', 'Atlas of Human Anatomy, International Edition (Netter Basic ', '415qlhQxatL._SX383_B', ' Netter', '1,820.00', 39, '2,995.00', '1,175.00', 2170, 640, '20 x 14 x 4', 'Elsevier Health Scie', 'English', 'anatomy'),
('1626232520', '978-1626232525', 'Atlas of Anatomy Paperback – 8 April 2016', '512DtFEzX6L._SX423_B', 'Anne M Gilroy', '3,605.00', 39, '5,889.00', '2,284.00', 2450, 760, '22.86 x 3.43 x 27.31', 'Thieme Medical Publi', 'English', 'anatomy'),
('8126579900', '978-8126579907', 'Machine Learning using Python Paperback – 1 January 2019', '51bffNVIcmL._SX385_B', 'U Dinesh Kumar Manaranjan Pradhan', '534.00', 3, '549.00', '15.00', 540, 440, '20 x 14 x 4', 'Wiley (1 January 201', 'English', 'cse'),
('818473221X', '978-8184732214', 'Clinical Neuroanatomy with the Point Access Scratch Code Pap', '51fiLqmzsCL._SX387_B', ' Snell', '700.00', 53, '1,495.00', '795.00', 1260, 540, '21.34 x 1.52 x 26.92', 'Wolters Kluwer India', 'English', 'anatomy'),
('9788184739', '978-8184739121', 'Clinically Oriented Anatomy with the Point Access Scratch Co', '51bNhDUKVzL._SX381_B', 'Moore', '879.00', 71, '2,999.00', '2,120.00', 2590, 1168, '19.61 x 12.53 x 2.01', 'Wolters Kluwer India', 'English', 'anatomy'),
('9788126563', '978-8126563050', 'Machine Learning (in Python and R) For Dummies Paperback – 1', '51aTEU3k6IL._SX380_B', 'John Paul Mueller, Luca Massaron', '678.00', 3, '699.00', '21.00', 670, 432, '20 x 14 x 4', 'Wiley (1 January 201', 'English', 'cse'),
('9789332578', '978-9332578579', 'Fundamentals of Anatomy & Physiology Paperback – 29 Septembe', '51ue5oiVDDL._SX258_B', ' Frederic H. Martini, Judi L Nath', '1,144.00', 8, '1,249.00', '105.00', 650, 1280, '19.61 x 12.53 x 2.01', 'Pearson Education (S', 'English', 'anatomy'),
('9789351298', '978-9351298267', 'Anatomy and Physiology for Nursing and Healthcare Students P', '512SGDqF8qL._SX384_B', 'Joshi', '678.00', 32, '999.00', '321.00', 1220, 534, '21.59 x 2.74 x 27.94', 'Wolters Kluwer India', 'English', 'anatomy'),
('B074L6W2DQ', 'B074L6W2DQ', '5300+ MCQs : Civil Engineering - Practice Book for ALL JUNIO', '51uCTfj7-9L._SX384_B', 'PWD JUNIOR ENGINEER WRD, PHED ', '435.00', 42, '750.00', '315.00', 850, 700, '21 x 2.5 x 28', 'Zone Tech Publicatio', 'English', 'ce'),
('812192605X', '978-8121926058', 'Civil Engineering: Conventional and Objective Type (2018-19 ', '51x7UjyiyoL._SX351_B', 'R.S Khurmi, J.K Gupta', '409.00', 37, '650.00', '241.00', 120, 724, '20 x 14 x 4', 'S Chand (1 January 2', 'English', 'ce'),
('8123907974', '978-8123907970', 'Civil Engineering Through Objective Type Questions 3Ed (Revi', '41VqKOuGTTL._SX347_B', 'Gupta S. P.', '395.00', 0, '395.00', '0', 500, 550, '20 x 14 x 4', 'CBS (1 January 2019)', 'English', 'ce'),
('088415887X', '978-0884158875', 'The Grouting Handbook: A Step by Step Guide to Heavy Equipme', '515O5xMaf-L._SX331_B', 'Don Harrison', '7,680.00', 0, '7,680.00', '0', 445, 182, '15.24 x 1.91 x 22.86', 'Gulf Publishing', 'English', 'ce'),
('9789380386', '978-9380386324', 'Principles of Biotechnology and Genetic Engineering Paperbac', '41Y-Y1J1PzL._SX265_B', 'A.J. Nair', '394.00', 0, '394.00', '0', 1000, 677, '24.1 x 18.4 x 3.4', 'Laxmi Publications', 'English', 'biotechnology'),
('9788120353', '978-8120353145', 'Plant Biotechnology And Genetic Engineering Paperback – 1 Ja', '510I22+g8kL._SX327_B', 'Govil C. M., Aggarwal Ashok', '467.00', 15, '550.00', '83.00', 720, 480, '22 x 17.5 x 1.5', 'PHI Learning Pvt. Lt', 'English', 'biotechnology'),
('9389161347', '978-9389161342', 'GATE 2020 - Guide - Biotechnology Paperback – 27 February 20', '51KeGrIXTPL._SX381_B', 'GKP', '995.00', 0, '995.00', '0', 2000, 1136, '24 x 17.5 x 1.5', 'G.K.PUB (27 February', 'English', 'biotechnology'),
('8126564040', '978-8126564040', 'Textbook of Biotechnology Paperback – 1 January 2017', '51CRNxC8H4L._SX382_B', 'H.K. Das', '1,013.00', 3, '1,049.00', '36.00', 2280, 1420, '20 x 14 x 4', 'Wiley (1 January 201', 'English', 'biotechnology'),
('0070146128', '978-0070146129', 'Basic Electrical and Electronics Engineering Paperback – 19 ', '51A1NqNc9iL._SX329_B', 'R. Muthusubramanian', '349.00', 30, '500.00', '151.00', 500, 640, '38.1 x 5.1 x 58.4', 'McGraw Hill Educatio', 'English', 'ee'),
('9390041805', '978-9390041800', 'Electrical and Electronics Engineering - IN SEM for SPPU 19 ', '41deD12o6nL._SX319_B', 'Anup Goel U. A. Bakshi, A. P. Godse', '50.00', 0, '50.00', '0', 70, 120, '21.59 x 13.97 x 0.28', 'Technical Publicatio', 'English', 'ee'),
('1632406241', '978-1632406248', 'Electrical and Electronic Engineering: Concepts and Applicat', '51HeYAVeqxL._SX349_B', 'Jeremy Giamatti', '5,998.00', 48, '11,626.00', '5,628.00', 794, 240, '20.32 x 1.42 x 27.64', 'Clanrye Internationa', 'English', 'ee'),
('8194508703', '978-8194508700', 'Basic Electrical and Electronics Engineering Paperback – 1 J', '41J0U7AQEHL._SX310_B', 'Younish Pathan', '199.00', 20, '249.00', '50.00', 200, 109, '2.54 x 13.97 x 21.59', 'Knowledge Flow', 'English', 'ee'),
('935147125X', '978-9351471257', 'A Handbook for Mechanical Engineering Paperback – 1 January ', '41CYtMioVvL._SX319_B', 'ME Editorial Board', '199.00', 43, '350.00', '151.00', 281, 486, '20 x 14 x 4', 'Made Easy Publicatio', 'English', 'me'),
('8121906288', '978-8121906289', 'Mechanical Engineering: Conventional and Objective Types (20', '511Gu98SzJL._SX354_B', 'R.S. Khurmi', '475.00', 32, '699.00', '224.00', 970, 853, '20 x 14 x 4', 'S Chand (1 January 2', 'English', 'me'),
('1108411622', '978-1108411622', 'Engineering Mechanics: Problems and Solutions Paperback – 3 ', '518ioau1JOL._SX418_B', 'Arshad Noor Siddiquee', '655.00', 6, '695.00', '40.00', 1060, 550, '18.29 x 3.4 x 24', 'Cambridge University', 'English', 'me'),
('9333219722', '978-9333219723', 'Automobile Engineering ( Elective- II ) For B.E. Pune Univer', '41Tm64whpnL._SX384_B', 'Anup Goel', '250.00', 0, '250.00', '0', 260, 260, '18.29 x 3.4 x 24', 'Technical Publicatio', 'English', 'me'),
('935119907X', '978-9351199076', 'HTML 5 Black Book (Covers CSS3, JavaScript, XML, XHTML, AJAX', '514faGhNXxL._SX385_B', 'DT Editorial Services', '849.00', 0, '849.00', '0', 1590, 1260, '20 x 14 x 4', 'Dreamtech Press', 'English', 'cse');

-- --------------------------------------------------------

--
-- Table structure for table `useraccount`
--

DROP TABLE IF EXISTS `useraccount`;
CREATE TABLE IF NOT EXISTS `useraccount` (
  `id` varchar(10) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL,
  `fullname` varchar(20) DEFAULT NULL,
  `mobile` varchar(10) DEFAULT NULL,
  `email` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `useraccount`
--

INSERT INTO `useraccount` (`id`, `password`, `fullname`, `mobile`, `email`) VALUES
('seraj', '123456', 'SERAJ KHAN', '8229020370', 'serajkhan48522@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
