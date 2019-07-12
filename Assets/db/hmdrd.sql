-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 12, 2019 at 12:46 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hmdrd`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `cus_code` varchar(255) DEFAULT NULL,
  `cus_name` varchar(1000) DEFAULT NULL,
  `cus_address` varchar(1000) DEFAULT NULL,
  `cus_mobile` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `cus_code`, `cus_name`, `cus_address`, `cus_mobile`) VALUES
(1, 'BA1', 'রাসেল ফার্মেসী', 'বাংলা বাজার, সারিকাইত, সন্দ্বীপ', ''),
(2, 'BA1', 'রাসেল ফার্মেসী', 'বাংলা বাজার, সারিকাইত, সন্দ্বীপ', ''),
(3, 'BA2', 'দীপা ফার্মেসী', 'বাংলা বাজার, সারিকাইত, সন্দ্বীপ', ''),
(4, 'KA1', 'লিপি ফার্মেসী', 'কাজীপাড়া, সারিকাইত, সন্দ্বীপ', ''),
(5, 'KA2', 'নিহান ফার্মেসী', 'কাজীপাড়া, সারিকাইত, সন্দ্বীপ', ''),
(6, 'KA3', 'ইব্রাহীম ফার্মেসী', 'কাজীপাড়া, সারিকাইত, সন্দ্বীপ', ''),
(7, 'FU1', 'নুপুর ফার্মেসী', 'ফুলগাজী তেমাথা, সারিকাইত, সন্দ্বীপ', ''),
(8, 'FU2', 'নিহা ফার্মেসী', 'ফুলগাজী তেমাথা, সারিকাইত, সন্দ্বীপ', ''),
(9, 'SO1', 'সজল ফার্মেসী', 'ষোলশহর, মগধরা, সন্দ্বীপ', ''),
(10, 'SO1', 'আসিফ ফার্মেসী', 'ষোলশহর, মগধরা, সন্দ্বীপ', ''),
(11, 'SO3', 'মা ফার্মেসী', 'ষোলশহর, মগধরা, সন্দ্বীপ', ''),
(12, 'JA1', 'নিপা ফার্মেসী', 'জনতা মার্কেট, মগধরা, সন্দ্বীপ', ''),
(13, 'JA2 ', 'জননী ফার্মেসী', 'জনতা মার্কেট, মগধরা, সন্দ্বীপ', ''),
(14, 'JA3', 'পল্লী ফার্মেসী', 'জনতা মার্কেট, মগধরা, সন্দ্বীপ', ''),
(15, 'JA4', 'তুহিন ফার্মেসী', 'জনতা মার্কেট, মগধরা, সন্দ্বীপ', ''),
(16, 'KA1', 'রোকেয়া ফার্মেসী', 'কেরামতিয়া মাদ্রাসা গেইট, সন্দ্বীপ', ''),
(17, 'SH1', 'লিমন ফার্মেসী', 'শিবের হাট, সন্দ্বীপ, চট্টগ্রাম', ''),
(18, 'SH2', 'আনোয়ার ফার্মেসী ', 'শিবের হাট, সন্দ্বীপ, চট্টগ্রাম', ''),
(19, 'SH3', 'আ�হারী ফার্মেসী ', 'শিবের হাট, সন্দ্বীপ, চট্টগ্রাম', ''),
(20, 'SH4', 'জন�সবা ফার্মেসী', 'শিবের হাট, সন্দ্বীপ, চট্টগ্রাম', ''),
(21, 'SH5', 'পপুলার ফার্মেসী', 'শিবের হাট, হাসপাতাল গেইট, সন্দ্বীপ', ''),
(22, 'SH6', 'নিউ �দওয়ান ফার্মেসী', 'শিবের হাট, হাসপাতাল গেইট, সন্দ্বীপ', ''),
(23, 'SH7', 'এস �মডিকল হল ', 'শিবের হাট, সন্দ্বীপ, চট্টগ্রাম', ''),
(24, 'SH8', 'অয়ন ফার্মেসী', 'শিবের হাট, সন্দ্বীপ, চট্টগ্রাম', ''),
(25, 'SH9', '�দওয়ান ফার্মেসী', 'শিবের হাট, সন্দ্বীপ, চট্টগ্রাম', ''),
(26, 'SH10', 'দিবা ফার্মেসী', 'শিবের হাট, সন্দ্বীপ, চট্টগ্রাম', ''),
(27, 'SH11', 'পপুলার ফার্মেসী', 'শিবের হাট, সন্দ্বীপ, চট্টগ্রাম', ''),
(28, 'SH12', 'আজাদ মেডিকেল হল-১', 'শিবের হাট, সন্দ্বীপ, চট্টগ্রাম', ''),
(29, 'SH13', 'আজাদ মেডিকেল হল-২', 'শিবের হাট, সন্দ্বীপ, চট্টগ্রাম', ''),
(30, 'SH14', 'আজাদ মেডিকেল হল-৩', 'শিবের হাট, সন্দ্বীপ, চট্টগ্রাম', ''),
(31, 'SH15', 'চৌধুরী ফার্মেসী', 'শিবের হাট, সন্দ্বীপ, চট্টগ্রাম', ''),
(32, 'SH16', 'আল মদিনা মেডিকেল হল', 'শিবের হাট, সন্দ্বীপ, চট্টগ্রাম', ''),
(33, 'SH17', 'আজিম ফার্মেসী', 'শিবের হাট, সন্দ্বীপ, চট্টগ্রাম', ''),
(34, 'SH18', 'ইব�াহিম ফার্মেসী', 'শিবের হাট, সন্দ্বীপ, চট্টগ্রাম', ''),
(35, 'SH19', 'শাহিন ফার্মেসী', 'শিবের হাট, সন্দ্বীপ, চট্টগ্রাম', ''),
(36, 'SH20', '�জ�বন�ুর ফার্মেসী', 'শিবের হাট, সন্দ্বীপ, চট্টগ্রাম', ''),
(37, 'SH21', 'ইভা ফার্মেসী', 'শিবের হাট, সন্দ্বীপ, চট্টগ্রাম', ''),
(38, 'SH22', 'তালুকদার ফার্মেসী', 'শিবের হাট, সন্দ্বীপ, চট্টগ্রাম', ''),
(39, 'CH1', '�হলাল ফার্মেসী', 'চৌধুরীর হাট, সন্দ্বীপ, চট্টগ্রাম', ''),
(40, 'CH2', 'তাপস ফার্মেসী', 'চৌধুরীর হাট, সন্দ্বীপ, চট্টগ্রাম', ''),
(41, 'AM1', 'শিপন ফার্মেসী', 'আলী মুহুরীর তেমাথা, মগধরা, সন্দ্বীপ', ''),
(42, 'AM2', 'আবু ছা�য়দ ফার্মেসী', 'আলী মুহুরীর তেমাথা, মগধরা, সন্দ্বীপ', ''),
(43, 'NO1', 'হাছান ফার্মেসী', 'নোয়ার হাট, মগধরা, সন্দ্বীপ, চট্টগ্রাম', ''),
(44, 'NO2', 'বিসমিল�াহ ফার্মেসী', 'নোয়ার হাট, মগধরা, সন্দ্বীপ, চট্টগ্রাম', ''),
(45, 'NO3', 'নুর উ�ীন ফার্মেসী', 'নোয়ার হাট, মগধরা, সন্দ্বীপ, চট্টগ্রাম', ''),
(46, 'AMM1', 'জা�হদা ফার্মেসী', 'আমতলী, মগধরা, সন্দ্বীপ, চট্টগ্রাম', ''),
(47, 'PA1', 'রাজু মেডিকেল হল', 'পেলিশ্যার বাজার, সন্দ্বীপ, চট্টগ্রাম', ''),
(48, 'PA2', 'বিসমিল�াহ ফার্মেসী', 'পেলিশ্যার বাজার, সন্দ্বীপ, চট্টগ্রাম', ''),
(49, 'DO1', 'মা ফার্মেসী', 'ধোপার হাট, মুছাপুর, সন্দ্বীপ', ''),
(50, 'DO2', 'ইসলামিয়া ফার্মেসী', 'ধোপার হাট, মুছাপুর, সন্দ্বীপ', ''),
(51, 'DO3', 'জিসান ফার্মেসী', 'ধোপার হাট, মুছাপুর, সন্দ্বীপ', ''),
(52, 'DO4', 'ফার�ক ফার্মেসী', 'ধোপার হাট, মুছাপুর, সন্দ্বীপ', ''),
(53, 'DO5', 'দিশারী ফার্মেসী', 'ধোপার হাট, মুছাপুর, সন্দ্বীপ', ''),
(54, 'DO6', '��রণ ফার্মেসী', 'ধোপার হাট, মুছাপুর, সন্দ্বীপ', ''),
(55, 'DO7', 'নুর ফার্মেসী', 'ধোপার হাট, মুছাপুর, সন্দ্বীপ', ''),
(56, 'DO8', 'ইব�াহিম ফার্মেসী', 'ধোপার হাট, মুছাপুর, সন্দ্বীপ', ''),
(57, 'DO9', 'আল জাজিরাহ ফার্মেসী', 'ধোপার হাট, মুছাপুর, সন্দ্বীপ', ''),
(58, 'DO10', 'ডাঃ নিতাই লাল সাহা ', 'ধোপার হাট, মুছাপুর, সন্দ্বীপ', ''),
(59, 'DO11', 'আকিয়া ফার্মেসী ', 'ধোপার হাট, মুছাপুর, সন্দ্বীপ', ''),
(60, 'DO12', 'জয়নব ফার্মেসী ', 'ধোপার হাট, মুছাপুর, সন্দ্বীপ', ''),
(61, 'DO13', 'পপুলার ফার্মেসী ', 'ধোপার হাট, মুছাপুর, সন্দ্বীপ', ''),
(62, 'DO14', 'মিতা ফার্মেসী ', 'ধোপার হাট, মুছাপুর, সন্দ্বীপ', ''),
(63, 'MU1', 'সাকিব ফার্মেসী', 'মুছাপুর তেমাথা, মুছাপুর, সন্দ্বীপ, চট্টগ্রাম।', ''),
(64, 'MU2', '�রজিয়া ফার্মেসী ', 'মুছাপুর তেমাথা, মুছাপুর, সন্দ্বীপ, চট্টগ্রাম।', ''),
(65, 'AL1', '�মাতাহারা ফার্মেসী', 'আলী মিয়ার বাজার, মুছাপুর, সন্দ্বীপ', ''),
(66, 'AL2', 'রহিমা ফার্মেসী', 'আলী মিয়ার বাজার, মুছাপুর, সন্দ্বীপ', ''),
(67, 'AL3', 'শাহিন ফার্মেসী', 'আলী মিয়ার বাজার, মুছাপুর, সন্দ্বীপ', ''),
(68, 'AL4', 'মা ফার্মেসী', 'আলী মিয়ার বাজার, মুছাপুর, সন্দ্বীপ', ''),
(69, 'AL5', '�ভ ফার্মেসী', 'আলী মিয়ার বাজার, মুছাপুর, সন্দ্বীপ', ''),
(70, 'AL6', 'জাহিদ ফার্মেসী', 'আলী মিয়ার বাজার, মুছাপুর, সন্দ্বীপ', ''),
(71, 'AL7', 'লাকি ফার্মেসী', 'আলী মিয়ার বাজার, মুছাপুর, সন্দ্বীপ', ''),
(72, 'AL8', 'জাফর ফার্মেসী', 'আলী মিয়ার বাজার, মুছাপুর, সন্দ্বীপ', ''),
(73, 'AL9', 'নুর জাহান ফার্মেসী', 'আলী মিয়ার বাজার, মুছাপুর, সন্দ্বীপ', ''),
(74, 'AL10', 'জামান ফার্মেসী', 'আলী মিয়ার বাজার, মুছাপুর, সন্দ্বীপ', ''),
(75, 'GU1', 'আমিনা ড�াগ হাউজ', 'গুপ্তছড়া বাজার, মগধরা, সন্দ্বীপ', ''),
(76, 'GU2', 'সুরাইয়া ফার্মেসী ', 'গুপ্তছড়া বাজার, মগধরা, সন্দ্বীপ', ''),
(77, 'GU3', '�হাস�নয়ারা ফার্মেসী', 'গুপ্তছড়া বাজার, মগধরা, সন্দ্বীপ', ''),
(78, 'GU4', 'খাদিজা ফার্মেসী', 'গুপ্তছড়া বাজার, মগধরা, সন্দ্বীপ', ''),
(79, 'GU5', '�রজিয়া ফার্মেসী', 'গুপ্তছড়া বাজার, মগধরা, সন্দ্বীপ', ''),
(80, 'GU6', 'জননী ফার্মেসী', 'গুপ্তছড়া বাজার, বেড়ীবাধ, মগধরা, সন্দ্বীপ', ''),
(81, 'MA1', 'সে�দিয়া ফার্মেসী', 'মালেক মুন্সী  বাজার, সন্দ্বীপ, চট্টগ্রাম', ''),
(82, 'MA2', 'জিহানা ফার্মেসী', 'মালেক মুন্সী  বাজার, সন্দ্বীপ, চট্টগ্রাম', ''),
(83, 'CO1', 'রহমানিয়া ফার্মেসী ', 'নিউ কমপ্লেক্স, সন্দ্বীপ, চট্টগ্রাম', ''),
(84, 'CO2', 'তানিম ড�াগ হাউজ', 'নিউ কমপ্লেক্স, সন্দ্বীপ, চট্টগ্রাম', ''),
(85, 'CO3', 'আরব ফার্মেসী', 'নিউ কমপ্লেক্স, সন্দ্বীপ, চট্টগ্রাম', ''),
(86, 'CO4', 'ভূইয়া ফার্মেসী', 'নিউ কমপ্লেক্স, সন্দ্বীপ, চট্টগ্রাম', ''),
(87, 'CO5', 'কম�প�� ফার্মেসী', 'নিউ কমপ্লেক্স, সন্দ্বীপ, চট্টগ্রাম', ''),
(88, 'CO6', 'সেবা মেডিকো', 'নিউ কমপ্লেক্স, সন্দ্বীপ, চট্টগ্রাম', ''),
(89, 'CO7', '�ীপ মেডিকো', 'নিউ কমপ্লেক্স, সন্দ্বীপ, চট্টগ্রাম', ''),
(90, 'CO8', 'ইমন ফার্মেসী', 'নিউ কমপ্লেক্স, সন্দ্বীপ, চট্টগ্রাম', ''),
(91, 'CO9', 'গ�ীণ ফার্মেসী ', 'নিউ কমপ্লেক্স, সন্দ্বীপ, চট্টগ্রাম', ''),
(92, 'CO10', 'মাইমুনা �হামিও হল-১ ', 'নিউ কমপ্লেক্স, সন্দ্বীপ, চট্টগ্রাম', ''),
(93, 'CO11', 'মাইমুনা �হামিও হল-২', 'নিউ কমপ্লেক্স, আবাসিক এলাকা, সন্দ্বীপ', ''),
(94, 'TA1', 'ইকরা ফার্মেসী', 'তালতলী বাজার, সন্দ্বীপ, চট্টগ্রাম।', ''),
(95, 'TA2', 'সমতা ফার্মেসী ', 'তালতলী বাজার, সন্দ্বীপ, চট্টগ্রাম।', ''),
(96, 'TA3', '�ার ফার্মেসী', 'তালতলী বাজার, সন্দ্বীপ, চট্টগ্রাম।', ''),
(97, 'TA4', 'তাজ ফার্মেসী', 'তালতলী বাজার, সন্দ্বীপ, চট্টগ্রাম।', ''),
(98, 'TA5', 'আফরা ফার্মেসী', 'তালতলী বাজার, সন্দ্বীপ, চট্টগ্রাম।', ''),
(99, 'TA6', 'মা মেডিকেল হল', 'তালতলী বাজার, সন্দ্বীপ, চট্টগ্রাম।', ''),
(100, 'TA7', 'এনাম মেডিকো', 'তালতলী বাজার, সন্দ্বীপ, চট্টগ্রাম।', ''),
(101, 'TA8', 'মা মেডিকো ', 'জাকের বোডিং, তালতলী বাজার, সন্দ্বীপ', ''),
(102, 'TA9', 'রহমানিয়া ফার্মেসী', 'তালতলী বাজার, সন্দ্বীপ, চট্টগ্রাম।', ''),
(103, 'TA10', 'ইফাজ ফার্মেসী', 'তালতলী বাজার, সন্দ্বীপ, চট্টগ্রাম।', ''),
(104, 'TA11', 'পণ�া ফার্মেসী', 'বশিরিয়া মাদ্রাসা গেইট, সন্দ্বীপ, চট্টগ্রাম।', ''),
(105, 'TA12', 'ডাঃ তছলিম ফার্মেসী', 'বশিরিয়া মাদ্রাসা গেইট, সন্দ্বীপ, চট্টগ্রাম।', ''),
(106, 'TA13', 'জহির ফার্মেসী', 'তালতলী বাজার, সন্দ্বীপ, চট্টগ্রাম।', ''),
(107, 'KA1', 'গণি ফার্মেসী', 'কেঞ্জাতলী বাজার, রহমতপুর, সন্দ্বীপ', ''),
(108, 'KA2', '�ফ�সে্‌ মেডিকো', 'কেঞ্জাতলী বাজার, রহমতপুর, সন্দ্বীপ', ''),
(109, 'KA3', 'বকুল ফার্মেসী', 'কেঞ্জাতলী বাজার, রহমতপুর, সন্দ্বীপ', ''),
(110, 'KA4', 'মা ফার্মেসী', 'কেঞ্জাতলী বাজার, রহমতপুর, সন্দ্বীপ', ''),
(111, 'KA5', 'রিনা মেডিকো', 'কেঞ্জাতলী বাজার, রহমতপুর, সন্দ্বীপ', ''),
(112, 'KA6', 'ডাঃ রাম চ্যাটার্জী', 'কেঞ্জাতলী বাজার, রহমতপুর, সন্দ্বীপ', ''),
(113, 'KA7', 'জমির �হামিও', 'কেঞ্জাতলী বাজার, রহমতপুর, সন্দ্বীপ', ''),
(114, 'DOL1', 'ডাঃ �মা��ফা ফার্মেসী', 'দলই পাড়া, রহমতপুর, সন্দ্বীপ', ''),
(115, 'DOL1', 'আশ�শফা �হামিও', 'দলই পাড়া, রহমতপুর, সন্দ্বীপ', ''),
(116, 'AZ1', 'ডাঃ বাতেন ফার্মেসী', 'আজিমপুর, সন্দ্বীপ, চট্টগ্রাম', ''),
(117, 'AZ2', 'পি�য়া ফার্মেসী', 'আজিমপুর, সন্দ্বীপ, চট্টগ্রাম', ''),
(118, 'AZ3', 'জসিম ফার্মেসী', 'আজিমপুর, সন্দ্বীপ, চট্টগ্রাম', ''),
(119, 'SA1', 'বিজলি ফার্মেসী', 'সেনের হাট, সন্দ্বীপ, চট্টগ্রাম', ''),
(120, 'SA2', 'আ�ুল�াহ ফার্মেসী', 'সেনের হাট, সন্দ্বীপ, চট্টগ্রাম', ''),
(121, 'SA3', 'কাজী ফার্মেসী', 'সেনের হাট, সন্দ্বীপ, চট্টগ্রাম', ''),
(122, 'SA4', 'জিসান ফার্মেসী', 'সেনের হাট, সন্দ্বীপ, চট্টগ্রাম', ''),
(123, 'SA5', 'রাজিব ফার্মেসী', 'সেনের হাট, সন্দ্বীপ, চট্টগ্রাম', ''),
(124, 'SA6', 'ভাই ভাই মেডিকো', 'সেনের হাট, সন্দ্বীপ, চট্টগ্রাম', ''),
(125, 'SA7', 'ডাঃ সামছুল আলম ফার্মেসী', 'সেনের হাট, সন্দ্বীপ, চট্টগ্রাম', ''),
(126, 'SA8', 'ই�দ�জিৎ ফার্মেসী', 'সেনের হাট, সন্দ্বীপ, চট্টগ্রাম', ''),
(127, 'SA9', 'ইমন ফার্মেসী', 'সেনের হাট, সন্দ্বীপ, চট্টগ্রাম', ''),
(128, 'SA10', 'বাংলা�দশ ফার্মেসী ', 'সেনের হাট, সন্দ্বীপ, চট্টগ্রাম', ''),
(129, 'SA11', 'সন্দ্বীপ মেডিকেল সেন্টার', 'সেনের হাট, সন্দ্বীপ, চট্টগ্রাম', ''),
(130, 'AN1', 'রিয়াদ ফার্মেসী', 'এনাম নাহার, সন্দ্বীপ, চট্টগ্রাম', ''),
(131, 'AN2', 'চ�দ� বিরজা ঔষধালয়', 'এনাম নাহার, সন্দ্বীপ, চট্টগ্রাম', ''),
(132, 'AN3', 'আ�ুল�াহ ফার্মেসী', 'এনাম নাহার, সন্দ্বীপ, চট্টগ্রাম', ''),
(133, 'AN4', 'জিহানা মেডিকো', 'এনাম নাহার, সন্দ্বীপ, চট্টগ্রাম', ''),
(134, 'AN5', 'তিহান ফার্মেসী', 'এনাম নাহার, সন্দ্বীপ, চট্টগ্রাম', ''),
(135, 'AN6', 'হাছান ফার্মেসী', 'এনাম নাহার, সন্দ্বীপ, চট্টগ্রাম', ''),
(136, 'AN7', 'সন্দ্বীপ ডিজিটাল সেন্টার মেডিকো', 'এনাম নাহার, সন্দ্বীপ, চট্টগ্রাম', ''),
(137, 'AN8', 'তা�হরা ফার্মেসী', 'এনাম নাহার, সন্দ্বীপ, চট্টগ্রাম', ''),
(138, 'AN9', 'সন্দ্বীপ মেডিকো', 'এনাম নাহার, সন্দ্বীপ, চট্টগ্রাম', ''),
(139, 'AN10', 'শায়ান ফার্মেসী', 'এনাম নাহার, সন্দ্বীপ, চট্টগ্রাম', ''),
(140, 'PO1', 'এ.�ক. ফার্মেসী ', 'পন্ডিতের হাট, মুছাপুর, সন্দ্বীপ', ''),
(141, 'PO2', '�হলাল ফার্মেসী', 'পন্ডিতের হাট, মুছাপুর, সন্দ্বীপ', ''),
(142, 'PO3', 'জাহান ফার্মেসী', 'পন্ডিতের হাট, মুছাপুর, সন্দ্বীপ', ''),
(143, 'HA1', '�রজিয়া ফার্মেসী', 'হাতেম মিয়াজীর তেমাথা, মুছাপুর, সন্দ্বীপ', ''),
(144, 'BAG1', 'ম�ু ফার্মেসী', 'বাগাইর গো তেমাথা, মুছাপুর, সন্দ্বীপ', ''),
(145, 'BAG2', '�সাহাগ মেডিকেল হল', 'বাগাইর গো তেমাথা, মুছাপুর, সন্দ্বীপ', ''),
(146, 'BAG3', 'মিলাদ ফার্মেসী', 'বাগাইর গো তেমাথা, মুছাপুর, সন্দ্বীপ', ''),
(147, 'BAG4', 'জাহা�ীর মেডিকো', 'বাগাইর গো তেমাথা, মুছাপুর, সন্দ্বীপ', ''),
(148, 'BAG5', 'নুর আলম ফার্মেসী', 'বাগাইর গো তেমাথা, মুছাপুর, সন্দ্বীপ', ''),
(149, 'SAN1', 'বিসমিল�াহ ফার্মেসী', 'শান্তির হাট, মুছাপুর, সন্দ্বীপ', ''),
(150, 'MO1', 'মা�য়র �দায়া ফার্মেসী', 'মগধরা বাংলাবাজার, মগধরা, সন্দ্বীপ', ''),
(151, 'MO2', 'ভি��ারিয়া ফার্মেসী', 'মগধরা বাংলাবাজার, মগধরা, সন্দ্বীপ', ''),
(152, 'MO3', 'জিলানী ফার্মেসী', 'মগধরা বাংলাবাজার, মগধরা, সন্দ্বীপ', ''),
(153, 'MO4', 'রাসেল ফার্মেসী', 'মগধরা বাংলাবাজার, মগধরা, সন্দ্বীপ', ''),
(154, 'MO5', 'তানজীল ফার্মেসী ', 'মগধরা বাংলাবাজার, মগধরা, সন্দ্বীপ', ''),
(155, 'ID1', 'আন�দ ফার্মেসী', 'ইদ্রিছ মুন্সীর তেমাথা, মগধরা, সন্দ্বীপ', ''),
(156, 'CH1', 'এন.এস ফার্মেসী', 'চৌমুহনী বাজার, সন্দ্বীপ, চট্টগ্রাম', ''),
(157, 'CH2', '�সাহরাব ফার্মেসী', 'চৌমুহনী বাজার, সন্দ্বীপ, চট্টগ্রাম', ''),
(158, 'CH3', 'আল আমিন ফার্মেসী', 'চৌমুহনী বাজার, সন্দ্বীপ, চট্টগ্রাম', ''),
(159, 'CH4', '�রাকসানা ফার্মেসী', 'চৌমুহনী বাজার, সন্দ্বীপ, চট্টগ্রাম', ''),
(160, 'CH5', 'নাহার মেডিকেল হল', 'চৌমুহনী বাজার, সন্দ্বীপ, চট্টগ্রাম', ''),
(161, 'CH6', '�সলিম ফার্মেসী', 'চৌমুহনী বাজার, সন্দ্বীপ, চট্টগ্রাম', ''),
(162, 'CH7', '�মঘলা ফার্মেসী', 'চৌমুহনী বাজার, সন্দ্বীপ, চট্টগ্রাম', ''),
(163, 'BAT1', 'চ�দন ফার্মেসী', 'বাতেন মার্কেট, হরিশপুর, সন্দ্বীপ', ''),
(164, 'BAT2', 'স���াষ ফার্মেসী', 'বাতেন মার্কেট, হরিশপুর, সন্দ্বীপ', ''),
(165, 'BAT3', '�লাটাস ফার্মেসী', 'বাতেন মার্কেট, হরিশপুর, সন্দ্বীপ', ''),
(166, 'BAT4', 'নাবিলা ফার্মেসী', 'বাতেন মার্কেট, হরিশপুর, সন্দ্বীপ', ''),
(167, 'BAT5', 'সাবিয়া ফার্মেসী', 'বাতেন মার্কেট, হরিশপুর, সন্দ্বীপ', ''),
(168, 'BAT6', 'আনোয়ারা ফার্মেসী', 'বাতেন মার্কেট, হরিশপুর, সন্দ্বীপ', ''),
(169, 'BAT7', 'ডাঃ অ�ন কুমার ভদ� ফার্মেসী', 'বাতেন মার্কেট, হরিশপুর, সন্দ্বীপ', ''),
(170, 'POR1', 'রহিম এ� ব�াদাস�', 'পৌরসভা মার্কেট, সন্দ্বীপ, চট্টগ্রাম', ''),
(171, 'POR2', 'জননী ফার্মেসী', 'পৌরসভা মার্কেট, সন্দ্বীপ, চট্টগ্রাম', ''),
(172, 'POR3', 'ডাঃ নারায়ন ফার্মেসী', 'পৌরসভা মার্কেট, সন্দ্বীপ, চট্টগ্রাম', ''),
(173, 'POR4', 'রকি ফার্মেসী', 'পৌরসভা মার্কেট, সন্দ্বীপ, চট্টগ্রাম', ''),
(174, 'BAG6', 'আন�দময়ী ফার্মেসী', 'বা�গর হাট, সন্দ্বীপ, চট্টগ্রাম', ''),
(175, 'AZA1', 'রা�বয়া ফার্মেসী', 'আজাদ মার্কেট, সন্দ্বীপ, চট্টগ্রাম', ''),
(176, 'AZA2', 'তাছফিয়া ফার্মেসী', 'আজাদ মার্কেট, সন্দ্বীপ, চট্টগ্রাম', ''),
(177, 'FO1', 'মনোয়ারা ফার্মেসী', 'ফকি�রর �গা তেমাথা, সন্দ্বীপ', ''),
(178, 'BO1', 'পপুলার ফার্মেসী', 'ব�ার হাট, সন্দ্বীপ, চট্টগ্রাম', ''),
(179, 'BO2', 'পূব��দশ ফার্মেসী', 'ব�ার হাট, সন্দ্বীপ, চট্টগ্রাম', ''),
(180, 'MO1', 'ইসলামীয়া ফার্মেসী', 'ম��ার হাট, সন্দ্বীপ, চট্টগ্রাম', ''),
(181, 'HA1', 'মু�ার ফার্মেসী', 'হাজীর হাট, সন্দ্বীপ, চট্টগ্রাম', ''),
(182, 'HO1', 'মু�া ফার্মেসী ', 'হরিশপুর, সন্দ্বীপ, চট্টগ্রাম।', ''),
(183, 'HO2', 'মিতু ফার্মেসী ', 'হরিশপুর, সন্দ্বীপ, চট্টগ্রাম।', ''),
(184, 'HO3', '�লাকনাথ ফার্মেসী', 'হরিশপুর, সন্দ্বীপ, চট্টগ্রাম।', ''),
(185, 'CHO1', 'লিনা ফার্মেসী', 'চৌমুহনী বাজার, সন্দ্বীপ, চট্টগ্রাম।', ''),
(186, 'CHO2', 'আকবর ফার্মেসী-০১', 'চৌমুহনী বাজার, সন্দ্বীপ, চট্টগ্রাম।', ''),
(187, 'CHO3', 'আকবর ফার্মেসী-০২', 'চৌমুহনী বাজার, সন্দ্বীপ, চট্টগ্রাম।', ''),
(188, 'KA1', 'ইলিয়াস ফার্মেসী', 'কালাপানিয়া, সন্দ্বীপ, চট্টগ্রাম', ''),
(189, 'KA2', 'আ�ুল মান�ান ফার্মেসী', 'কালাপানিয়া, সন্দ্বীপ, চট্টগ্রাম', ''),
(190, 'KA3', 'পলি ফার্মেসী', 'কালাপানিয়া, সন্দ্বীপ, চট্টগ্রাম', ''),
(191, 'KA4', 'জাম�সদ ফার্মেসী', 'কালাপানিয়া, বুড়ির পুকুর পাড়, সন্দ্বীপ', ''),
(192, 'KA5', 'হরি সু�দরী', 'কালাপানিয়া দীঘির �কাণা, সন্দ্বীপ, চট্টগ্রাম', ''),
(193, 'KA6', 'ইলিয়াছ ফার্মেসী', 'কালাপানিয়া মাদ্রাসা গেইট, সন্দ্বীপ, চট্টগ্রাম', ''),
(194, 'KA7', 'দীপালী ফার্মেসী', 'কালাপানিয়া, সন্দ্বীপ, চট্টগ্রাম', ''),
(195, 'KA8', '�জরিন ফার্মেসী', 'কালাপানিয়া, সন্দ্বীপ, চট্টগ্রাম', ''),
(196, 'BOR1', 'ছা�লহা ফার্মেসী', '�বারহান উ�ীন মার্কেট, সন্দ্বীপ, চট্টগ্রাম', ''),
(197, 'MOL1', 'আজম ফার্মেসী', ' �ম�লভী বাজার, সন্দ্বীপ, চট্টগ্রাম', ''),
(198, 'MOL2', 'আমিন এ� ব�াদাস�', ' �ম�লভী বাজার, সন্দ্বীপ, চট্টগ্রাম', ''),
(199, 'MOL3', 'জাফর মেডিকো', ' �ম�লভী বাজার, সন্দ্বীপ, চট্টগ্রাম', ''),
(200, 'MOL4', 'জসিম ফার্মেসী', ' �ম�লভী বাজার, সন্দ্বীপ, চট্টগ্রাম', ''),
(201, 'MOL5', 'হরি �মাহন', ' �ম�লভী বাজার, সন্দ্বীপ, চট্টগ্রাম', ''),
(202, 'MOJ1', 'সীমা ফার্মেসী', ' �মায়া��ম মার্কেট, সন্দ্বীপ, চট্টগ্রাম', ''),
(203, 'MOJ2', 'কবিরাজ অনাথ মাঝি ফার্মেসী', ' �মায়া��ম মার্কেট, সন্দ্বীপ, চট্টগ্রাম', ''),
(204, 'NA1', 'হাবিলা ফার্মেসী', 'নাজির হাট, সন্দ্বীপ, চট্টগ্রাম', ''),
(205, 'NA2', 'লায়লা ফার্মেসী', 'নাজির হাট, সন্দ্বীপ, চট্টগ্রাম', ''),
(206, 'NA3', 'আজমীরি ফার্মেসী', 'নাজির হাট, সন্দ্বীপ, চট্টগ্রাম', ''),
(207, 'NA4', 'অভি ফার্মেসী', 'নাজির হাট, সন্দ্বীপ, চট্টগ্রাম', ''),
(208, 'NA5', 'বিসমিল�াহ ফার্মেসী', 'নাজির হাট, সন্দ্বীপ, চট্টগ্রাম', ''),
(209, 'NA6', 'আফতাব ফার্মেসী', 'নাজির হাট, সন্দ্বীপ, চট্টগ্রাম', ''),
(210, 'NA7', 'জান�াত মেডিকেল হল', 'নাজির হাট, সন্দ্বীপ, চট্টগ্রাম', ''),
(211, 'NA8', 'বাবুল ফার্মেসী', 'নাজির হাট, সন্দ্বীপ, চট্টগ্রাম', ''),
(212, 'GA1', 'কাশেম ফার্মেসী', 'গাজী মার্কেট, সন্দ্বীপ, চট্টগ্রাম', ''),
(213, 'GA2', 'তিনি� ফার্মেসী', 'গাজী মার্কেট, সন্দ্বীপ, চট্টগ্রাম', ''),
(214, 'BAN1', '�দবী ফার্মেসী', 'বাণির হাট, সন্দ্বীপ, চট্টগ্রাম', ''),
(215, 'BAN2', 'এ.�ক ফার্মেসী', 'বাণির হাট, সন্দ্বীপ, চট্টগ্রাম', ''),
(216, 'BAN3', 'নিপা ফার্মেসী ', 'বাণির হাট, সন্দ্বীপ, চট্টগ্রাম', ''),
(217, 'BAN4', 'সত� নারায়ন ফার্মেসী', 'বাণির হাট, সন্দ্বীপ, চট্টগ্রাম', ''),
(218, 'BAN5', 'প�াইম ফার্মেসী', 'বাণির হাট, সন্দ্বীপ, চট্টগ্রাম', ''),
(219, 'BAN6', 'বাসু �দব ফার্মেসী', 'বাণির হাট, সন্দ্বীপ, চট্টগ্রাম', ''),
(220, 'SO1', '�জনিবা ফার্মেসী', 'ষোলশহর, সন্দ্বীপ, চট্টগ্রাম', ''),
(221, 'ALM1', 'শিপন ফার্মেসী ', 'আলী মুহুরীর তেমাথা, সন্দ্বীপ, চট্টগ্রাম', ''),
(222, 'ALM2', 'আবু ছা�য়দ ফার্মেসী', 'আলী মুহুরীর তেমাথা, সন্দ্বীপ, চট্টগ্রাম', ''),
(223, 'MON1', 'রাজিব ফার্মেসী', 'মুন্সীর হাট, সন্তোষপুর, সন্দ্বীপ', ''),
(224, 'MON2', 'পনির ফার্মেসী', 'মুন্সীর হাট, সন্তোষপুর, সন্দ্বীপ', ''),
(225, 'MON3', 'নিউ প�ীতি ফার্মেসী', 'মুন্সীর হাট, সন্তোষপুর, সন্দ্বীপ', ''),
(226, 'MON4', '�রা�বল ফার্মেসী', 'মুন্সীর হাট, সন্তোষপুর, সন্দ্বীপ', ''),
(227, 'MON5', 'আফতারা ফার্মেসী', 'মুন্সীর হাট, সন্তোষপুর, সন্দ্বীপ', ''),
(228, 'MON6', '�সলিম ফার্মেসী', 'মুন্সীর হাট, সন্তোষপুর, সন্দ্বীপ', ''),
(229, 'HAJ1', 'মু�া ফার্মেসী', 'হাজীর হাট/শনির হাট, সন্দ্বীপ, চট্টগ্রাম', ''),
(230, 'AK1', 'প�ীতি ফার্মেসী', 'আকবর হাট, সন্দ্বীপ, চট্টগ্রাম', ''),
(231, 'AK2', 'আদি ফার্মেসী', 'আকবর হাট, সন্দ্বীপ, চট্টগ্রাম', ''),
(232, 'AK3', '�শ�লন ফার্মেসী', 'আকবর হাট, সন্দ্বীপ, চট্টগ্রাম', ''),
(233, 'AK4', 'আলভী ফার্মেসী', 'আকবর হাট, সন্দ্বীপ, চট্টগ্রাম', ''),
(234, 'AK5', 'আবু তা�লব ফার্মেসী', 'আকবর হাট, সন্দ্বীপ, চট্টগ্রাম', ''),
(235, 'AK6', 'মজুমদার ফার্মেসী', 'আকবর হাট, সন্দ্বীপ, চট্টগ্রাম', ''),
(236, 'AK7', 'মা�ার মজুমদার ফার্মেসী', 'আকবর হাট, সন্দ্বীপ, চট্টগ্রাম', ''),
(237, 'AK8', 'অলক ফার্মেসী', 'আকবর হাট, সন্দ্বীপ, চট্টগ্রাম', ''),
(238, 'AK9', 'পপুলার ফার্মেসী', 'আকবর হাট, সন্দ্বীপ, চট্টগ্রাম', ''),
(239, 'AK10', 'নিরাময় ফার্মেসী', 'আকবর হাট, সন্দ্বীপ, চট্টগ্রাম', ''),
(240, 'AK11', 'হায়দার ফার্মেসী', 'আকবর হাট, সন্দ্বীপ, চট্টগ্রাম', ''),
(241, 'AK12', 'রহমানিয়া ফার্মেসী', 'আকবর হাট, সন্দ্বীপ, চট্টগ্রাম', ''),
(242, 'AK13', 'সুরাইয়া ফার্মেসী', 'আকবর হাট, সন্দ্বীপ, চট্টগ্রাম', ''),
(243, 'AK14', 'আদশ� �হামিও ফার্মেসী', 'আকবর হাট, সন্দ্বীপ, চট্টগ্রাম', ''),
(244, 'AK15', 'মুসলিম ফার্মেসী', 'আকবর হাট, সন্দ্বীপ, চট্টগ্রাম', ''),
(245, 'AMA1', '�মঘনা ফার্মেসী', 'আমানউল�া, সন্দ্বীপ, চট্টগ্রাম', ''),
(246, 'HOQ1', 'মিজান ফার্মেসী', 'হক সাহেবের বাজার, সন্দ্বীপ', ''),
(247, 'HOQ2', 'মাওলা ফার্মেসী', 'হক সাহেবের বাজার, সন্দ্বীপ', ''),
(248, 'HOQ3', '�রজিয়া ফার্মেসী', 'হক সাহেবের বাজার, সন্দ্বীপ', ''),
(249, 'HOQ4', '�বলাল ফার্মেসী', 'হক সাহেবের বাজার, সন্দ্বীপ', ''),
(250, 'KAS1', 'বাবর মেডিকেল হল', 'কাশেম মার্কেট, গাছুয়া সন্দ্বীপ, চট্টগ্রাম', ''),
(251, 'KAS2', 'ইলিয়াছ ফার্মেসী', 'কাশেম মার্কেট, গাছুয়া সন্দ্বীপ, চট্টগ্রাম', ''),
(252, 'GA1', 'হক মেডিকো', 'গাছুয়া মেডিকেল গেইট, সন্দ্বীপ', ''),
(253, 'GA2', '�সাহাগ মেডিকো', 'গাছুয়া মেডিকেল গেইট, সন্দ্বীপ', ''),
(254, 'GA3', 'ঔষুধী ফার্মেসী', 'গাছুয়া মেডিকেল গেইট, সন্দ্বীপ', ''),
(255, 'GA4', '�রপন ফার্মেসী', 'গাছুয়া মেডিকেল গেইট, সন্দ্বীপ', ''),
(256, 'GAT1', '�মাহন ফার্মেসী', 'ঘাট মাঝির হাট, গাছুয়া, সন্দ্বীপ', ''),
(257, 'GAT2', 'আল ফয়সাল ফার্মেসী', 'ঘাট মাঝির হাট, গাছুয়া, সন্দ্বীপ', ''),
(258, 'GAT3', 'নাহার মেডিকেল হল', 'ঘাট মাঝির হাট, গাছুয়া, সন্দ্বীপ', ''),
(259, 'GAT4', 'আল আমিন ফার্মেসী', 'ঘাট মাঝির হাট, গাছুয়া, সন্দ্বীপ', ''),
(260, 'AR1', 'মা মুনি ফার্মেসী', 'এরশাদ মার্কেট, বাউরিয়া, সন্দ্বীপ', ''),
(261, 'AR2', 'নমিতা ফার্মেসী', 'এরশাদ মার্কেট, বাউরিয়া, সন্দ্বীপ', ''),
(262, 'AR3', 'কু�ুস ফার্মেসী', 'এরশাদ মার্কেট, বাউরিয়া, সন্দ্বীপ', ''),
(263, 'AR4', ' �জড.এস ফার্মেসী', 'এরশাদ মার্কেট, বাউরিয়া, সন্দ্বীপ', ''),
(264, 'AR5', 'ইকবাল এ� ব�াদাস� ফার্মেসী', 'এরশাদ মার্কেট, বাউরিয়া, সন্দ্বীপ', ''),
(265, 'AR6', 'আমির হামজা ফার্মেসী', 'এরশাদ মার্কেট, বাউরিয়া, সন্দ্বীপ', ''),
(266, 'AR7', 'প�কাশ ফার্মেসী', 'এরশাদ মার্কেট, বাউরিয়া, সন্দ্বীপ', ''),
(267, 'KH1', '�জসি ফার্মেসী', 'খ��ার হাট, সন্দ্বীপ, চট্টগ্রাম', ''),
(268, 'MUL1', 'আজম ফার্মেসী', 'মৌলভী বাজার, সন্দ্বীপ, চট্টগ্রাম', ''),
(269, 'MUL2', 'আমিন এ� ব�াদাস�', 'মৌলভী বাজার, সন্দ্বীপ, চট্টগ্রাম', ''),
(270, 'MUL3', 'জাফর মেডিকো', 'মৌলভী বাজার, সন্দ্বীপ, চট্টগ্রাম', ''),
(271, 'MUL4', 'জসিম ফার্মেসী', 'মৌলভী বাজার, সন্দ্বীপ, চট্টগ্রাম', ''),
(272, 'MUL5', 'হরি �মাহন রায় ফার্মেসী', 'মৌলভী বাজার, সন্দ্বীপ, চট্টগ্রাম', '');

-- --------------------------------------------------------

--
-- Table structure for table `hmdrd_employees`
--

CREATE TABLE `hmdrd_employees` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `person_id` int(10) NOT NULL,
  `deleted` int(1) NOT NULL DEFAULT 0,
  `hash_version` int(1) NOT NULL DEFAULT 2,
  `language` varchar(48) DEFAULT NULL,
  `language_code` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `hmdrd_items`
--

CREATE TABLE `hmdrd_items` (
  `name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `supplier_id` int(11) DEFAULT NULL,
  `item_number` varchar(255) DEFAULT NULL,
  `description` varchar(255) NOT NULL,
  `cost_price` decimal(15,2) NOT NULL,
  `unit_price` decimal(15,2) NOT NULL,
  `reorder_level` decimal(15,3) NOT NULL DEFAULT 0.000,
  `receiving_quantity` decimal(15,3) NOT NULL DEFAULT 1.000,
  `item_id` int(10) NOT NULL,
  `pic_filename` varchar(255) DEFAULT NULL,
  `allow_alt_description` tinyint(1) NOT NULL,
  `is_serialized` tinyint(1) NOT NULL,
  `stock_type` tinyint(2) NOT NULL DEFAULT 0,
  `item_type` tinyint(2) NOT NULL DEFAULT 0,
  `tax_category_id` int(10) NOT NULL DEFAULT 1,
  `deleted` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `hmdrd_people`
--

CREATE TABLE `hmdrd_people` (
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` int(1) DEFAULT NULL,
  `phone_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address_1` varchar(255) NOT NULL,
  `address_2` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `comments` text NOT NULL,
  `person_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `hmdrd_sales`
--

CREATE TABLE `hmdrd_sales` (
  `sale_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `customer_id` int(10) DEFAULT NULL,
  `employee_id` int(10) NOT NULL DEFAULT 0,
  `comment` text DEFAULT NULL,
  `invoice_number` varchar(32) DEFAULT NULL,
  `quote_number` varchar(32) DEFAULT NULL,
  `sale_id` int(10) NOT NULL,
  `sale_status` tinyint(2) NOT NULL DEFAULT 0,
  `dinner_table_id` int(11) DEFAULT NULL,
  `work_order_number` varchar(32) DEFAULT NULL,
  `sale_type` tinyint(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `hmdrd_sales_items`
--

CREATE TABLE `hmdrd_sales_items` (
  `sale_id` int(10) NOT NULL DEFAULT 0,
  `item_id` int(10) NOT NULL DEFAULT 0,
  `description` varchar(255) DEFAULT NULL,
  `serialnumber` varchar(30) DEFAULT NULL,
  `line` int(3) NOT NULL DEFAULT 0,
  `quantity_purchased` decimal(15,3) NOT NULL DEFAULT 0.000,
  `item_cost_price` decimal(15,2) NOT NULL,
  `item_unit_price` decimal(15,2) NOT NULL,
  `discount_percent` decimal(15,2) NOT NULL DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `hmdrd_sales_payments`
--

CREATE TABLE `hmdrd_sales_payments` (
  `sale_id` int(10) NOT NULL,
  `payment_type` varchar(40) NOT NULL,
  `payment_amount` decimal(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `code_no` varchar(255) DEFAULT NULL,
  `pro_name` varchar(1000) DEFAULT NULL,
  `amount` varchar(1000) DEFAULT NULL,
  `buy_price` varchar(255) DEFAULT NULL,
  `sale_price` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `code_no`, `pro_name`, `amount`, `buy_price`, `sale_price`) VALUES
(1, '1', 'সিরাপ সিনকারা', '৪৫০ মিলি', '১৩৭', '১৪১'),
(2, '2', 'সিরাপ সিনকারা', '২২৫ মিলি', '৯৩', '১০১'),
(3, '3', 'সিরাপ সিনকারা', '১০০ মিলি', '৪৭', '৫০'),
(4, '4', 'র�হ আফজা', '৭৫০ মিলি', '২০০', '২১০'),
(5, '5', 'র�হ আফজা', '৩০০ মিলি', '১২০', '১২৬'),
(6, '6', 'সিরাপ কারমিনা', '৪৫০ মিলি', '১০১', '১০৯'),
(7, '7', 'সিরাপ কারমিনা', '২২৫ মিলি', '৬৬', '৭১'),
(8, '8', 'সিরাপ কারমিনা', '১০০ মিলি', '৩৯', '৪২'),
(9, '9', 'সিরাপ ছাফী', '৪৫০ মিলি', '১৩৬', '১৪৭'),
(10, '10', 'সিরাপ ছাফী', '২২৫ মিলি', '৯৩', '১০১'),
(11, '11', 'সিরাপ ছাফী', '১০০ মিলি', '৫০', '৫৭'),
(12, '12', 'সিরাপ এ�ালকুলী', '৪৫০ মিলি', '১০৯', '১১৮'),
(13, '13', 'সিরাপ এ�ালকুলী', '২২৫ মিলি', '৭০', '৭৬'),
(14, '14', 'সিরাপ এ�ালকুলী', '১০০ মিলি', '৩৯', '৪২'),
(15, '15', 'সিরাপ আ�পলিন', '৪৫০ মিলি', '১৫৫', '১৬২'),
(16, '16', 'সিরাপ আ�পলিন', '১০০ মিলি', '৪৭', '৫০'),
(17, '17', 'সিরাপ অ�র��ি��', '৪৫০ মিলি', '১০৯', '১১৮'),
(18, '18', 'সিরাপ অ�র��ি��', '১০০ মিলি', '৩৯', '৪২'),
(19, '19', 'সিরাপ ইকটাণ�', '৪৫০ মিলি', '১১৬', '১২৬'),
(20, '20', 'সিরাপ ইকটাণ�', '২২৫ মিলি', '৭৮', '৮৪'),
(21, '21', 'সিরাপ ইকটাণ�', '১০০ মিলি', '৪৭', '৫০'),
(22, '22', 'সিরাপ জিন�স�ট', '৪৫০ মিলি', '১৮৬', '২০২'),
(23, '23', 'সিরাপ জিন�স�ট', '২২৫ মিলি', '১১৬', '১২৬'),
(24, '24', 'সিরাপ জিন�স�ট', '১০০ মিলি', '৬২', '৭৬'),
(25, '25', 'সিরাপ নও�নহাল', '১০০ মিলি', '৪৭', '৫০'),
(26, '26', 'সিরাপ এলভাসিন', '২২৫ মিলি', '১০৯', '১১৮'),
(27, '27', 'সিরাপ এলভাসিন', '১০০ মিলি', '৫৪', '৫৯'),
(28, '28', 'সিরাপ মা��রীন', '৪৫০ মিলি', '১১৬', '১২৬'),
(29, '29', 'সিরাপ মা��রীন', '২২৫ মিলি', '৭৮', '৮৪'),
(30, '30', 'সিরাপ মা��রীন', '১০০ মিলি', '৪৭', '৫০'),
(31, '31', 'সিরাপ মার�বলাস', '২২৫ মিলি', '৭৮', '৮৪'),
(32, '32', 'সিরাপ মার�বলাস', '১০০ মিলি', '৪৭', '৫০'),
(33, '33', 'সিরাপ সাদুরী', '১০০ মিলি', '৪৭', '৫০'),
(34, '34', 'সিরাপ জারনাইড', '১০০ মিলি', '৫৪', '৫৯'),
(35, '35', 'সিরাপ �ফভনিল', '১০০ মিলি', '৫৪', '৫৯'),
(36, '36', 'কুলজম', '১৫ মিলি', '৫৪', '৫৯'),
(37, '37', 'হামদদ� আমলা', '১৩০ মিলি', '১৫৫', '১৬৮'),
(38, '38', 'আরক আজওয়াইন', '৪৫০ মিলি', '৭৮', '৮৪'),
(39, '39', '�পনি�টান', '১৫ মিলি', '১৫৫', '১৬৮'),
(40, '40', '�পনি�টান ও�য়ন�ম�ট', '২০ গ�াম', '১৫৫', '১৬৮'),
(41, '41', 'আরক বাদিয়ান', '৪৫০ মিলি', '৮৫', '৯২'),
(42, '42', 'আরক ফাওলিন', '৪৫০ মিলি', '১০৯', '১১৮'),
(43, '43', 'আরক গাওজাবান', '৪৫০ মিলি', '১১৬', '১২৬'),
(44, '44', 'আরক মাকু', '৪৫০ মিলি', '৯৩', '১০১'),
(45, '45', 'আরক মাউল হায়াত', '৪৫০ মিলি', '১৪০', '১৫১'),
(46, '46', 'আরক মাউল�াহাম', '২২৫ মিলি', '৯৩', '১০১'),
(47, '47', 'আরক পুদিনা', '৪৫০ মিলি', '৭৮', '৮৪'),
(48, '48', 'আরক অশ�গ�া', '৪৫০ মিলি', '৯৩', '১০১'),
(49, '49', 'রওগন সূখ�', '১০ মিলি', '৩৯', '৪২'),
(50, '50', 'নীলূফর', '২২৫ মিলি', '৫৪', '৫৯'),
(51, '51', 'জাবীন ', '২২৫ মিলি', '১০৯', '১১৮'),
(52, '52', 'সিরাপ ওশবা', '২২৫ মিলি', '৬২', '৬৭'),
(53, '53', 'সিরাপ হলার�া�ট', '২২৫ মিলি', '৮৫', '৯২'),
(54, '54', 'সিরাপ হলার�া�ট', '১০০ মিলি', '৪৭', '৫০'),
(55, '55', 'সিরাপ অম�তারি�', '৪৫০ মিলি', '৯৩', '১০১'),
(56, '56', 'সিরাপ �রাহিতকারি�', '৪৫০ মিলি', '৯৩', '১০১'),
(57, '57', 'সিরাপ মু��কারি�', '৪৫০ মিলি', '৯৩', '১০১'),
(58, '58', 'সিরাপ বলারি�', '৪৫০ মিলি', '১১৬', '১২৬'),
(59, '59', 'সিরাপ অ�শাকারি�', '৪৫০ মিলি', '১০১', '১০৯'),
(60, '60', 'সিরাপ অশ�গ�ারি�', '৪৫০ মিলি', '১১৬', '১২৬'),
(61, '61', 'মধু', '৮০ মিলি', '১০১', '১০৯'),
(62, '62', 'ক�াপ. �সনচুরিন', '৫০ ক�াপসল', '১৭১', '১৮৫'),
(63, '63', 'ট�াব. �ফ�া�ড�', '১০�২ ট�াব�লট', '৬৫৯', '৭১৪'),
(64, '64', 'ক�াপ. এনডিউ�র�', '৪�৫ ক�াপসল', '৯৩০', '১০০৮'),
(65, '65', 'ক�াপ. লিবি�ড�', '৪�৫ ক�াপসল', '৫০৪', '৫৪৬'),
(66, '66', 'ট�াব. ট�াইগন', '৪�২ ট�াব�লট', '৪৩৪', '৪৭০'),
(67, '67', 'ক�াপ. ট�াইগন', '৪�২ ট�াব�লট', '৪৩৪', '৪৭০'),
(68, '68', 'ক�াপ. সুপাত', '৬�৫ ক�াপসল', '১১৬', '১২৬'),
(69, '69', 'ক�াপ. মাসুখ ', '৬�৫ ক�াপসল', '১৬৩', '১৭৬'),
(70, '70', 'ক�াপ. জিগারীন', '৬�৫ ক�াপসল', '১৮৬', '২০২'),
(71, '71', 'ট�াব. সুভিট ', '৩০ ট�াব�লট', '১৮৬', '২০২'),
(72, '72', 'ট�াব. নিউটন', '৪�২ ট�াব�লট', '৪৬৫', '৫০৪'),
(73, '73', 'ট�াব. নিশাত', '১০�৫ ট�াব�লট', '৮৯১', '৯৬৬'),
(74, '74', 'ট�াব. কারমিনা', '৬০ ট�াব�লট', '৬৬', '৭১'),
(75, '75', 'ক�াপ. ছাফী', '৫�৬ ক�াপসল', '১৪০', '১৫১'),
(76, '76', 'ট�াব. ডিসনি', '৫�১০ ট�াব�লট', '১১৬', '১২৬'),
(77, '77', 'ট�াব. আলিসা', '৫�১০ ট�াব�লট', '৭৮', '৮৪'),
(78, '78', 'ট�াব. সুয়ালিন', '১০�১০ ট�াব�লট', '১৯৪', '২১০'),
(79, '79', 'ট�াব. সুরবিন', '৫�১০ ট�াব�লট', '১১৬', '১২৬'),
(80, '80', 'ট�াব. নরমা�টনসিন', '৫�১০ ট�াব�লট', '১১৬', '১২৬'),
(81, '81', 'ট�াব. �দালাবী', '৫�১০ ট�াব�লট', '১১৬', '১২৬'),
(82, '82', 'ট�াব. সূজান�', '৫�১০ ট�াব�লট', '১১৬', '১২৬'),
(83, '83', 'ট�াব. নার�ভ�ট', '৫�১০ ট�াব�লট', '৭৭৫', '৮৪০'),
(84, '84', 'ট�াব. হ�ানর�য়ড', '৫�১০ ট�াব�লট', '১১৬', '১২৬'),
(85, '85', 'ট�াব. হ�ানর�য়ড-বি', '৫�১০ ট�াব�লট', '১১৬', '১২৬'),
(86, '86', 'ট�াব. �সলভিন', '৫�১০ ট�াব�লট', '১৫৫', '১৬৮'),
(87, '87', 'ট�াব. ইন��াম�', '৫�১০ ট�াব�লট', '১১৬', '১২৬'),
(88, '88', 'ট�াব. পিবলিউ', '৫�১০ ট�াব�লট', '৭৮', '৮৪'),
(89, '89', 'ট�াব. ক�ালরিপ', '৫�১০ ট�াব�লট', '৮৫৩', '৯২৪'),
(90, '90', 'ট�াব. ��াম�াটিন', '৫�১৮ ট�াব�লট', '১৪০', '১৫১'),
(91, '91', 'ট�াব. পևমফ', '৫�১০ ট�াব�লট', '১৯৪', '২১০'),
(92, '92', '�টানাল�া�', '৫�১০ ট�াব�লট', '১১৬', '১২৬'),
(93, '93', 'হা�টার', '৫�১০ ট�াব�লট', '৭৮', '৮৪'),
(94, '94', 'হারমিন', '৫�১০ ট�াব�লট', '২৩৩', '২৫২'),
(95, '95', 'হ�ানপি', '৫�১০ ট�াব�লট', '৭৮', '৮৪'),
(96, '96', 'হাল�া�', '৫�১০ ট�াব�লট', '৭৮', '৮৪'),
(97, '97', 'রসনাম', '৫�১০ ট�াব�লট', '১১৬', '১২৬'),
(98, '98', '�রডিড', '৫�১০ ট�াব�লট', '১১৬', '১২৬'),
(99, '99', 'এ�িটলি�গা', '৫�১০ ক�াপসল', '১১৬', '১২৬'),
(100, '100', '�হপালজিন', '৫�১০ ট�াব�লট', '১৫৫', '১৬৮'),
(101, '101', 'এজারড', '৫�১০ ক�াপসল', '১১৬', '১২৬'),
(102, '102', 'লি�ভক', '৬�৫ ক�াপসল', '১৮৬', '২০২'),
(103, '103', '�কাবি', '৬�৫ ক�াপসল', '১৬৩', '১৭৬'),
(104, '104', '�কাবি', '৬�৫ ক�াপসল', '১৪০', '১৫১'),
(105, '105', '�লডিকা', '৬�৫ ক�াপসল', '১৪০', '১৫১'),
(106, '106', 'জিন�টান', '৬�৫ ক�াপসল', '২৭৯', '৩০২'),
(107, '107', 'জনট�', '৬�৫ ক�াপসল', '১৬৩', '১৭৬'),
(108, '108', 'লিনা (২৫০ গ�াম)', '৬�৫ ক�াপসল', '১৪০', '১৫১'),
(109, '109', 'লিনা (৫০০ গ�াম)', '৬�৫ ক�াপসল', '১৮৬', '২০২'),
(110, '110', 'নিমু�ল�ট', '৬�৫ ক�াপসল', '১৮৬', '২০২'),
(111, '111', 'পা�মট', '৬�৫ ক�াপসল', '১৮৬', '২০২'),
(112, '112', '�ভ�ল�ট', '৬�৫ ক�াপসল', '২৩৩', '২৫২'),
(113, '113', 'ও.আর.এস স�ালাইন', '২০ স�া�চট', '৭৮', '৮৪'),
(114, '114', '�জাশিনা', '২৫ স�া�চট', '২৫২', '২৭৩'),
(115, '115', 'ই��দমালী', '২০ স�া�চট', '২৯৫', '৩১৯'),
(116, '116', 'মাজুন মুগালি�জ', '১০০ গ�াম', '১৩২', '১৪৩'),
(117, '117', 'মাজুন আর�দ খুরমা', '১০০ গ�াম', '১০১', '১০৯'),
(118, '118', 'চ�বনপ�াশ', '৫০০ গ�াম', '৩৪৯', '৩৭৮'),
(119, '119', 'চ�াবনপ�াশ', '২৫০ গ�াম', '১৯৪', '২১০'),
(120, '120', '��ি��লা চূণ�', '২৫ স�া�চট', '১৭৪', '১৮৯'),
(121, '121', 'ইসপা�ল (ভূসি)', '২৫ স�া�চট', '২৩৩', '২৫২'),
(122, '122', 'দ��র�া', '৫০ গ�াম', '৫০', '৫৫'),
(123, '123', 'সফূফ সুপারিপাক', '৫০ গ�াম', '৭৮', '৮৪'),
(124, '124', 'মাজুন মুমসিক', '১০০ গ�াম', '৪৪৬', '৪৮৩'),
(125, '125', 'মাজুন ফালা�সফা', '১০০ গ�াম', '৯৩', '১০১'),
(126, '126', 'জাওয়ারিশ আমলা', '১০০ গ�াম', '৯৩', '১০১'),
(127, '127', 'জাওয়ারিশ বিসবাসা', '১০০ গ�াম', '১০১', '১০৯'),
(128, '128', 'জাওয়ারিশ জালিনুস', '১০০ গ�াম', '২০২', '২১৮'),
(129, '129', 'জাওয়ারিশ যরউনী', '১০০ গ�াম', '১৭৮', '১৯৩'),
(130, '130', 'জাওয়ারিশ কমূনী', '১০০ গ�াম', '৮৫', '৯২'),
(131, '131', 'জাওয়ারিশ মুছতগী', '৮০ গ�াম', '১৮৬', '২০২'),
(132, '132', 'জাওয়ারিশ শাহী', '১০০ গ�াম', '৭০', '৭৬'),
(133, '133', 'জাওয়ারিশ তমরহি�দী', '১০০ গ�াম', '১০১', '১০৯'),
(134, '134', 'জাওয়ারিশ আব�রশম', '৮০ গ�াম', '১৩২', '১৪৩'),
(135, '135', 'খামিরা গাওজবান আ�্বরী', '৮০ গ�াম', '৪২৬', '৪৬২'),
(136, '136', 'খামিরা গাওজবান', '৮০ গ�াম', '১০৯', '১১৮'),
(137, '137', 'খামিরা মারওয়ারীদ', '৮০ গ�াম', '১০৯', '১১৮'),
(138, '138', 'লউক সা�প��ান', '১০০ গ�াম', '৯৩', '১০১'),
(139, '139', 'মাজুন চুবচীনী', '১০০ গ�াম', '১০১', '১০৯'),
(140, '140', 'মাজুন দবীদুল ওয়াদ�', '৮০ গ�াম', '১৭১', '১৮৫'),
(141, '141', 'মাজুন কু�দুর', '১০০ গ�াম', '৮৫', '৯২'),
(142, '142', 'মাজুন লানা', '১০০ গ�াম', '৬২০', '৬৭২'),
(143, '143', 'মাজুন �সাহাগশূঁঠ', '১০০ গ�াম', '৯৩', '১০১'),
(144, '144', 'মাজুন সুর�ান', '১০০ গ�াম', '৮৫', '৯২'),
(145, '145', 'মাজুন ওশবা', '১০০ গ�াম', '৭৮', '৯২'),
(146, '146', 'লিকুরিন', '১০০ গ�াম', '৭০', '৭৬'),
(147, '147', 'এ��ি��ল বাদিয়ান', '১০০ গ�াম', '৫৪', '৫৯'),
(148, '148', 'এ��ি��ল কাশনীযী', '১০০ গ�াম', '৫৪', '৫৯'),
(149, '149', 'এ��ি��ল কবীর', '১০০ গ�াম', '৮৫', '৯২'),
(150, '150', 'এ��ি��ল শাহতারা', '১০০ গ�াম', '৭৮', '৮৪'),
(151, '151', 'এ��ি��ল যমানী', '১০০ গ�াম', '৯৩', '১০১'),
(152, '152', 'এ��ি��ল উসতূখূদূস', '১০০ গ�াম', '৯৩', '১০১'),
(153, '153', 'লুবূব কবীর', '১০০ গ�াম', '৫৮১', '৬৩০'),
(154, '154', 'লুবূব কবীর সুগার ফি�', '১০০ গ�াম', '৬৯৮', '৭৫৬'),
(155, '155', 'সফূফ জিরিয়ান', '৫০ গ�াম', '৭০', '৭৬'),
(156, '156', 'সফূফ �মাগালি�য', '৫০ গ�াম', '৫৪', '৫৯'),
(157, '157', 'সফূফ �মাইয়া', '৫০ গ�াম', '১৫৫', '১৬৮'),
(158, '158', 'নিমক �সালায়মানী', '৫০ গ�াম', '৭০', '৭৬'),
(159, '159', 'কারহিন', '৫০ গ�াম', '৩৬৮', '৩৯৯'),
(160, '160', 'সফূফ সুসী', '২৫ গ�াম', '৫৪', '৫৯'),
(161, '161', 'সফূফ ছুদা', '৫০ গ�াম', '১৪৭', '১৬০'),
(162, '162', 'সফূফ মুসা�িন', '১২ গ�াম', '২৭', '২৯'),
(163, '163', 'ডার�মইড', '২০ গ�াম', '৫৪', '৫৯'),
(164, '164', 'সফূফ ছ�দল', '১২ গ�াম', '২৭', '২৯'),
(165, '165', 'সফূফ স��', '১২ গ�াম', '৩৫', '৩৮'),
(166, '166', 'সফূফ সুর�ান', '১২ গ�াম', '৩১', '৩৪'),
(167, '167', 'সফূফ মুসহিল', '১২ গ�াম', '৩১', '৩৪'),
(168, '168', 'সফূফ ইদরার', '১২ গ�াম', '৫০', '৫৫'),
(169, '169', 'সফূফ জিগার', '১২ গ�াম', '৩৫', '৩৮'),
(170, '170', 'জিমাদ একজিমা', '১০ গ�াম', '৩১', '৩৪');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hmdrd_employees`
--
ALTER TABLE `hmdrd_employees`
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `person_id` (`person_id`);

--
-- Indexes for table `hmdrd_items`
--
ALTER TABLE `hmdrd_items`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `item_number` (`item_number`),
  ADD KEY `supplier_id` (`supplier_id`);

--
-- Indexes for table `hmdrd_people`
--
ALTER TABLE `hmdrd_people`
  ADD PRIMARY KEY (`person_id`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `hmdrd_sales`
--
ALTER TABLE `hmdrd_sales`
  ADD PRIMARY KEY (`sale_id`),
  ADD UNIQUE KEY `invoice_number` (`invoice_number`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `employee_id` (`employee_id`),
  ADD KEY `sale_time` (`sale_time`);

--
-- Indexes for table `hmdrd_sales_items`
--
ALTER TABLE `hmdrd_sales_items`
  ADD PRIMARY KEY (`sale_id`,`item_id`,`line`),
  ADD KEY `sale_id` (`sale_id`),
  ADD KEY `item_id` (`item_id`);

--
-- Indexes for table `hmdrd_sales_payments`
--
ALTER TABLE `hmdrd_sales_payments`
  ADD PRIMARY KEY (`sale_id`,`payment_type`),
  ADD KEY `sale_id` (`sale_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=273;

--
-- AUTO_INCREMENT for table `hmdrd_items`
--
ALTER TABLE `hmdrd_items`
  MODIFY `item_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hmdrd_people`
--
ALTER TABLE `hmdrd_people`
  MODIFY `person_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `hmdrd_sales`
--
ALTER TABLE `hmdrd_sales`
  MODIFY `sale_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=171;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hmdrd_employees`
--
ALTER TABLE `hmdrd_employees`
  ADD CONSTRAINT `ospos_employees_ibfk_1` FOREIGN KEY (`person_id`) REFERENCES `hmdrd_people` (`person_id`);

--
-- Constraints for table `hmdrd_sales`
--
ALTER TABLE `hmdrd_sales`
  ADD CONSTRAINT `hmdrd_sales_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `hmdrd_employees` (`person_id`),
  ADD CONSTRAINT `hmdrd_sales_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`);

--
-- Constraints for table `hmdrd_sales_items`
--
ALTER TABLE `hmdrd_sales_items`
  ADD CONSTRAINT `hmdrd_sales_items_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `hmdrd_items` (`item_id`),
  ADD CONSTRAINT `hmdrd_sales_items_ibfk_2` FOREIGN KEY (`sale_id`) REFERENCES `hmdrd_sales` (`sale_id`);

--
-- Constraints for table `hmdrd_sales_payments`
--
ALTER TABLE `hmdrd_sales_payments`
  ADD CONSTRAINT `hmdrd_sales_payments_ibfk_1` FOREIGN KEY (`sale_id`) REFERENCES `hmdrd_sales` (`sale_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;