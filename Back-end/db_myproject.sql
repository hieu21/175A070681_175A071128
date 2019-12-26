-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2019 at 11:28 PM
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
-- Table structure for table `chuyennganh`
--

CREATE TABLE `chuyennganh` (
  `maCN` varchar(10) NOT NULL,
  `tenCN` varchar(30) DEFAULT NULL,
  `maNganh` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chuyennganh`
--

INSERT INTO `chuyennganh` (`maCN`, `tenCN`, `maNganh`) VALUES
('CNTT', 'Công nghệ thông tin', 'N01'),
('HTPM', 'Hệ thống phần mềm', 'N01'),
('HTTT', 'Hệ thống thông tin', 'N01');

-- --------------------------------------------------------

--
-- Table structure for table `diadiemhoc`
--

CREATE TABLE `diadiemhoc` (
  `maDD` varchar(10) NOT NULL,
  `tenDD` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `diadiemhoc`
--

INSERT INTO `diadiemhoc` (`maDD`, `tenDD`) VALUES
('111-A1', 'Phòng 111 nhà A1'),
('111-A2', 'Phòng 111 nhà A2'),
('111-A3', 'Phòng 111 nhà A3'),
('111-A4', 'Phòng 111 nhà A4'),
('211-A1', 'Phòng 211 nhà A1'),
('211-A2', 'Phòng 211 nhà A2'),
('211-A3', 'Phòng 211 nhà A3'),
('211-A4', 'Phòng 211 nhà A4'),
('311-A1', 'Phòng 311 nhà A1'),
('311-A2', 'Phòng 311 nhà A2'),
('311-A3', 'Phòng 311 nhà A3'),
('311-A4', 'Phòng 311 nhà A4');

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
('GV03', 'Kiều Tuấn Dũng', '1990-01-01', 'Đống Đa-Hà Nội', 'TK03'),
('GV04', 'Nguyễn Quỳnh Diệp', '1990-01-01', 'Thanh Xuân-Hà Nội', 'TK04'),
('GV05', 'Trần Mạnh Tuấn', '1990-01-01', 'Phương Liệt-Hà Nội', 'TK05'),
('GV06', 'Trương Xuân Nam', '1990-01-01', 'Từ Liêm-Hà Nội', 'TK06');

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
('GV03', 'M01'),
('GV03', 'M02'),
('GV03', 'M03'),
('GV04', 'M01'),
('GV04', 'M02'),
('GV04', 'M03'),
('GV05', 'M01'),
('GV05', 'M02'),
('GV05', 'M03'),
('GV06', 'M01'),
('GV06', 'M02'),
('GV06', 'M03');

-- --------------------------------------------------------

--
-- Table structure for table `lichtrinh`
--

CREATE TABLE `lichtrinh` (
  `maLT` varchar(10) NOT NULL,
  `tenLT` varchar(50) NOT NULL,
  `maGV` varchar(10) NOT NULL,
  `maLHP` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lichtrinh`
--

INSERT INTO `lichtrinh` (`maLT`, `tenLT`, `maGV`, `maLHP`) VALUES
('LT01', 'Công nghệ Web-Kiều Tuấn Dũng', 'GV03', 'LHP01'),
('LT02', 'Công nghệ Web-Kiều Tuấn Dũng', 'GV03', 'LHP02'),
('LT03', 'Phân tích thiết kế-Trần Mạnh Tuấn', 'GV05', 'LHP03'),
('LT04', 'Phân tích thiết kế-Trần Mạnh Tuấn', 'GV05', 'LHP04'),
('LT05', 'Lý thuyết tính toán-Nguyễn Quỳnh Diệp', 'GV04', 'LHP05'),
('LT06', 'Lý thuyết tính toán-Nguyễn Quỳnh Diệp', 'GV04', 'LHP06'),
('LT07', 'Công nghệ Web-Kiều Tuấn Dũng', 'GV03', 'LHP07'),
('LT08', 'Công nghệ Web-Kiều Tuấn Dũng', 'GV03', 'LHP08'),
('LT09', 'Phân tích thiết kế-Trần Mạnh Tuấn', 'GV05', 'LHP09'),
('LT10', 'Phân tích thiết kế-Trần Mạnh Tuấn', 'GV05', 'LHP10'),
('LT11', 'Lý thuyết tính toán-Nguyễn Quỳnh Diệp', 'GV04', 'LHP11'),
('LT12', 'Lý thuyết tính toán-Nguyễn Quỳnh Diệp', 'GV04', 'LHP12'),
('LT13', 'Công nghệ Web-Trương Xuân Nam', 'GV06', 'LHP13'),
('LT14', 'Công nghệ Web-Trương Xuân Nam', 'GV06', 'LHP14'),
('LT15', 'Phân tích thiết kế-Trương Xuân Nam', 'GV06', 'LHP15'),
('LT16', 'Phân tích thiết kế-Trương Xuân Nam', 'GV06', 'LHP16'),
('LT17', 'Lý thuyết tính toán-Trần Mạnh Tuấn', 'GV05', 'LHP17'),
('LT18', 'Lý thuyết tính toán-Kiều Tuấn Dũng', 'GV03', 'LHP18');

-- --------------------------------------------------------

--
-- Table structure for table `lop`
--

CREATE TABLE `lop` (
  `maLop` varchar(10) NOT NULL,
  `tenLop` varchar(30) DEFAULT NULL,
  `siSo` int(11) DEFAULT NULL,
  `maCN` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lop`
--

INSERT INTO `lop` (`maLop`, `tenLop`, `siSo`, `maCN`) VALUES
('59HT', 'HT', 69, 'HTTT'),
('59PM', 'HTPM', 69, 'HTPM'),
('59TH1', 'TH1', 70, 'CNTT'),
('59TH2', 'TH2', 69, 'HTTT'),
('59TH3', 'TH3', 69, 'CNTT'),
('59TH4', 'TH4', 69, 'CNTT');

-- --------------------------------------------------------

--
-- Table structure for table `lophp`
--

CREATE TABLE `lophp` (
  `maLHP` varchar(10) NOT NULL,
  `tenLHP` varchar(30) DEFAULT NULL,
  `maTGH` varchar(10) DEFAULT NULL,
  `maDD` varchar(10) DEFAULT NULL,
  `maTiet` varchar(10) DEFAULT NULL,
  `maMon` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lophp`
--

INSERT INTO `lophp` (`maLHP`, `tenLHP`, `maTGH`, `maDD`, `maTiet`, `maMon`) VALUES
('LHP01', 'K1G1_CNWEB01', 'TGH01', '111-A1', '12T24', 'M01'),
('LHP02', 'K1G1_CNWEB02', 'TGH01', '111-A1', '45T24', 'M01'),
('LHP03', 'K1G1_PTICH01', 'TGH01', '111-A2', '12T24', 'M02'),
('LHP04', 'K1G1_PTICH02', 'TGH01', '111-A2', '45T24', 'M01'),
('LHP05', 'K1G1_LTTT01', 'TGH01', '111-A3', '12T24', 'M03'),
('LHP06', 'K1G1_LTTT02', 'TGH01', '111-A3', '45T24', 'M03'),
('LHP07', 'K1G2_CNWEB01', 'TGH02', '111-A4', '56T24', 'M01'),
('LHP08', 'K1G2_CNWEB02', 'TGH02', '111-A4', '23T24', 'M01'),
('LHP09', 'K1G2_PTICH01', 'TGH02', '211-A1', '23T24', 'M02'),
('LHP10', 'K1G2_PTICH02', 'TGH02', '211-A1', '56T24', 'M02'),
('LHP11', 'K1G2_LTTT01', 'TGH02', '211-A2', '23T24', 'M03'),
('LHP12', 'K1G2_LTTT02', 'TGH02', '211-A2', '56T24', 'M03'),
('LHP13', 'K2G1_CNWEB01', 'TGH03', '211-A3', '12T46', 'M01'),
('LHP14', 'K2G1_CNWEB02', 'TGH03', '211-A3', '45T46', 'M01'),
('LHP15', 'K2G1_PTICH01', 'TGH03', '211-A4', '12T46', 'M02'),
('LHP16', 'K2G1_PTICH02', 'TGH03', '211-A4', '45T46', 'M02'),
('LHP17', 'K2G1_LTTT01', 'TGH03', '311-A1', '12T46', 'M03'),
('LHP18', 'K2G1_LTTT02', 'TGH03', '311-A1', '45T46', 'M03');

-- --------------------------------------------------------

--
-- Table structure for table `mon`
--

CREATE TABLE `mon` (
  `maMon` varchar(10) NOT NULL,
  `tenMon` varchar(50) DEFAULT NULL,
  `maNganh` varchar(10) DEFAULT NULL,
  `soTin` int(11) NOT NULL DEFAULT 3
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mon`
--

INSERT INTO `mon` (`maMon`, `tenMon`, `maNganh`, `soTin`) VALUES
('M01', 'Công nghệ Web', 'N01', 3),
('M02', 'Phân tích thiết kế hệ thống phầm mềm', 'N01', 3),
('M03', 'Lý thuyết tính toán', 'N01', 3);

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
('TK01', 'admin', 'admin', 1, '2019-12-21 07:00:00'),
('TK02', 'QL_Name', 'QL_pass', 2, '2019-12-21 07:00:00'),
('TK03', 'GV_Dungkt', 'Dungkt', 3, '2019-12-21 07:00:00'),
('TK04', 'GV_Diepnq', 'Diepnq', 3, '2019-12-21 07:00:00'),
('TK05', 'GV_Tuantm', 'Tuantm', 3, '2019-12-21 07:00:00'),
('TK06', 'GV_Namtx', 'Namtx', 3, '2019-12-21 07:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `thoigianhoc`
--

CREATE TABLE `thoigianhoc` (
  `maTGH` varchar(10) NOT NULL,
  `namHoc` int(11) DEFAULT NULL,
  `hocKy` tinyint(4) DEFAULT NULL,
  `giaiDoan` tinyint(4) DEFAULT NULL,
  `chiTiet` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `thoigianhoc`
--

INSERT INTO `thoigianhoc` (`maTGH`, `namHoc`, `hocKy`, `giaiDoan`, `chiTiet`) VALUES
('TGH01', 2019, 1, 1, 'Từ 1-8 tới 31-10'),
('TGH02', 2019, 1, 2, 'Từ 1-11 tới 31-1'),
('TGH03', 2019, 2, 1, 'Từ 1-2 tới 30-4'),
('TGH04', 2019, 2, 2, 'Từ 1-5 tới 31-7');

-- --------------------------------------------------------

--
-- Table structure for table `tiethoc`
--

CREATE TABLE `tiethoc` (
  `maTiet` varchar(10) NOT NULL,
  `tenTiet` varchar(15) DEFAULT NULL,
  `ngayHoc` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tiethoc`
--

INSERT INTO `tiethoc` (`maTiet`, `tenTiet`, `ngayHoc`) VALUES
('123T3', 'Tiết 1,2,3', 'Thứ 3'),
('123T5', 'Tiết 1,2,3', 'Thứ 5'),
('12T24', 'Tiết 1,2', 'Thứ 2,4'),
('12T46', 'Tiết 1,2', 'Thứ 4,6'),
('23T24', 'Tiết 2,3', 'Thứ 2,4'),
('23T46', 'Tiết 2,3', 'Thứ 4,6'),
('456T3', 'Tiết 4,5,6', 'Thứ 3'),
('456T5', 'Tiết 4,5,6', 'Thứ 5'),
('45T24', 'Tiết 4,5', 'Thứ 2,4'),
('45T46', 'Tiết 4,5', 'Thứ 4,6'),
('56T24', 'Tiết 5,6', 'Thứ 2,4'),
('56T46', 'Tiết 5,6', 'Thứ 4,6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chuyennganh`
--
ALTER TABLE `chuyennganh`
  ADD PRIMARY KEY (`maCN`),
  ADD KEY `maNganh` (`maNganh`);

--
-- Indexes for table `diadiemhoc`
--
ALTER TABLE `diadiemhoc`
  ADD PRIMARY KEY (`maDD`);

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
-- Indexes for table `lichtrinh`
--
ALTER TABLE `lichtrinh`
  ADD PRIMARY KEY (`maLT`),
  ADD KEY `maGV` (`maGV`),
  ADD KEY `maLHP` (`maLHP`);

--
-- Indexes for table `lop`
--
ALTER TABLE `lop`
  ADD PRIMARY KEY (`maLop`),
  ADD KEY `maCN` (`maCN`);

--
-- Indexes for table `lophp`
--
ALTER TABLE `lophp`
  ADD PRIMARY KEY (`maLHP`),
  ADD KEY `maTGH` (`maTGH`),
  ADD KEY `maDD` (`maDD`),
  ADD KEY `maMon` (`maMon`),
  ADD KEY `maTiet` (`maTiet`);

--
-- Indexes for table `mon`
--
ALTER TABLE `mon`
  ADD PRIMARY KEY (`maMon`),
  ADD KEY `maNganh` (`maNganh`);

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
-- Indexes for table `tiethoc`
--
ALTER TABLE `tiethoc`
  ADD PRIMARY KEY (`maTiet`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chuyennganh`
--
ALTER TABLE `chuyennganh`
  ADD CONSTRAINT `chuyennganh_ibfk_1` FOREIGN KEY (`maNganh`) REFERENCES `nganh` (`maNganh`);

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
-- Constraints for table `lichtrinh`
--
ALTER TABLE `lichtrinh`
  ADD CONSTRAINT `lichtrinh_ibfk_1` FOREIGN KEY (`maGV`) REFERENCES `giangvien` (`maGV`),
  ADD CONSTRAINT `lichtrinh_ibfk_2` FOREIGN KEY (`maLHP`) REFERENCES `lophp` (`maLHP`);

--
-- Constraints for table `lop`
--
ALTER TABLE `lop`
  ADD CONSTRAINT `lop_ibfk_1` FOREIGN KEY (`maCN`) REFERENCES `chuyennganh` (`maCN`);

--
-- Constraints for table `lophp`
--
ALTER TABLE `lophp`
  ADD CONSTRAINT `lophp_ibfk_1` FOREIGN KEY (`maTGH`) REFERENCES `thoigianhoc` (`maTGH`),
  ADD CONSTRAINT `lophp_ibfk_2` FOREIGN KEY (`maDD`) REFERENCES `diadiemhoc` (`maDD`),
  ADD CONSTRAINT `lophp_ibfk_3` FOREIGN KEY (`maMon`) REFERENCES `mon` (`maMon`),
  ADD CONSTRAINT `lophp_ibfk_4` FOREIGN KEY (`maTiet`) REFERENCES `tiethoc` (`maTiet`);

--
-- Constraints for table `mon`
--
ALTER TABLE `mon`
  ADD CONSTRAINT `mon_ibfk_1` FOREIGN KEY (`maNganh`) REFERENCES `nganh` (`maNganh`);

--
-- Constraints for table `quanly`
--
ALTER TABLE `quanly`
  ADD CONSTRAINT `quanly_ibfk_1` FOREIGN KEY (`maTK`) REFERENCES `taikhoan` (`maTK`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
