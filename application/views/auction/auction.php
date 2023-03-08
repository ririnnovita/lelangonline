<div class="container-fluid">
    <img class="d-block m-auto" width="700" src="<?= base_url('assets/images/photo.png'); ?>" >
 
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-1 static-top shadow">
  
                 
           <h5 class="text-primary"><strong>DAFTAR LELANG SEPEDA</strong></h5>
                    

            <!-- Topbar Search -->
            <div class="col-10 search-top">
                    <form action="" class="search-top-form float-right" method="post">
                     <span class="icon fas fa-search"></span>
                      <input type="text" placeholder="Masukkan kata kunci" name="keyword">
                        <button class="btn btn-light text-warning" type="submit"><strong>Cari</strong></button>
                    </form> 
                </div>

    </nav>
    <div class="container-fluid">
        
    <div class="row text-center mt-5">
        <div class="row mt-5 y">
        <?php foreach ($auctions as $auction) : ?> 
            <?php if($auction->status == 'dibuka'): ?>

            <div class="card ml-4 mb-5 " style="width: 30rem;">
                <div class="card-body">

                
                <a href="<?= base_url('auction/detail_barang/') . $auction->id_lelang; ?>">
                
                <img src="<?= base_url() . '/assets/images/barang/' . $auction->gambar ?>" class="card-img-top" alt="...">
                <h5 class="card-title text-primary"><strong><?= $auction->nama_barang; ?></strong></h5>
                <h6 class="card-title text-primary"><?= $auction->deskripsi_barang; ?></h6>
                <h4 class="text-primary" ><strong>Rp.<?= number_format($auction->harga_awal, 2, ', ', '.');?></strong></h4>
                <h6 class="card-title text-warning">berakhir pada <?= date('D, d-m-Y H:i', strtotime($auction->tgl_akhir)); ?></h6>
                
                </a>

                <!-- <h5 class="text-primary">
                    <strong>.....................................................................</strong>
                </h5>
                <a href="<?= base_url('auction/detail_barang/') . $auction->id_lelang; ?>">
                <h5 class="text-center text-warning"><strong>SEE DETAIL</strong></h5>
                </a>
                <h5 class="text-primary">
                    <strong>.....................................................................</strong>
                </h5> -->
                
            </div>
		</div>
        
        <?php endif; ?>
        <?php endforeach; ?> 
        </div>
        </div>
    </div>
 </div>



        
