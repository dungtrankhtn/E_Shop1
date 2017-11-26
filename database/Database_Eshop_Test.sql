-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2017 at 04:10 PM
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
(3, 'iPhone 8 Plus 64GB', 23990000, 'Màn hình: 5.5\", Retina HD\nHĐH: iOS 11\nCPU: Apple A11 Bionic 6 nhân\nRAM: 3 GB, ROM: 64 GB\nCamera: 2 camera 12 MP, Selfie: 7 MP\nPIN: Đang cập nhật', 'https://cdn.tgdd.vn/Products/Images/42/114110/Feature/iphone-8-plus2-400x400.jpg', 1),
(4, 'iPhone 8 64GB', 20990000, 'Màn hình: 4.7\", Retina HD\nHĐH: iOS 11\nCPU: Apple A11 Bionic 6 nhân\nRAM: 2 GB, ROM: 64 GB\nCamera: 12 MP, Selfie: 7 MP\nPIN: Đang cập nhật', 'https://cdn3.tgdd.vn/Products/Images/42/114113/iphone-8-64gb-h1-1-300x300.jpg', 1),
(5, 'Samsung Galaxy S8 Plus', 20490000, 'Màn hình: 6.2, Quad HD (2K)\nHĐH: Android 7.0\nCPU: Exynos 8895 8 nhân\nRAM: 4 GB, ROM: 64 GB\nCamera: 12 MP, Selfie: 8 MP\nPIN: 3500 mAh', 'https://cdn1.tgdd.vn/Products/Images/42/91131/samsung-galaxy-s8-plus-20-300x300.jpg', 1),
(6, 'iPhone 7 Plus 128GB', 22990000, 'Màn hình: 5.5\", Retina HD\nHĐH: iOS 10\nCPU: Apple A10 Fusion 4 nhân\nRAM: 3 GB, ROM: 128 GB\nCamera: 2x12 MP, Selfie: 7 MP\nPIN: 2900 mAh, SIM: 1 SIM', 'https://cdn4.tgdd.vn/Products/Images/42/87839/Feature/iphone-7-plus-128gb-600-277-2-1-400x400.jpg', 1),
(7, 'Samsung Galaxy Note 8', 22490000, 'Màn hình: 6.3\", Quad HD (2K)\nHĐH: Android 7.1\nCPU: Exynos 8895 8 nhân\nRAM: 6 GB, ROM: 64 GB\nCamera: 2 camera 12 MP, Selfie: 8 MP\nPIN: 3300 mAh', 'https://cdn1.tgdd.vn/Products/Images/42/106211/Feature/samsung-galaxy-note8-3-400x400.jpg', 1),
(8, 'iPhone 7 256GB', 19990000, 'Màn hình: 4.7\", Retina HD\nHĐH: iOS 10\nCPU: Apple A10 Fusion 4 nhân\nRAM: 2 GB, ROM: 256 GB\nCamera: 12 MP, Selfie: 7 MP\nPIN: 1960 mAh, SIM: 1 SIM\n', 'https://cdn3.tgdd.vn/Products/Images/42/87838/iphone-7-256gb-12-300x300.jpg', 1),
(9, 'Samsung Galaxy S8', 18490000, 'Màn hình: 5.8\", Quad HD (2K)\nHĐH: Android 7.0\nCPU: Exynos 8895 8 nhân\nRAM: 4 GB, ROM: 64 GB\nCamera: 12 MP, Selfie: 8 MP\nPIN: 3000 mAh', 'https://cdn4.tgdd.vn/Products/Images/42/78479/samsung-galaxy-s8-4-300x300.jpg', 1),
(10, 'Sony Xperia XZ Premium', 17990000, 'Màn hình: 5.5\", 4K\nHĐH: Android 7.0\nCPU: Snapdragon 835 8 nhân\nRAM: 4 GB, ROM: 64 GB\nCamera: 19 MP, Selfie: 13 MP\nPIN: 3230 mAh', 'https://cdn4.tgdd.vn/Products/Images/42/92069/sony-xperia-xz-premium-12-300x300.jpg', 1),
(11, 'iPhone 7 128GB', 18990000, 'Màn hình: 4.7\", Retina HD\nHĐH: iOS 10\nCPU: Apple A10 Fusion 4 nhân\nRAM: 2 GB, ROM: 128 GB\nCamera: 12 MP, Selfie: 7 MP\nPIN: 1900 mAh, SIM: 1 SIM', 'https://cdn2.tgdd.vn/Products/Images/42/87837/Feature/iphone-7-128gb-600-277-1-400x400.png', 1),
(12, 'Sony Xperia XZ Premium Pink Gold', 16490000, 'Màn hình: 5.5\", Ultra HD (4K)\nHĐH: Android 7.1\nCPU: Qualcomm Snapdragon 835 8 nhân 64-bit\nRAM: 4 GB, ROM: 64 GB\nCamera: 19 MP, Selfie: 13 MP\nPIN: 3230 mAh', 'https://cdn1.tgdd.vn/Products/Images/42/113126/sony-xperia-xz-premium-pink-gold-300x300.jpg', 1),
(13, 'HTC U11', 16990000, 'Màn hình: 5.5\", Quad HD\nHĐH: Android 7.1\nCPU: Snapdragon 835, 8 nhân\nRAM: 6GB; ROM: 128GB\nCamera: 12MP, Selfie: 16MP\nPIN: 3000 mAh, SIM: 2 SIM', 'https://cdn1.tgdd.vn/Products/Images/42/103241/Feature/htc-u11-ft-t11-400x400.jpg', 1),
(14, 'HTC U Ultra Sapphire', 16490000, 'Màn hình: 5.7\", Quad HD (2K)\nHĐH: Android 7.0\nCPU: Qualcomm Snapdragon 821 4 nhân\nRAM: 4 GB, ROM: 128 GB\nCamera: 12 MP, Selfie: 16 MP\nPIN: 3000 mAh', 'https://cdn1.tgdd.vn/Products/Images/42/98826/htc-u-ultra-sapphire-300-300x300.jpg', 1),
(15, 'iPhone 7 32GB', 15990000, 'Màn hình: 4.7\", Retina HD\nHĐH: iOS 10\nCPU: Apple A10 Fusion 4 nhân\nRAM: 2 GB, ROM: 32 GB\nCamera: 12 MP, Selfie: 7 MP\nPIN: 1960 mAh, SIM: 1 SIM', 'https://cdn.tgdd.vn/Products/Images/42/74110/iphone-7-9-300x300.jpg', 1),
(16, 'Sony Xperia XZ1', 15990000, 'Màn hình: 5.2\", Full HD\nHĐH: Android 8.0\nCPU: Qualcomm Snapdragon 835 8 nhân 64-bit\nRAM: 4 GB, ROM: 64 GB\nCamera: 19 MP, Selfie: 13 MP\nPIN: 2700 mAh', 'https://cdn.tgdd.vn/Products/Images/42/108680/Feature/sony-xperia-xz12-400x400.jpg', 1),
(17, 'iPhone 6s Plus 64GB', 15990000, 'Màn hình: 5.5\", Retina HD\nHĐH: iOS 10\nCPU: Apple A9 2 nhân 64-bit\nRAM: 2 GB, ROM: 64 GB\nCamera: 12 MP, Selfie: 5 MP\nPIN: 2750 mAh', 'https://cdn4.tgdd.vn/Products/Images/42/73704/iphone-6s-plus-64gb-6-300x300.jpg', 1),
(18, 'HTC U Ultra', 14990000, 'Màn hình: Chình: 5.7\", phù£: 2.05\", Quad HD\nHĐH: Android 7.0\nCPU: Qualcomm Snapdragon 821 4 nhân\nRAM: 4 GB, ROM: 64 GB\nCamera: 12 MP, Selfie: 16 MP\nPIN: 3000 mAh, SIM: 2 SIM', 'https://cdn2.tgdd.vn/Products/Images/42/90772/Feature/htc-u-ultra-600-277-5-400x400.png', 1),
(19, 'iPhone 6s Plus 32GB', 14490000, 'Màn hình: 5.5\", Retina HD\nHĐH: iOS 10\nCPU: Apple A9 2 nhân 64-bit\nRAM: 2 GB, ROM: 32 GB\nCamera: 12 MP, Selfie: 5 MP\nPIN: 2750 mAh', 'https://cdn1.tgdd.vn/Products/Images/42/87846/Feature/iphone-6s-plus-32gb-600-277-4-400x400.png', 1),
(20, 'Nokia 8', 12990000, 'Màn hình: 5.3\", Quad HD (2K)\nHĐH: Android 7.1\nCPU: Qualcomm Snapdragon 835 8 nhân 64-bit\nRAM: 4 GB, ROM: 64 GB\nCamera: 2 camera 13 MP, Selfie: 13 MP\nPIN: 3090 mAh', 'https://cdn4.tgdd.vn/Products/Images/42/91059/nokia-8-1-300x300.jpg', 1),
(21, 'Samsung Galaxy Note FE', 13990000, 'Màn hình: 5.7\", Quad HD (2K)\nHĐH: Android 7.0\nCPU: Exynos 8890 8 nhân 64-bit\nRAM: 4 GB, ROM: 64 GB\nCamera: 12 MP, Selfie: 5 MP\nPIN: 3200 mAh', 'https://cdn4.tgdd.vn/Products/Images/42/103244/Feature/samsung-galaxy-note-fe-1-recovered-400x400.jpg', 1),
(22, 'Sony Xperia XZs', 12990000, 'Màn hình: 5.2\", Full HD\nHĐH: Android 7.0\nCPU: Snapdragon 820 4 nhân\nRAM: 4 GB, ROM: 64 GB\nCamera: 19 MP, Selfie: 13 MP\nPIN: 2900 mAh', 'https://cdn2.tgdd.vn/Products/Images/42/92082/sony-xperia-xzs-16-300x300.jpg', 1),
(23, 'Motorola Moto Z2 Play', 10990000, 'Màn hình: 5.5\", Full HD\nHĐH: Android 7.1\nCPU: Snapdragon 626 8 nhân 64-bit\nRAM: 4 GB, ROM: 64 GB\nCamera: 12 MP, Selfie: 5 MP\nPIN: 3000 mAh', 'https://cdn4.tgdd.vn/Products/Images/42/109414/motorola-moto-z2-play-300-300x300.jpg', 1),
(24, 'OPPO F3 Plus', 10690000, 'Màn hình: 6\", Full HD\nHĐH: Android 6.0 (Marshmallow)\nCPU: Snapdragon 653\nRAM: 4 GB, ROM: 64 GB\nCamera: 16 MP, Selfie: 16 MP vĂ  8 MP\nPIN: 4000 mAh', 'https://cdn4.tgdd.vn/Products/Images/42/92569/oppo-f3-plus-vang-dong-1-300x300.png', 1),
(25, 'Samsung Galaxy A7 (2017)', 9990000, 'Màn hình: 5.7\", Full HD\nHĐH: Android 6.0 (Marshmallow)\nCPU: Exynos 7880\nRAM: 3 GB, ROM: 32 GB\nCamera: 16 MP, Selfie: 16 MP\nPIN: 3600 mAh, SIM: 2 SIM', 'https://cdn2.tgdd.vn/Products/Images/42/88537/samsung-galaxy-a7-2017-11-300x300.jpg', 1),
(26, 'Sony Xperia XZ Dual', 9990000, 'Màn hình: 5.2\", Full HD\nHĐH: Android 7.0\nCPU: Snapdragon 820 4 nhân\nRAM: 3 GB, ROM: 64 GB\nCamera: 23 MP, Selfie: 13 MP\nPIN: 2900 mAh', 'https://cdn.tgdd.vn/Products/Images/42/85235/sony-xperia-xz-10-300x300.jpg', 1),
(27, 'Motorola Moto X4', 9990000, 'Màn hình: 5.2\", Full HD\nHĐH: Android 7.1\nCPU: Qualcomm Snapdragon 630 8 nhân\nRAM: 4 GB, ROM: 64 GB\nCamera: 12 MP vĂ  8 MP (2 camera), Selfie: 16 MP\nPIN: 3000 mAh', 'https://cdn2.tgdd.vn/Products/Images/42/113327/motorola-moto-x4-h1-300x300.jpg', 1),
(28, 'Bphone 2017', 9790000, 'Màn hình: 5.5\", Full HD\nHĐH: B-OS (Android 7.1)\nCPU: Snapdragon 625 8 nhân 64-bit\nRAM: 3 GB, ROM: 32 GB\nCamera: 16 MP, Selfie: 8 MP\nPIN: 3000 mAh', 'https://cdn1.tgdd.vn/Products/Images/42/75001/bkav-bphone-2-thumb-300x300.jpg', 1),
(29, 'Samsung Galaxy A5 (2017)', 7990000, 'Màn hình: 5.2\", Full HD\nHĐH: Android 6.0 (Marshmallow)\nCPU: Exynos 7880\nRAM: 3 GB, ROM: 32 GB\nCamera: 16 MP, Selfie: 16 MP\nPIN: 3000 mAh, SIM: 2 SIM', 'https://cdn3.tgdd.vn/Products/Images/42/88268/samsung-galaxy-a5-2017-300x300.jpg', 1),
(30, 'iPhone 6 32GB', 8990000, 'Màn hình: 4.7\", HD\nHĐH: iOS 10\nCPU: Apple A8 2 nhân\nRAM: 1 GB, ROM: 32 GB\nCamera: 8 MP, Selfie: 1.2 MP\nPIN: 1810 mAh', 'https://cdn2.tgdd.vn/Products/Images/42/92962/Feature/iphone-6-32gb-gold-600-277-2-400x400.jpg', 1),
(31, 'Sony Xperia X', 7490000, 'Màn hình: 5\", Full HD\nHĐH: Android 6.0 (Marshmallow)\nCPU: Snapdragon 650 6 nhân\nRAM: 3 GB, ROM: 64 GB\nCamera: 23 MP, Selfie: 13 MP\nPIN: 2620 mAh, SIM: 2 SIM', 'https://cdn4.tgdd.vn/Products/Images/42/75244/sony-xperia-x-300x300.jpg', 1),
(32, 'HTC U Play', 8990000, 'Màn hình: 5.2\", Full HD\nHĐH: Android 6.0 (Marshmallow)\nCPU: MTK Helio P10 8 nhân 64-bit\nRAM: 3GB, ROM: 32GB\nCamera: 16 MP, Selfie: 16 MP\nPIN: 2500 mAh, SIM: 2 SIM', 'https://cdn.tgdd.vn/Products/Images/42/91060/Feature/htc-u-play-600-277-2-400x400.png', 1),
(33, 'OPPO F3', 6990000, 'Màn hình: 5.5\", Full HD\nHĐH: Android 6.0 (Marshmallow)\nCPU: Mediatek MT6750T 8 nhân\nRAM: 4 GB, ROM: 64 GB\nCamera: 13 MP, Selfie: 16 MP vĂ  8 MP\nPIN: 3200 mAh', 'https://cdn1.tgdd.vn/Products/Images/42/92541/oppo-f3-15-300x300.jpg', 1),
(34, 'Samsung Galaxy J7+', 8690000, 'Màn hình: 5.5\", Full HD\nHĐH: Android 7.0\nCPU: MediaTek Helio P25 8 nhân\nRAM: 4 GB, ROM: 32 GB\nCamera: 13 MP vĂ  5 MP (2 camera), Selfie: 16 MP\nPIN: 3000 mAh', 'https://cdn.tgdd.vn/Products/Images/42/112970/Feature/samsung-galaxy-j7-plus-3-400x400.jpg', 1),
(35, 'Sony Xperia XA1 Ultra', 8490000, 'Màn hình: 6\", Full HD\nHĐH: Android 7.0\nCPU: Helio P20, 8 nhân\nRAM: 4 GB, ROM: 64 GB\nCamera: 23 MP, Selfie: 16 MP\nPIN: 2700 mAh, SIM: 2 SIM', 'https://cdn4.tgdd.vn/Products/Images/42/92074/Feature/sony-xa1-ultra-1-400x400.jpg', 1),
(36, 'Vivo V7+', 7990000, 'Màn hình: 5.99\", HD\nHĐH: Android 7.1\nCPU: Qualcomm Snapdragon 450\nRAM: 4 GB, ROM: 64 GB\nCamera: 16 MP, Selfie: 24 MP\nPIN: 3225 mAh', 'https://cdn.tgdd.vn/Products/Images/42/112835/Feature/vivo-v7-plus-ft-3-400x400.jpg', 1),
(37, 'Sony Xperia XA1 Plus', 7190000, 'Màn hình: 5.5\", Full HD\nHĐH: Android 7.0\nCPU: Mediatek Helio P20\nRAM: 4 GB, ROM: 32 GB\nCamera: 23 MP, Selfie: 8 MP\nPIN: 3430 mAh', 'https://cdn3.tgdd.vn/Products/Images/42/112833/Feature/sony-xepria-xa1-plus-5-1-1-400x400.jpg', 1),
(38, 'Oppo F5', 6990000, 'Màn hình: 6\", FullHD+\nHĐH: ColorOS 3.2 (Android 7.1)\nCPU: Helio P23 8 nhân\nRAM: 4 GB, ROM: 32 GB\nCamera: 16 MP, Selfie: 20 MP\nPIN: 3200 mAh', 'https://cdn.tgdd.vn/Products/Images/42/131915/Feature/oppo-f5-3-400x400.jpg', 1),
(39, 'Samsung Galaxy J7 Pro', 6990000, 'Màn hình: 5.5\", Full HD\nHĐH: Android 7.0\nCPU: Exynos, 8 nhân\nRAM: 3 GB, ROM: 32 GB\nCamera: 13 MP, Selfie: 13 MP\nPIN: 3600mAh', 'https://cdn4.tgdd.vn/Products/Images/42/103404/Feature/samsung-galaxy-j7-pro-1-400x400.jpg', 1),
(40, 'Motorola Moto G5S Plus', 6990000, 'Màn hình: 5.5\", Full HD\nHĐH: Android 7.1\nCPU: Snapdragon 625 8 nhân 64-bit\nRAM: 4 GB, ROM: 32 GB\nCamera: 2 camera 13 MP, Selfie: 8 MP\nPIN: 3000 mAh', 'https://cdn1.tgdd.vn/Products/Images/42/111446/motorola-moto-g5s-plus-300x300.jpg', 1),
(41, 'Sony Xperia XA Ultra', 6291000, 'Màn hình: 6\", Full HD\nHĐH: Android 6.0 (Marshmallow)\nCPU: Helio P10 8 nhân\nRAM: 3 GB, ROM: 16 GB\nCamera: 21.5 MP, Selfie: 16 MP\nPIN: 2700 mAh, SIM: 2 SIM', 'https://cdn1.tgdd.vn/Products/Images/42/77601/sony-xperia-xa-ultra-300-300x300.jpg', 1),
(42, 'Vivo V7', 6990000, 'Màn hình: 5.7\", HD+\nHĐH: Android 7.1 \nCPU:  Snapdragon 450\nRAM: 4 GB, ROM: 32 GB\nCamera: 16 MP, Selfie: 24 MP\nPIN: 3000 mAh', 'https://cdn4.tgdd.vn/Products/Images/42/138399/vivo-v7-2-300x300.jpg', 1),
(43, 'Huawei Nova 2i', 5990000, 'Màn hình: 5.9\", FullHD+\nHĐH: Android 7.0\nCPU: HiSilicon Kirin 659 8 nhân\nRAM: 4 GB, ROM: 64 GB\nCamera: 16 MP vĂ  2 MP ,Selfie: 13 MP vĂ  2 MP\nPIN: 3340 mAh', 'https://cdn3.tgdd.vn/Products/Images/42/118143/Feature/huawei-nova-2i-1-400x400.jpg', 1),
(44, 'Vivo V5s', 6690000, 'Màn hình: 5.5\", HD\nHĐH: Funtouch OS 3.0 (ná»n táº£ng Android 6.0)\nCPU: Mediatek MT6750 8 nhân\nRAM: 4 GB, ROM: 64 GB\nCamera: 13 MP, Selfie: 20 MP\nPIN: 3000 mAh', 'https://cdn1.tgdd.vn/Products/Images/42/108821/vivo-1713-v5s-300-300x300.jpg', 1),
(45, 'Xiaomi Mi A1', 5990000, 'Màn hình: 5.5\", Full HD\nHĐH: Android 7.1\nCPU: Qualcomm Snapdragon 625 8 nhân 64-bit\nRAM: 4 GB, ROM: 64 GB\nCamera: 2 camera 12 MP, Selfie: 5 MP\nPIN: 3080 mAh', 'https://cdn2.tgdd.vn/Products/Images/42/113572/xiaomi-mi-a12-300x300.jpg', 1),
(46, 'iPhone 5S 16GB', 5490000, 'Màn hình: 4\", Retina\nHĐH: iOS 10\nCPU: Apple A7 2 nhân\nRAM: 1 GB, ROM: 16 GB\nCamera: 8 MP, Selfie: 1.2 MP\nPIN: 1560 mAh, SIM: 1 Sim', 'https://cdn1.tgdd.vn/Products/Images/42/60546/Feature/iphone-5s-16gb-3-2-400x400.jpg', 1),
(47, 'HTC Desire 10 Pro', 4990000, 'Màn hình: 5.5\", Full HD\nHĐH: Android 6.0 (Marshmallow)\nCPU: MTK Helio P10 8 nhân\nRAM: 4 GB, ROM: 64 GB\nCamera: 20 MP, Selfie: 13 MP\nPIN: 3000 mAh, SIM: 2 SIM', 'https://cdn1.tgdd.vn/Products/Images/42/84801/htc-desire-10-pro-300-300x300.jpg', 1),
(48, 'HUAWEI GR5 2017 PRO', 5391000, 'Màn hình: 5.5\", Full HD\nHĐH: Android 6.0 (Marshmallow)\nCPU: HiSilicon Kirin 655 8 nhân\nRAM: 4GB, ROM: 64GB\nCamera kĂ©p: 12+2 MP, Selfie: 8MP\nPIN: 3340 mAh, SIM: 2 SIM', 'https://cdn3.tgdd.vn/Products/Images/42/92073/huawei-gr5-2017-pro-300-300x300.jpg', 1),
(49, 'Vivo Y69', 5990000, 'Màn hình: 5.5\", HD\nHĐH: Android 7.0\nCPU: Mediatek MT6750 8 nhân\nRAM: 3 GB, ROM: 32 GB\nCamera: 13 MP, Selfie: 16 MP\nPIN: 3000 mAh', 'https://cdn3.tgdd.vn/Products/Images/42/112973/vivo-y69-300-300x300.jpg', 1),
(50, 'HTC 10 evo', 5990000, 'Màn hình: 5.5\", QHD\nHĐH: Android 7.0\nCPU: Snapdragon 810 8 nhân\nRAM: 3 GB, ROM: 32GB\nCamera: 16 MP, Selfie: 8 MP\nPIN: 3200mAh, SIM: 1 SIM', 'https://cdn2.tgdd.vn/Products/Images/42/88632/Feature/htc-10-evo-ft-t11-400x400.jpg', 1),
(51, 'Sony Xperia XA1', 5790000, 'Màn hình: 5.0\", HD\nHĐH: Android 7.0\nCPU: Helio P20, 8 nhân\nRAM: 3GB; ROM: 32GB\nCamera: 23MP, Selfie: 8MP\nPIN: 2300 mAh, SIM: 2 SIM', 'https://cdn1.tgdd.vn/Products/Images/42/92081/sony-xperia-xa1-3001copy-300x300.jpg', 1),
(52, 'Nokia 6', 5590000, 'Màn hình: 5.5\", Full HD\nHĐH: Android 7.0\nCPU: Qualcomm Snapdragon 430 8 nhân\nRAM: 3 GB, ROM: 32 GB\nCamera: 16 MP, Selfie: 8 MP\nPIN: 3000 mAh', 'https://cdn1.tgdd.vn/Products/Images/42/90836/nokia-6-15-300x300.jpg', 1),
(53, 'OPPO F3 Lite (A57)', 5490000, 'Màn hình: 5.2\", HD\nHĐH: Android 6.0 (Marshmallow)\nCPU: Snapdragon 435 8 nhân\nRAM: 3 GB, ROM: 32 GB\nCamera: 13 MP, Selfie: 16 MP\nPIN: 2900 mAh, SIM: 2 SIM', 'https://cdn2.tgdd.vn/Products/Images/42/89422/Feature/oppo-a57--f3-lite--oppo-600-277-1-400x400.jpg', 1),
(54, 'Asus Zenfone 4 Max Pro ZC554KL', 4990000, 'Màn hình: 5.5\", HD\nHĐH: Android 7.0\nCPU: Qualcomm Snapdragon 430 8 nhân 64 bit\nRAM: 3 GB, ROM: 32 GB\nCamera: 16 MP vĂ  5 MP (2 camera), Selfie: 16 MP\nPIN: 5000 mAh', 'https://cdn2.tgdd.vn/Products/Images/42/112432/Feature/asus-zenfone-4-max-pro-zc554kl-1-1-1-400x400.jpg', 1),
(55, 'Samsung Galaxy J7 Prime', 5490000, 'Màn hình: 5.5\", Full HD\nHĐH: Android 6.0 (Marshmallow)\nCPU: Exynos 7870 8 nhân\nRAM: 3 GB, ROM: 32 GB\nCamera: 13 MP, Selfie: 8 MP\nPIN: 3300 mAh, SIM: 2 SIM', 'https://cdn3.tgdd.vn/Products/Images/42/84798/samsung-galaxy-j7-prime-h1-300x300.jpg', 1),
(56, 'Huawei Y7 Prime', 4990000, 'Màn hình: 5.5\", HD\nHĐH: Android 7.0\nCPU: Snapdragon 435 8 nhân\nRAM: 3 GB, ROM: 32 GB\nCamera: 12 MP, Selfie: 8 MP\nPIN: 4000 mAh, SIM: 2 SIM', 'https://cdn3.tgdd.vn/Products/Images/42/105928/huawei-y7-prime-300x300.jpg', 1),
(57, 'OPPO A71', 4690000, 'Màn hình: 5.2\", HD\nHĐH: Android 7.1\nCPU: Mediatek MT6750 8 nhân\nRAM: 3 GB, ROM: 16 GB\nCamera: 13 MP, Selfie: 5 MP\nPIN: 3000 mAh', 'https://cdn4.tgdd.vn/Products/Images/42/113259/Feature/oppo-a71-600-277-1-400x400.jpg', 1),
(58, 'Motorola Moto M', 4990000, 'Màn hình: 5.5\", Full HD\nHĐH: Android 6.0 (Marshmallow)\nCPU: Helio P15 8 nhân\nRAM: 4 GB, ROM: 32GB\nCamera: 16 MP, Selfie: 8 MP\nPIN: 3050 mAh', 'https://cdn3.tgdd.vn/Products/Images/42/88538/motorola-moto-m-1-300x300.jpg', 1),
(59, 'Samsung Galaxy J3 Pro', 4490000, 'Màn hình: 5\", HD\nHĐH: Android 7.0\nCPU: Exynos 7570 4 nhân 64-bit\nRAM: 2 GB, ROM: 16 GB\nCamera: 13 MP, Selfie: 5 MP\nPIN: 2400 mAh', 'https://cdn4.tgdd.vn/Products/Images/42/77849/Feature/samsung-galaxy-j3-pro-2017-x1-400x400.png', 1),
(60, 'Xiaomi Redmi Note 4', 4490000, 'Màn hình: 5.5\", Full HD\nHĐH: Android 6.0 (Marshmallow)\nCPU: Snapdragon 625 8 nhân\nRAM: 3 GB, ROM: 32 GB\nCamera: 13 MP, Selfie: 5 MP\nPIN: 4100 mAh', 'https://cdn.tgdd.vn/Products/Images/42/84905/Feature/xiaomi-redmi-note-4-600-277-400x400.jpg', 1),
(61, 'Sony Xperia L1', 4490000, 'Màn hình: 5.5\", HD\nHĐH: Android 7.0\nCPU: MT6737T, 4 nhân\nRAM: 2 GB, ROM: 16 GB\nCamera: 13 MP, Selfie: 5 MP\nPIN: 2620 mAh', 'https://cdn3.tgdd.vn/Products/Images/42/106538/sony-xperia-l1-300-1-300x300.jpg', 1),
(62, 'Sony Xperia L1 (Trắng)', 4490000, 'Màn hình: 5.5\", HD\nHĐH: Android 7.0\nCPU: MT6737T, 4 nhân\nRAM: 2 GB, ROM: 16 GB\nCamera: 13 MP, Selfie: 5 MP\nPIN: 2620 mAh', 'https://cdn1.tgdd.vn/Products/Images/42/133496/Feature/sony-xperia-l1-trang-2-400x400.jpg', 1),
(63, 'Motorola Moto E4 Plus', 4490000, 'Màn hình: 5.5\", HD\nHĐH: Android 7.1\nCPU: MT6737 4 nhân\nRAM: 3 GB, ROM: 32 GB\nCamera: 13 MP, Selfie: 5 MP\nPIN: 5000 mAh', 'https://cdn2.tgdd.vn/Products/Images/42/106282/motorola-moto-e4-plus-6-300x300.jpg', 1),
(64, 'HUAWEI GR5 2017', 4490000, 'Màn hình: 5.5\", Full HD\nHĐH: Android 6.0 \nCPU: Kirin 655 8 nhân\nRAM: 3GB, ROM: 32GB\nCamera kĂ©p: 12+2 MP, Selfie: 8MP\nPIN: 3340 mAh, SIM: 2 SIM', 'https://cdn1.tgdd.vn/Products/Images/42/89161/Feature/huawei-gr5-2017-600-277-7-400x400.png', 1),
(65, 'HTC One ME', 4490000, 'Màn hình: 5.2\", Quad HD\nHĐH: Android 5.0 (Lollipop)\nCPU: Helio X10 8 nhân\nRAM: 3 GB, ROM: 32 GB\nCamera: 20 MP, Selfie: 4 Ultra pixel\nPIN: 2840 mAh, SIM: 2 SIM', 'https://cdn3.tgdd.vn/Products/Images/42/72173/htc-one-me9-1-300x300.jpg', 1),
(66, 'Lenovo K6 Power', 4490000, 'Màn hình: 5\", FHD\nHĐH: Android 6.0\nCPU: Snapdragon 430 8 nhân\nRAM: 3 GB, ROM: 32 GB\nCamera: 13 MP, Selfie: 8 MP\nPIN: 4000 mAh, SIM: 2 SIM', 'https://cdn.tgdd.vn/Products/Images/42/91780/lenovo-vibe-k6-power-300x300.jpg', 1),
(67, 'Xiaomi Redmi Note 5A Prime', 4290000, 'Màn hình: 5.5\", HD IPS\nHĐH: Android 7.0\nCPU: Snapdragon 435 8 nhân\nRAM: 3 GB, ROM: 32 GB\nCamera: 13 MP, Selfie: 16 MP\nPIN: 3080 mAh', 'https://cdn.tgdd.vn/Products/Images/42/133150/xiaomi-redmi-note-5a-prime-1-300x300.jpg', 1),
(68, 'Nokia 5', 4260000, 'Màn hình: 5.2\", HD\nHĐH: Android 7.1\nCPU: Qualcomm Snapdragon 430 8 nhân 64 bit\nRAM: 2 GB, ROM: 16 GB\nCamera: 13 MP, Selfie: 8 MP\nPIN: 3000 mAh, SIM: 2 SIM', 'https://cdn4.tgdd.vn/Products/Images/42/91849/Feature/nokia-5-400x400.jpg', 1),
(69, 'Vivo Y55s', 3990000, 'Màn hình: 5.2\", HD\nHĐH: Android 6.0\nCPU: Snapdragon 425 4 nhân\nRAM: 2 GB, ROM: 16 GB\nCamera: 13 MP, Selfie: 5 MP\nPIN: 2730mAh, SIM: 2 SIM', 'https://cdn.tgdd.vn/Products/Images/42/108820/vivo-y55s-300-300x300.jpg', 1),
(70, 'HTC One A9s', 3990000, 'Màn hình: 5\", HD\nHĐH: Android 6.0 (Marshmallow)\nCPU: MTK Helio P10 8 nhân\nRAM: 2GB, ROM: 16GB\nCamera: 13 MP, Selfie: 5 MP\nPIN: 2300 mAh, SIM: 1 SIM', 'https://cdn4.tgdd.vn/Products/Images/42/85019/htc-one-a9s-1-300x300.jpg', 1),
(71, 'Mobiistar Zumbo S2 Dual', 3790000, 'Màn hình: 5.5\", Full HD\nHĐH: Android 7.0\nCPU: MT6737T, 4 nhân\nRAM: 3 GB, ROM: 32 GB\nCamera: 13 MP, Selfie: 13 MP vĂ  8 MP\nPIN: 3000 mAh', 'https://cdn.tgdd.vn/Products/Images/42/113175/Feature/mobiistar-zumbo-s2-dual-ft222-400x400.jpg', 1),
(72, 'Xiaomi Redmi 4X', 3690000, 'Màn hình: 5\", HD\nHĐH: Android 6.0 (Marshmallow)\nCPU: Snapdragon 435 8 nhân\nRAM: 3 GB, ROM: 32 GB\nCamera: 13 MP, Selfie: 5 MP\nPIN: 4100 mAh', 'https://cdn.tgdd.vn/Products/Images/42/99145/xiaomi-redmi-4x-300-300x300.jpg', 1),
(73, 'Mobiistar Zumbo S2', 3490000, 'Màn hình: 5.5\", FHD\nHĐH: Android 7.0 (Nougat)\nCPU: MTK MT6737T 4 nhân\nRAM: 3 GB, ROM: 16 GB\nCamera: 13 MP, Selfie: 13 MP\nPIN: 3000 mAh, SIM: 2 SIM', 'https://cdn1.tgdd.vn/Products/Images/42/103401/mobiistar-lai-zumbo-s2-300-300x300.jpg', 1),
(74, 'Vivo Y53', 3390000, 'Màn hình: 5\", qHD\nHĐH: Android 6.0\nCPU: MSM8917 4 nhân\nRAM: 2 GB, ROM: 16 GB\nCamera: 8 MP, Selfie: 5 MP\nPIN: 2500mAh, SIM: 2 SIM', 'https://cdn4.tgdd.vn/Products/Images/42/108819/vivo-1606-y53-300-300x300.jpg', 1),
(75, 'OPPO A37 (A37fw)', 3290000, 'Màn hình: 5\", HD\nHĐH: Android 5.1 (Lollipop)\nCPU: Snapdragon 410 4 nhân\nRAM: 2 GB, ROM: 16 GB\nCamera: 8 MP, Selfie: 5 MP\nPIN: 2630 mAh, SIM: 2 SIM', 'https://cdn1.tgdd.vn/Products/Images/42/103846/oppo-a37-a37fw-pp-300x300.jpg', 1),
(76, 'Nokia 3', 3000000, 'Màn hình: 5\", HD\nHĐH: Android 7.0\nCPU: MT6737 4 nhân\nRAM: 2 GB, ROM: 16 GB\nCamera: 8 MP, Selfie: 8 MP\nPIN: 2630 mAh, SIM: 2 SIM', 'https://cdn3.tgdd.vn/Products/Images/42/91853/Feature/nokia-3-600-277-400x400.jpg', 1),
(77, 'Xiaomi Redmi Note 5A (Redmi Y1 Lite)', 3290000, 'Màn hình: 5.5\", HD\nHĐH: Android 7.0\nCPU: Qualcomm Snapdragon 425 4 nhân 64-bit\nRAM: 2 GB, ROM: 16 GB\nCamera: 13 MP, Selfie: 5 MP\nPIN: 3080 mAh', 'https://cdn2.tgdd.vn/Products/Images/42/112972/xiaomi-redmi-note-5a-300x300.jpg', 1),
(78, 'Samsung Galaxy J3 LTE', 2990000, 'Màn hình: 5\", HD\nHĐH: Android 5.1 (Lollipop)\nCPU: Spreadtrum SC7731 4 nhân\nRAM: 1.5 GB, ROM: 8 GB\nCamera: 8 MP, Selfie: 5 MP\nPIN: 2600 mAh, SIM: 2 SIM', 'https://cdn2.tgdd.vn/Products/Images/42/84667/samsung-galaxy-j3-lte-300x300.jpg', 1),
(79, 'Motorola Moto C Plus', 2990000, 'Màn hình: 5\", HD\nHĐH: Android 7.0 (Nougat)\nCPU: MT6737 4 nhân\nRAM: 2 GB, ROM: 16 GB\nCamera: 8 MP, Selfie: 2 MP\nPIN: 4000mAh, SIM: 2 SIM', 'https://cdn.tgdd.vn/Products/Images/42/109200/Feature/motorola-moto-c-plus-23-1-2-400x400.jpg', 1),
(80, 'Asus Zenfone Live ZB501KL', 2990000, 'Màn hình: 5\", HD\nHĐH: Android 6.0\nCPU: Qualcomm Snapdragon 400 4 nhân\nRAM: 2 GB, ROM: 16 GB\nCamera: 13 MP, Selfie: 5 MP\nPIN: 2650 mAh, SIM: 2 SIM', 'https://cdn2.tgdd.vn/Products/Images/42/100492/asus-zenfone-live-zb501kl-300-1-300x300.jpg', 1),
(81, 'Mobiistar Prime X1', 2990000, 'Màn hình: 5.5\", HD\nHĐH: Android 6.0\nCPU: MTK MT6737, 4 nhân\nRAM: 3 GB, ROM: 16 GB\nCamera: 13 MP, Selfie: 8 MP\nPIN: 3000 mAh, 2 SIM', 'https://cdn1.tgdd.vn/Products/Images/42/88851/mobiistar-prime-x1-1-300x300.jpg', 1),
(82, 'Asus Zenfone Go TV ZB551KL', 2691000, 'Màn hình: 5.5\", HD\nHĐH: Android 5.1 (Lollipop)\nCPU: Qualcomm Snapdragon 400 4 nhân\nRAM: 2 GB, ROM: 32 GB\nCamera: 13 MP, Selfie: 5 MP\nPIN: 3010 mAh, SIM: 2 SIM', 'https://cdn.tgdd.vn/Products/Images/42/89785/asus-zenfone-go-tv-zb551kl-300x300.jpg', 1),
(83, 'Huawei Y5 2017', 2990000, 'Màn hình: 5\", HD\nHĐH: Android 6.0\nCPU: MTK MT6737T 4 nhân\nRAM: 2 GB, ROM: 16 GB\nCamera: 8 MP, Selfie: 5 MP\nPIN: 3000 mAh, SIM: 2 SIM', 'https://cdn2.tgdd.vn/Products/Images/42/103242/huawei-y5-2017-300x300.jpg', 1),
(84, 'Philips V787', 2990000, 'Màn hình: 5\", FHD\nHĐH: Android 5.1 (Lollipop)\nCPU: MTK6753 8 nhân\nRAM: 2 GB, ROM: 16 GB\nCamera: 13 MP, Selfie: 5 MP\nPIN: 5000 mAh, SIM: 2 SIM', 'https://cdn2.tgdd.vn/Products/Images/42/92017/Feature/philips-v787-600-277-400x400.jpg', 1),
(85, 'Mobiistar Zumbo J2', 2790000, 'Màn hình: 5.2\", HD\nHĐH: Android 7.0 (Nougat)\nCPU: MTK MT6737 4 nhân\nRAM: 2 GB, ROM: 16 GB\nCamera: 13 MP, Selfie: 13 MP\nPIN: 3000 mAh, SIM: 2 SIM', 'https://cdn4.tgdd.vn/Products/Images/42/103399/mobiistar-zumbo-j2-300-a-300x300.jpg', 1),
(86, 'Samsung Galaxy J2 Prime', 2690000, 'Màn hình: 5\", qHD\nHĐH: Android 6.0 (Marshmallow)\nCPU: MT6737 4 nhân\nRAM: 1.5 GB, ROM: 8 GB\nCamera: 8 MP, Selfie: 5 MP\nPIN: 2600 mAh, SIM: 2 SIM', 'https://cdn3.tgdd.vn/Products/Images/42/88573/Feature/samsung-galaxy-j2-prime-600-277-400x400.jpg', 1),
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
(99, 'Mobell Nova i7', 1791000, 'Màn hình: 5\", HD\nHĐH: Android 6.0 (Marshmallow)\nCPU: MT6580 4 nhân\nRAM: 2 GB, ROM: 16 GB\nCamera: 8 MP, Selfie: 5 MP\nPIN: 2300 mAh, SIM: 2 SIM', 'https://cdn4.tgdd.vn/Products/Images/42/87359/mobell-nova-i7-12-300x300.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
