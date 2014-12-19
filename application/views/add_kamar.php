<div class="col-xs-9">
	<?php
		if ($this->uri->segment(2)!='tambah') {
			$action = 'kamar/update';
			if ($kamar) {
				foreach ($kamar as $data) {
					$kode_kamar 	= $data->kode_kamar;
					$nama_kamar		= $data->nama_kamar;
					$kelas 	 		= $data->kelas;
				}
			} 
		} else {
			$action 		= 'kamar/submit';
			$kode_kamar 	= "RM";
			$nama_kamar		= "";
			$kelas 	 		= "";
		}
		#date_default_timezone_set('Asia/Jakarta');
		echo form_open($action);
		echo form_input('kode_kamar',$kode_kamar,'class="form-control" placeholder="Kode Kamar"');
		echo form_input('nama_kamar',$nama_kamar,'class="form-control" placeholder="Nama"');
		$kamar = array(''=>'Kelas','III'=>'III','II'=>'II','I'=>'I','Utama'=>'Utama','VIP'=>'VIP');
		echo form_dropdown('kelas',$kamar,$kelas,'class="form-control" placeholder="Kelas"');
		echo form_submit('submit','Simpan','class="btn btn-default pull-right"');
		echo form_close();
	?>
</div>