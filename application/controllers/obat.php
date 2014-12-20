<?php
	/**
	* Obat
	*/
	class Obat extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('get_obat');
			$this->load->model('get_diagnosa');
			$get_kode_obat = $this->uri->segment(2);
		}

		function index() {
			// Ambil data dari database
			$data['obat'] = $this->get_obat->obat();
			// Lempar ke View -> page_pasien
			$this->load->view('component_header');
			  $this->load->view('component_navigation');
			  $this->load->view('page_obat',$data);
			$this->load->view('component_footer');
		}

		function tambah() {
			$this->load->view('component_header');
			$this->load->view('component_navigation');
			$this->load->view('add_obat');
			$this->load->view('component_footer');
		}

		function submit() {
			$kode_obat	 		= $this->input->post('kode_obat');
			$obat				= $this->input->post('obat');
			$qty	 			= $this->input->post('qty');
			$qty_label			= $this->input->post('qty_label');
			$data = array(
				'kode_obat'		=> $kode_obat,
				'obat'			=> $obat,
				'qty'			=> $qty,
				'qty_label'		=> $qty_label
			);
			$this->db->insert('tbl_obat', $data);
			redirect('/obat','refresh');
		}

		function delete($get_kode_obat) {
			$this->db->delete('tbl_obat', array('kode_obat'=>$get_kode_obat));
			redirect('/obat','refresh');
		}

		function edit($get_kode_pasien) {
			$data['obat'] = $this->get_obat->single_pasien($get_kode_obat);
			$this->load->view('component_header');
			$this->load->view('component_navigation');
			$this->load->view('add_obat', $data);
			$this->load->view('component_footer');
		}

		function update() {
			$kode_obat 			= $this->input->post('kode_obat');
			$obat				= $this->input->post('obat');
			$qty 				= $this->input->post('qty');
			$qty_label	 		= $this->input->post('qty_label');
			$data = array(
				#'kode_pasien'	=> $kode_pasien,
				'obat'			=> $obat,
				'qty'			=> $qth,
				'qty_label'		=> $qty_label
			);
			$this->db->where('kode_obat',$kode_obat);
			$this->db->update('tbl_obat',$data);
			redirect('/obate','refresh');
		}
		function link_obat() {
			$data['diagnosa'] 	= $this->get_diagnosa->diagnosa();
			$data['obat']		= $this->get_obat->obat();
			$this->load->view('component_header');
			$this->load->view('component_navigation');
			$this->load->view('link_obat', $data);
			$this->load->view('component_footer');
		}

		function suntik() {
			$kode_diagnosa 		= $this->input->post('kode_diagnosa');
			$jenis_obat 		= $this->input->post('jenis_obat');
			$history_obat		= $this->input->post('history_obat');
			$explode_obat		= explode(",",$jenis_obat);
			$kode_obat 			= $explode_obat[0];
			$currqty 			= $explode_obat[1];
			$obat 				= $explode_obat[2];
			$qty 				= $this->input->post('qty');
			$dosis				= $this->input->post('dosis');
			$history = $history_obat . "<br />" . "- Diberikan obat dengan kode " . $kode_obat . " dan nama " . $obat . " sebanyak " . $qty . " dengan dosis " . $dosis;
			$data = array('history_obat' => $history);
			$this->db->where('kode_diagnosa',$kode_diagnosa);
			$this->db->update('tbl_diagnosa',$data);

			$newqty = $currqty - $qty;
			$data = array('qty' => $newqty);
			$this->db->where('kode_obat',$kode_obat);
			$this->db->update('tbl_obat',$data);

			redirect('/obat','refresh');
		}
	}
?>