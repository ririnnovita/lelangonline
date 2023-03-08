<?php
$tgl_lelang = substr($auction->tgl_lelang, 0, 10);
$jam_lelang = substr($auction->tgl_lelang, 11);
?>
<section class="konten mt-2">
    <div class="container-fluid">

        <div class="card border-dark">
            <div class="card-header bg-warning text-white">
               
				<strong>EDIT DATA LELANG</strong>
                <a href="<?= base_url('petugas/Data_lelang') ?>" class="btn btn-sm btn-light float-right"> Kembali</a>
            </div>

            <div class="card-body">
			<form action="" method="post" enctype="multipart/form-data">
				<!-- <div class="form-group">
					<label for="product"><strong>Barang</strong></label>
					<select name="product" id="product" class="form-control" required>
						<option value="">--- Pilih Barang ---</option>
						<?php foreach ($products as $product) : ?>
							<option value="<?= $product->id_barang ?>" <?= ($auction->id_barang == $product->id_barang) ? 'selected=""' : null ?>><?= $product->nama_barang ?></option>
						<?php endforeach; ?>
					</select>
				</div>
				<div class="form-group row">
				<div class="col-sm-2">
					<label for="tgl_lelang"><strong>Tanggal Lelang</strong></label>
					<input type="date" name="tgl_lelang" id="tgl_lelang" value="<?= $tgl_lelang ?>" required />
				</div>
				<div class="form-group col-sm-2">
					<label for="jam_lelang"><strong>Jam Lelang</strong></label>
					<input type="time" name="jam_lelang" id="jam_lelang" value="<?= $jam_lelang ?>"  required />
				</div>
				</div>
				<div class="form-group">
					<label for="petugas"><strong>Pelelang</strong></label>
					<select name="petugas" id="petugas" class="form-control" required>
						<option value="">--- Pilih Pelelang ---</option>
						<?php foreach ($staffs as $staff) : ?>
							<option value="<?= $staff->id_petugas ?>" <?= ($auction->id_petugas == $staff->id_petugas) ? 'selected=""' : null ?>><?= $staff->nama_petugas ?></option>
						<?php endforeach; ?>
					</select>
				</div> -->
				<div class="form-group">
					<label for="tgl_akhir"><strong>Batas Akhir Lelang</strong></label>
					<br>
					<input type="datetime-local" name="tgl_akhir" id="tgl_akhir" value="<?= $auction->tgl_akhir ?>" required />
				</div>
				
				<div class="form-group">
					<button type="submit" class="btn btn-primary" name="save" value="true">Simpan</button>
				</div>
			</form>
            </div> </div></div></div></section>


