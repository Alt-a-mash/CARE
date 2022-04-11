<?php
include('./Connection.php');
$check = $_GET["tab"];
$Id = $_GET["Id"];

#Admin
if($check == "Admin"){
	$q = "DELETE FROM Admin_Table WHERE Admin_Id = '$Id'";
	$run = mysqli_query($con,$q);
	if($run){
		echo "<script> alert('Deleted'); window.location.href = '../Pages/Admin.php'</script>";
	}
	else{
		echo "<script> alert('Deletion failed'); window.location.href = '../Pages/Admin.php'</script>";
	}
}

#Doctor
if($check == "Doctor"){
	$q = "DELETE FROM Doctors_Table WHERE Doctors_Id = '$Id'";
	$run = mysqli_query($con,$q);
	if($run){
		echo "<script> alert('Deleted'); window.location.href = '../Pages/Doctor.php'</script>";
	}
	else{
		echo "<script> alert('Deletion failed'); window.location.href = '../Pages/Doctor.php'</script>";
	}
}

#Patient
if($check == "Patient"){
	$q = "DELETE FROM Patient_Table WHERE Patient_Id = '$Id'";
	$run = mysqli_query($con,$q);
	if($run){
		echo "<script> alert('Deleted'); window.location.href = '../Pages/Patient.php'</script>";
	}
	else{
		echo "<script> alert('Deletion failed'); window.location.href = '../Pages/Patient.php'</script>";
	}
}


#Users
if($check == "User"){
	$q = "DELETE FROM Users_Table WHERE User_Id = '$Id'";
	$run = mysqli_query($con,$q);
	if($run){
		echo "<script> alert('Deleted'); window.location.href = '../Pages/Users.php'</script>";
	}
	else{
		echo "<script> alert('Deletion failed'); window.location.href = '../Pages/Users.php'</script>";
	}
}

#Disease
if($check == "Disease"){
	$q = "DELETE FROM Disease_Table WHERE Disease_Id = '$Id'";
	$run = mysqli_query($con,$q);
	if($run){
		echo "<script> alert('Deleted'); window.location.href = '../Pages/Diseases.php'</script>";
	}
	else{
		echo "<script> alert('Deletion failed'); window.location.href = '../Pages/Diseases.php'</script>";
	}
}

#Location
if($check == "Location"){
	$q = "DELETE FROM Location_Table WHERE Location_Id = '$Id'";
	$run = mysqli_query($con,$q);
	if($run){
		echo "<script> alert('Deleted'); window.location.href = '../Pages/Location.php'</script>";
	}
	else{
		echo "<script> alert('Deletion failed'); window.location.href = '../Pages/Location.php'</script>";
	}
}

#City
if($check == "City"){
	for ($i=1; $i <= 4; $i++) {
		$q = "DELETE FROM Location_Table WHERE City = '$Id' AND State = '$i'";
		$run = mysqli_query($con,$q);
	}
	$q1 = "DELETE FROM Cities_Table WHERE City_Id = '$Id'";
	$run1 = mysqli_query($con,$q1);
	if($run){
		echo "<script> alert('Deleted'); window.location.href = '../Pages/Location.php'</script>";
	}
	else{
		echo "<script> alert('Deletion failed'); window.location.href = '../Pages/Location.php'</script>";
	}
}

#Specialty
if($check == "Specialty"){
	$q = "DELETE FROM Specialty_Table WHERE Specialty_Id = '$Id'";
	$run = mysqli_query($con,$q);
	if($run){
		echo "<script> alert('Deleted'); window.location.href = '../Pages/Location.php'</script>";
	}
	else{
		echo "<script> alert('Deletion failed'); window.location.href = '../Pages/Location.php'</script>";
	}
}

#Appointment
if($check == "Appointment"){
	$q = "DELETE FROM Appointments_Table WHERE Appointment_Id = '$Id'";
	$run = mysqli_query($con,$q);
	if($run){
		echo "<script> alert('Deleted'); window.location.href = '../Pages/Appointment.php'</script>";
	}
	else{
		echo "<script> alert('Deletion failed'); window.location.href = '../Pages/Appointment.php'</script>";
	}
}

#Availability
if($check == "Availability"){
	$q = "DELETE FROM Availability_Table WHERE Availability_Id = '$Id'";
	$run = mysqli_query($con,$q);
	if($run){
		echo "<script> alert('Deleted'); window.location.href = '../Pages/Availability.php'</script>";
	}
	else{
		echo "<script> alert('Deletion failed'); window.location.href = '../Pages/Availability.php'</script>";
	}
}
?>