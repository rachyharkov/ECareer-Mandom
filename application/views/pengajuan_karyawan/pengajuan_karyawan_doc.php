<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-warning box-solid">
    
                    <div class="box-header">
                        <h3 class="box-title">KELOLA POSISI</h3>
                    </div>        
                    <div class="box-body">
                        <div class='row'>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
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
        <h2>Pengajuan_karyawan List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
                <th>ID Form Pengajuan</th>
				<th>Tpk</th>
				<th>Departemen</th>
				<th>Posisi</th>
				<th>Tgl Pengajuan</th>
				<th>Diajukanoleh</th>
				<th>Prioritas</th>
		
            </tr><?php
            foreach ($pengajuan_karyawan_data as $pengajuan_karyawan)
            {
                ?>
            <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $pengajuan_karyawan->id_form ?></td>
		      <td><?php echo $pengajuan_karyawan->tpk ?></td>
		      <td><?php echo $pengajuan_karyawan->id_dept ?></td>
		      <td><?php echo $pengajuan_karyawan->id_posisi ?></td>
		      <td><?php echo $pengajuan_karyawan->tgl_pengajuan ?></td>
		      <td><?php echo $pengajuan_karyawan->diajukanoleh ?></td>
		      <td><?php echo $pengajuan_karyawan->priority_id ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>