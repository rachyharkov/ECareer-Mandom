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
        <li>Maksimal <?php echo $batas_usia ?> Tahun</li>
        <li>Pengalaman kerja <?php echo $pengalaman_kerja; ?></li>
        <li>Rajin, Tekun, Disiplin</li>
      </ul>
      <p><strong>Lingkup Pekerjaan/Tanggung Jawab :</strong></p>
      <p><?php echo $lptj ?></p>
      <p><strong>Informasi Tambahan:</strong></p>
      <p><?php echo $infotambahan ?></p>
    </div>
    <div class="col-sm-4">
      <table class="table table-bordered">
        <tr>
          <td>Jenis Kelamin</td>
          <td>: <?php echo $jenis_kelamin; ?></td>
        </tr>
        <tr>
          <td>Lokasi</td>
          <td>: <?php echo $lokasi; ?></td>
        </tr>
        <tr>
          <td>Tipe Pekerjaan</td>
          <td>: <?php echo $tipe_pekerjaan; ?></td>
        </tr>
        <tr>
          <td>Gaji</td>
          <td>: <?php echo $estimasi_gaji; ?></td>
        </tr>
        <tr>
          <td colspan="2">
            <button class="btn btn-primary" style="width: 100%" data-bs-toggle="modal" data-bs-target="#modal<?php echo $id_careerposts ?>">Apply Now</button>
            <button class="btn btn-primary btncopy" data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip on top" onclick="var tempInput = document.createElement('input');
    tempInput.style = 'position: absolute; left: -1000px; top: -1000px';
    tempInput.value = '<?php echo base_url().'Career/detail_job/'.$id_careerposts ?>';
    document.body.appendChild(tempInput);
    tempInput.select();
    document.execCommand('copy');
    document.body.removeChild(tempInput);
    alert('Berhasil disalin!');" style="width: 100%; margin-top: 10px;">Bagikan Link</button>
          </td>
        </tr>
      </table>
    </div>
  </div>
  <a class="btn btn-light" href="<?php echo base_url()."Career" ?>" style="width: 100%;background-color: #e8e8e8;margin: 10px 0;">Kembali</a>
</div>

<!-- Modal -->
<div class="modal fade" id="modal<?php echo $id_careerposts ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Lamaran - Posisi <?php echo $id_posisi ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="<?php echo $action; ?>" role="form" method="post" enctype="multipart/form-data" autocomplete="off" >
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">
              <div class="page">    
                <label class="field field_v3">
                  <input class="field__input" required name="tbnamapelamar" id="tbnamapelamar" placeholder="Nama Lengkap">
                  <span class="field__label-wrap">
                    <span class="field__label">Nama</span>
                  </span>
                </label>

                <label class="field field_v3">
                  <input class="field__input" required name="tbnotelp" id="tbnotelp" placeholder="08xxxxxxxx">
                  <span class="field__label-wrap">
                    <span class="field__label">No. Telp</span>
                  </span>
                </label>

                <label class="field field_v3">
                  <input class="field__input" required name="tbemail" id="tbemail" placeholder="example@ex.com">
                  <span class="field__label-wrap">
                    <span class="field__label">E-mail</span>
                  </span>
                </label>
              </div>
              <input type="hidden" id="tbidcareerpost" name="tbidcareerpost" value="<?php echo $id_careerposts ?>">
              <p style="color: red">Note : File harus berbentuk PDF Minimal 1 MB, kelengkapan berkas sesuai dengan info loker yang harus di penuhi</p>
            </div>
            <div class="col-md-6">
              <h4><span><i class="fas fa-folder fa-fw"></i></span> Berkas Lampiran</h4>
              <table class="table table-bordered">
                <tr>
                  <td>Surat Lamaran</td>
                  <td><input type="file" accept=".pdf" required class="form-control-file" id="fu_sl" name="fu_sl"/></td>
                </tr>
                <tr>
                  <td>Daftar Riwayat Hidup</td>
                  <td><input type="file" accept=".pdf" required class="form-control-file" id="fu_drh" name="fu_drh"/></td>
                </tr>
                <tr>
                  <td>Photo 4x6</td>
                  <td><input type="file" accept=".jpg" required class="form-control-file" id="fu_foto" name="fu_foto"/></td>
                </tr>
                <tr>
                  <td>Scan SKCK</td>
                  <td><input type="file" accept=".pdf" required class="form-control-file" id="fu_skck" name="fu_skck"/></td>
                </tr>
                <tr>
                  <td>Scan Kartu Tanda Penduduk</td>
                  <td><input type="file" accept=".pdf" required class="form-control-file" id="fu_ktp" name="fu_ktp"/></td>
                </tr>
                <tr>
                  <td>Scan Akte Kelahiran</td>
                  <td><input type="file" accept=".pdf" required class="form-control-file" id="fu_ak" name="fu_ak"/></td>
                </tr>
                <tr>
                  <td>Scan Kartu Keluarga</td>
                  <td><input type="file" accept=".pdf" required class="form-control-file" id="fu_kk" name="fu_kk"/></td>
                </tr>
                <tr>
                  <td>Scan Ijazah Terakhir</td>
                  <td><input type="file" accept=".pdf" required class="form-control-file" id="fu_it" name="fu_it"/></td>
                </tr>
                <tr>
                  <td>Scan Transkrip Nilai Pendidikan Terakhir</td>
                  <td><input type="file" accept=".pdf" required class="form-control-file" id="fu_tnpt" name="fu_tnpt"/></td>
                </tr>
                <tr>
                  <td>Scan NPWP</td>
                  <td><input type="file" accept=".pdf" required class="form-control-file" id="fu_npwp" name="fu_npwp"/></td>
                </tr>
                <tr>
                  <td>Surat Hasil Tes Kesehatan</td>
                  <td><input type="file" accept=".pdf" required class="form-control-file" id="fu_htk" name="fu_htk"/></td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>