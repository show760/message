-- phpMyAdmin SQL Dump
-- version 4.2.3deb1
-- http://www.phpmyadmin.net
--
-- 主機: localhost
-- 產生時間： 2014 年 08 月 05 日 17:32
-- 伺服器版本: 5.5.37-1
-- PHP 版本： 5.6.0RC2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 資料庫： `james`
--

-- --------------------------------------------------------

--
-- 資料表結構 `message`
--

CREATE TABLE IF NOT EXISTS `message` (
`message_Id` int(11) NOT NULL,
  `message_Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `message_Name` varchar(10) NOT NULL,
  `message_Text` tinytext NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=147 ;

--
-- 資料表的匯出資料 `message`
--

INSERT INTO `message` (`message_Id`, `message_Time`, `message_Name`, `message_Text`) VALUES
(1, '2014-07-16 03:12:27', 'panda', 'test'),
(2, '2014-07-16 03:41:12', 'james', 'hello'),
(3, '2014-07-16 04:29:47', '23132', '4654654'),
(125, '2014-07-16 04:29:19', 'James', 'TEST!!!'),
(126, '2014-07-16 04:30:09', 'james', 'TEST'),
(127, '2014-07-16 05:06:32', 'panda', '測試修改內容                     '),
(140, '2014-07-28 03:07:01', 'asdgsdag', '731152432'),
(143, '2014-07-29 08:38:56', 'asdfsadf', '165620'),
(144, '2014-07-31 07:09:34', '0731', '150929'),
(145, '2014-08-01 02:06:21', '0801', '10:22:00'),
(146, '2014-08-04 01:03:24', 'Nash', '0804 16:00:00');

-- --------------------------------------------------------

--
-- 資料表結構 `remessage`
--

CREATE TABLE IF NOT EXISTS `remessage` (
`remessage_Id` int(11) NOT NULL,
  `message_Id` int(11) NOT NULL,
  `remessage_Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `remessage_Name` varchar(10) NOT NULL,
  `remessage_Text` tinytext NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- 資料表的匯出資料 `remessage`
--

INSERT INTO `remessage` (`remessage_Id`, `message_Id`, `remessage_Time`, `remessage_Name`, `remessage_Text`) VALUES
(2, 2, '2014-07-25 08:29:29', 'James', '回覆                     '),
(6, 140, '2014-07-28 03:24:31', 'test', '0728'),
(7, 127, '2014-07-28 05:48:45', 'James', '123321'),
(8, 1, '2014-07-28 06:27:26', 'panda', 'panda                     '),
(9, 1, '2014-07-30 02:50:57', 'kobe', 'text'),
(10, 1, '2014-07-30 05:44:43', 'boy', '1024'),
(11, 2, '2014-07-31 08:09:02', 'kobe', '0731160900');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `message`
--
ALTER TABLE `message`
 ADD PRIMARY KEY (`message_Id`);

--
-- 資料表索引 `remessage`
--
ALTER TABLE `remessage`
 ADD PRIMARY KEY (`remessage_Id`), ADD KEY `message_Id` (`message_Id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `message`
--
ALTER TABLE `message`
MODIFY `message_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=147;
--
-- 使用資料表 AUTO_INCREMENT `remessage`
--
ALTER TABLE `remessage`
MODIFY `remessage_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- 已匯出資料表的限制(Constraint)
--

--
-- 資料表的 Constraints `remessage`
--
ALTER TABLE `remessage`
ADD CONSTRAINT `remessage_ibfk_1` FOREIGN KEY (`message_Id`) REFERENCES `message` (`message_Id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
