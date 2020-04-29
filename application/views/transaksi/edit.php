<?php echo form_open('Transaksi/edit/',array("class"=>"form-horizontal")) ?>

<div class="form-group">

	 <label for="id_transaksi" class="col-md-4 control-label">Id Transaksi</label>
		<div class="col-md-8">
			<input type="text" name="id_transaksi" value="<?php echo ($this->input->post('id_transaksi') ? $this->input->post('id_transaksi') : $Transaksi['id_transaksi']); ?>" class="form-control" id="id_transaksi" />
		</div>
      
      <label for="nisn" class="col-md-4 control-label">NISN</label>
		<div class="col-md-8">
			<input type="text" name="nisn" value="<?php echo ($this->input->post('nisn') ? $this->input->post('nisn') : $Transaksi['nisn']); ?>" class="form-control" id="nisn" />
		</div>

	</div>
	<div class="form-group">
		<label for="tgl_transaksi" class="col-md-4 control-label">Tanggal Transaksi</label>
		<div class="col-md-8">
			<input type="date" name="tgl_transaksi" value="<?php echo ($this->input->post('tgl_transaksi') ? $this->input->post('tgl_transaksi') : $Transaksi['tgl_transaksi']); ?>" class="form-control" id="tgl_transaksi" />
		</div>
	</div>
	<div class="form-group">
		<label for="nominal" class="col-md-4 control-label">Nominal</label>
		<div class="col-md-8">
			<input type="text" name="nominal" value="<?php echo ($this->input->post('nominal') ? $this->input->post('nominal') : $Transaksi['nominal']); ?>" class="form-control" id="nominal" />
		</div>
	</div>
		
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>