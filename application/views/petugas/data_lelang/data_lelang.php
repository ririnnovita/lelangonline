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
				<strong>DATA LELANG</strong>
			<a href="<?= base_url('petugas/data_lelang/create') ?>" class="btn btn-sm btn-light float-right"><i class="fas fa-plus fa-sm"></i> LELANG</a>
			</div>
			
			
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-hover table-bordered table-striped">
						<tr>
							<th>#</th>
							<th>Gambar</th>
							<th>Nama</th>
							<th>Harga Awal</th>
							<th>Tanggal Lelang</th>
							<th>Batas Akhir</th>
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
							<td><?= date('d-m-Y H:i', strtotime($auction->tgl_lelang)) ?></td>
							<td><?= date('d-m-Y H:i', strtotime($auction->tgl_akhir)) ?></td>
							<td>
								<?php if ($auction->status == 'ditutup') : ?>
									<div class="text-danger">Ditutup</div>
								<?php else : ?>
									<div class="text-success">Dibuka</div>
								<?php endif; ?>
							</td>
							
							<td><?= $auction->nama_petugas ?></td>
							
							<td>
								
							<?php if (empty($auction->status == 'ditutup')) : ?>
									<?= anchor('petugas/Data_lelang/edit/' . $auction->id_lelang, '<div class="btn btn-primary btn-sm mb-3"><i class="fas fa-edit"></i></div>') ?>

									<button onclick="hapusLelang('<?= base_url('petugas/Data_lelang/delete/') . $auction->id_lelang . '/' . $auction->id_barang ?>')" class="btn btn-danger btn-sm mb-3 has-icon tombol-hapus"><i class="fas fa-fw fa-trash-alt"></i></button>

									<!-- <?= anchor('petugas/Data_lelang/delete/' . $auction->id_lelang . '/' . $auction->id_barang, '<div class="btn btn-danger btn-sm mb-3"><i class="fas fa-trash"></i></div>') ?> -->

									<?= anchor('petugas/Data_lelang/view/' . $auction->id_lelang, '<div class="btn btn-info btn-sm mb-3"><i class="fas fa-eye"></i></div>') ?>

							<?php else : ?>
								
								<?= anchor('petugas/Data_lelang/view/' . $auction->id_lelang, '<div class="btn btn-info btn-sm mb-3"><i class="fas fa-eye"></i></div>') ?>

							<?php endif; ?>

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
