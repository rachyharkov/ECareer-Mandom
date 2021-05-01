<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            .word-table {
                border:1px solid black !important; 
                border-collapse: collapse !important;
                width: 100%;
            }
            .word-table tr th, .word-table tr td{
                border:1px solid black !important; 
                padding: 5px 10px;
            }
        </style>
    </head>
    <body>
        <h2>Tbl_pelamar List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Nama Pelamar</th>
		<th>No Telp</th>
		<th>Email</th>
		<th>File Suratlamaran</th>
		<th>File Daftarriwayathidup</th>
		<th>File Photo</th>
		<th>File Skck</th>
		<th>File Ktp</th>
		<th>File Aktekelahiran</th>
		<th>File Kk</th>
		<th>File Ijazah</th>
		<th>File Transkripnilai</th>
		<th>File Npwp</th>
		<th>File Hasilkesehatan</th>
		<th>Id Careerposts</th>
		
            </tr><?php
            foreach ($data_pelamar_data as $data_pelamar)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $data_pelamar->nama_pelamar ?></td>
		      <td><?php echo $data_pelamar->no_telp ?></td>
		      <td><?php echo $data_pelamar->email ?></td>
		      <td><?php echo $data_pelamar->file_suratlamaran ?></td>
		      <td><?php echo $data_pelamar->file_daftarriwayathidup ?></td>
		      <td><?php echo $data_pelamar->file_photo ?></td>
		      <td><?php echo $data_pelamar->file_skck ?></td>
		      <td><?php echo $data_pelamar->file_ktp ?></td>
		      <td><?php echo $data_pelamar->file_aktekelahiran ?></td>
		      <td><?php echo $data_pelamar->file_kk ?></td>
		      <td><?php echo $data_pelamar->file_ijazah ?></td>
		      <td><?php echo $data_pelamar->file_transkripnilai ?></td>
		      <td><?php echo $data_pelamar->file_npwp ?></td>
		      <td><?php echo $data_pelamar->file_hasilkesehatan ?></td>
		      <td><?php echo $data_pelamar->id_careerposts ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>