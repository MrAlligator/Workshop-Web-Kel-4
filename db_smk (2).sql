-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Apr 2022 pada 11.41
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_smk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_user`
--

CREATE TABLE `detail_user` (
  `id_guru` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `nip` varchar(9) NOT NULL,
  `nis` varchar(9) NOT NULL,
  `password` varchar(16) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_absen`
--

CREATE TABLE `tb_absen` (
  `id_absen` int(11) NOT NULL,
  `namaabsen_siswa` varchar(20) NOT NULL,
  `nisabsen_siswa` varchar(6) NOT NULL,
  `kelasabsen_siswa` varchar(3) NOT NULL,
  `ket` text NOT NULL,
  `tgl_absen` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_absen`
--

INSERT INTO `tb_absen` (`id_absen`, `namaabsen_siswa`, `nisabsen_siswa`, `kelasabsen_siswa`, `ket`, `tgl_absen`) VALUES
(6, 'Febrero Araya', 'n113', 'XI', 'Sakit', '2022-04-11'),
(7, 'Rizki', 'n112', 'X', 'Hadir', '2022-04-11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(128) NOT NULL,
  `foto_admin` varchar(128) NOT NULL,
  `nip_admin` varchar(128) NOT NULL,
  `alamat_admin` text NOT NULL,
  `jk_admin` varchar(128) NOT NULL,
  `tmpt_admin` varchar(128) NOT NULL,
  `tgl_admin` date NOT NULL,
  `agama_admin` varchar(128) NOT NULL,
  `telp_admin` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `status` varchar(128) NOT NULL DEFAULT 'admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nama_admin`, `foto_admin`, `nip_admin`, `alamat_admin`, `jk_admin`, `tmpt_admin`, `tgl_admin`, `agama_admin`, `telp_admin`, `username`, `password`, `status`) VALUES
(1, 'admin', 'admin.jpg', '123456', 'safsfa', 'laki - laki', 'Tuban', '2022-04-04', 'Islam', '082331067312', 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id_berita` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` varchar(30) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_berita`
--

INSERT INTO `tb_berita` (`id_berita`, `judul`, `isi`, `tanggal`, `foto`) VALUES
(5, 'Hari Ini KPK Serahkan Memori Kasasi Kasus Sofyan Basir ke MA', 'ASDGSSDFSAFDSAFSADFASDFSDFSDFSFFDSAFSDFSDF', '02 Dec 2019 19:28', 'img/berita/111.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_calon_siswa`
--

CREATE TABLE `tb_calon_siswa` (
  `id_daftar` int(11) NOT NULL,
  `no_daftar` varchar(8) NOT NULL,
  `nama_lengkap` char(50) NOT NULL,
  `tmptlahir` char(50) NOT NULL,
  `tgllahir` date NOT NULL,
  `jk` char(15) NOT NULL,
  `agama` char(20) NOT NULL,
  `anak_ke` int(3) NOT NULL,
  `status_dlm_keluarga` char(20) NOT NULL,
  `alamat_siswa` text NOT NULL,
  `telp_siswa` char(20) NOT NULL,
  `sekolah_asal` char(50) NOT NULL,
  `alamat_sekolah` text NOT NULL,
  `tahun_lulus` int(5) NOT NULL,
  `total_nilai_un` float NOT NULL,
  `nama_ayah` char(50) NOT NULL,
  `nama_ibu` char(50) NOT NULL,
  `alamat_ortu` text NOT NULL,
  `telp_ortu` char(20) NOT NULL,
  `perkerjaan_ayah` char(20) NOT NULL,
  `pekerjaan_ibu` char(20) NOT NULL,
  `nama_wali` char(50) NOT NULL,
  `alamat_wali` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_foto`
--

CREATE TABLE `tb_foto` (
  `id_foto` int(11) NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `ukuran` int(11) NOT NULL,
  `tipe` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_foto`
--

INSERT INTO `tb_foto` (`id_foto`, `nama_file`, `ukuran`, `tipe`) VALUES
(14, '111.jpg', 815035, 'image/jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_golongan`
--

CREATE TABLE `tb_golongan` (
  `id_golongan` int(11) NOT NULL,
  `nama_golongan` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_guru`
--

CREATE TABLE `tb_guru` (
  `id_guru` int(11) NOT NULL,
  `nip` varchar(9) NOT NULL,
  `nama_guru` varchar(20) NOT NULL,
  `jk_guru` varchar(12) NOT NULL,
  `tmptlahir` varchar(25) NOT NULL,
  `tgllahir` date NOT NULL,
  `agama_guru` varchar(12) NOT NULL,
  `alamat_guru` text NOT NULL,
  `telp_guru` varchar(12) NOT NULL,
  `status` varchar(12) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_guru`
--

INSERT INTO `tb_guru` (`id_guru`, `nip`, `nama_guru`, `jk_guru`, `tmptlahir`, `tgllahir`, `agama_guru`, `alamat_guru`, `telp_guru`, `status`, `username`, `password`) VALUES
(4, '123456789', 'Mila Marda Fatmawati', 'Perempuan', 'Bondowoso', '2000-03-02', 'Islam', 'Sukosari', '081234156112', 'guru', '123456789', '1234567890'),
(6, '082727377', 'Rizki', 'Laki - Laki', 'Banyuwangi', '1998-06-30', 'Islam', 'Prunggahan Kulon', '082331067312', 'karyawan', '0827273772', '0827273772');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jadwal`
--

CREATE TABLE `tb_jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `nama_mapel` varchar(20) NOT NULL,
  `semester` varchar(12) NOT NULL,
  `nama_guru` varchar(20) NOT NULL,
  `durasi` time NOT NULL,
  `hari` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_jadwal`
--

INSERT INTO `tb_jadwal` (`id_jadwal`, `nama_mapel`, `semester`, `nama_guru`, `durasi`, `hari`) VALUES
(1, 'Matematika', '1', 'Mila Marda Fatmawati', '00:00:07', 'Senin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `id_kelas` int(11) NOT NULL,
  `kelas` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kelas`
--

INSERT INTO `tb_kelas` (`id_kelas`, `kelas`) VALUES
(1, 'X'),
(2, 'XI'),
(3, 'XII');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mapel`
--

CREATE TABLE `tb_mapel` (
  `id_mapel` int(11) NOT NULL,
  `kode_mapel` varchar(10) NOT NULL,
  `nama_mapel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_mapel`
--

INSERT INTO `tb_mapel` (`id_mapel`, `kode_mapel`, `nama_mapel`) VALUES
(1, 'M001', 'Matematika'),
(2, 'M002', 'Bahasa Indonesia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_materi`
--

CREATE TABLE `tb_materi` (
  `id_materi` int(11) NOT NULL,
  `nip` varchar(25) NOT NULL,
  `nama_materi` varchar(20) NOT NULL,
  `kelas` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_nilai`
--

CREATE TABLE `tb_nilai` (
  `id_nilai` int(11) NOT NULL,
  `nis` varchar(6) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelas` varchar(3) NOT NULL,
  `mapel` varchar(128) NOT NULL,
  `nilai_ulgn_harian` int(3) NOT NULL,
  `nilai_uts` int(3) NOT NULL,
  `nilai_uas` int(3) NOT NULL,
  `nilai_sikap` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_nilai`
--

INSERT INTO `tb_nilai` (`id_nilai`, `nis`, `nama`, `kelas`, `mapel`, `nilai_ulgn_harian`, `nilai_uts`, `nilai_uas`, `nilai_sikap`) VALUES
(1, 'n112', 'Rizki', 'X', '', 0, 0, 0, ''),
(2, 'n112', 'Rizki', 'X', 'Matematika', 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengumuman`
--

CREATE TABLE `tb_pengumuman` (
  `id_peng` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` varchar(30) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pengumuman`
--

INSERT INTO `tb_pengumuman` (`id_peng`, `judul`, `isi`, `tanggal`, `foto`) VALUES
(1, 'BPBD Jawa Barat Siap Siaga Hadapi Bencana Hidrometeorologi', 'asFfsafsafasFFFDSAGGHDFHFDFGJFGJFGDJGFJGFJ', '02 Dec 2019 20:08', 'img/berita/111.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_prestasi`
--

CREATE TABLE `tb_prestasi` (
  `id_prestasi` int(11) NOT NULL,
  `judul_prestasi` varchar(20) NOT NULL,
  `isi_prestasi` varchar(50) NOT NULL,
  `jenis_p` text NOT NULL,
  `tanggal_prestasi` date NOT NULL,
  `foto_prestasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_siswa` int(11) NOT NULL,
  `nis` varchar(9) NOT NULL,
  `nama_siswa` varchar(20) NOT NULL,
  `kelas` varchar(3) NOT NULL,
  `jk_siswa` text NOT NULL,
  `agama_siswa` text NOT NULL,
  `tmptlhr_siswa` text NOT NULL,
  `tgllhr_siswa` date NOT NULL,
  `alamat_siswa` text NOT NULL,
  `telp_siswa` text NOT NULL,
  `status` varchar(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_siswa`, `nis`, `nama_siswa`, `kelas`, `jk_siswa`, `agama_siswa`, `tmptlhr_siswa`, `tgllhr_siswa`, `alamat_siswa`, `telp_siswa`, `status`, `username`, `password`) VALUES
(19, 'n112', 'Rizki', 'X', 'Perempuan', 'Islam', 'Banyuwangi', '2019-12-01', 'Sukosari', '082412531771', 'siswa', 'n112', 'n112'),
(20, 'n113', 'Febrero Araya', 'XI', 'Laki - Laki', 'Islam', 'Banyuwangi', '1999-02-09', 'Sukosari', '081234156112', 'siswa', 'n113', 'n113');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_video`
--

CREATE TABLE `tb_video` (
  `id_video` int(11) NOT NULL,
  `nama_file` varchar(200) NOT NULL,
  `ukuran` int(11) NOT NULL,
  `tipe` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_walikelas`
--

CREATE TABLE `tb_walikelas` (
  `id_walikelas` int(6) NOT NULL,
  `nip` varchar(6) NOT NULL,
  `kelas` varchar(3) NOT NULL,
  `usname` varchar(128) NOT NULL,
  `passwd` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_absen`
--
ALTER TABLE `tb_absen`
  ADD PRIMARY KEY (`id_absen`);

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `tb_calon_siswa`
--
ALTER TABLE `tb_calon_siswa`
  ADD PRIMARY KEY (`id_daftar`);

--
-- Indeks untuk tabel `tb_foto`
--
ALTER TABLE `tb_foto`
  ADD PRIMARY KEY (`id_foto`);

--
-- Indeks untuk tabel `tb_golongan`
--
ALTER TABLE `tb_golongan`
  ADD PRIMARY KEY (`id_golongan`);

--
-- Indeks untuk tabel `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indeks untuk tabel `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indeks untuk tabel `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `tb_mapel`
--
ALTER TABLE `tb_mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indeks untuk tabel `tb_materi`
--
ALTER TABLE `tb_materi`
  ADD PRIMARY KEY (`id_materi`);

--
-- Indeks untuk tabel `tb_nilai`
--
ALTER TABLE `tb_nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indeks untuk tabel `tb_pengumuman`
--
ALTER TABLE `tb_pengumuman`
  ADD PRIMARY KEY (`id_peng`);

--
-- Indeks untuk tabel `tb_prestasi`
--
ALTER TABLE `tb_prestasi`
  ADD PRIMARY KEY (`id_prestasi`);

--
-- Indeks untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indeks untuk tabel `tb_video`
--
ALTER TABLE `tb_video`
  ADD PRIMARY KEY (`id_video`);

--
-- Indeks untuk tabel `tb_walikelas`
--
ALTER TABLE `tb_walikelas`
  ADD PRIMARY KEY (`id_walikelas`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_absen`
--
ALTER TABLE `tb_absen`
  MODIFY `id_absen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_calon_siswa`
--
ALTER TABLE `tb_calon_siswa`
  MODIFY `id_daftar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_foto`
--
ALTER TABLE `tb_foto`
  MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tb_golongan`
--
ALTER TABLE `tb_golongan`
  MODIFY `id_golongan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_guru`
--
ALTER TABLE `tb_guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_kelas`
--
ALTER TABLE `tb_kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_mapel`
--
ALTER TABLE `tb_mapel`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_materi`
--
ALTER TABLE `tb_materi`
  MODIFY `id_materi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_nilai`
--
ALTER TABLE `tb_nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_pengumuman`
--
ALTER TABLE `tb_pengumuman`
  MODIFY `id_peng` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_prestasi`
--
ALTER TABLE `tb_prestasi`
  MODIFY `id_prestasi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `tb_video`
--
ALTER TABLE `tb_video`
  MODIFY `id_video` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
