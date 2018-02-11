<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_login');
        $this->load->library('session');
    }

    public function index()
    {
        if (isset($_SESSION['loggedIn'])){
            if ($_SESSION['loggedIn']) {
                redirect('/dashboard');
            } else {
                $this->load->view('login');
            }
        } else {
            $this->load->view('login');
        }
    }
    public function login()
    {
        if ('login'){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $data = $this->m_login->getDatauser($username, $password);
            if (count($data) > 0){
                $_SESSION['id'] = $data[0]['id_user'];
                $_SESSION['level'] = $data[0]['level'];
                $_SESSION['loggedIn'] = true;
                redirect('/dashboard');
            } else {
                $this->index();
                echo '<div class="alert alert-info alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <strong>Username</strong> atau <strong>Password</strong> salah, Silahkan anda login kembali!!
                      </div>';
            }
        }
    }
    public function logout()
    {
        $_SESSION['id'] = null;
        $_SESSION['level'] = null;
        $_SESSION['loggedIn'] = false;
        redirect('/login');
    }
}
