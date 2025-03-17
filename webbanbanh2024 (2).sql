-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 05, 2024 lúc 06:25 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webbanbanh2024`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chi_tiet_don_hang`
--

CREATE TABLE `chi_tiet_don_hang` (
  `id` int(11) NOT NULL,
  `id_don_hang` int(11) DEFAULT NULL,
  `ten_san_pham` varchar(255) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `gia` decimal(10,2) NOT NULL,
  `thanh_tien` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chi_tiet_don_hang`
--

INSERT INTO `chi_tiet_don_hang` (`id`, `id_don_hang`, `ten_san_pham`, `so_luong`, `gia`, `thanh_tien`) VALUES
(2, 5, '  Hot Dog Đức', 1, 15.00, 15.00),
(3, 5, 'Bông Lan Trứng', 1, 30.00, 30.00),
(4, 6, 'Bông Lan Trứng', 1, 30.00, 30.00),
(5, 6, '  Hot Dog Đức', 1, 15.00, 15.00),
(6, 7, 'Oval Dâu', 1, 10.00, 10.00),
(7, 8, 'Bánh Mì Ốp La', 1, 15.00, 15.00),
(8, 9, '  Hot Dog Đức', 1, 15.00, 15.00),
(9, 10, 'Bánh Đỏ', 3, 12.00, 36.00);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `don_hang`
--

CREATE TABLE `don_hang` (
  `id_don_hang` int(11) NOT NULL,
  `ho_ten` varchar(255) NOT NULL,
  `so_dien_thoai` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dia_chi` text NOT NULL,
  `ghi_chu` text DEFAULT NULL,
  `phuong_thuc_thanh_toan` enum('cash','bank') NOT NULL,
  `tong_tien` decimal(10,2) NOT NULL,
  `ngay_dat` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `don_hang`
--

INSERT INTO `don_hang` (`id_don_hang`, `ho_ten`, `so_dien_thoai`, `email`, `dia_chi`, `ghi_chu`, `phuong_thuc_thanh_toan`, `tong_tien`, `ngay_dat`) VALUES
(5, 'Niên vương hữu', '0763679363', 'nienvhpd10366@gmail.com', 'bình triều thăng bình quảng nam', 'nhớ nghe', 'cash', 45.00, '2024-11-29 14:13:27'),
(6, 'Niên vương hữu', '0763679363', 'nienvhpd10366@gmail.com', 'bình triều thăng bình quảng nam', '', 'cash', 45.00, '2024-11-29 14:15:07'),
(7, 'Niên vương hữu', '0763679363', 'nienvhpd10366@gmail.com', 'bình triều thăng bình quảng nam', '', 'bank', 10.00, '2024-11-29 14:16:26'),
(8, 'Niên vương hữu', '0763679363', 'nienvhpd10366@gmail.com', 'bình triều thăng bình quảng nam', '', 'bank', 15.00, '2024-11-29 14:20:05'),
(9, 'Niên vương hữu', '0763679363', 'nienvhpd10366@gmail.com', 'bình triều thăng bình quảng nam', '', 'bank', 15.00, '2024-11-29 16:39:19'),
(10, 'Niên vương hữu', '0763679363', 'nienvhpd10366@gmail.com', 'bình triều thăng bình quảng nam', 'nhớ nhẹ nhàng nghe shop', 'bank', 36.00, '2024-12-03 05:26:21');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanphambanh`
--

CREATE TABLE `sanphambanh` (
  `id` int(11) NOT NULL,
  `ten_sanpham` varchar(50) NOT NULL,
  `gia` decimal(10,2) NOT NULL,
  `hinhanh` varchar(50) NOT NULL,
  `mota` text NOT NULL,
  `trang_thai` tinyint(1) NOT NULL DEFAULT 1,
  `loai_sanpham` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanphambanh`
--

INSERT INTO `sanphambanh` (`id`, `ten_sanpham`, `gia`, `hinhanh`, `mota`, `trang_thai`, `loai_sanpham`) VALUES
(6, 'Bánh Mì Ốp La', 15.00, 'img/banhmiopla.jpg', '', 1, ''),
(10, '  Hot Dog Đức', 15.00, 'img/hotdog.jpg', '', 1, ''),
(11, 'Bông Lan Trứng', 30.00, 'img/bonglan.png', '', 1, ''),
(12, 'Oval Dâu', 10.00, 'img/oval dau.jpg', 'Bánh Oval Dâu nổi bật với màu dâu được phủ lên trên với dừa vụn, vị dâu chua chua ngọt ngọt, thơm nứt mũi, kết hợp với phần bánh mềm mịn, vô cùng kích thích vị giác.\r\n\r\n•            Thành phần gồm bột mì, đường, bơ, bột sữa, trứng, dừa, mứt...\r\n\r\n•            Không sử dụng chất bảo quản, đảm bảo vệ sinh an toàn thực phẩm.\r\n\r\n•            Cam kết giống 100% mẫu mã và kích cỡ.', 1, ''),
(13, 'Bánh Đỏ', 12.00, 'img/banhdo.jpg', '', 1, ''),
(14, 'bánh mỳ', 11.00, 'img/banhmithit.png', 'đẹp', 1, ''),
(19, 'bánh bao', 6.00, 'img/banhbao.jpg', 'ngon', 1, 'Bánh Bao'),
(22, 'bánh bao nhân dừa', 5.00, 'img/banh-bao-nhan-dua.jpg', 'hhh', 1, 'bánh bao'),
(23, 'bánh mỳ chà bông', 10.00, 'img/banhmichabong.jpg', 'ngon', 1, 'bánh mỳ'),
(24, 'Bông Lan Chuối', 5.00, 'img/bong-lan-chuoi.jpg', 'ngon', 1, 'bánh bông lan'),
(25, 'Bông Lan Cuộn Sô-Cô-La', 11.00, 'img/bong-lan-cuon-so-co-la.jpg', 'ngon', 1, 'bánh bông lan'),
(26, 'Bánh Kem Mừng Thọ', 117.00, 'img/banh-kem-mung-tho.jpg', 'g', 1, 'bánh kem'),
(27, 'Pizza Lớn', 1000.00, 'img/pizza-lon.jpg', 'Mang hương vị của nước Ý về tập hợp lại trong một chiếc bánh Pizza lớn và màu sắc bắt mắt khiến thực khách bị chinh phục ngay từ lần đầu tiên nếm thử.', 1, 'bánh mặn'),
(28, 'Bánh Mặn Hoa Mai', 2000.00, 'img/banh-man-hoa-mai.jpg', 'Bánh có hình dạng một bông hoa mai lạ mắt, độc đáo mang đến hương vị mặn mặn khó quên bởi sự kết hợp giữa xúc xích và lớp bánh mềm mại phủ cùng dăm bông và bơ béo.', 1, 'bánh mặn');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chi_tiet_don_hang`
--
ALTER TABLE `chi_tiet_don_hang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_don_hang` (`id_don_hang`);

--
-- Chỉ mục cho bảng `don_hang`
--
ALTER TABLE `don_hang`
  ADD PRIMARY KEY (`id_don_hang`);

--
-- Chỉ mục cho bảng `sanphambanh`
--
ALTER TABLE `sanphambanh`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chi_tiet_don_hang`
--
ALTER TABLE `chi_tiet_don_hang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `don_hang`
--
ALTER TABLE `don_hang`
  MODIFY `id_don_hang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `sanphambanh`
--
ALTER TABLE `sanphambanh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chi_tiet_don_hang`
--
ALTER TABLE `chi_tiet_don_hang`
  ADD CONSTRAINT `chi_tiet_don_hang_ibfk_1` FOREIGN KEY (`id_don_hang`) REFERENCES `don_hang` (`id_don_hang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
