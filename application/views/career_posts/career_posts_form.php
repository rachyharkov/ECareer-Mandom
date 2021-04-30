<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-warning box-solid">
                    <div class="box-header">
                        <h3 class="box-title">Career_posts <?php echo $button ?></h3>
                    </div>        
                    <div class="box-body">
                        <div class='row' style="padding: 15px;">
                            <form action="<?php echo $action; ?>" method="post">
                                <div class="form-group">
                                    <label for="varchar">Id Careerposts <?php echo form_error('id_careerposts') ?></label>
                                    <input type="text" class="form-control" name="id_careerposts" id="id_careerposts" placeholder="Id Careerposts" value="<?php echo $id_careerposts; ?>" />
                                </div>
                                <div class="form-group">
                                    <label for="varchar">Posts <?php echo form_error('posts') ?></label>
                                    <input type="text" class="form-control" name="posts" id="posts" placeholder="Posts" value="<?php echo $posts; ?>" />
                                </div>
                                <div class="form-group">
                                    <label for="varchar">Status <?php echo form_error('status') ?></label>
                                    <input type="text" class="form-control" name="status" id="status" placeholder="Status" value="<?php echo $status; ?>" />
                                </div>
                                <div class="form-group">
                                    <label for="timestamp">Tgl Posts <?php echo form_error('tgl_posts') ?></label>
                                    <input type="text" class="form-control" name="tgl_posts" id="tgl_posts" placeholder="Tgl Posts" value="<?php echo $tgl_posts; ?>" />
                                </div>
                                <div class="form-group">
                                    <label for="varchar">Tipe Pekerjaan <?php echo form_error('tipe_pekerjaan') ?></label>
                                    <input type="text" class="form-control" name="tipe_pekerjaan" id="tipe_pekerjaan" placeholder="Tipe Pekerjaan" value="<?php echo $tipe_pekerjaan; ?>" />
                                </div>
                                <div class="form-group">
                                    <label for="varchar">Lokasi <?php echo form_error('lokasi') ?></label>
                                    <input type="text" class="form-control" name="lokasi" id="lokasi" placeholder="Lokasi" value="<?php echo $lokasi; ?>" />
                                </div>
                                <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
                                <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
                                <a href="<?php echo site_url('career_posts') ?>" class="btn btn-default">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>