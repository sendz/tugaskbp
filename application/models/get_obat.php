<?php
	/**
	* Get Obat
	*/
	class Get_obat extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}

		function obat() {
			$this->db->from('tbl_obat');
			$result = $this->db->get();
			if ($result->num_rows() > 0) {
				foreach ($result->result() as $row) {
					$data[] = $row;
				}
				return $data;
			}
		}

		function single_obat($get_kode_obat) {
			$result = $this->db->query("SELECT * FROM tbl_obat WHERE tbl_obat.kode_obat = '$get_kode_obat'");
			if ($result->num_rows() > 0) {
				foreach ($result->result() as $row) {
					$data[] = $row;
				}
				return $data;
			}
		}

		function nama_obat($get_kode_obat) {
			$result = $this->db->query("SELECT obat FROM tbl_obat WHERE tbl_obat.kode_obat = '$get_kode_obat'");
			if ($result->num_rows() > 0) {
				foreach ($result->result() as $row) {
					$data[] = $row;
				}
				return $data;
			}
		}

		function qty_obat($get_kode_obat) {
			$result = $this->db->query("SELECT qty FROM tbl_obat WHERE tbl_obat.kode_obat = '$get_kode_obat'");
			if ($result->num_rows() > 0) {
				foreach ($result->result() as $row) {
					$data[] = $row;
				}
				return $data;
			}
		}
	}
?>