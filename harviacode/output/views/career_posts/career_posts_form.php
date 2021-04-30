<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Career_posts <?php echo $button ?></h2>
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
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('career_posts') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>