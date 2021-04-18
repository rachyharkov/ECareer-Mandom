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

    public function count_pelamar_today(){
        $this->ci->load->model('Pengajuan_karyawan_model');
        $whereforuser = array(
                'status_pengajuan' => 'Pending',
                'id_dept' => $this->user_login()->id_dept
        );
        $whereforhighlevel = array(
                'status_pengajuan' => 'Pending',
        );

        
        if ($this->user_login()->id_dept == '1' || $this->user_login()->id_dept == '2' ) {
                $count = $this->ci->Pengajuan_karyawan_model->countpelamartoday($whereforhighlevel);
        } else {
                $count = $this->ci->Pengajuan_karyawan_model->countpelamartoday($whereforuser);
        }
        return $count;
    }
    public function count_approved(){
        $this->ci->load->model('Pengajuan_karyawan_model');
        $whereforuser = array(
                'status_pengajuan' => 'Diterima',
                'id_dept' => $this->user_login()->id_dept
        );
        $whereforhighlevel = array(
                'status_pengajuan' => 'Diterima',
        );

        
        if ($this->user_login()->id_dept == '1' || $this->user_login()->id_dept == '2' ) {
                $count = $this->ci->Pengajuan_karyawan_model->countditerimapengajuan($whereforhighlevel);
        } else {
                $count = $this->ci->Pengajuan_karyawan_model->countditerimapengajuan($whereforuser);
        }
        return $count;
    }
    public function count_ditolak(){
        $this->ci->load->model('Pengajuan_karyawan_model');
        $whereforuser = array(
                'status_pengajuan' => 'Ditolak',
                'id_dept' => $this->user_login()->id_dept
        );
        $whereforhighlevel = array(
                'status_pengajuan' => 'Ditolak',
        );

        
        if ($this->user_login()->id_dept == '1' || $this->user_login()->id_dept == '2' ) {
                $count = $this->ci->Pengajuan_karyawan_model->countditolakpengajuan($whereforhighlevel);
        } else {
                $count = $this->ci->Pengajuan_karyawan_model->countditolakpengajuan($whereforuser);
        }
        return $count;
    }
    public function count_pending(){
        $this->ci->load->model('Pengajuan_karyawan_model');
        $whereforuser = array(
                'status_pengajuan' => 'Pending',
                'id_dept' => $this->user_login()->id_dept
        );
        $whereforhighlevel = array(
                'status_pengajuan' => 'Pending',
        );

        
        if ($this->user_login()->id_dept == '1' || $this->user_login()->id_dept == '2' ) {
                $count = $this->ci->Pengajuan_karyawan_model->countpendingpengajuan($whereforhighlevel);
        } else {
                $count = $this->ci->Pengajuan_karyawan_model->countpendingpengajuan($whereforuser);
        }
        return $count;
    }
}