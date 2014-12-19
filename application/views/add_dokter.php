<div class="col-xs-9">
	<?php
		#date_default_timezone_set('Asia/Jakarta');
		echo form_open('dokter/submit');
		#$kode_pasien = intval(date('YmdGi'));
		echo form_input('kode_dokter',"DR",'class="form-control" placeholder="Kode Dokter"');
		echo form_input('nama_dokter','','class="form-control" placeholder="Nama"');
		echo form_textarea('alamat','','class="form-control" id="editor" placeholder="Alamat"');
		echo form_input('kontak','','class="form-control" placeholder="Kontak"');
		echo form_input('spesialis','','class="form-control" placeholder="Role"');
		echo form_submit('submit','Simpan','class="btn btn-default"');
		echo form_close();
	?>
</div>