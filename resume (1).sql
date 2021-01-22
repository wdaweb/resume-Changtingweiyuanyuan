-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 2021 年 01 月 22 日 00:24
-- 伺服器版本： 10.5.8-MariaDB
-- PHP 版本： 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `resume`
--

-- --------------------------------------------------------

--
-- 資料表結構 `basic_intro`
--

CREATE TABLE `basic_intro` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `addr` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `graduate` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `basic_intro`
--

INSERT INTO `basic_intro` (`id`, `name`, `addr`, `email`, `graduate`, `position`) VALUES
(1, '庭瑋', '新北市, 永和區', 'yuan097@kimo.com', '德明財經科技大學—行銷管理系', '前/後端工程師');

-- --------------------------------------------------------

--
-- 資料表結構 `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL,
  `intro` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wk` tinyint(1) DEFAULT NULL,
  `por` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `porName` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `image`
--

INSERT INTO `image` (`id`, `img`, `sh`, `intro`, `wk`, `por`, `porName`) VALUES
(49, 'intro20210120041300.png', 0, '1', 0, '0', NULL),
(50, 'intro20210120041307.png', 0, '1', 0, '0', NULL),
(52, 'por20210121034335.png', 1, '0', 0, '1', '12345'),
(53, 'work20210121044614.png', 0, '0', 0, '0', NULL),
(54, 'work20210121045217.png', 0, '0', 0, '0', NULL),
(55, 'work20210121045744.png', 0, '0', 0, '0', NULL),
(56, 'work20210121050506.png', 0, '0', 0, '0', NULL),
(57, 'por20210121050929.png', 1, '0', 0, '1', 'ffff'),
(58, 'work20210121120124.png', 0, '0', 0, '0', NULL),
(59, 'por20210121123945.png', 1, '0', 0, '1', 'qqq'),
(60, 'work20210121124722.png', 0, '0', 0, '0', NULL),
(61, 'intro20210121075545.png', 0, '1', 0, '0', NULL),
(62, 'work20210121081016.png', 1, '0', 1, '0', NULL),
(63, 'work20210121081720.png', 0, '0', 1, '0', NULL),
(64, 'work20210121081726.png', 1, '0', 1, '0', NULL),
(65, 'work20210121081733.png', 0, '0', 1, '0', NULL),
(67, 'por20210121112345.png', 1, '0', 0, '1', '時鐘'),
(68, 'por20210121112423.png', 1, '0', 0, '1', 'animation'),
(69, 'por20210121113305.png', 1, '0', 0, '1', '釣魚小遊戲'),
(70, 'intro20210122121415.jpg', 1, '1', 0, '0', NULL),
(71, 'por20210122010906.jpg', 1, '0', 0, '1', 'aa'),
(72, 'por20210122010940.jpeg', 1, '0', 0, '1', '萬年曆');

-- --------------------------------------------------------

--
-- 資料表結構 `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `acc` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pw` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `login`
--

INSERT INTO `login` (`id`, `acc`, `pw`) VALUES
(1, 'chel', '123455');

-- --------------------------------------------------------

--
-- 資料表結構 `porfolio`
--

CREATE TABLE `porfolio` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `href` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sh` tinyint(1) NOT NULL,
  `del` tinyint(1) DEFAULT NULL,
  `php` tinyint(1) UNSIGNED DEFAULT NULL,
  `mysql` tinyint(1) UNSIGNED DEFAULT NULL,
  `js` tinyint(1) UNSIGNED DEFAULT NULL,
  `jquery` tinyint(1) UNSIGNED DEFAULT NULL,
  `css` tinyint(1) UNSIGNED DEFAULT NULL,
  `bootstrap` tinyint(1) UNSIGNED DEFAULT NULL,
  `ps` int(10) UNSIGNED DEFAULT NULL,
  `ai` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `porfolio`
--

INSERT INTO `porfolio` (`id`, `name`, `href`, `sh`, `del`, `php`, `mysql`, `js`, `jquery`, `css`, `bootstrap`, `ps`, `ai`) VALUES
(15, '時鐘', '#', 1, 0, 0, 0, 1, 0, 1, 0, 0, 0),
(16, 'animation', '#', 1, 0, 0, 0, 0, 0, 1, 0, 0, 0),
(17, '釣魚小遊戲', '', 1, 0, NULL, NULL, NULL, 1, 1, NULL, NULL, NULL),
(20, '萬年曆', 'href', 1, 0, 1, 1, 0, 0, 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- 資料表結構 `self_intro`
--

CREATE TABLE `self_intro` (
  `id` int(10) UNSIGNED NOT NULL,
  `textC` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `textE` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `del` tinyint(1) DEFAULT NULL,
  `sh` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `self_intro`
--

INSERT INTO `self_intro` (`id`, `textC`, `textE`, `del`, `sh`) VALUES
(4, 'bbbbdgdsg', 'bbbbbb', 0, 0),
(8, '之前接觸到了前端技術,閒暇時間購買Udemy線上課程自學,\r\n因緣際會下參加了泰山職訓的甄試便開始學習程式技術,\r\n在寫程式的過程也獲得了些許的成就感,\r\n期盼未來能與工作上的夥伴一同進步!', 'i:)', NULL, 1),
(11, 'asdsad', 'adsfdf', NULL, 0);

-- --------------------------------------------------------

--
-- 資料表結構 `skills`
--

CREATE TABLE `skills` (
  `id` int(11) UNSIGNED NOT NULL,
  `ct` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` tinyint(1) UNSIGNED NOT NULL DEFAULT 1,
  `del` tinyint(1) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `skills`
--

INSERT INTO `skills` (`id`, `ct`, `name`, `sh`, `del`) VALUES
(1, 'frontend', 'html', 1, 0),
(2, 'backend', 'php', 1, 0),
(4, 'graphic_design', 'AI', 1, 0),
(6, 'backend', 'mySQL', 1, 0),
(7, 'frontend', 'css', 1, 0),
(8, 'frontend', 'JavaScript', 1, 0),
(11, 'others', 'TOEIC 600', 1, 0),
(13, 'graphic_design', 'PhotoShop', 1, 0);

-- --------------------------------------------------------

--
-- 資料表結構 `sk_text`
--

CREATE TABLE `sk_text` (
  `id` int(11) NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `sk_text`
--

INSERT INTO `sk_text` (`id`, `text`, `title`) VALUES
(1, ' UUUUUUUUUUU', 'frontend'),
(2, '        文字文字文字文字文字文字文字文字文字文字文字文字文字文字文字文字文字文字文字文字文字文字文字文字文字文字文字文字文字文字文字        ', 'backend'),
(4, '文字文字文字文字文字\r\n文字文字文字文字文字文字文字\r\n文字文字文字文字文字文\r\n字文字文字文字文字文\r\n字文字文字文字文字文字\r\n文字文字文字        ', 'graphic_design'),
(5, '字文字文字文字文字\r\n文字文字文字\r\n文字文\r\n字文字文字文字文字文字文字文字文字\r\n文字文字文\r\n字文字文字文字文字文字文字文字文字文字文字        ', 'others');

-- --------------------------------------------------------

--
-- 資料表結構 `work_experience`
--

CREATE TABLE `work_experience` (
  `id` int(11) NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `work_experience`
--

INSERT INTO `work_experience` (`id`, `text`, `sh`) VALUES
(1, '大學畢業第一份工作\r\n在犇亞會議中心擔任櫃台人員\r\n期間        ', 1),
(2, 'BBBBBB\r\nBBBBBBBBBBBBB\r\nBBBBBBBBBBBBBBBBBB\r\nBBBBBBBBBBBB', 1),
(3, 'CCCCCCCCCC\r\nCCCCCCCCCCCCCCC\r\nCCCCCCCCCCCCCCCCCCCC\r\nCCCCCCCCCC\r\nCCCCCCCCCCCCCCCCCCCC', 1);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `basic_intro`
--
ALTER TABLE `basic_intro`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- 資料表索引 `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `porfolio`
--
ALTER TABLE `porfolio`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `self_intro`
--
ALTER TABLE `self_intro`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `sk_text`
--
ALTER TABLE `sk_text`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `work_experience`
--
ALTER TABLE `work_experience`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `basic_intro`
--
ALTER TABLE `basic_intro`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `porfolio`
--
ALTER TABLE `porfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `self_intro`
--
ALTER TABLE `self_intro`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `sk_text`
--
ALTER TABLE `sk_text`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `work_experience`
--
ALTER TABLE `work_experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
