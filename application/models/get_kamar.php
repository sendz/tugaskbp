<?php
	/**
	* Get kamar
	*/
	class Get_kamar extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}

		function kamar() {
			$this->db->from('tbl_kamar');
			$result = $this->db->get();
			if ($result->num_rows() > 0) {
				foreach ($result->result() as $row) {
					$data[] = $row;
				}
				return $data;
			}
		}
		function cekkamar() {
			$result = $this->db->query("SELECT tbl_kamar.kode_kamar, tbl_diagnosa.kode_kamar, tbl_diagnosa.kode_diagnosa FROM tbl_diagnosa INNER JOIN tbl_kamar ON tbl_diagnosa.kode_kamar = tbl_kamar.kode_kamar WHERE tbl_diagnosa.status = 'Rawat Inap'");
			if ($result->num_rows() > 0) {
				foreach ($result->result() as $row) {
					$data[] = $row;
				}
				return $data;
			}
		}
	}
?>