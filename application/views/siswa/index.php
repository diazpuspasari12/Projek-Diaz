<div class="pull-right">
	<a href="<?php echo site_url('Siswa/add'); ?>" class="btn btn-success">Add</a>
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>NISN</th>
		<th>Nama Siswa</th>
		<th>Id Kelas</th>
		<th>Jenis Kelamin</th>
		<th>Alamat</th>
		<th>No.Hp</th>
		<th>Actions</th>
    </tr>
	<?php foreach($siswa as $b){ ?>
    <tr>
		<td><?php echo $b['nisn']; ?></td>
		<td><?php echo $b['nama_siswa']; ?></td>
		<td><?php echo $b['id_kelas']; ?></td>
		<td><?php echo $b['jenis_kelamin']; ?></td>
		<td><?php echo $b['alamat']; ?></td>
		<td><?php echo $b['no_hp']; ?></td>
		<td>
            <a href="<?php echo site_url('Siswa/edit/'.$b['nisn']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('Siswa/remove/'.$b['nisn']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
        <td>
        	
        </td>
    </tr>
	<?php } ?>
</table>
