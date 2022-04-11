<div class="sidebar">
  <div class="menu-icon">
    <span></span>
    <span></span>
    <span></span>
  </div>
  <a href="./<?php echo $stat = ($_SESSION['Role'] == 1) ? "AdminForm" : "DoctorForm";?>.php?Id=<?php echo $_SESSION['Id'];?>&tab=Admin&Ed=true"><img src="<?php echo $_SESSION['Img'];?>" height="100"><h5><?php echo $_SESSION['Name'];?></h5></a>
  <ul class="menu">
    <li><a href="./Dashboard.php">Home</a></li>
    <li><a href="./Users.php">Users</a></li>
    <li><a href="./Diseases.php">Diseases</a></li>
    <li><a href="./Appointment.php">Appointments</a></li>
    <?php
if($_SESSION['Role'] == 2)
{
  echo "<li><a href='./AvailabilityForm.php'>Availability</a></li>";
}?>
    <li><a href="./MedicalNews.php">Medical News</a></li>
    <li><a href="./Specialty.php">Doctor Specialties</a></li>
  </ul>
  <!--<ul class="social-icon">
    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
  </ul>-->
</div>
<button id="LgOut" onclick="LogoutConfirmation()">
  <i class="fa fa-sign-out"></i> Log Out
</button>
<script type="text/javascript">
    function LogoutConfirmation() {
      var r = confirm("Are you sure?");
      if (r == true) {
        window.location.href = '../php/Logout.php'
      } else {
        window.location.href = './Dashboard.php'
      }
    }
</script>