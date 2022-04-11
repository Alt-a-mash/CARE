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
  $query = "SELECT * FROM Patient_Table Pa JOIN Users_Table Us ON Pa.User_Id = Us.User_Id JOIN Roles_Table Rt ON Us.User_Role = Rt.Role_Id WHERE Pa.Patient_Id = $Id";
  $run = mysqli_query($con,$query);
  $result = mysqli_fetch_array($run);
  ?>
  <div class="container">
    <h2>Patient Form</h2>
    <form method="POST" action="../php/Update.php?Id=<?php echo $Id;?>&tab=Patient">
      <div class="row100">
        <div class="col">
          <div class="inputBox">
            <input pattern="^[A-Za-z]+\s?[A-Za-z]+" type="text" name="Ptxt1" required="required" value="<?php echo $result['Patient_Name'];?>">
            <span class="text">Name</span>
            <span class="line"></span>
          </div>
        </div>
        <div class="col">
          <div class="inputBox">
            <input type="text" name="Ptxt2" required="required" value="<?php echo $result['Patient_Address'];?>">
            <span class="text">Address</span>
            <span class="line"></span>
          </div>
        </div>
      </div>
      <div class="row100">
        <div class="col">
          <div class="inputBox">
            <input type="text" name="Ptxt3" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required="required" value="<?php echo $result['Patient_Phone'];?>">
            <span class="text">Phone</span>
            <span class="line"></span>
          </div>
        </div>
        <div class="col">
          <div class="inputBox">
            <input pattern="^[A-Za-z0-9-_]+(\.[_A-Za-z0-9-]+)*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)*(\.[A-Za-z]{2,4})" type="text" name="Ptxt4" required="required" value="<?php echo $result['Patient_Email'];?>">
            <span class="text">Email</span>
            <span class="line"></span>
          </div>
        </div>
      </div>
      <div class="row100">
        <div class="col">
          <div class="inputBox">
            <?php
            $query1="SELECT * FROM Users_Table WHERE User_Role = 3";
            $rows1=mysqli_query($con,$query1);
            echo "<select name='Ptxt5'>";
            while   ($data1=mysqli_fetch_array($rows1) )
            {
              echo "<option value='$data1[User_Id]'> " . $data1['Username'] . " </option>";                        
            }
            echo "</select>";
            ?>
          </div>
        </div>
        <div class="col">
          <input type="submit" name="Pbtn1" value="Done">
        </div>
      </div>
    </form>
  </div>
</body>
</html>