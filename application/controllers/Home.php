<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller{
 
 	public function index()
 	{
 		$judul['judul'] = 'Halaman Beranda';
		$data['jumlahelektronik'] = $this->m_elektronik->tampil_data()->result();
		$data['tb_elektronik'] = $this->db->get_where('tb_elektronik',['nama_barang' => $this->session->userdata('nama_barang')])->row_array();
		$data['tb_nonelektronik'] = $this->db->get_where('tb_nonelektronik',['nama_barang' => $this->session->userdata('nama_barang')])->row_array();
		$data['script'] = $this->load->view('script_home.js', '', TRUE);
		$this->load->view('layout/header', $judul);
		$this->load->view('layout/sidebar', $data);
		$this->load->view('home', $data);
		$this->load->view('layout/footer',$data);
	
 	}
 }
 ?>
