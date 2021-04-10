<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-warning box-solid">
    
                    <div class="box-header">
                        <h3 class="box-title">FORM PENGAJUAN KARYAWAN</h3>
                    </div>        
                    <div class="box-body">
                        <div class='row' style="padding: 15px;">
                            <form action="<?php echo $action; ?>" role="form" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="varchar">Tujuan Permintaaan Karyawan <?php echo form_error('tpk') ?></label>
                                <select id="tpk" name="tpk" class="form-control">
                                    <option value="">-- Pilih --</option>
                                    <option value="Penambahan" <?php echo($tpk == 'Penambahan')?'selected':''; ?>>Penambahan</option>
                                    <option value="Penggantian" <?php echo($tpk == 'Penggantian')?'selected':''; ?>>Penggantian</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="varchar">Departemenn<?php echo form_error('id_dept') ?></label>
                                <select name="id_dept" id="id_dept" class="form-control">
                                    <option value="">-- Pilih --</option>
                                    <?php foreach ($deptlist as $o) { ?>
                                        <?php if ($id_dept==$o->id_dept) { ?>
                                            <option value="<?php echo $o->id_dept?>" selected><?php echo $o->nama_dept ?></option>    
                                            <?php }else{ ?>
                                            <option value="<?php echo $o->id_dept?>"><?php echo $o->nama_dept ?></option>      
                                        <?php } ?>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="varchar">Tanggal Penempatan <?php echo form_error('tanggal_penempatan') ?></label>
                                <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                    <input type="text" class="form-control" name="tanggal_penempatan" id="tanggal_penempatan" value="<?php echo $tanggal_penempatan; ?>"/>
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>
                            <div class="panel-heading">
                                <h3 class="panel-title">Kualifikasi yang Dibutuhkan :</h3>
                            </div>
                            <div class="panel-body">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="int">Jumlah Kebutuhan SDM <?php echo form_error('jks') ?></label>
                                                <input type="text" class="form-control" name="jks" id="jks" placeholder="Jks" value="<?php echo $jks; ?>" />
                                            </div>
                                            <div class="form-group">
                                                <label for="varchar">Posisi <?php echo form_error('id_posisi') ?></label>
                                                <select class="form-control" name="id_posisi" id="id_posisi">
                                                    <option value="">-- Pilih --</option>
                                                    <?php foreach ($pos as $p) { ?>
                                                        <?php if ($id_posisi==$p->id_posisi) { ?>
                                                            <option value="<?php echo $p->id_posisi?>" selected><?php echo $p->nama_posisi ?></option>    
                                                            <?php }else{ ?>
                                                            <option value="<?php echo $p->id_posisi?>"><?php echo $p->nama_posisi ?></option>      
                                                        <?php } ?>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="varchar">Jenis Kelamin <?php echo form_error('jenis_kelamin') ?></label>
                                                <input type="text" class="form-control" name="jenis_kelamin" id="jenis_kelamin" placeholder="Jenis Kelamin" value="<?php echo $jenis_kelamin; ?>" />
                                            </div>
                                            <div class="form-group">
                                                <label for="int">Batas Usia <?php echo form_error('batas_usia') ?></label>
                                                <input type="text" class="form-control" name="batas_usia" id="batas_usia" placeholder="Batas Usia" value="<?php echo $batas_usia; ?>" />
                                            </div>
                                            <div class="form-group">
                                                <label for="int">Tingkat Pendidikan <?php echo form_error('id_tingkat_pendidikan') ?></label>
                                                <select class="form-control" name="id_tingkat_pendidikan" id="id_tingkat_pendidikan">
                                                    <option value="">-- Pilih --</option>
                                                    <?php foreach ($tingkat_pendidikan as $tp) { ?>
                                                        <?php if ($id_tingkat_pendidikan==$tp->id_tingkat_pendidikan) { ?>
                                                            <option value="<?php echo $tp->id_tingkat_pendidikan?>" selected><?php echo $tp->tingkat_pendidikan ?></option>    
                                                            <?php }else{ ?>
                                                            <option value="<?php echo $tp->id_tingkat_pendidikan?>"><?php echo $tp->tingkat_pendidikan ?></option>      
                                                        <?php } ?>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="int">Jurusan/Fakultas<?php echo form_error('id_jurusfakult') ?></label>
                                                <select class="form-control" name="id_jurusfakult" id="id_jurusfakult">
                                                    <option value="">-- Pilih --</option>
                                                    <?php foreach ($fakultas as $fkt) { ?>
                                                        <?php if ($id_jurusfakult==$fkt->id_fakultas) { ?>
                                                            <option value="<?php echo $fkt->id_fakultas?>" selected><?php echo $fkt->fakultas ?></option>    
                                                            <?php }else{ ?>
                                                            <option value="<?php echo $fkt->id_fakultas?>"><?php echo $fkt->fakultas ?></option>      
                                                        <?php } ?>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="int">Syarat Keahlian <?php echo form_error('sp_keahlian') ?></label><br>
                                                <select name="sp_keahlian[]" id="sp_keahlian" class="multiselect form-control" multiple="multiple">
                                                    <?php foreach ($keahlian as $klh) { ?>
                                                        <?php if ($sp_keahlian==$klh->keahlian) { ?>
                                                            <option value="<?php echo $klh->keahlian?>" selected><?php echo $klh->keahlian ?></option>    
                                                            <?php }else{ ?>
                                                            <option value="<?php echo $klh->keahlian?>"><?php echo $klh->keahlian ?></option>      
                                                        <?php } ?>
                                                    <?php } ?>
                                                    
                                                </select>
                                            </div>            
                                            <div class="form-group">
                                                <label for="varchar">Pengalaman Kerja <?php echo form_error('pengalaman_kerja') ?></label>
                                                <input type="text" class="form-control" name="pengalaman_kerja" id="pengalaman_kerja" placeholder="Pengalaman Kerja" value="<?php echo $pengalaman_kerja; ?>" />
                                            </div>
                                            <div class="form-group">
                                                <label for="int">Status Kerja <?php echo form_error('id_sk') ?></label>
                                                <select class="form-control" name="id_sk" id="id_sk">
                                                    <option value="">-- Pilih --</option>
                                                    <?php foreach ($status_pekerja as $spk) { ?>
                                                        <?php if ($id_sk==$spk->status_karyawan_id) { ?>
                                                            <option value="<?php echo $spk->status_karyawan_id?>" selected><?php echo $spk->nama_status_karyawan ?></option>    
                                                            <?php }else{ ?>
                                                            <option value="<?php echo $spk->status_karyawan_id?>"><?php echo $spk->nama_status_karyawan ?></option>      
                                                        <?php } ?>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="varchar">Estimasi Gaji yang Ditawarkan <?php echo form_error('estimasi_gaji') ?></label>
                                                <input type="text" class="form-control" name="estimasi_gaji" id="estimasi_gaji" placeholder="Estimasi Gaji" value="<?php echo $estimasi_gaji; ?>" />
                                            </div>
                                            <div class="form-group">
                                                <label for="varchar">Lingkup Pekerjaan/Tanggung Jawab <?php echo form_error('lptj') ?></label>
                                                <textarea class="form-control" name="lptj" id="lptj" rows="5" cols="30" placeholder="Input disini..."><?php echo $lptj; ?></textarea>
                                            </div>
                                            <?php 

                                                if ($dp_sot && $dp_jdesk) {
                                                    echo "";
                                                } else {
                                                    ?>
                                                        <div class="form-group">
                                                            <h3 class="panel-title">Dokumen Pendukung</h3>
                                                            <div style="margin-top: 10px;">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <label for="varchar">SO Terbaru <?php echo form_error('dp_sot') ?></label>
                                                                        <input name="dp_sot" id="dp_sot" type="file" class="dropify">
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label for="varchar">Job Description <?php echo form_error('dp_jdesk') ?></label>
                                                                        <input name="dp_jdesk" id="dp_jdesk" type="file" class="dropify">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php
                                                }
                                            ?>
                                            <div class="form-group">
                                                <label for="varchar">Catatan <?php echo form_error('catatan') ?></label>
                                                <input type="text" class="form-control" name="catatan" id="catatan" placeholder="Catatan" value="<?php echo $catatan; ?>" />
                                            </div>
                                            <div class="form-group">
                                                <div class="fancy-checkbox custom-bgcolor-blue">
                                                    <label>
                                                        <input type="checkbox" name="kdganti" id="kdganti">
                                                        <span for="varchar" style="font-weight: bold;">Karyawan Keluar/Diganti?</span>
                                                    </label>
                                                </div>
                                                <input type="text" class="form-control" name="karyawan_out" id="karyawan_out" placeholder="Karyawan Out" value="Tidak Ada" style="display: none;" />
                                            </div>            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="int">Priority Id <?php echo form_error('priority_id') ?></label>
                                <select class="form-control" name="priority_id" id="priority_id">
                                    <?php foreach ($prioritas as $prio) { ?>
                                        <?php if ($priority_id==$prio->id_priority) { ?>
                                            <option value="<?php echo $prio->id_priority?>" selected><?php echo $prio->prioritas ?></option>    
                                            <?php }else{ ?>
                                            <option value="<?php echo $prio->id_priority?>"><?php echo $prio->prioritas ?></option>      
                                        <?php } ?>
                                    <?php } ?>
                                </select>
                            </div>
                            <input type="hidden" name="id_form" value="<?php echo $id_form; ?>" /> 
                            <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
                            <a href="<?php echo site_url('pengajuan_karyawan') ?>" class="btn btn-default">Cancel</a>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>