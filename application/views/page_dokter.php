<div class="col-xs-9">
	<a class="btn btn-primary pull-right" href="<?php echo base_url();?>index.php/tambah/dokter">Tambah</a>
	<table class="table table-bordered table-hover table-condensed">
		<thead>
			<tr>
				<th>Kode Dokter</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Kontak</th>
				<th>Role</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php

				if ($dokter) {
					foreach ($dokter as $data) {
						echo "<tr>
								<td>$data->kode_dokter</td>
								<td>$data->nama_dokter</td>
								<td>$data->alamat</td>
								<td>$data->kontak</td>
								<td>$data->spesialis</td>
								<td>
									<div class='btn-group'>
										<a class='btn btn-primary' type='button' href='#lihat/$data->kode_dokter'>Lihat</a>
										<button class='btn btn-primary dropdown-toggle' data-toggle='dropdown'>
											<span class='caret'></span>
										</button>
										<ul class='dropdown-menu' role='menu'>
											<li><a href='#edit/$data->kode_dokter'>Edit</a></li>
											<li><a href='#delete/$data->kode_dokter'>Hapus</a></li>
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