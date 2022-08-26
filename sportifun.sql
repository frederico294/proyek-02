-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Jan 2022 pada 06.56
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sportifun`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name_product` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `buy_price` int(11) DEFAULT NULL,
  `sell_price` int(11) DEFAULT NULL,
  `image_product` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`id`, `name_product`, `description`, `buy_price`, `sell_price`, `image_product`) VALUES
(2, 'Yamaha C40 Classical Guitar', 'A six-string classical acoustic guitar featuring a spruce top over a Meranti back and sides with a Nato neck and rosewood fingerboard.', 1000000, 2000000, '566-download.jpg'),
(5, 'TAMA DRUM SET IMPERIAL STAR 6 PCS (BD 22 INCH) IP62H6N-BVTR', 'Tama Imperialstar Rock -BVTR Tama Imperialstar series, model: IP62H6N-BVTR, rock version, finish: Vintage Red (BVTR), covered 8-ply, 7.5mm thick poplar shells, thomann black nickel shell hardware, set containing 22″x18″ bass drum with Accu Tune bass drum hoop, 10″x08″ – 12″x09″ tom toms with Omnisphere holder, 14″x12″ – 16″x14″ floor tom, 14″x05″ snare drum, hardware pack containing HS40W snare stand, HC42W straight cymbal stand, HC43BW boom cymbal stand, HH45W hi-hat stand, thomann HP200P Iron Cobra drum pedal, HT25 drum throne, Meinl MCS bronze cymbal set with 14″ hi-hat, 16″ crash, 20″ ride cymbal,', 8000000, 10000000, '538-447000605_tama_drum_set_imperial_star_6_pcs_ip62h6n_bvtr.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(9, 'vinctann', 'Tanvincent862@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(11, 'vincent9436', 'vincenttan069@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
