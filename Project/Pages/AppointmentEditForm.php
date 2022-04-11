<?php include('../php/Session.php');?>
<?php
if($_SESSION['Role'] == 2)
{
  header('location:../Pages/Dashboard.php');
}
?>
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
  <?php include('../php/Connection.php');?>
</head>
<body class="sec">
  <?php
  include('./SidebarMenu.php');
  $Id = $_GET["Id"];
  $query = "SELECT * FROM Appointments_Table Ap JOIN Patient_Table Pa ON Ap.Patient = Pa.Patient_Id JOIN Doctors_Table Do ON Ap.Doctor = Do.Doctors_Id JOIN Days_Table Da ON Ap.Day = Da.Day_Id JOIN Timings_Table Ti ON Ap.Timing = Ti.Timing_Id WHERE Ap.Appointment_Id = $Id";
  $run = mysqli_query($con,$query);
  $result = mysqli_fetch_array($run);
  ?>
  <div class="container">
    <h2>Appointment Form</h2>
    <form method="POST" action="../php/Insert.php">
      <div class="row100">
        <div class="col">
          <div class="inputBox">
            <?php
            $query1="SELECT * FROM Patient_Table";
            $rows1=mysqli_query($con,$query1);
            echo "<select name='Aptxt1'>";
            while   ($data1=mysqli_fetch_array($rows1) )
            {
              echo "<option value='$data1[Patient_Id]'> ".$data1[Patient_Name]." </option>";                        
            }
            echo "</select>";
            ?>
          </div>
        </div>
        <div class="col">
          <div class="inputBox">
            <?php
            $query2="SELECT * FROM Doctors_Table";
            $rows2=mysqli_query($con,$query2);
            echo "<select name='Aptxt2'>";
            while   ($data2=mysqli_fetch_array($rows2) )
            {
              echo "<option value='$data2[Doctors_Id]'> ".$data2[Doctors_Name]." </option>";                        
            }
            echo "</select>";
            ?>
          </div>
        </div>
      </div>
      <div class="row100">
        <div class="col">
          <div class="inputBox">
            <input type="date" name="Aptxt3" required="required"  min="2020-03-10">
            <span class="text">Date of Appointment</span>
            <span class="line"></span>
          </div>
        </div>
        <div class="col">
          <div class="inputBox">
            <?php
            $query3="SELECT * FROM Days_Table";
            $rows3=mysqli_query($con,$query3);
            echo "<select name='Aptxt4'>";
            while   ($data3=mysqli_fetch_array($rows3) )
            {
              echo "<option value='$data3[Day_Id]'> ".$data3[Days]." </option>";                        
            }
            echo "</select>";
            ?>
          </div>
        </div>
      </div>
      <div class="row100">
        <div class="col">
          <div class="inputBox">
            <?php
            $query4="SELECT * FROM Timings_Table";
            $rows4=mysqli_query($con,$query4);
            echo "<select name='Aptxt5'>";
            while   ($data4=mysqli_fetch_array($rows4) )
            {
              echo "<option value='$data4[Timing_Id]'> " . $data4[Starting_Time] . "-" . $data4[Ending_Time] . " </option>";                        
            }
            echo "</select>";
            ?>
          </div>
        </div>
        <div class="col">
          <div class="inputBox">
            <input type="text" name="Aptxt6" required="required" value="<?php echo $result['Price'];?>">
            <span class="text">Appointment Fee</span>
            <span class="line"></span>
          </div>
        </div>
      </div>
      <div class="row100">
        <div class="col">
          <div class="inputBox">
            <input required="required" name="Aptxt7" value="<?php echo $result['Appointment_Info'];?>">
            <span class="text">Appointment Description</span>
            <span class="line"></span>
          </div>
        </div>
      </div>
      <div class="row100">
        <div class="col">
          <input type="submit" name="Apbtn1" value="Done">
        </div>
      </div>
    </form>
  </div>
</body>
</html>