<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Usability extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_usability');
		$this->load->library('session');
	}
	public function index()
	{
		if ($_SESSION['loggedIn']) {
			if ($_SESSION['level'] == 1) {
			    $grafik = $this->m_usability->getDatatestingBylevel();
			    $grafik2 = $this->m_usability->dataGrafikeval();
				$this->load->view('superadmin/usability', array('grafik' => $grafik, 'grafik2' => $grafik2));
			} else if ($_SESSION['level'] == 2) {
				$data = $this->m_usability->adminDatatable();
				
				$this->load->view('admin/usability', array('data' => $data));
			} else {
				echo "Forbidden Access";
			}
		} else {
			redirect('/login');
		}
	}
	public function detailKomponen($id, $komponen)
	{
		$data = $this->m_usability->detailKomponen($id);
		$this->load->view('admin/detailKomponen', array('data' => $data, 'komponen' => $komponen));
	}
}
