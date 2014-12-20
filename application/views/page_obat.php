<div class="col-xs-9">
	<a class="btn jejer btn-primary pull-right" href="<?php echo base_url();?>index.php/obat/tambah">Tambah</a>
	<a class="btn jejer btn-primary pull-right" href="<?php echo base_url();?>index.php/obat/link_obat">Link Diagnosa dengan Obat</a>
	<table class="table table-bordered table-hover table-condensed">
		<thead>
			<tr>
				<th>Kode obat</th>
				<th>Nama</th>
				<th>Stok</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php

				if ($obat) {
					foreach ($obat as $data) {
						echo "<tr>
								<td>$data->kode_obat</td>
								<td>$data->obat</td>
								<td>$data->qty $data->qty_label</td>
								<td>
									<div class='btn-group'>
										<a class='btn btn-primary' type='button' href='#'>Aksi</a>
										<button class='btn btn-primary dropdown-toggle' data-toggle='dropdown'>
											<span class='caret'></span>
										</button>
										<ul class='dropdown-menu' role='menu'>
											<li><a href='obat/edit/$data->kode_obat'>Edit</a></li>
											<li><a href='#' onClick='obatDelete(\"$data->kode_obat\");'>Hapus</a></li>
										</ul>
									</div>
								</td>
							</tr>
						";
					}
				}
			?>
		</tbody>
	</table>
</div>