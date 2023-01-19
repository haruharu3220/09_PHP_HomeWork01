-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2023 年 1 月 19 日 17:07
-- サーバのバージョン： 10.4.27-MariaDB
-- PHP のバージョン: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `Our_nice_house`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- テーブルの構造 `file_table`
--

CREATE TABLE `file_table` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `category` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `insert_time` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `update_time` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `file_table`
--

INSERT INTO `file_table` (`id`, `file_name`, `file_path`, `category`, `description`, `insert_time`, `update_time`) VALUES
(1, 'Goon.jpeg', '/Applications/XAMPP/xamppfiles/htdocs/08_PHP_HomeWork03/images/20230114180218Goon.jpeg', 'テスト', 'これはテストだよ', '2023-01-15 02:02:18.000000', '2023-01-15 02:02:18.000000'),
(2, 'Goon.jpeg', '/Applications/XAMPP/xamppfiles/htdocs/08_PHP_HomeWork03/images/20230114180256Goon.jpeg', 'テスト', 'これはテストだよ', '2023-01-15 02:02:56.000000', '2023-01-15 02:02:56.000000'),
(3, 'MamyPoko.jpg', '/Applications/XAMPP/xamppfiles/htdocs/08_PHP_HomeWork03/images/20230114182642MamyPoko.jpg', 'テスト', 'これはテストだよ', '2023-01-15 02:26:42.000000', '2023-01-15 02:26:42.000000'),
(4, 'Merries.jpg', '/Applications/XAMPP/xamppfiles/htdocs/09_PHP_HomeWork01/images/20230114183823Merries.jpg', 'テスト', 'これはテストだよ', '2023-01-15 02:38:23.000000', '2023-01-15 02:38:23.000000');

-- --------------------------------------------------------

--
-- テーブルの構造 `users_table`
--

CREATE TABLE `users_table` (
  `id` int(11) NOT NULL,
  `username` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(128) NOT NULL,
  `is_admin` int(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `users_table`
--

INSERT INTO `users_table` (`id`, `username`, `password`, `is_admin`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'admin', 'admin12345', 1, '2023-01-18 00:38:19', '2023-01-18 00:38:19', NULL),
(2, 'admin', 'admin', 0, '2023-01-18 00:41:39', '2023-01-18 00:41:39', NULL);

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `file_table`
--
ALTER TABLE `file_table`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `users_table`
--
ALTER TABLE `users_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- テーブルの AUTO_INCREMENT `file_table`
--
ALTER TABLE `file_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- テーブルの AUTO_INCREMENT `users_table`
--
ALTER TABLE `users_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
