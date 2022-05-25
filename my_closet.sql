-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-05-25 17:55:04
-- 伺服器版本： 10.4.24-MariaDB
-- PHP 版本： 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `my_closet`
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
(3, 'F', '', '1992-02-02'),
(5, 'M', '台灣金門縣金寧鄉大學路2巷10號', '2022-05-11'),
(7, 'F', '台灣金門縣金寧鄉大學路2巷10號', '2022-05-05'),
(9, 'F', '台灣金門縣金寧鄉大學路2巷10號', '2022-05-21');

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
(2, 'seller001@mycloset.com', 'seller', 'seller001', '0900000001'),
(3, 'member002@mycloset.com', 'member002', 'member002', '0900000002'),
(4, 'seller002@mycloset.com', 'seller002', 'seller002', '0900000003'),
(5, '123@gmail.com', '123', '123', '0900000005'),
(6, '456@mycloset.com', '123', '456', '0900000010'),
(7, '111@gmail.com', '111', '111', '111'),
(8, '8', '', '', ''),
(9, '888@gmail.com', '123', '888', '09888888');

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
(3, 2, '素色前紐扣襯衫', '舒適~好穿~~', 290, 'images/16534847343.PNG', 15000, '2022-01-11 00:00:00', NULL),
(4, 2, '素色無袖襯衫', '好搭配！', 175, 'images/16534848464.PNG', 8489, '2022-01-11 00:00:00', NULL),
(5, 2, '素色落肩袖大碼襯衫', '防曬~', 285, 'images/16534852256.PNG', 554, '2022-01-11 00:00:00', NULL),
(6, 2, '羅紋針織開門襟不附吊帶上衣', '好搭配~', 150, 'images/16534861407.PNG', 2549, '2022-01-11 00:00:00', NULL),
(7, 2, '字母補丁細節前鏤空T恤', '爆乳 !', 178, 'images/16534862388.PNG', 1578, '2022-01-11 00:00:00', NULL),
(8, 2, '露背繫帶掛脖上衣', '造型~', 90, 'images/16534867969.PNG', 1148, '2022-01-11 00:00:00', NULL),
(9, 2, '挖空細節緊身洋裝', '性感~', 200, 'images/165348697210.PNG', 2354, '2022-01-11 00:00:00', NULL),
(10, 2, '金屬圓環後綁帶螺紋針織T恤', '造型~', 210, 'images/165348702511.PNG', 1984, '2022-01-11 00:00:00', NULL),
(11, 2, '繫帶露背吊帶洋裝', '有型', 470, 'images/165348709312.PNG', 845, '2022-01-11 00:00:00', NULL),
(12, 2, '交叉圍裹綁帶上衣高衩裙子套裝', '氣質~', 250, 'images/165348715513.PNG', 2649, '2022-01-11 00:00:00', NULL),
(19, 2, '素色前紐扣上衣', '快來買ㄛ~~', 270, 'images/16534846172.png', 100, '2022-05-25 00:00:00', NULL),
(20, 2, '單肩前鏤空上衣', '性感~', 140, 'images/16534850675.png', 886, '2022-05-25 00:00:00', NULL),
(26, 2, '素色褶邊裙子套裝', '方便、好看', 350, 'images/165349254314.PNG', 200, '2022-05-25 00:00:00', NULL),
(27, 2, '素色褶邊裙子套裝', '方便、好看', 350, 'images/165349255814.PNG', 200, '2022-05-25 00:00:00', NULL);

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
(4, 'some descriptions'),
(6, '561'),
(8, 'NULL');

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `order_info`
--
ALTER TABLE `order_info`
  MODIFY `OrderID` int(11) NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `product`
--
ALTER TABLE `product`
  MODIFY `ProductID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

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
