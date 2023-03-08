<section class="konten mt-2">
    <div class="container-fluid">

        <div class="card border-dark">
            <div class="card-header bg-warning text-white">
        
				<strong>TAMBAH DATA BARANG</strong>

                <a href="<?= base_url('petugas/Data_barang') ?>" class="btn btn-sm btn-light float-right"> Kembali</a>
            </div>
            <div class="card-body">
                <form method="post" action="" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for=""><strong>Gambar</strong></label>
                        <br>
                        <input type="file" name="gambar" required>
                    </div>
                
                <div class="form-group">
                    <label for=""><strong>Nama Barang</strong></label>
                    <input type="text" name="nama_barang" class="form-control" placeholder="Masukkan Nama Barang..." required>
                    <?= form_error('nama_barang', '<small class="text-danger my-2 pl-0">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for=""><strong>Deskripsi Barang</strong></label>
                    <textarea type="text" rows="10" name="deskripsi_barang" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <label for=""><strong>Harga Awal</strong></label>
                    <input type="number" name="harga_awal" class="form-control" placeholder="Masukkan Harga Awal.." required>
                </div>
                <div class="form-group">
                    <label for=""><strong>Tanggal Barang</strong></label>
                    <br>
                    <input type="date" name="tgl" required>
                </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-sm">simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</section>