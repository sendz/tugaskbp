<?php
	/**
	* Get dokter
	*/
	class Get_dokter extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}

		function dokter() {
			$this->db->from('tbl_dokter');
			$result = $this->db->get();
			if ($result->num_rows() > 0) {
				foreach ($result->result() as $row) {
					$data[] = $row;
				}
				return $data;
			}
		}

		function single_dokter($get_kode_dokter) {
			$result = $this->db->query("SELECT * FROM tbl_dokter WHERE kode_dokter = '$get_kode_dokter'");
			if ($result->num_rows() > 0) {
				foreach ($result->result() as $row) {
					$data[] = $row;
				}
				return $data;
			}
		}
	}
?>