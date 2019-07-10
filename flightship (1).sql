-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2019 at 03:51 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flightship`
--

-- --------------------------------------------------------

--
-- Table structure for table `ip_carriers`
--

CREATE TABLE `ip_carriers` (
  `carrierid` int(11) NOT NULL,
  `carriername` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address1` varchar(35) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address2` varchar(35) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prov` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postal` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insuranceconfirm` date DEFAULT NULL,
  `insuranceexp` date DEFAULT NULL,
  `WSIB` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `WCB` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notes` text COLLATE utf8mb4_unicode_ci,
  `lanes` text COLLATE utf8mb4_unicode_ci,
  `rating` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ip_carriers`
--

INSERT INTO `ip_carriers` (`carrierid`, `carriername`, `address1`, `address2`, `city`, `prov`, `country`, `postal`, `contact`, `phone`, `fax`, `email`, `website`, `insuranceconfirm`, `insuranceexp`, `WSIB`, `WCB`, `notes`, `lanes`, `rating`) VALUES
(2, 'Oldway Tractor Services Ltd.', '30 Birch Court', NULL, 'Morinville', '13', 'Canada', 'T8R 2P7', 'Jon Janhsen', '(780) 203-0426', NULL, 'info@oldway.ca', 'www.oldway.ca', '2019-02-25', '2019-12-31', 'yes', 'yes', 'Edmonton Intermodal', 'Edmonton Local', NULL),
(3, 'A&L AUTOMARINE (EDMONTON)', 'General Delivery', NULL, 'Edmonton', '13', 'Canada', 'T5P 3V4', 'Paul', '(780) 756-7425', '(780) 756-7428', NULL, NULL, '2019-02-25', '2019-12-31', 'yes', 'yes', NULL, NULL, NULL),
(4, 'A&L AUTOMARINE (CGY) TRANSPORTATION', '10885-84 ST. SE', NULL, 'Calgary', '13', 'Canada', 'T2C 5A6', NULL, '(888) 217-9163', '(403) 235-6616', 'cheryl.macdonald@alautomarine.com', 'www.alautomarine.com', '2019-02-25', '2019-12-31', 'yes', 'yes', 'Calgary', 'Southern AB', NULL),
(5, 'Continuum Transportation', NULL, NULL, 'CINCINNATI', '48', 'USA', NULL, NULL, '(812) 432-5725', '(812) 432-5745', 'dispatch@continuumtrans.com', 'http://continuumtrans.com', '2019-02-25', '2019-12-31', 'yes', 'yes', NULL, 'Intermodal USA', NULL),
(6, 'CP Intermodal', NULL, NULL, 'Edmonton', '13', 'Canada', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Rail', NULL),
(7, 'Lotus Terminals Ltd.', '18833 52nd Ave', NULL, 'Surrey', '13', 'Canada', 'V3S 8E5', NULL, '1.866.940.1866', NULL, 'bringit@lotusterminals.com', 'www.lotusterminals.com', '2019-02-27', '2019-12-31', NULL, NULL, NULL, 'Vancouver Intermodal', NULL),
(8, 'NS Intermodal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'Western Pacific Transport Ltd.', '536, 7360 - 137th Street', NULL, 'Surrey', '13', 'Canada', 'V3W 1A3', 'Balwinder', '604-598-1669', NULL, 'dispatch@westernpacifictransport.ca', 'www.westernpacifictransport.ca', '2019-04-16', '2019-11-27', NULL, NULL, NULL, 'AB - BC vans potato loads', NULL),
(10, 'Canada Road Carrier Ltd.', '11440 - 73rd Ave.', NULL, 'Delta', '2', 'Canada', 'V4C 1B7', 'Dave', '778-574-5717', NULL, 'canadaroadltd@gmail.com', NULL, '2019-04-16', '2019-11-20', NULL, NULL, NULL, 'AB- BC potato loads', NULL),
(11, 'Canada Road Carrier Ltd.', '5192 - 157 Street', NULL, 'Surrey', '2', 'Canada', 'V3Z 1G2', 'Davinder S. Kandola (President)', '778-574-5717', NULL, 'canadaroadltd@gmail.com', NULL, '2019-04-16', '2019-11-28', NULL, NULL, NULL, 'Potatoes to WA', NULL),
(12, 'Coquihalla Trucking Ltd.', '27761 Fraser Hwy', NULL, 'Abbotsford', '2', 'Canada', NULL, 'Garry Brar', NULL, NULL, 'coquihallatruckingltd@gmail.com', NULL, '2019-04-15', '2019-11-04', NULL, NULL, NULL, 'Potato loads to WA', NULL),
(13, 'American Eagle Carrier Inc.', '102 - 17750 - 56th Ave', NULL, 'Surrey', '13', 'Canada', 'V3S 1K4', 'Jay', '604-576-1888', NULL, NULL, NULL, '2019-04-17', '2019-11-13', NULL, NULL, NULL, NULL, NULL),
(14, 'SANDHU EXPRESS INC.', '1003 - 989 Beatty St', NULL, 'Vancouver', '2', 'Canada', NULL, NULL, '604-690-6309', NULL, 'sandhuexpress@hotmail.com', NULL, '2019-04-18', '2019-09-30', NULL, NULL, NULL, 'Potato Loads to WA / BC', NULL),
(15, 'Maan Transport Ltd.', '121 Coral Reef Manor NE', NULL, 'Calgary', '1', 'Canada', 'T3J 3Y8', 'Amandeep Sandhu', '403-465-3262', NULL, 'info@maantransport.ca', 'www.maantransport.ca', '2019-04-22', '2019-05-16', NULL, NULL, 'Potato Loads', 'Reefer USA / Canada', NULL),
(16, 'Pro Max Trucking Ltd.', '12854 92A Avenue', NULL, 'Surrey', '2', 'Canada', 'V3V1J8', 'Lakhi Janda', '604-503-2711', '604-503-2712', 'dispatch@promaxtrucking.com', 'www.promaxtrucking.com', '2019-04-24', '2019-06-14', NULL, NULL, NULL, 'AB BC', NULL),
(18, 'asdasdas', 'dasd', 'sdas', 'dasd', '', 'dsad', '3123', '123', '321312312', 'asdas', 'a@e.com', 'fsdfd', '2019-06-24', '2019-06-24', 'sdf', 'sdf', 'sdfsdf', 'fsdfsdf', NULL),
(19, 'new ', '1312312', 'Molestiae lorem esse', 'Vel officia assumend', '1', 'Bahamas', '42294', 'qweqwe', '5565022063', 'adasd', 'test@e.com', 'dasdas', '2019-05-22', '2019-05-21', 'dasd', 'ad', 'asdas', 'dasdasdasd', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ip_clients`
--

CREATE TABLE `ip_clients` (
  `client_id` int(11) NOT NULL,
  `client_date_created` datetime NOT NULL,
  `client_date_modified` datetime NOT NULL,
  `client_name` text,
  `client_address_1` text,
  `client_address_2` text,
  `client_city` text,
  `client_state` text,
  `client_zip` text,
  `client_country` text,
  `client_phone` text,
  `client_fax` text,
  `client_mobile` text,
  `client_email` text,
  `client_web` text,
  `client_vat_id` text,
  `client_tax_code` text,
  `client_language` varchar(255) DEFAULT 'system',
  `client_active` int(1) NOT NULL DEFAULT '1',
  `client_surname` varchar(255) DEFAULT NULL,
  `client_notes` text NOT NULL,
  `client_contact` varchar(255) NOT NULL,
  `client_avs` varchar(16) DEFAULT NULL,
  `client_insurednumber` varchar(30) DEFAULT NULL,
  `client_veka` varchar(30) DEFAULT NULL,
  `client_birthdate` date DEFAULT NULL,
  `client_gender` int(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ip_clients`
--

INSERT INTO `ip_clients` (`client_id`, `client_date_created`, `client_date_modified`, `client_name`, `client_address_1`, `client_address_2`, `client_city`, `client_state`, `client_zip`, `client_country`, `client_phone`, `client_fax`, `client_mobile`, `client_email`, `client_web`, `client_vat_id`, `client_tax_code`, `client_language`, `client_active`, `client_surname`, `client_notes`, `client_contact`, `client_avs`, `client_insurednumber`, `client_veka`, `client_birthdate`, `client_gender`) VALUES
(3, '2019-04-27 02:54:48', '2019-04-27 02:54:48', 'Willis Alvarado Traders', '63 West Green Oak Boulevard', 'Error amet ullamco ', 'Dolorem quis numquam', 'Incididunt qui quia ', '37312', 'SK', '+1 (223) 532-9598', '+1 (691) 792-1134', NULL, 'sohimavi@mailinator.com', NULL, NULL, NULL, 'system', 1, NULL, 'Nulla quae error duc', 'Qui consequuntur off', NULL, NULL, NULL, NULL, 0),
(2, '2019-04-26 19:16:11', '2019-04-26 19:16:11', 'New Client', '47 Green Cowley Lane', 'asdasd', 'Rerum sed ipsam dolo', 'Omnis quia sunt unde', '47330', 'AL', '8718452585', '2312312312', NULL, 'haadi.javaid@gmail.com', NULL, NULL, NULL, 'system', 1, NULL, 'asdasdasdasdas', 'sdas', NULL, NULL, NULL, NULL, 0),
(4, '2019-05-22 12:58:27', '2019-05-22 12:58:27', 'Dotson Bernard Traders', '786 Rocky Old Court', 'Quo voluptatum a et ', 'Enim sunt aut ea por', 'Rerum in ratione omn', '41212', 'MD', '+1 (432) 852-6646', '+1 (569) 702-7814', NULL, 'ducot@mailinator.net', NULL, NULL, NULL, 'system', 0, NULL, 'Quibusdam praesentiu', 'Tempore in enim aut', NULL, NULL, NULL, NULL, 0),
(5, '2019-05-22 12:58:33', '2019-05-22 12:58:33', 'Cote Bush Inc', '71 West White Old Extension', 'Blanditiis in aliqua', 'Qui vero alias ex ac', 'Consequatur sit ve', '57778', 'PS', '+1 (402) 123-8194', '+1 (216) 814-6667', NULL, 'wiqubul@mailinator.net', NULL, NULL, NULL, 'system', 1, NULL, 'Mollitia quae aspern', 'Aut eius quaerat eni', NULL, NULL, NULL, NULL, 0),
(6, '2019-05-22 12:58:39', '2019-05-22 12:58:39', 'Chapman Bridges Trading', '73 White Hague Extension', 'Obcaecati deserunt p', 'Laboris quis at repe', 'Quos aspernatur in n', '54817', 'MV', '+1 (615) 286-6244', '+1 (166) 231-3316', NULL, 'pykoval@mailinator.com', NULL, NULL, NULL, 'system', 1, NULL, 'Dolores consequatur', 'Et cumque voluptatum', NULL, NULL, NULL, NULL, 0),
(7, '2019-05-22 12:58:45', '2019-05-22 12:58:45', 'Stewart and Bishop LLC', '839 Green Old Extension', 'Sit harum aspernatu', 'Nisi fugiat sit qui', 'Dolore vel quis iste', '12958', 'PU', '+1 (541) 427-3619', '+1 (176) 434-7315', NULL, 'behesale@mailinator.net', NULL, NULL, NULL, 'system', 1, NULL, 'Sequi in ea occaecat', 'Magni eos et digniss', NULL, NULL, NULL, NULL, 0),
(8, '2019-05-22 12:58:50', '2019-05-22 12:58:50', 'Richardson and Garcia Co', '60 South Hague Drive', 'Molestiae reprehende', 'Aliqua Quo et quide', 'Dicta commodi irure ', '61807', 'GU', '+1 (495) 811-9266', '+1 (135) 301-6342', NULL, 'tanabo@mailinator.com', NULL, NULL, NULL, 'system', 0, NULL, 'Nisi et deserunt non', 'Omnis similique sed ', NULL, NULL, NULL, NULL, 0),
(9, '2019-05-22 12:58:54', '2019-05-22 12:58:54', 'Juarez Gillespie Traders', '27 North Fabien Street', 'Sunt consequat Enim', 'Inventore dolor do q', 'Veniam aliquid aut ', '19708', 'AF', '+1 (232) 779-7447', '+1 (202) 894-9444', NULL, 'gagumen@mailinator.com', NULL, NULL, NULL, 'system', 0, NULL, 'Perspiciatis fuga ', 'Animi porro rerum e', NULL, NULL, NULL, NULL, 0),
(10, '2019-05-22 12:58:59', '2019-05-22 12:58:59', 'Flowers and Mcintosh Trading', '16 Cowley Court', 'Est aut illo quo aut', 'Praesentium ut delen', 'Enim ea assumenda au', '77982', 'AD', '+1 (848) 157-8537', '+1 (217) 583-4898', NULL, 'hazomiko@mailinator.com', NULL, NULL, NULL, 'system', 1, NULL, 'Vitae laudantium de', 'Accusantium repellen', NULL, NULL, NULL, NULL, 0),
(11, '2019-05-22 12:59:10', '2019-05-22 12:59:10', 'Patton Park Co', '80 West Green First Street', 'Qui reiciendis quo p', 'Quisquam sunt non vi', 'Voluptates dolore qu', '99444', 'CI', '+1 (626) 389-1252', '+1 (637) 535-1902', NULL, 'teheje@mailinator.com', NULL, NULL, NULL, 'system', 1, NULL, 'Sit sint eum perfe', 'Totam voluptates eum', NULL, NULL, NULL, NULL, 0),
(12, '2019-05-22 12:59:14', '2019-05-22 12:59:14', 'Cohen and Arnold Traders', '73 Milton Road', 'Ipsum repudiandae al', 'Ut corrupti volupta', 'Nihil est fuga Arch', '20171', 'CU', '+1 (216) 666-1903', '+1 (391) 703-2064', NULL, 'cyraca@mailinator.net', NULL, NULL, NULL, 'system', 1, NULL, 'Nostrud totam obcaec', 'Ipsam eum sint incid', NULL, NULL, NULL, NULL, 0),
(13, '2019-05-22 12:59:19', '2019-05-22 12:59:19', 'Glass and Dickson Associates', '30 Fabien Freeway', 'Blanditiis sapiente ', 'Quis aut ratione ess', 'Esse quis optio lo', '67972', 'TJ', '+1 (358) 157-5017', '+1 (137) 393-6059', NULL, 'qumonituc@mailinator.net', NULL, NULL, NULL, 'system', 0, NULL, 'Non magna modi facil', 'Et aut maiores sunt', NULL, NULL, NULL, NULL, 0),
(14, '2019-05-22 12:59:23', '2019-05-22 12:59:23', 'Rosales Rowland Trading', '612 South Cowley Extension', 'Esse officia deseru', 'A quod in rerum aspe', 'Qui voluptas quibusd', '34655', 'LI', '+1 (159) 407-4945', '+1 (986) 685-2249', NULL, 'renira@mailinator.com', NULL, NULL, NULL, 'system', 1, NULL, 'Velit id esse velit ', 'Quae dolor proident', NULL, NULL, NULL, NULL, 0),
(15, '2019-05-22 12:59:26', '2019-05-22 12:59:26', 'Glover Little Plc', '795 North Green Fabien Road', 'Atque aut asperiores', 'Mollit similique adi', 'Veniam dolorem aute', '99553', 'IN', '+1 (165) 483-4031', '+1 (259) 343-6424', NULL, 'xese@mailinator.net', NULL, NULL, NULL, 'system', 1, NULL, 'Maiores fugit ipsum', 'Qui et eius vero lab', NULL, NULL, NULL, NULL, 0),
(16, '2019-05-22 12:59:31', '2019-05-22 12:59:31', 'Middleton Santiago Inc', '639 Nobel Boulevard', 'Sed aliquam culpa e', 'Magni nostrud obcaec', 'Laborum Beatae non ', '93702', 'NR', '+1 (818) 217-7037', '+1 (283) 628-3131', NULL, 'pacelaw@mailinator.com', NULL, NULL, NULL, 'system', 0, NULL, 'Itaque veritatis des', 'Est est quis odit ', NULL, NULL, NULL, NULL, 0),
(17, '2019-05-22 12:59:34', '2019-05-22 12:59:34', 'Pruitt and Cantrell LLC', '33 South New Parkway', 'Deserunt voluptas pa', 'Sunt ea dolores et a', 'Deleniti corrupti f', '90964', 'SZ', '+1 (213) 421-4577', '+1 (171) 886-8774', NULL, 'pamufypezi@mailinator.net', NULL, NULL, NULL, 'system', 0, NULL, 'Et ducimus recusand', 'Et Nam quis aute ut ', NULL, NULL, NULL, NULL, 0),
(18, '2019-05-22 12:59:39', '2019-05-22 12:59:39', 'Snow and Lynn LLC', '40 Rocky Clarendon Road', 'Quam quam exercitati', 'Sed dolor ea et culp', 'Minus rerum commodo ', '56034', 'HK', '+1 (558) 297-3062', '+1 (676) 346-2012', NULL, 'dixyfuz@mailinator.net', NULL, NULL, NULL, 'system', 1, NULL, 'Voluptatem elit qu', 'Excepturi eveniet d', NULL, NULL, NULL, NULL, 0),
(19, '2019-05-22 12:59:42', '2019-05-22 12:59:42', 'Hurley Parsons Co', '899 Rocky Second Freeway', 'Cupiditate incidunt', 'Quia autem sint quis', 'Est qui et aliquid s', '23093', 'HN', '+1 (549) 909-5837', '+1 (157) 974-5017', NULL, 'rilikoxuk@mailinator.com', NULL, NULL, NULL, 'system', 0, NULL, 'Consequatur Itaque ', 'Voluptate minima par', NULL, NULL, NULL, NULL, 0),
(20, '2019-05-22 12:59:46', '2019-05-22 12:59:46', 'Gregory and Olson LLC', '501 North White Cowley Parkway', 'Quaerat omnis et pro', 'Sunt dolore veritati', 'Officia possimus id', '57705', 'US', '+1 (243) 198-8646', '+1 (802) 542-5801', NULL, 'jerefuleh@mailinator.net', NULL, NULL, NULL, 'system', 0, NULL, 'Commodi itaque fuga', 'Magnam sint unde odi', NULL, NULL, NULL, NULL, 0),
(21, '2019-05-22 12:59:50', '2019-05-22 12:59:50', 'Davenport Lott Traders', '35 Milton Drive', 'Non vero ut praesent', 'Consequatur reprehen', 'Est reiciendis tempo', '96805', 'VD', '+1 (416) 154-7328', '+1 (323) 833-3611', NULL, 'novepo@mailinator.net', NULL, NULL, NULL, 'system', 1, NULL, 'Placeat aute cumque', 'Laboris officiis per', NULL, NULL, NULL, NULL, 0),
(22, '2019-05-22 12:59:56', '2019-05-22 12:59:56', 'Wall Townsend Inc', '775 East Fabien Avenue', 'Iusto quidem rerum n', 'Sed fugit dolorum n', 'Eius aut quibusdam q', '99213', 'GI', '+1 (738) 414-7712', '+1 (523) 661-9683', NULL, 'wacemyk@mailinator.com', NULL, NULL, NULL, 'system', 1, NULL, 'Atque sint magni qu', 'Exercitation sunt f', NULL, NULL, NULL, NULL, 0),
(23, '2019-05-22 13:00:02', '2019-05-22 13:00:02', 'Singleton Richmond Inc', '94 South Green Hague Lane', 'Ratione temporibus e', 'Pariatur Eaque aut ', 'In sed voluptas aut ', '42376', 'NQ', '+1 (746) 298-5524', '+1 (709) 989-1248', NULL, 'timyjez@mailinator.net', NULL, NULL, NULL, 'system', 0, NULL, 'Ut est omnis volupta', 'Vitae vero adipisici', NULL, NULL, NULL, NULL, 0),
(24, '2019-05-22 13:00:07', '2019-05-22 13:00:07', 'Kinney Stewart LLC', '714 Cowley Road', 'Quo eius dolores est', 'Ipsam itaque accusam', 'Ut quis maiores do m', '64374', 'GE', '+1 (713) 854-2963', '+1 (754) 175-1978', NULL, 'hewogybys@mailinator.net', NULL, NULL, NULL, 'system', 1, NULL, 'Aute voluptatum veli', 'Ad rem dolorem eum f', NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ip_client_custom`
--

CREATE TABLE `ip_client_custom` (
  `client_custom_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `client_custom_fieldid` int(11) NOT NULL,
  `client_custom_fieldvalue` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ip_client_notes`
--

CREATE TABLE `ip_client_notes` (
  `client_note_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `client_note_date` date NOT NULL,
  `client_note` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ip_custombrokers`
--

CREATE TABLE `ip_custombrokers` (
  `brokerid` int(11) NOT NULL,
  `brokername` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address1` varchar(35) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address2` varchar(35) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prov` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postal` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `crossing` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notes` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ip_custombrokers`
--

INSERT INTO `ip_custombrokers` (`brokerid`, `brokername`, `address1`, `address2`, `city`, `prov`, `country`, `postal`, `contact`, `phone`, `fax`, `email`, `website`, `crossing`, `notes`) VALUES
(1, 'Livingston', '9455 - 45th AVE NW', NULL, 'Edmonton', 'AB', 'Canada', NULL, 'Jill', '780-555-5555', NULL, NULL, NULL, NULL, NULL),
(2, 'ITS', '3357 39th Street South Suite 3', NULL, 'Fargo', 'ND', 'USA', '58104', NULL, '701-551-1400', NULL, 'info@itscustoms.com', 'www.itscustoms.com', NULL, 'International Trade Solutions, Inc.');

-- --------------------------------------------------------

--
-- Table structure for table `ip_custom_fields`
--

CREATE TABLE `ip_custom_fields` (
  `custom_field_id` int(11) NOT NULL,
  `custom_field_table` varchar(50) DEFAULT NULL,
  `custom_field_label` varchar(50) DEFAULT NULL,
  `custom_field_type` varchar(255) NOT NULL DEFAULT 'TEXT',
  `custom_field_location` int(11) DEFAULT '0',
  `custom_field_order` int(11) DEFAULT '999'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ip_custom_values`
--

CREATE TABLE `ip_custom_values` (
  `custom_values_id` int(11) NOT NULL,
  `custom_values_field` int(11) NOT NULL,
  `custom_values_value` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ip_dispatcher`
--

CREATE TABLE `ip_dispatcher` (
  `dispatcherid` int(11) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ip_dispatcher`
--

INSERT INTO `ip_dispatcher` (`dispatcherid`, `name`, `reg_date`) VALUES
(1, 'Ron', '2019-04-17 12:10:14'),
(2, 'Dana', '2019-04-17 14:10:19'),
(3, 'Doug', '2019-04-17 14:10:24');

-- --------------------------------------------------------

--
-- Table structure for table `ip_email_templates`
--

CREATE TABLE `ip_email_templates` (
  `email_template_id` int(11) NOT NULL,
  `email_template_title` text,
  `email_template_type` varchar(255) DEFAULT NULL,
  `email_template_body` longtext NOT NULL,
  `email_template_subject` text,
  `email_template_from_name` text,
  `email_template_from_email` text,
  `email_template_cc` text,
  `email_template_bcc` text,
  `email_template_pdf_template` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ip_families`
--

CREATE TABLE `ip_families` (
  `family_id` int(11) NOT NULL,
  `family_name` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ip_families`
--

INSERT INTO `ip_families` (`family_id`, `family_name`) VALUES
(1, 'new Fam');

-- --------------------------------------------------------

--
-- Table structure for table `ip_imports`
--

CREATE TABLE `ip_imports` (
  `import_id` int(11) NOT NULL,
  `import_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ip_import_details`
--

CREATE TABLE `ip_import_details` (
  `import_detail_id` int(11) NOT NULL,
  `import_id` int(11) NOT NULL,
  `import_lang_key` varchar(35) NOT NULL,
  `import_table_name` varchar(35) NOT NULL,
  `import_record_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ip_invoices`
--

CREATE TABLE `ip_invoices` (
  `invoice_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `invoice_group_id` int(11) NOT NULL,
  `invoice_status_id` tinyint(2) NOT NULL DEFAULT '1',
  `is_read_only` tinyint(1) DEFAULT NULL,
  `invoice_password` varchar(90) DEFAULT NULL,
  `invoice_date_created` date NOT NULL,
  `invoice_time_created` time NOT NULL DEFAULT '00:00:00',
  `invoice_date_modified` datetime NOT NULL,
  `invoice_date_due` date NOT NULL,
  `invoice_number` varchar(100) DEFAULT NULL,
  `invoice_discount_amount` decimal(20,2) DEFAULT NULL,
  `invoice_discount_percent` decimal(20,2) DEFAULT NULL,
  `invoice_terms` longtext NOT NULL,
  `invoice_url_key` char(32) NOT NULL,
  `payment_method` int(11) NOT NULL DEFAULT '0',
  `creditinvoice_parent_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ip_invoices`
--

INSERT INTO `ip_invoices` (`invoice_id`, `user_id`, `client_id`, `invoice_group_id`, `invoice_status_id`, `is_read_only`, `invoice_password`, `invoice_date_created`, `invoice_time_created`, `invoice_date_modified`, `invoice_date_due`, `invoice_number`, `invoice_discount_amount`, `invoice_discount_percent`, `invoice_terms`, `invoice_url_key`, `payment_method`, `creditinvoice_parent_id`) VALUES
(1, 1, 2, 3, 1, NULL, 'asd', '2019-04-27', '03:01:41', '2019-04-27 03:02:00', '2019-05-27', '1', NULL, NULL, '', 'FWItqhj7HQlJviOB3rbdsD0ug5Awm14e', 2, NULL),
(2, 1, 2, 3, 1, NULL, '123', '2019-04-27', '07:01:50', '2019-04-27 07:02:00', '2019-05-27', '3', NULL, NULL, '', 'i6gdMum8oxnJGtTENpwDSL0rHVFeAIaQ', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ip_invoices_recurring`
--

CREATE TABLE `ip_invoices_recurring` (
  `invoice_recurring_id` int(11) NOT NULL,
  `invoice_id` int(11) NOT NULL,
  `recur_start_date` date NOT NULL,
  `recur_end_date` date NOT NULL,
  `recur_frequency` varchar(255) NOT NULL,
  `recur_next_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ip_invoice_amounts`
--

CREATE TABLE `ip_invoice_amounts` (
  `invoice_amount_id` int(11) NOT NULL,
  `invoice_id` int(11) NOT NULL,
  `invoice_sign` enum('1','-1') NOT NULL DEFAULT '1',
  `invoice_item_subtotal` decimal(20,2) DEFAULT NULL,
  `invoice_item_tax_total` decimal(20,2) DEFAULT NULL,
  `invoice_tax_total` decimal(20,2) DEFAULT NULL,
  `invoice_total` decimal(20,2) DEFAULT NULL,
  `invoice_paid` decimal(20,2) DEFAULT NULL,
  `invoice_balance` decimal(20,2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ip_invoice_amounts`
--

INSERT INTO `ip_invoice_amounts` (`invoice_amount_id`, `invoice_id`, `invoice_sign`, `invoice_item_subtotal`, `invoice_item_tax_total`, `invoice_tax_total`, `invoice_total`, `invoice_paid`, `invoice_balance`) VALUES
(1, 1, '1', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 2, '1', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ip_invoice_custom`
--

CREATE TABLE `ip_invoice_custom` (
  `invoice_custom_id` int(11) NOT NULL,
  `invoice_id` int(11) NOT NULL,
  `invoice_custom_fieldid` int(11) NOT NULL,
  `invoice_custom_fieldvalue` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ip_invoice_groups`
--

CREATE TABLE `ip_invoice_groups` (
  `invoice_group_id` int(11) NOT NULL,
  `invoice_group_name` text,
  `invoice_group_identifier_format` varchar(255) NOT NULL,
  `invoice_group_next_id` int(11) NOT NULL,
  `invoice_group_left_pad` int(2) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ip_invoice_groups`
--

INSERT INTO `ip_invoice_groups` (`invoice_group_id`, `invoice_group_name`, `invoice_group_identifier_format`, `invoice_group_next_id`, `invoice_group_left_pad`) VALUES
(3, 'Invoice Default', '{{{id}}}', 4, 0),
(4, 'Quote Default', 'QUO{{{id}}}', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ip_invoice_items`
--

CREATE TABLE `ip_invoice_items` (
  `item_id` int(11) NOT NULL,
  `invoice_id` int(11) NOT NULL,
  `item_tax_rate_id` int(11) NOT NULL DEFAULT '0',
  `item_product_id` int(11) DEFAULT NULL,
  `item_date_added` date NOT NULL,
  `item_task_id` int(11) DEFAULT NULL,
  `item_name` text,
  `item_description` longtext,
  `item_quantity` decimal(10,2) NOT NULL,
  `item_price` decimal(20,2) DEFAULT NULL,
  `item_discount_amount` decimal(20,2) DEFAULT NULL,
  `item_order` int(2) NOT NULL DEFAULT '0',
  `item_is_recurring` tinyint(1) DEFAULT NULL,
  `item_product_unit` varchar(50) DEFAULT NULL,
  `item_product_unit_id` int(11) DEFAULT NULL,
  `item_date` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ip_invoice_item_amounts`
--

CREATE TABLE `ip_invoice_item_amounts` (
  `item_amount_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `item_subtotal` decimal(20,2) DEFAULT NULL,
  `item_tax_total` decimal(20,2) DEFAULT NULL,
  `item_discount` decimal(20,2) DEFAULT NULL,
  `item_total` decimal(20,2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ip_invoice_sumex`
--

CREATE TABLE `ip_invoice_sumex` (
  `sumex_id` int(11) NOT NULL,
  `sumex_invoice` int(11) NOT NULL,
  `sumex_reason` int(11) NOT NULL,
  `sumex_diagnosis` varchar(500) NOT NULL,
  `sumex_observations` varchar(500) NOT NULL,
  `sumex_treatmentstart` date NOT NULL,
  `sumex_treatmentend` date NOT NULL,
  `sumex_casedate` date NOT NULL,
  `sumex_casenumber` varchar(35) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ip_invoice_tax_rates`
--

CREATE TABLE `ip_invoice_tax_rates` (
  `invoice_tax_rate_id` int(11) NOT NULL,
  `invoice_id` int(11) NOT NULL,
  `tax_rate_id` int(11) NOT NULL,
  `include_item_tax` int(1) NOT NULL DEFAULT '0',
  `invoice_tax_rate_amount` decimal(10,2) NOT NULL DEFAULT '0.00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ip_item_lookups`
--

CREATE TABLE `ip_item_lookups` (
  `item_lookup_id` int(11) NOT NULL,
  `item_name` varchar(100) NOT NULL DEFAULT '',
  `item_description` longtext NOT NULL,
  `item_price` decimal(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ip_merchant_responses`
--

CREATE TABLE `ip_merchant_responses` (
  `merchant_response_id` int(11) NOT NULL,
  `invoice_id` int(11) NOT NULL,
  `merchant_response_successful` tinyint(1) DEFAULT '1',
  `merchant_response_date` date NOT NULL,
  `merchant_response_driver` varchar(35) NOT NULL,
  `merchant_response` varchar(255) NOT NULL,
  `merchant_response_reference` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ip_moves`
--

CREATE TABLE `ip_moves` (
  `movesid` int(11) NOT NULL,
  `shippingorderid` int(11) NOT NULL,
  `carrier` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipper` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `receiver` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `moverate` decimal(12,2) DEFAULT NULL,
  `movetaxrate` decimal(12,0) DEFAULT NULL,
  `currency` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `movefsc` decimal(12,2) DEFAULT NULL,
  `pickupnum` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `servicecode` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notes` mediumtext COLLATE utf8mb4_unicode_ci,
  `instructions` mediumtext COLLATE utf8mb4_unicode_ci,
  `pickupdate` date DEFAULT NULL,
  `deldate` date DEFAULT NULL,
  `puappt` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delappt` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ip_moves`
--

INSERT INTO `ip_moves` (`movesid`, `shippingorderid`, `carrier`, `shipper`, `receiver`, `moverate`, `movetaxrate`, `currency`, `movefsc`, `pickupnum`, `servicecode`, `notes`, `instructions`, `pickupdate`, `deldate`, `puappt`, `delappt`) VALUES
(1, 38900, '2', '1', '5', '160.00', NULL, NULL, NULL, '123456', '2', 'get going', 'now', '2019-02-27', '2019-02-28', '12345', NULL),
(2, 38900, '5', '10', '1', '445.00', NULL, NULL, NULL, '1234', '4', 'test', 'test', '2019-02-28', '2019-02-28', 'test', 'test'),
(3, 38902, '1', '9', '1', '3300.00', '0', NULL, '0.00', '9451HR952', '1', '9450HL786', '9450HL786', '2019-02-26', '2019-03-04', 'N/A', '09:00'),
(4, 38901, '4', '5', '6', '185.00', NULL, NULL, NULL, '9450HL758', '2', '9450HL758', '9450HL758', '2019-02-27', '2019-02-28', '11:00', 'ASAP'),
(5, 38901, '5', '10', '1', '450.00', NULL, NULL, NULL, '96854', '4', '9450HL758', 'Deliver on 9450HL758', '2019-03-06', '2019-03-06', 'ASAP', '13:00'),
(6, 38900, '6', '7', '4', '500.00', NULL, NULL, NULL, NULL, '3', NULL, NULL, '2019-02-27', '2019-03-05', NULL, NULL),
(7, 38903, '2', '1', '5', '185.00', '2', NULL, '17.00', '9450HL980', '2', '9450HL980', '9450HL980', '2019-02-27', '2019-02-28', NULL, NULL),
(8, 38903, '5', '10', '1', '445.00', NULL, NULL, NULL, '9450HL980', '4', '9450HL980', '9450HL980', '2019-03-07', '2019-03-08', 'N/A', '09:00'),
(9, 38903, '6', '7', '4', '865.00', NULL, NULL, NULL, '9450HL980', '3', '9450HL980', '9450HL980', '2019-02-28', '2019-03-07', 'N/A', 'N/A'),
(10, 38904, '4', '5', '6', '185.00', NULL, NULL, NULL, '9450HL986', '2', '9450HL986', '9450HL986', '2019-02-28', '2019-02-28', '07:00', 'ASAP'),
(11, 38904, '6', '8', '4', '995.00', NULL, NULL, NULL, NULL, '3', '9450HL986', '9450HL986', '2019-02-28', '2019-03-10', NULL, NULL),
(12, 38904, '5', '10', '1', '445.00', '5', NULL, '22.50', '95368', '4', '9450HL986', '9450HL986', '2019-03-10', '2019-03-11', 'ASAP', '13:00'),
(13, 38901, '6', '8', '4', '995.00', NULL, NULL, NULL, 'N/A', '3', NULL, NULL, '2019-02-27', '2019-03-05', NULL, NULL),
(14, 38905, '2', '1', '5', '185.00', NULL, NULL, '18.00', '9450HL830', '2', '9450HL830', NULL, '2019-03-05', '2019-03-06', NULL, NULL),
(15, 38905, '6', '7', '4', '995.00', NULL, NULL, NULL, NULL, '3', NULL, NULL, '2019-03-06', '2019-03-21', NULL, NULL),
(16, 38905, '5', '10', '1', '445.00', NULL, NULL, '15.00', '9450HL830', '4', '9450HL830', '9450HL830', '2019-03-21', '2019-03-21', 'ASAP', '13:00'),
(17, 38906, '4', '4', '6', '225.00', NULL, NULL, '17.00', '9451HM986', NULL, '9451HM986', '9451HM986', '2019-03-06', '2019-03-07', NULL, NULL),
(18, 38906, '6', '8', '4', '995.00', NULL, NULL, '17.60', '9451HM986', '3', '9451HM986', NULL, '2019-03-06', '2019-03-20', NULL, NULL),
(19, 38906, '8', '10', '8', '225.00', NULL, NULL, '22.00', '9451HM986', '3', '9451HM986', NULL, '2019-03-15', '2019-03-20', NULL, NULL),
(20, 38906, '5', '12', '1', '225.00', NULL, NULL, '27.50', '9451HM986', '4', '9451HM986', '9451HM986', '2019-03-20', '2019-03-21', NULL, '12:00'),
(21, 38911, '2', '1', '5', '185.00', NULL, NULL, '17.00', 'v', '2', '9504HL867', NULL, '2019-03-07', '2019-03-08', NULL, NULL),
(22, 38911, '6', '7', '4', '995.00', NULL, NULL, '17.00', '9504HL867', '3', '9504HL867', NULL, '2019-03-08', '2019-03-20', NULL, NULL),
(23, 38911, '5', '10', '1', '445.00', NULL, NULL, '22.00', '987456', '4', NULL, '9504HL867', '2019-03-22', '2019-03-22', NULL, '12:00'),
(24, 38913, '2', '1', '5', '185.00', NULL, NULL, '17.00', '9450HK359', '2', '9450HK359', 'Get going load is ready', '2019-03-14', '2019-03-15', '08:00', 'ASAP'),
(25, 38913, '6', '7', '4', '995.00', NULL, NULL, '17.00', '9450HK359', '3', NULL, NULL, '2019-03-15', '2019-03-27', NULL, NULL),
(26, 38913, '5', '10', '1', '445.00', NULL, NULL, '27.00', '9450HK359', '4', '9450HK359', 'Deliver on 9450HK359', '2019-03-27', '2019-03-28', 'ASAP', '15:00 hours'),
(27, 38917, '12', '14', '10', '1.00', NULL, NULL, '0.00', NULL, '5', NULL, NULL, '2019-04-16', '2019-04-17', NULL, NULL),
(28, 21123, '2', '1', '2', '12.00', '1', NULL, '12.00', '12', '1', '2312', '12', '2019-05-20', '2019-05-20', '12', '12');

-- --------------------------------------------------------

--
-- Table structure for table `ip_orderstatus`
--

CREATE TABLE `ip_orderstatus` (
  `orderstatusid` int(11) NOT NULL,
  `orderstatus` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ip_orderstatus`
--

INSERT INTO `ip_orderstatus` (`orderstatusid`, `orderstatus`) VALUES
(1, 'Quoted'),
(2, 'Dispatched'),
(3, 'On-Route'),
(4, 'Delivered'),
(5, 'Cancelled'),
(6, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `ip_payments`
--

CREATE TABLE `ip_payments` (
  `payment_id` int(11) NOT NULL,
  `invoice_id` int(11) NOT NULL,
  `payment_method_id` int(11) NOT NULL DEFAULT '0',
  `payment_date` date NOT NULL,
  `payment_amount` decimal(20,2) DEFAULT NULL,
  `payment_note` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ip_payment_custom`
--

CREATE TABLE `ip_payment_custom` (
  `payment_custom_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `payment_custom_fieldid` int(11) NOT NULL,
  `payment_custom_fieldvalue` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ip_payment_methods`
--

CREATE TABLE `ip_payment_methods` (
  `payment_method_id` int(11) NOT NULL,
  `payment_method_name` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ip_payment_methods`
--

INSERT INTO `ip_payment_methods` (`payment_method_id`, `payment_method_name`) VALUES
(1, 'Cash'),
(2, 'Credit Card');

-- --------------------------------------------------------

--
-- Table structure for table `ip_products`
--

CREATE TABLE `ip_products` (
  `product_id` int(11) NOT NULL,
  `family_id` int(11) DEFAULT NULL,
  `product_sku` text,
  `product_name` text,
  `product_description` longtext NOT NULL,
  `product_price` decimal(20,2) DEFAULT NULL,
  `purchase_price` decimal(20,2) DEFAULT NULL,
  `provider_name` text,
  `tax_rate_id` int(11) DEFAULT NULL,
  `unit_id` int(11) DEFAULT NULL,
  `product_tariff` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ip_products`
--

INSERT INTO `ip_products` (`product_id`, `family_id`, `product_sku`, `product_name`, `product_description`, `product_price`, `purchase_price`, `provider_name`, `tax_rate_id`, `unit_id`, `product_tariff`) VALUES
(1, 1, 'zxc', 'xzc', 'czx', '233.00', '13.00', 'asd', NULL, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ip_projects`
--

CREATE TABLE `ip_projects` (
  `project_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `project_name` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ip_quotes`
--

CREATE TABLE `ip_quotes` (
  `quote_id` int(11) NOT NULL,
  `invoice_id` int(11) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `invoice_group_id` int(11) NOT NULL,
  `quote_status_id` tinyint(2) NOT NULL DEFAULT '1',
  `quote_date_created` date NOT NULL,
  `quote_date_modified` datetime NOT NULL,
  `quote_date_expires` date NOT NULL,
  `quote_number` varchar(100) DEFAULT NULL,
  `quote_discount_amount` decimal(20,2) DEFAULT NULL,
  `quote_discount_percent` decimal(20,2) DEFAULT NULL,
  `quote_url_key` char(32) NOT NULL,
  `quote_password` varchar(90) DEFAULT NULL,
  `notes` longtext
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ip_quotes`
--

INSERT INTO `ip_quotes` (`quote_id`, `invoice_id`, `user_id`, `client_id`, `invoice_group_id`, `quote_status_id`, `quote_date_created`, `quote_date_modified`, `quote_date_expires`, `quote_number`, `quote_discount_amount`, `quote_discount_percent`, `quote_url_key`, `quote_password`, `notes`) VALUES
(1, 0, 1, 2, 3, 1, '2019-04-27', '2019-04-27 07:01:39', '2019-05-12', '2', NULL, NULL, 'sEXWVt4QU9YmMdgC3hznR6OoJT2kyPBG', '123', '');

-- --------------------------------------------------------

--
-- Table structure for table `ip_quote_amounts`
--

CREATE TABLE `ip_quote_amounts` (
  `quote_amount_id` int(11) NOT NULL,
  `quote_id` int(11) NOT NULL,
  `quote_item_subtotal` decimal(20,2) DEFAULT NULL,
  `quote_item_tax_total` decimal(20,2) DEFAULT NULL,
  `quote_tax_total` decimal(20,2) DEFAULT NULL,
  `quote_total` decimal(20,2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ip_quote_amounts`
--

INSERT INTO `ip_quote_amounts` (`quote_amount_id`, `quote_id`, `quote_item_subtotal`, `quote_item_tax_total`, `quote_tax_total`, `quote_total`) VALUES
(1, 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ip_quote_custom`
--

CREATE TABLE `ip_quote_custom` (
  `quote_custom_id` int(11) NOT NULL,
  `quote_id` int(11) NOT NULL,
  `quote_custom_fieldid` int(11) NOT NULL,
  `quote_custom_fieldvalue` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ip_quote_items`
--

CREATE TABLE `ip_quote_items` (
  `item_id` int(11) NOT NULL,
  `quote_id` int(11) NOT NULL,
  `item_tax_rate_id` int(11) NOT NULL,
  `item_product_id` int(11) DEFAULT NULL,
  `item_date_added` date NOT NULL,
  `item_name` text,
  `item_description` text,
  `item_quantity` decimal(20,2) DEFAULT NULL,
  `item_price` decimal(20,2) DEFAULT NULL,
  `item_discount_amount` decimal(20,2) DEFAULT NULL,
  `item_order` int(2) NOT NULL DEFAULT '0',
  `item_product_unit` varchar(50) DEFAULT NULL,
  `item_product_unit_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ip_quote_item_amounts`
--

CREATE TABLE `ip_quote_item_amounts` (
  `item_amount_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `item_subtotal` decimal(20,2) DEFAULT NULL,
  `item_tax_total` decimal(20,2) DEFAULT NULL,
  `item_discount` decimal(20,2) DEFAULT NULL,
  `item_total` decimal(20,2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ip_quote_tax_rates`
--

CREATE TABLE `ip_quote_tax_rates` (
  `quote_tax_rate_id` int(11) NOT NULL,
  `quote_id` int(11) NOT NULL,
  `tax_rate_id` int(11) NOT NULL,
  `include_item_tax` int(1) NOT NULL DEFAULT '0',
  `quote_tax_rate_amount` decimal(20,2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ip_receivers`
--

CREATE TABLE `ip_receivers` (
  `receiverid` int(11) NOT NULL,
  `receivername` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prov` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postal` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notes` mediumtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ip_receivers`
--

INSERT INTO `ip_receivers` (`receiverid`, `receivername`, `address`, `city`, `prov`, `postal`, `country`, `contact`, `phone`, `fax`, `email`, `notes`) VALUES
(1, 'Novelis Inc (KY)', '302 Mayde Road', 'Berea', 'KY', '40403', 'USA', NULL, '440-423-6876', NULL, NULL, 'Berea, Kentucky, is one of the world’s largest plants dedicated to aluminum can recycling, taking approximately 20 percent of the United States’ used aluminum cans, melting them down and producing sheet ingots.'),
(2, 'Novelis Inc (Rich Whse)', '105 HiLane ', 'Richmond', 'KY', NULL, 'USA', NULL, NULL, NULL, NULL, NULL),
(3, 'NS Intermodal Hub - Cincinnati', '1276 W 8th Street', 'Cincinnati', 'OH', '45203', 'USA', NULL, '513-977-3201', '513-977-3293', NULL, '1-800-497-2919'),
(4, 'CP Intermodal Hub - Chicago', '10800 South Franklin Avenue', 'Franklin Park', 'IL', '60131', 'USA', NULL, '1-630-860-4870', '1-630-860-4873', NULL, '24 / 7 '),
(5, 'CP Intermodal Hub - Edmonton', '10155 – 39 Ave NW', 'Edmonton', 'AB', 'T6E 6C8', 'Canada', NULL, '1-888-333-8111', NULL, NULL, 'Facility Gate Hours: 24/7'),
(6, 'CP Intermodal Hub - Calgary', '33 Dufferin Place S.E.', 'Calgary', 'AB', 'T2C 4M2', 'Canada', NULL, '1-888-333-8111', NULL, NULL, 'Facility Gate Hours: 7 days a week - 24 hours a day'),
(7, 'CP Intermodal Hub - Vancouver', '17900 Kennedy Road', 'Pitt Meadows', 'BC', 'V3Y 1Z1', 'Canada', NULL, '1-888-333-8111', '604-460-1313', NULL, 'Facility Gate Hours: 7days a week – 24 hours a day'),
(8, 'NS Intermodal Hub - Columbus', '3329 Thoroughbred Drive ', 'Columbus', 'OH', '43217', NULL, 'Steve Fuller – NS Division Manager', '614-492-4808', NULL, NULL, 'Main Office: 614-492-4811\nTelephone: 614-492-4808\nFax: 614-492-4816\nCustomer Service: 1-800-497-2919 '),
(9, 'Hepple Farms', '4945 184 st.', 'Surrey', 'BC', 'V3S 0L7', 'Canada', NULL, '1-604-454-4890', NULL, NULL, NULL),
(10, 'Basin Farming, Wallula Farm', '2675 ATTALIA ROAD,', 'WALLULA', 'WA', '99363', 'USA', 'Receiving', '541-314-8625', NULL, NULL, 'EPG Customer'),
(11, '3 Rivers Potato Service', '1911 Selph Landing Road', 'Pasco', 'WA', '99302', 'USA', NULL, '509-547-8488', NULL, NULL, NULL),
(12, 'Skone & Connors Produce Inc', 'Box 369', 'Warden', 'WA', NULL, 'USA', 'Receiving', '509-349-2391', NULL, NULL, 'Phone before delivery'),
(13, 'Brent Kelly Farms', '4044-96 st', 'Delta', 'BC', NULL, 'Canada', 'Receiving', '604-240-2525', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ip_servicecode`
--

CREATE TABLE `ip_servicecode` (
  `servicecodeid` int(11) NOT NULL,
  `type` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ip_servicecode`
--

INSERT INTO `ip_servicecode` (`servicecodeid`, `type`) VALUES
(1, '20 - Door to Door'),
(2, '22 - Door to Ramp'),
(3, '25 - Ramp to Ramp'),
(4, '27 - Ramp to Door'),
(5, '30 - Over the Road'),
(6, 'X - In Town Delivery');

-- --------------------------------------------------------

--
-- Table structure for table `ip_sessions`
--

CREATE TABLE `ip_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ip_settings`
--

CREATE TABLE `ip_settings` (
  `setting_id` int(11) NOT NULL,
  `setting_key` varchar(50) NOT NULL,
  `setting_value` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ip_settings`
--

INSERT INTO `ip_settings` (`setting_id`, `setting_key`, `setting_value`) VALUES
(19, 'default_language', 'english'),
(20, 'date_format', 'm/d/Y'),
(21, 'currency_symbol', '$'),
(22, 'currency_symbol_placement', 'before'),
(23, 'currency_code', 'USD'),
(24, 'invoices_due_after', '30'),
(25, 'quotes_expire_after', '15'),
(26, 'default_invoice_group', '3'),
(27, 'default_quote_group', '4'),
(28, 'thousands_separator', ','),
(29, 'decimal_point', '.'),
(30, 'cron_key', 'E0TDsMxUGRbL3HNv'),
(31, 'tax_rate_decimal_places', '2'),
(32, 'pdf_invoice_template', 'InvoicePlane'),
(33, 'pdf_invoice_template_paid', 'InvoicePlane - paid'),
(34, 'pdf_invoice_template_overdue', 'InvoicePlane - overdue'),
(35, 'pdf_quote_template', 'InvoicePlane'),
(36, 'public_invoice_template', 'InvoicePlane_Web'),
(37, 'public_quote_template', 'InvoicePlane_Web'),
(38, 'disable_sidebar', '1'),
(39, 'read_only_toggle', '4'),
(40, 'invoice_pre_password', ''),
(41, 'quote_pre_password', ''),
(42, 'email_pdf_attachment', '1'),
(43, 'generate_invoice_number_for_draft', '1'),
(44, 'generate_quote_number_for_draft', '1'),
(45, 'sumex', '0'),
(46, 'sumex_sliptype', '1'),
(47, 'sumex_canton', '0'),
(48, 'system_theme', 'invoiceplane'),
(49, 'default_hourly_rate', '0.00'),
(50, 'projects_enabled', '1'),
(51, 'pdf_quote_footer', ''),
(52, 'enable_permissive_search_clients', '0');

-- --------------------------------------------------------

--
-- Table structure for table `ip_shippers`
--

CREATE TABLE `ip_shippers` (
  `shipperid` int(11) NOT NULL,
  `shippername` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prov` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postal` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notes` mediumtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ip_shippers`
--

INSERT INTO `ip_shippers` (`shipperid`, `shippername`, `address`, `city`, `prov`, `postal`, `country`, `contact`, `phone`, `fax`, `email`, `notes`) VALUES
(1, 'ABCRC (Edmonton)', '9455 - 45th AVE NW', 'Edmonton', '1', 'T6E 5V3', 'Canada', NULL, NULL, NULL, NULL, NULL),
(2, 'Cascades Recovery', '144 Cambro Rd.', 'Kelowna', '2', 'V1V 1P7', 'Canada', 'Betty Favaro', '250-491-2242', NULL, NULL, NULL),
(3, 'ABCRC (RD)', '4403-39139 HWY 2A', 'Red Deer', '1', 'T4S 2A8', 'Canada', 'Joe', '(403) 340-0749', NULL, NULL, 'BLINDMAN INDUSTRIAL PARK'),
(4, 'ABCRC (LB)', '703-32 STREET NORTH', 'Lethbridge', '1', 'T1H 5H5', 'Canada', 'Chris', '403-329-9096', NULL, NULL, NULL),
(5, 'ABCRC (CGY)', '901-57 AVE NE', 'Calgary', '1', 'T2E 8X9', 'Canada', 'Derrick', '(403) 264-0170', '(403) 264-0179', 'sbailie@abcrc.com', NULL),
(6, 'Cascades Recovery Victoria', '2800 Bridge Street', 'Victoria', '2', 'V8T 4T3', 'Canada', 'Alice', '250-480-1274', NULL, NULL, NULL),
(7, 'CP Intermodal Hub - Edmonton', '3900 - 101 St', 'Edmonton', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'CP Intermodal Hub - Calgary', NULL, 'Calgary', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'Emterra', '6362 - 148 Street', 'Surrey', '2', 'V3C 3C4', 'CA', 'Angela Lee', '604-635-0999', NULL, NULL, NULL),
(10, 'CP Intermodal Hub - Chicago', '10800 South Franklin Avenue', 'Franklin Park', '26', '60131', 'USA', NULL, '1-630-860-4870', '1-630-860-4873', NULL, '24 / 7 '),
(11, 'Merlin Plastic Supply Inc.', '109 - 917 Cliveden Ave.', 'Delta', '2', NULL, 'Canada', 'Kevin Andrews', '604-522-6799', NULL, NULL, 'Ships to Novelis Berea, KY'),
(12, 'NS Intermodal Hub - Columbus', NULL, 'Columbus', '48', NULL, 'USA', NULL, NULL, NULL, NULL, NULL),
(13, 'Hoogland Farms', '47113 Range Road 263', 'Wetaskiwin County', '2', 'V1V 1P7', 'Canada', 'Jake', '780-818-8202', NULL, NULL, NULL),
(14, 'KELTIE FARMS INC', '52230 Rge. Rd. 271', 'Spruce Grove', '1', NULL, 'Canada', 'Don Keltie', '780-962-2871', NULL, 'donkeltie@gmail.com', 'EPG Customer'),
(15, 'Haarsma Farms', '52302 Range Road 265', 'Spruce Grove', '13', 'T7X 3L6', 'Canada', NULL, '780-962-0576', NULL, NULL, 'EPG Customer'),
(16, 'Northbank Potato Farm', '22329 Township Road 555', 'Sturgeon County', '13', 'T0A 1N1', 'Canada', NULL, '780-221-6199', NULL, NULL, 'call: 780-221-6199 (russ)\n');

-- --------------------------------------------------------

--
-- Table structure for table `ip_shipping`
--

CREATE TABLE `ip_shipping` (
  `id` int(11) NOT NULL,
  `shippingorderid` int(11) NOT NULL,
  `customer` int(11) DEFAULT NULL,
  `pickupdate` date DEFAULT NULL,
  `shipper` int(11) DEFAULT NULL,
  `receiver` int(11) DEFAULT NULL,
  `destinationhub` int(11) DEFAULT NULL,
  `routing` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `origincarrier` int(11) DEFAULT NULL,
  `pickuptime` date DEFAULT NULL,
  `customernumber` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `punotes` mediumtext COLLATE utf8mb4_unicode_ci,
  `orderdate` date DEFAULT NULL,
  `bol` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orderstatus` int(11) DEFAULT NULL,
  `trailernum` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `netweight` decimal(12,0) DEFAULT NULL,
  `seal` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `piececount` decimal(12,0) DEFAULT NULL,
  `trailersize` int(11) DEFAULT NULL,
  `trailertype` int(11) DEFAULT NULL,
  `notes` mediumtext COLLATE utf8mb4_unicode_ci,
  `instructions` text COLLATE utf8mb4_unicode_ci,
  `etadate` date DEFAULT NULL,
  `destcarrier` int(11) DEFAULT NULL,
  `deldate` date DEFAULT NULL,
  `delappt` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delnotes` text COLLATE utf8mb4_unicode_ci,
  `rate` decimal(12,2) DEFAULT NULL,
  `fsc` decimal(12,1) DEFAULT NULL,
  `currency` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trackingstatus` int(11) DEFAULT NULL,
  `trackingdetail` int(11) DEFAULT NULL,
  `railcompleted` tinyint(4) DEFAULT '0',
  `truckcompleted` tinyint(4) DEFAULT NULL,
  `delivered` tinyint(4) DEFAULT NULL,
  `customscleared` tinyint(4) DEFAULT NULL,
  `invoicesubmitted` tinyint(4) DEFAULT NULL,
  `brokerid` int(11) DEFAULT NULL,
  `additionalloadsid` int(11) DEFAULT NULL,
  `dispatcher` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ip_shipping`
--

INSERT INTO `ip_shipping` (`id`, `shippingorderid`, `customer`, `pickupdate`, `shipper`, `receiver`, `destinationhub`, `routing`, `origincarrier`, `pickuptime`, `customernumber`, `punotes`, `orderdate`, `bol`, `orderstatus`, `trailernum`, `netweight`, `seal`, `piececount`, `trailersize`, `trailertype`, `notes`, `instructions`, `etadate`, `destcarrier`, `deldate`, `delappt`, `delnotes`, `rate`, `fsc`, `currency`, `trackingstatus`, `trackingdetail`, `railcompleted`, `truckcompleted`, `delivered`, `customscleared`, `invoicesubmitted`, `brokerid`, `additionalloadsid`, `dispatcher`) VALUES
(1, 38900, 3, '2019-02-27', 1, 1, NULL, NULL, 2, '2019-02-27', '9450HL369', '9450HL369', '2019-02-27', '123456', 4, 'EMHU 632547', '45200', '123456', '31', 1, 1, '9450HL369', '9450HL369', '2019-03-04', 5, '2019-03-04', '07:00', '9450HL369', '4520.00', '22.0', 'USD', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, 1),
(2, 38901, 3, '2019-02-27', 5, 1, NULL, NULL, 4, '2019-02-27', '9450HL758', '9450HL758', '2019-02-27', '123456', 4, 'EMHU 758964', '42500', '123456', '33', 1, 1, '9450HL758', '9450HL758', '2019-03-06', 5, '2019-03-06', '09:00', 'Deliver on 9450HL758', '4250.00', NULL, 'USD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(3, 38902, 3, '2019-02-27', 9, 1, NULL, NULL, 1, '2019-02-28', '9450HL786', '9450HL786', '2019-02-28', '123456', 4, '53H234', '42500', '123456', '32', 1, 3, '9450HL786', '9450HL786', '2019-03-04', NULL, '2019-03-04', '07:00', '9450HL786', '3300.00', NULL, 'USD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(4, 38903, 3, '2019-02-28', 1, 1, NULL, NULL, 2, '2019-02-27', '9450HL980', '9450HL980', '2019-02-27', '965874', 4, 'EMHU 658951', '42500', '123698', '33', 1, 1, '9450HL980', '9450HL980', '2019-03-08', 7, '2019-03-08', '09:00', '9450HL980', '4350.00', NULL, 'USD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(6, 38905, 3, '2019-03-05', 1, 1, NULL, NULL, 2, '2019-03-05', '9450HL830', '9450HL830', '2019-03-04', NULL, 4, 'EMHU 698539', '42500', NULL, NULL, 1, 1, '9450HL830', NULL, '2019-03-21', 5, '2019-03-21', '13:00', '9450HL830', '4250.00', NULL, 'USD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(7, 38906, 3, '2019-03-06', 4, 1, 8, 'A&L/CP/NS/Continuum', 4, '2019-03-06', '9451HM986', '9451HM986 - 08:00 AM', '2019-03-05', NULL, 4, 'EMHU 689534', '42500', '6589347892', '33', 1, 1, '9451HM986', '9451HM986', '2019-03-21', 5, '2019-03-21', '12:00', '9451HM986', '4250.00', '22.0', 'USD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(8, 38907, 3, '2019-03-12', 5, 1, 8, NULL, 4, '2019-03-12', '9450HM963', '9450HM963', '2019-03-12', NULL, 4, NULL, '0', NULL, '0', 1, 1, '9450HM963', NULL, '2019-03-27', 5, '2019-03-27', NULL, '9450HM963', '3452.00', '22.0', 'USD', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3),
(9, 38908, 3, '2019-03-12', 1, 1, 4, NULL, 2, '2019-03-12', '9450HM963', '9450HM963', '2019-03-12', NULL, 4, NULL, '0', NULL, '0', 1, 1, '9450HM963', '9450HM963', '2019-03-27', 5, '2019-03-27', NULL, '9450HM963', '3245.00', '22.0', 'USD', 0, 0, 1, 1, 1, 1, 1, NULL, NULL, 2),
(10, 38909, 3, '2019-03-06', 4, 1, 8, 'A&L/CP/NS/Continuum', 4, '2019-03-06', '9451HM986', '9451HM986 - 08:00 AM', '2019-03-05', NULL, 4, 'EMHU 689534', '42500', '6589347892', '33', 1, 1, '9451HM986', '9451HM986', '2019-03-21', 5, '2019-03-21', '12:00', '9451HM986', '4250.00', '22.0', 'USD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2),
(11, 38910, 3, '2019-03-06', 4, 1, 8, 'A&L/CP/NS/Continuum', 4, '2019-03-06', '9451HM986', '9451HM986 - 08:00 AM', '2019-03-05', NULL, 4, 'EMHU 689534', '42500', '6589347892', '33', 1, 1, '9451HM986', '9451HM986', '2019-03-21', 5, '2019-03-21', '12:00', '9451HM986', '4250.00', '22.0', 'USD', NULL, NULL, 0, 0, 0, 0, 0, NULL, NULL, 3),
(12, 38911, 3, '2019-03-07', 1, 1, 4, 'oldway/', 2, '2019-03-07', '9504HL867', NULL, '2019-03-07', NULL, 4, NULL, NULL, NULL, NULL, 1, 1, NULL, '9504HL867', '2019-03-21', 5, '2019-03-21', '07:00', '9504HL867', '2698.00', '22.0', 'USD', NULL, NULL, 0, 0, 0, 0, 0, NULL, NULL, 1),
(15, 38914, 5, '2019-04-16', 13, 9, NULL, NULL, 9, '2019-04-16', 'IFQ20190416-09', 'call Jake at: 780-818-8202', '2019-04-16', NULL, 4, NULL, '47000', NULL, '0', 1, 3, NULL, NULL, '2019-04-18', NULL, '2019-04-18', 'ASAP', NULL, '1250.00', '0.0', 'CAD', NULL, NULL, 0, 1, 0, 0, 0, NULL, NULL, 1),
(16, 38915, 5, '2019-04-16', 13, 9, NULL, NULL, 10, '2019-04-16', 'IFQ20190416-10', 'call Jake at: 780-818-8202', '2019-04-16', '123456', 4, NULL, '47000', NULL, '0', 1, 3, NULL, NULL, '2019-04-18', NULL, '2019-04-17', NULL, NULL, '1250.00', '0.0', 'CAD', 2, NULL, 0, 0, 0, 0, 0, NULL, NULL, 1),
(17, 38916, 5, '2019-04-17', 14, 10, NULL, NULL, 12, '2019-04-17', 'IFQ20190417-05', NULL, '2019-04-17', '12345', 4, NULL, '42500', NULL, '0', 1, 3, 'ETA to p/u - 2019-04-17 @ noon ', 'please call ahead to unload and for directions to the farm:\nDoug at 541-314-8625', '2019-04-19', NULL, '2019-04-19', 'ASAP', NULL, '1500.00', '0.0', 'USD', 2, NULL, 0, 0, 0, 0, 0, 2, NULL, 1),
(18, 38917, 5, '2019-04-17', 14, 10, NULL, NULL, 13, '2019-04-16', 'IFQ20190417-04', 'Picked load up one day early, ok as per shipper', '2019-04-17', '12345', 4, NULL, '42500', NULL, '0', 1, 3, 'Paid by weight - $3.25 USD per cwt', 'please call ahead to unload and for directions to the farm:\nDoug at 541-314-8625', '2019-04-19', NULL, '2019-04-18', NULL, NULL, '1.00', '0.0', 'USD', 2, NULL, 0, 0, 0, 0, 0, 2, NULL, 1),
(19, 38918, 5, '2019-04-18', 15, 11, NULL, NULL, 14, '2019-04-18', 'IFQ20190418-04', 'Pickup in PM', '2019-04-18', NULL, 4, NULL, '43000', NULL, '0', 53, NULL, 'LATE:   Sleeping at Flying J\n2019-04-22 @ 13:00 hours - delivered', 'please call ahead to unload: Ph: 509-547-8488\nas staff is limited on a long weekend. Friday or early Sat AM is preferred.', '2019-04-22', NULL, '2019-04-22', 'ASAP', 'please call ahead to unload: Ph: 509-547-8488\nas staff is limited on a long weekend. Friday or early Sat AM is preferred.  ', NULL, '0.0', 'USD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(20, 38919, 5, '2019-04-24', 13, 12, NULL, NULL, 15, '2019-04-24', 'IFQ20190424-01', 'Call for p/u', '2019-04-24', NULL, 3, NULL, '42500', NULL, '0', NULL, NULL, NULL, NULL, '2019-04-26', NULL, '2019-04-26', NULL, 'ASAP - Call for delivery', NULL, NULL, 'USD', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(21, 38920, 5, '2019-04-24', 13, 12, NULL, NULL, 15, '2019-04-24', 'IFQ20190424-02', NULL, '2019-04-24', NULL, 3, NULL, '42500', NULL, '0', 1, 5, '2019-04-24 - loaded and enroute', NULL, '2019-04-26', NULL, '2019-04-26', NULL, 'ASAP', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(22, 38921, 5, '2019-04-25', 16, 13, NULL, NULL, 10, '2019-04-25', 'IFQ20190425-03', NULL, '2019-04-24', NULL, 2, NULL, '56000', NULL, '0', 53, 0, NULL, NULL, '2019-04-26', NULL, NULL, NULL, NULL, '1500.00', '0.0', 'CAD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(23, 38922, 5, '2019-04-25', 16, 13, NULL, NULL, 10, '2019-04-25', 'IFQ20190425-04', NULL, '2019-04-24', NULL, 2, NULL, '44000', NULL, '0', 53, 0, 'Tandem Load', NULL, '2019-04-26', NULL, '2019-04-26', NULL, 'ASAP - Call first', '1350.00', '0.0', 'CAD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(24, 38923, 5, '2019-04-25', 16, 13, NULL, NULL, 16, '2019-04-25', 'IFQ20190425-05', 'Tridem Load', '2019-04-24', NULL, 2, NULL, '56000', NULL, '0', 53, 0, 'Tridem Load', NULL, '2019-04-26', NULL, NULL, NULL, NULL, '1500.00', '0.0', 'CAD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(25, 38924, 3, '2019-04-25', 4, 1, NULL, 'Road', 17, '2019-04-25', '9450IB658', '08:00AM Sharp', '2019-04-24', NULL, 2, NULL, '42500', NULL, NULL, 1, 3, NULL, NULL, '2019-05-02', NULL, '2019-05-02', '00:00 midnight', 'Del Appt Required', '3600.00', '24.0', 'USD', NULL, NULL, 0, 0, 0, 0, 0, 2, NULL, 1),
(28, 2, 2, '2004-08-16', 8, 10, 10, 'Culpa inventore rep', 14, '1991-02-24', '835', 'Esse dolor corporis', '2016-05-22', 'Nisi recusandae Exe', 5, '181', '0', '774', '0', 9, 4, 'Eaque nihil quis dol', 'Tenetur ut aut volup', '2009-02-20', 5, '1983-03-04', 'Dignissimos velit i', 'Officia eu magnam pr', '0.00', '0.0', 'Aut c', 0, 0, 1, 0, 0, 1, 1, 1, 0, 3),
(30, 63, 2, '1996-08-27', 4, 1, 6, 'Corrupti aliquid ut', 10, '1986-02-27', '673', 'Dolore rerum ut volu', '2006-11-14', 'Aut vel in cupiditat', 5, '305', '0', '398', '0', 5, 4, 'Dolor quo est dolore', 'Ea dolor et reprehen', '2009-03-18', 1, '1989-01-27', 'Accusamus qui vero a', 'Incididunt iusto con', '0.00', '0.0', 'Exped', 0, 0, 1, 0, 0, 0, 1, 1, 0, 1),
(31, 40, 2, '1988-01-16', 13, 1, 9, 'Itaque nostrud ullam', 9, '2008-11-02', '438', 'Eligendi illum faci', '1994-02-12', 'Perspiciatis libero', 5, '227', '0', '652', '0', 9, 7, 'Quo voluptates quia ', 'Rem quia illum ut m', '1975-03-08', 6, '1985-07-22', 'Voluptas voluptatem ', 'Velit voluptas in et', '0.00', '0.0', 'Corru', 0, 0, 0, 1, 1, 0, 0, 1, 0, 1),
(32, 11, 2, '1985-06-10', 6, 10, 11, 'Eius laboris eveniet', 6, '2017-04-27', '596', 'Sint consectetur et', '2018-07-05', 'Voluptas duis consec', 6, '93', '0', '813', '0', 7, 7, 'Dolor ex et duis mol', 'Et in reiciendis ill', '2004-06-06', 9, '1990-12-26', 'Et quia est optio n', 'Aspernatur aliquam a', '0.00', '0.0', 'Animi', 0, 0, 1, 1, 1, 0, 0, 1, 0, 1),
(33, 66, 2, '1970-06-11', 13, 2, 10, 'Ipsum dolor facere a', 3, '1989-05-26', '590', 'Voluptates ullam fac', '1992-05-10', 'Sequi repudiandae al', 5, '321', '0', '288', '0', 2, 7, 'Sit consequatur rem', 'Non veniam a dolor ', '1971-04-02', 8, '2010-03-16', 'Velit et proident a', 'Nisi id nostrum per', '0.00', '0.0', 'Tempo', 0, 0, 0, 0, 1, 0, 1, 1, 0, 1),
(39, 45, 3, '0000-00-00', 11, 5, 3, 'Sit sunt aliquam v', 1, '0000-00-00', '476', 'At accusamus archite', '0000-00-00', 'Eos molestiae quo co', 4, '460', '0', '941', '0', 6, 5, 'Mollit maiores ea es', 'Ratione nihil tenetu', '0000-00-00', 17, '0000-00-00', 'Esse dolorum incidi', 'Deserunt voluptatum ', '0.00', '0.0', 'Perfe', 0, 0, 1, 1, 1, 0, 0, 2, 0, 3),
(40, 21123, 17, '2019-05-23', 6, 7, 4, 'Inventore reprehende', 15, '2019-05-29', '633', 'Deserunt voluptatem', '2019-06-06', 'Non sit deleniti nu', 6, '181', '0', '365', '0', 2, 6, 'Aut aut quaerat comm', 'Proident non harum ', '2019-05-15', 5, '2019-05-08', 'Odio dolore non volu', 'Voluptas dolore id ', '0.00', '0.0', 'Accus', 0, 0, 0, 1, 0, 1, 0, 2, NULL, 3);

-- --------------------------------------------------------

--
-- Table structure for table `ip_shippingorders`
--

CREATE TABLE `ip_shippingorders` (
  `id` int(11) NOT NULL,
  `shippingorderid` int(11) NOT NULL,
  `customer` int(11) DEFAULT NULL,
  `pickupdate` date DEFAULT NULL,
  `shipper` int(11) DEFAULT NULL,
  `receiver` int(11) DEFAULT NULL,
  `destinationhub` int(11) DEFAULT NULL,
  `routing` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `origincarrier` int(11) DEFAULT NULL,
  `pickuptime` date DEFAULT NULL,
  `customernumber` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `punotes` mediumtext COLLATE utf8mb4_unicode_ci,
  `orderdate` date DEFAULT NULL,
  `bol` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orderstatus` int(11) DEFAULT NULL,
  `trailernum` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `netweight` decimal(12,0) DEFAULT NULL,
  `seal` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `piececount` decimal(12,0) DEFAULT NULL,
  `trailersize` int(11) DEFAULT NULL,
  `trailertype` int(11) DEFAULT NULL,
  `notes` text COLLATE utf8mb4_unicode_ci,
  `instructions` text COLLATE utf8mb4_unicode_ci,
  `etadate` datetime DEFAULT NULL,
  `destcarrier` int(11) DEFAULT NULL,
  `deldate` datetime DEFAULT NULL,
  `delappt` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delnotes` text COLLATE utf8mb4_unicode_ci,
  `rate` decimal(12,2) DEFAULT NULL,
  `fsc` decimal(12,1) DEFAULT NULL,
  `currency` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trackingstatus` int(11) DEFAULT NULL,
  `trackingdetail` int(11) DEFAULT NULL,
  `railcompleted` tinyint(4) DEFAULT '0',
  `truckcompleted` tinyint(4) DEFAULT NULL,
  `delivered` tinyint(4) DEFAULT NULL,
  `customscleared` tinyint(4) DEFAULT NULL,
  `invoicesubmitted` tinyint(4) DEFAULT NULL,
  `brokerid` int(11) DEFAULT NULL,
  `additionalloadsid` int(11) DEFAULT NULL,
  `dispatcher` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ip_shippingorders`
--

INSERT INTO `ip_shippingorders` (`id`, `shippingorderid`, `customer`, `pickupdate`, `shipper`, `receiver`, `destinationhub`, `routing`, `origincarrier`, `pickuptime`, `customernumber`, `punotes`, `orderdate`, `bol`, `orderstatus`, `trailernum`, `netweight`, `seal`, `piececount`, `trailersize`, `trailertype`, `notes`, `instructions`, `etadate`, `destcarrier`, `deldate`, `delappt`, `delnotes`, `rate`, `fsc`, `currency`, `trackingstatus`, `trackingdetail`, `railcompleted`, `truckcompleted`, `delivered`, `customscleared`, `invoicesubmitted`, `brokerid`, `additionalloadsid`, `dispatcher`) VALUES
(1, 38900, 3, '2019-02-27', 1, 1, NULL, NULL, 2, '2019-02-27', '9450HL369', '9450HL369', '2019-02-27', '123456', 4, 'EMHU 632547', '45200', '123456', '31', 1, 1, '9450HL369', '9450HL369', '2019-03-04 00:00:00', 5, '2019-03-04 00:00:00', '07:00', '9450HL369', '4520.00', '22.0', 'USD', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, 1),
(2, 38901, 3, '2019-02-27', 5, 1, NULL, NULL, 4, '2019-02-27', '9450HL758', '9450HL758', '2019-02-27', '123456', 4, 'EMHU 758964', '42500', '123456', '33', 1, 1, '9450HL758', '9450HL758', '2019-03-06 00:00:00', 5, '2019-03-06 00:00:00', '09:00', 'Deliver on 9450HL758', '4250.00', NULL, 'USD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(3, 38902, 3, '2019-02-27', 9, 1, NULL, NULL, 1, '2019-02-28', '9450HL786', '9450HL786', '2019-02-28', '123456', 4, '53H234', '42500', '123456', '32', 1, 3, '9450HL786', '9450HL786', '2019-03-04 00:00:00', NULL, '2019-03-04 00:00:00', '07:00', '9450HL786', '3300.00', NULL, 'USD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(4, 38903, 3, '2019-02-28', 1, 1, NULL, NULL, 2, '2019-02-27', '9450HL980', '9450HL980', '2019-02-27', '965874', 4, 'EMHU 658951', '42500', '123698', '33', 1, 1, '9450HL980', '9450HL980', '2019-03-08 00:00:00', 7, '2019-03-08 00:00:00', '09:00', '9450HL980', '4350.00', NULL, 'USD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(5, 38904, 3, '2019-03-14', 5, 1, 3, NULL, 4, '2019-03-18', '9450HL986', '9450HL986', '2019-03-13', '123456', 4, 'EMHU 789654', '42500', '654321', '30', 1, 1, '9450HL986', '9450HL986', '2019-03-20 00:00:00', 5, '2019-03-13 00:00:00', '13:00', '9450HL986', '4250.00', '0.0', 'USD', 3, 35007, 0, 0, 0, 0, 0, 1, NULL, 1),
(6, 38905, 3, '2019-03-05', 1, 1, NULL, NULL, 2, '2019-03-05', '9450HL830', '9450HL830', '2019-03-04', NULL, 4, 'EMHU 698539', '42500', NULL, NULL, 1, 1, '9450HL830', NULL, '2019-03-21 00:00:00', 5, '2019-03-21 00:00:00', '13:00', '9450HL830', '4250.00', NULL, 'USD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(7, 38906, 3, '2019-03-06', 4, 1, 8, 'A&L/CP/NS/Continuum', 4, '2019-03-06', '9451HM986', '9451HM986 - 08:00 AM', '2019-03-05', NULL, 4, 'EMHU 689534', '42500', '6589347892', '33', 1, 1, '9451HM986', '9451HM986', '2019-03-21 00:00:00', 5, '2019-03-21 00:00:00', '12:00', '9451HM986', '4250.00', '22.0', 'USD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(8, 38907, 3, '2019-03-12', 5, 1, 8, NULL, 4, '2019-03-12', '9450HM963', '9450HM963', '2019-03-12', NULL, 4, NULL, '0', NULL, '0', 1, 1, '9450HM963', NULL, '2019-03-27 00:00:00', 5, '2019-03-27 00:00:00', NULL, '9450HM963', '3452.00', '22.0', 'USD', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3),
(9, 38908, 3, '2019-03-12', 1, 1, 4, NULL, 2, '2019-03-12', '9450HM963', '9450HM963', '2019-03-12', NULL, 4, NULL, '0', NULL, '0', 1, 1, '9450HM963', '9450HM963', '2019-03-27 00:00:00', 5, '2019-03-27 00:00:00', NULL, '9450HM963', '3245.00', '22.0', 'USD', 0, 0, 1, 1, 1, 1, 1, NULL, NULL, 2),
(10, 38909, 3, '2019-03-06', 4, 1, 8, 'A&L/CP/NS/Continuum', 4, '2019-03-06', '9451HM986', '9451HM986 - 08:00 AM', '2019-03-05', NULL, 4, 'EMHU 689534', '42500', '6589347892', '33', 1, 1, '9451HM986', '9451HM986', '2019-03-21 00:00:00', 5, '2019-03-21 00:00:00', '12:00', '9451HM986', '4250.00', '22.0', 'USD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2),
(11, 38910, 3, '2019-03-06', 4, 1, 8, 'A&L/CP/NS/Continuum', 4, '2019-03-06', '9451HM986', '9451HM986 - 08:00 AM', '2019-03-05', NULL, 4, 'EMHU 689534', '42500', '6589347892', '33', 1, 1, '9451HM986', '9451HM986', '2019-03-21 00:00:00', 5, '2019-03-21 00:00:00', '12:00', '9451HM986', '4250.00', '22.0', 'USD', NULL, NULL, 0, 0, 0, 0, 0, NULL, NULL, 3),
(12, 38911, 3, '2019-03-07', 1, 1, 4, 'oldway/', 2, '2019-03-07', '9504HL867', NULL, '2019-03-07', NULL, 4, NULL, NULL, NULL, NULL, 1, 1, NULL, '9504HL867', '2019-03-21 00:00:00', 5, '2019-03-21 00:00:00', '07:00', '9504HL867', '2698.00', '22.0', 'USD', NULL, NULL, 0, 0, 0, 0, 0, NULL, NULL, 1),
(13, 38912, 3, '2019-03-14', 8, 1, 7, NULL, 6, '2019-03-14', '38904', NULL, '2019-03-14', '123456', 4, NULL, '35200', NULL, '23', 1, 4, NULL, NULL, '2019-03-13 00:00:00', NULL, '2019-03-13 00:00:00', NULL, NULL, '2495.00', '0.0', 'USD', NULL, NULL, 0, 0, 0, 0, 0, 1, 1, 1),
(14, 38913, 3, '2019-03-14', 1, 1, 4, 'oldway/CP/Continuum', 2, '2019-03-14', '9450HK359', '9450HK359', '2019-03-14', 'SO65239853', 4, 'EMHU 695836', '42500', '123456', '31', 1, 1, '9450HK359', '9450HK359', '2019-03-28 00:00:00', 5, '2019-03-28 00:00:00', '2019-03-28 @ 15:00 h', 'Deliver on 9450HK359', '3425.00', '22.0', 'USD', 3, NULL, 0, 0, 0, 0, 0, 1, NULL, 1),
(15, 38914, 5, '2019-04-16', 13, 9, NULL, NULL, 9, '2019-04-16', 'IFQ20190416-09', 'call Jake at: 780-818-8202', '2019-04-16', NULL, 4, NULL, '47000', NULL, '0', 1, 3, NULL, NULL, '2019-04-18 00:00:00', NULL, '2019-04-18 00:00:00', 'ASAP', NULL, '1250.00', '0.0', 'CAD', NULL, NULL, 0, 1, 0, 0, 0, NULL, NULL, 1),
(16, 38915, 5, '2019-04-16', 13, 9, NULL, NULL, 10, '2019-04-16', 'IFQ20190416-10', 'call Jake at: 780-818-8202', '2019-04-16', '123456', 4, NULL, '47000', NULL, '0', 1, 3, NULL, NULL, '2019-04-18 00:00:00', NULL, '2019-04-17 00:00:00', NULL, NULL, '1250.00', '0.0', 'CAD', 2, NULL, 0, 0, 0, 0, 0, NULL, NULL, 1),
(17, 38916, 5, '2019-04-17', 14, 10, NULL, NULL, 12, '2019-04-17', 'IFQ20190417-05', NULL, '2019-04-17', '12345', 4, NULL, '42500', NULL, '0', 1, 3, 'ETA to p/u - 2019-04-17 @ noon ', 'please call ahead to unload and for directions to the farm:\nDoug at 541-314-8625', '2019-04-19 00:00:00', NULL, '2019-04-19 00:00:00', 'ASAP', NULL, '1500.00', '0.0', 'USD', 2, NULL, 0, 0, 0, 0, 0, 2, NULL, 1),
(18, 38917, 5, '2019-04-17', 14, 10, NULL, NULL, 13, '2019-04-16', 'IFQ20190417-04', 'Picked load up one day early, ok as per shipper', '2019-04-17', '12345', 4, NULL, '42500', NULL, '0', 1, 3, 'Paid by weight - $3.25 USD per cwt', 'please call ahead to unload and for directions to the farm:\nDoug at 541-314-8625', '2019-04-19 00:00:00', NULL, '2019-04-18 00:00:00', NULL, NULL, '1.00', '0.0', 'USD', 2, NULL, 0, 0, 0, 0, 0, 2, NULL, 1),
(19, 38918, 5, '2019-04-18', 15, 11, NULL, NULL, 14, '2019-04-18', 'IFQ20190418-04', 'Pickup in PM', '2019-04-18', NULL, 4, NULL, '43000', NULL, '0', 53, NULL, 'LATE:   Sleeping at Flying J\n2019-04-22 @ 13:00 hours - delivered', 'please call ahead to unload: Ph: 509-547-8488\nas staff is limited on a long weekend. Friday or early Sat AM is preferred.', '2019-04-22 00:00:00', NULL, '2019-04-22 00:00:00', 'ASAP', 'please call ahead to unload: Ph: 509-547-8488\nas staff is limited on a long weekend. Friday or early Sat AM is preferred.  ', NULL, '0.0', 'USD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(20, 38919, 5, '2019-04-24', 13, 12, NULL, NULL, 15, '2019-04-24', 'IFQ20190424-01', 'Call for p/u', '2019-04-24', NULL, 3, NULL, '42500', NULL, '0', NULL, NULL, NULL, NULL, '2019-04-26 00:00:00', NULL, '2019-04-26 00:00:00', NULL, 'ASAP - Call for delivery', NULL, NULL, 'USD', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(21, 38920, 5, '2019-04-24', 13, 12, NULL, NULL, 15, '2019-04-24', 'IFQ20190424-02', NULL, '2019-04-24', NULL, 3, NULL, '42500', NULL, '0', 1, 5, '2019-04-24 - loaded and enroute', NULL, '2019-04-26 00:00:00', NULL, '2019-04-26 00:00:00', NULL, 'ASAP', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(22, 38921, 5, '2019-04-25', 16, 13, NULL, NULL, 10, '2019-04-25', 'IFQ20190425-03', NULL, '2019-04-24', NULL, 2, NULL, '56000', NULL, '0', 53, 0, NULL, NULL, '2019-04-26 00:00:00', NULL, NULL, NULL, NULL, '1500.00', '0.0', 'CAD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(23, 38922, 5, '2019-04-25', 16, 13, NULL, NULL, 10, '2019-04-25', 'IFQ20190425-04', NULL, '2019-04-24', NULL, 2, NULL, '44000', NULL, '0', 53, 0, 'Tandem Load', NULL, '2019-04-26 00:00:00', NULL, '2019-04-26 00:00:00', NULL, 'ASAP - Call first', '1350.00', '0.0', 'CAD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(24, 38923, 5, '2019-04-25', 16, 13, NULL, NULL, 16, '2019-04-25', 'IFQ20190425-05', 'Tridem Load', '2019-04-24', NULL, 2, NULL, '56000', NULL, '0', 53, 0, 'Tridem Load', NULL, '2019-04-26 00:00:00', NULL, NULL, NULL, NULL, '1500.00', '0.0', 'CAD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(25, 38924, 3, '2019-04-25', 4, 1, NULL, 'Road', 17, '2019-04-25', '9450IB658', '08:00AM Sharp', '2019-04-24', NULL, 2, NULL, '42500', NULL, NULL, 1, 3, NULL, NULL, '2019-05-02 00:00:00', NULL, '2019-05-02 00:00:00', '00:00 midnight', 'Del Appt Required', '3600.00', '24.0', 'USD', NULL, NULL, 0, 0, 0, 0, 0, 2, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ip_state`
--

CREATE TABLE `ip_state` (
  `state_id` smallint(5) UNSIGNED NOT NULL COMMENT 'PK: Unique state ID',
  `state` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'State name with first letter capital',
  `state_abbr` varchar(8) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Optional state abbreviation (US is 2 capital letters)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ip_state`
--

INSERT INTO `ip_state` (`state_id`, `state`, `state_abbr`) VALUES
(1, 'Alberta', 'AB'),
(2, 'British Columbia', 'BC'),
(3, 'Manitoba', 'MB'),
(4, 'New Brunswick', 'NB'),
(5, 'Newfoundland', 'NL'),
(6, 'Nova Scotia', 'NS'),
(7, 'Nunavut', 'NV'),
(8, 'Ontario', 'ON'),
(9, 'Prince Edward Island', 'PE'),
(10, 'Quebec', 'QC'),
(11, 'Saskatchewan', 'SK'),
(12, 'Yukon', 'YK'),
(13, 'Alabama', 'AL'),
(14, 'Alaska', 'AK'),
(15, 'Arizona', 'AZ'),
(16, 'Arkansas', 'AR'),
(17, 'California', 'CA'),
(18, 'Colorado', 'CO'),
(19, 'Connecticut', 'CT'),
(20, 'Delaware', 'DE'),
(21, 'District of Columbia', 'DC'),
(22, 'Florida', 'FL'),
(23, 'Georgia', 'GA'),
(24, 'Hawaii', 'HI'),
(25, 'Idaho', 'ID'),
(26, 'Illinois', 'IL'),
(27, 'Indiana', 'IN'),
(28, 'Iowa', 'IA'),
(29, 'Kansas', 'KS'),
(30, 'Kentucky', 'KY'),
(31, 'Louisiana', 'LA'),
(32, 'Maine', 'ME'),
(33, 'Maryland', 'MD'),
(34, 'Massachusetts', 'MA'),
(35, 'Michigan', 'MI'),
(36, 'Minnesota', 'MN'),
(37, 'Mississippi', 'MS'),
(38, 'Missouri', 'MO'),
(39, 'Montana', 'MT'),
(40, 'Nebraska', 'NE'),
(41, 'Nevada', 'NV'),
(42, 'New Hampshire', 'NH'),
(43, 'New Jersey', 'NJ'),
(44, 'New Mexico', 'NM'),
(45, 'New York', 'NY'),
(46, 'North Carolina', 'NC'),
(47, 'North Dakota', 'ND'),
(48, 'Ohio', 'OH'),
(49, 'Oklahoma', 'OK'),
(50, 'Oregon', 'OR'),
(51, 'Pennsylvania', 'PA'),
(52, 'Rhode Island', 'RI'),
(53, 'South Carolina', 'SC'),
(54, 'South Dakota', 'SD'),
(55, 'Tennessee', 'TN'),
(56, 'Texas', 'TX'),
(57, 'Utah', 'UT'),
(58, 'Vermont', 'VT'),
(59, 'Virginia', 'VA'),
(60, 'Washington', 'WA'),
(61, 'West Virginia', 'WV'),
(62, 'Wisconsin', 'WI'),
(63, 'Wyoming', 'WY');

-- --------------------------------------------------------

--
-- Table structure for table `ip_tasks`
--

CREATE TABLE `ip_tasks` (
  `task_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `task_name` text,
  `task_description` longtext NOT NULL,
  `task_price` decimal(20,2) DEFAULT NULL,
  `task_finish_date` date NOT NULL,
  `task_status` tinyint(1) NOT NULL,
  `tax_rate_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ip_taxrate`
--

CREATE TABLE `ip_taxrate` (
  `state_id` smallint(5) UNSIGNED NOT NULL COMMENT 'PK: Unique state ID',
  `provtax` decimal(12,1) NOT NULL,
  `state_abbr` varchar(8) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ip_taxrate`
--

INSERT INTO `ip_taxrate` (`state_id`, `provtax`, `state_abbr`) VALUES
(1, '5.0', 'BC'),
(2, '5.0', 'AB'),
(3, '5.0', 'MB'),
(4, '15.0', 'NB'),
(5, '13.0', 'ON'),
(6, '15.0', 'NL'),
(7, '5.0', 'NT'),
(8, '15.0', 'NS'),
(9, '5.0', 'NU'),
(10, '5.0', 'YT'),
(11, '15.0', 'PE'),
(12, '5.0', 'QC'),
(13, '5.0', 'SK'),
(14, '0.0', 'Z');

-- --------------------------------------------------------

--
-- Table structure for table `ip_tax_rates`
--

CREATE TABLE `ip_tax_rates` (
  `tax_rate_id` int(11) NOT NULL,
  `tax_rate_name` text,
  `tax_rate_percent` decimal(5,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ip_tax_rates`
--

INSERT INTO `ip_tax_rates` (`tax_rate_id`, `tax_rate_name`, `tax_rate_percent`) VALUES
(1, 'BS', '12.00');

-- --------------------------------------------------------

--
-- Table structure for table `ip_trackingdetail`
--

CREATE TABLE `ip_trackingdetail` (
  `trackingdetailid` int(11) NOT NULL,
  `shippingorderid` int(11) DEFAULT NULL,
  `trackingdate` date DEFAULT NULL,
  `location` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trackingstatus` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trackingcomment` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ip_trackingdetail`
--

INSERT INTO `ip_trackingdetail` (`trackingdetailid`, `shippingorderid`, `trackingdate`, `location`, `trackingstatus`, `trackingcomment`) VALUES
(1, 38900, '2019-02-27', 'Edmonton', '1', 'new comment'),
(2, 38901, '2019-02-27', 'Delta BC', '3', 'Dispatched'),
(35000, 38900, '2019-02-28', 'Edmonton', '3', NULL),
(35001, 38900, '2019-02-27', 'Edm', '3', 'Ingated not moving'),
(35002, 38903, '2019-02-27', 'Edmonton', '2', NULL),
(35003, 38904, '2019-02-28', 'Calgary', '2', 'Waiting for Carrier'),
(35004, 38905, '2019-03-05', 'Edmonton', '2', NULL),
(35005, 38905, '2019-03-04', 'Edmonton', '3', NULL),
(35006, 38911, '2019-03-07', 'Edm', '2', NULL),
(35007, 38904, '2019-03-08', 'Moose Jaw', '3', 'New ETA 03/21 @ 0400'),
(35008, 38914, '2019-04-16', 'Edm', '3', 'loaded at 12:00 noon'),
(35009, 38915, '2019-04-16', 'Edm', '3', 'Loaded at 1PM'),
(35010, 38919, '2019-04-24', 'Edmonton', '3', 'Loaded and enroute'),
(35011, 38920, '2019-04-24', 'Edmonton', '3', 'Loaded and enroute'),
(35012, 21123, '2019-05-20', '123', '1', 'easdasd');

-- --------------------------------------------------------

--
-- Table structure for table `ip_tracktrace`
--

CREATE TABLE `ip_tracktrace` (
  `tracktraceid` int(255) NOT NULL,
  `type` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ip_tracktrace`
--

INSERT INTO `ip_tracktrace` (`tracktraceid`, `type`) VALUES
(1, 'Spotted'),
(2, 'Loaded'),
(3, 'Enroute'),
(4, 'OutBound'),
(5, 'Arrived Not Grounded'),
(6, 'Arrived Ready P/U'),
(7, 'ETA'),
(8, 'Delivered'),
(9, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `ip_trailersize`
--

CREATE TABLE `ip_trailersize` (
  `trailersizeid` int(11) NOT NULL,
  `size` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ip_trailersize`
--

INSERT INTO `ip_trailersize` (`trailersizeid`, `size`) VALUES
(1, '53\''),
(2, '48\''),
(3, '45\''),
(4, '40\''),
(5, '20\''),
(6, 'SuperB'),
(7, 'Other'),
(8, '7 axle'),
(9, '9 axle'),
(10, 'RGN');

-- --------------------------------------------------------

--
-- Table structure for table `ip_trailertype`
--

CREATE TABLE `ip_trailertype` (
  `trailertypeid` int(11) NOT NULL,
  `type` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ip_trailertype`
--

INSERT INTO `ip_trailertype` (`trailertypeid`, `type`) VALUES
(1, 'Container'),
(2, 'Rail Box Car'),
(3, 'Dry/Van'),
(4, 'Step Deck'),
(5, 'Reefer'),
(6, '7 axle'),
(7, '9 axle'),
(8, 'RGN');

-- --------------------------------------------------------

--
-- Table structure for table `ip_units`
--

CREATE TABLE `ip_units` (
  `unit_id` int(11) NOT NULL,
  `unit_name` varchar(50) DEFAULT NULL,
  `unit_name_plrl` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ip_units`
--

INSERT INTO `ip_units` (`unit_id`, `unit_name`, `unit_name_plrl`) VALUES
(1, 'ucs', 'ucss');

-- --------------------------------------------------------

--
-- Table structure for table `ip_uploads`
--

CREATE TABLE `ip_uploads` (
  `upload_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `url_key` char(32) NOT NULL,
  `file_name_original` longtext NOT NULL,
  `file_name_new` longtext NOT NULL,
  `uploaded_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ip_users`
--

CREATE TABLE `ip_users` (
  `user_id` int(11) NOT NULL,
  `user_type` int(1) NOT NULL DEFAULT '0',
  `user_active` tinyint(1) DEFAULT '1',
  `user_date_created` datetime NOT NULL,
  `user_date_modified` datetime NOT NULL,
  `user_language` varchar(255) DEFAULT 'system',
  `user_name` text,
  `user_company` text,
  `user_address_1` text,
  `user_address_2` text,
  `user_city` text,
  `user_state` text,
  `user_zip` text,
  `user_country` text,
  `user_phone` text,
  `user_fax` text,
  `user_mobile` text,
  `user_email` text,
  `user_password` varchar(60) NOT NULL,
  `user_web` text,
  `user_vat_id` text,
  `user_tax_code` text,
  `user_psalt` text,
  `user_all_clients` int(1) NOT NULL DEFAULT '0',
  `user_passwordreset_token` varchar(100) DEFAULT '',
  `user_subscribernumber` varchar(40) DEFAULT NULL,
  `user_iban` varchar(34) DEFAULT NULL,
  `user_gln` bigint(13) DEFAULT NULL,
  `user_rcc` varchar(7) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ip_users`
--

INSERT INTO `ip_users` (`user_id`, `user_type`, `user_active`, `user_date_created`, `user_date_modified`, `user_language`, `user_name`, `user_company`, `user_address_1`, `user_address_2`, `user_city`, `user_state`, `user_zip`, `user_country`, `user_phone`, `user_fax`, `user_mobile`, `user_email`, `user_password`, `user_web`, `user_vat_id`, `user_tax_code`, `user_psalt`, `user_all_clients`, `user_passwordreset_token`, `user_subscribernumber`, `user_iban`, `user_gln`, `user_rcc`) VALUES
(1, 1, 1, '2019-04-25 07:43:34', '2019-04-25 07:43:34', 'system', 'Lucy Holden', NULL, '47 Green Cowley Lane', '', 'Rerum sed ipsam dolo', 'Omnis quia sunt unde', '47330', 'AL', '8718452585', '', '', 'haadi.javaid@gmail.com', '$2a$10$ea6bdb27b5d634eee2eadOrGqQrC2lZeRjTfu/dQjN1xVvKHnS6iS', '', NULL, NULL, 'ea6bdb27b5d634eee2eada', 0, '', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ip_user_clients`
--

CREATE TABLE `ip_user_clients` (
  `user_client_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ip_user_custom`
--

CREATE TABLE `ip_user_custom` (
  `user_custom_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_custom_fieldid` int(11) NOT NULL,
  `user_custom_fieldvalue` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ip_versions`
--

CREATE TABLE `ip_versions` (
  `version_id` int(11) NOT NULL,
  `version_date_applied` varchar(14) NOT NULL,
  `version_file` varchar(45) NOT NULL,
  `version_sql_errors` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ip_versions`
--

INSERT INTO `ip_versions` (`version_id`, `version_date_applied`, `version_file`, `version_sql_errors`) VALUES
(1, '1556170965', '000_1.0.0.sql', 0),
(2, '1556170967', '001_1.0.1.sql', 0),
(3, '1556170967', '002_1.0.2.sql', 0),
(4, '1556170967', '003_1.1.0.sql', 0),
(5, '1556170967', '004_1.1.1.sql', 0),
(6, '1556170967', '005_1.1.2.sql', 0),
(7, '1556170968', '006_1.2.0.sql', 0),
(8, '1556170968', '007_1.2.1.sql', 0),
(9, '1556170968', '008_1.3.0.sql', 0),
(10, '1556170968', '009_1.3.1.sql', 0),
(11, '1556170968', '010_1.3.2.sql', 0),
(12, '1556170968', '011_1.3.3.sql', 0),
(13, '1556170969', '012_1.4.0.sql', 0),
(14, '1556170969', '013_1.4.1.sql', 0),
(15, '1556170969', '014_1.4.2.sql', 0),
(16, '1556170969', '015_1.4.3.sql', 0),
(17, '1556170969', '016_1.4.4.sql', 0),
(18, '1556170969', '017_1.4.5.sql', 0),
(19, '1556170969', '018_1.4.6.sql', 0),
(20, '1556170972', '019_1.4.7.sql', 0),
(21, '1556170972', '020_1.4.8.sql', 0),
(22, '1556170972', '021_1.4.9.sql', 0),
(23, '1556170972', '022_1.4.10.sql', 0),
(24, '1556170973', '023_1.5.0.sql', 0),
(25, '1556170974', '024_1.5.1.sql', 0),
(26, '1556170974', '025_1.5.2.sql', 0),
(27, '1556170974', '026_1.5.3.sql', 0),
(28, '1556170975', '027_1.5.4.sql', 0),
(29, '1556170975', '028_1.5.5.sql', 0),
(30, '1556170975', '029_1.5.6.sql', 0),
(31, '1556170975', '030_1.5.7.sql', 0),
(32, '1556170975', '031_1.5.8.sql', 0),
(33, '1556170975', '032_1.5.9.sql', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ip_carriers`
--
ALTER TABLE `ip_carriers`
  ADD PRIMARY KEY (`carrierid`);

--
-- Indexes for table `ip_clients`
--
ALTER TABLE `ip_clients`
  ADD PRIMARY KEY (`client_id`),
  ADD KEY `client_active` (`client_active`);

--
-- Indexes for table `ip_client_custom`
--
ALTER TABLE `ip_client_custom`
  ADD PRIMARY KEY (`client_custom_id`),
  ADD UNIQUE KEY `client_id` (`client_id`,`client_custom_fieldid`);

--
-- Indexes for table `ip_client_notes`
--
ALTER TABLE `ip_client_notes`
  ADD PRIMARY KEY (`client_note_id`),
  ADD KEY `client_id` (`client_id`,`client_note_date`);

--
-- Indexes for table `ip_custombrokers`
--
ALTER TABLE `ip_custombrokers`
  ADD PRIMARY KEY (`brokerid`);

--
-- Indexes for table `ip_custom_fields`
--
ALTER TABLE `ip_custom_fields`
  ADD PRIMARY KEY (`custom_field_id`),
  ADD UNIQUE KEY `custom_field_table_2` (`custom_field_table`,`custom_field_label`),
  ADD KEY `custom_field_table` (`custom_field_table`);

--
-- Indexes for table `ip_custom_values`
--
ALTER TABLE `ip_custom_values`
  ADD PRIMARY KEY (`custom_values_id`);

--
-- Indexes for table `ip_dispatcher`
--
ALTER TABLE `ip_dispatcher`
  ADD PRIMARY KEY (`dispatcherid`);

--
-- Indexes for table `ip_email_templates`
--
ALTER TABLE `ip_email_templates`
  ADD PRIMARY KEY (`email_template_id`);

--
-- Indexes for table `ip_families`
--
ALTER TABLE `ip_families`
  ADD PRIMARY KEY (`family_id`);

--
-- Indexes for table `ip_imports`
--
ALTER TABLE `ip_imports`
  ADD PRIMARY KEY (`import_id`);

--
-- Indexes for table `ip_import_details`
--
ALTER TABLE `ip_import_details`
  ADD PRIMARY KEY (`import_detail_id`),
  ADD KEY `import_id` (`import_id`,`import_record_id`);

--
-- Indexes for table `ip_invoices`
--
ALTER TABLE `ip_invoices`
  ADD PRIMARY KEY (`invoice_id`),
  ADD UNIQUE KEY `invoice_url_key` (`invoice_url_key`),
  ADD KEY `user_id` (`user_id`,`client_id`,`invoice_group_id`,`invoice_date_created`,`invoice_date_due`,`invoice_number`),
  ADD KEY `invoice_status_id` (`invoice_status_id`);

--
-- Indexes for table `ip_invoices_recurring`
--
ALTER TABLE `ip_invoices_recurring`
  ADD PRIMARY KEY (`invoice_recurring_id`),
  ADD KEY `invoice_id` (`invoice_id`);

--
-- Indexes for table `ip_invoice_amounts`
--
ALTER TABLE `ip_invoice_amounts`
  ADD PRIMARY KEY (`invoice_amount_id`),
  ADD KEY `invoice_id` (`invoice_id`),
  ADD KEY `invoice_paid` (`invoice_paid`,`invoice_balance`);

--
-- Indexes for table `ip_invoice_custom`
--
ALTER TABLE `ip_invoice_custom`
  ADD PRIMARY KEY (`invoice_custom_id`),
  ADD UNIQUE KEY `invoice_id` (`invoice_id`,`invoice_custom_fieldid`);

--
-- Indexes for table `ip_invoice_groups`
--
ALTER TABLE `ip_invoice_groups`
  ADD PRIMARY KEY (`invoice_group_id`),
  ADD KEY `invoice_group_next_id` (`invoice_group_next_id`),
  ADD KEY `invoice_group_left_pad` (`invoice_group_left_pad`);

--
-- Indexes for table `ip_invoice_items`
--
ALTER TABLE `ip_invoice_items`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `invoice_id` (`invoice_id`,`item_tax_rate_id`,`item_date_added`,`item_order`);

--
-- Indexes for table `ip_invoice_item_amounts`
--
ALTER TABLE `ip_invoice_item_amounts`
  ADD PRIMARY KEY (`item_amount_id`),
  ADD KEY `item_id` (`item_id`);

--
-- Indexes for table `ip_invoice_sumex`
--
ALTER TABLE `ip_invoice_sumex`
  ADD PRIMARY KEY (`sumex_id`);

--
-- Indexes for table `ip_invoice_tax_rates`
--
ALTER TABLE `ip_invoice_tax_rates`
  ADD PRIMARY KEY (`invoice_tax_rate_id`),
  ADD KEY `invoice_id` (`invoice_id`,`tax_rate_id`);

--
-- Indexes for table `ip_item_lookups`
--
ALTER TABLE `ip_item_lookups`
  ADD PRIMARY KEY (`item_lookup_id`);

--
-- Indexes for table `ip_merchant_responses`
--
ALTER TABLE `ip_merchant_responses`
  ADD PRIMARY KEY (`merchant_response_id`),
  ADD KEY `merchant_response_date` (`merchant_response_date`),
  ADD KEY `invoice_id` (`invoice_id`);

--
-- Indexes for table `ip_moves`
--
ALTER TABLE `ip_moves`
  ADD PRIMARY KEY (`movesid`);

--
-- Indexes for table `ip_orderstatus`
--
ALTER TABLE `ip_orderstatus`
  ADD PRIMARY KEY (`orderstatusid`);

--
-- Indexes for table `ip_payments`
--
ALTER TABLE `ip_payments`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `invoice_id` (`invoice_id`),
  ADD KEY `payment_method_id` (`payment_method_id`),
  ADD KEY `payment_amount` (`payment_amount`);

--
-- Indexes for table `ip_payment_custom`
--
ALTER TABLE `ip_payment_custom`
  ADD PRIMARY KEY (`payment_custom_id`),
  ADD UNIQUE KEY `payment_id` (`payment_id`,`payment_custom_fieldid`);

--
-- Indexes for table `ip_payment_methods`
--
ALTER TABLE `ip_payment_methods`
  ADD PRIMARY KEY (`payment_method_id`);

--
-- Indexes for table `ip_products`
--
ALTER TABLE `ip_products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `ip_projects`
--
ALTER TABLE `ip_projects`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `ip_quotes`
--
ALTER TABLE `ip_quotes`
  ADD PRIMARY KEY (`quote_id`),
  ADD KEY `user_id` (`user_id`,`client_id`,`invoice_group_id`,`quote_date_created`,`quote_date_expires`,`quote_number`),
  ADD KEY `invoice_id` (`invoice_id`),
  ADD KEY `quote_status_id` (`quote_status_id`);

--
-- Indexes for table `ip_quote_amounts`
--
ALTER TABLE `ip_quote_amounts`
  ADD PRIMARY KEY (`quote_amount_id`),
  ADD KEY `quote_id` (`quote_id`);

--
-- Indexes for table `ip_quote_custom`
--
ALTER TABLE `ip_quote_custom`
  ADD PRIMARY KEY (`quote_custom_id`),
  ADD UNIQUE KEY `quote_id` (`quote_id`,`quote_custom_fieldid`);

--
-- Indexes for table `ip_quote_items`
--
ALTER TABLE `ip_quote_items`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `quote_id` (`quote_id`,`item_date_added`,`item_order`),
  ADD KEY `item_tax_rate_id` (`item_tax_rate_id`);

--
-- Indexes for table `ip_quote_item_amounts`
--
ALTER TABLE `ip_quote_item_amounts`
  ADD PRIMARY KEY (`item_amount_id`),
  ADD KEY `item_id` (`item_id`);

--
-- Indexes for table `ip_quote_tax_rates`
--
ALTER TABLE `ip_quote_tax_rates`
  ADD PRIMARY KEY (`quote_tax_rate_id`),
  ADD KEY `quote_id` (`quote_id`),
  ADD KEY `tax_rate_id` (`tax_rate_id`);

--
-- Indexes for table `ip_receivers`
--
ALTER TABLE `ip_receivers`
  ADD PRIMARY KEY (`receiverid`);

--
-- Indexes for table `ip_servicecode`
--
ALTER TABLE `ip_servicecode`
  ADD PRIMARY KEY (`servicecodeid`);

--
-- Indexes for table `ip_sessions`
--
ALTER TABLE `ip_sessions`
  ADD KEY `ip_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `ip_settings`
--
ALTER TABLE `ip_settings`
  ADD PRIMARY KEY (`setting_id`),
  ADD KEY `setting_key` (`setting_key`);

--
-- Indexes for table `ip_shippers`
--
ALTER TABLE `ip_shippers`
  ADD PRIMARY KEY (`shipperid`);

--
-- Indexes for table `ip_shipping`
--
ALTER TABLE `ip_shipping`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ip_shippingorders`
--
ALTER TABLE `ip_shippingorders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ip_state`
--
ALTER TABLE `ip_state`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `ip_tasks`
--
ALTER TABLE `ip_tasks`
  ADD PRIMARY KEY (`task_id`);

--
-- Indexes for table `ip_taxrate`
--
ALTER TABLE `ip_taxrate`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `ip_tax_rates`
--
ALTER TABLE `ip_tax_rates`
  ADD PRIMARY KEY (`tax_rate_id`);

--
-- Indexes for table `ip_trackingdetail`
--
ALTER TABLE `ip_trackingdetail`
  ADD PRIMARY KEY (`trackingdetailid`),
  ADD KEY `shippingorderid` (`shippingorderid`);

--
-- Indexes for table `ip_tracktrace`
--
ALTER TABLE `ip_tracktrace`
  ADD PRIMARY KEY (`tracktraceid`);

--
-- Indexes for table `ip_trailersize`
--
ALTER TABLE `ip_trailersize`
  ADD PRIMARY KEY (`trailersizeid`);

--
-- Indexes for table `ip_trailertype`
--
ALTER TABLE `ip_trailertype`
  ADD PRIMARY KEY (`trailertypeid`);

--
-- Indexes for table `ip_units`
--
ALTER TABLE `ip_units`
  ADD PRIMARY KEY (`unit_id`);

--
-- Indexes for table `ip_uploads`
--
ALTER TABLE `ip_uploads`
  ADD PRIMARY KEY (`upload_id`);

--
-- Indexes for table `ip_users`
--
ALTER TABLE `ip_users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `ip_user_clients`
--
ALTER TABLE `ip_user_clients`
  ADD PRIMARY KEY (`user_client_id`),
  ADD KEY `user_id` (`user_id`,`client_id`);

--
-- Indexes for table `ip_user_custom`
--
ALTER TABLE `ip_user_custom`
  ADD PRIMARY KEY (`user_custom_id`),
  ADD UNIQUE KEY `user_id` (`user_id`,`user_custom_fieldid`);

--
-- Indexes for table `ip_versions`
--
ALTER TABLE `ip_versions`
  ADD PRIMARY KEY (`version_id`),
  ADD KEY `version_date_applied` (`version_date_applied`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ip_carriers`
--
ALTER TABLE `ip_carriers`
  MODIFY `carrierid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `ip_clients`
--
ALTER TABLE `ip_clients`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `ip_client_custom`
--
ALTER TABLE `ip_client_custom`
  MODIFY `client_custom_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ip_client_notes`
--
ALTER TABLE `ip_client_notes`
  MODIFY `client_note_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ip_custombrokers`
--
ALTER TABLE `ip_custombrokers`
  MODIFY `brokerid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ip_custom_fields`
--
ALTER TABLE `ip_custom_fields`
  MODIFY `custom_field_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ip_custom_values`
--
ALTER TABLE `ip_custom_values`
  MODIFY `custom_values_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ip_dispatcher`
--
ALTER TABLE `ip_dispatcher`
  MODIFY `dispatcherid` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ip_email_templates`
--
ALTER TABLE `ip_email_templates`
  MODIFY `email_template_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ip_families`
--
ALTER TABLE `ip_families`
  MODIFY `family_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ip_imports`
--
ALTER TABLE `ip_imports`
  MODIFY `import_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ip_import_details`
--
ALTER TABLE `ip_import_details`
  MODIFY `import_detail_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ip_invoices`
--
ALTER TABLE `ip_invoices`
  MODIFY `invoice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ip_invoices_recurring`
--
ALTER TABLE `ip_invoices_recurring`
  MODIFY `invoice_recurring_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ip_invoice_amounts`
--
ALTER TABLE `ip_invoice_amounts`
  MODIFY `invoice_amount_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ip_invoice_custom`
--
ALTER TABLE `ip_invoice_custom`
  MODIFY `invoice_custom_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ip_invoice_groups`
--
ALTER TABLE `ip_invoice_groups`
  MODIFY `invoice_group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ip_invoice_items`
--
ALTER TABLE `ip_invoice_items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ip_invoice_item_amounts`
--
ALTER TABLE `ip_invoice_item_amounts`
  MODIFY `item_amount_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ip_invoice_sumex`
--
ALTER TABLE `ip_invoice_sumex`
  MODIFY `sumex_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ip_invoice_tax_rates`
--
ALTER TABLE `ip_invoice_tax_rates`
  MODIFY `invoice_tax_rate_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ip_item_lookups`
--
ALTER TABLE `ip_item_lookups`
  MODIFY `item_lookup_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ip_merchant_responses`
--
ALTER TABLE `ip_merchant_responses`
  MODIFY `merchant_response_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ip_moves`
--
ALTER TABLE `ip_moves`
  MODIFY `movesid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `ip_orderstatus`
--
ALTER TABLE `ip_orderstatus`
  MODIFY `orderstatusid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ip_payments`
--
ALTER TABLE `ip_payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ip_payment_custom`
--
ALTER TABLE `ip_payment_custom`
  MODIFY `payment_custom_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ip_payment_methods`
--
ALTER TABLE `ip_payment_methods`
  MODIFY `payment_method_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ip_products`
--
ALTER TABLE `ip_products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ip_projects`
--
ALTER TABLE `ip_projects`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ip_quotes`
--
ALTER TABLE `ip_quotes`
  MODIFY `quote_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ip_quote_amounts`
--
ALTER TABLE `ip_quote_amounts`
  MODIFY `quote_amount_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ip_quote_custom`
--
ALTER TABLE `ip_quote_custom`
  MODIFY `quote_custom_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ip_quote_items`
--
ALTER TABLE `ip_quote_items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ip_quote_item_amounts`
--
ALTER TABLE `ip_quote_item_amounts`
  MODIFY `item_amount_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ip_quote_tax_rates`
--
ALTER TABLE `ip_quote_tax_rates`
  MODIFY `quote_tax_rate_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ip_receivers`
--
ALTER TABLE `ip_receivers`
  MODIFY `receiverid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `ip_servicecode`
--
ALTER TABLE `ip_servicecode`
  MODIFY `servicecodeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ip_settings`
--
ALTER TABLE `ip_settings`
  MODIFY `setting_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `ip_shippers`
--
ALTER TABLE `ip_shippers`
  MODIFY `shipperid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `ip_shipping`
--
ALTER TABLE `ip_shipping`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `ip_shippingorders`
--
ALTER TABLE `ip_shippingorders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `ip_state`
--
ALTER TABLE `ip_state`
  MODIFY `state_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'PK: Unique state ID', AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `ip_tasks`
--
ALTER TABLE `ip_tasks`
  MODIFY `task_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ip_taxrate`
--
ALTER TABLE `ip_taxrate`
  MODIFY `state_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'PK: Unique state ID', AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `ip_tax_rates`
--
ALTER TABLE `ip_tax_rates`
  MODIFY `tax_rate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ip_trackingdetail`
--
ALTER TABLE `ip_trackingdetail`
  MODIFY `trackingdetailid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35013;

--
-- AUTO_INCREMENT for table `ip_tracktrace`
--
ALTER TABLE `ip_tracktrace`
  MODIFY `tracktraceid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ip_trailersize`
--
ALTER TABLE `ip_trailersize`
  MODIFY `trailersizeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `ip_trailertype`
--
ALTER TABLE `ip_trailertype`
  MODIFY `trailertypeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ip_units`
--
ALTER TABLE `ip_units`
  MODIFY `unit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ip_uploads`
--
ALTER TABLE `ip_uploads`
  MODIFY `upload_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ip_users`
--
ALTER TABLE `ip_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ip_user_clients`
--
ALTER TABLE `ip_user_clients`
  MODIFY `user_client_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ip_user_custom`
--
ALTER TABLE `ip_user_custom`
  MODIFY `user_custom_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ip_versions`
--
ALTER TABLE `ip_versions`
  MODIFY `version_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
