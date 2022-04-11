<?php session_start();?>
<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CARE</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="author" content="" />
  <!-- Facebook and Twitter integration -->
  <meta property="og:title" content=""/>
  <meta property="og:image" content=""/>
  <meta property="og:url" content=""/>
  <meta property="og:site_name" content=""/>
  <meta property="og:description" content=""/>
  <meta name="twitter:title" content="" />
  <meta name="twitter:image" content="" />
  <meta name="twitter:url" content="" />
  <meta name="twitter:card" content="" />
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <link rel="icon" type="image" href="./Images/Logo.png" sizes="5x5">
  <!-- Animate.css -->
  <link rel="stylesheet" href="css/animate.css">
  <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="css/icomoon.css">
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <!-- Magnific Popup -->
  <link rel="stylesheet" href="css/magnific-popup.css">
  <!-- Owl Carousel  -->
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <!-- Flexslider  -->
  <link rel="stylesheet" href="css/flexslider.css">
  <!-- Flaticons  -->
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  <!-- Theme style  -->
  <link rel="stylesheet" href="css/style.css">
  <!-- Modernizr JS -->
  <script src="js/modernizr-2.6.2.min.js"></script>
  <!-- FOR IE9 below -->
  <!--[if lt IE 9]>
  <script src="js/respond.min.js"></script>
<![endif]-->
</head>
<?php include('./php/Connection.php');?>
<body>
  <div id="page">
   <nav class="colorlib-nav" role="navigation">
    <div class="top-menu">
     <div class="menu-wrap">
      <div class="container">
       <div class="row">
        <div class="col-xs-10">
         <div class="menu-1">
          <ul>
            <li><a href="index.php"><img src="css/logo.png" height="70"></img></a></li>
            <li><a href="doctors.php">Doctors</a></li>
            <li><a href="DT.php">diseases And treatments</a></li>
            <li><a href="LN.php">Latest News</a></li>
            <li><a href="doctors.php?wh=1">Book Appointment</a></li>
            <li><a href="register.php">Register</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-2" style="margin-top: 13px">
        <?php
        if(isset($_SESSION['Id'])){
          if($_SESSION['Id'] != null)
          {
            echo "<p class='btn-cta'><a href='Logout.php'><span> LOGOUT </span></a></p>";
          }
        }
        else{
          echo "<p class='btn-cta'><a data-toggle='modal' data-target='#exampleModal' ><span> LOGIN </span></a></p>";
        }
        ?>
      </div>
    </div>
  </div>
</div>
</div>
</nav>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Enter Your Credentials To Continue</h5>
      </div>
      <form action="./php/Login.php" method="POST">
        <div class="modal-body">
          <div class="row form-group">
            <div class="col-md-12">
              <label for="fname">User Name</label>
              <input type="text" name="txt1" id="fname" class="form-control mb" placeholder="username"/>
            </div>
          </div>
          <div class="row form-group">
            <div class="col-md-12">
              <label for="email"> Password </label>
              <input type="password" name="txt2" id="email" class="form-control" placeholder="password"/>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" name="btn2" class="btn btn-primary">Cotinue</button>
        </div>
      </form>
    </div>
  </div>
</div>