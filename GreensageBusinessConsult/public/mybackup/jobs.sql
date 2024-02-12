-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 25, 2021 at 04:43 PM
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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `job_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci,
  `due_date` timestamp NULL DEFAULT NULL,
  `show` tinyint(1) NOT NULL DEFAULT '0',
  `location_id` int(10) UNSIGNED NOT NULL,
  `industry_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `title`, `slug`, `job_code`, `company_name`, `description`, `job_type`, `short_description`, `due_date`, `show`, `location_id`, `industry_id`, `created_at`, `updated_at`) VALUES
(81, 'Business Analysis', 'business-analysis', 'D9FmylDkxK', 'Greensage Business Consult', '<p>Requirements:<br />\r\n1. 2+ years working experience.</p>\r\n\r\n<p>2. Bachelor&rsquo;s degree in Business, Management, Information Technology or related field</p>\r\n\r\n<p>3. Detail oriented, analytical and inquisitive</p>\r\n\r\n<p>4. Extremely organised with strong time-management skills</p>\r\n\r\n<p>5. Minimum of BSC.</p>\r\n\r\n<p>6. Excellent Communication skills.</p>\r\n\r\n<p>7. Ability to work with little or no supervision.</p>\r\n\r\n<p>Salary Range: 80,000-100,000</p>\r\n\r\n<p>Kindly send your CV to&nbsp;<strong>hr@greensageconsult.org</strong><br />\r\n&nbsp;</p>', 'Full Time', 'Greensage is a leading professional services firm with capabilities in Strategy, Business Consulting, HR  Advisory, Learning and development, Talent Acquisition and Outsourcing.', '2021-07-03 13:32:43', 0, 4, 10, '2021-06-25 12:16:59', '2021-06-25 13:41:22'),
(82, 'General Manager', 'general-manager', 'D8teU19spD', 'Greensage Business Consult', '<p><strong>Requirements:</strong></p>\r\n\r\n<p><br />\r\n1. 2+ years working experience.</p>\r\n\r\n<p>2. Bachelor&rsquo;s degree in Business, Management, Information Technology or related field</p>\r\n\r\n<p>3. Detail oriented, analytical and inquisitive</p>\r\n\r\n<p>4. Extremely organised with strong time-management skills</p>\r\n\r\n<p>5. Minimum of BSC.</p>\r\n\r\n<p>6. Excellent Communication skills.</p>\r\n\r\n<p>7. Ability to work with little or no supervision.</p>\r\n\r\n<p>Salary Range: 100,000-200,000</p>\r\n\r\n<p>Kindly send your CV to &nbsp;<em><strong>hr@greensageconsult.org</strong></em></p>', 'Full Time', 'Greensage is a leading professional services firm with capabilities in Strategy, Business Consulting, HR  Advisory, Learning and development, Talent Acquisition and Outsourcing.', '2021-07-03 15:13:58', 0, 7, 13, '2021-06-25 15:13:58', '2021-06-25 15:13:58'),
(83, 'Personal Assistant', 'personal-assistant', 'DALKnX9bJU', 'Greensage Business Consult', '<p><strong>Requirements:</strong></p>\r\n\r\n<p><br />\r\n1.&nbsp; 2+ years working experience.</p>\r\n\r\n<p>2. Bachelor&rsquo;s degree in Business, Management or related field</p>\r\n\r\n<p>3. Detail oriented, analytical and inquisitive</p>\r\n\r\n<p>4. Extremely organised with strong time-management skills</p>\r\n\r\n<p>5. Minimum of BSC.</p>\r\n\r\n<p>6. Excellent Communication skills.</p>\r\n\r\n<p>7. Ability to work with little or no supervision.</p>\r\n\r\n<p>Salary Range: 50,000-70,000</p>\r\n\r\n<p>Kindly send your CV to &nbsp;<strong><em>hr@greensageconsult.org</em></strong></p>', 'Full Time', 'Greensage is a leading professional services firm with capabilities in Strategy, Business Consulting, HR  Advisory, Learning and development, Talent Acquisition and Outsourcing.', '2021-07-03 15:20:14', 0, 4, 3, '2021-06-25 15:20:14', '2021-06-25 15:20:14'),
(84, 'Executive Assistant', 'executive-assistant', 'DsW3uwolM9', 'Greensage Business Consult', '<p><strong>Requirements:</strong><br />\r\n1.&nbsp; 2+ years working experience.</p>\r\n\r\n<p>2. Bachelor&rsquo;s degree in Business, Management, Information Technology or related field</p>\r\n\r\n<p>3. Detail oriented, analytical and inquisitive</p>\r\n\r\n<p>4. Extremely organised with strong time-management skills</p>\r\n\r\n<p>5. Minimum of BSC.</p>\r\n\r\n<p>6. Excellent Communication skills.</p>\r\n\r\n<p>7. Ability to work with little or no supervision.</p>\r\n\r\n<p>Salary Range: 50,000-70,000</p>\r\n\r\n<p>Kindly send your CV to &nbsp;<em><strong>hr@greensageconsult.org</strong></em></p>', 'Full Time', 'Greensage is a leading professional services firm with capabilities in Strategy, Business Consulting, HR  Advisory, Learning and development, Talent Acquisition and Outsourcing.', '2021-07-03 15:23:29', 0, 36, 5, '2021-06-25 15:23:29', '2021-06-25 15:23:29'),
(85, 'Business Development Managers', 'business-development-managers', 'D5Z3YhccyR', 'Greensage Business Consult', '<p><strong>Requirements:</strong><br />\r\n1. 2+ years working experience.</p>\r\n\r\n<p>2. Bachelor&rsquo;s degree in Business, Management, Information Technology or related field</p>\r\n\r\n<p>3. Detail oriented, analytical and inquisitive</p>\r\n\r\n<p>4. Extremely organised with strong time-management skills</p>\r\n\r\n<p>6. Minimum of BSC.</p>\r\n\r\n<p>7. Excellent Communication skills.</p>\r\n\r\n<p>8. Ability to work with little or no supervision.</p>\r\n\r\n<p>Salary: 400,000<br />\r\nGross Earning: 5 million</p>\r\n\r\n<p>Kindly send your CV to &nbsp;<em><strong>hr@greensageconsult.org</strong></em></p>', 'Full Time', 'Greensage is a leading professional services firm with capabilities in Strategy, Business Consulting, HR  Advisory, Learning and development, Talent Acquisition and Outsourcing.', '2021-07-03 15:24:52', 0, 36, 12, '2021-06-25 15:24:52', '2021-06-25 15:24:52'),
(86, 'Sales Team Lead(s)', 'sales-team-leads', 'DwWeq3NqMo', 'Greensage Business Consult', '<p><strong>Responsibilities/Summary of Functions:</strong><br />\r\n&middot; Work with team members to actively drive sales of the Company&rsquo;s products by ensuring profitable clients are sourced after, in order to hit agreed targets<br />\r\n&middot; Develop strategies for Team to reach target audiences, in order to build and develop client relationships<br />\r\n&middot; Provide guidance, support and assistance where necessary in helping team members achieve their targets<br />\r\n&middot; Participate in the planning, preparation and delivery of presentations for Clients when necessary<br />\r\n&middot; Preparation of weekly performance reports for review meetings with Team members to create awareness of and develop the Company&rsquo;s brand&nbsp;</p>\r\n\r\n<p><strong>Requirements/Qualification:</strong><br />\r\n&middot; Minimum of 3-5 years&rsquo; experience in a similar role<br />\r\n&middot; Degree in Finance, Marketing or related discipline</p>\r\n\r\n<p><strong>Abilities:</strong><br />\r\n&middot; Leadership and analytical skills<br />\r\n&middot; Excellent communications skills<br />\r\n&middot; Ability to work as an excellent team player<br />\r\n&middot; Result oriented</p>', 'Full Time', 'Greensage is a leading professional services firm with capabilities in Strategy, Business Consulting, HR  Advisory, Learning and development, Talent Acquisition and Outsourcing.', '2021-07-03 15:31:42', 0, 36, 26, '2021-06-25 15:31:42', '2021-06-25 15:31:42'),
(87, 'Sales Executives', 'sales-executives', 'D3tXkhPNHE', 'Greensage Business Consult', '<p><strong>Responsibilities/Summary of Functions:</strong></p>\r\n\r\n<ul>\r\n	<li>&nbsp;Actively drive the sales of the Company by sourcing for profitable clients and hitting agreed targets</li>\r\n	<li>&nbsp;Communicate with target audiences to build and develop client relationships</li>\r\n	<li>&middot;Create awareness of and develop the Company&rsquo;s brand</li>\r\n	<li>&middot;Provide advice to potential clients on purchasing products and services</li>\r\n	<li>Processing the orders of clients for products</li>\r\n	<li>&nbsp;Attend to inquiries , complaints of clients and handle appropriately&nbsp;</li>\r\n</ul>\r\n\r\n<p><strong>Requirements/Qualification:</strong></p>\r\n\r\n<ul>\r\n	<li>Minimum of 2 years&rsquo; experience</li>\r\n	<li>OND/HND/Degree in Marketing, Social Sciences or any relevant discipline</li>\r\n</ul>\r\n\r\n<p><strong>Abilities:</strong></p>\r\n\r\n<ul>\r\n	<li>Good communication skills</li>\r\n	<li>Meeting sales goals</li>\r\n	<li>Result oriented and Good team spirit</li>\r\n</ul>', 'Full Time', 'Greensage is a leading professional services firm with capabilities in Strategy, Business Consulting, HR  Advisory, Learning and development, Talent Acquisition and Outsourcing.', '2021-07-03 15:32:56', 0, 36, 26, '2021-06-25 15:32:56', '2021-06-25 15:38:52'),
(88, 'Business analyst', 'business-analyst', 'DTRkmMDibb', 'Greensage Business Consult', '<ul>\r\n	<li>Female of not more than 24 years</li>\r\n	<li>Lives around the lekki environs</li>\r\n	<li>2+ years working experience in Business Analysis or related field&nbsp;</li>\r\n	<li>Bachelor&rsquo;s degree in Business, Management, Information Technology or related field</li>\r\n	<li>Ability to impact operations and effect change without being confrontational&nbsp;</li>\r\n	<li>Detail oriented, analytical and inquisitive&nbsp;</li>\r\n	<li>Strong analytical skills with the ability to collect, organize, analyze, and disseminate significant amounts of information with attention to detail and accuracy&nbsp;</li>\r\n	<li>Ability to work independently and with others * Microsoft Access and/or SQL experience is a plus&nbsp;</li>\r\n	<li>Experience creating detailed reports and giving presentations&nbsp;</li>\r\n	<li>Extremely organized with strong time-management skills.&nbsp;&nbsp;</li>\r\n</ul>', 'Full Time', 'Greensage is a leading professional services firm with capabilities in Strategy, Business Consulting, HR  Advisory, Learning and development, Talent Acquisition and Outsourcing.', '2021-07-03 15:36:46', 0, 36, 20, '2021-06-25 15:36:46', '2021-06-25 15:36:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
