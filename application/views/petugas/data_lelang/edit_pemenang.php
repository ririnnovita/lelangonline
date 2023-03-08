<?php
$tgl_lelang = substr($auction->tgl_lelang, 0, 10);
$jam_lelang = substr($auction->tgl_lelang, 11);
?>
<section class="konten mt-2">
    <div class="container-fluid">

        <div class="card border-dark">
            <div class="card-header bg-warning text-white">
               
                <a href="<?= base_url('petugas/Data_lelang/pemenang') ?>" class="btn btn-sm btn-light float-right"> Kembali</a>
            </div>

            <div class="card-body">
			<form action="" method="post" enctype="multipart/form-data">
				
				<div class="form-group">
					<label for="tgl_akhir"><strong>Tanggal Akhir Lelang</strong></label>
					<br>
					<input type="datetime-local" name="tgl_akhir" id="tgl_akhir" value="<?= $auction->tgl_akhir ?>" required />
				</div>

					<div class="form-group">
						<label for="status"><strong>Status</strong></label><br>
						<label class="radio-inline">
							<input type="radio" name="status" value="dibuka" <?= ($auction->status == 'dibuka') ?'checked=""' : null ?>> Dibuka </label>
						<label class="radio-inline">
							<input type="radio" name="status" value="ditutup" <?= ($auction->status == 'ditutup') ?
							'checked=""' : null ?>> Ditutup </label>
						</label>
					</div>
				
				<div class="form-group">
					<button type="submit" class="btn btn-primary" name="save" value="true">Simpan</button>
				</div>
			</form>
            </div> </div></div></div></section>


