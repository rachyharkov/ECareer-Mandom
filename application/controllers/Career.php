<?php defined('BASEPATH') OR exit('No direct script access allowed');

date_default_timezone_set('Asia/Jakarta');
class Career extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('Dept_model');
        $this->load->model('Posisi_model');
        $this->load->model('Tingkat_pendidikan_model');
        $this->load->model('Fakultas_model');
        $this->load->model('Status_karyawan_model');
        $this->load->model('Keahlian_model');
        $this->load->model('Priority_model');
        $this->load->model('Career_model');
        $this->load->library('form_validation');        
		$this->load->library('datatables');
		$this->load->helper(array('form', 'url','text'));

    }

	public function index()
	{
		$data['info'] = $this->Career_model->tampil_loker_all();
		$data['title'] = 'Mandom Career';
		$this->load->view('visitor/header',$data);
		$this->load->view('visitor/index');
		$this->load->view('visitor/footer');	
	}

	public function home()
	{
		$data['info'] = $this->Career_model->tampil_loker_all();
		$data['title'] = 'Mandom Career';
		$this->load->view('visitor/header',$data);
		$this->load->view('visitor/index');
		$this->load->view('visitor/footer');	
	}

	public function submit_berkas() 
	{

		$config1['upload_path']          = './lampiran/file_pelamar/';
		$config1['allowed_types']        = 'pdf';
		$config1['max_size']             = 2048;
		$config1['file_name']			= $this->input->post('tbnotelp',TRUE).'-'.date('dmYhm').'-SuratLamaran';

		$config2['upload_path']          = './lampiran/file_pelamar/';
		$config2['allowed_types']        = 'pdf';
		$config2['max_size']             = 2048;
		$config2['file_name']			= $this->input->post('tbnotelp',TRUE).'-'.date('dmYhm').'-DaftarRiwayatHidup';

		$config3['upload_path']          = './lampiran/file_pelamar/';
		$config3['allowed_types']        = '.jpg,.png';
		$config3['max_size']             = 2048;
		$config3['file_name']			= $this->input->post('tbnotelp',TRUE).'-'.date('dmYhm').'-PasFoto';

		$config4['upload_path']          = './lampiran/file_pelamar/';
		$config4['allowed_types']        = 'pdf';
		$config4['max_size']             = 2048;
		$config4['file_name']			= $this->input->post('tbnotelp',TRUE).'-'.date('dmYhm').'-skck';

		$config5['upload_path']          = './lampiran/file_pelamar/';
		$config5['allowed_types']        = 'pdf';
		$config5['max_size']             = 2048;
		$config5['file_name']			= $this->input->post('tbnotelp',TRUE).'-'.date('dmYhm').'-ktp';

		$config6['upload_path']          = './lampiran/file_pelamar/';
		$config6['allowed_types']        = 'pdf';
		$config6['max_size']             = 2048;
		$config6['file_name']			= $this->input->post('tbnotelp',TRUE).'-'.date('dmYhm').'-AkteKelahiran';

		$config7['upload_path']          = './lampiran/file_pelamar/';
		$config7['allowed_types']        = 'pdf';
		$config7['max_size']             = 2048;
		$config7['file_name']			= $this->input->post('tbnotelp',TRUE).'-'.date('dmYhm').'-KK';

		$config8['upload_path']          = './lampiran/file_pelamar/';
		$config8['allowed_types']        = 'pdf';
		$config8['max_size']             = 2048;
		$config8['file_name']			= $this->input->post('tbnotelp',TRUE).'-'.date('dmYhm').'-ijazah';

		$config9['upload_path']          = './lampiran/file_pelamar/';
		$config9['allowed_types']        = 'pdf';
		$config9['max_size']             = 2048;
		$config9['file_name']			= $this->input->post('tbnotelp',TRUE).'-'.date('dmYhm').'-transkripnilai';

		$config10['upload_path']          = './lampiran/file_pelamar/';
		$config10['allowed_types']        = 'pdf';
		$config10['max_size']             = 2048;
		$config10['file_name']			= $this->input->post('tbnotelp',TRUE).'-'.date('dmYhm').'-npwp';

		$config11['upload_path']          = './lampiran/file_pelamar/';
		$config11['allowed_types']        = 'pdf';
		$config11['max_size']             = 2048;
		$config11['file_name']			= $this->input->post('tbnotelp',TRUE).'-'.date('dmYhm').'-hasiltestkesehatan';

		$filename1 = 'NULL';	
		$filename2 = 'NULL';
		$filename3 = 'NULL';	
		$filename4 = 'NULL';
		$filename5 = 'NULL';	
		$filename6 = 'NULL';
		$filename7 = 'NULL';	
		$filename8 = 'NULL';
		$filename9 = 'NULL';	
		$filename10 = 'NULL';
		$filename11 = 'NULL';

		$file1loc = 'NULL';
		$file2loc = 'NULL';
		$file3loc = 'NULL';
		$file4loc = 'NULL';
		$file5loc = 'NULL';
		$file6loc = 'NULL';
		$file7loc = 'NULL';
		$file8loc = 'NULL';
		$file9loc = 'NULL';
		$file10loc = 'NULL';
		$file11loc = 'NULL';

		if(!empty($_FILES['fu_sl']['name'])) {
			$this->load->library('upload',$config1,'filesuratlamaran'); //buat custom object filesuratlamaran
			$this->filesuratlamaran->initialize($config1);
			$this->filesuratlamaran->do_upload('fu_sl');			
     		$file1loc = 'lampiran/file_pelamar/';
			$filename1 = $this->input->post('tbnotelp',TRUE).'-'.date('dmYhm').'-SuratLamaran.pdf';
		}

		if(!empty($_FILES['fu_drh']['name'])) {
			$this->load->library('upload',$config2,'filedrh'); //buat custom object filedrh
			$this->filedrh->initialize($config2);
			$this->filedrh->do_upload('fu_drh');			
     		$file2loc = 'lampiran/file_pelamar/';
			$filename2 = $this->input->post('tbnotelp',TRUE).'-'.date('dmYhm').'-DaftarRiwayatHidup.pdf';
		}

		if(!empty($_FILES['fu_foto']['name'])) {
			$this->load->library('upload',$config3,'filepasfoto'); //buat custom object filepasfoto
			$this->filepasfoto->initialize($config3);
			$this->filepasfoto->do_upload('fu_foto');			
     		$file3loc = 'lampiran/file_pelamar/';
			$filename3 = $this->input->post('tbnotelp',TRUE).'-'.date('dmYhm').'-PasFoto.jpeg';
		}

		if(!empty($_FILES['fu_skck']['name'])) {
			$this->load->library('upload',$config4,'fileskck'); //buat custom object fileskck
			$this->fileskck->initialize($config4);
			$this->fileskck->do_upload('fu_skck');			
     		$file4loc = 'lampiran/file_pelamar/';
			$filename4 = $this->input->post('tbnotelp',TRUE).'-'.date('dmYhm').'-skck.pdf';
		}

		if(!empty($_FILES['fu_ktp']['name'])) {
			$this->load->library('upload',$config5,'filektp'); //buat custom object filektp
			$this->filektp->initialize($config5);
			$this->filektp->do_upload('fu_ktp');			
     		$file5loc = 'lampiran/file_pelamar/';
			$filename5 = $this->input->post('tbnotelp',TRUE).'-'.date('dmYhm').'-ktp.pdf';
		}

		if(!empty($_FILES['fu_ak']['name'])) {
			$this->load->library('upload',$config6,'fileak'); //buat custom object fileak
			$this->fileak->initialize($config6);
			$this->fileak->do_upload('fu_ak');			
     		$file6loc = 'lampiran/file_pelamar/';
			$filename6 = $this->input->post('tbnotelp',TRUE).'-'.date('dmYhm').'-AkteKelahiran.pdf';
		}

		if(!empty($_FILES['fu_kk']['name'])) {
			$this->load->library('upload',$config7,'filekk'); //buat custom object filekk
			$this->filekk->initialize($config7);
			$this->filekk->do_upload('fu_kk');			
     		$file7loc = 'lampiran/file_pelamar/';
			$filename7 = $this->input->post('tbnotelp',TRUE).'-'.date('dmYhm').'-KK.pdf';
		}

		if(!empty($_FILES['fu_it']['name'])) {
			$this->load->library('upload',$config8,'fileijazah'); //buat custom object fileijazah
			$this->fileijazah->initialize($config8);
			$this->fileijazah->do_upload('fu_it');			
     		$file8loc = 'lampiran/file_pelamar/';
			$filename8 = $this->input->post('tbnotelp',TRUE).'-'.date('dmYhm').'-ijazah.pdf';
		}

		if(!empty($_FILES['fu_tnpt']['name'])) {
			$this->load->library('upload',$config9,'filetranskripn'); //buat custom object filetranskripn
			$this->filetranskripn->initialize($config9);
			$this->filetranskripn->do_upload('fu_tnpt');			
     		$file9loc = 'lampiran/file_pelamar/';
			$filename9 = $this->input->post('tbnotelp',TRUE).'-'.date('dmYhm').'-transkripnilai.pdf';
		}

		if(!empty($_FILES['fu_npwp']['name'])) {
			$this->load->library('upload',$config10,'filenpwp'); //buat custom object filenpwp
			$this->filenpwp->initialize($config10);
			$this->filenpwp->do_upload('fu_npwp');			
     		$file10loc = 'lampiran/file_pelamar/';
			$filename10 = $this->input->post('tbnotelp',TRUE).'-'.date('dmYhm').'-npwp.pdf';
		}

		if(!empty($_FILES['fu_htk']['name'])) {
			$this->load->library('upload',$config11,'filehtk'); //buat custom object filehtk
			$this->filehtk->initialize($config11);
			$this->filehtk->do_upload('fu_htk');			
     		$file11loc = 'lampiran/file_pelamar/';
			$filename11 = $this->input->post('tbnotelp',TRUE).'-'.date('dmYhm').'-hasiltestkesehatan.pdf';
		}

 		$data = array(
 			'nama_pelamar' => $this->input->post('tbnamapelamar',TRUE),
 			'no_telp' => $this->input->post('tbnotelp',TRUE),
 			'email' => $this->input->post('tbemail',TRUE),
			'file_suratlamaran' => $file1loc.$filename1,
			'file_daftarriwayathidup' => $file2loc.$filename2,
			'file_photo' => $file3loc.$filename3,
			'file_skck' => $file4loc.$filename4,
			'file_ktp' => $file5loc.$filename5,
			'file_aktekelahiran' => $file6loc.$filename6,
			'file_kk' => $file7loc.$filename7,
			'file_ijazah' => $file8loc.$filename8,
			'file_transkripnilai' => $file9loc.$filename9,
			'file_npwp' => $file10loc.$filename10,
			'file_hasilkesehatan' => $file11loc.$filename11,
			'id_careerposts' => $this->input->post('tbidcareerpost',TRUE),			
		);


        $this->Career_model->insert('tbl_pelamar',$data);
        $data['title'] = 'Berkas Submitted - Loker Mandom';
		$this->load->view('visitor/header',$data);
		$this->load->view('visitor/submitsuccess');
		$this->load->view('visitor/footer');
        
	}

	public function detail($id)
	{
		$row = $this->Career_model->get_by_id($id);
        if ($row) {
            $data = array(
            	'action' => site_url('career/submit_berkas'),
				'id_form' => $row->id_form,
				'tpk' => $row->tpk,
				'id_dept' => $row->nama_dept,
				'tanggal_penempatan' => $row->tanggal_penempatan,
				'jks' => $row->jks,
				'id_posisi' => $row->nama_posisi,
				'jenis_kelamin' => $row->jenis_kelamin,
				'batas_usia' => $row->batas_usia,
				'id_tingkat_pendidikan' => $row->tingkat_pendidikan,
				'id_jurusfakult' => $row->fakultas,
				'sp_keahlian' => $row->sp_keahlian,
				'pengalaman_kerja' => $row->pengalaman_kerja,
				'id_sk' => $row->nama_status_karyawan,
				'estimasi_gaji' => $row->estimasi_gaji,
				'lptj' => $row->lptj,
				'dp_sot' => $row->dp_sot,
				'dp_jdesk' => $row->dp_jdesk,
				'catatan' => $row->catatan,
				'karyawan_out' => $row->karyawan_out,
				'last_update' => $row->last_update,
				'tanggal_pengajuan' => $row->tanggal_pengajuan,
				'diajukanoleh' => $row->diajukanoleh,
				'priority_id' => $row->prioritas,
				'status_pengajuan' => $row->status_pengajuan,
				'keterangan' => $row->keterangan,
				'tandatanganhrga' => $row->tandatanganhrga,
				'tandatangandirektur' => $row->tandatangandirektur,
				'id_careerposts' => $row->id_careerposts,
				'infotambahan' => $row->posts,
				'tipe_pekerjaan' => $row->tipe_pekerjaan,
        		'lokasi' => $row->lokasi,
		    );
			$this->load->view('visitor/detail_career',$data);
		}else{
			echo "No Data";
		}
	}

	function detail_job($id)
	{
		$row = $this->Career_model->get_by_id($id);
        if ($row) {
            $data = array(
            	'action' => site_url('career/submit_berkas'),
				'id_form' => $row->id_form,
				'tpk' => $row->tpk,
				'id_dept' => $row->nama_dept,
				'tanggal_penempatan' => $row->tanggal_penempatan,
				'jks' => $row->jks,
				'id_posisi' => $row->nama_posisi,
				'jenis_kelamin' => $row->jenis_kelamin,
				'batas_usia' => $row->batas_usia,
				'id_tingkat_pendidikan' => $row->tingkat_pendidikan,
				'id_jurusfakult' => $row->fakultas,
				'sp_keahlian' => $row->sp_keahlian,
				'pengalaman_kerja' => $row->pengalaman_kerja,
				'id_sk' => $row->nama_status_karyawan,
				'estimasi_gaji' => $row->estimasi_gaji,
				'lptj' => $row->lptj,
				'dp_sot' => $row->dp_sot,
				'dp_jdesk' => $row->dp_jdesk,
				'catatan' => $row->catatan,
				'karyawan_out' => $row->karyawan_out,
				'last_update' => $row->last_update,
				'tanggal_pengajuan' => $row->tanggal_pengajuan,
				'diajukanoleh' => $row->diajukanoleh,
				'priority_id' => $row->prioritas,
				'status_pengajuan' => $row->status_pengajuan,
				'keterangan' => $row->keterangan,
				'tandatanganhrga' => $row->tandatanganhrga,
				'tandatangandirektur' => $row->tandatangandirektur,
				'id_careerposts' => $row->id_careerposts,
				'infotambahan' => $row->posts,
				'tipe_pekerjaan' => $row->tipe_pekerjaan,
        		'lokasi' => $row->lokasi,
        		'title' => 'Detail Lowongan Kerja'
		    );
		    $this->load->view('visitor/header',$data);
			$this->load->view('visitor/detail_career');
			$this->load->view('visitor/footer');
		}else{
			echo "No Data";
		}
	}
}
