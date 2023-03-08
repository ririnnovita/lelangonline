<div class="container-fluid">

    <div class="card">
        <div class="card-body">
			<div class="col-md-1 ">
				<a class="text-warning" href="<?= base_url('auction'); ?>">
			<i class="fa fas-fw fa-backward"></i>
			</a>
			</div>
                <div class="col-md-4">
                    <img src="<?= base_url(). '/assets/images/barang/' . $product->gambar ?>" class="card-img-top" width="100" height="300">
                </div>
                
                <div class="col-md-6">
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
        		<?php if ($this->session->userdata('username')) : ?>
					<form action="<?= base_url('auction/detail_barang/') . $product->id_lelang ?>" method="POST">
						<p class="text-warning"><strong>TAWAR SEKARANG</strong></p>
						
					<input type="number" name="price" id="price">
					<button class="btn btn-warning" type="submit" name="bid" value="true">BID !</button>
					<?= form_error('price', '<small class="text-danger d-block my-2 pl-0">', '</small>'); ?>

				</form>
				</span>

        		<?php else : ?>
           		 <p class="text-danger">Anda diharuskan login terlebih dahulu untuk mengikuti lelang ini.
				<a class="text-primary" href="<?= base_url('auth/login'); ?>">Klik disini</a>
				untuk login atau
				<a class="text-primary" href="<?= base_url('auth/register'); ?>">Klik disini</a>
				untuk mendaftar
				</p>
        		<?php endif; ?>

        		</div>
				
				
				<div class="col-md-12"><br>
				<table class="table table-striped">
					<?= $this->session->flashdata('message'); ?>
				<strong class="text-warning">HISTORI PENAWARAN</strong>
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
