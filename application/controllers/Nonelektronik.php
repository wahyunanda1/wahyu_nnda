<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nonelektronik extends CI_Controller {

	public function index()
	{
		$judul['judul'] = 'Halaman Non Elektronik';
		$data['tb_nonelektronik'] = $this->db->get('tb_nonelektronik')->result();
		// $data['elektronik'] = $this->m_elektronik->tampil_data()->result();
		// $data['tb_elektronik'] = 'tes';
		
	
		$this->load->view('layout/header', $judul);
		$this->load->view('layout/sidebar', $data);
		$this->load->view('nonelektronik/view', $data);
		$this->load->view('layout/footer');
	}
	public function add()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('nonelektronik/input');
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
		
		$tambah = $this->m_nonelektronik->input_data($data, 'tb_nonelektronik');
		redirect('nonelektronik/index');
	}

		public function hapus($id_barang)
	{
		$where = array('id_barang'	=>$id_barang);
		$this->m_nonelektronik->hapus_data($where, 'tb_nonelektronik');
		redirect('nonelektronik/index');
	}
	public function edit($id_barang)
	{
		$judul['judul'] = 'Halaman Ubah Data Barang';
		$where = array('id_barang'	=>$id_barang);
		$data['tb_nonelektronik'] = $this->db->get_where('tb_nonelektronik',
			['id_barang' => $id_barang])->row();
		$data['id_barang'] = $id_barang;
		// var_dump($data['tb_elektronik']);
		// die();

		// $data['tb_elektronik'] = $this->m_elektronik->edit_data($where,'tb_elektronik')->result();

		$this->load->view('layout/header', $judul);
		$this->load->view('layout/sidebar');
		$this->load->view('nonelektronik/edit', $data);
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
		$this->m_nonelektronik->update_data($where, $data, 'tb_nonelektronik');
		redirect('nonelektronik/index');
	}
}
