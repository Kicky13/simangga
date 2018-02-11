<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Kuesioner extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('m_kuesioner');
    }
    public function index()
    {
        if ($_SESSION['loggedIn']){
            if ($_SESSION['level'] == 1){
                $data = $this->m_kuesioner->getDatatable();
                $this->load->view('superadmin/kuesioner', array('data' => $data));
            } else if ($_SESSION['level'] == 3){
                $data = $this->m_kuesioner->getKomponenTable();
                $status = $this->m_kuesioner->getStatus($_SESSION['id']);
                $kuesioner = $this->m_kuesioner->cekBulankuesioner();
                $this->load->view('responden/kuesioner', array('status' => $status, 'data' => $data, 'kuesioner' => $kuesioner));
            } else {
                echo 'Forbidden Access';
            }
        } else {
            redirect('/login');
        }
    }
    public function formAddkuesioner()
    {
        $komp = $this->m_kuesioner->getKompdropdown();
        $this->load->view('superadmin/addKuesioner', array('komp' => $komp));
    }
    public function formEditkuesioner($id)
    {
        $data = $this->m_kuesioner->getDetailkuesioner($id);
        $komp = $this->m_kuesioner->getKompdropdown();
        $this->load->view('superadmin/editKuesioner', array('komp' => $komp, 'data' => $data));
    }
    public function addKuesioner()
    {
        if ('submit'){
            $pertanyaan = $_POST['pertanyaan'];
            $komp = $_POST['komp'];
            $this->m_kuesioner->addKuesioner($pertanyaan, $komp);
            redirect('/kuesioner');
        }
    }
    public function editKuesioner($id)
    {
        if ('update'){
            $pertanyaan = $_POST['pertanyaan'];
            $komp = $_POST['komp'];
            $this->m_kuesioner->editKuesioner($id, $pertanyaan, $komp);
            redirect('/kuesioner');
        }
    }
    public function deleteKuesioner($id)
    {
        $this->m_kuesioner->deleteKuesioner($id);
        redirect('/kuesioner');
    }
    public function levelPengguna($id)
    {
        $level = $_POST['levelPengguna'];
        $this->m_kuesioner->insertLevel($id, $level);
        redirect('/kuesioner');
    }
    public function jawabKuesioner($komp)
    {
        $data = $this->m_kuesioner->getPertanyaan($komp);
        $this->load->view('responden/jawabKuesioner', array('data' => $data));
    }
    public function submitJawaban($komp)
    {
        if ('submit') {
            $pertanyaan = $this->m_kuesioner->getPertanyaan($komp);
            $user = $_SESSION['id'];
            $levelPengguna = $this->m_kuesioner->getLevel($user);
            foreach ($pertanyaan as $row => $value) {
                $jawaban = $this->input->post('id-' . $value['id_pert']);
                $idPert = $value['id_pert'];
                $this->m_kuesioner->submitJawaban($idPert, $user, $levelPengguna, $jawaban);
            }
            $this->m_kuesioner->ubahStatus($komp, $user);
            redirect('/kuesioner');
        }
    }
    public function submitSaran()
    {
        if ('submit'){
            $user = $_SESSION['id'];
            $saran = $_POST['saran'];
            $komentar = $_POST['komentar'];
            $this->m_kuesioner->insertSaran($saran, $komentar, $user);
            redirect('/kuesioner');
        }
    }
    public function hasilResponden()
    {
        if ($_SESSION['loggedIn']){
            if ($_SESSION['level'] == 3){
                $iduser = $_SESSION['id'];
                $komentar = $this->m_kuesioner->getDatakomentar($iduser);
                $responden = $this->m_kuesioner->getDataresponden($iduser);
                $grafik = $this->m_kuesioner->getDatagrafik($iduser);
                $this->load->view('responden/grafikHasil', array('responden' => $responden, 'grafik' => $grafik, 'komentar' => $komentar));
            } else {
                echo 'Forbidden Access';
            }
        } else {
            redirect('/login');
        }
    }
}
