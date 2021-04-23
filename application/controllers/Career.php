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
		$this->load->helper(array('form', 'url','text'));

    }

	public function index()
	{
		$data['info'] = $this->Career_model->tampil_loker_all();
		$data['title'] = 'Mandom Career';
		$this->load->view('visitor/header',$data);
		$this->load->view('visitor/index');
		$this->load->view('visitor/footer');	
	}

	public function home()
	{
		$data['info'] = $this->Career_model->tampil_loker_all();
		$data['title'] = 'Mandom Career';
		$this->load->view('visitor/header',$data);
		$this->load->view('visitor/index');
		$this->load->view('visitor/footer');	
	}

	public function detail($id)
	{
		$row = $this->Career_model->get_by_id($id);
        if ($row) {
            $data = array(
				'id_form' => $row->id_form,
				'tpk' => $row->tpk,
				'id_dept' => $row->nama_dept,
				'tanggal_penempatan' => $row->tanggal_penempatan,
				'jks' => $row->jks,
				'id_posisi' => $row->nama_posisi,
				'jenis_kelamin' => $row->jenis_kelamin,
				'batas_usia' => $row->batas_usia,
				'id_tingkat_pendidikan' => $row->tingkat_pendidikan,
				'id_jurusfakult' => $row->fakultas,
				'sp_keahlian' => $row->sp_keahlian,
				'pengalaman_kerja' => $row->pengalaman_kerja,
				'id_sk' => $row->nama_status_karyawan,
				'estimasi_gaji' => $row->estimasi_gaji,
				'lptj' => $row->lptj,
				'dp_sot' => $row->dp_sot,
				'dp_jdesk' => $row->dp_jdesk,
				'catatan' => $row->catatan,
				'karyawan_out' => $row->karyawan_out,
				'last_update' => $row->last_update,
				'tanggal_pengajuan' => $row->tanggal_pengajuan,
				'diajukanoleh' => $row->diajukanoleh,
				'priority_id' => $row->prioritas,
				'status_pengajuan' => $row->status_pengajuan,
				'keterangan' => $row->keterangan,
				'tandatanganhrga' => $row->tandatanganhrga,
				'tandatangandirektur' => $row->tandatangandirektur,
				'id_careerposts' => $row->id_careerposts
		    );
			$this->load->view('visitor/detail_career',$data);
		}else{
			echo "No Data";
		}
	}

	function job_detail($id)
	{
		$row = $this->Career_model->get_by_id($id);
        if ($row) {
            $data = array(
				'id_form' => $row->id_form,
				'tpk' => $row->tpk,
				'id_dept' => $row->nama_dept,
				'tanggal_penempatan' => $row->tanggal_penempatan,
				'jks' => $row->jks,
				'id_posisi' => $row->nama_posisi,
				'jenis_kelamin' => $row->jenis_kelamin,
				'batas_usia' => $row->batas_usia,
				'id_tingkat_pendidikan' => $row->tingkat_pendidikan,
				'id_jurusfakult' => $row->fakultas,
				'sp_keahlian' => $row->sp_keahlian,
				'pengalaman_kerja' => $row->pengalaman_kerja,
				'id_sk' => $row->nama_status_karyawan,
				'estimasi_gaji' => $row->estimasi_gaji,
				'lptj' => $row->lptj,
				'dp_sot' => $row->dp_sot,
				'dp_jdesk' => $row->dp_jdesk,
				'catatan' => $row->catatan,
				'karyawan_out' => $row->karyawan_out,
				'last_update' => $row->last_update,
				'tanggal_pengajuan' => $row->tanggal_pengajuan,
				'diajukanoleh' => $row->diajukanoleh,
				'priority_id' => $row->prioritas,
				'status_pengajuan' => $row->status_pengajuan,
				'keterangan' => $row->keterangan,
				'tandatanganhrga' => $row->tandatanganhrga,
				'tandatangandirektur' => $row->tandatangandirektur,
				'id_careerposts' => $row->id_careerposts
		    );
		    $this->load->view('visitor/header');
			$this->load->view('visitor/detail_career',$data);
			$this->load->view('visitor/footer');
		}else{
			echo "No Data";
		}
	}
}
