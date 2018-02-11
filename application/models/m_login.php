<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function getDatauser($username, $password){
        $data = $this->db->query('SELECT * FROM tb_user WHERE username = "'.$username.'" AND password = "'.$password.'"')->result_array();
        return $data;
    }
}
