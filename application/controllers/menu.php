<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Menu extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		cek_login(); //menggunakan helper
	}

	public function index()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Menu Management';

		$data['menu'] = $this->db->get('user_menu')->result_array();

		$this->form_validation->set_rules('menu', 'Menu', 'required', [
			'required' => 'Proses gagal, Mohon isi menu apa yg ingin di tambahkan'
		]);

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('menu/index', $data);
			$this->load->view('templates/footer');
		} else {
			$this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil di tambahkan.</div>
				');
			redirect('menu');
		}
	}

	public function edit_data_menu($id)
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Edit Menu';

		$where = array('id' => $id);

		$data['menu'] = $this->Menu_model->edit_data_menu($where, 'user_menu')->result();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('menu/edit_data_menu', $data);
		$this->load->view('templates/footer');
	}

	public function update()
	{
		$data = [
			"id"			=> $this->input->post('id'),
			"menu" 			=> $this->input->post('menu')
		];

		$this->Menu_model->updateMenu($data, ['id' => $this->input->post('id')]);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil di edit.</div>');
		redirect('menu');
	}


	public function delete_menu($id)
	{
		$this->Menu_model->delete($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil di hapus.</div>');
		redirect('menu');
	}

	public function delete_submenu($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('user_sub_menu');
		// $this->Menu_model->delete($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil di hapus.</div>');
		redirect('menu/submenu');
	}

	public function submenu()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Submenu Management';

		$data['submenu'] = $this->Menu_model->getSubmenu();
		$data['menu'] = $this->db->get('user_menu')->result_array();

		$this->form_validation->set_rules('title', 'Title', 'required', [
			'required' => 'Proses gagal, Mohon isi title submenu apa yg ingin di tambahkan'
		]);
		$this->form_validation->set_rules('menu_id', 'Menu', 'required', [
			'required' => 'Proses gagal, Mohon isi menu apa yg ingin di tambahkan'
		]);
		$this->form_validation->set_rules('url', 'Url', 'required', [
			'required' => 'Proses gagal, Mohon isi bagian url'
		]);
		$this->form_validation->set_rules('icon', 'Icon', 'required', [
			'required' => 'Proses gagal, bagian ini masih kosong'
		]);

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('menu/submenu', $data);
			$this->load->view('templates/footer');
		} else {
			$data = [
				'title'		=> $this->input->post('title'),
				'menu_id'	=> $this->input->post('menu_id'),
				'url'		=> $this->input->post('url'),
				'icon'		=> $this->input->post('icon'),
				'is_active' => $this->input->post('is_active')
			];

			$this->db->insert('user_sub_menu', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Submenu Berhasil di tambahkan.</div>');
			redirect('menu/submenu');
		}
	}
}
