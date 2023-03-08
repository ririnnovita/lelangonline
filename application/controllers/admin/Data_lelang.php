<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_lelang extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		
		if ($this->session->userdata('id_level') != '1') {
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
		$args = ['auctions'	 => $this->Lelang_model->all()];

		$this->load->view('templates_admin/header', $args);
		$this->load->view('templates_admin/sidebar',$args);
		$this->load->view('admin/data_lelang/data_lelang',$args);
		$this->load->view('templates_admin/footer');
        
	}

	
	public function view($id)
	{
	
		$product = $this->Lelang_model->first($id);

		$args = [
			'product'	 => $product,
			'history'	 => $this->Lelang_model->history($id),
			'max_bid'	 => $this->Lelang_model->max_bid($id),
			'auction'	 => $this->Lelang_model->first($id),
		];

		
		$this->load->view('templates_admin/header', $args);
		$this->load->view('templates_admin/sidebar',$args);
		$this->load->view('admin/data_lelang/view',$args);
		$this->load->view('templates_admin/footer');
	}

	public function finish($id)
	{
		if ($this->input->post('finish')) {
			$errors = $this->_finish_process($id);
		}
		$args = [
			'id_lelang' => $id,
			'max_bid'	 => $this->Lelang_model->max_bid($id),
		];

		$this->load->view('templates_admin/header', $args );
		$this->load->view('templates_admin/sidebar', $args );
		$this->load->view('admin/data_lelang/finish', $args );
		$this->load->view('templates_admin/footer');
	}

	private function _finish_process($id)
	{
		$max = $this->Lelang_model->max_bid($id);

		$this->Lelang_model->harga_akhir = $max->penawaran_harga;
		$this->Lelang_model->pemenang = $max->nama_lengkap;
		$this->Lelang_model->status = 'ditutup';
		$this->Lelang_model->update($id);

		$this->session->set_flashdata('success', 'Lelang telah diselesaikan !');
		redirect('admin/data_lelang/view_pemenang/' . $id);

		return [];
	}

	public function pemenang()
	{
		$args = ['auctions'	 => $this->Lelang_model->all()];

		$this->load->view('templates_admin/header', $args);
		$this->load->view('templates_admin/sidebar',$args);
		$this->load->view('admin/data_lelang/data_pemenang',$args);
		$this->load->view('templates_admin/footer');
        
	}

	public function view_pemenang($id)
	{
	
		$product = $this->Lelang_model->first($id);

		$args = [
			'product'	 => $product,
			'history'	 => $this->Lelang_model->history($id),
			'max_bid'	 => $this->Lelang_model->max_bid($id),
			'auction'	 => $this->Lelang_model->first($id),
		];

		
		$this->load->view('templates_admin/header', $args);
		$this->load->view('templates_admin/sidebar',$args);
		$this->load->view('admin/data_lelang/view_pemenang',$args);
		$this->load->view('templates_admin/footer');
	}

	
	
}
	