
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
<?php
if ($status_pengajuan == "Pending") {
    ?>
        <div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <?php
            if ($this->fungsi->user_login()->id_dept == 1) {
                if ($tandatanganhrga == 'NA') {
                    ?>
                    <i class="fa fa-warning"></i> Pengajuan sedang dalam pemeriksan oleh HR/GA, perubahan terakhir terjadi pada <?php echo $last_update; ?>
                    <?php
                } else {
                    ?>
                    <i class="fa fa-warning"></i> Pengajuan telah disetujui HR/GA dan membutuhkan persetujuan anda (Direktur), perubahan terakhir terjadi pada <?php echo $last_update; ?>
                    <?php
                }
            } else if($this->fungsi->user_login()->id_dept == 2) {
                if ($tandatanganhrga != 'NA') {
                    ?>
                    <i class="fa fa-warning"></i> Pengajuan sedang dalam pemeriksan oleh Direktur, perubahan terakhir terjadi pada <?php echo $last_update; ?>
                    <?php
                } else {
                    ?>
                    <i class="fa fa-warning"></i> Pengajuan dari departemen <?php echo $id_dept; ?> membutuhkan persetujuan anda (HR/GA) sebelum diteruskan ke Direktur, perubahan terakhir terjadi pada <?php echo $last_update; ?>
                    <?php
                }
            } else {
                ?>
                <i class="fa fa-warning"></i> Pengajuan sedang dalam pemeriksan, perubahan terakhir terjadi pada <?php echo $last_update; ?>
                <?php
            }
            ?>
        </div>
    <?php 
} else if ($status_pengajuan == "Diterima") {
    ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <i class="fa fa-check-circle"></i> Pengajuan disetujui, silahkan kelola detail loker yang terposting disini.
        </div>
    <?php
} else {
    ?>
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <i class="fa fa-times-circle"></i> Pengajuan ditolak, <?php echo $keterangan; ?>
        </div>
    <?php
}
?>

<input type="hidden" name="id_formnya" id="id_formnya" value="<?php echo $id_form ?>">
<table class="table">
    <tr><td style="width: 40%;">Tujuan Permintaan Karyawan</td><td><?php echo $tpk; ?></td></tr>
    <tr><td style="width: 40%;">Oleh Departemen</td><td><?php echo $id_dept; ?></td></tr>
    <tr><td style="width: 40%;">Tanggal Penempatan</td><td><?php echo $tanggal_penempatan; ?></td></tr>
    <tr><td style="width: 40%;">Jumlah Kebutuhan SDM</td><td><?php echo $jks; ?></td></tr>
    <tr><td style="width: 40%;">Posisi</td><td><?php echo $id_posisi; ?></td></tr>
    <tr><td style="width: 40%;">Ketentuan Jenis Kelamin</td><td><?php echo $jenis_kelamin; ?></td></tr>
    <tr><td style="width: 40%;">Batas Usia</td><td><?php echo $batas_usia; ?></td></tr>
    <tr><td style="width: 40%;">Tingkat Pendidikan</td><td><?php echo $id_tingkat_pendidikan; ?></td></tr>
    <tr><td style="width: 40%;">Jurusan/Fakultas</td><td><?php echo $id_jurusfakult; ?></td></tr>
    <tr><td style="width: 40%;">Syarat Keahlian</td><td><?php echo $sp_keahlian; ?></td></tr>
    <tr><td style="width: 40%;">Pengalaman Kerja</td><td><?php echo $pengalaman_kerja; ?></td></tr>
    <tr><td style="width: 40%;">Status Kerja</td><td><?php echo $id_sk; ?></td></tr>
    <tr><td style="width: 40%;">Estimasi Gaji</td><td><?php echo $estimasi_gaji; ?></td></tr>
    <tr><td style="width: 40%;">Lingkup/Tanggung Jawab Kerja</td><td><?php echo $lptj; ?></td></tr>
    <tr><td style="width: 40%;">Catatan</td><td><?php echo $catatan; ?></td></tr>
    <tr><td style="width: 40%;">Karyawan Out</td><td><?php echo $karyawan_out; ?></td></tr>
    <tr><td style="width: 40%;">Tanggal Pengajuan</td><td><?php echo $tanggal_pengajuan; ?></td></tr>
    <tr><td style="width: 40%;">Diajukan Oleh</td><td><?php echo $diajukanoleh; ?></td></tr>
    <tr><td style="width: 40%;">Prioritas</td><td><?php echo $priority_id; ?></td></tr>
    <tr>
    	<td>
    		<h4>Lampiran</h4>
    		<tr>
    			<td style="width: 40%;">File SO Terbaru</td>
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
    			<td style="width: 40%;">File Job Desk Terbaru</td>
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
            <h4>Status Persetujuan</h4>
        </td>
    </tr>
    <tr>
        <td>HR/GA</td>
        <td><?php if($tandatanganhrga == 'NA')
            {
                ?>
                <span class="badge bg-warning" style="padding: 6px;margin-top: -9px;"><i class="fa fa-clock-o"></i> Pending</span>                
                <?php
            } else if ($tandatanganhrga == "Ditolak"){
                ?>
                <span class="badge bg-danger" style="padding: 6px;margin-top: -9px;"><i class="fa fa-times-circle-o"></i> Ditolak</span>                
                <?php
            } else{
                ?>
                <img src="<?php echo base_url().$tandatanganhrga ?>" width="120">
                <?php
            } ?>
        </td>
    </tr>
    <tr>
        <td>Direktur</td>
        <td><?php if($tandatangandirektur == 'NA')
            {
                ?>
                <span class="badge bg-warning" style="padding: 6px;margin-top: -9px;"><i class="fa fa-clock-o"></i> Pending</span>                
                <?php
            } else if ($tandatangandirektur == "Ditolak"){
                ?>
                <span class="badge bg-danger" style="padding: 6px;margin-top: -9px;"><i class="fa fa-times-circle-o"></i> Ditolak</span>                
                <?php
            } else {
                ?>
                <img src="<?php echo base_url().$tandatangandirektur ?>" width="120">
                <?php
            } ?>
        </td>
    </tr>
    <tr>
    	<td colspan="3">		
    	   <?php
           if ($this->fungsi->user_login()->id_dept == 1) {
               ?>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#small-modal" <?php if ($tandatanganhrga == 'NA' || $status_pengajuan == "Ditolak" || $tandatangandirektur != "NA") {echo "disabled";} ?>>Approve</button>
                    <button type="button" id="declinedbtn" href="<?php echo site_url('pengajuan_karyawan/declined') ?>" class="btn btn-danger" <?php if ($tandatanganhrga == 'NA' || $status_pengajuan == "Ditolak" || $tandatangandirektur != "NA") {echo "disabled";} ?>>Declined</button>	
               <?php
           } else if ($this->fungsi->user_login()->id_dept == 2) {
               ?>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#small-modal" <?php if ($tandatanganhrga != 'NA' || $status_pengajuan == "Ditolak") {echo "disabled";} ?>>Approve</button>
                    <button type="button" id="declinedbtn" href="<?php echo site_url('pengajuan_karyawan/declined') ?>" class="btn btn-danger" <?php if ($tandatanganhrga != 'NA' || $status_pengajuan == "Ditolak") {echo "disabled";} ?>>Declined</button>
               <?php
           }
           ?>
    		<a href="<?php echo site_url('pengajuan_karyawan') ?>" class="btn btn-default">Kembali</a>
            <form action="<?php echo base_url()."pengajuan_karyawan/export_detailpengajuan_toword"; ?>" role="form" method="post" enctype="multipart/form-data" autocomplete="off" style="float: right;">
                <input type="hidden" name="id_formnyasatu" id="id_formnyasatu" value="<?php echo $id_form ?>">   
                <button class="btn btn-primary" id="exporttoworddetailpengajuanbtn" formtarget="_blank"><i class='fa fa-file-word-o'></i> Print</button>
            </form>
    	</td>
    </tr>
</table>