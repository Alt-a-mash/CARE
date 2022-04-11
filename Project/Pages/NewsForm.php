<?php include('../php/Session.php');?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CARE</title>
  <link rel="stylesheet" href="../StyleSheets/DashboardStyleSheet.css">
  <link rel="stylesheet" href="../StyleSheets/FormStyleSheet.css">
  <link rel="icon" type="image" href="../Images/Logo.png" sizes="5x5">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $(".menu-icon").click(function(){
        $(".menu-icon").toggleClass("active")
      })
      $(".menu-icon").click(function(){
        $(".sidebar").toggleClass("active")
      })
      $(".menu-icon").click(function(){
        $(".sec").toggleClass("active")
      })
      $(".menu-icon").click(function(){
        $(".container").toggleClass("active")
      })
    })
  </script>
</head>
<body class="sec">
  <?php
  include('./SidebarMenu.php');
  ?>
  <div class="container">
    <h2>News Form</h2>
    <form method="POST" action="../php/Insert.php" enctype="multipart/form-data">
      <div class="row100">
        <div class="col">
          <div class="inputBox textarea">
            <textarea pattern="^[A-Za-z]+\s?[A-Za-z]+"  required="required" name="Ntxt1"></textarea>
            <span class="text">News...</span>
            <span class="line"></span>
          </div>
        </div>
      </div>
      <div class="row100">
        <div class="col">
          <div class="inputBox">
            <input type="text" name="Ntxt2" required="required">
            <span class="text">Date</span>
            <span class="line"></span>
          </div>
        </div>
        <div class="col">
          <div class="inputBox textarea">
            <label for="file-upload" class="custom-file-upload">
              <i class="fa fa-cloud-upload"></i>Choose File
            </label>
            <input type="file" id="file-upload" name="Ntxt3" required="required">
            <span class="text"></span>
          </div>
        </div>
      </div>
      <div class="row100">
        <div class="col">
          <input type="submit" name="Nbtn1" value="Send">
        </div>
      </div>
    </form>
  </div>
</body>
</html>