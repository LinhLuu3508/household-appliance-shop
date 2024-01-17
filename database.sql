-- Cơ sở dữ liệu: `household-appliance-shop`
--
-- Cấu trúc bảng cho bảng `catalog`
--
CREATE TABLE `catalog` (
  `id` int(3) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sx` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `catalog`
--

INSERT INTO `catalog` (`id`, `name`, `img`, `sx`) VALUES
(1, 'Cọ to', NULL, 0),
(2, 'Son dưỡng', NULL, 0),
(3, 'Phấn', NULL, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(5) NOT NULL,
  `idcatalog` int(3) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `price` double(10,2) NOT NULL DEFAULT 0.00,
  `price2` double(10,2) NOT NULL DEFAULT 0.00,
  `img` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mota` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `chitiet` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `new` tinyint(1) NOT NULL DEFAULT 0,
  `promotion` int(3) NOT NULL DEFAULT 0,
  `view` int(6) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `idcatalog`, `name`, `price`, `price2`, `img`, `mota`, `chitiet`, `new`, `promotion`, `view`) VALUES
(1, 1, 'White Shave Brush', 110.00, 130.00, 'product-1.jpg', NULL, NULL, 0, 0, 0),
(2, 1, 'White Shave Brush', 130.00, 0.00, 'product-2.jpg', NULL, NULL, 0, 0, 0),
(3, 2, 'Son 100', 100.00, 0.00, 'product-3.jpg', NULL, NULL, 0, 0, 0),
(4, 1, 'them sản phẩm 4', 0.00, 0.00, 'product-4.jpg', NULL, NULL, 0, 0, 0),
(5, 3, 'Sản phẩm 5', 0.00, 0.00, 'product-5.jpg', NULL, NULL, 0, 0, 0),
(6, 2, 'Sản phẩm new', 0.00, 0.00, 'product-6.jpg', NULL, NULL, 1, 10, 0),
(7, 3, 'Sản phẩm 7 Phấn', 0.00, 0.00, 'product-7.jpg', NULL, NULL, 1, 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(3) NOT NULL,
  `user` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `pass` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `tel` int(11) DEFAULT NULL,
  `img` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `user`, `pass`, `tel`, `img`, `role`, `email`) VALUES
(1, 'admin', '123', 918326706, NULL, 1, 'tranbaho@gmail.com');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_product_catalog` (`idcatalog`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_product_catalog` FOREIGN KEY (`idcatalog`) REFERENCES `catalog` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
