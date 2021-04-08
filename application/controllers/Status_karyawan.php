<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Status_karyawan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Status_karyawan_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'status_karyawan/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'status_karyawan/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'status_karyawan/index.html';
            $config['first_url'] = base_url() . 'status_karyawan/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Status_karyawan_model->total_rows($q);
        $status_karyawan = $this->Status_karyawan_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'status_karyawan_data' => $status_karyawan,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->template->load('template','status_karyawan/status_karyawan_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Status_karyawan_model->get_by_id($id);
        if ($row) {
            $data = array(
		'status_karyawan_id' => $row->status_karyawan_id,
		'nama_status_karyawan' => $row->nama_status_karyawan,
	    );
            $this->template->load('template','status_karyawan/status_karyawan_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('status_karyawan'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('status_karyawan/create_action'),
	    'status_karyawan_id' => set_value('status_karyawan_id'),
	    'nama_status_karyawan' => set_value('nama_status_karyawan'),
	);
        $this->template->load('template','status_karyawan/status_karyawan_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nama_status_karyawan' => $this->input->post('nama_status_karyawan',TRUE),
	    );

            $this->Status_karyawan_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('status_karyawan'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Status_karyawan_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('status_karyawan/update_action'),
		'status_karyawan_id' => set_value('status_karyawan_id', $row->status_karyawan_id),
		'nama_status_karyawan' => set_value('nama_status_karyawan', $row->nama_status_karyawan),
	    );
            $this->template->load('template','status_karyawan/status_karyawan_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('status_karyawan'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('status_karyawan_id', TRUE));
        } else {
            $data = array(
		'nama_status_karyawan' => $this->input->post('nama_status_karyawan',TRUE),
	    );

            $this->Status_karyawan_model->update($this->input->post('status_karyawan_id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('status_karyawan'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Status_karyawan_model->get_by_id($id);

        if ($row) {
            $this->Status_karyawan_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('status_karyawan'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('status_karyawan'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama_status_karyawan', 'nama status karyawan', 'trim|required');

	$this->form_validation->set_rules('status_karyawan_id', 'status_karyawan_id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Status_karyawan.php */
/* Location: ./application/controllers/Status_karyawan.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2021-04-08 11:14:53 */
/* http://harviacode.com */