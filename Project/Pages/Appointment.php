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
  $que1 = "SELECT * FROM Appointments_Table Ap JOIN Patient_Table Pa ON Ap.Patient = Pa.Patient_Id JOIN Doctors_Table Do ON Ap.Doctor = Do.Doctors_Id JOIN Timings_Table Ti ON Ap.Timing = Ti.Timing_Id";
  $sel1 = mysqli_query($con, $que1);
  ?>
  <div class="table-box">
    <table cellpadding="10">
      <tr>
        <th>Appointment Id</th>
        <th>Patient Name</th>
        <th>Doctor Name</th>
        <th>Appointment Date</th>
        <th>Starting Time</th>
        <th>Ending Time</th>
        <th>Description</th>
        <th>Fee</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
      <?php
      while($data1 = mysqli_fetch_assoc($sel1)){
        echo "<tr>
        <td>" . $data1['Appointment_Id'] . "</td>
        <td>" . $data1['Patient_Name'] . "</td>
        <td>" . $data1['Doctors_Name'] . "</td>
        <td>" . $data1['Appointment_Date'] . "</td>
        <td>" . $data1['Starting_Time'] . "</td>
        <td>" . $data1['Ending_Time'] . "</td>
        <td>" . $data1['Appointment_Info'] . "</td>
        <td>" . $data1['Price'] . "</td>
        <td><a href='../php/AppointmentForm.php?Id=" . $data1['Appointment_Id'] . "&tab=Appointment&Ed=true'>Edit</a></td>
        <td><a href='../php/Delete.php?Id=" . $data1['Appointment_Id'] . "&tab=Appointment'>Delete</a></td>
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
        window.location.href = './AppointmentForm.php?Ed=false'
      }
    </script>
  </div>
</body>
</html>