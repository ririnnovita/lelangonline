<div class="container">
	
	<!-- Outer Row -->
    <div class="row justify-content-center">

    <div class="col-lg-5">

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
                                
                                <?= $this->session->flashdata('message'); ?>
                                <form class="user" method="post" action="<?= base_url('auth/login') ?>">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control" id="username" 
                                        name="username"  placeholder="username"  required>

                                        <?= form_error('username', '<small class="text-danger my-2 pl-0">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
										<input type="password" class="form-control form-control" id="password" name="password" placeholder="Password" required>

                                        <?= form_error('password', '<small class="text-danger my-2 pl-0">', '</small>'); ?>
                                    </div>
                                   
										<!-- button login -->
										<button type="submit" name="login" class="btn btn-primary btn-block" value="true">
											MASUK
										</button>
										
                                </form>
                    </div>
                </div>
                    </div>
                </div>
            </div>
            <br><br><br><br><br>
        </div>
    </div>
</div>
