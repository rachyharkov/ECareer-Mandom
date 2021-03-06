<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pengajuan_karyawan_model extends CI_Model
{

    public $table = 'pengajuan_karyawan';
    public $id = 'id_form';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // datatables
    function jsondepartement() {
        $this->datatables->select('pengajuan_karyawan.*,pengajuan_karyawan.id_form as owo, tbl_dept.*');
        $this->datatables->from('pengajuan_karyawan');
        //add this line for join
        $this->datatables->join('tbl_dept', 'tbl_dept.id_dept = pengajuan_karyawan.id_dept');
        $this->datatables->where('tbl_dept.id_dept',$this->session->userdata('id_dept'));
        $this->datatables->add_column('action', anchor(site_url('pengajuan_karyawan/read/$1'),'Read')." | ".anchor(site_url('pengajuan_karyawan/delete/$1'),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'), 'owo');
        return $this->datatables->generate();
    }

    function jsonall() {
        $this->datatables->select('id_form,tpk,id_dept,id_posisi,tanggal_pengajuan,priority_id,status_pengajuan');
        $this->datatables->from('pengajuan_karyawan');
        //add this line for join
        //$this->datatables->join('tbl_dept', 'tbl_dept.id_dept = pengajuan_karyawan.id_dept');
        //$this->datatables->where('tbl_dept.id_dept',$this->session->userdata('id_dept'));
        $this->datatables->add_column('action', anchor(site_url('pengajuan_karyawan/read/$1'),'Read')." | ".anchor(site_url('pengajuan_karyawan/delete/$1'),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'), 'id_form');
        return $this->datatables->generate();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($idnya)
    {
        $this->db->select('pengajuan_karyawan.*,tbl_dept.*,tbl_fakultas.*,tbl_posisi.*,tbl_priority.*,tbl_tingkat_pendidikan.*,status_karyawan.*')
            ->from('pengajuan_karyawan')
            ->join('tbl_dept','tbl_dept.id_dept = pengajuan_karyawan.id_dept')
            ->join('tbl_fakultas','tbl_fakultas.id_fakultas = pengajuan_karyawan.id_jurusfakult')
            ->join('tbl_posisi','tbl_posisi.id_posisi = pengajuan_karyawan.id_posisi')
            ->join('tbl_priority','tbl_priority.id_priority = pengajuan_karyawan.priority_id')
            ->join('tbl_tingkat_pendidikan','tbl_tingkat_pendidikan.id_tingkat_pendidikan = pengajuan_karyawan.id_tingkat_pendidikan')
            ->join('status_karyawan','status_karyawan.status_karyawan_id = pengajuan_karyawan.id_sk');
        $this->db->where('pengajuan_karyawan.id_form', $idnya);
        $query = $this->db->get();
        return $query->row();
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('id_form', $q);
	$this->db->or_like('tpk', $q);
	$this->db->or_like('id_dept', $q);
	$this->db->or_like('tanggal_penempatan', $q);
	$this->db->or_like('jks', $q);
	$this->db->or_like('id_posisi', $q);
	$this->db->or_like('jenis_kelamin', $q);
	$this->db->or_like('batas_usia', $q);
	$this->db->or_like('id_tingkat_pendidikan', $q);
	$this->db->or_like('id_jurusfakult', $q);
	$this->db->or_like('sp_keahlian', $q);
	$this->db->or_like('pengalaman_kerja', $q);
	$this->db->or_like('id_sk', $q);
	$this->db->or_like('estimasi_gaji', $q);
	$this->db->or_like('lptj', $q);
	$this->db->or_like('dp_sot', $q);
	$this->db->or_like('dp_jdesk', $q);
	$this->db->or_like('catatan', $q);
	$this->db->or_like('tanggal_pengajuan', $q);
    $this->db->or_like('last_update', $q);
	$this->db->or_like('tgl_pengajuan', $q);
	$this->db->or_like('diajukanoleh', $q);
	$this->db->or_like('priority_id', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id_form', $q);
	$this->db->or_like('tpk', $q);
	$this->db->or_like('id_dept', $q);
	$this->db->or_like('tanggal_penempatan', $q);
	$this->db->or_like('jks', $q);
	$this->db->or_like('id_posisi', $q);
	$this->db->or_like('jenis_kelamin', $q);
	$this->db->or_like('batas_usia', $q);
	$this->db->or_like('id_tingkat_pendidikan', $q);
	$this->db->or_like('id_jurusfakult', $q);
	$this->db->or_like('sp_keahlian', $q);
	$this->db->or_like('pengalaman_kerja', $q);
	$this->db->or_like('id_sk', $q);
	$this->db->or_like('estimasi_gaji', $q);
	$this->db->or_like('lptj', $q);
	$this->db->or_like('dp_sot', $q);
	$this->db->or_like('dp_jdesk', $q);
	$this->db->or_like('catatan', $q);
	$this->db->or_like('karyawan_out', $q);
	$this->db->or_like('tanggal_pengajuan', $q);
    $this->db->or_like('last_update', $q);
	$this->db->or_like('diajukanoleh', $q);
	$this->db->or_like('priority_id', $q);
	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    function countpendingpengajuan($criteria)
    {
        $this->db->select('status_pengajuan');
        $this->db->from('pengajuan_karyawan');
        $this->db->where($criteria);
        $query = $this->db->count_all_results();
        return $query;
    }

    function countditolakpengajuan($criteria)
    {
        $this->db->select('status_pengajuan');
        $this->db->from('pengajuan_karyawan');
        $this->db->where($criteria);
        $query = $this->db->count_all_results();
        return $query;
    }
    function countditerimapengajuan($criteria)
    {
        $this->db->select('status_pengajuan');
        $this->db->from('pengajuan_karyawan');
        $this->db->where($criteria);
        $query = $this->db->count_all_results();
        return $query;
    }
    function countpelamartoday($criteria)
    {
        $this->db->select('status_pengajuan');
        $this->db->from('pengajuan_karyawan');
        $this->db->where($criteria);
        $query = $this->db->count_all_results();
        return $query;
    }

    // insert data
    function insert($table,$data)
    {
        $insert = $this->db->insert($table,$data);
        return $insert;
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

    function GenerateId() {
        $query = $this->db->select($this->id)
                          ->limit(1)
                          ->order_by('id_form','DESC')
                          ->get($this->table);
        $row = $query->last_row();
        if($row){
            $idPostfix = (int)substr($row->id_form,15)+1;
            $nextId = 'FR-PK-'.date('dmY').'-'.STR_PAD((string)$idPostfix,5,"0",STR_PAD_LEFT);
        }
        else{
            $nextId = 'FR-PK-'.date('dmY').'-00001';
        } // For the first time
        return $nextId;
    }

    function GenerateIdcareerpost() {
        $query = $this->db->select('id_careerposts')
                          ->limit(1)
                          ->order_by('id_careerposts','DESC')
                          ->get('career_posts');
        $row = $query->last_row();
        if($row){
            $idPostfix = (int)substr($row->id_careerposts,15)+1;
            $nextId = 'CP-LK-'.date('dmY').'-'.STR_PAD((string)$idPostfix,5,"0",STR_PAD_LEFT);
        }
        else{
            $nextId = 'CP-LK-'.date('dmY').'-00001';
        } // For the first time
        return $nextId;
    }

}

/* End of file Pengajuan_karyawan_model.php */
/* Location: ./application/models/Pengajuan_karyawan_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2021-04-08 14:12:19 */
/* http://harviacode.com */