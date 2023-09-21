-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 
-- 伺服器版本： 8.0.17
-- PHP 版本： 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `pinhow`
--

-- --------------------------------------------------------

--
-- 資料表結構 `car`
--

CREATE TABLE `car` (
  `num` int(10) UNSIGNED NOT NULL,
  `user` text COLLATE utf8mb4_general_ci NOT NULL,
  `1` int(11) NOT NULL DEFAULT '0',
  `2` int(11) NOT NULL DEFAULT '0',
  `3` int(11) NOT NULL DEFAULT '0',
  `4` int(11) NOT NULL DEFAULT '0',
  `5` int(11) NOT NULL DEFAULT '0',
  `6` int(11) NOT NULL DEFAULT '0',
  `7` int(11) DEFAULT '0',
  `8` int(11) NOT NULL DEFAULT '0',
  `9` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `car`
--

INSERT INTO `car` (`num`, `user`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`) VALUES
(2, '111', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(24, 'cc', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(25, 'zzz', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(27, 'root', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(30, 'aa', 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- 資料表結構 `good`
--

CREATE TABLE `good` (
  `num` int(10) UNSIGNED NOT NULL,
  `user` text COLLATE utf8mb4_general_ci NOT NULL,
  `context` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `good`
--

INSERT INTO `good` (`num`, `user`, `context`) VALUES
(2, 'root', '蛋糕好吃'),
(4, 'root', '快速'),
(5, 'root', '口感綿密，好吃，老闆娘也漂亮'),
(6, 'root', '好吃'),
(7, '111', '讚喔!!');

-- --------------------------------------------------------

--
-- 資料表結構 `member`
--

CREATE TABLE `member` (
  `num` int(10) UNSIGNED NOT NULL,
  `user` text COLLATE utf8mb4_general_ci NOT NULL,
  `pw` text COLLATE utf8mb4_general_ci NOT NULL,
  `name` text COLLATE utf8mb4_general_ci NOT NULL,
  `phone` text COLLATE utf8mb4_general_ci NOT NULL,
  `adress` text COLLATE utf8mb4_general_ci NOT NULL,
  `mail` text COLLATE utf8mb4_general_ci NOT NULL,
  `login` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `member`
--

INSERT INTO `member` (`num`, `user`, `pw`, `name`, `phone`, `adress`, `mail`, `login`) VALUES
(1, 'root', 'asd867790', '吳佩八', '1111111111', '台北', '11@gmail.com', 0),
(2, '111', '1233', '吳沛四', '0913585874', '台中市太平區中山路二段', '123@gmail.com', 0),
(17, 'asd7800237', 'asd867790', '管理員', 'x', 'x', 'x', 2),
(18, 'cc', 'asd867790', '', '', '', '', 0),
(20, 'aa', 'asd', '吳佩十', '0955555555', '台中市太平區中山路三二段', '124533@gmail.com', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `oder`
--

CREATE TABLE `oder` (
  `num` int(10) UNSIGNED NOT NULL,
  `user` text COLLATE utf8mb4_general_ci NOT NULL,
  `1` int(11) NOT NULL,
  `2` int(11) NOT NULL,
  `3` int(11) NOT NULL,
  `4` int(11) NOT NULL,
  `5` int(11) NOT NULL,
  `6` int(11) NOT NULL,
  `7` int(11) NOT NULL,
  `8` int(11) NOT NULL,
  `9` int(11) NOT NULL,
  `money` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `oder`
--

INSERT INTO `oder` (`num`, `user`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `money`, `status`) VALUES
(19, '111', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(21, 'cc', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(22, 'zzz', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(23, 'root', 0, 2, 0, 4, 2, 0, 0, 1, 0, 7120, 2),
(26, 'aa', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`num`);

--
-- 資料表索引 `good`
--
ALTER TABLE `good`
  ADD PRIMARY KEY (`num`);

--
-- 資料表索引 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`num`);

--
-- 資料表索引 `oder`
--
ALTER TABLE `oder`
  ADD PRIMARY KEY (`num`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `car`
--
ALTER TABLE `car`
  MODIFY `num` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `good`
--
ALTER TABLE `good`
  MODIFY `num` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `member`
--
ALTER TABLE `member`
  MODIFY `num` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `oder`
--
ALTER TABLE `oder`
  MODIFY `num` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
