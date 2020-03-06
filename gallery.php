<!DOCTYPE html>
<html lang="en">
<?php include "includes/header.php" ?>
<style>
.container.gallery-container {
    background-color: #fff;
    color: #35373a;
    min-height: 100vh;
    padding: 30px 50px;
}

.gallery-container h1 {
    text-align: center;
    margin-top: 50px;
    font-family: 'Droid Sans', sans-serif;
    font-weight: bold;
}

.gallery-container p.page-description {
    text-align: center;
    margin: 25px auto;
    font-size: 18px;
    color: #999;
}

.tz-gallery {
    padding: 40px;
}

/* Override bootstrap column paddings */
.tz-gallery .row > div {
    padding: 2px;
}

.tz-gallery .lightbox img {
    width: 100%;
    border-radius: 0;
    position: relative;
}

.tz-gallery .lightbox:before {
    position: absolute;
    top: 50%;
    left: 50%;
    margin-top: -13px;
    margin-left: -13px;
    opacity: 0;
    color: #fff;
    font-size: 26px;
    font-family: 'Glyphicons Halflings';
    content: '\e003';
    pointer-events: none;
    z-index: 9000;
    transition: 0.4s;
}


.tz-gallery .lightbox:after {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: 0;
    background-color: rgba(46, 132, 206, 0.7);
    content: '';
    transition: 0.4s;
}

.tz-gallery .lightbox:hover:after,
.tz-gallery .lightbox:hover:before {
    opacity: 1;
}

.baguetteBox-button {
    background-color: transparent !important;
}

@media(max-width: 768px) {
    body {
        padding: 0;
    }
}

</style>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    
    <div class="site-navbar-wrap bg-white">
        <div class="site-navbar-top">
          <div class="container py-2">
            <div class="row align-items-center">
              <div class="col-6">
                <a href="#" class="p-2 pl-0"><span class="icon-twitter"></span></a>
                <a href="#" class="p-2 pl-0"><span class="icon-facebook"></span></a>
                <a href="#" class="p-2 pl-0"><span class="icon-linkedin"></span></a>
                <a href="#" class="p-2 pl-0"><span class="icon-instagram"></span></a>
              </div>
              <div class="col-6">
                <div class="d-flex ml-auto">
                  <a href="#" class="d-flex align-items-center ml-auto mr-4">
                    <span class="icon-phone mr-2"></span>
                    <span class="d-none d-md-inline-block">info@manassehrhema.com</span>
                  </a>
                  <a href="#" class="d-flex align-items-center">
                    <span class="icon-envelope mr-2"></span>
                    <span class="d-none d-md-inline-block">0244 897 879 / 0243 173 721 </span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="site-navbar bg-light">
          <div class="container py-1">
            <div class="row align-items-center">
              <div class="col-2">
                <a href="index.php"><img src="images/logo.jpg" alt="Image placeholder" class="img-fluid"></a>
              </div>
              <div class="col-10">
                <nav class="site-navigation text-right" role="navigation">
                  <div class="container">
                    <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>
  
                    <ul class="site-menu js-clone-nav d-none d-lg-block">
                      <li>
                        <a href="index.php">Home</a>
                      
                      </li>
                      <li>
                        <a href="investments.php">Investments</a>
                      
                      </li>
                      <li  class="active">
                        <a href="gallery.php">Gallery</a>
                       </li>
                      <li><a href="about.php">About Us</a></li>
                      <li><a href="careers.php">Careers</a></li>

                      <li><a href="contact.php">Contact Us</a></li>
                    </ul>
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>

    <div class="site-blocks-cover inner-page overlay" style="background-image: url(images/img_22_colored.jpg); padding-top: 100px;" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7 text-center">
            <h1 class="mb-5">Our <strong>Gallery</strong></h1>
          </div>
        </div>
      </div>
    </div>  

  
    <div class="container gallery-container">



<div class="tz-gallery">

    <div class="row">

        <div class="col-sm-12 col-md-4">
            <a class="lightbox" href="images/farms1.jpeg">
                <img src="images/farms1.jpeg" alt="">
            </a>
        </div>
        <div class="col-sm-6 col-md-4">
            <a class="lightbox" href="images/farms2.jpeg">
                <img src="images/farms2.jpeg" alt="">
            </a>
        </div>
        <div class="col-sm-6 col-md-4">
            <a class="lightbox" href="images/farms3.jpeg">
                <img src="images/farms3.jpeg" alt="">
            </a>
        </div>
        <div class="col-sm-12 col-md-8">
            <a class="lightbox" href="images/farms4.jpeg">
                <img src="images/farms4.jpeg" alt="">
            </a>
        </div>
        <div class="col-sm-6 col-md-4">
            <a class="lightbox" href="images/shell1.jpg">
                <img src="images/shell1.jpg" alt="">
            </a>
        </div> 
        <div class="col-sm-6 col-md-4">
            <a class="lightbox" href="images/shell2.jpeg">
                <img src="images/shell2.jpeg" alt="">
            </a>
        </div>
        <div class="col-sm-6 col-md-4">
            <a class="lightbox" href="images/shell3.jpg">
                <img src="images/shell3.jpg" alt="">
            </a>
        </div> 
        <div class="col-sm-6 col-md-4">
            <a class="lightbox" href="images/petro.jpeg">
                <img src="images/petro.jpeg" alt="">
            </a>
        </div> 
        <div class="col-sm-6 col-md-4">
            <a class="lightbox" href="images/rest2.jpeg">
                <img src="images/rest2.jpeg" alt="">
            </a>
        </div> 
        <div class="col-sm-6 col-md-4">
            <a class="lightbox" href="images/rest3.jpeg">
                <img src="images/rest3.jpeg" alt="">
            </a>
        </div> 
        <div class="col-sm-6 col-md-4">
            <a class="lightbox" href="images/rest4.jpeg">
                <img src="images/rest4.jpeg" alt="">
            </a>
        </div> 

    </div>

</div>

</div>


  </div>
  <?php include "includes/footer.php" ?>


  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
baguetteBox.run('.tz-gallery');
</script> 
  </body>
</html>