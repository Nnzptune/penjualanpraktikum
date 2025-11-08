-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 05, 2025 at 09:13 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penjualan`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int NOT NULL,
  `barcode` int DEFAULT NULL,
  `name` char(100) DEFAULT NULL,
  `harga_jual` bigint DEFAULT NULL,
  `harga_beli` bigint DEFAULT NULL,
  `stok` bigint DEFAULT NULL,
  `kategori_id` int DEFAULT NULL,
  `satuan_id` int DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `suplier_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `detail_beli`
--

CREATE TABLE `detail_beli` (
  `id` int NOT NULL,
  `harga` bigint DEFAULT NULL,
  `qty` int DEFAULT NULL,
  `subtotal` bigint DEFAULT NULL,
  `pembelian_id` int DEFAULT NULL,
  `barang_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `detail_jual`
--

CREATE TABLE `detail_jual` (
  `id` int NOT NULL,
  `harga` bigint DEFAULT NULL,
  `qty` int DEFAULT NULL,
  `subtotal` bigint DEFAULT NULL,
  `penjualan_id` int DEFAULT NULL,
  `barang_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int NOT NULL,
  `name` char(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kustomer`
--

CREATE TABLE `kustomer` (
  `id` int NOT NULL,
  `nik` int DEFAULT NULL,
  `name` char(100) DEFAULT NULL,
  `telp` char(20) DEFAULT NULL,
  `email` char(100) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id` int NOT NULL,
  `invoice` int DEFAULT NULL,
  `total` bigint DEFAULT NULL,
  `t_bayar` bigint DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `supplier_id` int DEFAULT NULL,
  `user_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id` int NOT NULL,
  `invoice` int DEFAULT NULL,
  `total` bigint DEFAULT NULL,
  `t_bayar` bigint DEFAULT NULL,
  `kembalian` bigint DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `kustomer_id` int DEFAULT NULL,
  `user_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `satuan`
--

CREATE TABLE `satuan` (
  `id` int NOT NULL,
  `name` char(100) DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id` int NOT NULL,
  `nik` int DEFAULT NULL,
  `name` char(100) DEFAULT NULL,
  `telp` char(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `alamat` varchar(150) DEFAULT NULL,
  `perusahaan` varchar(150) DEFAULT NULL,
  `nama_bank` varchar(150) DEFAULT NULL,
  `nama_akun_bank` varchar(150) DEFAULT NULL,
  `no_akun_bank` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `nik` int DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telp` varchar(20) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kategori_id` (`kategori_id`),
  ADD KEY `satuan_id` (`satuan_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `suplier_id` (`suplier_id`);

--
-- Indexes for table `detail_beli`
--
ALTER TABLE `detail_beli`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pembelian_id` (`pembelian_id`),
  ADD KEY `barang_id` (`barang_id`);

--
-- Indexes for table `detail_jual`
--
ALTER TABLE `detail_jual`
  ADD PRIMARY KEY (`id`),
  ADD KEY `penjualan_id` (`penjualan_id`),
  ADD KEY `barang_id` (`barang_id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kustomer`
--
ALTER TABLE `kustomer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `supplier_id` (`supplier_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kustomer_id` (`kustomer_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `satuan`
--
ALTER TABLE `satuan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `detail_beli`
--
ALTER TABLE `detail_beli`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `detail_jual`
--
ALTER TABLE `detail_jual`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kustomer`
--
ALTER TABLE `kustomer`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `satuan`
--
ALTER TABLE `satuan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`),
  ADD CONSTRAINT `barang_ibfk_2` FOREIGN KEY (`satuan_id`) REFERENCES `satuan` (`id`),
  ADD CONSTRAINT `barang_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `barang_ibfk_4` FOREIGN KEY (`suplier_id`) REFERENCES `supplier` (`id`);

--
-- Constraints for table `detail_beli`
--
ALTER TABLE `detail_beli`
  ADD CONSTRAINT `detail_beli_ibfk_1` FOREIGN KEY (`pembelian_id`) REFERENCES `pembelian` (`id`),
  ADD CONSTRAINT `detail_beli_ibfk_2` FOREIGN KEY (`barang_id`) REFERENCES `barang` (`id`);

--
-- Constraints for table `detail_jual`
--
ALTER TABLE `detail_jual`
  ADD CONSTRAINT `detail_jual_ibfk_1` FOREIGN KEY (`penjualan_id`) REFERENCES `penjualan` (`id`),
  ADD CONSTRAINT `detail_jual_ibfk_2` FOREIGN KEY (`barang_id`) REFERENCES `barang` (`id`);

--
-- Constraints for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD CONSTRAINT `pembelian_ibfk_1` FOREIGN KEY (`supplier_id`) REFERENCES `supplier` (`id`),
  ADD CONSTRAINT `pembelian_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `penjualan_ibfk_1` FOREIGN KEY (`kustomer_id`) REFERENCES `kustomer` (`id`),
  ADD CONSTRAINT `penjualan_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
