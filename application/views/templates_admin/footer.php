            <!-- Footer -->
            <!-- <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; lelang <?= date('Y'); ?> - RIRIN NOVITA SARI</span>
                    </div>
                </div>
            </footer> -->
            <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

            </div>
            <!-- End of Page Wrapper -->

            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>

            </div><!-- Bootstrap core JavaScript-->
            <script src="<?= base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
            <script src="<?= base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Core plugin JavaScript-->
            <script src="<?= base_url() ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Custom scripts for all pages-->
            <script src="<?= base_url() ?>assets/js/sb-admin-2.min.js"></script>

            <!-- Page level plugins -->
            <script src="<?= base_url() ?>assets/vendor/chart.js/Chart.min.js"></script>

            <!-- Page level custom scripts -->
            <script src="<?= base_url() ?>assets/js/demo/chart-area-demo.js"></script>
            <script src="<?= base_url() ?>assets/js/demo/chart-pie-demo.js"></script>

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