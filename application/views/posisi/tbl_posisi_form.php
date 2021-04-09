<!doctype html>
<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-warning box-solid">
                    <div class="box-header">
                        <h3 class="box-title">FORM POSISI</h3>
                    </div>        
                    <div class="box-body">
                        <div class='row'>
                            <div class='container'></div>
                                <form action="<?php echo $action; ?>" method="post">
                                    <div class="form-group">
                                        <label for="varchar">Nama Posisi <?php echo form_error('nama_posisi') ?></label>
                                        <input type="text" class="form-control" name="nama_posisi" id="nama_posisi" placeholder="Nama Posisi" value="<?php echo $nama_posisi; ?>" />
                                    </div>
                                    <input type="hidden" name="id_posisi" value="<?php echo $id_posisi; ?>" /> 
                                    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
                                    <a href="<?php echo site_url('posisi') ?>" class="btn btn-default">Cancel</a>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

