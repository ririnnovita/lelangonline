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
				DATA LELANG
			</div>
			
			
			<div class="card-body">
			<div class="table-responsive">
			<table class="table table-hover table-bordered table-striped">
					<tr>
						<th>Nomor</th>
						<th>Nama</th>
						<th>gambar</th>
						<th>Harga Awal</th>
						<th>Status</th>
						<th>Pelelang</th>
						<th>Opsi</th>
					</tr>
					<?php $i = 1;
					foreach ($auctions as $auction) : ?>
					
					<?php if($auction->status == 'dibuka'): ?>
						<tr>
							<td><?= $i; ?></td>
							<td>
                                <img src="<?= base_url() . '/assets/images/barang/' . $auction->gambar ?>" width="100">
                            </td>
							<td><?= substr($auction->nama_barang,0 , 15); ?><h4>...</h4></td>
							<td>Rp. <?= number_format($auction->harga_awal, 2, ',', '.') ?></td>
							<td>
								<?php if ($auction->status == 'ditutup') : ?>
									<div class="text-danger">Ditutup</div>
								<?php else : ?>
									<div class="text-success">Dibuka</div>
								<?php endif; ?>
							</td>
							
							
							<td><?= $auction->nama_petugas ?></td>
							<td>


									<?= anchor('admin/Data_lelang/view/' . $auction->id_lelang, '<div class="btn btn-info btn-sm mb-3"><i class="fas fa-eye"></i></div>') ?>

							</td>
							
							<?php endif; ?>
						</tr>
					<?php $i++;
					endforeach; ?>
				</table>				
			</div>
		</div>
	</div>
	</div>
	</div>
				</div></div>
