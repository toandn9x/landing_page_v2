-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 19, 2022 lúc 04:27 PM
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
  `link` text DEFAULT NULL,
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
(2, 'Background', '<p><span style=\"color: rgb(119, 119, 119); font-family: Amiko, sans-serif;\">The Centers of Excellence for Breastfeeding Initiative has been developed and implemented in Southeast Asia to enable health facilities to create and maintain breastfeeding-friendly environments through consistent implementation of early essential newborn care and breastfeeding counseling, and by eliminating promotion of breastmilk substitutes. The initiative also aims to realize the WHO and UNICEF’s recommendation to integrate the Baby Friendly Hospital Initiative more fully into the healthcare system to ensure that all health facilities implement the Ten Steps to Successful Breastfeeding. The Centers of Excellence for Breastfeeding model can be adapted to each country\'s specific setting. In Viet Nam, it is called Centers of Excellence for Breastfeeding, in Laos it is Breastfeeding Model Hospital.</span><br></p>', 'What are Centers of Excellence for Breastfeeding?', '<p><span style=\"color: rgb(0, 103, 104); font-family: Amiko, sans-serif; font-weight: 700; text-align: center;\">Centers of Excellence for Breastfeeding are hospitals that:</span><br></p>', '124468588_19_10_2022_2028791700_22_08_2022_mg1.png', '190589605_19_10_2022_809566666_22_08_2022_mg2.png', '1298816287_19_10_2022_338079270_22_08_2022_mg3.png', 'Support mothers to initiate breastfeeding within the first 90 minutes of life by providing early essential newborn care for all births.', 'Provide counseling and support to help mothers maintain exclusive breastfeeding during their hospital stay.', 'Support mothers to initiate breastfeeding within the first 90 minutes of life by providing early essential newborn care for all births.', 'https://www.youtube.com/embed/0ngLl5Ut1eY', 'Frequently Asked Questions', '<h2 class=\"pt-5 freight-title\" style=\"color: rgb(68, 68, 68); font-family: FreightSansProBold-Regular !important;\"><span style=\"color: rgb(119, 119, 119); font-family: Amiko, sans-serif; font-size: 16px;\">The Centers of Excellence for Breastfeeding Designation will be a recognizable indicator of outstanding care for mothers deciding where to deliver their baby.</span><br></h2>', '854091665_19_10_2022_n3.png', '1212950770_20_08_2022_204242131_505475180773259_3487481323294428449_n.jpg', '2022-08-20 06:55:12', '2022-10-19 13:52:17');

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
  `title8` varchar(500) DEFAULT NULL,
  `content8` text DEFAULT NULL,
  `img8` varchar(255) DEFAULT NULL,
  `title9` varchar(500) DEFAULT NULL,
  `content9` text DEFAULT NULL,
  `img9` varchar(255) DEFAULT NULL,
  `img10` varchar(255) DEFAULT NULL,
  `img11` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `progess`
--

INSERT INTO `progess` (`id`, `title1`, `content1`, `img1`, `title2`, `img2`, `title3`, `content3`, `img3`, `title4`, `content4`, `img4`, `img5`, `img6`, `img7`, `title8`, `content8`, `img8`, `title9`, `content9`, `img9`, `img10`, `img11`, `created_at`, `updated_at`) VALUES
(1, NULL, '<p><span style=\"color: rgb(119, 119, 119); font-family: Amiko, sans-serif;\">By estimation, one in five babies in Viet Nam is born in a Center of Excellence for Breastfeeding.</span><br></p>', '2102036272_19_10_2022_big_care.png', 'Countries that are implementing Centers of Excellence', '1193149628_19_10_2022_498374008_22_08_2022_worldmaps.png', 'Centers of Excellence for Breastfeeding in Viet Nam', 'In Viet Nam, central hospitals are accredited by the Ministry of Health, and provincial and district hospitals are accredited by provincial Departments of Health.', '635240623_19_10_2022_1906169233_22_08_2022_bb.png', 'First ten Centers of Excellence for Breastfeeding in Viet Nam:', 'Hung Vuong Hospital, Ho Chi Minh city|Da Nang Hospital for Women and Children, Da Nang city|Can Tho Obstetrics and Pediatrics Hospital, Can Tho city|Phuong Chau International Hospital, Can Tho city', '825841232_19_10_2022_946243843_22_08_2022_s1.png', '2088571304_19_10_2022_1059977760_22_08_2022_n.JPG', '2010442615_19_10_2022_1205163392_22_08_2022_s2.png', '2086107713_19_10_2022_1784485965_22_08_2022_s4.png', 'Breastfeeding Model Hospital in Laos', 'In Laos, Alive & Thrive and Save the Children provide strategic technical assistance to the government to implement the Breastfeeding Model Hospital initiative that deliver high quality breastfeeding and EENC services within a supportive policy environment. The initiative will expand to support EENC services for vulnerable newborns and ethnic minority communities alongside the Lao – Viet Nam border.', '1946998684_19_10_2022_681096613_22_08_2022_ls1.png', 'First two Breastfeeding Model Hospitals in Laos:', '1. Saravance Provincial Hospital|2. Houphan Provincial Hospital', '1115286448_19_10_2022_pn.png', '1697222718_19_10_2022_1935361945_22_08_2022_l1.png', '1112829946_19_10_2022_l2.png', '2022-08-20 08:09:22', '2022-10-19 14:16:44');

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
(1, NULL, NULL, NULL, '1509553486_19_10_2022_logo.png', '2108684460_19_10_2022_footer-img.png', '2022-04-13 12:10:10', '2022-10-19 13:02:55');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sportlight`
--

CREATE TABLE `sportlight` (
  `id` int(11) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `creator` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sportlight`
--

INSERT INTO `sportlight` (`id`, `description`, `content`, `creator`, `img`, `status`, `created_at`, `updated_at`) VALUES
(5, 'Women in rural and ethnic minority communities access early essential newborn care services in Viet Nam', '<p><span style=\"color: rgb(0, 138, 141); font-family: Amiko, sans-serif; font-size: 14px; font-weight: 700;\">Women in rural and ethnic minority communities access early essential newborn care services in Viet Nam</span><br></p>', 'Admin', '1562034212_19_10_2022_854091665_19_10_2022_n3.png', 1, '2022-10-19 14:19:36', '2022-10-19 14:19:36'),
(6, 'Two hospitals in Viet Nam designated as “Centers of Excellence for Breastfeeding”', '<p><a href=\"https://www.aliveandthrive.org/two-hospitals-in-viet-nam-designated-as-centers-of-excellence-for-breastfeeding/\" style=\"color: rgb(119, 119, 119); font-family: Amiko, sans-serif; font-size: 14px; font-weight: 700; background-color: rgb(255, 255, 255);\">Two hospitals in Viet Nam designated as “Centers of Excellence for Breastfeeding”</a><br></p>', 'Admin', '1462379830_19_10_2022_str2.png', 1, '2022-10-19 14:20:12', '2022-10-19 14:20:12'),
(7, 'Human Interest Story: “I love to have my husband with me during labor and birth”', '<p><br></p><p><span style=\"color: rgb(0, 138, 141); font-family: Amiko, sans-serif; font-size: 18px; font-weight: 700;\">Human Interest Story: “I love to have my husband with me during labor and birth”</span><br></p>', 'Admin', '952688717_19_10_2022_808649057_19_10_2022_1059977760_22_08_2022_n.JPG', 1, '2022-10-19 14:20:41', '2022-10-19 14:20:41');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
