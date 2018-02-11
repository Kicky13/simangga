-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 17 Agu 2017 pada 15.19
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simangga`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jawaban`
--

CREATE TABLE `tb_jawaban` (
  `id_jawab` int(10) NOT NULL,
  `id_pert` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `id_periode` int(10) NOT NULL,
  `id_levelpengguna` int(3) NOT NULL,
  `jawaban` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `tb_jawaban`
--

INSERT INTO `tb_jawaban` (`id_jawab`, `id_pert`, `id_user`, `id_periode`, `id_levelpengguna`, `jawaban`) VALUES
(1, 1, 5, 2, 1, 1),
(2, 2, 5, 2, 1, 1),
(3, 3, 5, 2, 1, 1),
(4, 4, 5, 2, 1, 1),
(5, 5, 5, 2, 1, 1),
(6, 6, 5, 2, 1, 1),
(7, 7, 5, 2, 1, 1),
(8, 8, 5, 2, 1, 1),
(9, 9, 5, 2, 1, 1),
(10, 10, 5, 2, 1, 0),
(11, 11, 5, 2, 1, 0),
(12, 12, 5, 2, 1, 1),
(13, 13, 5, 2, 1, 0),
(14, 14, 5, 2, 1, 0),
(15, 15, 5, 2, 1, 0),
(16, 16, 5, 2, 1, 0),
(17, 17, 5, 2, 1, 0),
(18, 18, 5, 2, 1, 1),
(19, 19, 5, 2, 1, 1),
(20, 20, 5, 2, 1, 1),
(21, 21, 5, 2, 1, 1),
(22, 1, 4, 2, 1, 1),
(23, 2, 4, 2, 1, 0),
(24, 3, 4, 2, 1, 0),
(25, 4, 4, 2, 1, 0),
(26, 5, 4, 2, 1, 1),
(27, 6, 4, 2, 1, 0),
(28, 7, 4, 2, 1, 0),
(29, 8, 4, 2, 1, 1),
(30, 9, 4, 2, 1, 1),
(31, 10, 4, 2, 1, 0),
(32, 11, 4, 2, 1, 0),
(33, 12, 4, 2, 1, 0),
(34, 13, 4, 2, 1, 0),
(35, 14, 4, 2, 1, 0),
(36, 15, 4, 2, 1, 1),
(37, 16, 4, 2, 1, 0),
(38, 17, 4, 2, 1, 0),
(39, 18, 4, 2, 1, 0),
(40, 19, 4, 2, 1, 0),
(41, 20, 4, 2, 1, 0),
(42, 21, 4, 2, 1, 1),
(43, 1, 1, 2, 1, 1),
(44, 2, 1, 2, 1, 1),
(45, 3, 1, 2, 1, 1),
(46, 4, 1, 2, 1, 0),
(47, 5, 1, 2, 1, 0),
(48, 6, 1, 2, 1, 1),
(49, 7, 1, 2, 1, 1),
(50, 8, 1, 2, 1, 1),
(51, 9, 1, 2, 1, 1),
(52, 10, 1, 2, 1, 1),
(53, 11, 1, 2, 1, 1),
(54, 12, 1, 2, 1, 1),
(55, 13, 1, 2, 1, 0),
(56, 14, 1, 2, 1, 0),
(57, 15, 1, 2, 1, 0),
(58, 16, 1, 2, 1, 0),
(59, 17, 1, 2, 1, 1),
(60, 18, 1, 2, 1, 0),
(61, 19, 1, 2, 1, 0),
(62, 20, 1, 2, 1, 0),
(63, 21, 1, 2, 1, 0),
(64, 1, 6, 2, 2, 1),
(65, 2, 6, 2, 2, 1),
(66, 3, 6, 2, 2, 0),
(67, 4, 6, 2, 2, 1),
(68, 5, 6, 2, 2, 1),
(69, 6, 6, 2, 2, 0),
(70, 7, 6, 2, 2, 1),
(71, 8, 6, 2, 2, 1),
(72, 9, 6, 2, 2, 1),
(73, 10, 6, 2, 2, 0),
(74, 11, 6, 2, 2, 1),
(75, 12, 6, 2, 2, 1),
(76, 13, 6, 2, 2, 1),
(77, 14, 6, 2, 2, 0),
(78, 15, 6, 2, 2, 1),
(79, 16, 6, 2, 2, 0),
(80, 17, 6, 2, 2, 0),
(81, 18, 6, 2, 2, 1),
(82, 19, 6, 2, 2, 1),
(83, 20, 6, 2, 2, 1),
(84, 21, 6, 2, 2, 0),
(85, 1, 7, 2, 2, 1),
(86, 2, 7, 2, 2, 1),
(87, 3, 7, 2, 2, 0),
(88, 4, 7, 2, 2, 0),
(89, 5, 7, 2, 2, 1),
(90, 6, 7, 2, 2, 1),
(91, 7, 7, 2, 2, 1),
(92, 8, 7, 2, 2, 1),
(93, 9, 7, 2, 2, 1),
(94, 10, 7, 2, 2, 1),
(95, 11, 7, 2, 2, 0),
(96, 12, 7, 2, 2, 0),
(97, 13, 7, 2, 2, 0),
(98, 14, 7, 2, 2, 0),
(99, 15, 7, 2, 2, 0),
(100, 16, 7, 2, 2, 1),
(101, 17, 7, 2, 2, 1),
(102, 18, 7, 2, 2, 1),
(103, 19, 7, 2, 2, 1),
(104, 20, 7, 2, 2, 0),
(105, 21, 7, 2, 2, 1),
(106, 1, 8, 2, 2, 1),
(107, 2, 8, 2, 2, 1),
(108, 3, 8, 2, 2, 1),
(109, 4, 8, 2, 2, 1),
(110, 5, 8, 2, 2, 1),
(111, 6, 8, 2, 2, 1),
(112, 7, 8, 2, 2, 0),
(113, 8, 8, 2, 2, 1),
(114, 9, 8, 2, 2, 1),
(115, 10, 8, 2, 2, 0),
(116, 11, 8, 2, 2, 1),
(117, 12, 8, 2, 2, 1),
(118, 13, 8, 2, 2, 0),
(119, 14, 8, 2, 2, 1),
(120, 15, 8, 2, 2, 1),
(121, 16, 8, 2, 2, 0),
(122, 17, 8, 2, 2, 1),
(123, 18, 8, 2, 2, 1),
(124, 19, 8, 2, 2, 1),
(125, 20, 8, 2, 2, 1),
(126, 21, 8, 2, 2, 0),
(127, 1, 9, 2, 3, 1),
(128, 2, 9, 2, 3, 1),
(129, 3, 9, 2, 3, 1),
(130, 4, 9, 2, 3, 1),
(131, 5, 9, 2, 3, 1),
(132, 6, 9, 2, 3, 1),
(133, 7, 9, 2, 3, 1),
(134, 8, 9, 2, 3, 1),
(135, 9, 9, 2, 3, 1),
(136, 10, 9, 2, 3, 1),
(137, 11, 9, 2, 3, 1),
(138, 12, 9, 2, 3, 1),
(139, 13, 9, 2, 3, 0),
(140, 14, 9, 2, 3, 1),
(141, 15, 9, 2, 3, 1),
(142, 16, 9, 2, 3, 1),
(143, 17, 9, 2, 3, 1),
(144, 18, 9, 2, 3, 1),
(145, 19, 9, 2, 3, 1),
(146, 20, 9, 2, 3, 1),
(147, 21, 9, 2, 3, 1),
(148, 1, 10, 2, 3, 1),
(149, 2, 10, 2, 3, 1),
(150, 3, 10, 2, 3, 1),
(151, 4, 10, 2, 3, 1),
(152, 5, 10, 2, 3, 1),
(153, 6, 10, 2, 3, 1),
(154, 7, 10, 2, 3, 1),
(155, 8, 10, 2, 3, 1),
(156, 9, 10, 2, 3, 1),
(157, 10, 10, 2, 3, 0),
(158, 11, 10, 2, 3, 1),
(159, 12, 10, 2, 3, 1),
(160, 13, 10, 2, 3, 1),
(161, 14, 10, 2, 3, 0),
(162, 15, 10, 2, 3, 1),
(163, 16, 10, 2, 3, 1),
(164, 17, 10, 2, 3, 1),
(165, 18, 10, 2, 3, 1),
(166, 19, 10, 2, 3, 1),
(167, 20, 10, 2, 3, 1),
(168, 21, 10, 2, 3, 1),
(169, 1, 11, 2, 3, 1),
(170, 2, 11, 2, 3, 1),
(171, 3, 11, 2, 3, 1),
(172, 4, 11, 2, 3, 1),
(173, 5, 11, 2, 3, 1),
(174, 6, 11, 2, 3, 1),
(175, 7, 11, 2, 3, 0),
(176, 8, 11, 2, 3, 1),
(177, 9, 11, 2, 3, 1),
(178, 10, 11, 2, 3, 1),
(179, 11, 11, 2, 3, 0),
(180, 12, 11, 2, 3, 1),
(181, 13, 11, 2, 3, 1),
(182, 14, 11, 2, 3, 0),
(183, 15, 11, 2, 3, 1),
(184, 16, 11, 2, 3, 1),
(185, 17, 11, 2, 3, 1),
(186, 18, 11, 2, 3, 1),
(187, 19, 11, 2, 3, 1),
(188, 20, 11, 2, 3, 1),
(189, 21, 11, 2, 3, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_komp`
--

CREATE TABLE `tb_komp` (
  `id_komp` int(10) NOT NULL,
  `nama_komp` varchar(150) NOT NULL,
  `detail` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `tb_komp`
--

INSERT INTO `tb_komp` (`id_komp`, `nama_komp`, `detail`) VALUES
(1, 'Learnability', 'Kemudahan (Learnability) adalah komponen yang mengukur seberapa cepat pengguna mahir dalam menggunakan sistem, serta kemudahan dalam penggunaan mengop'),
(2, 'Efficiency', 'Efisiensi (Efficiency) merupakan sebagai sumber daya yang dikeluarkan guna mencapai ketepatan dan kelengkapan tujuan dalam mengakses sistem.'),
(3, 'Memorability', 'Mudah diingat (Memorability) bagaimana kemampuan pengguna mempertahankan pengetahuannya setelah jangka waktu tertentu, kemampuan mengingat didapatkan '),
(4, 'Errors', 'Kesalahan & keamanan (Errors) adalah kesalahan-kesalahan apa saja yang dibuat pengguna, kesalahan yang dibuat pengguna mencakup ketidaksesuaian apa ya'),
(5, 'Satisfaction', 'Kepuasan (Satisfaction) adalah kebebasan dari ketidaknyamanan, dan sikap positif terhadap penggunaan produk atau ukuran subjektif sebagaimana pengguna');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_levelpengguna`
--

CREATE TABLE `tb_levelpengguna` (
  `id_levelpengguna` int(3) NOT NULL,
  `level_pengguna` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_levelpengguna`
--

INSERT INTO `tb_levelpengguna` (`id_levelpengguna`, `level_pengguna`) VALUES
(1, 'awam'),
(2, 'aktif'),
(3, 'terampil');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_periode`
--

CREATE TABLE `tb_periode` (
  `id_periode` int(10) NOT NULL,
  `periode` varchar(15) NOT NULL,
  `tahun_periode` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_periode`
--

INSERT INTO `tb_periode` (`id_periode`, `periode`, `tahun_periode`) VALUES
(1, 'Jan - Jun', 2017),
(2, 'Jul - Des', 2017);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pertanyaan`
--

CREATE TABLE `tb_pertanyaan` (
  `id_pert` int(10) NOT NULL,
  `id_komp` int(10) NOT NULL,
  `kode_pertanyaan` varchar(10) NOT NULL,
  `pertanyaan` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pertanyaan`
--

INSERT INTO `tb_pertanyaan` (`id_pert`, `id_komp`, `kode_pertanyaan`, `pertanyaan`) VALUES
(1, 1, 'LE1', 'Apakah jenis font yang digunakan pada halaman SIMANGGA mudah dan jelas ?'),
(2, 1, 'LE2', 'Apakah pilihan menu yang ada pada halaman SIMANGGA mudah untuk dipahami?'),
(3, 1, 'LE3', 'Apakah anda menemukan menu download dan search pada halaman SIMANGGA?'),
(4, 1, 'LE4', 'Apakah  symbol gambar (icon) mudah dipahami ?'),
(5, 2, 'EF1', 'Apakah saat menu atau tombol yang anda klik memiliki respon yang cepat ?'),
(6, 2, 'EF2', 'Apakah konten yang ditampilkan pada menu search sesuai dengan yang anda cari/ inginkan?'),
(7, 2, 'EF3', 'Saat anda ingin mendownload, apakah diberikan informasi tentang format file dan ukurannya ?'),
(8, 3, 'ME1', 'Apakah nama halaman web SIMANGGA mudah untuk diingat?'),
(9, 3, 'ME2', 'Apakah alamat tersebut ditulis menggunakan huruf kecil?'),
(10, 3, 'ME3', 'Apakah alamat mengandung underline?'),
(11, 3, 'ME4', 'Apakah halaman SIMANGGA menggunakan animasi gambar?'),
(12, 3, 'ME5', 'Apakah tampilan website mudah dikenali ?'),
(13, 4, 'ER1', 'Apakah anda menemukan link referensi website, ketika di klik terjadi error atau link tersebut tidak dapat dibuka?'),
(14, 4, 'ER2', 'Apakah ada pesan yang jelas terhadap link yang error tersebut?'),
(15, 4, 'ER3', 'Apakah anda menemukan button atau menu saat diklik tidak memberikan respon apapun?'),
(16, 4, 'ER4', 'Apakah terdapat fitur dalam website yang ketika di klik terjadi error ?'),
(17, 4, 'ER5', 'Apakah anda menemukan adanya under recontruction dari beberapa menu atau link yang ditampilkan dalam halaman ini ?'),
(18, 5, 'SA1', 'Apakah anda mendapatkan apa yang anda cari selama berkunjung ke halaman ini ?'),
(19, 5, 'SA2', 'Apakah menurut anda informasi yang disajikan dalam SIMANGGA ini mudah dipahami?'),
(20, 5, 'SA3', 'Dapatkah anda menemukan kelengkapan lain yang mendukung seperti file share, chat, mailis dan lainnya?'),
(21, 5, 'SA4', 'Apakah ada menu yang anda butuhkan namun belum ada pada SIMANGGA tetapi anda menemui pada halaman yang pernah anda kunjungi sebelumnya?');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rekapkomp`
--

CREATE TABLE `tb_rekapkomp` (
  `id_rk` int(11) NOT NULL,
  `id_komp` int(10) NOT NULL,
  `id_levelpengguna` int(3) NOT NULL,
  `id_periode` int(10) NOT NULL,
  `komp_y` float NOT NULL,
  `komp_n` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `tb_rekapkomp`
--

INSERT INTO `tb_rekapkomp` (`id_rk`, `id_komp`, `id_levelpengguna`, `id_periode`, `komp_y`, `komp_n`) VALUES
(1, 1, 1, 2, 66.6667, 33.3333),
(2, 1, 2, 2, 75, 25),
(3, 1, 3, 2, 100, 0),
(4, 2, 1, 2, 66.6667, 33.3333),
(5, 2, 2, 2, 77.7778, 22.2222),
(6, 2, 3, 2, 88.8889, 11.1111),
(7, 3, 1, 2, 66.6667, 33.3333),
(8, 3, 2, 2, 73.3333, 26.6667),
(9, 3, 3, 2, 86.6667, 13.3333),
(10, 4, 1, 2, 13.3333, 86.6667),
(11, 4, 2, 2, 46.6667, 53.3333),
(12, 4, 3, 2, 80, 20),
(13, 5, 1, 2, 41.6667, 58.3333),
(14, 5, 2, 2, 75, 25),
(15, 5, 3, 2, 91.6667, 8.33333);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rekappertanyaan`
--

CREATE TABLE `tb_rekappertanyaan` (
  `id_rp` int(10) NOT NULL,
  `id_pert` int(10) NOT NULL,
  `id_levelPengguna` int(3) NOT NULL,
  `id_periode` int(10) NOT NULL,
  `nilai_y` float NOT NULL,
  `nilai_n` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `tb_rekappertanyaan`
--

INSERT INTO `tb_rekappertanyaan` (`id_rp`, `id_pert`, `id_levelPengguna`, `id_periode`, `nilai_y`, `nilai_n`) VALUES
(1, 1, 1, 2, 100, 0),
(2, 2, 1, 2, 66.6667, 33.3333),
(3, 3, 1, 2, 66.6667, 33.3333),
(4, 4, 1, 2, 33.3333, 66.6667),
(5, 1, 2, 2, 100, 0),
(6, 2, 2, 2, 100, 0),
(7, 3, 2, 2, 33.3333, 66.6667),
(8, 4, 2, 2, 66.6667, 33.3333),
(9, 1, 3, 2, 100, 0),
(10, 2, 3, 2, 100, 0),
(11, 3, 3, 2, 100, 0),
(12, 4, 3, 2, 100, 0),
(13, 5, 1, 2, 66.6667, 33.3333),
(14, 6, 1, 2, 66.6667, 33.3333),
(15, 7, 1, 2, 66.6667, 33.3333),
(16, 5, 2, 2, 100, 0),
(17, 6, 2, 2, 66.6667, 33.3333),
(18, 7, 2, 2, 66.6667, 33.3333),
(19, 5, 3, 2, 100, 0),
(20, 6, 3, 2, 100, 0),
(21, 7, 3, 2, 66.6667, 33.3333),
(22, 8, 1, 2, 100, 0),
(23, 9, 1, 2, 100, 0),
(24, 10, 1, 2, 33.3333, 66.6667),
(25, 11, 1, 2, 33.3333, 66.6667),
(26, 12, 1, 2, 66.6667, 33.3333),
(27, 8, 2, 2, 100, 0),
(28, 9, 2, 2, 100, 0),
(29, 10, 2, 2, 33.3333, 66.6667),
(30, 11, 2, 2, 66.6667, 33.3333),
(31, 12, 2, 2, 66.6667, 33.3333),
(32, 8, 3, 2, 100, 0),
(33, 9, 3, 2, 100, 0),
(34, 10, 3, 2, 66.6667, 33.3333),
(35, 11, 3, 2, 66.6667, 33.3333),
(36, 12, 3, 2, 100, 0),
(37, 13, 1, 2, 0, 100),
(38, 14, 1, 2, 0, 100),
(39, 15, 1, 2, 33.3333, 66.6667),
(40, 16, 1, 2, 0, 100),
(41, 17, 1, 2, 33.3333, 66.6667),
(42, 13, 2, 2, 33.3333, 66.6667),
(43, 14, 2, 2, 33.3333, 66.6667),
(44, 15, 2, 2, 66.6667, 33.3333),
(45, 16, 2, 2, 33.3333, 66.6667),
(46, 17, 2, 2, 66.6667, 33.3333),
(47, 13, 3, 2, 66.6667, 33.3333),
(48, 14, 3, 2, 33.3333, 66.6667),
(49, 15, 3, 2, 100, 0),
(50, 16, 3, 2, 100, 0),
(51, 17, 3, 2, 100, 0),
(52, 18, 1, 2, 33.3333, 66.6667),
(53, 19, 1, 2, 33.3333, 66.6667),
(54, 20, 1, 2, 33.3333, 66.6667),
(55, 21, 1, 2, 66.6667, 33.3333),
(56, 18, 2, 2, 100, 0),
(57, 19, 2, 2, 100, 0),
(58, 20, 2, 2, 66.6667, 33.3333),
(59, 21, 2, 2, 33.3333, 66.6667),
(60, 18, 3, 2, 100, 0),
(61, 19, 3, 2, 100, 0),
(62, 20, 3, 2, 100, 0),
(63, 21, 3, 2, 66.6667, 33.3333);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rekapusability`
--

CREATE TABLE `tb_rekapusability` (
  `id_ru` int(10) NOT NULL,
  `id_periode` int(10) NOT NULL,
  `usability_y` float NOT NULL,
  `usability_n` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `tb_rekapusability`
--

INSERT INTO `tb_rekapusability` (`id_ru`, `id_periode`, `usability_y`, `usability_n`) VALUES
(3, 2, 70, 30);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_saran`
--

CREATE TABLE `tb_saran` (
  `id_saran` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `saran` varchar(30) NOT NULL,
  `komentar` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_saran`
--

INSERT INTO `tb_saran` (`id_saran`, `id_user`, `saran`, `komentar`) VALUES
(1, 1, 'Design UI', 'Design mohon di design lebih muda lagi'),
(2, 1, 'Kompleksitas Informasi', 'Informasi tidak lengkap'),
(3, 4, 'Kompleksitas Fitur', 'web simangga mohon terus untuk dikembang kan untuk mendukung kinerja pengelolaan anggaran unit kerja'),
(4, 1, 'Design UI', 'Mohon untuk di adakan sosialisasi untuk simangga, agar kita sebagai pengguna tidak binggung karena cuma di insturksi saja'),
(5, 5, 'Performa Website', 'web simangga sangat ribet'),
(6, 5, 'Performa Website', 'Lebih ditingkatkan lagi untuk performa website'),
(7, 6, 'Design UI', ''),
(8, 7, 'Kompleksitas Informasi', 'Mohon diberikan pertunjuk untuk mengisi kode emi'),
(9, 8, 'Performa Website', ''),
(10, 9, 'Design UI', ''),
(11, 9, 'Kompleksitas Informasi', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_status`
--

CREATE TABLE `tb_status` (
  `id_status` int(3) NOT NULL,
  `id_user` int(10) NOT NULL,
  `id_periode` int(10) NOT NULL,
  `id_levelPengguna` int(3) NOT NULL,
  `status_Learnability` int(3) NOT NULL,
  `status_Efficiency` int(3) NOT NULL,
  `status_Memorability` int(3) NOT NULL,
  `status_Errors` int(3) NOT NULL,
  `status_Satisfaction` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `tb_status`
--

INSERT INTO `tb_status` (`id_status`, `id_user`, `id_periode`, `id_levelPengguna`, `status_Learnability`, `status_Efficiency`, `status_Memorability`, `status_Errors`, `status_Satisfaction`) VALUES
(1, 1, 2, 1, 1, 1, 1, 1, 1),
(2, 4, 1, 0, 0, 0, 0, 0, 0),
(3, 4, 2, 1, 1, 1, 1, 1, 1),
(4, 5, 1, 0, 0, 0, 0, 0, 0),
(5, 5, 2, 1, 1, 1, 1, 1, 1),
(6, 6, 1, 0, 0, 0, 0, 0, 0),
(7, 6, 2, 2, 1, 1, 1, 1, 1),
(8, 7, 1, 0, 0, 0, 0, 0, 0),
(9, 7, 2, 2, 1, 1, 1, 1, 1),
(10, 8, 1, 0, 0, 0, 0, 0, 0),
(11, 8, 2, 2, 1, 1, 1, 1, 1),
(12, 9, 1, 0, 0, 0, 0, 0, 0),
(13, 9, 2, 3, 1, 1, 1, 1, 1),
(14, 10, 1, 0, 0, 0, 0, 0, 0),
(15, 10, 2, 3, 1, 1, 1, 1, 1),
(16, 11, 1, 0, 0, 0, 0, 0, 0),
(17, 11, 2, 3, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(10) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `level` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `jabatan`, `level`) VALUES
(1, 'responden', 'uptti', 'Operator', 3),
(2, 'admin', 'simangga', 'Admin', 2),
(3, 'super', 'admin', 'Super Admin', 1),
(4, 'responden2', 'uptti', 'Operator', 3),
(5, 'responden3', 'uptti', 'Operator', 3),
(6, 'responden4', 'uptti', 'Pimpinan Unit', 3),
(7, 'responden5', 'uptti', 'Sekretaris GPM', 3),
(8, 'responden6', 'uptti', 'Ketua GPM', 3),
(9, 'responden7', 'uptti', 'Reviewer', 3),
(10, 'responden8', 'uptti', 'Reviewer', 3),
(11, 'responden9', 'uptti', 'Operator', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_jawaban`
--
ALTER TABLE `tb_jawaban`
  ADD PRIMARY KEY (`id_jawab`),
  ADD KEY `id_pert` (`id_pert`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_user_2` (`id_user`),
  ADD KEY `id_levelpengguna` (`id_levelpengguna`),
  ADD KEY `id_levelpengguna_2` (`id_levelpengguna`),
  ADD KEY `id_periode` (`id_periode`);

--
-- Indexes for table `tb_komp`
--
ALTER TABLE `tb_komp`
  ADD PRIMARY KEY (`id_komp`);

--
-- Indexes for table `tb_levelpengguna`
--
ALTER TABLE `tb_levelpengguna`
  ADD PRIMARY KEY (`id_levelpengguna`);

--
-- Indexes for table `tb_periode`
--
ALTER TABLE `tb_periode`
  ADD PRIMARY KEY (`id_periode`);

--
-- Indexes for table `tb_pertanyaan`
--
ALTER TABLE `tb_pertanyaan`
  ADD PRIMARY KEY (`id_pert`),
  ADD UNIQUE KEY `kode_pertanyaan` (`kode_pertanyaan`),
  ADD KEY `id_komp` (`id_komp`);

--
-- Indexes for table `tb_rekapkomp`
--
ALTER TABLE `tb_rekapkomp`
  ADD PRIMARY KEY (`id_rk`),
  ADD KEY `id_komp` (`id_komp`),
  ADD KEY `id_levelpengguna` (`id_levelpengguna`),
  ADD KEY `id_periode` (`id_periode`);

--
-- Indexes for table `tb_rekappertanyaan`
--
ALTER TABLE `tb_rekappertanyaan`
  ADD PRIMARY KEY (`id_rp`),
  ADD KEY `id_pert` (`id_pert`),
  ADD KEY `id_levelPengguna` (`id_levelPengguna`),
  ADD KEY `id_periode` (`id_periode`);

--
-- Indexes for table `tb_rekapusability`
--
ALTER TABLE `tb_rekapusability`
  ADD PRIMARY KEY (`id_ru`),
  ADD KEY `id_periode` (`id_periode`);

--
-- Indexes for table `tb_saran`
--
ALTER TABLE `tb_saran`
  ADD PRIMARY KEY (`id_saran`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tb_status`
--
ALTER TABLE `tb_status`
  ADD PRIMARY KEY (`id_status`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_levelPengguna` (`id_levelPengguna`),
  ADD KEY `id_periode` (`id_periode`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_jawaban`
--
ALTER TABLE `tb_jawaban`
  MODIFY `id_jawab` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=190;
--
-- AUTO_INCREMENT for table `tb_komp`
--
ALTER TABLE `tb_komp`
  MODIFY `id_komp` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_levelpengguna`
--
ALTER TABLE `tb_levelpengguna`
  MODIFY `id_levelpengguna` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_periode`
--
ALTER TABLE `tb_periode`
  MODIFY `id_periode` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_pertanyaan`
--
ALTER TABLE `tb_pertanyaan`
  MODIFY `id_pert` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `tb_rekapkomp`
--
ALTER TABLE `tb_rekapkomp`
  MODIFY `id_rk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tb_rekappertanyaan`
--
ALTER TABLE `tb_rekappertanyaan`
  MODIFY `id_rp` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `tb_rekapusability`
--
ALTER TABLE `tb_rekapusability`
  MODIFY `id_ru` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_saran`
--
ALTER TABLE `tb_saran`
  MODIFY `id_saran` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tb_status`
--
ALTER TABLE `tb_status`
  MODIFY `id_status` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_jawaban`
--
ALTER TABLE `tb_jawaban`
  ADD CONSTRAINT `tb_jawaban_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`),
  ADD CONSTRAINT `tb_jawaban_ibfk_3` FOREIGN KEY (`id_pert`) REFERENCES `tb_pertanyaan` (`id_pert`),
  ADD CONSTRAINT `tb_jawaban_ibfk_5` FOREIGN KEY (`id_levelpengguna`) REFERENCES `tb_levelpengguna` (`id_levelpengguna`);

--
-- Ketidakleluasaan untuk tabel `tb_pertanyaan`
--
ALTER TABLE `tb_pertanyaan`
  ADD CONSTRAINT `tb_pertanyaan_ibfk_1` FOREIGN KEY (`id_komp`) REFERENCES `tb_komp` (`id_komp`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
