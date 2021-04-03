<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Menu_model extends CI_Model
{
	public function getSubmenu()
	{
		$query = "SELECT `user_sub_menu`. *, `user_menu`.`menu`
					From `user_sub_menu` JOIN `user_menu`
					ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
					";

		return $this->db->query($query)->result_array();
	}

	//manajemen user_menu
	public function getMenu()
	{
		return $this->db->get('user_menu');
	}

	public function edit_data_menu($where)
	{
		return $this->db->get_where('user_menu', $where);
	}

	public function update($where, $data, $table)
	{
		$this->db->set('id', $where);
		$this->db->where('menu', $data);
		$this->db->update('user_menu', $table);
	}
	public function updateMenu($data = null, $where = null)
	{
		$this->db->update('user_menu', $data, $where);
	}

	public function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('user_menu');
		return true;
	}
}
