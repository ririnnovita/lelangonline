<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_admin extends CI_Controller
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
		$data['tb_petugas'] = $this->Petugas_model->tampil_data_admin()->result();
		
		
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar',$data);
		$this->load->view('admin/data_admin/data_admin',$data);
		$this->load->view('templates_admin/footer');
	}
	
	public function tambah_admin()
    {
        $data['tb_petugas'] = $this->Petugas_model->tampil_data_admin()->result_array();

		$this->form_validation->set_rules('nama_petugas', 'Nama Petugas', 
		'required|is_unique[tb_petugas.nama_petugas]',
		[
			'is_unique' => 'nama petugas sudah ada'
		]);
		$this->form_validation->set_rules('username', 'Username', 
		'required|min_length[4]|is_unique[tb_petugas.username]',
		[
			'is_unique' => 'username sudah ada'
		]);
		
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[4]|matches[repassword]');
        $this->form_validation->set_rules('repassword', 'Password', 'required|min_length[4]|matches[password]');
		$this->form_validation->set_rules('telp', 'Telp', 'required|min_length[12]');
		
        if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates_admin/header', $data);
			$this->load->view('templates_admin/sidebar',$data);
			$this->load->view('admin/data_admin/tambah',$data);
			$this->load->view('templates_admin/footer');
		} else {
			$data = array(
                'id_petugas'        => '',
                'nama_petugas'  => $this->input->post('nama_petugas'),
                'username'  => $this->input->post('username'),
                'password'  => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'telp'  => $this->input->post('telp'),
                'id_level'   => $this->input->post('id_level')
            );
			$this->Petugas_model->insert_data_admin($data);
			$this->session->set_flashdata(
				'message',
				'<div class="alert alert-success alert-dismissible fade-show" role="alert">
				Operator telah ditambahkan
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>'
			);
			redirect('admin/data_admin');
		}
    }
	
	public function edit($id_petugas)
	{
		$where = array('id_petugas' => $id_petugas);
		$data['tb_petugas'] = $this->Petugas_model->edit_admin($where, 'tb_petugas')->row();
		
		$this->form_validation->set_rules('nama_petugas', 'Nama Petugas', 
		'required');
		$this->form_validation->set_rules('username', 'Username', 
		'required|min_length[4]');
		
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[4]');
		$this->form_validation->set_rules('telp', 'Telp', 'required|min_length[12]');
		
        if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/data_admin/edit_admin', $data);
			$this->load->view('templates_admin/footer');
		} else {
			$id_petugas                = $this->input->post('id_petugas');
			$nama_petugas              = $this->input->post('nama_petugas');
			$username            	= $this->input->post('username');
			$password            	= $this->input->post('password');
			$telp            	= $this->input->post('telp');
			$id_level            	= $this->input->post('id_level');
	  
			
	   
	  $data = array(
		'nama_petugas'             => $nama_petugas,
		'username'          	  => $username,
		'password'          	  		  => $password,
		'telp'          	  		  => $telp,
		'id_level'          	  		  => $id_level,
	  );
  
	  $where = array(
		'id_petugas' => $id_petugas

	  );
  
	  $this->Petugas_model->update_data_admin($where, $data, 'tb_petugas');
	  $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade-show" role="alert">
	operator telah diubah
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	  <span aria-hidden="true">&times;</span>
	</button>
  </div>');
	  redirect('admin/data_admin');
		}
	}
  
	

    public function delete($id)
    {
		
		$this->db->db_debug = FALSE;

        $this->db->where('id_petugas', $id);
        $this->db->delete('tb_petugas');
		$error = $this->db->error();
		if ($error['code'] == 1451) {
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
			redirect('admin/Data_admin');
		}
		$this->db->db_debug = TRUE;

        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-danger alert-dismissible fade-show" role="alert">
            Opereator telah dihapus
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>'
        );
        redirect('admin/data_admin');
    }

}

		
	
