<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_dashboard extends CI_Model
{
    public function select_by_user()
    {
        $sql = "SELECT * FROM datakos";

        $data = $this->db->query($sql);

        return $data->result_array();
    }
}
