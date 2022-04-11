<?php include('../php/Session.php');?>
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
  <?php include('./SidebarMenu.php');?>
  <?php
  $What = $_GET["Ed"];
  if ($What == "false") {
    ?>
    <div class="container">
      <h2>Doctor Form</h2>
      <form method="POST" action="../php/Insert.php" enctype="multipart/form-data">
        <div class="row100">
          <div class="col">
            <div class="inputBox">
              <input type="text" name="Dtxt1" required="required">
              <span class="text">Name</span>
              <span class="line"></span>
            </div>
          </div>
          <div class="col">
            <div class="inputBox">
              <input type="text" name="Dtxt2" required="required">
              <span class="text">Address</span>
              <span class="line"></span>
            </div>
          </div>
        </div>
        <div class="row100">
          <div class="col">
            <div class="inputBox">
              <input type="text" name="Dtxt3" required="required">
              <span class="text">Phone</span>
              <span class="line"></span>
            </div>
          </div>
          <div class="col">
            <div class="inputBox">
              <input type="text" name="Dtxt4" required="required">
              <span class="text">Email</span>
              <span class="line"></span>
            </div>
          </div>
        </div>
        <div class="row100">
          <div class="col">
            <div class="inputBox">
              <?php
              $query1="SELECT * FROM Users_Table WHERE User_Role = 2";
              $rows1=mysqli_query($con,$query1);
              echo "<select name='Dtxt5'>";
              while   ($data1=mysqli_fetch_array($rows1) )
              {
                echo "<option value='$data1[User_Id]'> " . $data1['Username'] . " </option>";                        
              }
              echo "</select>";
              ?>
            </div>
          </div>
          <div class="col">
            <div class="inputBox">
              <?php
              $query2="SELECT * FROM Specialty_Table";
              $rows2=mysqli_query($con,$query2);
              echo "<select name='Dtxt7'>";
              while   ($data2=mysqli_fetch_array($rows2) )
              {
                echo "<option value='$data2[Specialty_Id]'> " . $data2[Specialty_Id] . ": " . $data2[Specialty_Type] . " </option>";                        
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
              $query3="SELECT * FROM Location_Table Lo JOIN Cities_Table Ct ON Lo.City = Ct.City_Id JOIN States_Table St ON Lo.State = St.State_Id ORDER BY Lo.Location_Id";
              $rows3=mysqli_query($con,$query3);
              echo "<select name='Dtxt8'>";
              while   ($data3=mysqli_fetch_array($rows3) )
              {
                echo "<option value='$data3[Location_Id]'> " . $data3[Location_Id] . ": " . $data3[State_Name] . "," . $data3[City_Name] . " </option>";                        
              }
              echo "</select>";
              ?>
            </div>
          </div>
          <div class="col">
            <div class="inputBox">
              <input type="text" name="Dtxt9" required>
              <span class="text">Fee</span>
              <span class="line"></span>
            </div>
          </div>
        </div>
        <div class="row100">
          <div class="col">
            <div class="inputBox textarea">
              <label for="file-upload" class="custom-file-upload">
                <i class="fa fa-cloud-upload"></i>Choose File
              </label>
              <input type="file" id="file-upload" name="Dtxt6" required="required">
              <span class="text"></span>
            </div>
          </div>
          <div class="col">
            <input type="submit" name="Dbtn1" value="Done">
          </div>
        </div>
      </form>
    </div>
    <?php
  }
  if ($What == "true") {
    $Id = $_GET["Id"];
    $query = "SELECT * FROM Doctors_Table Do JOIN Users_Table Us ON Do.User_Id = Us.User_Id JOIN Roles_Table Rt ON Us.User_Role = Rt.Role_Id JOIN Specialty_Table Sp ON Do.Specialty = Sp.Specialty_Id JOIN Location_Table Lo ON Do.Location = Lo.Location_Id JOIN Cities_Table Ct ON Lo.City = Ct.City_Id JOIN States_Table St ON Lo.State = St.State_Id WHERE Do.Doctors_Id = $Id";
    $run = mysqli_query($con,$query);
    $result = mysqli_fetch_array($run);
    ?>
    <div class="container">
      <h2>Doctor Form</h2>
      <form method="POST" action="../php/Update.php?Id=<?php echo $result['Doctors_Id'];?>&tab=Doctor" enctype="multipart/form-data">
        <div class="row100">
          <div class="col">
            <div class="inputBox">
              <input pattern="^[A-Za-z]+\s?[A-Za-z]+" type="text" name="Dtxt1" required="required" value="<?php echo $result['Doctors_Name'];?>">
              <span class="text">Name</span>
              <span class="line"></span>
            </div>
          </div>
          <div class="col">
            <div class="inputBox">
              <input type="text" name="Dtxt2" required="required" value="<?php echo $result['Doctors_Address'];?>">
              <span class="text">Address</span>
              <span class="line"></span>
            </div>
          </div>
        </div>
        <div class="row100">
          <div class="col">
            <div class="inputBox">
              <input pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" type="text" name="Dtxt3" required="required" value="<?php echo $result['Doctors_Phone'];?>">
              <span class="text">Phone</span>
              <span class="line"></span>
            </div>
          </div>
          <div class="col">
            <div class="inputBox">
              <input pattern="^[A-Za-z0-9-_]+(\.[_A-Za-z0-9-]+)*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)*(\.[A-Za-z]{2,4})" type="text" name="Dtxt4" required="required" value="<?php echo $result['Doctors_Email'];?>">
              <span class="text">Email</span>
              <span class="line"></span>
            </div>
          </div>
        </div>
        <div class="row100">
          <div class="col">
            <div class="inputBox">
              <?php
              $query4="SELECT * FROM Users_Table WHERE User_Role = 2";
              $rows4=mysqli_query($con,$query4);
              echo "<select name='Dtxt5'>";
              while   ($data4=mysqli_fetch_array($rows4) )
              {
                echo "<option value='$data4[User_Id]'> " . $data4['Username'] . " </option>";                        
              }
              echo "</select>";
              ?>
            </div>
          </div>
          <div class="col">
            <div class="inputBox">
              <?php
              $query2="SELECT * FROM Specialty_Table";
              $rows2=mysqli_query($con,$query2);
              echo "<select name='Dtxt7'>";
              while   ($data2=mysqli_fetch_array($rows2) )
              {
                echo "<option value='$data2[Specialty_Id]'> " . $data2[Specialty_Id] . ": " . $data2[Specialty_Type] . " </option>";                        
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
              $query3="SELECT * FROM Location_Table Lo JOIN Cities_Table Ct ON Lo.City = Ct.City_Id JOIN States_Table St ON Lo.State = St.State_Id ORDER BY Lo.Location_Id";
              $rows3=mysqli_query($con,$query3);
              echo "<select name='Dtxt8'>";
              while   ($data3=mysqli_fetch_array($rows3) )
              {
                echo "<option value='$data3[Location_Id]'> " . $data3[Location_Id] . ": " . $data3[State_Name] . "," . $data3[City_Name] . " </option>";                        
              }
              echo "</select>";
              ?>
            </div>
          </div>
          <div class="col">
            <div class="inputBox">
              <input type="text" name="Dtxt9" required value="<?php echo $result['Fee'];?>">
              <span class="text">Fee</span>
              <span class="line"></span>
            </div>
          </div>
        </div>
        <div class="row100">
          <div class="col">
            <div class="inputBox textarea">
              <label for="file-upload" class="custom-file-upload">
                <i class="fa fa-cloud-upload"></i>Choose File
              </label>
              <input type="file" id="file-upload" name="Dtxt6" required="required">
              <span class="text"></span>
            </div>
          </div>
          <div class="col">
            <input type="submit" name="Dbtn1" value="Done">
          </div>
        </div>
      </form>
    </div>
    <?php
  }
  ?>
</body>
</html>