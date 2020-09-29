<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_nonelektronik extends CI_Model {

	public function tampil_data()
	{
		return $this->db->get('tb_nonelektronik');
	}
	public function input_data($data,$table)
	{
		return $this->db->insert($table,$data);
	}
	public function hapus_data($where,$table)
	{
		$this->db->where($where);
		return $this->db->delete($table);
	}
	public function edit_data($where,$table)
	{
		return $this->db->get_where($table,$where);
	}
	public function update_data($where,$data,$table)
	{
		$this->db->where($where);
		return $this->db->update($table,$data);
	}
}