<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_komponen extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }
    public function getDatatable()
    {
        $data = $this->db->query('SELECT * FROM tb_komp')->result_array();
        return $data;
    }
    public function getDetailedit($id)
    {
        $data = $this->db->query('SELECT * FROM tb_komp WHERE id_komp = '.$id)->result_array();
        return $data[0];
    }
    public function addKomponen($komp, $detail)
    {
        $data = array(
            'id_komp' => null,
            'nama_komp' => $komp,
            'detail' => $detail
        );
        $this->db->insert('tb_komp', $data);
    }
    public function editKomponen($id, $komp, $detail)
    {
        $this->db->set('nama_komp', $komp);
        $this->db->set('detail', $detail);
        $this->db->where('id_komp', $id);
        $this->db->update('tb_komp');
    }
    public function deleteKomponen($id)
    {
        $this->db->where('id_komp', $id);
        $this->db->delete('tb_komp');
    }
    public function getPeriode()
    {
        $now = $this->db->query('SELECT MONTH(now()) AS bulan, YEAR(now()) AS tahun FROM tb_periode')->result_array();
        if ($now[0]['bulan'] < 7){
            $periode = 'Jan - Jun';
            $tahun = $now[0]['tahun'];
        } else {
            $periode = 'Jul - Des';
            $tahun = $now[0]['tahun'];
        }
        $pr = $this->db->query('SELECT * FROM tb_periode WHERE periode = "'.$periode.'" AND tahun_periode = '.$tahun)->result_array();
        return $pr[0]['id_periode'];
    }
}