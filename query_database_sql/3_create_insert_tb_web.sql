/* Query SQL untuk membuat table */;
CREATE TABLE `tb_web` (
  `id_web` int(11) NOT NULL,
  `nama_web` varchar(35) NOT NULL,
  `domain_web` varchar(10) NOT NULL,
  `slogan_web` text NOT NULL,
  `alamat_web` text NOT NULL,
  `telp_web` varchar(16) NOT NULL,
  `fax_web` varchar(16) NOT NULL,
  `email_web` varchar(50) NOT NULL,
  `author_web` varchar(50) NOT NULL,
  `deskripsi_web` text NOT NULL,
  `keyword_web` text NOT NULL,
  `tahun_web` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/* Query SQL untuk memasukan data ke dalam table */;
INSERT INTO `tb_web` (`id_web`, `nama_web`, `domain_web`, `slogan_web`, `alamat_web`, `telp_web`, `fax_web`, `email_web`, `author_web`, `deskripsi_web`, `keyword_web`, `tahun_web`) VALUES
(1, ‘PPDB RUMIT’, ‘.ID’, ‘Aplikasi Pendaftaran Peserta Didik Baru Berbasis Web’, ‘Ds. Maju Jaya RT 09 RW 02, Kecamatan Maju Jaya, Kabupaten Pati, Provinsi Jawa Tengah’, ‘081215409236’, ‘—‘, ‘rumitkode@gmail.com’, ‘Kode Rumit’, ‘PPDB RUMIT adalah Aplikasi Pendaftaran Peserta Didik Baru Berbasis Web’, ‘Aplikasi PPDB, Web PPDB Online Free’, 2017);

/* Query SQL Untuk menjadikan primary key suatu field */;
ALTER TABLE `tb_web`
ADD PRIMARY KEY (`id_web`);

/* Membuat suatu field menjadi auto increment */;
ALTER TABLE `tb_web`
MODIFY `id_web` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
