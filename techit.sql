-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2021-08-11 00:31:15
-- 伺服器版本： 10.4.20-MariaDB
-- PHP 版本： 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫: `techit`
--
CREATE DATABASE IF NOT EXISTS `techit` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `techit`;

-- --------------------------------------------------------

--
-- 資料表結構 `articles`
--

CREATE TABLE `articles` (
  `arti_id` int(11) NOT NULL COMMENT '文章編號',
  `arti_title` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '文章標題',
  `arti_content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '文章內容',
  `arti_img` varchar(255) DEFAULT NULL COMMENT '文章圖片',
  `created_at` datetime NOT NULL DEFAULT current_timestamp() COMMENT '新增時間',
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT '更新時間'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- 資料表結構 `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL COMMENT '品牌編號',
  `brand_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '品牌名稱',
  `brand_CH` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '品牌中文名稱',
  `created_at` datetime NOT NULL DEFAULT current_timestamp() COMMENT '新增時間',
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT '更新時間'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- 資料表結構 `categories`
--

CREATE TABLE `categories` (
  `cate_id` int(11) NOT NULL COMMENT '類別編號',
  `cate_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '類別名稱',
  `parent_id` int(11) NOT NULL DEFAULT 0 COMMENT '上層編號',
  `created_at` datetime NOT NULL DEFAULT current_timestamp() COMMENT '新增時間',
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT '更新時間'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- 資料表結構 `orders_detail`
--

CREATE TABLE `orders_detail` (
  `order_id` varchar(13) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '訂單編號',
  `prod_id` int(11) NOT NULL COMMENT '商品編號',
  `prod_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '商品名稱',
  `prod_thumbnail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '商品縮圖',
  `prod_price` int(11) DEFAULT NULL COMMENT '商品價格',
  `prod_choice` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '商品規格選擇',
  `prod_qty` int(11) DEFAULT NULL COMMENT '商品數量',
  `prod_subtotal` int(11) DEFAULT NULL COMMENT '商品小計',
  `created_at` datetime NOT NULL DEFAULT current_timestamp() COMMENT '新增時間',
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT '更新時間'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- 資料表結構 `orders_rate`
--

CREATE TABLE `orders_rate` (
  `order_id` varchar(13) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '訂單編號',
  `prod_id` int(11) NOT NULL COMMENT '商品編號',
  `rate_A_score` tinyint(1) NOT NULL COMMENT '項目A得分(1~5)',
  `rate_B_score` tinyint(1) NOT NULL COMMENT '項目B得分(1~5)',
  `rate_C_score` tinyint(1) NOT NULL COMMENT '項目C得分(1~5)',
  `rate_D_score` tinyint(1) NOT NULL COMMENT '項目D得分(1~5)',
  `rate_E_score` tinyint(1) NOT NULL COMMENT '項目E得分(1~5)',
  `comment` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '評論',
  `created_at` datetime NOT NULL DEFAULT current_timestamp() COMMENT '新增時間',
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT '更新時間'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- 資料表結構 `products`
--

CREATE TABLE `products` (
  `prod_id` int(11) NOT NULL COMMENT '商品編號',
  `prod_name` varchar(100) DEFAULT NULL COMMENT '商品名稱',
  `prod_thumbnail` varchar(255) DEFAULT NULL COMMENT '商品縮圖',
  `prod_image` varchar(255) DEFAULT NULL COMMENT '商品主要圖片',
  `prod_price` int(11) DEFAULT NULL COMMENT '商品價格',
  `prod_type` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '商品型號',
  `prod_size` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '商品尺寸',
  `prod_description` varchar(100) DEFAULT NULL COMMENT '商品描述',
  `prod_discount` varchar(16) DEFAULT NULL COMMENT '優惠標示',
  `cate_id` int(11) DEFAULT NULL COMMENT '類別編號',
  `cate_id_set` varchar(100) DEFAULT NULL COMMENT '類別編號集合',
  `brand_id` int(11) DEFAULT NULL COMMENT '品牌編號',
  `created_at` datetime NOT NULL DEFAULT current_timestamp() COMMENT '新增時間',
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT '更新時間'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- 資料表結構 `products_choice`
--

CREATE TABLE `products_choice` (
  `choi_id` int(11) NOT NULL COMMENT '商品可選擇編號',
  `choi_name` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '商品可選擇名稱',
  `prod_id` int(11) NOT NULL COMMENT '商品編號',
  `created_at` datetime NOT NULL DEFAULT current_timestamp() COMMENT '新增時間',
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT '更新時間'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- 資料表結構 `products_img`
--

CREATE TABLE `products_img` (
  `img_id` int(11) NOT NULL COMMENT '商品圖編號',
  `func` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '功能',
  `filename` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '檔案名稱',
  `prod_id` int(11) NOT NULL COMMENT '商品編號',
  `created_at` datetime NOT NULL DEFAULT current_timestamp() COMMENT '新增時間',
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT '更新時間'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- 資料表結構 `products_specification`
--

CREATE TABLE `products_specification` (
  `prod_id` int(11) NOT NULL COMMENT '商品編號',
  `specific_id` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '規格項目編號(A/B/C/D/E)',
  `specific_content` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '內容',
  `created_at` datetime NOT NULL DEFAULT current_timestamp() COMMENT '新增時間',
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT '更新時間'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- 資料表結構 `rate_item`
--

CREATE TABLE `rate_item` (
  `cate_id` int(11) NOT NULL COMMENT '類別編號',
  `rate_A_name` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '評價項目A名稱',
  `rate_B_name` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '評價項目B名稱',
  `rate_C_name` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '評價項目C名稱',
  `rate_D_name` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '評價項目D名稱',
  `rate_E_name` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '評價項目E名稱',
  `created_at` datetime NOT NULL DEFAULT current_timestamp() COMMENT '新增時間',
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT '更新時間'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- 資料表結構 `specification_item`
--

CREATE TABLE `specification_item` (
  `cate_id` int(11) NOT NULL COMMENT '類別編號',
  `specific_A` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '規格項目A名稱',
  `specific_B` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '規格項目B名稱',
  `specific_C` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '規格項目C名稱',
  `specific_D` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '規格項目D名稱',
  `specific_E` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '規格項目E名稱',
  `created_at` datetime NOT NULL DEFAULT current_timestamp() COMMENT '新增時間',
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT '更新時間'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- 資料表結構 `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL COMMENT '會員編號',
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '會員信箱',
  `pwd` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '密碼',
  `user_name` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '會員名稱',
  `photo_sticker` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'https://drive.google.com/file/d/1j9M38egVWwyK5h5Dj7akjR9gNLBM5wtz/view?usp=sharing' COMMENT '會員頭貼(預設)',
  `phone_number` int(10) DEFAULT NULL COMMENT '會員電話',
  `birthday` date DEFAULT NULL COMMENT '會員生日',
  `class` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '一般會員' COMMENT '會員等級(預設)',
  `address` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '會員地址',
  `store_a` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '常用配送超商a',
  `store_b` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '常用配送超商b',
  `store_isDefault` tinyint(1) DEFAULT 0 COMMENT '是否為預設超商(0:A;1:B)',
  `created_at` datetime NOT NULL DEFAULT current_timestamp() COMMENT '新增時間',
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT '更新時間'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- 資料表結構 `users_coupon`
--

CREATE TABLE `users_coupon` (
  `user_id` int(11) NOT NULL COMMENT '會員編號',
  `code` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '優惠券代碼',
  `isUsed` tinyint(1) NOT NULL COMMENT '是否被使用(0:無;1:有)',
  `content` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '優惠券內容',
  `discount_func` tinyint(11) NOT NULL COMMENT '折價方式(percentage/point)',
  `discount` float NOT NULL COMMENT '折扣',
  `deadline` date DEFAULT NULL COMMENT '使用期限',
  `created_at` datetime NOT NULL DEFAULT current_timestamp() COMMENT '新增時間',
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT '更新時間'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- 資料表結構 `users_follow`
--

CREATE TABLE `users_follow` (
  `user_id` int(11) NOT NULL COMMENT '會員編號',
  `prod_id` int(11) NOT NULL COMMENT '商品編號',
  `created_at` datetime NOT NULL DEFAULT current_timestamp() COMMENT '新增時間',
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT '更新時間'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- 資料表結構 `users_order`
--

CREATE TABLE `users_order` (
  `user_id` int(11) NOT NULL COMMENT '會員編號',
  `order_id` varchar(13) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '訂單編號',
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '會員信箱',
  `transport_type` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '運送方式',
  `transport_payment` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '付款方式',
  `transport_arrival_time` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '送達時間',
  `recipient_email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '收件者 E-mail',
  `recipient_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '收件者姓名',
  `recipient_phone_number` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '收件者手機號碼',
  `recipient_address` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '收件者地址',
  `recipient_comments` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '收件者備註',
  `invoice_type` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '發票類型',
  `invoice_carrier` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '發票載具',
  `invoice_carrier_number` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '發票載具編號',
  `coupon_code` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '優惠券代碼',
  `card_number` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '信用卡號碼',
  `card_valid_date` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '信用卡到期年限',
  `card_ccv` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '信用卡CCV',
  `card_holder` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '信用卡持有人',
  `total` int(11) DEFAULT NULL COMMENT '總額',
  `total_m` int(11) DEFAULT NULL COMMENT '優惠後總額',
  `created_at` datetime NOT NULL DEFAULT current_timestamp() COMMENT '新增時間',
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT '更新時間'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`arti_id`);

--
-- 資料表索引 `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- 資料表索引 `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cate_id`);

--
-- 資料表索引 `orders_detail`
--
ALTER TABLE `orders_detail`
  ADD PRIMARY KEY (`order_id`,`prod_id`);

--
-- 資料表索引 `orders_rate`
--
ALTER TABLE `orders_rate`
  ADD PRIMARY KEY (`order_id`,`prod_id`);

--
-- 資料表索引 `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`prod_id`);

--
-- 資料表索引 `products_choice`
--
ALTER TABLE `products_choice`
  ADD PRIMARY KEY (`choi_id`);

--
-- 資料表索引 `products_img`
--
ALTER TABLE `products_img`
  ADD PRIMARY KEY (`img_id`);

--
-- 資料表索引 `products_specification`
--
ALTER TABLE `products_specification`
  ADD PRIMARY KEY (`prod_id`,`specific_id`);

--
-- 資料表索引 `rate_item`
--
ALTER TABLE `rate_item`
  ADD PRIMARY KEY (`cate_id`);

--
-- 資料表索引 `specification_item`
--
ALTER TABLE `specification_item`
  ADD PRIMARY KEY (`cate_id`);

--
-- 資料表索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- 資料表索引 `users_coupon`
--
ALTER TABLE `users_coupon`
  ADD PRIMARY KEY (`user_id`,`code`);

--
-- 資料表索引 `users_follow`
--
ALTER TABLE `users_follow`
  ADD PRIMARY KEY (`user_id`,`prod_id`);

--
-- 資料表索引 `users_order`
--
ALTER TABLE `users_order`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `order_id` (`order_id`) USING BTREE;

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `articles`
--
ALTER TABLE `articles`
  MODIFY `arti_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '文章編號';

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '品牌編號';

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `categories`
--
ALTER TABLE `categories`
  MODIFY `cate_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '類別編號';

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `products`
--
ALTER TABLE `products`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '商品編號';

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `products_choice`
--
ALTER TABLE `products_choice`
  MODIFY `choi_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '商品可選擇編號';

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `products_img`
--
ALTER TABLE `products_img`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '商品圖編號';

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '會員編號';

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `users_order`
--
ALTER TABLE `users_order`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '會員編號';
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
