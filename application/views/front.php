<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>SEMINAR NASIONAL ADVOKASI BEASISWA INTERNASIONAL</title>
    <link rel="icon" href="<?php echo base_url() ?>assets/dizzi/img/favicon.png" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/dizzi/css/bootstrap.min.css" />
    <!-- animate CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/dizzi/css/animate.css" />
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/dizzi/css/owl.carousel.min.css" />
    <!-- themify CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/dizzi/css/themify-icons.css" />
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/dizzi/css/flaticon.css" />
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/dizzi/css/magnific-popup.css" />
    <!-- swiper CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/dizzi/css/slick.css" />
    <!-- style CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/dizzi/css/style.css" />
  </head>

  <body>
    <!-- banner part start-->
    <section class="banner_part">
        <a href="<?php echo site_url() ?>/auth" style="position: absolute;
  border: 0px solid red;
  top: 70px;
  right: 15px;" class="btn_2">Admin</a>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 offset-lg-1">
            <div class="banner_text">
              <div class="banner_text_iner">
                  <h5><?= $this->session->flashdata('message'); ?></h5>
                <h5>Selamat Datang di</h5>
                <h1>SEMINAR NASIONAL ADVOKASI BEASISWA INTERNASIONAL</h1>
                <a href="<?php echo site_url() ?>/peserta/create" class="btn_1">Daftar Sekarang</a>
                <!--</br>-->
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- banner part start-->




    <!-- jquery plugins here-->
    <script src="<?php echo base_url() ?>assets/dizzi/js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="<?php echo base_url() ?>assets/dizzi/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="<?php echo base_url() ?>assets/dizzi/js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="<?php echo base_url() ?>assets/dizzi/js/jquery.magnific-popup.js"></script>
    <!-- isotope js -->
    <script src="<?php echo base_url() ?>assets/dizzi/js/isotope.pkgd.min.js"></script>
    <!-- particles js -->
    <script src="<?php echo base_url() ?>assets/dizzi/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url() ?>assets/dizzi/js/jquery.nice-select.min.js"></script>
    <!-- custom js -->
    <script src="<?php echo base_url() ?>assets/dizzi/js/custom.js"></script>
  </body>
</html>
