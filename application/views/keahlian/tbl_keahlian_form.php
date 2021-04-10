<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-warning box-solid">
    
                    <div class="box-header">
                        <h3 class="box-title">FORM KEAHLIAN</h3>
                    </div>        
                    <div class="box-body">
                        <div class='row'>
                            <form action="<?php echo $action; ?>" method="post">
                                <div class="form-group">
                                    <label for="varchar">Keahlian <?php echo form_error('keahlian') ?></label>
                                    <input type="text" class="form-control" name="keahlian" id="keahlian" placeholder="Keahlian" value="<?php echo $keahlian; ?>" />
                                </div>
                                <input type="hidden" name="id_keahlian" value="<?php echo $id_keahlian; ?>" /> 
                                <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
                                <a href="<?php echo site_url('keahlian') ?>" class="btn btn-default">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>