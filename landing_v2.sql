-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 20, 2022 lúc 12:20 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `landing_v2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contents`
--

CREATE TABLE `contents` (
  `id` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `img` longtext DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `contents`
--

INSERT INTO `contents` (`id`, `id_menu`, `description`, `content`, `img`, `status`, `created_at`, `updated_at`) VALUES
(7, 5, 'Crypto Education', 'We focus on investment course and blockchain developer', '1126632159_05_04_2022_5-50980_computer-guy-meme-transparent.png', 1, '2022-04-05 06:49:55', '2022-04-05 06:49:55'),
(8, 5, 'Crypto Alert Group', 'Group to share investment recommendations and ask question about&nbsp; Crypto', '131753064_05_04_2022_5-50980_computer-guy-meme-transparent.png', 1, '2022-04-05 07:01:06', '2022-04-05 07:01:06'),
(9, 5, 'Crypto Portfolio', 'Investment fund for mid term and long team investors', '1393357478_05_04_2022_5-50980_computer-guy-meme-transparent.png', 1, '2022-04-05 07:02:37', '2022-04-05 07:02:37'),
(10, 5, 'Naked Coin', 'Investment recommentdation run by machine learning and data scanning', '114289110_05_04_2022_5-50980_computer-guy-meme-transparent.png', 1, '2022-04-05 07:03:45', '2022-04-05 07:03:45'),
(11, 8, 'yggdrasil', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', '', 1, '2022-04-13 11:41:16', '2022-04-13 11:41:16'),
(12, 8, 'N Project', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', '', 1, '2022-04-13 11:41:36', '2022-04-13 11:41:36'),
(13, 8, 'other project', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', '', 1, '2022-04-13 11:41:52', '2022-04-13 11:41:52'),
(14, 8, 'other project', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', '', 1, '2022-04-13 11:41:53', '2022-04-13 11:41:53'),
(15, 9, 'Partnership text test test 1', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', '', 1, '2022-04-13 11:42:09', '2022-04-13 11:42:09'),
(16, 9, 'Partnersip 2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', '', 1, '2022-04-13 11:42:25', '2022-04-13 11:42:25'),
(17, 9, 'partner ship 3', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', '', 1, '2022-04-13 11:42:41', '2022-04-13 11:42:41'),
(18, 9, 'partner ship 4', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', '', 1, '2022-04-13 11:42:58', '2022-04-13 11:42:58'),
(19, 12, 'Blockchain Basics', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', '', 1, '2022-04-13 11:43:16', '2022-04-13 11:43:16'),
(20, 12, 'Blockchain & Cryptocurrency (Bitcoin, Ethereum) Essentials', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', '', 1, '2022-04-13 11:43:38', '2022-04-13 11:43:38'),
(21, 12, 'NTF (Non fugible Tokens) for Beginner: Theory and Practice', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', '', 1, '2022-04-13 11:43:52', '2022-04-13 11:43:52'),
(22, 10, 'An exclusive information session for', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', '', 1, '2022-04-13 11:44:09', '2022-04-13 11:44:09'),
(23, 10, 'An exclusive information session for', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', '', 1, '2022-04-13 11:44:23', '2022-04-13 11:44:23'),
(24, 10, 'An exclusive information session for', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', '', 1, '2022-04-13 11:44:44', '2022-04-13 11:44:44'),
(25, 1, 'Jenny Wilson|project manager', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', '', 1, '2022-04-13 11:45:07', '2022-04-13 11:45:07'),
(26, 1, 'Guy Hawkins|Project manager', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', '', 1, '2022-04-13 11:45:21', '2022-04-13 11:45:21'),
(27, 1, 'Jane Cooper|Project Manager', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', '', 1, '2022-04-13 11:45:38', '2022-04-13 11:45:38');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `status` int(2) NOT NULL,
  `m_order` int(2) NOT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `menus`
--

INSERT INTO `menus` (`id`, `name`, `content`, `description`, `status`, `m_order`, `created_at`, `updated_at`) VALUES
(1, 'Team', NULL, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', 1, 5, NULL, '2022-04-13 12:32:58'),
(5, 'Blockable Hub', NULL, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', 1, 0, NULL, '2022-04-05 06:42:29'),
(8, 'Blockable Nest', NULL, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', 1, 1, '2022-04-04 03:26:52', '2022-04-05 06:43:13'),
(9, 'Partnership', NULL, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', 1, 3, '2022-04-04 03:51:18', '2022-04-05 06:43:58'),
(10, 'News', NULL, NULL, 1, 6, '2022-04-05 06:46:23', '2022-04-13 12:33:05'),
(11, 'Contact us', NULL, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', 1, 7, '2022-04-05 06:47:01', '2022-04-13 11:40:22'),
(12, 'Blockable academy', NULL, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', 0, 4, '2022-04-13 11:39:47', '2022-04-13 12:32:49');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `status` int(2) NOT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL,
  `tag_name` varchar(255) DEFAULT NULL,
  `type` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `description`, `content`, `img`, `status`, `created_at`, `updated_at`, `tag_name`, `type`) VALUES
(1, 'News|all levels', 'Blockchain basics', '', 1, '2022-04-13 12:03:49', '2022-04-13 12:03:49', NULL, NULL),
(2, 'News|all levels', 'Blockchain basics', '', 1, '2022-04-13 12:04:06', '2022-04-13 12:04:06', NULL, NULL),
(3, 'News|all levels', 'Blockchain basics', '', 1, '2022-04-13 12:04:17', '2022-04-13 12:04:17', NULL, NULL),
(4, 'News|all levels', 'Blockchain basics', '', 1, '2022-04-13 12:04:28', '2022-04-13 12:04:28', NULL, NULL),
(5, 'News|all levels', 'Blockchain basics', '', 1, '2022-04-13 12:04:36', '2022-04-13 12:04:36', NULL, NULL),
(6, 'News|all levels', 'Blockchain basics', '', 1, '2022-04-13 12:04:44', '2022-04-13 12:04:44', NULL, NULL),
(7, 'News|all levels', 'Blockchain basics', '', 1, '2022-04-13 12:04:54', '2022-04-13 12:04:54', NULL, NULL),
(8, 'News|all levels', 'Blockchain basics', '', 1, '2022-04-13 12:05:04', '2022-04-13 12:05:04', NULL, NULL),
(9, 'News|all levels', 'Blockchain basics', '', 1, '2022-04-13 12:05:13', '2022-04-13 12:05:13', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `overview`
--

CREATE TABLE `overview` (
  `id` int(11) NOT NULL,
  `title1` text DEFAULT NULL,
  `content1` text DEFAULT NULL,
  `title2` varchar(255) DEFAULT NULL,
  `content2` varchar(255) DEFAULT NULL,
  `img1` varchar(255) DEFAULT NULL,
  `img2` varchar(255) DEFAULT NULL,
  `img3` varchar(255) DEFAULT NULL,
  `text_img1` varchar(255) DEFAULT NULL,
  `text_img2` varchar(255) DEFAULT NULL,
  `text_img3` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `title3` varchar(255) DEFAULT NULL,
  `content3` text DEFAULT NULL,
  `img4` varchar(255) DEFAULT NULL,
  `img5` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `overview`
--

INSERT INTO `overview` (`id`, `title1`, `content1`, `title2`, `content2`, `img1`, `img2`, `img3`, `text_img1`, `text_img2`, `text_img3`, `link`, `title3`, `content3`, `img4`, `img5`, `created_at`, `updated_at`) VALUES
(2, 'title1', '<p>content1</p>', 'title2', '<p>content2</p>', '1714594792_20_08_2022_2548d3e0a4d4c559c1b4e9129f02bafehai-cau-ha-gi-ai-biet-dau.jpg', '1643217405_20_08_2022_20507192_1715137112124590_5783589440252035090_o.jpg', '1624933889_20_08_2022_2548d3e0a4d4c559c1b4e9129f02bafehai-cau-ha-gi-ai-biet-dau.jpg', 'text1qqqq', '22222222', '33333333', 'aaaaaaaa', NULL, '<p>zzzzzzzzzzzzzzzzz</p>', '1883709325_20_08_2022_2548d3e0a4d4c559c1b4e9129f02bafehai-cau-ha-gi-ai-biet-dau.jpg', '1212950770_20_08_2022_204242131_505475180773259_3487481323294428449_n.jpg', '2022-08-20 06:55:12', '2022-08-20 08:02:09');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `progess`
--

CREATE TABLE `progess` (
  `id` int(11) NOT NULL,
  `title1` varchar(255) DEFAULT NULL,
  `content1` varchar(255) DEFAULT NULL,
  `img1` varchar(255) DEFAULT NULL,
  `title2` varchar(255) DEFAULT NULL,
  `img2` varchar(255) DEFAULT NULL,
  `title3` varchar(255) DEFAULT NULL,
  `content3` varchar(255) DEFAULT NULL,
  `img3` varchar(255) DEFAULT NULL,
  `title4` varchar(255) DEFAULT NULL,
  `content4` text DEFAULT NULL,
  `img4` varchar(255) DEFAULT NULL,
  `img5` varchar(255) DEFAULT NULL,
  `img6` varchar(255) DEFAULT NULL,
  `img7` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `progess`
--

INSERT INTO `progess` (`id`, `title1`, `content1`, `img1`, `title2`, `img2`, `title3`, `content3`, `img3`, `title4`, `content4`, `img4`, `img5`, `img6`, `img7`, `created_at`, `updated_at`) VALUES
(1, 'aaaaaaa', '<p>aaaaaaaaaaa</p>', '1499509351_20_08_2022_2548d3e0a4d4c559c1b4e9129f02bafehai-cau-ha-gi-ai-biet-dau.jpg', 'hiiiiii222', '196738278_20_08_2022_230573673_4296907557053882_6160579956196785669_n.jpg', '3333333', '<p>3333333</p>', '602948948_20_08_2022_230573673_4296907557053882_6160579956196785669_n.jpg', '44444', 'Hung Vuong Hospital, Ho Chi Minh city|Da Nang Hospital for Women and Children, Da Nang city|Can Tho Obstetrics and Pediatrics Hospital, Can Tho city|Phuong Chau International Hospital, Can Tho city', '438432358_20_08_2022_230573673_4296907557053882_6160579956196785669_n.jpg', '353664582_20_08_2022_20507192_1715137112124590_5783589440252035090_o.jpg', '742397812_20_08_2022_203656290_1441432386222162_7798342506415421247_n.jpg', '1448362286_20_08_2022_234836198_376661100571520_293780182392210999_n.jpg', '2022-08-20 08:09:22', '2022-08-20 08:52:51');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `logo_img` varchar(255) DEFAULT NULL,
  `bg_img` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `settings`
--

INSERT INTO `settings` (`id`, `address`, `email`, `phone`, `logo_img`, `bg_img`, `created_at`, `updated_at`) VALUES
(1, 'Đống Đa, Hà Nội', 'daily@gmail.com', '0346753906', '', '', '2022-04-13 12:10:10', '2022-04-13 12:10:10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sportlight`
--

CREATE TABLE `sportlight` (
  `id` int(11) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sportlight`
--

INSERT INTO `sportlight` (`id`, `description`, `content`, `img`, `status`, `created_at`, `updated_at`) VALUES
(1, 'a', '<p>zzzzzzzzz</p>', '804544428_20_08_2022_20507192_1715137112124590_5783589440252035090_o.jpg', 1, '2022-08-20 09:34:34', '2022-08-20 09:52:14'),
(3, 'tin last 2', '<p>ahihi</p>', '899258042_20_08_2022_2548d3e0a4d4c559c1b4e9129f02bafehai-cau-ha-gi-ai-biet-dau.jpg', 1, '2022-08-20 10:07:11', '2022-08-20 10:07:32'),
(4, 'Human Interest Story: “I love to have my husband with me during labor and birth”', '<p>333333333</p>', '370191922_20_08_2022_203656290_1441432386222162_7798342506415421247_n.jpg', 1, '2022-08-20 10:08:21', '2022-08-20 10:14:51');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `avatar` text DEFAULT NULL,
  `role` int(2) DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `avatar`, `role`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', '$2a$12$CX1ABNeNWs7sF0J8/v85p.nweTtWZL3ThFx7CqnjsbNit.CFMfnlC', 'Admin', NULL, 1, 1, NULL, NULL),
(2, 'admin2@gmail.com', '$2y$10$11XXhUbVJZqnwa.Jm7W21uszMx8tLF1zWbMlvEW9CjFr/KuQ.ghzm', 'admin1', NULL, 0, 0, '2022-04-03 08:13:45', '2022-04-03 09:27:37');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `overview`
--
ALTER TABLE `overview`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `progess`
--
ALTER TABLE `progess`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sportlight`
--
ALTER TABLE `sportlight`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `contents`
--
ALTER TABLE `contents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `overview`
--
ALTER TABLE `overview`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `progess`
--
ALTER TABLE `progess`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `sportlight`
--
ALTER TABLE `sportlight`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
