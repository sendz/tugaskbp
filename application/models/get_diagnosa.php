<?php
	/**
	* 
	*/
	class Get_diagnosa extends CI_model
	{
		
		function __construct()
		{
			parent::__construct();
		}

		function diagnosa() {
			$result = $this->db->query('SELECT tbl_pasien.*, tbl_diagnosa.* FROM tbl_pasien INNER JOIN tbl_diagnosa ON tbl_pasien.kode_pasien = tbl_diagnosa.kode_pasien');
			#$this->db->from('tbl_diagnosa');
			#$result = $this->db->get();
			if ($result->num_rows() > 0) {
				foreach ($result->result() as $row) {
					$data[] = $row;
				}
				return $data;
			}
		}
		function single_diagnosa($get_kode_diagnosa) {
			$result = $this->db->query("SELECT tbl_pasien.*, tbl_diagnosa.*, tbl_dokter.*, tbl_kamar.* FROM tbl_diagnosa INNER JOIN tbl_pasien ON tbl_diagnosa.kode_pasien = tbl_diagnosa.kode_pasien INNER JOIN tbl_dokter ON tbl_diagnosa.kode_dokter = tbl_dokter.kode_dokter INNER JOIN tbl_kamar ON tbl_diagnosa.kode_kamar = tbl_kamar.kode_kamar WHERE tbl_diagnosa.kode_diagnosa = '$get_kode_diagnosa'");
			if ($result->num_rows() > 0) {
				foreach ($result->result() as $row) {
					$data[] = $row;
				}
				return $data;
			}
		}
	}
?>