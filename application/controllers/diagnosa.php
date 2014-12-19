<?php
	/**
	* Diagnosa
	*/
	class Diagnosa extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('get_diagnosa');
			$this->load->model('get_pasien');
			$this->load->model('get_dokter');
			$this->load->model('get_kamar');
			$get_kode_diagnosa = $this->uri->segment(2);
		}

		function index() {
			// Ambil data dari database
			$data['diagnosa'] = $this->get_diagnosa->diagnosa();
			// Lempar ke View -> page_pasien
			$this->load->view('component_header');
			  $this->load->view('component_navigation');
			  $this->load->view('page_diagnosa',$data);
			$this->load->view('component_footer');
		}

		function tambah() {
			$data['pasien'] = $this->get_pasien->pasien();
			$data['dokter'] = $this->get_dokter->dokter();
			$data['kamar']	= $this->get_kamar->kamar();
			$this->load->view('component_header');
			$this->load->view('component_navigation');
			$this->load->view('add_diagnosa', $data);
			$this->load->view('component_footer');
		}

		function submit() {
			$kode_diagnosa 	= $this->input->post('kode_diagnosa');
			$kode_pasien	= $this->input->post('kode_pasien');
			$tgl_msk		= $this->input->post('tgl_msk');
			#$tgl_kluar		= $this->input->post('tgl_kluar');
			$kode_kamar		= $this->input->post('kode_kamar');
			$kode_dokter	= $this->input->post('kode_dokter');
			$diagnosa 		= $this->input->post('diagnosa');
			$status			= $this->input->post('status');
			$data			= array(
				'kode_diagnosa'	=> $kode_diagnosa,
				'kode_pasien' 	=> $kode_pasien,
				'tgl_msk'		=> $tgl_msk,
				#'tgl_kluar'	=> $tgl_kluar,
				'diagnosa'		=> $diagnosa,
				'kode_kamar'	=> $kode_kamar,
				'kode_dokter'	=> $kode_dokter,
				'status'		=> $status
			);
			$this->db->insert('tbl_diagnosa',$data);
			redirect('/diagnosa','refresh');
		}

		function lihat($get_kode_diagnosa) {
			$data['diagnosa'] = $this->get_diagnosa->single_diagnosa($get_kode_diagnosa);
			#$data['history'] = $this->get_pasien->history($get_kode_pasien);
			$this->load->view('component_header');
			$this->load->view('component_navigation');
			$this->load->view('view_diagnosa', $data);
			$this->load->view('component_footer');
		}

		function delete($get_kode_diagnosa) {
			$this->db->delete('tbl_diagnosa', array('kode_diagnosa'=>$get_kode_diagnosa));
			redirect('/diagnosa','refresh');
		}

		function edit($get_kode_diagnosa) {
			$data['diagnosa'] = $this->get_diagnosa->single_diagnosa($get_kode_diagnosa);
			$data['pasien'] = $this->get_pasien->pasien();
			$data['dokter'] = $this->get_dokter->dokter();
			$data['kamar']	= $this->get_kamar->kamar();
			$this->load->view('component_header');
			$this->load->view('component_navigation');
			$this->load->view('add_diagnosa', $data);
			$this->load->view('component_footer');
		}

		function update() {
			$kode_diagnosa 	= $this->input->post('kode_diagnosa');
			$kode_pasien	= $this->input->post('kode_pasien');
			$tgl_msk		= $this->input->post('tgl_msk');
			$tgl_kluar		= $this->input->post('tgl_kluar');
			$kode_kamar		= $this->input->post('kode_kamar');
			$kode_dokter	= $this->input->post('kode_dokter');
			$diagnosa 		= $this->input->post('diagnosa');
			$status			= $this->input->post('status');
			$data			= array(
				#'kode_diagnosa'	=> $kode_diagnosa,
				'kode_pasien' 	=> $kode_pasien,
				'tgl_msk'		=> $tgl_msk,
				'tgl_kluar'		=> $tgl_kluar,
				'diagnosa'		=> $diagnosa,
				'kode_kamar'	=> $kode_kamar,
				'kode_dokter'	=> $kode_dokter,
				'status'		=> $status
			);
			$this->db->where('kode_diagnosa',$kode_diagnosa);
			$this->db->update('tbl_diagnosa',$data);
			redirect('/diagnosa','refresh');
		}
	}
?>