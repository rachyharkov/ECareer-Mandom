<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-warning box-solid">
                    <div class="box-header">
                        <h3 class="box-title"><?php echo $button ?> Data Pelamar</h3>
                    </div> 
                    <div class="box-body">
                        <form action="<?php echo $action; ?>" method="post">
                            <div class="form-group">
                                <label for="varchar">Nama Pelamar <?php echo form_error('nama_pelamar') ?></label>
                                <input type="text" class="form-control" name="nama_pelamar" id="nama_pelamar" placeholder="Nama Pelamar" value="<?php echo $nama_pelamar; ?>" />
                            </div>
                            <div class="form-group">
                                <label for="varchar">No Telp <?php echo form_error('no_telp') ?></label>
                                <input type="text" class="form-control" name="no_telp" id="no_telp" placeholder="No Telp" value="<?php echo $no_telp; ?>" />
                            </div>
                            <div class="form-group">
                                <label for="varchar">Email <?php echo form_error('email') ?></label>
                                <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>" />
                            </div>
                            <div class="form-group">
                                <label for="varchar">File Suratlamaran <?php echo form_error('file_suratlamaran') ?></label>
                                <input type="text" class="form-control" name="file_suratlamaran" id="file_suratlamaran" placeholder="File Suratlamaran" value="<?php echo $file_suratlamaran; ?>" />
                            </div>
                            <div class="form-group">
                                <label for="varchar">File Daftarriwayathidup <?php echo form_error('file_daftarriwayathidup') ?></label>
                                <input type="text" class="form-control" name="file_daftarriwayathidup" id="file_daftarriwayathidup" placeholder="File Daftarriwayathidup" value="<?php echo $file_daftarriwayathidup; ?>" />
                            </div>
                            <div class="form-group">
                                <label for="varchar">File Photo <?php echo form_error('file_photo') ?></label>
                                <input type="text" class="form-control" name="file_photo" id="file_photo" placeholder="File Photo" value="<?php echo $file_photo; ?>" />
                            </div>
                            <div class="form-group">
                                <label for="varchar">File Skck <?php echo form_error('file_skck') ?></label>
                                <input type="text" class="form-control" name="file_skck" id="file_skck" placeholder="File Skck" value="<?php echo $file_skck; ?>" />
                            </div>
                            <div class="form-group">
                                <label for="varchar">File Ktp <?php echo form_error('file_ktp') ?></label>
                                <input type="text" class="form-control" name="file_ktp" id="file_ktp" placeholder="File Ktp" value="<?php echo $file_ktp; ?>" />
                            </div>
                            <div class="form-group">
                                <label for="varchar">File Aktekelahiran <?php echo form_error('file_aktekelahiran') ?></label>
                                <input type="text" class="form-control" name="file_aktekelahiran" id="file_aktekelahiran" placeholder="File Aktekelahiran" value="<?php echo $file_aktekelahiran; ?>" />
                            </div>
                            <div class="form-group">
                                <label for="varchar">File Kk <?php echo form_error('file_kk') ?></label>
                                <input type="text" class="form-control" name="file_kk" id="file_kk" placeholder="File Kk" value="<?php echo $file_kk; ?>" />
                            </div>
                            <div class="form-group">
                                <label for="varchar">File Ijazah <?php echo form_error('file_ijazah') ?></label>
                                <input type="text" class="form-control" name="file_ijazah" id="file_ijazah" placeholder="File Ijazah" value="<?php echo $file_ijazah; ?>" />
                            </div>
                            <div class="form-group">
                                <label for="varchar">File Transkripnilai <?php echo form_error('file_transkripnilai') ?></label>
                                <input type="text" class="form-control" name="file_transkripnilai" id="file_transkripnilai" placeholder="File Transkripnilai" value="<?php echo $file_transkripnilai; ?>" />
                            </div>
                            <div class="form-group">
                                <label for="varchar">File Npwp <?php echo form_error('file_npwp') ?></label>
                                <input type="text" class="form-control" name="file_npwp" id="file_npwp" placeholder="File Npwp" value="<?php echo $file_npwp; ?>" />
                            </div>
                            <div class="form-group">
                                <label for="varchar">File Hasilkesehatan <?php echo form_error('file_hasilkesehatan') ?></label>
                                <input type="text" class="form-control" name="file_hasilkesehatan" id="file_hasilkesehatan" placeholder="File Hasilkesehatan" value="<?php echo $file_hasilkesehatan; ?>" />
                            </div>
                            <div class="form-group">
                                <label for="varchar">Id Careerposts <?php echo form_error('id_careerposts') ?></label>
                                <input type="text" class="form-control" name="id_careerposts" id="id_careerposts" placeholder="Id Careerposts" value="<?php echo $id_careerposts; ?>" />
                            </div>
                            <input type="hidden" name="id_pelamar" value="<?php echo $id_pelamar; ?>" /> 
                            <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
                            <a href="<?php echo site_url('data_pelamar') ?>" class="btn btn-default">Cancel</a>
                        </form>                  
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>