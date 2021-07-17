-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2020 at 09:10 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ngargoretno`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level_user` varchar(25) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`, `level_user`, `nama`, `email`, `foto`) VALUES
(7, 'ayok', 'ayok', 'Admin Super', 'ayok', 'ayok@gmail.com', '20190523163446_gambar_produk_1.jpg'),
(9, 'admin', 'admin', 'Admin Biasa', 'admin', 'adminuyeaaah@gmail.com', 'about_agri_product.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_artikel`
--

CREATE TABLE `tbl_artikel` (
  `id_artikel` int(5) NOT NULL,
  `artikel_judul` varchar(100) NOT NULL,
  `artikel_penulis` varchar(50) NOT NULL,
  `artikel_tgl` date NOT NULL,
  `artikel_isi` text NOT NULL,
  `artikel_foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_artikel`
--

INSERT INTO `tbl_artikel` (`id_artikel`, `artikel_judul`, `artikel_penulis`, `artikel_tgl`, `artikel_isi`, `artikel_foto`) VALUES
(3, 'Kopi Merah', 'harioayok', '2020-11-18', '<p>Kopi merah merupakan kopi khas desa ngargoretno</p><p>\r\n\r\nKopi merah merupakan kopi khas desa ngargoretno\r\n\r\n<br></p><p>\r\n\r\nKopi merah merupakan kopi khas desa ngargoretno\r\n\r\n<br></p><p>\r\n\r\nKopi merah merupakan kopi khas desa ngargoretno\r\n\r\n<br></p><p>\r\n\r\nKopi merah merupakan kopi khas desa ngargoretno\r\n\r\n<br></p>', '123456789.png'),
(4, 'Tambang Merah Desa Ngargoretno Merdeka', 'cahyo', '2020-11-18', '<p>tambangg meraaaaauuhhhhhhh okay</p>', 'about-us-home.jpg'),
(5, 'Marmer Biru', 'Alma', '2020-11-04', '<p>Uyeaaahh</p>', 'agri_counter_project.png'),
(6, 'Marmer Biruuuuu', 'ayok', '2020-11-19', '<p>\r\n\r\n</p><p>Tiap kali saya dengar suara jingle Susu Murni Nasional yang suaranya sangat legendaris itu, ingatan saya kerap terlempar ke masa lalu. Terlempar pada sosok gadis kecil yang dulu adalah tetangga dekat saya.</p><p><br></p><p>Sebuah fragmen yang melibatkan dirinya dan juga Susu Murni Nasional itu rasanya tak akan pernah saya lupakan. Fragmen tentang kemiskinan dan perputaran nasib yang serba rahasia.</p><p><br></p><p>Gadis kecil itu berlari sekencang-kencangnya tatkala mendengar suara jingle susu murni nasional dari speaker yang terpasang di gerobak penjual susu murni nasional.</p><p><br></p><p>â€œSusu murniiiii nasionaaalâ€¦â€ begitu bunyi jingle itu.</p><p><br></p><p>Ratih, sebut saja gadis berusia 10 tahun namanya begitu. Si gadis kecil itu, berlari untuk memberitahu ayahnya bahwa penjual susu murni sedang melintas. Ia memang sangat sudah lama ingin sekali bisa minum susu murni nasional seperti teman-temannya.</p><p>Bukan sekali-dua saya melihatnya penuh rasa cemburu pada teman-temannya yang asyik menyeruput susu murni sedangkan dirinya mungkin hanya bisa menelan ludah..</p><p>Entah sudah berapa kali ayahnya menolak untuk membelikan Ratih susu kemasan yang saat itu hargaya seribu lima ratus rupiah. Tentu saja alasannya karena uang. Bagi keluarga Ratih, uang seribu lima ratus bukan uang yang sedikit.</p>\r\n\r\n<br><p></p>', 'meat2.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id_contact` int(5) NOT NULL,
  `contact_hp` varchar(50) NOT NULL,
  `contact_email` varchar(50) NOT NULL,
  `contact_alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id_contact`, `contact_hp`, `contact_email`, `contact_alamat`) VALUES
(3, '082134790161', 'ngargoretno@gmail.com', 'jl magelang raya borobudur');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_produk`
--

CREATE TABLE `tbl_produk` (
  `id_produk` int(5) NOT NULL,
  `produk_nama` varchar(100) NOT NULL,
  `produk_harga` varchar(50) NOT NULL,
  `produk_cerita` text NOT NULL,
  `produk_deskripsi` text NOT NULL,
  `produk_link` text NOT NULL,
  `produk_sampul` text NOT NULL,
  `produk_foto1` text NOT NULL,
  `produk_foto2` text NOT NULL,
  `produk_foto3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_produk`
--

INSERT INTO `tbl_produk` (`id_produk`, `produk_nama`, `produk_harga`, `produk_cerita`, `produk_deskripsi`, `produk_link`, `produk_sampul`, `produk_foto1`, `produk_foto2`, `produk_foto3`) VALUES
(104, 'Kopi', '10000', '<p>Kopi Merah&nbsp;\r\n\r\nKopi Merah&nbsp;\r\n\r\nKopi Merah&nbsp;\r\n\r\nKopi Merah&nbsp;\r\n\r\nKopi Merah&nbsp;\r\n\r\nKopi Merah&nbsp;\r\n\r\nKopi Merah\r\n\r\n</p>', '<p>Kopi merah merupakan kopi yang sangat diminati oleh banyak orang</p>', 'kopimerah.com', 'about-us-home.jpg', 'about_agri_product.jpg', 'about-us-home.jpg', 'agri_counter_branch.png'),
(105, 'Teh', '10000', '<p>Uyeaaah</p>', '<p>\r\n\r\nUyeaaah\r\n\r\n\r\n\r\nUyeaaah\r\n\r\n\r\n\r\nUyeaaah\r\n\r\n\r\n\r\nUyeaaah\r\n\r\n\r\n\r\nUyeaaah\r\n\r\n\r\n\r\nUyeaaah\r\n\r\n\r\n\r\nUyeaaah\r\n\r\n\r\n\r\nUyeaaah\r\n\r\n\r\n\r\nUyeaaah\r\n\r\n\r\n\r\nUyeaaah\r\n\r\n\r\n\r\nUyeaaah\r\n\r\n\r\n\r\nUyeaaah\r\n\r\n\r\n\r\nUyeaaah\r\n\r\n\r\n\r\nUyeaaah\r\n\r\n\r\n\r\nUyeaaah\r\n\r\n\r\n\r\nUyeaaah\r\n\r\n\r\n\r\nUyeaaah\r\n\r\n\r\n\r\nUyeaaah\r\n\r\n\r\n\r\nUyeaaah\r\n\r\n\r\n\r\nUyeaaah\r\n\r\n\r\n\r\nUyeaaah\r\n\r\n\r\n\r\nUyeaaah\r\n\r\n\r\n\r\nUyeaaah\r\n\r\n\r\n\r\nUyeaaah\r\n\r\n\r\n\r\nUyeaaah\r\n\r\n\r\n\r\nUyeaaah\r\n\r\n\r\n\r\nUyeaaah\r\n\r\n\r\n\r\nUyeaaah\r\n\r\n\r\n\r\nUyeaaah\r\n\r\n\r\n\r\nUyeaaah\r\n\r\n\r\n\r\nUyeaaah\r\n\r\n\r\n\r\nUyeaaah\r\n\r\n\r\n\r\nUyeaaah\r\n\r\n\r\n\r\nUyeaaah\r\n\r\n\r\n\r\nUyeaaah\r\n\r\n\r\n\r\nUyeaaah\r\n\r\n\r\n\r\nUyeaaah\r\n\r\n\r\n\r\nUyeaaah\r\n\r\n<br></p>', 'wkwkwkwk', '123456789.png', 'about_agri_product.jpg', 'about-us-home.jpg', 'agri_counter_branch.png'),
(106, 'Madu', '15000', '<p>Madu</p>', '', 'hokya', 'agri_counter_customer.png', 'footer_support.png', 'agri_counter_winner.png', 'agri_dairy.png'),
(107, 'Jamu', '25000', '<p>Jamu kuat</p>', '', 'hakee', 'agri_counter_customer.png', 'agri_counter_project.png', 'agri_counter_winner.png', 'dairy_cream.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_profile`
--

CREATE TABLE `tbl_profile` (
  `id_profile` int(5) NOT NULL,
  `profile_judul` varchar(50) NOT NULL,
  `profile_isi` text NOT NULL,
  `profile_foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_profile`
--

INSERT INTO `tbl_profile` (`id_profile`, `profile_judul`, `profile_isi`, `profile_foto`) VALUES
(20, 'Demangan Baru', '<p>Baru banget coiiii</p>', 'about-us-home.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sosmed`
--

CREATE TABLE `tbl_sosmed` (
  `id_sosmed` int(5) NOT NULL,
  `sosmed_twitter` varchar(50) NOT NULL,
  `sosmed_facebook` varchar(50) NOT NULL,
  `sosmed_youtube` varchar(50) NOT NULL,
  `sosmed_instagram` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_sosmed`
--

INSERT INTO `tbl_sosmed` (`id_sosmed`, `sosmed_twitter`, `sosmed_facebook`, `sosmed_youtube`, `sosmed_instagram`) VALUES
(3, 'twitter.com', 'facebook.com', 'youtube.coom', 'instagram.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_wisata`
--

CREATE TABLE `tbl_wisata` (
  `id_wisata` int(10) NOT NULL,
  `wisata_nama` varchar(100) NOT NULL,
  `wisata_harga` varchar(100) NOT NULL,
  `wisata_deskripsi` text NOT NULL,
  `wisata_foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_wisata`
--

INSERT INTO `tbl_wisata` (`id_wisata`, `wisata_nama`, `wisata_harga`, `wisata_deskripsi`, `wisata_foto`) VALUES
(3, 'Outbond Ceria', '10000', '<p>Paket Wisata Outbond</p>', 'about_agri_product.jpg'),
(4, 'Paket Outbond 2', '20000', '<p>Mencoba mencoba paket dua</p>', 'about-us-home.jpg'),
(5, 'Paket Outbond 3', '100000', '<p>oiiiiitttt</p>', 'header-1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indexes for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `tbl_profile`
--
ALTER TABLE `tbl_profile`
  ADD PRIMARY KEY (`id_profile`);

--
-- Indexes for table `tbl_sosmed`
--
ALTER TABLE `tbl_sosmed`
  ADD PRIMARY KEY (`id_sosmed`);

--
-- Indexes for table `tbl_wisata`
--
ALTER TABLE `tbl_wisata`
  ADD PRIMARY KEY (`id_wisata`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  MODIFY `id_artikel` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id_contact` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  MODIFY `id_produk` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `tbl_profile`
--
ALTER TABLE `tbl_profile`
  MODIFY `id_profile` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_sosmed`
--
ALTER TABLE `tbl_sosmed`
  MODIFY `id_sosmed` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_wisata`
--
ALTER TABLE `tbl_wisata`
  MODIFY `id_wisata` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
