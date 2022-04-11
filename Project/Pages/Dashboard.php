<?php include('../php/Session.php');?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>CARE</title>
  <link rel="stylesheet" href="../StyleSheets/DashboardStyleSheet.css">
  <link rel="stylesheet" href="../StyleSheets/cardsStyleSheet.css">
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
  <?php
  include('../php/Connection.php');
  ?>
</head>
<body class="sec">
  <?php include('./SidebarMenu.php');?>
  <div class="container">
    <?php
    $que1 = "SELECT * FROM Roles_Table";
    $sel1 = mysqli_query($con, $que1);
    while($data1 = mysqli_fetch_assoc($sel1)){
      echo "
      <div class='box'>
      <div class='content'>
      <h2>" . $data1['Role_Id'] . "</h2>
      <h3>" . $data1['Role_Type'] . "</h3>
      <p>Here you can add view and delete data of " . $data1['Role_Type'] . " Table.</p>
      <a href='./" . $data1['Role_Type'] . ".php'>Read More</a>
      </div>
      </div>";
    }
    ?>
  </div>
</body>
</html>