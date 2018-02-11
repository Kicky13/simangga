<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_periode extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function getDatatable()
    {
        $data = $this->db->query('SELECT * FROM tb_periode')->result_array();
        return $data;
    }
    public function getDetailperiode($id)
    {
        $data = $this->db->query('SELECT * FROM tb_periode WHERE id_periode = '.$id)->result_array();
        return $data[0];
    }
    public function addPeriode($periode, $tahun)
    {
        $data = array(
            'id_periode' => null,
            'periode' => $periode,
            'tahun_periode' => $tahun
        );
        $this->db->insert('tb_periode', $data);
    }
    public function editPeriode($id, $awal, $akhir)
    {
        $this->db->set('tgl_awal', $awal);
        $this->db->set('tgl_akhir', $akhir);
        $this->db->where('id_periode', $id);
        $this->db->update('tb_periode');
    }
    public function deletePeriode($id)
    {
        $this->db->where('id_periode', $id);
        $this->db->delete('tb_periode');
    }
    public function getNow()
    {
        $data = array();
        $query = $this->db->query('SELECT *, MONTH(now()) AS bulan, YEAR(now()) AS tahun FROM tb_periode')->result_array();
        if ($query[0]['bulan'] > 7){
            $data['periode'] = 'Jan - Jun';
            $data['tahun_periode'] = $query[0]['tahun'];
        } else {
            $data['periode'] = 'Jul - Des';
            $data['tahun_periode'] = $query[0]['tahun'];
        }
        return $data;
    }
    public function cekPeriode($periode, $tahun)
    {
        $data = $this->db->query('SELECT * FROM tb_periode WHERE periode = "'.$periode.'" AND tahun_periode = '.$tahun)->num_rows();
        return $data;
    }
    public function addStatus()
    {
        $id = $this->db->query('SELECT * FROM tb_periode ORDER BY id_periode DESC LIMIT 1')->result_array();
        $user = $this->db->query('SELECT * FROM tb_user WHERE level = 3')->result_array();
        foreach ($user as $value){
            $data = array(
                'id_status' => null,
                'id_user' => $value['id_user'],
                'id_periode' => $id[0]['id_periode'],
                'id_levelpengguna' => 0,
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
