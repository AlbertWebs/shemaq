-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 24, 2023 at 11:43 AM
-- Server version: 8.0.33-0ubuntu0.22.04.2
-- PHP Version: 8.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shemaq`
--

-- --------------------------------------------------------

--
-- Table structure for table `expertises`
--

CREATE TABLE `expertises` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slung` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta` text COLLATE utf8mb4_unicode_ci,
  `content` text COLLATE utf8mb4_unicode_ci,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expertises`
--

INSERT INTO `expertises` (`id`, `title`, `slung`, `image`, `meta`, `content`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Film & Television Production', 'film-and-television-production', 'img-1.jpg', 'With a wealth of experience in the Film & TV industry, our production company is an adept creative firm that offers full-\nscale services ranging from concept creation to production management and equipment procurement.', '<strong>Crafting captivating content to maximise\r\nviewership</strong>\r\n\r\nWith a wealth of experience in the Film & TV industry, our\r\nproduction company is an adept creative firm that offers full-\r\nscale services ranging from concept creation to production\r\nmanagement and equipment procurement. We specialize\r\nin the development of high-definition streaming content, as\r\nwell as cinema-quality formats and broadcast programs.\r\nOur seasoned team is committed to delivering unparalleled\r\nresults with any type of production.\r\n<br><br>\r\nAt ShemaQ, we specialize in crafting high-impact, innovative\r\ncontent to increase viewership and drive measurable results\r\nfor broadcasters, streaming services, studios, and brands.\r\nOur expansive team of in-house directors and producers\r\nare well-versed in a variety of genres, ranging from feature\r\nfilms and documentaries to short-form content. Additionally,\r\nour team has developed relationships with talented and\r\nskilled specialists for scripting, story-boarding, and pre and\r\npost-production services. In partnering with us, clients gain\r\naccess to a single source of creative and technical services\r\nfrom conception to delivery.\r\n<br><br>', 'img-1.png', NULL, NULL),
(2, 'Post-Production', 'post-production', 'img-2.png', 'After the cameras stop rolling, it’s time for the next step of magic – post production. Possessing an illustrious\nbackground in post production and comprehensive insight of broadcast standards, ShemaQ Productions is equipped\nto assist content producers with perfecting and delivering their content to linear', '<strong>\r\nCrafting content to be broadcast across the entire media spectrum.\r\n</strong>\r\n\r\nAfter the cameras stop rolling, it’s time for the next step\r\nof magic – post production. Possessing an illustrious\r\nbackground in post production and comprehensive insight of broadcast standards, ShemaQ Productions is equipped to assist content producers with perfecting and delivering\r\ntheir content to linear and new media platforms. Located in strategic media markets, we take pride in collaborating\r\nwith top post-production professionals, technicians, and trendsetters to create cutting-edge content for audiences\r\neverywhere.', 'img-2.png', NULL, NULL),
(3, 'Distribution', 'distribution', 'img-6.png', 'At ShemaQ Productions, we’ve established close ties with\n                            renowned networks and platforms, empowering us to reach advantageous distribution agreements for shows. We\n                            collaborate with the most talented minds in the industry to', '<strong>\r\nExperts at creating and sharing content to wider audiences\r\n</strong>\r\n\r\nAt ShemaQ Productions, we’ve established close ties with renowned networks and platforms, empowering us to reach advantageous distribution agreements for shows. We collaborate with the most talented minds in the industry to create, acquire, develop, fund, co-produce, sell, and promote\r\ninnovative formats and finished content. We provide end-to-end services that help your digital content to any platform in\r\na faster, cost-efficient way.', 'img-6.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_05_22_190808_create_sectors_table', 1),
(6, '2023_05_22_190849_create_expertises_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sectors`
--

CREATE TABLE `sectors` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slung` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta` text COLLATE utf8mb4_unicode_ci,
  `content` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sectors`
--

INSERT INTO `sectors` (`id`, `title`, `slung`, `image`, `meta`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Broadcasting', 'broadcasting', NULL, 'ShemaQ Productions\r\nhas established itself as\r\na <strong>leading player in the\r\nbroadcast sector</strong> by\r\nfostering a strong brand\r\nidentity and reputation\r\nfor quality content.', 'Our success is due to our deep understand of the market, consumer trends, and the competitive landscape. Our network of industry leaders, specialists, and pioneers are dedicated to negotiating distribution and licensing agreements with television networks and streaming\r\nplatforms to ensure that groundbreaking material reaches the intended audience.', NULL, NULL),
(2, 'Corporate Video Production', 'corporate-video-production', NULL, 'Achieve what you want and more with B2B and B2C videos.', 'Effective video communication plays a crucial role in any marketing strategy and is an essential tool for business\r\nand enterprise. Video is not only a great way to improve conversion rates, build engagement or raise awareness of your brand and services, it has the power to show the value of your services, aid customers get more from your products,\r\nand attract new talent.', NULL, NULL),
(3, 'Education', 'education', 'ShemaQ Productions works extensively in the education sector, creating content for universities, schools,\r\nonline learning and informal education providers.', 'ShemaQ Productions works extensively in the education sector, creating content for universities, schools, online learning and informal education providers.', 'We help you achieve communication goals in an engaging and entertaining way. Whatever your requirements, we can\r\ncreate the educational video you need to grow your institution and get your message across as effectively as possible.', NULL, NULL),
(4, 'Public Sector & Non-Profits', 'public-sector-and-non-profits', NULL, 'Make people aware of who you are, what you stand for and what your goals are.', 'Our team holds a wealth of expertise creating video content for charities of all sizes including NGOs, county and national government and public sector bodies. From creative ideas to production\r\nprocesses and edits, we recommend the best solutions for you budget and objectives.\r\n<br><br>\r\nWe understand that video content will often be part of your organisation’s identity. We’ll collaborate with you to get the whole story told as you’d want\r\nit, to your audience. Our team will make sure that the process is seamless each step of the way. No unwelcome surprises or hidden costs.', NULL, NULL),
(5, 'Healthcare', 'healthcare', NULL, 'Caring for people, on and off screen', 'We’re ardent about creating beautiful and effective content\r\nthat makes a lasting impact on audiences. We collaborate with\r\nteaching hospitals, doctors, pharmaceutical companies and researchers to communicate information, raise awareness and share stories. We work efficiently to catch all you need to\r\nreach your goal. We understand that videos are personal and can address\r\nsensitive subjects, that’s why we ensure that your project hits the right tone. Our talented team will produce the creative that capture your message in its entirety, finding the best way\r\nto communicate your story.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `expertises`
--
ALTER TABLE `expertises`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `sectors`
--
ALTER TABLE `sectors`
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
-- AUTO_INCREMENT for table `expertises`
--
ALTER TABLE `expertises`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sectors`
--
ALTER TABLE `sectors`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
