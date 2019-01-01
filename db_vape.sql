-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2019 at 02:51 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_vape`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'uhuy');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id_category` int(100) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_product` int(20) NOT NULL,
  `product_name` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(100) NOT NULL,
  `price` varchar(20) NOT NULL,
  `image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_product`, `product_name`, `description`, `category`, `price`, `image`) VALUES
(1, 'VGOD ELITE AUTHENTIC MECHANICAL MOD hggh m', '<p>Specifications : VGOD Elite Crest Design Deep Set VGOD Engraving Diameter: 24mm Height: 85mm 510 Hybrid Connection Floating Battery Adjustment Aerospace Carbon Fiber Switch Plastic Tube Insert for Battery Protection Isi di dalam box : 1pcs Vgod Elite Series Mechanical Mod 1 pcs Vgod Bag 2 pcs Vgod Sticker 1 pcs Spring / Per Cadangan 1 Manual Book</p>', 'Mechanical Mod', 'Rp.1.000.000', 'vgodmod.jpg'),
(2, 'BANASPATI COMPETITION MOD MECHA - BY ULTIMA TIMESVAPE AUTHENT', '<p>anaspati Mecha Mod Authentic by Ultimavape Mechanical Mod Juara di Invex, firing josh banget bisa pakai batre 18650 atau 21700 - full copper material - silver plated pin - hybrid system - Battery Compability: 18650/20700/21700 - springless, magnetless - ultem push button. mech mod karya anak bangsa bahan copper push button bawah ultem (heat preventing) pin silver plated support baterai 18650/20700/21700</p>', 'Mechanical Mod', 'Rp.1.300.000', '152779112968614_d2ea4cf5-7786-4aab-be0e-e784859adb9f.png'),
(3, 'HEX OHM V3 BY CRAVING VAPOR (AUTHENTIC) VAPEZOO ', '<p>Product Description Min Volts: 3 Volts Max Volts: 6 Volts Max Amps: 30 Amps Max Watts: 180 Watts Enclosure: Anodized Aluminum Battery Sled: Ultem Power Circuit: HEX-T/30-c Resistance Range: .10 Recommended Ohms: .2</p>', 'Mod ', 'Rp.4.000.000', 'HexOhm_V3_Box_Mod_180W_Hex_Angels_Powdercoat__BLACK_AUTHENTI.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id_toko` int(50) NOT NULL,
  `nama_toko` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `contact` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id_toko`, `nama_toko`, `address`, `contact`, `image`, `description`) VALUES
(1, 'Vape Zone', 'Jl. Raya lohbener lama No.08', 'vapezone@gmail.com', 'vp1sfb.png', 'Kami menyediakan berbagai keperluan vaping seperti Mod, Atomizer, Cotton, Coil, battre, liquid, dll');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id_toko`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id_toko` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
