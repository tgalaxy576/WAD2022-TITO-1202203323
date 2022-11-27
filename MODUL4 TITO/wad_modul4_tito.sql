-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Nov 2022 pada 12.55
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wad_modul4_tito`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `showroom_tito_table`
--

CREATE TABLE `showroom_tito_table` (
  `id_mobil` int(255) NOT NULL,
  `nama_mobil` varchar(255) NOT NULL,
  `pemilik_mobil` varchar(255) NOT NULL,
  `merk_mobil` varchar(255) NOT NULL,
  `tanggal_beli` date NOT NULL,
  `deskripsi` text NOT NULL,
  `foto_mobil` varchar(255) NOT NULL,
  `status_pembayaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `showroom_tito_table`
--

INSERT INTO `showroom_tito_table` (`id_mobil`, `nama_mobil`, `pemilik_mobil`, `merk_mobil`, `tanggal_beli`, `deskripsi`, `foto_mobil`, `status_pembayaran`) VALUES
(17, 'Testing', 'Tito_1202203323', 'tes', '0000-00-00', 'aifjdoijiosjad  ijdfaoijsdogj oissdoifj oiasjdfoijga idsajfo jasdfj  i jadsofij oajsdfoi  iajsdfoi', 'hrv.jpeg', 'Lunas'),
(18, 'Airmax test', 'zdcasfa sdfsad', 'air', '1111-11-11', 'dasfn  faoijsdogj oissdoifj oiasjdfoijga idsajfo jasdfj  i jadsofij oajsdfoi  iajsdfoi', 'air.jpeg', 'belum lunas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_tito`
--

CREATE TABLE `user_tito` (
  `id` bigint(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_hp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_tito`
--

INSERT INTO `user_tito` (`id`, `nama`, `email`, `password`, `no_hp`) VALUES
(3, 'tito galaxy wijaya', 'tgalaxy576@gmail.com', '$2y$10$8hp5fcM6rigbgM6cw.XGzOlHq04X55fFgHdJDXZDkUxwBfGxfOnU.', '082144068944'),
(5, 'aaa', 'a@gmail.com', '$2y$10$YzyOZse1jlMoMv6TcB8BFOyj9dzCBYRAM9af9hNAonwTxq0C1P/eS', '082144068944'),
(6, 'bbb', 'b@gmail.com', '$2y$10$uBWleTBWI3RTj51xJ4qg2ObiMV70NP5Z6lpjFhamfp0Xk7d58QCHq', '082144068944');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `showroom_tito_table`
--
ALTER TABLE `showroom_tito_table`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indeks untuk tabel `user_tito`
--
ALTER TABLE `user_tito`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `showroom_tito_table`
--
ALTER TABLE `showroom_tito_table`
  MODIFY `id_mobil` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `user_tito`
--
ALTER TABLE `user_tito`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
