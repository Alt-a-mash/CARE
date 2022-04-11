<?php include('header.php');?>
<?php
if($_SESSION['Id'] == null)
{
	header('location:./index.php');
}
$DId = $_GET['Id'];
$query2="SELECT * FROM Doctors_Table WHERE Doctors_Id = $DId";
$rows2=mysqli_query($con,$query2);
$data2=mysqli_fetch_array($rows2);
?>
<div class="colorlib-loader"></div>
<aside id="colorlib-hero" class="hero">
	<div class="flexslider">
		<ul class="slides">
			<li style="background-image: url(images/img_bg_1.jpg);">
				<div class="overlay"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12 text-center slider-text">
							<div class="slider-text-inner">
								<h1>Register Yourself</h1>
								<h2>to find a specialized doctor near you and book an appoinment</h2>
							</div>
						</div>
					</div>
				</div>
			</li>
		</ul>
	</div>
</aside>
<div id="colorlib-contact">
	<div class="container">
		<div class="row animate-box">
			<div class="col-md-6 col-md-offset-3 text-center colorlib-heading">
				<h2>Book an Appointment</h2>
				<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<form method="POST" action="./php/Insert.php" class="appointment-wrap animate-box">
					<div class="row form-group">
						<div class="col-md-6">
							<label for="fname">Patient Name</label>
							<input type="text" name="Aptxt1" id="fname" class="form-control" value="<?php echo $_SESSION['Name'];?>">
						</div>
						<div class="col-md-6">
							<label for="lname">Doctors Name</label>
							<input type="text"  name="Aptxt2" class="form-control" value="<?php echo $data2['Doctors_Name'];?>">
						</div>
					</div>
					<div class="row form-group">
						<div class="col-md-6">
							<label for="fname">Appointment Date</label>
							<?php
							$query3="SELECT * FROM Availability_Table Av JOIN Doctors_Table Do ON Av.Availability_Doctor = Do.Doctors_Id WHERE Do.Doctors_Id = $DId AND Av.Availability = 1";
							$rows3=mysqli_query($con,$query3);
							echo "<select name='Aptxt3' class='form-control'>";
							while   ($data3=mysqli_fetch_array($rows3) )
							{
								echo "<option value='$data3[Availability_Date]'> ".$data3[Availability_Date]." </option>";                        
							}
							echo "</select>";
							?>
						</div>
						<div class="col-md-6">
							<label for="fname">Appointment Timing</label>
							<?php
							$query4="SELECT * FROM Timings_Table";
							$rows4=mysqli_query($con,$query4);
							echo "<select name='Aptxt5' class='form-control'>";
							while   ($data4=mysqli_fetch_array($rows4) )
							{
								echo "<option value='$data4[Timing_Id]'> " . $data4[Starting_Time] . "-" . $data4[Ending_Time] . " </option>";                        
							}
							echo "</select>";
							?>
						</div>
					</div>
					<div class="row form-group">
						<div class="col-md-12">
							<label for="message">Description</label>
							<textarea name="Aptxt7" name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Description"></textarea>
						</div>
					</div>
					<div class="form-group">
						<input type="submit" name="Apbtn2" value="Done" class="btn btn-primary">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php include('footer.php');?>