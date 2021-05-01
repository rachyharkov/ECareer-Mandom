<div class="container-fluid">

        <h2 style="margin-top:0px">Tbl_pelamar Read</h2>
        <table class="table">
	    <tr><td>Nama Pelamar</td><td><?php echo $nama_pelamar; ?></td></tr>
	    <tr><td>No Telp</td><td><?php echo $no_telp; ?></td></tr>
	    <tr><td>Email</td><td><?php echo $email; ?></td></tr>
		</table>
		<h4>Lampiran</h4>
			<div class="row show-grid" style="text-align: center;">
				<div class="col-sm-2" style="position: relative;">
					<?php if (!$file_suratlamaran) {
						?>
							<div class="notavailablefile" style="position: absolute;
		    position: absolute;
		    background: #bbbbbb9c;
		    height: 100%;
		    width: 100%;
		    top: 0;
		    left: 0;
		    color: white;
		    line-height: 8;">
							Tidak Dilampirkan	
							</div>
						<?php
					} ?>
					<p>Surat Lamaran</p>
					<a href="<?php echo base_url().$file_suratlamaran; ?>"><i class="fa fa-file-pdf-o" style="font-size: 56px;"></i></a>
				</div>
				<div class="col-sm-2" style="position: relative;">
					<?php if (!$file_daftarriwayathidup) {
						?>
							<div class="notavailablefile" style="position: absolute;
		    position: absolute;
		    background: #bbbbbb9c;
		    height: 100%;
		    width: 100%;
		    top: 0;
		    left: 0;
		    color: white;
		    line-height: 8;">
							Tidak Dilampirkan	
							</div>
						<?php
					} ?>
					<p>Daftar Riwayat Hidup</p>
					<a href="<?php echo base_url().$file_daftarriwayathidup; ?>"><i class="fa fa-file-pdf-o" style="font-size: 56px;"></i></a>
				</div>
				<div class="col-sm-2" style="position: relative;">
					<?php if (!$file_photo) {
						?>
							<div class="notavailablefile" style="position: absolute;
		    position: absolute;
		    background: #bbbbbb9c;
		    height: 100%;
		    width: 100%;
		    top: 0;
		    left: 0;
		    color: white;
		    line-height: 8;">
							Tidak Dilampirkan	
							</div>
						<?php
					} ?>
					<p>Pas Foto</p>
					<a href="<?php echo base_url().$file_photo; ?>"><i class="fa fa-photo" style="font-size: 56px;"></i></a>
				</div>
				<div class="col-sm-2" style="position: relative;">
					<?php if (!$file_skck) {
						?>
							<div class="notavailablefile" style="position: absolute;
		    position: absolute;
		    background: #bbbbbb9c;
		    height: 100%;
		    width: 100%;
		    top: 0;
		    left: 0;
		    color: white;
		    line-height: 8;">
							Tidak Dilampirkan	
							</div>
						<?php
					} ?>
					<p>SKCK</p>
					<a href="<?php echo base_url().$file_skck; ?>"><i class="fa fa-file-pdf-o" style="font-size: 56px;"></i></a>
				</div>
				<div class="col-sm-2" style="position: relative;">
					<?php if (!$file_ktp) {
						?>
							<div class="notavailablefile" style="position: absolute;
		    position: absolute;
		    background: #bbbbbb9c;
		    height: 100%;
		    width: 100%;
		    top: 0;
		    left: 0;
		    color: white;
		    line-height: 8;">
							Tidak Dilampirkan	
							</div>
						<?php
					} ?>
					<p>KTP</p>
					<a href="<?php echo base_url().$file_ktp; ?>"><i class="fa fa-file-pdf-o" style="font-size: 56px;"></i></a>
				</div>
				<div class="col-sm-2" style="position: relative;">
					<?php if (!$file_aktekelahiran) {
						?>
							<div class="notavailablefile" style="position: absolute;
		    position: absolute;
		    background: #bbbbbb9c;
		    height: 100%;
		    width: 100%;
		    top: 0;
		    left: 0;
		    color: white;
		    line-height: 8;">
							Tidak Dilampirkan	
							</div>
						<?php
					} ?>
					<p>Akte Kelahiran</p>
					<a href="<?php echo base_url().$file_aktekelahiran; ?>"><i class="fa fa-file-pdf-o" style="font-size: 56px;"></i></a>
				</div>
				<div class="col-sm-2" style="position: relative;">
					<?php if (!$file_kk) {
						?>
							<div class="notavailablefile" style="position: absolute;
		    position: absolute;
		    background: #bbbbbb9c;
		    height: 100%;
		    width: 100%;
		    top: 0;
		    left: 0;
		    color: white;
		    line-height: 8;">
							Tidak Dilampirkan	
							</div>
						<?php
					} ?>
					<p>Kartu Keluarga</p>
					<a href="<?php echo base_url().$file_kk; ?>"><i class="fa fa-file-pdf-o" style="font-size: 56px;"></i></a>
				</div>
				<div class="col-sm-2" style="position: relative;">
					<?php if (!$file_ijazah) {
						?>
							<div class="notavailablefile" style="position: absolute;
		    position: absolute;
		    background: #bbbbbb9c;
		    height: 100%;
		    width: 100%;
		    top: 0;
		    left: 0;
		    color: white;
		    line-height: 8;">
							Tidak Dilampirkan	
							</div>
						<?php
					} ?>
					<p>Ijazah Terakhir</p>
					<a href="<?php echo base_url().$file_ijazah; ?>"><i class="fa fa-file-pdf-o" style="font-size: 56px;"></i></a>
				</div>
				<div class="col-sm-2" style="position: relative;">
					<?php if (!$file_transkripnilai) {
						?>
							<div class="notavailablefile" style="position: absolute;
		    position: absolute;
		    background: #bbbbbb9c;
		    height: 100%;
		    width: 100%;
		    top: 0;
		    left: 0;
		    color: white;
		    line-height: 8;">
							Tidak Dilampirkan	
							</div>
						<?php
					} ?>
					<p>Transkrip Nilai</p>
					<a href="<?php echo base_url().$file_transkripnilai; ?>"><i class="fa fa-file-pdf-o" style="font-size: 56px;"></i></a>
				</div>
				<div class="col-sm-2" style="position: relative;">
					<?php if (!$file_npwp) {
						?>
							<div class="notavailablefile" style="position: absolute;
		    position: absolute;
		    background: #bbbbbb9c;
		    height: 100%;
		    width: 100%;
		    top: 0;
		    left: 0;
		    color: white;
		    line-height: 8;">
							Tidak Dilampirkan	
							</div>
						<?php
					} ?>
					<p>Ijazah Terakhir</p>
					<a href="<?php echo base_url().$file_npwp; ?>"><i class="fa fa-file-pdf-o" style="font-size: 56px;"></i></a>
				</div>
				<div class="col-sm-2" style="position: relative;">
					<?php if (!$file_hasilkesehatan) {
						?>
							<div class="notavailablefile" style="position: absolute;
		    position: absolute;
		    background: #bbbbbb9c;
		    height: 100%;
		    width: 100%;
		    top: 0;
		    left: 0;
		    color: white;
		    line-height: 8;">
							Tidak Dilampirkan	
							</div>
						<?php
					} ?>
					<p>Ijazah Terakhir</p>
					<a href="<?php echo base_url().$file_hasilkesehatan; ?>"><i class="fa fa-file-pdf-o" style="font-size: 56px;"></i></a>
				</div>
			</div>

<a href="<?php echo site_url('data_pelamar') ?>" class="btn btn-default">Cancel</a>
</div>
