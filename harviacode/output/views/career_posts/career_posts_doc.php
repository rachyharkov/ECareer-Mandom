<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            .word-table {
                border:1px solid black !important; 
                border-collapse: collapse !important;
                width: 100%;
            }
            .word-table tr th, .word-table tr td{
                border:1px solid black !important; 
                padding: 5px 10px;
            }
        </style>
    </head>
    <body>
        <h2>Career_posts List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Id Careerposts</th>
		<th>Posts</th>
		<th>Status</th>
		<th>Tgl Posts</th>
		
            </tr><?php
            foreach ($career_posts_data as $career_posts)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $career_posts->id_careerposts ?></td>
		      <td><?php echo $career_posts->posts ?></td>
		      <td><?php echo $career_posts->status ?></td>
		      <td><?php echo $career_posts->tgl_posts ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>