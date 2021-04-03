<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Model_user extends CI_Model
{
    public function getUserjoin()
    {
        $query = "SELECT `user`. *, `jurusan`.`nama_jurusan`
                    From `user` JOIN `jurusan`
                    ON `user`.`nama_jurusan` = `jurusan`.`id`
                    ";

        return $this->db->query($query)->result_array();
    }

    public function getUser()
    {
        return $this->db->get('user_menu');
    }
}
