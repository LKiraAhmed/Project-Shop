-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2024 at 08:20 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project-shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `product_id`, `quantity`, `created_at`, `updated_at`) VALUES
(35, 3, 36, 1, '2024-07-15 06:47:47', '2024-07-15 06:47:47');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'shirt', NULL, NULL),
(2, 'bantlon', '2024-07-01 13:06:53', '2024-07-01 13:06:53'),
(3, 'test', '2024-07-04 15:54:46', '2024-07-04 15:54:46'),
(4, 'sd', '2024-07-04 15:56:21', '2024-07-04 15:56:21'),
(5, 'shirt', '2024-07-08 08:50:17', '2024-07-08 08:50:17'),
(6, 'Dress', '2024-07-10 11:51:39', '2024-07-10 11:51:39');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_06_30_055220_create_cache_table', 1),
(7, '2024_06_30_055502_create_image_table', 1),
(8, '2024_06_30_214901_create_catigories_table', 1),
(9, '2024_07_01_000927_create_products_table', 1),
(10, '2024_07_01_000928_create_carts_table', 1),
(11, '2024_07_01_000928_create_orders_table', 1),
(12, '2024_07_01_001056_create_reviews_table', 1),
(13, '2024_07_01_001134_create_wishlists_table', 1),
(14, '2024_07_08_224520_add_views_count_to_users_table', 1),
(15, '2024_07_10_014153_add_views_count_to_products_table', 1),
(31, '2024_07_14_073102_create_orders_table', 2),
(32, '2024_07_14_073940_create_orders_table', 3),
(33, '2024_07_14_092014_create_orders_table', 4),
(34, '2024_07_14_094319_create_orders_table', 5),
(35, '2024_07_14_180651_create_order_items_table', 6),
(36, '2024_07_15_013010_create_orders_table', 7),
(37, '2024_07_15_035348_create_orders_table', 8),
(38, '2024_07_16_200946_create_orders_table', 9),
(39, '2024_07_17_055917_create_orders_table', 10),
(40, '2024_07_17_234316_create_orders_table', 11),
(41, '2024_07_18_041111_create_notifications_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) NOT NULL,
  `type` varchar(255) NOT NULL,
  `notifiable_type` varchar(255) NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `quantity` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`quantity`)),
  `product_id` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`product_id`)),
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `first_name`, `last_name`, `address`, `phone`, `quantity`, `product_id`, `user_id`, `created_at`, `updated_at`) VALUES
(6, 'Ahmed', 'test', 'alex', '01288913263', '\"[\\\"1\\\"]\"', '\"[\\\"45\\\"]\"', 4, '2024-07-20 06:35:23', '2024-07-20 06:35:23'),
(7, 'MAHMED', 'test', 'CAIRO', '01288913263', '\"[\\\"21\\\"]\"', '\"[\\\"44\\\"]\"', 4, '2024-07-20 08:20:00', '2024-07-20 08:20:00');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` blob DEFAULT NULL,
  `price` decimal(8,2) NOT NULL,
  `discount` decimal(10,2) NOT NULL DEFAULT 0.00,
  `description` text DEFAULT NULL,
  `size` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 0,
  `catigorie_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sales_count` bigint(20) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `price`, `discount`, `description`, `size`, `quantity`, `catigorie_id`, `created_at`, `updated_at`, `sales_count`) VALUES
(34, 'T-Shirt', 0x313732303538343738302e6a7067, 500.00, 200.00, 'Skirts come in an array of styles, including pencil, A-line, pleated, and maxi skirts. They can be made from various materials like denim, cotton, leather, and silk. Skirts offer flexibility in styling, making them suitable for both professional settings and casual outings. The right skirt can highlight your silhouette and provide comfort and style.', 'md', 1, 5, '2024-07-10 11:13:00', '2024-07-10 11:13:00', 0),
(36, 'bantlon', 0x313732303538343837322e6a7067, 900.00, 400.00, 'Women\'s pants, also known as pantolon, are a versatile and essential piece in any wardrobe. They come in various styles, cuts, and fabrics, catering to different occasions and preferences. Common styles include tailored trousers, casual chinos, skinny jeans, wide-leg pants, and leggings. Pants can be made from materials like cotton, denim, wool, and synthetic blends, offering comfort and flexibility. Whether you\'re looking for professional attire, casual wear, or something sporty, there\'s a perfect pair of pants to match your needs. Pair them with blouses, t-shirts, blazers, or sweaters to create a range of stylish and functional outfits.', 'sm', 1, 2, '2024-07-10 11:14:32', '2024-07-10 11:14:32', 0),
(43, 'Jeans', 0x313732303538353236332e6a7067, 600.00, 500.00, 'A pair of well-fitting jeans is an essential item in any woman’s wardrobe. They come in various cuts such as skinny, straight-leg, bootcut, and wide-leg. Jeans are typically made from denim and can range from classic blue to various colors and washes. They are perfect for casual wear but can be dressed up with a stylish blouse and heels.', 'lg', 2, 1, '2024-07-10 11:21:03', '2024-07-10 11:21:03', 0),
(44, 'Dress', 0x313732303538363139332e6a7067, 400.00, 200.00, 'A versatile and timeless piece, the dress is a wardrobe staple for every woman. Available in various lengths, styles, and fabrics, it can be perfect for any occasion, from casual daywear to formal evening events. Popular styles include A-line, sheath, wrap, and maxi dresses, each offering a unique silhouette and level of comfort.', 'lg', 1, 6, '2024-07-10 11:36:33', '2024-07-10 11:52:14', 0),
(45, 'Dress', 0x313732303538363234372e6a7067, 500.00, 200.00, 'A versatile and timeless piece, the dress is a wardrobe staple for every woman. Available in various lengths, styles, and fabrics, it can be perfect for any occasion, from casual daywear to formal evening events. Popular styles include A-line, sheath, wrap, and maxi dresses, each offering a unique silhouette and level of comfort.', 'md', 1, 1, '2024-07-10 11:37:27', '2024-07-10 11:54:31', 0),
(46, 'Dress', 0x313732303538363238342e6a7067, 600.00, 100.00, 'A versatile and timeless piece, the dress is a wardrobe staple for every woman. Available in various lengths, styles, and fabrics, it can be perfect for any occasion, from casual daywear to formal evening events. Popular styles include A-line, sheath, wrap, and maxi dresses, each offering a unique silhouette and level of comfort.', 'md', 1, 1, '2024-07-10 11:38:04', '2024-07-10 11:38:04', 0),
(47, 'Dress', 0x313732303538363331382e6a7067, 700.00, 400.00, 'A versatile and timeless piece, the dress is a wardrobe staple for every woman. Available in various lengths, styles, and fabrics, it can be perfect for any occasion, from casual daywear to formal evening events. Popular styles include A-line, sheath, wrap, and maxi dresses, each offering a unique silhouette and level of comfort.', 'lg', 1, 1, '2024-07-10 11:38:38', '2024-07-10 11:38:38', 0),
(48, 'Shorts', 0x313732303538363430352e6a7067, 500.00, 200.00, 'Cardigans are versatile layering pieces that can add warmth and style to any outfit. They come in various lengths and styles, from cropped to long, and can be made from different materials like wool, cotton, and cashmere. Cardigans can be worn over dresses, blouses, or t-shirts for a cozy yet fashionable look.', 'sm', 1, 1, '2024-07-10 11:40:05', '2024-07-10 11:40:05', 0),
(49, 'Sweater', 0x313732303538363532362e6a7067, 500.00, 200.00, 'The blouse is a chic and feminine top that can easily transition from office wear to evening wear. Often made from lightweight fabrics like silk, cotton, or chiffon, blouses can feature various details such as ruffles, pleats, and lace. Pairing a blouse with tailored pants or a skirt can create a polished and elegant look.', 'md', 1, 1, '2024-07-10 11:42:06', '2024-07-10 11:42:06', 0),
(50, 'Jumpsuit', 0x313732303538363537352e6a7067, 1000.00, 500.00, 'The blouse is a chic and feminine top that can easily transition from office wear to evening wear. Often made from lightweight fabrics like silk, cotton, or chiffon, blouses can feature various details such as ruffles, pleats, and lace. Pairing a blouse with tailored pants or a skirt can create a polished and elegant look.', 'sm', 1, 1, '2024-07-10 11:42:55', '2024-07-10 11:42:55', 0);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `rating` tinyint(3) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `email_code` bigint(20) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `email_code`, `code`) VALUES
(3, 'ahmed', 'wega03726@gmail.com', 'wega03726@gmail.com', NULL, '$2y$12$lyqJAv1RXmoq2jFHScmnTugw.Ujl.kZRGsma9C3ujDKaBhnoayPeO', NULL, '2024-07-02 14:50:04', '2024-07-02 14:50:04', NULL, NULL),
(4, 'ahmed24rk', 'ahmed24rkg@gmail.com', '01288913263', NULL, '$2y$12$w/1sbfBdGlSqW9IHGVQROu/ID8A4LrdupPTuSBJN2GaoCKfb9hKaS', NULL, '2024-07-05 23:35:44', '2024-07-05 23:35:44', NULL, NULL),
(5, 'Test', 'test@gmail.com', '016424+8284656', NULL, '$2y$12$ftjmYfHFByPoQPpa9Yfq9Ob2a/Hr9o3Oimfdlt2l1fAa.0SuWNW/y', NULL, '2024-07-09 06:04:25', '2024-07-09 06:04:25', NULL, NULL),
(6, 'Ahmed', 'lkiraww2@gmail.com', '01288913263', NULL, '$2y$12$bcpWr7/1b6MuH4t3Eeeg2eMoTd5A9GdouTptTpiWwKbVUF89xTCkm', NULL, '2024-07-20 10:02:09', '2024-07-20 10:02:09', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `user_id`, `product_id`, `created_at`, `updated_at`) VALUES
(12, 4, 49, '2024-07-19 13:47:44', '2024-07-19 13:47:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_user_id_foreign` (`user_id`),
  ADD KEY `carts_product_id_foreign` (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_catigorie_id_foreign` (`catigorie_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_user_id_foreign` (`user_id`),
  ADD KEY `reviews_product_id_foreign` (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wishlists_user_id_foreign` (`user_id`),
  ADD KEY `wishlists_product_id_foreign` (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_catigorie_id_foreign` FOREIGN KEY (`catigorie_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD CONSTRAINT `wishlists_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `wishlists_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
