<?php echo form_open('Siswa/edit/',array("class"=>"form-horizontal")) ?>

<div class="form-group">
		<label for="nisn" class="col-md-4 control-label">NISN</label>
		<div class="col-md-8">
			<input type="text" name="nisn" value="<?php echo ($this->input->post('nisn') ? $this->input->post('nisn') : $Siswa['nisn']); ?>" class="form-control" />
		</div>

      <label for="nama_siswa" class="col-md-4 control-label">Nama Siswa</label>
		<div class="col-md-8">
			<input type="text" name="nama_siswa" value="<?php echo ($this->input->post('nama_siswa') ? $this->input->post('nama_siswa') : $Siswa['nama_siswa']); ?>" class="form-control" />
		</div>

	  <label for="id_kelas" class="col-md-4 control-label">Id Kelas</label>
		<div class="col-md-8">
			<input type="text" name="id_kelas" value="<?php echo ($this->input->post('id_kelas') ? $this->input->post('id_kelas') : $Siswa['id_kelas']); ?>" class="form-control" id="id_kelas" />
		</div>
	</div>

	<div class="form-group">
		<label for="jenis_kelamin" class="col-md-4 control-label">Jenis Kelamin</label>
		<div class="col-md-8">
			<input type="text" name="jenis_kelamin" value="<?php echo ($this->input->post('jenis_kelamin') ? $this->input->post('jenis_kelamin') : $Siswa['jenis_kelamin']); ?>" class="form-control" id="jenis_kelamin" />
		</div>
	</div>

	<div class="form-group">
		<label for="alamat" class="col-md-4 control-label">Alamat</label>
		<div class="col-md-8">
			<input type="text" name="alamat" value="<?php echo ($this->input->post('alamat') ? $this->input->post('alamat') : $Siswa['alamat']); ?>" class="form-control" id="alamat" />
		</div>
	</div>

	<div class="form-group">
		<label for="no_hp" class="col-md-4 control-label">No.Hp</label>
		<div class="col-md-8">
			<input type="text" name="no_hp" value="<?php echo ($this->input->post('no_hp') ? $this->input->post('no_hp') : $Siswa['no_hp']); ?>" class="form-control" id="no_hp" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>