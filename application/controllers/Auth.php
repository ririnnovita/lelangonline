<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	
	
	// login pages
	public function login()
	{
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[4]');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[4]');

		if ($this->form_validation->run() == FALSE) {
		$this->load->view('templates_user/header');
		$this->load->view('auth/login');
		$this->load->view('templates_user/footer');
		} else {
			// jika berhasil tervalidasi
			$this->_login();
		}
	}
 
	
	// proses login
	public function _login() {
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$query = $this->db->get_where('tb_petugas', ['username' => $username]);
        $query2 = $this->db->get_where('tb_masyarakat', ['username' => $username]);

        if ($query->num_rows()>0) {
            foreach ($query->result() as $row) {
				if (password_verify($password, $row->password)) {
					// apabila login sebagai admin atau petugas
					$sess = array(
						'id_petugas' => $row->id_petugas,
						'nama_petugas' => $row->nama_petugas,
						'username' => $row->username,
						'password' => $row->password,
						'id_level' => $row->id_level
					);
					
					$this->session->set_userdata($sess);
					if ($row->id_level == 1){
						return 	redirect('admin/dashboard');
					} else if($row->id_level == 2){
						return redirect('petugas/dashboard');
					}
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade-show" role="alert">
						Periksa kembali password anda !
					</div>');
					redirect('auth/login');
				}
            }
        } else if ($query2->num_rows()>0){
            foreach ($query2->result() as $row) {
				if (password_verify($password, $row->password)) {
					// apabila login sebagai masyarakat
					$sess = array(
						'id_user' => $row->id_user,
						'username' => $row->username,
						'nama_lengkap' => $row->nama_lengkap,
						'password' => $row->password,
						'id_level' => $row->id_level,
					);

					$this->session->set_userdata($sess);
					if ($row->id_level == 3){
						return 	redirect('auction');
					} 
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade-show" role="alert">
						Periksa kembali password anda !
					</div>');
					redirect('auth/login');
				}
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade-show" role="alert">
            	Periksa kembali username dan password anda !
            </div>');
            redirect('auth/login');
        }
	}

	// registrasi
	public function register()
    {
		
	
		$this->form_validation->set_rules('nama_lengkap', 'Nama lengkap', 
		'required|is_unique[tb_masyarakat.nama_lengkap]',
		[
			'is_unique' => 'nama lengkap sudah ada'
		]);
		$this->form_validation->set_rules('username', 'Username', 
		'required|is_unique[tb_masyarakat.username]',
		[
			'is_unique' => 'username sudah ada'
		]);
        $this->form_validation->set_rules('password', 'Password', 'required|matches[repassword]');
        $this->form_validation->set_rules('repassword', 'Password', 'required|matches[password]');
		
		$this->form_validation->set_rules('telp', 'Telp', 'required|min_length[12]');

        if ($this->form_validation->run() == FALSE) {
				$this->load->view('templates_user/header');
				$this->load->view('auth/register');
				$this->load->view('templates_user/footer');
		
        } else {
            $data = array(
                'id_user'        => '',
                'nama_lengkap'  => $this->input->post('nama_lengkap'),
                'username'  => $this->input->post('username'),
                'password'  => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'telp'  => $this->input->post('telp'),
                'id_level'   => 3
            );

            $this->db->insert('tb_masyarakat', $data);
			$this->session->set_flashdata(
				'message',
				'<div class="alert alert-success alert-dismissible fade-show" role="alert">
				Berhasil registrasi
				</div>'
			);
            redirect('auth/login');
    }
}


	public function logout()
    {
        $this->session->sess_destroy();
        redirect('auction');
    }

	
}
