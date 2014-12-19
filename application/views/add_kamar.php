<div class="col-xs-9">
	<?php
		if ($this->uri->segment(2)!='tambah') {
			$action = 'kamar/update';
			if ($kamar) {
				foreach ($kamar as $data) {
					$kode_pasien 	= $data->kode_pasien;
					$nama 			= $data->nama;
					$alamat 		= $data->alamat;
					$tempat_lahir	= $data->tempat_lahir;
					$tanggal_lahir 	= $data->tanggal_lahir;
					$jenis_kelamin	= $data->kelamin;
				}
			} 
		} else {
			$action 		= 'kamar/submit';
			$kode_pasien 	= intval(date('YmdGi'));
			$nama 			= "";
			$alamat 		= "";
			$tempat_lahir	= "";
			$tanggal_lahir 	= "";
			$jenis_kelamin 	= "";
		}
		#date_default_timezone_set('Asia/Jakarta');
		echo form_open('kamar/submit');
		echo form_input('kode_kamar',"RM",'class="form-control" placeholder="Kode Kamar"');
		echo form_input('nama_kamar','','class="form-control" placeholder="Nama"');
		$kamar = array(''=>'Kelas','III'=>'III','II'=>'II','I'=>'I','Utama'=>'Utama','VIP'=>'VIP');
		echo form_dropdown('kelas',$kamar,'','class="form-control" placeholder="Kelas"');
		echo form_submit('submit','Simpan','class="btn btn-default pull-right"');
		echo form_close();
	?>
</div>