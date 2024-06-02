<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Universitie Website</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <img src="img/uni_web.jpg" alt="" class="img-fluid" style="
     margin-top: -2px;
    height: 39px;
    width: 41px;
    border-radius: 42px;

    margin-left: -58px;">


  <!-- =======================================================
    Theme Name: NewBiz
    Theme URL: https://bootstrapmade.com/newbiz-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
  Header
  ============================-->
  <?php include'header.php';?>
 

  <!--==========================
    Intro Section
  ============================-->
  <!-- <section id="intro" class="clearfix">
    <div class="container">

      <div class="intro-img">
        <img src="img/intro-img.svg" alt="" class="img-fluid">
      </div>

      <div class="intro-info">
        <h2>We provide<br><span>solutions</span><br>for your STUDY!</h2>
        <div>
          <a href="#about" class="btn-get-started scrollto">Get Started</a>
           <a href="#universities" class="btn-universities scrollto">Universities</a> -->
       <!--  </div>
      </div>

    </div>
  </section> --> <!-- #intro -->

  <main id="main">


    <!--  Contact Section
    ============================--> 
    <section id="contact">
      <div class="container-fluid">

        <div class="section-header">
          <h3>Contact Us</h3>
        </div>

        <div class="row wow fadeInUp">

          <div class="col-lg-6">
            <div class="map mb-4 mb-lg-0">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d118979.66687689218!2d81.49666868032612!3d21.26693122041014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a28de1466e5178d%3A0xc942f288caea5459!2sRITEE%20College%20of%20Education%2C%20Raipur!5e0!3m2!1sen!2sin!4v1689234847693!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="row">
              <div class="col-md-5 info">
                <i class="ion-ios-location-outline"></i>
                <p>Veer Savarkar Nagar Ward no 1 Heerapur,Raipur(C.G.)</p>
              </div>
              <div class="col-md-4 info">
                <i class="ion-ios-email-outline"></i>
                <p>uniweb123@gmail.com</p>
              </div>
              <div class="col-md-3 info">
                <i class="ion-ios-telephone-outline"></i>
                <p>+91 6261399819</p>
              </div>
            </div>

            <div class="form">
               <?php if(isset($_REQUEST['success'])){ ?>
                  <p class="text-success"> mysuccess</p>
                <?php } ?>
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>
              <form action="Insert.php" method="post" role="form" >
                <div class="form-row">
                  <div class="form-group col-lg-6">
                    <input type="text" name="personName" class="form-control" id="Name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group col-lg-6">
                    <input type="email" class="form-control" name="personEmail" id="Email" placeholder="Your Email" data-rule="Email" data-msg="Please enter a valid email" />
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="personCourse" id="Course" placeholder=" Your scourse" data-rule="minlen:2" data-msg="Please enter your course" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="personMsg" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit" title="Send Message">Submit</button>
                </div>
                </form>

            </div>
          </div>

        </div>

      </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->
  <!-- ----------footer start------------- -->


  <?php 

  include'footer.php';

  ?>
 

  <!-- - ----------footer end------------- --> 

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/mobile-nav/mobile-nav.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
<!-- img/favicon.png -->
