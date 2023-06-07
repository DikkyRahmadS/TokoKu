-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jul 2022 pada 18.25
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_penjualan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `email`, `password`) VALUES
(1, 'admin1@gmail.com', 'admin123'),
(2, 'budi111@gmail.com', '123123123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `kategori` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `gambar`, `kategori`, `stok`, `harga`) VALUES
(12, 'Atasan Wanita Lengan Panjang', '401-Atasan-Wanita-Lengan-Panjang.png', 19, 99, 150000),
(13, 'Kemeja Flanel Pria', '601-Baju-Kemeja-Pria-Flanel-Lengan-Panjang.png', 19, 46, 100000),
(14, 'Kemeja Broshirt Sage', '493-BRODO-Kemeja-Broshirt-Long-Sage-Green.png', 19, 47, 67000),
(15, 'Emba Classic Kemeja Pria Putih', '976-Emba-Classic---Squad-Kemeja-Pria-Lengan-Panjang-Off-White.png', 19, 43, 200000),
(16, 'Emba Classic Kemeja Pria Mustard', '790-Emba-Classic---Squad-One-Kemeja-Pria-Mustard.png', 19, 67, 200000),
(17, 'Atasan Basic Katun Rayon Orange', '307-kemeja-Atasan-Basic-Katun-Rayon-Polos-Orange.png', 19, 87, 48000),
(18, 'Kemeja Flanel Pria Hitam Kotak Kotak', '266-Kemeja-Flanel-Pria-Lengan-Panjang-PZD-011-Premium.png', 19, 85, 100000),
(19, 'Kemeja Lengan Pendek Abu Abu', '338-Kemeja-Lengan-Pendek-Original-Motz-Abu-abu.png', 19, 54, 87000),
(20, 'Kemeja Pria Lengan Pendek Hylos', '879-Kemeja-Pria-Lengan-Pendek-CASUAL-HYLOS-Coklat-Susu.png', 19, 21, 77000),
(21, 'Kemeja Tenue', '969-Kemeja-Tenue-de-Attire-Everyday-Easy-Shirt-Olive.png', 19, 65, 58000),
(22, 'Kepomp Kemeja Lengan Panjang Hitam Royon', '270-Kepomp-Kemeja-Lengan-Panjang-Hitam-Rayon.png', 19, 43, 180000),
(23, 'Kepomp Yarrow Oversized', '647-Kepomp-Yarrow-Oversized-Shirt-Kemeja-Katun-Lilac.png', 19, 11, 230000),
(24, 'Kemeja Pendek Reguler', '789-Motz-Kemeja-Pendek-Regular-Putih.png', 19, 32, 160000),
(25, 'Kemeja Batik Kipas', '598-PAKAIANKOE-Kemeja-Batik-Top-Batik-Kipas-Green.png', 19, 32, 190000),
(26, 'Visco Kemeja Pria Pendek Maroon', '982-VISCO-Kemeja-Pria-Lengan-Pendek-Maroon.png', 19, 55, 80000),
(27, 'Fladeo Sandal Pria', '154-FLADEO-Sandal-Pria-[MDS170-3KR]-Coklat.png', 26, 31, 40000),
(28, 'Starlady Sandal Wanita Grey', '342-STARLADY-Sandal-Wanita-Delfine-Grey.png', 26, 53, 38000),
(29, 'Ova Sandal Japit Anak Laki', '775-OVA-Sandal-Jepit-Anak-Laki-Laki-Dhakaa-Jepit-Navy.png', 26, 100, 36000),
(30, 'PVN Doyoung Sandal Wanita Sage', '954-PVN-Doyoung-Sandal-Tali-Wanita-Sage-Green.png', 26, 54, 60000),
(31, 'Sandal Gunung', '891-Sandal-Gunung-Original-Hipzo-Sandal-Hiking-Abu-Abu.png', 26, 73, 50000),
(32, 'Fladeo Sandal Wanita', '783-FLADEO-Sandal-Wanita-[LDT266-1TP]-Maroon.png', 26, 23, 44000),
(33, 'Bermuda Celana Kargo Pendek', '895-Bermuda-Celana-Kargo-Pendek-Bigsize.png', 20, 23, 99000),
(34, 'Celana Baggy Boyfriends Jeans', '323-Celana-Baggy-Boyfriends-Jeans-Jumbo.png', 20, 160, 160000),
(35, 'Celana Jeans Pria LEA Dongker', '467-Celana-Jeans-Pria-LEA-606-Standar-Dongker.png', 20, 45, 180000),
(36, 'Celana Panjang Wanita Katun', '694-Celana-Panjang-Wanita-Bahan-Katun-Stretch-Army.png', 20, 65, 80000),
(37, 'Balin Topi Pantai', '172-Ballin-Topi-Pantai-Wanita-Calida-Simple-Beach-Hat.png', 24, 26, 90000),
(38, 'Baseball Cap Down The Street', '274-Baseball-Cap-DOWN-THE-STREET.png', 24, 16, 130000),
(39, 'Jaket Varsity Sukajan Miyamoto Mocca', '761-Jaket-Varsity-Jaket-Sukajan-Original-Miyamoto-Mocca.png', 23, 27, 200000),
(40, 'Jaket Parasut Lumino', '838-Jaket-Parasut-Lumino-Jaket-Wanita-Pink.png', 23, 28, 110000),
(41, 'Goodbyeex Tshirt Illusion Black', '538-GOODBYEEX-TS-Illusion-Black.png', 25, 120, 90000),
(42, 'Dobujack Tshirt Helena', '395-Dobujack-Tshirt-Helena-White-Tees.png', 25, 23, 85000),
(44, 'Bleu de Chanel', '875-jeroen-den-otter-2b0JeJTEclQ-unsplash_adobe_express.png', 22, 30, 350000),
(45, 'Nike Air Jordan Red', '703-sahand-babali-2GY6lEjAeBY-unsplash_adobe_express.png', 21, 11, 2000000),
(46, 'New  Balance  Special Grey', '571-felipepelaquim-6zO5VKogoZE-unsplash_adobe_express.png', 21, 6, 1500000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(19, 'Kemeja'),
(20, 'Celana'),
(21, 'Sepatu'),
(22, 'Parfum'),
(23, 'Jaket'),
(24, 'Topi'),
(25, 'Kaos'),
(26, 'Sandal');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembeli`
--

CREATE TABLE `pembeli` (
  `id_pembeli` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pembeli`
--

INSERT INTO `pembeli` (`id_pembeli`, `nama`, `email`, `password`, `alamat`) VALUES
(1, 'Budi', 'budi@gmail.com', '123123', 'malang'),
(2, 'Budi', 'adwawd@gmail.com', '213123', 'daw');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `id_pembeli` int(11) NOT NULL,
  `hargaTotal` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_barang`, `id_pembeli`, `hargaTotal`, `qty`) VALUES
(2, 14, 1, NULL, NULL),
(3, 14, 1, NULL, NULL),
(4, 34, 1, NULL, NULL),
(5, 12, 1, NULL, NULL),
(6, 12, 1, NULL, NULL),
(7, 36, 1, NULL, NULL),
(10, 15, 1, NULL, NULL),
(11, 31, 1, NULL, NULL),
(12, 38, 1, NULL, NULL),
(13, 14, 1, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `kategori` (`kategori`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`id_pembeli`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_pembeli` (`id_pembeli`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `pembeli`
--
ALTER TABLE `pembeli`
  MODIFY `id_pembeli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`kategori`) REFERENCES `kategori` (`id_kategori`);

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_pembeli`) REFERENCES `pembeli` (`id_pembeli`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
