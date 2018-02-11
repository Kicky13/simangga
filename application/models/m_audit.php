<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_audit extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }
    public function getGeneraldata($komp)
    {
        $periode = $this->getPeriode();
        $data = array();
        $query = $this->db->query('SELECT * FROM tb_komp WHERE id_komp = '.$komp)->result_array();
        $level = $this->db->query('SELECT * FROM tb_levelpengguna')->result_array();
        foreach ($level as $value){
            $query2 = $this->db->query('SELECT * FROM tb_rekapkomp WHERE id_komp = '.$komp.' AND id_levelpengguna = '.$value['id_levelpengguna'].' AND id_periode = '.$periode)->result_array();
            $x = count($query2);
            if ($x == 0){
                $data[$value['level_pengguna']]['ya'] = 'Kosong';
                $data[$value['level_pengguna']]['tidak'] = 'Kosong';
            } else {
                $data[$value['level_pengguna']]['ya'] = $query2[0]['komp_y'];
                $data[$value['level_pengguna']]['tidak'] = $query2[0]['komp_n'];
            }
        }
        $data['id_komp'] = $query[0]['id_komp'];
        $data['nama_komp'] = $query[0]['nama_komp'];
        return $data;
    }
    public function getDataawam($komp)
    {
        $periode = $this->getPeriode();
        $data = array();
        $query = $this->db->query('SELECT * FROM tb_pertanyaan WHERE id_komp = '.$komp)->result_array();
        foreach ($query as $a){
            $query2 = $this->db->query('SELECT * FROM tb_rekappertanyaan WHERE id_pert = '.$a['id_pert'].' AND id_levelPengguna = 1 AND id_periode = '.$periode)->result_array();
            $x = count($query2);
            if ($x == 0){
                $data[] = array(
                    'kode_pertanyaan' => $a['kode_pertanyaan'],
                    'id_pert' => $a['id_pert'],
                    'ya' => 'Kosong',
                    'tidak' => 'Kosong'
                );
            } else {
                $data[] = array(
                    'kode_pertanyaan' => $a['kode_pertanyaan'],
                    'id_pert' => $a['id_pert'],
                    'ya' => $query2[0]['nilai_y'],
                    'tidak' => $query2[0]['nilai_n']
                );
            }
        }
        return $data;
    }
    public function getDataaktif($komp)
    {
        $periode = $this->getPeriode();
        $data = array();
        $query = $this->db->query('SELECT * FROM tb_pertanyaan WHERE id_komp = '.$komp)->result_array();
        foreach ($query as $a){
            $query2 = $this->db->query('SELECT * FROM tb_rekappertanyaan WHERE id_pert = '.$a['id_pert'].' AND id_levelPengguna = 2 AND id_periode = '.$periode)->result_array();
            $x = count($query2);
            if ($x == 0){
                $data[] = array(
                    'kode_pertanyaan' => $a['kode_pertanyaan'],
                    'id_pert' => $a['id_pert'],
                    'ya' => 'Kosong',
                    'tidak' => 'Kosong'
                );
            } else {
                $data[] = array(
                    'kode_pertanyaan' => $a['kode_pertanyaan'],
                    'id_pert' => $a['id_pert'],
                    'ya' => $query2[0]['nilai_y'],
                    'tidak' => $query2[0]['nilai_n']
                );
            }
        }
        return $data;
    }
    public function getDataterampil($komp)
    {
        $periode = $this->getPeriode();
        $data = array();
        $query = $this->db->query('SELECT * FROM tb_pertanyaan WHERE id_komp = '.$komp)->result_array();
        foreach ($query as $a){
            $query2 = $this->db->query('SELECT * FROM tb_rekappertanyaan WHERE id_pert = '.$a['id_pert'].' AND id_levelPengguna = 3 AND id_periode = '.$periode)->result_array();
            $x = count($query2);
            if ($x == 0){
                $data[] = array(
                    'kode_pertanyaan' => $a['kode_pertanyaan'],
                    'id_pert' => $a['id_pert'],
                    'ya' => 'Kosong',
                    'tidak' => 'Kosong'
                );
            } else {
                $data[] = array(
                    'kode_pertanyaan' => $a['kode_pertanyaan'],
                    'id_pert' => $a['id_pert'],
                    'ya' => $query2[0]['nilai_y'],
                    'tidak' => $query2[0]['nilai_n']
                );
            }
        }
        return $data;
    }
    public function hitungData($komp, $level)
    {
        $periode = $this->getPeriode();
        $pertanyaan = $this->db->query('SELECT * FROM tb_pertanyaan WHERE id_komp = '.$komp)->result_array();
        foreach ($pertanyaan as $value){
            $x = $this->db->query('SELECT * FROM tb_jawaban WHERE id_pert = '.$value['id_pert'].' AND id_levelpengguna = '.$level.' AND id_periode = '.$periode)->num_rows();
            $y = $this->db->query('SELECT * FROM tb_jawaban WHERE id_pert = '.$value['id_pert'].' AND id_levelpengguna = '.$level.' AND id_periode = '.$periode.' AND jawaban = 1')->num_rows();
            $n = $this->db->query('SELECT * FROM tb_jawaban WHERE id_pert = '.$value['id_pert'].' AND id_levelpengguna = '.$level.' AND id_periode = '.$periode.' AND jawaban = 0')->num_rows();
            $persentasey = ($y / $x) * 100;
            $persentasen = ($n / $x) * 100;
            $this->insertHitung($value['id_pert'], $level, $persentasey, $persentasen);
            $ny[] = $persentasey;
            $nn[] = $persentasen;
        }
            $this->rekapKomp($komp, $level, $ny, $nn);
    }
    public function insertHitung($id, $level, $y, $n)
    {
        $periode = $this->getPeriode();
        $data = array(
            'id_rp' => null,
            'id_pert' => $id,
            'id_levelpengguna' => $level,
            'id_periode' => $periode,
            'nilai_y' => $y,
            'nilai_n' => $n
        );
        $this->db->insert('tb_rekappertanyaan', $data);
    }
    public function rekapKomp($komp, $level, $y = array(), $n = array())
    {
        $periode = $this->getPeriode();
        $x = count($y);
        $dataY = array_sum($y);
        $dataN = array_sum($n);
        $nilaiY = $dataY / $x;
        $nilaiN = $dataN / $x;
        $data = array(
            'id_rk' => null,
            'id_komp' => $komp,
            'id_levelpengguna' => $level,
            'id_periode' => $periode,
            'komp_y' => $nilaiY,
            'komp_n' => $nilaiN
        );
        $this->db->insert('tb_rekapkomp', $data);
    }
    public function getDatatesting()
    {
        $data = $this->db->query('SELECT *, SUM(komp_y)/3 AS nilaiY, SUM(komp_n)/3 AS nilaiN FROM tb_komp k LEFT JOIN tb_rekapkomp rk ON k.id_komp = rk.id_komp GROUP BY k.id_komp')->result_array();
        return $data;
    }
    public function getDatatestingBylevel()
    {
        $periode = $this->getPeriode();
        $n = $this->db->query('SELECT * FROM tb_levelpengguna')->result_array();
        foreach ($n as $value){
            $nilai = $this->db->query('SELECT SUM(komp_y)/5 AS ya, SUM(komp_n)/5 AS tidak FROM tb_rekapkomp WHERE id_levelpengguna = '.$value['id_levelpengguna'].' AND id_periode = '.$periode)->result_array();
            $data[] = array(
                'ya' => $nilai[0]['ya'],
                'tidak' => $nilai[0]['tidak'],
                'level' => $value['level_pengguna']
            );
        }
        return $data;
    }
    public function getDatatestingUsability()
    {
        $periode = $this->getPeriode();
        $query = $this->db->query('SELECT * FROM tb_rekapusability WHERE id_periode = '.$periode)->result_array();
        $n = count($query);
        if ($n == 0){
            $data = array(
                'ya' => 'Kosong',
                'tidak' => 'Kosong'
            );
        } else {
            $data = array(
                'ya' => $query[0]['usability_y'],
                'tidak' => $query[0]['usability_n']
            );
        }
        return $data;
    }
    public function hitungUsability()
    {
        $periode = $this->getPeriode();
        $query = $this->db->query('SELECT *, (SUM(komp_y)/3)/5 AS nilaiY, (SUM(komp_n)/3)/5 AS nilaiN FROM tb_komp k LEFT JOIN tb_rekapkomp rk ON k.id_komp = rk.id_komp WHERE id_periode = '.$periode)->result_array();
        $data = array(
            'id_ru' => null,
            'id_periode' => $periode,
            'usability_y' => $query[0]['nilaiY'],
            'usability_n' => $query[0]['nilaiN']
        );
        $this->db->insert('tb_rekapusability', $data);
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
    public function getDatakomentar()
    {
        $data = $this->db->query('SELECT * FROM tb_saran ORDER BY saran')->result_array();
        return $data;
    }
}