
        <h2 style="margin-top:0px">DETAIL PENGAJUAN KARYAWAN</h2>
        <table class="table">
	    <tr><td>Tujuan Permintaan Karyawan</td><td><?php echo $tpk; ?></td></tr>
	    <tr><td>Departemen</td><td><?php echo $id_dept; ?></td></tr>
	    <tr><td>Tanggal Penempatan</td><td><?php echo $tanggal_penempatan; ?></td></tr>
	    <tr><td>Jumlah Kebutuhan SDM</td><td><?php echo $jks; ?></td></tr>
	    <tr><td>Posisi</td><td><?php echo $id_posisi; ?></td></tr>
	    <tr><td>Ketentuan Jenis Kelamin</td><td><?php echo $jenis_kelamin; ?></td></tr>
	    <tr><td>Batas Usia</td><td><?php echo $batas_usia; ?></td></tr>
	    <tr><td>Tingkat Pendidikan</td><td><?php echo $id_tingkat_pendidikan; ?></td></tr>
	    <tr><td>Jurusan/Fakultas</td><td><?php echo $id_jurusfakult; ?></td></tr>
	    <tr><td>Syarat Keahlian</td><td><?php echo $sp_keahlian; ?></td></tr>
	    <tr><td>Pengalaman Kerja</td><td><?php echo $pengalaman_kerja; ?></td></tr>
	    <tr><td>Status Kerja</td><td><?php echo $id_sk; ?></td></tr>
	    <tr><td>Estimasi Gaji</td><td><?php echo $estimasi_gaji; ?></td></tr>
	    <tr><td>Lingkup/Tanggung Jawab Kerja</td><td><?php echo $lptj; ?></td></tr>
	    <tr><td>File SO Terbaru</td><td><a href="<?php if($dp_sot == 'NULLNULL'){echo '#';}else{echo base_url().$dp_sot;} ?>"><?php if($dp_sot == 'NULLNULL'){echo 'Tidak Tersedia';}else{echo $dp_sot;} ?></a></td></tr>
	    <tr><td>File Job Description</td><td><a href="<?php if($dp_jdesk == 'NULLNULL'){echo '#';}else{echo base_url().$dp_jdesk;} ?>"><?php if($dp_jdesk == 'NULLNULL'){ echo 'Tidak Tersedia';}else{echo $dp_jdesk;} ?></a></td></tr>
	    <tr><td>Catatan</td><td><?php echo $catatan; ?></td></tr>
	    <tr><td>Karyawan Out</td><td><?php echo $karyawan_out; ?></td></tr>
	    <tr><td>Tanggal Pengajuan</td><td><?php echo $tgl_pengajuan; ?></td></tr>
	    <tr><td>Diajukan Oleh</td><td><?php echo $diajukanoleh; ?></td></tr>
	    <tr><td>Prioritas</td><td><?php echo $priority_id; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('pengajuan_karyawan') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>