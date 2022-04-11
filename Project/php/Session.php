<?php session_start();?>
<?php
if($_SESSION['Name'] == null)
{
  header('location:../LogIn.php');
}
?>