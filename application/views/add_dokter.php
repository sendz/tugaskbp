<div class="col-xs-9">
	<?php
		if ($this->uri->segment(2)!='tambah') {
			$action = 'dokter/update';
			if ($dokter) {
				foreach ($dokter as $data) {
					$kode_dokter 	= $data->kode_dokter;
					$nama_dokter	= $data->nama_dokter;
					$alamat	 		= $data->alamat;
					$spesialis		= $data->spesialis;
					$kontak 		= $data->kontak;
				}
			} 
		} else {
			$action 		= 'dokter/submit';
			$kode_dokter 	= "DR";
			$nama_dokter	= "";
			$alamat	 		= "";
			$spesialis		= "";
			$kontak 		= "";
		}
		#date_default_timezone_set('Asia/Jakarta');
		echo form_open($action);
		#$kode_pasien = intval(date('YmdGi'));
		echo form_input('kode_dokter',$kode_dokter,'class="form-control" placeholder="Kode Dokter"');
		echo form_input('nama_dokter',$nama_dokter,'class="form-control" placeholder="Nama"');
		echo form_textarea('alamat',$alamat,'class="form-control" id="editor" placeholder="Alamat"');
		echo form_input('kontak',$kontak,'class="form-control" placeholder="Kontak"');
		echo form_input('spesialis',$spesialis,'class="form-control" placeholder="Role"');
		echo form_submit('submit','Simpan','class="btn btn-default pull-right"');
		echo form_close();
	?>
</div>