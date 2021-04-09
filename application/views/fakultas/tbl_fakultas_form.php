<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-warning box-solid">
    
                    <div class="box-header">
                        <h3 class="box-title">FORM FAKULTAS/JURUSAN</h3>
                    </div>        
                    <div class="box-body">
                        <div class='row'>
                            <form action="<?php echo $action; ?>" method="post">
                                <div class="form-group">
                                    <label for="varchar">Fakultas <?php echo form_error('fakultas') ?></label>
                                    <input type="text" class="form-control" name="fakultas" id="fakultas" placeholder="Fakultas" value="<?php echo $fakultas; ?>" />
                                </div>
                                <input type="hidden" name="id_fakultas" value="<?php echo $id_fakultas; ?>" /> 
                                <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
                                <a href="<?php echo site_url('fakultas') ?>" class="btn btn-default">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>