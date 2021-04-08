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
                        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('tingkat_pendidikan/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('tingkat_pendidikan/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('tingkat_pendidikan'); ?>" class="btn btn-default">Reset</a>
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
        <th>Tingkat Pendidikan</th>
        <th>Action</th>
            </tr><?php
            foreach ($tingkat_pendidikan_data as $tingkat_pendidikan)
            {
                ?>
                <tr>
            <td width="80px"><?php echo ++$start ?></td>
            <td><?php echo $tingkat_pendidikan->tingkat_pendidikan ?></td>
            <td style="text-align:center" width="200px">
                <?php 
                echo anchor(site_url('tingkat_pendidikan/read/'.$tingkat_pendidikan->id_tingkat_pendidikan),'Read'); 
                echo ' | '; 
                echo anchor(site_url('tingkat_pendidikan/update/'.$tingkat_pendidikan->id_tingkat_pendidikan),'Update'); 
                echo ' | '; 
                echo anchor(site_url('tingkat_pendidikan/delete/'.$tingkat_pendidikan->id_tingkat_pendidikan),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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
        </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>