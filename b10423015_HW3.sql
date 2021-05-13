-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1:3306
-- 產生時間： 2017-12-30 13:49:37
-- 伺服器版本: 5.7.19
-- PHP 版本： 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `db_course`
--

-- --------------------------------------------------------

--
-- 資料表結構 `iteminfo`
--

DROP TABLE IF EXISTS `iteminfo`;
CREATE TABLE IF NOT EXISTS `iteminfo` (
  `ItemID` char(10) NOT NULL,
  `ItemName` text NOT NULL,
  `SId` int(10) NOT NULL,
  PRIMARY KEY (`ItemID`),
  UNIQUE KEY `ItemID` (`ItemID`),
  KEY `SId` (`SId`),
  KEY `SId_2` (`SId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `iteminfo`
--

INSERT INTO `iteminfo` (`ItemID`, `ItemName`, `SId`) VALUES
('0000000000', 'Note 8', 4),
('0000000015', 'Note 10', 4),
('1111111111', 'ZenFone 4', 1),
('2222222222', 'ZenBook', 1),
('3333333333', 'ZenWatch', 1),
('4444444444', 'VivoBook', 1),
('5555555555', 'Pewdator 21 X', 2),
('6666666666', 'Switch 7', 2),
('7777777777', 'Iconia One 7', 2),
('8888888888', 'iMac', 3),
('9999999999', 'Iphone X', 3);

-- --------------------------------------------------------

--
-- 資料表結構 `member`
--

DROP TABLE IF EXISTS `member`;
CREATE TABLE IF NOT EXISTS `member` (
  `Account` char(10) NOT NULL,
  `Password` text NOT NULL,
  `Name` text NOT NULL,
  `Birthday` date NOT NULL,
  `Address` text CHARACTER SET big5 COLLATE big5_bin NOT NULL,
  PRIMARY KEY (`Account`),
  UNIQUE KEY `Account` (`Account`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `member`
--

INSERT INTO `member` (`Account`, `Password`, `Name`, `Birthday`, `Address`) VALUES
('Hk0001', 'yun0001', 'Jay', '1994-01-08', 'No.1, Sec. 3, University Road, Douliu City, Yunlin County'),
('Hk0002', 'yun0002', 'Tim', '1995-10-25', 'No.2, Sec. 3, University Road, Douliu City, Yunlin County'),
('Hk0003', 'yun0003', 'Edwin', '1993-06-09', 'No.3, Sec. 3, University Road, Douliu City, Yunlin County'),
('Hk0004', 'yun0004', 'Kevin', '1992-04-15', 'No.4, Sec. 3, University Road, Douliu City, Yunlin County'),
('Hk0005', 'yun0005', 'Angela', '1993-04-20', 'No.5, Sec. 3, University Road, Douliu City, Yunlin County'),
('Hk0006', 'yun0006', 'Genie', '1990-03-25', 'No.6, Sec. 3, University Road, Douliu City, Yunlin County'),
('Hk0007', 'yun0007', 'Jam', '1987-05-05', 'No.7, Sec. 3, University Road, Douliu City, Yunlin County'),
('Hk0008', 'yun0008', 'Edwin', '1953-08-08', 'No.8, Sec. 3, University Road, Douliu City, Yunlin County'),
('Hk0009', 'yun0009', 'Cairns', '1991-11-11', 'No.9, Sec. 3, University Road, Douliu City, Yunlin County'),
('Hk0010', 'yun0010', 'Jacob', '1995-10-10', 'No.10, Sec. 3, University Road, Douliu City, Yunlin County'),
('test01', '123', 'test', '2017-12-25', 'testsetsetset'),
('test_zhe', '132', '123', '2017-12-29', 'abcd');

-- --------------------------------------------------------

--
-- 資料表結構 `odetail`
--

DROP TABLE IF EXISTS `odetail`;
CREATE TABLE IF NOT EXISTS `odetail` (
  `OId` int(10) NOT NULL,
  `ItemID` char(10) NOT NULL,
  PRIMARY KEY (`OId`,`ItemID`),
  KEY `OId` (`OId`),
  KEY `ItemID` (`ItemID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `odetail`
--

INSERT INTO `odetail` (`OId`, `ItemID`) VALUES
(1, '1111111111'),
(2, '2222222222'),
(3, '3333333333'),
(4, '4444444444'),
(5, '5555555555'),
(6, '6666666666'),
(7, '7777777777'),
(8, '8888888888'),
(9, '9999999999'),
(10, '0000000000'),
(11, '1111111111'),
(12, '2222222222'),
(13, '3333333333'),
(14, '4444444444'),
(15, '5555555555'),
(16, '6666666666'),
(17, '7777777777'),
(18, '8888888888'),
(19, '9999999999'),
(20, '0000000000'),
(21, '6666666666'),
(22, '7777777777'),
(23, '8888888888'),
(24, '9999999999'),
(25, '0000000000');

-- --------------------------------------------------------

--
-- 資料表結構 `orderhistory`
--

DROP TABLE IF EXISTS `orderhistory`;
CREATE TABLE IF NOT EXISTS `orderhistory` (
  `OId` int(10) NOT NULL AUTO_INCREMENT,
  `Account` char(10) NOT NULL,
  `PurchaseDate` date NOT NULL,
  PRIMARY KEY (`OId`),
  UNIQUE KEY `OId` (`OId`),
  KEY `Account` (`Account`)
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `orderhistory`
--

INSERT INTO `orderhistory` (`OId`, `Account`, `PurchaseDate`) VALUES
(1, 'Hk0004', '2017-12-30'),
(2, 'Hk0001', '2017-10-18'),
(3, 'Hk0005', '2017-10-18'),
(4, 'Hk0002', '2017-10-18'),
(5, 'Hk0003', '2017-10-18'),
(6, 'Hk0004', '2017-10-18'),
(7, 'Hk0001', '2017-10-18'),
(8, 'Hk0005', '2017-10-18'),
(9, 'Hk0006', '2017-10-18'),
(10, 'Hk0007', '2017-10-18'),
(11, 'Hk0008', '2017-10-18'),
(12, 'Hk0009', '2017-10-18'),
(13, 'Hk0010', '2017-10-18'),
(14, 'Hk0001', '2017-10-18'),
(15, 'Hk0001', '2017-10-18'),
(16, 'Hk0001', '2017-10-18'),
(17, 'Hk0002', '2017-10-18'),
(18, 'Hk0002', '2017-10-18'),
(19, 'Hk0002', '2017-10-18'),
(20, 'Hk0003', '2017-10-18'),
(21, 'Hk0003', '2017-10-18'),
(22, 'Hk0003', '2017-10-18'),
(23, 'Hk0003', '2017-10-18'),
(24, 'Hk0003', '2017-10-18'),
(25, 'Hk0003', '2017-10-18');

-- --------------------------------------------------------

--
-- 資料表結構 `supplier`
--

DROP TABLE IF EXISTS `supplier`;
CREATE TABLE IF NOT EXISTS `supplier` (
  `SId` int(10) NOT NULL AUTO_INCREMENT,
  `SName` text NOT NULL,
  `STel` char(12) NOT NULL,
  PRIMARY KEY (`SId`),
  UNIQUE KEY `SId` (`SId`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `supplier`
--

INSERT INTO `supplier` (`SId`, `SName`, `STel`) VALUES
(1, 'ASUS', '02-2222-2222'),
(2, 'Acer', '03-3333-3333'),
(3, 'Apple', '04-4444-4444'),
(4, 'Samsung', '05-5555-5555'),
(6, 'justin', '03-302-7797');

--
-- 已匯出資料表的限制(Constraint)
--

--
-- 資料表的 Constraints `iteminfo`
--
ALTER TABLE `iteminfo`
  ADD CONSTRAINT `iteminfo_ibfk_1` FOREIGN KEY (`SId`) REFERENCES `supplier` (`SId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的 Constraints `odetail`
--
ALTER TABLE `odetail`
  ADD CONSTRAINT `odetail_ibfk_1` FOREIGN KEY (`ItemID`) REFERENCES `iteminfo` (`ItemID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `odetail_ibfk_2` FOREIGN KEY (`OId`) REFERENCES `orderhistory` (`OId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- 資料表的 Constraints `orderhistory`
--
ALTER TABLE `orderhistory`
  ADD CONSTRAINT `orderhistory_ibfk_1` FOREIGN KEY (`Account`) REFERENCES `member` (`Account`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
