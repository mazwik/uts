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
        <h2 style="margin-top:0px">Log <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Nim <?php echo form_error('nim') ?></label>
            <input type="text" class="form-control" name="nim" id="nim" placeholder="Nim" value="<?php echo $nim; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Nomer Hp <?php echo form_error('nomer_hp') ?></label>
            <input type="text" class="form-control" name="nomer_hp" id="nomer_hp" placeholder="Nomer Hp" value="<?php echo $nomer_hp; ?>" />
        </div>
	    <div class="form-group">
            <label for="datetime">Tgl Diubah <?php echo form_error('tgl_diubah') ?></label>
            <input type="text" class="form-control" name="tgl_diubah" id="tgl_diubah" placeholder="Tgl Diubah" value="<?php echo $tgl_diubah; ?>" />
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('log') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>