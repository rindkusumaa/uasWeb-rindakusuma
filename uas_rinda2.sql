-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Bulan Mei 2023 pada 08.03
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas_rinda2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `nm_admin` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nm_admin`, `username`, `email`, `password`) VALUES
(1, 'rindakusuma', 'admin', '', '210cf7aa5e2682c9c9d4511f88fe2789'),
(2, 'rindakusuma', 'admin', '', '21232f297a57a5a743894a0e4a801fc3'),
(3, '', 'rinda', 'rndaksumaa@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(4, '', 'admin', 'erenkun@gmail.com', '202cb962ac59075b964b07152d234b70'),
(5, '', 'rinda', 'rinda123@gmail.com', '92daa86ad43a42f28f4bf58e94667c95');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pendaftaran`
--

CREATE TABLE `tb_pendaftaran` (
  `id_pendaftaran` char(10) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `th_ajaran` varchar(9) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `nm_peserta` varchar(50) NOT NULL,
  `tmp_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` enum('Laki-laki','Perempuan') NOT NULL,
  `agama` varchar(15) NOT NULL,
  `alamat_peserta` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_pendaftaran`
--

INSERT INTO `tb_pendaftaran` (`id_pendaftaran`, `tgl_daftar`, `th_ajaran`, `jurusan`, `nm_peserta`, `tmp_lahir`, `tgl_lahir`, `jk`, `agama`, `alamat_peserta`) VALUES
('P202300004', '2023-05-28', '2022/2023', 'Teknologi Informasi', 'Rinda kusuma dewi', 'Blitar', '2003-02-01', 'Perempuan', 'Islam', 'lembeyan magetan'),
('P202300006', '2023-05-28', '2022/2023', 'Teknik Komputer Kontrol', 'Rinda kusuma dewi', 'Blitar', '2002-01-29', 'Laki-laki', 'Kristen', 'mojo'),
('P202300007', '2023-05-28', '2022/2023', 'Teknik Listrik', 'Rinda kusuma dewi', 'Blitar', '2001-10-16', 'Laki-laki', 'Islam', 'lkl'),
('P202300008', '2023-05-28', '2022/2023', 'Teknologi Informasi', 'Rinda kusuma dewi', 'Blitar', '2003-02-01', 'Perempuan', 'Islam', 'lembeyan magetan'),
('P202300009', '2023-05-29', '2022/2023', 'Teknologi Rekayasa Otomotif', 'Debi Kusuma Wardani', 'Magetan', '2001-05-29', 'Laki-laki', 'Hindu', 'plaosan, Magetan'),
('P202300010', '2023-05-29', '2022/2023', 'Teknologi Rekayasa Otomotif', 'Renaldi Putra Pratama', 'Surabaya', '2000-12-12', 'Laki-laki', 'Kristen', 'KedungRungkem'),
('P202300011', '2023-05-29', '2022/2023', 'Teknologi Rekayasa Otomotif', 'Riyandi Alfanendra', 'Kediri', '2001-05-12', 'Laki-laki', 'Islam', 'Kota Kediri'),
('P202300012', '2023-05-30', '2022/2023', 'Teknik Listrik', 'Fajar Akhsani', 'Kediri', '2003-03-30', 'Laki-laki', 'Islam', 'Magetan'),
('P202300013', '2023-05-30', '2022/2023', 'Teknik Pembentukan Logam ', 'Renda Mahendra Putra', 'TulungAgung', '2003-06-07', 'Laki-laki', 'Islam', 'Kab.TulungAgung'),
('P202300014', '2023-05-30', '2022/2023', 'Teknik Pembentukan Logam ', 'Defin Dwi Hikmatama', 'Magetan', '2003-02-01', 'Laki-laki', 'Kristen', 'CandiRejo, Magetan'),
('P202300015', '2023-05-30', '2022/2023', 'Teknologi Informasi', 'Fira Siti Aisyah', 'Lampung', '2002-08-25', 'Perempuan', 'Islam', 'Kost di madiun'),
('P202300016', '2023-05-30', '2022/2023', 'Perkeretaapian', 'Ika Olivia nanda', 'Madiun', '2003-05-04', 'Perempuan', 'Islam', 'Kab.Madiun');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tb_pendaftaran`
--
ALTER TABLE `tb_pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
