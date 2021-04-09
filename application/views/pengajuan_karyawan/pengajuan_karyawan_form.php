<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-warning box-solid">
    
                    <div class="box-header">
                        <h3 class="box-title">KELOLA POSISI</h3>
                    </div>        
                    <div class="box-body">
                        <div class='row' style="padding: 15px;">
        <form action="<?php echo $action; ?>" method="post">
        <div class="form-group">
            <label for="varchar">Tpk <?php echo form_error('tpk') ?></label>
            <select id="tpk" name="tpk" class="form-control">
                <option value="">-- Pilih --</option>
                <option <?php echo ($tpk)?"":"hidden"?> value="<?php echo $tpk; ?>"><?php echo $tpk; ?></option>
                <option value="<?php echo($tpk == 'Penambahan')?'Penambahan':'Penggantian'; ?>"><?php echo($tpk == 'Penambahan')?'Penambahan':'Penggantian'; ?></option>
                <option value="<?php echo($tpk == 'Penggantian')?'Penggantian':'Penambahan';?>"><?php echo($tpk == 'Penggantian')?'Penggantian':'Penambahan';?></option>
            </select>
        </div>
        <div class="form-group">
            <label for="varchar">Id Dept <?php echo form_error('id_dept') ?></label>
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
            <input type="text" class="form-control" name="tanggal_penempatan" id="tanggal_penempatan" placeholder="Tanggal Penempatan" value="<?php echo $tanggal_penempatan; ?>" />
        </div>
        <div class="form-group">
            <label for="int">Jks <?php echo form_error('jks') ?></label>
            <input type="text" class="form-control" name="jks" id="jks" placeholder="Jks" value="<?php echo $jks; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Id Posisi <?php echo form_error('id_posisi') ?></label>
            <input type="text" class="form-control" name="id_posisi" id="id_posisi" placeholder="Id Posisi" value="<?php echo $id_posisi; ?>" />
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
            <label for="int">Id Tingkat Pendidikan <?php echo form_error('id_tingkat_pendidikan') ?></label>
            <input type="text" class="form-control" name="id_tingkat_pendidikan" id="id_tingkat_pendidikan" placeholder="Id Tingkat Pendidikan" value="<?php echo $id_tingkat_pendidikan; ?>" />
        </div>
        <div class="form-group">
            <label for="int">Id Jurusfakult <?php echo form_error('id_jurusfakult') ?></label>
            <input type="text" class="form-control" name="id_jurusfakult" id="id_jurusfakult" placeholder="Id Jurusfakult" value="<?php echo $id_jurusfakult; ?>" />
        </div>
        <div class="form-group">
            <label for="int">Sp Keahlian <?php echo form_error('sp_keahlian') ?></label>
            <input type="text" class="form-control" name="sp_keahlian" id="sp_keahlian" placeholder="Sp Keahlian" value="<?php echo $sp_keahlian; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Pengalaman Kerja <?php echo form_error('pengalaman_kerja') ?></label>
            <input type="text" class="form-control" name="pengalaman_kerja" id="pengalaman_kerja" placeholder="Pengalaman Kerja" value="<?php echo $pengalaman_kerja; ?>" />
        </div>
        <div class="form-group">
            <label for="int">Id Sk <?php echo form_error('id_sk') ?></label>
            <input type="text" class="form-control" name="id_sk" id="id_sk" placeholder="Id Sk" value="<?php echo $id_sk; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Estimasi Gaji <?php echo form_error('estimasi_gaji') ?></label>
            <input type="text" class="form-control" name="estimasi_gaji" id="estimasi_gaji" placeholder="Estimasi Gaji" value="<?php echo $estimasi_gaji; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Lptj <?php echo form_error('lptj') ?></label>
            <input type="text" class="form-control" name="lptj" id="lptj" placeholder="Lptj" value="<?php echo $lptj; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Dp Sot <?php echo form_error('dp_sot') ?></label>
            <input type="text" class="form-control" name="dp_sot" id="dp_sot" placeholder="Dp Sot" value="<?php echo $dp_sot; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Dp Jdesk <?php echo form_error('dp_jdesk') ?></label>
            <input type="text" class="form-control" name="dp_jdesk" id="dp_jdesk" placeholder="Dp Jdesk" value="<?php echo $dp_jdesk; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Catatan <?php echo form_error('catatan') ?></label>
            <input type="text" class="form-control" name="catatan" id="catatan" placeholder="Catatan" value="<?php echo $catatan; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Karyawan Out <?php echo form_error('karyawan_out') ?></label>
            <input type="text" class="form-control" name="karyawan_out" id="karyawan_out" placeholder="Karyawan Out" value="<?php echo $karyawan_out; ?>" />
        </div>
        <div class="form-group">
            <label for="timestamp">Tgl Pengajuan <?php echo form_error('tgl_pengajuan') ?></label>
            <input type="text" class="form-control" name="tgl_pengajuan" id="tgl_pengajuan" placeholder="Tgl Pengajuan" value="<?php echo $tgl_pengajuan; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Diajukanoleh <?php echo form_error('diajukanoleh') ?></label>
            <input type="text" class="form-control" name="diajukanoleh" id="diajukanoleh" placeholder="Diajukanoleh" value="<?php echo $diajukanoleh; ?>" />
        </div>
        <div class="form-group">
            <label for="int">Priority Id <?php echo form_error('priority_id') ?></label>
            <input type="text" class="form-control" name="priority_id" id="priority_id" placeholder="Priority Id" value="<?php echo $priority_id; ?>" />
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