
<h2 style="margin-top:0px">PENGAJUAN <?php echo $id_form; ?> <?php
	if ($status_pengajuan == "Pending") {
		?>
			<span class="badge bg-warning" style="padding: 6px;margin-top: -9px;"><i class="fa fa-clock-o"></i> Menunggu Approval</span>
		<?php 
	} else if ($status_pengajuan == "Diterima") {
		?>
			<span class="badge bg-success" style="padding: 6px;margin-top: -9px;"><i class="fa fa-check-circle"></i> Diterima</span>
		<?php
	} else {
		?>
			<span class="badge bg-danger" style="padding: 6px;margin-top: -9px;" data-toggle="popover" data-trigger="hover" title="Alasan" data-content="<?php echo $keterangan ?>"><i class="fa fa-times-circle"></i> Ditolak</span>
		<?php
	}
?> </h2>
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
    <tr><td>Catatan</td><td><?php echo $catatan; ?></td></tr>
    <tr><td>Karyawan Out</td><td><?php echo $karyawan_out; ?></td></tr>
    <tr><td>Tanggal Pengajuan</td><td><?php echo $tgl_pengajuan; ?></td></tr>
    <tr><td>Diajukan Oleh</td><td><?php echo $diajukanoleh; ?></td></tr>
    <tr><td>Prioritas</td><td><?php echo $priority_id; ?></td></tr>
    <tr>
    	<td>
    		<h4>Lampiran</h4>
    		<tr>
    			<td>File SO Terbaru</td>
    			<td>
    				<?php if($dp_sot == 'NULLNULL')
    				{
    					echo 'Tidak dilampirkan';
    				}else{
    					?>
						<a href="<?php echo base_url().$dp_sot; ?>" class="btn btn-primary"><span><i class='fa fa-file-word-o'></i></span><?php echo $dp_sot ?></a>
    					<?php
    				} ?>
    			</td>
			</tr>	
    		<tr>
    			<td>File Job Desk Terbaru</td>
    			<td>
    				<?php if($dp_jdesk == 'NULLNULL')
    				{
    					echo 'Tidak dilampirkan';
    				}else{
    					?>
						<a href="<?php echo base_url().$dp_jdesk; ?>" class="btn btn-primary"><span><i class='fa fa-file-word-o'></i></span><?php echo $dp_jdesk ?></a>
    					<?php
    				} ?>
    			</td>
    		</tr>
    	</td>
    </tr>
    <tr>
    	<td>		
    	   <?php
           if ($this->fungsi->user_login('id_dept') == '1' || $this->fungsi->user_login('id_dept') == '2') {
               ?>
                    <a href="<?php echo site_url('pengajuan_karyawan/approve') ?>" class="btn btn-primary">Approve</a>
                    <a href="<?php echo site_url('pengajuan_karyawan/declined') ?>" class="btn btn-danger">Declined</a>		
               <?php
           }
           ?>
    		<a href="<?php echo site_url('pengajuan_karyawan') ?>" class="btn btn-default">Kembali</a>
    	</td>
    </tr>
</table>