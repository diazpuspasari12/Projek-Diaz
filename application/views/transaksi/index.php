<div class="pull-right">
	<a href="<?php echo site_url('Transaksi/add'); ?>" class="btn btn-success">Add</a>
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>Id Transaksi</th>
		<th>NISN</th>
		<th>Tanggal Transaksi</th>
		<th>Nominal</th>
		<th>Actions</th>
    </tr>
	<?php foreach($Transaksi as $b){ ?>
    <tr>
		<td><?php echo $b['id_transaksi']; ?></td>
		<td><?php echo $b['nisn']; ?></td>
		<td><?php echo $b['tgl_transaksi']; ?></td>
		<td><?php echo $b['nominal']; ?></td>
		<td>
            <a href="<?php echo site_url('Transaksi/edit/'.$b['id_transaksi']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?= site_url('Transaksi/remove/'.$b['id_transaksi']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
        <td>
        	
        </td>
    </tr>
	<?php } ?>
</table>
