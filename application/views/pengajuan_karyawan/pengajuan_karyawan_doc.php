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
        <div style="border: 5px double #020103; margin: 10px; padding: 13px; width: 45%;">
            <div>
                <table class="word-table" style="margin-bottom: 10px">
                  <tr>
                    <td colspan="2" rowspan="4" style="text-align: center;"><img src="<?php echo base_url()."assets/img/logomandom.png" ?>" width="90"></td>
                    <td align="center" rowspan="4" style="width: 47%;"><h5>FORMULIR</h5><h5>PERMINTAAN KARYAWAN BARU</h5></td>
                    <td colspan="4" style="font-size: 10px; padding: 0;">Form No &emsp;&nbsp;&nbsp;: <?php echo $id_form; ?></td>
                  </tr>
                  <tr>
                    <td colspan="4" style="font-size: 10px; padding: 0;">Tgl Berlaku &nbsp;:</td>
                  </tr>
                  <tr>
                    <td colspan="4" style="font-size: 10px; padding: 0;">No. Revisi &nbsp;&nbsp;:</td>
                  </tr>
                  <tr>
                    <td colspan="4" style="font-size: 10px; padding: 0;">Halaman &nbsp;&nbsp;&nbsp;&nbsp;:</td>
                  </tr>
                </table>
            </div>
            <div>
                <table style="font-size: 12px; border: 0px; width: 100%; margin: auto;">
                    <tr>
                        <td style="width: 48%;"><ul style="margin-left: 3vh; padding: 0;"><li style="list-style-type: circle;">Tujuan Permintaan Karyawan</li></ul></td>
                        <td><ul style="margin: 0; padding: 0;"><li style="list-style-type: none;"><div style="display: flex; flex-direction: row;">:&nbsp;<div style="height: 15px; width: 22px; border: 1px solid black;">v</div><p>&nbsp;Penambahan</p>&emsp;&emsp;<div style="height: 15px; width: 22px;border: 1px solid black;">v</div><p>&nbsp;Penambahan</p></div></li></ul></td>
                    </tr>
                    <tr>
                        <td style="width: 48%;"><ul style="margin-left: 3vh; padding: 0;"><li style="list-style-type: circle;">Bagian/Departemen</li></ul></td>
                        <td><ul style="margin: 0; padding: 0;"><li style="list-style-type: none;">: ________________</li></ul></td>
                    </tr>
                    <tr>
                        <td style="width: 48%;"><ul style="margin-left: 3vh; padding: 0;"><li style="list-style-type: circle;">Rencana Penempatan (tanggal)</li></ul></td>
                        <td><ul style="margin: 0; padding: 0;"><li style="list-style-type: none;">: ________________</li></ul></td>
                    </tr>
                    <tr>
                        <td style="width: 48%;"><ul style="margin-left: 3vh; padding: 0;"><li style="list-style-type: circle;">Kualifikasi yang dibutuhkan sebagai berikut</li></ul></td>
                        <td><ul style="margin: 0; padding: 0;"><li style="list-style-type: none;">:</li></ul></td>
                    </tr>
                </table>
            </div>
        </div>
    </body>
</html>