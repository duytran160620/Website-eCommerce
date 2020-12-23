-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 23, 2020 lúc 02:36 PM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `data`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `Username` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`Username`, `Password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietgiohang`
--

CREATE TABLE `chitietgiohang` (
  `idGH` int(11) NOT NULL,
  `idSP` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `DonGia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietgiohang`
--

INSERT INTO `chitietgiohang` (`idGH`, `idSP`, `SoLuong`, `DonGia`) VALUES
(1, 1, 1, 25990000),
(2, 6, 1, 21990000),
(3, 30, 2, 640000),
(4, 35, 1, 792000),
(5, 26, 1, 21990000),
(6, 13, 1, 5990000),
(7, 28, 1, 12390000),
(8, 5, 1, 27990000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `idGH` int(11) NOT NULL,
  `idKH` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `giohang`
--

INSERT INTO `giohang` (`idGH`, `idKH`) VALUES
(1, 1),
(2, 1),
(3, 2),
(4, 2),
(5, 3),
(6, 3),
(7, 4),
(8, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `idKH` int(11) NOT NULL,
  `TenKH` text COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` text COLLATE utf8_unicode_ci NOT NULL,
  `Username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `SDT` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`idKH`, `TenKH`, `DiaChi`, `Username`, `Password`, `SDT`) VALUES
(1, 'Trần Anh Duy', 'quận 7, TP.HCM', 'duyduy', 'duyduy123', '0909331234'),
(2, 'Trần Trung Anh', 'quận 3, TP.HCM', 'trunganh', 'trunganh123', '0909778833'),
(3, 'Đặng Thị Kim Kiều', 'quận 5, TP.HCM', 'kieukieu', 'kieukieu123', '0909867322'),
(4, 'Trần Nguyên Thảo', 'quận 1, TP.HCM', 'thaothao', 'thaothao123', '0909454577');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khosanpham`
--

CREATE TABLE `khosanpham` (
  `idSP` int(11) NOT NULL,
  `SLTon` int(11) NOT NULL,
  `SLHienTai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khosanpham`
--

INSERT INTO `khosanpham` (`idSP`, `SLTon`, `SLHienTai`) VALUES
(1, 10, 5),
(2, 0, 9),
(3, 0, 8),
(4, 17, 5),
(5, 18, 30),
(6, 40, 20),
(7, 46, 5),
(8, 28, 15),
(9, 18, 5),
(10, 10, 10),
(11, 19, 20),
(12, 0, 5),
(13, 0, 4),
(14, 29, 30),
(15, 0, 5),
(16, 18, 20),
(17, 19, 3),
(18, 19, 3),
(19, 0, 3),
(20, 0, 5),
(21, 20, 15),
(22, 20, 15),
(23, 2, 5),
(24, 5, 10),
(25, 1, 5),
(26, 3, 5),
(27, 2, 5),
(28, 9, 14),
(29, 50, 20),
(30, 10, 5),
(31, 10, 15),
(32, 9, 8),
(33, 1, 6),
(34, 10, 5),
(35, 15, 15),
(36, 2, 5),
(37, 20, 12),
(38, 0, 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhasanxuat`
--

CREATE TABLE `nhasanxuat` (
  `idNSX` int(11) NOT NULL,
  `TenNSX` text COLLATE utf8_unicode_ci NOT NULL,
  `urlHinh` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhasanxuat`
--

INSERT INTO `nhasanxuat` (`idNSX`, `TenNSX`, `urlHinh`) VALUES
(1, 'apple', 'https://cdn.tgdd.vn/Brand/1/Apple58-b_6.jpg'),
(2, 'asus', 'https://cdn.tgdd.vn/Brand/1/Asus44-b_1.png'),
(3, 'samsung', 'https://cdn.tgdd.vn/Brand/1/Samsung42-b_25.jpg'),
(4, 'oppo', 'https://cdn.tgdd.vn/Brand/1/OPPO42-b_5.jpg'),
(5, 'xiaomi', 'https://cdn.tgdd.vn/Brand/1/Xiaomi42-b_45.jpg'),
(6, 'hp', 'https://cdn.tgdd.vn/Brand/1/HP44-b_27.jpg'),
(7, 'dell', 'https://cdn.tgdd.vn/Brand/1/Dell44-b_2.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `idSP` int(11) NOT NULL,
  `TenSP` text COLLATE utf8_unicode_ci NOT NULL,
  `MoTaCT` text COLLATE utf8_unicode_ci NOT NULL,
  `idNSX` int(11) NOT NULL,
  `GiaSP` int(11) NOT NULL,
  `LoaiSP` int(11) NOT NULL,
  `urlHinh` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`idSP`, `TenSP`, `MoTaCT`, `idNSX`, `GiaSP`, `LoaiSP`, `urlHinh`) VALUES
(1, 'Điện thoại iPhone 11 Pro 64GB', 'Màn hình: OLED, 5.8\", Super Retina XDR\r\nHệ điều hành: iOS 13\r\nCamera sau: 3 camera 12 MP\r\nCamera trước: 12 MP\r\nCPU: Apple A13 Bionic 6 nhân\r\nRAM: 4 GB\r\nBộ nhớ trong: 64 GB\r\nDung lượng pin:	3046 mAh, có sạc nhanh', 1, 25990000, 1, 'https://cdn.tgdd.vn/Products/Images/42/188705/iphone-11-pro-xam-600x600-600x600.jpg'),
(2, 'Điện thoại iPhone SE 256GB (2020)\r\n\r\n', 'Màn hình: IPS LCD, 4.7\", Đang cập nhật\r\nHệ điều hành: iOS 13\r\nCamera sau: 12 MP\r\nCamera trước: 7 MP\r\nCPU: Apple A13 Bionic 6 nhân\r\nRAM: 3 GB\r\nBộ nhớ trong: 256 GB\r\nDung lượng pin:	1821 mAh, có sạc nhanh', 1, 15490000, 1, 'https://cdn.tgdd.vn/Products/Images/42/222631/iphone-se-128gb-2020-den-600x600.jpg'),
(3, 'Điện thoại iPhone 12 Pro Max 512GB\r\n\r\n', 'Màn hình: OLED, 6.7\", Super Retina XDR\r\nHệ điều hành: iOS 14\r\nCamera sau: 3 camera 12 MP\r\nCamera trước: 12 MP\r\nCPU: Apple A14 Bionic 6 nhân\r\nRAM: 6 GB\r\nBộ nhớ trong: 512 GB\r\nDung lượng pin:	3687 mAh, có sạc nhanh', 1, 40990000, 1, 'https://cdn.tgdd.vn/Products/Images/42/228744/iphone-12-pro-max-xam-new-600x600-600x600.jpg'),
(4, 'Điện thoại iPhone 12 mini 64GB', 'Màn hình: OLED, 5.4\", Super Retina XDR\r\nHệ điều hành: iOS 14\r\nCamera sau: 2 camera 12 MP\r\nCamera trước: 12 MP\r\nCPU: Apple A14 Bionic 6 nhân\r\nRAM: 4 GB\r\nBộ nhớ trong: 64 GB\r\nDung lượng pin:	2227 mAh, có sạc nhanh', 1, 19490000, 1, 'https://cdn.tgdd.vn/Products/Images/42/225380/iphone-mini-do-new-600x600-600x600.jpg'),
(5, 'Điện thoại Samsung Galaxy Note 20 Ultra', 'Màn hình: Dynamic AMOLED 2X, 6.9\", Quad HD+ (2K+)\r\nHệ điều hành: Android 10\r\nCamera sau: Chính 108 MP & Phụ 12 MP, 12 MP, cảm biến Laser AF\r\nCamera trước: 10 MP\r\nCPU: Exynos 990 8 nhân\r\nRAM: 8 GB\r\nBộ nhớ trong: 256 GB\r\nThẻ nhớ: MicroSD, hỗ trợ tối đa 1 TB\r\nDung lượng pin:	4500 mAh, có sạc nhanh', 3, 27990000, 1, 'https://cdn.tgdd.vn/Products/Images/42/220522/samsung-galaxy-note-20-ultra-vangdong-600x600-600x600.jpg'),
(6, 'Điện thoại Samsung Galaxy S20+', 'Màn hình: Dynamic AMOLED 2X, 6.7\", Quad HD+ (2K+)\r\nHệ điều hành: Android 10\r\nCamera sau: Chính 12 MP & Phụ 64 MP, 12 MP, TOF 3D\r\nCamera trước: 10 MP\r\nCPU: Exynos 990 8 nhân\r\nRAM: 8 GB\r\nBộ nhớ trong: 128 GB\r\nThẻ nhớ: MicroSD, hỗ trợ tối đa 1 TB\r\nDung lượng pin:	4500 mAh, có sạc nhanh', 3, 21990000, 1, 'https://cdn.tgdd.vn/Products/Images/42/217936/samsung-galaxy-s20-plus-xanh-600x600-600x600.jpg'),
(7, 'Điện thoại Samsung Galaxy Z Fold2 5G\r\n\r\n', 'Màn hình: Chính: Dynamic AMOLED, Phụ: Super AMOLED, Chính 7.59\" & Phụ 6.23\", Full HD+\r\nHệ điều hành: Android 10\r\nCamera sau: 3 camera 12 MP\r\nCamera trước: 10 MP\r\nCPU: Snapdragon 865+ 8 nhân\r\nRAM: 12 GB\r\nBộ nhớ trong: 256 GB\r\nDung lượng pin:	4500 mAh, có sạc nhanh', 3, 50000000, 1, 'https://cdn.tgdd.vn/Products/Images/42/226099/samsung-galaxy-z-fold-2-vang-dong-600x600.jpg'),
(8, 'Điện thoại Samsung Galaxy Z Flip', 'Màn hình chính: Dynamic AMOLED, Phụ: Super AMOLED, 6.7\", Quad HD (2K)\r\nHệ điều hành: Android 10\r\nCamera sau: 2 camera 12 MP\r\nCamera trước: 10 MP\r\nCPU: Snapdragon 855+ 8 nhân\r\nRAM: 8 GB\r\nBộ nhớ trong: 256 GB\r\nDung lượng pin:	3300 mAh, có sạc nhanh', 3, 36000000, 1, 'https://cdn.tgdd.vn/Products/Images/42/213022/samsung-galaxy-z-flip-600x600-1-600x600.jpg'),
(9, 'Điện thoại OPPO A93', 'Màn hình: AMOLED, 6.43\", Full HD+\r\nHệ điều hành: Android 10\r\nCamera sau: Chính 48 MP & Phụ 8 MP, 2 MP, 2 MP\r\nCamera trước: Chính 16 MP & Phụ 2 MP\r\nCPU: MediaTek Helio P95 8 nhân\r\nRAM: 8 GB\r\nBộ nhớ trong: 128 GB\r\nThẻ nhớ: MicroSD, hỗ trợ tối đa 256 GB\r\nDung lượng pin:	4000 mAh, có sạc nhanh', 4, 7490000, 1, 'https://cdn.tgdd.vn/Products/Images/42/229056/oppo-a93-trang-14-600x600.jpg'),
(10, 'Điện thoại OPPO Reno4', 'Màn hình: AMOLED, 6.4\", Full HD+\r\nHệ điều hành: Android 10\r\nCamera sau: Chính 48 MP & Phụ 8 MP, 2 MP, 2 MP\r\nCamera trước: Chính 32 MP & Phụ cảm biến thông minh A.I\r\nCPU: Snapdragon 720G 8 nhân\r\nRAM: 8 GB\r\nBộ nhớ trong: 128 GB\r\nThẻ nhớ: MicroSD, hỗ trợ tối đa 256 GB\r\nDung lượng pin:	4015 mAh, có sạc nhanh', 4, 8190000, 1, 'https://cdn.tgdd.vn/Products/Images/42/222596/oppo-reno4-xanh-600x600.jpg'),
(11, 'Điện thoại OPPO Find X2', 'Màn hình: AMOLED, 6.78\", Quad HD+ (2K+)\r\nHệ điều hành: Android 10\r\nCamera sau: Chính 48 MP & Phụ 13 MP, 12 MP\r\nCamera trước: 32 MP\r\nCPU: Snapdragon 865 8 nhân\r\nRAM: 12 GB\r\nBộ nhớ trong: 256 GB\r\nDung lượng pin:	4200 mAh, có sạc nhanh', 4, 19990000, 1, 'https://cdn.tgdd.vn/Products/Images/42/198150/oppo-find-x2-blue-600x600-1-600x600.jpg'),
(12, 'Điện thoại OPPO Reno3 Pro', 'Màn hình: Sunlight Super AMOLED, 6.4\", Full HD+\r\nHệ điều hành: Android 10\r\nCamera sau: Chính 64 MP & Phụ 13 MP, 8 MP, 2 MP\r\nCamera trước: Chính 44 MP & Phụ 2 MP\r\nCPU: MediaTek Helio P95 8 nhân\r\nRAM: 8 GB\r\nBộ nhớ trong: 256 GB\r\nThẻ nhớ: MicroSD, hỗ trợ tối đa 256 GB\r\nDung lượng pin:	4025 mAh, có sạc nhanh', 4, 8990000, 1, 'https://cdn.tgdd.vn/Products/Images/42/216172/oppo-reno3-pro-den-new-600x600-600x600.jpg'),
(13, 'Điện thoại Xiaomi Redmi Note 9S', 'Màn hình: IPS LCD, 6.67\", Full HD+\r\nHệ điều hành: Android 10\r\nCamera sau: Chính 48 MP & Phụ 8 MP, 5 MP, 2 MP\r\nCamera trước: 16 MP\r\nCPU: Snapdragon 720G 8 nhân\r\nRAM: 6 GB\r\nBộ nhớ trong: 128 GB\r\nThẻ nhớ: MicroSD, hỗ trợ tối đa 256 GB\r\nDung lượng pin:	5020 mAh, có sạc nhanh', 5, 5990000, 1, 'https://cdn.tgdd.vn/Products/Images/42/214924/xiaomi-redmi-note-9s-xanh-new-600x600-600x600.jpg'),
(14, 'Điện thoại Xiaomi Mi 10T Pro 5G', 'Màn hình: IPS LCD, 6.67\", Full HD+\r\nHệ điều hành: Android 10\r\nCamera sau: Chính 108 MP & Phụ 13 MP, 5 MP\r\nCamera trước: 20 MP\r\nCPU: Snapdragon 865 8 nhân\r\nRAM: 8 GB\r\nBộ nhớ trong: 256 GB\r\nDung lượng pin:	5000 mAh, có sạc nhanh', 5, 12990000, 1, 'https://cdn.tgdd.vn/Products/Images/42/228136/xiaomi-mi-10t-pro-den-600x600.jpg'),
(15, 'Điện thoại Xiaomi POCO X3 NFC', 'Màn hình: IPS LCD, 6.67\", Full HD+\r\nHệ điều hành: Android 10\r\nCamera sau: Chính 64 MP & Phụ 13 MP, 2 MP, 2 MP\r\nCamera trước: 20 MP\r\nCPU: Snapdragon 732G 8 nhân\r\nRAM: 6 GB\r\nBộ nhớ trong: 128 GB\r\nThẻ nhớ: MicroSD, hỗ trợ tối đa 256 GB\r\nDung lượng pin:	5160 mAh, có sạc nhanh', 5, 6990000, 1, 'https://cdn.tgdd.vn/Products/Images/42/227900/xiaomi-poco-x3-nfc-xam-600x600.jpg'),
(16, 'Điện thoại Xiaomi Redmi Note 9 Pro (6GB/128GB)', 'Màn hình: IPS LCD, 6.67\", Full HD+\r\nHệ điều hành: Android 10\r\nCamera sau: Chính 64 MP & Phụ 8 MP, 5 MP, 2 MP\r\nCamera trước: 16 MP\r\nCPU: Snapdragon 720G 8 nhân\r\nRAM: 6 GB\r\nBộ nhớ trong: 128 GB\r\nThẻ nhớ: MicroSD, hỗ trợ tối đa 512 GB\r\nDung lượng pin:	5020 mAh, có sạc nhanh', 5, 6990000, 1, 'https://cdn.tgdd.vn/Products/Images/42/221820/xiaomi-redmi-note-9-pro-white-600x600.jpg'),
(17, 'Laptop Asus VivoBook A412F i5 10210U/8GB/32GB+512GB/Win10 ', 'CPU: Intel Core i5 Comet Lake, 10210U, 1.60 GHz\r\nRAM: 8 GB, DDR4 (On board 4GB +1 khe 4GB), 2666 MHz\r\nỔ cứng:	Intel Optane 32GB (H10), SSD 512 GB M.2 PCIe, Hỗ trợ khe cắm HDD SATA\r\nMàn hình: 14 inch, Full HD (1920 x 1080)\r\nCard màn hình: Card đồ họa tích hợp, Intel UHD Graphics\r\nCổng kết nối: USB 3.1, HDMI, USB 2.0, USB Type-C\r\nHệ điều hành: Windows 10 Home SL\r\nThiết kế: Vỏ nhựa, PIN liền\r\nKích thước: Dày 19.5 mm, 1.406 kg', 2, 16490000, 2, 'https://cdn.tgdd.vn/Products/Images/44/218865/asus-vivobook-a412f-i510210u-8gb-32gb-512gb-win10-kg-218865-600x600.jpg'),
(18, 'Laptop Asus VivoBook X509MA N5030/4GB/512GB/Win10 ', 'CPU: Intel Pentium, N5030, 1.10 GHz\r\nRAM: 4 GB, DDR4 (1 khe), 2666 MHz\r\nỔ cứng:	SSD 512 GB M.2 PCIe, Hỗ trợ khe cắm HDD SATA\r\nMàn hình: 15.6 inch, Full HD (1920 x 1080)\r\nCard màn hình: Card đồ họa tích hợp, Intel® UHD Graphics 605\r\nCổng kết nối: 2 x USB 2.0, HDMI, USB 3.0, USB Type-C\r\nHệ điều hành: Windows 10 Home SL\r\nThiết kế: Vỏ nhựa, PIN liền\r\nKích thước: Dày 22.9 mm, 1.9 kg', 2, 8890000, 2, 'https://cdn.tgdd.vn/Products/Images/44/228514/asus-vivobook-x509ma-n5030-ej256t-171120-051158-600x600.jpg'),
(19, 'Laptop Asus VivoBook X509JP i5 1035G1/8GB/512GB/2GB MX330/Win10 ', 'CPU: Intel Core i5 Ice Lake, 1035G1, 1.00 GHz\r\nRAM: 8 GB, DDR4 (On board 4GB +1 khe 4GB), 2666 MHz\r\nỔ cứng:	SSD 512 GB M.2 PCIe, Hỗ trợ khe cắm HDD SATA\r\nMàn hình: 15.6 inch, Full HD (1920 x 1080)\r\nCard màn hình: Card đồ họa rời, NVIDIA GeForce MX330, 2GB\r\nCổng kết nối: 2 x USB 2.0, USB 3.1, HDMI, USB Type-C\r\nHệ điều hành: Windows 10 Home SL\r\nThiết kế: Vỏ nhựa, PIN liền\r\nKích thước: Dày 22.9 mm, 1.73 kg', 2, 17190000, 2, 'https://cdn.tgdd.vn/Products/Images/44/221617/asus-vivobook-x509jp-i5-ej023t-2gb-221617-600x600.jpg'),
(20, 'Laptop Asus ZenBook UX425EA i5 1135G7/8GB/512GB/Cáp/Túi/Win10 \r\n\r\n', 'CPU: Intel Core i5 Tiger Lake, 1135G7, 2.40 GHz\r\nRAM: 8 GB, LPDDR4X (On board), 4266 MHz\r\nỔ cứng:	SSD 512 GB M.2 PCIe\r\nMàn hình: 14 inch, Full HD (1920 x 1080)\r\nCard màn hình: Card đồ họa tích hợp, Intel® Iris® Xe Graphics\r\nCổng kết nối: 1 x USB 3.2, 2 x Thunderbolt™ 4 USB-C, HDMI\r\nHệ điều hành: Windows 10 Home SL\r\nThiết kế: Vỏ kim loại nguyên khối, PIN liền\r\nKích thước: Dày 13.9 mm, 1.17 kg', 2, 22990000, 2, 'https://cdn.tgdd.vn/Products/Images/44/230351/asus-zenbook-ux425ea-i5-bm069t-grey-new-600x600.jpg'),
(21, 'Laptop Dell Inspiron 3493 i5 1035G1/8GB/256GB/Win10 ', 'CPU: Intel Core i5 Ice Lake, 1035G1, 1.00 GHz\r\nRAM: 8 GB, DDR4 (2 khe), 2666 MHz\r\nỔ cứng:	SSD 256GB NVMe PCIe, Hỗ trợ khe cắm HDD SATA\r\nMàn hình: 14 inch, Full HD (1920 x 1080)\r\nCard màn hình: Card đồ họa tích hợp, Intel UHD Graphics\r\nCổng kết nối: 2 x USB 3.1, HDMI, LAN (RJ45), USB 2.0\r\nHệ điều hành: Windows 10 Home SL\r\nThiết kế: Vỏ nhựa, PIN liền\r\nKích thước: Dày 21 mm, 1.79kg', 7, 15290000, 2, 'https://cdn.tgdd.vn/Products/Images/44/222088/dell-inspiron-3493-i5-n4i5122w-222088-600x600.jpg'),
(22, 'Laptop Dell Inspiron 5593 i5 1035G1/8GB/256GB/2GB MX230/Win10 ', 'CPU: Intel Core i5 Ice Lake, 1035G1, 1.00 GHz\r\nRAM: 8 GB, DDR4 (2 khe), 2666 MHz\r\nỔ cứng:	SSD 256GB NVMe PCIe, Hỗ trợ khe cắm HDD SATA\r\nMàn hình: 15.6 inch, Full HD (1920 x 1080)\r\nCard màn hình: Card đồ họa rời, NVIDIA GeForce MX230 2GB\r\nCổng kết nối: 2 x USB 3.1, HDMI, LAN (RJ45), USB 2.0, USB Type-C\r\nHệ điều hành: Windows 10 Home SL\r\nThiết kế: Vỏ nhựa, PIN liền\r\nKích thước: Dày 19.90 mm, 2.05 kg', 7, 17990000, 2, 'https://cdn.tgdd.vn/Products/Images/44/213570/dell-inspiron-5593-i5-1035g1-8gb-256gb-2gb-mx230-w-213570-600x600.jpg'),
(23, 'Laptop Dell Vostro 3491 i3 1005G1/4GB/256GB/Win10 ', 'CPU: Intel Core i3 Ice Lake, 1005G1, 1.20 GHz\r\nRAM: 4 GB, DDR4 (2 khe), 2666 MHz\r\nỔ cứng:	SSD 256GB NVMe PCIe\r\nMàn hình: 14 inch, Full HD (1920 x 1080)\r\nCard màn hình: Card đồ họa tích hợp, Intel UHD Graphics\r\nCổng kết nối: 2 x USB 3.1, HDMI, LAN (RJ45), USB 2.0\r\nHệ điều hành: Windows 10 Home SL\r\nThiết kế: Vỏ nhựa, PIN liền\r\nKích thước: Dày 21 mm, 1.66 kg', 7, 10990000, 2, 'https://cdn.tgdd.vn/Products/Images/44/229622/dell-vostro-3491-i3-70223127-103120-103142-600x600.jpg'),
(24, 'Laptop Dell Vostro 3590 i7 10510U/8GB/256GB/2GB 610R5/Win10', 'CPU: Intel Core i7 Comet Lake, 10510U, 1.80 GHz\r\nRAM: 8 GB, DDR4 (On board +1 khe), 2666 MHz\r\nỔ cứng:	SSD 256GB NVMe PCIe, Hỗ trợ khe cắm HDD SATA\r\nMàn hình: 15.6 inch, Full HD (1920 x 1080)\r\nCard màn hình: Card đồ họa rời, AMD Radeon 610R5, 2GB\r\nCổng kết nối: 2 x USB 3.1, HDMI, LAN (RJ45), USB 2.0, VGA (D-Sub)\r\nHệ điều hành: Windows 10 Home SL\r\nThiết kế: Vỏ nhựa, PIN liền\r\nKích thước: Dày 19.8 mm, 1.99 kg', 7, 20990000, 2, 'https://cdn.tgdd.vn/Products/Images/44/220718/dell-vostro-3590-i7-grmgk2-220718-220718-600x600.jpg'),
(25, 'Laptop HP Pavilion 15 cs3119TX i5 1035G1/4GB/256GB/2GB MX250/Win10', 'CPU: Intel Core i5 Ice Lake, 1035G1, 1.00 GHz\r\nRAM: 4 GB, DDR4 (2 khe), 2666 MHz\r\nỔ cứng:	SSD 256GB NVMe PCIe, Hỗ trợ khe cắm HDD SATA\r\nMàn hình: 15.6 inch, Full HD (1920 x 1080)\r\nCard màn hình: Card đồ họa rời, NVIDIA GeForce MX250 2GB\r\nCổng kết nối: 2 x USB 3.1, HDMI, LAN (RJ45), USB Type-C\r\nHệ điều hành: Windows 10 Home SL\r\nThiết kế: Nắp lưng và chiếu nghỉ tay bằng kim loại, PIN liền\r\nKích thước: Dày 17.9 mm, 1.755 kg', 6, 16590000, 2, 'https://cdn.tgdd.vn/Products/Images/44/216291/hp-pavilion-15-cs3119tx-i5-1035g1-4gb-256gb-2gb-mx-9-216291-600x600.jpg'),
(26, 'Laptop HP 15s du1103TU i5 10210U/8GB/512GB/Win10', 'CPU: Intel Core i5 Comet Lake, 10210U, 1.60 GHz\r\nRAM: 8 GB, DDR4 (2 khe), 2666 MHz\r\nỔ cứng:	SSD 512 GB M.2 PCIe, Hỗ trợ khe cắm HDD SATA\r\nMàn hình: 15.6 inch, Full HD (1920 x 1080)\r\nCard màn hình:	Card đồ họa tích hợp, Intel UHD Graphics\r\nCổng kết nối: 2 x USB 3.1, HDMI, LAN (RJ45), USB Type-C\r\nHệ điều hành: Windows 10 Home SL\r\nThiết kế: Vỏ nhựa, PIN liền\r\nKích thước: Dày 19.9 mm, 1.7 kg', 6, 21990000, 2, 'https://cdn.tgdd.vn/Products/Images/44/231248/hp-15s-du1103tu-i5-2w7j7pa-600x600.jpg'),
(27, 'Laptop HP Pavilion x360 14 dw0060TU i3 1005G1/4GB/256GB/Pen/Office H&S2019/Win10', 'CPU: Intel Core i3 Ice Lake, 1005G1, 1.20 GHz\r\nRAM: 4 GB, DDR4 (2 khe), 3200 MHz\r\nỔ cứng:	SSD 256GB NVMe PCIe\r\nMàn hình: 14 inch, Full HD (1920 x 1080)\r\nCard màn hình: Card đồ họa tích hợp, Intel UHD Graphics\r\nCổng kết nối: 2 x USB 3.1, HDMI, USB Type-C\r\nHệ điều hành: Windows 10 Home SL + Office Home&Student 2019 vĩnh viễn\r\nThiết kế: Vỏ nhựa, PIN liền\r\nKích thước: Dày 19 m, 1.65 kg', 6, 14190000, 2, 'https://cdn.tgdd.vn/Products/Images/44/225695/hp-pavilion-x360-dw0060tu-i3-195m8pa-225695-600x600.jpg'),
(28, 'Laptop HP 15s du2050TX i3 1005G1/4GB/256GB/2GB MX130/Win10', 'CPU: Intel Core i3 Ice Lake, 1005G1, 1.20 GHz\r\nRAM: 4 GB, DDR4 (2 khe), 2666 MHz\r\nỔ cứng:	SSD 256GB NVMe PCIe, Hỗ trợ khe cắm HDD SATA\r\nMàn hình: 15.6 inch, Full HD (1920 x 1080)\r\nCard màn hình:	Card đồ họa rời, NVIDIA Geforce MX130, 2GB\r\nCổng kết nối: 2 x USB 3.0, HDMI, USB Type-C\r\nHệ điều hành: Windows 10 Home SL\r\nThiết kế: Vỏ nhựa, PIN liền\r\nKích thước: Dày 17.9 mm, 1.75 kg', 6, 12390000, 2, 'https://cdn.tgdd.vn/Products/Images/44/224065/hp-15s-du2050tx-i3-1m8w2pa-usb-224065-600x600.jpg'),
(29, 'Đế sạc không dây 9W Qi Type C Samsung EP-P1100 Đen', 'Chức năng: Sạc\r\nĐầu vào: Type C: 5V - 2A, 9V - 1.67A\r\nĐầu ra:	Không dây: 5V - 1A, 10V - 0.9A\r\nKích thước: Đường kính: 9 cm, Dày 1.2 cm\r\nThương hiệu của: Hàn Quốc\r\nSản xuất tại: Việt Nam', 3, 500000, 3, 'https://cdn.tgdd.vn/Products/Images/58/211866/sac-khong-day-9w-qi-type-c-samsung-ep-p1100-den-add-600x600.jpg'),
(30, 'Bộ Adapter sạc kèm cáp Type C Samsung TA20EW', 'Chức năng: Sạc\r\nĐầu ra:	Type C: 5V - 2A, 9V - 1.67A\r\nĐộ dài dây: 1.5 m\r\nThương hiệu của: Hàn Quốc\r\nSản xuất tại: Trung Quốc', 3, 320000, 3, 'https://cdn.tgdd.vn/Products/Images/58/174572/bo-adapter-sac-kem-cap-type-c-samsung-ta20ew-1-1-600x600.jpg'),
(31, 'Tai nghe nhét tai Samsung EG920B', 'Tương thích: AndroidWindowsWindows Phone\r\nJack cắm: 3.5 mm\r\nKết nối cùng lúc: 1 thiết bị\r\nPhím điều khiển: Mic thoạiNghe/nhận cuộc gọiPhát/dừng chơi nhạcTăng/giảm âm lượng\r\nĐộ dài dây 120 cm\r\nTrọng lượng: ~ 13.2 g\r\nThương hiệu của: Hàn Quốc\r\nSản xuất tại: Trung Quốc', 3, 280000, 3, 'https://cdn.tgdd.vn/Products/Images/54/113118/tai-nghe-nhet-trong-samsung-eg920b-2-1-600x600.jpg'),
(32, 'Tai nghe nhét tai Samsung IG935B', 'Tương thích: AndroidWindowsiOS (iPhone)Windows Phone\r\nJack cắm: 3.5 mm\r\nKết nối cùng lúc: 1 thiết bị\r\nPhím điều khiển: Phát/dừng chơi nhạcTăng/giảm âm lượng\r\nTrọng lượng: 13.2 g\r\nThương hiệu của: Hàn Quốc\r\nSản xuất tại: Việt Nam', 3, 300000, 3, 'https://cdn.tgdd.vn/Products/Images/54/113116/tai-nghe-nhet-trong-samsung-ig935b-2-1-600x600.jpg'),
(33, 'Tai nghe Bluetooth Samsung MG900E', 'Tương thích: AndroidWindowsiOS (iPhone)Windows Phone\r\nCổng sạc: Micro USB\r\nThời gian sử dụng: 9 giờ\r\nThời gian sạc đầy: 2 giờ\r\nKết nối cùng lúc: 2 thiết bị\r\nPhím điều khiển: Mic thoạiNghe/nhận cuộc gọiTăng/giảm âm lượng\r\nTrọng lượng: 10.6 g\r\nThương hiệu của: Hàn Quốc\r\nSản xuất tại: Việt Nam', 3, 850000, 3, 'https://cdn.tgdd.vn/Products/Images/54/113119/tai-nghe-bluetooth-samsung-mg900e-add-600x600.jpg'),
(34, 'Adapter chuyển đổi Type C sang HDMI/Type C/USB Apple MUF82 Trắng\r\n\r\n', 'Chức năng: Truyền dữ liệuXuất hình ảnhXuất âm thanh chuyển đổi cổng kết nối\r\nĐầu vào: USB Type-C\r\nĐầu ra:	USB Type-CUSBHDMI\r\nĐộ dài dây: 11 cm\r\nThương hiệu của: Mỹ\r\nSản xuất tại: Việt Nam/Trung Quốc (tùy lô hàng)', 1, 2490000, 3, 'https://cdn.tgdd.vn/Products/Images/58/215983/adapter-type-c-sang-hdmi-type-c-usb-apple-muf82-ava-600x600.jpg'),
(35, 'Adapter Sạc Type C 20W dùng cho iPhone/iPad Apple MHJE3 Trắng', 'Chức năng: Sạc\r\nĐầu ra:	Type C: 20W\r\nCông nghệ/Tiện ích: Power Delivery\r\nThương hiệu của: Mỹ\r\nSản xuất tại: Việt Nam/Trung Quốc (tùy lô hàng)', 1, 792000, 3, 'https://cdn.tgdd.vn/Products/Images/58/230315/adapter-sac-type-c-20w-cho-iphone-ipad-apple-mhje3-ava-600x600.png'),
(36, 'Adapter Sạc 5W cho iPhone/iPad/iPod Apple MGN13 Trắng', 'Chức năng: Sạc\r\nĐầu ra:	USB: 5V - 1A\r\nThương hiệu của: Mỹ\r\nSản xuất tại: Trung Quốc', 1, 490000, 3, 'https://cdn.tgdd.vn/Products/Images/58/229595/adapter-sac-5w-cho-iphone-ipad-ipod-apple-mgn13-ava-600x600.jpg'),
(37, 'Adapter Sạc 12W dùng cho iPhone/iPad/iPod Apple MGN03 Trắng', 'Chức năng: Sạc\r\nĐầu ra:	USB: 12W\r\nThương hiệu của: Mỹ\r\nSản xuất tại: Trung Quốc', 1, 590000, 3, 'https://cdn.tgdd.vn/Products/Images/58/226750/adapter-sac-12w-cho-iphone-ipad-ipod-apple-mgn03-ava-1-600x600.jpg'),
(38, 'Tai nghe AirPods Pro sạc không dây Apple MWP22', 'Tương thích: MacOS (Macbook, iMac)iOS (iPhone)\r\nCổng sạc: LightningSạc không dây\r\nCông nghệ âm thanh: Active Noise CancellingAdaptive EQ\r\nThời gian sử dụng: 4.5 giờ nghe nhạc, 3.5 giờ đàm thoại (chế độ chống ồn chủ động)20 giờ nghe nhạc, 18 giờ đàm thoại (sử dụng với hộp sạc)\r\nKết nối cùng lúc: 1 thiết bị\r\nHỗ trợ kết nối:	Bluetooth\r\nPhím điều khiển: Mic thoạiNghe/nhận cuộc gọiPhát/dừng chơi nhạcChuyển bài hát\r\nTrọng lượng: 5.4g/1 tai nghe, 45.6g/hộp sạc\r\nThương hiệu của: Mỹ\r\nSản xuất tại: Việt Nam / Trung Quốc (tùy lô hàng)', 1, 5990000, 3, 'https://cdn.tgdd.vn/Products/Images/54/213711/tai-nghe-bluetooth-airpods-pro-apple-mwp22-ava-600x600.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanphamnhap`
--

CREATE TABLE `sanphamnhap` (
  `idSP` int(11) NOT NULL,
  `SLNhap` int(11) NOT NULL,
  `NgayNhap` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanphamnhap`
--

INSERT INTO `sanphamnhap` (`idSP`, `SLNhap`, `NgayNhap`) VALUES
(2, 10, '2020-12-02'),
(3, 5, '2020-12-03'),
(12, 7, '2020-12-07'),
(13, 9, '2020-12-02'),
(15, 12, '2020-12-04'),
(19, 10, '2020-12-02'),
(20, 18, '2020-12-03'),
(23, 15, '2020-12-03'),
(25, 5, '2020-12-02'),
(26, 8, '2020-12-04'),
(27, 5, '2020-12-03'),
(33, 20, '2020-12-05'),
(35, 15, '2020-12-08'),
(36, 10, '2020-12-04'),
(38, 10, '2020-12-10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanhtoan`
--

CREATE TABLE `thanhtoan` (
  `idBill` int(11) NOT NULL,
  `idGH` int(11) NOT NULL,
  `TongTien` int(11) NOT NULL,
  `TinhTrang` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thanhtoan`
--

INSERT INTO `thanhtoan` (`idBill`, `idGH`, `TongTien`, `TinhTrang`) VALUES
(1, 1, 25990000, 'đã thanh toán'),
(2, 2, 21990000, 'đã thanh toán'),
(3, 3, 640000, 'đã thanh toán'),
(4, 4, 792000, 'đã thanh toán'),
(5, 5, 21990000, 'đã thanh toán'),
(6, 6, 5990000, 'chưa thanh toán'),
(7, 7, 12390000, 'chưa thanh toán'),
(8, 8, 27990000, 'chưa thanh toán');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Username`,`Password`);

--
-- Chỉ mục cho bảng `chitietgiohang`
--
ALTER TABLE `chitietgiohang`
  ADD PRIMARY KEY (`idGH`,`idSP`),
  ADD KEY `idSP` (`idSP`);

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`idGH`),
  ADD KEY `idKH` (`idKH`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`idKH`);

--
-- Chỉ mục cho bảng `khosanpham`
--
ALTER TABLE `khosanpham`
  ADD PRIMARY KEY (`idSP`);

--
-- Chỉ mục cho bảng `nhasanxuat`
--
ALTER TABLE `nhasanxuat`
  ADD PRIMARY KEY (`idNSX`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`idSP`),
  ADD KEY `idNSX` (`idNSX`);

--
-- Chỉ mục cho bảng `sanphamnhap`
--
ALTER TABLE `sanphamnhap`
  ADD PRIMARY KEY (`idSP`);

--
-- Chỉ mục cho bảng `thanhtoan`
--
ALTER TABLE `thanhtoan`
  ADD PRIMARY KEY (`idBill`),
  ADD KEY `idGH` (`idGH`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `idGH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `idKH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `nhasanxuat`
--
ALTER TABLE `nhasanxuat`
  MODIFY `idNSX` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `idSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitietgiohang`
--
ALTER TABLE `chitietgiohang`
  ADD CONSTRAINT `chitietgiohang_ibfk_1` FOREIGN KEY (`idGH`) REFERENCES `giohang` (`idGH`),
  ADD CONSTRAINT `chitietgiohang_ibfk_2` FOREIGN KEY (`idSP`) REFERENCES `sanpham` (`idSP`);

--
-- Các ràng buộc cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `giohang_ibfk_2` FOREIGN KEY (`idKH`) REFERENCES `khachhang` (`idKH`);

--
-- Các ràng buộc cho bảng `khosanpham`
--
ALTER TABLE `khosanpham`
  ADD CONSTRAINT `khosanpham_ibfk_1` FOREIGN KEY (`idSP`) REFERENCES `sanpham` (`idSP`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_3` FOREIGN KEY (`idNSX`) REFERENCES `nhasanxuat` (`idNSX`),
  ADD CONSTRAINT `sanpham_ibfk_4` FOREIGN KEY (`idSP`) REFERENCES `khosanpham` (`idSP`);

--
-- Các ràng buộc cho bảng `sanphamnhap`
--
ALTER TABLE `sanphamnhap`
  ADD CONSTRAINT `sanphamnhap_ibfk_1` FOREIGN KEY (`idSP`) REFERENCES `sanpham` (`idSP`);

--
-- Các ràng buộc cho bảng `thanhtoan`
--
ALTER TABLE `thanhtoan`
  ADD CONSTRAINT `thanhtoan_ibfk_1` FOREIGN KEY (`idGH`) REFERENCES `giohang` (`idGH`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
