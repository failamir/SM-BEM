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
        <h2>Peserta List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Nama Lengkap</th>
		<th>Nim</th>
		<th>Prodi</th>
		<th>Instansi</th>
		<th>No Wa</th>
		<th>Email</th>
		<th>Created At</th>
		
            </tr><?php
            foreach ($peserta_data as $peserta)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $peserta->nama_lengkap ?></td>
		      <td><?php echo $peserta->nim ?></td>
		      <td><?php echo $peserta->prodi ?></td>
		      <td><?php echo $peserta->instansi ?></td>
		      <td><?php echo $peserta->no_wa ?></td>
		      <td><?php echo $peserta->email ?></td>
		      <td><?php echo $peserta->created_at ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>