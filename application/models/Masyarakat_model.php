<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Masyarakat_model extends CI_Model
{
	public $fullname;
	public $username;
	public $password;
	public $telp;

	public function first($username)
	{
		return $this->db->where('username', $username)->get('tb_masyarakat')->row_object();
	}

	public function all()
	{
		return $this->db->get('tb_masyarakat')->result_object();
	}

	public function save()
	{
		$result = $this->db->set('nama_lengkap', $this->fullname)
			->set('username', $this->username)
			->set('password', password_hash($this->password, PASSWORD_DEFAULT))
			->set('telp', $this->telp)
			->insert('tb_masyarakat');
		$this->_reset();
		return $result;
	}

	private function _reset() {
		$this->fullname = null;
		$this->username = null;
		$this->password = null;
		$this->telp		= '';
	}

	public function tampil_data_masyarakat()
    {
        return $this->db->get('tb_masyarakat');
    }

	
	public function history() {
		return $this->db
					->join('tb_masyarakat', 'tb_masyarakat.id_user=history_lelang.id_user')
					->join('tb_lelang', 'tb_lelang.id_lelang=history_lelang.id_lelang', 'left')
					->join('tb_barang', 'tb_lelang.id_barang=tb_barang.id_barang', 'left')
			->where('tb_masyarakat.id_user', $this->session->userdata('id_user'))
			->group_by('tb_barang.id_barang')
			->order_by('penawaran_harga', 'desc')
			->get('history_lelang')->result_object();
	}

	public function filter_laporan() {
		$this->db->select('*');
		$this->db->from('tb_masyarakat');
		return $this->db->get()->result();

	}

	public function filter_pemenang($id_lelang) {
		return $this->db
					->join('tb_masyarakat', 'tb_masyarakat.id_user=history_lelang.id_user')
					->join('tb_lelang', 'tb_lelang.id_lelang=history_lelang.id_lelang', 'left')
					->join('tb_barang', 'tb_lelang.id_barang=tb_barang.id_barang', 'left')
		->where('tb_masyarakat.id_user', $this->session->userdata('id_user'))
		->where('tb_lelang.id_lelang', $id_lelang)
		->group_by('tb_barang.id_barang')
		->order_by('penawaran_harga', 'desc')
		->get('history_lelang')->result_object();
	}

	public function cariDataProduct()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama_barang', $keyword)
				->join('tb_barang', 'tb_barang.id_barang=tb_lelang.id_barang', 'inner')
				->join('tb_petugas', 'tb_petugas.id_petugas=.tb_lelang.id_petugas', 'inner');
        return $this->db->get('tb_lelang')->result();
		
    }
}
