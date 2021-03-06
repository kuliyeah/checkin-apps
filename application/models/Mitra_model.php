<?php

class Mitra_model extends CI_Model
{
	public function getDataMitra()
	{
		$this->db->order_by('status', 'ASC');
		return $this->db->get('mitra');
	}

	public function getDataMitraById($idMitra)
	{
		$this->db->where('idMitra', $idMitra);
		return $this->db->get('mitra');
	}

	public function tambah_mitra($data)
	{
		return $this->db->insert('mitra', $data);
	}

	public function hapus_mitra($idMitra)
	{
		$this->db->where('idMitra', $idMitra);
		$this->db->delete('mitra');
	}

	public function update_mitra($idMitra, $data)
	{
		$this->db->update('mitra', $data, array('idMitra' => $idMitra));
	}

	public function countRowsMitra()
	{
		return $this->db->get('mitra')->num_rows();
	}

	public function verifikasi_mitra($idMitra)
	{
		$this->db->update('mitra', array('status' => 'Sudah Verifikasi'), array('idMitra' => $idMitra));
	}
	
}
