<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kuesioner extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }
    public function getDatatable()
    {
        $data = $this->db->query('SELECT * FROM tb_pertanyaan p JOIN tb_komp k ON p.id_komp = k.id_komp')->result_array();
        return $data;
    }
    public function getDetailkuesioner($id)
    {
        $data = $this->db->query('SELECT * FROM tb_pertanyaan WHERE id_pert = '.$id)->result_array();
        return $data[0];
    }
    public function getKompdropdown()
    {
        $data = $this->db->query('SELECT * FROM tb_komp')->result_array();
        return $data;
    }
    public function addKuesioner($pertanyaan, $komp)
    {
        $data = array(
            'id_pert' => null,
            'id_komp' => $komp,
            'pertanyaan' => $pertanyaan
        );
        $this->db->insert('tb_pertanyaan', $data);
    }
    public function editKuesioner($id, $pertanyaan, $komp)
    {
        $this->db->set('id_komp', $komp);
        $this->db->set('pertanyaan', $pertanyaan);
        $this->db->where('id_pert', $id);
        $this->db->update('tb_pertanyaan');
    }
    public function deleteKuesioner($id)
    {
        $this->db->where('id_pert', $id);
        $this->db->delete('tb_pertanyaan');
    }
    public function getKompresponden($id)
    {
        $data = $this->db->query('SELECT * FROM tb_hakjawab JOIN WHERE id_user = '.$id)->result_array();
        return $data;
    }
    public function getStatus($id)
    {
        $periode = $this->getPeriode();
        $data = $this->db->query('SELECT * FROM tb_status WHERE id_user = '.$id.' AND id_periode = '.$periode)->result_array();
        return $data[0];
    }
    public function insertLevel($id, $level)
    {
        $this->db->set('id_levelPengguna', $level);
        $this->db->where('id_status', $id);
        $this->db->update('tb_status');
    }
    public function getKomponenTable()
    {
        $data = $this->db->query('SELECT * FROM tb_komp')->result_array();
        return $data;
    }
    public function getPertanyaan($komp)
    {
        $data = $this->db->query('SELECT * FROM tb_pertanyaan p JOIN tb_komp k ON p.id_komp = k.id_komp WHERE k.id_komp = '.$komp)->result_array();
        return $data;
    }
    public function getLevel($id)
    {
        $periode = $this->getPeriode();
        $data = $this->db->query('SELECT * FROM tb_status WHERE id_user = '.$id.' AND id_periode = '.$periode)->result_array();
        return $data[0]['id_levelPengguna'];
    }
    public function submitJawaban($pertanyaan, $user, $level, $jawaban)
    {
        $periode = $this->getPeriode();
        $data = array(
            'id_jawab' => null,
            'id_pert' => $pertanyaan,
            'id_user' => $user,
            'id_periode' => $periode,
            'id_levelPengguna' => $level,
            'jawaban' => $jawaban
        );
        $this->db->insert('tb_jawaban', $data);
    }
    public function ubahStatus($komp, $user)
    {
        $periode = $this->getPeriode();
        $query = $this->db->query('SELECT * FROM tb_komp WHERE id_komp = '.$komp)->result_array();
        $namaKomp = 'status_'.$query[0]['nama_komp'];
        $this->db->set($namaKomp, 1);
        $this->db->where('id_user', $user);
        $this->db->where('id_periode', $periode);
        $this->db->update('tb_status');
    }
    public function cekBulankuesioner()
    {
        $now = $this->db->query('SELECT MONTH(now()) AS bulan, YEAR(now()) AS tahun FROM tb_periode')->result_array();
        $bulan = $now[0]['bulan'];
        if ($bulan == 1 || $bulan == 2 || $bulan == 3 || $bulan == 7 || $bulan == 8 || $bulan == 10){
            $status = 1;
        } else {
            $status = 0;
        }
        return $status;
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
    public function insertSaran($saran, $komentar, $id)
    {
        $data = array(
            'id_saran' => null,
            'id_user' => $id,
            'saran' => $saran,
            'komentar' => $komentar
        );
        $this->db->insert('tb_saran', $data);
    }
    public function getDataresponden($id)
    {
        $periode = $this->getPeriode();
        $data = $this->db->query('SELECT * FROM tb_user u JOIN tb_status s ON u.id_user = s.id_user WHERE id_periode = '.$periode.' AND u.id_user = '.$id)->result_array();
        return $data[0];
    }
    public function getDatagrafik($id)
    {
        $periode = $this->getPeriode();
        $komp = $this->db->query('SELECT * FROM tb_komp')->result_array();
        foreach ($komp as $value){
            $x = $this->db->query('SELECT * FROM tb_jawaban j JOIN tb_pertanyaan p ON j.id_pert = p.id_pert WHERE id_user = '.$id.' AND id_periode = '.$periode.' AND id_komp = '.$value['id_komp'])->num_rows();
            $y = $this->db->query('SELECT * FROM tb_jawaban j JOIN tb_pertanyaan p ON j.id_pert = p.id_pert WHERE id_user = '.$id.' AND id_periode = '.$periode.' AND id_komp = '.$value['id_komp'].' AND jawaban = 1')->num_rows();
            $n = $this->db->query('SELECT * FROM tb_jawaban j JOIN tb_pertanyaan p ON j.id_pert = p.id_pert WHERE id_user = '.$id.' AND id_periode = '.$periode.' AND id_komp = '.$value['id_komp'].' AND jawaban = 0')->num_rows();
            if ($x != 0) {
                
            $data[] = array(
                'nilai_y' => $y / $x * 100,
                'nilai_n' => $n / $x * 100,
                'komp' => $value['nama_komp']
            );
            }
        }
        return $data;
    }
    public function getDatakomentar($id)
    {
        $data = $this->db->query('SELECT * FROM tb_saran WHERE id_user = '.$id.' ORDER BY saran')->result_array();
        return $data;
    }
}
