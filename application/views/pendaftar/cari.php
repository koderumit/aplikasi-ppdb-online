<h3>Data Buku</h3>
 
 <?php if ($this->session->flashdata('berhasil_simpan')) { ?>
 	<?php $this->load->view('alert/berhasil_simpan'); ?>
 <?php } ?>

 <?php if ($this->session->flashdata('berhasil_edit')) { ?>
 	<?php $this->load->view('alert/berhasil_edit'); ?>
 <?php } ?>

 <?php if ($this->session->flashdata('berhasil_hapus')) { ?>
 	<?php $this->load->view('alert/berhasil_hapus'); ?>
 <?php } ?>

 <?php if ($this->session->flashdata('gagal_cari')) { ?>
 	<?php $this->load->view('alert/gagal_cari'); ?>
 <?php } ?>

<a href="<?php echo base_url('buku/tambah'); ?>" class="btn btn-success">Tambah Data</a>

<div class="pull-right">
  <?php echo form_open(base_url('buku/cari'),'class="form-inline"');  ?>
    <div class="form-group">
      <input type="text" class="form-control" name="cari" placeholder="Cari Data...">
    </div>
    <button type="submit" class="btn btn-info"><i class="glyphicon glyphicon-search"></i></button>
  <?php echo form_close(); ?>
</div>

<br>
<br>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>No.</th>
			<th>Kode Buku</th>
			<th>Judul Buku</th>
			<th>No Isbn</th>
			<th>Penulis</th>
			<th>Harga Jual</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$no = 1 ;
		foreach ($data as $value) { ?>
			<tr>
				<td><?php echo $no; ?></td>
				<td><?php echo $value['id_buku']; ?></td>
				<td><?php echo $value['judul']; ?></td>
				<td><?php echo $value['noisbn'] ?></td>
				<td><?php echo $value['penulis'] ?></td>
				<td><?php echo $value['harga_jual'] ?></td>
				<td>
					<a href="#" class="btn btn-xs btn-primary">
						<i class="glyphicon glyphicon-list"></i>
					</a>
					<a href="<?php echo base_url('buku/edit/'.$value['id_buku']); ?>" class="btn btn-xs btn-warning">
						<i class="glyphicon glyphicon-pencil"></i>
					</a>
					<a href="<?php echo base_url('buku/hapus/'.$value['id_buku']); ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')" class="btn btn-xs btn-danger">
						<i class="glyphicon glyphicon-trash"></i>
					</a>
				</td>
			</tr>
		<?php
		$no++;
		}
		?>

		
	</tbody>
</table>