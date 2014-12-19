<div class="col-xs-9">
	<h3>Detail Pasien</h3>
	<table class="table table-bordered table-hover table-condensed">
	<?php
		if ($diagnosa) {
			foreach ($diagnosa as $data_diagnosa) {
				$umur = HitungUmur($data_diagnosa->tanggal_lahir);
				echo "<tr><th>Kode Pasien</th><td>$data_diagnosa->kode_pasien</td></tr>";
				echo "<tr><th>Nama</th><td>$data_diagnosa->nama</td></tr>";
				echo "<tr><th>Alamat</th><td>$data_diagnosa->alamat</td></tr>";
				echo "<tr><th>Tempat/Tanggal lahir</th><td>$data_diagnosa->tempat_lahir / $data_diagnosa->tanggal_lahir</td></tr>";
				echo "<tr><th>Umur</th><td>$umur tahun</td></tr>";
				echo "<tr><th>Jenis Kelamin</th><td>$data_diagnosa->kelamin</td></tr>";
			}
		}
	?>
	</table>
	<h3>Detail Diagnosa</h3>
	<table class="table table-bordered table-hover table-condensed">
	<?php
		if ($diagnosa) {
			foreach ($diagnosa as $data_diagnosa) {
				$umur = HitungUmur($data_diagnosa->tanggal_lahir);
				echo "<tr><th>Kode Diagnosa</th><td>$data_diagnosa->kode_diagnosa</td></tr>";
				echo "<tr><th>Tanggal Masuk</th><td>$data_diagnosa->tgl_msk</td></tr>";
				echo "<tr><th>Tanggal Keluar</th><td>$data_diagnosa->tgl_kluar</td></tr>";
				echo "<tr><th>Diagnosa</th><td>$data_diagnosa->diagnosa</td></tr>";
				echo "<tr><th>Status</th><td>$data_diagnosa->status</td></tr>";
			}
		}
	?>
	</table>
	<h3>Dokter</h3>
	<table class="table table-bordered table-hover table-condensed">
	<?php
		if ($diagnosa) {
			foreach ($diagnosa as $data_diagnosa) {
				$umur = HitungUmur($data_diagnosa->tanggal_lahir);
				echo "<tr><th>Kode Dokter</th><td>$data_diagnosa->kode_dokter</td></tr>";
				echo "<tr><th>Nama Dokter</th><td>$data_diagnosa->nama_dokter</td></tr>";
				echo "<tr><th>Kontak</th><td>$data_diagnosa->kontak</td></tr>";
				echo "<tr><th>Kategori</th><td>$data_diagnosa->spesialis</td></tr>";
			}
		}
	?>
	</table>
	<h3>Kamar</h3>
	<table class="table table-bordered table-hover table-condensed">
	<?php
		if ($diagnosa) {
			foreach ($diagnosa as $data_diagnosa) {
				$umur = HitungUmur($data_diagnosa->tanggal_lahir);
				echo "<tr><th>Kode Kamar</th><td>$data_diagnosa->kode_kamar</td></tr>";
				echo "<tr><th>Kelas</th><td>$data_diagnosa->kelas</td></tr>";
				echo "<tr><th>Nama Kamar</th><td>$data_diagnosa->nama_kamar</td></tr>";
			}
		}
	?>
	</table>
</div>