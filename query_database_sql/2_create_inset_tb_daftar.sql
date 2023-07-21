/* Query SQL untuk membuat table */;
CREATE TABLE `tb_daftar` (
  `id_daftar` int(11) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `kelamin_siswa` enum('Pria','Wanita') NOT NULL,
  `tgl_lahir_siswa` date NOT NULL,
  `agama_siswa` enum('Islam','Kristen','Katholik','Budha','Hindu','Konghuchu') NOT NULL,
  `alamat_siswa` text NOT NULL,
  `asal_sekolah_siswa` varchar(60) NOT NULL,
  `no_hp_siswa` varchar(15) NOT NULL,
  `nama_ayah_siswa` varchar(60) NOT NULL,
  `nama_ibu_siswa` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/* Query SQL untuk memasukan data ke dalam table */;
INSERT INTO `tb_daftar` (`id_daftar`, `nama_siswa`, `kelamin_siswa`, `tgl_lahir_siswa`, `agama_siswa`, `alamat_siswa`, `asal_sekolah_siswa`, `no_hp_siswa`, `nama_ayah_siswa`, `nama_ibu_siswa`) VALUES
(1, ‘Andi Subiyanto’, ‘Pria’, ‘1998-03-03’, ‘Islam’, ‘Ds. maju Rt 05 Rw 02’, ‘SMP N 1 Merdeka’, ‘0101010101’, ‘Pak Andi’, ‘Ibu Ani’),
(3, ‘Ahmad Zainul’, ‘Pria’, ‘1998-02-28’, ‘Islam’, ‘Ds. Maju’, ‘SMP N 1 Merdeka’, ‘0101010101’, ‘Pak Bayu’, ‘Ibu Dewi’);

/* Query SQL Untuk menjadikan primary key suatu field */;
ALTER TABLE `tb_daftar`
ADD PRIMARY KEY (`id_daftar`);

/* Membuat suatu field menjadi auto increment */;
ALTER TABLE `tb_daftar`
MODIFY `id_daftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
