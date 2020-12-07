<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nonelektronik extends CI_Controller {

	public function index()
	{
		$judul['judul'] = 'Halaman Non Elektronik';
		// $data['tb_nonelektronik'] = $this->m_nonelektronik->tampil_data();
		$data['tb_nonelektronik'] = $this->db->get('tb_nonelektronik')->result();
		$script['script'] = $this->load->view('elektronik/script.js', '', TRUE);
		// $data['elektronik'] = $this->m_elektronik->tampil_data()->result();
		// $data['tb_elektronik'] = 'tes';
		
	
		$this->load->view('layout/header', $judul);
		$this->load->view('layout/sidebar', $data);
		$this->load->view('nonelektronik/view', $data);
		$this->load->view('layout/footer', isset($script) ? $script : '');
	}
	public function add()
	{
		$data = array(
			"kondisi_barang" => ""
		);
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('nonelektronik/input', $data);
		$this->load->view('layout/footer');
	}

	// public function tes() {
		
	// 	// $angka = array(1, 2, 3, 4, 5, 6, 7);
	// 	// foreach ($angka as $isi) {
	// 	// 	echo $isi;
	// 	// }
	// 	$data = array(
	// 		"nama" => "wahyu",
	// 		"kelas" => "12",
	// 		"jurusan" => "rpl"
	// 	);

	// 	$i = 1;

	// 	foreach ($data as $kunci => $nilai) {
	// 		echo "nama kunci : " . $kunci . "<br>";
	// 		echo "nilai kunci : " . $nilai . "<br>";
	// 		echo "perulangan ke-".$i . "<br>";
	// 		$i = $i + 1;
	// 	}
	// }

	public function tambah_aksi(){

		$this->form_validation->set_message('required', 'field {field} tidak boleh kosong');
		$this->form_validation->set_rules('nama_barang','Nama Barang','required');
		$this->form_validation->set_rules('kondisi_barang', 'Kondisi Barang', 'required' );
		$this->form_validation->set_rules('jumlah','Jumlah','required');

		if ($this->form_validation->run() == false) {
			$data = array(
				"kondisi_barang" => set_value('kondisi_barang')
			);
			$this->load->view('layout/header');
			$this->load->view('layout/sidebar');
			$this->load->view('elektronik/input', $data);
			$this->load->view('layout/footer');
		} else {
			$data = [
				'nama_barang' => htmlspecialchars(trim($this->input->post('nama_barang', true) ) ),
				'jumlah' => htmlspecialchars($this->input->post('jumlah', true))
			];


		$waktu_diinput = $this->input->post('waktu_diinput');
		$id_barang = $this->input->post('id_barang');
		$nama_barang = $this->input->post('nama_barang');
		$kondisi_barang = $this->input->post('kondisi_barang');
		$jumlah = $this->input->post('jumlah');
		

		$data = array(
			'waktu_diinput' => $waktu_diinput,
			'nama_barang' => trim($nama_barang),
			'kondisi_barang' => $kondisi_barang,
			'jumlah' => $jumlah
		);

		$tambah = $this->m_nonelektronik->input_data($data, 'tb_nonelektronik');
		if ($tambah) {
			$this->session->set_flashdata("status", "berhasil-tambah-data");
		}
		else {
			$this->session->set_flashdata("status", "gagal-tambah-data");
		}
		redirect('nonelektronik/index');
		
	}
}
		public function hapus($id_barang)
	{
		$where = array('id_barang'	=> $id_barang);
		// $where = array("nama_barang" => $nama_barang);
		$hapus = $this->m_nonelektronik->hapus_data($where, 'tb_nonelektronik');
		if ($hapus) {
			$this->session->set_flashdata("status", "berhasil-hapus-data");
		}
		else {
			$this->session->set_flashdata("status", "gagal-hapus-data");
		}
		redirect('nonelektronik/index');
	}
	public function edit($id_barang)
	{
		$judul['judul'] = 'Halaman Ubah Data Barang';
		$where = array('id_barang'	=>$id_barang);
		$data['tb_nonelektronik'] = $this->db->get_where('tb_nonelektronik',
			['id_barang' => $id_barang])->row();
		$data['id_barang'] = $id_barang;
		$data['script'] = $this->load->view('nonelektronik/script_edit.js', '', TRUE);
		// var_dump($data['tb_elektronik']);
		// die();

		// $data['tb_elektronik'] = $this->m_elektronik->edit_data($where,'tb_elektronik')->result();

		$this->load->view('layout/header', $judul);
		$this->load->view('layout/sidebar');
		$this->load->view('nonelektronik/edit', $data);
		$this->load->view('layout/footer');
	}
	public function update_data($id_barang)
	{
		$this->form_validation->set_message('required', 'field {field} tidak boleh kosong');
		$this->form_validation->set_rules('nama_barang','Nama Barang','required');
		$this->form_validation->set_rules('kondisi_barang', 'Kondisi Barang', 'required' );
		$this->form_validation->set_rules('jumlah','Jumlah','required');


		if ($this->form_validation->run() == false) {
			$data = array(
				"kondisi_barang" => set_value('kondisi_barang'),
				"id_barang" => $id_barang
			);

			$this->load->view('layout/header');
			$this->load->view('layout/sidebar');
			$this->load->view('nonelektronik/update_data', $data);
			$this->load->view('layout/footer');
			return;
		}

		$waktu_diinput = $this->input->post('waktu_diinput');
		$id_barang = $this->input->post('id_barang');
		$nama_barang = $this->input->post('nama_barang');
		$kondisi_barang = $this->input->post('kondisi_barang');
		$jumlah = $this->input->post('jumlah');
		

		$data = array(
			'waktu_diinput' => $waktu_diinput,
			'nama_barang' => trim($nama_barang),
			'kondisi_barang' => $kondisi_barang,
			'jumlah' => $jumlah
		
		);

		$where = array('id_barang' =>$id_barang);
		$edit = $this->m_nonelektronik->update_data($where, $data, 'tb_nonelektronik');
		if ($edit) {
			$this->session->set_flashdata("status", "berhasil-ubah-data");
		}
		else {
			$this->session->set_flashdata("status", "gagal-ubah-data");
		}
		redirect('nonelektronik/index');
	}
}
