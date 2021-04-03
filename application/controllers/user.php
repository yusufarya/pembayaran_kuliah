<?php
defined('BASEPATH') or exit('No direct script access allowed');
class User extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		cek_login(); //menggunakan helper
	}

	public function index()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'My Profile';

		$data['jurusan'] = $this->Model_user->getUser();
		$data['jurusan'] = $this->db->get('jurusan')->result_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('user/index', $data);
		$this->load->view('templates/footer');
	}

	public function edit_profile()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Edit Profile';

		$this->form_validation->set_rules('nama', 'Full Name', 'required|trim');
		$this->form_validation->set_rules('no_telp', 'No. Telp', 'required|trim');
		$this->form_validation->set_rules('alamat', 'No. Telp', 'required|trim');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('user/edit_profile', $data);
			$this->load->view('templates/footer');
		} else {
			$nama	= $this->input->post('nama');
			$no_telp	= $this->input->post('no_telp');
			$alamat	= $this->input->post('alamat');
			$email	= $this->input->post('email');

			// Cek jika ada gambar yg akan di upload
			$upload_image = $_FILES['image'];

			if ($upload_image) {
				$config['allowed_types'] = 'gif|jpg\png';
				$config['max_size'] = '2048';
				$config['upload_path'] = './assets/img/profile/';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('image')) {
					$old_image = $data['user']['image'];
					if ($old_image != 'default.jpg') {
						unlink(FCPATH . 'assets/img/profile/' . $old_image);
					}

					$new_image = $this->upload->data('file_name');
					$this->db->set('image', $new_image);
				} else {
					echo $this->upload->display_errors();
				}
			}

			$this->db->set('nama', $nama);
			$this->db->set('no_telp', $no_telp);
			$this->db->set('alamat', $alamat);
			$this->db->where('email', $email);
			$this->db->update('user');

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil...</div>');
			redirect('user');
		}
	}

	public function pembayaran()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['title'] = 'Pembayaran';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('user/pembayaran', $data);
		$this->load->view('templates/footer');
	}
}
