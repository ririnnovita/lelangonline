<section class="konten mt-2">
    <div class="container-fluid">

        <div class="card border-dark">
            <div class="card-header bg-warning text-white">
       
				<strong>TAMBAH DATA LELANG</strong>
                <a href="<?= base_url('petugas/Data_lelang') ?>" class="btn btn-sm btn-light float-right"> Kembali</a>
            </div>
            <div class="card-body">
			<form action="" method="post" enctype="multipart/form-data">
				
				<div class="form-group">
					<label for="product"><strong>Barang</strong></label>
					<select name="product" id="product" class="form-control" required>
						<option value="">--- Pilih Barang ---</option>
						<?php foreach ($products as $product) : ?>
							<option value="<?= $product->id_barang ?>" <?= set_select('product', $product->id_barang) ?>><?= $product->nama_barang ?></option>
						<?php endforeach; ?>
					</select>
					<?= form_error('product', '<small class="text-danger my-2 pl-0">', '</small>'); ?>
				</div>

				<div class="form-group row">
				<div class="col-sm-3">
					<label for="tgl_lelang"><strong> Tanggal lelang</strong></label>
					<input type="datetime-local" name="tgl_lelang" id="tgl_lelang" value="<?= set_value('tgl_lelang') ?>" \ required />
				</div>
				
				<div class="form-group col-sm-2">
					<label for="tgl_akhir"><strong>Batas Akhir</strong></label>
					<input type="datetime-local" name="tgl_akhir" id="tgl_akhir" value="<?= set_value('tgl_akhir') ?>" required />
				</div>
				</div>
				
				<div class="form-group col-sm-2">
					<label for="petugas"><strong>Pelelang</strong></label>
					<input type="text" name="petugas" id="petugas" disabled value="<?= $this->session->userdata('nama_petugas')?>">
				</div>
			
				<div class="form-group">
					<button type="submit" class="btn btn-primary" name="save" value="true">Simpan</button>
				</div>
			</form>
            </div>
        </div>
    </div>
    </div>
</section>
