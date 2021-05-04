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
                        <td height="25" rowspan="2">No</td>
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
                    	<td>Form Data Pribad</td>
                    	<td></td>
                    	<td></td>
                    	<td></td>
                    </tr>
                </table>
            </div>
        </div>	
    </body>
</html>