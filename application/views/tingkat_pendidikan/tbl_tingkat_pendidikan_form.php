<!doctype html>
<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-warning box-solid">
    
                    <div class="box-header">
                        <h3 class="box-title">TINGKAT PENDIDIKAN</h3>
                    </div>        
                    <div class="box-body">
                        <div class='row' style="padding: 10px;">
                            <form action="<?php echo $action; ?>" method="post">
                                <div class="form-group">
                                    <label for="varchar">Tingkat Pendidikan <?php echo form_error('tingkat_pendidikan') ?></label>
                                    <input type="text" class="form-control" name="tingkat_pendidikan" id="tingkat_pendidikan" placeholder="Tingkat Pendidikan" value="<?php echo $tingkat_pendidikan; ?>" />
                                </div>
                                <input type="hidden" name="id_tingkat_pendidikan" value="<?php echo $id_tingkat_pendidikan; ?>" /> 
                                <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
                                <a href="<?php echo site_url('tingkat_pendidikan') ?>" class="btn btn-default">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>