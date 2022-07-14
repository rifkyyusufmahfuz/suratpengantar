-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2022 at 04:01 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pengantar`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_sistem`
--

CREATE TABLE `admin_sistem` (
  `id_admin` varchar(5) NOT NULL,
  `nama_admin` varchar(38) NOT NULL,
  `kata_sandi` varchar(35) NOT NULL,
  `jabatan` varchar(25) NOT NULL,
  `hak_akses` int(1) NOT NULL,
  `status_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_sistem`
--

INSERT INTO `admin_sistem` (`id_admin`, `nama_admin`, `kata_sandi`, `jabatan`, `hak_akses`, `status_admin`) VALUES
('adm01', 'Admin RT', 'admin', 'RT', 3, 1),
('adm02', 'Admin RW', 'admin', 'RW', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `nik` varchar(16) NOT NULL,
  `nama_penduduk` varchar(35) NOT NULL,
  `tempat_lhr` varchar(30) NOT NULL,
  `tgl_lhr` date NOT NULL,
  `jns_kelamin` varchar(2) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `rt` varchar(3) NOT NULL,
  `rw` varchar(3) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `sts_perkawinan` varchar(20) NOT NULL,
  `pekerjaan` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`nik`, `nama_penduduk`, `tempat_lhr`, `tgl_lhr`, `jns_kelamin`, `alamat`, `rt`, `rw`, `agama`, `sts_perkawinan`, `pekerjaan`) VALUES
('3271316637264859', 'Anisa Kurniawati', 'Jakarta', '1991-10-21', 'P', 'Perumahan Telaga Harapan.1 Jl.Mawar No.9 Blok.K8 Kecamatan Bekasi Utara Kota Bekasi', '009', '014', 'Islam', 'Kawin', 'Karyawan'),
('327173192348739', 'Gideon Tri Mulyanto', 'Bekasi', '1993-07-27', 'L', 'Perumahan Telaga Harapan.1 Jl.Mawar No.7 Blok.K8 Kecamatan Bekasi Utara Kota Bekasi', '009', '013', 'Kristen', 'Belum Kawin', 'Swasta'),
('3275002374528491', 'Wahid Khoirul Subagti', 'Bekasi', '1995-04-29', 'L', 'Perumahan Telaga Harapan.1 Jl.Mawar No.6 Blok.K4 Kecamatan Bekasi Utara Kota Bekasi.', '007', '013', 'Kristen', 'Belum Kawin', 'Pelajar/Mahasiswa'),
('3275008091224901', 'Bagas Satrio Nugroho', 'Papua', '1993-01-25', 'L', 'Perumahan Telaga Harapan.1 Jl.Mawar No.12 Blok.N6 Kecamatan Bekasi Utara Kota Bekasi', '014', '013', 'Islam', 'Kawin', 'PNS'),
('3275012346831001', 'Muhammad Rifan Fauri', 'Bekasi', '1995-10-12', 'L', 'Perumahan Telaga Harapan.1 Jl.Mawar No.8 Blok.J3 Kecamatan Bekasi Utara Kota Bekasi', '002', '010', 'Islam', 'Belum Kawin', 'Mahasiswa'),
('3275012389011220', 'Andini Khoirunnisa', 'Jakarta', '1993-03-05', '', 'Perumahan Telaga Harapan.1 Jl.Mawar No.12 Blok.B3 Kecamatan Bekasi Utara Kota Bekasi', '009', '012', 'Islam', 'Belum Kawin', 'Swasta'),
('3275018300045761', 'Andini Kharisma Putri', 'Subang', '1998-09-04', '', 'Perumahan Telaga Harapan.1 Jl.Mawar No.18 Blok.W12 Kecamatan Bekasi Utara Kota Bekasi', '019', '002', 'Kristen', 'Belum Kawin', 'Pelajar/Mahasiswa'),
('3275021008698591', 'Dinda Dwi Aryani', 'Cilacap', '1980-07-01', 'P', 'Perumahan Telaga Harapan.1 Jl.Mawar No.14 Blok.Q3 Kecamatan Bekasi Utara Kota Bekasi', '010', '007', 'Islam', 'Kawin', 'Karyawan'),
('3275033001469015', 'Abraham Juan ', 'Aceh', '1999-08-17', 'L', 'Perumahan Telaga Harapan.1 Jl.Mawar No.19 Blok.K8 Kecamatan Bekasi Utara Kota Bekasi', '015', '021', 'Kristen', 'Belum Kawin', 'Karyawan'),
('3275034001290817', 'Rizka Aprianti', 'Madiun', '1997-05-18', 'P', 'Perumahan Telaga Harapan.1 Jl.Mawar No.9 Blok.V8 Kecamatan Bekasi Utara Kota Bekasi', '016', '015', 'Islam', 'Belum Kawin', 'Swasta'),
('3275081002198921', 'Yoga Fitra Rahmanto', 'Surabaya', '2000-06-01', 'L', 'Perumahan Telaga Harapan.1 Jl.Mawar No.10 Blok.M2 Kecamatan Bekasi Utara Kota Bekasi', '008', '003', 'Islam', 'Belum Kawin', 'Pelajar/Mahasiswa'),
('3275090320014321', 'Annisa Oktavia cahyani', 'Medan', '1997-06-22', 'P', 'Perumahan Telaga Harapan.1 Jl.Mawar No.6 Blok.F3 Kecamatan Bekasi Utara Kota Bekasi', '011', '004', 'Islam', 'Belum Kawin', 'Swasta'),
('3275090878912004', 'Reyna Aulia Alfahri', 'Makasar', '1996-06-02', 'P', 'Perumahan Telaga Harapan.1 Jl.Mawar No.18 Blok.L10 Kecamatan Bekasi Utara Kota Bekasi', '005', '003', 'Islam', 'Belum Kawin', 'Karyawan'),
('3275091007990016', 'Rifky Yusuf Mahfuz', 'Jakarta', '1992-04-15', 'L', 'Perumahan Telaga Harapan.1 Jl.Mawar No.03 Blok.K2', '001', '001', 'Islam', 'Belum Kawin', 'Swasta'),
('3275200384726198', 'Arya Saputra', 'Bekasi', '1986-09-25', 'L', 'Perumahan Telaga Harapan.1 Jl.Mawar No.2 Blok.K3 Kecamatan Bekasi Utara Kota Bekasi', '006', '012', 'Hindu', 'Kawin', 'Swasta'),
('3275834753218497', 'Ani Trisuryani', 'Bekasi', '1987-03-12', 'P', 'Perumahan Telaga Harapan.1 Jl.Mawar No.4 Blok.K2 Kecamatan Bekasi Utara Kota Bekasi ', '002', '002', 'Islam', 'Kawin', 'Karyawan'),
('3276936573928475', 'Alfariji Herdianto', 'Bekasi', '1993-07-23', 'L', 'Perumahan Telaga Harapan.1 Jl.Mawar No.5 Blok.K3 Kecamatan Bekasi Utara Kota Bekasi', '005', '006', 'Islam', 'Belum Kawin', 'Pelajar/Mahasiswa');

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan_surat`
--

CREATE TABLE `pengajuan_surat` (
  `no_pengajuan` varchar(20) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `jns_pengajuan` varchar(50) NOT NULL,
  `tanggal_pengajuan` datetime NOT NULL,
  `sts_pengajuan` int(1) NOT NULL,
  `validasi_rt` int(1) NOT NULL,
  `validasi_rw` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengajuan_surat`
--

INSERT INTO `pengajuan_surat` (`no_pengajuan`, `nik`, `jns_pengajuan`, `tanggal_pengajuan`, `sts_pengajuan`, `validasi_rt`, `validasi_rw`) VALUES
('SP-2021-0001', '3275091007990016', 'Pembuatan Kartu Tanda Penduduk', '2021-06-12 17:59:47', 1, 2, 1),
('SP-2021-0002', '3275091007990016', 'Pembuatan Kartu Keluarga', '2021-06-12 18:18:45', 1, 1, 1),
('SP-2021-0003', '3275091007990016', 'Surat Keterangan Tidak Mampu', '2021-06-12 18:19:07', 1, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_sistem`
--
ALTER TABLE `admin_sistem`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `pengajuan_surat`
--
ALTER TABLE `pengajuan_surat`
  ADD PRIMARY KEY (`no_pengajuan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
