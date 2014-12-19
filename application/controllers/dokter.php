<?php
	/**
	* Dokter
	*/
	class Dokter extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('get_dokter');
			$get_kode_dokter = $this->uri->segment(2);
		}

		function index() {
			$data['dokter'] = $this->get_dokter->dokter();
			$this->load->view('component_header');
			  $this->load->view('component_navigation');
			  $this->load->view('page_dokter',$data);
			$this->load->view('component_footer');
		}

		function tambah() {
			$this->load->view('component_header');
			$this->load->view('component_navigation');
			$this->load->view('add_dokter');
			$this->load->view('component_footer');
		}

		function submit() {
			$kode_dokter 	= $this->input->post('kode_dokter');
			$nama_dokter	= $this->input->post('nama_dokter');
			$alamat			= $this->input->post('alamat');
			$kontak			= $this->input->post('kontak');
			$spesialis		= $this->input->post('spesialis');
			$data 			= array(
				'kode_dokter'	=> $kode_dokter,
				'nama_dokter'	=> $nama_dokter,
				'alamat'		=> $alamat,
				'kontak'		=> $kontak,
				'spesialis'		=> $spesialis
			);
			$this->db->insert('tbl_dokter', $data);
			redirect('/dokter','refresh');
		}

		function delete($get_kode_dokter) {
			$this->db->delete('tbl_dokter', array('kode_dokter'=>$get_kode_dokter));
			redirect('/dokter','refresh');
		}
	}
?>