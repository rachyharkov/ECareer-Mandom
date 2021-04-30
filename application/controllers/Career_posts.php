<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Career_posts extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Career_posts_model');
        $this->load->library('form_validation');        
	   $this->load->library('datatables');
    }

    public function index()
    {
        $this->template->load('template','career_posts/career_posts_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Career_posts_model->json();
    }

    public function read($id) 
    {
        $row = $this->Career_posts_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'id_careerposts' => $row->id_careerposts,
		'posts' => $row->posts,
		'status' => $row->status,
		'tgl_posts' => $row->tgl_posts,
        'tipe_pekerjaan' => $row->tipe_pekerjaan,
        'lokasi' => $row->lokasi,
	    );
            $this->template->load('template','career_posts/career_posts_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('career_posts'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('career_posts/create_action'),
	    'id' => set_value('id'),
	    'id_careerposts' => set_value('id_careerposts'),
	    'posts' => set_value('posts'),
	    'status' => set_value('status'),
	    'tgl_posts' => set_value('tgl_posts'),
        'tipe_pekerjaan' => set_value('tipe_pekerjaan'),
        'lokasi' => set_value('lokasi'),
	);
        $this->template->load('template','career_posts/career_posts_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'id_careerposts' => $this->input->post('id_careerposts',TRUE),
		'posts' => $this->input->post('posts',TRUE),
		'status' => $this->input->post('status',TRUE),
		'tgl_posts' => $this->input->post('tgl_posts',TRUE),
        'tipe_pekerjaan' => $this->input->post('tipe_pekerjaan',TRUE),
        'lokasi' => $this->input->post('lokasi',TRUE),
	    );

            $this->Career_posts_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('career_posts'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Career_posts_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('career_posts/update_action'),
		'id' => set_value('id', $row->id),
		'id_careerposts' => set_value('id_careerposts', $row->id_careerposts),
		'posts' => set_value('posts', $row->posts),
		'status' => set_value('status', $row->status),
		'tgl_posts' => set_value('tgl_posts', $row->tgl_posts),
        'tipe_pekerjaan' => set_value('tipe_pekerjaan', $row->tipe_pekerjaan),
        'lokasi' => set_value('lokasi', $row->lokasi),
	    );
            $this->template->load('template','career_posts/career_posts_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('career_posts'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'id_careerposts' => $this->input->post('id_careerposts',TRUE),
		'posts' => $this->input->post('posts',TRUE),
		'status' => $this->input->post('status',TRUE),
		'tgl_posts' => $this->input->post('tgl_posts',TRUE),
        'tipe_pekerjaan' => $this->input->post('tipe_pekerjaan'),
        'lokasi' => $this->input->post('lokasi'),
	    );

            $this->Career_posts_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('career_posts'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Career_posts_model->get_by_id($id);

        if ($row) {
            $this->Career_posts_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('career_posts'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('career_posts'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('id_careerposts', 'id careerposts', 'trim|required');
	$this->form_validation->set_rules('posts', 'posts', 'trim|required');
	$this->form_validation->set_rules('status', 'status', 'trim|required');
	$this->form_validation->set_rules('tgl_posts', 'tgl posts', 'trim|required');
    $this->form_validation->set_rules('tipe_pekerjaan', 'tipe pekerjaan', 'trim|required');
    $this->form_validation->set_rules('lokasi', 'lokasi', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "career_posts.xls";
        $judul = "career_posts";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Id Careerposts");
	xlsWriteLabel($tablehead, $kolomhead++, "Posts");
	xlsWriteLabel($tablehead, $kolomhead++, "Status");
	xlsWriteLabel($tablehead, $kolomhead++, "Tgl Posts");

	foreach ($this->Career_posts_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->id_careerposts);
	    xlsWriteLabel($tablebody, $kolombody++, $data->posts);
	    xlsWriteLabel($tablebody, $kolombody++, $data->status);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tgl_posts);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=career_posts.doc");

        $data = array(
            'career_posts_data' => $this->Career_posts_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('career_posts/career_posts_doc',$data);
    }

}

/* End of file Career_posts.php */
/* Location: ./application/controllers/Career_posts.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2021-04-29 06:17:10 */
/* http://harviacode.com */