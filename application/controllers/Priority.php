<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Priority extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Priority_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'priority/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'priority/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'priority/index.html';
            $config['first_url'] = base_url() . 'priority/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Priority_model->total_rows($q);
        $priority = $this->Priority_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'priority_data' => $priority,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->template->load('template','priority/tbl_priority_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Priority_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_priority' => $row->id_priority,
		'prioritas' => $row->prioritas,
	    );
            $this->template->load('template','priority/tbl_priority_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('priority'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('priority/create_action'),
	    'id_priority' => set_value('id_priority'),
	    'prioritas' => set_value('prioritas'),
	);
        $this->template->load('template','priority/tbl_priority_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'prioritas' => $this->input->post('prioritas',TRUE),
	    );

            $this->Priority_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('priority'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Priority_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('priority/update_action'),
		'id_priority' => set_value('id_priority', $row->id_priority),
		'prioritas' => set_value('prioritas', $row->prioritas),
	    );
            $this->template->load('template','priority/tbl_priority_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('priority'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_priority', TRUE));
        } else {
            $data = array(
		'prioritas' => $this->input->post('prioritas',TRUE),
	    );

            $this->Priority_model->update($this->input->post('id_priority', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('priority'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Priority_model->get_by_id($id);

        if ($row) {
            $this->Priority_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('priority'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('priority'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('prioritas', 'prioritas', 'trim|required');

	$this->form_validation->set_rules('id_priority', 'id_priority', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Priority.php */
/* Location: ./application/controllers/Priority.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2021-04-08 11:23:31 */
/* http://harviacode.com */