-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2022 at 08:44 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_noithat`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_giohang`
--

CREATE TABLE `tb_giohang` (
  `id` int(11) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `phone` int(20) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `ghichu` varchar(255) NOT NULL,
  `tongtien` int(20) NOT NULL,
  `created_time` int(20) NOT NULL,
  `last_updated` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_giohang_chitiet`
--

CREATE TABLE `tb_giohang_chitiet` (
  `id` int(20) NOT NULL,
  `ma_giohang` int(20) NOT NULL,
  `ma_sanpham` int(20) NOT NULL,
  `soluongmua` int(20) NOT NULL,
  `gia` int(20) NOT NULL,
  `created_time` int(20) NOT NULL,
  `last_updated` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_hotrokhachang`
--

CREATE TABLE `tb_hotrokhachang` (
  `id` int(11) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `noidung` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_item`
--

CREATE TABLE `tb_item` (
  `id` int(11) NOT NULL,
  `tenitem` varchar(255) NOT NULL,
  `quanlyitem` varchar(255) NOT NULL,
  `background_item` char(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_item`
--

INSERT INTO `tb_item` (`id`, `tenitem`, `quanlyitem`, `background_item`) VALUES
(1, 'Sofa', 'Sofa', '../../asset/image/background/Sofa.jpg'),
(2, 'Sofa Góc', 'SofaGoc', '../../asset/image/background/SofaGoc.jpg'),
(3, 'Armchair', 'Armchair', '../../asset/image/background/Armchair.jpg'),
(4, 'Ghế dài và đôn', 'GheDaiDon', '../../asset/image/background/GheDaiDon.jpg'),
(5, 'Ghế thư giãn', 'GheThuGian', '../../asset/image/background/GheThuGian.jpg'),
(6, 'Bàn nước', 'BanNuoc', '../../asset/image/background/BanNuoc.jpg'),
(7, 'Bàn ăn', 'BanAn', '../../asset/image/background/BanAn.jpg'),
(8, 'Bàn bên', 'BanBen', '../../asset/image/background/BanBen.jpg'),
(9, 'Bàn làm việc', 'BanLamViec', '../../asset/image/background/BanLamViec.jpg'),
(10, 'Bàn trang điểm', 'BanTrangDiem', '../../asset/image/background/BanTrangDiem.jpg'),
(11, 'Ghế ăn', 'GheAn', '../../asset/image/background/GheAn.jpg'),
(12, 'Ghế bar', 'GheBar', '../../asset/image/background/GheBar.jpg'),
(13, 'Xe đẩy', 'XeDay', '../../asset/image/background/XeDay.jpg'),
(14, 'Giường', 'Giuong', '../../asset/image/background/Giuong.jpg'),
(15, 'Bàn dầu giường', 'BanDauGiuong', '../../asset/image/background/BanDauGiuong.jpg'),
(16, 'Nệm', 'NemGiuong', '../../asset/image/background/NemGiuongNgu.jpg'),
(17, 'Tủ tivi', 'TuTivi', '../../asset/image/background/TuTivi.jpg'),
(18, 'Tủ ly', 'TuLy', '../../asset/image/background/TuLy.jpg'),
(19, 'Tủ rượu', 'TuRuou', '../../asset/image/background/TuRuou.jpg'),
(20, 'Tủ áo', 'TuAo', '../../asset/image/background/TuAo.jpg'),
(21, 'Tủ âm tường', 'TuAmTuong', '../../asset/image/background/TuAmTuong.jpg'),
(22, 'Tủ Giày', 'TuGiay', '../../asset/image/background/TuGiay.jpg'),
(23, 'Kệ phòng khách', 'KePhongKhach', '../../asset/image/background/KePhongKhach.jpg'),
(24, 'Tủ bếp', 'TuBep', '../../asset/image/background/TuBep.jpg'),
(25, 'Phụ kiện bếp', 'PhuKienBep', '../../asset/image/background/PhuKienBep.jpg'),
(26, 'Đảo bếp', 'DaoBep', '../../asset/image/background/DaoBep.jpg'),
(27, 'Quầy bar', 'QuayBar', '../../asset/image/background/QuayBar.jpg'),
(28, 'Đèn trang trí', 'DenTrangTri', '../../asset/image/background/DenTrangTri.jpg'),
(29, 'Đồng hồ', 'DongHo', '../../asset/image/background/DongHo.jpg'),
(30, 'Dụng cụ bếp', 'DungCuBep', '../../asset/image/background/DungCuBep.jpg'),
(31, 'Gối và thú bông', 'GoiThuBong', '../../asset/image/background/GoiThuBong.jpg'),
(32, 'Khung gương', 'KhungGuong', '../../asset/image/background/KhungGuong.jpg'),
(33, 'Nệm', 'NemHangTrangTri', '../../asset/image/background/NemHangTrangTri.jpg'),
(34, 'Thảm', 'Tham', '../../asset/image/background/Tham.jpg'),
(35, 'Tranh', 'Tranh', '../../asset/image/background/Tranh.jpg'),
(36, 'Bàn ngoài trời', 'BanNgoaiTroi', '../../asset/image/background/BanNgoaiTroi.jpg'),
(37, 'Ghế ngoài trời', 'GheNgoaiTroi', '../../asset/image/background/GheNgoaiTroi.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_loai`
--

CREATE TABLE `tb_loai` (
  `id` int(11) NOT NULL,
  `tenloai` varchar(255) NOT NULL,
  `quanlyloai` varchar(255) NOT NULL,
  `background_loai` char(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_loai`
--

INSERT INTO `tb_loai` (`id`, `tenloai`, `quanlyloai`, `background_loai`) VALUES
(1, 'Sofa và Armchair', 'SofaArmchair', '../../asset/image/background/SofaArmchair.jpg'),
(2, 'Bàn', 'Ban', '../../asset/image/background/Ban.jpg'),
(3, 'Ghế', 'Ghe', '../../asset/image/background/Ghe.jpg'),
(4, 'Giường ngủ', 'GiuongNgu', '../../asset/image/background/GiuongNgu.jpg'),
(5, 'Tủ và Kệ', 'TuKe', '../../asset/image/background/TuKe.jpg'),
(6, 'Bếp', 'Bep', '../../asset/image/background/Bep.jpg'),
(7, 'Hàng trang trí', 'HangTrangTri', '../../asset/image/background/HangTrangTri.jpg'),
(8, 'Ngoại thất', 'NgoaiThat', '../../asset/image/background/NgoaiThat.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_register`
--

CREATE TABLE `tb_register` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sđt` int(20) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_register`
--

INSERT INTO `tb_register` (`id`, `user`, `email`, `sđt`, `pass`) VALUES
(1, 'ad', 'admin@admin.com', 567384637, 'admin'),
(2, 'tung', 'tungtrinhthanh0311@gmail.com', 485748372, 'Tung031102'),
(3, 'nam', 'nambeo102@gmail.com', 436375896, 'nambeo123'),
(4, 'manh', 'manh3892@gmail.com', 2147483647, 'manh123'),
(5, 'khánh', 'khanhcung0318@gmail.com', 2147483647, 'Khanh1808');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sanpham`
--

CREATE TABLE `tb_sanpham` (
  `id` int(11) NOT NULL,
  `tensp` varchar(255) NOT NULL,
  `img` char(150) NOT NULL,
  `kichthuoc` varchar(255) NOT NULL,
  `gia` int(20) NOT NULL,
  `chatlieu` varchar(255) NOT NULL,
  `soluongton` int(20) NOT NULL,
  `ma_loai` int(20) NOT NULL,
  `ma_item` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_sanpham`
--

INSERT INTO `tb_sanpham` (`id`, `tensp`, `img`, `kichthuoc`, `gia`, `chatlieu`, `soluongton`, `ma_loai`, `ma_item`) VALUES
(1, 'Sofa 3 chỗ Osaka mẫu 1 vải 29', '../../asset/image/SofaArmchair/Sofa-1.jpg', 'D2060 - R750 - C820/400 mm', 28900000, '- Chân Inox màu gold, tay gỗ, bọc vải, nệm ngồi tháo rời', 11, 1, 1),
(2, 'Sofa 3 chỗ Osaka mẫu 1 vải 46', '../../asset/image/SofaArmchair/Sofa-2.jpg', 'D2060 - R750 - C820/400 mm', 28900000, '- Chân Inox màu gold, tay gỗ, bọc vải, nệm ngồi tháo rời', 32, 1, 1),
(3, 'Sofa 3 chỗ Osaka mẫu 1 vải 65', '../../asset/image/SofaArmchair/Sofa-3.jpg', 'D2060 - R750 - C820/400 mm', 28900000, '- Chân Inox màu gold, tay gỗ, bọc vải, nệm ngồi tháo rời', 32, 1, 1),
(4, 'Sofa Penny 3 chỗ da Veneza 506 MB', '../../asset/image/SofaArmchair/Sofa-4.jpg', 'D2400 - R880 - C850 mm\r\n', 61860000, '- Chân kim loại sơn, nệm bọc da tự nhiên, nệm ngồi & lưng rời', 32, 1, 1),
(5, 'Sofa Poppy góc trái vải màu cam', '../../asset/image/SofaArmchair/Sofa-5.jpg', 'D2400/1350 - R830 - C700 mm', 29360000, '- Chân gỗ\r\n- Vải cao cấp', 21, 1, 2),
(6, 'Sofa Poppy góc phải vải màu cam', '../../asset/image/SofaArmchair/Sofa-6.jpg', 'D2400/1350 - R830 - C700 mm', 29360000, '- Chân gỗ\r\n- Vải cao cấp', 32, 1, 2),
(7, 'Sofa Poppy góc phải vải màu xám', '../../asset/image/SofaArmchair/Sofa-7.jpg', 'D2400/1350 - R830 - C700 mm', 29360000, '- Chân gỗ\r\n- Vải cao cấp', 12, 1, 2),
(8, 'Sofa Poppy góc trái vải màu xám', '../../asset/image/SofaArmchair/Sofa-8.jpg', 'D2400/1350 - R830 - C700 mm', 29360000, '- Chân gỗ\r\n- Vải cao cấp', 32, 1, 2),
(9, 'Armchair Leonard Leat/Meta 37528P', '../../asset/image/SofaArmchair/Sofa-9.jpg', 'D600 - R770 - H730 mm\r\n', 28520000, '- Khung kim loại\r\n- Nhồi nệm bọc da tổng hợp', 43, 1, 3),
(10, 'Armchair Peony Flower 84685K', '../../asset/image/SofaArmchair/Sofa-10.jpg', 'D810-R750-C700 mm', 32400000, '- Chân kim loại xoay màu gold-khng gỗ\r\n- Nệm bọc vải 100% Polyester', 32, 1, 3),
(11, 'Armchair Royal màu đỏ 2041/17', '../../asset/image/SofaArmchair/Sofa-11.jpg', 'D810 - R800 - C750 mm', 11900001, '- Chân kim loại 2 màu\r\n- Nệm bọc vải cao cấp', 43, 1, 3),
(12, 'Armchair Royal vải 2041/9', '../../asset/image/SofaArmchair/Sofa-12.jpg', 'D810 - R800 - C750 mm', 11900001, '- Chân kim loại 2 màu\r\n- Nệm bọc vải cao cấp', 32, 1, 3),
(13, 'Ghế bench Gallet 122cm H122x46x43 37245P', '../../asset/image/SofaArmchair/Sofa-13.jpg', 'D1220 - R460 - C430 mm', 15950001, '- Khung kim loại\r\n- Nhồi nệm bọc da tổng hợp', 43, 1, 4),
(14, 'Bench Cabo vải KD1085-11 PMA491015 F1', '../../asset/image/SofaArmchair/Sofa-14.jpg', 'D1400 - R370 - C450 mm', 10400000, '- Khung chân kim loại/ gỗ walnut, bọc vải', 45, 1, 4),
(15, 'Bench Elegance màu tự nhiên da cognac', '../../asset/image/SofaArmchair/Sofa-15.jpg', 'D1500 - R350 - C460 mm', 26770000, '- Gỗ Ash (tần bì) đặc tự nhiên nhập khẩu từ Mỹ\r\n- Da bò nhập khẩu Italy', 21, 1, 4),
(16, 'Bench Elegance màu tự nhiên da xanh', '../../asset/image/SofaArmchair/Sofa-16.jpg', 'D1500 - R350 - C460 mm', 25490000, '- Gỗ Ash (tần bì) đặc tự nhiên nhập khẩu từ Mỹ\r\n- Da bò nhập khẩu Italy', 32, 1, 4),
(17, 'Ghế Lazboy 10T352 Shannon da Sienna', '../../asset/image/SofaArmchair/Sofa-17.jpg', '- D1060 - R860 - C970 mm', 27490000, '- Khung gỗ cao su bọc da bò cao cao cấp', 43, 1, 5),
(18, 'Ghế Lazboy Canyon 10T560 Da Pebble', '../../asset/image/SofaArmchair/Sofa-18.jpg', 'D950- R1040- C1130 mm', 41690000, '- Khung gỗ cao su bọc da bò cao cao cấp', 32, 1, 5),
(19, 'Ghế Lazboy Canyon 10T560 Sienna', '../../asset/image/SofaArmchair/Sofa-19.jpg', 'D950- R1040- C1130 mm', 39500000, '- Khung gỗ cao su bọc da bò cao cao cấp', 32, 1, 5),
(20, 'Ghế Lazboy Điện Lancer 1Pt 515 Da Sienna', '../../asset/image/SofaArmchair/Sofa-20.jpg', 'D950 - R850 - C1030 mm', 46149999, '- Khung gỗ cao su bọc da bò cao cao cấp', 43, 1, 5),
(21, 'Bàn nước bar 200×75 75167K', '../../asset/image/Ban/Ban-1.jpg', 'D2000 - R750 - C370 mm\r\n', 69500000, '- Gỗ công nghiệp', 32, 2, 6),
(22, 'Bàn nước Elegance màu tự nhiên', '../../asset/image/Ban/Ban-2.jpg', 'D1200 - R600 - C400 mm', 23330000, '- Gỗ Ash (tần bì) đặc tự nhiên nhập khẩu từ Mỹ', 33, 2, 6),
(23, 'Bàn nước Elegance màu đen', '../../asset/image/Ban/Ban-3.jpg', 'D1200 - R600 - C400 mm', 23330000, '- Gỗ Ash (tần bì) đặc tự nhiên nhập khẩu từ Mỹ', 21, 2, 6),
(24, 'Bàn nước Bridge Gỗ màu nâu', '../../asset/image/Ban/Ban-4.jpg', 'D1200 - R600 - C400 mm', 28820000, '- Gỗ sồi đặc tự nhiên nhập khẩu từ Mỹ', 12, 2, 6),
(25, 'Bàn ăn Peak hiện đại mặt Ceramic vân mây', '../../asset/image/Ban/Ban-5.jpg', 'D2000-R000-C750mm', 44900000, '- Chân composite\r\n- Không thấm nước\r\n- Mặt bàn Ceramic nhập khẩu Ý chịu nhiệt', 32, 2, 7),
(26, 'Bàn ăn Roma 6 chỗ', '../../asset/image/Ban/Ban-6.jpg', 'D1800 -R900 - C750 mm', 9720000, '- Gỗ dẻ gai, mặt melamine vân cẩm thạch', 34, 2, 7),
(27, 'Bàn ăn gỗ Pio 6 chỗ 1m8 mẫu 2', '../../asset/image/Ban/Ban-7.jpg', 'D1800-R1000-C750', 12670001, '- Gỗ dẻ gai, mặt melamine vân cẩm thạch', 12, 2, 7),
(28, 'Bàn ăn gỗ Miami 1m7', '../../asset/image/Ban/Ban-8.jpg', 'D1700 - R800 - C760 mm', 12900000, '- Gỗ sồi tự nhiên\r\n- MDF chống ẩm', 55, 2, 7),
(29, 'Bàn Bên Cave Amber 230244Z', '../../asset/image/Ban/Ban-9.jpg', 'Ø440-C560 mm', 7890000, '- Kim loại màu gold\r\n- Kính màu amber', 22, 2, 8),
(30, 'Bàn bên Cave Green 230243Z', '../../asset/image/Ban/Ban-10.jpg', 'Ø440-C560 mm', 7890000, '- Kim loại màu gold\r\n- Kính màu xanh', 22, 2, 8),
(31, 'Bàn bên Charme Black 84864K', '../../asset/image/Ban/Ban-11.jpg', 'Ø500 - C420 mm', 7050000, '- kim loai màu gold\r\n- Đen', 32, 2, 8),
(32, 'Bàn Bên Flamingo 84938k', '../../asset/image/Ban/Ban-12.jpg', 'Ø585-C405 mm', 12870000, '- Kim loại màu gold\r\n- Kính trắng trong', 12, 2, 8),
(33, 'Bàn làm việc Finn 260011', '../../asset/image/Ban/Ban-13.jpg', 'D1100-R565-C1020 mm', 25700000, '- Gỗ màu nâu/xanh lá', 32, 2, 9),
(34, 'Bàn làm việc Maxine', '../../asset/image/Ban/Ban-14.jpg', 'D1800-R750/1180-C750', 51940000, '- Khung gỗ Okumi\r\n- MDF veneer recon Walnut\r\n- Chân inox mạ PVD màu gold, mặt bàn bọc da', 32, 2, 9),
(35, 'Bàn làm việc Osaka', '../../asset/image/Ban/Ban-15.jpg', 'D1380 - R600 - C760 mm', 22900000, '- Gỗ Oak\r\n- MDF veneer Oak\r\n- Inox 304 màu gold', 33, 2, 9),
(36, 'Bàn làm việc Osaka KA', '../../asset/image/Ban/Ban-16.jpg', 'D1380 - R600 - C810 mm', 48900000, '- Chân kim loại\r\n- Mặt gỗ công nghiệp sơn', 33, 2, 9),
(37, 'Bàn phấn Madame màu Ebony P87W', '../../asset/image/Ban/Ban-17.jpg', 'D1300-R605-785 mm', 64500000, '- Chân kim loại sơn , mdf veneer Ebony , kính thủy', 32, 2, 10),
(38, 'Bàn phấn Madame Termocotto P67W', '../../asset/image/Ban/Ban-18.jpg', 'D1300-R605-785 mm', 64500000, '- Chân kim loại sơn , mdf veneer Termocotto, kính thủy', 35, 2, 10),
(39, 'Bàn trang điểm Mây – Mẫu 2', '../../asset/image/Ban/Ban-19.jpg', 'D1200- R400- C750/1330 mm', 24450000, '- Gỗ Acacia (Tràm)- Mây tự nhiên\r\n- Chân bọc inox mạ gold', 43, 2, 10),
(40, 'Bàn trang điểm Skagen', '../../asset/image/Ban/Ban-20.jpg', 'D1200 - R500 - C750/1200 mm', 12670001, '- Chân gỗ mahogany , mặt mdf sơn màu trắng\r\n- Noughat , gương kính thủy 5mm\r\n- Bàn phấn có thể gấp khung gương xuống thành bàn làm việc', 43, 2, 10),
(41, 'Ghế ăn Peak vải cam', '../../asset/image/Ghe/ghe-1.jpg', 'D470-R490-C800mm', 4900000, '- Bọc Vải\r\n- Chân sắt sơn tĩnh điện màu đen', 43, 3, 11),
(42, 'Ghế ăn Peak vải xanh', '../../asset/image/Ghe/ghe-2.jpg', 'D470-R490-C800mm', 4900000, '- Bọc Vải\r\n- Chân sắt sơn tĩnh điện màu đen', 22, 3, 11),
(43, 'Ghế ăn Rusty 80981K', '../../asset/image/Ghe/ghe-3.jpg', 'D550 - R540 - C790 mm', 12900000, '- Chân kim loại sơn\r\n- Khung mdf bọc da công nghiệp', 32, 3, 11),
(44, 'Ghế ăn xoay Albert Kuip Taupe 110502Z', '../../asset/image/Ghe/ghe-4.jpg', 'D520-R450-C840 mm', 12300000, '- Ghế xoay Aluminium, Polyester màu taupe', 33, 3, 11),
(45, 'Ghế Bar Bridge màu nâu Da Cognac', '../../asset/image/Ghe/ghe-5.jpg', 'D500 - R500 - C750/980 mm', 29900000, '- Khung gỗ sồi đặc tự nhiên nhập khẩu từ Mỹ\r\n- Da Ý tự nhiên cao cấp', 43, 3, 12),
(46, 'Ghế bar Fifties da màu cognac', '../../asset/image/Ghe/ghe-6.jpg', 'D445- R575- C650/910 mm', 20480000, '- Chân kim loại màu gold\r\n- Nệm bọc da tổng hợp cao cấp', 12, 3, 12),
(47, 'Ghế bar Fifties da màu mud brown', '../../asset/image/Ghe/ghe-7.jpg', 'D505 - R540 - C650/950 mm', 19539000, '- Chân kim loại màu gold\r\n- Nệm bọc da tổng hợp cao cấp', 32, 3, 12),
(48, 'Ghế bar Aida da Nougat', '../../asset/image/Ghe/ghe-8.jpg', 'D445- R575- C650/910 mm', 9622000, '- Khung kim loại\r\n- Bọc da tổng hợp cao cấp', 11, 3, 12),
(49, 'Xe đẩy đồ ăn màu vàng đồng W3 8MM 53028', '../../asset/image/Ghe/ghe-9.jpg', 'D860-R450-C900 mm', 17500000, '- Kim loại\r\n- Thủy tinh', 32, 3, 13),
(50, 'Xe đẩy thép/pu/mdf màu cà phê 58257', '../../asset/image/Ghe/ghe-10.jpg', 'D470-R365-C760 mm', 8340000, '- Kim loại\r\n- Da tổng hợp', 21, 3, 13),
(51, 'Xe đẩy đồ ăn Love', '../../asset/image/Ghe/ghe-11.jpg', 'D800- R510- C810', 25773000, '- Kim loại sơn đen , mặt kính cường lực màu trà', 32, 3, 13),
(52, 'Xe đẩy đồ ăn Giro', '../../asset/image/Ghe/ghe-12.jpg', 'D940- R480- C820', 37430000, '- Kim loại sơn đen\r\n- Mặt gỗ sơn , khay tròn da tổng hợp màu Cognac', 32, 3, 13),
(53, 'Giường Hộc Kéo Iris 1M6 Vải Belfast 41', '../../asset/image/GiuongNgu/giuongngu-1.jpg', 'D2000- R1600- C1112 mm', 14630000, '- Khung gỗ MFC, bọc vải\r\n- 4 hộc kéo', 33, 4, 14),
(54, 'Giường Hộc Kéo Iris 1M8 Vải Belfast 41', '../../asset/image/GiuongNgu/giuongngu-1.jpg', 'D2000 - R1800 - C1112 mm', 15610000, '- Khung gỗ MFC bọc vải\r\n- 4 hộc kéo', 21, 4, 14),
(55, 'Giường hộc kéo Iris 1m6 Stone', '../../asset/image/GiuongNgu/giuongngu-1.jpg', 'D2000- R1600- C1112 mm', 14630000, '- Khung gỗ MFC bọc vải\r\n- 4 hộc kéo', 21, 4, 14),
(56, 'Giường hộc kéo Iris 1m8 Stone', '../../asset/image/GiuongNgu/giuongngu-1.jpg', 'D2000- R1800- C1112 mm', 15610000, '- Khung gỗ MFC bọc vải\r\n- 4 hộc kéo', 32, 4, 14),
(57, 'Bàn đầu giường Mây mẫu 2', '../../asset/image/GiuongNgu/giuongngu-2.jpg', 'D500- R400- C500 mm', 5400000, '- Gỗ Acacia (Tràm)- Mây tự nhiên\r\n- Chân bọc inox mạ gold', 43, 4, 15),
(58, 'Bàn đầu giường Maxine', '../../asset/image/GiuongNgu/giuongngu-3.jpg', 'D500- R450- C550', 15610000, '- Khung gỗ Okumi\r\n- MDF veneer recon Walnut\r\n- Chân inox mạ PVD màu gold', 43, 4, 15),
(59, 'Bàn đầu giường Cabo PMA532058 F1', '../../asset/image/GiuongNgu/giuongngu-4.jpg', 'D500 - R400 - C550 mm', 8900000, '- MDF màu walnut, chân kim loại sơn đen, mặt ngoài hộc kéo màu xanh Olive', 21, 4, 15),
(60, 'Bàn đầu giường Shadow', '../../asset/image/GiuongNgu/giuongngu-5.jpg', 'D610- R400- C520', 9900000, '- Chân, tay nắm kim loại màu đồng\r\n- MDF Veneer sồi', 32, 4, 15),
(61, 'Nệm Sen Việt 1m4', '../../asset/image/GiuongNgu/giuongngu-6.jpg', 'D2000 - R1400 - C250', 8793000, '- Lò xo túi độc lập cao 25cm Mousse đàn hồi tỷ trọng cao Thiết kế 3 viền tinh tế, sang trọng', 32, 4, 16),
(62, 'Nệm Sen Việt 1m6', '../../asset/image/GiuongNgu/giuongngu-6.jpg', 'D2000- R1600- C250', 11003237, '- Lò xo túi độc lập cao 25cm Mousse đàn hồi tỷ trọng cao Thiết kế 3 viền tinh tế, sang trọng', 32, 4, 16),
(63, 'Nệm Sen Việt 1m8', '../../asset/image/GiuongNgu/giuongngu-6.jpg', 'D2000- R1800- C250', 12260000, '- Lò xo túi độc lập cao 25cm Mousse đàn hồi tỷ trọng cao Thiết kế 3 viền tinh tế, sang trọng', 32, 4, 16),
(64, 'Nệm Luxury Golden Black 1m6', '../../asset/image/GiuongNgu/giuongngu-7.jpg', 'D2000 - R1600 - C280', 47130000, '- Khung lò xo túi mousse, vải', 21, 4, 16),
(65, 'Tủ tivi Elegance màu tự nhiên', '../../asset/image/TuKe/TuKe-1.jpg', 'D1745 - R420 - C430 mm', 49250000, '- Gỗ Ash (tần bì) đặc tự nhiên nhập khẩu từ Mỹ', 11, 5, 17),
(66, 'Tủ tivi Elegance màu đen', '../../asset/image/TuKe/TuKe-2.jpg', 'D1745 - R420 - C430 mm', 49250000, '- Gỗ Ash (tần bì) đặc tự nhiên nhập khẩu từ Mỹ', 22, 5, 17),
(67, 'Tủ tivi Bridge Gỗ 1m5 – Màu nâu', '../../asset/image/TuKe/TuKe-3.jpg', 'D1500 - R450 - C450 mm', 41580000, '- Gỗ sồi đặc tự nhiên nhập khẩu từ Mỹ', 21, 5, 17),
(68, 'Tủ tivi Bridge Gỗ 1m5 – Màu Tự nhiên', '../../asset/image/TuKe/TuKe-4.jpg', 'D1500 - R450 - C450 mm', 41580000, '- Gỗ sồi đặc tự nhiên nhập khẩu từ Mỹ', 21, 5, 17),
(69, 'Tủ Ly Jazz', '../../asset/image/TuKe/TuKe-5.jpg', 'D1600 - R450 - C810mm', 24900000, '- Mặt gỗ sồi tự nhiên ghép\r\n- Chân sắt sơn tĩnh điện', 11, 5, 18),
(70, 'Tủ ly OBLO MFC AC5001', '../../asset/image/TuKe/TuKe-6.jpg', 'D1900 - R480 - C510', 36230000, '- MDF\r\n- Veneer Walnut Mỹ\r\n- Mặt Laminate marble', 32, 5, 18),
(71, 'Tủ Buffet Osaka', '../../asset/image/TuKe/TuKe-7.jpg', 'D1800 - R400 - C815 mm', 29900000, '- Gỗ Oak\r\n- MDF veneer Oak\r\n- Inox 304 màu gold', 32, 5, 18),
(72, 'Tủ ly Bridge gỗ nâu', '../../asset/image/TuKe/TuKe-8.jpg', 'D1500 - R450 - C670', 56650000, '- Gỗ sồi đặc tự nhiên nhập khẩu từ Mỹ', 22, 5, 18),
(73, 'Tủ rượu Cabo PMA672019-2', '../../asset/image/TuKe/TuKe-9.jpg', 'D900 - R500 - C1600 mm', 26290000, '- Gỗ\r\n- MDF veneer walnut, chân kim loại, cửa màu xanh Olive họa tiết Brasilia', 43, 5, 19),
(74, 'Tủ Rượu Claude 4100025Z', '../../asset/image/TuKe/TuKe-10.jpg', 'D435-R315-C1185 mm', 11800000, '- Gỗ\r\n- MDF màu tự nhiên', 12, 5, 19),
(75, 'Tủ Rượu Edgar 4100028Z', '../../asset/image/TuKe/TuKe-11.jpg', 'D560-R380-C1125 mm', 19900000, '- Chân kim loại sơn\r\n- MDF', 32, 5, 19),
(76, 'Tủ Rượu Gujilow 410071Z', '../../asset/image/TuKe/TuKe-12.jpg', 'D800-R380-C1000 mm', 29700000, '- Chân kim loại sơn đen\r\n- MDF mây tự nhiên', 44, 5, 19),
(77, 'Tủ áo Acrylic', '../../asset/image/TuKe/TuKe-13.jpg', 'D1600 - R600 - C2000 mm', 32900000, '- Thùng MFC chống ẩm\r\n- Mặt MDF Acrylic Parc50', 32, 5, 20),
(78, 'Tủ áo Harmony', '../../asset/image/TuKe/TuKe-14.jpg', 'D980 - R630 - C1980', 12670001, '- Gỗ sồi + tràm\r\n- MDF sơn trắng', 33, 5, 20),
(79, 'Tủ áo hiện đại', '../../asset/image/TuKe/TuKe-15.jpg', 'D1600-R600-C2000mm', 24900000, '- MFC chống ẩm\r\n- Phụ kiện Hafele', 33, 5, 20),
(80, 'Tủ áo hiện đại', '../../asset/image/TuKe/TuKe-16.jpg', 'D1600-R600-C2000mm', 24450000, '- MFC chống ẩm\r\n- Phụ kiện Hafele', 43, 5, 20),
(81, 'Tủ âm Canon', '../../asset/image/TuKe/TuKe-17.jpg', 'D3000/2700 - R600 - C2400', 47130000, '- Gỗ óc chó (Walnut)\r\n- Gỗ ép và ván lạng Sồi nhân tạo (Oak recon)', 32, 5, 21),
(82, 'Tủ âm Diamond', '../../asset/image/TuKe/TuKe-18.jpg', 'D2500 - R600 - C2200', 47130000, '- Gỗ xà cừ (Mahogany)\r\n- MDF', 21, 5, 21),
(83, 'Tủ âm Kiwi', '../../asset/image/TuKe/TuKe-19.jpg', 'D2275/4400/2275 - R600 - C2400', 47130000, '- Gỗ óc chó (Walnut)\r\n- Gỗ ép và ván lạng óc chó nhân tạo (Walnut recon)', 32, 5, 21),
(84, 'Tủ âm Whitecalypso', '../../asset/image/TuKe/TuKe-20.jpg', 'D3480 - R600 - C2350', 47130000, '- Gỗ óc chó (Walnut)\r\n- Gỗ xà cừ (Mahogany)\r\n- Gỗ ép, ván lạng óc chó nhân tạo (Walnut Recon)', 11, 5, 21),
(85, 'Kệ giày Caruso 5 Doors', '../../asset/image/TuKe/TuKe-21.jpg', 'D500 - R140 - C1700 mm', 10900000, '- Kim loại', 22, 5, 22),
(86, 'Tủ giày Caruso 2 ngăn nâu75X77 86217K', '../../asset/image/TuKe/TuKe-22.jpg', 'D750 - R220 - C770 mm', 14500000, '- Kim loại', 32, 5, 22),
(87, 'Tủ giày Caruso 3 ngăn trắng H103x50x14 9287K', '../../asset/image/TuKe/TuKe-23.jpg', 'D500 - R140 - C1030 mm', 6900000, '- Kim loại', 32, 5, 22),
(88, 'Tủ giày Caruso 5 ngăn trắng H170x50x14 9288K', '../../asset/image/TuKe/TuKe-24.jpg', 'D500 - R140 - C700 mm', 10900000, '- Kim loại', 32, 5, 22),
(89, 'Kệ trang trí Eden', '../../asset/image/TuKe/TuKe-25.jpg', 'D1400-R400-C2000', 21510000, '- Kim loại màu gold\r\n- Kính', 32, 5, 23),
(90, 'Kệ kim loại đen 6 tầng', '../../asset/image/TuKe/TuKe-26.jpg', 'D1010 - R390 - C1850 mm', 16690000, '- Kim loại', 32, 5, 23),
(91, 'Kệ tạp chí màu nâu gỗ W60 58890', '../../asset/image/TuKe/TuKe-27.jpg', 'D600-R410-C515 mm', 6060000, '- Da tổng hợp\r\n- Kim loại', 32, 5, 23),
(92, 'Kệ Hangar cao – Nâu', '../../asset/image/TuKe/TuKe-28.jpg', 'D1130-R400-C2000', 67890000, '- Kim loại sơn màu đen\r\n- MDF veneer', 22, 5, 23),
(93, 'Tủ bếp Daily', '../../asset/image/Bep/Bep-1.jpg', 'Tùy theo không gian nhà bếp thực tế', 0, '- Thùng MFC\r\n– Cánh Acrylic và sơn bóng', 0, 6, 24),
(94, 'Tủ bếp Fancy', '../../asset/image/Bep/Bep-2.jpg', 'Tùy theo không gian nhà bếp thực tế', 0, '- Thùng MFC\r\n– Cánh Acrylic và sơn bóng', 0, 6, 24),
(95, 'Tủ bếp Olive', '../../asset/image/Bep/Bep-3.jpg', 'Tùy theo không gian nhà bếp thực tế', 0, '- Thùng MFC\r\n– Cánh Acrylic và sơn bóng', 0, 6, 24),
(96, 'Tủ bếp Elita', '../../asset/image/Bep/Bep-4.jpg', 'Tùy theo không gian nhà bếp thực tế', 0, '- Thùng MFC\r\n– Cánh Acrylic và sơn bóng', 0, 6, 24),
(97, 'Bộ khung rổ kéo 5 tầng', '../../asset/image/Bep/Bep-5.jpg', '', 0, '', 0, 6, 25),
(98, 'Bộ khung úp chén đĩa 3 tầng', '../../asset/image/Bep/Bep-6.jpg', '', 0, '', 0, 6, 25),
(99, 'Bộ mâm xoay', '../../asset/image/Bep/Bep-7.jpg', '', 0, '', 0, 6, 25),
(100, 'Bộ phụ kiện rổ kéo 1 móc treo rổ', '../../asset/image/Bep/Bep-8.jpg', '', 0, '', 0, 6, 25),
(101, 'Bar & đảo bếp Calypso', '../../asset/image/Bep/Bep-9.jpg', '', 0, '- Thùng MFC chống ẩm\r\n- Cửa\r\n- Mặt hộc kéo\r\n- Gỗ oak\r\n- MDF veneer teak recon\r\n- Bản lề, đế bản lề\r\n- Nêm giảm chấn Blum\r\n- Kính trắng tủ treo\r\n- Tay nắm\r\n- Ray thường Hafele', 0, 6, 26),
(102, 'Bar & đảo bếp Lovely', '../../asset/image/Bep/Bep-10.jpg', '', 0, '- Thùng MFC chống ẩm\r\n- Cửa\r\n- Mặt hộc kéo gỗ oak\r\n- MDF veneer oak tự nhiên\r\n- Bản lề, đế bản lề\r\n- Nêm giảm chấn Blum\r\n- Kính trắng tủ treo\r\n- Tay nắm\r\n- Ray thường Hafele', 0, 6, 26),
(103, 'Đảo bếp Classic', '../../asset/image/Bep/Bep-11.jpg', '', 0, '- Gỗ xà cừ tự nhiên\n- Bản lề, đế bản lề\n- Nêm giảm chấn Blum\n- Ray bi 3 tầng Hafele\n- Kính trắng tủ treo', 0, 6, 26),
(104, 'Đảo bếp Sunny', '../../asset/image/Bep/Bep-12.jpg', 'Tùy theo không gian thực tế', 0, '- Thùng MFC chống ẩm\r\n- Cửa\r\n- Mặt hộc MDF sơn bóng 30% và MDF walnut\r\n- Bản lề, đế bản lề\r\n- Nêm giảm chấn Blum\r\n- Tay nắm ray thường Hafele', 0, 6, 26),
(105, 'Bar Bếp Calypso', '../../asset/image/Bep/Bep-13.jpg', 'Tùy theo không gian thực tế', 0, '- Thùng MFC chống ẩm\r\n- Cửa\r\n- Mặt hộc kéo\r\n- Gỗ oak\r\n- MDF veneer teak recon\r\n- Bản lề, đế bản lề\r\n- Nêm giảm chấn Blum\r\n- Kính trắng tủ treo\r\n- Tay nắm\r\n- Ray thường Hafele', 0, 6, 27);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_giohang`
--
ALTER TABLE `tb_giohang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_giohang_chitiet`
--
ALTER TABLE `tb_giohang_chitiet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_giohang_chitiet_ibfk_1` (`ma_giohang`),
  ADD KEY `ma_sanpham` (`ma_sanpham`);

--
-- Indexes for table `tb_hotrokhachang`
--
ALTER TABLE `tb_hotrokhachang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_item`
--
ALTER TABLE `tb_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_loai`
--
ALTER TABLE `tb_loai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_register`
--
ALTER TABLE `tb_register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_sanpham`
--
ALTER TABLE `tb_sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ma_phong` (`ma_loai`),
  ADD KEY `ma_item` (`ma_item`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_giohang`
--
ALTER TABLE `tb_giohang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_hotrokhachang`
--
ALTER TABLE `tb_hotrokhachang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_item`
--
ALTER TABLE `tb_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tb_loai`
--
ALTER TABLE `tb_loai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_register`
--
ALTER TABLE `tb_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_sanpham`
--
ALTER TABLE `tb_sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_giohang_chitiet`
--
ALTER TABLE `tb_giohang_chitiet`
  ADD CONSTRAINT `tb_giohang_chitiet_ibfk_2` FOREIGN KEY (`ma_sanpham`) REFERENCES `tb_sanpham` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tb_giohang_chitiet_ibfk_3` FOREIGN KEY (`ma_giohang`) REFERENCES `tb_giohang` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tb_sanpham`
--
ALTER TABLE `tb_sanpham`
  ADD CONSTRAINT `tb_sanpham_ibfk_1` FOREIGN KEY (`ma_loai`) REFERENCES `tb_loai` (`id`),
  ADD CONSTRAINT `tb_sanpham_ibfk_2` FOREIGN KEY (`ma_item`) REFERENCES `tb_item` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
