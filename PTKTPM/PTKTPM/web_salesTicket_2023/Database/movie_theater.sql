-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2023 at 05:46 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie_theater`
--

-- --------------------------------------------------------

--
-- Table structure for table `gia`
--

CREATE TABLE `gia` (
  `idVe` int(3) NOT NULL,
  `loaiVe` text NOT NULL,
  `giaTien` int(100) NOT NULL,
  `TenVe` text NOT NULL,
  `idPhong` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gia`
--

INSERT INTO `gia` (`idVe`, `loaiVe`, `giaTien`, `TenVe`, `idPhong`) VALUES
(1, 'single', 60000, 'Ghế đơn', NULL),
(2, 'couple', 100000, 'Ghế đôi', NULL),
(3, 'random', 80000, 'Ghế ghép', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `idPhim` int(5) NOT NULL,
  `tenPhim` text NOT NULL,
  `thoiLuong` text NOT NULL,
  `theLoai` text NOT NULL,
  `dienVien` text NOT NULL,
  `daoDien` text NOT NULL,
  `namSanXuat` year(4) NOT NULL,
  `moTa` text NOT NULL,
  `kieuPhim` text NOT NULL,
  `linkImg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`idPhim`, `tenPhim`, `thoiLuong`, `theLoai`, `dienVien`, `daoDien`, `namSanXuat`, `moTa`, `kieuPhim`, `linkImg`) VALUES
(1, 'Quỷ ám', '01:15:00', 'Kinh dị', 'Leslie Odom Jr., Ellen Burstyn, Lidya Jewett, Olivia Marcum, Ann Dowd', 'David Gordon Green', '2023', 'Phần tiếp theo của bộ phim năm 1973 kể về một cô bé 12 tuổi bị ám bởi một thực thể ma quỷ bí ẩn, buộc mẹ cô phải tìm đến sự giúp đỡ của hai linh mục để cứu cô.', 'playing', 'https://cinestar.com.vn/pictures/Cinestar/10-2023/quy-am-tin-do.jpg'),
(3, 'ĐẤT RỪNG PHƯƠNG NAM (K)', '01:20', 'Tình Cảm, Phiêu Lưu', 'Hồng Ánh, Huỳnh Hạo Khang, Mai Tài Phến, Công Ninh, Hứa Vĩ Văn, Tuyền Mập, Tuấn Trần', 'Nguyễn Quang Dũng', '2023', 'Sau bao ngày chờ đợi, dự án điện ảnh gợi ký ức tuổi thơ của nhiều thế hệ người Việt chính thức tung hình ảnh đầu tiên đầy cảm xúc. First look poster khắc họa hình ảnh đối lập: bé An đang ôm chặt mẹ giữa một khung cảnh chạy giặc loạn lạc. Cùng chờ đợi và theo dõi thêm hành trình bé An đi tìm cha khắp nam kỳ lục tỉnh cùng các người bạn đồng hành nhé!', 'playing', 'https://cinestar.com.vn/pictures/Cinestar/10-2023/poster-dat-rung-phuong-nam.jpg'),
(4, 'KRAVEN THỢ SĂN THỦ LĨNH', '01:00:00', 'Siêu Anh Hùng, Hành Động', 'Aaron Taylor-Johnson, Russell Crowe, Ariana DeBose, Fred Hechinger, Christopher Abbott', 'J.C. Chandor', '2022', 'Gã nhập cư Nga Sergei Kravinoff đang thực hiện nhiệm vụ chứng minh rằng anh ta là thợ săn vĩ đại nhất thế giới.', 'coming', 'https://cinestar.com.vn/pictures/Cinestar/10-2023/kraven.jpg'),
(5, 'MỸ NHÂN ĐẠO CHÍCH', '01:00:00', 'Phim Hài', 'Uhm Jung-Hwa, Song Sae-Byeok, Bang Min-Ah, Park Ho-San, Son Byung-Ho, Kim Jae-Hwa', 'Lee Seung-Joon', '2021', 'Cặp mẹ con “đạo chích” Ji Hye - Joo Yeong từng thực hiện vô số phi vụ thành công, nhưng mà là… công cốc. Để khép lại sự nghiệp không mấy vẻ vang này, Ji Hye lên kế hoạch trộm số vàng với giá trị lên đến 60 tỷ Won bằng cách lợi dụng trái tim mong manh mới biết yêu của anh chàng tài phiệt Wan Gyu. Nhưng phi vụ đặc biệt này không hề suôn sẻ khi cũng có những kẻ khác đang nhòm ngó số vàng kếch xù này.', 'coming', 'https://cinestar.com.vn/pictures/Cinestar/11-2023/my-nhan-dao-chich.jpg'),
(6, 'HÀNH TINH CÁT PHẦN 2', '02:00:00', 'Hành Động, Khoa Học Viễn Tưởng', 'Timothee Chalamet, Zendaya, Rebecca Ferguson, Javier Bardem, Florence Pugh', 'Denis Villeneuve', '2020', 'Dune: Hành tinh cát - Phần hai là bộ phim sử thi khoa học viễn tưởng của Mỹ ra mắt năm 2023 do Denis Villeneuve đạo diễn vởi kịch bản do Villeneuve, Jon Spaihts và Eric Roth cùng chấp bút.', 'special', 'https://cinestar.com.vn/pictures/Cinestar/11-2023/dune-poster.jpg'),
(7, 'MỸ NHÂN ĐẠO CHÍCH', '01:00:00', 'Phim Hài', 'Uhm Jung-Hwa, Song Sae-Byeok, Bang Min-Ah, Park Ho-San, Son Byung-Ho, Kim Jae-Hwa', 'Lee Seung-Joon', '2021', 'Cặp mẹ con “đạo chích” Ji Hye - Joo Yeong từng thực hiện vô số phi vụ thành công, nhưng mà là… công cốc. Để khép lại sự nghiệp không mấy vẻ vang này, Ji Hye lên kế hoạch trộm số vàng với giá trị lên đến 60 tỷ Won bằng cách lợi dụng trái tim mong manh mới biết yêu của anh chàng tài phiệt Wan Gyu. Nhưng phi vụ đặc biệt này không hề suôn sẻ khi cũng có những kẻ khác đang nhòm ngó số vàng kếch xù này.', 'playing', 'https://cinestar.com.vn/pictures/Cinestar/11-2023/my-nhan-dao-chich.jpg'),
(8, 'HÀNH TINH CÁT PHẦN 2', '02:00:00', 'Hành Động, Khoa Học Viễn Tưởng', 'Timothee Chalamet, Zendaya, Rebecca Ferguson, Javier Bardem, Florence Pugh', 'Denis Villeneuve', '2020', 'Dune: Hành tinh cát - Phần hai là bộ phim sử thi khoa học viễn tưởng của Mỹ ra mắt năm 2023 do Denis Villeneuve đạo diễn vởi kịch bản do Villeneuve, Jon Spaihts và Eric Roth cùng chấp bút.', 'playing', 'https://cinestar.com.vn/pictures/Cinestar/11-2023/dune-poster.jpg'),
(9, 'KRAVEN THỢ SĂN THỦ LĨNH', '01:00:00', 'Siêu Anh Hùng, Hành Động', 'Aaron Taylor-Johnson, Russell Crowe, Ariana DeBose, Fred Hechinger, Christopher Abbott', 'J.C. Chandor', '2022', 'Gã nhập cư Nga Sergei Kravinoff đang thực hiện nhiệm vụ chứng minh rằng anh ta là thợ săn vĩ đại nhất thế giới.', 'playing', 'https://cinestar.com.vn/pictures/Cinestar/10-2023/kraven.jpg'),
(10, 'THÀNH PHỐ NGỦ GẬT\n', '01:20', 'Tâm Lý', 'Quốc Toàn, Minh Hiền, Đức Trí, Tạ Xuân Tuế, Ba Trường,...', 'Lương Đình Dũng', '2023', 'Nhân vật chính là một chàng thanh niên 26 tuổi, sống đơn độc giữa trung tâm thành phố nhộn nhịp, mưu sinh bằng nghề mổ gà. Một ngày, sự xuất hiện của nhóm giang hồ và một cô gái điếm đã tác động đến cuộc sống của anh. Điều đó đã làm cho bản năng hoang dã của chàng thanh niên trỗi dậy không kiểm soát.', 'playing', 'https://cinestar.com.vn/pictures/Cinestar/10-2023/thanh-pho-ngu-gat-poster.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `idPhong` int(3) NOT NULL,
  `tenPhim` text NOT NULL,
  `soluongGheDon` int(30) NOT NULL,
  `soLuongheDoi` int(10) NOT NULL,
  `soLuongGheGhep` int(2) NOT NULL,
  `idPhim` int(3) NOT NULL,
  `idVe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`idPhong`, `tenPhim`, `soluongGheDon`, `soLuongheDoi`, `soLuongGheGhep`, `idPhim`, `idVe`) VALUES
(1, 'Quỷ ám', 48, 6, 6, 1, 0),
(3, 'ĐẤT RỪNG PHƯƠNG NAM (K)', 48, 6, 6, 3, 0),
(7, 'MỸ NHÂN ĐẠO CHÍCH', 48, 6, 6, 7, 0),
(8, 'HÀNH TINH CÁT PHẦN 2', 48, 6, 6, 8, 0),
(9, 'KRAVEN THỢ SĂN THỦ LĨNH', 48, 6, 6, 9, 0),
(10, 'THÀNH PHỐ NGỦ GẬT', 48, 6, 6, 10, 10);

-- --------------------------------------------------------

--
-- Table structure for table `seats`
--

CREATE TABLE `seats` (
  `idVe` int(3) NOT NULL,
  `idGhe` int(3) NOT NULL,
  `loaiGhe` text NOT NULL,
  `soLuongGhe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `showtime`
--

CREATE TABLE `showtime` (
  `idLichChieu` int(3) NOT NULL,
  `idPhim` int(3) NOT NULL,
  `tenPhim` text NOT NULL,
  `kieuPhim` text NOT NULL,
  `lichMot` text NOT NULL,
  `lichHai` text NOT NULL,
  `lichBa` text NOT NULL,
  `lichBon` text NOT NULL,
  `lichNam` text NOT NULL,
  `lichSau` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `showtime`
--

INSERT INTO `showtime` (`idLichChieu`, `idPhim`, `tenPhim`, `kieuPhim`, `lichMot`, `lichHai`, `lichBa`, `lichBon`, `lichNam`, `lichSau`) VALUES
(1, 1, 'Quỷ ám', '', '9:00', '11:30', '12:00', '18:00', '21:30', '09:00'),
(3, 3, 'ĐẤT RỪNG PHƯƠNG NAM (K)', '', '13:50', '17:30', '20:30', '', '', ''),
(7, 7, 'MỸ NHÂN ĐẠO CHÍCH', '', '23:00', '', '', '', '', ''),
(8, 8, 'HÀNH TINH CÁT PHẦN 2', '', '16:40', '19:40', '', '', '', ''),
(9, 9, 'KRAVEN THỢ SĂN THỦ LĨNH', '', '19:00', '21:50', '', '', '', ''),
(10, 10, 'THÀNH PHỐ NGỦ GẬT', '', '09:00', '14:00', '16:00', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gia`
--
ALTER TABLE `gia`
  ADD PRIMARY KEY (`idVe`),
  ADD UNIQUE KEY `idPhim` (`idVe`),
  ADD UNIQUE KEY `idPhong` (`idPhong`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`idPhim`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`idPhong`),
  ADD UNIQUE KEY `idPhim` (`idPhim`);

--
-- Indexes for table `seats`
--
ALTER TABLE `seats`
  ADD PRIMARY KEY (`idGhe`),
  ADD UNIQUE KEY `idVe` (`idVe`);

--
-- Indexes for table `showtime`
--
ALTER TABLE `showtime`
  ADD PRIMARY KEY (`idLichChieu`),
  ADD KEY `idPhim` (`idPhim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
