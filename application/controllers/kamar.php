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
			$get_kode_kamar = $this->uri->segment(2);
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

		function delete($get_kode_kamar) {
			$this->db->delete('tbl_kamar', array('kode_kamar'=>$get_kode_kamar));
			redirect('/kamar','refresh');
		}

		function edit ($get_kode_kamar) {
			$data['kamar'] = $this->get_kamar->single_kamar($get_kode_kamar);
			$this->load->view('component_header');
			$this->load->view('component_navigation');
			$this->load->view('add_kamar',$data);
			$this->load->view('component_footer');
		}

		function update() {
			$kode_kamar 	= $this->input->post('kode_kamar');
			$nama_kamar		= $this->input->post('nama_kamar');
			$kelas			= $this->input->post('kelas');
			$data			= array(
				#'kode_kamar'	=> $kode_kamar,
				'nama_kamar'	=> $nama_kamar,
				'kelas'			=> $kelas
			);
			$this->db->where('kode_kamar', $kode_kamar);
			$this->db->update('tbl_kamar', $data);
			redirect('/kamar', 'refresh');
		}
	}
?>