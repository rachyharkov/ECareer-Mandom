<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Pengajuan_karyawan Read</h2>
        <table class="table">
	    <tr><td>Tpk</td><td><?php echo $tpk; ?></td></tr>
	    <tr><td>Id Dept</td><td><?php echo $id_dept; ?></td></tr>
	    <tr><td>Tanggal Penempatan</td><td><?php echo $tanggal_penempatan; ?></td></tr>
	    <tr><td>Jks</td><td><?php echo $jks; ?></td></tr>
	    <tr><td>Id Posisi</td><td><?php echo $id_posisi; ?></td></tr>
	    <tr><td>Jenis Kelamin</td><td><?php echo $jenis_kelamin; ?></td></tr>
	    <tr><td>Batas Usia</td><td><?php echo $batas_usia; ?></td></tr>
	    <tr><td>Id Tingkat Pendidikan</td><td><?php echo $id_tingkat_pendidikan; ?></td></tr>
	    <tr><td>Id Jurusfakult</td><td><?php echo $id_jurusfakult; ?></td></tr>
	    <tr><td>Sp Keahlian</td><td><?php echo $sp_keahlian; ?></td></tr>
	    <tr><td>Pengalaman Kerja</td><td><?php echo $pengalaman_kerja; ?></td></tr>
	    <tr><td>Id Sk</td><td><?php echo $id_sk; ?></td></tr>
	    <tr><td>Estimasi Gaji</td><td><?php echo $estimasi_gaji; ?></td></tr>
	    <tr><td>Lptj</td><td><?php echo $lptj; ?></td></tr>
	    <tr><td>Dp Sot</td><td><?php echo $dp_sot; ?></td></tr>
	    <tr><td>Dp Jdesk</td><td><?php echo $dp_jdesk; ?></td></tr>
	    <tr><td>Catatan</td><td><?php echo $catatan; ?></td></tr>
	    <tr><td>Karyawan Out</td><td><?php echo $karyawan_out; ?></td></tr>
	    <tr><td>Tgl Pengajuan</td><td><?php echo $tgl_pengajuan; ?></td></tr>
	    <tr><td>Diajukanoleh</td><td><?php echo $diajukanoleh; ?></td></tr>
	    <tr><td>Priority Id</td><td><?php echo $priority_id; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('pengajuan_karyawan') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>