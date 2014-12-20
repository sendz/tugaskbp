<div class="col-xs-9">
	<?php
		if ($this->uri->segment(2)!='tambah') {
			$action = 'obat/update';
			if ($obat) {
				foreach ($obat as $data) {
					$kode_obat 	= $data->kode_obat;
					$obat		= $data->nama_obat;
					$qty 		= $data->alamat;
					$qty_label	= $data->spesialis;
				}
			} 
		} else {
			$action 		= 'obat/submit';
			$kode_obat 		= "MED";
			$obat			= "";
			$qty	 		= "";
			$qty_label		= "";
		}
		#date_default_timezone_set('Asia/Jakarta');
		echo form_open($action);
		#$kode_pasien = intval(date('YmdGi'));
		echo form_input('kode_obat',$kode_obat,'class="form-control" placeholder="Kode obat"');
		echo form_input('obat',$obat,'class="form-control" placeholder="Nama Obat"');
		echo form_number('qty',$qty,'class="form-control" id="editor" placeholder="Quantity"');
		$label = array(''=>'Quantity Label','Tablet'=>'Tablet','Kapsul'=>'Kapsul','Kaplet'=>'Kaplet','Botol'=>'Botol');
		echo form_dropdown('qty_label',$label,$qty_label,'class="form-control" placeholder="Quantity Label"');
		echo form_submit('submit','Simpan','class="btn btn-default pull-right"');
		echo form_close();
	?>
</div>