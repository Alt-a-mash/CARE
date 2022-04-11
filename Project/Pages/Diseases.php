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
<style>
  .heading
  {
    color: black;
font-size: 38px;
  }


</style>

 
<body class="sec">
  <?php include('./SidebarMenu.php');?>
  <?php
  $que1 = "SELECT * FROM Disease_Table";
  $sel1 = mysqli_query($con, $que1);
  ?>
  <!--<div>
     <h2 id="heading">
     Admins
    </h2>
  </div>-->
  <div class="table-box">
     
    <table cellpadding="10">

      <tr>
        <th>Id</th>
        <th>Disease</th>
        <th>Symptoms</th>
        <th>Description</th>
        <th>Prevention</th>
        <th>Cure</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
      <?php
      while($data1 = mysqli_fetch_assoc($sel1)){
      echo "<tr>
       <td>" . $data1['Disease_Id'] . "</td>
       <td>" . $data1['Disease_Name'] . "</td>
       <td>" . $data1['Disease_Symptom'] . "</td>
       <td>" . $data1['Disease_Description'] . "</td>
       <td>" . $data1['Disease_Prevention'] . "</td>
       <td>" . $data1['Disease_Cure'] . "</td>
       <td><a href='../pages/DiseaseEditForm.php?Id=" . $data1['Disease_Id'] . "&tab=Disease&Ed=true'>Edit</a></td>
       <td><a href='../php/Delete.php?Id=" . $data1['Disease_Id'] . "&tab=Disease'>Delete</a></td>
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
        window.location.href = './DiseaseForm.php?Ed=false'
      }
    </script>
  </div>
</body>
</html>