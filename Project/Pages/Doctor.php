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
  $que1 = "SELECT * FROM Doctors_Table Do JOIN Users_Table Us ON Do.User_Id = Us.User_Id JOIN Roles_Table Rt ON Us.User_Role = Rt.Role_Id JOIN Specialty_Table Sp ON Do.Specialty = Sp.Specialty_Id JOIN Location_Table Lo ON Do.Location = Lo.Location_Id JOIN Cities_Table Ct ON Lo.City = Ct.City_Id JOIN States_Table St ON Lo.State = St.State_Id";
  $sel1 = mysqli_query($con, $que1);
  ?>
  <div class="table-box">
     
    <table cellpadding="10">

      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Username</th>
        <th>Role</th>
        <th>Image</th>
        <th>Specialty</th>
        <th>Location</th>
        <th>Fee</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
      <?php
      while($data1 = mysqli_fetch_assoc($sel1)){
      echo "<tr>
       <td>"  . $data1['Doctors_Id'] . "</td>
       <td>" . $data1['Doctors_Name'] . "</td>
       <td>" . $data1['Doctors_Address'] . "</td>
       <td>" . $data1['Doctors_Phone'] . "</td>
       <td>" . $data1['Doctors_Email'] . "</td>
       <td>" . $data1['Username'] . "</td>
       <td>" . $data1['Role_Type'] . "</td>
       <td><img src='$data1[Doctors_Image]' width=55 height=60></td>
       <td>" . $data1['Specialty_Type'] . "</td>
       <td>" . $data1['State_Name'] . "," . $data1['City_Name'] . "</td>
       <td>" . $data1['Fee'] . "</td>
       <td><a href='../pages/DoctorForm.php?Id=" . $data1['Doctors_Id'] . "&tab=Doctor&Ed=true'>Edit</a></td>
       <td><a href='../php/Delete.php?Id=" . $data1['Doctors_Id'] . "&tab=Doctor'>Delete</a></td>
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
        window.location.href = './DoctorForm.php?Ed=false'
      }
    </script>
  </div>
</body>
</html>