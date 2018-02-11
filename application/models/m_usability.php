<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_usability extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}
	public function adminDatatable()
	{
		$data = $this->db->query('SELECT * FROM tb_komp')->result_array();
		return $data;
	}
	public function detailKomponen($id)
	{
		$data = $this->db->query('SELECT * FROM tb_pertanyaan WHERE id_komp = '.$id)->result_array();
		return $data;
	}
    public function getDatatestingBylevel()
    {
        $periode = $this->getPeriode();
        $n = $this->db->query('SELECT * FROM tb_levelpengguna')->result_array();
        foreach ($n as $value){
            $ya = $this->db->query('SELECT * FROM tb_jawaban WHERE id_levelpengguna = '.$value['id_levelpengguna'].' AND id_periode = '.$periode.' AND jawaban = 1')->num_rows();
            $tidak = $this->db->query('SELECT * FROM tb_jawaban WHERE id_levelpengguna = '.$value['id_levelpengguna'].' AND id_periode = '.$periode.' AND jawaban = 0')->num_rows();
            $total = $this->db->query('SELECT * FROM tb_jawaban WHERE id_levelpengguna = '.$value['id_levelpengguna'].' AND id_periode = '.$periode)->num_rows();
            $data[] = array(
                'ya' => $ya / $total * 100,
                'tidak' => $tidak / $total * 100,
                'level' => $value['level_pengguna']
            );
        }
        return $data;
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
    public function dataGrafikeval()
    {
        $data = $this->db->query('SELECT *, COUNT(*) AS jumlah FROM tb_saran GROUP BY saran')->result_array();
        return $data;
    }

    public function getRekomendasi()
    {
        $data = $this->db->query('SELECT *, COUNT(*) AS jumlah FROM tb_saran GROUP BY saran')->result_array();
        return $data;
    }
}
