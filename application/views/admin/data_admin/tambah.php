<section class="konten mt-2">
    <div class="container-fluid">

        <div class="card border-dark">
            <div class="card-header bg-warning text-white">
           
				<strong>TAMBAH DATA OPERATOR</strong>
                <a href="<?= base_url('admin/Data_admin') ?>" class="btn btn-sm btn-light float-right"> Kembali</a>
            </div>
            <div class="card-body">
                <form method="post" action="" enctype="multipart/form-data">
                
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for=""><strong>Nama </strong></label>
                        <input type="text" name="nama_petugas" class="form-control" required placeholder="Masukkan nama petugas..." >
                        <?= form_error('nama_petugas', '<small class="text-danger my-2 pl-0">', '</small>'); ?>
                    </div>
                    <div class="form-group col-sm-6">
                        <label for=""><strong>Username</strong></label>
                        <input type="text" name="username" class="form-control"  required placeholder="Masukkan username..." >
                        <?= form_error('username', '<small class="text-danger my-2 pl-0">', '</small>'); ?>
                    </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for=""><strong>Password</strong></label>
                        <input type="password" name="password" class="form-control" required placeholder="Masukkan password..." >
                        <?= form_error('password', '<small class="text-danger my-2 pl-0">', '</small>'); ?>
                    </div>
                    <div class="form-group col-sm-6">
                        <label for=""><strong>Ulangi Password</strong></label>
						<input type="password" name="repassword" id="repassword" class="form-control form-control" placeholder="Ulangi password..." required>
						<?= form_error('repassword', '<small class="text-danger my-2 pl-0">', '</small>'); ?>
					</div>
                    </div>
                    <div class="form-group">
                        <label for=""><strong>Telp</strong></label>
                        <input type="number" name="telp" class="form-control" required placeholder="Masukkan nomor telp aktif..." >
                        <?= form_error('telp', '<small class="text-danger my-2 pl-0">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for=""><strong>Level</strong></label>
                        <select name="id_level" id="id_level" class="form-control" required>
                            <option value="">--- Pilih Level ---</option>
                            <option value="1">1. Administrator</option>
                            <option value="2">2. Petugas</option>
                            
                        </select>
                    </div>


                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-sm">simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</section>