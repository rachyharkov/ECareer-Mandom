<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Keahlian extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Keahlian_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'keahlian/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'keahlian/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'keahlian/index.html';
            $config['first_url'] = base_url() . 'keahlian/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Keahlian_model->total_rows($q);
        $keahlian = $this->Keahlian_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'keahlian_data' => $keahlian,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->template->load('template','keahlian/tbl_keahlian_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Keahlian_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_keahlian' => $row->id_keahlian,
		'keahlian' => $row->keahlian,
	    );
            $this->template->load('template','keahlian/tbl_keahlian_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('keahlian'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('keahlian/create_action'),
	    'id_keahlian' => set_value('id_keahlian'),
	    'keahlian' => set_value('keahlian'),
	);
        $this->template->load('template','keahlian/tbl_keahlian_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'keahlian' => $this->input->post('keahlian',TRUE),
	    );

            $this->Keahlian_model->insert($data);
            $this->session->set_flashdata('oke', 'di Simpan');
            redirect(site_url('keahlian'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Keahlian_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('keahlian/update_action'),
		'id_keahlian' => set_value('id_keahlian', $row->id_keahlian),
		'keahlian' => set_value('keahlian', $row->keahlian),
	    );
            $this->template->load('template','keahlian/tbl_keahlian_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('keahlian'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_keahlian', TRUE));
        } else {
            $data = array(
		'keahlian' => $this->input->post('keahlian',TRUE),
	    );

            $this->Keahlian_model->update($this->input->post('id_keahlian', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('keahlian'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Keahlian_model->get_by_id($id);

        if ($row) {
            $this->Keahlian_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('keahlian'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('keahlian'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('keahlian', 'keahlian', 'trim|required');

	$this->form_validation->set_rules('id_keahlian', 'id_keahlian', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Keahlian.php */
/* Location: ./application/controllers/Keahlian.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2021-04-08 11:08:08 */
/* http://harviacode.com */