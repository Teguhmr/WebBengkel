-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Des 2024 pada 11.28
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bengkel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kendaraan`
--

CREATE TABLE `kendaraan` (
  `id_service` int(255) NOT NULL,
  `no_kendaraan` varchar(255) NOT NULL,
  `id_user` int(100) NOT NULL,
  `no_antrian` int(255) NOT NULL,
  `nama_pelanggan` varchar(50) NOT NULL,
  `keterangan` varchar(225) NOT NULL,
  `tanggal` date NOT NULL,
  `status` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kendaraan`
--

INSERT INTO `kendaraan` (`id_service`, `no_kendaraan`, `id_user`, `no_antrian`, `nama_pelanggan`, `keterangan`, `tanggal`, `status`) VALUES
(1, 'T234RQ', 12342, 1, 'customer', 'Mesin rusak', '2024-09-15', 2),
(2, 'T123BJ', 12342, 2, 'customer', 'Ganti Oli', '2024-09-15', 1),
(3, 'T123BJ', 12342, 3, 'customer', 'Ganti aki', '2024-09-15', 1),
(4, 'T123BJ', 12342, 1, 'customer', 'Busi ancur', '2024-09-16', 0),
(5, 'T123BJ', 12342, 2, 'customer', 'Ban kempes', '2024-09-16', 0),
(6, 'tew1231', 12348, 3, 'asaaasa', 'Ganti oli', '2024-09-16', 0),
(7, 'T2224JH', 12348, 4, 'asaaasa', 'Aki rusak', '2024-09-15', 0),
(8, 'T123BJ', 12342, 4, 'customer', 'Motor perlu diservice', '2024-09-16', 4),
(9, 'T123BJ', 12342, 5, 'customer', 'Ganti kepala motor', '2024-09-16', 0),
(10, 'T123BJ', 12342, 6, 'customer', 'Ban bocor', '2024-09-16', 0),
(11, 'T123BJ', 12342, 7, 'customer', 'Ganti As', '2024-09-16', 0),
(12, 'T123BJ', 12342, 8, 'customer', 'Ganti Jok', '2024-09-16', 0),
(13, 'T123BJ', 12342, 1, 'customer', 'Ganti lampu sein', '2024-09-17', 0),
(14, 'T123BJ', 12342, 2, 'customer', 'Ganti Oli', '2024-09-17', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` varchar(10) NOT NULL,
  `nama_pelanggan` varchar(50) NOT NULL,
  `nohp_pelanggan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan`
--

CREATE TABLE `penjualan` (
  `id_penjualan` varchar(10) NOT NULL,
  `nama_sparepart` varchar(50) NOT NULL,
  `jumlah_sparepart` int(11) NOT NULL,
  `harga` int(255) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `penjualan`
--

INSERT INTO `penjualan` (`id_penjualan`, `nama_sparepart`, `jumlah_sparepart`, `harga`, `tanggal`) VALUES
('1', 'Knalpot', 2, 200000, '2024-09-20'),
('2', 'Jok Motor', 3, 200000, '2024-09-21'),
('3', 'Ban Depan', 3, 200000, '2024-08-16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sparepart`
--

CREATE TABLE `sparepart` (
  `id_sparepart` int(255) NOT NULL,
  `nama_sparepart` varchar(50) NOT NULL,
  `harga_sparepart` varchar(50) NOT NULL,
  `id_supplier` int(255) NOT NULL,
  `status` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `sparepart`
--

INSERT INTO `sparepart` (`id_sparepart`, `nama_sparepart`, `harga_sparepart`, `id_supplier`, `status`) VALUES
(1, 'Jok Motor', '100000', 111, 1),
(2, 'Knalpot', '100000', 122, 1),
(3, 'Ban Depan', '240000', 122, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` int(255) NOT NULL,
  `nama_supplier` varchar(50) NOT NULL,
  `alamat_supplier` varchar(225) NOT NULL,
  `email_supplier` varchar(50) NOT NULL,
  `no_telp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `nama_supplier`, `alamat_supplier`, `email_supplier`, `no_telp`) VALUES
(111, 'Asep', 'Pasawahan', 'seo@gmail.com', 82222),
(122, 'Agus', 'Cihuni', 'gus@gmail.com', 82222),
(124, 'Udin H', 'Pasawahan', 'udin@gmail.com', 878787181),
(125, 'Yudistira', 'Lombok', 'fufu@gmail.com', 87878712);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(30) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_hp` int(12) NOT NULL,
  `no_kendaraan` varchar(16) NOT NULL,
  `role` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username`, `password`, `alamat`, `no_hp`, `no_kendaraan`, `role`) VALUES
(1, '', '', '', '', 0, '', ''),
(123, 'admin', 'admin', 'admin123', 'pondoksalam', 87363783, '', 'admin'),
(12342, 'customer', 'customer1', 'customer123', 'bandung', 983836784, 'T123BJ', 'customer'),
(12346, '12321', '1233', '1231231', '123213', 1241, '1321', 'customer'),
(12347, 'asaaasa', 'customer12', '$2y$10$fyaynJSM4tx0x/xha/jf..ipOs9gPN6cfBatunNcCpf', '121', 2112, 'tew1231', 'customer'),
(12348, 'asaaasa', 'customer122', 'customer123', '121', 2112, 'T2224JH', 'customer'),
(12349, 'asaaasa', 'customer1223', '123', '121', 2112, 'tew1231', 'customer');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`id_service`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indeks untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id_penjualan`);

--
-- Indeks untuk tabel `sparepart`
--
ALTER TABLE `sparepart`
  ADD PRIMARY KEY (`id_sparepart`);

--
-- Indeks untuk tabel `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kendaraan`
--
ALTER TABLE `kendaraan`
  MODIFY `id_service` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id_supplier` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12350;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
