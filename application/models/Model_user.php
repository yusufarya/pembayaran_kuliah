<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Model_user extends CI_Model
{
    public function getUser()
    {
        $query = "SELECT `user`. *, `jurusan`.`nama_jurusan`
                    From `user` JOIN `jurusan`
                    ON `user`.`jurusan_id` = `jurusan`.`id`
                    ";

        return $this->db->query($query)->result_array();
    }
}
