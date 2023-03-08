<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_lelang extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		if ($this->session->userdata('id_level') != '2') {
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade-show" role="alert">
				 Anda Belum Login!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('auth/login');
		}
	}


	public function index()
	{
		$args = ['auctions' => $this->Lelang_model->all()];

		$this->load->view('templates_admin/header', $args);
		$this->load->view('templates_admin/sidebar_petugas', $args);
		$this->load->view('petugas/data_lelang/data_lelang', $args);
		$this->load->view('templates_admin/footer');

	}

	public function create()
	{

		if ($this->input->post('save')) {
			$errors = $this->_create_process();
		}
		$args = [
			'products' => $this->Barang_model->available(), // membuat product belum terlelang saja yang muncul
			'staffs' => $this->Petugas_model->all(),
		];


		$this->load->view('templates_admin/header', $args);
		$this->load->view('templates_admin/sidebar_petugas', $args);
		$this->load->view('petugas/data_lelang/tambah_lelang', $args);
		$this->load->view('templates_admin/footer');
	}
	
	private function _create_process()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules(
			'product',
			'Product',
			'required|is_unique[tb_lelang.id_barang]',
			[
				'is_unique' => 'product sudah ada'
			]
		);
		$this->form_validation->set_rules('tgl_lelang', 'Tanggal Awal', 'required');
		$this->form_validation->set_rules('tgl_akhir', 'Tanggal Akhir', 'required');

		if ($this->form_validation->run()) {
			// $tgl_lelang = set_value('tgl_lelang') . ' ' . set_value('jam_lelang') . ':00';
			$this->Lelang_model->id_barang = set_value('product');
			$this->Lelang_model->tgl_lelang =set_value('tgl_lelang');
			$this->Lelang_model->tgl_akhir =set_value('tgl_akhir');
			$this->Lelang_model->id_petugas = $this->session->userdata('id_petugas');

			$this->Lelang_model->save();
			$this->session->set_flashdata(
				'message',
				'<div class="alert alert-success alert-dismissible fade-show" role="alert">
				Lelang telah ditambahkan
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>'
			);
			redirect('petugas/data_lelang');
		}

		return $this->form_validation->error_array();
	}

	public function edit($id)
	{
		$where = array('id_lelang' => $id);
		if ($this->input->post('save')) {
			$errors = $this->_edit_process($id);
		}
		$args = [
			'products' => $this->Barang_model->all(),
			'staffs' => $this->Petugas_model->all(),
			'auction' => $this->Lelang_model->first($id),
		];

		$this->load->view('templates_admin/header', $args);
		$this->load->view('templates_admin/sidebar_petugas', $args);
		$this->load->view('petugas/data_lelang/edit_lelang', $args);
		$this->load->view('templates_admin/footer');
	}

	private function _edit_process($id)
	{
		$this->load->library('form_validation');
		// $this->form_validation->set_rules('product', 'Product', 'required');
		// $this->form_validation->set_rules('tgl_lelang', 'Auction date', 'required');
		// $this->form_validation->set_rules('jam_lelang', 'Auction time', 'required');
		// $this->form_validation->set_rules('petugas', 'Staff', 'required');
		$this->form_validation->set_rules('tgl_akhir', 'Tanggal Akhir', 'required');
		
		if ($this->form_validation->run()) {
			// $tgl_lelang = set_value('tgl_lelang') . ' ' . set_value('jam_lelang') . ':00';
			// $this->Lelang_model->id_barang = set_value('product');
			// $this->Lelang_model->tgl_lelang = $tgl_lelang;
			// $this->Lelang_model->id_petugas = set_value('petugas');
			$this->Lelang_model->tgl_akhir = set_value('tgl_akhir');

			$this->Lelang_model->update($id);
			$this->session->set_flashdata(
				'message',
				'<div class="alert alert-success alert-dismissible fade-show" role="alert">
				Batas akhir lelang telah diubah
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>'
			);
			redirect('petugas/Data_lelang');
		}

		return $this->form_validation->error_array();
	}
	

	public function delete($id, $id_barang)
	{
		$this->db->db_debug = FALSE;

        $this->db->where('id_lelang', $id);
        $this->db->delete('tb_lelang');
		$error = $this->db->error();
		if ($error['code'] == 1451) {

		// $check = $this->db->get_where('history_lelang', ['id_lelang' => $id]);

		// if ($check) {
			$this->session->set_flashdata(
				'message',
				'<div class="alert alert-warning alert-dismissible fade-show" role="alert">
				Lelang sudah berjalan.
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				</div>'
			);
			$this->db->db_debug = TRUE;
			redirect('petugas/Data_lelang');
		}
		// }
		$this->db->db_debug = TRUE;

		$this->db->set('status_barang', 0)
			->where('id_barang', $id_barang)
			->update('tb_barang');
		$this->db->where('id_lelang', $id);
		$this->db->delete('tb_lelang');

		$this->session->set_flashdata(
			'message',
			'<div class="alert alert-danger alert-dismissible fade-show" role="alert">
            Lelang telah dihapus
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>'
		);
		redirect('petugas/Data_lelang');
	}

	public function view($id)
	{

		$product = $this->Lelang_model->first($id);

		$args = [
			'product' => $product,
			'history' => $this->Lelang_model->history($id),
			'max_bid' => $this->Lelang_model->max_bid($id),
			'auction' => $this->Lelang_model->first($id),
		];


		$this->load->view('templates_admin/header', $args);
		$this->load->view('templates_admin/sidebar_petugas', $args);
		$this->load->view('petugas/data_lelang/view', $args);
		$this->load->view('templates_admin/footer');
	}

	public function finish($id)
	{
		if ($this->input->post('finish')) {
			$errors = $this->_finish_process($id);
		}
		
		$max = $this->Lelang_model->max_bid($id);

		$this->Lelang_model->harga_akhir = $max->penawaran_harga;
		$this->Lelang_model->pemenang = $max->nama_lengkap;
		$this->Lelang_model->status = 'ditutup';
		$this->Lelang_model->update($id);

		redirect('petugas/data_lelang/view_pemenang/' . $id);

		return [];
		// $args = [
		// 	'id_lelang' => $id,
		// 	'max_bid' => $this->Lelang_model->max_bid($id),
		// ];

		// $this->load->view('templates_admin/header', $args);
		// $this->load->view('templates_admin/sidebar_petugas', $args);
		// $this->load->view('petugas/data_lelang/finish', $args);
		// $this->load->view('templates_admin/footer');
	}

	// public function _finish_process($id)
	// {
	// 	$max = $this->Lelang_model->max_bid($id);

	// 	$this->Lelang_model->harga_akhir = $max->penawaran_harga;
	// 	$this->Lelang_model->pemenang = $max->nama_lengkap;
	// 	$this->Lelang_model->status = 'ditutup';
	// 	$this->Lelang_model->update($id);

	// 	$this->session->set_flashdata('success', 'Lelang telah diselesaikan !');
	// 	redirect('petugas/data_lelang/view_pemenang/' . $id);

	// 	return [];
	// }


	public function pemenang()
	{
		$args = ['auctions' => $this->Lelang_model->all()];

		$this->load->view('templates_admin/header', $args);
		$this->load->view('templates_admin/sidebar_petugas', $args);
		$this->load->view('petugas/data_lelang/data_pemenang', $args);
		$this->load->view('templates_admin/footer');

	}

	public function edit_pemenang($id)
	{
		$where = array('id_lelang' => $id);
		if ($this->input->post('save')) {
			$errors = $this->_editpemenang_process($id);
		}
		$args = [
			'products' => $this->Barang_model->all(),
			'staffs' => $this->Petugas_model->all(),
			'auction' => $this->Lelang_model->first($id),
		];

		$this->load->view('templates_admin/header', $args);
		$this->load->view('templates_admin/sidebar_petugas', $args);
		$this->load->view('petugas/data_lelang/edit_pemenang', $args);
		$this->load->view('templates_admin/footer');
	}

	private function _editpemenang_process($id)
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('status', 'Status', 'required');
		$this->form_validation->set_rules('tgl_akhir', 'Tanggal Akhir', 'required');
		
		if ($this->form_validation->run()) {
			$this->Lelang_model->tgl_akhir = set_value('tgl_akhir');
			$this->Lelang_model->status = set_value('status');

			$this->Lelang_model->update_pemenang($id);
			$this->session->set_flashdata(
				'message',
				'<div class="alert alert-success alert-dismissible fade-show" role="alert">
				Pemenang telah diubah
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>'
			);
			redirect('petugas/Data_lelang');
		}

		return $this->form_validation->error_array();
	}
	


	public function view_pemenang($id)
	{

		$product = $this->Lelang_model->first($id);

		$args = [
			'product' => $product,
			'history' => $this->Lelang_model->history($id),
			'max_bid' => $this->Lelang_model->max_bid($id),
			'auction' => $this->Lelang_model->first($id),
		];


		$this->load->view('templates_admin/header', $args);
		$this->load->view('templates_admin/sidebar_petugas', $args);
		$this->load->view('petugas/data_lelang/view_pemenang', $args);
		$this->load->view('templates_admin/footer');
	}



}