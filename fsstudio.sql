-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 09, 2024 lúc 09:53 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `fsstudio`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `option` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`, `description`, `option`) VALUES
(4, 'Váy Xòe', 'Váy Xòe 1', 0),
(5, 'Váy Đuôi Cá', 'Váy Đuổi Cá', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `color`
--

CREATE TABLE `color` (
  `id` int(11) NOT NULL,
  `color` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `color`
--

INSERT INTO `color` (`id`, `color`) VALUES
(1, 'Jade '),
(2, 'Blue'),
(32, 'White'),
(33, 'Red'),
(34, 'Aqua');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `mesenger` text NOT NULL,
  `name` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `rating` int(11) NOT NULL,
  `id_product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`id`, `mesenger`, `name`, `date`, `rating`, `id_product`) VALUES
(2, 'Sản phẩm tốt , giống như trên hình !', 'Lê Đức Ngọc Hải', '2024-01-29 08:47:52am', 5, 4),
(3, 'Sp tốt , được sp tận tình !', 'Plinhh', '2024-01-29 08:56:26am', 4, 4),
(4, 'Tạm ổn nha shop !', 'user11001311', '2024-01-29 09:04:54am', 3, 4),
(5, 'Sản phẩm tốt', 'Lê Đức Ngọc Hải', '2024-01-29 09:40:46am', 5, 5),
(6, 'Tam', 'Le Duc Ngoc Hai', '2024-01-30 12:32:15pm', 4, 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `img_post`
--

CREATE TABLE `img_post` (
  `id` int(11) NOT NULL,
  `img` text NOT NULL,
  `id_post` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `img_post`
--

INSERT INTO `img_post` (`id`, `img`, `id_post`) VALUES
(6, './Upload/.62.post1.jpg', 17),
(7, './Upload/.66.post11.jpg', 17);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `messeger` text NOT NULL,
  `code_product` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name_user` text NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `date` varchar(50) NOT NULL,
  `option` int(11) NOT NULL,
  `id_pr` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `notification`
--

INSERT INTO `notification` (`id`, `messeger`, `code_product`, `color`, `email`, `name_user`, `phone_number`, `date`, `option`, `id_pr`, `id_user`) VALUES
(1, 'Toi muon thue vay', 'MH323', 'Aqua', 'haildnph31607@fpt.edu.vn', 'Lê Đức Ngọc Hải', '0329500240', '2024-01-26 17:01:50', 3, 5, 9),
(9, 'Toi muon thue', 'MH322', 'Jade ', 'haildnph31607@fpt.edu.vn', 'Lê Đức Ngọc Hải', '0329500240', '2024-01-29 04:01:14', 2, 4, 9);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `notifyrents`
--

CREATE TABLE `notifyrents` (
  `id` int(11) NOT NULL,
  `messeger` varchar(255) NOT NULL,
  `date` varchar(50) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `notifyrents`
--

INSERT INTO `notifyrents` (`id`, `messeger`, `date`, `id_user`) VALUES
(68, 'Chúng tôi không liên lạc được với bạn ?', '2024-01-29 05:02:23', 9);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `contentDetail` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `date` varchar(50) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `post`
--

INSERT INTO `post` (`id`, `title`, `content`, `contentDetail`, `img`, `date`, `id_user`) VALUES
(17, 'Váy cưới hót hit nhất 2024 này đây!!!!', '<p>Năm 2002 l&agrave; năm đ&aacute;nh dấu sự chuyển biến r&otilde; rệt của thời trang cưới với những cải tiến vượt bậc, lấy gam m&agrave;u trắng kem c&ugrave;ng tone trắng s&aacute;ng l&agrave;m cảm hứng l&agrave;m mưa l&agrave;m gi&oacute; cho những mẫu thiết kế v&aacute;y cưới 2020. Những phụ kiện lấp l&aacute;nh lộng lẫy nhất cho đến những phong c&aacute;ch tối giản được biến tấu mới mẻ v&agrave; những xu hướng mới trong c&aacute;ch may đo sẽ l&agrave; những mẫu v&aacute;y cưới hot trend trong năm 2020. Dưới đ&acirc;y l&agrave; những gợi &yacute; xu hướng thiết kế v&aacute;y cưới mới nhất trong năm đầu ti&ecirc;n của thập kỷ &ndash; 2020.&nbsp;</p>', '<p>Xu thế v&aacute;y cưới sang trọng mang phong c&aacute;ch ho&agrave;ng gia nở rộ năm 2019, c&aacute;c nh&agrave; thiết kế tiếp tục cải biến Duchess 1 c&aacute;ch to&agrave;n diện, kh&aacute;c lạ nhất đem lại sự khi&ecirc;m nhường &amp; cao qu&yacute; của c&aacute;c c&ocirc; d&acirc;u. Việc sử dụng tối đa lượng vải đem tới x&uacute;c cảm thời trang nhất thời, ngược lại g&acirc;y cảm gi&aacute;c gượng gạo hay g&ograve; b&oacute;. Cổ &aacute;o giả, tay &aacute;o d&agrave;i, cổ tay &aacute;o c&ugrave;ng những họa tiết cầu kỳ hết mức, đẳng cấp v&agrave; sang trọng mang khuynh hướng ho&agrave;ng gia c&oacute; thể được thể hiện dưới nhiều h&igrave;nh thức. Lựa chọn mẫu thiết kế k&iacute;n đ&aacute;o, thanh lịch m&agrave; kh&ocirc;ng nhất thiết phải sử dụng những chiếc t&ugrave;ng v&aacute;y nặng nề cũng vừa đảm bảo t&iacute;nh thẩm mỹ cho bộ trang phục lại gi&uacute;p c&ocirc; d&acirc;u thoải m&aacute;i trong việc đi lại.</p>', './Upload/705vay-cuoi-han-quoc_012620279.jpg', '2024-01-28 08:38:19pm', 9);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `code_product` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` text NOT NULL,
  `description` text NOT NULL,
  `price` float NOT NULL COMMENT 'price/1days',
  `id_category` int(11) NOT NULL,
  `view_product` int(11) NOT NULL,
  `option` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `code_product`, `name`, `img`, `description`, `price`, `id_category`, `view_product`, `option`) VALUES
(3, 'MH321', 'Váy Công Chúa Trắng', '../Upload/66vay-cuoi-cong-chua-12-removebg-preview.png', 'Những cô nàng điệu đà và bánh bèo chắc chắn không thể cưỡng lại sức hút của những mẫu váy công chúa bồng bềnh. Được thiết kế nữ tính, duyên dáng, có nhiều màu sắc và mẫu mã cho chị em chọn lựa. Nếu bạn vẫn đang tìm kiếm một em váy công chúa cho mình thì có thể cùng Cardina xem qua những mẫu váy dưới đây nhé.', 1200000, 5, 23, 0),
(4, 'MH322', 'Vay Cong Chua Xanh Thanh Binh', '../Upload/48hinh-anh-vay-cuoi-mau-xanh-thanh-binh-removebg-preview.png', 'Chắc chắn trong chúng ta đã không còn ai xa lạ với chiếc váy cưới hay còn gọi là áo cưới. Đây là chiếc váy được cô dâu mặc trong buổi lễ cưới của mình. Tùy vào từng dân tộc, nền văn hóa hay tôn giáo mà những chiếc áo cưới sẽ có màu sắc và hình dáng đặc trưng riêng.', 11000000, 4, 159, 0),
(5, 'MH323', 'Váy Xanh Ngoc Bich', '../Upload/23vay-cuoi-mau-xanh-7-removebg-preview.png', 'Đã qua thời chiếc váy cưới chỉ được gói gọn trong khuôn khổ của sắc trắng thuần khiết. Xu hướng váy cưới mới trong mùa hè năm 2024 này đã thay đổi. Những gam màu hết sức nổi bật, mới lạ và tràn đầy sức sống như đỏ, hồng, vàng, xanh… Vượt lên trên tất cả chính là vẻ xinh đẹp, “chất lừ” của những chiếc váy cưới màu xanh mang sắc thái nổi bật. Tone xanh đa dạng với sự nhẹ nhàng ắt hẳn sẽ chinh phục trái tim các cô gái. Váy cưới với tone xanh mới lạ cũng là lựa chọn của rất nhiều nàng dâu. Nó mang vẻ đẹp dạng và ý nghĩa trong bảng màu của nó.  ', 2200000, 5, 122, 0),
(6, 'MH324', 'Váy Xòe Công Chúa', '../Upload/32vay-cuoi-mau-xanh-5-removebg-preview.png', 'Màu xanh dương cũng là một trong những sắc xanh cực phổ biến trong bảng màu này. Ngay trên nền trời của chúng ta mỗi khi ngước nhìn lên chính là màu xanh dương dịu mát, trong trẻo. Trang phục quần áo màu này thường phù hợp với cả nam và nữ. Sắc xanh dịu dàng thích hợp với cả những lễ hội, tiệc hay địa điểm công sở; với nam thì những chiếc sơ mi xanh đã không còn xa lạ chút nào.', 4100000, 4, 195, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role` varchar(50) NOT NULL COMMENT '0.Usser 1.Admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `role`
--

INSERT INTO `role` (`id`, `role`) VALUES
(1, 'user'),
(2, 'admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` int(11) NOT NULL,
  `option` int(11) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `user_name`, `email`, `phone_number`, `password`, `address`, `option`, `role`) VALUES
(9, 'haildnph31607', 'haildnph31607@fpt.edu.vn', '', 'admin', 0, 0, 2),
(10, 'linhktpph38553', 'linhktpph38553@fpt.edu.vn', '', '06042004Plinh@', 0, 0, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `variation`
--

CREATE TABLE `variation` (
  `id` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_color` int(11) NOT NULL,
  `img` text NOT NULL,
  `price` float NOT NULL,
  `discout` int(11) NOT NULL,
  `quatity` int(11) NOT NULL,
  `option` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `variation`
--

INSERT INTO `variation` (`id`, `id_product`, `id_color`, `img`, `price`, `discout`, `quatity`, `option`) VALUES
(5, 6, 32, '../Upload/16vãyoetrang-removebg-preview.png', 4200000, 10, 3, 0),
(8, 5, 34, '../Upload/69vay-cuoi-mau-xanh-7-removebg-preview.png', 4100000, 12, 4, 0),
(9, 4, 1, '../Upload/3hinh-anh-vay-cuoi-mau-xanh-thanh-binh-removebg-preview.png', 9200000, 50, 2, 0),
(10, 3, 32, '../Upload/71vay-cuoi-cong-chua-12-removebg-preview.png', 6700000, 11, 5, 0),
(11, 6, 1, '../Upload/17vay-cuoi-mau-xanh-5-removebg-preview.png', 4100000, 11, 3, 0),
(12, 5, 32, '../Upload/59vay-cuoi-don-gian-5-removebg-preview.png', 2700000, 7, 2, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `img_post`
--
ALTER TABLE `img_post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_img_post_post` (`id_post`);

--
-- Chỉ mục cho bảng `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_notification_user` (`id_user`);

--
-- Chỉ mục cho bảng `notifyrents`
--
ALTER TABLE `notifyrents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_notifyrents_user` (`id_user`);

--
-- Chỉ mục cho bảng `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_post_user` (`id_user`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_product_category` (`id_category`);

--
-- Chỉ mục cho bảng `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_user_role` (`role`);

--
-- Chỉ mục cho bảng `variation`
--
ALTER TABLE `variation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_variation_product` (`id_product`),
  ADD KEY `lk_variation_color` (`id_color`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `color`
--
ALTER TABLE `color`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `img_post`
--
ALTER TABLE `img_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `notifyrents`
--
ALTER TABLE `notifyrents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT cho bảng `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `variation`
--
ALTER TABLE `variation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `img_post`
--
ALTER TABLE `img_post`
  ADD CONSTRAINT `lk_img_post_post` FOREIGN KEY (`id_post`) REFERENCES `post` (`id`);

--
-- Các ràng buộc cho bảng `notification`
--
ALTER TABLE `notification`
  ADD CONSTRAINT `lk_notification_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Các ràng buộc cho bảng `notifyrents`
--
ALTER TABLE `notifyrents`
  ADD CONSTRAINT `lk_notifyrents_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Các ràng buộc cho bảng `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `lk_post_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `lk_product_category` FOREIGN KEY (`id_category`) REFERENCES `category` (`id`);

--
-- Các ràng buộc cho bảng `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `lk_user_role` FOREIGN KEY (`role`) REFERENCES `role` (`id`);

--
-- Các ràng buộc cho bảng `variation`
--
ALTER TABLE `variation`
  ADD CONSTRAINT `lk_variation_color` FOREIGN KEY (`id_color`) REFERENCES `color` (`id`),
  ADD CONSTRAINT `lk_variation_product` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
