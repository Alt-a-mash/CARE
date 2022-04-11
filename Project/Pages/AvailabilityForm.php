<?php include('../php/Session.php');?>
<?php
if($_SESSION['Role'] != 2)
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

$today = date("y-m-d"); 
  $Id = $_SESSION['Id'];
  $query = "SELECT * FROM Doctors_Table WHERE Doctors_Id = $Id";
  $run = mysqli_query($con,$query);
  $result = mysqli_fetch_array($run);
  ?>
  <div class="container">
    <h2>Availability</h2>
    <form method="POST" action="../php/Insert.php">
      <div class="row100">
        <div class="col">
          <div class="inputBox">
            <input type="text" name="Avtxt1" required="required" value="<?php echo $result['Doctors_Name'];?>">
            <span class="text">Doctor Name</span>
            <span class="line"></span>
          </div>
        </div>
      </div>
      <div class="row100">
        <div class="col">
          <div class="inputBox">
            <input type="date" name="Avtxt2" required min="20<?php echo $today;?>">
            <span class="text">Date</span>
            <span class="line"></span>
          </div>
        </div>
        <div class="col">
          <div class="inputBox textarea">
            <?php
              $query4="SELECT * FROM Available_Table";
              $rows4=mysqli_query($con,$query4);
              echo "<select name='Avtxt3'>";
              while   ($data4=mysqli_fetch_array($rows4) )
              {
                echo "<option value='$data4[Available_Id]'> " . $data4['Available'] . " </option>";                        
              }
              echo "</select>";
              ?>
          </div>
        </div>
      </div>
      <div class="row100">
        <div class="col">
          <input type="submit" name="Avbtn1" value="Done">
        </div>
      </div>
    </form>
  </div>
</body>
</html>