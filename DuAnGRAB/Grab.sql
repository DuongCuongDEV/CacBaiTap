-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th12 01, 2022 lúc 02:38 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `Grab`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gioi_tinh`
--

-- create database Grab;
-- USE Grab;
CREATE TABLE `gioi_tinh` (
  `ma_gioi_tinh` varchar(255) NOT NULL,
  `ten_gioi_tinh` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `gioi_tinh`
--
select * from `gioi_tinh`;
INSERT INTO `gioi_tinh` (`ma_gioi_tinh`, `ten_gioi_tinh`) VALUES
('G1', 'Nam'),
('G2', 'Nữ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hang_xe`
--

CREATE TABLE `hang_xe` (
  `ma_hang_xe` varchar(255) NOT NULL,
  `ten_hang_xe` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hang_xe`
--

INSERT INTO `hang_xe` (`ma_hang_xe`, `ten_hang_xe`) VALUES
('B1', 'Honda'),
('B2', 'Suzuki'),
('B3', 'Yamaha');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `huyen`
--

CREATE TABLE `huyen` (
  `ma_huyen` varchar(255) NOT NULL,
  `ten_huyen` varchar(255) DEFAULT NULL,
  `ma_tinh` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `huyen`
--

INSERT INTO `huyen` (`ma_huyen`, `ten_huyen`, `ma_tinh`) VALUES
('H1', 'Cầu Giấy', 'T2'),
('H2', 'Sầm Sơn', 'T1'),
('H3', 'Liên Chiểu', 'T3'),
('H4', 'Ninh Kiều', 'T4'),
('H5', 'Ngô Quyền', 'T5');



-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_phuong_tien`
--

CREATE TABLE `loai_phuong_tien` (
  `ma_loai_phuong_tien` varchar(255) NOT NULL,
  `ten_loai_phuong_tien` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `loai_phuong_tien`
--

INSERT INTO `loai_phuong_tien` (`ma_loai_phuong_tien`, `ten_loai_phuong_tien`) VALUES
('PT1', 'Xe máy'),
('PT2', 'Ô tô');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_xe`
--

CREATE TABLE `loai_xe` (
  `ma_loai_xe` varchar(255) NOT NULL,
  `ten_loai_xe` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `loai_xe`
--

INSERT INTO `loai_xe` (`ma_loai_xe`, `ten_loai_xe`) VALUES
('A1', 'Sh-mode'),
('A2', 'Wave alpha'),
('A3', 'Exciter');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phuong_tien_nguoi_dung`
--

CREATE TABLE `phuong_tien_nguoi_dung` (
  `ma_nguoi_dung` int(11) DEFAULT NULL,
  `ma_phuong_tien` varchar(255) DEFAULT NULL,
  `ma_loai_xe` varchar(255) DEFAULT NULL,
  `bien_so_xe` varchar(255) NOT NULL,
  `ma_hang_xe` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quyen_doi_tuong`
--

CREATE TABLE `quyen_doi_tuong` (
  `ma_quyen` varchar(255) NOT NULL,
  `ten_quyen` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

select * from quyen_doi_tuong;
--
-- Đang đổ dữ liệu cho bảng `quyen_doi_tuong`
--

INSERT INTO `quyen_doi_tuong` (`ma_quyen`, `ten_quyen`) VALUES
('Q1', 'Tài xế'),
('Q2', 'Khách hàng'),
('Q3', 'Admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `Thong_tin_chuyen_xe`
--

CREATE TABLE `Thong_tin_chuyen_xe` (
  `ma_chuyen` int(11) NOT NULL,
  `ma_nguoi_dat` int(11) DEFAULT NULL,
  `ma_tai_xe` int(11) DEFAULT NULL,
  `ma_trang_thai_chuyen_di` varchar(255) DEFAULT NULL,
  `longitude_bat_dau` varchar(255) DEFAULT NULL,
  `laitude_bat_dau` varchar(255) DEFAULT NULL,
  `longitude_ket_thuc` varchar(255) DEFAULT NULL,
  `laitude_ket_thuc` varchar(255) DEFAULT NULL,
  `do_dai_quang_duong` int(11) DEFAULT NULL,
  `thanh_tien` float DEFAULT NULL,
  `ma_giam_gia` varchar(40) DEFAULT NULL,
  `thoi_gian_dat` datetime DEFAULT NULL,
  `thoi_gian_hoan_thanh` datetime DEFAULT NULL,
  `ghi_chu` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thong_tin_nguoi_dung`
--

CREATE TABLE `thong_tin_nguoi_dung` (
  `ma_nguoi_dung` int(11) primary key NOT NULL,
  `ho_va_ten` varchar(255) DEFAULT NULL,
  `anh_dai_dien` varchar(255) DEFAULT NULL,
  `sdt1` int(11) DEFAULT NULL,
  `sdt2` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `ma_gioi_tinh` varchar(255) DEFAULT NULL,
  `ngay_sinh` date DEFAULT NULL,
  `dia_chi_chi_tiet` varchar(255) DEFAULT NULL,
  `ma_xa` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thong_tin_tai_Khoan`
--

CREATE TABLE `thong_tin_tai_Khoan` (
  `maNguoiDung` int(11) DEFAULT NULL,
  `maQuyenNguoiDung` varchar(11) DEFAULT NULL,
  `ngayTao` datetime DEFAULT NULL,
  `ngayCapNhatCuoi` datetime DEFAULT NULL,
  `bienSoXe` varchar(255) DEFAULT NULL,
  `ma_trang_thai` varchar(255) DEFAULT NULL,
  `maNguoiTao` int(11) DEFAULT NULL,
  `tenDangNhap` varchar(255) NOT NULL primary key,
  `matKhau` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `Grab`.`thong_tin_tai_Khoan` ADD FOREIGN KEY (`maNguoiDung`) REFERENCES `Grab`.`thong_tin_nguoi_dung` (`ma_nguoi_dung`);
ALTER TABLE `Grab`.`thong_tin_tai_Khoan` ADD FOREIGN KEY (`maQuyenNguoiDung`) REFERENCES `Grab`.`quyen_doi_tuong` (`ma_quyen`);
ALTER TABLE `Grab`.`thong_tin_tai_Khoan` ADD FOREIGN KEY (`ma_trang_thai`) REFERENCES `Grab`.`trang_thai` (`ma_trang_thai`);
ALTER TABLE `Grab`.`thong_tin_tai_Khoan` ADD FOREIGN KEY (`maNguoiTao`) REFERENCES `Grab`.`thong_tin_nguoi_dung` (`ma_nguoi_dung`);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tinh`
--

CREATE TABLE `tinh` (
  `ma_tinh` varchar(255) NOT NULL,
  `ten_tinh` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tinh`
--

INSERT INTO `tinh` (`ma_tinh`, `ten_tinh`) VALUES
('T1', 'Thanh Hoá'),
('T2', 'Hà Nội'),
('T3', 'Đà Nẵng'),
('T4', 'Cần Thơ'),
('T5', 'Hải Phòng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trang_thai`
--

CREATE TABLE `trang_thai` (
  `ma_trang_thai` varchar(255) NOT NULL,
  `ten_trang_thai` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `trang_thai`
--

INSERT INTO `trang_thai` (`ma_trang_thai`, `ten_trang_thai`) VALUES
('C1', 'Online'),
('C2', 'Offline'),
('C3', 'Tạm khoá'),
('C4', 'Khoá'),
('C5', 'Đang thực hiện'),
('C6', 'Đã huỷ'),
('C7', 'Đã hoàn thành');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `xa`
--

CREATE TABLE `xa` (
  `ma_xa` varchar(255) NOT NULL,
  `ten_xa` varchar(255) DEFAULT NULL,
  `ma_huyen` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


SELECT tinh.ten_tinh, huyen.ma_huyen
FROM tinh
LEFT JOIN huyen on tinh.ma_tinh = huyen.ma_tinh
ORDER BY tinh.ten_tinh;

SELECT huyen.ten_huyen, tinh.ten_tinh
FROM tinh
INNER JOIN huyen
ON huyen.ma_tinh=tinh.ma_tinh;

--
-- Đang đổ dữ liệu cho bảng `xa`
--

INSERT INTO `xa` (`ma_xa`, `ten_xa`, `ma_huyen`) VALUES
('X1', 'Dịch Vọng', 'H1'),
('X2', 'Quảng Châu', 'H2'),
('X3', 'Hoà Minh', 'H3'),
('X4', 'An Khánh', 'H4'),
('X5', 'Máy Chai', 'H5');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `gioi_tinh`
--
ALTER TABLE `gioi_tinh`
  ADD PRIMARY KEY (`ma_gioi_tinh`);

--
-- Chỉ mục cho bảng `hang_xe`
--
ALTER TABLE `hang_xe`
  ADD PRIMARY KEY (`ma_hang_xe`);

--
-- Chỉ mục cho bảng `huyen`
--
ALTER TABLE `huyen`
  ADD PRIMARY KEY (`ma_huyen`),
  ADD KEY `ma_tinh` (`ma_tinh`);

--
-- Chỉ mục cho bảng `loai_phuong_tien`
--
ALTER TABLE `loai_phuong_tien`
  ADD PRIMARY KEY (`ma_loai_phuong_tien`);

--
-- Chỉ mục cho bảng `loai_xe`
--
ALTER TABLE `loai_xe`
  ADD PRIMARY KEY (`ma_loai_xe`);

--
-- Chỉ mục cho bảng `phuong_tien_nguoi_dung`
--
ALTER TABLE `phuong_tien_nguoi_dung`
  ADD PRIMARY KEY (`bien_so_xe`),
  ADD KEY `ma_phuong_tien` (`ma_phuong_tien`),
  ADD KEY `ma_loai_xe` (`ma_loai_xe`),
  ADD KEY `ma_hang_xe` (`ma_hang_xe`),
  ADD KEY `ma_nguoi_dung` (`ma_nguoi_dung`);

--
-- Chỉ mục cho bảng `quyen_doi_tuong`
--
ALTER TABLE `quyen_doi_tuong`
  ADD PRIMARY KEY (`ma_quyen`);

--
-- Chỉ mục cho bảng `Thong_tin_chuyen_xe`
--
ALTER TABLE `Thong_tin_chuyen_xe`
  ADD PRIMARY KEY (`ma_chuyen`),
  ADD KEY `ma_nguoi_dat` (`ma_nguoi_dat`),
  ADD KEY `ma_tai_xe` (`ma_tai_xe`),
  ADD KEY `ma_trang_thai_chuyen_di` (`ma_trang_thai_chuyen_di`);

--
-- Chỉ mục cho bảng `thong_tin_nguoi_dung`
--
ALTER TABLE `thong_tin_nguoi_dung`
  ADD PRIMARY KEY (`ma_nguoi_dung`),
  ADD KEY `ma_xa` (`ma_xa`),
  ADD KEY `ma_gioi_tinh` (`ma_gioi_tinh`);

--
-- Chỉ mục cho bảng `thong_tin_tai_Khoan`
--
ALTER TABLE `thong_tin_tai_Khoan`
  ADD PRIMARY KEY (`tenDangNhap`);

--
-- Chỉ mục cho bảng `tinh`
--
ALTER TABLE `tinh`
  ADD PRIMARY KEY (`ma_tinh`);

--
-- Chỉ mục cho bảng `trang_thai`
--
ALTER TABLE `trang_thai`
  ADD PRIMARY KEY (`ma_trang_thai`);

--
-- Chỉ mục cho bảng `xa`
--
ALTER TABLE `xa`
  ADD PRIMARY KEY (`ma_xa`),
  ADD KEY `ma_huyen` (`ma_huyen`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `Thong_tin_chuyen_xe`
--
ALTER TABLE `Thong_tin_chuyen_xe`
  MODIFY `ma_chuyen` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `thong_tin_nguoi_dung`
--
ALTER TABLE `thong_tin_nguoi_dung`
  MODIFY `ma_nguoi_dung` int(11) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `huyen`
--
ALTER TABLE `huyen`
  ADD CONSTRAINT `huyen_ibfk_1` FOREIGN KEY (`ma_tinh`) REFERENCES `tinh` (`ma_tinh`);

--
-- Các ràng buộc cho bảng `phuong_tien_nguoi_dung`
--
ALTER TABLE `phuong_tien_nguoi_dung`
  ADD CONSTRAINT `phuong_tien_nguoi_dung_ibfk_1` FOREIGN KEY (`ma_phuong_tien`) REFERENCES `loai_phuong_tien` (`ma_loai_phuong_tien`),
  ADD CONSTRAINT `phuong_tien_nguoi_dung_ibfk_2` FOREIGN KEY (`ma_loai_xe`) REFERENCES `loai_xe` (`ma_loai_xe`),
  ADD CONSTRAINT `phuong_tien_nguoi_dung_ibfk_3` FOREIGN KEY (`ma_hang_xe`) REFERENCES `hang_xe` (`ma_hang_xe`),
  ADD CONSTRAINT `phuong_tien_nguoi_dung_ibfk_4` FOREIGN KEY (`ma_nguoi_dung`) REFERENCES `thong_tin_nguoi_dung` (`ma_nguoi_dung`);

--
-- Các ràng buộc cho bảng `Thong_tin_chuyen_xe`
--
ALTER TABLE `Thong_tin_chuyen_xe`
  ADD CONSTRAINT `thong_tin_chuyen_xe_ibfk_1` FOREIGN KEY (`ma_nguoi_dat`) REFERENCES `thong_tin_nguoi_dung` (`ma_nguoi_dung`),
  ADD CONSTRAINT `thong_tin_chuyen_xe_ibfk_2` FOREIGN KEY (`ma_tai_xe`) REFERENCES `thong_tin_nguoi_dung` (`ma_nguoi_dung`),
  ADD CONSTRAINT `thong_tin_chuyen_xe_ibfk_3` FOREIGN KEY (`ma_trang_thai_chuyen_di`) REFERENCES `trang_thai` (`ma_trang_thai`);

--
-- Các ràng buộc cho bảng `thong_tin_nguoi_dung`
--
ALTER TABLE `thong_tin_nguoi_dung`
  ADD CONSTRAINT `thong_tin_nguoi_dung_ibfk_1` FOREIGN KEY (`ma_xa`) REFERENCES `xa` (`ma_xa`),
  ADD CONSTRAINT `thong_tin_nguoi_dung_ibfk_2` FOREIGN KEY (`ma_gioi_tinh`) REFERENCES `gioi_tinh` (`ma_gioi_tinh`);

--
-- Các ràng buộc cho bảng `xa`
--
ALTER TABLE `xa`
  ADD CONSTRAINT `xa_ibfk_1` FOREIGN KEY (`ma_huyen`) REFERENCES `huyen` (`ma_huyen`);
COMMIT;

INSERT INTO `Grab`.`thong_tin_nguoi_dung` (`ho_va_ten`, `anh_dai_dien`,
 `sdt1`, `email`, `ma_gioi_tinh`, `ngay_sinh`, `dia_chi_chi_tiet`, `ma_xa`) 
 value ('Duong Van Cuong', 'anh1.png', 0823059750, 'cuongdvdev03@gmail.com', 'G1', '2003-09-09', 'Ngách 66/18', 'X1');

INSERT INTO `Grab`.`thong_tin_tai_Khoan` (`maNguoiDung`, `maQuyenNguoiDung`, `ngayTao`, `ngayCapNhatCuoi`, `bienSoXe`, `ma_trang_thai`, `maNguoiTao`, `tenDangNhap`, `matKhau`) VALUES ('3', 'Q1', '2022-11-23 12:30', '2022-12-27 13:20', '29T-99999', 'C1', '3', '0333230603', '123@');
select * from thong_tin_nguoi_dung;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
