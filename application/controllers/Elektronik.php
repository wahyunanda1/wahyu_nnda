<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Elektronik extends CI_Controller {

	public function index()
	{
		$judul['judul'] = 'Halaman Elektronik';
		$data['tb_elektronik'] = $this->db->get('tb_elektronik')->result();
		$script['script'] = $this->load->view('elektronik/script.js', '', TRUE);
		// $data['elektronik'] = $this->m_elektronik->tampil_data()->result();
		// $data['tb_elektronik'] = 'tes';
		
	
		$this->load->view('layout/header', $judul);
		$this->load->view('layout/sidebar', $data);
		$this->load->view('elektronik/view', $data);
		$this->load->view('layout/footer', isset($script) ? $script : '');
	}
	public function add()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('elektronik/input');
		$this->load->view('layout/footer');
	}
	public function tambah_aksi(){

		$waktu_diinput = $this->input->post('waktu_diinput');
		$id_barang = $this->input->post('id_barang');
		$nama_barang = $this->input->post('nama_barang');
		$kondisi_barang = $this->input->post('kondisi_barang');
		$jumlah = $this->input->post('jumlah');
		

		$data = array(
			'waktu_diinput' => $waktu_diinput,
			'nama_barang' => $nama_barang,
			'kondisi_barang' => $kondisi_barang,
			'jumlah' => $jumlah
		); 
		
		$tambah = $this->m_elektronik->input_data($data, 'tb_elektronik');
		if ($tambah) {
			$this->session->set_flashdata("status", "berhasil-tambah-data");
		}
		else {
			$this->session->set_flashdata("status", "gagal-tambah-data");
		}
		redirect('elektronik/index');
	}

		public function hapus($id_barang)
	{
		$where = array('id_barang'	=>$id_barang);
		$hapus = $this->m_elektronik->hapus_data($where, 'tb_elektronik');
		if ($hapus) {
			$this->session->set_flashdata("status", "berhasil-hapus-data");
		}
		else {
			$this->session->set_flashdata("status", "gagal-hapus-data");
		}
		redirect('elektronik/index');
	}
	public function edit($id_barang)
	{
		$judul['judul'] = 'Halaman Ubah Data Barang';
		$where = array('id_barang'	=>$id_barang);
		$data['tb_elektronik'] = $this->db->get_where('tb_elektronik',
			['id_barang' => $id_barang])->row();
		$data['id_barang'] = $id_barang;
		// var_dump($data['tb_elektronik']);
		// die();

		// $data['tb_elektronik'] = $this->m_elektronik->edit_data($where,'tb_elektronik')->result();

		$this->load->view('layout/header', $judul);
		$this->load->view('layout/sidebar');
		$this->load->view('elektronik/edit', $data);
		$this->load->view('layout/footer');
	}
	public function update_data()
	{
		$waktu_diinput = $this->input->post('waktu_diinput');
		$id_barang = $this->input->post('id_barang');
		$nama_barang = $this->input->post('nama_barang');
		$kondisi_barang = $this->input->post('kondisi_barang');
		$jumlah = $this->input->post('jumlah');
		

		$data = array(
			'waktu_diinput' => $waktu_diinput,
			'nama_barang' => $nama_barang,
			'kondisi_barang' => $kondisi_barang,
			'jumlah' => $jumlah
		
		);

		$where = array('id_barang' =>$id_barang);
		$edit = $this->m_elektronik->update_data($where, $data, 'tb_elektronik');
		if ($edit) {
			$this->session->set_flashdata("status", "berhasil-ubah-data");
		}
		else {
			$this->session->set_flashdata("status", "gagal-ubah-data");
		}
		redirect('elektronik/index');
	}
}
