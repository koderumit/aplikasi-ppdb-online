		<h3><?php echo $title; ?></h3>
		<hr>
		<?php if ($this->session->flashdata('berhasil_simpan')) { ?>
		 	<?php $this->load->view('alert/berhasil_simpan'); ?>
		 <?php } ?>
		<?php echo form_open((''), 'class="form-horizontal"' ); ?>
			<div class="form-group">
				<label class="col-sm-2">Nama</label>
				<div class="col-sm-4">
					<input type="text" name="nama_siswa" class="form-control" value="<?php echo $editdata->nama_siswa; ?>" required="" autofocus>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">Jenis Kelamin</label>
				<div class="col-sm-4">
					<input type="radio" name="kelamin_siswa" value="Pria" <?php if ($editdata->kelamin_siswa == "Pria") { ?> checked=checked <?php } ?>> Pria
					<input type="radio" name="kelamin_siswa" value="Wanita" <?php if ($editdata->kelamin_siswa == "Wanita") { ?> checked=checked <?php } ?>> Wanita
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">Tanggal Lahir</label>
				<div class="col-sm-4">
					<input type="date" name="tgl_lahir_siswa" class="form-control" value="<?php echo $editdata->tgl_lahir_siswa; ?>" required="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">Agama</label>
				<div class="col-sm-4">
					<select name="agama_siswa" class="form-control" required="">
						<option value="<?php echo $editdata->agama_siswa; ?>"> -- <?php echo $editdata->agama_siswa; ?> -- </option>
						<option value="Islam">Islam</option>
						<option value="Kristen">Kristen</option>
						<option value="Katholik">Katholik</option>
						<option value="Budha">Budha</option>
						<option value="Hindu">Hindu</option>
						<option value="Konghuchu">Konghuchu</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">Alamat</label>
				<div class="col-sm-4">
					<textarea name="alamat_siswa" class="form-control" placeholder="Isi Alamat Anda" required=""><?php echo $editdata->alamat_siswa; ?></textarea>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">Asal Sekolah</label>
				<div class="col-sm-4">
					<input type="text" name="asal_sekolah_siswa" class="form-control" value="<?php echo $editdata->asal_sekolah_siswa; ?>" required="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">No HP</label>
				<div class="col-sm-4">
					<input type="number" name="no_hp_siswa" class="form-control" value="<?php echo $editdata->no_hp_siswa; ?>" required="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">Nama Ayah</label>
				<div class="col-sm-4">
					<input type="text" name="nama_ayah_siswa" class="form-control" value="<?php echo $editdata->nama_ayah_siswa; ?>" required="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">Nama Ibu</label>
				<div class="col-sm-4">
					<input type="text" name="nama_ibu_siswa" class="form-control" value="<?php echo $editdata->nama_ibu_siswa; ?>" required="">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-4">
					<input type="submit" value="Perbaharui" name="submit" class="btn btn-success">
					<input type="reset" value="Hapus" class="btn btn-danger">
					<a href="<?php echo base_url('pendaftar'); ?>" class="btn btn-warning">Batal</a>
				</div>
			</div>
		<?php echo form_close(); ?>