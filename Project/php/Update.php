<?php
include('./Connection.php');
$check = $_GET["tab"];
$Id = $_GET["Id"];

#Admin
if($check == "Admin"){
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
                $q = "UPDATE Admin_Table SET Admin_Name = '$var1',Admin_Address = '$var2',Admin_Phone = '$var3',Admin_Email = '$var4',User_Id = '$var5',Admin_Image = '$var6' WHERE Admin_Id = '$Id'";
                $run = mysqli_query($con,$q);
                if($run){
                    echo "<script> window.location.href = '../Pages/Admin.php'</script>";
                }
                else{
                    echo "<script> alert('Edit Failed'); window.location.href = '../Pages/AdminForm.php?Id=" . $Id . "&Ed=true'</script>";
                }
            }
            else{
                echo "<script> alert('Image size error'); window.location.href='../Pages/AdminForm.php?Id=" . $Id . "&Ed=true';</script>";
            }
        }
        else{
            echo "<script> alert('Image format error'); window.location.href='../Pages/AdminForm.php?Id=" . $Id . "&Ed=true';</script>";
        }
    }
}

#Doctor
if($check == "Doctor"){
    if(isset($_POST["Dbtn1"])){
        $var10 = $Id;
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
                $q = "UPDATE Doctors_Table SET Doctors_Name = '$var1', Doctors_Address = '$var2', Doctors_Phone = '$var3', Doctors_Email = '$var4', User_Id = '$var5', Doctors_Image = '$var6', Specialty = '$var7', Location = '$var8', Fee = '$var9' WHERE Doctors_Id = '$var10'";
                $run = mysqli_query($con,$q);
                if($run){
                    echo "<script> window.location.href = '../Pages/Doctor.php'</script>";
                }
                else{
                    echo "<script> alert('Edit Failed'); window.location.href = '../pages/DoctorForm.php?Id=" . $var10 . "&tab=Doctor&Ed=true'</script>";
                }
            }
            else{
                echo "<script> alert('Image size error'); window.location.href='../pages/DoctorForm.php?Id=" . $var10 . "&tab=Doctor&Ed=true';</script>";
            }
        }
        else{
            echo "<script> alert('Image format error'); window.location.href='../pages/DoctorForm.php?Id=" . $var10 . "&tab=Doctor&Ed=true';</script>";
        }
    }
    if(isset($_POST["Dbtn3"])){
        $var10 = $Id;
        $var1 = $_POST["Dtxt1"];
        $var2 = $_POST["Dtxt2"];
        $var3 = $_POST["Dtxt3"];
        $var4 = $_POST["Dtxt4"];
        $var5 = $_POST["Dtxt5"];
        $var7 = $_POST["Dtxt7"];
        $var8 = $_POST["Dtxt8"];
        $image = $_FILES['Dtxt6']['name'];
        $imgtn = $_FILES['Dtxt6']['tmp_name'];
        $imgty = $_FILES['Dtxt6']['type'];
        $imgsi = $_FILES['Dtxt6']['size'];
        $folder = "../Images/";
        if($imgty == "image/png" || $imgty == "image/jpg" || $imgty == "image/jpeg"){
            if($imgsi <= 1000000){
                $var6 = $folder . $image;
                move_uploaded_file($imgtn,$var6);
                $q = "UPDATE Doctors_Table SET Doctors_Name = '$var1', Doctors_Address = '$var2', Doctors_Phone = '$var3', Doctors_Email = '$var4', User_Id = '$var5', Doctors_Image = '$var6', Specialty = '$var7', Location = '$var8' WHERE Doctors_Id = '$var10'";
                $run = mysqli_query($con,$q);
                if($run){
                    echo "<script> window.location.href = '../DocInfo.php?Id=".$var10."'</script>";
                }
                else{
                    echo "<script> alert('Edit Failed'); window.location.href = '../DocEdit.php?Id=".$Id."'</script>";
                }
            }
            else{
                echo "<script> alert('Image size error'); window.location.href='../DocEdit.php?Id=".$Id."';</script>";
            }
        }
        else{
            echo "<script> alert('Image format error'); window.location.href='../DocEdit.php?Id=".$Id."';</script>";
        }
    }
}


#Patient
if($check == "Patient"){
    if(isset($_POST["Pbtn1"])){
        $var10 = $Id;
        $var1 = $_POST["Ptxt1"];
        $var2 = $_POST["Ptxt2"];
        $var3 = $_POST["Ptxt3"];
        $var4 = $_POST["Ptxt4"];
        $var5 = $_POST["Ptxt5"];
        $q = "UPDATE Patient_Table SET Patient_Name = '$var1', Patient_Address = '$var2', Patient_Phone = '$var3', Patient_Email = '$var4', User_Id = '$var5' WHERE Patient_Id = $var10";
        $run = mysqli_query($con,$q);
        if($run){
            echo "<script> window.location.href = '../Pages/Patient.php'</script>";
        }
        else{
            echo "<script> alert('Edit Failed'); window.location.href = '../Pages/PatientEditForm.php?Id=" . $var10 . "&tab=Patient&Ed=true'</script>";
        }
    }
}

#Users
if($check == "User"){
    if(isset($_POST["Ubtn1"])){
        $var10 = $Id;
        $var1 = $_POST["Utxt1"];
        $var2 = $_POST["Utxt2"];
        $var3 = $_POST["Utxt3"];
        $q = "UPDATE Users_Table SET Username = '$var1', Password = '$var2', User_Role = '$var3' WHERE User_Id = $var10";
        $run = mysqli_query($con,$q);
        if($run){
            echo "<script> window.location.href = '../Pages/Users.php'</script>";
        }
        else{
            echo "<script> alert('Edit Failed'); window.location.href = '../Pages/UsersEditForm.php?Id=" . $var10 . "&tab=User&Ed=true'</script>";
        }
    }
}

#Medical News
if($check == "News"){
    if(isset($_POST["Nbtn1"])){
        $var10 = $Id;
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
                $q = "UPDATE News_Table SET Medical_News = '$var1', News_Date = '$var2', News_Image = '$var6' WHERE News_Id = $var10";
                $run = mysqli_query($con,$q);
                if($run){
                    echo "<script> window.location.href = '../Pages/MedicalNews.php'</script>";
                }
                else{
                    echo "<script> alert('Edit Failed'); window.location.href = '../Pages/NewsEditForm.php?Id=" . $var10 . "&tab=News&Ed=true'</script>";
                }
            }
            else{
                echo "<script> alert('Image size error'); window.location.href='../Pages/NewsEditForm.php?Id=" . $var10 . "&tab=News&Ed=true';</script>";
            }
        }
        else{
            echo "<script> alert('Image format error'); window.location.href='../Pages/NewsEditForm.php?Id=" . $var10 . "&tab=News&Ed=true';</script>";
        }
    }
}

#Disease
if($check == "Disease"){
    if(isset($_POST["Dibtn1"])){
        $var10 = $Id;
        $var1 = $_POST["Ditxt1"];
        $var2 = $_POST["Ditxt2"];
        $var3 = $_POST["Ditxt3"];
        $var4 = $_POST["Ditxt4"];
        $var5 = $_POST["Ditxt5"];
        $q = "UPDATE Disease_Table SET Disease_Name = '$var1', Disease_Symptom = '$var2', Disease_Description = '$var3', Disease_Prevention = '$var4', Disease_Cure = '$var5' WHERE Disease_Id = $var10";
        $run = mysqli_query($con,$q);
        if($run){
            echo "<script> window.location.href = '../Pages/Diseases.php'</script>";
        }
        else{
            echo "<script> alert('Edit Failed'); window.location.href = '../Pages/DiseaseEditForm.php?Id=" . $var10 . "&tab=User&Ed=true'</script>";
        }
    }
}

#Appointment
if($check == "Appointment"){
    if(isset($_POST["Apbtn1"])){
        $var10 = $Id;
        $var1 = $_POST["Aptxt1"];
        $var2 = $_POST["Aptxt2"];
        $var3 = $_POST["Aptxt3"];
        $var5 = $_POST["Aptxt5"];
        $var6 = $_POST["Aptxt7"];
        $var7 = $_POST["Aptxt6"];
        $q = "UPDATE Appointments_Table SET Patient = '$var1', Doctor = '$var2', Appointment_Date = '$var3', Timing = '$var5', Appointment_Info = '$var6', Price =  '$var7' WHERE Appointment_Id = $var10";
        $run = mysqli_query($con,$q);
        if($run){
            echo "<script> window.location.href = '../Pages/Appointment.php'</script>";
        }
        else{
            echo "<script> alert('Edit Failed'); window.location.href = '../Pages/AppointmentEditForm.php?Id=" . $var10 . "&tab=User&Ed=true'</script>";
        }
    }
}
?>