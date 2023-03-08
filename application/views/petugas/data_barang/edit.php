
<section class="konten mt-2">
    <div class="container-fluid">

        <div class="card border-dark">
            <div class="card-header bg-warning text-white">
              
				<strong>EDIT DATA BARANG</strong>
                <a href="<?= base_url('petugas/data_barang') ?>" class="btn btn-sm btn-light float-right"> Kembali</a>
            </div>
            <div class="card-body">
			<form action="<?= base_url('petugas/data_barang/update/'); ?>" method="post" enctype="multipart/form-data">
				<input type="hidden" readonly value="<?= $tb_barang['id_barang']; ?>" class="form-control" name="id_barang" id="id_barang">
				<div class="from-group">
								<label><strong>Gambar</strong></label>
								<img src="<?= base_url() . 'assets/images/barang/' . $tb_barang['gambar'] ?>" width="100">
								
								<input type="file" name="gambar" id="gambar" class="form-control" value="<?= base_url() . 'assets/images/barang/' .  $tb_barang['gambar'] ?>">
				</div>
				<div class="form-group">
					<label for="name"><strong>Nama Barang</strong></label>
					<input type="text" name="nama_barang" id="nama_barang" value="<?= $tb_barang['nama_barang'] ?>" class="form-control" placeholder="Enter the product name" />
				</div>
				<div class="form-group">
					<label for="desc"><strong>Deskripsi Barang</strong></label>
					<textarea name="deskripsi_barang" id="deskripsi_barang" rows="10" class="form-control"><?= htmlspecialchars($tb_barang['deskripsi_barang']) ?></textarea>
				</div>
				<div class="form-group">
					<label for="price"><strong>Harga Awal</strong></label>
					<input type="text" name="harga_awal" id="harga_awal" value="<?= $tb_barang['harga_awal'] ?>" class="form-control" placeholder="Enter the product price" />
				</div>

				<div class="form-group">
					<label for="tgl"><strong>Tanggal Barang</strong></label>
					<br>
					<input type="date" name="tgl" id="tgl" value="<?= $tb_barang['tgl'] ?>"/>
				</div>
				
				
				<br>
				<div class="form-group">
					<button type="submit" class="btn btn-primary" name="save" value="true">Simpan</button>
				</div>
			</form>
		
                 
                </form>
            </div>
        </div>
    </div>
    </div>
</section>
