-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2019-03-04 09:56:51
-- 服务器版本： 5.7.21
-- PHP Version: 7.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `TLZCSYS`
--

-- --------------------------------------------------------

--
-- 表的结构 `MachineList`
--

CREATE TABLE `MachineList` (
  `id` int(11) NOT NULL,
  `MachineModel` varchar(10) COLLATE utf8_bin NOT NULL,
  `MachineSN` varchar(10) COLLATE utf8_bin NOT NULL,
  `AddTime` datetime NOT NULL,
  `MachineDesc` varchar(100) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 `MachineList`
--

INSERT INTO `MachineList` (`id`, `MachineModel`, `MachineSN`, `AddTime`, `MachineDesc`) VALUES
(1, 'AS456', 'xxx', '2019-03-04 17:55:20', 'xxxx');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `MachineList`
--
ALTER TABLE `MachineList`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `MachineList`
--
ALTER TABLE `MachineList`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
