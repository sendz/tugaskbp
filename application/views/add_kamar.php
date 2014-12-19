<div class="col-xs-9">
	<?php
		#date_default_timezone_set('Asia/Jakarta');
		echo form_open('kamar/submit');
		echo form_input('kode_kamar',"RM",'class="form-control" placeholder="Kode Kamar"');
		echo form_input('nama_kamar','','class="form-control" placeholder="Nama"');
		$kamar = array(''=>'Kelas','III'=>'III','II'=>'II','I'=>'I','Utama'=>'Utama','VIP'=>'VIP');
		echo form_dropdown('kelas',$kamar,'','class="form-control" placeholder="Kelas"');
		echo form_submit('submit','Simpan','class="btn btn-default"');
		echo form_close();
	?>
</div>