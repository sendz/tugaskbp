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
			$result = $this->db->query('SELECT tbl_pasien.nama, tbl_diagnosa.* FROM tbl_pasien INNER JOIN tbl_diagnosa ON tbl_pasien.kode_pasien = tbl_diagnosa.kode_pasien');
			#$this->db->from('tbl_diagnosa');
			#$result = $this->db->get();
			if ($result->num_rows() > 0) {
				foreach ($result->result() as $row) {
					$data[] = $row;
				}
				return $data;
			}
		}
	}
?>