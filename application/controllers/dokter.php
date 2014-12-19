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

	}
?>