<div class="content-wrapper">
    <section class="content">
        <div class="row">
        <div class="col-xs-12">
                <div class="box box-warning box-solid">
                <div class="box-header">
                        <h3 class="box-title">Detail DATA PESERTA</h3>
                    </div>
        <!-- <h2 style="margin-top:0px">Peserta Read</h2> -->
        <table class="table">
	    <tr><td>Nama Lengkap</td><td><?php echo $nama_lengkap; ?></td></tr>
	    <tr><td>Nim</td><td><?php echo $nim; ?></td></tr>
	    <tr><td>Prodi</td><td><?php echo $prodi; ?></td></tr>
	    <tr><td>Instansi</td><td><?php echo $instansi; ?></td></tr>
	    <tr><td>No Wa</td><td><?php echo $no_wa; ?></td></tr>
	    <tr><td>Email</td><td><?php echo $email; ?></td></tr>
	    <tr><td>Created At</td><td><?php echo $created_at; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('peserta') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
    </div>
            </div>
            </div>
    </section>
</div>