
 <div class="container-fluid">
        <br>
    <h2 class="text-warning text-center"><strong>HISTORI LELANG</strong>
        <hr><hr>

    <div class="row text-center mt-5">
    
        <?php foreach ($history as $his) : ?> 
            <div class="card ml-5 mb-5" style="width: 30rem;">
                <div class="card-body">
                
                <a href="<?= base_url('history/history_detail/') . $his->id_lelang; ?>">

                <img src="<?= base_url() . '/assets/images/barang/' . $his->gambar ?>" class="card-img-top" alt="...">
                <h5 class="card-title text-primary"><strong><?= $his->nama_barang; ?></strong></h5>
                <h6 class="text-primary"><?= $his->deskripsi_barang?></h6>
               
                <?php if($his->status == 'dibuka') : ?>
                    <h6 class="card-title text-warning"><strong>berakhir pada <?= date('D, d-m-Y H:i', strtotime($his->tgl_akhir)); ?></strong></h6>
                <?php else : ?>
                    <h6 class="card-title text-warning"><strong>lelang sudah berakhir.</strong></h6>
                <?php endif; ?>

                </a>


                <!-- <h5 class="text-primary">
                    <strong>.....................................................................</strong>
                </h5>
                <a href="<?= base_url('history/history_detail/') . $his->id_lelang; ?>">
                <h5 class="text-center text-warning"><strong>SEE DETAIL</strong></h5>
                </a>
                <h5 class="text-primary">
                    <strong>.....................................................................</strong>
                </h5> -->

               
            </div>
		</div>
			 <?php endforeach; ?> 

             
    </div>
    <br><br><br><br><br><br>

    
</div>

