-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 12 Des 2015 pada 04.59
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `siakadta`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosemengajar`
--

CREATE TABLE IF NOT EXISTS `dosemengajar` (
`id_mengajar` int(11) NOT NULL,
  `kode_dosen` varchar(18) COLLATE latin1_general_ci NOT NULL,
  `kdmatkul` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `kdkelas` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `tahun` int(4) NOT NULL,
  `kdjur` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `semester` int(2) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=80 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `dosemengajar`
--

INSERT INTO `dosemengajar` (`id_mengajar`, `kode_dosen`, `kdmatkul`, `kdkelas`, `tahun`, `kdjur`, `semester`) VALUES
(52, 'DOS01', '', '', 2015, 'JUR01', 1),
(53, 'DOS01', '3D0010', '', 2015, 'JUR01', 1),
(54, 'DOS02', 'AA002', '', 2015, 'JUR01', 1),
(55, 'DOS16', 'MAT8101', '', 2015, 'JUR01', 1),
(56, 'DOS10', 'UN8105', '', 2015, 'JUR01', 1),
(57, 'DOS01', 'UN8101', '', 2015, 'JUR01', 1),
(58, 'DOS05', 'KIM8101L', '', 2015, 'JUR01', 1),
(59, 'DOS03', 'UN8102', '', 2015, 'JUR01', 1),
(60, 'DOS04', 'UN8103', '', 2015, 'JUR01', 1),
(61, 'DOS05', 'UN8104', '', 2015, 'JUR01', 1),
(62, 'DOS13', 'FIS8101L', '', 2015, 'JUR01', 1),
(63, 'DOS15', 'IF8101', '', 2015, 'JUR01', 1),
(64, 'DOS12', 'FIS8101', '', 2015, 'JUR01', 1),
(65, 'DOS16', 'KIM8101', '', 2015, 'JUR01', 1),
(66, 'DOS23', 'MAT8301', '', 2015, 'JUR01', 3),
(67, 'DOS07', 'UN8301', '', 2015, 'JUR01', 3),
(68, 'DOS19', 'MAT8303', '', 2015, 'JUR01', 3),
(69, 'DOS02', 'IF8301', '', 2015, 'JUR01', 3),
(70, 'DOS15', '705539', '', 2015, 'JUR01', 3),
(71, 'DOS01', 'IF8301L', '', 2015, 'JUR01', 3),
(72, 'DOS26', '705535', '', 2015, 'JUR01', 5),
(73, 'DOS11', 'EL8301L', '', 2015, 'JUR01', 5),
(74, 'DOS25', 'EL8301', '', 2015, 'JUR01', 5),
(75, 'DOS28', '705536', '', 2015, 'JUR01', 5),
(76, 'DOS15', '705538', '', 2015, 'JUR01', 5),
(77, 'DOS22', 'MAT8304', '', 2015, 'JUR01', 5),
(78, 'DOS20', 'IF8507', '', 2015, 'JUR01', 5),
(79, 'DOS29', '705534', '', 2015, 'JUR01', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE IF NOT EXISTS `dosen` (
  `kode_dosen` varchar(18) COLLATE latin1_general_ci NOT NULL,
  `nama_dosen` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `alamat` varchar(150) COLLATE latin1_general_ci NOT NULL,
  `telpon` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `jenis_kelamin` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `tempat_lahir` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `pendidikan` varchar(50) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`kode_dosen`, `nama_dosen`, `password`, `alamat`, `telpon`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `pendidikan`) VALUES
('DOS01', 'Rian Andrian ST', '202cb962ac59075b964b07152d234b70', 'Bandung', '0898648735', 'L', 'Ciamis', '2015-12-06', 'S1'),
('DOS02', 'Mochamad Irfan ST.,M.Kom', '202cb962ac59075b964b07152d234b70', 'Bandung', '082317327321', 'L', 'BANDUNG', '2015-12-06', 'S2'),
('DOS03', 'Dra. HjYuningsih, M.Pd.I.', '202cb962ac59075b964b07152d234b70', 'Bandung', '0898648735', 'P', 'Ciamis', '2015-12-06', 'S2'),
('DOS06', 'Ade Bunyamin, M.Ag.', '202cb962ac59075b964b07152d234b70', 'Bandung', '082317327321', 'L', 'Ciamis', '2015-12-06', 'S2'),
('DOS04', 'Heri Gunawan, S.Pd.I., M.Ag', '202cb962ac59075b964b07152d234b70', 'Bandung', '0898648735', 'L', 'Ciamis', '2015-12-06', 'S2'),
('DOS05', 'Dr.Yeti Heryati, S.Ag., M.Pd.', '202cb962ac59075b964b07152d234b70', 'Bandung', '0898648735', 'P', 'Ciamis', '2015-12-06', 'S2'),
('DOS07', 'Dr.Badrudin, M.Ag.', '202cb962ac59075b964b07152d234b70', 'Bandung', '0898648735', 'L', 'Ciamis', '2015-12-06', 'S2'),
('DOS08', 'Dita Handayani, M.Pd.', '202cb962ac59075b964b07152d234b70', 'Bandung', '082317327321', 'P', 'Ciamis', '2015-12-06', 'S2'),
('DOS09', 'Teddy Yusuf, S.Pd., M.Hum', '202cb962ac59075b964b07152d234b70', 'Bandung', '082317327321', 'L', 'Ciamis', '2015-12-06', 'S2'),
('DOS10', 'Irawan Febrianto, M.Si.', '202cb962ac59075b964b07152d234b70', 'Bandung', '0898648735', 'L', 'Ciamis', '2015-12-06', 'S2'),
('DOS11', 'Drs.Asep Jihad, M. Pd.', '202cb962ac59075b964b07152d234b70', 'Bandung', '082317327321', 'L', 'Ciamis', '2015-12-06', 'S2'),
('DOS12', 'Iphov Kumala Sriwana, S.T. M.Si.', '202cb962ac59075b964b07152d234b70', 'Bandung', '0898648735', 'P', 'Ciamis', '2015-12-06', 'S2'),
('DOS13', 'Tika Sulastika, M.Si.', '202cb962ac59075b964b07152d234b70', 'Bandung', '082317327321', 'P', 'Ciamis', '2015-12-06', 'S2'),
('DOS14', 'Dr. H.Aep Saepuloh, S.Ag., M.Si.', '202cb962ac59075b964b07152d234b70', 'Bandung', '082317327321', 'L', 'Ciamis', '2015-12-06', 'S2'),
('DOS15', 'Undang Syarifudin, SH., M.Kom.', '202cb962ac59075b964b07152d234b70', 'Bandung', '082317327321', 'L', 'Ciamis', '2015-12-06', 'S2'),
('DOS16', 'Vina Amalia, S.Pd., M.Si', '202cb962ac59075b964b07152d234b70', 'Bandung', '082317327321', 'P', 'Ciamis', '2015-12-06', 'S2'),
('DOS17', 'Asep Wahyudin, ST.', '202cb962ac59075b964b07152d234b70', 'Bandung', '082317327321', 'L', 'Ciamis', '2015-12-06', 'S2'),
('DOS18', 'Dr.Arief Fatchul Huda, S.Si., M.Kom.', '202cb962ac59075b964b07152d234b70', 'Bandung', '082317327321', 'L', 'Ciamis', '2015-12-06', 'S2'),
('DOS19', 'Yuliani, S.Si.', '202cb962ac59075b964b07152d234b70', 'Bandung', '082317327321', 'P', 'Ciamis', '2015-12-06', 'S2'),
('DOS20', 'Esih Sukaesih, M. Si.', '202cb962ac59075b964b07152d234b70', 'Bandung', '0898648735', 'P', 'Ciamis', '2015-12-06', 'S2'),
('DOS21', 'MUFID RIDLO EFFENDI,', '202cb962ac59075b964b07152d234b70', 'Bandung', '082317327321', 'L', 'Ciamis', '2015-12-06', 'S2'),
('DOS22', 'Jumadi, ST., M.Cs.', '202cb962ac59075b964b07152d234b70', 'Bandung', '0898648735', 'L', 'Ciamis', '2015-12-06', 'S2'),
('DOS23', 'Adam Faroqi, ST., MT.', '202cb962ac59075b964b07152d234b70', 'Bandung', '082317327321', 'L', 'Ciamis', '2015-12-06', 'S2'),
('DOS24', 'Nurhamzah, M.Ag.', '202cb962ac59075b964b07152d234b70', 'Bandung', '082317327321', 'L', 'Ciamis', '2015-12-06', 'S2'),
('DOS25', 'U Tresna Lenggana, ST., MT.', '202cb962ac59075b964b07152d234b70', 'Bandung', '0898648735', 'L', 'Ciamis', '2015-12-06', 'S2'),
('DOS26', 'Wisnu Uriawan, ST., M.Kom.', '202cb962ac59075b964b07152d234b70', 'Bandung', '0898648735', 'L', 'Ciamis', '2015-12-06', 'S2'),
('DOS27', 'Prof. Dr. H.M. Ali Ramdhani, S.TP., MT.', '202cb962ac59075b964b07152d234b70', 'Bandung', '0898648735', 'L', 'BANDUNG', '2015-12-06', 'S2'),
('DOS28', 'Edi Mulyana, ST., MT.', '202cb962ac59075b964b07152d234b70', 'Bandung', '082317327321', 'L', 'Ciamis', '2015-12-06', 'S2'),
('DOS29', 'Agung Wahana, S.E., M.T.', '202cb962ac59075b964b07152d234b70', 'Bandung', '082317327321', 'L', 'Ciamis', '2015-12-06', 'S2'),
('DOS30', 'Syaiful Haq Zubair, ST., MBA.', '202cb962ac59075b964b07152d234b70', 'Bandung', '082317327321', 'L', 'Ciamis', '2015-12-06', 'S2'),
('DOS31', 'Harrison DS, MT', '202cb962ac59075b964b07152d234b70', 'Bandung', '0898648735', 'L', 'Ciamis', '2015-12-06', 'S2'),
('DOS32', 'H.Cecep Nurul Alam, ST., M.T.', '202cb962ac59075b964b07152d234b70', 'Bandung', '0898648735', 'L', 'Ciamis', '2015-12-06', 'S2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fakultas`
--

CREATE TABLE IF NOT EXISTS `fakultas` (
  `kdfak` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `nmfak` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `nippimpinan` varchar(18) COLLATE latin1_general_ci NOT NULL,
  `almtfak` varchar(100) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `fakultas`
--

INSERT INTO `fakultas` (`kdfak`, `nmfak`, `nippimpinan`, `almtfak`) VALUES
('FAK01', 'SAINS DAN TEKNOLOGI', 'H.Cecep Nurul Alam', 'Bandung');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE IF NOT EXISTS `jadwal` (
`id_jadwal` int(11) NOT NULL,
  `tahun` int(4) NOT NULL,
  `semester` varchar(6) COLLATE latin1_general_ci NOT NULL,
  `kdmatkul` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `kdkelas` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `hari` varchar(35) COLLATE latin1_general_ci NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL,
  `kode_dosen` varchar(14) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `tahun`, `semester`, `kdmatkul`, `kdkelas`, `hari`, `jam_mulai`, `jam_selesai`, `kode_dosen`) VALUES
(18, 2015, 'Ganjil', 'IF8301', 'AK', 'Senin', '07:00:00', '08:40:00', 'DOS02'),
(16, 0, 'Ganjil', '0', '0', '', '00:00:00', '00:00:00', 'DOS01'),
(17, 2015, 'Ganjil', 'UN8101', 'AK', 'Senin', '07:00:00', '08:40:00', 'DOS01'),
(19, 2015, 'Ganjil', 'UN8102', 'AK', 'Selasa', '07:00:00', '08:40:00', 'DOS03'),
(20, 2015, 'Ganjil', 'UN8103', 'AK', 'Rabu', '07:00:00', '08:40:00', 'DOS04'),
(21, 2015, 'Ganjil', 'UN8104', 'AK', 'Kamis', '07:00:00', '08:40:00', 'DOS05'),
(22, 2015, 'Ganjil', 'FIS8101L', 'AK', 'Jumat', '07:00:00', '08:40:00', 'DOS13'),
(23, 2015, 'Ganjil', 'IF8101', 'AK', 'Sabtu', '07:00:00', '08:40:00', 'DOS15'),
(24, 2015, 'Ganjil', 'FIS8101', 'AK', 'Rabu', '07:00:00', '08:40:00', 'DOS12'),
(25, 2015, 'Ganjil', 'KIM8101', 'AK', 'Kamis', '07:00:00', '08:40:00', 'DOS16'),
(26, 2015, 'Ganjil', 'MAT8301', 'AK', 'Sabtu', '07:00:00', '08:40:00', 'DOS23'),
(27, 2015, 'Ganjil', 'UN8301', 'AK', 'Kamis', '07:00:00', '08:40:00', 'DOS07'),
(28, 2015, 'Ganjil', 'MAT8303', 'AK', 'Senin', '07:00:00', '08:40:00', 'DOS19'),
(29, 2015, 'Ganjil', 'IF8301', 'AK', 'Kamis', '07:00:00', '08:40:00', 'DOS02'),
(30, 2015, 'Ganjil', '705539', 'AK', 'Sabtu', '07:00:00', '08:40:00', 'DOS15'),
(31, 2015, 'Ganjil', 'IF8301L', 'AK', 'Rabu', '07:00:00', '08:40:00', 'DOS01'),
(32, 2015, 'Ganjil', '705535', 'AK', 'Kamis', '07:00:00', '08:40:00', 'DOS26'),
(33, 2015, 'Ganjil', 'EL8301L', 'AK', 'Sabtu', '07:00:00', '08:40:00', 'DOS11'),
(34, 2015, 'Ganjil', 'EL8301', 'AK', 'Kamis', '07:00:00', '08:40:00', 'DOS25'),
(35, 2015, 'Ganjil', '705536', 'AK', 'Sabtu', '07:00:00', '08:40:00', 'DOS28'),
(36, 2015, 'Ganjil', '705538', 'AK', 'Rabu', '07:00:00', '08:40:00', 'DOS15'),
(37, 2015, 'Ganjil', 'MAT8304', 'AK', 'Sabtu', '07:00:00', '08:40:00', 'DOS22'),
(38, 2015, 'Ganjil', 'IF8507', 'AK', 'Sabtu', '07:00:00', '08:40:00', 'DOS20'),
(39, 2015, 'Ganjil', '705534', '0', 'Selasa', '07:00:00', '08:40:00', 'DOS29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE IF NOT EXISTS `jurusan` (
  `kdjur` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `kdfak` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `nmjur` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `nipketua` varchar(18) COLLATE latin1_general_ci NOT NULL,
  `nmketua` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `almtjur` varchar(100) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`kdjur`, `kdfak`, `nmjur`, `nipketua`, `nmketua`, `almtjur`) VALUES
('JUR01', 'FAK01', 'Teknik Informatika', '1123879382', 'Mochamad Irfan ST.,M.Kom', 'Bandung');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `kdkelas` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `nmkelas` varchar(35) COLLATE latin1_general_ci NOT NULL,
  `ruang` varchar(5) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`kdkelas`, `nmkelas`, `ruang`) VALUES
('AK', 'AK Pagi/2011', 'A2'),
('MI', 'MI Pagi/2011', 'A1'),
('AK1', 'AK Sore/2011', 'B5'),
('MI1', 'MI Sore/2011', 'B6');

-- --------------------------------------------------------

--
-- Struktur dari tabel `krs`
--

CREATE TABLE IF NOT EXISTS `krs` (
`id_krs` int(11) NOT NULL,
  `nim` varchar(18) COLLATE latin1_general_ci NOT NULL,
  `tahun` int(4) NOT NULL,
  `semester` int(2) NOT NULL,
  `ket` varchar(6) COLLATE latin1_general_ci NOT NULL,
  `kdjur` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `kdmatkul` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `kdkelas` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `kode_dosen` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `nilai` varchar(2) COLLATE latin1_general_ci NOT NULL,
  `angkamutu` double NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=273 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `nim` varchar(18) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `nama` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `kdjur` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `angkatan` int(4) NOT NULL,
  `foto` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `alamat` varchar(150) COLLATE latin1_general_ci NOT NULL,
  `tplhr` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `tglhr` date NOT NULL,
  `jekel` varchar(6) COLLATE latin1_general_ci NOT NULL,
  `agama` varchar(35) COLLATE latin1_general_ci NOT NULL,
  `notelp` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `asalsekolah` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `thlulus` int(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `password`, `nama`, `kdjur`, `angkatan`, `foto`, `alamat`, `tplhr`, `tglhr`, `jekel`, `agama`, `notelp`, `asalsekolah`, `thlulus`) VALUES
('1137050009', '202cb962ac59075b964b07152d234b70', 'Ade Rahmat Nurhidayat', 'JUR01', 2015, '231018847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050010', '202cb962ac59075b964b07152d234b70', 'Ade Riana', 'JUR01', 2015, '3366698847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050008', '202cb962ac59075b964b07152d234b70', 'Ade Irpan Ramdani', 'JUR01', 2015, '4388428847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050026', '202cb962ac59075b964b07152d234b70', 'Ahmadi Surahman', 'JUR01', 2015, '212860kecil_723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-05', 'L', 'Islam', '082317327321', 'SMAN 1 PANGANDARAN', 2015),
('1137050001', '202cb962ac59075b964b07152d234b70', 'A. Septiadi', 'JUR01', 2015, '6164244288941220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050002', '202cb962ac59075b964b07152d234b70', 'Abdul Azis Alfauzi', 'JUR01', 2015, '8221748847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050003', '202cb962ac59075b964b07152d234b70', 'Abdul Hakim Muhammad A', 'JUR01', 2015, '8946228847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050004', '202cb962ac59075b964b07152d234b70', 'Abdul Rahman Sahidan', 'JUR01', 2015, '7187508847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050005', '202cb962ac59075b964b07152d234b70', 'Abdurrohim Fajar', 'JUR01', 2015, '7204898847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050006', '202cb962ac59075b964b07152d234b70', 'Adam Maulana Sidik', 'JUR01', 2015, '6444704288941220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050007', '202cb962ac59075b964b07152d234b70', 'Addinil Haq Muliyana', 'JUR01', 2015, '4052428847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'P', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050011', '202cb962ac59075b964b07152d234b70', 'Aden Ali Mutowalli', 'JUR01', 2015, '6987608847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050012', '202cb962ac59075b964b07152d234b70', 'Aden Sudiana', 'JUR01', 2015, '4010628847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050013', '202cb962ac59075b964b07152d234b70', 'Adi Fauzan Akbar', 'JUR01', 2015, '4987488847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050014', '202cb962ac59075b964b07152d234b70', 'Adi Mulyadi', 'JUR01', 2015, '755981231018847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050015', '202cb962ac59075b964b07152d234b70', 'Adi Nugraha Nasirul Haq', 'JUR01', 2015, '216217231018847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050016', '202cb962ac59075b964b07152d234b70', 'Adriani Putri', 'JUR01', 2015, '3662718847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'P', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050017', '202cb962ac59075b964b07152d234b70', 'Adriyana Putra Pratama', 'JUR01', 2015, '19134216217231018847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050018', '202cb962ac59075b964b07152d234b70', 'Adryan Mochamad Fazryan', 'JUR01', 2015, '54052719134216217231018847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050019', '202cb962ac59075b964b07152d234b70', 'Agung Adnal Kamal', 'JUR01', 2015, '5442198847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050020', '202cb962ac59075b964b07152d234b70', 'Agung Joko Ismoyo', 'JUR01', 2015, '68109119134216217231018847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050021', '202cb962ac59075b964b07152d234b70', 'Ahmad Fauzi', 'JUR01', 2015, '64694219134216217231018847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050022', '202cb962ac59075b964b07152d234b70', 'Ahmad Irfan Fadludin', 'JUR01', 2015, '340578847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050023', '202cb962ac59075b964b07152d234b70', 'Ahmad Syarif', 'JUR01', 2015, '15151919134216217231018847961220208251childrens-dentistry.jpg', 'Bandung', 'Bandung', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050024', '202cb962ac59075b964b07152d234b70', 'Ahmad Zakaria Saefudin', 'JUR01', 2015, '4392708847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050025', '202cb962ac59075b964b07152d234b70', 'Ahmad Zaky Almubarok', 'JUR01', 2015, '6009218847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050027', '202cb962ac59075b964b07152d234b70', 'Aida Halimatusadiah', 'JUR01', 2015, '803228847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'P', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050028', '202cb962ac59075b964b07152d234b70', 'Aishi Rana Putiara', 'JUR01', 2015, '686615151919134216217231018847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'P', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050029', '202cb962ac59075b964b07152d234b70', 'Aldi Lesmana M. R.', 'JUR01', 2015, '2345588847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050030', '202cb962ac59075b964b07152d234b70', 'Ali Hanifa', 'JUR01', 2015, '5998228847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050031', '202cb962ac59075b964b07152d234b70', 'Ali Shaker Al Sudiar', 'JUR01', 2015, '230718847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050032', '202cb962ac59075b964b07152d234b70', 'Aliffian Ghien', 'JUR01', 2015, '5790108847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 PANGANDARAN', 2015),
('1137050033', '202cb962ac59075b964b07152d234b70', 'Alviane Latifah', 'JUR01', 2015, '1607053662718847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'P', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050034', '202cb962ac59075b964b07152d234b70', 'Aminah Fauziah', 'JUR01', 2015, '8623968847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'P', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050035', '202cb962ac59075b964b07152d234b70', 'Amung Munandar', 'JUR01', 2015, '836700723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050036', '202cb962ac59075b964b07152d234b70', 'Anggi Harun Arrasyid', 'JUR01', 2015, '8114624288941220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050037', '202cb962ac59075b964b07152d234b70', 'Anggi Rivaldi', 'JUR01', 2015, '1073918847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050038', '202cb962ac59075b964b07152d234b70', 'Antoni Zainal Muttaqin', 'JUR01', 2015, '4730228847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050039', '202cb962ac59075b964b07152d234b70', 'Apip Saleh', 'JUR01', 2015, '2486874288941220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050040', '202cb962ac59075b964b07152d234b70', 'Arief Maulana', 'JUR01', 2015, '2805784288941220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050041', '202cb962ac59075b964b07152d234b70', 'Arief Pasa Ibrahim', 'JUR01', 2015, '5535584288941220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050042', '202cb962ac59075b964b07152d234b70', 'Arief Rahman Hakim', 'JUR01', 2015, '167724463806kecil_4288941220208251childrens-dentistry.jpg', 'Bandung', 'Bandung', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050043', '202cb962ac59075b964b07152d234b70', 'Arief Romdoni', 'JUR01', 2015, '7837214288941220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050044', '202cb962ac59075b964b07152d234b70', 'Ariel Abthal Fadillah', 'JUR01', 2015, '1618044288941220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050045', '202cb962ac59075b964b07152d234b70', 'Arman Nur Ashari', 'JUR01', 2015, '919647836700723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050226', '202cb962ac59075b964b07152d234b70', 'Hannati Salma', 'JUR01', 2015, '133911836700723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'P', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050046', '202cb962ac59075b964b07152d234b70', 'Ary Hidayatullah', 'JUR01', 2015, '910552836700723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Bandung', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050047', '202cb962ac59075b964b07152d234b70', 'Asep Nasihin', 'JUR01', 2015, '5488894288941220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050048', '202cb962ac59075b964b07152d234b70', 'Asep Suryana', 'JUR01', 2015, '4244074288941220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050049', '202cb962ac59075b964b07152d234b70', 'Asep Wildan Firdaus', 'JUR01', 2015, '215332836700723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050050', '202cb962ac59075b964b07152d234b70', 'Asep Zenal Muttaqin', 'JUR01', 2015, '5979304288941220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050051', '202cb962ac59075b964b07152d234b70', 'Aulia Fitri Rahmania', 'JUR01', 2013, '355834288941220208251childrens-dentistry.jpg', 'Bekasi', 'Bekasi', '1994-09-17', 'P', 'Islam', '085770003941', 'SMAN 14 Bekasi ', 2012),
('1137050052', '202cb962ac59075b964b07152d234b70', 'Ayu Kartini', 'JUR01', 2015, '786590kecil_8946228847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'P', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050053', '202cb962ac59075b964b07152d234b70', 'Bayu Cahaya Gumilar', 'JUR01', 2015, '755737836700723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050054', '202cb962ac59075b964b07152d234b70', 'Bayu Dhika Pratama', 'JUR01', 2015, '314605836700723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050055', '202cb962ac59075b964b07152d234b70', 'Bismar', 'JUR01', 2015, '715637836700723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050056', '202cb962ac59075b964b07152d234b70', 'Brian Esa Chrisnando', 'JUR01', 2015, '224945836700723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Bandung', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050057', '202cb962ac59075b964b07152d234b70', 'Cecep Supriyatna', 'JUR01', 2015, '598876836700723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Bandung', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050058', '202cb962ac59075b964b07152d234b70', 'Charizki Yasen', 'JUR01', 2015, '29327836700723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Bandung', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 PANGANDARAN', 2015),
('1137050059', '202cb962ac59075b964b07152d234b70', 'Dadan Saepudin', 'JUR01', 2015, '182800836700723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'L', 'Islam', '87361287537', 'SMAN 1 Bandung', 2015),
('1137050060', '202cb962ac59075b964b07152d234b70', 'Dalilah Fatin Ufairah', 'JUR01', 2015, '458221836700723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050061', '202cb962ac59075b964b07152d234b70', 'Danil Nurhidayatulloh', 'JUR01', 2015, '88500836700723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Bandung', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050062', '202cb962ac59075b964b07152d234b70', 'Danis Yogaswara', 'JUR01', 2015, '210845836700723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Bandung', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050063', '202cb962ac59075b964b07152d234b70', 'Danny Muh. Ramadhani', 'JUR01', 2015, '530822836700723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Bandung', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050064', '202cb962ac59075b964b07152d234b70', 'Daris Kadarisman', 'JUR01', 2015, '705169836700723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Bandung', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050065', '202cb962ac59075b964b07152d234b70', 'Dede Endang', 'JUR01', 2015, '68359836700723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050066', '202cb962ac59075b964b07152d234b70', 'Demas Putri Utami', 'JUR01', 2015, '827911836700723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'P', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050067', '202cb962ac59075b964b07152d234b70', 'Dewi Hikmah Yulianti', 'JUR01', 2015, '353454836700723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'P', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050068', '202cb962ac59075b964b07152d234b70', 'Dien Ahmad Insaani', 'JUR01', 2015, '684539836700723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050069', '202cb962ac59075b964b07152d234b70', 'Dikdik Alfiana Rosyada', 'JUR01', 2015, '882202836700723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050070', '202cb962ac59075b964b07152d234b70', 'Dinda Agnes Audia Gunawan', 'JUR01', 2015, '349273836700723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'P', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050071', '202cb962ac59075b964b07152d234b70', 'Dini Quratul Aeni', 'JUR01', 2015, '744445836700723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'P', 'Islam', '082317327321', 'SMAN 1 PANGANDARAN', 2015),
('1137050072', '202cb962ac59075b964b07152d234b70', 'Dinurrahman Falih', 'JUR01', 2015, '615081836700723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050073', '202cb962ac59075b964b07152d234b70', 'Egi Andriana', 'JUR01', 2015, '373779836700723419kecil_8847961220208251childrens-dentistry.jpg', 'sadfdsa', 'Ciamis', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050074', '202cb962ac59075b964b07152d234b70', 'Eka Aji Prastiwi', 'JUR01', 2015, '743682836700723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'P', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050075', '202cb962ac59075b964b07152d234b70', 'Eldi Irawan', 'JUR01', 2015, '297546836700723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 PANGANDARAN', 2015),
('1137050076', '202cb962ac59075b964b07152d234b70', 'Emas Rosminasih', 'JUR01', 2015, '215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'P', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050077', '202cb962ac59075b964b07152d234b70', 'Emma Syafitri Muntaha', 'JUR01', 2015, '886840215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'P', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050078', '202cb962ac59075b964b07152d234b70', 'Enung Nurjanah', 'JUR01', 2015, '479888215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'P', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050079', '202cb962ac59075b964b07152d234b70', 'Erma Ramadhani', 'JUR01', 2015, '106506215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'P', 'Islam', '082317327321', 'SMAN 1 PANGANDARAN', 2015),
('1137050080', '202cb962ac59075b964b07152d234b70', 'Fadliyadi Jezria', 'JUR01', 2015, '704681215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050081', '202cb962ac59075b964b07152d234b70', 'Fahrizal Ikbarsah', 'JUR01', 2015, '265136215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050082', '202cb962ac59075b964b07152d234b70', 'Faisal Agung Perdana', 'JUR01', 2015, '526641215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050083', '202cb962ac59075b964b07152d234b70', 'Faisal Hari Salam', 'JUR01', 2015, '765075215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050084', '202cb962ac59075b964b07152d234b70', 'Fajar Fakhran Ramadhan', 'JUR01', 2015, '801239215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 PANGANDARAN', 2015),
('1137050085', '202cb962ac59075b964b07152d234b70', 'Fajri Fathurrahman', 'JUR01', 2015, '852416215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050086', '202cb962ac59075b964b07152d234b70', 'Fajril Umam', 'JUR01', 2015, '352691215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Bandung', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 PANGANDARAN', 2015),
('1137050087', '202cb962ac59075b964b07152d234b70', 'Fauji  Muzaki', 'JUR01', 2015, '367004215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050088', '202cb962ac59075b964b07152d234b70', 'Fauzan Kamil', 'JUR01', 2015, '7239681220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050089', '202cb962ac59075b964b07152d234b70', 'Ferdinand Pritisen', 'JUR01', 2015, '492431215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Bandung', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050090', '202cb962ac59075b964b07152d234b70', 'Fikri Nurcholis', 'JUR01', 2015, '926788167724463806kecil_4288941220208251childrens-dentistry.jpg', 'sadfdsa', 'Ciamis', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050091', '202cb962ac59075b964b07152d234b70', 'Finna Monica', 'JUR01', 2015, '506042167724463806kecil_4288941220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'P', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050092', '202cb962ac59075b964b07152d234b70', 'Firman Maulana', 'JUR01', 2015, '191619167724463806kecil_4288941220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 PANGANDARAN', 2015),
('1137050093', '202cb962ac59075b964b07152d234b70', 'Firman Rahman', 'JUR01', 2015, '5289301220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050094', '202cb962ac59075b964b07152d234b70', 'Galih Fathul Rohmi', 'JUR01', 2015, '717681786590kecil_8946228847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 PANGANDARAN', 2015),
('1137050095', '202cb962ac59075b964b07152d234b70', 'Gani Abdullah', 'JUR01', 2015, '275939167724463806kecil_4288941220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050096', '202cb962ac59075b964b07152d234b70', 'Gani Muhamad Nurdin', 'JUR01', 2015, '422943786590kecil_8946228847961220208251childrens-dentistry.jpg', 'sadfdsa', 'Ciamis', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050097', '202cb962ac59075b964b07152d234b70', 'Gendra Putra Yasfa', 'JUR01', 2015, '694122215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050098', '202cb962ac59075b964b07152d234b70', 'Gery Septyan Amyad', 'JUR01', 2015, '270446215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050099', '202cb962ac59075b964b07152d234b70', 'Hadra Fathaki', 'JUR01', 2015, '136688215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 PANGANDARAN', 2015),
('1137050100', '202cb962ac59075b964b07152d234b70', 'Haristmawati Fadhillah', 'JUR01', 2015, '666381167724463806kecil_4288941220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'P', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050101', '202cb962ac59075b964b07152d234b70', 'Harry Apaluo Suprayogi', 'JUR01', 2015, '324859215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050102', '202cb962ac59075b964b07152d234b70', 'Hendri Prabowo', 'JUR01', 2015, '583312215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 PANGANDARAN', 2015),
('1137050103', '202cb962ac59075b964b07152d234b70', 'Hindun Siti Hodijah', 'JUR01', 2015, '551605215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'P', 'Islam', '082317327321', 'SMAN 1 PANGANDARAN', 2015),
('1137050104', '202cb962ac59075b964b07152d234b70', 'Ihfad Ahmad Nauval', 'JUR01', 2015, '954833215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050105', '202cb962ac59075b964b07152d234b70', 'Ihsan Abdurahman', 'JUR01', 2015, '578643215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 PANGANDARAN', 2015),
('1137050106', '202cb962ac59075b964b07152d234b70', 'Ikram Awaludin', 'JUR01', 2015, '808288215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Bandung', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 PANGANDARAN', 2015),
('1137050107', '202cb962ac59075b964b07152d234b70', 'Ilham Aliyudin', 'JUR01', 2015, '3864441220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050108', '202cb962ac59075b964b07152d234b70', 'Ilyas Ahsan', 'JUR01', 2015, '14770215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Bandung', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 PANGANDARAN', 2015),
('1137050109', '202cb962ac59075b964b07152d234b70', 'Imam Muttaqin', 'JUR01', 2015, '924224215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 PANGANDARAN', 2015),
('1137050110', '202cb962ac59075b964b07152d234b70', 'Imam Ramdhan Hamzah', 'JUR01', 2015, '39123215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Bandung', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 PANGANDARAN', 2015),
('1137050111', '202cb962ac59075b964b07152d234b70', 'Imas Riani', 'JUR01', 2015, '859954215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Bandung', '2015-01-06', 'P', 'Islam', '082317327321', 'SMAN 1 PANGANDARAN', 2015),
('1137050112', '202cb962ac59075b964b07152d234b70', 'Indra Fallah', 'JUR01', 2015, '689941167724463806kecil_4288941220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050113', '202cb962ac59075b964b07152d234b70', 'Insan Rizky Susanto', 'JUR01', 2015, '330352215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'L', 'Islam', '87361287537', 'SMAN 1 Bandung', 2015),
('1137050114', '202cb962ac59075b964b07152d234b70', 'Irfan Abdul Hamid', 'JUR01', 2015, '869567215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050115', '202cb962ac59075b964b07152d234b70', 'Irham Ramdani', 'JUR01', 2015, '690887215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050116', '202cb962ac59075b964b07152d234b70', 'Irma Apriliani Dahlia', 'JUR01', 2015, '324096215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Bandung', '2015-01-06', 'P', 'Islam', '082317327321', 'SMAN 1 PANGANDARAN', 2015),
('1137050117', '202cb962ac59075b964b07152d234b70', 'Irsyadul Ibad', 'JUR01', 2015, '265777167724463806kecil_4288941220208251childrens-dentistry.jpg', 'Bandung', 'Bandung', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 PANGANDARAN', 2015),
('1137050118', '202cb962ac59075b964b07152d234b70', 'Ivan Adrian', 'JUR01', 2015, '393371215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 PANGANDARAN', 2015),
('1137050119', '202cb962ac59075b964b07152d234b70', 'Iwan Bahtiar', 'JUR01', 2015, '97991215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050120', '202cb962ac59075b964b07152d234b70', 'Judith Chira Patria', 'JUR01', 2015, '760986215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050121', '202cb962ac59075b964b07152d234b70', 'Junaedi', 'JUR01', 2015, '699249215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Bandung', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 PANGANDARAN', 2015),
('1137050122', '202cb962ac59075b964b07152d234b70', 'Kherma Yunita Sari', 'JUR01', 2015, '204284215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Bandung', '2015-01-06', 'P', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050123', '202cb962ac59075b964b07152d234b70', 'Khrisna Reza Fauzi', 'JUR01', 2015, '800018215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Bandung', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 PANGANDARAN', 2015),
('1137050124', '202cb962ac59075b964b07152d234b70', 'Kori Carda Puspita', 'JUR01', 2015, '344360215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'P', 'Islam', '082317327321', 'SMAN 1 PANGANDARAN', 2015),
('1137050126', '202cb962ac59075b964b07152d234b70', 'M. Arkhan Maulana Bastian', 'JUR01', 2015, '3960571220208251childrens-dentistry.jpg', 'Bandung', 'Bandung', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050127', '202cb962ac59075b964b07152d234b70', 'M. Dwiki Septian O.', 'JUR01', 2015, '15716215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050128', '202cb962ac59075b964b07152d234b70', 'M. Fariz Ihsan', 'JUR01', 2015, '917968215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050129', '202cb962ac59075b964b07152d234b70', 'M. Irfan Dwi Ramdhani', 'JUR01', 2015, '435333215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Bandung', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 PANGANDARAN', 2015),
('1137050130', '202cb962ac59075b964b07152d234b70', 'M. Ramdan Gumelar', 'JUR01', 2015, '562438786590kecil_8946228847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 PANGANDARAN', 2015),
('1137050131', '202cb962ac59075b964b07152d234b70', 'Mahmud Hidayatulloh', 'JUR01', 2015, '4638361220208251childrens-dentistry.jpg', 'Bandung', 'Bandung', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 PANGANDARAN', 2015),
('1137050132', '202cb962ac59075b964b07152d234b70', 'Marthin Cosesa', 'JUR01', 2015, '825561215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 PANGANDARAN', 2015),
('1137050133', '202cb962ac59075b964b07152d234b70', 'Masyhur Faruqi Al-R', 'JUR01', 2015, '1754451220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050134', '202cb962ac59075b964b07152d234b70', 'Maya Musthopa', 'JUR01', 2015, '7971801220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-06', 'P', 'Islam', '87361287537', 'SMAN 1 Bandung', 2015),
('1137050135', '202cb962ac59075b964b07152d234b70', 'Melati Mawardina', 'JUR01', 2015, '363128215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Bandung', '2015-01-06', 'P', 'Islam', '082317327321', 'SMAN 1 PANGANDARAN', 2015),
('1137050136', '202cb962ac59075b964b07152d234b70', 'Metiara Pujayanti', 'JUR01', 2015, '910888215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Bandung', '2015-01-06', 'P', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050137', '202cb962ac59075b964b07152d234b70', 'Mifta Ardianti', 'JUR01', 2015, '288604215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-07', 'P', 'Islam', '082317327321', 'SMAN 1 PANGANDARAN', 2015),
('1137050138', '202cb962ac59075b964b07152d234b70', 'Moch. Januar Taufik R.', 'JUR01', 2015, '694030215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Bandung', '2015-01-07', 'L', 'Islam', '082317327321', 'SMAN 1 PANGANDARAN', 2015),
('1137050139', '202cb962ac59075b964b07152d234b70', 'Mochamad Iqbal Munawar', 'JUR01', 2015, '432342215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Bandung', '2015-01-07', 'L', 'Islam', '082317327321', 'SMAN 1 PANGANDARAN', 2015),
('1137050140', '202cb962ac59075b964b07152d234b70', 'Mochammad Fiqri J.', 'JUR01', 2015, '243560215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-07', 'L', 'Islam', '082317327321', 'SMAN 1 PANGANDARAN', 2015),
('1137050141', '202cb962ac59075b964b07152d234b70', 'Moh. Asep Syahroni', 'JUR01', 2015, '346740215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-07', 'L', 'Islam', '082317327321', 'SMAN 1 PANGANDARAN', 2015),
('1137050142', '202cb962ac59075b964b07152d234b70', 'Mohamad Denis Juliansyah', 'JUR01', 2015, '890228215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Bandung', '2015-01-07', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050143', '202cb962ac59075b964b07152d234b70', 'Mohammad Hanif Hilmy', 'JUR01', 2015, '489746215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Bandung', '2015-01-07', 'L', 'Islam', '082317327321', 'SMAN 1 PANGANDARAN', 2015),
('1137050144', '202cb962ac59075b964b07152d234b70', 'Muh. Gina Pathu Robani', 'JUR01', 2015, '9063215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-07', 'L', 'Islam', '082317327321', 'SMAN 1 PANGANDARAN', 2015),
('1137050145', '202cb962ac59075b964b07152d234b70', 'Muhamad Fakih Nuzli', 'JUR01', 2015, '349060215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-07', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050146', '202cb962ac59075b964b07152d234b70', 'Muhamad Fary Pratama', 'JUR01', 2015, '455535215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Bandung', '2015-01-07', 'L', 'Islam', '082317327321', 'SMAN 1 PANGANDARAN', 2015),
('1137050147', '202cb962ac59075b964b07152d234b70', 'Muhamad Rangga Setia Persada', 'JUR01', 2015, '170776215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Bandung', '2015-01-07', 'L', 'Islam', '082317327321', 'SMAN 1 PANGANDARAN', 2015),
('1137050148', '202cb962ac59075b964b07152d234b70', 'Muhamad Yunus', 'JUR01', 2015, '53863215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-07', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050149', '202cb962ac59075b964b07152d234b70', 'Muhammad Alfan Azkiya', 'JUR01', 2015, '794738215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Bandung', '2015-01-07', 'L', 'Islam', '082317327321', 'SMAN 1 PANGANDARAN', 2015),
('1137050150', '202cb962ac59075b964b07152d234b70', 'Muhammad Ali Ridha', 'JUR01', 2015, '347015215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Bandung', '2015-01-07', 'L', 'Islam', '082317327321', 'SMAN 1 PANGANDARAN', 2015),
('1137050125', '202cb962ac59075b964b07152d234b70', 'Luthfi Muarif Yahya', 'JUR01', 2015, '618164215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-07', 'L', 'Islam', '87361287537', 'SMAN 1 Bandung', 2015),
('1137050151', '202cb962ac59075b964b07152d234b70', 'Muhammad Fadli A.', 'JUR01', 2015, '256622215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Bandung', '2015-01-07', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050152', '202cb962ac59075b964b07152d234b70', 'Muhammad Fahrurrozi', 'JUR01', 2015, '582946215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Bandung', '2015-01-07', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050153', '202cb962ac59075b964b07152d234b70', 'Muhammad Fikri Lazuardi', 'JUR01', 2015, '199188215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-07', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050154', '202cb962ac59075b964b07152d234b70', 'Muhammad Hasanudin H.', 'JUR01', 2015, '478881215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Bandung', '2015-01-07', 'L', 'Islam', '082317327321', 'SMAN 1 PANGANDARAN', 2015),
('1137050155', '202cb962ac59075b964b07152d234b70', 'Muhammad Iqbal Amaludin', 'JUR01', 2015, '887359215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-07', 'L', 'Islam', '082317327321', 'SMAN 1 PANGANDARAN', 2015),
('1137050156', '202cb962ac59075b964b07152d234b70', 'Muhammad Mahmud S.', 'JUR01', 2015, '895812215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Bandung', '2015-01-07', 'L', 'Islam', '082317327321', 'SMAN 1 PANGANDARAN', 2015),
('1137050157', '202cb962ac59075b964b07152d234b70', 'Muhammad Mizwar', 'JUR01', 2015, '614105215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-07', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050158', '202cb962ac59075b964b07152d234b70', 'Muhammad Mursyid Naufal', 'JUR01', 2015, '767333215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Bandung', '2015-01-07', 'L', 'Islam', '082317327321', 'SMAN 1 PANGANDARAN', 2015),
('1137050159', '202cb962ac59075b964b07152d234b70', 'Muhammad Noval', 'JUR01', 2015, '141143167724463806kecil_4288941220208251childrens-dentistry.jpg', 'Bandung', 'Bandung', '2015-01-07', 'L', 'Islam', '082317327321', 'SMAN 1 PANGANDARAN', 2015),
('1137050160', '202cb962ac59075b964b07152d234b70', 'Muhammad Nurman Saleh', 'JUR01', 2015, '120788836700723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-07', 'L', 'Islam', '082317327321', 'SMAN 1 PANGANDARAN', 2015),
('1137050161', '202cb962ac59075b964b07152d234b70', 'Muhammad Rama Abdillah', 'JUR01', 2015, '448944215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Bandung', '2015-01-07', 'L', 'Islam', '082317327321', 'SMAN 1 PANGANDARAN', 2015),
('1137050162', '202cb962ac59075b964b07152d234b70', 'Muhammad Ridwan', 'JUR01', 2015, '827270215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-07', 'L', 'Islam', '082317327321', 'SMAN 1 PANGANDARAN', 2015),
('1137050163', '202cb962ac59075b964b07152d234b70', 'Muhammad Syatibie', 'JUR01', 2015, '486724215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-07', 'L', 'Islam', '082317327321', 'SMAN 1 PANGANDARAN', 2015),
('1137050164', '202cb962ac59075b964b07152d234b70', 'Nasta Aulia', 'JUR01', 2015, '351623215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Bandung', '2015-01-07', 'P', 'Islam', '082317327321', 'SMAN 1 PANGANDARAN', 2015),
('1137050165', '202cb962ac59075b964b07152d234b70', 'Naufal Ghafura Abdi Ray', 'JUR01', 2015, '922454215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Bandung', '2015-01-07', 'L', 'Islam', '082317327321', 'SMAN 1 PANGANDARAN', 2015),
('1137050166', '202cb962ac59075b964b07152d234b70', 'Nazzal Ramzan Arifin', 'JUR01', 2015, '502441215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Bandung', '2015-01-07', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050167', '202cb962ac59075b964b07152d234b70', 'Nelita A.', 'JUR01', 2015, '892852215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-07', 'P', 'Islam', '082317327321', 'SMAN 1 PANGANDARAN', 2015),
('1137050168', '202cb962ac59075b964b07152d234b70', 'Nida Nuroni Wasilah', 'JUR01', 2015, '182067215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Bandung', '2015-01-07', 'P', 'Islam', '082317327321', 'SMAN 1 PANGANDARAN', 2015),
('1137050169', '202cb962ac59075b964b07152d234b70', 'Nur Aida Fitri', 'JUR01', 2015, '753387215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-07', 'P', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050170', '202cb962ac59075b964b07152d234b70', 'Nur Amalina Fauziyah', 'JUR01', 2015, '705871215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-07', 'P', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050171', '202cb962ac59075b964b07152d234b70', 'Nur Fadilah', 'JUR01', 2015, '160491215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Bandung', '2015-01-07', 'P', 'Islam', '082317327321', 'SMAN 1 PANGANDARAN', 2015),
('1137050172', '202cb962ac59075b964b07152d234b70', 'Nur Jati Luhung M.', 'JUR01', 2015, '573486215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Bandung', '2015-01-07', 'L', 'Islam', '082317327321', 'SMAN 1 PANGANDARAN', 2015),
('1137050173', '202cb962ac59075b964b07152d234b70', 'Nuriana Santiara', 'JUR01', 2015, '261749215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-07', 'L', 'Islam', '082317327321', 'SMAN 1 PANGANDARAN', 2015),
('1137050174', '202cb962ac59075b964b07152d234b70', 'Nurshabah Arif Rahman', 'JUR01', 2015, '516784167724463806kecil_4288941220208251childrens-dentistry.jpg', 'Bandung', 'Bandung', '2015-01-07', 'L', 'Islam', '87361287537', 'SMAN 1 Bandung', 2015),
('1137050175', '202cb962ac59075b964b07152d234b70', 'Peri Purnama', 'JUR01', 2015, '862518215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-07', 'L', 'Islam', '082317327321', 'SMAN 1 PANGANDARAN', 2015),
('1137050176', '202cb962ac59075b964b07152d234b70', 'Qoriah Asri Lestari', 'JUR01', 2015, '156860167724463806kecil_4288941220208251childrens-dentistry.jpg', 'Bandung', 'Bandung', '2015-01-07', 'P', 'Islam', '082317327321', 'SMAN 1 PANGANDARAN', 2015),
('1137050177', '202cb962ac59075b964b07152d234b70', 'Rahadian Irvan Moch. Taufiq', 'JUR01', 2015, '662017215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-07', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050178', '202cb962ac59075b964b07152d234b70', 'Ramdhan Suseto', 'JUR01', 2015, '708557215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Bandung', '2015-01-07', 'L', 'Islam', '082317327321', 'SMAN 1 PANGANDARAN', 2015),
('1137050179', '202cb962ac59075b964b07152d234b70', 'Ratno Nitidisastro', 'JUR01', 2015, '78216215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Bandung', '2015-01-07', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050180', '202cb962ac59075b964b07152d234b70', 'Redho Ridhallah Akbar', 'JUR01', 2015, '730468215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Bandung', '2015-01-07', 'L', 'Islam', '082317327321', 'SMAN 1 PANGANDARAN', 2015),
('1137050181', '202cb962ac59075b964b07152d234b70', 'Reppi Apandi Nur', 'JUR01', 2015, '997833215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Bandung', '2015-01-07', 'L', 'Islam', '082317327321', 'SMAN 1 PANGANDARAN', 2015),
('1137050182', '202cb962ac59075b964b07152d234b70', 'Ridha Shabrina', 'JUR01', 2015, '874938167724463806kecil_4288941220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-07', 'P', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050183', '202cb962ac59075b964b07152d234b70', 'Ridwan Saprudin', 'JUR01', 2015, '526336215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Bandung', '2015-01-07', 'L', 'Islam', '082317327321', 'SMAN 1 PANGANDARAN', 2015),
('1137050184', '202cb962ac59075b964b07152d234b70', 'Rifa Bayu Zulfanida', 'JUR01', 2015, '638061215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Bandung', '2015-01-07', 'L', 'Islam', '082317327321', 'SMAN 1 PANGANDARAN', 2015),
('1137050185', '202cb962ac59075b964b07152d234b70', 'Rifa Mardiana Sofa', 'JUR01', 2015, '737945167724463806kecil_4288941220208251childrens-dentistry.jpg', 'Bandung', 'Bandung', '2015-01-07', 'P', 'Islam', '082317327321', 'SMAN 1 PANGANDARAN', 2015),
('1137050186', '202cb962ac59075b964b07152d234b70', 'Rifqi Azhar Nugraha', 'JUR01', 2015, '109680215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Bandung', '2015-01-07', 'L', 'Islam', '082317327321', 'SMAN 1 PANGANDARAN', 2015),
('1137050187', '202cb962ac59075b964b07152d234b70', 'Rinaldi Aditama', 'JUR01', 2015, '425628215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Bandung', '2015-01-07', 'L', 'Islam', '082317327321', 'SMAN 1 PANGANDARAN', 2015),
('1137050188', '202cb962ac59075b964b07152d234b70', 'Rini Amelia', 'JUR01', 2015, '723388215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-07', 'P', 'Islam', '082317327321', 'SMAN 1 PANGANDARAN', 2015),
('1137050189', '202cb962ac59075b964b07152d234b70', 'Risal Alfiyassin', 'JUR01', 2015, '851104215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-07', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050190', '202cb962ac59075b964b07152d234b70', 'Rival Putra Yusni', 'JUR01', 2015, '6530215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Bandung', '2015-01-07', 'L', 'Islam', '082317327321', 'SMAN 1 PANGANDARAN', 2015),
('1137050191', '202cb962ac59075b964b07152d234b70', 'Rizal Bagus Nur A.', 'JUR01', 2015, '494842215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-07', 'L', 'Islam', '87361287537', 'SMAN 1 PANGANDARAN', 2015),
('1137050192', '202cb962ac59075b964b07152d234b70', 'Rizaldi Utama Arsaf', 'JUR01', 2015, '330200215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Bandung', '2015-01-07', 'L', 'Islam', '082317327321', 'SMAN 1 PANGANDARAN', 2015),
('1137050193', '202cb962ac59075b964b07152d234b70', 'Rizki Fauzi Abdul J.', 'JUR01', 2015, '806060215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-07', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050194', '202cb962ac59075b964b07152d234b70', 'Rizki Fauzi Rahman', 'JUR01', 2015, '659240215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Bandung', '2015-01-07', 'L', 'Islam', '082317327321', 'SMAN 1 PANGANDARAN', 2015),
('1137050195', '202cb962ac59075b964b07152d234b70', 'Rizki Septian Adipradana', 'JUR01', 2015, '952728215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Bandung', '2015-01-07', 'L', 'Islam', '082317327321', 'SMAN 1 PANGANDARAN', 2015),
('1137050196', '202cb962ac59075b964b07152d234b70', 'Rizky Novita Gaossalma', 'JUR01', 2015, '302246215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Bandung', '2015-01-07', 'L', 'Islam', '082317327321', 'SMAN 1 PANGANDARAN', 2015),
('1137050197', '202cb962ac59075b964b07152d234b70', 'Rizqy Arrijal M.', 'JUR01', 2015, '571563215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-07', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050198', '202cb962ac59075b964b07152d234b70', 'Robbi Restu Septiandi', 'JUR01', 2015, '661560215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Bandung', '2015-01-07', 'L', 'Islam', '87361287537', 'SMAN 1 Bandung', 2015),
('1137050199', '202cb962ac59075b964b07152d234b70', 'Robi Maryadi', 'JUR01', 2015, '518035215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-07', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050200', '202cb962ac59075b964b07152d234b70', 'Rudi Agustiani', 'JUR01', 2015, '983276215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Bandung', '2015-01-07', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050201', '202cb962ac59075b964b07152d234b70', 'Saep Subhan', 'JUR01', 2015, '616363167724463806kecil_4288941220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-07', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050202', '202cb962ac59075b964b07152d234b70', 'Sandi Gustian', 'JUR01', 2015, '107238215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Bandung', '2015-01-07', 'L', 'Islam', '082317327321', 'SMAN 1 PANGANDARAN', 2015),
('1137050203', '202cb962ac59075b964b07152d234b70', 'Sany Nima Fauzia', 'JUR01', 2015, '409515215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-07', 'P', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050204', '202cb962ac59075b964b07152d234b70', 'Satria Chandra Kusuma', 'JUR01', 2015, '217041215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Bandung', '2015-01-07', 'L', 'Islam', '082317327321', 'SMAN 1 PANGANDARAN', 2015),
('1137050205', '202cb962ac59075b964b07152d234b70', 'Seli Aprilia', 'JUR01', 2015, '909210215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Bandung', '2015-01-07', 'P', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050206', '202cb962ac59075b964b07152d234b70', 'Selvia Rahmawati', 'JUR01', 2015, '590026215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Bandung', '2015-01-07', 'P', 'Islam', '082317327321', 'SMAN 1 PANGANDARAN', 2015),
('1137050207', '202cb962ac59075b964b07152d234b70', 'Syahril Aulia Rahman', 'JUR01', 2015, '345916215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-07', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015);
INSERT INTO `mahasiswa` (`nim`, `password`, `nama`, `kdjur`, `angkatan`, `foto`, `alamat`, `tplhr`, `tglhr`, `jekel`, `agama`, `notelp`, `asalsekolah`, `thlulus`) VALUES
('1137050208', '202cb962ac59075b964b07152d234b70', 'Syarief Aditya Eka P.', 'JUR01', 2015, '347290215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Bandung', '2015-01-07', 'L', 'Islam', '082317327321', 'SMAN 1 PANGANDARAN', 2015),
('1137050209', '202cb962ac59075b964b07152d234b70', 'Syita Ulfah', 'JUR01', 2015, '918853215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-07', 'P', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050210', '202cb962ac59075b964b07152d234b70', 'Tanti Siti Nurjanah', 'JUR01', 2015, '203674167724463806kecil_4288941220208251childrens-dentistry.jpg', 'Bandung', 'Bandung', '2015-01-07', 'P', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050211', '202cb962ac59075b964b07152d234b70', 'Temy Ramdhan', 'JUR01', 2015, '545989167724463806kecil_4288941220208251childrens-dentistry.jpg', 'sadfdsa', 'Bandung', '2015-01-07', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050212', '202cb962ac59075b964b07152d234b70', 'Tengku Muhamad A. N.', 'JUR01', 2015, '217773215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-07', 'L', 'Islam', '082317327321', 'SMAN 1 PANGANDARAN', 2015),
('1137050213', '202cb962ac59075b964b07152d234b70', 'Tito Nugroho', 'JUR01', 2015, '614044215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Bandung', '2015-01-07', 'L', 'Islam', '082317327321', 'SMAN 1 PANGANDARAN', 2015),
('1137050214', '202cb962ac59075b964b07152d234b70', 'Tri Muhammad Hasbi', 'JUR01', 2015, '541931215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Bandung', '2015-01-07', 'L', 'Islam', '082317327321', 'SMAN 1 PANGANDARAN', 2015),
('1137050215', '202cb962ac59075b964b07152d234b70', 'Triana Giantara', 'JUR01', 2015, '728485215545723419kecil_8847961220208251childrens-dentistry.jpg', 'sadfdsa', 'Ciamis', '2015-01-07', 'L', 'Islam', '87361287537', 'SMAN 1 Bandung', 2015),
('1137050216', '202cb962ac59075b964b07152d234b70', 'Trifan Ghani Nugraha', 'JUR01', 2015, '172241215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Bandung', '2015-01-07', 'L', 'Islam', '87361287537', 'SMAN 1 Bandung', 2015),
('1137050217', '202cb962ac59075b964b07152d234b70', 'Tubagus Faris Wahdani', 'JUR01', 2015, '463531215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-07', 'L', 'Islam', '082317327321', 'SMAN 1 PANGANDARAN', 2015),
('1137050218', '202cb962ac59075b964b07152d234b70', 'Wahyu Zulfikar', 'JUR01', 2015, '698547215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Bandung', '2015-01-07', 'L', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050219', '202cb962ac59075b964b07152d234b70', 'Wendi Agustian', 'JUR01', 2015, '112152215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Bandung', '2015-01-07', 'L', 'Islam', '87361287537', 'SMAN 1 Bandung', 2015),
('1137050220', '202cb962ac59075b964b07152d234b70', 'Widiya Nurfitri', 'JUR01', 2015, '54443215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-07', 'P', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050221', '202cb962ac59075b964b07152d234b70', 'Yelli Siti Nurliani', 'JUR01', 2015, '436065167724463806kecil_4288941220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-07', 'P', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050222', '202cb962ac59075b964b07152d234b70', 'Yopan Yuliana', 'JUR01', 2015, '267272215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-07', 'L', 'Islam', '87361287537', 'SMAN 1 Bandung', 2015),
('1137050223', '202cb962ac59075b964b07152d234b70', 'Yufarri Hani', 'JUR01', 2015, '415740215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-07', 'P', 'Islam', '082317327321', 'SMAN 1 Bandung', 2015),
('1137050224', '202cb962ac59075b964b07152d234b70', 'Yusman Abdurohman Hilmansyah', 'JUR01', 2015, '208129215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-07', 'L', 'Islam', '87361287537', 'SMAN 1 Bandung', 2015),
('1137050225', '202cb962ac59075b964b07152d234b70', 'Zainuri Mustofa', 'JUR01', 2015, '396215545723419kecil_8847961220208251childrens-dentistry.jpg', 'Bandung', 'Bandung', '2015-01-07', 'L', 'Islam', '082317327321', 'SMAN 1 PANGANDARAN', 2015),
('1137050300', '202cb962ac59075b964b07152d234b70', 'AAAAAAAAAAAAAA', 'JUR01', 2015, '415954463806kecil_4288941220208251childrens-dentistry.jpg', 'Bandung', 'Ciamis', '2015-01-09', 'L', 'Islam', '082317327321', 'SMAN 1 PANGANDARAN', 2015);

-- --------------------------------------------------------

--
-- Struktur dari tabel `matakuliah`
--

CREATE TABLE IF NOT EXISTS `matakuliah` (
  `kdmatkul` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `nmmatkul` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `sks` int(2) NOT NULL,
  `jenis` varchar(7) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `matakuliah`
--

INSERT INTO `matakuliah` (`kdmatkul`, `nmmatkul`, `sks`, `jenis`) VALUES
('FIS8101L', 'Praktikum Fisika Dasar', 1, 'Praktek'),
('IF8101', 'Pengantar Teknologi Informasi', 2, 'Teori'),
('UN8105', 'Pancasila Dan Kewarganegaraan', 2, 'Teori'),
('KIM8101', 'Kimia Dasar', 2, 'Teori'),
('MAT8101', 'Kalkulus 1', 3, 'Teori'),
('FIS8101', 'Fisika Dasar', 2, 'Teori'),
('UN8104', 'Bahasa Inggris', 2, 'Teori'),
('UN8103', 'Bahasa Indonesia', 2, 'Teori'),
('UN8102', 'Bahasa Arab I', 2, 'Teori'),
('UN8101', 'Al-Quran Dan Ilmu Tafsir', 2, 'Teori'),
('KIM8101L', 'Praktikum Kimia Dasar', 1, 'Praktek'),
('IF8301', 'Algoritma Dan Struktur Data', 2, 'Teori'),
('MAT8304', 'Logika Informatika', 3, 'Teori'),
('MAT8303', 'Matematika Diskrit', 3, 'Teori'),
('IF8301L', 'Praktikum Algoritma Dan Struktur Data', 1, 'Praktek'),
('EL8301L', 'Praktikum Teknik Digital', 1, 'Praktek'),
('MAT8301', 'Probabilitas Dan Statistika', 3, 'Teori'),
('UN8301', 'Sejarah Peradaban Islam', 2, 'Teori'),
('EL8301', 'Teknik Digital', 3, 'Teori'),
('705534', 'Etika Profesi', 2, 'Teori'),
('705538', 'Interpersonal Skill', 2, 'Teori'),
('IF8507', 'Komunikasi Antar Personel', 2, 'Teori'),
('705536', 'Pemrograman Berorientasi Objek', 3, 'Teori'),
('705537', 'Pemrograman Web II', 3, 'Teori'),
('705535', 'Rekayasa Perangkat Lunak II', 3, 'Teori'),
('705533', 'Riset Teknologi Informasi', 2, 'Teori'),
('705539', 'Teori Bahasa dan Otomata', 3, 'Teori'),
('705758', 'e-commerce', 3, 'Teori'),
('705740', 'Kewirausahaan', 2, 'Teori'),
('705759', 'Sistem Terdistribusi', 3, 'Teori'),
('705742', 'Wireless/Mobile Computing', 3, 'Teori');

-- --------------------------------------------------------

--
-- Struktur dari tabel `materibaru`
--

CREATE TABLE IF NOT EXISTS `materibaru` (
`id_materi` int(11) NOT NULL,
  `kdmatkul` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `kdjur` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `tahun` int(4) NOT NULL,
  `kdkelas` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `semester` int(2) NOT NULL,
  `ket` enum('Genap','Ganjil') COLLATE latin1_general_ci NOT NULL DEFAULT 'Genap',
  `kode_dosen` varchar(15) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=109 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `materibaru`
--

INSERT INTO `materibaru` (`id_materi`, `kdmatkul`, `kdjur`, `tahun`, `kdkelas`, `semester`, `ket`, `kode_dosen`) VALUES
(86, '705538', 'JUR01', 2015, 'AK', 5, 'Ganjil', 'DOS15'),
(85, 'FIS8101', 'JUR01', 2015, 'AK', 1, 'Ganjil', 'DOS12'),
(84, '705534', 'JUR01', 2015, 'AK', 5, 'Ganjil', 'DOS29'),
(83, '705758', 'JUR01', 2015, 'AK', 7, 'Ganjil', 'DOS31'),
(82, 'UN8104', 'JUR01', 2015, 'AK', 1, 'Ganjil', 'DOS05'),
(81, 'UN8103', 'JUR01', 2015, 'AK', 1, 'Ganjil', 'DOS04'),
(80, 'UN8102', 'JUR01', 2015, 'AK', 1, 'Ganjil', 'DOS03'),
(79, 'IF8301', 'JUR01', 2015, 'AK', 3, 'Ganjil', 'DOS02'),
(78, 'UN8101', 'JUR01', 2015, 'AK', 1, 'Ganjil', 'DOS01'),
(77, '3D0010', 'JUR01', 2015, 'AK1', 1, 'Ganjil', 'DOS01'),
(76, 'AA002', 'JUR01', 2015, 'AK', 1, 'Ganjil', 'DOS02'),
(87, 'MAT8101', 'JUR01', 2015, 'AK', 1, 'Ganjil', 'DOS16'),
(88, '705740', 'JUR01', 2015, 'AK', 7, 'Ganjil', 'DOS30'),
(89, 'KIM8101', 'JUR01', 2015, 'AK', 1, 'Ganjil', 'DOS16'),
(90, 'IF8507', 'JUR01', 2015, 'AK', 5, 'Ganjil', 'DOS20'),
(91, 'MAT8304', 'JUR01', 2015, 'AK', 5, 'Ganjil', 'DOS22'),
(92, 'MAT8303', 'JUR01', 2015, 'AK', 3, 'Ganjil', 'DOS19'),
(93, 'UN8105', 'JUR01', 2015, 'AK', 1, 'Ganjil', 'DOS10'),
(94, '705536', 'JUR01', 2015, 'AK', 5, 'Ganjil', 'DOS28'),
(95, '705537', 'JUR01', 2015, 'AK', 7, 'Ganjil', 'DOS18'),
(96, 'IF8101', 'JUR01', 2015, 'AK', 1, 'Ganjil', 'DOS15'),
(97, 'IF8301L', 'JUR01', 2015, 'AK', 3, 'Ganjil', 'DOS01'),
(98, 'FIS8101L', 'JUR01', 2015, 'AK', 1, 'Ganjil', 'DOS13'),
(99, 'KIM8101L', 'JUR01', 2015, 'AK', 1, 'Ganjil', 'DOS05'),
(100, 'EL8301L', 'JUR01', 2015, 'AK', 5, 'Ganjil', 'DOS11'),
(101, 'MAT8301', 'JUR01', 2015, 'AK', 3, 'Ganjil', 'DOS23'),
(102, '705535', 'JUR01', 2015, 'AK', 5, 'Ganjil', 'DOS26'),
(103, '705533', 'JUR01', 2015, 'AK', 7, 'Ganjil', 'DOS32'),
(104, 'UN8301', 'JUR01', 2015, 'AK', 3, 'Ganjil', 'DOS07'),
(105, '705759', 'JUR01', 2015, 'AK', 7, 'Ganjil', 'DOS15'),
(106, 'EL8301', 'JUR01', 2015, 'AK', 5, 'Ganjil', 'DOS25'),
(107, '705539', 'JUR01', 2015, 'AK', 3, 'Ganjil', 'DOS15'),
(108, '705742', 'JUR01', 2015, 'AK', 7, 'Ganjil', 'DOS32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `modul`
--

CREATE TABLE IF NOT EXISTS `modul` (
`id_modul` int(5) NOT NULL,
  `nama_modul` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `link` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `static_content` text COLLATE latin1_general_ci NOT NULL,
  `gambar` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `publish` enum('Y','N') COLLATE latin1_general_ci NOT NULL,
  `status` enum('user','admin') COLLATE latin1_general_ci NOT NULL,
  `aktif` enum('Y','N') COLLATE latin1_general_ci NOT NULL,
  `urutan` int(5) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `modul`
--

INSERT INTO `modul` (`id_modul`, `nama_modul`, `link`, `static_content`, `gambar`, `publish`, `status`, `aktif`, `urutan`) VALUES
(1, 'Kelola Data User', '?module=user', '', '', 'N', 'admin', 'Y', 1),
(2, 'Kelola Modul', '?module=modul', '', '', 'N', 'admin', 'Y', 2),
(3, 'Fakultas', '?module=fakultas', '', '', 'N', 'user', 'Y', 3),
(4, 'Jurusan', '?module=jurusan', '', '', 'N', 'user', 'Y', 4),
(9, 'Mahasiswa', '?module=mahasiswa', '', '', 'N', 'user', 'Y', 9),
(10, 'Dosen', '?module=dosen', '', '', 'N', 'user', 'Y', 10),
(12, 'Mata Kuliah', '?module=matakul', '', '', 'N', 'user', 'Y', 11),
(13, 'Kelas', '?module=kelas', '', '', 'N', 'user', 'Y', 9),
(15, 'Jadwal', '?module=jadwal', '', '', 'N', 'user', 'Y', 14),
(16, 'Kurikulum', '?module=materibaru', '', '', 'N', 'user', 'Y', 11),
(18, 'Dosen Mengajar', '?module=dosenmengajar', '', '', 'N', 'user', 'Y', 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `modul_dosen`
--

CREATE TABLE IF NOT EXISTS `modul_dosen` (
`id_modul` int(11) NOT NULL,
  `nama_modul` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `link` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `static_content` text COLLATE latin1_general_ci NOT NULL,
  `gambar` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `publish` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'N',
  `aktif` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y',
  `urutan` int(5) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `modul_dosen`
--

INSERT INTO `modul_dosen` (`id_modul`, `nama_modul`, `link`, `static_content`, `gambar`, `publish`, `aktif`, `urutan`) VALUES
(2, 'Jadwal Kuliah', '?module=jadwal', '', '', 'N', 'Y', 3),
(3, 'Data Mengajar', '?module=dosenmengajar', '', '', 'N', 'Y', 4),
(4, 'Nilai Mahasiswa', '?module=nilai', '', '', 'N', 'Y', 5),
(5, 'Data KRS', '?module=krs', '', '', 'N', 'Y', 6),
(6, 'Data Saya', '?module=dosen', '', '', 'N', 'Y', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `modul_mahasiswa`
--

CREATE TABLE IF NOT EXISTS `modul_mahasiswa` (
`id_modul` int(11) NOT NULL,
  `nama_modul` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `link` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `static_content` text COLLATE latin1_general_ci NOT NULL,
  `gambar` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `publish` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'N',
  `aktif` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y',
  `urutan` int(5) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `modul_mahasiswa`
--

INSERT INTO `modul_mahasiswa` (`id_modul`, `nama_modul`, `link`, `static_content`, `gambar`, `publish`, `aktif`, `urutan`) VALUES
(1, 'Data Saya', '?module=mahasiswa', '', '', 'N', 'Y', 1),
(2, 'Lihat Nilai', '?module=nilai', '', '', 'N', 'Y', 2),
(3, 'Kartu Rencana Studi', '?module=krs', '', '', 'N', 'Y', 3),
(4, 'Jadwal Kuliah', '?module=jadwal', '', '', 'N', 'Y', 4),
(5, 'Cetak KRS', '?module=cetak_krs', '', '', 'N', 'Y', 6),
(6, 'Cetak Transkrip Nilai', '?module=cetaknilai', '', '', 'N', 'Y', 7),
(7, 'Cetak KHS', '?module=cetakkhs', '', '', 'N', 'Y', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE IF NOT EXISTS `nilai` (
`id_nilai` int(11) NOT NULL,
  `nim` varchar(18) COLLATE latin1_general_ci NOT NULL,
  `tahun` int(4) NOT NULL,
  `semester` int(2) NOT NULL,
  `ket` varchar(6) COLLATE latin1_general_ci NOT NULL,
  `kdjur` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `kdmatkul` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `kdkelas` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `kode_dosen` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `nilai` varchar(2) COLLATE latin1_general_ci NOT NULL,
  `angka_mutu` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id_user` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `nama_lengkap` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `no_telp` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `level` varchar(20) COLLATE latin1_general_ci NOT NULL DEFAULT 'user',
  `blokir` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'N'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `password`, `nama_lengkap`, `email`, `no_telp`, `level`, `blokir`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', 'madozahmad123@gmail.com', '082317327321', 'admin', 'N'),
('madoz', '202cb962ac59075b964b07152d234b70', 'Ahmadi Surahman', 'ahmadpsgw@yahoo.co.id', '082317327321', 'user', 'N');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosemengajar`
--
ALTER TABLE `dosemengajar`
 ADD PRIMARY KEY (`id_mengajar`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
 ADD PRIMARY KEY (`kode_dosen`);

--
-- Indexes for table `fakultas`
--
ALTER TABLE `fakultas`
 ADD PRIMARY KEY (`kdfak`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
 ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
 ADD PRIMARY KEY (`kdjur`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
 ADD PRIMARY KEY (`kdkelas`);

--
-- Indexes for table `krs`
--
ALTER TABLE `krs`
 ADD PRIMARY KEY (`id_krs`), ADD KEY `nim` (`nim`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
 ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `matakuliah`
--
ALTER TABLE `matakuliah`
 ADD PRIMARY KEY (`kdmatkul`);

--
-- Indexes for table `materibaru`
--
ALTER TABLE `materibaru`
 ADD PRIMARY KEY (`id_materi`);

--
-- Indexes for table `modul`
--
ALTER TABLE `modul`
 ADD PRIMARY KEY (`id_modul`);

--
-- Indexes for table `modul_dosen`
--
ALTER TABLE `modul_dosen`
 ADD PRIMARY KEY (`id_modul`);

--
-- Indexes for table `modul_mahasiswa`
--
ALTER TABLE `modul_mahasiswa`
 ADD PRIMARY KEY (`id_modul`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
 ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dosemengajar`
--
ALTER TABLE `dosemengajar`
MODIFY `id_mengajar` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=80;
--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `krs`
--
ALTER TABLE `krs`
MODIFY `id_krs` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=273;
--
-- AUTO_INCREMENT for table `materibaru`
--
ALTER TABLE `materibaru`
MODIFY `id_materi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=109;
--
-- AUTO_INCREMENT for table `modul`
--
ALTER TABLE `modul`
MODIFY `id_modul` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `modul_dosen`
--
ALTER TABLE `modul_dosen`
MODIFY `id_modul` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `modul_mahasiswa`
--
ALTER TABLE `modul_mahasiswa`
MODIFY `id_modul` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
