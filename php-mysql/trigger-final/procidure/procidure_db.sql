-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2026 at 08:45 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `procidure_db`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `add_manuf` (IN `n` VARCHAR(50), IN `a` VARCHAR(100), IN `c` VARCHAR(50))   BEGIN
INSERT INTO manufacturers (name,address,contact)VALUES(n,a,c);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `add_product` (IN `n` VARCHAR(50), IN `p` DOUBLE(10,2), IN `m_id` INT(11))   BEGIN
INSERT INTO products (name,price,manu_id) VALUES(n,p,m_id);
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `manufacturers`
--

CREATE TABLE `manufacturers` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `contact` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manufacturers`
--

INSERT INTO `manufacturers` (`id`, `name`, `address`, `contact`) VALUES
(2, 'Dell', 'dhaka', '454545'),
(3, 'Dell', 'dhaka', '454545'),
(5, 'laptop', '200000', '1'),
(6, 'apple', 'dfg', '2342');

--
-- Triggers `manufacturers`
--
DELIMITER $$
CREATE TRIGGER `manufacc` AFTER DELETE ON `manufacturers` FOR EACH ROW BEGIN
DELETE FROM products WHERE manu_id =old.id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` double(10,2) NOT NULL,
  `manu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `manu_id`) VALUES
(9, 'keyboard', 123.00, 6),
(10, 'keyboard', 12131.00, 2);

-- --------------------------------------------------------

--
-- Stand-in structure for view `show_product`
-- (See below for the actual view)
--
CREATE TABLE `show_product` (
`id` int(11)
,`name` varchar(50)
,`price` double(10,2)
,`mname` varchar(50)
,`contact` varchar(50)
);

-- --------------------------------------------------------

--
-- Structure for view `show_product`
--
DROP TABLE IF EXISTS `show_product`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `show_product`  AS SELECT `products`.`id` AS `id`, `products`.`name` AS `name`, `products`.`price` AS `price`, `manufacturers`.`name` AS `mname`, `manufacturers`.`contact` AS `contact` FROM (`manufacturers` join `products`) WHERE `manufacturers`.`id` = `products`.`manu_id` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `manufacturers`
--
ALTER TABLE `manufacturers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `manufacturers`
--
ALTER TABLE `manufacturers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
