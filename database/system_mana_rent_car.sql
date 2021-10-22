-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 22, 2021 lúc 04:01 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `system_mana_rent_car`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cars`
--

CREATE TABLE `cars` (
  `vehicle_id` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `license_no` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` int(4) NOT NULL,
  `ctype` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `drate` int(10) NOT NULL,
  `wrate` int(10) NOT NULL,
  `status` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cars`
--

INSERT INTO `cars` (`vehicle_id`, `license_no`, `model`, `year`, `ctype`, `drate`, `wrate`, `status`) VALUES
('MPT0001', '88A12345', 'MD101', 2019, '4 chỗ', 500000, 3000000, 'Chưa thuê'),
('MPT0002', '88A11223', 'MD456', 2021, '6 chỗ', 600000, 3600000, 'Chưa thuê'),
('MPT0003', '88A55667', 'MD001', 2020, '7 chỗ', 700000, 4200000, 'Chưa thuê'),
('MPT0004', '88A99886', 'MD098', 2018, '16 chỗ', 1000000, 6000000, 'Đã thuê'),
('MPT0005', '88A23456', 'MD067', 2020, '4 chỗ', 500000, 3000000, 'Chưa thuê');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`vehicle_id`),
  ADD UNIQUE KEY `license_no` (`license_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
