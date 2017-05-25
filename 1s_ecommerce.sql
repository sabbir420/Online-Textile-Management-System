-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2017 at 03:39 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `1s_ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `user_id` int(10) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`user_id`, `user_email`, `user_pass`) VALUES
(1, 'pasindu', 'pasindu');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `brand_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, 'Bossy'),
(2, 'emarald'),
(3, 'rough'),
(4, 'crocodile'),
(5, 'signature'),
(6, 'andrias'),
(7, 'ebony');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`p_id`, `ip_add`, `qty`) VALUES
(12, '::1', 0),
(16, '::1', 0),
(21, '::1', 0),
(24, '::1', 0),
(29, '::1', 0),
(30, '::1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Gents'),
(2, 'Ladies'),
(3, 'Kids'),
(4, 'shoes'),
(5, 'Socks');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `Customer_id` int(11) NOT NULL,
  `NIC_Number` text NOT NULL,
  `Full_Name` text NOT NULL,
  `Address` text NOT NULL,
  `User_Name` varchar(200) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Date_Of_Birth` varchar(10) NOT NULL,
  `Sex` text NOT NULL,
  `Mobile_Number` int(10) NOT NULL,
  `Occupation` text NOT NULL,
  `Photo` text NOT NULL,
  `Customer_Ip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`Customer_id`, `NIC_Number`, `Full_Name`, `Address`, `User_Name`, `Password`, `Date_Of_Birth`, `Sex`, `Mobile_Number`, `Occupation`, `Photo`, `Customer_Ip`) VALUES
(28, '931680870V', 'pasindu dharmaranga', 'jaffna', 'rdharmaranga@gmail.com', 'b9a24e35c769d9e068bf21356e94f4cb', '04/17/2008', 'male', 788244394, 'Engineer', '15-beach-sea-photography.jpg', '::1'),
(32, '0239823933', 'someone', 'SOmewhere in the Galaxy', 'someone@me.com', '!2qwasZX', '02/01/2017', 'Male', 2147483647, 'No job', '61iIbszefRL._UL1500_.jpg', '::1'),
(41, '932552701V', 'thuvaragan', 'batticaloa', 'ravithuvaragan1993@gmail.com', 'b75ec0d4f5234f39b4a40f3c83484faf', '09/11/1993', 'Male', 77101602, 'doc', '61iIbszefRL._UL1500_.jpg', '::1'),
(51, '933433943v', 'Gihan Vishwajith Ranasinghe', 'parasangaswewa,anuradhapura', 'gihanvish@gmail.com', '25f9e794323b453885f5181f1b624d0b', '03/08/2017', 'Male', 719252909, 'bjhj', '61iIbszefRL._UL1500_.jpg', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(100) NOT NULL,
  `p_id` int(100) NOT NULL,
  `c_id` int(100) NOT NULL,
  `status` text NOT NULL,
  `order_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `p_id`, `c_id`, `status`, `order_date`) VALUES
(23, 18, 29, '', '2017-02-25'),
(48, 12, 40, '', '2017-03-05'),
(49, 12, 40, '', '2017-03-06'),
(50, 24, 40, '', '2017-03-07'),
(51, 29, 51, '', '2017-03-07'),
(52, 29, 52, '', '2017-03-07');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `product_cat` int(100) NOT NULL,
  `product_brand` int(100) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `product_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`) VALUES
(9, 2, 3, 'Saree', 10000, '<p>ORIGINAL HALDLOOM AUTHENTIC PRODUCT. Saree Fabric : Rich Premium 100% Mercerised Cotton With Golden Pallu, Blouse Fabric : Rich Premium Cotton, Type : Unstitched, Occasion : Party &amp; Traditional Wear Saree Size : 6.00 mtr, including blouse piece, Extra : 40 cms for use in blouse, sleeve or body</p>', '51QEo2jqpcL.jpg', 'saree,cotton,women'),
(12, 2, 3, 'Saree ', 4578, '<p>Gadwal Poly Cotton Printed Saree with Zari Border Hand Printed Saree with Blouse Rani Saahiba Saree Color : Orange 5.40 Mtr Saree + 0.70 Cms Unstitched Blouse, Dry Clean Recommended</p>', '61xxk8lbNnL._UY500_.jpg', 'saree,cotton'),
(13, 0, 0, ' Polo T Shirt', 1300, '100% Cotton\r\nLuxury Two Tone\r\nRegular Fit\r\nBiowashed\r\nOur model in this photo is 6'' tall, 39.5" chest and 32" waist and is wearing a size M', '71ubGUCz9QL._UY500_.jpg', 'Now Available'),
(14, 1, 1, 'Men T-Shirt', 845, '<p>Color: Pink (Solid) Relaxed Knit Soft 100% Cotton Fabric Slim Fit / V Shape Polo Collar / Collared Polo T-Shirt Half Sleeves / Short Sleeves Machine Wash Cold. Do Not Bleach. Wash With Similar Colors. Warm Iron.</p>', '81XXzea72hL._UL1500_.jpg', 't_ shirts'),
(15, 0, 0, '  T-Shirt\r\n\r\n', 4500, 'Brand : Scott International\r\nFabric : Cotton\r\nNeck Type : Polo\r\nSleeve : Half Sleeve\r\nIdeal For : Men''s', '71XvmVmVC9L._UL1500_.jpg', 't shirt'),
(16, 2, 3, ' salwar suit ', 1000, '<p>Top Fabric-Georgette|Bottom Fabric-Santoon|Dupatta Fabric-Nazneen Top Length-42 inches|Bottom Length-2 mtr|Dupatta length-2 mtr We have not authorised any other seller to sell our brand Texstile. Any seller doing so is selling fake Texstile Products. Buy original products from the seller "Texstile" only. Disclaimer :- PRODUCT COLOR MAY SLIGHTLY VARY DUE TO PHOTOGRAPHIC LIGHTING SOURCES OR YOUR MONITOR SETTINGS Machine Wash Warm Wash With Like Colours Only Non-Chlorine Bleach When Needed Tumble Dry Low Warm Iron If Needed</p>', 'Screenshot (2).png', 'In stock.'),
(17, 2, 1, ' Dupatta', 5000, '<p>Synthetic Printed Unstitched Salwar Suit Colour : Beige &amp; Blue Kurta Length:2.40 mtr, Salwar Length:2.00mtr, Dupatta Length: 2.15mtr Wrinkle free fabric, regular hand or machine wash We have not authorised any other seller to sell our brand Salwar Studio. Any seller doing so is selling fake Salwar Studio Products. Buy original Salwar Studio products from the seller "Salwar Studio" only.</p>', '61YWL8FtcWL._UL1500_.jpg', 'Only 5 left in stock.'),
(19, 2, 3, 'Ruched Top', 1400, '<p>Cotton</p>', '61iIbszefRL._UL1500_.jpg', 'Only 1 left in stock.'),
(20, 0, 0, 'Preppy Top', 1200, '100% Cotton\r\nSoft Biowash\r\nOrganic Dyes\r\nBreathable Fabric\r\nModel Zorana is 5''.8" tall, bust 32.5", waist 26", hips 34.50" and is wearing size S - Small', '71Szu2gA-iL._UL1500_.jpg', 'In stock.'),
(21, 0, 0, ' Trousers', 2700, '100% Cotton\r\nSlim fit\r\nZip fly with button closure\r\nWash dark clothes separately\r\nMade in India', '71HA1n3CgPL._UL1500_.jpg', 'men,trouser'),
(22, 0, 0, ' Trouser', 1681, 'different color available to choose\r\ncotton trouser\r\nstretchable fabric\r\nLength 42 Inches\r\nComfy to wear', '51VgsVPpASL._UL1500_.jpg', 'men'),
(23, 0, 0, 'Trousers', 1565, 'Material: Cotton\r\nColour: Beige\r\nClosure Type: Buttoned\r\nFit Type: Slim Fit\r\nCare Instructions: Regular hand/machine wash; Use mild detergent; Dry in shade', '61JTjcI3PYL._UL1500_.jpg', 'trouser'),
(24, 0, 0, 'Trouser', 1700, '50%Linen::50% Cotton Fabric\r\nSlim Fit Pattern\r\nPlain/Solid Trouser\r\nSelf Design Trouser\r\nMade in India\r\n', '61Bi62qZh9L._UL1500_.jpg', 'men,club trouser'),
(25, 0, 0, 'Party Wear              ', 1011, 'New Party Wear Gown for Girls :: Grab it before it gets over :: Same day dispatch available\r\nGown fabric - Soft Net :: Inner - Silk\r\nSize - upto 34 / 8-12Y\r\nType - Semi Stitched :: Work - Plain\r\nOccasion - Party Wear :: Evening Gown :: Festival', '61GbIBczy7L._UL1500_.jpg', 'In stock.'),
(26, 0, 0, 'Party Frock', 1342, 'Make your little girl the cynosure of all eyes when you dress her up in this Black coloured dress from Aarika. Made from net material, this dress ensures total comfort and dashing appearance to your little princess. Perfect for parties and special occasions, this outfit is lightweight and skin-friendly. Dress to impress with our beautiful collection of girls'' occasion dresses. Here you can find a wide range of Indian ethnic kids wear and western wear, which includes kids Frocks, Lehenga Choli and Salwar Kameez, Gown, Dress, Pari Dress etc.', '81XgzPGIhNL._UL1500_.jpg', 'In Stock.'),
(27, 0, 0, 'Pants ', 800, 'Featuring a Printed Pair of NumBrave Ladies Harem Pants with eye catching Designs. The full length pant comes with comfortable elastic belt to fit most waist size and has two front pockets. You can Style them with any matching kurta, t-shirt, long shirt, a Tank Top, Or A Blouse for a casual look. Comfortable and stylish, these pants are a combination of both. This Harem Pants are very smarly stitched and offer a great fitting product. Pant Length 37" and is suitable for waist size 24 to 38" Only', '91UTLXoBHkL._UL1500_.jpg', 'women,pants'),
(29, 2, 3, 'patiyala', 883, 'Goodtry Viscose Partywear Patiala made from Premium Viscose fabric making the garment very soft, comfortable and easy to manage, Beautifully stitched pattern and designing set these Patiala aside, Available in a wide range of colors, Team these up with Kurtas, Kurtis, Tunics or T-Shirts to flaunt a true Indo-Western Attire, Completely Iron Free. Size Reference: Fit from Waist- 26-36 Inches and Length-43 Inches.Choose 50+ Colours with Goodtry.', '71-L-MIO6RL._UL1500_.jpg', 'women,patiyala'),
(30, 1, 2, 'Gents shirt', 1200, '<p>imported from UK.pure cotton</p>', 'th1DMHHWG6.jpg', 'gents,cotton,'),
(31, 3, 4, 'kids Tshirt', 600, '<p>Best for little kids.From UK</p>', 'th0XJHRN68.jpg', 'kids,crocodile,tshirt'),
(32, 3, 7, 'shirt', 800, '<p>only from us at lower price</p>', 'th.jpg', 'kids,ebony nice clothes'),
(33, 1, 5, 'Gents shirt', 1400, '<p>nice braned shirts from signature</p>', 'th4B8Y49WZ.jpg', 'braned shirts,nice shirts,gents');

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `type_id` int(11) NOT NULL,
  `type_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`type_id`, `type_name`) VALUES
(1, 'Pants'),
(2, 'Shirts'),
(3, 'Tshirts'),
(4, 'Trousers');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`Customer_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `Customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
