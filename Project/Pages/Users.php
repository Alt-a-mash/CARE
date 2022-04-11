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
  <?php include('../php/Connection.php');?>
</head>
<body class="sec">
  <?php
  include('./SidebarMenu.php');
  $que1 = "SELECT * FROM Users_Table Us JOIN Roles_Table Ro ON Us.User_Role = Ro.Role_Id";
  $sel1 = mysqli_query($con, $que1);
  ?>
  <div class="table-box">

    <table cellpadding="10">

      <tr>
        <th>Id</th>
        <th>Userame</th>
        <th>Password</th>
        <th>Role</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
      <?php
      while($data1 = mysqli_fetch_assoc($sel1)){
        echo "<tr>
        <td>" . $data1['User_Id'] . "</td>
        <td>" . $data1['Username'] . "</td>
        <td>" . $data1['Password'] . "</td>
        <td>" . $data1['Role_Type'] . "</td>
        <td><a href='../Pages/UsersEditForm.php?Id=" . $data1['User_Id'] . "&tab=User&Ed=true'>Edit</a></td>
        <td><a href='../php/Delete.php?Id=" . $data1['User_Id'] . "&tab=User'>Delete</a></td>
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
        window.location.href = './UsersForm.php?Ed=false'
      }
    </script>
  </div>
</body>
</html>