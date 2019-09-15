<div class="content-wrapper">
    
    <section class="content">
        <div class="box box-warning box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">INPUT DATA PESERTA</h3>
            </div>
            <form action="<?php echo $action; ?>" method="post">
            
<table class='table table-bordered'>        

	    <tr><td width='200'>Nama Lengkap <?php echo form_error('nama_lengkap') ?></td><td><input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap" value="<?php echo $nama_lengkap; ?>" /></td></tr>
	    <tr><td width='200'>Nim <?php echo form_error('nim') ?></td><td><input type="text" class="form-control" name="nim" id="nim" placeholder="Nim" value="<?php echo $nim; ?>" /></td></tr>
	    <tr><td width='200'>Prodi <?php echo form_error('prodi') ?></td><td><input type="text" class="form-control" name="prodi" id="prodi" placeholder="Prodi" value="<?php echo $prodi; ?>" /></td></tr>
	    <tr><td width='200'>Instansi <?php echo form_error('instansi') ?></td><td><input type="text" class="form-control" name="instansi" id="instansi" placeholder="Instansi" value="<?php echo $instansi; ?>" /></td></tr>
	    <tr><td width='200'>No Wa <?php echo form_error('no_wa') ?></td><td><input type="text" class="form-control" name="no_wa" id="no_wa" placeholder="No Wa" value="<?php echo $no_wa; ?>" /></td></tr>
	    <tr><td width='200'>Email <?php echo form_error('email') ?></td><td><input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>" /></td></tr>
	    <!--<tr><td width='200'>Created At <?php echo form_error('created_at') ?></td><td><input type="date" class="form-control" name="created_at" id="created_at" placeholder="Created At" value="<?php echo $created_at; ?>" /></td></tr>-->
	    <tr><td></td><td><input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
	    <a href="<?php echo site_url('front') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a>
	    </td></tr>
	</table></form>        </div>
</div>
</div>
<div class="box-header center">
	<button>
                        <h5 class="box-title"><a href="<?= base_url().'index.php/peserta/lakukan_download' ?>">Download Poster</a>  </h5>
						</button>
					</div>