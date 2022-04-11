<?php 
include('Connection.php');
session_start();

if(isset($_POST["btn1"]))
{
	$name = $_POST["txt1"];
	$pass = $_POST["txt2"];
	$que = "SELECT * FROM Users_Table WHERE Username = '$name'";
	$run = mysqli_query($con,$que);
	$data = mysqli_fetch_assoc($run);
	$ps = $data['Password'];
	$rl = $data['User_Role'];
	if($pass == $ps){
		if($rl == 1 || $rl == 2){
			if ($rl == 1){
				$que1 = "SELECT * FROM Admin_Table Ad JOIN Users_Table Us ON Ad.User_Id = Us.User_Id WHERE Us.Username = '$name'";
				$run1 = mysqli_query($con,$que1);
				$data1 = mysqli_fetch_assoc($run1);
				$_SESSION['Id'] = $data1['Admin_Id'];
				$_SESSION['Name'] = $data1['Admin_Name'];
				$_SESSION['Img'] = $data1['Admin_Image'];
				$_SESSION['Role'] = $data1['User_Role'];
			}
			if ($rl == 2) {
				$que2 = "SELECT * FROM Doctors_Table Do JOIN Users_Table Us ON Do.User_Id = Us.User_Id WHERE Us.Username = '$name'";
				$run2 = mysqli_query($con,$que2);
				$data2 = mysqli_fetch_assoc($run2);
				$_SESSION['Id'] = $data2['Doctors_Id'];
				$_SESSION['Name'] = $data2['Doctors_Name'];
				$_SESSION['Img'] = $data2['Doctors_Image'];
				$_SESSION['Role'] = $data2['User_Role'];
			}
			echo "<script> window.location.href = '../Pages/Dashboard.php' </script>";
		}
		else{
			echo "<script> alert('Not Allowed!');  window.location.href = '../LogIn.php' </script>";
		}
	}
	else{
		echo "<script> alert('Log in failed!');  window.location.href = '../LogIn.php' </script>";
	}
}

if(isset($_POST["btn2"]))
{
	$name = $_POST["txt1"];
	$pass = $_POST["txt2"];
	$que = "SELECT * FROM Users_Table WHERE Username = '$name'";
	$run = mysqli_query($con,$que);
	$data = mysqli_fetch_assoc($run);
	$ps = $data['Password'];	
	if($pass == $ps)
	{
		$que2 = "SELECT * FROM Patient_Table Pa JOIN Users_Table Us ON Pa.User_Id = Us.User_Id WHERE Us.Username = '$name'";
		$run2 = mysqli_query($con,$que2);
		$data2 = mysqli_fetch_assoc($run2);
		$_SESSION['Id'] = $data2['Patient_Id'];
		$_SESSION['Name'] = $data2['Patient_Name'];
		$_SESSION['Role'] = $data2['User_Role'];
		echo "<script> window.location.href = '../index.php' </script>";
	}
	else{
		echo "<script> alert('Log in failed, wrong password!'); window.location.href = '../index.php' </script>";
	}
}
?>