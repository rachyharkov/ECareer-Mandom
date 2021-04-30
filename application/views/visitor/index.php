<div class="carir">
  <img class="img-fluid" src="<?php echo base_url()?>assets/img/career.jpg" alt="carir">
</div>
  <div class="wrapper-main">
    <div class="content-profile">
      <h1 class="text-pink">KESEMPATAN BERKARIR</h1>
      <p>PT. Mandom Indonesia Tbk., Didirikan sebagai perusahaan patungan antara Mandom Corporation, Jepang dan PT. Pabrik Kota. Perusahaan didirikan dengan nama PT. Tancho Indonesia dan berubah menjadi PT. Mandom Indonesia Tbk. pada tahun 2001.</p>
      <p>Produksi komersial Perseroan dimulai pada tahun 1971 dimana pada awalnya Perseroan memproduksi produk perawatan rambut, yang kemudian berkembang dengan memproduksi wewangian dan kosmetik.</p>
      <p>Dan sekarang kami mencari orang yang bermotivasi tinggi, kreatif, inovatif dan berkualitas untuk mempertahankan dan mengembangkan pasar kami di Indonesia dan luar negeri sebagai bagian dari tim untuk mengimplementasikan perusahaan bisnis global.</p>
      <p>Mulailah karirmu Bersama kami:</p>
      <div class="alert alert-danger-custom">Peringatan: Seluruh proses tahapan seleksi TIDAK DIPUNGUT BIAYA APAPUN</div>
    </div>
  </div>

 <div class="container"> 
  <div class="accordion" id="accordionExample" style="max-width: 700px; margin: auto;">
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Syarat Utama :
        </button>
      </h2>
      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <p>1. Pendidikan minimal SMA/SMK sederajat dalam Analis Kimia/Kimia</p>
          <p>2. Memiliki pengalaman minimal 1 tahun dibidang manufaktur lebih disukai</p>
          <p>3. Cekatan, sanggup bekerja dengan cepat dan teliti</p>
          <p>4. Memiliki riwayat kesehatan dan riwayat hukum yang baik</p>
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingTwo">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Syarat Umum
        </button>
      </h2>
      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <p>Sesuaikan Posisi Yang anda lamar</p>
        </div>
      </div>
    </div>
  </div>
  
  <div class="container">
    <br>
    <div style="margin: auto; max-width: 600px;">
      <table class="table table-responsive table-joblist table-borderless" style="text-align: center;">
        <thead>
          <tr>
            <th>DATE</th>
            <th>POSITION</th>
            <th>EXPIRED</th>
            <th>LOCATION</th>
          </tr>
        </thead>
        <?php foreach ($info as $v) {
        ?>
        <tr id="careerid<?php echo $v->id ?>">
          <td><?php $timeex = strtotime($v->tgl_posts);
          $newformatex = date('d-m-Y',$timeex);
          echo $newformatex?></td>
          <td><?php echo $v->nama_posisi; ?></td>
          <td><?php $time = strtotime($v->tanggal_penempatan);
$newformat = date('Y-m-d',$time);
$get = date('d-m-Y',strtotime("+2 weeks", strtotime($newformat)));
echo $get;
?></td>
          <td><?php echo $v->lokasi; ?></td>
        </tr>
        <?php } ?>
      </table>
    </div>
  </div>

</div>