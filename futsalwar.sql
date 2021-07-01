-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2021 at 04:22 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `futsalwar`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_jam`
--

CREATE TABLE `tb_jam` (
  `id_jam` int(11) NOT NULL,
  `jam` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jam`
--

INSERT INTO `tb_jam` (`id_jam`, `jam`) VALUES
(1, '09:00 - 10:00'),
(2, '10:00 - 11:00'),
(3, '11:00 - 12:00'),
(4, '12:00 - 13:00'),
(5, '13:00 - 14:00'),
(6, '15:00 - 16:00'),
(7, '16:00 - 17:00'),
(8, '17:00 - 18:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pemesanan`
--

CREATE TABLE `tb_pemesanan` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `id_jam` varchar(20) NOT NULL,
  `tgl_jadwal` date NOT NULL,
  `id_lapang` varchar(15) NOT NULL,
  `notelp` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pemesanan`
--

INSERT INTO `tb_pemesanan` (`id`, `nama`, `alamat`, `id_jam`, `tgl_jadwal`, `id_lapang`, `notelp`) VALUES
(107, 'indra', 'mandiraja wetan', '12:00 - 13:00', '2021-07-12', 'B', 898765432),
(108, 'faizal', 'mandiraja kulon', '11:00 - 12:00', '2021-07-12', 'A', 2147483647),
(109, 'amri', 'mandiraja kulon', '11:00 - 12:00', '2021-07-13', 'A', 89843983);

-- --------------------------------------------------------

--
-- Table structure for table `tb_token`
--

CREATE TABLE `tb_token` (
  `id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `auth_key` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_token`
--

INSERT INTO `tb_token` (`id`, `member_id`, `auth_key`) VALUES
(1, 25, '$2y$10$PR5BnxwzM/Yp3l7yJAFCGe1ZU18X96vAOKqWSky7dKUmlPdGMHsiW'),
(2, 27, '$2y$10$BJhF7wZzzxG1gIrYSc3th.BtFRyevvm4WCfsfwxiRfh0Ro5gKAlEa'),
(3, 27, '$2y$10$AR1RGys7uSh5JB6WLqrHUuBNy9WQ9uHSa650Shdk7mrB5h38p6Ml2'),
(4, 27, '$2y$10$TK3Yc/.KnWbQNtgRsoA6FekCUkqbwvdD4pme.189GB7ZAPe8/IlmO'),
(5, 29, '$2y$10$eJS/M/GhFGJBe238WEAN6OjSSOBd1PzWnpaoaGi4q2ZZzm4GV/1yW'),
(6, 30, '$2y$10$Ly4je/TrMPmdQ0XSGnLrFuldIoT9AXEjfXR5qrJfZ2OuO2PdYz06G'),
(7, 25, '$2y$10$OL1MjZ5LJfqiWp58Kx1YYeQfQjYHCxIdsJv3MPBHYE2qWfqMh/k0K'),
(8, 25, '$2y$10$0qOdxCbpZCQIDVj2c/q9p.LVvmQHZiZCFaeVPUCJOIn/oe4kD2UhW'),
(9, 25, '$2y$10$vtT2BdkAuU4uuoQK2ofWNOeDTRrBrabKrc.rREuBkEihOrtPwu3eW'),
(10, 25, '$2y$10$gU6ZIdINjX4/MlNPKprP7OrOL5m096eoI7YT.EhhMqwoxihGX/iwi'),
(11, 25, '$2y$10$Yt8LzPCF8bWupe4vNd.wz.ut71LLtGprJjuGMO0KEtzafcvAT5UDa'),
(12, 25, '$2y$10$q4U6qIX00ETwHWFuQbbwbunfjPLXROcNoKdM28Y8WnCfK4Bcwa/Oe');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` tinyint(1) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `email`, `password`, `role_id`) VALUES
(25, 'indra', 'indra', 'indra@email.com', '$2y$10$UKuYvjSC1Qqo.qE05bSGg.bLbQN8lOJxjwL92ddb6G29DoTUKds3e', 2),
(27, 'admin', 'admin', 'admin@admin.com', '$2y$10$SWNNDxsou3RSkyH05v6ao.FdFS4GFUA4wizzCnGXifMB8WbPvTnU.', 1),
(28, 'user', 'user', 'user@user.com', '$2y$10$nk9hKRUnUg0z/LGOhZVpzOuYaJ.08ZHBMFZZ5./.ZbdFXNZwVQq92', 2),
(29, 'faizal', 'faizal', 'faizal@email.com', '$2y$10$1FCnjuMj0NgfJ38Uzu4jLuN176a2p05FzxatjQsbsh6E8jGs33naC', 2),
(30, 'amri', 'amri', 'amri@email.com', '$2y$10$J3PE/6yBcAUFmIcr0ft4I.BBywM2HhMHhaEgDRdKUI1GvELkamAQq', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_jam`
--
ALTER TABLE `tb_jam`
  ADD PRIMARY KEY (`id_jam`);

--
-- Indexes for table `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_token`
--
ALTER TABLE `tb_token`
  ADD PRIMARY KEY (`id`),
  ADD KEY `member_id` (`member_id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_jam`
--
ALTER TABLE `tb_jam`
  MODIFY `id_jam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `tb_token`
--
ALTER TABLE `tb_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
