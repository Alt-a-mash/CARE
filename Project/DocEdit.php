<?php include('header.php');?>
<?php
if($_SESSION['Role'] != 2)
{
	header('location:./doctors.php');
}
else{

}
$DId = $_GET['Id'];
$query = "SELECT * FROM Doctors_Table Do JOIN Users_Table Us ON Do.User_Id = Us.User_Id JOIN Roles_Table Rt ON Us.User_Role = Rt.Role_Id JOIN Specialty_Table Sp ON Do.Specialty = Sp.Specialty_Id JOIN Location_Table Lo ON Do.Location = Lo.Location_Id JOIN Cities_Table Ct ON Lo.City = Ct.City_Id JOIN States_Table St ON Lo.State = St.State_Id WHERE Do.Doctors_Id = $DId";
$run = mysqli_query($con,$query);
$result = mysqli_fetch_array($run);
?>
<div class="colorlib-loader"></div>
<div id="colorlib-contact">
	<div class="container">
		<div class="row animate-box">
			<div class="col-md-6 col-md-offset-3 text-center colorlib-heading">
				<h2>Edit Profile</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<form method="POST" action="./php/Update.php?Id=<?php echo $result['Doctors_Id'];?>&tab=Doctor" enctype="multipart/form-data" class="appointment-wrap animate-box">
					<div class="row form-group">
						<div class="col-md-6">
							<label for="fname">Name</label>
							<input pattern="^[A-Za-z]+\s?[A-Za-z]+" type="text" name="Dtxt1" id="fname" class="form-control" value="<?php echo $result['Doctors_Name'];?>">
						</div>
						<div class="col-md-6">
							<label for="fname">Address</label>
							<input type="text" name="Dtxt2" id="fname" class="form-control" value="<?php echo $result['Doctors_Address'];?>">
						</div>
					</div>
					<div class="row form-group">
						<div class="col-md-6">
							<label for="fname">Phone</label>
							<input pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" type="text" name="Dtxt3" id="fname" class="form-control" value="<?php echo $result['Doctors_Phone'];?>">
						</div>
						<div class="col-md-6">
							<label for="fname">Email</label>
							<input pattern="^[A-Za-z0-9-_]+(\.[_A-Za-z0-9-]+)*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)*(\.[A-Za-z]{2,4})" type="text" name="Dtxt4" id="fname" class="form-control" value="<?php echo $result['Doctors_Email'];?>">
						</div>
					</div>
					<div class="row form-group">
						<div class="col-md-6">
							<label for="fname">Username</label>
							<?php
							$query4="SELECT * FROM Users_Table WHERE User_Role = 2";
							$rows4=mysqli_query($con,$query4);
							echo "<select name='Dtxt5' class='form-control'>";
							while   ($data4=mysqli_fetch_array($rows4) )
							{
								echo "<option value='$data4[User_Id]'> " . $data4['Username'] . " </option>";                        
							}
							echo "</select>";
							?>
						</div>
						<div class="col-md-6">
							<label for="fname">Username</label>
							<?php
							$query2="SELECT * FROM Specialty_Table";
							$rows2=mysqli_query($con,$query2);
							echo "<select name='Dtxt7' class='form-control'>";
							while   ($data2=mysqli_fetch_array($rows2) )
							{
								echo "<option value='$data2[Specialty_Id]'> " . $data2[Specialty_Id] . ": " . $data2[Specialty_Type] . " </option>";                        
							}
							echo "</select>";
							?>
						</div>
					</div>
					<div class="row form-group">
						<div class="col-md-6">
							<label for="fname">Username</label>
							<?php
							$query3="SELECT * FROM Location_Table Lo JOIN Cities_Table Ct ON Lo.City = Ct.City_Id JOIN States_Table St ON Lo.State = St.State_Id ORDER BY Lo.Location_Id";
							$rows3=mysqli_query($con,$query3);
							echo "<select name='Dtxt8' class='form-control'>";
							while   ($data3=mysqli_fetch_array($rows3) )
							{
								echo "<option value='$data3[Location_Id]'> " . $data3[Location_Id] . ": " . $data3[State_Name] . "," . $data3[City_Name] . " </option>";                        
							}
							echo "</select>";
							?>
						</div>
						<div class="col-md-6">
							<label for="fname">Image</label>
							<input type="file" name="Dtxt6" id="fname" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<input type="submit" name="Dbtn3" value="Done" class="btn btn-primary">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php include('footer.php');?>