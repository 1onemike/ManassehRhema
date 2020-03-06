<!DOCTYPE html>
<html lang="en">
<?php include "includes/header.php" ?>


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
                      <li >
                        <a href="index.php">Home</a>
                      
                      </li>
                      <li>
                        <a href="investments.php">Investments</a>
                      
                      </li>
                      <li>
                        <a href="gallery.php">Gallery</a>
                       </li>
                      <li class="active"><a href="about.php">About Us</a></li>
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
    
      <div class="site-blocks-cover inner-page overlay" style="background-image: url(images/aboutbg.jpeg); padding-top: 100px;"  data-aos="fade" data-stellar-background-ratio="0.5">
          <div class="container">
            <div class="row align-items-center justify-content-center">
              <div class="col-md-7 text-center">
                <h1 class="mb-5">About <strong>Us</strong></h1>
              </div>
           </div>
           </div>
      </div>  
      <div class="site-section ">
      <div class="container">
        <div class="row">
          <div class="col-md-6 bg-image bg-sm-height mb-5 mb-md-0 order-md-2" style="background-image: url('images/grid.jpg');" data-aos="fade-up"></div>
          <div class="col-md-6 pr-md-5 order-md-1 bg-light">
            <br>
            <h2 class="display-3 line-height-xs text-black mb-4"> <strong>Manasseh Rhema Limited </strong></h2>
            <p class="mb-4">A wholly owned Ghanaian company  registered and incorporated under the laws of Ghana in the year 1996. With well experienced board of directors who have used their expertise to shape and advance into other areas of business. 


          </p>

          <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3"><strong>MISSION</strong></h3>
              <p>To harness expertise and steer it towards creating jobs and to reduce poverty.</p>
            </div>

            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3"><strong>VISION</strong></h3>
              <p>To be one of the best companies in west Africa which has used entrepreneurship to reduce poverty.</p>
            </div>
            
            <br><br>
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
<script>
$(document).ready(function(){

$(".filter-button").click(function(){
var value = $(this).attr('data-filter');

if(value == "all")
{

$('.filter').show('1000');
}
else
{

$(".filter").not('.'+value).hide('3000');
$('.filter').filter('.'+value).show('3000');

}
});

if ($(".filter-button").removeClass("active")) {
$(this).removeClass("active");
}
$(this).addClass("active");

});
</script>
    
  </body>
</html>