    <div class="container-fluid">

        <div class="card border-dark">
            <div class="card-header bg-primary text-white">
			
			<a href="<?= base_url('admin/Data_lelang') ?>" class="btn btn-sm btn-light float-right"> Kembali</a>
            </div>
			<div class="container">
			<br>
			<div class="row">
				<div class="col-md-12">
			
			
			<div class="row">
				<div class="col-md-4">
				<div class="card border-dark">
					<div class="card-header bg-warning text-white">
							Detail Barang
						</div>
						<div class="card-body">
							<p><strong>Nama Barang: </strong> <?= $product->nama_barang; ?></p>
							<p><strong>Harga Awal: </strong> Rp. <?= number_format($product->harga_awal, 2, ',', '.'); ?></p>
							<p><strong>Deskripsi Barang: </strong> <br> <?= $product->deskripsi_barang; ?></p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
		 <div class="card border-dark">
			 <div class="card-header bg-warning text-white">
							History Bid
						</div>
						<div class="card-body">
							<?php foreach ($history as $hist) : ?>
								<p><strong><?= $hist->nama_lengkap ?></strong>: Rp. <?= number_format($hist->penawaran_harga, 2, ',', '.') ?></p>
							<?php endforeach; ?>
						</div>
					</div>

				</div>

				<div class="col-md-4">
		 		<div class="card border-dark">
			 	<div class="card-header bg-warning text-white">
							Bid Tertinggi
						</div>
						<div class="card-body">
							
							
							<?php if (empty($max_bid)) : ?>
							<div class="alert alert-info">
									<p>Belum ada yang melakukan bid</p>
							</div>
							<?php else : ?>
									<p><strong>Nama</strong>: <?= $max_bid->nama_lengkap; ?> 
									
									<?= anchor('admin/Data_lelang/finish/' . $auction->id_lelang, '<i class="text-warning fas fa-fw fa-chess-queen"></i>') ?>

									</p>
									<p><strong>Harga</strong>: <?= number_format($max_bid->penawaran_harga, 2, ',', '.'); ?></p>
							<?php endif; ?>
								
								
						</div>
					</div>
				</div>	
			</div>
			<br>
			</div>
			</div>
							</div>
							</div>
			</div>
		</div>
	</div>
</div>
							