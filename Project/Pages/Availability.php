<?php include('../php/Session.php');?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>CARE</title>
  <link rel="stylesheet" href="../StyleSheets/DashboardStyleSheet.css">
  <link rel="stylesheet" href="../StyleSheets/TableStyleSheet.css">
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
  <?php
  include('./SidebarMenu.php');
  if($_SESSION['Role'] == 2){
    $Doc = $_SESSION['Id'];
  $que1 = "SELECT * FROM Availability_Table Av JOIN Doctors_Table Do ON Av.Availability_Doctor = Do.Doctors_Id JOIN Available_Table Ava ON Av.Availability = Ava.Available_Id WHERE Do.Doctors_Id = $Doc";
  }
  if($_SESSION['Role'] == 1){
  $que1 = "SELECT * FROM Availability_Table Av JOIN Doctors_Table Do ON Av.Availability_Doctor = Do.Doctors_Id JOIN Available_Table Ava ON Av.Availability = Ava.Available_Id";
  }
  $sel1 = mysqli_query($con, $que1);
  ?>
  <div class="table-box">

    <table cellpadding="10">

      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Dates</th>
        <th>Availability</th>
        <th>Delete</th>
      </tr>
      <?php
      while($data1 = mysqli_fetch_assoc($sel1)){
        echo "<tr>
        <td>" . $data1['Availability_Id'] . "</td>
        <td>" . $data1['Doctors_Name'] . "</td>
        <td>" . $data1['Availability_Date'] . "</td>
        <td>" . $data1['Available'] . "</td>
        <td><a href='../php/Delete.php?Id=" . $data1['Availability_Id'] . "&tab=Availability'>Delete</a></td>
        </tr>";
      }
      ?>
    </table>
  </div>
  <div>
    <button class="nex" onclick="next()">
      Add New Dates
    </button>
    <script type="text/javascript">
      function next() {
        window.location.href = './AvailabilityForm.php'
      }
    </script>
  </div>
</body>
</html>