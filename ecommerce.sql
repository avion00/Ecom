-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2023 at 01:32 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart_details`
--

CREATE TABLE `cart_details` (
  `id` int(11) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `quantity` int(100) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart_details`
--

INSERT INTO `cart_details` (`id`, `ip_address`, `quantity`, `time`) VALUES
(4, '::1', 0, '0000-00-00 00:00:00'),
(8, '::1', 0, '0000-00-00 00:00:00'),
(13, '::1', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `id` int(10) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_model` varchar(10) NOT NULL,
  `product_current_price` int(5) NOT NULL,
  `product_normal_price` int(5) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `image3` varchar(255) NOT NULL,
  `product_discription` varchar(200) NOT NULL,
  `color` varchar(10) NOT NULL,
  `size` int(5) NOT NULL,
  `category` varchar(20) NOT NULL,
  `brand` varchar(20) NOT NULL,
  `activity` varchar(20) NOT NULL,
  `material` varchar(20) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `custom_sizes` varchar(5) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(100) NOT NULL,
  `comment` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`id`, `product_name`, `product_model`, `product_current_price`, `product_normal_price`, `image1`, `image2`, `image3`, `product_discription`, `color`, `size`, `category`, `brand`, `activity`, `material`, `gender`, `custom_sizes`, `date`, `status`, `comment`) VALUES
(2, 'NIKON D7500 DSLR Camera Body with 18-140 mm Lens  (Black)', 'D7500', 86990, 94950, 'nikon-original-imaf6n7gk7zkeybb.webp', 'nikon-original-imafdgpjybttmpz3.webp', 'nikon-original-imafdgpjybttmpz3.webp', '4K UHD, Follow your passion wherever it leads, Flagship Image Quality., AF and Capturing Ability (Superb shooting performance for moving subjects), Cinematic Versatility (Get your creative world in mo', 'Black', 140, 'electronic devices', 'nikon', 'Nikon D7500 Camera, ', 'CMOS', 'all', '23.5 ', '2023-11-29 20:44:52', '1', 'Born from a desire for flagship performance and innovation in a more compact and streamlined connected camera, the D7500 delivers the game-changing resolution, ISO range, image processing and energy e'),
(4, 'Baby Boys Casual T-shirt Pyjama ', 'Pyjama  ', 482, 1699, '18-24-months-2122-babygo-original-imaghaygdqs8wyas.webp', '18-24-months-2122-babygo-original-imaghaygy73ppkqx.webp', '18-24-months-gobs20-2171-babygo-original-imagv2vqurtqxdb4.webp', 'woolen cloth for baby for comfortable winter. air proof and warm provider cloth.', 'blue, grey', 24, 'casual', 'BabyGo', 'comfort', 'woolen', 'baby', '3 to ', '2023-11-30 03:01:02', '1', 'comfortable and value for money'),
(5, 'Men Checkered Round Neck Poly Cotton Green T-Shirt', 'xt04', 299, 999, 's-ts12-vebnor-original-imagp6jcsgekgda4.webp', 'm-ts12-vebnor-original-imagthdtbgbwxvwb.webp', 's-ts12-vebnor-original-imagpkupgsptbe9z.webp', 'Very nice T-shirt. Fabric is good. Color is perfect. Fitting is good.', 'dark blue,', 43, 't-shirt', 'VeBNoR ', 'round neck', 'Poly Cotton', 'men', 's, m,', '2023-11-30 03:10:20', '1', 'fibric cotton with good fitting non-color washable'),
(6, 'Men Slim Mid Rise Blue Jeans', 'WPJN2336M', 1430, 2599, '-original-imags9mpprac5zhh.webp', '-original-imags9mpzhgvh3va.webp', '-original-imags9mpff5ytwgz.webp', 'fitted premium quality jens. suitable for wastern wear. faded clean look with mid rise', 'rise blue', 32, 'jens', 'WROGN ', 'comfort jens', 'Cotton Lycra Blend f', 'men', '28, 3', '2023-11-30 03:16:09', '1', 'comfort jens'),
(7, 'Women Jogger Fit Mid Rise White Jeans', '13314920', 1172, 2299, '34-13314920-roadster-original-imagakxjezcy2ujd.webp', '34-13314920-roadster-original-imagakxjryvufp7h.webp', '34-13314920-roadster-original-imagakxjhdjw3czg.webp', 'women jogger suitable for wastern wear having pocket type diagonal pocket. pattern solid. reversible no. closure is button and zip', 'white', 26, 'jogger', 'Roadster', 'fit mid rise white j', 'fabric cotton', 'female', '26, 2', '2023-11-30 03:22:18', '1', 'comfortable and stylish joggers'),
(8, 'Casual Sneaker Shoes For Men | Upgraded Comfort with Cushioned Insole Sneakers For Men  (White)', 'CTC08', 1679, 5599, '7-rsl028-red-tape-white-teal-original-imagszh9zvzytzg2.webp', '7-rsl028-red-tape-white-teal-original-imagszh9zcgygg7c.webp', '9-bse069-bond-street-by-red-tape-black-original-imagnfr3hum7yhge.webp', '\r\nCasual Sneaker Shoes For Men | Upgraded Comfort with Cushioned Insole', 'white', 7, 'sneaker', 'RED TAPE ', 'compartable shoes', 'TPR', 'male', '6, 7,', '2023-11-30 04:11:28', '1', ' Lace-Ups'),
(9, 'Sneakers For Men  (Beige)', 'CTC11', 1387, 3299, '6-rkt-a178-beige-40-atom-beige-original-imagrfkbwd3qggrg.webp', '9-rkt-a178-beige-43-atom-beige-original-imagrfvu9psfsdha.webp', '9-rkt-a178-beige-43-atom-beige-original-imagrfvuzny8udjr.webp', 'sneakaers for men color beige, material mesh, type of formal lace up, sole material TPU rubber, closure lace-ups', 'beige', 7, 'sneakers', 'atom', 'casual', 'TPU rubber', 'male', '6, 7,', '2023-11-30 04:17:03', '1', 'comfort faishon'),
(10, 'Sneakers For Men  (White)', 'CTC12', 1389, 3299, '8-rkt-a178-white-42-atom-white-original-imags7hfdjqemhj3.webp', '8-rkt-a178-white-42-atom-white-original-imags7hfng5zyzsa.webp', '8-rkt-a178-white-42-atom-white-original-imags7hfv4rmpfth.webp', 'sneakaers for men color beige, material mesh, type of formal lace up, sole material TPU rubber, closure lace-ups', 'white', 7, 'sneakers', 'atom', 'causal', 'EVA', 'male', '7,8,9', '2023-11-30 04:23:36', '1', 'comfort faishon'),
(12, 'Sneakers For Men  (Black)', 'CTC13', 1389, 3299, '9-rkt-a178-black-43-atom-black-original-imags7hyn63v28zw.webp', '9-rkt-a178-black-43-atom-black-original-imags7hygzph2m5u.webp', '9-rkt-a178-black-43-atom-black-original-imags7hyamyrrkzg.webp', 'sneakaers for men color beige, material mesh, type of formal lace up, sole material TPU rubber, closure lace-ups', 'black', 7, 'sneaker', 'atom', 'casual', 'EVA', 'male', '7, 8,', '2023-11-30 04:28:24', '1', 'comfort faishon'),
(13, 'habrok bikes SS-BG 27.5 T Mountain Cycle  (Single Speed, Blue, Grey)', 'SS-BG', 12675, 18999, 'ss-bg-27-5-23-5-habrok-bikes-51-single-speed-original-imagsskgnnpdz9cb.webp', 'ss-bg-27-5-23-5-habrok-bikes-51-single-speed-original-imagsskgrvhjf7f9.webp', 'ss-bg-27-5-23-5-habrok-bikes-51-single-speed-original-imagsskgx4xr8bgg.webp', 'Age Group: 15+ Years\r\nIdeal For: Men & Women\r\nGear: Single Speed| Gear Type: Non Geared\r\nFront Brake: Disc Brake | Rear Brake: Disc Brake\r\nFrame Material: Aluminium Cycle/Alloy Cycle\r\nSuspension: Dual', 'grey', 27, 'cycle', 'habrok', 'Mountain Cycle', 'aluminium/alloy cycl', 'all', '23.5-', '2023-11-30 12:19:51', '1', ' Model Name SS-BG Brand Color BLUE, GREY Mudguard No Mudguard Front Derailleur Non Geared Shifters Non Geared Tire 27.5 Stem Alloy Dimensions Width 117 cm Height 51 cm Depth 18 cm'),
(14, 'Men Solid Quilted Jacket', ' DTAW21JK0', 3404, 9399, 'm-1-no-dtaw21jk051a-ducati-original-imag9fc5pkgpkbke.webp', 'm-1-no-dtaw21jk051c-ducati-original-imag9fc5fgckfmhg.webp', 'm-1-no-dtaw21jk051a-ducati-original-imag9fc5u9dm2xcm.webp', 'man solid quilted jacket\r\nColor\r\nBlack\r\nFabric\r\nNylon\r\nPattern\r\nSolid\r\nStyle code\r\nDTAW21JK051A\r\nIdeal for\r\nMen\r\nSleeve\r\nFull Sleeve\r\nClosure\r\nZipper\r\nSales package\r\n1', 'back, yell', 43, 'jacket', 'ducati', 'winter clothes jacke', 'nylon fabric', 'male', 's, m,', '2023-11-30 16:48:52', '1', 'comfort faishon'),
(18, 'asdas', 'asdfad', 3423, 123, '8-rkt-a178-white-42-atom-white-original-imags7hfv4rmpfth.webp', '34-13314920-roadster-original-imagakxjezcy2ujd.webp', '6-rkt-a178-beige-40-atom-beige-original-imagrfkbwd3qggrg.webp', 'asdfasd', 'sdfaf', 234234, 'asdfa', 'sdfasdf', 'asdfa', 'asdfa', 'asdfa', 'asdfa', '2023-12-07 05:09:38', '1', 'asdfa'),
(19, 'asdasd', 'asdaf', 2343, 23423, '18-24-months-2122-babygo-original-imaghaygy73ppkqx.webp', '18-24-months-gobs20-2171-babygo-original-imagv2vqurtqxdb4.webp', '9-bse069-bond-street-by-red-tape-black-original-imagnfr3hum7yhge.webp', 'sfasdfasd', 'asdfasdf', 434234, 'asdfasdf', 'asdfa', 'asdfa', '', 'asdfa', 'asdfa', '2023-12-07 05:12:07', '1', 'sdfa'),
(20, 'sdfasdf', 'asdfa', 23423, 2342, '8-rkt-a178-white-42-atom-white-original-imags7hfv4rmpfth.webp', '9-rkt-a178-beige-43-atom-beige-original-imagrfvu9psfsdha.webp', '18-24-months-2122-babygo-original-imaghaygy73ppkqx.webp', 'asdfasd', 'asdfa', 234, 'asdfas', 'sdfas', 'asdfa', 'asdfaasdfa', 'asdfa', 'asdfa', '2023-12-07 05:12:51', '1', 'asdfa'),
(23, 'dfgdfg', '3f3asfa', 234, 234, '8-rkt-a178-white-42-atom-white-original-imags7hfv4rmpfth.webp', '18-24-months-gobs20-2171-babygo-original-imagv2vqurtqxdb4.webp', '9-rkt-a178-beige-43-atom-beige-original-imagrfvu9psfsdha.webp', 'asdfas', 'asdfa', 232, 'asdfa', 'asdfa', 'asdfasdf', 'fas', 'asdfas', 'asdad', '2023-12-07 05:16:19', '1', 'asfa');

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `id` int(5) NOT NULL,
  `slide_title` varchar(50) NOT NULL,
  `slide_name` varchar(100) NOT NULL,
  `slide_offer` varchar(100) NOT NULL,
  `slide_image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id`, `slide_title`, `slide_name`, `slide_offer`, `slide_image`) VALUES
(6, 'Quick Fashion', 'Fit Your Wardrobe', 'With luxury items', 'slider1.jpg'),
(7, 'Quick Offer', 'Wooden Minimal Sofa', 'Extra 50% OFF', 'slider2.jpg'),
(8, 'Best Deals', 'Home Workout Accessories', 'Push the limit', 'slider3.jpg'),
(9, 'Shoes Fashoin', 'Come and Get It!', 'Brand new Shoes', 'slider0.jpg'),
(10, 'asdfa', 'asdfa', 'asdfas', 'slider1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart_details`
--
ALTER TABLE `cart_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique` (`product_model`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product_details`
--
ALTER TABLE `product_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
