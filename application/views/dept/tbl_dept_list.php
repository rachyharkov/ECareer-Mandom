<!doctype html>
<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-warning box-solid">
    
                    <div class="box-header">
                        <h3 class="box-title">KELOLA DEPARTEMENT</h3>
                    </div>
        
        <div class="box-body">
            <div class='row'>
                <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('dept/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('dept/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('dept'); ?>" class="btn btn-default">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-primary" type="submit">Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
        <th>Nama Dept</th>
        <th>Id Posisi</th>
        <th>Action</th>
            </tr><?php
            foreach ($dept_data as $dept)
            {
                ?>
                <tr>
            <td width="80px"><?php echo ++$start ?></td>
            <td><?php echo $dept->nama_dept ?></td>
            <td><?php echo $dept->id_posisi ?></td>
            <td style="text-align:center" width="200px">
                <?php 
                echo anchor(site_url('dept/read/'.$dept->id_dept),'Read'); 
                echo ' | '; 
                echo anchor(site_url('dept/update/'.$dept->id_dept),'Update'); 
                echo ' | '; 
                echo anchor(site_url('dept/delete/'.$dept->id_dept),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
                ?>
            </td>
        </tr>
                <?php
            }
            ?>
        </table>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
        <?php echo anchor(site_url('dept/excel'), 'Excel', 'class="btn btn-primary"'); ?>
        <?php echo anchor(site_url('dept/word'), 'Word', 'class="btn btn-primary"'); ?>
        </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
                    </div>
            </div>
            </div>
    </section>
</div>