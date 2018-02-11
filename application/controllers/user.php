<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('m_user');
    }

    public function index()
    {
        if ($_SESSION['loggedIn']){
            if ($_SESSION['level'] = 1){
                $data = $this->m_user->getDatatable($_SESSION['id']);
                $this->load->view('superadmin/user', array('data' => $data));
            } else {
                echo 'Forbidden Acces';
            }
        } else {
            redirect('/login');
        }
    }
    public function formAdduser()
    {
        $this->load->view('superadmin/addUser');
    }
    public function addUser()
    {
        if ('submit'){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $level = $_POST['level'];
            $jabatan = $_POST['jabatan'];
            $this->m_user->addUser($username, $password, $level, $jabatan);
            if ($level == 3){
                $this->m_user->addStatus();
            }
            redirect('/user');
        }
    }
    public function formEdituser($id)
    {
        $data = $this->m_user->getDetailuser($id);
        $this->load->view('superadmin/editUser', array('data' => $data));
    }
    public function editUser($id)
    {
        if ('submit'){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $level = $_POST['level'];
            $jabatan = $_POST['jabatan'];
            $this->m_user->editUser($id, $username, $password, $level, $jabatan);
            redirect('/user');
        }
    }
    public function deleteUser($id)
    {
        $this->m_user->deleteUser($id);
        redirect('/user');
    }
}
