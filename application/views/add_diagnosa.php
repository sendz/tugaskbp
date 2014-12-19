<div class="col-xs-9">
	<?php
		#date_default_timezone_set('Asia/Jakarta');
		echo form_open('diagnosa/submit');
		$kode_diagnosa = "D".intval(date('YmdGi'));
		echo form_input('kode_diagnosa',"$kode_diagnosa",'class="form-control" placeholder="Kode Pasien" readonly');
		echo "<select name='kode_pasien' class='form-control'>";
		echo "<option>Pilih Pasien</option>";
		if ($pasien) {
			foreach ($pasien as $data) {
				echo "<option value='$data->kode_pasien'>$data->kode_pasien - $data->nama</option>";
			}
		}
		echo "</select>";
		echo form_date('tgl_msk','','class="form-control" placeholder="Tanggal Masuk"');
		#echo form_date('tgl_kluar','','class="form-control" placeholder="Tanggal Keluar"');
		echo "<select name='kode_kamar' class='form-control'>";
		echo "<option>Pilih Kamar</option>";
		if ($kamar) {
			foreach ($kamar as $data) {
				echo "<option value='$data->kode_kamar'>$data->kode_kamar - $data->nama_kamar</option>";
			}
		}
		echo "</select>";
		echo "<select name='kode_dokter' class='form-control'>";
		echo "<option>Pilih Dokter</option>";
		if ($dokter) {
			foreach ($dokter as $data) {
				echo "<option value='$data->kode_dokter'>$data->kode_dokter - $data->nama_dokter</option>";
			}
		}
		echo "</select>";
		echo form_textarea('diagnosa','','class="form-control" id="editor" placeholder="Diagnosa"');
		$status = array(''=>'Status','Rawat Inap'=>'Rawat Inap','Rawat Jalan'=>'Rawat Jalan','Pulang'=>'Pulang');
		echo form_dropdown('status',$status,'','class="form-control" placeholder="Jenis Kelamin"');
		echo form_submit('submit','Simpan','class="btn btn-default"');
		echo form_close();
	?>
</div>