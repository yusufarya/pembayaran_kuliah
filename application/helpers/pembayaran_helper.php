<?php 

function cek_login()
{
	// untuk mengambil library CI dalam fungsi get_intance()
	$ci = get_instance();
	// Cek udah login atau belum
	if (!$ci->session->userdata('email')) {
		redirect('auth');
		// jika sudah login
	} else {
		$role_id = $ci->session->userdata('role_id');
		// kita lagi mengakses di menu mana ?
		// (uri) untuk mengambil uri urutan segment pertama 
		$menu = $ci->uri->segment(1);

		// Query tabel menu
		$queryMenu = $ci->db->get_where('user_menu', ['menu' => $menu])->row_array();
		// dan ambil menu_id nya
		$menu_id = $queryMenu['id'];

		// Query user_access_menu
		// Cek di access menu nya, cari role_id dan menu_id nya
		$userAccess = $ci->db->get_where('user_access_menu', [
			'role_id' => $role_id,
			'menu_id' => $menu_id
		]);

		// UserAccess ini ada isinya , dan lebih kecil dari 1, maka tidak dapat mengakses
		if ($userAccess->num_rows() < 1 ) {
			redirect('auth/block');
		}
	}
}

function check_access($role_id, $menu_id)
{
	$ci = get_instance();

	$ci->db->where('role_id', $role_id);
	$ci->db->where('menu_id', $menu_id);
	$result = $ci->db->get('user_access_menu');

	if ($result->num_rows() > 0 ) {
		return "checked='checked'";
	}
}