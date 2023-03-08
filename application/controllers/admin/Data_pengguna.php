<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_pengguna extends CI_Controller
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
		$data['tb_masyarakat'] = $this->Masyarakat_model->tampil_data_masyarakat()->result();
		
		
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar',$data);
		$this->load->view('admin/data_pengguna/data_pengguna',$data);
		$this->load->view('templates_admin/footer');
	}
	
	}

		
	
