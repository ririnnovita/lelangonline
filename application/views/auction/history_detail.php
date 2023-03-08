<div class="container-fluid">

    <div class="card">
        <div class="card-body">
			<div class="col-md-1 ">
				<a class="text-warning" href="<?= base_url('history'); ?>">
			<i class="fa fas-fw fa-backward"></i>
			</a>
			</div>
                <div class="col-md-4">
                    <img src="<?= base_url(). '/assets/images/barang/' . $product->gambar ?>" class="card-img-top" width="100" height="300">
                </div>
                

				
                <div class="col-md-6">
				<div class="alert alert-primary" role="alert">
				<?php if ($product->harga_akhir) : ?>
				<strong>
				<?= $product->pemenang ?> memenangkan lelang ini dengan harga Rp.<?= number_format($product->harga_akhir, 2, ',', '.'); ?> 
				</strong> 
				<br><br>
				
				<?php if ($product->pemenang == $this->session->userdata('nama_lengkap')) : ?>
					<a href="<?= base_url('history/cetak_pemenang/') . $product->id_lelang ?>" class="btn btn-light text-primary"><strong><i class="fas fa-fw fa-print"></i> Cetak bukti menang</strong></a>
				<?php endif; ?>
			
				<?php else : ?>
					<strong>
					Belum ada pemenang, bid dengan harga lebih tinggi untuk memenangkan lelang ini
					</strong>
				<?php endif; ?>

				</div>

			
                <h1 class="text-primary"><strong><?= $product->nama_barang; ?></strong></h1>
             	</div>

                <div class="col-md-6">
					<small>harga awal :</small>
                <h1 class="text-warning"><strong>Rp.<?= number_format($product->harga_awal, 2, ',', '.'); ?></strong></h1>
                <hr>
                </div>

				<div class="col-md-6"><br>
				
				<table class="table table-striped">
					
				<strong class="text-warning">KETERANGAN</strong>
				<tbody>
				<tr>
						<td>Deskripsi barang</td>
						<td><?= $product->deskripsi_barang; ?></td>
				</tr>
                
				<!-- <tr>
					<td>Tanggal Lelang</td>
					<td><?= $product->tgl_lelang; ?></td>
				</tr> -->
				<tr>
					<td>Batas akhir penawaran</td>
					<td><?= date('D, d-m-Y H:i', strtotime($product->tgl_akhir)); ?></td>
				</tr>
				</tbody>
				</table>
				</div>

				<div class="col-md-12"><br>
        		<?php if ($product->pemenang) : ?>
				
        		<?php else : ?>
					<form action="<?= base_url('history/history_detail/') . $product->id_lelang ?>" method="POST">
						<p class="text-warning"><strong>TAWAR SEKARANG</strong></p>
					<input type="number" name="price" id="price" min="<?= $product->harga_awal ?>" >
					<button class="btn btn-warning" type="submit" name="bid" value="true">BID !</button>
				</form>
				</span>
            
        		<?php endif; ?>
        		</div>
				
				
				<div class="col-md-12"><br>
				<?= $this->session->flashdata('message'); ?>
				<table class="table table-striped">
				<strong class="text-warning">HISTORY PENAWARAN</strong>
				<tbody>
				<tr>
					<td>
					<?php if (empty($history)) : ?>
						-
					<?php else : ?>
							<?php foreach ($history as $hist) : ?>
								<td><p><strong><?= $hist->nama_lengkap ?></p>
								<p></strong>Rp. <?= number_format($hist->penawaran_harga, 2, ',', '.') ?></p></td>
								
							<?php endforeach; ?>
					<?php endif; ?>
					</td>
				</tr>
				</tbody>
				</table>
                </div>
        
       
        
        
		</div>
                
         <br><br><br><br>
        </div>
    </div>

</div>  
