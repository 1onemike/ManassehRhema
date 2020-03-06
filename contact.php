<!DOCTYPE html>
<html lang="en">
<?php include "includes/header.php" ?>
<style>
.erroralert {
  padding: 20px;
  background-color: red;
  color: white;
}
.successalert {
  padding: 20px;
  background-color: green;
  color: white;
}
.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}

.hidden{
	display: none;
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
                      <li>
                        <a href="gallery.php">Gallery</a>
                       </li>
                      <li><a href="about.php">About Us</a></li>
                      <li><a href="careers.php">Careers</a></li>

                      <li class="active"><a href="contact.php">Contact Us</a></li>
                    </ul>
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>

    <div class="site-blocks-cover inner-page overlay" style="background-image: url(images/farms5.jpg); padding-top: 100px;" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7 text-center">
            <h1 class="mb-5">Get <strong>In Touch</strong></h1>
          </div>
        </div>
      </div>
    </div>  

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
       
          <div class="col-md-12 col-lg-8 mb-5">
          
            
          
            <form id="contact-form" action="" method="post" class="p-5 bg-white">

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Full Name</label>
                  <input type="text" id="name" class="form-control" placeholder="Full Name">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email">Email</label>
                  <input type="email" id="email" class="form-control" placeholder="Email Address">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email">Subject</label>
                  <input type="text" id="subject" class="form-control" placeholder="Subject">
                </div>
              </div>

              

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="message">Message</label> 
                  <textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Enter message here"></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Send" class="btn btn-primary">
                </div>
              </div>

  
            </form>
            <div id = "erroralert" class="erroralert hidden">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  We are sorry, your message couldn't reach us. Kindly try again or contact us directly at info@manassehrhema.com.
</div>

<div id = "successalert" class="successalert hidden">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  Your message has reached us. We'll get back to you shortly.
</div>     

<div id = "sending" class="successalert hidden">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  Sending message, please wait.......
</div>   
          </div>

          <div class="col-lg-4">
            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">Contact Info</h3>
              <p class="mb-0 font-weight-bold">Address</p>
              <p class="mb-4">Gomoa Bewadze, Winneba - Central Region, Ghana</p>    

              <p class="mb-0 font-weight-bold">Phone</p>
              <p class="mb-4"><a href="#"> Tel. +233 244 897 879 / +233 243 173 721 </a></p>

              <p class="mb-0 font-weight-bold">Email Address</p>
              <p class="mb-0"><a href="#">info@manassehrhema.com</a></p>

            </div>
            
           
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
	$("#contact-form").submit(function(event){
    // cancels the form submission
    event.preventDefault();
	//get form values
    $( "#sending" ).removeClass( "hidden" );
    var name = $("#name").val();
    var email = $("#email").val();
    var subject = $("#subject").val();
    var message = $("#message").val();
	

	//submit to php email script
    $.ajax({
        type: "POST",
        url: "smtp.php",
        data: "name=" + name + "&email=" + email+ "&subject=" + subject  + "&message=" + message,

		//get response and update results div
		success : function(response){
            if (response == 1){ 
			formSuccess1();
			}else{
			formError1();
      }
      
      //alert(response);
        }
    });
});
		function formSuccess1(){
			$( "#successalert" ).removeClass( "hidden" );
            $( "#sending" ).addClass( "hidden" );
		}
		function formError1(){
			$( "#erroralert" ).removeClass( "hidden" );
            $( "#sending" ).addClass( "hidden" );
		}
		
	
	</script>
  </body>
</html>