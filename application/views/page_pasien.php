<div class="col-xs-9">
	<a class="btn btn-primary pull-right" href="<?php echo base_url();?>index.php/pasien/tambah">Tambah</a>
	<table class="table table-bordered table-hover table-condensed">
		<thead>
			<tr>
				<th>Kode Pelanggan</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Umur</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php

				if ($pasien) {
					foreach ($pasien as $data) {
						$umur = HitungUmur($data->tanggal_lahir);
						echo "<tr>
								<td>$data->kode_pasien</td>
								<td>$data->nama</td>
								<td>$data->alamat</td>
								<td>$umur tahun</td>
								<td>
									<div class='btn-group'>
										<a class='btn btn-primary' type='button' href='pasien/lihat/$data->kode_pasien'>Lihat</a>
										<button class='btn btn-primary dropdown-toggle' data-toggle='dropdown'>
											<span class='caret'></span>
										</button>
										<ul class='dropdown-menu' role='menu'>
											<li><a href='#edit/$data->kode_pasien'>Edit</a></li>
											<li><a onClick='pasienDelete($data->kode_pasien);'>Hapus</a></li>
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