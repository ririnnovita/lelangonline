<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class History extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		
		if ($this->session->userdata('id_level') != '3') {
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade-show" role="alert">
				 Anda Belum Login!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('auth/login');
		  }
        }
    
        public function index() {
			
        
        $args = [
			'auctions'	 => $this->Lelang_model->all(),
            'history'	 => $this->Masyarakat_model->history()
        ];

            $this->load->view('templates_user/header', $args );
            $this->load->view('auction/history', $args );
            $this->load->view('templates_user/footer');
        }

        public function history_detail($id)
	    {
		$product = $this->Lelang_model->first($id);
		if ($this->input->post('bid')) {
			$errors = $this->_history_detail_process($product);
			$product = $this->Lelang_model->first($id);
		}
	
		$args = [
			'product'	 => $product,
			'history'	 => $this->Lelang_model->history($id),
			'max_bid'	 => $this->Lelang_model->max_bid($id),
		];
		
		$this->load->view('templates_user/header', $args);
		$this->load->view('auction/history_detail', $args);
		$this->load->view('templates_user/footer');
	    }


	private function _history_detail_process($product) {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('price', 'Price', 'required|numeric|greater_than_equal_to['.$product->harga_awal.']');
		if ($this->form_validation->run()) {
			$this->Lelang_model->price = set_value('price');
			$this->Lelang_model->id_lelang = $product->id_lelang;
			$this->Lelang_model->id_user = uid();
			
			$this->Lelang_model->save_bid();
			$this->session->set_flashdata(
				'message',
				'<div class="alert alert-success alert-dismissible fade-show" role="alert">
				Bid telah ditambahkan
				</div>'
			);
			redirect('history/history_detail/'.$product->id_lelang);
		}
		return $this->form_validation->error_array();
	}

	public function cetak_pemenang($id) {
		//load library
		$this->load->model('Masyarakat_model');
		$this->load->library('pdf');

		// load model dashboard
		$data['laporan'] = $this->Masyarakat_model->filter_pemenang($id);

		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "bukti-pemenang.pdf";

		//run dompdf
		$this->pdf->load_view('auction/cetak_pemenang', $data);
	}



}
    