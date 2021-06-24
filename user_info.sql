-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2021 年 6 月 24 日 14:55
-- サーバのバージョン： 10.4.19-MariaDB
-- PHP のバージョン: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gsacf_d08_05_prod`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `user_info`
--

CREATE TABLE `user_info` (
  `id` int(12) NOT NULL,
  `no` int(12) DEFAULT NULL,
  `name` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brithday` date NOT NULL,
  `recoder` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `memo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `user_info`
--

INSERT INTO `user_info` (`id`, `no`, `name`, `brithday`, `recoder`, `memo`, `created_at`, `updated_at`) VALUES
(1, 1, 'テスト太郎', '1990-05-21', '小石大介', '今日は元気！', '2021-06-24', '2021-06-24'),
(2, 2, 'テスト次郎', '1960-06-21', '小石大介', '今日は元気！', '2021-06-24', '2021-06-24'),
(3, 3, 'テストサン', '1970-12-21', '小石大介', '今日はだめ！', '2021-06-24', '2021-06-24'),
(4, 4, 'テスト介', '1970-01-21', '小石大介', '今日は元気ないです！', '2021-06-24', '2021-06-24'),
(5, 5, 'テストはじめ', '1980-03-21', '小石大介', '今日は寝不足！', '2021-06-24', '2021-06-24'),
(6, 6, 'テスト五郎', '2000-04-21', '小石大介', '今日は眠そう！', '2021-06-24', '2021-06-24'),
(7, 7, 'テストにいさん', '2010-11-21', '小石大介', '今日は遊び足りない！', '2021-06-24', '2021-06-24'),
(8, 14, 'JOJO', '2021-06-24', 'JOJO', 'wryyy', '2021-06-24', '2021-06-24'),
(9, 5, 'テスト子', '1960-01-01', 'JOJO', 'hooo', '2021-06-24', '2021-06-24');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
