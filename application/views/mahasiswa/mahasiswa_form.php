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
        <h2 style="margin-top:0px">Mahasiswa <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Nim <?php echo form_error('nim') ?></label>
            <input type="text" class="form-control" name="nim" id="nim" placeholder="Nim" value="<?php echo $nim; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nama Mahasiswa <?php echo form_error('nama_mahasiswa') ?></label>
            <input type="text" class="form-control" name="nama_mahasiswa" id="nama_mahasiswa" placeholder="Nama Mahasiswa" value="<?php echo $nama_mahasiswa; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Jenis Kelamin <?php echo form_error('jenis_kelamin') ?></label>
            <input type="text" class="form-control" name="jenis_kelamin" id="jenis_kelamin" placeholder="Jenis Kelamin" value="<?php echo $jenis_kelamin; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Alamat Lengkap <?php echo form_error('alamat_lengkap') ?></label>
            <input type="text" class="form-control" name="alamat_lengkap" id="alamat_lengkap" placeholder="Alamat Lengkap" value="<?php echo $alamat_lengkap; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Nomor Hp <?php echo form_error('nomor_hp') ?></label>
            <input type="text" class="form-control" name="nomor_hp" id="nomor_hp" placeholder="Nomor Hp" value="<?php echo $nomor_hp; ?>" />
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('mahasiswa') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>