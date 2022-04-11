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
  $query = "SELECT * FROM Disease_Table WHERE Disease_Id = $Id";
  $run = mysqli_query($con,$query);
  $result = mysqli_fetch_array($run);
  ?>
  <div class="container">
    <h2>Diseases</h2>
    <form method="POST" action="../php/Update.php?Id=<?php echo $Id;?>&tab=Disease">
      <div class="row100">
        <div class="col">
          <div class="inputBox">
            <input pattern="^[A-Za-z]+\s?[A-Za-z]+" type="text" name="Ditxt1" required="required" value="<?php echo $result['Disease_Name'];?>">
            <span class="text">Disease</span>
            <span class="line"></span>
          </div>
        </div>
        <div class="col">
          <div class="inputBox">
            <input type="text" name="Ditxt2" required="required" value="<?php echo $result['Disease_Symptom'];?>">
            <span class="text">Symptom</span>
            <span class="line"></span>
          </div>
        </div>
      </div>
      <div class="row100">
        <div class="col">
          <div class="inputBox">
            <input type="text" required="required" name="Ditxt3" value="<?php echo $result['Disease_Description'];?>">
            <span class="text">Description</span>
            <span class="line"></span>
          </div>
        </div>
        <div class="col">
          <div class="inputBox">
            <input type="text" required="required" name="Ditxt4" value="<?php echo $result['Disease_Prevention'];?>">
            <span class="text">Prevention</span>
            <span class="line"></span>
          </div>
        </div>
      </div>
      <div class="row100">
        <div class="col">
          <div class="inputBox">
            <input type="text" name="Ditxt5" required="required" value="<?php echo $result['Disease_Cure'];?>">
            <span class="text">Cure</span>
            <span class="line"></span>
          </div>
        </div>
        <div class="col">
          <input type="submit" name="Dibtn1" value="Done">
        </div>
      </div>
    </form>
  </div>
</body>
</html>