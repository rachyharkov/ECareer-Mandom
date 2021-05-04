<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Data_pelamar extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Data_pelamar_model');
        $this->load->library('form_validation');        
	$this->load->library('datatables');
    }

    public function index()
    {
    	$this->template->load('template','data_pelamar/tbl_pelamar_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Data_pelamar_model->json();
    }

    public function read($id) 
    {
        $row = $this->Data_pelamar_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_pelamar' => $row->id_pelamar,
		'nama_pelamar' => $row->nama_pelamar,
		'no_telp' => $row->no_telp,
		'email' => $row->email,
		'file_suratlamaran' => $row->file_suratlamaran,
		'file_daftarriwayathidup' => $row->file_daftarriwayathidup,
		'file_photo' => $row->file_photo,
		'file_skck' => $row->file_skck,
		'file_ktp' => $row->file_ktp,
		'file_aktekelahiran' => $row->file_aktekelahiran,
		'file_kk' => $row->file_kk,
		'file_ijazah' => $row->file_ijazah,
		'file_transkripnilai' => $row->file_transkripnilai,
		'file_npwp' => $row->file_npwp,
		'file_hasilkesehatan' => $row->file_hasilkesehatan,
		'id_careerposts' => $row->id_careerposts,
		'tanggal' => $row->tanggal_melamar,
		'posisi' => $row->posisi_dilamar,
	    );

            $this->template->load('template','data_pelamar/tbl_pelamar_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('data_pelamar'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('data_pelamar/create_action'),
	    'id_pelamar' => set_value('id_pelamar'),
	    'nama_pelamar' => set_value('nama_pelamar'),
	    'no_telp' => set_value('no_telp'),
	    'email' => set_value('email'),
	    'file_suratlamaran' => set_value('file_suratlamaran'),
	    'file_daftarriwayathidup' => set_value('file_daftarriwayathidup'),
	    'file_photo' => set_value('file_photo'),
	    'file_skck' => set_value('file_skck'),
	    'file_ktp' => set_value('file_ktp'),
	    'file_aktekelahiran' => set_value('file_aktekelahiran'),
	    'file_kk' => set_value('file_kk'),
	    'file_ijazah' => set_value('file_ijazah'),
	    'file_transkripnilai' => set_value('file_transkripnilai'),
	    'file_npwp' => set_value('file_npwp'),
	    'file_hasilkesehatan' => set_value('file_hasilkesehatan'),
	    'id_careerposts' => set_value('id_careerposts'),
	);
        $this->template->load('template','data_pelamar/tbl_pelamar_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nama_pelamar' => $this->input->post('nama_pelamar',TRUE),
		'no_telp' => $this->input->post('no_telp',TRUE),
		'email' => $this->input->post('email',TRUE),
		'file_suratlamaran' => $this->input->post('file_suratlamaran',TRUE),
		'file_daftarriwayathidup' => $this->input->post('file_daftarriwayathidup',TRUE),
		'file_photo' => $this->input->post('file_photo',TRUE),
		'file_skck' => $this->input->post('file_skck',TRUE),
		'file_ktp' => $this->input->post('file_ktp',TRUE),
		'file_aktekelahiran' => $this->input->post('file_aktekelahiran',TRUE),
		'file_kk' => $this->input->post('file_kk',TRUE),
		'file_ijazah' => $this->input->post('file_ijazah',TRUE),
		'file_transkripnilai' => $this->input->post('file_transkripnilai',TRUE),
		'file_npwp' => $this->input->post('file_npwp',TRUE),
		'file_hasilkesehatan' => $this->input->post('file_hasilkesehatan',TRUE),
		'id_careerposts' => $this->input->post('id_careerposts',TRUE),
	    );

            $this->Data_pelamar_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('data_pelamar'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Data_pelamar_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('data_pelamar/update_action'),
		'id_pelamar' => set_value('id_pelamar', $row->id_pelamar),
		'nama_pelamar' => set_value('nama_pelamar', $row->nama_pelamar),
		'no_telp' => set_value('no_telp', $row->no_telp),
		'email' => set_value('email', $row->email),
		'file_suratlamaran' => set_value('file_suratlamaran', $row->file_suratlamaran),
		'file_daftarriwayathidup' => set_value('file_daftarriwayathidup', $row->file_daftarriwayathidup),
		'file_photo' => set_value('file_photo', $row->file_photo),
		'file_skck' => set_value('file_skck', $row->file_skck),
		'file_ktp' => set_value('file_ktp', $row->file_ktp),
		'file_aktekelahiran' => set_value('file_aktekelahiran', $row->file_aktekelahiran),
		'file_kk' => set_value('file_kk', $row->file_kk),
		'file_ijazah' => set_value('file_ijazah', $row->file_ijazah),
		'file_transkripnilai' => set_value('file_transkripnilai', $row->file_transkripnilai),
		'file_npwp' => set_value('file_npwp', $row->file_npwp),
		'file_hasilkesehatan' => set_value('file_hasilkesehatan', $row->file_hasilkesehatan),
		'id_careerposts' => set_value('id_careerposts', $row->id_careerposts),
	    );
            $this->template->load('template','data_pelamar/tbl_pelamar_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('data_pelamar'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_pelamar', TRUE));
        } else {
            $data = array(
		'nama_pelamar' => $this->input->post('nama_pelamar',TRUE),
		'no_telp' => $this->input->post('no_telp',TRUE),
		'email' => $this->input->post('email',TRUE),
		'file_suratlamaran' => $this->input->post('file_suratlamaran',TRUE),
		'file_daftarriwayathidup' => $this->input->post('file_daftarriwayathidup',TRUE),
		'file_photo' => $this->input->post('file_photo',TRUE),
		'file_skck' => $this->input->post('file_skck',TRUE),
		'file_ktp' => $this->input->post('file_ktp',TRUE),
		'file_aktekelahiran' => $this->input->post('file_aktekelahiran',TRUE),
		'file_kk' => $this->input->post('file_kk',TRUE),
		'file_ijazah' => $this->input->post('file_ijazah',TRUE),
		'file_transkripnilai' => $this->input->post('file_transkripnilai',TRUE),
		'file_npwp' => $this->input->post('file_npwp',TRUE),
		'file_hasilkesehatan' => $this->input->post('file_hasilkesehatan',TRUE),
		'id_careerposts' => $this->input->post('id_careerposts',TRUE),
	    );

            $this->Data_pelamar_model->update($this->input->post('id_pelamar', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('data_pelamar'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Data_pelamar_model->get_by_id($id);

        if ($row) {
            $this->Data_pelamar_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('data_pelamar'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('data_pelamar'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama_pelamar', 'nama pelamar', 'trim|required');
	$this->form_validation->set_rules('no_telp', 'no telp', 'trim|required');
	$this->form_validation->set_rules('email', 'email', 'trim|required');
	$this->form_validation->set_rules('file_suratlamaran', 'file suratlamaran', 'trim|required');
	$this->form_validation->set_rules('file_daftarriwayathidup', 'file daftarriwayathidup', 'trim|required');
	$this->form_validation->set_rules('file_photo', 'file photo', 'trim|required');
	$this->form_validation->set_rules('file_skck', 'file skck', 'trim|required');
	$this->form_validation->set_rules('file_ktp', 'file ktp', 'trim|required');
	$this->form_validation->set_rules('file_aktekelahiran', 'file aktekelahiran', 'trim|required');
	$this->form_validation->set_rules('file_kk', 'file kk', 'trim|required');
	$this->form_validation->set_rules('file_ijazah', 'file ijazah', 'trim|required');
	$this->form_validation->set_rules('file_transkripnilai', 'file transkripnilai', 'trim|required');
	$this->form_validation->set_rules('file_npwp', 'file npwp', 'trim|required');
	$this->form_validation->set_rules('file_hasilkesehatan', 'file hasilkesehatan', 'trim|required');
	$this->form_validation->set_rules('id_careerposts', 'id careerposts', 'trim|required');

	$this->form_validation->set_rules('id_pelamar', 'id_pelamar', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "tbl_pelamar.xls";
        $judul = "tbl_pelamar";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Nama Pelamar");
	xlsWriteLabel($tablehead, $kolomhead++, "No Telp");
	xlsWriteLabel($tablehead, $kolomhead++, "Email");
	xlsWriteLabel($tablehead, $kolomhead++, "File Suratlamaran");
	xlsWriteLabel($tablehead, $kolomhead++, "File Daftarriwayathidup");
	xlsWriteLabel($tablehead, $kolomhead++, "File Photo");
	xlsWriteLabel($tablehead, $kolomhead++, "File Skck");
	xlsWriteLabel($tablehead, $kolomhead++, "File Ktp");
	xlsWriteLabel($tablehead, $kolomhead++, "File Aktekelahiran");
	xlsWriteLabel($tablehead, $kolomhead++, "File Kk");
	xlsWriteLabel($tablehead, $kolomhead++, "File Ijazah");
	xlsWriteLabel($tablehead, $kolomhead++, "File Transkripnilai");
	xlsWriteLabel($tablehead, $kolomhead++, "File Npwp");
	xlsWriteLabel($tablehead, $kolomhead++, "File Hasilkesehatan");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Careerposts");

	foreach ($this->Data_pelamar_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_pelamar);
	    xlsWriteLabel($tablebody, $kolombody++, $data->no_telp);
	    xlsWriteLabel($tablebody, $kolombody++, $data->email);
	    xlsWriteLabel($tablebody, $kolombody++, $data->file_suratlamaran);
	    xlsWriteLabel($tablebody, $kolombody++, $data->file_daftarriwayathidup);
	    xlsWriteLabel($tablebody, $kolombody++, $data->file_photo);
	    xlsWriteLabel($tablebody, $kolombody++, $data->file_skck);
	    xlsWriteLabel($tablebody, $kolombody++, $data->file_ktp);
	    xlsWriteLabel($tablebody, $kolombody++, $data->file_aktekelahiran);
	    xlsWriteLabel($tablebody, $kolombody++, $data->file_kk);
	    xlsWriteLabel($tablebody, $kolombody++, $data->file_ijazah);
	    xlsWriteLabel($tablebody, $kolombody++, $data->file_transkripnilai);
	    xlsWriteLabel($tablebody, $kolombody++, $data->file_npwp);
	    xlsWriteLabel($tablebody, $kolombody++, $data->file_hasilkesehatan);
	    xlsWriteLabel($tablebody, $kolombody++, $data->id_careerposts);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=tbl_pelamar.doc");

        $data = array(
            'tbl_pelamar_data' => $this->Data_pelamar_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('data_pelamar/tbl_pelamar_doc',$data);
    }

    public function print_kelengkapanberkas() {
    	$row = $this->Data_pelamar_model->get_by_id($this->input->post('tbidpelamar', TRUE));
        if ($row) {
            $data = array(
				'id_pelamar' => $row->id_pelamar,
				'nama_pelamar' => $row->nama_pelamar,
				'no_telp' => $row->no_telp,
				'email' => $row->email,
				'file_suratlamaran' => $row->file_suratlamaran,
				'file_daftarriwayathidup' => $row->file_daftarriwayathidup,
				'file_photo' => $row->file_photo,
				'file_skck' => $row->file_skck,
				'file_ktp' => $row->file_ktp,
				'file_aktekelahiran' => $row->file_aktekelahiran,
				'file_kk' => $row->file_kk,
				'file_ijazah' => $row->file_ijazah,
				'file_transkripnilai' => $row->file_transkripnilai,
				'file_npwp' => $row->file_npwp,
				'file_hasilkesehatan' => $row->file_hasilkesehatan,
				'id_careerposts' => $row->id_careerposts,
				'tanggal' => $row->tanggal_melamar,
				'posisi' => $row->posisi_dilamar,
		    );
    		$this->load->view('data_pelamar/print_datapelamar',$data);	
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pengajuan_karyawan'));
        }	
    }

}

/* End of file Data_pelamar.php */
/* Location: ./application/controllers/Data_pelamar.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2021-05-01 01:13:32 */
/* http://harviacode.com */