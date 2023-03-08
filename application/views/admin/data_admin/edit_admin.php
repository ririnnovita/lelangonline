

<section class="konten mt-2">
    <div class="container-fluid">

        <div class="card border-dark">
            <div class="card-header bg-warning text-white">
				
			<strong>EDIT DATA OPERATOR</strong>
                <a href="<?= base_url('admin/data_admin') ?>" class="btn btn-sm btn-light float-right"> Kembali</a>
            </div>
            <div class="card-body">
			<form action="" method="post" enctype="multipart/form-data">
			<input type="hidden" readonly value="<?= $tb_petugas->id_petugas ?>" class="form-control" name="id_petugas" id="id_petugas">
				<div class="form-group">
					<label for="nama_petugas"><strong>Nama </strong></label>
					<input type="text" name="nama_petugas" id="nama_petugas" value="<?= $tb_petugas->nama_petugas ?>" class="form-control" required/>
					
					<?= form_error('nama_petugas', '<small class="text-danger my-2 pl-0">', '</small>'); ?>
				</div>
				<div class="form-group">
					<label for="username"><strong>Username</strong></label>
					<input type="text" name="username" id="username" value="<?= $tb_petugas->username ?>" class="form-control" required />
					
					<?= form_error('username', '<small class="text-danger my-2 pl-0">', '</small>'); ?>
				</div>
				<div class="form-group">
					<label for="password"><strong>Password</strong></label>
					<input type="password" name="password" id="password" value="<?= $tb_petugas->password ?>" class="form-control" required placeholder="Ulangi Password!" />
					
					<?= form_error('password', '<small class="text-danger my-2 pl-0">', '</small>'); ?>
				</div>
				<div class="form-group">
					<label for="password"><strong>Telepon</strong></label>
					<input type="telp" name="telp" id="telp" value="<?= $tb_petugas->telp ?>" class="form-control" required />
					
					<?= form_error('telp', '<small class="text-danger my-2 pl-0">', '</small>'); ?>
				</div>

				<div class="form-group">
					<label><strong>Level</strong></label>
					<select name="id_level" id="id_level" class="form-control" required>

						<option value="<?= $tb_petugas->id_level ?>"><?= $tb_petugas->id_level ?></option>
						<option value="1">1. Administrator</option>
						<option value="2">2. Petugas</option>
						
					</select>
				</div>
				
				<div class="form-group">
					<button type="submit" class="btn btn-primary" name="save" value="true">Simpan</button>
				</div>
			</form>
		
                 
                </form>
            </div>
        </div>
    </div>
    </div>
</section>
