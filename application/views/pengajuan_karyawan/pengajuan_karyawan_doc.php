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
                <table class="word-table" style="margin-bottom: 10px">
                  <tr>
                    <td colspan="2" rowspan="4" style="text-align: center;"><img src="<?php echo base_url()."assets/img/logomandom.png" ?>" width="90"></td>
                    <td align="center" rowspan="4" style="width: 47%;"><h5>FORMULIR</h5><h5>PERMINTAAN KARYAWAN BARU</h5></td>
                    <td colspan="4" style="font-size: 10px; padding: 0;">Form No &emsp;&nbsp;&nbsp;: <?php echo $id_form; ?></td>
                  </tr>
                  <tr>
                    <td colspan="4" style="font-size: 10px; padding: 0;">Tgl Berlaku &nbsp;: <?php echo $last_update?></td>
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
                <table style="font-size: 12px; border: 0px; width: 100%; margin: auto;">
                    <tr>
                        <td style="width: 46%;"><ul style="margin-left: 3vh; padding: 0;"><li style="list-style-type: circle;">Tujuan Permintaan Karyawan</li></ul></td>
                        <td><ul style="margin: 0; padding: 0;"><li style="list-style-type: none;"><div style="display: flex; flex-direction: row;">:&nbsp;<div style="height: 15px; width: 22px; border: 1px solid black;"><?php if ($tpk == "Penambahan") {
                            echo "v";
                        } ?></div><p>&nbsp;Penambahan</p>&emsp;&emsp;<div style="height: 15px; width: 22px;border: 1px solid black;"><?php if ($tpk == "Penggantian") {
                            echo "v";
                        } ?></div><p>&nbsp;Penggantian</p></div></li></ul></td>
                    </tr>
                    <tr>
                        <td><ul style="margin-left: 3vh; padding: 0;"><li style="list-style-type: circle;">Bagian/Departemen</li></ul></td>
                        <td><ul style="margin: 0; padding: 0;"><li style="list-style-type: none;">: <span style="text-decoration: underline;"><?php echo $id_dept; ?></span></li></ul></td>
                    </tr>
                    <tr>
                        <td><ul style="margin-left: 3vh; padding: 0;"><li style="list-style-type: circle;">Rencana Penempatan (tanggal)</li></ul></td>
                        <td><ul style="margin: 0; padding: 0;"><li style="list-style-type: none;">: <span style="text-decoration: underline;"><?php echo $tanggal_penempatan; ?></span></li></ul></td>
                    </tr>
                    <tr>
                        <td><ul style="margin-left: 3vh; padding: 0;"><li style="list-style-type: circle;">Kualifikasi yang dibutuhkan sebagai berikut</li></ul></td>
                        <td><ul style="margin: 0; padding: 0;"><li style="list-style-type: none;">:</li></ul></td>
                    </tr>
                </table>
            </div>
            <div style="width: 100%;">
                <table class="word-table" style="margin-bottom: 10px; font-size: 12px;">
                    <tr>
                        <td style="width: 46%;">JUMLAH KEBUTUHAN SDM</td>
                        <td>: <?php echo $jks ?></td>
                    </tr>
                    <tr>
                        <td>JABATAN/POSISI</td>
                        <td>: <?php echo $id_posisi ?></td>
                    </tr>
                    <tr>
                        <td>JENIS KELAMIN</td>
                        <td>: <?php echo $jenis_kelamin ?></td>
                    </tr>
                    <tr>
                        <td>BATAS USIA</td>
                        <td>: <?php echo $batas_usia ?></td>
                    </tr>
                    <tr>
                        <td>TINGKAT PENDIDIKAN (MIN)</td>
                        <td>: <?php echo $id_tingkat_pendidikan ?></td>
                    </tr>
                    <tr>
                        <td>JURUSAN/FAKULTAS</td>
                        <td>: <?php echo $id_jurusfakult ?></td>
                    </tr>
                    <tr>
                        <td>SPESIFIKASI KEAHLIAN</td>
                        <td>: <?php echo $sp_keahlian ?></td>
                    </tr>
                    <tr>
                        <td>PENGALAMAN KERJA</td>
                        <td>: <?php echo $pengalaman_kerja ?></td>
                    </tr>
                    <tr>
                        <td>STATUS KERJA</td>
                        <td>: <?php echo $id_sk ?></td>
                    </tr>
                    <tr>
                        <td>ESTIMASI GAJI YANG DITAWARKAN</td>
                        <td>: <?php echo $estimasi_gaji ?></td>
                    </tr>
                    <tr>
                        <td>LINGKUP PEKERJAAN/TANGGUNG JAWAB</td>
                        <td><?php echo $lptj ?></td>
                    </tr>
                    <tr>
                        <td style="padding: 0 5px 50px 7px;">DOKUMEN PENDUKUNG</td>
                        <td><div style="display: flex; flex-direction: row;">
                            <div style="width: 30%;">
                                <p>LAMPIRAN :</p>
                            </div>
                            <div>
                                <div style="display: flex; flex-direction: row;"><div style="height: 16px; width: 22px; border: 1px solid black;"><?php if ($dp_sot != "NA") {
                            echo "v";
                        } ?></div><p>&nbsp;Struktur Organisasi Terbaru</p></div><br>
                                <div style="display: flex; flex-direction: row;"><div style="height: 16px; width: 22px; border: 1px solid black;"><?php if ($dp_jdesk != "NA") {
                            echo "v";
                        } ?></div><p>&nbsp;Job description</p></div>
                            </div>
                        </div></td>
                    </tr>
                    <tr>
                        <td style="padding: 5px 5px 50px 7px;">CATATAN/KETERANGAN</td>
                        <td style="height: auto;padding: 0px 5px 50px 7px;"><?php echo $keterangan ?></td>
                    </tr>
                    <tr>
                        <td style="padding: 5px 5px 50px 7px;">(*) NAMA KARYAWAN YANG DIGANTIKAN (KARYAWAN YANG KELUAR)</td>
                        <td style="height: auto;padding: 0px 5px 50px 7px;">: <?php echo $karyawan_out ?></td>
                    </tr>
                </table>
            </div>
            <div style="display: flex; flex-direction: row; width: 100%; font-size: 11px; position: relative;">
                <div style="margin-right: 5px;">
                    <p style="padding: 0px; margin: 0;">Mengetahui,</p>
                    <p style="padding: 0px; margin: 0;">Personel Development Departement</p>
                    <table class="word-table" style="font-size: 10px; text-align: center;">
                        <tr>
                            
                            <td>Direktur</td>
                            
                        </tr>
                        <tr>
                            <td style="height: 90px;"><img src="<?php echo base_url().$tandatangandirektur ?>" width="120"></td>
                        </tr>
                        <tr>
                            <td>Nama orang</td>
                        </tr>
                    </table>         
                    <p style="font-size: 8px;">( * ) Core tyang tidadk diperlukan/ wajib di isi bila penggantian</p>
                </div>
                <div style="margin-left: 5px; position: absolute;
    top: 0;
    right: 8px;">
                    <p style="padding: 0px; margin: 0;">Bekasi, <span style="text-decoration: underline;"><?php echo date('d F Y'); ?></span></p>
                    <p style="padding: 0px; margin: 0;">Departemen yang mengajukan :</p>
                    <table class="word-table" style="font-size: 10px; text-align: center;">
                        <tr>
                            <td>General Manager <?php echo $id_dept; ?></td>
                        </tr>
                        <tr>
                            <td style="height: 90px;"><img src="<?php echo base_url().$tandatanganhrga ?>" width="120"></td>
                        </tr>
                        <tr>
                            <td><?php echo $diajukanoleh; ?></td>
                        </tr>
                    </table>       
                </div>
            </div>
        </div>

        <button id="exporttoword">Export</button>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="<?php echo base_url()."assets/js/FileSaver.js"?>"></script> 
        <script src="<?php echo base_url()."assets/js/jquery.wordexport.js"?>"></script>
        <script type="text/javascript">
            jQuery(document).ready(function($) {
              $("#exporttoword").click(function(event) {
                $("#page-content").wordExport();
              });
            });
        </script>
    </body>
</html>