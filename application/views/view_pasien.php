<div class="col-xs-9">
	<h3>Detail Pelanggan</h3>
	<table class="table table-bordered table-hover table-condensed">
	<?php
		if ($pasien) {
			foreach ($pasien as $data_pasien) {
				$umur = HitungUmur($data_pasien->tanggal_lahir);
				echo "<tr><th>Kode Pelanggan</th><td>$data_pasien->kode_pasien</td></tr>";
				echo "<tr><th>Nama</th><td>$data_pasien->nama</td></tr>";
				echo "<tr><th>Alamat</th><td>$data_pasien->alamat</td></tr>";
				echo "<tr><th>Tempat/Tanggal lahir</th><td>$data_pasien->tempat_lahir / $data_pasien->tanggal_lahir</td></tr>";
				echo "<tr><th>Umur</th><td>$umur tahun</td></tr>";
				echo "<tr><th>Jenis Kelamin</th><td>$data_pasien->kelamin</td></tr>";
			}
		}
	?>
	</table>
	<h3>Riwayat Pemeriksaan</h3>
	<table class="table table-bordered table-hover table-condensed">
		<thead>
			<tr>
				<th>Kode Diagnosa</th>
				<th>Tanggal Masuk</th>
				<th>Tanggal Keluar</th>
				<th>Diagnosa</th>
				<th>Status</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php
				if ($history) {
					foreach ($history as $data) {
						echo "<tr>
								<td>$data->kode_diagnosa</td>
								<td>$data->tgl_msk</td>
								<td>$data->tgl_kluar</td>
								<td>$data->diagnosa</td>
								<td>$data->status</td>
								<td>
									<div class='btn-group'>
										<a class='btn btn-primary' type='button' href='../../diagnosa/lihat/$data->kode_diagnosa'>Lihat</a>
										<button class='btn btn-primary dropdown-toggle' data-toggle='dropdown'>
											<span class='caret'></span>
										</button>
										<ul class='dropdown-menu' role='menu'>
											<li><a href='#edit/$data->kode_pasien'>Edit</a></li>
											<li><a href='#delete/$data->kode_pasien'>Hapus</a></li>
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