<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dept extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Dept_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'dept/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'dept/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'dept/index.html';
            $config['first_url'] = base_url() . 'dept/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Dept_model->total_rows($q);
        $dept = $this->Dept_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'dept_data' => $dept,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->template->load('template','dept/tbl_dept_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Dept_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_dept' => $row->id_dept,
		'nama_dept' => $row->nama_dept,
	    );
            $this->template->load('template','dept/tbl_dept_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('dept'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('dept/create_action'),
	    'id_dept' => set_value('id_dept'),
	    'nama_dept' => set_value('nama_dept')
	);
        $this->template->load('template','dept/tbl_dept_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		      'nama_dept' => $this->input->post('nama_dept',TRUE),
	    );
            
            $this->Dept_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('dept'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Dept_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('dept/update_action'),
		'id_dept' => set_value('id_dept', $row->id_dept),
		'nama_dept' => set_value('nama_dept', $row->nama_dept),
	    );
            $this->template->load('template','dept/tbl_dept_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('dept'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_dept', TRUE));
        } else {
            $data = array(
		'nama_dept' => $this->input->post('nama_dept',TRUE),
	    );

            $this->Dept_model->update($this->input->post('id_dept', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('dept'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Dept_model->get_by_id($id);

        if ($row) {
            $this->Dept_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('dept'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('dept'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama_dept', 'nama dept', 'trim|required');

	$this->form_validation->set_rules('id_dept', 'id_dept', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "tbl_dept.xls";
        $judul = "tbl_dept";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Nama Dept");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Posisi");

	foreach ($this->Dept_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_dept);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=tbl_dept.doc");

        $data = array(
            'tbl_dept_data' => $this->Dept_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('dept/tbl_dept_doc',$data);
    }

}

/* End of file Dept.php */
/* Location: ./application/controllers/Dept.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2021-04-08 08:39:46 */
/* http://harviacode.com */