-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Jan 2022 pada 17.33
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `0skr_pegawai`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `username`, `password`) VALUES
(1, 'Admin', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `file`
--

CREATE TABLE `file` (
  `id_file` int(11) NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `file`
--

INSERT INTO `file` (`id_file`, `nama_file`, `file`) VALUES
(6, 'Surat Pernyataan', 'surat-pernyataan.pdf'),
(7, 'Pengumuman Penerimaan', 'pengumuman-penerimaan.pdf'),
(8, 'Formulir Ujian', 'formulir-ujian.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hitung`
--

CREATE TABLE `hitung` (
  `id_hitung` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_lowongan` int(11) NOT NULL,
  `vektor_s` float NOT NULL,
  `vektor_v` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hitung`
--

INSERT INTO `hitung` (`id_hitung`, `id_user`, `id_lowongan`, `vektor_s`, `vektor_v`) VALUES
(16, 17, 12, 0, 0),
(17, 18, 12, 0, 0),
(18, 19, 12, 0, 0),
(19, 20, 12, 0, 0),
(20, 21, 12, 0, 0),
(21, 22, 12, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `lowongan`
--

CREATE TABLE `lowongan` (
  `id_lowongan` int(11) NOT NULL,
  `lowongan` varchar(50) NOT NULL,
  `kuota` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `pengumuman` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lowongan`
--

INSERT INTO `lowongan` (`id_lowongan`, `lowongan`, `kuota`, `status`, `pengumuman`) VALUES
(12, 'Lowongan Backend Developer', 10, 1, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `lowongan_rinci`
--

CREATE TABLE `lowongan_rinci` (
  `id_lowongan_rinci` int(11) NOT NULL,
  `id_lowongan` int(11) NOT NULL,
  `kriteria` varchar(30) NOT NULL,
  `bobot` int(11) NOT NULL,
  `status_nilai` tinyint(4) NOT NULL,
  `status_upload` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lowongan_rinci`
--

INSERT INTO `lowongan_rinci` (`id_lowongan_rinci`, `id_lowongan`, `kriteria`, `bobot`, `status_nilai`, `status_upload`) VALUES
(41, 12, 'Bahasa Inggris', 4, 1, 0),
(42, 12, 'Ijasah', 3, 1, 1),
(43, 12, 'PHP', 5, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelamar`
--

CREATE TABLE `pelamar` (
  `id_lamaran` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_lowongan` int(11) NOT NULL,
  `kriteria` varchar(30) NOT NULL,
  `nilai` varchar(10) NOT NULL,
  `file` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelamar`
--

INSERT INTO `pelamar` (`id_lamaran`, `id_user`, `id_lowongan`, `kriteria`, `nilai`, `file`) VALUES
(107, 17, 12, 'Bahasa Inggris', '77', ''),
(108, 17, 12, 'Ijasah', '80', '17_12_Ijasah.jpg'),
(109, 17, 12, 'PHP', '88', '17_12_PHP.jpg'),
(110, 18, 12, 'Bahasa Inggris', '85', ''),
(111, 18, 12, 'Ijasah', '80', '18_12_Ijasah.jpg'),
(112, 18, 12, 'PHP', '79', '18_12_PHP.jpg'),
(113, 19, 12, 'Bahasa Inggris', '85', ''),
(114, 19, 12, 'Ijasah', '80', '19_12_Ijasah.jpg'),
(115, 19, 12, 'PHP', '90', '19_12_PHP.jpg'),
(116, 20, 12, 'Bahasa Inggris', '80', ''),
(117, 20, 12, 'Ijasah', '75', '20_12_Ijasah.jpg'),
(118, 20, 12, 'PHP', '89', '20_12_PHP.jpg'),
(119, 21, 12, 'Bahasa Inggris', '82', ''),
(120, 21, 12, 'Ijasah', '85', '21_12_Ijasah.jpg'),
(121, 21, 12, 'PHP', '80', '21_12_PHP.jpg'),
(122, 22, 12, 'Bahasa Inggris', '88', ''),
(123, 22, 12, 'Ijasah', '76', '22_12_Ijasah.jpg'),
(124, 22, 12, 'PHP', '82', '22_12_PHP.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pendidikan` varchar(30) NOT NULL,
  `file_cv` varchar(50) NOT NULL,
  `foto` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `nama_lengkap`, `username`, `password`, `alamat`, `tempat_lahir`, `tanggal_lahir`, `no_hp`, `email`, `pendidikan`, `file_cv`, `foto`) VALUES
(17, 'Rahbaja', 'rahbaja', 'c0fc00320aeabce50644322deddb0762', 'Jalan Renon Panjer', 'Denpasar Timur', '2001-02-22', '083123098123', 'rahbaja@gmail.com', 'S1 TI - MTI', '', 'foto_17_Rahbaja.jpg'),
(18, 'Selvi', 'selvi', 'e7de9abd2abe6288bbbc928c62ae58ad', 'Jalan Gunung Agung', 'Denpasar Barat', '2001-05-01', '567856856', 'selvi@gmail.com', 'S1 TI - MTI', '', ''),
(19, 'Yoga', 'yoga', '807659cd883fc0a63f6ce615893b3558', 'Jalan Kertapura', 'Denpasar barat', '2001-09-10', '346346346346', 'yoga@gmail.com', ' TI - MTI', 'cv_19_Yoga.jpg', ''),
(20, 'Radit', 'radit', '79a91412ad3792662aaa310214572592', 'dsfdsfs', '', '2001-01-02', '4574567656756', 'radit@gmail.com', 'S1 TI - MTI', 'cv_20_Radit.jpg', ''),
(21, 'Komang Agus', 'agus', 'fdf169558242ee051cca1479770ebac3', 'Dsfsl', 'dfgdfgdf', '0000-00-00', '07897897', 'agus@gmail.com', 'S1 TI - MTI', 'cv_21_Komang Agus.jpg', 'foto_21_Komang Agus.jpg'),
(22, 'Ngakan', 'ngakan', 'b42381973ae8875fafc9cdb0a02306ea', 'dfadsfsdfsd', 'Denpasar Barat', '2001-03-01', '4575675', 'ngakan@gmail.com', 'S1 TI - MTI', 'cv_22_Ngakan.jpg', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`id_file`);

--
-- Indeks untuk tabel `hitung`
--
ALTER TABLE `hitung`
  ADD PRIMARY KEY (`id_hitung`);

--
-- Indeks untuk tabel `lowongan`
--
ALTER TABLE `lowongan`
  ADD PRIMARY KEY (`id_lowongan`);

--
-- Indeks untuk tabel `lowongan_rinci`
--
ALTER TABLE `lowongan_rinci`
  ADD PRIMARY KEY (`id_lowongan_rinci`);

--
-- Indeks untuk tabel `pelamar`
--
ALTER TABLE `pelamar`
  ADD PRIMARY KEY (`id_lamaran`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `file`
--
ALTER TABLE `file`
  MODIFY `id_file` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `hitung`
--
ALTER TABLE `hitung`
  MODIFY `id_hitung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `lowongan`
--
ALTER TABLE `lowongan`
  MODIFY `id_lowongan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `lowongan_rinci`
--
ALTER TABLE `lowongan_rinci`
  MODIFY `id_lowongan_rinci` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT untuk tabel `pelamar`
--
ALTER TABLE `pelamar`
  MODIFY `id_lamaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
