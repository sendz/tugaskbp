<div class="col-xs-9">
	<a class="btn btn-primary pull-right" href="<?php echo base_url();?>index.php/kamar/tambah">Tambah</a>
	<table class="table table-bordered table-hover table-condensed">
		<thead>
			<tr>
				<th>Kode Kamar</th>
				<th>Nama</th>
				<th>Kelas</th>
				<th>Status</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php
				if ($kamar) {
					foreach ($kamar as $data) {
						if ($cekkamar) {
							foreach ($cekkamar as $cek_kamar) {
								if ($cek_kamar->kode_kamar == $data->kode_kamar) {
									$statuskamar = "Isi, " . "<a href='../../diagnosa/lihat/$cek_kamar->kode_diagnosa'>$cek_kamar->kode_diagnosa</a>";
								} else {
									$statuskamar = "Kosong";
								}
							} 
						} else {
							$statuskamar = "kosong";
						}
						echo "<tr>
								<td>$data->kode_kamar</td>
								<td>$data->nama_kamar</td>
								<td>$data->kelas</td>
								<td>$statuskamar</td>
								<td>
									<div class='btn-group'>
										<a class='btn btn-primary' type='button' href='#lihat/$data->kode_kamar'>Aksi</a>
										<button class='btn btn-primary dropdown-toggle' data-toggle='dropdown'>
											<span class='caret'></span>
										</button>
										<ul class='dropdown-menu' role='menu'>
											<li><a href='#edit/$data->kode_kamar'>Edit</a></li>
											<li><a href='#' onClick='kamarDelete(\"$data->kode_kamar\");'>Hapus</a></li>
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