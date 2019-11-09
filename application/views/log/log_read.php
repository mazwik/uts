<!doctype html>
<html>
    <head>
        <title>uts</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Log Read</h2>
        <table class="table">
	    <tr><td>Nim</td><td><?php echo $nim; ?></td></tr>
	    <tr><td>Nomer Hp</td><td><?php echo $nomer_hp; ?></td></tr>
	    <tr><td>Tgl Diubah</td><td><?php echo $tgl_diubah; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('log') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>