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
        <h2 style="margin-top:0px">Mahasiswa Read</h2>
        <table class="table">
	    <tr><td>Nim</td><td><?php echo $nim; ?></td></tr>
	    <tr><td>Nama Mahasiswa</td><td><?php echo $nama_mahasiswa; ?></td></tr>
	    <tr><td>Jenis Kelamin</td><td><?php echo $jenis_kelamin; ?></td></tr>
	    <tr><td>Alamat Lengkap</td><td><?php echo $alamat_lengkap; ?></td></tr>
	    <tr><td>Nomor Hp</td><td><?php echo $nomor_hp; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('mahasiswa') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>