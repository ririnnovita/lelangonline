<div class="bg-primary">
    <footer class="site-footer">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-4">
                <p class="mb-4">
                    <img src="<?= base_url() ?>assets/images/barang/lelang.png" width="300" alt="Image placeholder" class="img-fluid">
                </p>

            </div>
            <div class="col-md-6 ml-auto">
                <div class="row">
             
                    <div class="col-md-12">
                        <div cclass="text-white">
                            <h3>LELANG</h3>
                            <ul class="list-unstyled text-justify">
                            Lelang adalah proses membeli dan menjual barang atau jasa dengan cara menawarkan kepada penawar, menawarkan tawaran harga lebih tinggi, dan kemudian menjual barang kepada penawar harga tertinggi. Dalam teori ekonomi, lelang mengacu pada beberapa mekanisme atau peraturan perdagangan dari pasar modal.    
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <hr>
        <div class="col-md-12">
             <div cclass="text-white">
                <h4>Jalan Pelita No. 27 Sidomekar Semboro Jember Jawa Timur Indonesia</h4>
             </div>
        </div>
    </div>
    <br>
    </footer>
      <!-- END footer -->
    </div>



            <!-- Custom scripts for all pages-->
            <script src="<?= base_url() ?>assets/js/sb-admin-2.min.js"></script>

            <script src="<?= base_url() ?>assets/js/jquery-3.2.1.min.js"></script>
            <script src="<?= base_url() ?>assets/js/jquery-migrate-3.0.0.js"></script>
            <script src="<?= base_url() ?>assets/js/popper.min.js"></script>
            <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
            <script src="<?= base_url() ?>assets/js/owl.carousel.min.js"></script>
            <script src="<?= base_url() ?>assets/js/jquery.waypoints.min.js"></script>
            <script src="<?= base_url() ?>assets/js/jquery.stellar.min.js"></script>


            <script src="<?= base_url() ?>assets/js/main.js"></script>

            <!-- untuk alert -->
            <script src="<?= base_url('assets/js/konfirmasi.js') ?>"></script>
            <script src="<?= base_url('assets/swal/dist/sweetalert2.all.min.js') ?>"></script>

            <!-- untuk j query check -->
            <script>
                $('.custom-file-input').on('change', function() {
                    let fileName = $(this).val().split('\\').pop();
                    $(this).next('.custom-file-label').addClass("selected").html(fileName);
                });
            </script>

</body>

</html>