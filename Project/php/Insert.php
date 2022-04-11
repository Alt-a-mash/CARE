<?php 
include('Connection.php');

#Admin
if(isset($_POST["Abtn1"])){
	$var1 = $_POST["Atxt1"];
	$var2 = $_POST["Atxt2"];
	$var3 = $_POST["Atxt3"];
	$var4 = $_POST["Atxt4"];
	$var5 = $_POST["Atxt5"];
    $image = $_FILES['Atxt6']['name'];
    $imgtn = $_FILES['Atxt6']['tmp_name'];
    $imgty = $_FILES['Atxt6']['type'];
    $imgsi = $_FILES['Atxt6']['size'];
    $folder = "../Images/";
    if($imgty == "image/png" || $imgty == "image/jpg" || $imgty == "image/jpeg"){
        if($imgsi <= 1000000){
            $var6 = $folder . $image;
            move_uploaded_file($imgtn,$var6);
            $q = "INSERT INTO Admin_Table(Admin_Name,Admin_Address,Admin_Phone,Admin_Email,User_Id,Admin_Image) VALUES('$var1','$var2','$var3','$var4','$var5','$var6')";
            $run = mysqli_query($con,$q);
            if($run){
                echo "<script> window.location.href = '../Pages/Admin.php'</script>";
            }
            else{
                echo "<script> alert('Data insertion failed'); window.location.href = '../Pages/AdminForm.php?Ed=false'</script>";
            }
        }
        else{
            echo "<script> alert('Image size error'); window.location.href='../Pages/AdminForm.php?Ed=false';</script>";
        }
    }
    else{
        echo "<script> alert('Image format error'); window.location.href='../Pages/AdminForm.php?Ed=false';</script>";
    }
}

#Doctor
if(isset($_POST["Dbtn1"])){
    $var1 = $_POST["Dtxt1"];
    $var2 = $_POST["Dtxt2"];
    $var3 = $_POST["Dtxt3"];
    $var4 = $_POST["Dtxt4"];
    $var5 = $_POST["Dtxt5"];
    $var7 = $_POST["Dtxt7"];
    $var8 = $_POST["Dtxt8"];
    $var9 = $_POST["Dtxt9"];
    $image = $_FILES['Dtxt6']['name'];
    $imgtn = $_FILES['Dtxt6']['tmp_name'];
    $imgty = $_FILES['Dtxt6']['type'];
    $imgsi = $_FILES['Dtxt6']['size'];
    $folder = "../Images/";
    if($imgty == "image/png" || $imgty == "image/jpg" || $imgty == "image/jpeg"){
        if($imgsi <= 1000000){
            $var6 = $folder . $image;
            move_uploaded_file($imgtn,$var6);
            $q = "INSERT INTO Doctors_Table(Doctors_Name,Doctors_Address,Doctors_Phone,Doctors_Email,User_Id,Doctors_Image,Specialty,Location,Fee) VALUES('$var1','$var2','$var3','$var4','$var5','$var6','$var7','$var8','$var9')";
            $run = mysqli_query($con,$q);
            if($run){
                echo "<script> window.location.href = '../Pages/Doctor.php'</script>";
            }
            else{
                echo "<script> alert('Data insertion failed'); window.location.href = '../Pages/DoctorForm.php?Ed=false'</script>";
            }
        }
        else{
            echo "<script> alert('Image size error'); window.location.href='../Pages/DoctorForm.php?Ed=false';</script>";
        }
    }
    else{
        echo "<script> alert('Image format error'); window.location.href='../Pages/DoctorForm.php?Ed=false';</script>";
    }
}

#Patient
if(isset($_POST["Pbtn1"])){
    $var1 = $_POST["Ptxt1"];
    $var2 = $_POST["Ptxt2"];
    $var3 = $_POST["Ptxt3"];
    $var4 = $_POST["Ptxt4"];
    $var5 = $_POST["Ptxt5"];
    $q = "INSERT INTO Patient_Table(Patient_Name,Patient_Address,Patient_Phone,Patient_Email,User_Id) VALUES('$var1','$var2','$var3','$var4','$var5')";
    $run = mysqli_query($con,$q);
    if($run){
        echo "<script> window.location.href = '../Pages/Patient.php'</script>";
    }
    else{
        echo "<script> alert('Data insertion failed'); window.location.href = '../Pages/PatientForm.php?Ed=false'</script>";
    }
}

#Users
if(isset($_POST["Ubtn1"])){
    $var1 = $_POST["Utxt1"];
    $var2 = $_POST["Utxt2"];
    $var3 = $_POST["Utxt3"];
    $q = "INSERT INTO Users_Table(Username,Password,User_Role) VALUES('$var1','$var2','$var3')";
    $run = mysqli_query($con,$q);
    if($run){
        header('location:../Pages/Users.php');
    }
    else{
        echo "<script> alert('Data insertion failed'); window.location.href = '../Pages/UsersForm.php?Ed=false'</script>";
    }
}

#Medical News
if(isset($_POST["Nbtn1"])){
    $var1 = $_POST["Ntxt1"];
    $var2 = $_POST["Ntxt2"];
    $image = $_FILES['Ntxt3']['name'];
    $imgtn = $_FILES['Ntxt3']['tmp_name'];
    $imgty = $_FILES['Ntxt3']['type'];
    $imgsi = $_FILES['Ntxt3']['size'];
    $folder = "../Images/";
    if($imgty == "image/png" || $imgty == "image/jpg" || $imgty == "image/jpeg"){
        if($imgsi <= 1000000){
            $var6 = $folder . $image;
            move_uploaded_file($imgtn,$var6);
            $q = "INSERT INTO News_Table(Medical_News,News_Date,News_Image) VALUES('$var1','$var2','$var6')";
            $run = mysqli_query($con,$q);
            if($run){
                echo "<script> window.location.href = '../Pages/MedicalNews.php'</script>";
            }
            else{
                echo "<script> alert('Data insertion failed'); window.location.href = '../Pages/NewsForm.php?Ed=false'</script>";
            }
        }
        else{
            echo "<script> alert('Image size error'); window.location.href='../Pages/NewsForm.php?Ed=false';</script>";
        }
    }
    else{
        echo "<script> alert('Image format error'); window.location.href='../Pages/NewsForm.php?Ed=false';</script>";
    }
}

#Diseases
if(isset($_POST["Dibtn1"])){
    $var1 = $_POST["Ditxt1"];
    $var2 = $_POST["Ditxt2"];
    $var3 = $_POST["Ditxt3"];
    $var4 = $_POST["Ditxt4"];
    $var5 = $_POST["Ditxt5"];
    $q = "INSERT INTO Disease_Table(Disease_Name,Disease_Symptom,Disease_Description,Disease_Prevention,Disease_Cure) VALUES('$var1','$var2','$var3','$var4','$var5')";
    $run = mysqli_query($con,$q);
    if($run){
        echo "<script> window.location.href = '../Pages/Patient.php'</script>";
    }
    else{
        echo "<script> alert('Data insertion failed'); window.location.href = '../Pages/PatientForm.php?Ed=false'</script>";
    }
}

#Location
if(isset($_POST["Lbtn1"])){
    $var1 = $_POST["Ltxt1"];
    $q = "INSERT INTO Cities_Table(City_Name) VALUES('$var1')";
    $q1 = "SELECT * FROM Cities_Table WHERE City_Name = '$var1'";
    $run = mysqli_query($con,$q);
    if($run){
        $run1 = mysqli_query($con,$q1);
        $data = mysqli_fetch_array($run1);
        $var2 = $data['City_Id'];
        for ($i=1; $i <= 4; $i++) {
            $q2 = "INSERT INTO Location_Table(City,State) VALUES('$var2','$i')";
            $run2 = mysqli_query($con,$q2);
        }
        echo "<script> window.location.href = '../Pages/Patient.php'</script>";
    }
    else{
        echo "<script> alert('Data insertion failed'); window.location.href = '../Pages/PatientForm.php?Ed=false'</script>";
    }
}

#Users
if(isset($_POST["Sbtn1"])){
    $var1 = $_POST["Stxt1"];
    $q = "INSERT INTO Specialty_Table(Username) VALUES('$var1')";
    $run = mysqli_query($con,$q);
    if($run){
        echo "<script> window.location.href = '../Pages/Specialty.php'</script>";
    }
    else{
        echo "<script> alert('Data insertion failed'); window.location.href = '../Pages/SpecialtyForm.php?Ed=false'</script>";
    }
}

#Appointment
if(isset($_POST["Apbtn1"])){
    $var1 = $_POST["Aptxt1"];
    $var2 = $_POST["Aptxt2"];
    $var3 = $_POST["Aptxt3"];
    $var5 = $_POST["Aptxt5"];
    $var6 = $_POST["Aptxt7"];
    $qas1 = "SELECT * FROM Patient_Table WHERE Patient_Name = '$var1'";
    $ras1 = mysqli_query($con,$qas1);
    $das1 = mysqli_fetch_array($ras1);
    $var1 = $das1["Patient_Id"];
    $qas2 = "SELECT * FROM Doctors_Table WHERE Doctors_Name = '$var2'";
    $ras2 = mysqli_query($con,$qas2);
    $das2 = mysqli_fetch_array($ras2);
    $var2 = $das2["Doctors_Id"];
    $var7 = $das["Fee"];
    $q = "INSERT INTO Appointments_Table(Patient,Doctor,Appointment_Date,Timing,Appointment_Info,Price) VALUES('$var1','$var2','$var3','$var5','$var6','$var7')";
    $run = mysqli_query($con,$q);
    if($run){
        echo "<script> window.location.href = '../Pages/Appointment.php'</script>";
    }
    else{
        echo "<script> alert('Data insertion failed'); window.location.href = '../Pages/AppointmentForm.php?Ed=false'</script>";
    }
}
if(isset($_POST["Apbtn2"])){
    $var1 = $_POST["Aptxt1"];
    $var2 = $_POST["Aptxt2"];
    $var3 = $_POST["Aptxt3"];
    $var5 = $_POST["Aptxt5"];
    $var6 = $_POST["Aptxt7"];
    $qas1 = "SELECT * FROM Patient_Table WHERE Patient_Name = '$var1'";
    $ras1 = mysqli_query($con,$qas1);
    $das1 = mysqli_fetch_array($ras1);
    $var1 = $das1["Patient_Id"];
    $qas2 = "SELECT * FROM Doctors_Table WHERE Doctors_Name = '$var2'";
    $ras2 = mysqli_query($con,$qas2);
    $das2 = mysqli_fetch_array($ras2);
    $var2 = $das2["Doctors_Id"];
    $var7 = $das2["Fee"];
    $q = "INSERT INTO Appointments_Table(Patient,Doctor,Appointment_Date,Timing,Appointment_Info,Price) VALUES('$var1','$var2','$var3','$var5','$var6','$var7')";
    $run = mysqli_query($con,$q);
    if($run){
        echo "<script> window.location.href = '../index.php'</script>";
    }
    else{
        echo "<script> alert('Appointment booking failed'); window.location.href = '../doctors.php?wh=1'</script>";
    }
}

#Availability
if(isset($_POST["Avbtn1"])){
    $var1 = $_POST["Avtxt1"];
    $var2 = $_POST["Avtxt2"];
    $var3 = $_POST["Avtxt3"];
    $qas = "SELECT * FROM Doctors_Table WHERE Doctors_Name = '$var1'";
    $ras = mysqli_query($con,$qas);
    $das = mysqli_fetch_array($ras);
    $var4 = $das["Doctors_Id"];
    $q = "INSERT INTO Availability_Table(Availability_Doctor,Availability_Date,Availability) VALUES('$var4','$var2','$var3')";
    $run = mysqli_query($con,$q);
    if($run){
        echo "<script> alert('Availability Updated'); window.location.href = '../Pages/AvailabilityForm.php'</script>";
    }
    else{
        echo "<script> alert('Failed'); window.location.href = '../Pages/AvailabilityForm.php'</script>";
    }
}
?>
<!--if($var3 == 1){
            header('location:../Pages/AdminForm.php?Ed=false?UId=' . $var1);
        }
        if($var3 == 2){
            header('location:../Pages/DoctorForm.php?Ed=false?UId=' . $var1);
        }
        if($var3 == 3){
            header('location:../Pages/PatientForm.php?Ed=false?UId=' . $var1);
        }-->