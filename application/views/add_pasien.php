<div class="col-xs-9">
	<?php
		if ($this->uri->segment(2)!='tambah') {
			$action = 'pasien/update';
			if ($pasien) {
				foreach ($pasien as $data) {
					$kode_pasien 	= $data->kode_pasien;
					$nama 			= $data->nama;
					$alamat 		= $data->alamat;
					$tempat_lahir	= $data->tempat_lahir;
					$tanggal_lahir 	= $data->tanggal_lahir;
					$jenis_kelamin	= $data->kelamin;
				}
			} 
		} else {
			$action 		= 'pasien/submit';
			$kode_pasien 	= intval(date('YmdGi'));
			$nama 			= "";
			$alamat 		= "";
			$tempat_lahir	= "";
			$tanggal_lahir 	= "";
			$jenis_kelamin 	= "";
		}
		#date_default_timezone_set('Asia/Jakarta');
		echo form_open($action);
		echo form_input('kode_pasien',"$kode_pasien",'class="form-control" placeholder="Kode Pasien" readonly');
		echo form_input('nama',"$nama",'class="form-control" placeholder="Nama"');
		echo form_textarea('alamat',"$alamat",'class="form-control" id="editor" placeholder="Alamat"');
		echo form_input('tempat_lahir',"$tempat_lahir",'class="form-control" placeholder="Tempat Lahir"');
		echo form_date('tanggal_lahir',"$tanggal_lahir",'class="form-control" placeholder="Tanggal Lahir"');
		$kelamin = array(''=>'Jenis Kelamin','L'=>'L','P'=>'P');
		echo form_dropdown('kelamin',$kelamin,$jenis_kelamin,'class="form-control" placeholder="Jenis Kelamin"');
		echo form_submit('submit','Simpan','class="btn btn-default pull-right"');
		echo form_close();
	?>
</div>