-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 25, 2021 at 01:22 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_greensageconsult`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'icon.png',
  `cover_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'cover_img.png',
  `card_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'card_img.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `icon`, `cover_img`, `card_img`, `created_at`, `updated_at`) VALUES
(1, 'Management and Leadership', 'management-and-leadership', '1624229506Management training.png', 'cover_img.png', 'card_img.png', '2021-06-20 14:06:40', '2021-06-20 21:51:46'),
(2, 'Information Technology', 'information-technology', '1624229712Information-Technology.png', 'cover_img.png', 'card_img.png', '2021-06-20 14:06:40', '2021-06-20 21:55:12'),
(3, 'Public Relations', 'public-relations', '1624229863Public-Relations.png', 'cover_img.png', 'card_img.png', '2021-06-20 14:06:40', '2021-06-20 21:57:43'),
(4, 'Strategy and Leadership', 'strategy-and-leadership', '1624230850Strategy and leadership training.png', 'cover_img.png', 'card_img.png', '2021-06-20 14:06:40', '2021-06-20 22:14:10'),
(5, 'Contracts management', 'contracts-management', '1624229643Contracts-management.png', 'cover_img.png', 'card_img.png', '2021-06-20 14:06:40', '2021-06-20 21:54:03'),
(6, 'Finance & Accounting or Banking Investment', 'finance-accounting-or-banking-investment', '1624229663finance and Accounts.png', 'cover_img.png', 'card_img.png', '2021-06-20 14:06:40', '2021-06-20 21:54:23'),
(7, 'Audit & Quality Assurance', 'audit-quality-assurance', '1624229580Audit and insurance.png', 'cover_img.png', 'card_img.png', '2021-06-20 14:06:40', '2021-06-20 21:53:00'),
(8, 'Sales & Marketing', 'sales-marketing', '1624229940Sales marketing.png', 'cover_img.png', 'card_img.png', '2021-06-20 14:06:41', '2021-06-20 21:59:00'),
(9, 'Administrative', 'administrative', '1624229614Administrative training.png', 'cover_img.png', 'card_img.png', '2021-06-20 14:06:41', '2021-06-20 21:53:34'),
(10, 'Professional Development for Women', 'professional-development-for-women', '1624229764Profesisonal-Development-for-Women.png', 'cover_img.png', 'card_img.png', '2021-06-20 14:06:41', '2021-06-20 21:56:04'),
(11, 'Telecommunication', 'telecommunication', '1624230895Telecommunication.png', 'cover_img.png', 'card_img.png', '2021-06-20 14:06:41', '2021-06-20 22:14:55'),
(12, 'Human Resource Management', 'human-resource-management', '1624229696Human-resources.png', 'cover_img.png', 'card_img.png', '2021-06-20 14:06:41', '2021-06-20 21:54:56'),
(13, 'Project Management', 'project-management', '1624229836Project-Management.png', 'cover_img.png', 'card_img.png', '2021-06-20 14:06:41', '2021-06-20 21:57:16'),
(14, 'Risk Management', 'risk-management', '1624229891Risk management.png', 'cover_img.png', 'card_img.png', '2021-06-20 14:06:41', '2021-06-20 21:58:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
