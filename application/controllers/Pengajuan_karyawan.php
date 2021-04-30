<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class Pengajuan_karyawan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Dept_model');
        $this->load->model('Posisi_model');
        $this->load->model('Tingkat_pendidikan_model');
        $this->load->model('Fakultas_model');
        $this->load->model('Status_karyawan_model');
        $this->load->model('Career_posts_model');
        $this->load->model('Keahlian_model');
        $this->load->model('Priority_model');
        $this->load->model('Pengajuan_karyawan_model');
        $this->load->library('form_validation');        
		$this->load->library('datatables');
		$this->load->helper(array('form', 'url'));
		$this->load->library('session');
    }

    public function index()
    {
		$this->template->load('template','pengajuan_karyawan/pengajuan_karyawan_list');
    }
    
    public function json() {
        header('Content-Type: application/json');
        if ($this->fungsi->user_login()->id_dept == '1' || $this->fungsi->user_login()->id_dept == '2') {
        	echo $this->Pengajuan_karyawan_model->jsonall();
        } else {
        	echo $this->Pengajuan_karyawan_model->jsondepartement();
        }
    }

    public function read($id) 
    {
        $row = $this->Pengajuan_karyawan_model->get_by_id($id);
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
        	if ($this->fungsi->user_login()->id_dept == $row->id_dept) {
        		$this->template->load('template','pengajuan_karyawan/pengajuan_karyawan_read',$data);
        	} else if($this->fungsi->user_login()->id_dept == '1') {
			    $this->template->load('template','pengajuan_karyawan/pengajuan_karyawan_read',$data);
			    $this->load->view('pengajuan_karyawan/direktur_signature');
        	} else if($this->fungsi->user_login()->id_dept == '2'){
        		$this->template->load('template','pengajuan_karyawan/pengajuan_karyawan_read',$data);
			    $this->load->view('pengajuan_karyawan/hrga_signature');
			} else {
        		$this->session->set_flashdata('message', 'You dont have access to that data!');
            	redirect(site_url('pengajuan_karyawan'));	
        	}
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pengajuan_karyawan'));
        }
    }

    public function readforword($id) 
    {
        $row = $this->Pengajuan_karyawan_model->get_by_id($id);
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
				'tandatangandirektur' => $row->tandatangandirektur
		    );
    		$this->load->view('pengajuan_karyawan/pengajuan_karyawan_doc',$data);	
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pengajuan_karyawan'));
        }
    }

    public function create() 
    {
    	$deptlist = $this->Dept_model->get_all();
        $poslist = $this->Posisi_model->get_all();
        $tingkatpendidikanlist = $this->Tingkat_pendidikan_model->get_all();
        $jflist = $this->Fakultas_model->get_all();
        $sklist = $this->Status_karyawan_model->get_all();
        $skeahlist = $this->Keahlian_model->get_all();
        $plist = $this->Priority_model->get_all();

        $data = array(
            'button' => 'Create',
            'action' => site_url('pengajuan_karyawan/create_action'),
		    'id_form' => $this->Pengajuan_karyawan_model->GenerateId(),
		    'tpk' => set_value('tpk'),
		    'id_dept' => set_value('id_dept'),
		    'tanggal_penempatan' => set_value('tanggal_penempatan'),
		    'jks' => set_value('jks'),
		    'id_posisi' => set_value('id_posisi'),
		    'jenis_kelamin' => set_value('jenis_kelamin'),
		    'batas_usia' => set_value('batas_usia'),
		    'id_tingkat_pendidikan' => set_value('id_tingkat_pendidikan'),
		    'id_jurusfakult' => set_value('id_jurusfakult'),
		    'sp_keahlian' => set_value('sp_keahlian'),
		    'pengalaman_kerja' => set_value('pengalaman_kerja'),
		    'id_sk' => set_value('id_sk'),
		    'estimasi_gaji' => set_value('estimasi_gaji'),
		    'lptj' => set_value('lptj'),
		    'dp_sot' => set_value('dp_sot'),
		    'dp_jdesk' => set_value('dp_jdesk'),
		    'catatan' => set_value('catatan'),
		    'karyawan_out' => set_value('karyawan_out'),
		    'last_update' => set_value('last_update'),
		    'tanggal_pengajuan' => set_value('tanggal_pengajuan'),
		    'diajukanoleh' => set_value('diajukanoleh'),
		    'priority_id' => set_value('priority_id'),
		    'deptlist' =>$deptlist,
	        'pos' =>$poslist,
	        'tingkat_pendidikan' =>$tingkatpendidikanlist,
	        'fakultas' =>$jflist,
	        'keahlian' =>$skeahlist,
	        'status_pekerja' =>$sklist,
	        'prioritas' =>$plist,
	        'id_careerposts' => $this->Pengajuan_karyawan_model->GenerateIdcareerpost(),
		);
        $this->template->load('template','pengajuan_karyawan/pengajuan_karyawan_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
        	$this->create();
        } else {

        	$config1['upload_path']          = './lampiran/';
			$config1['allowed_types']        = 'docx';
			$config1['max_size']             = 2048;
			$config1['file_name']			= date('dmYhm').'SOT.docx';

			$filename1 = 'NULL';	
			$filename2 = 'NULL';

			$file1 = 'NULL';
			$file2 = 'NULL';

			if(!empty($_FILES['dp_sot']['name'])) {
				$this->load->library('upload',$config1,'filesot'); //buat custom object filesot
				$this->filesot->initialize($config1);
				$this->filesot->do_upload('dp_sot');			
         		$file1 = 'lampiran/';
				$filename1 = date('dmYhm').'SOT.docx';
			}

			$config2['upload_path']          = './lampiran/';
			$config2['allowed_types']        = 'docx';
			$config2['max_size']             = 2048;
			$config2['file_name']			= date('dmYhm').'JDESK.docx';

			if(!empty($_FILES['dp_jdesk']['name'])) {
	         	$this->load->library('upload', $config2,'filejsdesk'); //buat custom object filejsdesk
				$this->filejsdesk->initialize($config2);
				$this->filejsdesk->do_upload('dp_jdesk');				
         		$file2 = 'lampiran/';
				$filename2 = date('dmYhm').'JDESK.docx';
			}

     		$data = array(
     			'id_form' => $this->input->post('id_form',TRUE),
     			'tpk' => $this->input->post('tpk',TRUE),
				'id_dept' => $this->input->post('id_dept',TRUE),
				'tanggal_penempatan' => $this->input->post('tanggal_penempatan',TRUE),
				'jks' => $this->input->post('jks',TRUE),
				'id_posisi' => $this->input->post('id_posisi',TRUE),
				'jenis_kelamin' => $this->input->post('jenis_kelamin',TRUE),
				'batas_usia' => $this->input->post('batas_usia',TRUE),
				'id_tingkat_pendidikan' => $this->input->post('id_tingkat_pendidikan',TRUE),
				'id_jurusfakult' => $this->input->post('id_jurusfakult',TRUE),
				'sp_keahlian' => implode(",", $this->input->post('sp_keahlian',TRUE)),
				'pengalaman_kerja' => $this->input->post('pengalaman_kerja',TRUE),
				'id_sk' => $this->input->post('id_sk',TRUE),
				'estimasi_gaji' => $this->input->post('estimasi_gaji',TRUE),
				'lptj' => $this->input->post('lptj',TRUE),
				'dp_sot' => $file1.$filename1,
				'dp_jdesk' => $file2.$filename2,
				'tanggal_pengajuan' => date("Y/m/d H:i:s"),
				'catatan' => $this->input->post('catatan',TRUE),
				'karyawan_out' => $this->input->post('karyawan_out'),
				'diajukanoleh' => $this->fungsi->user_login()->name,
				'priority_id' => $this->input->post('priority_id',TRUE),
				'status_pengajuan' => "Pending",
				'tandatanganhrga' => "NA",
				'tandatangandirektur' => "NA",
				'keterangan' => "NA",
				'id_careerposts' => $this->input->post('id_careerposts',TRUE),
			);

			$postcareerdata = array(
				'id_careerposts' => $this->input->post('id_careerposts',TRUE),
				'posts' => 'Tidak ada',
				'status' => 'Pending',
				'tgl_posts' => date("Y/m/d"),
				'tipe_pekerjaan' => 'Full Time',
				'lokasi' => 'Bekasi'
			);
            $this->Pengajuan_karyawan_model->insert('pengajuan_karyawan',$data);
            $this->Pengajuan_karyawan_model->insert('career_posts',$postcareerdata);
            $this->session->set_flashdata('oke', 'di Simpan');
            redirect(site_url('pengajuan_karyawan'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Pengajuan_karyawan_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('pengajuan_karyawan/update_action'),
				'id_form' => set_value('id_form', $row->id_form),
				'tpk' => set_value('tpk', $row->tpk),
				'id_dept' => set_value('id_dept', $row->id_dept),
				'tanggal_penempatan' => set_value('tanggal_penempatan', $row->tanggal_penempatan),
				'jks' => set_value('jks', $row->jks),
				'id_posisi' => set_value('id_posisi', $row->id_posisi),
				'jenis_kelamin' => set_value('jenis_kelamin', $row->jenis_kelamin),
				'batas_usia' => set_value('batas_usia', $row->batas_usia),
				'id_tingkat_pendidikan' => set_value('id_tingkat_pendidikan', $row->id_tingkat_pendidikan),
				'id_jurusfakult' => set_value('id_jurusfakult', $row->id_jurusfakult),
				'sp_keahlian' => set_value('sp_keahlian', $row->sp_keahlian),
				'pengalaman_kerja' => set_value('pengalaman_kerja', $row->pengalaman_kerja),
				'id_sk' => set_value('id_sk', $row->id_sk),
				'estimasi_gaji' => set_value('estimasi_gaji', $row->estimasi_gaji),
				'lptj' => set_value('lptj', $row->lptj),
				'dp_sot' => set_value('dp_sot', $row->dp_sot),
				'dp_jdesk' => set_value('dp_jdesk', $row->dp_jdesk),
				'catatan' => set_value('catatan', $row->catatan),
				'karyawan_out' => set_value('karyawan_out', $row->karyawan_out),
				'diajukanoleh' => set_value('diajukanoleh', $row->diajukanoleh),
				'priority_id' => set_value('priority_id', $row->priority_id),
	    	);
            $this->template->load('template','pengajuan_karyawan/pengajuan_karyawan_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pengajuan_karyawan'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_form', TRUE));
        } else {
            $data = array(
				'tpk' => $this->input->post('tpk',TRUE),
				'id_dept' => $this->input->post('id_dept',TRUE),
				'tanggal_penempatan' => $this->input->post('tanggal_penempatan',TRUE),
				'jks' => $this->input->post('jks',TRUE),
				'id_posisi' => $this->input->post('id_posisi',TRUE),
				'jenis_kelamin' => $this->input->post('jenis_kelamin',TRUE),
				'batas_usia' => $this->input->post('batas_usia',TRUE),
				'id_tingkat_pendidikan' => $this->input->post('id_tingkat_pendidikan',TRUE),
				'id_jurusfakult' => $this->input->post('id_jurusfakult',TRUE),
				'sp_keahlian' => $this->input->post('sp_keahlian',TRUE),
				'pengalaman_kerja' => $this->input->post('pengalaman_kerja',TRUE),
				'id_sk' => $this->input->post('id_sk',TRUE),
				'estimasi_gaji' => $this->input->post('estimasi_gaji',TRUE),
				'lptj' => $this->input->post('lptj',TRUE),
				'dp_sot' => $this->input->post('dp_sot',TRUE),
				'dp_jdesk' => $this->input->post('dp_jdesk',TRUE),
				'catatan' => $this->input->post('catatan',TRUE),
				'karyawan_out' => $this->input->post('karyawan_out',TRUE),
				'last_update' => $this->input->post('last_update',TRUE),
				'diajukanoleh' => $this->input->post('diajukanoleh',TRUE),
				'priority_id' => $this->input->post('priority_id',TRUE),
		    );

            $this->Pengajuan_karyawan_model->update($this->input->post('id_form', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('pengajuan_karyawan'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Pengajuan_karyawan_model->get_by_id($id);

        if ($row) {
        	unlink($row->dp_sot);
        	unlink($row->dp_jdesk);
        	unlink($row->tandatangandirektur);
        	unlink($row->tandatanganhrga);
            $this->Pengajuan_karyawan_model->delete($id);
            $this->session->set_flashdata('oke', 'di Hapus');
            redirect(site_url('pengajuan_karyawan'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pengajuan_karyawan'));
        }
    }

    public function _rules() 
    {
		$this->form_validation->set_rules('tpk', 'tpk', 'trim|required');
		$this->form_validation->set_rules('id_dept', 'id dept', 'trim|required');
		$this->form_validation->set_rules('tanggal_penempatan', 'tanggal penempatan', 'trim|required');
		$this->form_validation->set_rules('jks', 'jks', 'trim|required');
		$this->form_validation->set_rules('id_posisi', 'id posisi', 'trim|required');
		$this->form_validation->set_rules('jenis_kelamin', 'jenis kelamin', 'trim|required');
		$this->form_validation->set_rules('batas_usia', 'batas usia', 'trim|required');
		$this->form_validation->set_rules('id_tingkat_pendidikan', 'id tingkat pendidikan', 'trim|required');
		$this->form_validation->set_rules('id_jurusfakult', 'id jurusfakult', 'trim|required');
		//for accepting multiple value from multiselect2
		if (empty($_POST['sp_keahlian'])) {
	      $this->form_validation->set_rules('sp_keahlian', 'sp keahlian', 'required',array('required' =>'Select at least one'));
	    }
		$this->form_validation->set_rules('pengalaman_kerja', 'pengalaman kerja', 'trim|required');
		$this->form_validation->set_rules('id_sk', 'id sk', 'trim|required');
		$this->form_validation->set_rules('estimasi_gaji', 'estimasi gaji', 'trim|required');
		$this->form_validation->set_rules('lptj', 'lptj', 'trim|required');
		//$this->form_validation->set_rules('karyawan_out', 'karyawan out', 'trim|required');	
		$this->form_validation->set_rules('priority_id', 'priority id', 'trim|required');

		$this->form_validation->set_rules('id_form', 'id_form', 'trim');
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "pengajuan_karyawan.xls";
        $judul = "pengajuan_karyawan";
        $tablehead = 0;
        $tablebody = 1;
        $nourut = 1;
        //penulisan header
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Disposition: attachment;filename=" . $namaFile . "");
        header("Content-Transfer-Encoding: binary ");

        xlsBOF();

        $kolomhead = 0;
        xlsWriteLabel($tablehead, $kolomhead++, "No");
	xlsWriteLabel($tablehead, $kolomhead++, "Tpk");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Dept");
	xlsWriteLabel($tablehead, $kolomhead++, "Tanggal Penempatan");
	xlsWriteLabel($tablehead, $kolomhead++, "Jks");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Posisi");
	xlsWriteLabel($tablehead, $kolomhead++, "Jenis Kelamin");
	xlsWriteLabel($tablehead, $kolomhead++, "Batas Usia");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Tingkat Pendidikan");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Jurusfakult");
	xlsWriteLabel($tablehead, $kolomhead++, "Sp Keahlian");
	xlsWriteLabel($tablehead, $kolomhead++, "Pengalaman Kerja");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Sk");
	xlsWriteLabel($tablehead, $kolomhead++, "Estimasi Gaji");
	xlsWriteLabel($tablehead, $kolomhead++, "Lptj");
	xlsWriteLabel($tablehead, $kolomhead++, "Dp Sot");
	xlsWriteLabel($tablehead, $kolomhead++, "Dp Jdesk");
	xlsWriteLabel($tablehead, $kolomhead++, "Catatan");
	xlsWriteLabel($tablehead, $kolomhead++, "Karyawan Out");
	xlsWriteLabel($tablehead, $kolomhead++, "Tgl Pengajuan");
	xlsWriteLabel($tablehead, $kolomhead++, "Diajukanoleh");
	xlsWriteLabel($tablehead, $kolomhead++, "Priority Id");

	foreach ($this->Pengajuan_karyawan_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tpk);
	    xlsWriteLabel($tablebody, $kolombody++, $data->id_dept);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tanggal_penempatan);
	    xlsWriteNumber($tablebody, $kolombody++, $data->jks);
	    xlsWriteLabel($tablebody, $kolombody++, $data->id_posisi);
	    xlsWriteLabel($tablebody, $kolombody++, $data->jenis_kelamin);
	    xlsWriteNumber($tablebody, $kolombody++, $data->batas_usia);
	    xlsWriteNumber($tablebody, $kolombody++, $data->id_tingkat_pendidikan);
	    xlsWriteNumber($tablebody, $kolombody++, $data->id_jurusfakult);
	    xlsWriteNumber($tablebody, $kolombody++, $data->sp_keahlian);
	    xlsWriteLabel($tablebody, $kolombody++, $data->pengalaman_kerja);
	    xlsWriteNumber($tablebody, $kolombody++, $data->id_sk);
	    xlsWriteLabel($tablebody, $kolombody++, $data->estimasi_gaji);
	    xlsWriteLabel($tablebody, $kolombody++, $data->lptj);
	    xlsWriteLabel($tablebody, $kolombody++, $data->dp_sot);
	    xlsWriteLabel($tablebody, $kolombody++, $data->dp_jdesk);
	    xlsWriteLabel($tablebody, $kolombody++, $data->catatan);
	    xlsWriteLabel($tablebody, $kolombody++, $data->karyawan_out);
	    xlsWriteLabel($tablebody, $kolombody++, $data->last_update);
	    xlsWriteLabel($tablebody, $kolombody++, $data->diajukanoleh);
	    xlsWriteNumber($tablebody, $kolombody++, $data->priority_id);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=pengajuan_karyawan.doc");

        $data = array(
            'pengajuan_karyawan_data' => $this->Pengajuan_karyawan_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('pengajuan_karyawan/pengajuan_karyawan_doc',$data);
    }

    public function export_detailpengajuan_toword()
    {

        //header("Content-type: application/vnd.ms-word");
        //header("Expires: 0"); 
		//header("Cache-Control: must-revalidate, post-check=0, pre-check=0"); 
        //header("Content-Disposition: attachment;Filename=pengajuan_karyawan.doc");
        $row = $this->Pengajuan_karyawan_model->get_by_id($this->input->post('id_formnyasatu', TRUE));
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
				'tandatangandirektur' => $row->tandatangandirektur
		    );
    		$this->load->view('pengajuan_karyawan/pengajuan_karyawan_doc',$data);	
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pengajuan_karyawan'));
        }
    }

    public function approve()
    {
		$output_file = "lampiran/signature" . date("Y-m-d-H-i-s-").time(). ".png";
		$signaturedirektur = array(
			'tandatangandirektur' 		=> $output_file,
			'status_pengajuan'			=> 'Diterima'
	    );

	    $updatePostsStatus = array(
			'status' 		=> "Posted",
	    );

	    $signaturehrga = array(
			'tandatanganhrga' => $output_file
	    );
    	if ($this->fungsi->user_login()->id_dept == '1') {
            $this->Pengajuan_karyawan_model->update($this->input->post('idform', TRUE), $signaturedirektur);
            $this->Career_posts_model->updatestatuspost($this->input->post('idcareerposts', TRUE), $updatePostsStatus);
            $this->session->set_flashdata('oke', 'Persetujuan oleh Direktur telah dilakukan');
			$this->base64_to_jpeg($_POST["image"], $output_file);
			$this->add_mark($output_file, $output_file);
            redirect(site_url('pengajuan_karyawan'));
    	}

    	if ($this->fungsi->user_login()->id_dept == '2') {
            $this->Pengajuan_karyawan_model->update($this->input->post('idform', TRUE), $signaturehrga);
            $this->session->set_flashdata('oke', 'Persetujuan oleh HR/GA telah dilakukan');
			$this->base64_to_jpeg($_POST["image"], $output_file);
			$this->add_mark($output_file, $output_file);
            redirect(site_url('pengajuan_karyawan'));
    	}
    }

    public function declined()
    {
    	if ($this->fungsi->user_login()->id_dept == '1') {
	 		$data = array(
	 			'status_pengajuan' => 'Ditolak',
	 			'keterangan' => $this->input->post('keterangan', TRUE)." (Direktur)",
	 			'tandatangandirektur' => 'Ditolak'
	 		);
    	} else {
    		$data = array(
	 			'status_pengajuan' => 'Ditolak',
	 			'keterangan' => $this->input->post('keterangan', TRUE)." (HR/GA)",
	 			'tandatangandirektur' => 'Ditolak',
	 			'tandatanganhrga' => 'Ditolak'
	 		);
    	}
 		$this->Pengajuan_karyawan_model->update($this->input->post('id_form', TRUE), $data);
		/*$row = $this->Pengajuan_karyawan_model->get_by_id($this->input->post('id_form', TRUE));
        if ($row) {
 			unlink($row->tandatangandirektur);
        	unlink($row->tandatanganhrga);
        }*/
    }

    //this is for fetching image using php puprose
    function geturlonly() {
	    $urlpath = explode('/', $_SERVER['PHP_SELF']);
	    array_pop($urlpath);
	    $scriptname = implode("/", $urlpath);
	    $http_protocol = 'http';
	    if((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || ($_SERVER['SERVER_PORT'] == 443)){
	      $http_protocol = 'https';
	    }
	    return $http_protocol . "://" . $_SERVER["HTTP_HOST"] . $scriptname . "/";
	}


	function base64_to_jpeg($base64_string, $output_file) {
	    $ifp = @fopen($output_file, "wb");

	    $data = explode(',', $base64_string);

	    @fwrite($ifp, base64_decode($data[1]));
	    @fclose($ifp);
	    return $output_file;
	}

	function add_mark($inputfile, $outputfile) {

	//    var_dump(gd_info());
	    $im = @imagecreatefrompng($inputfile);

	    $bg = @imagecolorallocate($im, 255, 255, 255);
	    $textcolor = @imagecolorallocate($im, 110, 110, 110);

	    list($x, $y, $type) = getimagesize($inputfile);

	    $txtpos_x = $x - 145;
	    $txtpos_y = 20;

	    @imagestring($im, 3, $txtpos_x, $txtpos_y, date("Y-m-d H:i:s"), $textcolor);

	    @imagepng($im, $outputfile);

	    // Output the image
	    //imagejpeg($im);

	    @imagedestroy($im);

	}

}

/* End of file Pengajuan_karyawan.php */
/* Location: ./application/controllers/Pengajuan_karyawan.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2021-04-08 14:12:19 */
/* http://harviacode.com */