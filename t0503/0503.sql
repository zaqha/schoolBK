-- 練習一
-- orders
-- id
-- orderdate as 訂單日期
-- customers
-- id
-- customername as 客戶名稱
SELECT Orders.OrderID, Customers.CustomerName, Orders.OrderDate as '訂單日期', customers.country, customers.CustomerID, Customers.CustomerName as '客戶名稱', Customers.City, Customers.Country
FROM Orders 
INNER JOIN Customers ON Orders.CustomerID=Customers.CustomerID


-- 第三題
-- country = USA
SELECT Orders.OrderID, Customers.CustomerName, Orders.OrderDate as '訂單日期', customers.country
FROM Orders 
INNER JOIN Customers ON Orders.CustomerID=Customers.CustomerID
WHERE customers.country = 'USA'




-- 第四題
-- 前三筆資料
-- sort asc
SELECT Orders.OrderID, Customers.CustomerName, Orders.OrderDate as '訂單日期', customers.country
FROM Orders 
INNER JOIN Customers ON Orders.CustomerID=Customers.CustomerID
WHERE customers.country = 'USA'
ORDER BY Orders.OrderID desc
LIMIT 3
-- limit 要放最後







-- 資料表結構 `table_price`
--

CREATE TABLE `table_price` (
  `id` int(10) NOT NULL,
  `name` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revenue` int(10) NOT NULL,
  `visitors` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `table_price`
--

INSERT INTO `table_price` (`id`, `name`, `region`, `revenue`, `visitors`) VALUES
(1, '泰山店', '北', 100000, 100),
(2, '台北店', '北', 100000, 100),
(3, '台中店', '中', 1000000, 1000),
(4, '逢甲店', '中', 1000000, 1000),
(5, '高雄店', '南', 10000000, 10000),
(6, '西子灣', '南', 10000000, 10000);


-- db_price
-- table
-- 店名 \北中南區\店家營業額\來客數

-- Q1. 全部店家的資料
SELECT * FROM `table_price` WHERE 1

-- Q2. 各區 營業額 統計
SELECT region,SUM(revenue)
FROM table_price
GROUP BY region

-- Q3. 營業額100萬以上的區域
SELECT region,SUM(revenue)
FROM table_price
GROUP BY region
HAVING SUM(revenue)>=1000000

-- Q4. 各區 來客數 統計
SELECT region,SUM(visitors)
FROM table_price
GROUP BY region

-- Q5. 營業額1000以下的區域
SELECT region,SUM(visitors)
FROM table_price
GROUP BY region
HAVING SUM(visitors)<1000

-- Q6. 各區域店家有幾家?
SELECT region,COUNT(region)
FROM table_price
GROUP BY region
HAVING COUNT(region)




