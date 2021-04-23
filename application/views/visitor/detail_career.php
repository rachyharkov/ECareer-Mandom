<div class="carir">
  <img class="img-fluid" src="<?php echo base_url()?>assets/img/position.jpg" alt="carir">
</div>
<br>
<div class="container">
  <div class="alert alert-danger-custom">Peringatan: Seluruh proses tahapan seleksi TIDAK DIPUNGUT BIAYA APAPUN</div>
  <div class="row">
    <div class="col-sm-8">
      <h1 class="title"><?php echo $id_posisi;?></h1>
      <p><strong>Persyaratan Wajib :</strong></p>
      <ul>
        <li>Pendidikan min. <?php echo $id_tingkat_pendidikan." ".$id_jurusfakult; ?> </li>
        <li><?php echo $batas_usia ?></li>
        <li>Pengalaman kerja <?php echo $pengalaman_kerja; ?></li>
        <li>Rajin, Tekun, Disiplin</li>
      </ul>
      <p><strong>Lingkup Pekerjaan/Tanggung Jawab :</strong></p>
      <p> <?php echo $lptj ?></p>
      <p><strong>Informasi Tambahan:</strong></p>
      <p>$infotambahan</p>
    </div>
    <div class="col-sm-4">
      <table class="table table-bordered">
        <tr>
          <td>Jenis Kelamin</td>
          <td>: <?php echo $jenis_kelamin; ?></td>
        </tr>
        <tr>
          <td>Lokasi</td>
          <td>: Bekasi</td>
        </tr>
        <tr>
          <td>Tipe Pekerjaan</td>
          <td>: Full Time</td>
        </tr>
        <tr>
          <td>Gaji</td>
          <td>: <?php echo $estimasi_gaji; ?></td>
        </tr>
      </table>
    </div>
  </div>
  <a class="btn btn-light" href="<?php echo base_url()."Career" ?>" style="width: 100%;background-color: #e8e8e8;margin: 10px 0;">Kembali</a>
</div>