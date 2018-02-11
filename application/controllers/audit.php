<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Audit extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('m_audit');
    }
    public function audit($komp)
    {
        if ($_SESSION['loggedIn']){
            $data = $this->m_audit->getGeneraldata($komp);
            $awam = $this->m_audit->getDataawam($komp);
            $aktif = $this->m_audit->getDataaktif($komp);
            $terampil = $this->m_audit->getDataterampil($komp);
            if ($_SESSION['level'] == 2){
                $this->load->view('admin/audit', array('data' => $data, 'awam' => $awam, 'aktif' => $aktif, 'terampil' => $terampil));
            } else {
                echo 'Forbidden Access';
            }
        } else {
            redirect('/login');
        }
    }
    public function hitungAwam($komp)
    {
        $this->m_audit->hitungData($komp, 1);
        redirect('/audit/audit/'.$komp);
    }
    public function hitungAktif($komp)
    {
        $this->m_audit->hitungData($komp, 2);
        redirect('/audit/audit/'.$komp);
    }
    public function hitungTerampil($komp)
    {
        $this->m_audit->hitungData($komp, 3);
        redirect('/audit/audit/'.$komp);
    }
    public function testing()
    {
        $usability = $this->m_audit->getDatatestingUsability();
        $bylevel = $this->m_audit->getDatatestingBylevel();
        $data = $this->m_audit->getDatatesting();
        $this->load->view('admin/usabilityTesting', array('data' => $data, 'bylevel' => $bylevel, 'usability' => $usability));
    }
    public function hitungUsability()
    {
        $this->m_audit->hitungUsability();
        $this->testing();
    }
    public function evaluasi()
    {
        if ($_SESSION['loggedIn']){
            if ($_SESSION['level'] == 2){
                $data = $this->m_audit->dataGrafikeval();
                $komentar = $this->m_audit->getDatakomentar();
                $this->load->view('admin/evaluasi', array('data' => $data, 'komentar' => $komentar));
            } else {
                echo 'Forbidden Access';
            }
        } else {
            redirect('/login');
        }
    }
}