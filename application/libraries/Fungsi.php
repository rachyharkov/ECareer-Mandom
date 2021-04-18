<?php
Class Fungsi{
    protected $ci;

    public function __construct() {
        $this->ci =& get_instance();
    }

    public function user_login(){
        $this->ci->load->model('user_m');
        $user_id = $this->ci->session->userdata('userid');
        $user_data = $this->ci->user_m->get($user_id)->row();
        return $user_data;
    }

    public function count_karyawan(){
        $this->ci->load->model('karyawan_model');
        return $this->ci->karyawan_model->total_rows();
    }
    public function count_pelamar_today(){
        $this->ci->load->model('Pengajuan_karyawan_model');
        $count = $this->ci->Pengajuan_karyawan_model->countpelamartoday();
        return $count;
    }
    public function count_approved(){
        $this->ci->load->model('Pengajuan_karyawan_model');
        $count = $this->ci->Pengajuan_karyawan_model->countditerimapengajuan();
        return $count;
    }
    public function count_ditolak(){
        $this->ci->load->model('Pengajuan_karyawan_model');
        $count = $this->ci->Pengajuan_karyawan_model->countditolakpengajuan();
        return $count;
    }
    public function count_pending(){
        $this->ci->load->model('Pengajuan_karyawan_model');
        $count = $this->ci->Pengajuan_karyawan_model->countpendingpengajuan();
        return $count;
    }
}