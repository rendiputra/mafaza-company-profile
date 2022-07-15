-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Jul 2022 pada 22.10
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mafaza`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_alamat`
--

CREATE TABLE `t_alamat` (
  `id_alamat` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `link_maps` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_alamat`
--

INSERT INTO `t_alamat` (`id_alamat`, `alamat`, `link_maps`, `created_at`) VALUES
(1, 'Jl. H. Madrani No.1, Brubahan, Grendeng, Kec. Purwokerto Utara, Kabupaten Banyumas, Jawa Tengah 53122', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d989.1337580568752!2d109.24981936651538!3d-7.40587801352809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e655eeffc9048e3%3A0x2da558d27eaceb91!2sMasjid%20Fatimatuzzahra!5e0!3m2!1sid!2sid!4v1651597824836!5m2!1sid!2sid', '2022-07-15 17:12:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_artikel`
--

CREATE TABLE `t_artikel` (
  `id_artikel` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_artikel`
--

INSERT INTO `t_artikel` (`id_artikel`, `title`, `description`, `image`, `created_at`, `updated_at`, `deleted_at`, `id_user`) VALUES
(1, 'PENDAFTARAN PESERTA PENDIDIKAN GURU TPQ ANGKATAN VII', '              <p> Assalamu\'alaikum warahmatullahi wabarakatuh </p>\r\n              <p> Pesantren Mahasiswa/(i) Masjid Fatimatuzzahra adalah tempat melahirkan akademisi islami, menempa skill dan ruhani untuk wujudkan kejayaan ummat. </p>\r\n              <p> Di era pandemi, menjadi mahasiswa dalam menempuh pendidikan, bisa juga loh sekaligus menjadi santri dalam menempa dan meningkatkan ilmu ruhani. Kegiatan yang diikuti insyaAllah bermanfaat, meningkatkan softskill dan akan langsung berperan untuk ummat. </p>\r\n              <p> Kuliah sambil Nyantri? Di Mafaza Aja! </p>\r\n              <p> Kriteria Calon Pesantren Mahasiswa/(i) Masjid Fatimatuzzahra Tahun 2021<br>\r\n                1. Mahasiswa/(i) muslim S1/D3/Sederajat<br>\r\n                - putra : Mahasiswa Tahun 2021 dan 2020<br>\r\n                - putri : Mahasiswi Tahun 2021<br>\r\n                2. Mendaftar di link pendaftaran<br>\r\n                3. Mengikuti seluruh rangkaian seleksi yang ditetapkan </p>\r\n              <p> Selagi masih muda, mari gunakan kesempatan yang ada.\r\n                Yuk bergabung menjadi bagian dari kami!  </p>\r\n              <p>  </p>', '2021-04-12.jpg', '2021-07-28 13:18:46', '2022-06-22 13:22:25', NULL, 1),
(2, 'PENDAFTARAN PESERTA PENDIDIKAN GURU TPQ ANGKATAN VII', '              <p> Assalamu\'alaikum warahmatullahi wabarakatuh </p>\r\n              <p> Pesantren Mahasiswa/(i) Masjid Fatimatuzzahra adalah tempat melahirkan akademisi islami, menempa skill dan ruhani untuk wujudkan kejayaan ummat. </p>\r\n              <p> Di era pandemi, menjadi mahasiswa dalam menempuh pendidikan, bisa juga loh sekaligus menjadi santri dalam menempa dan meningkatkan ilmu ruhani. Kegiatan yang diikuti insyaAllah bermanfaat, meningkatkan softskill dan akan langsung berperan untuk ummat. </p>\r\n              <p> Kuliah sambil Nyantri? Di Mafaza Aja! </p>\r\n              <p> Kriteria Calon Pesantren Mahasiswa/(i) Masjid Fatimatuzzahra Tahun 2021<br>\r\n                1. Mahasiswa/(i) muslim S1/D3/Sederajat<br>\r\n                - putra : Mahasiswa Tahun 2021 dan 2020<br>\r\n                - putri : Mahasiswi Tahun 2021<br>\r\n                2. Mendaftar di link pendaftaran<br>\r\n                3. Mengikuti seluruh rangkaian seleksi yang ditetapkan </p>\r\n              <p> Selagi masih muda, mari gunakan kesempatan yang ada.\r\n                Yuk bergabung menjadi bagian dari kami!  </p>\r\n              <p>  </p>', '2021-07-28.jpg', '2021-07-28 13:18:46', '2022-06-22 13:22:25', NULL, 1),
(17, 'PENDAFTARAN PESERTA PENDIDIKAN GURU TPQ ANGKATAN VII(edited)', '<p>Assalamu&#39;alaikum warahmatullahi wabarakatuh</p>\r\n\r\n<p>Pesantren Mahasiswa/(i) Masjid Fatimatuzzahra adalah tempat melahirkan akademisi islami, menempa skill dan ruhani untuk wujudkan kejayaan ummat.</p>\r\n\r\n<p>Di era pandemi, menjadi mahasiswa dalam menempuh pendidikan, bisa juga loh sekaligus menjadi santri dalam menempa dan meningkatkan ilmu ruhani. Kegiatan yang diikuti insyaAllah bermanfaat, meningkatkan softskill dan akan langsung berperan untuk ummat.</p>\r\n\r\n<p>Kuliah sambil Nyantri? Di Mafaza Aja!</p>\r\n\r\n<p>Kriteria Calon Pesantren Mahasiswa/(i) Masjid Fatimatuzzahra Tahun 2021<br />\r\n1. Mahasiswa/(i) muslim S1/D3/Sederajat<br />\r\n- putra : Mahasiswa Tahun 2021 dan 2020<br />\r\n- putri : Mahasiswi Tahun 2021<br />\r\n2. Mendaftar di link pendaftaran<br />\r\n3. Mengikuti seluruh rangkaian seleksi yang ditetapkan</p>\r\n\r\n<p>Selagi masih muda, mari gunakan kesempatan yang ada. Yuk bergabung menjadi bagian dari kami!</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2021-04-12.jpg', '2021-06-17 15:27:47', '2022-07-15 15:28:32', NULL, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_contact_us`
--

CREATE TABLE `t_contact_us` (
  `id_contact_us` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_contact_us`
--

INSERT INTO `t_contact_us` (`id_contact_us`, `nama`, `email`, `subject`, `message`, `created_at`) VALUES
(1, '123qwe', 'qwe@qwe.qwe', 'qwe', 'qwe', '2022-07-15 01:09:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_desc_donasi`
--

CREATE TABLE `t_desc_donasi` (
  `id_desc_donasi` int(11) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_desc_donasi`
--

INSERT INTO `t_desc_donasi` (`id_desc_donasi`, `description`, `created_at`, `updated_at`, `id_user`) VALUES
(1, '<p><em>Perumpamaan orang yang menginfakkan hartanya di jalan Allah seperti sebutir biji yang menumbuhkan tujuh tangkai, pada setiap tangkai ada seratus biji. Allah melipatgandakan bagi siapa yang Dia kehendaki, dan Allah Maha Luas, Maha Mengetahui.</em></p>\r\n\r\n<p><em>(Q.S. Al-Baqarah : 261)</em></p>\r\n\r\n<p><strong>Rekening Donasi:<br />\r\nBank Muamalat: 541-007-9989 (a.n Masjid Fatimatuzzahra)<br />\r\nBank Syariah Indonesia: 710-497-8187 (a.n LAZ Al-Irsyad Purwokerto) </strong></p>\r\n', '2022-06-22 13:10:55', '2022-06-22 13:10:55', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_desc_profile`
--

CREATE TABLE `t_desc_profile` (
  `id_desc_profile` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_desc_profile`
--

INSERT INTO `t_desc_profile` (`id_desc_profile`, `title`, `description`, `created_at`) VALUES
(1, 'Profile Masjid Fatimatuzzahra', '<p>Masjid Fatimatuzzahra didirikan 2 Desember 1994, dihitung dari dilaksanakannya shalat jum&#39;at pertama yang dilaksanakan di Masjid Fatimatuzzahra.</p>\r\n\r\n<p>Masjid Fatimatuzzahra memiliki visi dan misi, sebagai berikut:</p>\r\n\r\n<p><strong>&quot;Terwujudnya lembaga pemberdayaan umat yang menyuarakan moderasi Islam yang berwawasan.&quot;</strong></p>\r\n\r\n<ul>\r\n	<li>Meningkatkan kualitas pelayanan Ibadah yang sesuai syariah berhaluan ahlus sunah wal jama&#39;ah.</li>\r\n	<li>Meningkatkan sumber daya umat melalui pendidikan dan pelatihan.</li>\r\n	<li>Menerapkan pengelolaan masjid yang modern dan wawasan lingkungan.</li>\r\n</ul>\r\n', '2022-06-16 02:49:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_gallery`
--

CREATE TABLE `t_gallery` (
  `id_gallery` int(11) NOT NULL,
  `image_path` text NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_gallery`
--

INSERT INTO `t_gallery` (`id_gallery`, `image_path`, `description`, `created_at`, `updated_at`, `deleted_at`, `id_user`) VALUES
(1, 'kegiatan1.jpeg', 'kegiatan1.jpeg', '2022-06-22 14:00:33', '2022-06-22 14:00:33', NULL, 1),
(2, 'kegiatan2.jpeg', 'kegiatan2.jpeg', '2022-06-22 14:00:33', '2022-06-22 14:00:33', NULL, 1),
(3, 'kegiatan3.jpeg', 'kegiatan3.jpeg', '2022-06-22 14:00:33', '2022-06-22 14:00:33', NULL, 1),
(4, 'kegiatan1.jpeg', 'kegiatan1.jpeg', '2022-06-22 14:00:33', '2022-06-22 14:00:33', NULL, 1),
(5, 'kegiatan5.jpeg', 'kegiatan5.jpeg', '2022-06-22 14:00:33', '2022-06-22 14:00:33', NULL, 1),
(6, 'kegiatan1.jpeg', 'kegiatan1.jpeg', '2022-06-22 14:00:33', '2022-06-22 14:00:33', NULL, 1),
(7, 'kegiatan2.jpeg', 'kegiatan2.jpeg', '2022-06-22 14:00:33', '2022-06-22 14:00:33', NULL, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_kegiatan`
--

CREATE TABLE `t_kegiatan` (
  `id_kegiatan` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `badge` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_kegiatan`
--

INSERT INTO `t_kegiatan` (`id_kegiatan`, `title`, `description`, `badge`, `created_at`) VALUES
(1, 'Pemberdayaan Zakat', 'Melayani pembayaran zakat dan menyalurkan zakat kepada yang membutuhkan.', '<i class=\"bi bi-cash-coin\"></i>', '2022-06-16 03:25:12'),
(2, 'Infaq & Shodaqoh', 'Menerima infaq & Shodaqoh bagi jamaah yang ingin berbagi dan akan menyalurkannya kepada umat yang membutuhkan.', '<i class=\"bi bi-envelope-open\"></i>', '2022-06-16 03:25:12'),
(3, 'Perpustakaan', 'Menyediakan ruang perpustakaan untuk jamaah yang ingin membaca dan menambah wawasan.', '<i class=\"bi bi-book\"></i>', '2022-06-16 08:20:39'),
(4, 'Taman Pendidikan Al-Qur\'an', 'Memberikan pengajaran Al-Quran dan dasar - dasar dinul Islam kepada anak - anak.', '<i class=\"bi bi-easel2\"></i>', '2022-06-16 08:20:39'),
(5, 'Menyelenggarakan Pengajian Rutin', 'Menghadirkan ustadz - ustadz yang akan memberikan wawasan Islam kepada jamaah.', '<i class=\"bi bi-moon-stars-fill\"></i>', '2022-06-16 08:22:04'),
(6, 'Menyelenggarakan Dakwah Islam/Tabliq Akbar', 'Event yang akan dihadiri Kyai dan ustadz ternama dari dalam maupun luar Jawa.', '<i class=\"bx bx-arch\"></i>', '2022-06-16 08:22:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_users`, `nama`, `email`, `password`, `created_at`) VALUES
(1, 'qwe', 'qwe@qwe.qwe', '$2y$10$XPPukE1GznBVHHtQ/Mr6v.uU9y2NALViSuvmP.N4a54FTT9BD87GO', '2022-07-15 19:22:47');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `t_alamat`
--
ALTER TABLE `t_alamat`
  ADD PRIMARY KEY (`id_alamat`);

--
-- Indeks untuk tabel `t_artikel`
--
ALTER TABLE `t_artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indeks untuk tabel `t_contact_us`
--
ALTER TABLE `t_contact_us`
  ADD PRIMARY KEY (`id_contact_us`);

--
-- Indeks untuk tabel `t_desc_donasi`
--
ALTER TABLE `t_desc_donasi`
  ADD PRIMARY KEY (`id_desc_donasi`);

--
-- Indeks untuk tabel `t_desc_profile`
--
ALTER TABLE `t_desc_profile`
  ADD PRIMARY KEY (`id_desc_profile`);

--
-- Indeks untuk tabel `t_gallery`
--
ALTER TABLE `t_gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indeks untuk tabel `t_kegiatan`
--
ALTER TABLE `t_kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `t_alamat`
--
ALTER TABLE `t_alamat`
  MODIFY `id_alamat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `t_artikel`
--
ALTER TABLE `t_artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `t_contact_us`
--
ALTER TABLE `t_contact_us`
  MODIFY `id_contact_us` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `t_desc_donasi`
--
ALTER TABLE `t_desc_donasi`
  MODIFY `id_desc_donasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `t_desc_profile`
--
ALTER TABLE `t_desc_profile`
  MODIFY `id_desc_profile` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `t_gallery`
--
ALTER TABLE `t_gallery`
  MODIFY `id_gallery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `t_kegiatan`
--
ALTER TABLE `t_kegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
