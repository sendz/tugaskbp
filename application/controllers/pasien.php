<?php
	/**
	* Class untuk menampilkan list pasien
	*/
	class Pasien extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('get_pasien');
			$get_kode_pasien = $this->uri->segment(2);
		}

		function index() {
			// Ambil data dari database
			$data['pasien'] = $this->get_pasien->pasien();
			// Lempar ke View -> page_pasien
			$this->load->view('component_header');
			  $this->load->view('component_navigation');
			  $this->load->view('page_pasien',$data);
			$this->load->view('component_footer');
		}

		function tambah() {
			$this->load->view('component_header');
			$this->load->view('component_navigation');
			$this->load->view('add_pasien');
			$this->load->view('component_footer');
		}

		function submit() {
			$kode_pasien 	= $this->input->post('kode_pasien');
			$nama			= $this->input->post('nama');
			$alamat 		= $this->input->post('alamat');
			$tempat_lahir 	= $this->input->post('tempat_lahir');
			$tanggal_lahir	= $this->input->post('tanggal_lahir');
			$kelamin		= $this->input->post('kelamin');
			$data = array(
				'kode_pasien'	=> $kode_pasien,
				'nama'			=> $nama,
				'alamat'		=> $alamat,
				'tempat_lahir'	=> $tempat_lahir,
				'tanggal_lahir'	=> $tanggal_lahir,
				'kelamin'		=> $kelamin
			);
			$this->db->insert('tbl_pasien', $data);
			redirect('/pasien','refresh');
		}

		function lihat($get_kode_pasien) {
			$data['pasien'] = $this->get_pasien->single_pasien($get_kode_pasien);
			$data['history'] = $this->get_pasien->history($get_kode_pasien);
			$this->load->view('component_header');
			$this->load->view('component_navigation');
			$this->load->view('view_pasien', $data);
			$this->load->view('component_footer');
		}

		function delete($get_kode_pasien) {
			$this->db->delete('tbl_pasien', array('kode_pasien'=>$get_kode_pasien));
			$this->db->delete('tbl_diagnosa', array('kode_pasien'=>$get_kode_pasien));
			redirect('/pasien','refresh');
		}
	}
?>