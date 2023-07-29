create database QuanLyBanHang
go 
use QuanLyBanHang
go

create table TinhTP(
MaTP varchar(10) not null,
TenTP varchar(30) not null,
constraint pk_TinhTP primary key(MaTP)
)
go

create table DonVi(
MaDV char(2) not null,
TenDV varchar(30) not null,
constraint pk_Donvi primary key(MaDV)
)
go

create table NhaCungCap(
MaNCC int not null,
TenNCC varchar(30) not null,
DiaChi varchar(60) not null,
DienThoai varchar(11) not null,
constraint pk_NhaCungCap primary key(MaNCC)
)
go

create table MatHang(
MaMH int not null,
TenMH varchar(30) not null,
DonViTinh varchar(20) not null,
DonGia int not null,
HinhSP text null,
MaNCC int,
constraint pk_MatHang primary key(MaMH),
constraint fk_NhaCungCap_MatHang foreign key(MaNCC) references NhaCungCap(MaNCC)
)
go


create table KhachHang(
MaKH varchar(10) not null,
TenKH varchar(40) not null,
DiaChi varchar(60) not null,
DienThoai varchar(11) not null,
MaTP varchar(10) not null,
constraint pk_KhachHang primary key(MaKH),
constraint fk_KhachHang_TinhTP foreign key(MaTP) references TinhTP(MaTP)
)
go

create table NhanVien(
MaNV int not null,
HoLot varchar(30) not null,
TenNV varchar(20) not null,
Phai bit not null,
LuongCB int not null,
NgayNViec date not null,
DiaChiNV varchar(60) not null,
DienThoaiNV varchar(11) null,
HinhNV text null,
constraint pk_NhanVien primary key(MaNV)
)
go

create table DonDatHang(
MaDDH char(5) not null,
MaKH varchar(10) not null,
MaNV int not null,
NgayDH date not null,
NgayGiao date,
constraint pk_DonDatHang primary key(MaDDH)
)
go

create table ChiTietDDH(
MaDDH char(5) not null,
MaMH int not null,
SoLuong int not null,
GiamGia date,
constraint fk_ChiTietDDH_DonDatHang foreign key(MaDDH) references DonDatHang(MaDDH),
constraint fk_ChiTietDDH_MatHang foreign key(MaMH) references MatHang(MaMH)
)
go

create table ChamCong(
Thang tinyint not null,
Nam smallint not null,
MaMV int not null,
NgayCong tinyint,
constraint pk_ChamCong primary key(Thang),
constraint pk_ChamCong primary key(Nam),
constraint fk_ChamCong_NhanVien foreign key(MaNV) references NhanVien(MaNV)
)
go

INSERT INTO TinhTP(MaTP, TenTP)
VALUES('CT','Cần Thơ'),
('HN','Hà Nội'),
('HP','Hải Phòng'),
('HU','Huế'),
('ND','Nam Định'),
('NT','Nha Trang'),
('TP','TP. Hồ Chí Minh'),
('VI','Vinh')


INSERT INTO DonVi(MaDV, TenDV)
VALUES('GD','Ban Giám Đốc'),
('KT','Kế Toán'),
('NV','Nghiệp Vụ'),
('TC','Tổ Chức')

INSERT INTO NhaCungCap(MaNCC, TenNCC, DiaChi, DienThoai)
VALUES('1','CTY Đồ Hộp Tân Bình','TP.HCM','123456'),
('2','CTY Rượu Bình Tân','TP.HCM','342342'),
('3','CTY Đức Phát','TP.HCM','45346'),
('4','CTY Rau Qủa Việt Nam','Hà Nội','867567'),
('1','CTY Thủy Sản Tiền Giang','Tiền Giang','876876'),
('1','CTY Vinamilk','TP.HCM','646478'),
('1','CTY Nông Sản Lâm Đồng','Đà Lạt','565467')

INSERT INTO MatHang(MaMH, TenMH, DonVịTinh, DonGia, HinhSP, MaNCC)
VALUES('1','Rượu','Chai','$230.00','','7'),
('2','Tiêu','Hộp','$40.00','','7'),
('3','Bánh Kem','Cái','$10.00','','3'),
('4','Bơ','Kg','$38.00','','6'),
('5','Bánh Mì','Cái','$8.00','','3'),
('6','Nem','Kg','$23.79','','1'),
('7','Táo','Kg','$5.00','','4'),
('8','Cá hộp','Thùng','$62.50','','1')

INSERT INTO KhachHang(MaKH, TenKH, DiaChi, MaTP, DienThoai)
VALUES('CODACO','Cơ Khí Dân Dụng','388 Hòa Hảo P5','TP','1757828'),
('COTEC','Công nghệ mới','319 Nguyễn Trãi P7','CT','7657657'),
('DHP','Đại Hưng Phát','343 Nhật Tảo P16','NT','6546565'),
('GIAY32','Giày 32','105A Ngô Quyền P11','CT','6565468'),
('RUBIMEX','Công Nghiệp Cao Su','220 Lê Văn Sỹ','NT','2987912'),
('SAMECO','SXKD Dịch Vụ Tổng Hợp','56 Nguyễn Biểu P2','CT','1987987'),
('SAMECO','Cơ Khí Sài Gòn','156 Lê Đại Hành P7','HN','2397997'),
('TRACODI','Đầu Tư Phát Triển GTVT','Hàm Nghi Q1','HP','0976766'),
('VITICO','Hóa Nhựa Vĩnh Tiến','35 Tô Hiến Thành P14','TP','3987980'),
('VTP','Vạn Hưng Phát','119 Bạch Vân P17','HN','3765768'),
