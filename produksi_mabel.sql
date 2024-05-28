-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 26 Bulan Mei 2024 pada 20.01
-- Versi server: 8.0.30
-- Versi PHP: 8.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `produksi_mabel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bahan_material`
--

CREATE TABLE `bahan_material` (
  `id` int NOT NULL,
  `kategori` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `jumlah` int NOT NULL,
  `harga` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `bahan_material`
--

INSERT INTO `bahan_material` (`id`, `kategori`, `jumlah`, `harga`) VALUES
(11005, 'Plastik', 5, 500000),
(11006, 'Plastik', 7, 700000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengiriman`
--

CREATE TABLE `pengiriman` (
  `id_pengiriman` int NOT NULL,
  `id_produksi` int NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `biaya_pengiriman` int NOT NULL,
  `keterangan` varchar(15) NOT NULL,
  `jumlah_barang` int NOT NULL,
  `metode_pengiriman` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `produksi`
--

CREATE TABLE `produksi` (
  `id_prodduksi` int NOT NULL,
  `id_material` int NOT NULL,
  `nama_mabel` varchar(50) NOT NULL,
  `tgl_produksi` date NOT NULL,
  `jumlah_produksi` int NOT NULL,
  `status_produksi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bahan_material`
--
ALTER TABLE `bahan_material`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD PRIMARY KEY (`id_pengiriman`),
  ADD KEY `id_produksi` (`id_produksi`);

--
-- Indeks untuk tabel `produksi`
--
ALTER TABLE `produksi`
  ADD PRIMARY KEY (`id_prodduksi`),
  ADD KEY `id_material` (`id_material`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bahan_material`
--
ALTER TABLE `bahan_material`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11007;

--
-- AUTO_INCREMENT untuk tabel `pengiriman`
--
ALTER TABLE `pengiriman`
  MODIFY `id_pengiriman` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `produksi`
--
ALTER TABLE `produksi`
  MODIFY `id_prodduksi` int NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD CONSTRAINT `pengiriman_ibfk_1` FOREIGN KEY (`id_produksi`) REFERENCES `produksi` (`id_prodduksi`);

--
-- Ketidakleluasaan untuk tabel `produksi`
--
ALTER TABLE `produksi`
  ADD CONSTRAINT `produksi_ibfk_1` FOREIGN KEY (`id_material`) REFERENCES `bahan_material` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
