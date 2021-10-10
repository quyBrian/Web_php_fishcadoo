-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 16, 2021 lúc 11:18 PM
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
-- Cơ sở dữ liệu: `web2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `MaHD` int(11) NOT NULL,
  `MaSP` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `DonGia` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`MaHD`, `MaSP`, `SoLuong`, `DonGia`) VALUES
(16, 65, 3, 2000000),
(17, 65, 1, 2000000),
(18, 65, 6, 0),
(19, 65, 1, 2000000),
(19, 66, 1, 1500000),
(20, 68, 1, 1000000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhgia`
--

CREATE TABLE `danhgia` (
  `MaSP` int(11) NOT NULL,
  `MaND` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `SoSao` int(11) NOT NULL,
  `BinhLuan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NgayLap` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `MaHD` int(11) NOT NULL,
  `MaND` int(11) NOT NULL,
  `NgayLap` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `NguoiNhan` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `SDT` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `PhuongThucTT` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `TongTien` float NOT NULL,
  `TrangThai` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`MaHD`, `MaND`, `NgayLap`, `NguoiNhan`, `SDT`, `DiaChi`, `PhuongThucTT`, `TongTien`, `TrangThai`) VALUES
(16, 6, '2021-06-16 17:01:08', 'Quy Le', '09284784', 'Hà nội ', 'Tien mat', 0, NULL),
(17, 6, '2021-06-16 17:01:44', 'Quy Le', '0347587438', 'Hà nội ', 'Tien mat', 0, NULL),
(18, 6, '2021-06-16 17:03:51', 'Quy Le', '0347587438', 'Quảng Ninh', 'Tien mat', 0, NULL),
(19, 6, '2021-06-16 18:19:08', 'Quy Le', '0347587438', 'Hà nội ', 'Tien mat', 0, NULL),
(20, 6, '2021-06-16 21:14:35', 'Quy Le', '0347587438', 'Hà nội ', 'Tien mat', 0, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `MaKM` int(11) NOT NULL,
  `TenKM` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `LoaiKM` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `GiaTriKM` float NOT NULL,
  `NgayBD` datetime NOT NULL,
  `NgayKT` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khuyenmai`
--

INSERT INTO `khuyenmai` (`MaKM`, `TenKM`, `LoaiKM`, `GiaTriKM`, `NgayBD`, `NgayKT`) VALUES
(1, 'Không khuyến mãi', 'Nothing', 0, '2019-04-08 00:00:00', '2022-04-17 00:00:00'),
(2, 'Giảm giá', 'GiamGia', 500000, '2019-05-01 00:00:00', '2019-05-31 00:00:00'),
(3, 'Giá rẻ online', 'GiaReOnline', 650000, '2019-05-01 00:00:00', '2019-05-31 00:00:00'),
(4, 'Trả góp', 'TraGop', 0, '2019-05-01 00:00:00', '2019-05-31 00:00:00'),
(5, 'Mới ra mắt', 'MoiRaMat', 0, '2019-05-01 00:00:00', '2019-05-31 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `MaLSP` int(11) NOT NULL,
  `TenLSP` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `HinhAnh` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Mota` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisanpham`
--

INSERT INTO `loaisanpham` (`MaLSP`, `TenLSP`, `HinhAnh`, `Mota`) VALUES
(16, 'Cá Koi', '', 'Các sản phẩm về cá Koi'),
(17, 'Cá Ranchu', '', 'Các sản phẩm về cá Ranchu'),
(18, 'Cá La Hán', '', 'Các sản phẩm về cá La Hán'),
(19, 'Cá Rồng ', '', 'Các sản phẩm về cá Rồng'),
(20, 'Cây thủy sinh', '', 'Các sản phẩm về cây thủy sinh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `MaND` int(11) NOT NULL,
  `Ho` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Ten` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `GioiTinh` tinyint(1) DEFAULT NULL,
  `SDT` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `HinhAnh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TaiKhoan` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `MatKhau` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `MaQuyen` int(11) NOT NULL,
  `TrangThai` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`MaND`, `Ho`, `Ten`, `GioiTinh`, `SDT`, `Email`, `DiaChi`, `HinhAnh`, `TaiKhoan`, `MatKhau`, `MaQuyen`, `TrangThai`) VALUES
(2, 'Nguyen', 'Danh', 0, '0123456789', 'Danhdanh@gmail.com', 'Hà nội ', '', 'Abc', '', 1, 1),
(4, 'Nguyễn', 'Huệ', 1, '01207764668', 'huenguyen@gmail.com', 'Quảng Ninh', '', 'Hue', '', 1, 1),
(5, 'Quý', 'Lê', 0, '094786437', 'quy@gmail.com', 'Hải Dương', '', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, 1),
(6, 'Quý', 'Lê', 0, '', '', '', 'noimage.jpg', '21232f297a57a5a743894a0e4a801fc3', '21232f297a57a5a743894a0e4a801fc3', 1, 0),
(7, 'Loan', 'Hoàng', 1, '0039475', 'aaaaaa', 'Hà nội ', 'card.jpg', 'Loan', '', 1, 1),
(8, 'Lê', 'Lợi', 0, '09284784', 'a', 'Quảng Ninh', 'IMG_7811.jpg', 'leloi', '', 1, 1),
(9, 'Quang', 'Trung', 0, '094357565', 'qt', 'Hải Dương', 'dat.jpg', 'quangtrung', '19b0daf21b03f1eca638a683aab20200', 1, 0),
(10, 'Quản', 'Minh', 0, '09347564', 'qm', 'Hà nội ', 'client_img.png', 'quanninh', '', 2, 1),
(12, 'Nguyễn Văn ', 'Hiệu', 0, '00394757', 'hieunguyen@gmail.com', 'Hà nội ', '', 'hieu', '968855132dc5d0eb2ed7c0fc4ef3421e', 2, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phanquyen`
--

CREATE TABLE `phanquyen` (
  `MaQuyen` int(11) NOT NULL,
  `TenQuyen` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ChiTietQuyen` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phanquyen`
--

INSERT INTO `phanquyen` (`MaQuyen`, `TenQuyen`, `ChiTietQuyen`) VALUES
(1, 'Customer', 'Khách hàng có tài khoản'),
(2, 'user', 'truy cập trang user');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSP` int(11) NOT NULL,
  `MaLSP` int(11) NOT NULL,
  `TenSP` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `DonGia` int(11) NOT NULL,
  `SoLuong` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `HinhAnh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MaKM` int(11) NOT NULL,
  `Mota` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NgayTao` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `SoSao` int(11) NOT NULL,
  `SoDanhGia` int(11) NOT NULL,
  `TrangThai` int(11) NOT NULL,
  `GhiChu` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`MaSP`, `MaLSP`, `TenSP`, `DonGia`, `SoLuong`, `HinhAnh`, `MaKM`, `Mota`, `NgayTao`, `SoSao`, `SoDanhGia`, `TrangThai`, `GhiChu`) VALUES
(65, 16, 'Cá Koi Kohaku', 2000000, 50, 'koi1.jpg', 1, 'Loại cá koi Kohaku khoác lên mình một chiếc áo trắng kết hợp những khoang đỏ (màu đỏ chiếm 50-70% trên thân cá tạo nên nét quyến rũ đầy sức hút.', '2021-06-16 07:28:02', 0, 0, 1, '1'),
(66, 16, 'Koi Taisho Sanke ', 1500000, 10, 'koi2.jpg', 1, 'Sanke mang trên mình là chiếc áo màu trắng muốt với những khoảng màu đỏ và những đốm đen mềm mại, tao nhã phối hợp với nhau tạo nên một màu sắc độc đáo, bắt mắt.', '2021-06-16 05:56:25', 0, 0, 0, '1'),
(67, 16, 'Koi Goromo', 5000000, 22, 'koi3.jpg', 1, 'cá koi Goromo nổi bật với những đường nét hoa văn trên thân nền màu trắng tuyết hoặc trắng sữa xen lẫn những đốm lưới như tổ ong và có màu đỏ, dày đậm và đều', '2021-06-14 04:18:35', 0, 0, 0, '1'),
(68, 17, 'Cá Ranchu Lan Thọ', 1000000, 50, 'ranchu1.jpg', 1, 'cá có thân hình tròn giống quá trứng, phần đầu rộng và có u thịt phát triển. Phần vây đuôi của cá Lan Thọ hơi tròn, từ cán đuôi chẻ 3-4 nhánh.', '2021-06-14 04:23:31', 0, 0, 0, '1'),
(69, 17, 'Cá Ranchu Lan Chou', 1990000, 15, 'ranchu2.jpg', 1, 'Cá nhập khẩu tại Nhật Bản', '2021-06-14 04:25:56', 0, 0, 0, '1'),
(70, 17, 'Ranchu 3 đuôi', 1999000, 22, 'ranchu3.jpg', 1, 'Phần lưng của Ranchu (nhìn từ bên hông) được so sánh với chiếc lược truyền thống của Nhật Bản , nó có hai hình dạng. Vẻ đẹp của Ranchu được ngắm nhìn qua phần lưng của nó. Phần lưng càng đẹp thì càng nhiều người yêu thích hơn', '2021-06-16 13:39:02', 5, 0, 0, '1'),
(71, 18, 'La Hán Thái Đỏ', 3000000, 22, 'lahan1.jpg', 1, 'Cá La Hán Thái đỏ là một trong những dòng cá được dân chơi cá cảnh ưa chuộng. Màu sắc chủ đạo là màu đỏ tươi sặc sỡ và nhiều vẩy sáng lấp lánh kết hợp cùng cái đầu gù phình khá to. Cá La Hán Thái đỏ có thân hình nhỏ gọn nhưng cái đuôi xòe khá to. Tạo cho người nhìn cảm giác dịu dàng và uyển chuyển.', '2021-06-16 13:42:37', 3, 0, 0, '1'),
(72, 18, 'La Hán King Kamfa', 1200000, 10, 'lahan2.jpg', 1, 'Cá La Hán King Kamfa được nhập khẩu từ nước ngoài và có giá thành cao nhất. Chúng được lai tạo tại Thái Lan từ gốc Kamfa. Điều đặc biệt của cá La Hán King Kamfa chính là những con đực không có khả năng sinh sản. Để duy trì nòi giống cho chúng người ta sẽ cho con cái lai tạo với loài cá khác.', '2021-06-16 13:43:31', 1, 0, 0, '1'),
(73, 18, 'La Hán Kim Cương', 15000000, 50, 'lahan3.jpg', 1, 'Cá La Hán Phúc Lộc Thọ hay còn gọi là cá La Hán Kim Cương. Chúng được lai tạo từ cá đực Kim Cương với loài cá Rồng Xanh. La Hán Kim Cương nổi bật với những chi tiết giống chữ viết in trên thân. Mình của chúng tròn và vẩy trắng. Mắt màu đỏ, cái đầu to nhô cao về trước và vẩy màu trắng.', '2021-06-16 13:46:30', 5, 0, 0, '1'),
(74, 19, 'Cá Rồng Thanh Long', 1000000, 15, 'rong1.jpg', 1, 'Cá rồng Thanh Long là loài có nguồn gốc từ châu Á, thường được tìm thấy nhiều ở các nước Mã Lai, Thái Lan, Miến Điện. Loài cá rồng này có mặt ở nhiều quốc gia châu Á khác nhau cho nên ngoại hình của chúng cũng có sự khác biệt nhất định tùy theo phong thổ của từng nơi. Đặc trưng của dòng cá này đó là', '2021-06-16 13:51:56', 5, 0, 0, '1'),
(75, 19, 'Cá rồng Huyết Long', 5000000, 10, 'rong2.jpg', 1, 'Giống cá rồng màu đỏ huyết được xếp vào loại đặc biệt quý hiếm, loài này xuất hiện ở Indonesia, khu vực thượng lưu sông Kapuas và vùng hồ Sentarum đảo Borneo. Dòng rồng đỏ được chia thành 4 loại khác nhau đó là đỏ ớt (Chilli Red), đỏ cam (Orange Red), đỏ huyết (Blood Red) và đỏ vàng (Golden Red). ', '2021-06-16 13:52:48', 4, 0, 0, '1'),
(76, 19, 'Cá rồng Hồng Long', 15000000, 15, 'rong3.jpg', 1, 'Giống Hồng Long có ở các nước châu Á như Việt Nam, Campuchia, Thái Lan, Indonesia… Những chú cá có màu hồng rất đặc trưng, hình dáng cũng rất dễ nhận biết. ', '2021-06-16 13:54:26', 5, 0, 0, '1'),
(77, 20, 'Rong đuôi chó', 5000000, 60, 'cay1.jpg', 1, 'Cây thảo sống dai, không có rễ, mọc chìm lơ lửng trong nước; cành dài, nhỏ. Lá mọc đối, 2 cái ở mỗi mắt, phiến lá lưỡng phân 3-4 lần làm thành các đoạn nhỏ hình sợi hơi cứng, mép có răng.', '2021-06-16 13:58:37', 5, 0, 0, '1'),
(78, 20, 'Dương Xỉ Java', 10000, 60, 'cay2.jpg', 1, 'Dương Xỉ Java thuộc họ dương xỉ, là loại cây thủy sinh có thân hơi cứng, thích nghi với môi trường nước lơ lửng không chạm đất. Là cây có hình dáng đẹp, được đánh giá là một trong những cây có thẩm mỹ cao. Đặc điểm loài này có thể dùng trong nhà, đặt trong phòng làm việc vì cây ưa bóng. Và tốc độ ph', '2021-06-16 14:00:11', 4, 0, 0, '1'),
(79, 20, 'Cây Trân Châu', 15000, 77, 'cay3.jpg', 1, 'Nhắc đến tên của Trân châu thường thôi ai cũng tò mò và trông ngóng với loài cây thủ sinh có tên đẹp và trong sáng như cây.Là loại cây dễ chăm sóc, dễ trồng và đặc biệt là loài cây này nếu trồng theo mảng lớn thì sẽ tạo nên không cảnh rất đẹp. Tuy nhiên khác với các loài thủy sinh khác thì cây trân ', '2021-06-16 14:01:24', 3, 0, 0, '1'),
(80, 16, 'Koi cờ Nhật', 200000, 50, 'K4.jpg', 1, 'Vùng đầu cá là khoang đỏ khá đậm, tuy nhiên trên thân cá lại xuất hiện các lốm đốm màu đỏ.', '2021-06-16 20:54:40', 5, 0, 0, '1'),
(81, 16, 'Menkaburi-Kohaku', 2000000, 15, 'k5.jpg', 1, ' Loài cá này có một khoang đỏ như lửa được nối liền liên tục, không bị ngắt quãng từ phần đầu đến đuôi cá.', '2021-06-16 20:55:27', 3, 0, 0, '1'),
(82, 16, 'Omoyo Kohaku', 2000000, 22, 'K6.jpg', 1, 'Toàn thân cá màu trắng, trên đầu cá có khoang đỏ hình tròn. Người Nhật rất coi trọng dòng này vì nó giống như lá quốc kỳ của họ.', '2021-06-16 20:56:06', 2, 0, 0, '1'),
(83, 17, 'Ranchu đen ', 5000000, 15, 'Rc4.jpg', 1, 'á vàng ranchu có nguồn gốc từ Nhật Bản, và là dòng cá phát triển từ dòng lan thọ. Từ cá lan thọ, các nhà lai tạo Nhật Bản đã lai tạo ra cá ranchu như chúng ta thấy ngày nay. Trong các sách về cá vàng xuất bản ở Mỹ khoảng thời gian từ giữa cho đến cuối thế kỷ 20, lan thọ và ranchu được xem như là một', '2021-06-16 20:57:42', 3, 0, 0, '1'),
(84, 17, 'cá vàng Ranchu', 15000000, 15, 'rc6.jpg', 1, 'Cá Indolesia', '2021-06-16 20:58:32', 5, 0, 0, '1'),
(85, 17, 'Thủy bao nhãn', 2000000, 60, 'rc5.jpg', 1, 'cá nhập khẩu ', '2021-06-16 20:59:38', 2, 0, 0, '1'),
(86, 18, 'La Hán Kim Cương', 55000000, 10, 'l4.jpg', 1, 'Cá La Hán Phúc Lộc Thọ hay còn gọi là cá La Hán Kim Cương. Chúng được lai tạo từ cá đực Kim Cương với loài cá Rồng Xanh. La Hán Kim Cương nổi bật với những chi tiết giống chữ viết in trên thân. Mình của chúng tròn và vẩy trắng. Mắt màu đỏ, cái đầu to nhô cao về trước và vẩy màu trắng.', '2021-06-16 21:00:52', 3, 0, 0, '1'),
(87, 18, 'Cá La Hán bột', 1000000, 50, 'l7.jpg', 1, 'Những con cá con có giá thành rẻ hơn nhiều so với những con cá đã trưởng thành. Nếu là người mới tập chơi cá cảnh, thích loài cá La Hán thì bạn có thể mua để hiểu rõ hơn sự thích nghi và quá trình phát triển của chúng. Bạn cũng sẽ hiểu rõ hơn về những yếu tố như môi trường và nhu cầu của cá. Cá bột ', '2021-06-16 21:01:59', 4, 0, 0, '1'),
(88, 18, ' cá La Hán đen', 2000000, 60, 'l5.jpg', 1, 'cá nhập khẩu ', '2021-06-16 21:02:46', 4, 0, 0, '1'),
(89, 19, 'Cá Rồng Hồng', 55000000, 77, 'r5.jpg', 1, 'cá nhập khẩu  full', '2021-06-16 21:03:37', 0, 0, 0, '1'),
(90, 19, 'Vẩy rồng kim', 55000000, 77, 'r6.jpg', 1, 'cá nhập khẩu ', '2021-06-16 21:04:19', 5, 0, 0, '1'),
(93, 19, 'Cá Kim Đen', 3000000, 15, 'r7.jpg', 1, 'cá nhập khẩu ', '2021-06-16 21:05:16', 2, 0, 0, '1'),
(94, 20, 'bèo thủy sinh', 30000, 60, 'co5.jpg', 1, '0', '2021-06-16 21:05:59', 5, 0, 0, '1'),
(95, 20, 'lưỡi hổ ', 35000, 50, 'co6.jpg', 1, '0', '2021-06-16 21:07:02', 1, 0, 0, '1'),
(96, 20, 'cỏ lá kim', 55000000, 22, 'c4.jpg', 1, 'cá nhập khẩu ', '2021-06-16 21:08:58', 2, 0, 0, '1');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD KEY `MaHD` (`MaHD`),
  ADD KEY `MaSP` (`MaSP`);

--
-- Chỉ mục cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  ADD KEY `MaSP` (`MaSP`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`MaHD`),
  ADD KEY `MaKH` (`MaND`);

--
-- Chỉ mục cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`MaKM`);

--
-- Chỉ mục cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`MaLSP`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`MaND`),
  ADD KEY `MaQuyen` (`MaQuyen`);

--
-- Chỉ mục cho bảng `phanquyen`
--
ALTER TABLE `phanquyen`
  ADD PRIMARY KEY (`MaQuyen`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSP`),
  ADD KEY `LoaiSP` (`MaLSP`),
  ADD KEY `MaKM` (`MaKM`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `MaHD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  MODIFY `MaKM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  MODIFY `MaLSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `MaND` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `phanquyen`
--
ALTER TABLE `phanquyen`
  MODIFY `MaQuyen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `MaSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `chitiethoadon_ibfk_1` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`),
  ADD CONSTRAINT `chitiethoadon_ibfk_2` FOREIGN KEY (`MaHD`) REFERENCES `hoadon` (`MaHD`);

--
-- Các ràng buộc cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  ADD CONSTRAINT `danhgia_ibfk_1` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`);

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`MaND`) REFERENCES `nguoidung` (`MaND`);

--
-- Các ràng buộc cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD CONSTRAINT `nguoidung_ibfk_1` FOREIGN KEY (`MaQuyen`) REFERENCES `phanquyen` (`MaQuyen`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`MaLSP`) REFERENCES `loaisanpham` (`MaLSP`),
  ADD CONSTRAINT `sanpham_ibfk_2` FOREIGN KEY (`MaKM`) REFERENCES `khuyenmai` (`MaKM`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
