<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }
    public function getDatatable($id)
    {
        $data = $this->db->query('SELECT * FROM tb_user WHERE id_user != '.$id)->result_array();
        return $data;
    }
    public function addUser($username, $password, $level, $jabatan)
    {
        $data = array(
            'id_user' => null,
            'username' => $username,
            'password' => $password,
            'jabatan' => $jabatan,
            'level' => $level
        );
        $this->db->insert('tb_user', $data);
    }
    public function editUser($id, $username, $password, $level, $jabatan)
    {
        $this->db->set('username', $username);
        $this->db->set('password', $password);
        $this->db->set('jabatan', $jabatan);
        $this->db->set('level', $level);
        $this->db->where('id_user', $id);
        $this->db->update('tb_user');
    }
    public function getDetailuser($id)
    {
        $data = $this->db->query('SELECT * FROM tb_user WHERE id_user = '.$id)->result_array();
        return $data[0];
    }
    public function deleteUser($id)
    {
        $this->db->where('id_user', $id);
        $this->db->delete('tb_user');
    }
    public function addStatus()
    {
        $query = $this->db->query('SELECT * FROM tb_user ORDER BY id_user DESC')->result_array();
        $qp = $this->db->query('SELECT * FROM tb_periode')->result_array();
        $id = $query[0]['id_user'];
        foreach ($qp as $periode) {
            $data = array(
                'id_status' => null,
                'id_user' => $id,
                'id_periode' => $periode['id_periode'],
                'id_levelPengguna' => 0,
                'status_Learnability' => 0,
                'status_Efficiency' => 0,
                'status_Memorability' => 0,
                'status_Errors' => 0,
                'status_Satisfaction' => 0
            );
            $this->db->insert('tb_status', $data);
        }
    }
}
