-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 18, 2025 at 12:12 PM
-- Server version: 10.11.10-MariaDB-log
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u218101292_kp_forex`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` text NOT NULL,
  `language` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `content`, `language`, `created_at`, `updated_at`) VALUES
(4, '<h3 data-start=\"79\" data-end=\"108\"><strong data-start=\"83\" data-end=\"106\">Tentang ic-syekhburhanuddin</strong></h3>\r\n<p data-start=\"110\" data-end=\"480\">Selamat datang di <strong data-start=\"128\" data-end=\"143\">ic-syekhburhanuddin</strong>, portal informasi forex terpercaya yang hadir untuk membantu trader dari berbagai level dalam memahami pasar keuangan dengan lebih baik. Kami menyediakan <strong data-start=\"298\" data-end=\"322\">berita forex terbaru</strong>, <strong data-start=\"324\" data-end=\"342\">analisis pasar</strong>, <strong data-start=\"344\" data-end=\"364\">strategi trading</strong>, dan <strong data-start=\"370\" data-end=\"387\">edukasi forex</strong> yang dirancang untuk membantu Anda mengambil keputusan yang lebih cerdas dan terinformasi.</p>\r\n<p data-start=\"482\" data-end=\"828\">Dengan komitmen terhadap transparansi dan kualitas informasi, <strong data-start=\"544\" data-end=\"559\">ic-syekhburhanuddin</strong> berusaha menjadi sumber utama bagi para trader yang ingin sukses di dunia forex. Kami mengumpulkan data dari berbagai sumber terpercaya, mengemasnya dalam analisis mendalam, serta menyajikan wawasan praktis yang bisa langsung diterapkan dalam aktivitas trading Anda.</p>\r\n<p data-start=\"830\" data-end=\"1086\"><strong data-start=\"830\" data-end=\"843\">Visi kami</strong> adalah membangun komunitas trader yang lebih cerdas dan siap menghadapi tantangan pasar.<br data-start=\"932\" data-end=\"935\"><strong data-start=\"935\" data-end=\"948\">Misi kami</strong> adalah memberikan informasi akurat, edukasi berkualitas, dan strategi terbaik untuk membantu trader mencapai kesuksesan jangka panjang.</p>\r\n<p data-start=\"1088\" data-end=\"1205\">Bergabunglah dengan <strong data-start=\"1108\" data-end=\"1123\">ic-syekhburhanuddin</strong> dan jadilah bagian dari komunitas trader yang selalu selangkah lebih maju! 🚀📈</p>', 'id', '2024-06-01 05:13:59', '2025-03-04 04:58:35');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `image`, `name`, `email`, `email_verified_at`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'uploads/reEv0kVCQtcMyX817n6Hg1okuSbxJt.webp', 'A.M. Capital', 'agungmustaqim@mazhub.com', NULL, '$2y$10$kv..DDRL6cRcblzdtNGMEeCeMDcq7kfQ.V8XVOtKjeZSrsukuO.jW', 1, '89ZuAwKO8L19QigjJVuGlVVLzQDswdy6pSRHc2qTNrgWWb4edy1FVwXjRcsQ', '2023-05-21 06:37:47', '2025-03-06 03:47:07');

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `home_top_bar_ad` text NOT NULL,
  `home_top_bar_ad_status` tinyint(1) NOT NULL,
  `home_middle_ad` text NOT NULL,
  `home_middle_ad_status` tinyint(1) NOT NULL,
  `view_page_ad` text NOT NULL,
  `view_page_ad_status` tinyint(1) NOT NULL,
  `news_page_ad` text NOT NULL,
  `news_page_ad_status` tinyint(1) NOT NULL,
  `side_bar_ad` text NOT NULL,
  `side_bar_ad_status` tinyint(1) NOT NULL,
  `home_top_bar_ad_url` text DEFAULT NULL,
  `home_middle_ad_url` text DEFAULT NULL,
  `view_page_ad_url` text DEFAULT NULL,
  `news_page_ad_url` text DEFAULT NULL,
  `side_bar_ad_url` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ads_banner_left` text DEFAULT NULL,
  `ads_banner_left_url` text DEFAULT NULL,
  `ads_banner_left_status` tinyint(1) DEFAULT NULL,
  `ads_banner_right` text DEFAULT NULL,
  `ads_banner_right_url` text DEFAULT NULL,
  `ads_banner_right_status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `home_top_bar_ad`, `home_top_bar_ad_status`, `home_middle_ad`, `home_middle_ad_status`, `view_page_ad`, `view_page_ad_status`, `news_page_ad`, `news_page_ad_status`, `side_bar_ad`, `side_bar_ad_status`, `home_top_bar_ad_url`, `home_middle_ad_url`, `view_page_ad_url`, `news_page_ad_url`, `side_bar_ad_url`, `created_at`, `updated_at`, `ads_banner_left`, `ads_banner_left_url`, `ads_banner_left_status`, `ads_banner_right`, `ads_banner_right_url`, `ads_banner_right_status`) VALUES
(1, 'uploads/MikSHrZx6SDDFMdLB49S55L3hCLB1C.webp', 0, 'uploads/WtmZ6sAnz1JYbj7i43yZa93g0q6cZr.webp', 0, 'uploads/8KXYIjC0akw5UEqUZkWGW8WQi9HD7X.webp', 0, 'uploads/fpgFLojlDqg9CooO51tR7bZE6S1lBq.webp', 0, 'uploads/UlX22PzA8ZZf3ZS2LxZsL1DIjETftL.webp', 0, 'https://mazhub.com/contact', 'https://mazhub.com/contact', 'https://mazhub.com/contact', 'https://mazhub.com/contact', 'https://mazhub.com/contact', '2023-06-05 22:14:15', '2025-03-04 04:23:37', 'uploads/1u4LfWhS1iwUvgZAzlXoSqyiw3ckba.webp', 'https://mazhub.com/contact', 0, 'uploads/QnKSlcJSEdgGkGDfL5ZESwCz9Ql44I.webp', 'https://mazhub.com/contact', 0);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `language` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `show_at_nav` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `meta_keyword` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `language`, `name`, `slug`, `show_at_nav`, `status`, `meta_keyword`, `meta_description`, `created_at`, `updated_at`) VALUES
(60, 'id', 'Berita Pasar', 'berita-pasar', 1, 1, NULL, NULL, '2025-03-04 04:53:27', '2025-03-06 03:38:19'),
(61, 'id', 'Analisis Teknikal', 'analisis-teknikal', 1, 1, NULL, NULL, '2025-03-04 04:53:46', '2025-03-04 04:53:46'),
(62, 'id', 'Analisis Fundamental', 'analisis-fundamental', 0, 1, NULL, NULL, '2025-03-04 04:54:12', '2025-03-04 04:54:44'),
(63, 'id', 'Edukasi Forex', 'edukasi-forex', 1, 1, NULL, NULL, '2025-03-04 04:54:37', '2025-03-04 04:54:37'),
(64, 'id', 'Strategi Trading', 'strategi-trading', 1, 1, NULL, NULL, '2025-03-04 04:55:00', '2025-03-04 04:55:00'),
(65, 'id', 'Manajemen Risiko', 'manajemen-risiko', 0, 1, NULL, NULL, '2025-03-04 04:55:33', '2025-03-04 04:55:33');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `news_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `language` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `address`, `phone`, `email`, `language`, `created_at`, `updated_at`) VALUES
(1, 'Jakarta Pusat, DKI Jakarta, Indonesia', '000-000-000-000', 'support@ic-syekhburhanuddin.com', 'en', '2023-06-08 01:24:52', '2025-03-04 05:47:45'),
(2, 'Jakarta Pusat, DKI Jakarta, Indonesia', '000-000-000-000', 'admin@mazhub.com', 'bn', '2023-06-08 03:12:55', '2024-05-02 10:57:05'),
(3, 'Jakarta Pusat, DKI Jakarta, Indonesia', '000-000-000-000', 'admin@mazhub.com', 'hi', '2024-05-02 10:55:59', '2024-05-02 10:57:02'),
(4, 'Jakarta Pusat, DKI Jakarta, Indonesia', '000-000-000-000', 'support@ic-syekhburhanuddin.com', 'id', '2024-05-02 10:57:25', '2025-03-04 05:47:49'),
(5, 'Jakarta Pusat, DKI Jakarta, Indonesia', '000-000-000-000', 'admin@mazhub.com', 'zh-Hans', '2024-05-02 10:57:33', '2024-05-02 10:57:33');

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
-- Table structure for table `footer_grid_ones`
--

CREATE TABLE `footer_grid_ones` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `language` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footer_grid_ones`
--

INSERT INTO `footer_grid_ones` (`id`, `language`, `name`, `url`, `status`, `created_at`, `updated_at`) VALUES
(2, 'en', 'About', '/about', 1, '2023-06-07 01:37:51', '2023-06-07 01:37:51'),
(3, 'en', 'Contact', '/contact', 1, '2023-06-07 01:38:36', '2023-06-07 01:38:36'),
(6, 'en', 'Login', '/login', 1, '2023-06-22 03:10:25', '2023-06-22 03:10:25'),
(7, 'en', 'Regester', '/register', 1, '2023-06-22 03:10:46', '2023-06-22 03:10:46'),
(14, 'id', 'About', '/about', 1, '2023-06-07 01:37:51', '2023-06-07 01:37:51'),
(15, 'id', 'Contact', '/contact', 1, '2023-06-07 01:38:36', '2023-06-07 01:38:36'),
(16, 'id', 'Login', '/login', 1, '2023-06-22 03:10:25', '2023-06-22 03:10:25'),
(17, 'id', 'Regester', '/register', 1, '2023-06-22 03:10:46', '2023-06-22 03:10:46');

-- --------------------------------------------------------

--
-- Table structure for table `footer_grid_threes`
--

CREATE TABLE `footer_grid_threes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `language` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footer_grid_threes`
--

INSERT INTO `footer_grid_threes` (`id`, `language`, `name`, `url`, `status`, `created_at`, `updated_at`) VALUES
(2, 'en', 'Helth', 'https://mazhub.com/news?category=health', 1, '2023-06-07 04:41:25', '2023-06-22 03:19:02'),
(5, 'en', 'Lifestyle', 'https://mazhub.com/news?category=lifestyle', 1, '2023-06-22 03:19:59', '2024-06-02 03:37:13'),
(9, 'en', 'Event', 'https://mazhub.com/news?category=event', 1, '2023-06-22 03:22:15', '2024-06-02 03:37:01'),
(12, 'id', 'Helth', 'https://mazhub.com/news?category=health', 1, '2023-06-07 04:41:25', '2023-06-22 03:19:02'),
(13, 'id', 'Lifestyle', 'https://mazhub.com/news?category=lifestyle', 1, '2023-06-22 03:19:59', '2024-06-02 03:37:13'),
(14, 'id', 'Event', 'https://mazhub.com/news?category=event', 1, '2023-06-22 03:22:15', '2024-06-02 03:37:01');

-- --------------------------------------------------------

--
-- Table structure for table `footer_grid_twos`
--

CREATE TABLE `footer_grid_twos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `language` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footer_grid_twos`
--

INSERT INTO `footer_grid_twos` (`id`, `language`, `name`, `url`, `status`, `created_at`, `updated_at`) VALUES
(2, 'en', 'About Us', '/about', 1, '2023-06-07 03:37:37', '2025-03-04 05:03:28'),
(11, 'id', 'About Us', 'https://mazhub.com/about', 1, '2024-06-02 02:47:36', '2024-06-02 02:47:36'),
(12, 'en', 'Privacy Policy', 'https://mazhub.com/kebijakan', 1, '2024-06-02 03:34:28', '2024-06-02 03:34:28'),
(13, 'id', 'Privacy Policy', '/kebijakan', 1, '2024-06-02 03:34:41', '2025-03-04 05:03:21');

-- --------------------------------------------------------

--
-- Table structure for table `footer_infos`
--

CREATE TABLE `footer_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` text DEFAULT NULL,
  `description` text NOT NULL,
  `copyright` varchar(255) NOT NULL,
  `language` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footer_infos`
--

INSERT INTO `footer_infos` (`id`, `logo`, `description`, `copyright`, `language`, `created_at`, `updated_at`) VALUES
(1, 'uploads/fyoxhy2AAvz3TFBMLsVQjpza3EeQbM.webp', 'A Trusted News Portal with Informative and Inspirational Content. Discover Balanced and Reliable Latest News. Join Us and Broaden Your Horizons!', 'Copyright © 2023 MAZHUB', 'en', '2023-06-06 23:08:10', '2024-12-02 10:41:30'),
(2, 'uploads/SdJYvMojPv6ivcRrtaXnS76jCFvPcV.png', 'লরেম ইপ্সাম ডলর সিট আমেত, কনসেক্টেচুর অ্যাডিপিস্কিং এলিট। নানসি আল্ট্রিচিস ভ্যারিয়াস আউগিউ ইউ ফ্যাউসিবাস।', 'Copyright © 2023 MAZHUB', 'bn', '2023-06-06 23:10:39', '2024-05-02 10:59:38'),
(3, 'uploads/pIlIoFeGItOprxkADxz9RuffpnbtIU.png', 'लोरेम इप्सम डोलर सीट अमित कॉन्सेकेटर, एडीपीसीसिंग एलीट। यूएस मैग्नम हैरम यूरे ऑफिसिया लॉडेंटियम इम्पेडेट वोलुप्टेटेम।', 'Copyright © 2023 MAZHUB', 'hi', '2023-06-22 00:29:52', '2024-05-02 10:59:05'),
(4, 'uploads/1sQdAFSV3qMqcvFB80SnF3kq3O60rG.webp', 'ic-syekhburhanuddin adalah portal berita terpercaya yang menyajikan berita terbaru, analisis pasar, dan tips trading forex untuk membantu Anda membuat keputusan investasi yang tepat.', 'Copyright © 2025 Kapten Forex', 'id', '2024-05-02 11:00:08', '2025-03-04 06:07:55'),
(5, 'uploads/XxwxxqU7LzNvr4lHbQu7ITeK6bV2o9.png', 'Portal Berita Terpercaya dengan Konten Informatif dan Inspiratif. Temukan Berita Terkini Berimbang dan Terpercaya. Bergabunglah Dengan Kami dan Perluas Wawasan Mu!', 'Copyright © 2023 MAZHUB', 'zh-Hans', '2024-05-02 11:00:24', '2024-05-02 11:02:11');

-- --------------------------------------------------------

--
-- Table structure for table `footer_titles`
--

CREATE TABLE `footer_titles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  `language` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footer_titles`
--

INSERT INTO `footer_titles` (`id`, `key`, `value`, `language`, `created_at`, `updated_at`) VALUES
(1, 'grid_one_title', 'Help links', 'en', '2023-06-07 22:15:15', '2023-06-07 22:39:15'),
(2, 'grid_one_title', 'সাহায্য লিঙ্ক', 'bn', '2023-06-07 22:16:34', '2023-06-22 03:13:00'),
(3, 'grid_two_title', 'Short Links', 'en', '2023-06-07 22:56:57', '2023-06-22 03:14:35'),
(4, 'grid_two_title', 'সংক্ষিপ্ত লিঙ্ক', 'bn', '2023-06-07 22:58:58', '2023-06-22 03:14:56'),
(5, 'grid_three_title', 'Treanding', 'en', '2023-06-07 23:04:23', '2023-06-22 03:18:11'),
(6, 'grid_one_title', 'सहायता लिंक', 'hi', '2023-06-22 03:12:43', '2023-06-22 03:12:43'),
(7, 'grid_two_title', 'लघु कड़ियाँ', 'hi', '2023-06-22 03:14:47', '2023-06-22 03:14:47'),
(8, 'grid_three_title', 'ट्रेंडिंग', 'hi', '2023-06-22 03:18:19', '2023-06-22 03:18:19'),
(9, 'grid_three_title', 'চলমান', 'bn', '2023-06-22 03:18:26', '2023-06-22 03:18:26'),
(10, 'grid_two_title', 'Short Links', 'id', '2024-06-02 02:47:06', '2024-06-02 02:47:06'),
(11, 'grid_three_title', 'Treanding', 'id', '2024-06-02 03:39:40', '2024-06-02 03:39:40'),
(12, 'grid_one_title', 'Help links', 'id', '2024-06-02 03:40:57', '2024-06-02 03:40:57');

-- --------------------------------------------------------

--
-- Table structure for table `home_section_settings`
--

CREATE TABLE `home_section_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_section_one` varchar(255) NOT NULL,
  `category_section_two` varchar(255) NOT NULL,
  `category_section_three` varchar(255) NOT NULL,
  `category_section_four` varchar(255) NOT NULL,
  `language` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_section_settings`
--

INSERT INTO `home_section_settings` (`id`, `category_section_one`, `category_section_two`, `category_section_three`, `category_section_four`, `language`, `created_at`, `updated_at`) VALUES
(1, '13', '15', '14', '18', 'en', '2023-06-03 01:22:51', '2024-06-02 02:45:12'),
(2, '27', '29', '28', '30', 'bn', '2023-06-03 01:25:22', '2023-06-22 00:01:49'),
(3, '9', '9', '9', '9', 'tr', '2023-06-19 03:27:47', '2023-06-19 03:27:47'),
(4, '20', '22', '21', '23', 'hi', '2023-06-21 23:05:04', '2023-06-22 00:01:35'),
(5, '60', '61', '63', '62', 'id', '2024-06-02 02:45:27', '2025-03-06 04:54:31');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `title`, `path`, `created_at`, `updated_at`) VALUES
(9, 'tes2', 'https://image.mazhub.com/tes2.webp', '2024-07-30 08:37:00', '2024-07-30 08:37:00'),
(10, 'Unlocking Entrepreneurial Success: Strategies for Building a Thriving Business', 'https://image.mazhub.com/OH9GtR9XgO2FEMG9tcasuvEMqVY05s.webp', NULL, NULL),
(11, 'Navigating the Competitive Landscape: Insights for Small Business Growth', 'https://image.mazhub.com/I4L2c4J0gV4CUXvhzqTGdynzjZFv5J.webp', NULL, NULL),
(12, 'From Startups to Success: Lessons from Innovative Business Ventures', 'https://image.mazhub.com/5LVocggwDRXqMySdDZg46I0ekZMFGd.webp', NULL, NULL),
(13, 'Driving Profitability: Effective Financial Management for Businesses', 'https://image.mazhub.com/gFgEHeZHf5Euz7jCtVrA7Vd6B47YPS.webp', NULL, NULL),
(14, 'Creating Memorable Experiences: Unleashing the Magic of Event Planning', 'https://image.mazhub.com/1W5bMGNWVTHODgwSnxI1QOuVFMLM83.webp', NULL, NULL),
(15, 'Mastering Event Marketing: Strategies to Boost Attendance and Engagement', 'https://image.mazhub.com/K9h4VVS8JCpxqwOMGHTUVHuDVnokff.webp', NULL, NULL),
(16, 'Behind the Scenes: The Art of Seamless Event Execution', 'https://image.mazhub.com/XtLfEDo2k3e4qKMTzrdk8rnmspjsVf.webp', NULL, NULL),
(17, 'Breaking Barriers: Innovations in Virtual and Hybrid Event Experiences', 'https://image.mazhub.com/1Lw6dCj40WrzmxowFxJfWufMRateSJ.webp', NULL, NULL),
(18, 'The Art of Work-Life Balance: Nurturing Harmony in a Fast-Paced World', 'https://image.mazhub.com/GEPaNuO7AksjQom7EEPzJWjLYMtN8l.webp', NULL, NULL),
(19, 'Mindfulness in Everyday Life: Cultivating Inner Peace and Happiness', 'https://image.mazhub.com/2JSPqkxcMrcGHYHWCH68TxVfvUj4Uf.webp', NULL, NULL),
(20, 'Designing Your Dream Lifestyle: Crafting a Personalized Path to Success', 'https://image.mazhub.com/2uMMsxJ9TfsAkyhKaduNkZfSsULgbB.webp', NULL, NULL),
(21, 'Achieving Sporting Greatness: Lessons from Legendary Athletes', 'https://image.mazhub.com/ZOfmDXwmsX3ZJYYI8XIYq89kT36TPp.webp', NULL, NULL),
(22, 'Sporting Greatness: Lessons from Legendary Athletes', 'https://image.mazhub.com/9HH6pcbhOuoLdY7CLebgp8W05VCEWK.webp', NULL, NULL),
(23, 'Dream Lifestyle: Crafting a Personalized Path to Success', 'https://image.mazhub.com/2uMMsxJ9TfsAkyhKaduNkZfSsULgbB.webp', NULL, NULL),
(24, 'Hidup Kece di Era Milenial: Tips dan Trik Anti-Mainstream!', 'https://image.mazhub.com/hzJDryBi0XIhmI5Lgmydfd3crxgJ7O.webp', NULL, NULL),
(25, 'Living Chic in the Millennial Era: Unique Tips and Tricks!', 'https://image.mazhub.com/n2qqe7zVzzC1ZMNQ5TXwF1Hro3dNLw.webp', NULL, NULL),
(26, '5 Teknologi Keren yang Bakal Bikin Kamu Makin Kepo!', 'https://image.mazhub.com/pu2cGb49sDJ4ufxMBDoOAK2D2Jjyog.webp', NULL, NULL),
(27, '5 Cool Tech Trends That\'ll Keep You Curious!', 'https://image.mazhub.com/Uvtb53ScyJMBDzapcO9VrTuvBW2lrl.webp', NULL, NULL),
(28, 'Traveling Tidak Pakai Ribet: Berikut Negara yang Bisa Kalian Datangi Tanpa Perlu Visa', 'https://image.mazhub.com/I1C9WUNsD9Gb9HSVP65z1ukRH8FGib.webp', NULL, NULL),
(29, '7 Tips Gokil Mengelola Duit Biar Tetep Oke Tanpa Harus Kere!', 'https://image.mazhub.com/591QDE3xZ35Ya0TCLpkUoHGHKMOSYm.webp', NULL, NULL),
(30, '7 Cool Tips to Manage Your Money and Stay Afloat Without Going Broke!', 'https://image.mazhub.com/tGxHklV9QxXVawVFm4tGPwUZWwLHmn.webp', NULL, NULL),
(31, 'Alternatif Minuman Penangkal Ngantuk Selain Kopi!', 'https://image.mazhub.com/bVQFaqg2vdJjGoQWARC0UeMVIJTzUa.webp', NULL, NULL),
(32, 'Makanan yang Pas Bagi Perantau yang Aman Disimpan Berminggu-Minggu di Kulkas', 'https://image.mazhub.com/5LB8m6SvY8YgzMlzMI0WzjfG57xyKm.webp', NULL, NULL),
(33, 'Diet Tapi Takut Cepat Lapar: Berikut Solusi Diet Tapi Tetap Kenyang Untuk Kamu', 'https://image.mazhub.com/KVFfrcQg5HMLucQUM3oDjILe57WOpW.webp', NULL, NULL),
(34, 'Glow Up Seharian: Tips Wajah Tetap Cerah dan Fresh', 'https://image.mazhub.com/Dpm2DclC8gQeiG76meezsiT3TJae1K.webp', NULL, NULL),
(35, 'Menggali Inspirasi dari Kehidupan Sehari-hari: Petualangan Anak Muda dalam Dunia Kontemporer', 'https://image.mazhub.com/YevGtigWA2n6iVw234gdUeZ0H0q31Z.webp', NULL, NULL),
(36, 'Exploring Everyday Life: Young Adults\' Adventure in the Contemporary World', 'https://image.mazhub.com/l5nkxSQSCG93lqon0LRNLBfKLwCtpS.webp', NULL, NULL),
(37, 'Bertualang dalam Kehidupan: Weisheit dari Filsuf Gaya Lama yang Bikin Minder', 'https://image.mazhub.com/DJwyF2bxV9MpMTiZ1TIbiQZShw3iNs.webp', NULL, NULL),
(38, 'Embarking on Life\'s Journey: Weisheit from Old-School Philosophers That\'ll Blow Your Mind', 'https://image.mazhub.com/xyx12KhLpDbmjVqGn47u506QciIGsv.webp', NULL, NULL),
(39, 'Cara Gampang Atasi Rambut Rontok dan Ketombe untuk Sahabat Mazhub', 'https://image.mazhub.com/2ZHVY6uVQB2UY0nvH9ijqrzH62U3W9.webp', NULL, NULL),
(40, 'Spend Holiday in Newyork: Here\'s Hidden Gems in New York People Must-Visit', 'https://image.mazhub.com/Uu8LDlw0CE3BZwqXM1fOqipaqzHx72.webp', NULL, NULL),
(41, 'Berwisata ke Kota Big Apple: Tempat Wisata Tersembunyi di New York yang Wajib Dikunjungi', 'https://image.mazhub.com/hTHLD2XRXfKKBu7FJqNnj7g5DlXyuZ.webp', NULL, NULL),
(42, 'Easy Tips to Handle Hair Fall and Dandruff for Mazhub Friends', 'https://image.mazhub.com/s5howwAg4kwYefIguu345nVCJqVa7o.webp', NULL, NULL),
(43, 'Gen Z dilabeli Sebagai Generasi Pemilih dalam Berkarir : Berikut ini Jawabannya!', 'https://image.mazhub.com/y8lBQYGqmS7QP8Bo1ofCN5yGvYaPdK.webp', NULL, NULL),
(44, 'Review Film \"How to Make Millions Before Grandma Dies\": Panduan Kocak Jadi Jutawan!', 'https://image.mazhub.com/f378uy5x6FvKucfoHaETvq0eXZePZb.webp', NULL, NULL),
(45, '\"How to Make Millions Before Grandma Dies\": A Hilarious Guide to Getting Rich!', 'https://image.mazhub.com/lTWI3Vw4aWeltEmnIwdLk13IvSYa12.webp', NULL, NULL),
(46, 'Peminat Iphone Semakin Tinggi: Ini Alasan Kenapa iPhone Jadi Pilihan Banyak Orang', 'https://image.mazhub.com/SgipMUYrGAWYn7JDOrEMYJVmCgJaPy.webp', NULL, NULL),
(47, 'Why Is Everyone Using an iPhone? Heres The Reason', 'https://image.mazhub.com/lRIWf47U5lzNZbQTzArTLkB5BDFr3j.webp', NULL, NULL),
(48, 'Golf: Disebut Sebagai Olahraga Orang Kaya Padahal Hanya Olahraga Santai?', 'https://image.mazhub.com/XXH6bXi4oPtSfU6oH5hTV8cOPkziyk.webp', NULL, NULL),
(49, 'Upgrade Skill di Era Digital: Gimana Caranya, Sobat Mazhub?', 'https://image.mazhub.com/FFJjPhV4TKvfdX2HFmw8N2YKoUyGKU.webp', NULL, NULL),
(50, 'How to Upgrade Your Skills in the Fast-Paced Digital Era: Tips from Your Buddy Mazhub', 'https://image.mazhub.com/q32fH1KXJIAdXdIeEAyBHKj9HUEOUV.webp', NULL, NULL),
(51, 'Cara Gampang Cari Duit Tanpa Modal: Tips Keren Buat Sobat Mazhub', 'https://image.mazhub.com/Ap7IaCnOV3AoG4WaAkmns4X3NHTDLs.webp', NULL, NULL),
(52, 'Easy Ways to Make Money Without Spending a Dime: Tips for Mazhub Buddies', 'https://image.mazhub.com/IuCrJX9bDzoWXNgUvOCTDlSa3XB3eB.webp', NULL, NULL),
(53, 'Tips Sehat Buat Remaja Jompo: Biar Tetep Fit, Sobat Mazhub!', 'https://image.mazhub.com/jvRkCku5KidSMus2TcHQW1NYzZXV3Z.webp', NULL, NULL),
(54, 'Health Tips for Decrepit Teenager: Stay Fit, Mazhub Buddies!', 'https://image.mazhub.com/tHshLpUE9FspXevZjtHakeV1oATOgi.webp', NULL, NULL),
(55, 'Cara Bikin Script Konten YouTube Pakai ChatGPT: Gampang Banget, Sobat Mazhub!', 'https://image.mazhub.com/vU3Q5Dmwn8XkNudbj6uiwJjxkW2bHS.webp', NULL, NULL),
(56, 'How to Create YouTube Script Using ChatGPT: Super Easy, Mazhub Buddies!', 'https://image.mazhub.com/Z5nGYIAI4rkoyWm2mVHInfzDLZwPPP.webp', NULL, NULL),
(57, 'Cara Mengatur Keuangan Biar Bebas Finansial di Hari Tua: Tips Keren dari Sobat Mazhub!', 'https://image.mazhub.com/ZetWzsOzFVRX26MW01LMRipZHQdMSe.webp', NULL, NULL),
(58, 'How to Manage Your Finances for Financial Freedom in Old Age: Cool Tips from Mazhub Buddies!', 'https://image.mazhub.com/jCiX7wGHeU4jtheOW5TcbsEJtKuY77.webp', NULL, NULL),
(59, 'Kenalan Yuk Sama TAPERA: Solusi Keren untuk Punya Rumah Idaman!', 'https://image.mazhub.com/ihmp8hh1Gd2IUWVqXH4qvCKKcmrO8J.webp', NULL, NULL),
(60, 'Mengenal Childfree yang Menjadi Trend dikalangan Anak Muda Zaman Now : Yay or Nay?', 'https://image.mazhub.com/yFYaFqSFEDQlEKeM0WqaWfGBQl5s3Y.webp', NULL, NULL),
(61, 'Childfree: The Hot New Trend Among Millennials  Yay or Nay?', 'https://image.mazhub.com/2ZyKm7y1koEi0SBypAr62rr0EL86VO.webp', NULL, NULL),
(62, 'Glow Up with Water: How Drinking Water Transforms Your Skin!', 'https://image.mazhub.com/enflJK0Tpq1kkGenLxNooonSeAbtlb.webp', NULL, NULL),
(63, 'Hidrasi Maksimal: Manfaat Minum Air Putih untuk Kulit Wajah Glowing!', 'https://image.mazhub.com/pGuGJcPbMDR9N3v4oJb6Y7FDHxz5VS.webp', NULL, NULL),
(64, 'Keunikan Sumatera Barat: Menelusuri Keindahan dan Budaya yang Memikat', 'https://image.mazhub.com/2SNT5GaYKgaWi38Ek9voJdesnkgMTe.webp', NULL, NULL),
(65, 'Minang Goes Global: Exploring the Worldwide Influence of Minangkabau Culture!', 'https://image.mazhub.com/mnVhPbLWYQtqQTEO40N9WNOyZuD9NN.webp', NULL, NULL),
(66, 'Chill Indoor Workouts: Stay Active Without Leaving Your Room!', 'https://image.mazhub.com/cuVnOJdhEkbT8J4YHhT9yFTBa82Wel.webp', NULL, NULL),
(67, 'Ingin Berolahraga Tapi Malas Keluar: Berikut 5 Aktivitas Keren Buat Santai di Dalam Ruangan!', 'https://image.mazhub.com/BRfX8ADAXJ9Ok1Z2bmjWAW9yxxTaC8.webp', NULL, NULL),
(68, 'Gold Investment: A Modern Youth\'s Guide to Financial Securit', 'https://image.mazhub.com/szm9erWm4LUBO3vRE7NOAj3CqI3spH.webp', NULL, NULL),
(69, 'Cara Hidup Ramah Lingkungan di 2024: Praktis dan Tren Produk Hijau!', 'https://image.mazhub.com/CVZ3cDRN04lZsgZCpDl75XM7u0CwaZ.webp', NULL, NULL),
(70, 'Eco-Friendly Living in 2024: Practical Tips and Green Product Trends!', 'https://image.mazhub.com/nUNS4bmxO1nBgwvenjPzs1VOl6vl43.webp', NULL, NULL),
(71, 'Kesehatan Mental dan Mindfulness: Pentingnya dan Cara Praktis di Kehidupan Sehari-hari', 'https://image.mazhub.com/7ad4labr144WixsNbGbVE1fzRAxafn.webp', NULL, NULL),
(72, 'Mental Health and Mindfulness: Importance and Practical Tips for Daily Life', 'https://image.mazhub.com/uhR22s9jYkaWswxwcZTqVbCsAGIOih.webp', NULL, NULL),
(73, 'Investasi di Era Digital: Peluang Terbaru yang Wajib Kamu Tahu!', 'https://image.mazhub.com/tI3jS3PahyPZzwqdCuKVWrQNTr7uGz.webp', NULL, NULL),
(74, 'Digital Age Investing: Exploring the Latest Opportunities in Crypto, NFTs, and Online Platforms!', 'https://image.mazhub.com/zBrAEuBeB3RtKqjeyHFuylrQeB5P1D.webp', NULL, NULL),
(75, 'Raih Sukses di Era Digital: Panduan Lengkap untuk Memulai Bisnis Online bagi Gen-Z', 'https://image.mazhub.com/p20XNNeY3zZo1iEMYOVpT0tpes7Kry.webp', NULL, NULL),
(76, 'Success Tips for Starting a Business in the Digital Era: A Step-by-Step Guide for Gen Z Entrepreneurs', 'https://image.mazhub.com/ltmzK4yCkXZXyDx4rQdzV9lQuzf5ES.webp', NULL, NULL),
(77, 'Tren Pola Makan Sehat & Diet 2024: Ulasan & Resep Terkini untuk Sahabat Mazhub', 'https://image.mazhub.com/fPVKnxCGQaVKsFWSc10JH8JOhSsBDo.webp', NULL, NULL),
(78, '2024 Healthy Eating & Diet Trends: Latest Reviews, Recipes, and Benefits for Mazhub Friends', 'https://image.mazhub.com/iWSHmPr2U0NekWdc75j8QXFhvQead9.webp', NULL, NULL),
(79, 'Ngobrol Serius: Mengenal Gejala Depresi di Usia Muda', 'https://image.mazhub.com/fd8UQoOWdUj0dDVI7TA1KtJqEcWtxl.webp', NULL, NULL),
(80, 'Let\'s Talk: Recognizing Depression Symptoms in Young Adults', 'https://image.mazhub.com/sVEgGF0QSGGsq5Y7105Q7Xmu0EANOY.webp', NULL, NULL),
(81, 'Introvert vs Ekstrovert: Kenalli Karaktermu Sendiri', 'https://image.mazhub.com/n03dBUZG3R7VaSgUrqGE6cw26TcvyO.webp', NULL, NULL),
(82, 'Embracing Your Vibe: Understanding Introverts and Extroverts', 'https://image.mazhub.com/e1z1uCBr1TkQrLlwxDfTSzk3jQPxc8.webp', NULL, NULL),
(83, 'Lingkungan Menjadi Pengaruh Utama Kesehatan Mental : Yuk Kenali Dampak Lingkungan pada Kesehatan Mental Kita', 'https://image.mazhub.com/WcnHaMmvyEutiIoHoWVkOWmV7mZsCY.webp', NULL, NULL),
(84, 'Exploring the Impact of Environment on Our Mental Health', 'https://image.mazhub.com/XXPj7rEweXY0SXh2PJkdVZp4EZHjii.webp', NULL, NULL),
(85, 'Revolusi AI: Bagaimana Kecerdasan Buatan Mengubah Dunia Kerja', 'https://image.mazhub.com/ieusGQybJhPfkaY1udna5KRVhTY6fr.webp', NULL, NULL),
(86, 'The AI Revolution: How Artificial Intelligence is Transforming the Workplace', 'https://image.mazhub.com/p3vWNrNQUk60hC02Pb2CMEWzXYEkxN.webp', NULL, NULL),
(87, 'Teknologi 5G: Apa yang Bisa Kita Harapkan di Masa Depan', 'https://image.mazhub.com/hbt36rBQAk2WEoryrHDsf1b0zxp4md.webp', NULL, NULL),
(88, '5G Technology: What Can We Expect in the Future', 'https://image.mazhub.com/ujM8eBN9XR8msGhApsQwaqpcoLJJ7m.webp', NULL, NULL),
(89, 'Keamanan Siber di Era Digital: Tantangan dan Solusi', 'https://image.mazhub.com/QszzkTjejZ41Zo10bZMAb9biJINNHD.webp', NULL, NULL),
(90, 'Cybersecurity in the Digital Age: Challenges and Solutions', 'https://image.mazhub.com/p4dApkpxZmPeQdJE1mnANckmLLRZBE.webp', NULL, NULL),
(91, 'Kehangatan Emosi Ibu, Kebahagiaan Sang Bayi: Pengaruh Emosi Ibu Hamil terhadap Anak Dalam Kandungan', 'https://image.mazhub.com/pdmDq00WiNIkE0OuCdQRByPl5EOy49.webp', NULL, NULL),
(92, 'The Power of Maternal Emotions: How a Mother\'s Feelings Influence the Unborn Child', 'https://image.mazhub.com/Jg283BGB3BwEAP5JXtL3hFPydG48xF.webp', NULL, NULL),
(93, 'Living Green: Embracing the Eco-Friendly Lifestyle', 'https://image.mazhub.com/mKM31wOx0LAzE6ZY4cINZJSMmL4xz3.webp', NULL, NULL),
(94, 'Menuju Gaya Hidup Ramah Lingkungan: Menggali Konsep Eco-Friendly', 'https://image.mazhub.com/0dbqSbauHvfqaI7KArGNsEU0bPla1g.webp', NULL, NULL),
(95, 'Internet of Things (IoT): Inovasi yang Bakal Bikin Hidup Kamu Super Canggih!', 'https://image.mazhub.com/bkqkwXppwBHCEaIytEpx2ykKxFYm6P.webp', NULL, NULL),
(96, 'Internet of Things (IoT): Innovations That Will Make Your Life Super Cool!', 'https://image.mazhub.com/Hkjn7WaGA6ko2RHnmJXcve4KhrZJlf.webp', NULL, NULL),
(97, 'Rahasia Investasi Buat Pemula: Mulai dengan Modal Kecil dan Raup Keuntungan Besar!', 'https://image.mazhub.com/q1Hj5Qr4vGDEG7UPZLeDfPuSHbu4Ee.webp', NULL, NULL),
(98, 'The Ultimate Guide to Investing for Beginners: Start with Small Capital and Reap Big Profits!', 'https://image.mazhub.com/3k5NmSK6y7GfYQX9Ay8U7maiD7qeJJ.webp', NULL, NULL),
(99, 'Inilah Rahasia Membangun Bisnis Berkelanjutan yang Bakal Bikin Kamu Jadi Pengusaha Top!', 'https://image.mazhub.com/dxwLnCiFYFllv880iI9s71bgYeng4Q.webp', NULL, NULL),
(100, 'Mind-Blowing Life Lessons from Famous Philosophers You Need to Hear!', 'https://image.mazhub.com/RgJaounBpWqNugHb5UCp466OUkH99i.webp', NULL, NULL),
(101, 'Ucapan Filsuf Terkenal tentang Kehidupan yang Bikin Kamu Lebih Bijak!', 'https://image.mazhub.com/AqAYXviGJOvo28CQAmK0N2FKvdChq8.webp', NULL, NULL),
(102, 'Rahasia Hidup Bahagia dari Plato yang Akan Mengubah Hidupmu!', 'https://image.mazhub.com/TnLhX1tzLbNme3TTvT9D6VkGStNRIW.webp', NULL, NULL),
(103, 'Mind-Blowing Life Lessons from Plato That Will Change Your Life!', 'https://image.mazhub.com/YJBnXelTBPsyyEamqqVLOuBDNu0mTR.webp', NULL, NULL),
(104, 'Nongkrong & Kerja: Work from Cafe Ala Anak Muda Kekinian', 'https://image.mazhub.com/yc4nzAa3jvR5GaLne5atDbp2Vnkb70.webp', NULL, NULL),
(105, 'Chill & Work: The Hip Way of Working from Cafes!', 'https://image.mazhub.com/mVhvAQlDKcD6eVDZT8XgiQZz7l0LPH.webp', NULL, NULL),
(106, 'Skipping Rutin Setiap Hari: Selamat Tinggal Perut Buncit', 'https://image.mazhub.com/6H3cIeb3F9VuKhL09LY41Q0QN6mgS1.webp', NULL, NULL),
(107, 'Skipping to Health: The Trendy Benefits of a Daily 30-Minute Skipping Routine', 'https://image.mazhub.com/JIgQ6irOJlmBkR35otHD2KwNyvQ5oA.webp', NULL, NULL),
(108, 'Bikin Konten Keren: Panduan Copywriting Buat Anak Muda Zaman Now!', 'https://image.mazhub.com/63QQJ46MIMvWE649dzmVjVaNhsiOAl.webp', NULL, NULL),
(109, 'Crafting Cool Content: The Ultimate Guide to Copywriting for Modern Youth', 'https://image.mazhub.com/utfDJGGebDKWn9xz7rPbf2JYUHqNgM.webp', NULL, NULL),
(110, 'Ketahui Lebih Dekat Aktor Kekinian Byeon Woo Seok: Siapa Dia, Karirnya, dan Fakta Seru!', 'https://image.mazhub.com/BsPuZ9Ap8ltbBfThKReKGknqZ9QV1P.webp', NULL, NULL),
(111, 'Get to Know the Trendy Actor Byeon Woo Seok: Who is He, His Career, and Fun Facts!', 'https://image.mazhub.com/uXYOKHiibqH7eUc5Lh1bolvMfHzK7q.webp', NULL, NULL),
(112, 'Exploring the World of Top Actor Kim Soo Hyun: His Story, Talents, and Latest Feats!', 'https://image.mazhub.com/Wvr9TpuvZEuyKjCKsRb2RgUSukgK1n.webp', NULL, NULL),
(113, 'Who is Rafael Struick? The Guardian of Cool Style in the Football World!', 'https://image.mazhub.com/taiDfrQRXpOV8dsWlbPNpoNHo9dA5u.webp', NULL, NULL),
(114, 'Sempat Menghebohkan Dunia Sepak Bola Indonesia: Siapa Sih Rafael Struick? Penjaga Gaya Cool di Dunia Sepak Bola Berdarah Indonesia', 'https://image.mazhub.com/3nOVWnhNfMSaYUq7PBC69hvfWUhYQ6.webp', NULL, NULL),
(115, 'Yuk Kenalan dengan Negara Vatikan yang Disebut Sebagai Negara Paling Kecil di Dunia', 'https://image.mazhub.com/etMTJ1tkVHYAwhRzieosrb6y05AdzQ.webp', NULL, NULL),
(116, 'Let\'s Get to Know the Smallest Country in the World: Vatikan!', 'https://image.mazhub.com/SH6vPoqLh9EmXQfHFmBYrxwftOnHEK.webp', NULL, NULL),
(117, 'Mau Jadi Milyarder di Usia Muda? Ini Tips Jitu Buat Kamu!', 'https://image.mazhub.com/jPKQp91Ka8jxDPBbcNJi4rdsYCIPkQ.webp', NULL, NULL),
(118, 'Want to Be a Young Billionaire? Here Are the Ultimate Tips for You!', 'https://image.mazhub.com/Jv2ubBiUhgdd9R6HYtsDq5AkoHS0Wi.webp', NULL, NULL),
(119, 'Mata Uang dengan Nilai Terendah di Dunia? Yuk, Cari Tahu Bersama', 'https://image.mazhub.com/2fsCLuIH2As7EXSfQ0yL8NnzrBWAhy.webp', NULL, NULL),
(120, 'Prepare to Be Amazed: The Lowest Value Currencies in the World!', 'https://image.mazhub.com/YnlhnwYkqHcuKZFjGTG0Lni774H1dm.webp', NULL, NULL),
(121, 'Yuk Kenalan dengan Kim Hye Yoon, Bintang Drama Korea yang Lagi Naik Daun', 'https://image.mazhub.com/o9FW2cw9wpRqWEku8Zqwf7t6Yeg2Qt.webp', NULL, NULL),
(122, 'Get to Know Kim Hye Yoon, the Rising K-Drama Star', 'https://image.mazhub.com/j2IqOLrlgfVRmzgeIYZZOHMUxsgH98.webp', NULL, NULL),
(123, 'Panasnya Cuaca Semakin Menjadi: Yuk Sama-Sama Jaga Bumi Kita dari Global Warming!', 'https://image.mazhub.com/1wHtvAL1fX0bC8rTnKaJ9naTv6NVM0.webp', NULL, NULL),
(124, 'Save The Planet: Let\'s Combat Global Warming Together!', 'https://image.mazhub.com/4kQVo9B0WC0SHgA5vdjR1zm7bbE9HV.webp', NULL, NULL),
(125, 'Ini Dia Rahasia Orang Kaya yang Sebenarnya! 5 Kebiasaan Ini Bisa Bikin Kamu Tajir Melintir!', 'https://image.mazhub.com/sjIfWDYw0HrfK4mzFdnymXdTOM6edd.webp', NULL, NULL),
(126, 'Uncover the Secrets of the Wealthy! 5 Habits That Will Make You Rich Beyond Your Dreams!', 'https://image.mazhub.com/DpgA9G3tpS2HnCQgUmhaTL36RfFK84.webp', NULL, NULL),
(127, 'Bongkar Rahasia! Cara Gampang Dapat Jutaan Rupiah Cuma Pakai Hp !', 'https://image.mazhub.com/0BjBS9JzYPMvWaV1w6BeRT6pNZF1Ps.webp', NULL, NULL),
(128, 'Unveiled! Earn Millions Just From Your Phone with These Simple Tricks!', 'https://image.mazhub.com/bc9XjlAKds3us8JBQHG41y5xphPwVo.webp', NULL, NULL),
(129, 'Gagal Kaya? Coba 3 Tips Ini, Dijamin Bikin Kamu Sukses dan Tajir Melintir!', 'https://image.mazhub.com/BZtVOfZ4ziNhNjeH1U7sjM7lkAgM6h.webp', NULL, NULL),
(130, 'Struggling to Get Rich? Try These 3 Tips Guaranteed to Make You Successful!', 'https://image.mazhub.com/xqlaxirSwR2xSnpb7KPpB1BT26RIuj.webp', NULL, NULL),
(131, 'Want to Save Hundreds Every Month? Try These Smart Shopping Tips Now!', 'https://image.mazhub.com/cudywlipS7vbQ2rl4azrocEncfFHXo.webp', NULL, NULL),
(132, 'Ingin Hemat Ratusan Ribu Setiap Bulan? Coba Tips Belanja Cerdas Ini!', 'https://image.mazhub.com/e0j7tXkRhmGnkR7u0h7HTKtXrGM7st.webp', NULL, NULL),
(133, 'FOMO? Coba 5 Tips Ini untuk Memanfaatkan Media Sosial dengan Bijak dan Sehat!', 'https://image.mazhub.com/32HPRDa0l10HpoGsTq9ODXZ6ft8qIe.webp', NULL, NULL),
(134, 'FOMO? Check Out These 5 Tips to Use Social Media Wisely and Stay Healthy!', 'https://image.mazhub.com/IBH7xSOCRu9OqIJPG6ZNW0udo5SBXD.webp', NULL, NULL),
(135, 'Warning! 7 Dangerous Signs of Chronic Illnesses You Often Ignore!', 'https://image.mazhub.com/LBYcRr64fkUHo68Bp2SqMhYVuXNLtS.webp', NULL, NULL),
(136, 'Waspada! Ini 7 Tanda Bahaya Penyakit Kronis yang Sering Banget Diabaikan!', 'https://image.mazhub.com/KyqtMsqlP5qDp30uM6OYbHAj7z9RNq.webp', NULL, NULL),
(137, 'Stres? Coba 5 Tips Ini Dijamin Langsung Tenang!', 'https://image.mazhub.com/M4F483oeWQVUKcf2o0wk3zRPszYe5Z.webp', NULL, NULL),
(138, 'Stressed Out? Try These 5 Tips to Instantly Calm Down!', 'https://image.mazhub.com/2IId7pDKvOnNtfie41ephMg9sVH8ge.webp', NULL, NULL),
(139, 'Dompet Tipis? Gak Masalah! 5 Jurus Ampuh Hemat Belanja Bulanan di Era Harga Melambung', 'https://image.mazhub.com/MhdcLFGfUnpj5c2FfInvnmZlNTO01Z.webp', NULL, NULL),
(140, 'Wallet Woes? No Worries! 5 Epic Hacks to Save Big Bucks on Groceries Amidst Soaring Prices', 'https://image.mazhub.com/3kM8Alu7jzOSYvMEid5WxreHrWxKHl.webp', NULL, NULL),
(141, 'Rutin Jalan Kaki 45 Menit Setiap Hari dan Raih 1001 Manfaat Berikut untuk Tubuh', 'https://image.mazhub.com/vghiFlLwVSkzlTjd3QFnFK8P8Yvq80.webp', NULL, NULL),
(142, 'The Benefits of Walking 45 Minutes Every Day That You Should Know!', 'https://image.mazhub.com/rlbbIjuz6snrIlZMXogFIparwSUm3h.webp', NULL, NULL),
(143, 'Persiapan Wajib Sebelum Traveling ke Luar Negeri, Biar Liburan Makin Seru!', 'https://image.mazhub.com/xwCd9770fiEGNyqGSH4UIap7BoMrEv.webp', NULL, NULL),
(144, 'Essential Preparations Before Traveling Abroad for an Epic Adventure!', 'https://image.mazhub.com/6B0NGC53ULGdhm1YHSm4EQTK7Gbg6g.webp', NULL, NULL),
(145, 'Cara Gampang Dapetin Uang dari CapCut: Kreatif dan Cuan!', 'https://image.mazhub.com/PeeIQqpDXJr2MDF4DZPgIXTLAkGVST.webp', NULL, NULL),
(146, 'Easy Ways to Make Money with CapCut: Get Creative and Cash In!', 'https://image.mazhub.com/jGLrfjRjiNp82xm44oIOVM5U3yiKhT.webp', NULL, NULL),
(147, 'Website Freelance Terbaik Buat Cari Cuan di 2024!', 'https://image.mazhub.com/KXT80eKPGdoHUmuMQILi21aSZvsS2H.webp', NULL, NULL),
(148, 'Top Freelance Websites to Earn Money in 2024!', 'https://image.mazhub.com/TJhUnRKRagmYKObKQTexRcUGs397s8.webp', NULL, NULL),
(149, 'Wajah Kusam? Ikuti Cara Ampuh Ini Untuk Wajah Cerah Kembali', 'https://image.mazhub.com/m4RWsLVr9n2cs92dm1ZeXGMla5OVq9.webp', NULL, NULL),
(150, 'Effective Tips to Combat Dull Skin for Trendy Youngsters!', 'https://image.mazhub.com/8kTtjOX6SkhqW3dE4wfiIcj1DOPuft.webp', NULL, NULL),
(151, 'Unlock the Secrets to Online Business Success in 2024: The Ultimate Guide You Can\'t Miss!', 'https://image.mazhub.com/FzsqqiYFXf9lQaZbmYMQUZ32yhpz5a.webp', NULL, NULL),
(152, 'Rahasia Sukses Bisnis Online 2024: Panduan Lengkap yang Harus Kamu Tahu!', 'https://image.mazhub.com/oAyL4H17dIcck8XYc7iWyaDpdvq3gJ.webp', NULL, NULL),
(153, '10 Aplikasi Produktivitas Terbaik yang Bikin Hidup Milenial Makin Produktif!', 'https://image.mazhub.com/ae8tYe2JftQ2947YR0IMaYHDQjPmSE.webp', NULL, NULL),
(154, '10 Must-Have Productivity Apps for Millennials: Boost Your Efficiency Now!', 'https://image.mazhub.com/I8hu6eTDlUc1ccmFpYpxlftW6lZB4x.webp', NULL, NULL),
(155, 'Waspada Sering Minum Minuman Manis: Ini Fakta Mengejutkan Tentang Diabetes di Usia Muda', 'https://image.mazhub.com/1O0ZvOnXjssaOWc1fkMx696E0fMGqF.webp', NULL, NULL),
(156, 'Watch Out! Shocking Facts About Diabetes in Young Age', 'https://image.mazhub.com/giwxa7c8B7uyyT9CdymfokZ3wv0Hli.webp', NULL, NULL),
(157, 'Tips Jitu Alokasi Gaji buat Anak Muda, Sahabat Mazhub Wajib Tahu!', 'https://image.mazhub.com/5bWCX3Mx9FWmtlWwBQejkzSqHwz8YI.webp', NULL, NULL),
(158, 'Smart Salary Allocation Tips for Young Adults, Mazhub Friends Must Know!', 'https://image.mazhub.com/E3ZOZCB4qcf14Yc3cgF7UAgoVU4O8w.webp', NULL, NULL),
(159, 'GenZ Sebelum Terlambat Yuk Kenali Manfaat Asuransi Buat Anak Muda!', 'https://image.mazhub.com/561o4PmyBW0TBVvG2AtO1wmEPm6YaE.webp', NULL, NULL),
(160, 'Discover the Benefits of Insurance for Young Adults Must Know!', 'https://image.mazhub.com/ENYtjHNmwjtfA23R3EhH64rSi7BBkB.webp', NULL, NULL),
(161, 'Indonesia Lolos Piala Dunia! Yuk, Kenali Syarat Masuk Piala Dunia', 'https://image.mazhub.com/eCeK4OLu0EMU5fA3NpixK4HypvClCQ.webp', NULL, NULL),
(162, 'Indonesia Qualifies for the World Cup! Discover the Entry Requirements!', 'https://image.mazhub.com/M9fHbc7AWIbXvct8DXIoyyA6ym2fmN.webp', NULL, NULL),
(163, 'Naik Haji dan Hari Raya Qurban: Seru dan Bermakna, Sahabat Mazhub Wajib Tahu!', 'https://image.mazhub.com/bgEZyr4bkU0ugM7t3oYJt5M5j4dVmo.webp', NULL, NULL),
(164, 'Hajj and Eid al-Adha: Fun and Meaningful Moments Must Know!', 'https://image.mazhub.com/6TBhvPvjf96Wo9dXEEMGOvxpuu0tTZ.webp', NULL, NULL),
(165, 'Hati-Hati! Sering Pinjol: Pahami Risiko dan Tips Aman Yang Kamu Harus Tahu!', 'https://image.mazhub.com/AU9ezOEvGFDjnAQCHgO7nojI2RcN8s.webp', NULL, NULL),
(166, 'Online Loans: Understanding Risks and Safety Tips You Must Know!', 'https://image.mazhub.com/XtqkDKoIxGKH2KVFaHJuayZVNeAF4A.webp', NULL, NULL),
(167, 'Top Tips to Boost Your iPhone Battery Life: Stay Charged All Day!', 'https://image.mazhub.com/X196JJ0rDEviCZeajr6JNFx2Duz0Xk.webp', NULL, NULL),
(168, 'Tips Ampuh Menjaga Ketahanan Baterai iPhone: Tetap Nyala Sepanjang Hari!', 'https://image.mazhub.com/AVFqOb3mXiqCCfVt7D5dmbPnQL9afB.webp', NULL, NULL),
(169, 'Aplikasi Terbaik Buat Nyimpen Foto dan File di 2024: Anti Ribet!', 'https://image.mazhub.com/6M5RtG1rnwqVJrl3xMdIVCCtpEt4vu.webp', NULL, NULL),
(170, 'Best Apps to Store Photos and Files in 2024: Hassle-Free!', 'https://image.mazhub.com/NU03qjlZeUnb3LcRcLn3JoyN4tvxe8.webp', NULL, NULL),
(171, 'Tidak Memiliki Laut, Berikut Sejarah Keren Terbentuknya Negara Laos: Dari Kerajaan Hingga Republik', 'https://image.mazhub.com/HzeMIAl3LPVL0QzCktLJ63X08tAy5s.webp', NULL, NULL),
(172, 'The Cool History of How Laos Became a Nation: From Kingdom to Republic', 'https://image.mazhub.com/pjdv0wrqfbXPjnaIA0kXhH0hVHk0B0.webp', NULL, NULL),
(173, 'Cracking the TikTok Algorithm: How to Go Viral in 2024', 'https://image.mazhub.com/E3P275cz7zlnlIjpj9e3uQ5spvFuEs.webp', NULL, NULL),
(174, 'Mengulik Algoritma TikTok: Cara Jadi Viral di 2024!', 'https://image.mazhub.com/KigMFzvaMpbbmX7XYiPBs3n1SYlGUS.webp', NULL, NULL),
(175, 'Dampak Terlalu Sering Ngecas HP Pakai Power Bank: Mitos atau Fakta?', 'https://image.mazhub.com/dampak-terlalu-sering-ngecas-hp-pakai-power-bank-mitos-atau-fakta.webp', NULL, NULL),
(176, 'The Impact of Frequently Charging Your Phone with a Power Bank: Myth or Fact?', 'https://image.mazhub.com/the-impact-of-frequently-charging-your-phone-with-a-power-bank-myth-or-fact.webp', NULL, NULL),
(177, 'Jangan Cas HP Sampai 100% atau Hp Kamu Akan Rusak! Berikut Penjelasannya!', 'https://image.mazhub.com/jangan-cas-hp-sampai-100-atau-hp-kamu-akan-rusak-berikut-penjelasannya.webp', NULL, NULL),
(178, 'Should You Charge Your Phone to 100% or Not? Heres the Answer!', 'https://image.mazhub.com/should-you-charge-your-phone-to-100-or-not-heres-the-answer.webp', NULL, NULL),
(179, 'Why Double Cleansing is a Game-Changer for Your Skin!', 'https://image.mazhub.com/why-double-cleansing-is-a-game-changer-for-your-skin.webp', NULL, NULL),
(180, 'Kenapa Double Cleansing Itu Penting Banget untuk Kulitmu!', 'https://image.mazhub.com/kenapa-double-cleansing-itu-penting-banget-untuk-kulitmu.webp', NULL, NULL),
(181, 'Ini Dia! Rahasia Pengusaha Muda Mengubah Ide Sederhana Jadi Miliaran Rupiah!', 'https://image.mazhub.com/ini-dia-rahasia-pengusaha-muda-mengubah-ide-sederhana-jadi-miliaran-rupiah.webp', NULL, NULL),
(182, 'This is It! The Secret to Young Entrepreneurs Turning Simple Ideas into Millions!', 'https://image.mazhub.com/this-is-it-the-secret-to-young-entrepreneurs-turning-simple-ideas-into-millions.webp', NULL, NULL),
(183, 'Anda Tidak Akan Percaya! 10 Kebiasaan Sehari-Hari yang Bisa Membuat Penghasilan Anda Meroket!', 'https://image.mazhub.com/anda-tidak-akan-percaya-10-kebiasaan-sehari-hari-yang-bisa-membuat-penghasilan-anda-meroket.webp', NULL, NULL),
(184, 'You Won\'t Believe It! 10 Daily Habits That Can Double Your Income!', 'https://image.mazhub.com/you-wont-believe-it-10-daily-habits-that-can-double-your-income.webp', NULL, NULL),
(185, 'Wah, Gak Nyangka! Strategi Bisnis Ini Dilarang di 10 Negara, Tapi Bikin Jutaan Dollar!', 'https://image.mazhub.com/wah-gak-nyangka-strategi-bisnis-ini-dilarang-di-10-negara-tapi-bikin-jutaan-dollar.webp', NULL, NULL),
(186, 'Unbelievable! These Business Strategies Are Banned in 10 Countries but Make Millions!', 'https://image.mazhub.com/unbelievable-these-business-strategies-are-banned-in-10-countries-but-make-millions.webp', NULL, NULL),
(187, 'Rahasia Terbesar Para CEO: Trik Mudah untuk Mendapatkan Kenaikan Gaji dalam 30 Hari!', 'https://image.mazhub.com/rahasia-terbesar-para-ceo-trik-mudah-untuk-mendapatkan-kenaikan-gaji-dalam-30-hari.webp', NULL, NULL),
(188, 'CEO\'s Biggest Secret Revealed: Easy Tricks to Get a Salary Raise in 30 Days!', 'https://image.mazhub.com/ceos-biggest-secret-revealed-easy-tricks-to-get-a-salary-raise-in-30-days.webp', NULL, NULL),
(189, 'Wow! Cara Instan Menjadi Jutawan: 7 Bisnis Modal Kecil yang Pasti Sukses di Tahun Ini!', 'https://image.mazhub.com/wow-cara-instan-menjadi-jutawan-7-bisnis-modal-kecil-yang-pasti-sukses-di-tahun-ini.webp', NULL, NULL),
(190, 'Wow! Instantly Become a Millionaire: 7 Small Capital Businesses Guaranteed to Succeed This Year!', 'https://image.mazhub.com/wow-instantly-become-a-millionaire-7-small-capital-businesses-guaranteed-to-succeed-this-year.webp', NULL, NULL),
(191, 'Bye-bye Bulu di Pakaian! Yuk, Atasi Masalah Ini dengan Gampang', 'https://image.mazhub.com/bye-bye-bulu-di-pakaian-yuk-atasi-masalah-ini-dengan-gampang.webp', NULL, NULL),
(192, 'Say Goodbye to Lint on Clothes! Easy Ways to Deal with It', 'https://image.mazhub.com/say-goodbye-to-lint-on-clothes-easy-ways-to-deal-with-it.webp', NULL, NULL),
(193, 'Chill Out, Bro! Tips Kekinian Mengontrol Emosi dengan Mudah', 'https://image.mazhub.com/chill-out-bro-tips-kekinian-mengontrol-emosi-dengan-mudah.webp', NULL, NULL),
(194, 'Chill Out, Bro! Trendy Tips to Control Your Emotions Easily', 'https://image.mazhub.com/chill-out-bro-trendy-tips-to-control-your-emotions-easily.webp', NULL, NULL),
(195, 'Cara Ampuh Mengatasi Burnout di Tempat Kerja: Tips Keren Biar Tetap Semangat!', 'https://image.mazhub.com/cara-ampuh-mengatasi-burnout-di-tempat-kerja-tips-keren-biar-tetap-semangat.webp', NULL, NULL),
(196, 'Rahasia Investasi yang Bankir Sembunyikan! Kamu Harus Tahu Ini Sekarang!', 'https://image.mazhub.com/rahasia-investasi-yang-bankir-sembunyikan-kamu-harus-tahu-ini-sekarang.webp', NULL, NULL),
(197, 'Effective Ways to Overcome Burnout at Work: Stay Motivated and Energized!', 'https://image.mazhub.com/effective-ways-to-overcome-burnout-at-work-stay-motivated-and-energized.webp', NULL, NULL),
(198, '7 Tanda Kamu Harus Resign dari Tempat Kerja yang Toxic: Saatnya Move On!', 'https://image.mazhub.com/7-tanda-kamu-harus-resign-dari-tempat-kerja-yang-toxic-saatnya-move-on.webp', NULL, NULL),
(199, '7 Signs You Need to Resign from a Toxic Workplace: Time to Move On!', 'https://image.mazhub.com/7-signs-you-need-to-resign-from-a-toxic-workplace-time-to-move-on.webp', NULL, NULL),
(200, 'Apa Itu Switch Career? Ganti Haluan Karir dengan Langkah Pasti!', 'https://image.mazhub.com/apa-itu-switch-career-ganti-haluan-karir-dengan-langkah-pasti.webp', NULL, NULL),
(201, 'What is a Career Switch? Changing Your Career Path with Confidence!', 'https://image.mazhub.com/what-is-a-career-switch-changing-your-career-path-with-confidence.webp', NULL, NULL),
(202, 'Bankers Don\'t Want You to Know These Investment Secrets! Discover Them Now!', 'https://image.mazhub.com/bankers-dont-want-you-to-know-these-investment-secrets-discover-them-now.webp', NULL, NULL),
(203, 'Karir-Karir yang Bakal Tetap Hits dan Dibutuhkan 10 Tahun ke Depan!', 'https://image.mazhub.com/karir-karir-yang-bakal-tetap-hits-dan-dibutuhkan-10-tahun-ke-depan.webp', NULL, NULL),
(204, 'Careers That Will Stay in Demand for the Next 10 Years!', 'https://image.mazhub.com/careers-that-will-stay-in-demand-for-the-next-10-years.webp', NULL, NULL),
(205, 'Jadi Affiliator: Kerja Sambil Rebahan, Duit Tetap Ngucur!', 'https://image.mazhub.com/jadi-affiliator-kerja-sambil-rebahan-duit-tetap-ngucur.webp', NULL, NULL),
(206, 'Becoming an Affiliate Marketer: Earn Money While Chilling at Home!', 'https://image.mazhub.com/becoming-an-affiliate-marketer-earn-money-while-chilling-at-home.webp', NULL, NULL),
(207, 'Startup Ini Mendadak Kaya Raya dalam Semalam - Begini Caranya dan Anda Bisa Juga!', 'https://image.mazhub.com/startup-ini-mendadak-kaya-raya-dalam-semalam-begini-caranya-dan-anda-bisa-juga.webp', NULL, NULL),
(208, 'This Startup Made Millions Overnight  Here\'s How You Can Too!', 'https://image.mazhub.com/this-startup-made-millions-overnight-heres-how-you-can-too.webp', NULL, NULL),
(209, 'Inilah Cara Gila Menghemat Uang yang Tidak Pernah Anda Pikirkan Sebelumnya! Bisa Juga!', 'https://image.mazhub.com/inilah-cara-gila-menghemat-uang-yang-tidak-pernah-anda-pikirkan-sebelumnya-bisa-juga.webp', NULL, NULL),
(210, 'This Crazy Way to Save Money That You\'ve Never Thought Of! It Works!', 'https://image.mazhub.com/this-crazy-way-to-save-money-that-youve-never-thought-of-it-works.webp', NULL, NULL),
(211, 'Tips Mengatur Waktu dengan Keren Buat Anak Muda!', 'https://image.mazhub.com/tips-mengatur-waktu-dengan-keren-buat-anak-muda.webp', NULL, NULL),
(212, 'Cool Tips for Time Management: Mastering Your Schedule Like a Pro!', 'https://image.mazhub.com/cool-tips-for-time-management-mastering-your-schedule-like-a-pro.webp', NULL, NULL),
(213, 'Jangan Ragu dan Bimbang, Go for It! Tips Memulai Bisnis Tanpa Ragu dan Penuh Keyakinan', 'https://image.mazhub.com/jangan-ragu-dan-bimbang-go-for-it-tips-memulai-bisnis-tanpa-ragu-dan-penuh-keyakinan.webp', NULL, NULL),
(214, 'Go for It! Tips to Start Your Business Without Hesitation and with Confidence', 'https://image.mazhub.com/go-for-it-tips-to-start-your-business-without-hesitation-and-with-confidence.webp', NULL, NULL),
(215, 'Demystifying Evergreen Ship: What You Need to Know', 'https://image.mazhub.com/demystifying-evergreen-ship-what-you-need-to-know.webp', NULL, NULL),
(216, 'Mengenal Kapal Evergreen: Fenomena yang Sedang Hangat Dibicarakan', 'https://image.mazhub.com/mengenal-kapal-evergreen-fenomena-yang-sedang-hangat-dibicarakan.webp', NULL, NULL),
(217, 'Kisah Inspiratif Orang Terkaya di Dunia yang Bikin Tergugu', 'https://image.mazhub.com/kisah-inspiratif-orang-terkaya-di-dunia-yang-bikin-tergugu.webp', NULL, NULL),
(218, 'Inspiring Stories of the World\'s Richest People That Will Amaze You', 'https://image.mazhub.com/inspiring-stories-of-the-worlds-richest-people-that-will-amaze-you.webp', NULL, NULL),
(219, 'Tips Keren untuk Memperkuat Kemampuan Ingatanmu!', 'https://image.mazhub.com/tips-keren-untuk-memperkuat-kemampuan-ingatanmu.webp', NULL, NULL),
(220, 'Boost Your Memory Power with These Cool Tips!', 'https://image.mazhub.com/boost-your-memory-power-with-these-cool-tips.webp', NULL, NULL),
(221, 'Bahaya Telat Haid yang Perlu Diketahui Anak Muda Kekinian', 'https://image.mazhub.com/bahaya-telat-haid-yang-perlu-diketahui-anak-muda-kekinian.webp', NULL, NULL),
(222, 'The Dangers of Late Menstruation: Understanding Its Impact on Health', 'https://image.mazhub.com/the-dangers-of-late-menstruation-understanding-its-impact-on-health.webp', NULL, NULL),
(223, 'Panduan Utama untuk Strategi Mendapatkan Keuntungan', 'https://image.mazhub.com/panduan-utama-untuk-strategi-mendapatkan-keuntungan.webp', NULL, NULL),
(224, 'ExploreProfit: Your Ultimate Guide to Profit-Making Strategies', 'https://image.mazhub.com/exploreprofit-your-ultimate-guide-to-profit-making-strategies.webp', NULL, NULL),
(225, 'Memahami Buta Warna Parsial: Panduan Lengkap dan Penjelasan', 'https://image.mazhub.com/memahami-buta-warna-parsial-panduan-lengkap-dan-penjelasan.webp', NULL, NULL),
(226, 'Understanding Partial Color Blindness: Comprehensive Guide and Explanation', 'https://image.mazhub.com/understanding-partial-color-blindness-comprehensive-guide-and-explanation.webp', NULL, NULL),
(227, 'Olahraga untuk Meningkatkan Tinggi Badan: Panduan dan Tips Terbaik', 'https://image.mazhub.com/olahraga-untuk-meningkatkan-tinggi-badan-panduan-dan-tips-terbaik.webp', NULL, NULL),
(228, 'Exercises to Increase Height: Comprehensive Guide and Best Practices', 'https://image.mazhub.com/exercises-to-increase-height-comprehensive-guide-and-best-practices.webp', NULL, NULL),
(229, 'Panduan Gaji Pilot: Memahami Penghasilan dan Faktor yang Mempengaruhi Bayaran', 'https://image.mazhub.com/panduan-gaji-pilot-memahami-penghasilan-dan-faktor-yang-mempengaruhi-bayaran.webp', NULL, NULL),
(230, 'The Pilot Salary Guide: Understanding Earnings and Factors Influencing Pay', 'https://image.mazhub.com/the-pilot-salary-guide-understanding-earnings-and-factors-influencing-pay.webp', NULL, NULL),
(231, 'Manfaat Mengkonsumsi Keju untuk Kesehatan Tubuh Anda', 'https://image.mazhub.com/manfaat-mengkonsumsi-keju-untuk-kesehatan-tubuh-anda.webp', NULL, NULL),
(232, 'The Health Benefits of Consuming Cheese', 'https://image.mazhub.com/the-health-benefits-of-consuming-cheese.webp', NULL, NULL),
(233, 'Menghadapi Sindrom Peter Pan: Tantangan dan Jalan Keluar', 'https://image.mazhub.com/menghadapi-sindrom-peter-pan-tantangan-dan-jalan-keluar.webp', NULL, NULL),
(234, 'Confronting the Peter Pan Syndrome: Challenges and Solutions', 'https://image.mazhub.com/confronting-the-peter-pan-syndrome-challenges-and-solutions.webp', NULL, NULL),
(235, 'Morning Rituals: The Korean Love Affair with Americano', 'https://image.mazhub.com/morning-rituals-the-korean-love-affair-with-americano.webp', NULL, NULL),
(236, 'Kebiasaan Minum Americano Setiap Pagi: Rahasia Kesehatan dan Produktivitas Orang Korea', 'https://image.mazhub.com/kebiasaan-minum-americano-setiap-pagi-rahasia-kesehatan-dan-produktivitas-orang-korea.webp', NULL, NULL),
(237, 'Mengungkap Misteri Sindrom Stockholm: Saat Korban Jatuh Cinta pada Pelaku', 'https://image.mazhub.com/mengungkap-misteri-sindrom-stockholm-saat-korban-jatuh-cinta-pada-pelaku.webp', NULL, NULL),
(238, 'Understanding Stockholm Syndrome: Psychological Bonds in Captivity', 'https://image.mazhub.com/understanding-stockholm-syndrome-psychological-bonds-in-captivity.webp', NULL, NULL),
(239, 'Pentingnya Minum Air Putih Setiap Hari: Berapa Banyak yang Harus Anda Minum?', 'https://image.mazhub.com/pentingnya-minum-air-putih-setiap-hari-berapa-banyak-yang-harus-anda-minum.webp', NULL, NULL),
(240, 'The Importance of Daily Water Intake: How Much Water Should You Drink Each Day?', 'https://image.mazhub.com/the-importance-of-daily-water-intake-how-much-water-should-you-drink-each-day.webp', NULL, NULL),
(241, 'Durasi Normal Buang Air Kecil dalam Sehari: Berapa Kali Seharusnya Anda Buang Air?', 'https://image.mazhub.com/durasi-normal-buang-air-kecil-dalam-sehari-berapa-kali-seharusnya-anda-buang-air.webp', NULL, NULL),
(242, 'Normal Urination Frequency: How Often Should You Pee Each Day?', 'https://image.mazhub.com/normal-urination-frequency-how-often-should-you-pee-each-day.webp', NULL, NULL),
(243, 'Mengatasi Asam Lambung: Langkah Pertama yang Perlu Anda Ambil', 'https://image.mazhub.com/mengatasi-asam-lambung-langkah-pertama-yang-perlu-anda-ambil.webp', NULL, NULL),
(244, 'First Steps to Manage Acid Reflux: Effective Strategies', 'https://image.mazhub.com/first-steps-to-manage-acid-reflux-effective-strategies.webp', NULL, NULL),
(245, 'Analisa TradingView dengan Indikator MACD, RSI, dan Bollinger Bands untuk Semua Trading Pair', 'https://image.mazhub.com/analisa-tradingview-dengan-indikator-macd-rsi-dan-bollinger-bands-untuk-semua-trading-pair.webp', NULL, NULL),
(246, 'The Benefits of Dry Shampoo: A Convenient Solution for Clean Hair Without Water', 'https://image.mazhub.com/the-benefits-of-dry-shampoo-a-convenient-solution-for-clean-hair-without-water.webp', NULL, NULL),
(247, 'Manfaat Dry Shampoo: Solusi Praktis untuk Rambut Bersih Tanpa Air', 'https://image.mazhub.com/manfaat-dry-shampoo-solusi-praktis-untuk-rambut-bersih-tanpa-air.webp', NULL, NULL),
(248, 'Angina Pectoris: Understanding the Condition, Symptoms, and Prevention', 'https://image.mazhub.com/angina-pectoris-understanding-the-condition-symptoms-and-prevention.webp', NULL, NULL),
(249, 'Angin Duduk: Penyakit yang Perlu Diwaspadai dan Tindakan Pencegahannya', 'https://image.mazhub.com/angin-duduk-penyakit-yang-perlu-diwaspadai-dan-tindakan-pencegahannya.webp', NULL, NULL),
(250, 'Haji Furodha: Complete Guide, Importance, and Benefits in Islam', 'https://image.mazhub.com/haji-furodha-complete-guide-importance-and-benefits-in-islam.webp', NULL, NULL),
(251, 'Haji Furodha: Panduan Lengkap, Pentingnya, dan Manfaatnya dalam Islam', 'https://image.mazhub.com/haji-furodha-panduan-lengkap-pentingnya-dan-manfaatnya-dalam-islam.webp', NULL, NULL),
(252, 'Cara Menghasilkan Uang dari Rumah dengan Mudah', 'https://image.mazhub.com/cara-menghasilkan-uang-dari-rumah-dengan-mudah.webp', NULL, NULL),
(253, 'Rahasia Tersembunyi: 10 Cara Mudah Meningkatkan Kesehatan yang Tidak Pernah Anda Dengar!', 'https://image.mazhub.com/rahasia-tersembunyi-10-cara-mudah-meningkatkan-kesehatan-yang-tidak-pernah-anda-dengar.webp', NULL, NULL),
(254, 'Rahasia Terbesar Teknologi AI yang Gak Pernah Diungkap!', 'https://image.mazhub.com/rahasia-terbesar-teknologi-ai-yang-gak-pernah-diungkap.webp', NULL, NULL),
(255, 'Cara Hack Smartphone dalam 5 Menit – Gampang Banget, Bikin Kaget!', 'https://image.mazhub.com/cara-hack-smartphone-dalam-5-menit-gampang-banget-bikin-kaget.webp', NULL, NULL),
(256, '10 Gadget Teknologi yang Bakal Mengubah Hidupmu di 2024 – Siap-Siap Terpukau!', 'https://image.mazhub.com/10-gadget-teknologi-yang-bakal-mengubah-hidupmu-di-2024-siap-siap-terpukau.webp', NULL, NULL),
(257, 'Mengapa Semua Orang Beralih ke Teknologi Blockchain? Inilah Alasan Keren di Baliknya!', 'https://image.mazhub.com/mengapa-semua-orang-beralih-ke-teknologi-blockchain-inilah-alasan-keren-di-baliknya.webp', NULL, NULL),
(258, '5 Fakta Tersembunyi tentang Teknologi 5G yang Belum Banyak Orang Tahu, Nomor 3 pasti kamu butuhkan! – Jangan Sampai Ketinggalan!', 'https://image.mazhub.com/5-fakta-tersembunyi-tentang-teknologi-5g-yang-belum-banyak-orang-tahu-nomor-3-pasti-kamu-butuhkan-jangan-sampai-ketinggalan.webp', NULL, NULL),
(259, '10 Tips Jitu Bikin Anak Pintar Bicara! Nomor 4 Paling Gampang!', 'https://image.mazhub.com/10-tips-jitu-bikin-anak-pintar-bicara-nomor-4-paling-gampang.webp', NULL, NULL),
(260, '7 Trik Mengatasi Anak Rewel dengan Cepat! Nomor 3 Pasti Langsung Tenang', 'https://image.mazhub.com/7-trik-mengatasi-anak-rewel-dengan-cepat-nomor-3-pasti-langsung-tenang.webp', NULL, NULL),
(261, '5 Langkah Mudah Membuat Anak Tidur Nyenyak! Nomor 2 Pasti Bikin Kamu Kaget', 'https://image.mazhub.com/5-langkah-mudah-membuat-anak-tidur-nyenyak-nomor-2-pasti-bikin-kamu-kaget.webp', NULL, NULL),
(262, '12 Tips Sukses Mengatur Jadwal Makan Anak! Nomor 8 Bakal Bikin Kamu Semangat', 'https://image.mazhub.com/12-tips-sukses-mengatur-jadwal-makan-anak-nomor-8-bakal-bikin-kamu-semangat.webp', NULL, NULL),
(263, '8 Cara Kreatif Mengajarkan Anak Membaca! Nomor 6 Bakal Bikin Kamu Terkejut!', 'https://image.mazhub.com/8-cara-kreatif-mengajarkan-anak-membaca-nomor-6-bakal-bikin-kamu-terkejut.webp', NULL, NULL),
(264, '10 Rahasia Ampuh Mengatasi Anak Malas Bersekolah! Nomor 5 Bakal Bikin Kamu Terinspirasi!', 'https://image.mazhub.com/10-rahasia-ampuh-mengatasi-anak-malas-bersekolah-nomor-5-bakal-bikin-kamu-terinspirasi.webp', NULL, NULL),
(265, '10 Cara Mengelola Keuangan Pribadi Agar Selalu Stabil', 'https://image.mazhub.com/10-cara-mengelola-keuangan-pribadi-agar-selalu-stabil.webp', NULL, NULL),
(266, 'Sinopsis Film Reclaim: Petualangan Pasutri dalam Kisah Adopsi yang Menegangkan', 'https://image.mazhub.com/sinopsis-film-reclaim-petualangan-pasutri-dalam-kisah-adopsi-yang-menegangkan.webp', NULL, NULL),
(267, 'Sinopsis Film \"Reclaim\" (2014): Perjuangan Pasangan Amerika Menyelamatkan Putri Angkat yang Hilang di Puerto Rico', 'https://image.mazhub.com/sinopsis-film-reclaim-2014-perjuangan-pasangan-amerika-menyelamatkan-putri-angkat-yang-hilang-di-puerto-rico.webp', NULL, NULL),
(268, 'Virus Oropouche: Meningkatnya Kasus Kematian di Brasil dan Cara Pencegahannya', 'https://image.mazhub.com/virus-oropouche-meningkatnya-kasus-kematian-di-brasil-dan-cara-pencegahannya.webp', NULL, NULL),
(269, 'Apa Itu Virus Oropouche? Kenali Efek, Penularan, dan Bahayanya', 'https://image.mazhub.com/apa-itu-virus-oropouche-kenali-efek-penularan-dan-bahayanya.webp', NULL, NULL),
(270, '5 Investasi Paling Menguntungkan di Tahun Ini, Nomor 3 Bikin Kamu Kaget!', 'https://image.mazhub.com/5-investasi-paling-menguntungkan-di-tahun-ini-nomor-3-bikin-kamu-kaget.webp', NULL, NULL),
(271, '7 Rahasia Mengelola Waktu untuk Produktivitas Maksimal', 'https://image.mazhub.com/7-rahasia-mengelola-waktu-untuk-produktivitas-maksimal.webp', NULL, NULL),
(272, 'asdasdasdasd', 'https://image.mazhub.com/asdasdasdasd.webp', NULL, NULL),
(521, '10 Rahasia Sukses Mengelola Keuangan Pribadi yang Jarang Diketahui! Nomor 4 Pasti Mengejutkan!', 'https://image.mazhub.com/10-rahasia-sukses-mengelola-keuangan-pribadi-yang-jarang-diketahui-nomor-4-pasti-mengejutkan.webp', '2024-07-30 15:41:04', '2024-07-30 15:41:04'),
(522, '10 Rahasia Sukses Mengelola Keuangan Pribadi yang Jarang Diketahui! Nomor 4 Pasti Mengejutkan!', 'https://image.mazhub.com/10-rahasia-sukses-mengelola-keuangan-pribadi-yang-jarang-diketahui-nomor-4-pasti-mengejutkan.webp', '2024-07-30 15:42:16', '2024-07-30 15:42:16'),
(523, '10 Rahasia Sukses Mengelola Keuangan Pribadi yang Jarang Diketahui! Nomor 4 Pasti Mengejutkan!', 'https://image.mazhub.com/10-rahasia-sukses-mengelola-keuangan-pribadi-yang-jarang-diketahui-nomor-4-pasti-mengejutkan.webp', '2024-07-30 15:45:22', '2024-07-30 15:45:22'),
(524, 'Investor bingung dengan grafik saham', 'https://image.mazhub.com/investor-bingung-dengan-grafik-saham.webp', '2024-07-31 02:37:27', '2024-07-31 02:37:27'),
(525, 'perbandingan antara investasi aman dan investasi berisiko tinggi', 'https://image.mazhub.com/perbandingan-antara-investasi-aman-dan-investasi-berisiko-tinggi.webp', '2024-07-31 02:38:53', '2024-07-31 02:38:53'),
(526, 'buku tentang investasi', 'https://image.mazhub.com/buku-tentang-investasi.webp', '2024-07-31 02:40:05', '2024-07-31 02:40:05'),
(527, 'Poster film Fly Me to The Moon dengan ilustrasi animasi luar angkasa', 'https://image.mazhub.com/poster-film-fly-me-to-the-moon-dengan-ilustrasi-animasi-luar-angkasa.webp', '2024-07-31 03:08:54', '2024-07-31 03:08:54'),
(528, 'judi online dapat menyebabkan kecanduan', 'https://image.mazhub.com/judi-online-dapat-menyebabkan-kecanduan.webp', '2024-08-01 03:36:10', '2024-08-01 03:36:10'),
(529, 'Tanda-tanda Seseorang Terkena Candu Judol', 'https://image.mazhub.com/tanda-tanda-seseorang-terkena-candu-judol.webp', '2024-08-01 03:37:10', '2024-08-01 03:37:10'),
(530, 'Perfeksionisme menghambat produktivitas', 'https://image.mazhub.com/perfeksionisme-menghambat-produktivitas.webp', '2024-08-03 17:37:34', '2024-08-03 17:37:34'),
(531, 'lelah bekerja', 'https://image.mazhub.com/lelah-bekerja.webp', '2024-08-03 17:39:07', '2024-08-03 17:39:07'),
(532, 'Signal Trading DOGE USD Hari Ini: Waktunya Buy atau Tunggu?', 'https://image.ic-syekhburhanuddin.com/signal-trading-doge-usd-hari-ini-waktunya-buy-atau-tunggu.webp', '2025-03-06 04:15:08', '2025-03-06 04:15:08'),
(533, 'Dogecoin ,CryptoTrading ,SignalTrading', 'https://image.ic-syekhburhanuddin.com/dogecoin-cryptotrading-signaltrading.webp', '2025-03-06 04:15:42', '2025-03-06 04:15:42'),
(534, 'DOGE/USD, Signal Trading DOGE, Analisis DOGE Hari Ini', 'https://image.ic-syekhburhanuddin.com/dogeusd-signal-trading-doge-analisis-doge-hari-ini.webp', '2025-03-06 04:28:17', '2025-03-06 04:28:17');

-- --------------------------------------------------------

--
-- Table structure for table `kebijakans`
--

CREATE TABLE `kebijakans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` text NOT NULL,
  `language` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kebijakans`
--

INSERT INTO `kebijakans` (`id`, `content`, `language`, `created_at`, `updated_at`) VALUES
(1, '<p>&nbsp;&nbsp;</p>', 'en', NULL, '2025-03-04 04:59:18'),
(2, '<h2 data-start=\"80\" data-end=\"110\"><strong data-start=\"83\" data-end=\"108\">Kebijakan ic-syekhburhanuddin</strong></h2>\r\n<h3 data-start=\"112\" data-end=\"142\"><strong data-start=\"116\" data-end=\"140\">1. Kebijakan Privasi</strong></h3>\r\n<p data-start=\"143\" data-end=\"402\">Kami menghargai privasi pengguna dan berkomitmen untuk melindungi data pribadi Anda. Informasi yang kami kumpulkan, seperti email atau data lainnya, hanya digunakan untuk keperluan peningkatan layanan dan tidak akan dibagikan kepada pihak ketiga tanpa izin.</p>\r\n<h3 data-start=\"404\" data-end=\"433\"><strong data-start=\"408\" data-end=\"431\">2. Kebijakan Konten</strong></h3>\r\n<ul data-start=\"434\" data-end=\"831\">\r\n<li data-start=\"434\" data-end=\"558\">Semua artikel, analisis, dan materi edukasi di <strong data-start=\"483\" data-end=\"498\">ic-syekhburhanuddin</strong> disusun berdasarkan informasi yang akurat dan terpercaya.</li>\r\n<li data-start=\"559\" data-end=\"745\">Kami tidak bertanggung jawab atas keputusan trading yang diambil berdasarkan informasi di situs ini. Trader diharapkan melakukan riset tambahan sebelum mengambil keputusan investasi.</li>\r\n<li data-start=\"746\" data-end=\"831\">Dilarang menyalin atau mendistribusikan konten tanpa izin resmi dari ic-syekhburhanuddin.</li>\r\n</ul>\r\n<h3 data-start=\"833\" data-end=\"862\"><strong data-start=\"837\" data-end=\"860\">3. Kebijakan Cookie</strong></h3>\r\n<p data-start=\"863\" data-end=\"1020\">Kami menggunakan cookie untuk meningkatkan pengalaman pengguna. Dengan mengakses situs kami, Anda menyetujui penggunaan cookie sesuai dengan kebijakan ini.</p>\r\n<h3 data-start=\"1022\" data-end=\"1061\"><strong data-start=\"1026\" data-end=\"1059\">4. Kebijakan Iklan &amp; Afiliasi</strong></h3>\r\n<p data-start=\"1062\" data-end=\"1202\">ic-syekhburhanuddin dapat menampilkan iklan atau tautan afiliasi. Kami tidak bertanggung jawab atas konten atau kebijakan dari situs pihak ketiga.</p>\r\n<h3 data-start=\"1204\" data-end=\"1236\"><strong data-start=\"1208\" data-end=\"1234\">5. Perubahan Kebijakan</strong></h3>\r\n<p data-start=\"1237\" data-end=\"1387\">ic-syekhburhanuddin berhak mengubah kebijakan ini kapan saja tanpa pemberitahuan sebelumnya. Pengguna disarankan untuk memeriksa halaman ini secara berkala.</p>\r\n<p data-start=\"1389\" data-end=\"1483\">Jika Anda memiliki pertanyaan lebih lanjut, silakan hubungi kami melalui halaman <strong data-start=\"1470\" data-end=\"1480\">Kontak</strong>.</p>', 'id', '2024-06-02 03:19:24', '2025-03-04 04:59:54');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `lang` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `default` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `name`, `lang`, `slug`, `default`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Indonesian', 'id', 'id', 1, 1, '2024-05-02 08:05:27', '2024-06-05 13:42:25'),
(3, 'English', 'en', 'en', 0, 0, '2023-05-27 00:54:48', '2024-08-06 18:24:16');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_05_21_092521_create_admins_table', 2),
(7, '2023_05_25_093155_create_languages_table', 3),
(8, '2023_05_27_091159_create_categories_table', 4),
(9, '2023_05_28_040844_create_news_table', 5),
(10, '2023_05_28_093323_create_tags_table', 6),
(11, '2023_05_28_093523_create_news_tags_table', 6),
(12, '2023_05_31_091856_create_comments_table', 7),
(13, '2023_06_03_045954_create_home_section_settings_table', 8),
(15, '2023_06_04_032108_create_social_counts_table', 9),
(18, '2023_06_05_074833_create_ads_table', 10),
(19, '2023_06_06_061800_create_subscribers_table', 11),
(20, '2023_06_06_102406_create_social_links_table', 12),
(21, '2023_06_07_043229_create_footer_infos_table', 13),
(22, '2023_06_07_063900_create_footer_grid_ones_table', 14),
(23, '2023_06_07_092407_create_footer_grid_twos_table', 15),
(24, '2023_06_07_102857_create_footer_grid_threes_table', 16),
(25, '2023_06_08_035931_create_footer_titles_table', 17),
(27, '2023_06_08_053338_create_abouts_table', 18),
(28, '2023_06_08_070724_create_contacts_table', 19),
(30, '2023_06_08_112641_create_recived_mails_table', 20),
(31, '2023_06_10_105757_create_settings_table', 21),
(32, '2023_06_11_110729_create_permission_tables', 22),
(33, '2023_06_08_053338_create_kebijakan_table', 23),
(34, '2024_07_30_073706_create_images_table', 24);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(3, 'App\\Models\\Admin', 1),
(3, 'App\\Models\\Admin', 8),
(6, 'App\\Models\\Admin', 6);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `language` varchar(255) NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `auther_id` bigint(20) UNSIGNED NOT NULL,
  `image` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` text NOT NULL,
  `content` text NOT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `is_breaking_news` tinyint(1) NOT NULL DEFAULT 0,
  `show_at_slider` tinyint(1) NOT NULL DEFAULT 0,
  `show_at_popular` tinyint(1) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `is_approved` tinyint(1) DEFAULT 0,
  `views` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `meta_keyword` text DEFAULT NULL,
  `scheduled_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `language`, `category_id`, `auther_id`, `image`, `title`, `slug`, `content`, `meta_title`, `meta_description`, `is_breaking_news`, `show_at_slider`, `show_at_popular`, `status`, `is_approved`, `views`, `created_at`, `updated_at`, `meta_keyword`, `scheduled_at`) VALUES
(360, 'id', 60, 1, 'uploads/wall-street-bangkit-lagi-kebijakan-trump-bikin-saham-melonjak-apa-dampaknya-buat-investor.webp', 'Wall Street Bangkit Lagi! Kebijakan Trump Bikin Saham Melonjak, Apa Dampaknya Buat Investor?', 'wall-street-bangkit-lagi-kebijakan-trump-bikin-saham-melonjak-apa-dampaknya-buat-investor', '<h3>Wall Street Kembali Menguat, Kebijakan Trump Bawa Angin Segar</h3>\r\n<p>Pasar saham Wall Street di Amerika Serikat (AS) kembali menunjukkan sinyal positif pada perdagangan Rabu (5/3). Setelah mengalami kerugian beruntun, indeks utama melonjak berkat kebijakan baru dari Presiden Donald Trump yang memicu optimisme investor. Kebijakan pengecualian tarif untuk produsen mobil diyakini bisa menjadi pintu masuk bagi kebijakan serupa di sektor lain.</p>\r\n<h3>Saham-saham Besar Melonjak, Investor Bernapas Lega</h3>\r\n<p>Indeks Dow Jones naik 485,60 poin (1,14%) ke level 43.006,59, setelah sebelumnya anjlok lebih dari 1.300 poin dalam dua hari. S&amp;P 500 juga menguat 1,12% ke 5.842,63, sementara Nasdaq Composite melesat 1,46% ke 18.552,73.</p>\r\n<p>Kenaikan ini dipicu oleh keputusan Gedung Putih untuk menunda tarif impor selama satu bulan bagi produsen mobil yang mematuhi Perjanjian AS-Meksiko-Kanada. Saham-saham otomotif seperti Stellantis, Ford, dan General Motors langsung meroket:</p>\r\n<ul>\r\n<li>\r\n<p>Stellantis melonjak lebih dari 9%</p>\r\n</li>\r\n<li>\r\n<p>Ford naik lebih dari 5%</p>\r\n</li>\r\n<li>\r\n<p>General Motors menguat lebih dari 7%</p>\r\n</li>\r\n</ul>\r\n<h3>Kebijakan Trump: Langkah Cepat untuk Redam Gejolak Pasar</h3>\r\n<p>Ross Mayfield, Analis Strategi Investasi di Baird, menyatakan bahwa investor melihat pemerintah AS siap merespons tekanan pasar dengan cepat. \"Ini mempertegas keyakinan investor bahwa pemerintah akan mengambil langkah-langkah untuk menstabilkan pasar,\" ujarnya, seperti dikutip CNBC (6/3).</p>\r\n<p>Kebijakan tarif Trump ini tidak hanya berdampak pada sektor otomotif. Saham teknologi seperti Microsoft dan Tesla juga ikut menguat setelah sebelumnya terpuruk. Bahkan, 75% saham di indeks S&amp;P 500 ditutup menguat, dan indeks Russell 2000 (yang melacak saham berkapitalisasi kecil) naik sekitar 1%.</p>\r\n<h3>Tetap Waspada, Ketidakpastian Pasar Masih Tinggi</h3>\r\n<p>Meski Wall Street menunjukkan pemulihan, ketidakpastian pasar masih membayangi. Presiden Trump dalam percakapan dengan Perdana Menteri Kanada Justin Trudeau menyatakan bahwa upaya Kanada dalam menangani peredaran fentanil masih belum memadai. Hal ini menambah ketegangan di tengah rencana pembalasan tarif dari Cina, Meksiko, dan Kanada.</p>\r\n<p>Meskipun indeks utama berhasil bangkit pada Rabu, ketiganya masih mencatat penurunan lebih dari 1% sejak awal pekan.</p>\r\n<h3>Apa yang Harus Dilakukan Investor?</h3>\r\n<p>Dengan kondisi pasar yang masih fluktuatif, investor disarankan untuk:</p>\r\n<ol start=\"1\">\r\n<li>\r\n<p><strong>Tetap tenang dan pantau perkembangan kebijakan terbaru.</strong></p>\r\n</li>\r\n<li>\r\n<p><strong>Diversifikasi portofolio</strong>&nbsp;untuk mengurangi risiko.</p>\r\n</li>\r\n<li>\r\n<p><strong>Manfaatkan momentum kenaikan</strong>&nbsp;dengan bijak, terutama di sektor-sektor yang sedang menguat.</p>\r\n</li>\r\n</ol>\r\n<p>Jangan lewatkan peluang untuk memaksimalkan investasi Anda di tengah gejolak pasar yang dinamis.&nbsp;<strong>Segera konsultasikan strategi investasi Anda dengan ahli!</strong></p>', 'Wall Street Menguat: Kebijakan Trump Buka Peluang Baru Bagi Investor', 'Wall Street kembali menguat setelah kebijakan tarif baru Trump. Simak dampaknya bagi investor dan prospek pasar saham ke depan!', 1, 1, 1, 1, 1, 40, '2025-03-06 03:28:34', '2025-04-12 11:52:17', 'Kebijakan Trump, Saham Wall Street', '2025-03-06 03:28:34'),
(361, 'id', 60, 1, 'uploads/ihsg-siap-melonjak-tips-investasi-aman-di-tengah-fluktuasi-pasar.webp', 'IHSG Siap Melonjak! Tips Investasi Aman di Tengah Fluktuasi Pasar', 'ihsg-siap-melonjak-tips-investasi-aman-di-tengah-fluktuasi-pasar', '<h3>IHSG Diprediksi Menguat, Tapi Investor Harap Waspada!</h3>\r\n<p>Indeks Harga Saham Gabungan (IHSG) menunjukkan sinyal positif pada perdagangan Kamis (6/3). Setelah menguat 151 poin (2,37%) ke posisi 6.531,40 di hari sebelumnya, analis memprediksi IHSG masih memiliki ruang untuk melanjutkan kenaikan. Namun, investor disarankan untuk tidak terlalu agresif dalam membeli saham.</p>\r\n<h4>Pola Bearish Sandwich: Apa Artinya bagi Investor?</h4>\r\n<p>Valdy Kurniawan, analis dari Phintraco Sekuritas, menyoroti terbentuknya pola&nbsp;<strong>bearish sandwich</strong>&nbsp;dalam pergerakan IHSG. Meski pola ini sering muncul di akhir fase bullish, Valdy menyarankan investor untuk bersabar dan menunggu konfirmasi lebih lanjut.</p>\r\n<p>&ldquo;Jangan terburu-buru melakukan akumulasi beli. Tunggu konfirmasi konsolidasi di atas level 6.300 atau kenaikan di atas 6.600,&rdquo; jelas Valdy.</p>\r\n<h4>Strategi Investasi di Tengah Fluktuasi Pasar</h4>\r\n<p>Dengan kondisi pasar yang masih fluktuatif, Valdy merekomendasikan strategi&nbsp;<strong>buy on weakness</strong>&nbsp;atau membeli secara bertahap. Investor bisa mempertimbangkan peluang&nbsp;<strong>average buy</strong>&nbsp;di level 6.600 atau di bawah 6.300. Level psikologis 6.000 juga perlu diperhatikan sebagai batas aman.</p>\r\n<p>Saham-saham bank besar (<strong>big cap</strong>) seperti BBRI dan BBNI tetap menjadi andalan. Revisi rating menjadi&nbsp;<strong>overweight</strong>&nbsp;oleh JP Morgan turut memperkuat sentimen positif di sektor perbankan.</p>\r\n<h4>Faktor Eksternal yang Perlu Diwaspadai</h4>\r\n<p>Selain faktor internal, investor juga perlu memantau keputusan suku bunga dari&nbsp;<strong>European Central Bank (ECB)</strong>&nbsp;yang diumumkan Kamis malam (6/5). Kebijakan ini berpotensi memengaruhi pasar keuangan global, termasuk IHSG.</p>\r\n<h4>Rekomendasi Saham Pilihan</h4>\r\n<p>Phintraco Sekuritas memberikan rekomendasi saham-saham berikut sebagai pilihan utama:</p>\r\n<ul>\r\n<li>\r\n<p><strong>UNTR</strong></p>\r\n</li>\r\n<li>\r\n<p><strong>MAIN</strong></p>\r\n</li>\r\n<li>\r\n<p><strong>NCKL</strong></p>\r\n</li>\r\n<li>\r\n<p><strong>ASII</strong></p>\r\n</li>\r\n<li>\r\n<p><strong>ACES</strong></p>\r\n</li>\r\n</ul>\r\n<p>Sementara itu, Tim Analis MNC Sekuritas memprediksi IHSG berpeluang naik jika mampu menembus level 6.570. Jika ini terjadi, target berikutnya adalah kisaran 6.615 hingga 6.639. Namun, investor perlu waspada jika IHSG melemah dan menembus level 6.203, karena berpotensi turun ke area 6.122.</p>\r\n<h4>Saham-Saham yang Berpotensi Menguat</h4>\r\n<p>Beberapa saham yang patut diperhatikan:</p>\r\n<ul>\r\n<li>\r\n<p><strong>ARNA</strong>: Berpotensi menguat jika bertahan di atas 605, dengan target harga 640-660.</p>\r\n</li>\r\n<li>\r\n<p><strong>DAAZ</strong>: Peluang penguatan terbuka selama bertahan di atas 4.650.</p>\r\n</li>\r\n<li>\r\n<p><strong>ICBP</strong>: Koreksi terbatas, berpotensi kembali ke level 10.900-11.100.</p>\r\n</li>\r\n<li>\r\n<p><strong>MDKA</strong>: Diperkirakan berada di awal fase penguatan dengan target harga 1.600-1.715.</p>\r\n</li>\r\n</ul>\r\n<h4>Siapkan Strategi Investasi Anda!</h4>\r\n<p>Jangan lewatkan peluang di tengah fluktuasi pasar! Lakukan riset mendalam, pantau pergerakan IHSG, dan pertimbangkan rekomendasi saham di atas. Ingat, investasi selalu memiliki risiko, jadi pastikan keputusan Anda didasarkan pada analisis yang matang.</p>\r\n<p><strong>Disclaimer:</strong> Keputusan investasi sepenuhnya menjadi tanggung jawab pembaca. Artikel ini hanya bersifat informatif dan bukan ajakan untuk membeli, menahan, atau menjual saham tertentu.</p>', 'Prediksi IHSG Naik: Tips Investasi Aman di Tengah Fluktuasi', 'IHSG diprediksi menguat didukung saham bank. Simak strategi investasi aman dan rekomendasi saham terbaik dari analis ahli!', 1, 1, 1, 1, 1, 36, '2025-03-06 03:56:48', '2025-04-17 15:56:12', 'IHSG naik,Rekomendasi Saham', '2025-03-06 03:56:48'),
(362, 'id', 61, 1, 'uploads/dogeusd-hari-ini-waktunya-buy-atau-tunggu-simak-analisisnya.webp', 'DOGE/USD Hari Ini: Waktunya Buy atau Tunggu? Simak Analisisnya!', 'dogeusd-hari-ini-waktunya-buy-atau-tunggu-simak-analisisnya', '<h2 data-pm-slice=\"1 1 []\"><strong>DOGE/USD: Peluang Buy atau Tunggu?</strong></h2>\r\n<p>Dogecoin (DOGE) kembali menunjukkan pergerakan menarik terhadap USDT di chart 1 jam (1H) Binance. Apakah ini saat yang tepat untuk masuk, atau sebaiknya menunggu sinyal lebih kuat? Simak analisis teknikalnya berikut ini!<br><br><img src=\"https://image.mazhub.com/dogeusd-signal-trading-doge-analisis-doge-hari-ini.webp\"></p>\r\n<h2><strong>Analisis Teknikal DOGE/USD Hari Ini</strong></h2>\r\n<p>Berdasarkan chart terbaru, berikut beberapa poin kunci yang perlu diperhatikan oleh para trader:</p>\r\n<h3><strong>1. Level Support dan Resistance Penting</strong></h3>\r\n<p>✅ <strong>Support Kuat di 0.19017 USDT</strong> &ndash; Level ini telah menjadi area pertahanan penting bagi DOGE dalam beberapa sesi perdagangan terakhir.</p>\r\n<p>✅ <strong>Resistance Terdekat di 0.21149 USDT</strong> &ndash; Harga saat ini mendekati resistance ini. Jika berhasil breakout, DOGE berpotensi naik lebih tinggi.</p>\r\n<h3><strong>2. Area Buy yang Potensial</strong></h3>\r\n<p>📍 <strong>Zona demand di sekitar 0.20000 USDT</strong> &ndash; Menjadi area entry potensial bagi trader yang ingin masuk dengan harga terbaik.</p>\r\n<h3><strong>3. Trendline Naik (Bullish Momentum)</strong></h3>\r\n<p>📈 Harga DOGE saat ini mengikuti trendline naik, mengindikasikan tren bullish dalam jangka pendek.</p>\r\n<h2><strong>Strategi Trading DOGE/USD Hari Ini</strong></h2>\r\n<p>Berdasarkan analisis di atas, berikut beberapa strategi yang bisa diterapkan:</p>\r\n<h3><strong>✅ Jika Ingin Buy:</strong></h3>\r\n<ul data-spread=\"false\">\r\n<li>\r\n<p>Entry di area <strong>0.20000 - 0.20200 USDT</strong></p>\r\n</li>\r\n<li>\r\n<p><strong>Stop-loss</strong> di bawah <strong>0.19800 USDT</strong> untuk meminimalkan risiko</p>\r\n</li>\r\n<li>\r\n<p><strong>Target profit pertama</strong> di <strong>0.21149 USDT</strong></p>\r\n</li>\r\n<li>\r\n<p><strong>Target profit kedua</strong> di <strong>0.22635 USDT</strong> jika momentum bullish berlanjut</p>\r\n</li>\r\n</ul>\r\n<h3><strong>✅ Jika Harga Breakout 0.21149 USDT:</strong></h3>\r\n<ul data-spread=\"false\">\r\n<li>\r\n<p>Tunggu <strong>konfirmasi candlestick closing</strong> di atas level ini</p>\r\n</li>\r\n<li>\r\n<p>Entry di <strong>0.21200 - 0.21500 USDT</strong> untuk mengantisipasi breakout</p>\r\n</li>\r\n<li>\r\n<p>Target profit di <strong>0.22635 - 0.23700 USDT</strong></p>\r\n</li>\r\n</ul>\r\n<h3><strong>✅ Jika Harga Gagal Menembus Resistance 0.21149 USDT:</strong></h3>\r\n<ul data-spread=\"false\">\r\n<li>\r\n<p>Potensi koreksi ke <strong>area 0.20000 - 0.20200 USDT</strong> kembali</p>\r\n</li>\r\n<li>\r\n<p>Bisa mempertimbangkan <strong>buy kembali</strong> jika support bertahan</p>\r\n</li>\r\n</ul>\r\n<h2><strong>Kesimpulan: Buy atau Tunggu?</strong></h2>\r\n<p>DOGE/USD masih berada dalam tren naik dalam jangka pendek, tetapi trader perlu waspada di sekitar <strong>resistance 0.21149 USDT</strong>. Jika harga menembus level ini dengan volume besar, peluang kenaikan lebih lanjut semakin terbuka.</p>\r\n<p>Bagi yang ingin masuk lebih awal, <strong>area buy di 0.20000 - 0.20200 USDT</strong> bisa menjadi pilihan menarik, namun tetap gunakan <strong>manajemen risiko</strong> dengan stop-loss yang ketat.</p>\r\n<div><hr></div>\r\n<p>📊 <strong>Apakah Anda siap trading DOGE hari ini?</strong> Jangan lupa gunakan strategi terbaik dan lakukan riset tambahan sebelum mengambil keputusan. Bagikan pendapat Anda di kolom komentar! 🚀</p>', 'Signal Trading DOGE/USD Hari Ini – Buy atau Tunggu?', 'Simak analisis teknikal terbaru DOGE/USD hari ini! Temukan level support, resistance, serta strategi trading terbaik untuk memaksimalkan profit Anda.', 1, 1, 1, 1, 1, 44, '2025-03-06 04:27:47', '2025-04-16 20:46:43', 'DOGE/USD, Signal Trading DOGE, Analisis DOGE Hari Ini', '2025-03-06 04:27:00'),
(363, 'id', 63, 1, 'uploads/5-tips-sukses-trading-forex-untuk-pemula-yang-wajib-dicoba.webp', '5 Tips Sukses Trading Forex untuk Pemula yang Wajib Dicoba', '5-tips-sukses-trading-forex-untuk-pemula-yang-wajib-dicoba', '<p>Trading forex semakin digemari sebagai peluang investasi yang menjanjikan. Namun, bagi pemula, dunia forex bisa terasa rumit dan berisiko. Jangan khawatir! Berikut lima tips praktis yang akan membantumu memulai perjalanan trading dengan lebih percaya diri.</p>\r\n<h2><strong>1. Kuasai Dasar-Dasar Forex Sebelum Mulai</strong></h2>\r\n<p>Forex (Foreign Exchange) adalah perdagangan mata uang asing secara online. Keuntungan didapat dari selisih harga jual-beli pasangan mata uang. Sebelum terjun, pahami istilah-istilah kunci seperti:</p>\r\n<ul>\r\n<li>\r\n<p><strong>Pips</strong>&nbsp;(satuan perubahan harga)</p>\r\n</li>\r\n<li>\r\n<p><strong>Lot</strong>&nbsp;(ukuran transaksi)</p>\r\n</li>\r\n<li>\r\n<p><strong>Spread</strong>&nbsp;(selisih harga bid/ask)</p>\r\n</li>\r\n<li>\r\n<p><strong>Leverage</strong>&nbsp;(pinjaman modal dari broker)</p>\r\n</li>\r\n</ul>\r\n<p><strong>Tips Belajar:</strong><br>✔ Gunakan&nbsp;<strong>akun demo</strong>&nbsp;untuk latihan tanpa risiko.<br>✔ Ikuti&nbsp;<strong>webinar</strong>&nbsp;atau baca artikel edukasi dari sumber terpercaya.</p>\r\n<h2><strong>2. Pilih Broker Terpercaya &ndash; Jangan Sampai Salah!</strong></h2>\r\n<p>Broker adalah pintu gerbangmu ke pasar forex. Pastikan memilih yang aman dan terdaftar di lembaga resmi seperti&nbsp;<strong>Bappebti (Indonesia) atau FCA (Internasional)</strong>.</p>\r\n<p><strong>Ciri Broker Terbaik:</strong><br>✅ Regulasi jelas<br>✅ Biaya transaksi rendah<br>✅ Eksekusi order cepat<br>✅ Platform user-friendly</p>\r\n<p><em>Rekomendasi:</em>&nbsp;<strong>Octa Investama Berjangka</strong>&nbsp;&ndash; Broker teregulasi Bappebti dengan fitur edukasi lengkap untuk pemula.</p>\r\n<h2><strong>3. Gunakan Strategi Trading yang Cocok</strong></h2>\r\n<p>Trading bukan sekadar tebak-tebakan! Pilih strategi sesuai gaya dan tujuanmu:</p>\r\n<ul>\r\n<li>\r\n<p><strong>Scalping:</strong>&nbsp;Cari untung kecil dalam hitungan menit/detik. Cocok untuk trader aktif.</p>\r\n</li>\r\n<li>\r\n<p><strong>Intraday:</strong>&nbsp;Buka/tutup posisi dalam 1 hari. Mengandalkan analisis grafik real-time.</p>\r\n</li>\r\n<li>\r\n<p><strong>Swing Trading:</strong>&nbsp;Manfaatkan tren pasar dalam beberapa hari/minggu.</p>\r\n</li>\r\n</ul>\r\n<p><strong>Pro Tip:</strong>&nbsp;Uji strategi di akun demo sebelum pakai modal sungguhan!</p>\r\n<h2><strong>4. Kelola Risiko dengan Bijak &ndash; Jangan Serakah!</strong></h2>\r\n<p>Tidak semua transaksi akan untung, jadi manajemen risiko kunci kesuksesan.</p>\r\n<p><strong>Cara Mengurangi Risiko:</strong><br>🔹 Pasang&nbsp;<strong>stop-loss</strong>&nbsp;untuk batasi kerugian.<br>🔹 Jangan pakai semua modal dalam 1 transaksi.<br>🔹 Hindari leverage berlebihan.<br>🔹 Hanya gunakan dana yang siap rugi.</p>\r\n<p><em>Ingat:</em>&nbsp;Lebih baik dapat untung kecil tapi konsisten daripada langsung bangkrut!</p>\r\n<h2><strong>5. Kendalikan Emosi &ndash; Jangan Terbawa FOMO!</strong></h2>\r\n<p>Emosi adalah musuh terbesar trader. Jangan:<br>❌ Mengejar kerugian (<em>revenge trading</em>)<br>❌ Terlalu takut mengambil keputusan<br>❌ Ikut-ikutan analisis orang tanpa verifikasi</p>\r\n<p><strong>Solusi:</strong><br>📌 Buat&nbsp;<strong>jurnal trading</strong>&nbsp;untuk evaluasi performa.<br>📌 Tetap disiplin pada rencana trading.</p>\r\n<h2><strong>Siap Jadi Trader Sukses? Mulai Sekarang!</strong></h2>\r\n<p>Trading forex menawarkan peluang besar, tapi butuh persiapan matang. Dengan memahami dasar-dasar, memilih broker tepat, menerapkan strategi, mengelola risiko, dan menjaga emosi, peluang suksesmu akan semakin besar!</p>\r\n<p><strong>🔥 Rekomendasi Broker Pemula:</strong><br>Gunakan&nbsp;<strong>Octa Investama Berjangka</strong>&nbsp;&ndash; platform aman, edukasi lengkap, dan regulasi resmi.</p>\r\n<p><strong>Ayo mulai trading dengan percaya diri!</strong> 💰</p>', '5 Tips Jitu Trading Forex untuk Pemula | Mulai dengan Aman', 'Ingin sukses trading forex? Simak 5 tips praktis untuk pemula, dari pemahaman dasar hingga manajemen risiko. Mulai trading dengan percaya diri!', 1, 1, 1, 1, 1, 2, '2025-04-14 02:32:11', '2025-04-16 07:51:54', 'tips trading forex, broker forex terpercaya', '2025-04-14 02:32:11');

-- --------------------------------------------------------

--
-- Table structure for table `news_tags`
--

CREATE TABLE `news_tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `news_id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news_tags`
--

INSERT INTO `news_tags` (`id`, `news_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(5195, 360, 2655, NULL, NULL),
(5196, 360, 2656, NULL, NULL),
(5197, 361, 2657, NULL, NULL),
(5198, 361, 2658, NULL, NULL),
(5199, 362, 2659, NULL, NULL),
(5200, 362, 2660, NULL, NULL),
(5201, 362, 2661, NULL, NULL),
(5202, 362, 2662, NULL, NULL),
(5203, 363, 2663, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('agungmustaqim15@gmail.com', '$2y$10$6O9aht.TxV0IN3fLHXFLt.6V2s8PdCWoGzJaasVQvbv.N9GhFIHjy', '2024-06-01 05:02:49');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `group_name` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `group_name`, `created_at`, `updated_at`) VALUES
(2, 'category index', 'admin', 'Category Permissions', '2023-06-12 00:41:28', '2023-06-12 00:41:28'),
(3, 'category create', 'admin', 'Category Permissions', '2023-06-12 00:42:32', '2023-06-12 00:42:32'),
(4, 'category update', 'admin', 'Category Permissions', '2023-06-12 00:42:42', '2023-06-12 00:42:42'),
(5, 'category delete', 'admin', 'Category Permissions', '2023-06-12 00:42:49', '2023-06-12 00:42:49'),
(6, 'news index', 'admin', 'News Permissions', '2023-06-13 05:05:58', '2023-06-13 05:05:58'),
(7, 'news create', 'admin', 'News Permissions', '2023-06-13 05:06:12', '2023-06-13 05:06:12'),
(8, 'news update', 'admin', 'News Permissions', '2023-06-13 05:06:20', '2023-06-13 05:06:20'),
(9, 'news delete', 'admin', 'News Permissions', '2023-06-13 05:06:28', '2023-06-13 05:06:28'),
(10, 'about index', 'admin', 'About Permissions', '2023-06-13 05:13:54', '2023-06-13 05:13:54'),
(11, 'about update', 'admin', 'About Permissions', '2023-06-13 05:14:01', '2023-06-13 05:14:01'),
(12, 'contact index', 'admin', 'Contact Permissions', '2023-06-13 05:15:33', '2023-06-13 05:15:33'),
(13, 'contact update', 'admin', 'Contact Permissions', '2023-06-13 05:15:41', '2023-06-13 05:15:41'),
(14, 'social count index', 'admin', 'Social Count Permissions', '2023-06-13 05:17:57', '2023-06-13 05:17:57'),
(15, 'social count create', 'admin', 'Social Count Permissions', '2023-06-13 05:18:05', '2023-06-13 05:18:05'),
(16, 'social count update', 'admin', 'Social Count Permissions', '2023-06-13 05:18:14', '2023-06-13 05:18:14'),
(17, 'social count delete', 'admin', 'Social Count Permissions', '2023-06-13 05:18:23', '2023-06-13 05:18:23'),
(18, 'contact message index', 'admin', 'Contact Message Permissions', '2023-06-13 05:20:41', '2023-06-13 05:20:41'),
(19, 'contact message delete', 'admin', 'Contact Message Permissions', '2023-06-13 05:20:47', '2023-06-13 05:20:47'),
(20, 'home section index', 'admin', 'Home Section Setting Permissions', '2023-06-13 05:22:56', '2023-06-13 05:22:56'),
(21, 'home section update', 'admin', 'Home Section Setting Permissions', '2023-06-13 05:23:03', '2023-06-13 05:23:03'),
(22, 'advertisement index', 'admin', 'Advertisement Permissions', '2023-06-13 05:24:20', '2023-06-13 05:24:20'),
(23, 'advertisement update', 'admin', 'Advertisement Permissions', '2023-06-13 05:24:27', '2023-06-13 05:24:27'),
(24, 'languages index', 'admin', 'Languages Permissions', '2023-06-13 05:25:42', '2023-06-13 05:25:42'),
(25, 'languages create', 'admin', 'Languages Permissions', '2023-06-13 05:25:48', '2023-06-13 05:25:48'),
(26, 'languages update', 'admin', 'Languages Permissions', '2023-06-13 05:25:55', '2023-06-13 05:25:55'),
(27, 'languages delete', 'admin', 'Languages Permissions', '2023-06-13 05:26:02', '2023-06-13 05:26:02'),
(28, 'subscribers index', 'admin', 'Subscribers Permissions', '2023-06-13 05:27:31', '2023-06-13 05:27:31'),
(29, 'subscribers delete', 'admin', 'Subscribers Permissions', '2023-06-13 05:27:39', '2023-06-13 05:27:39'),
(30, 'footer index', 'admin', 'Footer Permissions', '2023-06-13 05:28:42', '2023-06-13 05:28:42'),
(31, 'footer create', 'admin', 'Footer Permissions', '2023-06-13 05:28:48', '2023-06-13 05:28:48'),
(32, 'footer update', 'admin', 'Footer Permissions', '2023-06-13 05:28:57', '2023-06-13 05:28:57'),
(33, 'footer delete', 'admin', 'Footer Permissions', '2023-06-13 05:29:03', '2023-06-13 05:29:03'),
(34, 'access management index', 'admin', 'Access Management Permissions', '2023-06-13 05:31:34', '2023-06-13 05:31:34'),
(35, 'access management create', 'admin', 'Access Management Permissions', '2023-06-13 05:31:40', '2023-06-13 05:31:40'),
(36, 'access management update', 'admin', 'Access Management Permissions', '2023-06-13 05:31:46', '2023-06-13 05:31:46'),
(37, 'access management delete', 'admin', 'Access Management Permissions', '2023-06-13 05:31:53', '2023-06-13 05:31:53'),
(38, 'setting index', 'admin', 'Settings Permissions', '2023-06-13 05:33:11', '2023-06-13 05:33:11'),
(39, 'setting update', 'admin', 'Settings Permissions', '2023-06-13 05:33:17', '2023-06-13 05:33:17'),
(40, 'news status', 'admin', 'News Permissions', '2023-06-14 23:31:44', '2023-06-14 23:31:44'),
(41, 'news all-access', 'admin', 'News Permissions', '2023-06-14 23:38:27', '2023-06-14 23:38:27');

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
-- Table structure for table `recived_mails`
--

CREATE TABLE `recived_mails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `seen` tinyint(1) NOT NULL DEFAULT 0,
  `replied` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `recived_mails`
--

INSERT INTO `recived_mails` (`id`, `email`, `subject`, `message`, `seen`, `replied`, `created_at`, `updated_at`) VALUES
(1, 'test@gmail.com', 'test sub', 'test sub', 1, 1, '2023-06-08 05:35:29', '2025-03-05 08:29:27'),
(2, 'agungmustaqim15@gmail.com', 'Possimus perferendi', 'Consequuntur repelle', 1, 1, '2023-06-10 00:26:40', '2025-03-05 08:29:27');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(3, 'Super Admin', 'admin', '2023-06-12 03:28:34', '2023-06-12 03:28:34'),
(6, 'Writer', 'admin', '2023-06-12 23:52:28', '2024-07-24 05:55:26');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(6, 6),
(7, 6),
(8, 6),
(9, 6);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES
(1, 'site_name', 'Kapten Forex', '2023-06-10 22:51:50', '2025-03-04 04:19:30'),
(2, 'site_logo', 'uploads/uLvyvgE4jJFrK6efQWKZBh20IHaZqa.webp', '2023-06-10 22:51:50', '2025-03-04 04:46:09'),
(3, 'site_favicon', 'uploads/C5sYdX02MoF7aRFpDUxAPvwsMtfjMP.webp', '2023-06-10 22:51:50', '2025-03-04 04:37:50'),
(4, 'site_seo_title', 'Kapten Forex', '2023-06-11 01:05:31', '2025-03-04 04:19:26'),
(5, 'site_seo_description', 'ic-syekhburhanuddin.com adalah platform yang menyediakan berbagai informasi seputar forex, mulai dari analisis pasar, strategi trading, hingga ulasan broker terbaik.', '2023-06-11 01:05:31', '2025-03-04 06:50:16'),
(6, 'site_seo_keywords', 'Kapten Forex, Tips Trading Forex, Analisis Pasar Forex, Berita Forex Terbaru', '2023-06-11 01:05:31', '2025-03-04 04:19:26'),
(7, 'site_color', '#153349', '2023-06-11 03:45:30', '2025-03-04 05:02:28'),
(8, 'site_microsoft_api_host', 'microsoft-translator-text.p.rapidapi.com', '2023-06-21 03:44:20', '2023-06-21 03:49:24'),
(9, 'site_microsoft_api_key', '9644c1868amsh7d7ad4b2feb85afp1973f8jsneb5a65f1a736', '2023-06-21 03:44:20', '2023-06-21 03:49:24');

-- --------------------------------------------------------

--
-- Table structure for table `social_counts`
--

CREATE TABLE `social_counts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `language` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `fan_count` varchar(255) NOT NULL,
  `fan_type` varchar(255) NOT NULL,
  `button_text` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `url` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_counts`
--

INSERT INTO `social_counts` (`id`, `language`, `icon`, `fan_count`, `fan_type`, `button_text`, `color`, `url`, `status`, `created_at`, `updated_at`) VALUES
(2, 'en', 'fab fa-linkedin-in', '200k', 'Likes', 'Likes', '#0a66c2', 'https://www.linkedin.com/', 1, '2023-06-04 00:11:06', '2024-07-30 11:29:42'),
(3, 'bn', 'fab fa-linkedin-in', '100k', 'লাইক', 'লাইক', '#0a66c2', 'https://www.linkedin.com/', 1, '2023-06-04 00:14:26', '2023-06-22 00:15:39'),
(5, 'hi', 'fab fa-linkedin-in', '200k', 'Fans', 'हाँ', '#0a66c2', 'https://www.linkedin.com/', 1, '2023-06-22 00:15:07', '2023-06-22 00:15:07'),
(6, 'en', 'fab fa-facebook-f', '300k', 'Followers', 'Likes', '#0b84ee', 'https://www.facebook.com/', 1, '2023-06-22 00:16:59', '2024-07-30 11:29:34'),
(7, 'hi', 'fab fa-facebook-f', '300k', 'पसंद', 'पसंद', '#0b84ee', 'https://www.facebook.com/', 1, '2023-06-22 00:18:12', '2023-06-22 00:19:26'),
(8, 'bn', 'fab fa-facebook-f', '300k', 'লাইক', 'লাইক', '#0b84ee', 'https://www.facebook.com/', 1, '2023-06-22 00:19:11', '2023-06-22 00:19:11'),
(9, 'en', 'fab fa-youtube', '100k', 'Fans', 'Subscribe', '#ff0000', 'https://www.facebook.com/', 1, '2023-06-22 00:24:25', '2024-07-30 11:29:38'),
(10, 'hi', 'fab fa-youtube', '100k', 'प्रशंसक', 'सदस्यता लें', '#ff0000', 'https://www.linkedin.com/', 1, '2023-06-22 00:25:55', '2023-06-22 00:25:55'),
(11, 'id', 'fab fa-linkedin-in', '200k', 'Likes', 'Likes', '#0a66c2', 'https://www.linkedin.com/', 1, '2023-06-04 00:11:06', '2024-07-30 11:29:30'),
(12, 'id', 'fab fa-facebook-f', '300k', 'Followers', 'Likes', '#0b84ee', 'https://www.facebook.com/', 1, '2023-06-22 00:16:59', '2024-06-17 07:57:10'),
(13, 'id', 'fab fa-youtube', '100k', 'Fans', 'Subscribe', '#ff0000', 'https://www.facebook.com/', 1, '2023-06-22 00:24:25', '2024-06-17 07:57:20');

-- --------------------------------------------------------

--
-- Table structure for table `social_links`
--

CREATE TABLE `social_links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(255) NOT NULL,
  `url` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_links`
--

INSERT INTO `social_links` (`id`, `icon`, `url`, `status`, `created_at`, `updated_at`) VALUES
(3, 'fab fa-facebook-f', 'https://id-id.facebook.com/', 1, '2023-06-06 21:43:13', '2024-06-14 17:33:30'),
(4, 'fab fa-twitter', 'https://x.com/?mx=2', 1, '2023-06-06 21:43:23', '2024-06-14 17:34:10'),
(5, 'fab fa-linkedin-in', 'https://www.linkedin.com/', 1, '2023-06-06 21:44:42', '2023-06-06 21:44:42'),
(6, 'fab fa-instagram', 'https://www.instagram.com/', 1, '2023-06-06 21:44:54', '2024-06-14 17:35:40');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`, `created_at`, `updated_at`) VALUES
(5, 'agungmustaqim15@gmail.com', '2024-06-02 03:49:47', '2024-06-02 03:49:47');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `language` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `created_at`, `updated_at`, `language`) VALUES
(2655, 'WallStreet', '2025-03-06 03:28:34', '2025-03-06 03:28:34', 'id'),
(2656, 'Investasi', '2025-03-06 03:28:34', '2025-03-06 03:28:34', 'id'),
(2657, 'InvestasiAman', '2025-03-06 03:56:48', '2025-03-06 03:56:48', 'id'),
(2658, 'PrediksiIHSG', '2025-03-06 03:56:48', '2025-03-06 03:56:48', 'id'),
(2661, 'Dogecoin', '2025-03-06 04:29:00', '2025-03-06 04:29:00', 'id'),
(2662, 'TradingCrypto', '2025-03-06 04:29:00', '2025-03-06 04:29:00', 'id'),
(2663, 'TradingForex', '2025-04-14 02:32:11', '2025-04-14 02:32:11', 'id');

--
-- Triggers `tags`
--
DELIMITER $$
CREATE TRIGGER `trim_tag_name_before_insert` BEFORE INSERT ON `tags` FOR EACH ROW BEGIN
    SET NEW.name = LTRIM(RTRIM(NEW.name));
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'Briangilla', 'd.a.vidl.i.ne.s.ma.n@gmail.com', NULL, '$2y$10$Yd7wOXMU1XppfG7UQZCDHuI0QOyXmEm4P8n2hLLgBJ2ZGiOko6RM.', NULL, '2024-06-20 15:43:49', '2024-06-20 15:43:49'),
(5, 'LouiediP', 'bu.c.ha.n.ao.n.ma.tt@gmail.com', NULL, '$2y$10$7PtHA2VacqRnTDjmqIrdDOJ8MyeCdtEIFF7EyQecOVMmzOxFjsqbq', NULL, '2024-06-23 09:28:01', '2024-06-23 09:28:01'),
(6, 'LouiediP', 'bu.ch.a.na.on.m.a.tt@gmail.com', NULL, '$2y$10$ThQYFCXr7rTasoijF998IOFRtif3FaKNTzg0B.x/DTjt9osihoXY6', NULL, '2024-06-23 12:09:22', '2024-06-23 12:09:22'),
(7, 'Vivi marliyana', 'viviardhani01@gmail.com', NULL, '$2y$10$7oKK7gk7OKdKhk/kG9MV4.66LYpelUwj4FJlrwzVmE3l5EfXva54S', NULL, '2024-06-30 07:28:46', '2024-06-30 07:28:46'),
(8, 'Stevennip', 'craig@rockstarseo.net', NULL, '$2y$10$YuBE/8eZl5G5eVizXHQdTePjJOPU3ZeBORLQ34ZQpitunpaZPGf7O', NULL, '2024-07-12 23:10:15', '2024-07-12 23:10:15'),
(10, 'Bembi Pramudya, S.Kom', 'bembipramudya69@gmail.com', NULL, '$2y$10$/jlddnc0e/ndvXzAmrDo2uECUZQvRVmHAYVQ.DHrARLwG1ZtS4Xzu', NULL, '2024-08-20 16:59:04', '2024-08-20 16:59:04'),
(11, 'LouiediP', 'b.uchan.ao.nm.att@gmail.com', NULL, '$2y$10$Pg71D293uxhpgAR/ONZysuRe4RJUiT4G9bsn6UBPNxQL3vAini4fq', NULL, '2024-10-29 03:16:22', '2024-10-29 03:16:22'),
(12, 'Lindapneum', 'r.e.ed.2.5.16.7@gmail.com', NULL, '$2y$10$Elwja71NbE2SGVp4VB13e.NIuqUc328..vH4AIQnUfkw3Rl2PSBau', NULL, '2024-11-02 22:51:13', '2024-11-02 22:51:13'),
(13, 'WpHwTjOIIW', 'rontrujillo5593@gmail.com', NULL, '$2y$10$6Z4iyiLTDWPfj9AMcJ/ad.q1c3jFmjLoMCIsM1Yad9PhA51d5dtia', NULL, '2024-11-08 01:48:24', '2024-11-08 01:48:24'),
(14, 'yaChbVoEK', 'euumruhkbyufqql@yahoo.com', NULL, '$2y$10$KH5fmpNe7.Ww/VG5uoMtz.O0IIL5uiwbcSr0YE1vLhGjHYkguqK1C', NULL, '2024-11-09 00:07:34', '2024-11-09 00:07:34'),
(15, 'qRoKmwYdTiT', 'wijiofvqwxph@yahoo.com', NULL, '$2y$10$S52AfRyUVBRKlxvt4GJzxOL65So5XvDQIHc/rc/CaJyX91.DltPx.', NULL, '2024-11-09 18:29:11', '2024-11-09 18:29:11'),
(16, 'NoiixEqwAGdqTgR', 'hickmanrypertnv7881@gmail.com', NULL, '$2y$10$6v2yOGmKyxGD9KeFOonuDuDiS7R4pYYuWR1jjNYnLALRfLXl1pg9u', NULL, '2024-11-16 09:47:57', '2024-11-16 09:47:57'),
(17, 'tuidKWgtpLEfDp', 'wevywpaykxfdht@yahoo.com', NULL, '$2y$10$f6g2quPnDsLirsR9D8MtPOFPvqy.HfWPBVcnndKGdSyJ69vtzo7sC', NULL, '2024-11-23 22:53:15', '2024-11-23 22:53:15'),
(18, 'khNDanXPxwjIJYq', 'graedilti484@gmail.com', NULL, '$2y$10$8ZjOg9.sT8DdrPycfUryY.p5AEK2tnAfjL8d91Iv3ie8cFc65397C', NULL, '2024-11-24 18:57:25', '2024-11-24 18:57:25'),
(19, 'Nfejdekofhofjwdoe jirekdwjfreohogjkerwkrj rekwlrkfekjgoperrkfoek ojeopkfwkferjgiejfwk okfepjfgrihgoiejfklegjroi jeiokferfekfrjgiorjofeko jeoighirhgioejfoekforjgijriogjeo foefojeigjrigklej jkrjfkrejgkrhglrlrk mazhub.com', 'yasen.krasen.13+97527@mail.ru', NULL, '$2y$10$AJBy1DorDlFOaVxQAU7a5.2XmAsLO4No7eTq0ZKThiCG1aUl0NV2S', NULL, '2024-12-05 05:53:02', '2024-12-05 05:53:02'),
(20, 'FrancisVaw', 'sa.mmyma.nn9.76@gmail.com', NULL, '$2y$10$h5ScvHZvcjg/dyamD1sLEOkRdqlOM8jhh11FP0x3iODExCvLqb/Nm', NULL, '2024-12-09 21:45:53', '2024-12-09 21:45:53'),
(21, 'LHIWhRgJJq', 'kyjmabdcn@yahoo.com', NULL, '$2y$10$WS/JS.4uu9CI5Qg8zTb9heHEbtBmcQO3GYMvqwIvjrRjQLlXlox06', NULL, '2024-12-10 02:16:08', '2024-12-10 02:16:08'),
(22, 'Lindapneum', 'r.ee.d25.16.7@gmail.com', NULL, '$2y$10$gJOkheXj8ql5rwjiI.4mUOrIs4AKwtZGHukxhlDXTWBxbCOQkT1fS', NULL, '2024-12-20 05:49:30', '2024-12-20 05:49:30'),
(23, 'RaymondTiz', 'rio@rockstarseo.net', NULL, '$2y$10$ZyZomhtwCauKyksrvLsTueIDb6iwiWdv4vTZbZ1YOwzAu6MXGhexa', NULL, '2024-12-22 05:07:50', '2024-12-22 05:07:50'),
(24, 'Miguelzew', 'bau.e.r.br.a.d.ba.ue.r1st@gmail.com', NULL, '$2y$10$zxjwWO5JJl540cn8IgvQZubWXEHP.1D1vUK7eavu62/Ilbr9OWhNi', NULL, '2024-12-23 16:55:32', '2024-12-23 16:55:32'),
(25, 'pYBLmlRJoGvavN', 'shamesromer@yahoo.com', NULL, '$2y$10$WwcEflzjgeB9xRFVEas4AOZ6AgtOulsyUTZSzwTRzbT.Yv80uTisO', NULL, '2024-12-24 22:54:07', '2024-12-24 22:54:07'),
(26, 'hREercvioBSHD', 'tezepewu93@gmail.com', NULL, '$2y$10$O2CAQBIEEf/Ms1e76hY5v.S6hROIf2kqnSAKLzSEIfTT66BLCSoby', NULL, '2024-12-25 18:22:09', '2024-12-25 18:22:09'),
(27, 'MartinGag', 'j.9784.2590@gmail.com', NULL, '$2y$10$408nD8uo/A5kcOg2HS6H7eCe.Gp8ZUFBHk3Tx3w3e7nlHCGrQgXEG', NULL, '2024-12-29 08:13:05', '2024-12-29 08:13:05'),
(28, 'nredXmZLEpR', 'glksjjgwyltj8mn@yahoo.com', NULL, '$2y$10$McZeWyslHzynscEkg2/NY.SVdfH4SVHIP6p6d1hIDn.3Q8GB2h8c6', NULL, '2024-12-31 04:52:14', '2024-12-31 04:52:14'),
(29, 'adminxps', 'budaklzcrew@gmail.com', NULL, '$2y$10$PeLDqXXzAS2q6VXDI8bZsuKM10jKbx1w.IAagtQqABNsQIEo7n2BK', NULL, '2025-01-06 12:46:02', '2025-01-06 12:46:02'),
(30, 'Stevennip', 'j.285.6.9.9.8@gmail.com', NULL, '$2y$10$vbomxtoJ1sdfs49RESU.yuUJCZPLfFBYnguirsxqFlJlKB2hVjRZm', NULL, '2025-01-07 10:34:10', '2025-01-07 10:34:10'),
(31, 'DjdyxDzyFe', 'mementooonexus@gmail.com', NULL, '$2y$10$UdOYAitv/zU.QtWvYbdCiOseSZZmcdQYbSNsiMTeNzsA9s8azQQ7S', NULL, '2025-01-15 12:02:41', '2025-01-15 12:02:41'),
(32, 'Juliaemats', 'evakyatorvolsk@outlook.com', NULL, '$2y$10$PvePLlp.HoqfyEXWTJY7cOke.jkRttb91MV/TAsyXUA8DDadiRtja', NULL, '2025-01-16 07:41:28', '2025-01-16 07:41:28'),
(33, 'NRATrKMkBWx', 'dbartonjs1994@gmail.com', NULL, '$2y$10$e5jXnNVXRQm4j6HfKl5nkeZ0AM.3IqOOTI.9HkUDKKESlMIQZxodW', NULL, '2025-03-03 07:31:53', '2025-03-03 07:31:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_news_id_foreign` (`news_id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `footer_grid_ones`
--
ALTER TABLE `footer_grid_ones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_grid_threes`
--
ALTER TABLE `footer_grid_threes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_grid_twos`
--
ALTER TABLE `footer_grid_twos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_infos`
--
ALTER TABLE `footer_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_titles`
--
ALTER TABLE `footer_titles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_section_settings`
--
ALTER TABLE `home_section_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kebijakans`
--
ALTER TABLE `kebijakans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_auther_id_foreign` (`auther_id`),
  ADD KEY `news_category_id_foreign` (`category_id`) USING BTREE;

--
-- Indexes for table `news_tags`
--
ALTER TABLE `news_tags`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `news_tags_news_id_foreign` (`news_id`) USING BTREE,
  ADD KEY `news_tags_tag_id_foreign` (`tag_id`) USING BTREE;

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `recived_mails`
--
ALTER TABLE `recived_mails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_counts`
--
ALTER TABLE `social_counts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_links`
--
ALTER TABLE `social_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `footer_grid_ones`
--
ALTER TABLE `footer_grid_ones`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `footer_grid_threes`
--
ALTER TABLE `footer_grid_threes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `footer_grid_twos`
--
ALTER TABLE `footer_grid_twos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `footer_infos`
--
ALTER TABLE `footer_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `footer_titles`
--
ALTER TABLE `footer_titles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `home_section_settings`
--
ALTER TABLE `home_section_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=535;

--
-- AUTO_INCREMENT for table `kebijakans`
--
ALTER TABLE `kebijakans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=364;

--
-- AUTO_INCREMENT for table `news_tags`
--
ALTER TABLE `news_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5204;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `recived_mails`
--
ALTER TABLE `recived_mails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `social_counts`
--
ALTER TABLE `social_counts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `social_links`
--
ALTER TABLE `social_links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2664;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_news_id_foreign` FOREIGN KEY (`news_id`) REFERENCES `news` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `comments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_auther_id_foreign` FOREIGN KEY (`auther_id`) REFERENCES `admins` (`id`),
  ADD CONSTRAINT `news_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `news_tags`
--
ALTER TABLE `news_tags`
  ADD CONSTRAINT `news_tags_news_id_foreign` FOREIGN KEY (`news_id`) REFERENCES `news` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
