<?php
	/**
	* Kamar
	*/
	class Kamar extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('get_kamar');
		}
		function index() {
			$data['kamar'] = $this->get_kamar->kamar();
			$data['cekkamar'] = $this->get_kamar->cekkamar();
			$this->load->view('component_header');
			  $this->load->view('component_navigation');
			  $this->load->view('page_kamar',$data);
			$this->load->view('component_footer');
		}

		function tambah() {
			$this->load->view('component_header');
			$this->load->view('component_navigation');
			$this->load->view('add_kamar');
			$this->load->view('component_footer');
		}

		function submit() {
			$kode_kamar 	= $this->input->post('kode_kamar');
			$nama_kamar		= $this->input->post('nama_kamar');
			$kelas			= $this->input->post('kelas');
			$data			= array(
				'kode_kamar'	=> $kode_kamar,
				'nama_kamar'	=> $nama_kamar,
				'kelas'			=> $kelas
			);
			$this->db->insert('tbl_kamar', $data);
			redirect('/kamar','refresh');
		}
	}
?>