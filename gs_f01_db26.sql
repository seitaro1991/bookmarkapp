-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2018 年 10 月 03 日 10:19
-- サーバのバージョン： 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gs_f01_db26`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_bm_table`
--

CREATE TABLE IF NOT EXISTS `gs_bm_table` (
`id` int(12) NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `comment` text COLLATE utf8_unicode_ci,
  `indate` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_bm_table`
--

INSERT INTO `gs_bm_table` (`id`, `title`, `img`, `url`, `comment`, `indate`) VALUES
(20, '宮本武蔵', '<img alt="Miyamoto Musasｈi Self-Portrait.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/0/0c/Miyamoto_Musas%EF%BD%88i_Self-Portrait.jpg/220px-Miyamoto_Musas%EF%BD%88i_Self-Portrait.jpg" width="220" height="459" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/0c/Miyamoto_Musas%EF%BD%88i_Self-Portrait.jpg/330px-Miyamoto_Musas%EF%BD%88i_Self-Portrait.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/0c/Miyamoto_Musas%EF%BD%88i_Self-Portrait.jpg/440px-Miyamoto_Musas%EF%BD%88i_Self-Portrait.jpg 2x" data-file-width="1088" data-file-height="2272">', 'https://ja.wikipedia.org/wiki/%E5%AE%AE%E6%9C%AC%E6%AD%A6%E8%94%B5', '二刀流ハンパないって。', '2018-09-19 19:59:21'),
(21, '深田恭子', '<img alt="深田 恭子" src="//upload.wikimedia.org/wikipedia/commons/thumb/d/df/Kyoko_Fukada_-_red_carpet_at_Harry_Potter_2007_Tokyo.jpg/180px-Kyoko_Fukada_-_red_carpet_at_Harry_Potter_2007_Tokyo.jpg" width="180" height="446" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/df/Kyoko_Fukada_-_red_carpet_at_Harry_Potter_2007_Tokyo.jpg/270px-Kyoko_Fukada_-_red_carpet_at_Harry_Potter_2007_Tokyo.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/df/Kyoko_Fukada_-_red_carpet_at_Harry_Potter_2007_Tokyo.jpg/360px-Kyoko_Fukada_-_red_carpet_at_Harry_Potter_2007_Tokyo.jpg 2x" data-file-width="658" data-file-height="1631">', 'https://ja.wikipedia.org/wiki/%E6%B7%B1%E7%94%B0%E6%81%AD%E5%AD%90', '人のカタチをした女神だ。', '2018-09-19 20:00:21'),
(24, '孫正義', '<img alt="Masayoshi Son.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/d/d3/Masayoshi_Son.jpg/220px-Masayoshi_Son.jpg" width="220" height="147" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/d3/Masayoshi_Son.jpg/330px-Masayoshi_Son.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/d3/Masayoshi_Son.jpg/440px-Masayoshi_Son.jpg 2x" data-file-width="3456" data-file-height="2304">', 'https://ja.wikipedia.org/wiki/%E5%AD%AB%E6%AD%A3%E7%BE%A9', 'お金持ち', '2018-09-22 14:16:32'),
(25, 'ジョン・レノン', '<img alt="John Lennon 1964 001 cropped.png" src="//upload.wikimedia.org/wikipedia/commons/thumb/9/9a/John_Lennon_1964_001_cropped.png/220px-John_Lennon_1964_001_cropped.png" width="220" height="389" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/9/9a/John_Lennon_1964_001_cropped.png/330px-John_Lennon_1964_001_cropped.png 1.5x, //upload.wikimedia.org/wikipedia/commons/9/9a/John_Lennon_1964_001_cropped.png 2x" data-file-width="380" data-file-height="672">', 'https://ja.wikipedia.org/wiki/%E3%82%B8%E3%83%A7%E3%83%B3%E3%83%BB%E3%83%AC%E3%83%8E%E3%83%B3', 'オノ・ヨーコの旦那', '2018-09-26 20:45:52');

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_php02_table`
--

CREATE TABLE IF NOT EXISTS `gs_php02_table` (
`id` int(12) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `age` int(12) NOT NULL,
  `detail` text COLLATE utf8_unicode_ci,
  `indate` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_php02_table`
--

INSERT INTO `gs_php02_table` (`id`, `name`, `email`, `age`, `detail`, `indate`) VALUES
(1, 'ジーズ福岡', 'gs_f@test.com', 10, 'test', '2018-09-15 15:18:06'),
(2, 'ジーズ東京', 'gs_t@test.com', 20, 'テスト', '2018-09-15 15:21:24'),
(3, 'ジーズ沖縄', 'gs_o@teeest.com', 30, 'てすと', '2018-09-15 15:26:30'),
(4, 'ジーザス福岡', 'gzs_f@test.com', 40, 'test', '2018-09-15 15:28:16'),
(5, 'ジーザス東京', 'gzs_t@test.com', 10, 'テスト', '2018-09-15 15:29:01'),
(6, 'ジーザス沖縄', 'gzs_o@test.com', 20, 'てすと', '2018-09-15 15:29:43'),
(7, '久川', 'seitarohisakawa@gmail.com', 30, 'テースト', '2018-09-15 16:16:32');

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_php03_table`
--

CREATE TABLE IF NOT EXISTS `gs_php03_table` (
`id` int(12) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `detail` text COLLATE utf8_unicode_ci,
  `indate` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_php03_table`
--

INSERT INTO `gs_php03_table` (`id`, `name`, `email`, `detail`, `indate`) VALUES
(2, '山崎', 'yamasaki@gs.gs', 'test02', '2018-09-15 15:22:57'),
(3, 'osg', 'osg@gs.gs', 'test03', '2018-09-15 15:23:20'),
(4, 'morita', 'morita@gs.gs', 'test04', '2018-09-15 15:23:48'),
(5, 'kimura', 'kimura@gs.gs', 'test05', '2018-09-15 15:24:48'),
(6, 'kamiyama', 'kamiyama@gs.gs', 'test06', '2018-09-15 16:12:26'),
(7, 'kanou', 'kanou@gs.gs', 'test07', '2018-09-15 16:13:06'),
(8, 'kosuge', 'kosuge@gs.gs', 'test08', '2018-09-15 16:17:04'),
(9, 'iseki', 'iseki@gs.gs', 'test09', '2018-09-15 16:47:30');

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_user_table`
--

CREATE TABLE IF NOT EXISTS `gs_user_table` (
`id` int(12) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `lid` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `lpw` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `kanri_flg` int(1) NOT NULL COMMENT '0=通常ユーザー　1=管理者',
  `life_flg` int(1) NOT NULL COMMENT '0=使用中　1=退会'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_user_table`
--

INSERT INTO `gs_user_table` (`id`, `name`, `lid`, `lpw`, `kanri_flg`, `life_flg`) VALUES
(2, 'SEITARO HISAKAWA', 'MAKO', '0000', 0, 0),
(3, 'ひさかわせいたろう', 'マコ', '0000', 1, 0),
(5, 'せい', 'sei', '0000', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gs_php02_table`
--
ALTER TABLE `gs_php02_table`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gs_php03_table`
--
ALTER TABLE `gs_php03_table`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gs_user_table`
--
ALTER TABLE `gs_user_table`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `gs_php02_table`
--
ALTER TABLE `gs_php02_table`
MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `gs_php03_table`
--
ALTER TABLE `gs_php03_table`
MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `gs_user_table`
--
ALTER TABLE `gs_user_table`
MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
