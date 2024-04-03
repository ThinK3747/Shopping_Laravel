-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th4 03, 2024 lúc 12:36 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shopping`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cache`
--

CREATE TABLE `cache` (
  `key` varchar(191) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(191) NOT NULL,
  `owner` varchar(191) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `slug` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `parent_id`, `slug`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Nam', 0, 'nam', '2024-04-01 03:19:48', '2024-04-01 03:19:48', NULL),
(2, 'Nữ', 0, 'nu', '2024-04-01 03:19:59', '2024-04-01 03:19:59', NULL),
(3, 'Trẻ em', 0, 'tre-em', '2024-04-01 03:20:05', '2024-04-01 03:20:05', NULL),
(4, 'Áo Polo Nam', 1, 'ao-polo-nam', '2024-04-01 03:20:20', '2024-04-01 03:20:20', NULL),
(5, 'Áo Polo Nữ', 2, 'ao-polo-nu', '2024-04-01 03:20:34', '2024-04-01 03:20:34', NULL),
(6, 'Áo khoác trẻ em', 3, 'ao-khoac-tre-em', '2024-04-01 03:20:54', '2024-04-01 03:20:54', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `img_products`
--

CREATE TABLE `img_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `img_products`
--

INSERT INTO `img_products` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'apm6171-nav-5a.jpg', '2024-04-01 03:24:28', '2024-04-01 03:24:28'),
(2, 1, 'apm6171-nav-5b.jpg', '2024-04-01 03:24:28', '2024-04-01 03:24:28'),
(3, 1, 'apm6171-nav-5c.jpg', '2024-04-01 03:24:28', '2024-04-01 03:24:28'),
(4, 2, 'ao-polo-nu-apn7096-vag-1a.jpg', '2024-04-01 03:25:34', '2024-04-01 03:25:34'),
(5, 2, 'ao-polo-nu-apn7096-vag-1b.jpg', '2024-04-01 03:25:34', '2024-04-01 03:25:34'),
(6, 2, 'ao-polo-nu-apn7096-vag-1c.jpg', '2024-04-01 03:25:34', '2024-04-01 03:25:34');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(191) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(27, '0001_01_01_000000_create_users_table', 1),
(28, '0001_01_01_000001_create_cache_table', 1),
(29, '0001_01_01_000002_create_jobs_table', 1),
(30, '2024_03_15_034619_create_categories_table', 1),
(31, '2024_03_20_150206_add_column_deleted_at_table_categories', 1),
(32, '2024_03_22_082119_create_products_table', 1),
(33, '2024_03_22_083324_create_img_products_table', 1),
(34, '2024_03_30_084247_add_column_stock_on_products', 1),
(35, '2024_04_01_100411_add_column_role_on_users', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` double NOT NULL,
  `sale_price` double NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `stock` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `sale_price`, `image`, `category_id`, `slug`, `description`, `created_at`, `updated_at`, `stock`) VALUES
(1, 'Áo Polo Nam Cafe Tổ Ong Phối 3 Màu', 300000, 150000, 'apm6171-nav-5.jpg', 4, 'ao - polo - nam - cafe - to - ong - phói - 3 - màu', '<p>&Aacute;o polo nam cafe dệt tổ ong phối 3 m&agrave;u độc đ&aacute;o&nbsp;</p>\r\n\r\n<p>Vải cafe thấm h&uacute;t mồ h&ocirc;i, kiểm so&aacute;t khử m&ugrave;i cơ thể tốt</p>\r\n\r\n<p>Th&agrave;nh phần:&nbsp;100% Polyester by S&#39;cafe</p>\r\n\r\n<p>C&oacute; khả năng chống tia UV đến 98%</p>\r\n\r\n<p>Kiểu d&aacute;ng năng động, trẻ trung&nbsp;</p>\r\n\r\n<p>Điểm nhấn l&agrave; phần phối&nbsp;cổ,&nbsp;ống tay v&agrave; đường kẻ chạy dọc vai</p>\r\n\r\n<p>Kết hợp c&ugrave;ng quần jeans, quần short, kaki,... để đi l&agrave;m, đi chơi</p>\r\n\r\n<p>YODY - Look good. Feel good</p>\r\n\r\n<p>Sản xuất tại Việt Nam</p>', '2024-04-01 03:24:28', '2024-04-01 03:24:28', NULL),
(2, 'Áo Polo Nữ Cafe Dệt Tổ Ong Nẹp Dài', 300000, 299000, 'ao-polo-nu-apn7096-vag-1.jpg', 5, 'ao - polo - nu - cafe - det - to - ong - nep - dai', '<p>Th&agrave;nh phần:&nbsp;100% Polyester by S&#39;cafe</p>\r\n\r\n<p>Chất liệu&nbsp;vải Cafe Tổ Ong cải tiến, th&acirc;n thiện m&ocirc;i trường</p>\r\n\r\n<p>Thấm h&uacute;t mồ h&ocirc;i, kiểm so&aacute;t khử m&ugrave;i cơ thể tốt</p>\r\n\r\n<p>C&oacute; khả năng chống tia UV đến 98%&nbsp;bảo vệ cơ thể</p>\r\n\r\n<p>Chất liệu vải bền bỉ&nbsp;thoải m&aacute;i giặt m&aacute;y m&agrave; kh&ocirc;ng lo bai d&atilde;o</p>\r\n\r\n<p>&Aacute;o c&oacute; đường may tỉ mỉ ch&uacute; trọng v&agrave;o sự chất lượng cao</p>\r\n\r\n<p>Thiết kế basic, kiểu d&aacute;ng năng động, trẻ trung</p>\r\n\r\n<p>Kết hợp c&ugrave;ng quần jeans, quần short, ch&acirc;n v&aacute;y,... để đi l&agrave;m, đi chơi</p>\r\n\r\n<p>Sản xuất tại Việt Nam</p>\r\n\r\n<p>YODY - Look good. Feel good.</p>', '2024-04-01 03:25:34', '2024-04-01 03:25:34', NULL),
(5, 'Áo Polo Nữ Cafe Phối Nẹp Siêu Nhẹ', 300000, 199000, 'ao-polo-nu-apn7096-vag-1.jpg', 5, 'ao - polo - nu - cafe - phoi - nep - sieu - nhe -', '<p>Test</p>', '2024-04-01 03:27:59', '2024-04-01 03:27:59', NULL),
(6, 'Áo Polo Nữ Airycool Thoáng Mát', 300000, 150000, 'ao-polo-nu-apn7096-vag-1.jpg', 5, 'ao - polo - nu - airycool - thoang - mat', '<p>Test 2</p>', '2024-04-01 03:31:20', '2024-04-01 03:31:20', NULL),
(7, 'Áo Polo Nam Airycool Giữ Form', 200000, 199000, 'apm6171-nav-5.jpg', 4, 'ao - polo - nam - airycool - giu - form', '<p>Test 3</p>', '2024-04-01 03:36:19', '2024-04-01 03:36:19', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('A5KVktKHifgqPDh90ntOy6BgE31A4i0AkKR707Xf', NULL, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoib3gyWG94WFdpSGhwb2VMWE5nRWsxMWdYNGdjRFR5TlE5VFZNaGZrMyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTIzOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvZGV0YWlsL2FvJTIwLSUyMHBvbG8lMjAtJTIwbmFtJTIwLSUyMGNhZmUlMjAtJTIwdG8lMjAtJTIwb25nJTIwLSUyMHBobyVDQyU4MWklMjAtJTIwMyUyMC0lMjBtYSVDQyU4MHUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjQ6ImNhcnQiO2E6Njp7czo5OiJwcm9kdWN0SWQiO2k6MTtzOjQ6Im5hbWUiO3M6NDI6IsOBbyBQb2xvIE5hbSBDYWZlIFThu5UgT25nIFBow7TMgWkgMyBNYcyAdSI7czo1OiJwcmljZSI7ZDoxNTAwMDA7czo1OiJpbWFnZSI7czoxNzoiYXBtNjE3MS1uYXYtNS5qcGciO3M6ODoicXVhbnRpdHkiO3M6MToiNCI7aToxO2E6NTp7czo5OiJwcm9kdWN0SWQiO2k6MTtzOjQ6Im5hbWUiO3M6NDI6IsOBbyBQb2xvIE5hbSBDYWZlIFThu5UgT25nIFBow7TMgWkgMyBNYcyAdSI7czo1OiJwcmljZSI7ZDoxNTAwMDA7czo1OiJpbWFnZSI7czoxNzoiYXBtNjE3MS1uYXYtNS5qcGciO3M6ODoicXVhbnRpdHkiO3M6MToiNCI7fX19', 1712133331),
('oq6wZbkjxZHLUnoFKoYodLJKK6SA4YdMBiQSJfPW', NULL, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiMnNZRmcyQzdVcG5sZEUwS3l5Q2Iwc0Nqa0JmenpqQkdTWHdLU0ZkQyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1712133427),
('PeQYY1PrFTpioyuBMAzvpmncdjQJjAnS9nZgTh9E', NULL, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoic3V3QkZwMFhhd21uMEo5UzFwYXc1NVptOTZDd1NjUk1uTG4xdjR5SyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wcm9kdWN0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo0OiJjYXJ0IjthOjQ6e2k6MTthOjU6e3M6OToicHJvZHVjdElkIjtpOjE7czo0OiJuYW1lIjtzOjQyOiLDgW8gUG9sbyBOYW0gQ2FmZSBU4buVIE9uZyBQaMO0zIFpIDMgTWHMgHUiO3M6NToicHJpY2UiO2Q6MTUwMDAwO3M6NToiaW1hZ2UiO3M6MTc6ImFwbTYxNzEtbmF2LTUuanBnIjtzOjg6InF1YW50aXR5IjtzOjE6IjEiO31pOjU7YTo1OntzOjk6InByb2R1Y3RJZCI7aTo1O3M6NDoibmFtZSI7czo0Mzoiw4FvIFBvbG8gTuG7ryBDYWZlIFBo4buRaSBO4bq5cCBTacOqdSBOaOG6uSI7czo1OiJwcmljZSI7ZDoxOTkwMDA7czo1OiJpbWFnZSI7czoyODoiYW8tcG9sby1udS1hcG43MDk2LXZhZy0xLmpwZyI7czo4OiJxdWFudGl0eSI7czoxOiIxIjt9aTo3O2E6NTp7czo5OiJwcm9kdWN0SWQiO2k6NztzOjQ6Im5hbWUiO3M6MzI6IsOBbyBQb2xvIE5hbSBBaXJ5Y29vbCBHaeG7ryBGb3JtIjtzOjU6InByaWNlIjtkOjE5OTAwMDtzOjU6ImltYWdlIjtzOjE3OiJhcG02MTcxLW5hdi01LmpwZyI7czo4OiJxdWFudGl0eSI7czoxOiIxIjt9aTo2O2E6NTp7czo5OiJwcm9kdWN0SWQiO2k6NjtzOjQ6Im5hbWUiO3M6MzU6IsOBbyBQb2xvIE7hu68gQWlyeWNvb2wgVGhvw6FuZyBNw6F0IjtzOjU6InByaWNlIjtkOjE1MDAwMDtzOjU6ImltYWdlIjtzOjI4OiJhby1wb2xvLW51LWFwbjcwOTYtdmFnLTEuanBnIjtzOjg6InF1YW50aXR5IjtzOjE6IjIiO319fQ==', 1712137434),
('QYMNeAlTmLRp51ceARrdoXTOl1rCTvqIID4KW1Hd', NULL, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiNDlPUGozZExQeVNRUWxCUEN2Y255RkxVTlFGdjV1dENKckI4eFFXTiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTIzOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvZGV0YWlsL2FvJTIwLSUyMHBvbG8lMjAtJTIwbmFtJTIwLSUyMGNhZmUlMjAtJTIwdG8lMjAtJTIwb25nJTIwLSUyMHBobyVDQyU4MWklMjAtJTIwMyUyMC0lMjBtYSVDQyU4MHUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjQ6ImNhcnQiO2E6MTp7aToxO2E6NTp7czo5OiJwcm9kdWN0SWQiO2k6MTtzOjQ6Im5hbWUiO3M6NDI6IsOBbyBQb2xvIE5hbSBDYWZlIFThu5UgT25nIFBow7TMgWkgMyBNYcyAdSI7czo1OiJwcmljZSI7ZDoxNTAwMDA7czo1OiJpbWFnZSI7czoxNzoiYXBtNjE3MS1uYXYtNS5qcGciO3M6ODoicXVhbnRpdHkiO3M6MToiMiI7fX19', 1712133479),
('t8Uh0LDexfFGIK8D6EmSR3NKEMBIC0CFsPXGtiuW', NULL, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoibWVPa0dFRGxQYTFSRmRsVzR4aTZxOVU5VHhNdkNpNlRIcXR5VnpINCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wcm9kdWN0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo0OiJjYXJ0IjthOjI6e2k6MjthOjU6e3M6OToicHJvZHVjdElkIjtpOjI7czo0OiJuYW1lIjtzOjQ0OiLDgW8gUG9sbyBO4buvIENhZmUgROG7h3QgVOG7lSBPbmcgTuG6uXAgRMOgaSI7czo1OiJwcmljZSI7ZDoyOTkwMDA7czo1OiJpbWFnZSI7czoyODoiYW8tcG9sby1udS1hcG43MDk2LXZhZy0xLmpwZyI7czo4OiJxdWFudGl0eSI7czoxOiIxIjt9aToxO2E6NTp7czo5OiJwcm9kdWN0SWQiO2k6MTtzOjQ6Im5hbWUiO3M6NDI6IsOBbyBQb2xvIE5hbSBDYWZlIFThu5UgT25nIFBow7TMgWkgMyBNYcyAdSI7czo1OiJwcmljZSI7ZDoxNTAwMDA7czo1OiJpbWFnZSI7czoxNzoiYXBtNjE3MS1uYXYtNS5qcGciO3M6ODoicXVhbnRpdHkiO3M6MToiMSI7fX19', 1712134687),
('VLCiYKIoJ8q0HdmUrx0ldL9FrPKgslRHcWQWRKf9', NULL, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiTjRhbER6a3R6VkRLdFhrTVZwc243RDhzeXRkeDhicGpXdjVwazgyYyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jYXJ0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo0OiJjYXJ0IjthOjI6e2k6MTthOjU6e3M6OToicHJvZHVjdElkIjtpOjE7czo0OiJuYW1lIjtzOjQyOiLDgW8gUG9sbyBOYW0gQ2FmZSBU4buVIE9uZyBQaMO0zIFpIDMgTWHMgHUiO3M6NToicHJpY2UiO2Q6MTUwMDAwO3M6NToiaW1hZ2UiO3M6MTc6ImFwbTYxNzEtbmF2LTUuanBnIjtzOjg6InF1YW50aXR5IjtzOjE6IjEiO31pOjI7YTo1OntzOjk6InByb2R1Y3RJZCI7aToyO3M6NDoibmFtZSI7czo0NDoiw4FvIFBvbG8gTuG7ryBDYWZlIEThu4d0IFThu5UgT25nIE7hurlwIETDoGkiO3M6NToicHJpY2UiO2Q6Mjk5MDAwO3M6NToiaW1hZ2UiO3M6Mjg6ImFvLXBvbG8tbnUtYXBuNzA5Ni12YWctMS5qcGciO3M6ODoicXVhbnRpdHkiO3M6MToiMiI7fX19', 1712139476),
('wKtYTj74907xADiMhmcyl6p4NHJT1IM42Ckk0WYs', NULL, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiNzd5YXJHc045MENCV0hqY2ZYeFdEUGdQaEVtVnViUzh0c2ZSeGsxUSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NDoiY2FydCI7YTozOntpOjE7YTo1OntzOjk6InByb2R1Y3RJZCI7aToxO3M6NDoibmFtZSI7czo0Mjoiw4FvIFBvbG8gTmFtIENhZmUgVOG7lSBPbmcgUGjDtMyBaSAzIE1hzIB1IjtzOjU6InByaWNlIjtkOjE1MDAwMDtzOjU6ImltYWdlIjtzOjE3OiJhcG02MTcxLW5hdi01LmpwZyI7czo4OiJxdWFudGl0eSI7czoxOiIxIjt9aToyO2E6NTp7czo5OiJwcm9kdWN0SWQiO2k6MjtzOjQ6Im5hbWUiO3M6NDQ6IsOBbyBQb2xvIE7hu68gQ2FmZSBE4buHdCBU4buVIE9uZyBO4bq5cCBEw6BpIjtzOjU6InByaWNlIjtkOjI5OTAwMDtzOjU6ImltYWdlIjtzOjI4OiJhby1wb2xvLW51LWFwbjcwOTYtdmFnLTEuanBnIjtzOjg6InF1YW50aXR5IjtzOjE6IjIiO31pOjU7YTo1OntzOjk6InByb2R1Y3RJZCI7aTo1O3M6NDoibmFtZSI7czo0Mzoiw4FvIFBvbG8gTuG7ryBDYWZlIFBo4buRaSBO4bq5cCBTacOqdSBOaOG6uSI7czo1OiJwcmljZSI7ZDoxOTkwMDA7czo1OiJpbWFnZSI7czoyODoiYW8tcG9sby1udS1hcG43MDk2LXZhZy0xLmpwZyI7czo4OiJxdWFudGl0eSI7czoxOiIxIjt9fX0=', 1712139450);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(2, 'Nguyen Admin', 'admin@gmail.com', NULL, '$2y$12$lwWJkQYTivpkETZtNWaA6.MTO2AR/KMCdSB2mTHZqGP94rZyq6Lca', NULL, '2024-04-01 03:18:37', '2024-04-01 03:18:37', 1),
(3, 'Nguyen Test 1', 'test1@gmail.com', NULL, '$2y$12$310BvQtatKqqaLRCl/9D7.3xzQ5iTG9/I.pBi91A2/wbKSywUKg.W', NULL, '2024-04-01 03:19:14', '2024-04-01 03:19:14', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Chỉ mục cho bảng `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `img_products`
--
ALTER TABLE `img_products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `img_products_image_unique` (`image`),
  ADD KEY `img_products_product_id_foreign` (`product_id`);

--
-- Chỉ mục cho bảng `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Chỉ mục cho bảng `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Chỉ mục cho bảng `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `img_products`
--
ALTER TABLE `img_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `img_products`
--
ALTER TABLE `img_products`
  ADD CONSTRAINT `img_products_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
