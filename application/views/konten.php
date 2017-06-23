<div class="jumbotron">
	<?php
	$id_login   = $this->session->userdata("id_user");
    $datalogin  = $this->db->get_where("tb_user", array('id_user'=> $id_login))->row();
	?>
    <h2>Selamat Datang <?php echo $datalogin->nama; ?></h2>
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