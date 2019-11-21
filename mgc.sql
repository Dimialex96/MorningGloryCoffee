-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Φιλοξενητής: 127.0.0.1:3306
-- Χρόνος δημιουργίας: 01 Οκτ 2018 στις 22:42:24
-- Έκδοση διακομιστή: 5.7.21
-- Έκδοση PHP: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `mgc`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `coffeeshop`
--

DROP TABLE IF EXISTS `coffeeshop`;
CREATE TABLE IF NOT EXISTS `coffeeshop` (
  `afmmanag` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `tel` int(11) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `income` int(11) DEFAULT NULL,
  `location_lat` decimal(9,6) DEFAULT NULL,
  `location_long` decimal(9,6) DEFAULT NULL,
  PRIMARY KEY (`name`),
  KEY `MANCOF` (`afmmanag`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `coffeeshop`
--

INSERT INTO `coffeeshop` (`afmmanag`, `name`, `tel`, `address`, `income`, `location_lat`, `location_long`) VALUES
(1000000000, 'katastima_teo', 261010000, 'karaiskaki', NULL, '38.245562', '21.736022'),
(2000000000, 'katastima_alex', 261011111, 'gerokostopoulou', NULL, '38.246438', '21.734498');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `tel` varchar(100) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `customer`
--

INSERT INTO `customer` (`email`, `password`, `tel`) VALUES
('test1@gmail.com', '12345', '26410'),
('test@gmail.com', '1234', '26410'),
('test2@gmail.com', '1234567', '2641000000'),
('dalex@gmail.com', '1234', '2641000000');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `delivery`
--

DROP TABLE IF EXISTS `delivery`;
CREATE TABLE IF NOT EXISTS `delivery` (
  `name` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `AFM` int(11) NOT NULL,
  `AMKA` int(11) NOT NULL,
  `IBAN` varchar(27) NOT NULL,
  `location_lat` decimal(9,6) DEFAULT NULL,
  `location_long` decimal(9,6) DEFAULT NULL,
  `availabillity` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL,
  `onduty` time DEFAULT NULL,
  `offduty` time DEFAULT NULL,
  `hoursworked` float(4,2) DEFAULT NULL,
  `klm` float(5,2) DEFAULT NULL,
  PRIMARY KEY (`AFM`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `delivery`
--

INSERT INTO `delivery` (`name`, `lastname`, `username`, `password`, `AFM`, `AMKA`, `IBAN`, `location_lat`, `location_long`, `availabillity`, `onduty`, `offduty`, `hoursworked`, `klm`) VALUES
('dimitris', 'alex', 'dalex', '1234', 11, 22, 'GR1000000000000000000000000', '-23.550520', '-46.633309', 'Active', '00:12:12', '00:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `item`
--

DROP TABLE IF EXISTS `item`;
CREATE TABLE IF NOT EXISTS `item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(100) NOT NULL,
  `item_price` varchar(100) NOT NULL,
  `item_storage` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `item`
--

INSERT INTO `item` (`id`, `item_name`, `item_price`, `item_storage`) VALUES
(1, 'ellinikos', '1', NULL),
(2, 'frape', '2', NULL),
(3, 'espresso', '1', NULL),
(4, 'cappuccino', '2', NULL),
(5, 'filtrou', '2', NULL),
(6, 'tiropita', '2', NULL),
(7, 'xortopita', '2', NULL),
(8, 'koulouri', '1', NULL),
(9, 'tost', '2', NULL),
(10, 'keik', '3', NULL);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `manager`
--

DROP TABLE IF EXISTS `manager`;
CREATE TABLE IF NOT EXISTS `manager` (
  `name` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `AFM` int(11) NOT NULL,
  `AMKA` int(11) NOT NULL,
  `IBAN` varchar(27) NOT NULL,
  PRIMARY KEY (`AFM`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `manager`
--

INSERT INTO `manager` (`name`, `lastname`, `username`, `password`, `AFM`, `AMKA`, `IBAN`) VALUES
('teo', 'dask', 'teodask', '123456789', 1000000000, 1, 'GR1000000000000000000000000');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `myorder`
--

DROP TABLE IF EXISTS `myorder`;
CREATE TABLE IF NOT EXISTS `myorder` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email_customer` varchar(100) DEFAULT NULL,
  `ellinikos` int(11) DEFAULT NULL,
  `frape` int(11) DEFAULT NULL,
  `espresso` int(11) DEFAULT NULL,
  `cappuccino` int(11) DEFAULT NULL,
  `filtrou` int(11) DEFAULT NULL,
  `tiropita` int(11) DEFAULT NULL,
  `xortopita` int(11) DEFAULT NULL,
  `koulouri` int(11) DEFAULT NULL,
  `tost` int(11) DEFAULT NULL,
  `keik` int(11) DEFAULT NULL,
  `location_lat` decimal(9,6) DEFAULT NULL,
  `location_long` decimal(9,6) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `email_customer` (`email_customer`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `myorder`
--

INSERT INTO `myorder` (`id`, `email_customer`, `ellinikos`, `frape`, `espresso`, `cappuccino`, `filtrou`, `tiropita`, `xortopita`, `koulouri`, `tost`, `keik`, `location_lat`, `location_long`) VALUES
(1, 'test@gmail.com', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '38.243773', '21.731297'),
(2, 'test@gmail.com', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '38.243773', '21.731297'),
(3, 'test@gmail.com', 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, '38.248189', '21.733340'),
(4, 'test@gmail.com', 0, 456, 0, 0, 0, 0, 0, 0, 0, 0, '39.074208', '21.824312'),
(5, 'test@gmail.com', 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, '38.253475', '21.745997'),
(6, 'test@gmail.com', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '38.246615', '21.736217'),
(7, 'test@gmail.com', 23, 23, 23, 0, 0, 0, 0, 0, 0, 0, '38.251166', '21.736738'),
(8, 'test@gmail.com', 5, 0, 0, 9, 0, 0, 0, 0, 0, 1, '51.227741', '6.773456'),
(9, 'test@gmail.com', 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, '38.248623', '21.735249'),
(10, 'test@gmail.com', 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, '38.248623', '21.735249'),
(11, 'test@gmail.com', 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, '38.248623', '21.735249'),
(12, 'test@gmail.com', 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, '38.248623', '21.735249'),
(13, 'test@gmail.com', 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, '38.248623', '21.735249'),
(14, 'test@gmail.com', 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, '38.248623', '21.735249'),
(15, 'test@gmail.com', 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, '38.248623', '21.735249'),
(16, 'test@gmail.com', 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, '38.248623', '21.735249'),
(17, 'test@gmail.com', 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, '38.248623', '21.735249'),
(18, 'test@gmail.com', 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, '38.248623', '21.735249'),
(19, 'test@gmail.com', 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, '38.248623', '21.735249'),
(20, 'test@gmail.com', 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, '38.248623', '21.735249'),
(21, 'test@gmail.com', 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, '38.248623', '21.735249'),
(22, 'test@gmail.com', 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, '38.248623', '21.735249'),
(23, 'test@gmail.com', 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, '38.248623', '21.735249'),
(24, 'test1@gmail.com', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '38.243773', '21.731297'),
(25, 'test@gmail.com', 12, 0, 0, 0, 0, 0, 0, 0, 0, 0, '38.245058', '21.734209'),
(26, 'test1@gmail.com', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '38.261488', '21.749582'),
(27, 'test1@gmail.com', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '38.261488', '21.749582'),
(28, 'test1@gmail.com', 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, '41.008238', '28.978359'),
(29, 'test1@gmail.com', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '38.246615', '21.736217'),
(30, 'test1@gmail.com', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '38.246615', '21.736217'),
(31, 'test1@gmail.com', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '38.246615', '21.736217');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `orderlist`
--

DROP TABLE IF EXISTS `orderlist`;
CREATE TABLE IF NOT EXISTS `orderlist` (
  `order_id` int(11) DEFAULT NULL,
  `shopname` varchar(100) DEFAULT NULL,
  KEY `COFOR` (`order_id`),
  KEY `ORCOF` (`shopname`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `stores`
--

DROP TABLE IF EXISTS `stores`;
CREATE TABLE IF NOT EXISTS `stores` (
  `id_item` int(11) DEFAULT NULL,
  `nameshop` varchar(100) NOT NULL,
  KEY `COFITEM` (`id_item`),
  KEY `ITEMCOF` (`nameshop`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `takenby`
--

DROP TABLE IF EXISTS `takenby`;
CREATE TABLE IF NOT EXISTS `takenby` (
  `afmdelivery` int(11) DEFAULT NULL,
  `id_order` int(11) DEFAULT NULL,
  KEY `ORDEL` (`id_order`),
  KEY `DELOR` (`afmdelivery`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
