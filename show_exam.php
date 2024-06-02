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
<style type="text/css">
  #front_css{
  margin-left: 0px !important;
}

h1, h2, h3, h4, h5, h6 {
    font-size: 20px;
    font-weight: bold;
    margin: 10px 0 5px 0;
    color: #111;
    margin-left: 0px;
}
</style>
<body>

  <!--==========================
  Header
  ============================-->
  <?php include'header.php';?>
  <br><br><br><br>
  <div class="container">
    
      <h1><center>EXAMINATION (TIME TABLE)</center></h1>
<table class="table table-bordered table-striped">
  <tr>
    <th>S.No.</th>
     <th>University</th>
    <th>Course</th>
    
   
    <th>Time Table</th>

    <th>Date</th>
    
  </tr>
  <?php
  $connect=mysqli_connect("localhost","root","","uniweb");
  $query="select * from addfile order by Id DESC";
  $result=mysqli_query($connect,$query);
  //print_r($result);
        if (mysqli_affected_rows($connect)>0) {
          $sn=1;
          while ($key=mysqli_fetch_assoc($result)) {
            ?>
            <tr>
              <td><?php echo $sn++;?></td>
              <td><?php echo $key['university']?></td>
              <td><?php echo $key['course']?></td>
              <td> <a href="cms-admin/<?php echo $key['File']?>" class="link" target="_blank" >click here</a></td>
              <td><?php echo $key['Date']?></td>
            </tr>




    <?php
  }
  
}
else{
  echo "data not found";
}

  ?>
</table>
  </div>
 
 <?php 

  include'footer.php';

  ?>
 

  <!-- - ----------footer end------------- --> -->

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


