<!doctype html>
<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-warning box-solid">
    
                    <div class="box-header">
                        <h3 class="box-title">FORM DEPARTEMENT</h3>
                    </div>
        
        <div class="box-body">
            <div class='row'>
                <div class="container">
                    <form action="<?php echo $action; ?>" method="post">
                            <div class="form-group">
                                <label for="varchar">Nama Dept <?php echo form_error('nama_dept') ?></label>
                                <input type="text" class="form-control" name="nama_dept" id="nama_dept" placeholder="Nama Dept" value="<?php echo $nama_dept; ?>" />
                            </div>
                            <input type="hidden" name="id_dept" value="<?php echo $id_dept; ?>" /> 
                            <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
                            <a href="<?php echo site_url('dept') ?>" class="btn btn-default">Cancel</a>
                        </form>
                    
                </div>
                    </div>
            </div>
            </div>
    </section>
</div>