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
                padding: 2px;
            }
        </style>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    </head>
    <body>
		<div id="page-content" style="border: 5px double #020103; margin: 10px; padding: 13px; width: 600px;">
            <div>
                <table class="word-table" style="margin-bottom: 10px;" >
                  <tr>
                    <td colspan="2" rowspan="4" style="text-align: center;"><img src="<?php echo base_url()."assets/img/logomandom.png" ?>" width="90"></td>
                    <td align="center" rowspan="4" style="width: 47%;"><h5 style="font-weight: bold;">FORMULIR</h5><h5 style="font-weight: bold;">CHECKLIST KELENGKAPAN DATA TENAGA KERJA</h5></td>
                    <td colspan="4" style="font-size: 10px; padding: 0;">Form No &emsp;&nbsp;&nbsp;: <?php echo 'FR/PD/ODTM-00'. $id_pelamar; ?></td>
                  </tr>
                  <tr>
                    <td colspan="4" style="font-size: 10px; padding: 0;">Tgl Berlaku &nbsp;: </td>
                  </tr>
                  <tr>
                    <td colspan="4" style="font-size: 10px; padding: 0;">No. Revisi &nbsp;&nbsp;: -</td>
                  </tr>
                  <tr>
                    <td colspan="4" style="font-size: 10px; padding: 0;">Halaman &nbsp;&nbsp;&nbsp;&nbsp;:1 dari 1</td>
                  </tr>
                </table>
            </div>
            <div>
                <table class="word-table" style="font-size: 12px; border: 0px; width: 100%; margin: auto;">
                    <tr style="font-size: 14px;
    font-weight: bold;
    text-align: center;">
                        <td height="25" width="8" rowspan="2">No</td>
                        <td rowspan="2">DATA</td>
                        <td colspan="2">CHECK</td>
                        <td rowspan="2">Keterangan</td>
                    </tr>
                    <tr style="font-size: 14px;
    font-weight: bold;
    text-align: center;">
                    	<td>Ada</td>
                    	<td>Tidak</td>
                    </tr>
                    <tr>
                    	<td>1</td>
                    	<td>Form Data Pribadi</td>
                    	<td style="text-align: center;"></td>
                    	<td style="text-align: center;"></td>
                    	<td></td>
                    </tr>
                    <tr>
                    	<td>2</td>
                    	<td>Surat Lamaran</td>
                    	<td style="text-align: center;"><?php echo $file_suratlamaran ? '<i class="fas fa-check" style="margin: auto;"></i>':''; ?></td>
                    	<td style="text-align: center;"><?php echo !$file_suratlamaran ? '<i class="fas fa-check" style="margin: auto;"></i>':''; ?></td>
                    	<td></td>
                    </tr>
                    <tr>
                    	<td>3</td>
                    	<td>Daftar Riwayat Hidup</td>
                    	<td style="text-align: center;"><?php echo $file_daftarriwayathidup ? '<i class="fas fa-check" style="margin: auto;"></i>':''; ?></td>
                    	<td style="text-align: center;"><?php echo !$file_daftarriwayathidup ? '<i class="fas fa-check" style="margin: auto;"></i>':''; ?></td>
                    	<td></td>
                    </tr>
                    <tr>
                    	<td>4</td>
                    	<td>Photo 4x6 berwarna</td>
                    	<td style="text-align: center;"><?php echo $file_photo ? '<i class="fas fa-check" style="margin: auto;"></i>':''; ?></td>
                    	<td style="text-align: center;"><?php echo !$file_photo ? '<i class="fas fa-check" style="margin: auto;"></i>':''; ?></td>
                    	<td></td>
                    </tr>
                    <tr>
                    	<td>5</td>
                    	<td>Surat Keterangan Catatan Kepolisian</td>
                    	<td style="text-align: center;"><?php echo $file_skck ? '<i class="fas fa-check" style="margin: auto;"></i>':''; ?></td>
                    	<td style="text-align: center;"><?php echo !$file_skck ? '<i class="fas fa-check" style="margin: auto;"></i>':''; ?></td>
                    	<td></td>
                    </tr>
                    <tr>
                    	<td>6</td>
                    	<td style="font-style: italic;"><b>KTP (copy)*</b></td>
                    	<td style="text-align: center;"><?php echo $file_ktp ? '<i class="fas fa-check" style="margin: auto;"></i>':''; ?></td>
                    	<td style="text-align: center;"><?php echo !$file_ktp ? '<i class="fas fa-check" style="margin: auto;"></i>':''; ?></td>
                    	<td></td>
                    </tr>
                    <tr>
                    	<td>7</td>
                    	<td style="font-style: italic;"><b>Akte Kelahiran (copy)*</b></td>
                    	<td style="text-align: center;"><?php echo $file_aktekelahiran ? '<i class="fas fa-check" style="margin: auto;"></i>':''; ?></td>
                    	<td style="text-align: center;"><?php echo !$file_aktekelahiran ? '<i class="fas fa-check" style="margin: auto;"></i>':''; ?></td>
                    	<td></td>
                    </tr>
                    <tr>
                    	<td>8</td>
                    	<td style="font-style: italic;"><b>Kartu Keluarga (copy)*</b></td>
                    	<td style="text-align: center;"><?php echo $file_kk ? '<i class="fas fa-check" style="margin: auto;"></i>':''; ?></td>
                    	<td style="text-align: center;"><?php echo !$file_kk ? '<i class="fas fa-check" style="margin: auto;"></i>':''; ?></td>
                    	<td></td>
                    </tr>
                    <tr>
                    	<td>9</td>
                    	<td style="font-style: italic;"><b>Ijazah pendidikan terakhir (copy)*</b></td>
                    	<td style="text-align: center;"><?php echo $file_ijazah ? '<i class="fas fa-check" style="margin: auto;"></i>':''; ?></td>
                    	<td style="text-align: center;"><?php echo !$file_ijazah ? '<i class="fas fa-check" style="margin: auto;"></i>':''; ?></td>
                    	<td></td>
                    </tr>
                    <tr>
                    	<td>10</td>
                    	<td style="font-style: italic;"><b>Transkrip nilai pendidikan terakhir (copy)*</b></td>
                    	<td style="text-align: center;"><?php echo $file_transkripnilai ? '<i class="fas fa-check" style="margin: auto;"></i>':''; ?></td>
                    	<td style="text-align: center;"><?php echo !$file_transkripnilai ? '<i class="fas fa-check" style="margin: auto;"></i>':''; ?></td>
                    	<td></td>
                    </tr>
                    <tr>
                    	<td>11</td>
                    	<td style="font-style: italic;"><b>NPWP (copy)*</b></td>
                    	<td style="text-align: center;"><?php echo $file_npwp ? '<i class="fas fa-check" style="margin: auto;"></i>':''; ?></td>
                    	<td style="text-align: center;"><?php echo !$file_npwp ? '<i class="fas fa-check" style="margin: auto;"></i>':''; ?></td>
                    	<td></td>
                    </tr>
                    <tr>
                    	<td>12</td>
                    	<td style="font-style: italic;">Hasil Test Kesehatan</td>
                    	<td style="text-align: center;"><?php echo $file_hasilkesehatan ? '<i class="fas fa-check" style="margin: auto;"></i>':''; ?></td>
                    	<td style="text-align: center;"><?php echo !$file_hasilkesehatan ? '<i class="fas fa-check" style="margin: auto;"></i>':''; ?></td>
                    	<td></td>
                    </tr>
                </table>
                <p style="font-style: italic; font-size: 9px;">(*) membawa dan menunjukan aslinya</p>
            </div>
            <div style="display: grid; grid-template-columns: 1fr 0.4fr; grid-template-rows: auto;">
              <p style="font-size: 10px;">
                Dokumen telah dicek dan sesuai dengan aslinya <i class="far fa-square" style="font-size: 22px; margin-left: 1em;"></i>
              </p>
              <div style="font-size: 11px;">
                <p>_________,______________</p>
                <p>Yang Memverifikasi,</p>
                <p style="margin-top: 4em;">_____________________________</p>
              </div>
            </div>
        </div>	
    </body>
</html>