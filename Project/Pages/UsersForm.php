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
</head>
<body class="sec">
  <?php
  include('./SidebarMenu.php');
  ?>
  <div class="container">
    <h2>Users Form</h2>
    <form action="../php/Insert.php" method="POST">
      <div class="row100">
        <div class="col">
          <div class="inputBox">
            <input pattern="^[A-Za-z]+\s?[A-Za-z]+" type="text" name="Utxt1" required="required">
            <span class="text">Username</span>
            <span class="line"></span>
          </div>
        </div>
        <div class="col">
          <div class="inputBox">
            <input pattern=".{4,}" type="text" name="Utxt2" required="required">
            <span class="text">Password</span>
            <span class="line"></span>
          </div>
        </div>
      </div>
      <div class="row100">
        <div class="col">
          <div class="inputBox">
            <?php
            include('../php/Connection.php');
            $query="Select * from Roles_Table";
            $rows=mysqli_query($con,$query);
            echo "<select name='Utxt3'>";
            while   ($data=mysqli_fetch_array($rows) )
            {
              echo "<option value='$data[Role_Id]'> ".$data[Role_Type]." </option>";                        
            }
            echo "</select>";
            ?>
          </div>
        </div>
        <div class="col">
          <input type="submit" name="Ubtn1" value="Next">
        </div>
      </div>
    </form>
  </div>
</body>
</html>