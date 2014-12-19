<?php
	/**
	* 
	*/
	class Get_pasien extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}

		function pasien() {
			$this->db->from('tbl_pasien');
			$result = $this->db->get();
			if ($result->num_rows() > 0) {
				foreach ($result->result() as $row) {
					$data[] = $row;
				}
				return $data;
			}
		}

		function single_pasien($get_kode_pasien) {
			$result = $this->db->query("SELECT * FROM tbl_pasien WHERE tbl_pasien.kode_pasien = '$get_kode_pasien'");
			if ($result->num_rows() > 0) {
				foreach ($result->result() as $row) {
					$data[] = $row;
				}
				return $data;
			}
		}

		function history($get_kode_pasien) {
			$result = $this->db->query("SELECT * FROM tbl_diagnosa WHERE tbl_diagnosa.kode_pasien = '$get_kode_pasien'");
			if ($result->num_rows() > 0) {
				foreach ($result->result() as $row) {
					$data[] = $row;
				}
				return $data;
			}
		}
	}
?>