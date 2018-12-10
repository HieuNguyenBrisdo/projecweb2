-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 09, 2018 at 08:21 AM
-- Server version: 5.6.37
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopdtz`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL,
  `brand` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `detail` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=99 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `brand`, `name`, `price`, `img`, `detail`, `date`) VALUES
(8, 'Smartphone', 'iPhone 6S 256G', 7690000, 'iphone6s.png', 'Điện thoại iPhone 6s 32 GB được nâng cấp độ phân giải camera sau lên 12 MP (thay vì 8 MP như trên iPhone 6), camera có tốc độ lấy nét và chụp nhanh, thao tác chạm để chụp nhẹ nhàng. Chất lượng ảnh trong các điều kiện chụp khác nhau tốt.', '2018-05-05 12:03:22'),
(12, 'Smartphone', 'iPhone 7 Plus 32G', 19900000, 'iphone7Plus.png', 'Điện thoại iPhone 7Plus được nâng cấp độ phân giải camera sau lên 12 MP (thay vì 8 MP như trên iPhone 6), camera có tốc độ lấy nét và chụp nhanh, thao tác chạm để chụp nhẹ nhàng. Chất lượng ảnh trong các điều kiện chụp khác nhau tốt.', '2018-05-05 12:13:24'),
(16, 'Smartphone', 'iPhone 8 256GB', 25790000, 'iphone8.png', 'Thừa hưởng những thiết kế đã đạt đến độ chuẩn mực, thế hệ iPhone 8 Plus thay đổi phong cách bóng bẩy hơn và bổ sung hàng loạt tính năng cao cấp cho trải nghiệm sử dụng vô cùng tuyệt vời.', '2018-05-05 12:50:06'),
(18, 'Smartphone', 'iPhone X 64G', 29990000, 'iphoneX.png', 'iPhone X là cụm từ được rất nhiều người mong chờ muốn biết và tìm kiếm trên Google bởi đây là chiếc điện thoại mà Apple kỉ niệm 10 năm iPhone đầu tiên được bán ra.', '2018-05-05 12:51:54'),
(30, 'Smartphone', 'Samsung Galaxy S9', 199900, 'SamsungS9.png', 'Xứng', '2018-05-05 13:53:32'),
(40, 'Smartphone', 'Xiaomi Mi Max 2', 6290000, 'XiaomiMax2.png', 'Xiaomi Mi Max 2 là một chiếc smartphone với lợi thế là màn hình lớn, dung lượng pin khủng rất phù hợp cho những người thích giải trí và đặc biệt sở hữu một mức giá vô cùng hợp lý.', '2018-05-05 20:54:41'),
(81, 'Laptop', 'Laptop HP Pavilion x360', 13990000, 'hp-pavilion-x360-cd0082tu-4mf15pa-450-600x600.jpg', 'Đặc điểm nổi bật của HP Pavilion x360 cd0082TU i3 8130U/4GB/1TB/Win10/(4MF15PA)\r\n\r\nBộ sản phẩm chuẩn: Dây nguồn, Sách hướng dẫn, Bút cảm ứng (kèm Pin AAA), Thùng máy, Adapter sạc\r\n\r\nBên cạnh khả năng tuỳ biến nhiều hình dáng sử dụng, laptop HP Pavilion C360 CD0082TU có dung lượng pin đủ dùng cho nhân viên văn phòng phải thường xuyên di chuyển trong các buổi họp và trọng lượng nhẹ phù hợp cho sinh viên mang vác hằng ngày đến lớp.', '2018-11-20 00:00:00'),
(49, 'Smartphone', 'OPPO F5 6GB', 8990000, 'OppoF5.png', 'Điện thoại OPPO F5 Youth mang trong mình thiết kế nguyên khối toàn phần với mặt lưng liền mạch cho vẻ đẹp sang trọng và tối giản tinh tế. Phiên bản này không có các đường anten chạy dọc trên đỉnh và đáy máy như OPPO F5.', '2018-05-05 21:01:42'),
(52, 'Smartphone', 'OPPO A83', 4990000, 'OppoA83.png', 'OPPO A83 2018 (bản không tai nghe) là chiếc smartphone dòng A đầu tiên sở hữu cho mình màn hình tràn viền và cùng với đó là camera với khả năng làm đẹp bằng AI nổi tiếng của OPPO.', '2018-05-05 21:02:59'),
(65, 'Laptop', 'Laptop HP 15 da0054TU', 10900000, 'hp-15-da0054tu-4me68pa-thumb-600x600.jpg', 'Laptop HP 15 da0054TU là phiên bản máy tính xách tay với cấu hình được trang bị vi xử lý chip Intel Core i3 Kabylake thế hệ 7 đem đến hiệu năng ổn định khi thao tác các tác vụ cơ bản, phù hợp cho công việc văn phòng, học tập.', '2018-05-05 12:50:06'),
(66, 'Laptop', 'Laptop Lenovo IdeaPad 330S 14IKB ', 19900000, 'lenovo-ideapad-330s-14ikb-81f400nmvn-thum123-600x600.jpg', 'Với kiểu dáng thiết kế hiện đại, Lenovo IdeaPad 330S 14IKB là phiên bản máy tính thuộc phân khúc tầm trung với cấu hình được trang bị chip Intel Core i3, DDR4 RAM 4 GB, hệ điều hành Windows 10 bản quyền được cài đặt sẵn tiện dụng trên máy. Đây sẽ là chiếc laptop phù hợp với nhu cầu văn phòng, học tập cơ bản.', '2018-11-21 00:00:00'),
(67, 'Tablet', 'Máy tính bảng Samsung Galaxy Tab A6 10.1 Spen', 7980000, 'samsung-galaxy-tab-a6-101-spen-400x460.png', 'Tiếp nối sự thành công của chiếc Samsung Galaxy Tab A thì mới đây Samsung đã giới thiệu phiên bản cải tiến là chiếc Galaxy Tab A6 10.1 với nhiều nâng cấp đáng giá về cấu hình và thiết kế.', '2018-11-12 00:00:00'),
(68, 'Tablet', 'Máy tính bảng iPad Wifi 32GB (2018)', 8990000, 'ipad-6th-wifi-32gb-1-400x460.png', 'iPad 6th Wifi 32GB với nhiều nâng cấp về phần cứng, đặc biệt hơn giá của sản phẩm này được định hình ở phân khúc giá rẻ, sinh viên sẽ là sự lựa chọn “không quá xa tầm tay” người dùng.', '2018-11-13 00:00:00'),
(69, 'Other', 'Dây cáp Micro USB 2 m Xmobile MU03', 510000, 'cap-micro-usb-2-m-xmobile-mu03-1000-avatar-1-600x600.jpg', 'Dây cáp Micro USB 2 m Xmobile MU03 nhỏ gọn, thiết kế 2 màu lựa chọn, dễ sử dụng tương thích tốt với hầu hết smartphone hiện nay.', '2018-11-12 00:00:00'),
(70, 'Other', 'Tai nghe chụp tai Kanen IP-892\r\n', 300000, 'tai-nghe-chup-tai-kanen-ip-892-2-5-600x600.jpg', 'Với với ứng dụng nghe nhạc mặc định, có thể tăng giảm âm lượng, nhận cuộc gọi, ngừng/chơi nhạc, ấn nút tròn 2 lần để chuyển bài hát.', '2018-11-13 00:00:00'),
(82, 'Other', 'USB OTG 2.0 8 GB Apacer AH175', 230000, 'usb-apacer-ah175-otg-8gb-20-1-4-600x600.jpg', 'Không cần qua trung gian máy tính, bạn có thể ghi chép dữ liệu trực tiếp qua lại giữa 2 thiết bị\r\nLưu ý: USB chỉ tương thích với Android 4.1 trở lên và điện thoại có hỗ trợ OTG.', '2018-11-28 00:00:00'),
(83, 'Tablet', 'Máy tính bảng Mobell Tab 8 Pro', 2789000, 'mobell-tab-8-pro-2-400x460.png', 'Tiếp nối sự thành công của chiếc tablet Mobell Tab 8 thì phiên bản cải tiến là chiếc Mobell Tab 8 Pro với cải tiến tốt hơn.\r\nHiệu năng ổn định trong tầm giá\r\nMobell Tab 8 Pro sở hữu con chip MTK 8321 4 nhân 1.33 GHz, chip đồ họa Mali-400MP, 1 GB RAM cùng bộ nhớ trong được nâng lên 16 GB (Mobell Tab 8 là 8 GB).', '2018-11-14 00:00:00'),
(84, 'Tablet', 'Máy tính bảng Mobell Tab 10', 2900000, 'mobell-tab-10-1-400x460.png', 'Mobell đã cho ra mắt phiên bản máy tính bảng Mobell Tab 10 có cấu hình được nâng cấp hơn với hệ điều hành Android 8.1, 1 GB RAM, 16 GB ROM cho hiệu năng hoạt động các tác vụ cơ bản như lướt web, giải trí, thực hiện cuộc gọi, chụp ảnh được mượt mà hơn, đáp ứng tốt nhu cầu của người dùng.', '2018-11-26 00:00:00'),
(85, 'Smartphone', 'Điện thoại iPhone Xr 256GB', 24990000, 'iphone-xr-256gb-white-400x460.png', 'Ngoài các phiên bản như thường lệ mọi năm, vào đêm 12/9 theo giờ Việt Nam, Apple đã cho ra mắt thêm một phiên bản iPhone khác với tên gọi iPhone Xr, có mức giá dễ chịu hơn nhưng vẫn mang đầy đủ các tính năng cao cấp đầy hấp dẫn.', '2018-11-13 00:00:00'),
(86, 'Smartphone', 'Samsung Galaxy A9 (2018)', 12490000, 'a9-pink18umt-640.png', 'Nâng tầm trải nghiệm xem với Màn Hình Tràn Viền HD+ 6.0 inch ấn tượng, tỷ lệ chuẩn điện ảnh 18.5:9 tối ưu. Thiết kế mỏng tinh tế cho bạn thoải mái cầm nắm và tận hưởng mọi nội dung giải trí yêu thích.\r\n\r\n', '2018-11-21 00:00:00'),
(88, 'Smartphone', 'Điện thoại Huawei Mate 20 Pro', 21990000, 'huawei-mate-20-pro-green-400x460.png', 'Thế hệ siêu phẩm mới của Huawei chính thức lộ diện với cái tên Huawei Mate 20 Pro, chiếc điện thoại thu hút trong thiết kế, mạnh mẽ trong hiệu năng cùng một hệ thống camera ấn tượng.', '2018-11-27 00:00:00'),
(89, 'Smartphone', 'Điện thoại OPPO Find X', 20900000, 'oppo-find-x-2-400x460-400x460.png', 'OPPO Find X tạo nên một cú hích lớn trong làng smartphone hiện nay khi mang trong mình nhiều tính năng đột phá mà nổi bật nhất đến từ thiết kế sáng tạo và một hiệu năng đỉnh cao.', '2018-11-21 00:00:00'),
(90, 'Other', 'Sạc dây Type C 1A 1m Xmobile DS199-WB Trắng\r\n\r\n', 122000, 'sac-day-type-c-1a-1m-xmobile-ds199-wb-ava-600x600.jpg', 'Phù hợp với mọi cổng sạc phổ biến nhất hiện nay. Chiều dài lên đến 1m giúp bạn thoải mái sử dụng khỏi lo khó khăn trong việc sử dụng vừa sạc vừa bấm.', '2018-11-29 00:00:00'),
(91, 'Other', 'Móc dán điện thoại OSMIA RingCK043 Sao Đen\r\n', 22000, 'moc-dan-dien-thoai-osmia-ringck043-sao-den-1-1-600x600.jpg', 'Thiết kế đơn giản, cứng cáp.Gắn lên mặt sau điện thoại (bề mặt trơn láng).Dùng làm giá đỡ xem phim, móc ngón tay khi cầm, treo điện thoại...', '2018-11-21 00:00:00'),
(92, 'Laptop', 'Laptop Asus ROG Strix Scar GL504GM', 45900000, 'asus-gl504gm-es044t-avatar2-600x600.jpg', 'Thiết kế đạm chất "laptop gaming" và cấu hình khủng, chạy mượt mà các game nặng. Asus GL504GM i7 8750H - Chiếc laptop dành riêng cho các game thủ vừa được Asus cho ra mắt 9/2018 là sự lựa chọn rất được chú ý cho các "Gamer" thực thụ.', '2018-05-05 12:50:06'),
(93, 'Tablet', 'Máy tính bảng Samsung Galaxy Tab S4 10.5 inch S-Pen', 17290000, 'samsung-galaxy-tab-s4-105-inch-detial-400x460.png', 'Samsung đã cho ra mắt máy tính bảng Galaxy Tab S4 10.5 với màn hình Super AMOLED 10.5 inch, chip Snapdragon 835 được trang bị. Đây là một chiếc máy tính bảng cấp cao cùng hiệu năng ổn định với các thao tác được phản hồi nhanh chóng.', '2018-05-05 12:50:06'),
(94, 'Other', 'Pin sạc dự phòng Polymer 5000mAh Sony CP-V5B', 690000, 'sac-du-phong-polymer-5000mah-sony-cp-v5b-bc-la-600x600.jpg', 'Pin sạc dự phòng Polymer 5.000 mAh đến từ hãng Sony. Dung lượng pin cao cho nhiều lần sạc\r\nSạc đầy được nhiều lần cho điện thoại và máy tính bảng.', '2018-11-05 00:00:00'),
(95, 'Other', 'Pin sạc dự phòng Polymer 15000mAh Sony CP-S15-BC ULA', 1690000, 'sac-du-phong-polymer-15000mah-sony-cp-s15-bc-avatar-2-600x600.jpg', 'Pin sạc dự phòng Polymer Sony CP-S15-BC ULA tuy có dung lượng rất lớn nhưng kiểu dáng vẫn nhỏ gọn. Dung lượng pin cao cho nhiều lần sạc\r\nSạc đầy được cho điện thoại và máy tính bảng có dung lượng dưới 13.000 mAh.Lưu ý: Trong quá trình sạc pin sẽ bị hao hụt khoảng 30% dung lượng.', '2018-11-14 00:00:00'),
(96, 'Laptop', 'Laptop HP 15 da0055T', 10999900, 'hp-15-da0055tu-4na89pa-600x600.jpg', 'Laptop HP 15 da0055TU là chiếc máy tính xách tay sở hữu Core i3, 4 GB RAM, ổ cứng lưu trữ HDD 1 TB, Windows bản quyền được cài đặt sẵn trên máy cho hiệu năng ổn định cùng card đồ họa tích hợp Intel® HD Graphics 620 cho khả năng hiển thị hình ảnh rõ nét, mang đến không gian làm việc - học tập năng động, thoải mái.', '2018-11-21 00:00:00'),
(97, 'Laptop', 'Laptop Acer Aspire A315 31 P2LJ', 7950000, 'acer-aspire-a315-31-p2lj-nxgntsv010-ava-600x600.jpg', 'Acer Aspire A315 31 P2LJ N4200 là phiên bản máy tính xách tay thuộc phân khúc học tập - văn phòng với giá tốt, được trang bị cấu hình vừa đủ sử dụng tính năng cơ bản và cài sẵn hệ điều hành Windows 10 bản quyền giúp sử dụng ổn định, tiện lợi hơn.', '2018-05-05 12:50:06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'admin', 'admin@gmail.com', 'admin', NULL, '2018-11-05 17:00:00', '2018-11-25 17:00:00'),
(3, 'Hiểu', 'hieu@gmail.com', '$2y$10$faLj25UBM9KdiL16h.tMCOOqBWuu1EjlHUb63KGUG9AU09VbMWG/6', 'LlkiWYSYSrAvmppyBwKm4M7gSdtKLQMNjo99pjoaGEEhJBjLIn1mCyj6o6RQ', '2018-12-06 19:43:08', '2018-12-08 08:08:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=99;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
