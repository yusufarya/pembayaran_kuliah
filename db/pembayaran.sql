-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Apr 2021 pada 10.31
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pembayaran`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `id` int(11) NOT NULL,
  `kd_jurusan` int(11) NOT NULL,
  `nama_jurusan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`id`, `kd_jurusan`, `nama_jurusan`) VALUES
(1, 1101, 'Sistem Informasi'),
(2, 1102, 'Teknik Komputer Jaringan'),
(3, 1103, 'Teknologi Informatika'),
(4, 1104, 'Teknik Industri'),
(5, 1105, 'Teknik Elektro'),
(6, 1106, 'Akuntansi'),
(7, 1107, 'Ilmu Komunikasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `kd_kelas` varchar(56) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `kd_kelas`) VALUES
(1, 'SI.01A'),
(2, 'SI.01B'),
(3, 'TKJ.02A'),
(4, 'TKJ.02B'),
(5, 'TI.03A'),
(6, 'TI.03B'),
(7, 'TI.04A'),
(8, 'TI.04B'),
(9, 'TEL.05A'),
(10, 'TEL.05B'),
(11, 'AK.06A'),
(12, 'AK.06B');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_id`
--

CREATE TABLE `role_id` (
  `id` int(11) NOT NULL,
  `role` varchar(56) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `role_id`
--

INSERT INTO `role_id` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `semester`
--

CREATE TABLE `semester` (
  `id_semester` int(11) NOT NULL,
  `kd_semester` int(11) NOT NULL,
  `jenis_semester` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `semester`
--

INSERT INTO `semester` (`id_semester`, `kd_semester`, `jenis_semester`) VALUES
(1, 1, 'Ganjil'),
(2, 2, 'Genap'),
(3, 3, 'Ganjil'),
(4, 4, 'Genap'),
(5, 5, 'Ganjil'),
(6, 6, 'Genap'),
(7, 7, 'Ganjil'),
(8, 8, 'Genap');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(56) NOT NULL,
  `nim` varchar(50) NOT NULL,
  `kd_kelas` varchar(56) NOT NULL,
  `jurusan_id` int(11) NOT NULL,
  `email` varchar(56) NOT NULL,
  `no_telp` char(20) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `image` varchar(60) NOT NULL,
  `password` varchar(128) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `nim`, `kd_kelas`, `jurusan_id`, `email`, `no_telp`, `alamat`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(4, 'Yusuf Aryadilla', '1013933', '', 1, 'aryaherby29nov2k@gmail.com', '087897551129', 'Desa Mekar Kondang rt 04/02 kec. Sukadiri, Tangerang, Banten.', 'default.jpg', '$2y$10$BOok7Y71Hm5tfRkviRll1ed/jWavy5KaeuZuw4XDrEQ4o6fOhCime', 2, 1, 1615193933),
(5, 'Admin Payment Unv abc', '', '', 0, 'admin@gmail.com', '', '', 'default.jpg', '$2y$10$JMV/DvHyzOYmsVAagztat.qEyYoUXExhI73PoABUxgC9tbK6z7I0e', 1, 1, 1615206028),
(6, 'Budi Senja', '1066571', '', 6, 'budidddd@gmail.com', '', '', 'default.jpg', '$2y$10$BsA7mPBIblNCwf0WGP.ly.bbSMdbJf8qjwo20gO4ubQZye8MgLRVW', 2, 1, 1616346571),
(7, 'Ziva Magnolia', '1079456', '', 7, 'zivaaa_m@gmail.com', '', '', 'default.jpg', '$2y$10$sw5qj8f7GAlNOhOxKuRfl.ndKLN91lsVlcWxcV4EjVEDzqbo6q1va', 2, 1, 1616679456);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(4, 1, 3),
(10, 2, 4),
(12, 1, 11),
(13, 1, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'admin'),
(2, 'adm'),
(3, 'menu'),
(4, 'user'),
(5, 'pembayaran');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin/index', 'fas fa-fw fa-tachometer-alt', 1),
(2, 4, 'My Profile', 'user/index', 'fas fa-fw fa-user', 1),
(3, 4, 'Edit Profile', 'user/edit_profile', 'fas fa-fw fa-user-edit', 1),
(4, 3, 'Menu Management', 'menu/index', 'fas fa-fw fa-folder-minus', 1),
(5, 3, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(6, 1, 'Data Mahasiswa', 'admin/data_mhs', 'fas fa-fw fa-users', 1),
(7, 1, 'Role', 'admin/role', 'fas fa-fw fa-user-tie', 1),
(8, 1, 'Daftar Jurusan', 'admin/daftar_jurusan', 'fas fa-fw fa-book', 1),
(11, 4, 'Pembayaran', 'user/pembayaran', 'fas fa-comment-dollar', 1),
(12, 1, 'Data Pembayaran', 'admin/pembayaran', 'fas fa-comment-dollar', 1),
(13, 2, 'Profile', 'admin/profile_admin', 'fas fa-fw fa-user', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `role_id`
--
ALTER TABLE `role_id`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`id_semester`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `role_id`
--
ALTER TABLE `role_id`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `semester`
--
ALTER TABLE `semester`
  MODIFY `id_semester` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
