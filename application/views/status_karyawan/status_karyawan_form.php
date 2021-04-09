<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-warning box-solid">
    
                    <div class="box-header">
                        <h3 class="box-title">FORM STATUS KERJA</h3>
                    </div>        
                    <div class="box-body">
                        <div class='row'>
                            <form action="<?php echo $action; ?>" method="post">
                                <div class="form-group">
                                    <label for="varchar">Nama Status Karyawan <?php echo form_error('nama_status_karyawan') ?></label>
                                    <input type="text" class="form-control" name="nama_status_karyawan" id="nama_status_karyawan" placeholder="Nama Status Karyawan" value="<?php echo $nama_status_karyawan; ?>" />
                                </div>
                                <input type="hidden" name="status_karyawan_id" value="<?php echo $status_karyawan_id; ?>" /> 
                                <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
                                <a href="<?php echo site_url('status_karyawan') ?>" class="btn btn-default">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>