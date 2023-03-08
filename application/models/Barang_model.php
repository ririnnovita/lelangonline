<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang_model extends CI_Model
{
	public $name;
	public $price;
	public $desc;


	public function all()
	{
		return $this->db->order_by('id_barang', 'desc')->get('tb_barang')->result_object();
	}

    public function available()
	{
        $this->db->where('status_barang', 0);
		return $this->db->order_by('id_barang', 'desc')->get('tb_barang')->result_object();
	}

	public function tampil_data()
    {
        return $this->db->get('tb_barang');
    }

	public function edit_barang($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function filter_laporan($tgl_barang_awal, $tgl_barang_akhir) {
		$this->db->select('*');
		$this->db->from('tb_barang');
		$this->db->where('tb_barang.tgl>=', $tgl_barang_awal);
		$this->db->where('tb_barang.tgl<=', $tgl_barang_akhir);
		return $this->db->get()->result();

	}

    function insert_data($data, $table)
    {
        return $this->db->insert($table, $data);
    }
	

	
	
}
