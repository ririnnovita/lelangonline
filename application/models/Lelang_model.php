<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lelang_model extends CI_Model
{
	public $id_barang;
	public $tgl_lelang;
	public $harga_akhir;
	public $id_lelang;
	public $pemenang;
	public $id_petugas;
	public $status;
	public $price;

	public function first($id)
	{
		$this->db->where('id_lelang', $id);
		return $this->db->order_by('id_lelang', 'desc')
			->join('tb_barang', 'tb_barang.id_barang=tb_lelang.id_barang', 'inner')
			->join('tb_petugas', 'tb_petugas.id_petugas=.tb_lelang.id_petugas', 'inner')
			->get('tb_lelang')->row_object();
	}


	public function all()
	{
		return $this->db->order_by('id_lelang', 'desc')
			->join('tb_barang', 'tb_barang.id_barang=tb_lelang.id_barang', 'inner')
			->join('tb_petugas', 'tb_petugas.id_petugas=.tb_lelang.id_petugas', 'inner')
			->get('tb_lelang')->result_object();
	}

	
	public function save()
	{
		$this->db->set('status_barang', 1)
			->where('id_barang', $this->id_barang)
			->update('tb_barang');
		
		$result = $this->db->set('id_barang', $this->id_barang)
			->set('tgl_lelang', $this->tgl_lelang)
			->set('tgl_akhir', $this->tgl_akhir)
			->set('harga_akhir', $this->harga_akhir)
			->set('pemenang', $this->pemenang)
			->set('id_petugas', $this->id_petugas)
			->insert('tb_lelang');
		$this->_reset();

		return $result;
	}

	
	public function update($id)
	{
		$this->db->where('id_lelang', $id);
		if ($this->id_barang != null) {
			$this->db->set('id_barang', $this->id_barang);
		}
		if ($this->tgl_lelang != null) {
			$this->db->set('tgl_lelang', $this->tgl_lelang);
		}
		if ($this->tgl_akhir != null) {
			$this->db->set('tgl_akhir', $this->tgl_akhir);
		}
		if ($this->harga_akhir != null) {
			$this->db->set('harga_akhir', $this->harga_akhir);
		}
		if ($this->pemenang != null) {
			$this->db->set('pemenang', $this->pemenang);
		}
		if ($this->id_petugas != null) {
			$this->db->set('id_petugas', $this->id_petugas);
		}
		if ($this->status != null) {
			$this->db->set('status', $this->status);
		}

		$result = $this->db->update('tb_lelang');
		$this->_reset();
		return $result;
	}

	public function update_pemenang($id)
	{
		$this->db->where('id_lelang', $id);
		
		if ($this->tgl_akhir != null) {
			$this->db->set('tgl_akhir', $this->tgl_akhir);
		}
		if ($this->status != null) {
			$this->db->set('status', $this->status);
		}

		$result = $this->db->update('tb_lelang');
		$this->_reset();
		return $result;
	}

	public function delete($id)
	{
		return $this->db->where('id_barang', $id)->delete('tb_barang');
	}

	public function history($id) {
		return $this->db->join('tb_masyarakat', 'tb_masyarakat.id_user=history_lelang.id_user')
			->where('id_lelang', $id)
			->order_by('penawaran_harga', 'desc')
			->get('history_lelang')->result_object();
	}

	public function max_bid($id)
	{
		return $this->db->join('tb_masyarakat', 'tb_masyarakat.id_user=history_lelang.id_user')
			->order_by('penawaran_harga', 'desc')
			->order_by('nama_lengkap', 'desc')
			->where('id_lelang', $id)
			->limit(1)
			->get('history_lelang')->row_object();
	}

	public function save_bid()
	{
		// $data = [
		// 	'id_lelang' => $this->id_lelang,
		// 	'id_user' => $this->id_user,
		// 	'penawaran_harga' => $this->price,
		// ];

		// var_dump($data);die;
		
		$result = $this->db->set('id_lelang', $this->id_lelang)
			->set('id_user', $this->session->userdata('id_user'))
			->set('penawaran_harga', $this->price)
			->insert('history_lelang');
		$this->_reset();
		return $result;
	}

	public function report() {
		return $this->db->order_by('id_lelang', 'asc')
			->join('tb_barang', 'tb_barang.id_barang=tb_lelang.id_barang', 'inner')
			->join('tb_petugas', 'tb_petugas.id_petugas=.tb_lelang.id_petugas', 'inner')
			->where('status',  'ditutup')
			->get('tb_lelang')->result_object();
	}

	public function filter_laporan($tgl_lelang_awal, $tgl_lelang_akhir) {
		$this->db->select('*');
		$this->db->from('tb_lelang');
		$this->db->join('tb_barang', 'tb_barang.id_barang=tb_lelang.id_barang', 'inner');
		$this->db->join('tb_petugas', 'tb_petugas.id_petugas=tb_lelang.id_petugas', 'inner');
		$this->db->where('tb_lelang.tgl_lelang>=', $tgl_lelang_awal);
		$this->db->where('tb_lelang.tgl_lelang<=', $tgl_lelang_akhir);
		return $this->db->get()->result();
	}

	public function filter_laporan_lelang($tgl_lelang_awal, $tgl_lelang_akhir) {
		$this->db->select('*');
		$this->db->from('tb_lelang');
		$this->db->join('tb_barang', 'tb_barang.id_barang=tb_lelang.id_barang', 'inner');
		$this->db->join('tb_petugas', 'tb_petugas.id_petugas=tb_lelang.id_petugas', 'inner');
		$this->db->where('tb_lelang.tgl_lelang>=', $tgl_lelang_awal);
		$this->db->where('tb_lelang.tgl_lelang<=', $tgl_lelang_akhir);
		return $this->db->get()->result();
	}


	private function _reset()
	{
		$this->id_barang = null;
		$this->tgl_lelang = null;
		$this->harga_akhir = null;
		$this->id_lelang = null;
		$this->pemenang = null;
		$this->id_petugas = null;
		$this->status = null;
		$this->price = null;
	}
}
