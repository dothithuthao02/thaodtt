--c�u 1
SELECT MaMH, TenMH, DonViTinh, DonGia
FROM MatHang;

--c�u 2
SELECT MaMH, TenMH, DonViTinh, DonGia
FROM MatHang
WHERE DonGia >= 62;

--c�u 3
SELECT NC.MaNCC, NC.TenNCC, MH.MaMH, MH.TenMH, MH.DonViTinh, MH.DonGia
FROM NhaCungCap NC
JOIN MatHang MH ON NC.MaNCC = MH.MaNCC
WHERE NC.MaNCC IN (2, 4);

--c�u 4
SELECT NC.MaNCC, NC.TenNCC, NC.DiaChi, MH.MaMH, MH.TenMH, MH.DonViTinh, MH.DonGia
FROM NhaCungCap NC
JOIN MatHang MH ON NC.MaNCC = MH.MaNCC
WHERE NC.DiaChi LIKE '%TP.HCM%';

--c�u 5
SELECT DDH.MaDDH, DDH.NgayDH, KH.MaKH, KH.TenKH, CT.MaMH, MH.TenMH, CT.SoLuong
FROM DonDatHang DDH
JOIN KhachHang KH ON DDH.MaKH = KH.MaKH
JOIN ChiTietDDH CT ON DDH.MaDDH = CT.MaDDH
JOIN MatHang MH ON CT.MaMH = MH.MaMH
WHERE DDH.NgayDH BETWEEN '1997-01-01' AND '1997-01-31';

--c�u 6
SELECT DDH.MaDDH, DDH.NgayDH, DDH.NgayGiao, NV.MaNV, NV.HoLot + ' ' + NV.TenNV AS HoTenNV
FROM DonDatHang DDH
JOIN NhanVien NV ON DDH.MaNV = NV.MaNV
WHERE DDH.NgayDH >= '1997-02-01' AND DDH.NgayDH <= '1997-02-28';

--c�u 7
SELECT DDH.MaDDH, DDH.NgayDH, KH.MaKH, KH.TenKH, DDH.MaNV, NV.HoLot + ' ' + NV.TenNV AS HoTenNV
FROM DonDatHang DDH
JOIN KhachHang KH ON DDH.MaKH = KH.MaKH
JOIN NhanVien NV ON DDH.MaNV = NV.MaNV
WHERE DDH.NgayGiao < '1997-03-01' AND DDH.MaNV IN (4, 5);

--c�u 8
SELECT MaNV, HoLot, TenNV, DiaChiNV, NgayNViec, Phai
FROM NhanVien
WHERE Phai = 'M';

--c�u 9
SELECT MaDV, MaNV, HoLot, TenNV, Phai, LuongCB, NgayNViec
FROM NhanVien
WHERE NgayNViec BETWEEN '1991-07-01' AND '1992-11-30' AND LuongCB < 300;

--c�u 10
SELECT MaNV, HoLot, TenNV, Phai, DiaChiNV
FROM NhanVien
WHERE Phai = 'F' AND (DiaChiNV LIKE '%Q1%' OR DiaChiNV LIKE '%Q2%');

--c�u 11
SELECT CC.MaNV, NV.HoLot, NV.TenNV, NV.MaDV, DV.TenDV, CC.Thang, CC.Nam, CC.NgayCong
FROM ChamCong CC
JOIN NhanVien NV ON CC.MaNV = NV.MaNV
JOIN DonVi DV ON NV.MaDV = DV.MaDV
WHERE CC.Thang = 1 AND CC.Nam = 1999 AND CC.NgayCong < 25;

--c�u 12
SELECT DDH.MaDDH, DDH.NgayDH, DDH.NgayGiao, NV.MaNV, NV.HoLot + ' ' + NV.TenNV AS HoTenNV, NV.Phai
FROM DonDatHang DDH
JOIN NhanVien NV ON DDH.MaNV = NV.MaNV
WHERE NV.Phai = 'F';

--c�u 13
SELECT DDH.MaDDH, DDH.NgayDH, DDH.NgayGiao, KH.MaKH, KH.TenKH,
       DATEDIFF(DD, DDH.NgayDH, DDH.NgayGiao) AS ThoiGianGiaoHang
FROM DonDatHang DDH
JOIN KhachHang KH ON DDH.MaKH = KH.MaKH
WHERE DATEDIFF(DD, DDH.NgayDH, DDH.NgayGiao) <= 15;

--c�u 14
SELECT DDH.MaDDH, DDH.NgayDH, CT.MaMH, MH.TenMH, CT.SoLuong, MH.DonGia, (CT.SoLuong * MH.DonGia * (1 - CT.GiamGia)) AS ThanhTien
FROM DonDatHang DDH
JOIN ChiTietDDH CT ON DDH.MaDDH = CT.MaDDH
JOIN MatHang MH ON CT.MaMH = MH.MaMH;

--c�u 15
SELECT DATEPART(YEAR, DDH.NgayDH) AS Nam, DATEPART(QUARTER, DDH.NgayDH) AS Quy,
       DDH.NgayDH, DDH.MaDDH, DDH.MaKH, KH.TenKH, DDH.MaNV, NV.TenNV
FROM DonDatHang DDH
JOIN KhachHang KH ON DDH.MaKH = KH.MaKH
JOIN NhanVien NV ON DDH.MaNV = NV.MaNV
WHERE DATEPART(YEAR, DDH.NgayDH) = 1997 AND DATEPART(QUARTER, DDH.NgayDH) = 1;

--c�u 16
SELECT DDH.MaDDH, DDH.NgayDH, CT.MaMH, MH.TenMH
FROM DonDatHang DDH
JOIN ChiTietDDH CT ON DDH.MaDDH = CT.MaDDH
JOIN MatHang MH ON CT.MaMH = MH.MaMH
WHERE CT.MaMH IN (1, 3, 5, 7);

--c�u 17
SELECT MaTP, COUNT(MaKH) AS TongsoKH
FROM KhachHang
GROUP BY MaTP;

--c�u 18
SELECT MaDV, COUNT(MaNV) AS TongSoNV
FROM NhanVien
GROUP BY MaDV;

--c�u 19
SELECT DATEPART(YEAR, NgayDH) AS Nam, COUNT(MaDDH) AS TongSoDDH
FROM DonDatHang
GROUP BY DATEPART(YEAR, NgayDH);

--c�u 20
SELECT DATEPART(YEAR, NgayDH) AS Nam, MaDDH, NgayDH, NgayGiao,
       SUM(CT.SoLuong * MH.DonGia * (1 - CT.GiamGia)) AS TongTri
FROM DonDatHang DDH
JOIN ChiTietDDH CT ON DDH.MaDDH = CT.MaDDH
JOIN MatHang MH ON CT.MaMH = MH.MaMH
GROUP BY DATEPART(YEAR, NgayDH), MaDDH, NgayDH, NgayGiao;

--c�u 21
SELECT DATEPART(YEAR, DDH.NgayDH) AS Nam, DDH.MaKH, KH.TenKH,
       SUM(CT.SoLuong * MH.DonGia * (1 - CT.GiamGia)) AS TongTien
FROM DonDatHang DDH
JOIN ChiTietDDH CT ON DDH.MaDDH = CT.MaDDH
JOIN MatHang MH ON CT.MaMH = MH.MaMH
JOIN KhachHang KH ON DDH.MaKH = KH.MaKH
GROUP BY DATEPART(YEAR, DDH.NgayDH), DDH.MaKH, KH.TenKH;

--c�u 22
SELECT DDH.MaKH, KH.TenKH, 1998 AS Nam, 
       SUM(CT.SoLuong * MH.DonGia * (1 - CT.GiamGia)) AS TongTienMax
FROM DonDatHang DDH
JOIN ChiTietDDH CT ON DDH.MaDDH = CT.MaDDH
JOIN MatHang MH ON CT.MaMH = MH.MaMH
JOIN KhachHang KH ON DDH.MaKH = KH.MaKH
WHERE DATEPART(YEAR, DDH.NgayDH) = 1998
GROUP BY DDH.MaKH, KH.TenKH
HAVING SUM(CT.SoLuong * MH.DonGia * (1 - CT.GiamGia)) = (
    SELECT MAX(TongTien)
    FROM (
        SELECT DDH.MaKH, SUM(CT.SoLuong * MH.DonGia * (1 - CT.GiamGia)) AS TongTien
        FROM DonDatHang DDH
        JOIN ChiTietDDH CT ON DDH.MaDDH = CT.MaDDH
        JOIN MatHang MH ON CT.MaMH = MH.MaMH
        WHERE DATEPART(YEAR, DDH.NgayDH) = 1998
        GROUP BY DDH.MaKH
    ) AS T
);

--c�u 23
SELECT CT.MaMH, MH.TenMH, 1997 AS Nam, 
       SUM(CT.SoLuong * MH.DonGia * (1 - CT.GiamGia)) AS TongTienMax
FROM DonDatHang DDH
JOIN ChiTietDDH CT ON DDH.MaDDH = CT.MaDDH
JOIN MatHang MH ON CT.MaMH = MH.MaMH
WHERE DATEPART(YEAR, DDH.NgayDH) = 1997
GROUP BY CT.MaMH, MH.TenMH
HAVING SUM(CT.SoLuong * MH.DonGia * (1 - CT.GiamGia)) = (
    SELECT MAX(TongTien)
    FROM (
        SELECT CT.MaMH, SUM(CT.SoLuong * MH.DonGia * (1 - CT.GiamGia)) AS TongTien
        FROM DonDatHang DDH
        JOIN ChiTietDDH CT ON DDH.MaDDH = CT.MaDDH
        JOIN MatHang MH ON CT.MaMH = MH.MaMH
        WHERE DATEPART(YEAR, DDH.NgayDH) = 1997
        GROUP BY CT.MaMH
    ) AS T
);

--c�u 24
SELECT DDH.MaKH, KH.TenKH, KH.DiaChi,
       COUNT(DDH.MaDDH) AS SoDDH,
       COUNT(DDH.MaDDH) / 2 AS SoLichTang
FROM DonDatHang DDH
JOIN KhachHang KH ON DDH.MaKH = KH.MaKH
GROUP BY DDH.MaKH, KH.TenKH, KH.DiaChi;

--c�u 25
SELECT NV.MaDV, DV.TenDV, 1999 AS Nam, 
       SUM(NV.LuongCB * CC.NgayCong) AS TongLuong
FROM NhanVien NV
JOIN DonVi DV ON NV.MaDV = DV.MaDV
JOIN ChamCong CC ON NV.MaNV = CC.MaNV
WHERE CC.Nam = 1999
GROUP BY NV.MaDV, DV.TenDV;

--c�u 26
SELECT TOP 1 NV.MaDV, DV.TenDV, 1999 AS Nam, 
       SUM(NV.LuongCB * CC.NgayCong) AS TongLuongMax
FROM NhanVien NV
JOIN DonVi DV ON NV.MaDV = DV.MaDV
JOIN ChamCong CC ON NV.MaNV = CC.MaNV
WHERE CC.Nam = 1999
GROUP BY NV.MaDV, DV.TenDV
ORDER BY TongLuongMax DESC;

--c�u 27
SELECT *
INTO LuuDDH
FROM DonDatHang
WHERE DATEPART(YEAR, NgayDH) IN (1997, 1998, 1999);

DELETE FROM LuuDDH
WHERE DATEPART(YEAR, NgayDH) = 1997;

--c�u 28
DELETE FROM LuuDDH
WHERE DATEPART(YEAR, NgayDH) = 1997;

--c�u 29
UPDATE LuuDDH
SET GiamGia = GiamGia + 0.02
WHERE DATEPART(YEAR, NgayDH) = 1999;

--c�u 30
SELECT 1 AS Thang, 1999 AS Nam, MaNV, HoLot + ' ' + TenNV AS HoTen,
       LuongCB, NgayCong, LuongCB * NgayCong AS Luong
INTO Luong9901
FROM NhanVien
WHERE DATEPART(MONTH, NgayNViec) = 1 AND DATEPART(YEAR, NgayNViec) = 1999;

--c�u 31
UPDATE Luong9901
SET LuongCB = LuongCB * 1.1
WHERE Phai = 'M' AND NgayCong > 20;

UPDATE Luong9901
SET LuongCB = LuongCB * 1.2
WHERE Phai = 'F' AND NgayCong > 20;

--c�u 32
SELECT MH.MaMH, MH.TenMH
FROM MatHang MH
LEFT JOIN ChiTietDDH CT ON MH.MaMH = CT.MaMH
LEFT JOIN DonDatHang DDH ON CT.MaDDH = DDH.MaDDH
WHERE (DDH.NgayDH IS NULL OR DDH.NgayDH < '1998-05-01') AND (DDH.NgayGiao IS NULL OR DDH.NgayGiao >= '1997-05-01');