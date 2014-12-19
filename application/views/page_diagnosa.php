<div class="col-xs-9">
	<a class="btn btn-primary pull-right" href="<?php echo base_url();?>index.php/diagnosa/tambah">Tambah</a>
	<table class="table table-bordered table-hover table-condensed">
		<thead>
			<tr>
				<th>Kode Diagnosa</th>
				<th>Nama Pasien</th>
				<th>Tanggal Masuk</th>
				<th>Diagnosa</th>
				<th>Status</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php
				if ($diagnosa) {
					foreach ($diagnosa as $data) {
						echo "<tr>
								<td>$data->kode_diagnosa</td>
								<td>$data->nama</td>
								<td>$data->tgl_msk</td>
								<td>$data->diagnosa</td>
								<td>$data->status</td>
								<td>
									<div class='btn-group'>
										<a class='btn btn-primary' type='button' href='diagnosa/lihat/$data->kode_diagnosa'>Lihat</a>
										<button class='btn btn-primary dropdown-toggle' data-toggle='dropdown'>
											<span class='caret'></span>
										</button>
										<ul class='dropdown-menu' role='menu'>
											<li><a href='diagnosa/edit/$data->kode_diagnosa'>Edit</a></li>
											<li><a href='#' onClick='diagnosaDelete(\"$data->kode_diagnosa\");'>Hapus</a></li>
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