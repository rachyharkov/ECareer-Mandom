<?php defined('BASEPATH') OR exit('No direct script access allowed');

date_default_timezone_set('Asia/Jakarta');
class Career extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('Dept_model');
        $this->load->model('Posisi_model');
        $this->load->model('Tingkat_pendidikan_model');
        $this->load->model('Fakultas_model');
        $this->load->model('Status_karyawan_model');
        $this->load->model('Keahlian_model');
        $this->load->model('Priority_model');
        $this->load->model('Career_model');
        $this->load->library('form_validation');        
		$this->load->library('datatables');
		$this->load->helper(array('form', 'url'));
    }

	public function index()
	{
		$data['info'] = $this->Career_model->tampil_loker_all();
		$this->load->view('visitor/header');
		$this->load->view('visitor/index',$data);
		$this->load->view('visitor/footer');	
	}

	public function detail($id)
	{
		$data['info'] = $this->Career_model->get_by_id($id);
		$this->load->view('visitor/header');
		$this->load->view('visitor/index',$data);
		$this->load->view('visitor/footer');	
	}
}
