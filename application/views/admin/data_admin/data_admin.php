<div class="container">

	<div class="row">
		<div class="col-md-12">
	
        <!-- pesan error -->
        <?php if (validation_errors()) : ?>
            <div class="alert alert-success" role="alert">
                <?php validation_errors(); ?>
            </div>
        <?php endif; ?>
		<?= $this->session->flashdata('message'); ?>

			<div class="card border-dark">
            <div class="card-header bg-warning text-white">
            <strong>DATA OPERATOR</strong>
			<a href="<?= base_url('admin/data_admin/tambah_admin') ?>" class="btn btn-sm btn-light float-right"><i class="fas fa-plus fa-sm"></i> REGISTRASI</a>
			</div>
			
			<div class="card-body">
			<div class="table-responsive">
				<table class="table table-hover table-bordered table-striped">
					<tr>
						<th>#</th>
						<th>Nama</th>
						<th>Username</th>
						<th>Telp</th>
						<th>Level</th>
						<th>Opsi</th>
					</tr>
					<?php $i = 1;
					foreach ($tb_petugas as $ptgs) : ?>
						<tr>
							<td><?= $i; ?></td>
							<td><img src="" alt=""><?= $ptgs->nama_petugas; ?></td>
							<td><?= $ptgs->username; ?></td>
							<td><?= $ptgs->telp; ?></td>
							<td><?= $ptgs->id_level; ?></td>
                            <td>
								<?= anchor('admin/data_admin/edit/' . $ptgs->id_petugas, '<div class="btn btn-primary btn-sm mb-3"><i class="fas fa-edit"></i></div>') ?>

								
								<button onclick="hapusAdmin('<?= base_url('admin/data_admin/delete/') . $ptgs->id_petugas ?>')" class="btn btn-danger btn-sm mb-3 has-icon tombol-hapus"><i class="fas fa-fw fa-trash-alt"></i></button>

								<!-- <?= anchor('admin/data_admin/delete/' . $ptgs->id_petugas, '<div class="btn btn-danger btn-sm mb-3"><i class="fas fa-trash"></i></div>') ?> -->


							</td>
						</tr>
					<?php $i++;
					endforeach; ?>
				</table>
				</div></div>
			</div>
		</div>
	</div>
				</div>
</div>
