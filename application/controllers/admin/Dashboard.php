<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
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
		$id_barang = $this->db->query("SELECT * FROM tb_barang");
		$lelang = $this->db->query("SELECT * FROM tb_lelang");
		$administrator = $this->db->query("SELECT * FROM tb_petugas");
		$masyarakat = $this->db->query("SELECT * FROM tb_masyarakat");

		$data['barang'] = $id_barang->num_rows();
		$data['lelang'] = $lelang->num_rows();
		$data['administrator'] = $administrator->num_rows();
		$data['masyarakat'] = $masyarakat->num_rows();

		$data['tb_barang'] = $this->Barang_model->tampil_data()->result();
		
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar',$data);
		$this->load->view('admin/dashboard',$data);
		$this->load->view('templates_admin/footer');
	}
	


}

		
	
