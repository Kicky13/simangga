<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Periode extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('m_periode');
    }

    public function index()
    {
        if ($_SESSION['loggedIn']) {
            if ($_SESSION['level'] = 1) {
                $data = $this->m_periode->getDatatable();
                $this->load->view('superadmin/periode', array('data' => $data));
            } else {
                echo 'Forbidden Access';
            }
        } else {
            redirect('/login');
        }
    }

    public function formAddperiode()
    {
        $this->load->view('superadmin/addPeriode');
    }

    public function addPeriode()
    {
        $periode = $this->m_periode->getNow();
        $cekPeriode = $this->m_periode->cekPeriode($periode['periode'], $periode['tahun_periode']);
        if ($cekPeriode == 0){
            $this->m_periode->addPeriode($periode['periode'], $periode['tahun_periode']);
            $this->m_periode->addStatus();
            redirect('/periode');
        } else {
            $this->index();
            echo '<div class="alert alert-danger alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <strong>Periode Telah Tersedia,</strong> Input Gagal!!
                      </div>';
        }
    }

    public function formEditperiode($id)
    {
        $data = $this->m_periode->getDetailperiode($id);
        $this->load->view('superadmin/editPeriode', array('data' => $data));
    }

    public function editPeriode($id)
    {
        if ('update') {
            $awal = $_POST['awal'];
            $akhir = $_POST['akhir'];
            $this->m_periode->editPeriode($id, $awal, $akhir);
            redirect('/periode');
        }
    }

    public function deletePeriode($id)
    {
        $this->m_periode->deletePeriode($id);
        redirect('/periode');
    }
}
