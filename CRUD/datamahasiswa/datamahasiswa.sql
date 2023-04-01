-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2023 at 10:45 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wpw`
--

-- --------------------------------------------------------

--
-- Table structure for table `datamahasiswa`
--

CREATE TABLE `datamahasiswa` (
  `id` int(11) NOT NULL,
  `NRP` varchar(10) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `JenisKelamin` set('Laki-Laki','Perempuan') NOT NULL,
  `Jurusan` varchar(35) NOT NULL,
  `Hobi` varchar(30) NOT NULL,
  `EmailStudent` varchar(30) NOT NULL,
  `Alamat` text NOT NULL,
  `NoHp` varchar(15) NOT NULL,
  `AsalSMA` varchar(30) NOT NULL,
  `MataKuliahFavorit` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `datamahasiswa`
--

INSERT INTO `datamahasiswa` (`id`, `NRP`, `Nama`, `JenisKelamin`, `Jurusan`, `Hobi`, `EmailStudent`, `Alamat`, `NoHp`, `AsalSMA`, `MataKuliahFavorit`) VALUES
(68, '3122500001', 'Ade Hafis Rabbani', 'Laki-Laki', 'Teknik Informatika', 'Rebahan', 'hafis@it.student.pens.ac.id', 'Gresik', '085830556606', 'SMKN 1 CERME', 'WPW'),
(69, '3122500002', 'Nadila Aulya Salsabila Mirdianti ', 'Laki-Laki', 'Teknik Informatika', 'Menggambar ', 'nadila@it.student.pens.ac.id', 'Kediri', '082335995643', 'SMAN 1 Patianrowo', 'WPW'),
(70, '3122500003', 'Denti Widayati', 'Laki-Laki', 'Teknik Informatika', 'Listening Music', 'denti@it.student.pens.ac.id', 'Sidoarjo', '089523304487', 'SMA Taruna Angkasa 3 Madiun', 'WPW'),
(71, '3122500004', 'Zahrotul Hidayah', 'Laki-Laki', 'Teknik Informatika', 'Menulis', 'zahro@it.student.pens.ac.id', 'Lamongan', '085790342735', 'SMAN 1 Babat', 'WPW'),
(72, '3122500005', 'Gede Hari Yoga Nanda', 'Laki-Laki', 'Teknik Informatika', 'Membaca', 'gede@it.student.pens.ac.id', 'Tulung Agung', '083135368657', 'SMAN 1 Boyolangu', 'WPW'),
(73, '3122500006', 'Virgiawan Ivada Raksi Sekar Wibana', 'Laki-Laki', 'Teknik Informatika', 'Menyelam', 'ivo@it.student.pens.ac.id', 'Tuban', '085236113808', 'SMAN Jatirogo', 'WPW'),
(74, '3122500007', 'Irfan Akmal Ardianto', 'Laki-Laki', 'Teknik Informatika', 'Bermain Game', 'irfan@it.student.pens.ac.id', 'Palembang', '081274340490', 'SMA Plus Negeri 17 Palembang', 'WPW'),
(75, '3122500008', 'Arsyita Devanaya Arianto', 'Laki-Laki', 'Teknik Informatika', 'Nonton Drakor', 'naya@it.student.pens.ac.id', 'Surabaya', '085171620044', 'SMAN 17 Surabaya', 'WPW'),
(76, '3122500009', 'Mirta Chadhirotin Nachlah', 'Laki-Laki', 'Teknik Informatika', 'Bersepeda', 'mirta@it.student.pens.ac.id', 'Gresik', '089603443665', 'SMAN 1 Manyar', 'WPW'),
(77, '3122500010', 'Leody Zelvon Herliansa', 'Laki-Laki', 'Teknik Informatika', 'Bermain Game', 'leody@it.student.pens.ac.id', 'Tuban', '081331571335', 'SMAN 2 Tuban ', 'WPW'),
(78, '3122500011', 'Ali Azhar Pradana Braveian', 'Laki-Laki', 'Teknik Informatika', 'Meme', 'ali@it.student.pens.ac.id', 'Surabaya', '0895360141561', 'SMAN 12 Surabaya ', 'WPW'),
(79, '3122500012', 'Awal Raya', 'Laki-Laki', 'Teknik Informatika', 'Menggambar ', 'awal@it.student.pens.ac.id', 'Kediri', '081359200521', 'SMAN 1 Kediri', 'WPW'),
(80, '3122500013', 'Mahendra Khibrah Rabbani Sayyid', 'Laki-Laki', 'Teknik Informatika', 'Baca Buku', 'mahen@it.student.pens.ac.id', 'Surabaya', '08817934297', 'SMAN 5 Surabaya', 'WPW'),
(81, '3122500014', 'Muhammad Iqbal Rahmatullah', 'Laki-Laki', 'Teknik Informatika', 'Sepak Bola', 'iqbal@it.student.pens.ac.id', 'Sidoarjo', '081231685459', 'SMA Muhammadiyah 3 Tulangan ', 'WPW'),
(82, '3122500015', 'Mayada Azizah', 'Laki-Laki', 'Teknik Informatika', 'Mendengarkan Musik', 'mayada@it.student.pens.ac.id', 'Pasuruan', '081359049794', 'SMAN 1 Pandaan', 'WPW'),
(83, '3122500016', 'Gandi Rukmaning Ayu', 'Laki-Laki', 'Teknik Informatika', 'Nonton Film', 'gandi@it.student.pens.ac.id', 'Lumajang', '083857864688', 'SMAN 3 Lumajang', 'WPW'),
(84, '3122500017', 'Handaru Dwiki Yuntara', 'Laki-Laki', 'Teknik Informatika', 'Futsal', 'handaru@it.student.pens.ac.id', 'Trenggalek', '083896168416', 'SMAN1 Trenggalek', 'WPW'),
(86, '3122500018', 'Adam Rasyid Nurmuhammad', 'Laki-Laki', 'Teknik Informatika', 'Bersepeda', 'adam@it.student.pens.ac.id', 'Surabaya', '08996086746', 'SMAN 1 Surabaya', 'WPW'),
(87, '3122500019', 'Akmal Zidani Fikri', 'Laki-Laki', 'Teknik Informatika', 'Mendengarkan musik', 'akmal@it.student.pens.ac.id', 'Surabaya', '087703133145', 'SMAN 2 Surabaya', 'WPW'),
(88, '3122500020', 'Adinda Zahra Qariru', 'Perempuan', 'Teknik Informatika', 'Jalan-jalan', 'dinda@it.student.pens.ac.id', 'Malang', '081297901397', 'SMA Thursina IIBS', 'WPW'),
(89, '3122500021', 'Mohammad Ilham Ramadani', 'Laki-Laki', 'Teknik Informatika', 'Main Rubik', 'ilhamoe@it.student.pens.ac.id', 'Surabaya', '089699609041', 'SMAN10 Surabaya', 'WPW'),
(90, '3122500022', 'Virginia Faiqoh ', 'Perempuan', 'Teknik Informatika', 'Main Game', 'vira@it.student.pens.ac.id', 'Sidoarjo', '089515888419', 'SMKN 2 Buduran Sidoarjo ', 'WPW'),
(91, '3122500023', 'Masyitha Fahra Nabila', 'Perempuan', 'Teknik Informatika', 'Menulis', 'syitha@it.student.pens.ac.id', 'Tuban', '6281216756463', 'SMAN 1 Tuban', 'WPW'),
(92, '3122500024', 'Muhammad Reza Muktasib', 'Laki-Laki', 'Teknik Informatika', 'Menggambar ', 'reza@it.student.pens.ac.id', 'Surabaya', '085649915406', 'SMAN 8 Surabaya', 'WPW'),
(93, '3122500025', 'Adira Callysta', 'Perempuan', 'Teknik Informatika', 'Jalan-jalan', 'dira@it.student.pens.ac.id', 'Mojokerto', '085716039986', 'SMAN 3 Mojokerto', 'WPW'),
(94, '3122500026', 'Shofira Izza Nurrohmah', 'Perempuan', 'Teknik Informatika', 'Bersepeda', 'shofira@it.student.pens.ac.id', 'Ngawi', '085608295984', 'MAN 2 Kota Madiun ', 'WPW'),
(95, '3122500027', 'Rifqi Rayita Dhiyaulhaq', 'Laki-Laki', 'Teknik Informatika', 'Olahraga', 'rifqi@it.student.pens.ac.id', 'Ponorogo', '085746335238', 'SMAN 1 Ponorogo ', 'WPW'),
(96, '3122500028', 'Bagus Bimo Prakoso', 'Laki-Laki', 'Teknik Informatika', 'Olahraga', 'bimo@it.student.pens.ac.id', 'Tulung Agung', '085645494404', 'SMAN 1 Boyolangu', 'WPW'),
(97, '3122500029', 'Muhammad Syahrul Ramadhan ', 'Laki-Laki', 'Teknik Informatika', 'Mendaki', 'syahrul@it.student.pens.ac.id', 'Sidoarjo', '08986367472', 'SMA Muhammadiyah 3 Tulangan ', 'WPW'),
(98, '3121500011', 'Adella Vawistri Salma', 'Perempuan', 'Teknik Informatika', 'Jalan-jalan', 'della@it.student.pens.ac.id', 'Tuban', '087845762507', 'SMA unknown', 'WPW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datamahasiswa`
--
ALTER TABLE `datamahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datamahasiswa`
--
ALTER TABLE `datamahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
