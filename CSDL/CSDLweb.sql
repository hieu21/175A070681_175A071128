-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 30, 2019 lúc 10:32 AM
-- Phiên bản máy phục vụ: 10.4.8-MariaDB
-- Phiên bản PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `project01`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giangvien`
--

CREATE TABLE `giangvien` (
  `maGV` varchar(10) NOT NULL,
  `hoTenGV` varchar(30) DEFAULT NULL,
  `ngaySinh` date DEFAULT NULL,
  `diaChi` varchar(30) DEFAULT NULL,
  `maTK` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `giangvien`
--

INSERT INTO `giangvien` (`maGV`, `hoTenGV`, `ngaySinh`, `diaChi`, `maTK`) VALUES
('ma02', 'hung', '1999-11-11', 'time city', 'ma02'),
('ma03', 'hoang', '1999-05-12', 'time city', 'ma03');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giangvien_mon`
--

CREATE TABLE `giangvien_mon` (
  `maGV` varchar(10) NOT NULL,
  `maMon` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `giangvien_mon`
--

INSERT INTO `giangvien_mon` (`maGV`, `maMon`) VALUES
('ma02', 'M01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kehoachgiangday`
--

CREATE TABLE `kehoachgiangday` (
  `maKHGD` varchar(10) NOT NULL,
  `baiHocDK` varchar(50) DEFAULT NULL,
  `diaDiemDK` varchar(30) DEFAULT NULL,
  `thoiGianDK` datetime DEFAULT NULL,
  `maGV` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `kehoachgiangday`
--

INSERT INTO `kehoachgiangday` (`maKHGD`, `baiHocDK`, `diaDiemDK`, `thoiGianDK`, `maGV`) VALUES
('KHGD01', 'Toán', 'B5', '2019-12-30 00:00:00', 'ma02');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lichtrinhthuchien`
--

CREATE TABLE `lichtrinhthuchien` (
  `maLTTH` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `baiHocTH` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `diaDiemTH` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `thoiGianTH` datetime DEFAULT NULL,
  `maGV` varchar(10) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lichtrinhthuchien`
--

INSERT INTO `lichtrinhthuchien` (`maLTTH`, `baiHocTH`, `diaDiemTH`, `thoiGianTH`, `maGV`) VALUES
('LTTH01', 'Hóa', 'A2', '2020-10-10 00:00:00', 'ma02');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lmh_lhp`
--

CREATE TABLE `lmh_lhp` (
  `maLHP` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `maLMH` varchar(10) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lop_hocphan`
--

CREATE TABLE `lop_hocphan` (
  `maLHP` varchar(10) NOT NULL,
  `maTGH` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `lop_hocphan`
--

INSERT INTO `lop_hocphan` (`maLHP`, `maTGH`) VALUES
('LHP01', 'TGH01'),
('LHP02', 'TGH02'),
('LHP03', 'TGH03'),
('LHP04', 'TGH04');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lop_monhoc`
--

CREATE TABLE `lop_monhoc` (
  `maLMH` varchar(10) NOT NULL,
  `maMon` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `lop_monhoc`
--

INSERT INTO `lop_monhoc` (`maLMH`, `maMon`) VALUES
('LMH01', 'M01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mon`
--

CREATE TABLE `mon` (
  `maMon` varchar(10) NOT NULL,
  `tenMon` varchar(30) DEFAULT NULL,
  `maNganh` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `mon`
--

INSERT INTO `mon` (`maMon`, `tenMon`, `maNganh`) VALUES
('M01', 'Công nghệ Web', 'N01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nganh`
--

CREATE TABLE `nganh` (
  `maNganh` varchar(10) NOT NULL,
  `tenNganh` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nganh`
--

INSERT INTO `nganh` (`maNganh`, `tenNganh`) VALUES
('N01', 'Công nghệ thông tin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quanly`
--

CREATE TABLE `quanly` (
  `maQL` varchar(10) NOT NULL,
  `hoTenQL` varchar(30) DEFAULT NULL,
  `ngaySinh` date DEFAULT NULL,
  `diaChi` varchar(30) DEFAULT NULL,
  `maTK` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `quanly`
--

INSERT INTO `quanly` (`maQL`, `hoTenQL`, `ngaySinh`, `diaChi`, `maTK`) VALUES
('ma01', 'duc', '1992-10-05', 'royal city', 'ma01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `maTK` varchar(10) NOT NULL,
  `tenTK` varchar(30) DEFAULT NULL,
  `matKhau` varchar(30) DEFAULT NULL,
  `capDo` tinyint(4) DEFAULT NULL,
  `ngayTao` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`maTK`, `tenTK`, `matKhau`, `capDo`, `ngayTao`) VALUES
('ma01', 'user1', '123456', 2, '2019-12-27 08:53:42'),
('ma02', 'user2', '1234566', 1, '2019-12-25 10:00:10'),
('ma03', 'user3', '123456', 1, '2019-12-27 09:16:49'),
('TK03', 'admin01', '123456', 3, '2019-12-21 07:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thoigianhoc`
--

CREATE TABLE `thoigianhoc` (
  `maTGH` varchar(10) NOT NULL,
  `namHoc` int(11) DEFAULT NULL,
  `hocKy` tinyint(4) DEFAULT NULL,
  `giaiDoan` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `thoigianhoc`
--

INSERT INTO `thoigianhoc` (`maTGH`, `namHoc`, `hocKy`, `giaiDoan`) VALUES
('TGH01', 2019, 1, 1),
('TGH02', 2019, 1, 2),
('TGH03', 2019, 2, 1),
('TGH04', 2019, 2, 2);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `giangvien`
--
ALTER TABLE `giangvien`
  ADD PRIMARY KEY (`maGV`),
  ADD KEY `maTK` (`maTK`);

--
-- Chỉ mục cho bảng `giangvien_mon`
--
ALTER TABLE `giangvien_mon`
  ADD PRIMARY KEY (`maGV`,`maMon`),
  ADD KEY `maMon` (`maMon`);

--
-- Chỉ mục cho bảng `kehoachgiangday`
--
ALTER TABLE `kehoachgiangday`
  ADD PRIMARY KEY (`maKHGD`),
  ADD KEY `maGV` (`maGV`);

--
-- Chỉ mục cho bảng `lichtrinhthuchien`
--
ALTER TABLE `lichtrinhthuchien`
  ADD PRIMARY KEY (`maLTTH`),
  ADD KEY `maGV` (`maGV`);

--
-- Chỉ mục cho bảng `lmh_lhp`
--
ALTER TABLE `lmh_lhp`
  ADD KEY `maLHP` (`maLHP`),
  ADD KEY `maLMH` (`maLMH`);

--
-- Chỉ mục cho bảng `lop_hocphan`
--
ALTER TABLE `lop_hocphan`
  ADD PRIMARY KEY (`maLHP`),
  ADD KEY `maTGH` (`maTGH`);

--
-- Chỉ mục cho bảng `lop_monhoc`
--
ALTER TABLE `lop_monhoc`
  ADD PRIMARY KEY (`maLMH`),
  ADD KEY `maMon` (`maMon`);

--
-- Chỉ mục cho bảng `mon`
--
ALTER TABLE `mon`
  ADD PRIMARY KEY (`maMon`),
  ADD KEY `maNganh` (`maNganh`);

--
-- Chỉ mục cho bảng `nganh`
--
ALTER TABLE `nganh`
  ADD PRIMARY KEY (`maNganh`);

--
-- Chỉ mục cho bảng `quanly`
--
ALTER TABLE `quanly`
  ADD PRIMARY KEY (`maQL`),
  ADD KEY `maTK` (`maTK`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`maTK`);

--
-- Chỉ mục cho bảng `thoigianhoc`
--
ALTER TABLE `thoigianhoc`
  ADD PRIMARY KEY (`maTGH`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `giangvien`
--
ALTER TABLE `giangvien`
  ADD CONSTRAINT `giangvien_ibfk_1` FOREIGN KEY (`maTK`) REFERENCES `taikhoan` (`maTK`);

--
-- Các ràng buộc cho bảng `giangvien_mon`
--
ALTER TABLE `giangvien_mon`
  ADD CONSTRAINT `giangvien_mon_ibfk_1` FOREIGN KEY (`maGV`) REFERENCES `giangvien` (`maGV`),
  ADD CONSTRAINT `giangvien_mon_ibfk_2` FOREIGN KEY (`maMon`) REFERENCES `mon` (`maMon`);

--
-- Các ràng buộc cho bảng `kehoachgiangday`
--
ALTER TABLE `kehoachgiangday`
  ADD CONSTRAINT `kehoachgiangday_ibfk_1` FOREIGN KEY (`maGV`) REFERENCES `giangvien` (`maGV`);

--
-- Các ràng buộc cho bảng `lichtrinhthuchien`
--
ALTER TABLE `lichtrinhthuchien`
  ADD CONSTRAINT `lichtrinhthuchien_ibfk_1` FOREIGN KEY (`maGV`) REFERENCES `giangvien` (`maGV`);

--
-- Các ràng buộc cho bảng `lmh_lhp`
--
ALTER TABLE `lmh_lhp`
  ADD CONSTRAINT `lmh_lhp_ibfk_1` FOREIGN KEY (`maLHP`) REFERENCES `lop_hocphan` (`maLHP`),
  ADD CONSTRAINT `lmh_lhp_ibfk_2` FOREIGN KEY (`maLMH`) REFERENCES `lop_monhoc` (`maLMH`);

--
-- Các ràng buộc cho bảng `lop_hocphan`
--
ALTER TABLE `lop_hocphan`
  ADD CONSTRAINT `lop_hocphan_ibfk_1` FOREIGN KEY (`maTGH`) REFERENCES `thoigianhoc` (`maTGH`);

--
-- Các ràng buộc cho bảng `lop_monhoc`
--
ALTER TABLE `lop_monhoc`
  ADD CONSTRAINT `lop_monhoc_ibfk_1` FOREIGN KEY (`maMon`) REFERENCES `mon` (`maMon`);

--
-- Các ràng buộc cho bảng `mon`
--
ALTER TABLE `mon`
  ADD CONSTRAINT `mon_ibfk_1` FOREIGN KEY (`maNganh`) REFERENCES `nganh` (`maNganh`);

--
-- Các ràng buộc cho bảng `quanly`
--
ALTER TABLE `quanly`
  ADD CONSTRAINT `quanly_ibfk_1` FOREIGN KEY (`maTK`) REFERENCES `taikhoan` (`maTK`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
