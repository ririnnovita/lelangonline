<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Petugas_model extends CI_Model {
	public function first($username) {
		return $this->db->where('username', $username)
						->join('tb_level', 'tb_level.id_level = tb_petugas.id_level')
					    ->get('tb_petugas')->row_object();
	}

	public function all() {
		return $this->db->get('tb_petugas')->result_object();
	}

	// data level
	function tampil_data_level()
	{
		
		return $this->db->get('tb_level');
	}

	// data admin
	function tampil_data_admin()
	{
		return $this->db->get('tb_petugas');
	}


	function insert_data_admin($data)
	{
		return $this->db->insert('tb_petugas', $data);

	}

	public function edit_admin($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_data_admin($where, $data, $table)
    {
        $this->db->where($where);
        return $this->db->update($table, $data);
    }

	public function filter_laporan() {
		return $this->db->get_where('tb_petugas', ['id_level' => 2])->result();

	}


	
}
