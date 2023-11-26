-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2023 at 05:50 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `silaper`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_akun`
--

CREATE TABLE `tb_akun` (
  `id_akun` int(11) NOT NULL,
  `id_level` int(11) NOT NULL,
  `id_ruangan` int(4) NOT NULL,
  `nama_akun` varchar(50) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_akun`
--

INSERT INTO `tb_akun` (`id_akun`, `id_level`, `id_ruangan`, `nama_akun`, `nip`, `foto`, `username`, `password`) VALUES
(17, 1, 4004, 'Muhammad Fariz Adani, S.Kom', '92155117', 'anggie1.jpg', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(18, 2, 4004, 'Yunizar Fahmi, S.Kom', '19697222281998034001', '11.jpg', 'fahmi', 'f11d50d63d3891a44c332e46d6d7d561'),
(19, 2, 4004, 'Deky Siswanto, S.Kom', '92155202', 'saffa1.jpg', 'deky', '6b54696b73164b0e2345d09f74dfedfa'),
(20, 3, 1003, 'Achmad Yani, SKM', '19697111281998031004', '41.jpg', 'yani', '080840925a7e2087673145d83918c658'),
(21, 3, 2002, 'dr. Risa Paula, Sp.OG', '19697111281998032008', 'team-21.jpg', 'risa', '735c9c3675eaba16bfbec5913174067e'),
(22, 3, 3000, 'Yuana Mahdah, S.Kep', '19697111281998033011', 'team-211.jpg', 'yuana', '1fded7d4cc7370a7eaf3a7ba6e814c02'),
(23, 3, 4002, 'Dedy Gunawan, S.Kep', '19697111281998034018', 'team-31.jpg', 'dedy', 'd5fdbe5b16111739a53f6bedc2c29e5c');

-- --------------------------------------------------------

--
-- Table structure for table `tb_instalasi`
--

CREATE TABLE `tb_instalasi` (
  `id_instalasi` int(11) NOT NULL,
  `id_akun` int(11) NOT NULL,
  `id_petugas` int(11) DEFAULT NULL,
  `tanggal_lapor_instal` date NOT NULL,
  `nama_instal` varchar(50) NOT NULL,
  `keterangan_instal` varchar(50) NOT NULL,
  `tanggal_instal` date NOT NULL,
  `status_instal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_instalasi`
--

INSERT INTO `tb_instalasi` (`id_instalasi`, `id_akun`, `id_petugas`, `tanggal_lapor_instal`, `nama_instal`, `keterangan_instal`, `tanggal_instal`, `status_instal`) VALUES
(7, 21, NULL, '2023-01-22', 'Internet', '', '0000-00-00', 'Sedang di Proses');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jabatan`
--

CREATE TABLE `tb_jabatan` (
  `id_jabatan` varchar(5) NOT NULL,
  `nama_jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jabatan`
--

INSERT INTO `tb_jabatan` (`id_jabatan`, `nama_jabatan`) VALUES
('J0001', 'Supervisor Hardware'),
('J0002', 'Supervisor Software'),
('J0003', 'Pelaksana Hardware'),
('J0004', 'Pelaksana Software');

-- --------------------------------------------------------

--
-- Table structure for table `tb_level`
--

CREATE TABLE `tb_level` (
  `id_level` int(11) NOT NULL,
  `nama_level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_level`
--

INSERT INTO `tb_level` (`id_level`, `nama_level`) VALUES
(1, 'Admin'),
(2, 'Petugas'),
(3, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `tb_perbaikan`
--

CREATE TABLE `tb_perbaikan` (
  `id_perbaikan` int(11) NOT NULL,
  `id_petugas` int(11) DEFAULT NULL,
  `id_akun` int(11) NOT NULL,
  `tanggal_lapor` date NOT NULL,
  `masalah` varchar(50) NOT NULL,
  `tanggal_perbaik` date NOT NULL,
  `tindakan` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_perbaikan`
--

INSERT INTO `tb_perbaikan` (`id_perbaikan`, `id_petugas`, `id_akun`, `tanggal_lapor`, `masalah`, `tanggal_perbaik`, `tindakan`, `status`) VALUES
(8, 6, 20, '2023-01-24', 'Jaringan Lelet', '2023-01-12', 'Kabel power lepas', 'Selesai'),
(9, 1, 17, '2023-01-12', 'Komputer tidak bisa nyala', '2023-01-15', 'nunggu barang', 'Sedang Di Proses'),
(10, 1, 23, '2023-01-15', 'ehe', '2023-01-15', 'nunggu barang', 'Selesai'),
(11, NULL, 22, '2023-01-14', 'laptop', '0000-00-00', '', 'Sedang di Proses'),
(12, NULL, 21, '2023-01-15', 'eheee', '0000-00-00', '', 'Sedang di Proses');

-- --------------------------------------------------------

--
-- Table structure for table `tb_petugas`
--

CREATE TABLE `tb_petugas` (
  `id_petugas` int(11) NOT NULL,
  `id_jabatan` varchar(5) NOT NULL,
  `nip_petugas` varchar(20) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `nama_petugas` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_petugas`
--

INSERT INTO `tb_petugas` (`id_petugas`, `id_jabatan`, `nip_petugas`, `tanggal_masuk`, `nama_petugas`, `tanggal_lahir`, `tempat_lahir`, `jenis_kelamin`, `foto`) VALUES
(1, 'J0004', '92155203', '2017-07-12', 'Dedy Hariyadi, S.Kom', '1990-07-16', 'Tanah Laut', 'Laki - laki', 'amad.jpg'),
(2, 'J0004', '19697222281998034003', '2017-07-11', 'Iswan Riadi, S.Kom', '1997-04-16', 'Martapura', 'Laki - laki', '3.jpg'),
(3, 'J0002', '92155202', '2017-07-10', 'Deky Siswanto, S.Kom', '1995-08-12', 'Pelaihari', 'Laki - laki', 'saffa.jpg'),
(4, 'J0003', '19697222281998034002', '2017-07-09', 'Ardiansyah, S.Kom', '1996-08-06', 'Martapura', 'Laki - laki', '2.jpg'),
(5, 'J0003', '92155201', '2017-07-08', 'Maulidina M.A., S.Kom', '1995-06-02', 'Banjarbaru', 'Perempuan', 'team-2.jpg'),
(6, 'J0001', '19697222281998034001', '2017-07-07', 'Yunizar Fahmi, S.Kom', '1995-05-01', 'Balikpapan', 'Laki - laki', '11.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ruangan`
--

CREATE TABLE `tb_ruangan` (
  `id_ruangan` int(4) NOT NULL,
  `nama_ruangan` varchar(50) NOT NULL,
  `nip_ruangan` varchar(20) NOT NULL,
  `nama_pj` varchar(50) NOT NULL,
  `keterangan` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_ruangan`
--

INSERT INTO `tb_ruangan` (`id_ruangan`, `nama_ruangan`, `nip_ruangan`, `nama_pj`, `keterangan`) VALUES
(1000, 'LOKET PENDAFTARAN', '19697111281998032001', 'Surharyadi, S.Kep', 'Lantai 1'),
(1001, 'REKAM MEDIK', '19697111281998031002', 'Titin Lismayanti', 'Lantai 1'),
(1002, 'IGD', '19697111281998031003', 'dr. Eko Wahyu Pribadi, Sp,B', 'Lantai 1'),
(1003, 'RADIOLOGI', '19697111281998031004', 'Achmad Yani, SKM', 'Lantai 1'),
(1004, 'APOTIK', '19697111281998031005', 'Budi Hendrawan, Amk', 'Lantai 1'),
(2000, 'POLI UMUM', '19697111281998032006', 'dr. Musyaddad, Sp.An', 'Lantai 2'),
(2001, 'POLI ANAK', '19697111281998032007', 'dr. Mashul Halipah, Sp.A', 'Lantai 2'),
(2002, 'POLI KANDUNGAN', '19697111281998032008', 'dr. Risa Paula, Sp.OG', 'Lantai 2'),
(2003, 'ICU', '19697111281998032009', 'M. Husni Thamrin, SKM', 'Lantai 2'),
(2004, 'VIP KENARI', '19697111281998032010', 'Tri Susilowati, S.Kep', 'Lantai 2'),
(3000, 'POLI EKSEKUTIF', '19697111281998033011', 'Yuana Mahdah, S.Kep', 'Lantai 3'),
(3001, 'HEMODIALISA', '19697111281998033012', 'H. M. Effendi, Amk', 'Lantai 3'),
(3002, 'PSIKOLOGI', '19697111281998033013', 'dr. Yinyin Wahyuni Ongkowijoyo, S.PK', 'Lantai 3'),
(3003, 'HUMAS', '19697111281998033014', 'Budi Hendrawan, AMK', 'Lantai 3'),
(3004, 'VIP MURAI', '19697111281998033015', 'Riza Rahmani, SST.FT', 'Lantai 3'),
(4000, 'BENDAHARA BLUD', '19697111281998034016', 'Noorlailati, AMK', 'Lantai 4'),
(4001, 'SEKRETARIS', '19697111281998034017', 'Dwi Magdalena, S. AMK', 'Lantai 4'),
(4002, 'UMKAP', '19697111281998034018', 'Dedy Gunawan, S.Kep', 'Lantai 4'),
(4003, 'KEPEGAWAIAN', '19697111281998034019', 'Agus Setiawan, S.Kep, Ners', 'Lantai 4'),
(4004, 'IT SUPPORT', '92155117', 'Muhammad Fariz Adani S.Kom', 'Lantai 4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_akun`
--
ALTER TABLE `tb_akun`
  ADD PRIMARY KEY (`id_akun`),
  ADD KEY `id_level` (`id_level`),
  ADD KEY `id_ruangan` (`id_ruangan`);

--
-- Indexes for table `tb_instalasi`
--
ALTER TABLE `tb_instalasi`
  ADD PRIMARY KEY (`id_instalasi`),
  ADD KEY `id_akun` (`id_akun`),
  ADD KEY `id_petugas` (`id_petugas`);

--
-- Indexes for table `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `tb_level`
--
ALTER TABLE `tb_level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `tb_perbaikan`
--
ALTER TABLE `tb_perbaikan`
  ADD PRIMARY KEY (`id_perbaikan`),
  ADD KEY `id_petugas` (`id_petugas`) USING BTREE,
  ADD KEY `id_akun` (`id_akun`);

--
-- Indexes for table `tb_petugas`
--
ALTER TABLE `tb_petugas`
  ADD PRIMARY KEY (`id_petugas`),
  ADD KEY `id_jabatan` (`id_jabatan`);

--
-- Indexes for table `tb_ruangan`
--
ALTER TABLE `tb_ruangan`
  ADD PRIMARY KEY (`id_ruangan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_akun`
--
ALTER TABLE `tb_akun`
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tb_instalasi`
--
ALTER TABLE `tb_instalasi`
  MODIFY `id_instalasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_level`
--
ALTER TABLE `tb_level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_perbaikan`
--
ALTER TABLE `tb_perbaikan`
  MODIFY `id_perbaikan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_petugas`
--
ALTER TABLE `tb_petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_ruangan`
--
ALTER TABLE `tb_ruangan`
  MODIFY `id_ruangan` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4005;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_akun`
--
ALTER TABLE `tb_akun`
  ADD CONSTRAINT `tb_akun_ibfk_2` FOREIGN KEY (`id_ruangan`) REFERENCES `tb_ruangan` (`id_ruangan`),
  ADD CONSTRAINT `tb_akun_ibfk_3` FOREIGN KEY (`id_level`) REFERENCES `tb_level` (`id_level`);

--
-- Constraints for table `tb_instalasi`
--
ALTER TABLE `tb_instalasi`
  ADD CONSTRAINT `tb_instalasi_ibfk_1` FOREIGN KEY (`id_petugas`) REFERENCES `tb_petugas` (`id_petugas`),
  ADD CONSTRAINT `tb_instalasi_ibfk_2` FOREIGN KEY (`id_akun`) REFERENCES `tb_akun` (`id_akun`);

--
-- Constraints for table `tb_perbaikan`
--
ALTER TABLE `tb_perbaikan`
  ADD CONSTRAINT `tb_perbaikan_ibfk_2` FOREIGN KEY (`id_petugas`) REFERENCES `tb_petugas` (`id_petugas`),
  ADD CONSTRAINT `tb_perbaikan_ibfk_3` FOREIGN KEY (`id_akun`) REFERENCES `tb_akun` (`id_akun`);

--
-- Constraints for table `tb_petugas`
--
ALTER TABLE `tb_petugas`
  ADD CONSTRAINT `tb_petugas_ibfk_1` FOREIGN KEY (`id_jabatan`) REFERENCES `tb_jabatan` (`id_jabatan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
