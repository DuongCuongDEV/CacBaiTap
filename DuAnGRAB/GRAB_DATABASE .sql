create database Grab;
drop database Grab;

CREATE TABLE `Grab`.`thong_tin_tai_Khoan` (
  `maNguoiDung` int,
  `maQuyenNguoiDung` int,
  `ngayTao` datetime,
  `ngayCapNhatCuoi` datetime,
  `bienSoXe` varchar(255),
  `ma_trang_thai` varchar(255),
  `maNguoiTao` int,
  `tenDangNhap` varchar(255) PRIMARY KEY,
  `matKhau` varchar(255)
);
select * from `Grab`.`quyen_doi_tuong`;

CREATE TABLE `Grab`.`quyen_doi_tuong` (
  `ma_quyen` varchar(255) PRIMARY KEY,
  `ten_quyen` varchar(255)
);
INSERT INTO `Grab`.`quyen_doi_tuong` (`ma_quyen`, `ten_quyen`) VALUES
('Q1', 'Tài xế');
INSERT INTO `Grab`.`quyen_doi_tuong` (`ma_quyen`, `ten_quyen`) VALUES
('Q2', 'Khách hàng');
INSERT INTO `Grab`.`quyen_doi_tuong` (`ma_quyen`, `ten_quyen`) VALUES
('Q3', 'Admin');


CREATE TABLE `Grab`.`tinh` (
  `ma_tinh` varchar(255) PRIMARY KEY,
  `ten_tinh` varchar(255)
);

INSERT INTO `Grab`.`tinh` (`ma_tinh`, `ten_tinh`) VALUES
('T1', 'Thanh Hoá'),
('T2', 'Hà Nội'),
('T3', 'Đà Nẵng'),
('T4', 'Cần Thơ'),
('T5', 'Hải Phòng');

CREATE TABLE `Grab`.`huyen` (
  `ma_huyen` varchar(255) PRIMARY KEY,
  `ten_huyen` varchar(255),
  `ma_tinh` varchar(255)
);
ALTER TABLE `Grab`.`huyen` ADD FOREIGN KEY (`ma_tinh`) REFERENCES `Grab`.`tinh` (`ma_tinh`);
INSERT INTO `Grab`.`huyen` (`ma_huyen`, `ten_huyen`, `ma_tinh`) VALUES
('H1', 'Cầu Giấy', 'T2'),
('H2', 'Sầm Sơn', 'T1'),
('H3', 'Liên Chiểu', 'T3'),
('H4', 'Ninh Kiều', 'T4'),
('H5', 'Ngô Quyền', 'T5');

CREATE TABLE `Grab`.`xa` (
  `ma_xa` varchar(255) PRIMARY KEY,
  `ten_xa` varchar(255),
  `ma_huyen` varchar(255)
);
ALTER TABLE `Grab`.`xa` ADD FOREIGN KEY (`ma_huyen`) REFERENCES `Grab`.`huyen` (`ma_huyen`);
INSERT INTO `Grab`.`xa` (`ma_xa`, `ten_xa`, `ma_huyen`) VALUES
('X1', 'Dịch Vọng', 'H1'),
('X2', 'Quảng Châu', 'H2'),
('X3', 'Hoà Minh', 'H3'),
('X4', 'An Khánh', 'H4'),
('X5', 'Máy Chai', 'H5');


CREATE TABLE `Grab`.`gioi_tinh` (
  `ma_gioi_tinh` varchar(255) PRIMARY KEY,
  `ten_gioi_tinh` varchar(255)
);

INSERT INTO `Grab`.`gioi_tinh` (`ma_gioi_tinh`, `ten_gioi_tinh`) VALUES
('G1', 'Nam'),
('G2', 'Nữ');

CREATE TABLE `Grab`.`loai_phuong_tien` (
  `ma_loai_phuong_tien` varchar(255) PRIMARY KEY,
  `ten_loai_phuong_tien` varchar(255)
);
INSERT INTO `Grab`.`loai_phuong_tien` (`ma_loai_phuong_tien`, `ten_loai_phuong_tien`) VALUES
('PT1', 'Xe máy'),
('PT2', 'Ô tô');


CREATE TABLE `Grab`.`hang_xe` (
  `ma_hang_xe` varchar(255) PRIMARY KEY,
  `ten_hang_xe` varchar(255)
);
INSERT INTO `Grab`.`hang_xe` (`ma_hang_xe`, `ten_hang_xe`) VALUES
('B1', 'Honda'),
('B2', 'Suzuki'),
('B3', 'Yamaha');


CREATE TABLE `Grab`.`loai_xe` (
  `ma_loai_xe` varchar(255) PRIMARY KEY,
  `ten_loai_xe` varchar(255)
);

INSERT INTO `Grab`.`loai_xe` (`ma_loai_xe`, `ten_loai_xe`) VALUES
('A1', 'Sh-mode'),
('A2', 'Wave alpha'),
('A3', 'Exciter');

CREATE TABLE `Grab`.`trang_thai` (
  `ma_trang_thai` varchar(255) PRIMARY KEY,
  `ten_trang_thai` varchar(255)
);

INSERT INTO `Grab`.`trang_thai` (`ma_trang_thai`, `ten_trang_thai`) VALUES
('C1', 'Online'),
('C2', 'Offline'),
('C3', 'Tạm khoá'),
('C4', 'Khoá');
INSERT INTO `Grab`.`trang_thai` (`ma_trang_thai`, `ten_trang_thai`) VALUES
('C5', 'Đang thực hiện'),
('C6', 'Đã huỷ'),
('C7', 'Đã hoàn thành');



CREATE TABLE `Grab`.`thong_tin_nguoi_dung` (
  `ma_nguoi_dung` int PRIMARY KEY auto_increment,
  `ho_va_ten` varchar(255),
  `anh_dai_dien` varchar(255),
  `sdt1` int,
  `sdt2` int,
  `email` varchar(255),
  `ma_gioi_tinh` varchar(255),
  `ngay_sinh` date,
  `dia_chi_chi_tiet` varchar(255),
  `ma_xa` varchar(255) 
);
SELECT * FROM `Grab`.`Thong_tin_chuyen_xe`;


ALTER TABLE `Grab`.`thong_tin_nguoi_dung` ADD FOREIGN KEY (`ma_xa`) REFERENCES `Grab`.`xa` (`ma_xa`);
ALTER TABLE `Grab`.`thong_tin_nguoi_dung` ADD FOREIGN KEY (`ma_gioi_tinh`) REFERENCES `Grab`.`gioi_tinh` (`ma_gioi_tinh`);

CREATE TABLE `Grab`.`phuong_tien_nguoi_dung` (
  `ma_nguoi_dung` int,
  `ma_phuong_tien` varchar(255),
  `ma_loai_xe` varchar(255),
  `bien_so_xe` varchar(255) PRIMARY KEY,
  `ma_hang_xe` varchar(255)
);
ALTER TABLE `Grab`.`phuong_tien_nguoi_dung` ADD FOREIGN KEY (`ma_phuong_tien`) REFERENCES `Grab`.`loai_phuong_tien` (`ma_loai_phuong_tien`);
ALTER TABLE `Grab`.`phuong_tien_nguoi_dung` ADD FOREIGN KEY (`ma_loai_xe`) REFERENCES `Grab`.`loai_xe` (`ma_loai_xe`);
ALTER TABLE `Grab`.`phuong_tien_nguoi_dung` ADD FOREIGN KEY (`ma_hang_xe`) REFERENCES `Grab`.`hang_xe` (`ma_hang_xe`);
ALTER TABLE `Grab`.`phuong_tien_nguoi_dung` ADD FOREIGN KEY (`ma_nguoi_dung`) REFERENCES `Grab`.`thong_tin_nguoi_dung` (`ma_nguoi_dung`);



CREATE TABLE `Grab`.`Thong_tin_chuyen_xe` (
  `ma_chuyen` int PRIMARY KEY auto_increment,
  `ma_nguoi_dat` int,
  `ma_tai_xe` int,
  `ma_trang_thai_chuyen_di` varchar(255),
  `longitude_bat_dau` varchar(255),
  `laitude_bat_dau` varchar(255),
  `longitude_ket_thuc` varchar(255),
  `laitude_ket_thuc` varchar(255),
  `do_dai_quang_duong` int,
  `thanh_tien` float,
  `ma_giam_gia` varchar(40),
  `thoi_gian_dat` datetime,
  `thoi_gian_hoan_thanh` datetime,
  `ghi_chu` varchar(255)
);
DROP TABLE `Grab`.`Thong_tin_chuyen_xe`;
ALTER TABLE `Grab`.`Thong_tin_chuyen_xe` ADD FOREIGN KEY (`ma_nguoi_dat`) REFERENCES `Grab`.`thong_tin_nguoi_dung` (`ma_nguoi_dung`);
ALTER TABLE `Grab`.`Thong_tin_chuyen_xe` ADD FOREIGN KEY (`ma_tai_xe`) REFERENCES `Grab`.`thong_tin_nguoi_dung` (`ma_nguoi_dung`);
ALTER TABLE `Grab`.`Thong_tin_chuyen_xe` ADD FOREIGN KEY (`ma_trang_thai_chuyen_di`) REFERENCES `Grab`.`trang_thai` (`ma_trang_thai`);


SELECT * FROM `Grab`.`Thong_tin_chuyen_xe` ;


INSERT INTO `Grab`.`thong_tin_nguoi_dung` (`ho_va_ten`, `anh_dai_dien`,
 `sdt1`, `email`, `ma_gioi_tinh`, `ngay_sinh`, `dia_chi_chi_tiet`, `ma_xa`) 
 value ('Duong Van Cuong', 'anh1.png', 0823059750, 'cuongdvdev03@gmail.com', 'G1', '2015-04-03', 'Ngách 66/18', 'X1');





