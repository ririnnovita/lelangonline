<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auction extends CI_Controller {
    
	 /**
	 * Index page
	 */
	public function index() {
        $args = ['auctions'	 => $this->Lelang_model->all()];
		$lelangEndTime = false;

		foreach ($args['auctions'] as $auction) {
			$product = $this->Lelang_model->first($auction->id_lelang);
			date_default_timezone_set("Asia/Jakarta");
			$currentDateTime = date('Y-m-d H:i:s');
			$currentDateTime = strtotime($currentDateTime);
			// var_dump($product->tgl_akhir);
			// var_dump($product->tgl_akhir . '------' . $currentDateTime);
			// var_dump($product->tgl_akhir > $currentDateTime);die;
			if ($product->tgl_akhir != null) {
				// var_dump($product->nama_barang);
				$batas_waktu = strtotime($product->tgl_akhir);
				// var_dump($product->nama_barang . '------' . $batas_waktu . '------' . $currentDateTime);
				if ($currentDateTime >= $batas_waktu && $product->status == 'dibuka') {
					// var_dump($product->nama_barang . ' expired');
					$max_bid = $this->Lelang_model->max_bid($product->id_lelang);

					$this->db->set('status', 'ditutup');
					if ($max_bid != null) {
						$this->db->set('harga_akhir', $max_bid->penawaran_harga);
						$this->db->set('pemenang', $max_bid->nama_lengkap);
					}
					$this->db->where('id_lelang', $product->id_lelang);
					$this->db->update('tb_lelang');
					$lelangEndTime = true;
				}
			}
		}

		if ($lelangEndTime == true) {
			redirect('auction');
		}
		

		if ($this->input->post('keyword')) {
        	$args['auctions'] = $this->Masyarakat_model->cariDataProduct();
        }
		
		$this->load->view('templates_user/header', $args );
		$this->load->view('auction/auction', $args );
		$this->load->view('templates_user/footer');
	}

	public function detail_barang($id)
	{
	
		$product = $this->Lelang_model->first($id);

		// untuk ngecek jika batas akhir terlewat
		// $currentDateTime = date('Y-m-d H:i:s');
		// // var_dump($product->tgl_akhir . '------' . $currentDateTime);
		// // var_dump($product->tgl_akhir > $currentDateTime);die;
		// if ($product->tgl_akhir > $currentDateTime) {
		// 	$max_bid = $this->Lelang_model->max_bid($product->id_lelang);

		// 	$this->db->set('status', 'ditutup');
		// 	if ($max_bid != null) {
		// 		$this->db->set('harga_akhir', $max_bid->penawaran_harga);
		// 		$this->db->set('pemenang', $max_bid->nama_lengkap);
		// 	}
		// 	$this->db->where('id_lelang', $product->id_lelang);
		// 	$this->db->update('tb_lelang');
		// 	redirect('auction');
		// }

		if ($this->input->post('bid')) {
			$errors = $this->_detail_barang_process($product);
			$product = $this->Lelang_model->first($id);
		}
		
		$args = [
			'product'	 => $product,
			'history'	 => $this->Lelang_model->history($id),
			'max_bid'	 => $this->Lelang_model->max_bid($id),
		];
		
		$this->load->view('templates_user/header', $args);
		$this->load->view('auction/detail_barang', $args);
		$this->load->view('templates_user/footer');
	}

	
	private function _detail_barang_process($product) {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('price', 'Price', 'required|numeric|greater_than_equal_to['.$product->harga_awal.']',
		[
			'greater_than_equal_to' => 'Nilai harus lebih besar atau sama dengan harga awal',
			'required' => 'Harga harus diisi'
		]);
		
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
			redirect('auction/detail_barang/'.$product->id_lelang);
		}

		return $this->form_validation->error_array();
	}

}