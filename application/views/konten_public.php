<div class="jumbotron">
	<img src="<?php echo base_url('assets/image/Aplikasi PPDB Online.png'); ?>" width="100%" alt="<?php echo $web->nama_web; ?> - <?php echo $web->slogan_web; ?>">
    <h2>Selamat Datang di Aplikasi <?php echo $web->nama_web; ?></h2>
    <p><?php echo $web->slogan_web; ?></p>
</div>
<div class="row">
	<div class="col-lg-4">
      <h2>Alamat</h2>
      <p><?php echo $web->alamat_web; ?></p>
    </div>
    <div class="col-lg-4">
      <h2>Kontak</h2>
      <p>Telepon : <?php echo $web->telp_web; ?> <br> Fax : <?php echo $web->fax_web; ?> <br> Email : <?php echo $web->email_web; ?></p>
   </div>
    <div class="col-lg-4">
      <h2>Tentang <?php echo $web->nama_web; ?></h2>
      <p><?php echo $web->deskripsi_web; ?></p>
    </div>
</div>