<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User_role extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('User_role_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->uri->segment(3));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . '.php/c_url/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'index.php/user_role/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'index.php/user_role/index/';
            $config['first_url'] = base_url() . 'index.php/user_role/index/';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = FALSE;
        $config['total_rows'] = $this->User_role_model->total_rows($q);
        $user_role = $this->User_role_model->get_limit_data($config['per_page'], $start, $q);
        $config['full_tag_open'] = '<ul class="pagination pagination-sm no-margin pull-right">';
        $config['full_tag_close'] = '</ul>';
        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'user_role_data' => $user_role,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->template->load('template','user_role/user_role_list', $data);
    }

    public function read($id) 
    {
        $row = $this->User_role_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'role' => $row->role,
	    );
            $this->template->load('template','user_role/user_role_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('user_role'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('user_role/create_action'),
	    'id' => set_value('id'),
	    'role' => set_value('role'),
	);
        $this->template->load('template','user_role/user_role_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'role' => $this->input->post('role',TRUE),
	    );

            $this->User_role_model->insert($data);
            // $this->session->set_flashdata('message', 'Create Record Success 2');
            $this->session->set_flashdata('oke', 'di Simpan');
            redirect(site_url('user_role'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->User_role_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('user_role/update_action'),
		'id' => set_value('id', $row->id),
		'role' => set_value('role', $row->role),
	    );
            $this->template->load('template','user_role/user_role_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('user_role'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'role' => $this->input->post('role',TRUE),
	    );

            $this->User_role_model->update($this->input->post('id', TRUE), $data);
            // $this->session->set_flashdata('message', 'Update Record Success');
            $this->session->set_flashdata('oke', 'di Update');
            redirect(site_url('user_role'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->User_role_model->get_by_id($id);

        if ($row) {
            $this->User_role_model->delete($id);
            // $this->session->set_flashdata('message', 'Delete Record Success');
            $this->session->set_flashdata('oke', 'di Hapus');
            redirect(site_url('user_role'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('user_role'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('role', 'role', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "user_role.xls";
        $judul = "user_role";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Role");

	foreach ($this->User_role_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->role);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=user_role.doc");

        $data = array(
            'user_role_data' => $this->User_role_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('user_role/user_role_doc',$data);
    }

}

/* End of file User_role.php */
/* Location: ./application/controllers/User_role.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2021-03-16 06:57:35 */
/* http://harviacode.com */