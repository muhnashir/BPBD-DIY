

<!-- footer part start-->
<footer class="footer-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-sm-6 col-md-4 col-xl-3">
                    <div class="single-footer-widget footer_1">
                    <br>
                    <br>
                    <br>
                        <a href="index.html"> <img src="<?= base_url(); ?>assets/img/lazismu_logo.png" alt="" style="width:120px"> </a>
                        <!-- <p>Mengabdi Untuk Negri</p> -->
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="single-footer-widget footer_2">
                        <h4>Saran</h4>
                        <p>Berikan saran anda demi kemajuan Lazismu Umbulharjo
                        </p>
                            <!-- <div class="form-group">
                                <button type="button" class="button button-contactForm btn_1" href="#"><span class="fa fa-plus">Kotak saran</button>
                            </div> -->
                            <a class="button button-contactForm btn_1" href="<?= base_url('Kontak'); ?>"><span class="fa fa-plus">Kotak saran</a>
                        <div class="social_icon">
                            <a href="https://web.facebook.com/profile.php?id=100011430304303&fref=search&__tn__=%2Cd%2CP-R&eid=ARB0e0Yku6XRTfPgbC81HGcWoWePKKVvZqyx2coC3wBvn8G8bSrBx2eYIra_Rk7EshpGlZ7KvBh6kXcs"> <i class="ti-facebook"></i> </a>
                            <a href="#"> <i class="ti-twitter-alt"></i> </a>
                            <a href="https://www.instagram.com/lazismuumbulharjo/"> <i class="ti-instagram"></i> </a>
                            <a href="#"> <i class="ti-youtube"></i> </a>
                        </div>
                    </div>
                </div>
                <?php
                foreach($about as $data):
                ?>
                <div class="col-xl-3 col-sm-6 col-md-4">
                    <div class="single-footer-widget footer_2">
                        <h4>Kontak kami</h4>
                        <div class="contact_info">
                            <p><span> Alamat : </span><?= $data->alamat; ?></p>
                            <p><span> No-telp : </span><?= $data->no_telp; ?></p>
                            <p><span> Email : </span><?= $data->email; ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
            </div>

        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright_part_text text-center">
                        <div class="row">
                            <div class="col-lg-12">
                                <p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> Lazismu Umbulharjo  | All Rights Reserved</a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer part end-->

    <!-- jquery plugins here-->
    <!-- jquery -->
    <script src="<?= base_url(); ?>assets/js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="<?= base_url(); ?>assets/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="<?= base_url(); ?>assets/js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="<?= base_url(); ?>assets/js/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="<?= base_url(); ?>assets/js/masonry.pkgd.js"></script>
    <!-- particles js -->
    <script src="<?= base_url(); ?>assets/js/owl.carousel.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/jquery.nice-select.min.js"></script>
    <!-- swiper js -->
    <script src="<?= base_url(); ?>assets/js/slick.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/jquery.counterup.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/waypoints.min.js"></script>
    <!-- custom js -->
    <script src="<?= base_url(); ?>assets/js/custom.js"></script>
</body>

</html>