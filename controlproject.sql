-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2018 at 07:39 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `controlproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `ap`
--

CREATE TABLE `ap` (
  `inv_ag` varchar(20) NOT NULL,
  `pay_ag` int(11) NOT NULL,
  `date_ag` date NOT NULL,
  `rent_genset` varchar(30) NOT NULL,
  `inv_genset` varchar(20) DEFAULT NULL,
  `pay_genset` int(11) NOT NULL,
  `date_genset` date NOT NULL,
  `name_ship` varchar(30) DEFAULT NULL,
  `inv_ship` varchar(20) NOT NULL,
  `pay_ship` int(11) NOT NULL,
  `date_ship` date NOT NULL,
  `name_ag` varchar(50) DEFAULT NULL,
  `inv_thc` varchar(20) DEFAULT NULL,
  `pay_thc` int(11) DEFAULT NULL,
  `date_thc` date DEFAULT NULL,
  `inv_handl` varchar(20) DEFAULT NULL,
  `pay_handl` int(11) DEFAULT NULL,
  `date_handl` date DEFAULT NULL,
  `inv_plug` varchar(20) DEFAULT NULL,
  `pay_plug` int(11) DEFAULT NULL,
  `date_plug` date DEFAULT NULL,
  `inv_lain` varchar(20) DEFAULT NULL,
  `pay_lain` int(11) DEFAULT NULL,
  `date_lain` date DEFAULT NULL,
  `IMO` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ap`
--

INSERT INTO `ap` (`inv_ag`, `pay_ag`, `date_ag`, `rent_genset`, `inv_genset`, `pay_genset`, `date_genset`, `name_ship`, `inv_ship`, `pay_ship`, `date_ship`, `name_ag`, `inv_thc`, `pay_thc`, `date_thc`, `inv_handl`, `pay_handl`, `date_handl`, `inv_plug`, `pay_plug`, `date_plug`, `inv_lain`, `pay_lain`, `date_lain`, `IMO`) VALUES
('GQ 891', 210000, '0000-00-00', '', 'OP54546', 116960, '0000-00-00', 'INDO CONTAINER LINE, PT', 'YHJ676', 300000, '0000-00-00', 'JASA BERSAUDARA TRANS', '', 60070, '0000-00-00', '', 0, '0000-00-00', '', 0, '0000-00-00', '', 0, '0000-00-00', '24-08-002'),
('UNI OPQR', 99000, '0000-00-00', '', 'NY53534', 0, '0000-00-00', 'PELAYARAN TEMPURAN EMAS', 'KU6363', 52400, '0000-00-00', 'BERKAH MUTIARA LAUT', '', 0, '0000-00-00', '', 249600, '0000-00-00', '', 0, '0000-00-00', '', 284000, '0000-00-00', '24-08-001'),
('UNI8383', 326400, '2018-09-11', '', 'NY53539', 99200, '2018-09-29', 'PELNI, PT', 'KU6365', 261400, '2018-09-26', 'MUSI UTAMA , CV (PALEMBANG)', '', 60600, '2018-09-10', '', 495100, '2018-09-27', '', 29800, '2018-09-24', '', 200000, '2018-09-25', '18-09-005');

-- --------------------------------------------------------

--
-- Table structure for table `ap2`
--

CREATE TABLE `ap2` (
  `IMO` varchar(12) NOT NULL,
  `IMO_v2` varchar(12) NOT NULL,
  `name_cust` varchar(30) NOT NULL,
  `inv_cust` varchar(30) NOT NULL,
  `inv_ag` varchar(30) NOT NULL,
  `pay_ag` int(11) NOT NULL,
  `inv_genset` varchar(30) NOT NULL,
  `pay_genset` int(11) NOT NULL,
  `inv_ship` varchar(30) NOT NULL,
  `pay_ship` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ap2`
--

INSERT INTO `ap2` (`IMO`, `IMO_v2`, `name_cust`, `inv_cust`, `inv_ag`, `pay_ag`, `inv_genset`, `pay_genset`, `inv_ship`, `pay_ship`) VALUES
('11-11-002', '11-08-007', 'Mendelez', '', '', 100000, '', 350000, '', 0),
('11-11-001', '11-08-007i', 'AICE', '', '', 140000, '', 0, '', 20000),
('18-09-005', '18-10-006', 'Sukanda +2', 'Kampina', 'GQ777', 0, 'TY777', 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ar`
--

CREATE TABLE `ar` (
  `IMO` varchar(12) DEFAULT NULL,
  `inv_cust` varchar(20) DEFAULT NULL,
  `name_cust` varchar(20) DEFAULT NULL,
  `no_plug` varchar(20) NOT NULL,
  `pay_plug` int(11) NOT NULL,
  `pay_inv` int(11) NOT NULL,
  `no_faktur` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ar`
--

INSERT INTO `ar` (`IMO`, `inv_cust`, `name_cust`, `no_plug`, `pay_plug`, `pay_inv`, `no_faktur`) VALUES
('12-04-005', 'KY 7834', 'Campina', '', 0, 316000, 'SPT 567'),
('18-09-001', 'OY 7834', 'Mendelez', '', 0, 0, NULL),
('22-08-18', 'LO 6363', 'KFC', '', 0, 0, NULL),
('24-08-001', 'KL8765', 'Campina', 'IL 97', 474000, 0, 'SPT 357'),
('24-08-002', 'PO 3838383', 'KFC', '', 0, 0, NULL),
('18-09-005', 'OY 7834', 'AICE', 'KL 986', 344000, 387500, 'SPT 679'),
('11-11-001', 'OY 7839', 'KFC', 'NU 76i', 298000, 218800, 'SPT 890');

-- --------------------------------------------------------

--
-- Table structure for table `op`
--

CREATE TABLE `op` (
  `IMO` varchar(12) NOT NULL,
  `no_container` varchar(200) NOT NULL,
  `stuff_date` date NOT NULL,
  `no_shipment` varchar(20) DEFAULT NULL,
  `no_seal` varchar(20) DEFAULT NULL,
  `payment` int(11) DEFAULT NULL,
  `deliv_date` date NOT NULL,
  `dest_town` varchar(30) NOT NULL,
  `vessel_name` varchar(30) NOT NULL,
  `arv_at_dest` varchar(30) NOT NULL,
  `unload_at_conc` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `op`
--

INSERT INTO `op` (`IMO`, `no_container`, `stuff_date`, `no_shipment`, `no_seal`, `payment`, `deliv_date`, `dest_town`, `vessel_name`, `arv_at_dest`, `unload_at_conc`) VALUES
('11-11-001', 'TBSU 6074 107', '2020-00-00', '', '', 2000000, '2018-09-12', 'Yogyakarta', 'A. Purnama', '', ''),
('11-11-002', 'TBSU 1033217 20', '2018-09-06', NULL, NULL, NULL, '2018-09-10', 'Yogyakarta', 'Caya', '', ''),
('12-04-005', 'TBSU 6074 109', '2018-09-14', NULL, NULL, NULL, '2018-09-28', 'Tangerang', 'Caya', '', ''),
('18-09-001', 'TBSU 6074 108', '2018-09-19', NULL, NULL, NULL, '2018-09-24', 'Bekasi', 'I. Bravo', '', ''),
('18-09-005', 'TBSU 1002421 20', '2020-00-00', NULL, NULL, NULL, '2018-09-17', 'Balikpapan', 'Titaninum', '', ''),
('22-08-18', 'TBSU 6074 108', '2018-09-07', NULL, NULL, NULL, '2018-09-20', 'Balikpapan', 'I. Bravo', '', ''),
('24-08-001', 'TB8U 6074106', '2018-08-24', NULL, NULL, NULL, '2018-08-25', 'Singkawang', 'Titanium', '', ''),
('24-08-002', 'TB8U 3126349', '2018-08-24', NULL, NULL, NULL, '2018-08-25', 'Singkawang', 'Titanium', '', ''),
('24-08-003', 'TBSU 6218348', '2018-08-24', NULL, NULL, NULL, '2018-08-25', 'Banjarmasin', 'O.Samudra', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `truck`
--

CREATE TABLE `truck` (
  `IMO` varchar(12) NOT NULL,
  `inv_truck` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `tujuan` varchar(30) NOT NULL,
  `pesanan` varchar(30) NOT NULL,
  `no_pol` varchar(10) NOT NULL,
  `jam` varchar(6) NOT NULL,
  `muatan` varchar(30) NOT NULL,
  `ukuran` varchar(20) NOT NULL,
  `b_jajan` varchar(30) NOT NULL,
  `b_kom` varchar(30) NOT NULL,
  `b_kawal` varchar(30) NOT NULL,
  `b_lain` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `truck`
--

INSERT INTO `truck` (`IMO`, `inv_truck`, `name`, `date`, `tujuan`, `pesanan`, `no_pol`, `jam`, `muatan`, `ukuran`, `b_jajan`, `b_kom`, `b_kawal`, `b_lain`) VALUES
('24-08-001', 'LP 3988', 'Topik', '2018-09-27', 'BCC', 'MTY 1x40', 'B 9047 UEL', '13:00', 'TBSU 8807603', '40 ft', '220.000', '38.000', '12.000', '120.000'),
('18-09-005', 'UK 733i', 'Supri', '2018-09-18', 'Palembang', 'MTY 1x40', 'B 9047 EPO', '14:45', 'TBSU 8807603', '20 ft', '300000', '150000', '400000', '20000');

-- --------------------------------------------------------

--
-- Table structure for table `truck2`
--

CREATE TABLE `truck2` (
  `IMO_v2` varchar(12) NOT NULL,
  `name_truck` varchar(30) NOT NULL,
  `inv_truck` varchar(30) NOT NULL,
  `pay_truck` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `truck2`
--

INSERT INTO `truck2` (`IMO_v2`, `name_truck`, `inv_truck`, `pay_truck`) VALUES
('18-10-006', 'Deseel', '', ''),
('11-08-007i', 'Komatsu', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `job_tittle` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `username`, `password`, `job_tittle`) VALUES
('Ani Anggraeni', 'aniang', 'aniang', 'AP'),
('Budi Surbakti', 'budisur', 'budisur', 'AR'),
('Rina Permata', 'rinaper', 'rinaper', 'OP'),
('Santi Budiman', 'santibu', 'santibu', 'Controller'),
('Yuni Damayanti', 'yunida', 'yunida', 'Controller');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ap`
--
ALTER TABLE `ap`
  ADD KEY `IMO` (`IMO`);

--
-- Indexes for table `ap2`
--
ALTER TABLE `ap2`
  ADD PRIMARY KEY (`IMO_v2`),
  ADD KEY `IMO` (`IMO`);

--
-- Indexes for table `op`
--
ALTER TABLE `op`
  ADD PRIMARY KEY (`IMO`);

--
-- Indexes for table `truck`
--
ALTER TABLE `truck`
  ADD KEY `IMO` (`IMO`);

--
-- Indexes for table `truck2`
--
ALTER TABLE `truck2`
  ADD KEY `IMO_v2` (`IMO_v2`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ap`
--
ALTER TABLE `ap`
  ADD CONSTRAINT `ap_ibfk_1` FOREIGN KEY (`IMO`) REFERENCES `op` (`IMO`);

--
-- Constraints for table `ap2`
--
ALTER TABLE `ap2`
  ADD CONSTRAINT `ap2_ibfk_1` FOREIGN KEY (`IMO`) REFERENCES `op` (`IMO`);

--
-- Constraints for table `truck`
--
ALTER TABLE `truck`
  ADD CONSTRAINT `truck_ibfk_1` FOREIGN KEY (`IMO`) REFERENCES `op` (`IMO`);

--
-- Constraints for table `truck2`
--
ALTER TABLE `truck2`
  ADD CONSTRAINT `truck2_ibfk_1` FOREIGN KEY (`IMO_v2`) REFERENCES `ap2` (`IMO_v2`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
