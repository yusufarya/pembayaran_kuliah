<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Mhs extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		cek_login(); //menggunakan helper
	}

	public function index()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Data Mahasiswa';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('mhs/index', $data);
		$this->load->view('templates/footer');
	}
}