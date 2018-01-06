-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2017 at 06:33 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `job_title`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'AdminRoot', 'test@gmail.com', 'developer', '$2y$10$NcMdyQ1wMubLLQGn0oiR5.xAKWnqbMv3/dKr5rmqMUrXFkbCFIXzi', NULL, '2017-12-12 06:44:22', '2017-12-12 06:44:22');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_12_11_115619_create_admins_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('dungtran6665@gmail.com', '$2y$10$FXjnxswxyR9vAxYLttNnIOHcsFYdT1FrJr8Ij57NCS2Hi19Xm4sYS', '2017-12-13 04:36:44');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` int(11) NOT NULL,
  `decriptions` text NOT NULL,
  `image` text NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `decriptions`, `image`, `type`) VALUES
(1, 'iPhone 8 Plus 256GB', 28790000, 'Màn hình: 5.5\", Retina HD\nHĐH: iOS 11\nCPU: Apple A11 Bionic 6 nhân\nRAM: 3 GB, ROM: 256 GB\nCamera: 2 camera 12 MP, Selfie: 7 MP\nPIN: Đang cập nhật', 'https://cdn4.tgdd.vn/Products/Images/42/114114/iphone-8-plus-256gb-a-300x300.jpg', 1),
(2, 'iPhone 8 256GB', 25790000, 'Màn hình: 4.7\", Retina HD\nHĐH: iOS 11\nCPU: Apple A11 Bionic 6 nhân\nRAM: 2 GB, ROM: 256 GB\nCamera: 12 MP, Selfie: 7 MP\nPIN: Đang cập nhật', 'https://cdn2.tgdd.vn/Products/Images/42/114112/iphone-8-256gb-h1-2-300x300.jpg', 1),
(4, 'iPhone 8 64GB', 20990000, 'Màn hình: 4.7\", Retina HD\nHĐH: iOS 11\nCPU: Apple A11 Bionic 6 nhân\nRAM: 2 GB, ROM: 64 GB\nCamera: 12 MP, Selfie: 7 MP\nPIN: Đang cập nhật', 'https://cdn3.tgdd.vn/Products/Images/42/114113/iphone-8-64gb-h1-1-300x300.jpg', 1),
(5, 'Samsung Galaxy S8 Plus', 20490000, 'Màn hình: 6.2, Quad HD (2K)\nHĐH: Android 7.0\nCPU: Exynos 8895 8 nhân\nRAM: 4 GB, ROM: 64 GB\nCamera: 12 MP, Selfie: 8 MP\nPIN: 3500 mAh', 'https://cdn1.tgdd.vn/Products/Images/42/91131/samsung-galaxy-s8-plus-20-300x300.jpg', 1),
(8, 'iPhone 7 256GB', 19990000, 'Màn hình: 4.7\", Retina HD\nHĐH: iOS 10\nCPU: Apple A10 Fusion 4 nhân\nRAM: 2 GB, ROM: 256 GB\nCamera: 12 MP, Selfie: 7 MP\nPIN: 1960 mAh, SIM: 1 SIM\n', 'https://cdn3.tgdd.vn/Products/Images/42/87838/iphone-7-256gb-12-300x300.jpg', 1),
(9, 'Samsung Galaxy S8', 18490000, 'Màn hình: 5.8\", Quad HD (2K)\nHĐH: Android 7.0\nCPU: Exynos 8895 8 nhân\nRAM: 4 GB, ROM: 64 GB\nCamera: 12 MP, Selfie: 8 MP\nPIN: 3000 mAh', 'https://cdn4.tgdd.vn/Products/Images/42/78479/samsung-galaxy-s8-4-300x300.jpg', 1),
(10, 'Sony Xperia XZ Premium', 17990000, 'Màn hình: 5.5\", 4K\nHĐH: Android 7.0\nCPU: Snapdragon 835 8 nhân\nRAM: 4 GB, ROM: 64 GB\nCamera: 19 MP, Selfie: 13 MP\nPIN: 3230 mAh', 'https://cdn4.tgdd.vn/Products/Images/42/92069/sony-xperia-xz-premium-12-300x300.jpg', 1),
(12, 'Sony Xperia XZ Premium Pink Gold', 16490000, 'Màn hình: 5.5\", Ultra HD (4K)\nHĐH: Android 7.1\nCPU: Qualcomm Snapdragon 835 8 nhân 64-bit\nRAM: 4 GB, ROM: 64 GB\nCamera: 19 MP, Selfie: 13 MP\nPIN: 3230 mAh', 'https://cdn1.tgdd.vn/Products/Images/42/113126/sony-xperia-xz-premium-pink-gold-300x300.jpg', 1),
(14, 'HTC U Ultra Sapphire', 16490000, 'Màn hình: 5.7\", Quad HD (2K)\nHĐH: Android 7.0\nCPU: Qualcomm Snapdragon 821 4 nhân\nRAM: 4 GB, ROM: 128 GB\nCamera: 12 MP, Selfie: 16 MP\nPIN: 3000 mAh', 'https://cdn1.tgdd.vn/Products/Images/42/98826/htc-u-ultra-sapphire-300-300x300.jpg', 1),
(15, 'iPhone 7 32GB', 15990000, 'Màn hình: 4.7\", Retina HD\nHĐH: iOS 10\nCPU: Apple A10 Fusion 4 nhân\nRAM: 2 GB, ROM: 32 GB\nCamera: 12 MP, Selfie: 7 MP\nPIN: 1960 mAh, SIM: 1 SIM', 'https://cdn.tgdd.vn/Products/Images/42/74110/iphone-7-9-300x300.jpg', 1),
(17, 'iPhone 6s Plus 64GB', 15990000, 'Màn hình: 5.5\", Retina HD\nHĐH: iOS 10\nCPU: Apple A9 2 nhân 64-bit\nRAM: 2 GB, ROM: 64 GB\nCamera: 12 MP, Selfie: 5 MP\nPIN: 2750 mAh', 'https://cdn4.tgdd.vn/Products/Images/42/73704/iphone-6s-plus-64gb-6-300x300.jpg', 1),
(20, 'Nokia 8', 12990000, 'Màn hình: 5.3\", Quad HD (2K)\nHĐH: Android 7.1\nCPU: Qualcomm Snapdragon 835 8 nhân 64-bit\nRAM: 4 GB, ROM: 64 GB\nCamera: 2 camera 13 MP, Selfie: 13 MP\nPIN: 3090 mAh', 'https://cdn4.tgdd.vn/Products/Images/42/91059/nokia-8-1-300x300.jpg', 1),
(22, 'Sony Xperia XZs', 12990000, 'Màn hình: 5.2\", Full HD\nHĐH: Android 7.0\nCPU: Snapdragon 820 4 nhân\nRAM: 4 GB, ROM: 64 GB\nCamera: 19 MP, Selfie: 13 MP\nPIN: 2900 mAh', 'https://cdn2.tgdd.vn/Products/Images/42/92082/sony-xperia-xzs-16-300x300.jpg', 1),
(23, 'Motorola Moto Z2 Play', 10990000, 'Màn hình: 5.5\", Full HD\nHĐH: Android 7.1\nCPU: Snapdragon 626 8 nhân 64-bit\nRAM: 4 GB, ROM: 64 GB\nCamera: 12 MP, Selfie: 5 MP\nPIN: 3000 mAh', 'https://cdn4.tgdd.vn/Products/Images/42/109414/motorola-moto-z2-play-300-300x300.jpg', 1),
(24, 'OPPO F3 Plus', 10690000, 'Màn hình: 6\", Full HD\nHĐH: Android 6.0 (Marshmallow)\nCPU: Snapdragon 653\nRAM: 4 GB, ROM: 64 GB\nCamera: 16 MP, Selfie: 16 MP vĂ  8 MP\nPIN: 4000 mAh', 'https://cdn4.tgdd.vn/Products/Images/42/92569/oppo-f3-plus-vang-dong-1-300x300.png', 1),
(25, 'Samsung Galaxy A7 (2017)', 9990000, 'Màn hình: 5.7\", Full HD\nHĐH: Android 6.0 (Marshmallow)\nCPU: Exynos 7880\nRAM: 3 GB, ROM: 32 GB\nCamera: 16 MP, Selfie: 16 MP\nPIN: 3600 mAh, SIM: 2 SIM', 'https://cdn2.tgdd.vn/Products/Images/42/88537/samsung-galaxy-a7-2017-11-300x300.jpg', 1),
(26, 'Sony Xperia XZ Dual', 9990000, 'Màn hình: 5.2\", Full HD\nHĐH: Android 7.0\nCPU: Snapdragon 820 4 nhân\nRAM: 3 GB, ROM: 64 GB\nCamera: 23 MP, Selfie: 13 MP\nPIN: 2900 mAh', 'https://cdn.tgdd.vn/Products/Images/42/85235/sony-xperia-xz-10-300x300.jpg', 1),
(27, 'Motorola Moto X4', 9990000, 'Màn hình: 5.2\", Full HD\nHĐH: Android 7.1\nCPU: Qualcomm Snapdragon 630 8 nhân\nRAM: 4 GB, ROM: 64 GB\nCamera: 12 MP vĂ  8 MP (2 camera), Selfie: 16 MP\nPIN: 3000 mAh', 'https://cdn2.tgdd.vn/Products/Images/42/113327/motorola-moto-x4-h1-300x300.jpg', 1),
(28, 'Bphone 2017', 9790000, 'Màn hình: 5.5\", Full HD\nHĐH: B-OS (Android 7.1)\nCPU: Snapdragon 625 8 nhân 64-bit\nRAM: 3 GB, ROM: 32 GB\nCamera: 16 MP, Selfie: 8 MP\nPIN: 3000 mAh', 'https://cdn1.tgdd.vn/Products/Images/42/75001/bkav-bphone-2-thumb-300x300.jpg', 1),
(29, 'Samsung Galaxy A5 (2017)', 7990000, 'Màn hình: 5.2\", Full HD\nHĐH: Android 6.0 (Marshmallow)\nCPU: Exynos 7880\nRAM: 3 GB, ROM: 32 GB\nCamera: 16 MP, Selfie: 16 MP\nPIN: 3000 mAh, SIM: 2 SIM', 'https://cdn3.tgdd.vn/Products/Images/42/88268/samsung-galaxy-a5-2017-300x300.jpg', 1),
(31, 'Sony Xperia X', 7490000, 'Màn hình: 5\", Full HD\nHĐH: Android 6.0 (Marshmallow)\nCPU: Snapdragon 650 6 nhân\nRAM: 3 GB, ROM: 64 GB\nCamera: 23 MP, Selfie: 13 MP\nPIN: 2620 mAh, SIM: 2 SIM', 'https://cdn4.tgdd.vn/Products/Images/42/75244/sony-xperia-x-300x300.jpg', 1),
(33, 'OPPO F3', 6990000, 'Màn hình: 5.5\", Full HD\nHĐH: Android 6.0 (Marshmallow)\nCPU: Mediatek MT6750T 8 nhân\nRAM: 4 GB, ROM: 64 GB\nCamera: 13 MP, Selfie: 16 MP vĂ  8 MP\nPIN: 3200 mAh', 'https://cdn1.tgdd.vn/Products/Images/42/92541/oppo-f3-15-300x300.jpg', 1),
(40, 'Motorola Moto G5S Plus', 6990000, 'Màn hình: 5.5\", Full HD\nHĐH: Android 7.1\nCPU: Snapdragon 625 8 nhân 64-bit\nRAM: 4 GB, ROM: 32 GB\nCamera: 2 camera 13 MP, Selfie: 8 MP\nPIN: 3000 mAh', 'https://cdn1.tgdd.vn/Products/Images/42/111446/motorola-moto-g5s-plus-300x300.jpg', 1),
(41, 'Sony Xperia XA Ultra', 6291000, 'Màn hình: 6\", Full HD\nHĐH: Android 6.0 (Marshmallow)\nCPU: Helio P10 8 nhân\nRAM: 3 GB, ROM: 16 GB\nCamera: 21.5 MP, Selfie: 16 MP\nPIN: 2700 mAh, SIM: 2 SIM', 'https://cdn1.tgdd.vn/Products/Images/42/77601/sony-xperia-xa-ultra-300-300x300.jpg', 1),
(42, 'Vivo V7', 6990000, 'Màn hình: 5.7\", HD+\nHĐH: Android 7.1 \nCPU:  Snapdragon 450\nRAM: 4 GB, ROM: 32 GB\nCamera: 16 MP, Selfie: 24 MP\nPIN: 3000 mAh', 'https://cdn4.tgdd.vn/Products/Images/42/138399/vivo-v7-2-300x300.jpg', 1),
(44, 'Vivo V5s', 6690000, 'Màn hình: 5.5\", HD\nHĐH: Funtouch OS 3.0 (ná»n táº£ng Android 6.0)\nCPU: Mediatek MT6750 8 nhân\nRAM: 4 GB, ROM: 64 GB\nCamera: 13 MP, Selfie: 20 MP\nPIN: 3000 mAh', 'https://cdn1.tgdd.vn/Products/Images/42/108821/vivo-1713-v5s-300-300x300.jpg', 1),
(45, 'Xiaomi Mi A1', 5990000, 'Màn hình: 5.5\", Full HD\nHĐH: Android 7.1\nCPU: Qualcomm Snapdragon 625 8 nhân 64-bit\nRAM: 4 GB, ROM: 64 GB\nCamera: 2 camera 12 MP, Selfie: 5 MP\nPIN: 3080 mAh', 'https://cdn2.tgdd.vn/Products/Images/42/113572/xiaomi-mi-a12-300x300.jpg', 1),
(47, 'HTC Desire 10 Pro', 4990000, 'Màn hình: 5.5\", Full HD\nHĐH: Android 6.0 (Marshmallow)\nCPU: MTK Helio P10 8 nhân\nRAM: 4 GB, ROM: 64 GB\nCamera: 20 MP, Selfie: 13 MP\nPIN: 3000 mAh, SIM: 2 SIM', 'https://cdn1.tgdd.vn/Products/Images/42/84801/htc-desire-10-pro-300-300x300.jpg', 1),
(48, 'HUAWEI GR5 2017 PRO', 5391000, 'Màn hình: 5.5\", Full HD\nHĐH: Android 6.0 (Marshmallow)\nCPU: HiSilicon Kirin 655 8 nhân\nRAM: 4GB, ROM: 64GB\nCamera kĂ©p: 12+2 MP, Selfie: 8MP\nPIN: 3340 mAh, SIM: 2 SIM', 'https://cdn3.tgdd.vn/Products/Images/42/92073/huawei-gr5-2017-pro-300-300x300.jpg', 1),
(49, 'Vivo Y69', 5990000, 'Màn hình: 5.5\", HD\nHĐH: Android 7.0\nCPU: Mediatek MT6750 8 nhân\nRAM: 3 GB, ROM: 32 GB\nCamera: 13 MP, Selfie: 16 MP\nPIN: 3000 mAh', 'https://cdn3.tgdd.vn/Products/Images/42/112973/vivo-y69-300-300x300.jpg', 1),
(51, 'Sony Xperia XA1', 5790000, 'Màn hình: 5.0\", HD\nHĐH: Android 7.0\nCPU: Helio P20, 8 nhân\nRAM: 3GB; ROM: 32GB\nCamera: 23MP, Selfie: 8MP\nPIN: 2300 mAh, SIM: 2 SIM', 'https://cdn1.tgdd.vn/Products/Images/42/92081/sony-xperia-xa1-3001copy-300x300.jpg', 1),
(52, 'Nokia 6', 5590000, 'Màn hình: 5.5\", Full HD\nHĐH: Android 7.0\nCPU: Qualcomm Snapdragon 430 8 nhân\nRAM: 3 GB, ROM: 32 GB\nCamera: 16 MP, Selfie: 8 MP\nPIN: 3000 mAh', 'https://cdn1.tgdd.vn/Products/Images/42/90836/nokia-6-15-300x300.jpg', 1),
(55, 'Samsung Galaxy J7 Prime', 5490000, 'Màn hình: 5.5\", Full HD\nHĐH: Android 6.0 (Marshmallow)\nCPU: Exynos 7870 8 nhân\nRAM: 3 GB, ROM: 32 GB\nCamera: 13 MP, Selfie: 8 MP\nPIN: 3300 mAh, SIM: 2 SIM', 'https://cdn3.tgdd.vn/Products/Images/42/84798/samsung-galaxy-j7-prime-h1-300x300.jpg', 1),
(56, 'Huawei Y7 Prime', 4990000, 'Màn hình: 5.5\", HD\nHĐH: Android 7.0\nCPU: Snapdragon 435 8 nhân\nRAM: 3 GB, ROM: 32 GB\nCamera: 12 MP, Selfie: 8 MP\nPIN: 4000 mAh, SIM: 2 SIM', 'https://cdn3.tgdd.vn/Products/Images/42/105928/huawei-y7-prime-300x300.jpg', 1),
(58, 'Motorola Moto M', 4990000, 'Màn hình: 5.5\", Full HD\nHĐH: Android 6.0 (Marshmallow)\nCPU: Helio P15 8 nhân\nRAM: 4 GB, ROM: 32GB\nCamera: 16 MP, Selfie: 8 MP\nPIN: 3050 mAh', 'https://cdn3.tgdd.vn/Products/Images/42/88538/motorola-moto-m-1-300x300.jpg', 1),
(61, 'Sony Xperia L1', 4490000, 'Màn hình: 5.5\", HD\nHĐH: Android 7.0\nCPU: MT6737T, 4 nhân\nRAM: 2 GB, ROM: 16 GB\nCamera: 13 MP, Selfie: 5 MP\nPIN: 2620 mAh', 'https://cdn3.tgdd.vn/Products/Images/42/106538/sony-xperia-l1-300-1-300x300.jpg', 1),
(63, 'Motorola Moto E4 Plus', 4490000, 'Màn hình: 5.5\", HD\nHĐH: Android 7.1\nCPU: MT6737 4 nhân\nRAM: 3 GB, ROM: 32 GB\nCamera: 13 MP, Selfie: 5 MP\nPIN: 5000 mAh', 'https://cdn2.tgdd.vn/Products/Images/42/106282/motorola-moto-e4-plus-6-300x300.jpg', 1),
(65, 'HTC One ME', 4490000, 'Màn hình: 5.2\", Quad HD\nHĐH: Android 5.0 (Lollipop)\nCPU: Helio X10 8 nhân\nRAM: 3 GB, ROM: 32 GB\nCamera: 20 MP, Selfie: 4 Ultra pixel\nPIN: 2840 mAh, SIM: 2 SIM', 'https://cdn3.tgdd.vn/Products/Images/42/72173/htc-one-me9-1-300x300.jpg', 1),
(66, 'Lenovo K6 Power', 4490000, 'Màn hình: 5\", FHD\nHĐH: Android 6.0\nCPU: Snapdragon 430 8 nhân\nRAM: 3 GB, ROM: 32 GB\nCamera: 13 MP, Selfie: 8 MP\nPIN: 4000 mAh, SIM: 2 SIM', 'https://cdn.tgdd.vn/Products/Images/42/91780/lenovo-vibe-k6-power-300x300.jpg', 1),
(67, 'Xiaomi Redmi Note 5A Prime', 4290000, 'Màn hình: 5.5\", HD IPS\nHĐH: Android 7.0\nCPU: Snapdragon 435 8 nhân\nRAM: 3 GB, ROM: 32 GB\nCamera: 13 MP, Selfie: 16 MP\nPIN: 3080 mAh', 'https://cdn.tgdd.vn/Products/Images/42/133150/xiaomi-redmi-note-5a-prime-1-300x300.jpg', 1),
(69, 'Vivo Y55s', 3990000, 'Màn hình: 5.2\", HD\nHĐH: Android 6.0\nCPU: Snapdragon 425 4 nhân\nRAM: 2 GB, ROM: 16 GB\nCamera: 13 MP, Selfie: 5 MP\nPIN: 2730mAh, SIM: 2 SIM', 'https://cdn.tgdd.vn/Products/Images/42/108820/vivo-y55s-300-300x300.jpg', 1),
(70, 'HTC One A9s', 3990000, 'Màn hình: 5\", HD\nHĐH: Android 6.0 (Marshmallow)\nCPU: MTK Helio P10 8 nhân\nRAM: 2GB, ROM: 16GB\nCamera: 13 MP, Selfie: 5 MP\nPIN: 2300 mAh, SIM: 1 SIM', 'https://cdn4.tgdd.vn/Products/Images/42/85019/htc-one-a9s-1-300x300.jpg', 1),
(72, 'Xiaomi Redmi 4X', 3690000, 'Màn hình: 5\", HD\nHĐH: Android 6.0 (Marshmallow)\nCPU: Snapdragon 435 8 nhân\nRAM: 3 GB, ROM: 32 GB\nCamera: 13 MP, Selfie: 5 MP\nPIN: 4100 mAh', 'https://cdn.tgdd.vn/Products/Images/42/99145/xiaomi-redmi-4x-300-300x300.jpg', 1),
(73, 'Mobiistar Zumbo S2', 3490000, 'Màn hình: 5.5\", FHD\nHĐH: Android 7.0 (Nougat)\nCPU: MTK MT6737T 4 nhân\nRAM: 3 GB, ROM: 16 GB\nCamera: 13 MP, Selfie: 13 MP\nPIN: 3000 mAh, SIM: 2 SIM', 'https://cdn1.tgdd.vn/Products/Images/42/103401/mobiistar-lai-zumbo-s2-300-300x300.jpg', 1),
(74, 'Vivo Y53', 3390000, 'Màn hình: 5\", qHD\nHĐH: Android 6.0\nCPU: MSM8917 4 nhân\nRAM: 2 GB, ROM: 16 GB\nCamera: 8 MP, Selfie: 5 MP\nPIN: 2500mAh, SIM: 2 SIM', 'https://cdn4.tgdd.vn/Products/Images/42/108819/vivo-1606-y53-300-300x300.jpg', 1),
(75, 'OPPO A37 (A37fw)', 3290000, 'Màn hình: 5\", HD\nHĐH: Android 5.1 (Lollipop)\nCPU: Snapdragon 410 4 nhân\nRAM: 2 GB, ROM: 16 GB\nCamera: 8 MP, Selfie: 5 MP\nPIN: 2630 mAh, SIM: 2 SIM', 'https://cdn1.tgdd.vn/Products/Images/42/103846/oppo-a37-a37fw-pp-300x300.jpg', 1),
(77, 'Xiaomi Redmi Note 5A (Redmi Y1 Lite)', 3290000, 'Màn hình: 5.5\", HD\nHĐH: Android 7.0\nCPU: Qualcomm Snapdragon 425 4 nhân 64-bit\nRAM: 2 GB, ROM: 16 GB\nCamera: 13 MP, Selfie: 5 MP\nPIN: 3080 mAh', 'https://cdn2.tgdd.vn/Products/Images/42/112972/xiaomi-redmi-note-5a-300x300.jpg', 1),
(78, 'Samsung Galaxy J3 LTE', 2990000, 'Màn hình: 5\", HD\nHĐH: Android 5.1 (Lollipop)\nCPU: Spreadtrum SC7731 4 nhân\nRAM: 1.5 GB, ROM: 8 GB\nCamera: 8 MP, Selfie: 5 MP\nPIN: 2600 mAh, SIM: 2 SIM', 'https://cdn2.tgdd.vn/Products/Images/42/84667/samsung-galaxy-j3-lte-300x300.jpg', 1),
(80, 'Asus Zenfone Live ZB501KL', 2990000, 'Màn hình: 5\", HD\nHĐH: Android 6.0\nCPU: Qualcomm Snapdragon 400 4 nhân\nRAM: 2 GB, ROM: 16 GB\nCamera: 13 MP, Selfie: 5 MP\nPIN: 2650 mAh, SIM: 2 SIM', 'https://cdn2.tgdd.vn/Products/Images/42/100492/asus-zenfone-live-zb501kl-300-1-300x300.jpg', 1),
(81, 'Mobiistar Prime X1', 2990000, 'Màn hình: 5.5\", HD\nHĐH: Android 6.0\nCPU: MTK MT6737, 4 nhân\nRAM: 3 GB, ROM: 16 GB\nCamera: 13 MP, Selfie: 8 MP\nPIN: 3000 mAh, 2 SIM', 'https://cdn1.tgdd.vn/Products/Images/42/88851/mobiistar-prime-x1-1-300x300.jpg', 1),
(82, 'Asus Zenfone Go TV ZB551KL', 2691000, 'Màn hình: 5.5\", HD\nHĐH: Android 5.1 (Lollipop)\nCPU: Qualcomm Snapdragon 400 4 nhân\nRAM: 2 GB, ROM: 32 GB\nCamera: 13 MP, Selfie: 5 MP\nPIN: 3010 mAh, SIM: 2 SIM', 'https://cdn.tgdd.vn/Products/Images/42/89785/asus-zenfone-go-tv-zb551kl-300x300.jpg', 1),
(83, 'Huawei Y5 2017', 2990000, 'Màn hình: 5\", HD\nHĐH: Android 6.0\nCPU: MTK MT6737T 4 nhân\nRAM: 2 GB, ROM: 16 GB\nCamera: 8 MP, Selfie: 5 MP\nPIN: 3000 mAh, SIM: 2 SIM', 'https://cdn2.tgdd.vn/Products/Images/42/103242/huawei-y5-2017-300x300.jpg', 1),
(85, 'Mobiistar Zumbo J2', 2790000, 'Màn hình: 5.2\", HD\nHĐH: Android 7.0 (Nougat)\nCPU: MTK MT6737 4 nhân\nRAM: 2 GB, ROM: 16 GB\nCamera: 13 MP, Selfie: 13 MP\nPIN: 3000 mAh, SIM: 2 SIM', 'https://cdn4.tgdd.vn/Products/Images/42/103399/mobiistar-zumbo-j2-300-a-300x300.jpg', 1),
(87, 'Xiaomi Redmi 4a', 2690000, 'Màn hình: 5\", HD\nHĐH: Android 6.0 (Marshmallow)\nCPU: Qualcomm Snapdragon 425 4 nhân\nRAM: 2 GB, ROM: 32 GB\nCamera: 13 MP, Selfie: 5 MP\nPIN: 3120 mAh', 'https://cdn1.tgdd.vn/Products/Images/42/88861/xiaomi-redmi-4a-1-300x300.jpg', 1),
(88, 'Mobiistar Lai Zumbo S (2017)', 2590000, 'Màn hình: 5.5\", HD\nHĐH: Android 7.0 (Nougat)\nCPU: MTK MT6737 4 nhân\nRAM: 2 GB, ROM: 16 GB\nCamera: 8 MP, Selfie: 8 MP\nPIN: 4000 mAh, SIM: 2 SIM', 'https://cdn.tgdd.vn/Products/Images/42/112775/mobiistar-zumbo-s-2017-300-300x300.jpg', 1),
(89, 'Asus Zenfone Go ZC500TG', 2490000, 'Màn hình: 5\", HD\nHĐH: Android 5.1 (Lollipop)\nCPU: MT6580 4 nhân\nRAM: 2 GB, ROM: 16 GB\nCamera: 8 MP, Selfie: 2 MP\nPIN: 2070 mAh, SIM: 2 SIM', 'https://cdn4.tgdd.vn/Products/Images/42/72969/asus-zenfone-go-zc500tg-300x300.jpg', 1),
(90, 'Nokia 2', 2390000, 'Màn hình: 5\", HD\nHĐH: Android 7.1\nCPU: Qualcomm Snapdragon 212 4 nhân 32-bit\nRAM: 1 GB, ROM: 8 GB\nCamera: 8 MP, Selfie: 5 MP\nPIN: Đang cập nhật', 'https://cdn2.tgdd.vn/Products/Images/42/111457/nokia-2-h2-300x300.jpg', 1),
(91, 'Motorola Moto C 4G', 2290000, 'Màn hình: 5\", FWVGA\nHĐH: Android 7.1\nCPU: MT6737 4 nhân\nRAM: 1 GB, ROM: 16 GB\nCamera: 5 MP, Selfie: 2 MP\nPIN: 2350 mAh', 'https://cdn4.tgdd.vn/Products/Images/42/109099/motorola-moto-c-4g-300-300x300.jpg', 1),
(92, 'Mobell Nova F7 Pro', 2290000, 'Màn hình: 5\", HD\nHĐH: Android 6.0 (Marshmallow)\nCPU: MT6580 4 nhân\nRAM: 2 GB, ROM: 16 GB\nCamera: 8 MP, Selfie: 5 MP\nPIN: 2100 mAh, SIM: 2 SIM', 'https://cdn3.tgdd.vn/Products/Images/42/102188/mobell-nova-f7-pro-300-1-300x300.jpg', 1),
(93, 'Mobiistar Lai Zumbo J 2017', 1971000, 'Màn hình: 5.2\", HD\nHĐH: Android 6.0 (Marshmallow)\nCPU: MT6580 4 nhân\nRAM: 2 GB, ROM: 16 GB\nCamera: 8 MP, Selfie: 8 MP\nPIN: 2400 mAh, SIM: 2 SIM', 'https://cdn.tgdd.vn/Products/Images/42/91800/mobiistar-lai-zumbo-j-2017-300-300x300.jpg', 1),
(94, 'Huawei Y5 II', 1971000, 'Màn hình: 5\", HD\nHĐH: Android 5.1 (Lollipop)\nCPU: MTK 6582 4 nhân\nRAM: 1 GB, ROM: 8 GB\nCamera: 8 MP, Selfie: 2 MP\nPIN: 2200 mAh, SIM: 2 SIM', 'https://cdn3.tgdd.vn/Products/Images/42/75663/huawei-y5-ii-6-300x300.jpg', 1),
(95, 'Huawei Y3 2017', 2190000, 'Màn hình: 5\", FWVGA\nHĐH: Android 6.0\nCPU: MT6580M 4 nhân\nRAM: 1 GB, ROM: 8 GB\nCamera: 8 MP, Selfie: 2 MP\nPIN: 2200 mAh, SIM: 2 SIM', 'https://cdn2.tgdd.vn/Products/Images/42/107197/huawei-y3-2017-300x300.jpg', 1),
(96, 'Mobell Nova P2', 1881000, 'Màn hình: 5.5\", HD\nHĐH: Android 5.1 (Lollipop)\nCPU: MT6580 4 nhân\nRAM: 2 GB, ROM: 16 GB\nCamera: 8 MP, Selfie: 5 MP\nPIN: 4000 mAh, SIM: 2 SIM', 'https://cdn.tgdd.vn/Products/Images/42/75365/mobell-nova-p2-300a-300x300.jpg', 1),
(97, 'Itel P51', 2090000, 'Màn hình: 5.5\", HD\nHĐH: Android 6.0 \nCPU: Mediatek MT6580 4 nhân\nRAM: 1 GB, ROM: 16 GB\nCamera: 8 MP, Selfie: 2 MP\nPIN: 5000 mAh, 2 SIM', 'https://cdn2.tgdd.vn/Products/Images/42/138842/itel-p51-300-300x300.jpg', 1),
(98, 'Mobiistar Lai Zumbo S Lite (2017)', 1990000, 'Màn hình: 5.5\", HD\nHĐH: Android 7.0 (Nougat)\nCPU: MTK MT6737 4 nhân\nRAM: 1 GB, ROM: 8 GB\nCamera: 8 MP, Selfie: 5 MP\nPIN: 4000 mAh, SIM: 2 SIM', 'https://cdn1.tgdd.vn/Products/Images/42/112776/mobiistar-zumbo-s-lite-2017-300-300x300.jpg', 1),
(99, 'Mobell Nova i7', 1791000, 'Màn hình: 5\", HD\nHĐH: Android 6.0 (Marshmallow)\nCPU: MT6580 4 nhân\nRAM: 2 GB, ROM: 16 GB\nCamera: 8 MP, Selfie: 5 MP\nPIN: 2300 mAh, SIM: 2 SIM', 'https://cdn4.tgdd.vn/Products/Images/42/87359/mobell-nova-i7-12-300x300.jpg', 1),
(100, 'name', 0, 'decriptions', 'image', 0),
(101, 'Acer Aspire ES1 432 C5J2 N3350 (NX.GFSSV.004)', 6290, 'Màn hình: 14 inch, HD\nCPU: Celeron, 1.1GHz\nRAM: 2GB, Ổ cứng HDD: 500GB\nĐồ họa: Intel HD Graphics\nHĐH: Windows 10, Không DVD\nNặng 1.92 kg, PIN 4 cell', 'https://cdn.tgdd.vn/Products/Images/44/101830/acer-aspire-es1-432-c5j2-n3350-2gb-500gb-win10-den-450x300-450x300.png', 2),
(102, 'Asus X441NA N3350 (GA017T)', 6490, 'Màn hình: 14 inch, HD\nCPU: Celeron N3350, 1.10 GHz\nRAM: 4 GB, Ổ cứng HDD: 500 GB\nĐồ họa: Intel HD Graphics\nHĐH: Windows 10, DVD: Không\nNặng 1.7 kg, PIN 3 cell', 'https://cdn4.tgdd.vn/Products/Images/44/135174/asus-x441na-n3350-ga017t-dai-dien-10000-450x300.jpg', 2),
(103, 'Lenovo IdeaPad 110 15IBR N3710 (80T700BKVN)', 6990, 'Màn hình: 15.6\", 1366x768\nCPU: Intel Pentium, 1.6GHz\nRAM: 4GB/ HDD: 500GB\nVGA: Intel HD Graphics\nHĐH: Windows 10 Home\nPin: 3 cell/ DVD: Không', 'https://cdn3.tgdd.vn/Products/Images/44/85983/lenovo-ideapad-110-15ibr-80t700bkvn-den-h-450x300-450x300.jpg', 2),
(105, 'HP 15 bs578TU N3710 (2LR89PA)', 7690, 'Màn hình: 15.6 inch, HD\nCPU: Pentium N3710, 1.6GHz\nRAM: 4GB, Ổ cứng HDD: 500GB\nĐồ họa: Intel HD Graphics 405\nHĐH: Windows 10, DVD: Không\nNặng 1.86 kg, PIN 4 cell', 'https://cdn.tgdd.vn/Products/Images/44/111360/hp-15-bs578tu-n3710-den-450x300-450x300.jpg', 2),
(106, 'Asus X441NA N4200 (GA070T)', 7690, 'Màn hình: 14 inch, HD\nCPU: Pentium, 1.1 GHz\nRAM: 4 GB, Ổ cứng HDD: 500 GB\nĐồ họa: Intel® HD Graphics\nHĐH: Windows 10, DVD: Không\nNặng 1.7 kg, PIN 3 cell', 'https://cdn4.tgdd.vn/Products/Images/44/101829/asus-x441na-n4200-450x300.jpg', 2),
(107, 'Lenovo Ideapad 320 14ISK i3 6006U (80XG007SVN)', 9690, 'Màn hình: 14 inch, FHD\nCPU: i3-6006U, 2.0GHz\nRAM: 4 GB, Ổ cứng HDD 1TB\nĐồ họa: Intel® HD Graphics\nHĐH: Windows 10, Không DVD\nNặng 2.15 kg, PIN 2 cell', 'https://cdn.tgdd.vn/Products/Images/44/139355/lenovo-ideapad-320-14isk-i3-6006u-80xg007svn-dai-dien-450x300.jpg', 2),
(115, 'Lenovo IdeaPad 120S 11IAP N3350 (81A40072VN)', 5190, 'Màn hình: 11.6 inch, HD\nCPU: Celeron, 1.1GHz\nRAM: 2GB, Ổ cứng eMMC: 32GB\nĐồ họa: Intel® HD Graphics\nHĐH: Windows 10, DVD: Không\nNặng 1.27 kg, PIN 2 cell', 'https://cdn3.tgdd.vn/Products/Images/44/113133/lenovo-ideapad-120s-11iap-450x300-1-450x300.jpg', 2),
(116, 'Acer Aspire ES1 432 C5J2 N3350 (NX.GFSSV.004)', 6290, 'Màn hình: 14 inch, HD\nCPU: Celeron, 1.1GHz\nRAM: 2GB, Ổ cứng HDD: 500GB\nĐồ họa: Intel HD Graphics\nHĐH: Windows 10, Không DVD\nNặng 1.92 kg, PIN 4 cell', 'https://cdn.tgdd.vn/Products/Images/44/101830/acer-aspire-es1-432-c5j2-n3350-2gb-500gb-win10-den-450x300-450x300.png', 2),
(117, 'Asus X441NA N3350 (GA017T)', 6490, 'Màn hình: 14 inch, HD\nCPU: Celeron N3350, 1.10 GHz\nRAM: 4 GB, Ổ cứng HDD: 500 GB\nĐồ họa: Intel HD Graphics\nHĐH: Windows 10, DVD: Không\nNặng 1.7 kg, PIN 3 cell', 'https://cdn4.tgdd.vn/Products/Images/44/135174/asus-x441na-n3350-ga017t-dai-dien-10000-450x300.jpg', 2),
(118, 'Lenovo IdeaPad 110 15IBR N3710 (80T700BKVN)', 6990, 'Màn hình: 15.6\", 1366x768\nCPU: Intel Pentium, 1.6GHz\nRAM: 4GB/ HDD: 500GB\nVGA: Intel HD Graphics\nHĐH: Windows 10 Home\nPin: 3 cell/ DVD: Không', 'https://cdn3.tgdd.vn/Products/Images/44/85983/lenovo-ideapad-110-15ibr-80t700bkvn-den-h-450x300-450x300.jpg', 2),
(120, 'HP 15 bs578TU N3710 (2LR89PA)', 7690, 'Màn hình: 15.6 inch, HD\nCPU: Pentium N3710, 1.6GHz\nRAM: 4GB, Ổ cứng HDD: 500GB\nĐồ họa: Intel HD Graphics 405\nHĐH: Windows 10, DVD: Không\nNặng 1.86 kg, PIN 4 cell', 'https://cdn.tgdd.vn/Products/Images/44/111360/hp-15-bs578tu-n3710-den-450x300-450x300.jpg', 2),
(121, 'Asus X441NA N4200 (GA070T)', 7690, 'Màn hình: 14 inch, HD\nCPU: Pentium, 1.1 GHz\nRAM: 4 GB, Ổ cứng HDD: 500 GB\nĐồ họa: Intel® HD Graphics\nHĐH: Windows 10, DVD: Không\nNặng 1.7 kg, PIN 3 cell', 'https://cdn4.tgdd.vn/Products/Images/44/101829/asus-x441na-n4200-450x300.jpg', 2),
(122, 'Lenovo Ideapad 320 14ISK i3 6006U (80XG007SVN)', 9690, 'Màn hình: 14 inch, FHD\nCPU: i3-6006U, 2.0GHz\nRAM: 4 GB, Ổ cứng HDD 1TB\nĐồ họa: Intel® HD Graphics\nHĐH: Windows 10, Không DVD\nNặng 2.15 kg, PIN 2 cell', 'https://cdn.tgdd.vn/Products/Images/44/139355/lenovo-ideapad-320-14isk-i3-6006u-80xg007svn-dai-dien-450x300.jpg', 2),
(127, 'HP 15 bs571TU i3 6006U (2JQ68PA)', 10490, 'Màn hình: 15.6 inch, HD\nCPU: Core i3 Skylake, 2.0GHz\nRAM: 4GB, Ổ cứng HDD: 1TB\nĐồ họa: Intel HD Graphics 520\nHĐH: Windows 10, DVD:\nNặng 1.86 kg, PIN 4 cell', 'https://cdn4.tgdd.vn/Products/Images/44/111129/hp-15-bs571tu-i3-6006u-2jq68pa-den-dai-dien-450x300.jpg', 2),
(128, 'Lenovo IdeaPad 320 15IKBN i3 7130U (80XL03SNVN)', 10490, 'Màn hình: 15.6 inch, FHD\nCPU: i3-7130U, 2.7GHz\nRAM: 4GB, Ổ cứng: SSD 128GB\nĐồ họa: Intel HD Graphics\nHĐH: Windows 10, DVD: Không\nNặng 1.9 kg, PIN 2 cell', 'https://cdn4.tgdd.vn/Products/Images/44/139349/lenovo-ideapad-320-15ikbn-i3-7130u-80xl03snvn-dai-dien-450x300.jpg', 2),
(129, 'HP 15 bs572TU i3 6006U (2JQ69PA)', 10990, 'Màn hình: 15.6 inch, FHD\nCPU: Core i3 Skylake, 2.0GHz\nRAM: 4GB, Ổ cứng HDD: 500GB\nĐồ họa: Intel HD Graphics 520\nHĐH: Windows 10, DVD:\nNặng 1.86 kg, PIN 4 cell', 'https://cdn1.tgdd.vn/Products/Images/44/111131/hp-15-bs572tu-i3-6006u-2jq69pa-450x300-450x300.jpg', 2),
(130, 'Lenovo IdeaPad 120S 11IAP N3350 (81A40072VN)', 5190, 'Màn hình: 11.6 inch, HD\nCPU: Celeron, 1.1GHz\nRAM: 2GB, Ổ cứng eMMC: 32GB\nĐồ họa: Intel® HD Graphics\nHĐH: Windows 10, DVD: Không\nNặng 1.27 kg, PIN 2 cell', 'https://cdn3.tgdd.vn/Products/Images/44/113133/lenovo-ideapad-120s-11iap-450x300-1-450x300.jpg', 2),
(131, 'Acer Aspire ES1 432 C5J2 N3350 (NX.GFSSV.004)', 6290, 'Màn hình: 14 inch, HD\nCPU: Celeron, 1.1GHz\nRAM: 2GB, Ổ cứng HDD: 500GB\nĐồ họa: Intel HD Graphics\nHĐH: Windows 10, Không DVD\nNặng 1.92 kg, PIN 4 cell', 'https://cdn.tgdd.vn/Products/Images/44/101830/acer-aspire-es1-432-c5j2-n3350-2gb-500gb-win10-den-450x300-450x300.png', 2),
(132, 'Asus X441NA N3350 (GA017T)', 6490, 'Màn hình: 14 inch, HD\nCPU: Celeron N3350, 1.10 GHz\nRAM: 4 GB, Ổ cứng HDD: 500 GB\nĐồ họa: Intel HD Graphics\nHĐH: Windows 10, DVD: Không\nNặng 1.7 kg, PIN 3 cell', 'https://cdn4.tgdd.vn/Products/Images/44/135174/asus-x441na-n3350-ga017t-dai-dien-10000-450x300.jpg', 2),
(133, 'Lenovo IdeaPad 110 15IBR N3710 (80T700BKVN)', 6990, 'Màn hình: 15.6\", 1366x768\nCPU: Intel Pentium, 1.6GHz\nRAM: 4GB/ HDD: 500GB\nVGA: Intel HD Graphics\nHĐH: Windows 10 Home\nPin: 3 cell/ DVD: Không', 'https://cdn3.tgdd.vn/Products/Images/44/85983/lenovo-ideapad-110-15ibr-80t700bkvn-den-h-450x300-450x300.jpg', 2),
(135, 'HP 15 bs578TU N3710 (2LR89PA)', 7690, 'Màn hình: 15.6 inch, HD\nCPU: Pentium N3710, 1.6GHz\nRAM: 4GB, Ổ cứng HDD: 500GB\nĐồ họa: Intel HD Graphics 405\nHĐH: Windows 10, DVD: Không\nNặng 1.86 kg, PIN 4 cell', 'https://cdn.tgdd.vn/Products/Images/44/111360/hp-15-bs578tu-n3710-den-450x300-450x300.jpg', 2),
(136, 'Asus X441NA N4200 (GA070T)', 7690, 'Màn hình: 14 inch, HD\nCPU: Pentium, 1.1 GHz\nRAM: 4 GB, Ổ cứng HDD: 500 GB\nĐồ họa: Intel® HD Graphics\nHĐH: Windows 10, DVD: Không\nNặng 1.7 kg, PIN 3 cell', 'https://cdn4.tgdd.vn/Products/Images/44/101829/asus-x441na-n4200-450x300.jpg', 2),
(137, 'Lenovo Ideapad 320 14ISK i3 6006U (80XG007SVN)', 9690, 'Màn hình: 14 inch, FHD\nCPU: i3-6006U, 2.0GHz\nRAM: 4 GB, Ổ cứng HDD 1TB\nĐồ họa: Intel® HD Graphics\nHĐH: Windows 10, Không DVD\nNặng 2.15 kg, PIN 2 cell', 'https://cdn.tgdd.vn/Products/Images/44/139355/lenovo-ideapad-320-14isk-i3-6006u-80xg007svn-dai-dien-450x300.jpg', 2),
(142, 'HP 15 bs571TU i3 6006U (2JQ68PA)', 10490, 'Màn hình: 15.6 inch, HD\nCPU: Core i3 Skylake, 2.0GHz\nRAM: 4GB, Ổ cứng HDD: 1TB\nĐồ họa: Intel HD Graphics 520\nHĐH: Windows 10, DVD:\nNặng 1.86 kg, PIN 4 cell', 'https://cdn4.tgdd.vn/Products/Images/44/111129/hp-15-bs571tu-i3-6006u-2jq68pa-den-dai-dien-450x300.jpg', 2),
(143, 'Lenovo IdeaPad 320 15IKBN i3 7130U (80XL03SNVN)', 10490, 'Màn hình: 15.6 inch, FHD\nCPU: i3-7130U, 2.7GHz\nRAM: 4GB, Ổ cứng: SSD 128GB\nĐồ họa: Intel HD Graphics\nHĐH: Windows 10, DVD: Không\nNặng 1.9 kg, PIN 2 cell', 'https://cdn4.tgdd.vn/Products/Images/44/139349/lenovo-ideapad-320-15ikbn-i3-7130u-80xl03snvn-dai-dien-450x300.jpg', 2),
(144, 'iPhone X 256GB', 35000000, 'Hàng Sắp về', 'https://cdn1.tgdd.vn/Products/Images/42/114111/iphone-x-256gb-1-300x300.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE `product_type` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(50) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`type_id`, `type_name`, `image`) VALUES
(1, 'Điện Thoại Di Động', 'http://www.freeiconspng.com/uploads/mobile-phone-cell-icon-25.png'),
(2, 'Lap Top', 'http://icons.iconarchive.com/icons/custom-icon-design/flatastic-7/512/Laptop-icon.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'member1', 'dungtran6665@gmail.com', '$2y$10$oNMpyZ0TFR5FVs9lF7dwJezIB6gz.yGwaEc9Nw8DR3TEtoUYRxMRq', 'jPWE9ako4riQ3ZtRfYlpxSo5fvdoAMzfKpw6fBIMP0lc3yLHzUc7NB68vT3e', '2017-12-11 04:42:11', '2017-12-11 04:42:11'),
(2, 'lep', 'abc@example.com', '$2y$10$Ijd31pLkPqoMPTp3AFJCbO2ZwTw0P07EUuHbLetbw68A7Rqe73HIO', 'g3fVmn3i9mrsSFB3CjpdVdrrpAlFNlpLM2KqL9xwMZpynq3v8txR0B4pfEGc', '2017-12-12 05:22:20', '2017-12-12 05:22:20');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) NOT NULL,
  `id_product` int(10) NOT NULL,
  `content` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `id_user`, `id_product`,`content`) VALUES
(1, 3, 200,'Comments test');

-- --------------------------------------------------------

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_type`
--
ALTER TABLE `product_type`
  ADD PRIMARY KEY (`type_id`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT for table `product_type`
--
ALTER TABLE `product_type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
