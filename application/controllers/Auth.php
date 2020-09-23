<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once APPPATH . 'core/MY_Controller.php';

class Auth extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');

	}
	public function index()
	{
		// var_dump($this->session->get_userdata());
		// die();
		$this->form_validation->set_rules('email','Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password','Password', 'trim|required');
		if ($this->form_validation->run() == false) {
			$data['title'] = 'Masuk Akun!';
			$this->load->view('templates/auth_header', $data);
			$this->load->view('auth/login');
			$this->load->view('templates/auth_footer');
		} 
		else {
		// validasinya sukses
			$this->login();
		}

	}
	public function login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$login = $this->db->get_where('login', ['email' => $email])->row_array();
		$akun_benar = (!empty($login) AND password_verify($password, $login['password']) );
		
		
		//jika adminnya ada dan adminnya sudah aktivasi
		if ($akun_benar AND $login['akun_aktif'] == 1) {
			$this->session->set_userdata('data_login', $login);
			redirect('home');
		}
		
		// jika adminnya ada dan adminnya belum aktivasi
		else if ($akun_benar AND $login['akun_aktif'] == 0) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Email anda belum diaktivasi!</div>');
			redirect('auth');
			//Adminnya aktif
			
		}

		// jika akun yang dimasukkan tidak benar
		else if ($akun_benar == FALSE) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Email dan Password anda salah!</div>');
			redirect('auth');
		}

	}
	public function registrasi()
	{
		if($this->session->userdata('email')) {
			redirect('auth');
		}

		$this->form_validation->set_rules('nama','Nama','required|trim');
		$this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[login.email]', [
			'is_unique' => 'Email ini telah diregistrasi'
		]);
		$this->form_validation->set_rules('password1','Password','required|trim|min_length[3]|matches[password2]', [
			'min_length' => 'Password terlalu pendek',
			'matches' => 'Password tidak sama!'
		]);
		$this->form_validation->set_rules('password2','Password','required|trim|matches[password1]');
		
		if ($this->form_validation->run() == false) {
			$this->load->view('templates/auth_header');
			$this->load->view('auth/registrasi');
			$this->load->view('templates/auth_footer');
		} else {
			$email = $this->input->post('email', true);
			$data = [
				'nama' => htmlspecialchars($this->input->post('nama', true)),
				'email' => htmlspecialchars($email),
				'password' => password_hash($this->input->post('password1'),PASSWORD_DEFAULT),
				'level' => 1,
				'akun_aktif' => 0,
				'waktu_dibuat' => time()
			];


			$token = base64_encode(random_bytes(12));
			$login_token = [
				'email' => $email,
				'token'	=> $token,
				'waktu_dibuat' => time()
			];
			
			$this->db->insert('login', $data);
			$this->db->insert('login_token', $login_token);
			$this->_sendEmail($token, 'verify');

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Selamat akun anda telah berhasil dibuat. Silahkan aktivasi akun lalu masuk!</div>');
			redirect('auth');

		}

	}

		private function _sendEmail($token, $type) {
			
			$nama = $this->input->post("nama");
            $email = $this->input->post("email");
            $message = $this->input->post("message");
            $config['mailpath'] = "/usr/bin/sendmail";
			$config['protocol'] = 'smtp';
			$config['smtp_host'] = 'smtp.gmail.com';
			$config['smtp_user'] = 'nndaptrawahyu@gmail.com';
			$config['smtp_pass'] = 'wahyunandarpl04';
			$config['smtp_port'] = 465;
			$config['mailtype'] = 'html';
			$config['charset'] = 'utf-8';
			$config['newline'] = "\r\n";

			$this->load->library('email', $config);

			$this->email->from('nndaptrawahyu@gmail.com', 'Wahyu Nanda Putra');
			$this->email->to($this->input->post('email'));
			$this->email->set_mailtype("html");

			if ($type == 'verify') {
				$this->email->subject('Verifikasi Akun');
				$this->email->message('Silahkan Klik Link Ini Untuk Aktivasi Akun Anda : <br><a href="'. base_url() . 'auth/verify?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Aktivasi</a>');
			} else if($type == 'forgot') {
				$this->email->subject('Ganti Password');
				$this->email->message('Silahkan Klik Link Ini Untuk Ganti Password Anda : <br><a href="'. base_url() . 'auth/resetpassword?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Ganti Password</a>');	
			}
			
            if($this->email->send()) {
                return true;

            } else {
               	echo $this->email->print_debugger();
                die;
			}

		}

		public function verify() {
			$get = $this->input->get();
			$email = $get['email'];
			$token = $get['token'];

			$data['akun_aktif'] = 1;
			$this->db->where('email', $email);
			$this->db->update('login', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Selamat akun anda berhasil diaktivasi. Silahkan masuk menggunakan akun anda!</div>');
			redirect('auth');

		}
		
		public function lupapassword()
		{
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
			if($this->form_validation->run() == false)	{
				$data['title'] = 'Lupa Password?';
				$this->load->view('templates/auth_header', $data);
				$this->load->view('auth/lupa_password');
				$this->load->view('templates/auth_footer');
			} else {
				$email = $this->input->post('email');
				$login = $this->db->get_where('login', ['email' => $email, 'akun_aktif' => 1
			])->row_array();

				if ($login) {
					$token = base64_encode(random_bytes(15));
					$login_token = [
						'email' => $email,
						'token' => $token,
						'waktu_dibuat' => time()

					];

					$this->db->insert('login_token', $login_token);
					$this->_sendEmail($token, 'forgot');

					$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Silahkan buka email anda untuk ganti password!</div>');
						redirect('auth/lupapassword');
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Email anda belum terdaftar atau belum aktif!</div>');
						redirect('auth/lupapassword');
				}
			}


			}

			public function tes() {
				var_dump($this->session->userdata());
			}
			
			public function logout()
			{
				$keys = array_keys($this->session->userdata());
				$this->session->unset_userdata($keys);
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Selamat Anda berhasil keluar!</div>');
				redirect('auth');
		}

			public function resetpassword()
			{
				$email = $this->input->get('email');
				$token = $this->input->get('token');

				$login = $this->db->get_where('login', ['email' => $email])->row_array();

				if($login) {
					$login_token = $this->db->get_where('login_token', ['token' => $token])->row_array();
					if($login_token) {
						$this->session->set_userdata('reset_email', $email);
						$this->gantipassword();
					} else {
						$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Ganti password gagal! Token salah.</div>');
						redirect('auth');
					}
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Ganti password gagal! Email salah.</div>');
						redirect('auth');
				}
			}

			public function gantipassword()
			{
				
				
				$this->form_validation->set_rules('password1', 'Password', 'trim|required|min_length[3]|matches[password2]');
				$this->form_validation->set_rules('password2', 'Repeat Password', 'trim|required|min_length[3]|matches[password1]');

				if($this->form_validation->run() == false) {
				$data['title'] = 'Ganti Password';
				$this->load->view('templates/auth_header', $data);
				$this->load->view('auth/ganti_password');
				$this->load->view('templates/auth_footer');
				} else {
					$password = password_hash($this->input->post('password1'), PASSWORD_DEFAULT);
					$email = $this->session->userdata('reset_email');

					$this->db->set('password', $password);
					$this->db->where('email', $email);
					$this->db->update('login');

					$this->session->unset_userdata('reset_email');

					$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Password anda sudah terganti! Silahkan login.</div>');
						redirect('auth');
				}
				
			}
}
