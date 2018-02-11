<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Komponen extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('m_komponen');
    }
    public function index()
    {
        if ($_SESSION['loggedIn']){
            if ($_SESSION['level'] = 1){
                $data = $this->m_komponen->getDatatable();
                $this->load->view('superadmin/komponen', array('data' => $data));
            } else {
                echo 'Forbidden Access';
            }
        } else {
            redirect('/login');
        }
    }
    public function formAddkomponen()
    {
        $this->load->view('superadmin/addKomponen');
    }
    public function formEditkomponen($id)
    {
        $data = $this->m_komponen->getDetailedit($id);
        $this->load->view('superadmin/editKomponen', array('data' => $data));
    }
    public function addKomponen()
    {
        if ('submit'){
            $komp = $_POST['komp'];
            $detail = $_POST['detail'];
            $this->m_komponen->addKomponen($komp, $detail);
            $this->index();
        }
    }
    public function editKomponen($id)
    {
        if ('update'){
            $komp = $_POST['komp'];
            $detail = $_POST['detail'];
            $this->m_komponen->editKomponen($id, $komp, $detail);
            $this->index();
        }
    }
    public function deleteKomponen($id)
    {
        $this->m_komponen->deleteKomponen($id);
        $this->index();
    }
}