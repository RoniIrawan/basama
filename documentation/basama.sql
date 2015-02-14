-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 14, 2015 at 07:25 
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `basama`
--

-- --------------------------------------------------------

--
-- Table structure for table `stokbsmsoga`
--

CREATE TABLE IF NOT EXISTS `stokbsmsoga` (
  `kode` char(7) NOT NULL,
  `warna` varchar(11) DEFAULT NULL,
  `allsize` int(11) DEFAULT NULL,
  `s` int(11) DEFAULT NULL,
  `m` int(11) DEFAULT NULL,
  `l` int(11) DEFAULT NULL,
  `xl` int(11) DEFAULT NULL,
  `xxl` int(11) DEFAULT NULL,
  `no_2` int(11) DEFAULT NULL,
  `no_4` int(11) DEFAULT NULL,
  `no_6` int(11) DEFAULT NULL,
  `no_8` int(11) DEFAULT NULL,
  `no_10` int(11) DEFAULT NULL,
  `no_12` int(11) DEFAULT NULL,
  `no_14` int(11) DEFAULT NULL,
  `no_16` int(11) DEFAULT NULL,
  `no_18` int(11) DEFAULT NULL,
  `no_20` int(11) DEFAULT NULL,
  `no_21` int(11) DEFAULT NULL,
  `no_22` int(11) DEFAULT NULL,
  `no_23` int(11) DEFAULT NULL,
  `no_24` int(11) DEFAULT NULL,
  `no_25` int(11) DEFAULT NULL,
  `no_26` int(11) DEFAULT NULL,
  `no_27` int(11) DEFAULT NULL,
  `no_28` int(11) DEFAULT NULL,
  `no_29` int(11) DEFAULT NULL,
  `no_30` int(11) DEFAULT NULL,
  `no_31` int(11) DEFAULT NULL,
  `no_32` int(11) DEFAULT NULL,
  `no_33` int(11) DEFAULT NULL,
  `no_34` int(11) DEFAULT NULL,
  `no_35` int(11) DEFAULT NULL,
  `no_36` int(11) DEFAULT NULL,
  `no_37` int(11) DEFAULT NULL,
  `no_38` int(11) DEFAULT NULL,
  `no_39` int(11) DEFAULT NULL,
  `no_40` int(11) DEFAULT NULL,
  `no_41` int(11) DEFAULT NULL,
  `no_42` int(11) DEFAULT NULL,
  `no_43` int(11) DEFAULT NULL,
  `no_44` int(11) DEFAULT NULL,
  `no_45` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stokcbrsix`
--

CREATE TABLE IF NOT EXISTS `stokcbrsix` (
  `kode` char(7) NOT NULL,
  `warna` varchar(11) DEFAULT NULL,
  `allsize` int(11) DEFAULT NULL,
  `s` int(11) DEFAULT NULL,
  `m` int(11) DEFAULT NULL,
  `l` int(11) DEFAULT NULL,
  `xl` int(11) DEFAULT NULL,
  `xxl` int(11) DEFAULT NULL,
  `no_2` int(11) DEFAULT NULL,
  `no_4` int(11) DEFAULT NULL,
  `no_6` int(11) DEFAULT NULL,
  `no_8` int(11) DEFAULT NULL,
  `no_10` int(11) DEFAULT NULL,
  `no_12` int(11) DEFAULT NULL,
  `no_14` int(11) DEFAULT NULL,
  `no_16` int(11) DEFAULT NULL,
  `no_18` int(11) DEFAULT NULL,
  `no_20` int(11) DEFAULT NULL,
  `no_21` int(11) DEFAULT NULL,
  `no_22` int(11) DEFAULT NULL,
  `no_23` int(11) DEFAULT NULL,
  `no_24` int(11) DEFAULT NULL,
  `no_25` int(11) DEFAULT NULL,
  `no_26` int(11) DEFAULT NULL,
  `no_27` int(11) DEFAULT NULL,
  `no_28` int(11) DEFAULT NULL,
  `no_29` int(11) DEFAULT NULL,
  `no_30` int(11) DEFAULT NULL,
  `no_31` int(11) DEFAULT NULL,
  `no_32` int(11) DEFAULT NULL,
  `no_33` int(11) DEFAULT NULL,
  `no_34` int(11) DEFAULT NULL,
  `no_35` int(11) DEFAULT NULL,
  `no_36` int(11) DEFAULT NULL,
  `no_37` int(11) DEFAULT NULL,
  `no_38` int(11) DEFAULT NULL,
  `no_39` int(11) DEFAULT NULL,
  `no_40` int(11) DEFAULT NULL,
  `no_41` int(11) DEFAULT NULL,
  `no_42` int(11) DEFAULT NULL,
  `no_43` int(11) DEFAULT NULL,
  `no_44` int(11) DEFAULT NULL,
  `no_45` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stokjavaseven`
--

CREATE TABLE IF NOT EXISTS `stokjavaseven` (
  `kode` char(7) NOT NULL,
  `warna` varchar(11) DEFAULT NULL,
  `allsize` int(11) DEFAULT NULL,
  `s` int(11) DEFAULT NULL,
  `m` int(11) DEFAULT NULL,
  `l` int(11) DEFAULT NULL,
  `xl` int(11) DEFAULT NULL,
  `xxl` int(11) DEFAULT NULL,
  `no_2` int(11) DEFAULT NULL,
  `no_4` int(11) DEFAULT NULL,
  `no_6` int(11) DEFAULT NULL,
  `no_8` int(11) DEFAULT NULL,
  `no_10` int(11) DEFAULT NULL,
  `no_12` int(11) DEFAULT NULL,
  `no_14` int(11) DEFAULT NULL,
  `no_16` int(11) DEFAULT NULL,
  `no_18` int(11) DEFAULT NULL,
  `no_20` int(11) DEFAULT NULL,
  `no_21` int(11) DEFAULT NULL,
  `no_22` int(11) DEFAULT NULL,
  `no_23` int(11) DEFAULT NULL,
  `no_24` int(11) DEFAULT NULL,
  `no_25` int(11) DEFAULT NULL,
  `no_26` int(11) DEFAULT NULL,
  `no_27` int(11) DEFAULT NULL,
  `no_28` int(11) DEFAULT NULL,
  `no_29` int(11) DEFAULT NULL,
  `no_30` int(11) DEFAULT NULL,
  `no_31` int(11) DEFAULT NULL,
  `no_32` int(11) DEFAULT NULL,
  `no_33` int(11) DEFAULT NULL,
  `no_34` int(11) DEFAULT NULL,
  `no_35` int(11) DEFAULT NULL,
  `no_36` int(11) DEFAULT NULL,
  `no_37` int(11) DEFAULT NULL,
  `no_38` int(11) DEFAULT NULL,
  `no_39` int(11) DEFAULT NULL,
  `no_40` int(11) DEFAULT NULL,
  `no_41` int(11) DEFAULT NULL,
  `no_42` int(11) DEFAULT NULL,
  `no_43` int(11) DEFAULT NULL,
  `no_44` int(11) DEFAULT NULL,
  `no_45` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `level`) VALUES
(4, 'Nurul', '6aaf3a796eba91ca8dd1309d28139b3a', 2),
(5, 'Irawan', 'b18f96670a496a5f27529ab93efdf164', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_stok`
--
CREATE TABLE IF NOT EXISTS `v_stok` (
`kode` char(7)
,`warna` varchar(11)
,`allsize` int(11)
,`s` int(11)
,`m` int(11)
,`l` int(11)
,`xl` int(11)
,`xxl` int(11)
,`no_2` int(11)
,`no_4` int(11)
,`no_6` int(11)
,`no_8` int(11)
,`no_10` int(11)
,`no_12` int(11)
,`no_14` int(11)
,`no_16` int(11)
,`no_18` int(11)
,`no_20` int(11)
,`no_21` int(11)
,`no_22` int(11)
,`no_23` int(11)
,`no_24` int(11)
,`no_25` int(11)
,`no_26` int(11)
,`no_27` int(11)
,`no_28` int(11)
,`no_29` int(11)
,`no_30` int(11)
,`no_31` int(11)
,`no_32` int(11)
,`no_33` int(11)
,`no_34` int(11)
,`no_35` int(11)
,`no_36` int(11)
,`no_37` int(11)
,`no_38` int(11)
,`no_39` int(11)
,`no_40` int(11)
,`no_41` int(11)
,`no_42` int(11)
,`no_43` int(11)
,`no_44` int(11)
,`no_45` int(11)
);
-- --------------------------------------------------------

--
-- Structure for view `v_stok`
--
DROP TABLE IF EXISTS `v_stok`;

CREATE ALGORITHM=UNDEFINED DEFINER=`roni`@`localhost` SQL SECURITY DEFINER VIEW `v_stok` AS select `stokjavaseven`.`kode` AS `kode`,`stokjavaseven`.`warna` AS `warna`,`stokjavaseven`.`allsize` AS `allsize`,`stokjavaseven`.`s` AS `s`,`stokjavaseven`.`m` AS `m`,`stokjavaseven`.`l` AS `l`,`stokjavaseven`.`xl` AS `xl`,`stokjavaseven`.`xxl` AS `xxl`,`stokjavaseven`.`no_2` AS `no_2`,`stokjavaseven`.`no_4` AS `no_4`,`stokjavaseven`.`no_6` AS `no_6`,`stokjavaseven`.`no_8` AS `no_8`,`stokjavaseven`.`no_10` AS `no_10`,`stokjavaseven`.`no_12` AS `no_12`,`stokjavaseven`.`no_14` AS `no_14`,`stokjavaseven`.`no_16` AS `no_16`,`stokjavaseven`.`no_18` AS `no_18`,`stokjavaseven`.`no_20` AS `no_20`,`stokjavaseven`.`no_21` AS `no_21`,`stokjavaseven`.`no_22` AS `no_22`,`stokjavaseven`.`no_23` AS `no_23`,`stokjavaseven`.`no_24` AS `no_24`,`stokjavaseven`.`no_25` AS `no_25`,`stokjavaseven`.`no_26` AS `no_26`,`stokjavaseven`.`no_27` AS `no_27`,`stokjavaseven`.`no_28` AS `no_28`,`stokjavaseven`.`no_29` AS `no_29`,`stokjavaseven`.`no_30` AS `no_30`,`stokjavaseven`.`no_31` AS `no_31`,`stokjavaseven`.`no_32` AS `no_32`,`stokjavaseven`.`no_33` AS `no_33`,`stokjavaseven`.`no_34` AS `no_34`,`stokjavaseven`.`no_35` AS `no_35`,`stokjavaseven`.`no_36` AS `no_36`,`stokjavaseven`.`no_37` AS `no_37`,`stokjavaseven`.`no_38` AS `no_38`,`stokjavaseven`.`no_39` AS `no_39`,`stokjavaseven`.`no_40` AS `no_40`,`stokjavaseven`.`no_41` AS `no_41`,`stokjavaseven`.`no_42` AS `no_42`,`stokjavaseven`.`no_43` AS `no_43`,`stokjavaseven`.`no_44` AS `no_44`,`stokjavaseven`.`no_45` AS `no_45` from `stokjavaseven` union all select `stokcbrsix`.`kode` AS `kode`,`stokcbrsix`.`warna` AS `warna`,`stokcbrsix`.`allsize` AS `allsize`,`stokcbrsix`.`s` AS `s`,`stokcbrsix`.`m` AS `m`,`stokcbrsix`.`l` AS `l`,`stokcbrsix`.`xl` AS `xl`,`stokcbrsix`.`xxl` AS `xxl`,`stokcbrsix`.`no_2` AS `no_2`,`stokcbrsix`.`no_4` AS `no_4`,`stokcbrsix`.`no_6` AS `no_6`,`stokcbrsix`.`no_8` AS `no_8`,`stokcbrsix`.`no_10` AS `no_10`,`stokcbrsix`.`no_12` AS `no_12`,`stokcbrsix`.`no_14` AS `no_14`,`stokcbrsix`.`no_16` AS `no_16`,`stokcbrsix`.`no_18` AS `no_18`,`stokcbrsix`.`no_20` AS `no_20`,`stokcbrsix`.`no_21` AS `no_21`,`stokcbrsix`.`no_22` AS `no_22`,`stokcbrsix`.`no_23` AS `no_23`,`stokcbrsix`.`no_24` AS `no_24`,`stokcbrsix`.`no_25` AS `no_25`,`stokcbrsix`.`no_26` AS `no_26`,`stokcbrsix`.`no_27` AS `no_27`,`stokcbrsix`.`no_28` AS `no_28`,`stokcbrsix`.`no_29` AS `no_29`,`stokcbrsix`.`no_30` AS `no_30`,`stokcbrsix`.`no_31` AS `no_31`,`stokcbrsix`.`no_32` AS `no_32`,`stokcbrsix`.`no_33` AS `no_33`,`stokcbrsix`.`no_34` AS `no_34`,`stokcbrsix`.`no_35` AS `no_35`,`stokcbrsix`.`no_36` AS `no_36`,`stokcbrsix`.`no_37` AS `no_37`,`stokcbrsix`.`no_38` AS `no_38`,`stokcbrsix`.`no_39` AS `no_39`,`stokcbrsix`.`no_40` AS `no_40`,`stokcbrsix`.`no_41` AS `no_41`,`stokcbrsix`.`no_42` AS `no_42`,`stokcbrsix`.`no_43` AS `no_43`,`stokcbrsix`.`no_44` AS `no_44`,`stokcbrsix`.`no_45` AS `no_45` from `stokcbrsix` union all select `stokbsmsoga`.`kode` AS `kode`,`stokbsmsoga`.`warna` AS `warna`,`stokbsmsoga`.`allsize` AS `allsize`,`stokbsmsoga`.`s` AS `s`,`stokbsmsoga`.`m` AS `m`,`stokbsmsoga`.`l` AS `l`,`stokbsmsoga`.`xl` AS `xl`,`stokbsmsoga`.`xxl` AS `xxl`,`stokbsmsoga`.`no_2` AS `no_2`,`stokbsmsoga`.`no_4` AS `no_4`,`stokbsmsoga`.`no_6` AS `no_6`,`stokbsmsoga`.`no_8` AS `no_8`,`stokbsmsoga`.`no_10` AS `no_10`,`stokbsmsoga`.`no_12` AS `no_12`,`stokbsmsoga`.`no_14` AS `no_14`,`stokbsmsoga`.`no_16` AS `no_16`,`stokbsmsoga`.`no_18` AS `no_18`,`stokbsmsoga`.`no_20` AS `no_20`,`stokbsmsoga`.`no_21` AS `no_21`,`stokbsmsoga`.`no_22` AS `no_22`,`stokbsmsoga`.`no_23` AS `no_23`,`stokbsmsoga`.`no_24` AS `no_24`,`stokbsmsoga`.`no_25` AS `no_25`,`stokbsmsoga`.`no_26` AS `no_26`,`stokbsmsoga`.`no_27` AS `no_27`,`stokbsmsoga`.`no_28` AS `no_28`,`stokbsmsoga`.`no_29` AS `no_29`,`stokbsmsoga`.`no_30` AS `no_30`,`stokbsmsoga`.`no_31` AS `no_31`,`stokbsmsoga`.`no_32` AS `no_32`,`stokbsmsoga`.`no_33` AS `no_33`,`stokbsmsoga`.`no_34` AS `no_34`,`stokbsmsoga`.`no_35` AS `no_35`,`stokbsmsoga`.`no_36` AS `no_36`,`stokbsmsoga`.`no_37` AS `no_37`,`stokbsmsoga`.`no_38` AS `no_38`,`stokbsmsoga`.`no_39` AS `no_39`,`stokbsmsoga`.`no_40` AS `no_40`,`stokbsmsoga`.`no_41` AS `no_41`,`stokbsmsoga`.`no_42` AS `no_42`,`stokbsmsoga`.`no_43` AS `no_43`,`stokbsmsoga`.`no_44` AS `no_44`,`stokbsmsoga`.`no_45` AS `no_45` from `stokbsmsoga` order by `kode`;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stokbsmsoga`
--
ALTER TABLE `stokbsmsoga`
 ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `stokcbrsix`
--
ALTER TABLE `stokcbrsix`
 ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `stokjavaseven`
--
ALTER TABLE `stokjavaseven`
 ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
