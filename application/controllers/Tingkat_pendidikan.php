<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tingkat_pendidikan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tingkat_pendidikan_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'tingkat_pendidikan/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'tingkat_pendidikan/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'tingkat_pendidikan/index.html';
            $config['first_url'] = base_url() . 'tingkat_pendidikan/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Tingkat_pendidikan_model->total_rows($q);
        $tingkat_pendidikan = $this->Tingkat_pendidikan_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'tingkat_pendidikan_data' => $tingkat_pendidikan,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->template->load('template','tingkat_pendidikan/tbl_tingkat_pendidikan_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Tingkat_pendidikan_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_tingkat_pendidikan' => $row->id_tingkat_pendidikan,
		'tingkat_pendidikan' => $row->tingkat_pendidikan,
	    );
            $this->template->load('template','tingkat_pendidikan/tbl_tingkat_pendidikan_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tingkat_pendidikan'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('tingkat_pendidikan/create_action'),
	    'id_tingkat_pendidikan' => set_value('id_tingkat_pendidikan'),
	    'tingkat_pendidikan' => set_value('tingkat_pendidikan'),
	);
        $this->template->load('template','tingkat_pendidikan/tbl_tingkat_pendidikan_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'tingkat_pendidikan' => $this->input->post('tingkat_pendidikan',TRUE),
	    );

            $this->Tingkat_pendidikan_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('tingkat_pendidikan'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tingkat_pendidikan_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('tingkat_pendidikan/update_action'),
		'id_tingkat_pendidikan' => set_value('id_tingkat_pendidikan', $row->id_tingkat_pendidikan),
		'tingkat_pendidikan' => set_value('tingkat_pendidikan', $row->tingkat_pendidikan),
	    );
            $this->template->load('template','tingkat_pendidikan/tbl_tingkat_pendidikan_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tingkat_pendidikan'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_tingkat_pendidikan', TRUE));
        } else {
            $data = array(
		'tingkat_pendidikan' => $this->input->post('tingkat_pendidikan',TRUE),
	    );

            $this->Tingkat_pendidikan_model->update($this->input->post('id_tingkat_pendidikan', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('tingkat_pendidikan'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Tingkat_pendidikan_model->get_by_id($id);

        if ($row) {
            $this->Tingkat_pendidikan_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('tingkat_pendidikan'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tingkat_pendidikan'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('tingkat_pendidikan', 'tingkat pendidikan', 'trim|required');

	$this->form_validation->set_rules('id_tingkat_pendidikan', 'id_tingkat_pendidikan', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Tingkat_pendidikan.php */
/* Location: ./application/controllers/Tingkat_pendidikan.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2021-04-08 10:29:14 */
/* http://harviacode.com */