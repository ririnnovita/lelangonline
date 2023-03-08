<div class="container">
	
	<!-- Outer Row -->
    <div class="row justify-content-center">
        <div class="col-lg-7">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <!-- form control -->
                    <div class="row">
						<div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
								<img src="<?= base_url("assets/images/barang/lelang.png") ?>" width="200" alt="logo">
                                </div>
									
                                <!-- <?= $this->session->flashdata('message'); ?> -->
                                <form class="user" method="post" action="">
                               
									<div class="form-group row">
									<div class="col-sm-6 mb-3 mb-sm-0">
										<input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control form-control" value="<?= set_value('nama_lengkap');?>" placeholder="nama lengkap" required>
									<?= form_error('nama_lengkap', '<small class="text-danger my-2 pl-0">', '</small>'); ?>
										</div>
			
									<div class="form-group col-sm-6">
										<input type="text" name="username" id="username" class="form-control form-control" value="<?= set_value('username');?>" placeholder="username" required>
										<?= form_error('username', '<small class="text-danger my-2 pl-0">', '</small>'); ?>
									</div>
									</div>

									<div class="form-group row">
									<div class="col-sm-6 mb-3 mb-sm-0">
										<input type="password" name="password" id="password" class="form-control form-control" placeholder="password" required>
										<?= form_error('password', '<small class="text-danger my-2 pl-0">', '</small>'); ?>
									</div>
								
									<div class="form-group col-sm-6">
											<input type="password" name="repassword" id="repassword" class="form-control form-control" placeholder=" repeat password" required>
											<?= form_error('repassword', '<small class="text-danger my-2 pl-0">', '</small>'); ?>
									</div>
									
									<div class="form-group col-sm-12">
										<input type="number" name="telp" id="telp" class="form-control form-control" placeholder="number telp" required>
										<?= form_error('telp', '<small class="text-danger my-2 pl-0">', '</small>'); ?>
									</div>
									</div>
			
								<button type="submit" class="btn btn-primary btn-block">DAFTAR</button>

                                </form>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
