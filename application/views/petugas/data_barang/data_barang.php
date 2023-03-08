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
             
				<strong>DATA BARANG</strong>
			<a href="<?= base_url('petugas/data_barang/tambah_barang') ?>" class="btn btn-sm btn-light float-right"><i class="fas fa-plus fa-sm"></i> BARANG</a>
			</div>
			
			<div class="card-body">
			<div class="table-responsive">
				<table class="table table-hover table-bordered table-striped">
					<tr>
						<th>#</th>
						<th>Gambar</th>
						<th>Nama Barang</th>
						<th>Deskripsi</th>
						<th>Harga</th>
						<th>Tanggal</th>
						<th>Status</th>
						<th>Opsi</th>
					</tr>
					<?php $i = 1;
					foreach ($tb_barang as $brg) : ?>
						<tr>
							<td><?= $i; ?></td>
							<td>
                                <img src="<?= base_url() . '/assets/images/barang/' . $brg->gambar ?>" width="100">
                            </td>
							<td><?= substr($brg->nama_barang,0, 20); ?><h4>...</h4></td>
							<td><?= substr($brg->deskripsi_barang,0,20); ?><h4>...</h4></td>
							<td>Rp. <?= number_format($brg->harga_awal, 2, ',', '.'); ?></td>
							<td><?= date('d-m-Y', strtotime($brg->tgl)) ?></td>
							<th>
								<?php if ($brg->status_barang):?>
									<div class="text-success">Terlelang</div>
									<?php else:?>
										<div class="text-danger">Belum terlelang</div>
								<?php endif;?>
							</th>
							
							<td>
								
							<?php if (empty($brg->status_barang)) : ?> 
									<?= anchor('petugas/Data_barang/edit/' . $brg->id_barang, '<div class="btn btn-primary btn-sm mb-3"><i class="fas fa-edit"></i></div>') ?>
								
									<button onclick="hapusBarang('<?= base_url('petugas/data_barang/delete/') . $brg->id_barang ?>')" class="btn btn-danger btn-sm mb-3 has-icon tombol-hapus"><i class="fas fa-fw fa-trash-alt"></i></button>

									<!-- <?= anchor('petugas/data_barang/delete/' . $brg->id_barang, '<div class="btn btn-danger btn-sm mb-3"><i class="fas fa-trash"></i></div>') ?> -->

							<?php else : ?>
								<center>-</center> 	
								<!-- <?= anchor('petugas/Data_barang/edit/' . $brg->id_barang, '<div class="btn btn-primary btn-sm mb-3"><i class="fas fa-edit"></i></div>') ?> -->
							<?php endif; ?>

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

