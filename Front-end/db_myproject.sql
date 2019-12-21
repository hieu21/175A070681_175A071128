-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2019 at 05:49 AM
-- Server version: 10.4.10-MariaDB
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
-- Database: `db_myproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `giangvien`
--

CREATE TABLE `giangvien` (
  `maGV` varchar(10) NOT NULL,
  `hoTenGV` varchar(30) DEFAULT NULL,
  `ngaySinh` date DEFAULT NULL,
  `diaChi` varchar(30) DEFAULT NULL,
  `maTK` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `giangvien`
--

INSERT INTO `giangvien` (`maGV`, `hoTenGV`, `ngaySinh`, `diaChi`, `maTK`) VALUES
('GV01', 'Kiều Tuấn Dũng', '1990-01-01', 'Đống Đa-Hà Nội', 'TK01');

-- --------------------------------------------------------

--
-- Table structure for table `giangvien_mon`
--

CREATE TABLE `giangvien_mon` (
  `maGV` varchar(10) NOT NULL,
  `maMon` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `giangvien_mon`
--

INSERT INTO `giangvien_mon` (`maGV`, `maMon`) VALUES
('GV01', 'M01');

-- --------------------------------------------------------

--
-- Table structure for table `kehoachgiangday`
--

CREATE TABLE `kehoachgiangday` (
  `maKHGD` varchar(10) NOT NULL,
  `baiHocDK` varchar(50) DEFAULT NULL,
  `diaDiemDK` varchar(30) DEFAULT NULL,
  `thoiGianDK` datetime DEFAULT NULL,
  `maGV` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lop_hocphan`
--

CREATE TABLE `lop_hocphan` (
  `maLHP` varchar(10) NOT NULL,
  `maTGH` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lop_hocphan`
--

INSERT INTO `lop_hocphan` (`maLHP`, `maTGH`) VALUES
('LHP01', 'TGH01'),
('LHP02', 'TGH02'),
('LHP03', 'TGH03'),
('LHP04', 'TGH04');

-- --------------------------------------------------------

--
-- Table structure for table `lop_monhoc`
--

CREATE TABLE `lop_monhoc` (
  `maLMH` varchar(10) NOT NULL,
  `maMon` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lop_monhoc`
--

INSERT INTO `lop_monhoc` (`maLMH`, `maMon`) VALUES
('LMH01', 'M01');

-- --------------------------------------------------------

--
-- Table structure for table `mon`
--

CREATE TABLE `mon` (
  `maMon` varchar(10) NOT NULL,
  `tenMon` varchar(30) DEFAULT NULL,
  `maNganh` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mon`
--

INSERT INTO `mon` (`maMon`, `tenMon`, `maNganh`) VALUES
('M01', 'Công nghệ Web', 'N01');

-- --------------------------------------------------------

--
-- Table structure for table `mon_lhp`
--

CREATE TABLE `mon_lhp` (
  `maMon` varchar(10) DEFAULT NULL,
  `maLHP` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `nganh`
--

CREATE TABLE `nganh` (
  `maNganh` varchar(10) NOT NULL,
  `tenNganh` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nganh`
--

INSERT INTO `nganh` (`maNganh`, `tenNganh`) VALUES
('N01', 'Công nghệ thông tin');

-- --------------------------------------------------------

--
-- Table structure for table `quanly`
--

CREATE TABLE `quanly` (
  `maQL` varchar(10) NOT NULL,
  `hoTenQL` varchar(30) DEFAULT NULL,
  `ngaySinh` date DEFAULT NULL,
  `diaChi` varchar(30) DEFAULT NULL,
  `maTK` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quanly`
--

INSERT INTO `quanly` (`maQL`, `hoTenQL`, `ngaySinh`, `diaChi`, `maTK`) VALUES
('QL01', 'Lê Quốc Đạt', '1998-12-21', 'Đống Đa-Hà Nội', 'TK02');

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `maTK` varchar(10) NOT NULL,
  `tenTK` varchar(30) DEFAULT NULL,
  `matKhau` varchar(30) DEFAULT NULL,
  `capDo` tinyint(4) DEFAULT NULL,
  `ngayTao` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`maTK`, `tenTK`, `matKhau`, `capDo`, `ngayTao`) VALUES
('TK01', 'GV_Name01', 'GV01', 1, '2019-12-21 07:00:00'),
('TK02', 'QL_Name01', 'QL01', 2, '2019-12-21 07:00:00'),
('TK03', 'admin01', 'admin01', 3, '2019-12-21 07:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `thoigianhoc`
--

CREATE TABLE `thoigianhoc` (
  `maTGH` varchar(10) NOT NULL,
  `namHoc` int(11) DEFAULT NULL,
  `hocKy` tinyint(4) DEFAULT NULL,
  `giaiDoan` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `thoigianhoc`
--

INSERT INTO `thoigianhoc` (`maTGH`, `namHoc`, `hocKy`, `giaiDoan`) VALUES
('TGH01', 2019, 1, 1),
('TGH02', 2019, 1, 2),
('TGH03', 2019, 2, 1),
('TGH04', 2019, 2, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `giangvien`
--
ALTER TABLE `giangvien`
  ADD PRIMARY KEY (`maGV`),
  ADD KEY `maTK` (`maTK`);

--
-- Indexes for table `giangvien_mon`
--
ALTER TABLE `giangvien_mon`
  ADD PRIMARY KEY (`maGV`,`maMon`),
  ADD KEY `maMon` (`maMon`);

--
-- Indexes for table `kehoachgiangday`
--
ALTER TABLE `kehoachgiangday`
  ADD PRIMARY KEY (`maKHGD`),
  ADD KEY `maGV` (`maGV`);

--
-- Indexes for table `lop_hocphan`
--
ALTER TABLE `lop_hocphan`
  ADD PRIMARY KEY (`maLHP`),
  ADD KEY `maTGH` (`maTGH`);

--
-- Indexes for table `lop_monhoc`
--
ALTER TABLE `lop_monhoc`
  ADD PRIMARY KEY (`maLMH`),
  ADD KEY `maMon` (`maMon`);

--
-- Indexes for table `mon`
--
ALTER TABLE `mon`
  ADD PRIMARY KEY (`maMon`),
  ADD KEY `maNganh` (`maNganh`);

--
-- Indexes for table `mon_lhp`
--
ALTER TABLE `mon_lhp`
  ADD KEY `maMon` (`maMon`),
  ADD KEY `maLHP` (`maLHP`);

--
-- Indexes for table `nganh`
--
ALTER TABLE `nganh`
  ADD PRIMARY KEY (`maNganh`);

--
-- Indexes for table `quanly`
--
ALTER TABLE `quanly`
  ADD PRIMARY KEY (`maQL`),
  ADD KEY `maTK` (`maTK`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`maTK`);

--
-- Indexes for table `thoigianhoc`
--
ALTER TABLE `thoigianhoc`
  ADD PRIMARY KEY (`maTGH`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `giangvien`
--
ALTER TABLE `giangvien`
  ADD CONSTRAINT `giangvien_ibfk_1` FOREIGN KEY (`maTK`) REFERENCES `taikhoan` (`maTK`);

--
-- Constraints for table `giangvien_mon`
--
ALTER TABLE `giangvien_mon`
  ADD CONSTRAINT `giangvien_mon_ibfk_1` FOREIGN KEY (`maGV`) REFERENCES `giangvien` (`maGV`),
  ADD CONSTRAINT `giangvien_mon_ibfk_2` FOREIGN KEY (`maMon`) REFERENCES `mon` (`maMon`);

--
-- Constraints for table `kehoachgiangday`
--
ALTER TABLE `kehoachgiangday`
  ADD CONSTRAINT `kehoachgiangday_ibfk_1` FOREIGN KEY (`maGV`) REFERENCES `giangvien` (`maGV`);

--
-- Constraints for table `lop_hocphan`
--
ALTER TABLE `lop_hocphan`
  ADD CONSTRAINT `lop_hocphan_ibfk_1` FOREIGN KEY (`maTGH`) REFERENCES `thoigianhoc` (`maTGH`);

--
-- Constraints for table `lop_monhoc`
--
ALTER TABLE `lop_monhoc`
  ADD CONSTRAINT `lop_monhoc_ibfk_1` FOREIGN KEY (`maMon`) REFERENCES `mon` (`maMon`);

--
-- Constraints for table `mon`
--
ALTER TABLE `mon`
  ADD CONSTRAINT `mon_ibfk_1` FOREIGN KEY (`maNganh`) REFERENCES `nganh` (`maNganh`);

--
-- Constraints for table `mon_lhp`
--
ALTER TABLE `mon_lhp`
  ADD CONSTRAINT `mon_lhp_ibfk_1` FOREIGN KEY (`maMon`) REFERENCES `mon` (`maMon`),
  ADD CONSTRAINT `mon_lhp_ibfk_2` FOREIGN KEY (`maLHP`) REFERENCES `lop_hocphan` (`maLHP`);

--
-- Constraints for table `quanly`
--
ALTER TABLE `quanly`
  ADD CONSTRAINT `quanly_ibfk_1` FOREIGN KEY (`maTK`) REFERENCES `taikhoan` (`maTK`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
