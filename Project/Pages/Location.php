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
  $que1 = "SELECT * FROM Location_Table Lo JOIN Cities_Table Ci ON Lo.City = Ci.City_Id JOIN States_Table St ON Lo.State = St.State_Id ORDER BY Lo.Location_Id";
  $sel1 = mysqli_query($con, $que1);
  ?>
  <div class="table-box">

    <table cellpadding="10">

      <tr>
        <th>Id</th>
        <th>City Name</th>
        <th>State Name</th>
        <th>Edit</th>
        <th>Delete Location</th>
        <th>Delete City</th>
      </tr>
      <?php
      while($data1 = mysqli_fetch_assoc($sel1)){
        echo "<tr>
        <td>" . $data1['Location_Id'] . "</td>
        <td>" . $data1['City_Name'] . "</td>
        <td>" . $data1['State_Name'] . "</td>
        <td><a href='../php/LocationForm.php?Id=" . $data1['Location_Id'] . "&tab=Location&Ed=true'>Edit</a></td>
        <td><a href='../php/Delete.php?Id=" . $data1['Location_Id'] . "&tab=Location'>Delete Location</a></td>
        <td><a href='../php/Delete.php?Id=" . $data1['City'] . "&tab=City'>Delete City</a></td>
        </tr>";
      }
      ?>
    </table>
  </div>
  <div>
    <button class="nex" onclick="next()">
      Insert New Data
    </button>
    <script type="text/javascript">
      function next() {
        window.location.href = './LocationForm.php?Ed=false'
      }
    </script>
  </div>
</body>
</html>