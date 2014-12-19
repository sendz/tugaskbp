<div class="col-xs-9">
	<?php
		#date_default_timezone_set('Asia/Jakarta');
		echo form_open('pasien/submit');
		$kode_pasien = intval(date('YmdGi'));
		echo form_input('kode_pasien',"$kode_pasien",'class="form-control" placeholder="Kode Pasien" readonly');
		echo form_input('nama','','class="form-control" placeholder="Nama"');
		echo form_textarea('alamat','','class="form-control" id="editor" placeholder="Alamat"');
		echo form_input('tempat_lahir','','class="form-control" placeholder="Tempat Lahir"');
		echo form_date('tanggal_lahir','','class="form-control" placeholder="Tanggal Lahir"');
		$kelamin = array(''=>'Jenis Kelamin','L'=>'L','P'=>'P');
		echo form_dropdown('kelamin',$kelamin,'','class="form-control" placeholder="Jenis Kelamin"');
		echo form_submit('submit','Simpan','class="btn btn-default"');
		echo form_close();
	?>
</div>