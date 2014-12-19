<div class="col-xs-9">
	<?php
		if ($this->uri->segment(2)!='tambah') {
			$action = 'diagnosa/update';
			if ($diagnosa) {
				foreach ($diagnosa as $data) {
					$kode_diagnosa 	= $data->kode_diagnosa;
					$kode_pasien	= $data->kode_pasien;
					$tgl_msk 		= $data->tgl_msk;
					$tgl_kluar		= $data->tgl_kluar;
					$data_status 	= $data->status;
					$kode_kamar		= $data->kode_kamar;
					$kode_dokter	= $data->kode_dokter;
					$diagnosa 		= $data->diagnosa;
				}
			} 
		} else {
			$action 		= 'diagnosa/submit';
			$kode_diagnosa 	= "D".intval(date('YmdGi'));
			$kode_pasien	= "";
			$tgl_msk 		= "";
			$tgl_kluar		= "";
			$data_status 	= "";
			$kode_kamar		= "";
			$kode_dokter	= "";
			$diagnosa 		= "";
		}
		#date_default_timezone_set('Asia/Jakarta');
		echo form_open($action);
		
		echo form_input('kode_diagnosa',"$kode_diagnosa",'class="form-control" placeholder="Kode Diagnosa" readonly');
		echo "<select name='kode_pasien' class='form-control'>";
		echo "<option>Pilih Pasien</option>";
		if ($pasien) {
			foreach ($pasien as $data) {
				if ($data->kode_pasien == $kode_pasien) {
					$attr_pasien = "selected='selected'";
				} else {
					$attr_pasien = "";
				}
				echo "<option value='$data->kode_pasien' $attr_pasien>$data->kode_pasien - $data->nama</option>";
			}
		}
		echo "</select>";
		echo form_date('tgl_msk',$tgl_msk,'class="form-control" placeholder="Tanggal Masuk"');
		if($this->uri->segment(2)!='tambah') echo form_date('tgl_kluar',$tgl_kluar,'class="form-control" placeholder="Tanggal Keluar"');
		$status = array(''=>'Status','Rawat Inap'=>'Rawat Inap','Rawat Jalan'=>'Rawat Jalan','Pulang'=>'Pulang');
		echo form_dropdown('status',$status,$data_status,'class="form-control" placeholder="Status"');
		echo "<select name='kode_kamar' class='form-control'>";
		echo "<option>Pilih Kamar</option>";
		if ($kamar) {
			foreach ($kamar as $data) {
				if ($data->kode_kamar == $kode_kamar) {
					$attr_kamar = "selected='selected'";
				} else {
					$attr_kamar = "";
				}
				echo "<option value='$data->kode_kamar' $attr_kamar>$data->kode_kamar - $data->nama_kamar</option>";
			}
		}
		echo "</select>";
		echo "<select name='kode_dokter' class='form-control'>";
		echo "<option>Pilih Dokter</option>";
		if ($dokter) {
			foreach ($dokter as $data) {
				if ($data->kode_dokter == $kode_dokter) {
					$attr_dokter = "selected='selected'";
				} else {
					$attr_dokter = "";
				}
				echo "<option value='$data->kode_dokter' $attr_dokter>$data->kode_dokter - $data->nama_dokter</option>";
			}
		}
		echo "</select>";
		echo form_textarea('diagnosa',$diagnosa,'class="form-control" id="editor" placeholder="Diagnosa"');
		echo form_submit('submit','Simpan','class="btn btn-default pull-right"');
		echo form_close();
	?>
</div>