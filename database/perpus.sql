-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2020 at 08:45 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` int(9) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `tahun_terbit` varchar(4) NOT NULL,
  `isbn` varchar(100) NOT NULL,
  `jumlah_buku` int(100) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `tanggal_input` date NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `judul`, `pengarang`, `penerbit`, `tahun_terbit`, `isbn`, `jumlah_buku`, `lokasi`, `tanggal_input`, `gambar`) VALUES
(19, 'Winrar book', 'winrar inc', 'winrar', '1994', '', 1, 'Rak 4', '2020-06-09', 'Winrar_book.png'),
(21, 'Trojan', 'virus', 'virus', '2011', '', 14, 'Rak 1', '2020-06-09', 'Trojan.jpeg'),
(22, 'Pt adi consultin', 'ptaci', 'ptaci', '2020', '', 21, 'Rak 4', '2020-06-09', 'Pt_adi_consultin.jpeg'),
(24, 'Bela Negara', 'Prof. D .Syarifudin .MSi', 'Prof. D .Syarifudin .MSi', '2018', '', 29, 'Rak 3', '2020-06-09', 'Bela_Negara.jpg'),
(25, 'Kisah suti dari madura', 'Rusdi Maahari', '@STARBOOKSJOGJA', '2015', '', 9, 'Rak 1', '2020-06-09', 'Kisah_suti_dari_madura.jpg'),
(26, 'Dasar Pemograman', 'Informatika', 'Informatika', '2014', '', 12, 'Rak 4', '2020-06-10', 'Dasar_Pemograman.jpg'),
(27, 'Bela Negara', 'Prof. Dr. Syarifudin Tippe, M.Si', 'Airlangga', '2017', '', 10, 'Rak 3', '2020-06-10', 'Bela_Negara1.jpg'),
(28, 'Pemograman Sistem Pakar', 'Anik Andrian. M. Kom', 'Airlangga', '2016', '', 16, 'Rak 3', '2020-06-10', 'Pemograman_Sistem_Pakar.jpg'),
(29, 'Pemograman C++', 'R. H. Sianipar', 'Airlangga', '2001', '', 200, 'Rak 3', '2020-05-15', 'Pemograman_C++.jpg'),
(30, 'Algoritma Dan Pemograman', 'Rinaldi Munir', 'Informatika', '2004', '', 14, 'Rak 1', '2020-05-21', 'Algoritma_Dan_Pemograman.jpg'),
(31, 'Semua Ada Saatnya', 'Syaikh Mahmud Al-Mishri', 'Titian Sunnah', '2016', '', 52, 'Rak 1', '2020-05-30', 'Semua_Ada_Saatnya.jpg'),
(32, 'Buku Sakti Pemograman Web', 'Disik Setiawan', 'Didik', '2017', '', 30, 'Rak 3', '2020-05-29', 'Buku_Sakti_Pemograman_Web.jpg'),
(33, 'Aku Bangga Menjadi Tunanganmu', 'Santi Setyaningsih', 'Santi', '2010', '', 10, 'Rak 2', '2020-05-20', 'Aku_Bangga_Menjadi_Tunanganmu.jpg'),
(34, 'Bahasa Indonesia SD Kelas 1', 'Umri Nur\'aini Indriani', 'Daprtemen Pendidikan Nasional', '2012', '', 12, 'Rak 4', '2020-06-09', 'Bahasa_Indonesia_SD_Kelas_1.jpg'),
(35, 'Buku Harian Pencinta Malaikat', 'R. Rusandi', 'Telurursejati', '2020', '', 9, 'Rak 2', '2020-05-30', 'Buku_Harian_Pencinta_Malaikat.jpg'),
(36, 'Pendidikan & Keikhlasan era Modern', 'Dr. Mulia Rahman, MA', 'Pendidik Ikhlas', '2015', '', 8, 'Rak 2', '2020-06-10', 'Pendidikan_Keikhlasan_era_Modern.jpg'),
(37, 'Pemograman Web dengan Node.JS dan Javascript', 'Budi Raharjo', 'Informatika', '2018', '', 28, 'Rak 2', '2020-06-10', ''),
(38, 'Perahu Kertas', 'dia', 'Gue', '2020', '', 1, 'Rak 1', '2038-11-24', 'Perahu_Kertas.jpg'),
(39, 'Manurung', 'Sikutangan', 'Sikutangan', '2020', '', 1, 'Rak 1', '2020-06-10', 'Manurung.jpg'),
(40, 'Pemograman Bahasa Assembly', 'sulistiyani, S.Kom, M.Cs', 'Informatika', '2019', '', 12, 'Rak 1', '2020-06-10', 'Pemograman_Bahasa_Assembly.jpg'),
(41, 'Dasar Pemograman Web Front End', 'Agusriandi', 'informatika', '2017', '', 10, 'Rak 2', '2020-06-10', 'Dasar_Pemograman_Web_Front_End.jpg'),
(42, 'Web Dinamis PHP dan MySQL', 'Nugroho', 'Gam Media', '2018', '', 14, 'Rak 1', '2020-06-10', 'Web_Dinamis_PHP_dan_MySQL.jpg'),
(43, 'Pemograman Java Tingkat Lanjut', 'Agus Kurniawan', 'Buku', '2016', '', 11, 'Rak 1', '2020-06-10', 'Pemograman_Java_Tingkat_Lanjut.jpg'),
(44, 'Dzikir Pagi % Petang', 'rio', 'trio', '2001', '', 2, 'Rak 1', '2020-06-10', 'Dzikir_Pagi_%_Petang.jpg'),
(45, 'Dasar Logika Pemograman Komputer', 'Abdul Kadir', 'Flex Media', '2011', '', 10, 'Rak 4', '2020-06-10', 'Dasar_Logika_Pemograman_Komputer.jpg'),
(46, 'Desain Web Praktis Dengan CSS', 'Budi Kurniawan, S.Kom', 'Flex Media', '2020', '', 12, 'Rak 3', '2020-06-10', 'Desain_Web_Praktis_Dengan_CSS.jpg'),
(47, 'Modifikasi Blog MULTYPLY Dengan CSS', 'Sulistyyawan Rubianto Rahmad Saleh', 'Flex Media', '2018', '', 99, 'Rak 3', '2020-06-10', 'Modifikasi_Blog_MULTYPLY_Dengan_CSS.jpg'),
(48, 'Pemograman Database Visual C#', 'JUD', 'JUD', '2004', '', 20, 'Rak 2', '2020-06-10', 'Pemograman_Database_Visual_C.jpg'),
(49, 'Deain Inspiratif CSS', 'pelindo', 'Pelindo', '2015', '', 10, 'Rak 1', '2020-06-10', 'Deain_Inspiratif_CSS.jpg'),
(50, 'Pemograman Wen Dengan PHP dan Framework Codeigniter', 'Supono Virdiardy Putratama', 'Supono', '2020', '', 10, 'Rak 2', '2020-06-10', 'Pemograman_Wen_Dengan_PHP_dan_Framework_Codeigniter.jpg'),
(51, 'Tilawah Tajwid # Ghorib', 'Ukhwa', 'Ukhwa', '2014', '', 2, 'Rak 3', '2020-06-10', 'Tilawah_Tajwid_Ghorib.jpg'),
(52, 'Kumpulan Cerita Rakyat Jepang', 'KAKATUA', 'KAKATUA', '2020', '', 11, 'Rak 1', '2020-06-10', 'Kumpulan_Cerita_Rakyat_Jepang.jpg'),
(53, 'Pesisiran', 'Komunitas Radja Ketjil - Jakarta', 'Komunitas Radja Ketjil - Jakarta', '2019', '', 20, 'Rak 3', '2020-06-10', 'Pesisiran.jpg'),
(54, 'Mimpi', 'KBM KOLONG', 'KBM KOLONG', '2012', '', 12, 'Rak 1', '2020-06-10', 'Mimpi.jpg'),
(55, 'Panduan Fasilitasi', 'Perpuseru', 'Perpuseru', '2014', '', 10, 'Rak 1', '2020-06-10', 'Panduan_Fasilitasi.jpg'),
(56, 'Fairy Tales', 'Fairy Tales', 'Fairy Tales', '2018', '', 1, 'Rak 1', '2020-06-10', 'Fairy_Tales.jpg'),
(57, 'Otodidak pemograman Python', 'Jubilee Enterprice', 'Jubilee Enterprice', '2017', '', 3, 'Rak 1', '2020-06-10', 'Otodidak_pemograman_Python.jpg'),
(58, 'Killing Hemingway', 'Brian D. Meeks', 'Brian D. Meeks', '2015', '', 10, 'Rak 2', '2020-06-10', 'Killing_Hemingway.jpg'),
(59, 'Mukim Di Aceh', 'Aceh', 'Aceh', '2020', '', 1, 'Rak 1', '2020-06-10', 'Mukim_Di_Aceh.jpg'),
(60, 'Million Dollar Dog Brand', 'J. Nochole Smith', 'J. Nochole Smith', '2019', '', 4, 'Rak 1', '2020-06-10', 'Million_Dollar_Dog_Brand.jpg'),
(61, 'Kimyona', 'Fukahana', 'fukahana', '2013', '', 11, 'Rak 1', '2020-06-10', 'Kimyona.jpg'),
(62, 'Kereta Utara', 'Miranda Naigolan', 'Miranda Naigolan', '2017', '', 22, 'Rak 3', '2020-06-10', 'Kereta_Utara.jpg'),
(63, 'Agar Suami Menjadi Pemimpin Sejati', 'Nurhayati Pujiastuti', 'Pro-U Media', '2013', '', 12, 'Rak 1', '2020-06-10', ''),
(64, 'Membingkai Surga Dalam Rumah Tangga', 'Aam Amiruddin', 'Khazanah Intelektual', '2016', '', 19, 'Rak 1', '2020-06-10', 'Membingkai_Surga_Dalam_Rumah_Tangga.jpg'),
(65, 'Dalam Cinta Para Pejuang', 'Salim A.Fillah', 'Pro-U Media', '2020', '', 10, 'Rak 1', '2020-06-10', 'Dalam_Cinta_Para_Pejuang.jpg'),
(66, 'Grapic Design', 'Hendi Hendratman', 'Informatika', '2020', '', 17, 'Rak 1', '2020-06-10', 'Grapic_Design.jpg'),
(67, 'CSS and HTML Web Design', 'Craig Grannell', 'FriendSoft', '2016', '', 11, 'Rak 2', '2020-06-10', 'CSS_and_HTML_Web_Design.jpg'),
(68, 'Desain Kreatif Dengan Photoshop', 'Muhammad Godc', 'Mediakita', '2018', '', 22, 'Rak 4', '2020-06-10', 'Desain_Kreatif_Dengan_Photoshop.jpg'),
(69, 'Kupinang Kau Dengan Bismillah', 'Yusuf & Maira', '06Muh', '2001', '', 2, 'Rak 3', '2020-06-10', 'Kupinang_Kau_Dengan_Bismillah.jpg'),
(70, 'Html, CSS, Javascript', 'Julie, C. Melani', 'Sams', '2017', '', 11, 'Rak 2', '2020-06-10', 'Html,_CSS,_Javascript.jpg'),
(71, 'It\'s nescessary To Leave Margins For Errors', 'R$S', 'R$S', '2015', '', 1, 'Rak 1', '2020-06-10', 'Its_nescessary_To_Leave_Margins_For_Errors.jpg'),
(72, 'Menyelami Framework Laravel', 'Rahmad Awaludi', 'Laravel', '2020', '', 10, 'Rak 2', '2020-06-10', 'Menyelami_Framework_Laravel.JPG'),
(73, 'Php Advance And OOP', 'Larry Ullman', 'Larry', '2019', '', 11, 'Rak 1', '2020-06-10', 'Php_Advance_And_OOP.jpg'),
(74, 'Seminggu Belajar Laravel', 'Rahmad Awalludin', 'SeriSemingguBelajar', '2020', '', 12, 'Rak 1', '2020-06-10', 'Seminggu_Belajar_Laravel.JPG'),
(75, 'Trik Seo Security Codeigniter', 'Anhar', 'COCO MEDIA', '2020', '', 1000, 'Rak 1', '2020-06-10', 'Trik_Seo_Security_Codeigniter.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `visi_misi`
--

CREATE TABLE `visi_misi` (
  `id` int(11) NOT NULL,
  `about` varchar(255) NOT NULL,
  `visi1` varchar(255) NOT NULL,
  `visi2` varchar(255) NOT NULL,
  `visi3` varchar(255) NOT NULL,
  `visi4` varchar(255) NOT NULL,
  `misi1` varchar(255) NOT NULL,
  `misi2` varchar(255) NOT NULL,
  `misi3` varchar(255) NOT NULL,
  `misi4` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visi_misi`
--

INSERT INTO `visi_misi` (`id`, `about`, `visi1`, `visi2`, `visi3`, `visi4`, `misi1`, `misi2`, `misi3`, `misi4`) VALUES
(1, 'Perpustakaan A, Perpustakaan kami memuat buku, majalah, hingga koran', 'Iklas melaksanakan perintah allah swt dan iklas pula meninggalkan larangannya', 'Patuh dan santun pada orang tua', 'Patuh kepada guru dan mengabdi pada agama, bangsa dan tanah air', 'Berprestasi prima ', 'Membina dan berakhlak mewujudkan insan berakhlak karimah sesuai dengan tuntunan al-qur’an dan sunnah rasulullah SAW', 'Membina dan mengembangkan minat dan bakat sesuai dengan potensi siswa meraih prestasi akademik dan non akademin', 'Pandai mensyukuri anugerah karunia allah sw sebagai wujud menjadi insan taqwa', 'Membudayakan pekerti peduli kebersihan, kesehatan diri ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visi_misi`
--
ALTER TABLE `visi_misi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `visi_misi`
--
ALTER TABLE `visi_misi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
