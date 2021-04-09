<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-warning box-solid">
    
                    <div class="box-header">
                        <h3 class="box-title">FORM PRIORITAS</h3>
                    </div>        
                    <div class="box-body">
                        <div class='row'>
                            <form action="<?php echo $action; ?>" method="post">
                                <div class="form-group">
                                    <label for="varchar">Prioritas <?php echo form_error('prioritas') ?></label>
                                    <input type="text" class="form-control" name="prioritas" id="prioritas" placeholder="Prioritas" value="<?php echo $prioritas; ?>" />
                                </div>
                                <input type="hidden" name="id_priority" value="<?php echo $id_priority; ?>" /> 
                                <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
                                <a href="<?php echo site_url('priority') ?>" class="btn btn-default">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>