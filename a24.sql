-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2023 at 02:25 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `a24`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'birthday', 1, '2023-08-15 01:38:27', '2023-08-15 01:38:27'),
(2, 'wedding', 1, '2023-08-15 01:38:35', '2023-08-15 01:38:35'),
(3, 'walima', 1, '2023-08-15 01:38:42', '2023-08-15 01:38:42'),
(4, 'opening', 1, '2023-08-15 01:38:49', '2023-08-15 01:38:49'),
(5, 'Concert', 1, '2023-08-15 03:50:39', '2023-08-15 03:50:39'),
(6, 'Conferences & Seminars', 2, '2023-08-15 06:12:41', '2023-08-15 06:12:41'),
(7, 'Workshops & Training', 2, '2023-08-15 06:12:54', '2023-08-15 06:12:54'),
(8, 'Networking & Meetups', 2, '2023-08-15 06:13:06', '2023-08-15 06:13:06'),
(9, 'Exhibitions & Trade Shows', 2, '2023-08-15 06:13:12', '2023-08-15 06:13:12'),
(10, 'Music & Entertainment', 2, '2023-08-15 06:13:18', '2023-08-15 06:13:18'),
(11, 'Arts & Culture', 2, '2023-08-15 06:13:25', '2023-08-15 06:13:25'),
(12, 'Sports & Fitness', 2, '2023-08-15 06:13:35', '2023-08-15 06:13:35'),
(13, 'Charity & Fundraising', 2, '2023-08-15 06:13:42', '2023-08-15 06:13:42'),
(14, 'Food & Culinary', 2, '2023-08-15 06:13:49', '2023-08-15 06:13:49'),
(15, 'Tech & Innovation', 2, '2023-08-15 06:13:56', '2023-08-15 06:13:56'),
(16, 'Health & Wellness', 2, '2023-08-15 06:14:04', '2023-08-15 06:14:04'),
(17, 'Education & Learning', 2, '2023-08-15 06:14:16', '2023-08-15 06:14:16'),
(18, 'Travel & Adventure', 2, '2023-08-15 06:14:23', '2023-08-15 06:14:23'),
(19, 'Religious & Spiritual', 2, '2023-08-15 06:14:30', '2023-08-15 06:14:30');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `status` enum('upcoming','ongoing','finished') NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `description`, `date`, `time`, `location`, `status`, `category_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Madiha\'s Birthday', 'Madihas\' birthday party. Please join with us to celebrate...', '2023-09-18', '16:00', 'Kayettuli, Dhaka', 'upcoming', 1, 1, '2023-08-15 01:40:16', '2023-08-15 01:56:06'),
(4, 'Matha nosto concert', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error quae atque quas itaque aliquam ut similique dolorem voluptas beatae, illum dignissimos totam nihil reiciendis eveniet nesciunt voluptatibus officiis et delectus. Odit sunt ipsum, ipsa dolores voluptatem numquam vitae dolor minima maxime voluptate amet molestiae saepe inventore laborum totam fugit deserunt nam sequi fugiat maiores ipsam tenetur. Porro corrupti earum qui molestiae reiciendis cum, quasi magnam ut quo. Earum cum atque optio ea laudantium fugiat. Quia, mollitia iusto. Tempore repellat explicabo magnam voluptatum quam inventore officiis blanditiis mollitia adipisci quod, nostrum sequi debitis ad neque eius fugit libero quibusdam nemo. Eaque, voluptates consequuntur voluptate temporibus commodi dicta ut aut nemo maxime nulla incidunt atque animi quam tempore esse quasi pariatur suscipit voluptatibus optio veniam tempora! Quas sapiente atque fugiat tempore amet doloremque pariatur! A, saepe placeat praesentium quos excepturi perferendis eveniet omnis ut porro adipisci deleniti. Similique, ut at nam saepe soluta repudiandae molestias deserunt commodi provident, incidunt, totam blanditiis veniam! Minima facilis enim quasi error incidunt voluptatibus laboriosam? Quas accusamus voluptates quis aperiam neque sit distinctio ut in illum ullam omnis, architecto iure totam animi necessitatibus reprehenderit, provident quidem rerum illo eius repudiandae nemo. Magni quae cupiditate ut. Velit, exercitationem.', '2023-08-30', '16:14', 'Bhua Stadium, Dhaka', 'upcoming', 5, 1, '2023-08-15 03:52:12', '2023-08-15 03:52:12'),
(5, 'Rumi\'s Wedding', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores consequatur dicta quaerat deserunt facere possimus molestias natus dolor sapiente quas, fugit laborum, repudiandae sit quasi a pariatur optio quo? Magnam, consequatur dolore! Quas magni commodi nulla ipsa odit ea, itaque vero numquam harum aspernatur nisi, earum, ut ipsum laborum tempora saepe quod? Voluptas nam eveniet maiores quibusdam alias modi inventore quos ex! Beatae animi debitis inventore. Repellat unde minima cum ipsa beatae, voluptates delectus incidunt voluptatum distinctio ducimus, fuga dolores praesentium porro rem officia nesciunt ad? Similique magnam quia tempore, porro dolor atque quasi rem eius hic fugit blanditiis, non necessitatibus inventore ipsum sint id quae ut, optio commodi eum amet perspiciatis. Nulla aliquid facilis libero illum nesciunt fugiat quis ipsa, eum itaque, autem repudiandae minus suscipit blanditiis esse necessitatibus ullam fugit. Omnis officia a quia libero, aperiam suscipit est cum explicabo adipisci sed soluta! Reprehenderit corrupti perspiciatis non debitis!', '2023-10-19', '20:30', 'Wari,Dhaka', 'upcoming', 2, 1, '2023-08-15 04:12:03', '2023-08-15 04:12:03'),
(6, 'Coke Studio Concert 3', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores consequatur dicta quaerat deserunt facere possimus molestias natus dolor sapiente quas, fugit laborum, repudiandae sit quasi a pariatur optio quo? Magnam, consequatur dolore! Quas magni commodi nulla ipsa odit ea, itaque vero numquam harum aspernatur nisi, earum, ut ipsum laborum tempora saepe quod? Voluptas nam eveniet maiores quibusdam alias modi inventore quos ex! Beatae animi debitis inventore. Repellat unde minima cum ipsa beatae, voluptates delectus incidunt voluptatum distinctio ducimus, fuga dolores praesentium porro rem officia nesciunt ad? Similique magnam quia tempore, porro dolor atque quasi rem eius hic fugit blanditiis, non necessitatibus inventore ipsum sint id quae ut, optio commodi eum amet perspiciatis. Nulla aliquid facilis libero illum nesciunt fugiat quis ipsa, eum itaque, autem repudiandae minus suscipit blanditiis esse necessitatibus ullam fugit. Omnis officia a quia libero, aperiam suscipit est cum explicabo adipisci sed soluta! Reprehenderit corrupti perspiciatis non debitis!', '2023-09-01', '12:50', 'Junga Stadium', 'upcoming', 5, 1, '2023-08-15 04:14:03', '2023-08-15 05:25:46'),
(7, 'Highway to hell', 'concert', '2023-08-25', '18:22', 'London', 'upcoming', 5, 1, '2023-08-15 05:21:14', '2023-08-15 05:21:14'),
(8, 'terter', 'tert', '2023-08-31', '03:46', 'uk', 'ongoing', 5, 1, '2023-08-15 05:21:39', '2023-08-15 05:21:39'),
(9, 'add', 'asdd', '2023-08-23', '15:04', 'asdsd', 'finished', 5, 1, '2023-08-15 05:23:18', '2023-08-15 05:23:18'),
(10, 'Arafat\'s walima', 'asdkjdkjsd', '2023-09-15', '14:03', 'Feni', 'upcoming', 3, 1, '2023-08-15 05:26:36', '2023-08-15 05:26:36'),
(11, 'Grand opening oraimo store', 'asdds', '2023-08-14', '14:03', 'dhaka', 'finished', 4, 1, '2023-08-15 05:27:23', '2023-08-15 05:27:23'),
(12, 'Nisa\'s Birthday', 'asdhsjhdjk', '2023-08-13', '18:36', 'Mirpur', 'upcoming', 1, 1, '2023-08-15 05:35:36', '2023-08-15 05:35:36'),
(14, 'asds', 'asdad', '2023-08-16', '02:04', 'asd', 'upcoming', 16, 2, '2023-08-15 06:16:56', '2023-08-15 06:16:56');

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
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(9, '2019_08_19_000000_create_failed_jobs_table', 1),
(10, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(11, '2023_08_14_164016_create_categories_table', 1),
(12, '2023_08_14_252055_create_events_table', 1);

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
(1, 'Albub Yusuf', 'albubyusuf@gmail.com', NULL, '$2y$10$FqnaG8ZcR00iwKCywI7cI.ry4oHGp3pQa5N8MBQs9vwD6XVz7c0BK', NULL, '2023-08-15 01:38:12', '2023-08-15 01:38:12'),
(2, 'Biplob', 'alphazorafa@gmail.com', NULL, '$2y$10$meg4A1iR5ST8SaB7R6Z9Ce3/37/f8tvYKKckHoDy9Z.TwvjRJAo0C', NULL, '2023-08-15 06:11:08', '2023-08-15 06:11:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_user_id_foreign` (`user_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `events_user_id_foreign` (`user_id`),
  ADD KEY `events_category_id_foreign` (`category_id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `events_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
