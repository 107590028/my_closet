-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-01-11 14:43:05
-- 伺服器版本： 10.4.22-MariaDB
-- PHP 版本： 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫: `my_closet`
--

-- --------------------------------------------------------

--
-- 資料表結構 `customer`
--

CREATE TABLE `customer` (
  `CustomerID` int(11) NOT NULL,
  `Sex` char(1) NOT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Birthday` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `customer`
--

INSERT INTO `customer` (`CustomerID`, `Sex`, `Address`, `Birthday`) VALUES
(1, 'M', '221B ', '1985-04-21'),
(3, 'F', '', '1992-02-02');

-- --------------------------------------------------------

--
-- 資料表結構 `member`
--

CREATE TABLE `member` (
  `ID` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `User_name` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `member`
--

INSERT INTO `member` (`ID`, `Email`, `Password`, `User_name`, `Phone`) VALUES
(1, 'test001@mycloset.com', 'test001', 'test001', '0900000000'),
(2, 'seller001@mycloset.com', 'seller001', 'seller001', '0900000001'),
(3, 'member002@mycloset.com', 'member002', 'member002', '0900000002'),
(4, 'seller002@mycloset.com', 'seller002', 'seller002', '0900000003');

-- --------------------------------------------------------

--
-- 資料表結構 `order_info`
--

CREATE TABLE `order_info` (
  `OrderID` int(11) NOT NULL,
  `CustomerID` int(11) NOT NULL,
  `SellerID` int(11) NOT NULL,
  `OrderStatus` varchar(255) NOT NULL,
  `ReceiverName` varchar(255) NOT NULL,
  `ReceiverPhone` int(11) NOT NULL,
  `ReceiverAddress` varchar(255) NOT NULL,
  `TotalPrice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- 資料表結構 `order_item`
--

CREATE TABLE `order_item` (
  `OrderID` int(11) NOT NULL,
  `ProductID` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- 資料表結構 `product`
--

CREATE TABLE `product` (
  `ProductID` int(11) NOT NULL,
  `SellerID` int(11) NOT NULL,
  `ProductName` varchar(255) NOT NULL,
  `Description` longtext NOT NULL,
  `Price` int(11) NOT NULL,
  `Image_path` varchar(255) DEFAULT NULL,
  `Stock` int(11) NOT NULL,
  `LaunchDate` datetime NOT NULL,
  `DiscontinueDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `product`
--

INSERT INTO `product` (`ProductID`, `SellerID`, `ProductName`, `Description`, `Price`, `Image_path`, `Stock`, `LaunchDate`, `DiscontinueDate`) VALUES
(3, 2, '跳跳虎短袖上衣', '過年虎年跳跳虎系列，前胸精緻電繡，舒適短袖上衣。    ', 550, 'images/1641889710TigerTshirt.jpg', 1500, '2022-01-11 00:00:00', NULL),
(4, 2, '小飛象上衣', '        小飛象連帽落肩寬版上衣，精緻電繡，舒適QQ毛面料。    ', 990, 'images/1641889890Elephant.jpg', 8489, '2022-01-11 00:00:00', NULL),
(5, 2, '火腿豬剪接大學T', '火腿豬撞色拼接大學TEE，袖口火腿豬貼布繡。', 890, 'images/1641890128Hamm.jpg', 554, '2022-01-11 00:00:00', NULL),
(6, 2, '瑪麗貓假兩件上衣', '瑪麗貓假兩件上衣，精緻貼布繡設計，舒適健康布面料。', 890, 'images/1641890209MarieCat.jpg', 2549, '2022-01-11 00:00:00', NULL),
(7, 2, '蒂蒂立體耳朵外套', '帽身蒂蒂俏皮耳朵貼布電繡，後片造型尾巴貼布，舒適刷毛連帽外套。', 1290, 'images/1641890275Mouse.jpg', 1578, '2022-01-11 00:00:00', NULL),
(8, 2, '蠟筆小新連帽T', '蠟筆小新系列，袋鼠袋口袋設計，內刷毛拉克蘭造型帽TEE。', 990, 'images/1641890373Shinjyan.jpg', 1148, '2022-01-11 00:00:00', NULL),
(9, 2, '小白QQ毛外套', '蠟筆小新系列，QQ毛保暖外套，落肩寬鬆版型，小白毛毛貼布繡。', 1590, 'images/1641890428Shiro.jpg', 2354, '2022-01-11 00:00:00', NULL),
(10, 2, '跳跳虎連帽上衣', '過年虎年跳跳虎系列，前胸精緻電繡，舒適衛衣連帽上衣。', 1090, 'images/1641890485TigerBHatT.jpg', 1984, '2022-01-11 00:00:00', NULL),
(11, 2, '跳跳虎連帽上衣', '過年虎年跳跳虎系列，大臉造型帽，舒適棉連帽上衣。', 790, 'images/1641890522TigerHatT.jpg', 845, '2022-01-11 00:00:00', NULL),
(12, 2, '三眼怪羊羔毛外套', '三眼怪羊羔毛撞色外套，落肩版型保暖款。', 1590, 'images/1641890683TripleEyes.jpg', 2649, '2022-01-11 00:00:00', NULL),
(13, 2, '小葵賴床口袋短T', '蠟筆小新系列，小葵賴床趣味口袋短TEE。', 590, 'images/1641890815aoi.jpg', 2654, '2022-01-11 00:00:00', NULL),
(14, 2, '傑利鼠帽外套', '帽身生氣傑利鼠大臉貼布電繡，舒適棉質衛衣連帽外套。', 1190, 'images/16419072250.jpg', 1546, '2022-01-11 00:00:00', NULL);

-- --------------------------------------------------------

--
-- 資料表結構 `seller`
--

CREATE TABLE `seller` (
  `SellerID` int(11) NOT NULL,
  `Description` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `seller`
--

INSERT INTO `seller` (`SellerID`, `Description`) VALUES
(2, '                    some\r\n                '),
(4, 'some descriptions');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `customer`
--
ALTER TABLE `customer`
  ADD KEY `CustomerID` (`CustomerID`);

--
-- 資料表索引 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `User_name` (`User_name`),
  ADD UNIQUE KEY `Phone` (`Phone`);

--
-- 資料表索引 `order_info`
--
ALTER TABLE `order_info`
  ADD PRIMARY KEY (`OrderID`),
  ADD KEY `CustomerID` (`CustomerID`),
  ADD KEY `SellerID` (`SellerID`);

--
-- 資料表索引 `order_item`
--
ALTER TABLE `order_item`
  ADD KEY `OrderID` (`OrderID`),
  ADD KEY `ProductID` (`ProductID`);

--
-- 資料表索引 `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ProductID`),
  ADD KEY `SellerID` (`SellerID`);

--
-- 資料表索引 `seller`
--
ALTER TABLE `seller`
  ADD KEY `SellerID` (`SellerID`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `member`
--
ALTER TABLE `member`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `order_info`
--
ALTER TABLE `order_info`
  MODIFY `OrderID` int(11) NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `product`
--
ALTER TABLE `product`
  MODIFY `ProductID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- 已傾印資料表的限制式
--

--
-- 資料表的限制式 `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`CustomerID`) REFERENCES `member` (`ID`);

--
-- 資料表的限制式 `order_info`
--
ALTER TABLE `order_info`
  ADD CONSTRAINT `order_info_ibfk_1` FOREIGN KEY (`CustomerID`) REFERENCES `customer` (`CustomerID`),
  ADD CONSTRAINT `order_info_ibfk_2` FOREIGN KEY (`SellerID`) REFERENCES `seller` (`SellerID`);

--
-- 資料表的限制式 `order_item`
--
ALTER TABLE `order_item`
  ADD CONSTRAINT `order_item_ibfk_1` FOREIGN KEY (`OrderID`) REFERENCES `order_info` (`OrderID`),
  ADD CONSTRAINT `order_item_ibfk_2` FOREIGN KEY (`ProductID`) REFERENCES `product` (`ProductID`);

--
-- 資料表的限制式 `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`SellerID`) REFERENCES `seller` (`SellerID`);

--
-- 資料表的限制式 `seller`
--
ALTER TABLE `seller`
  ADD CONSTRAINT `seller_ibfk_1` FOREIGN KEY (`SellerID`) REFERENCES `member` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
