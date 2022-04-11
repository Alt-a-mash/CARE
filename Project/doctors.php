<?php include('header.php');?>
<div class="colorlib-loader"></div>
<?php
$que1 = "SELECT * FROM Doctors_Table Do JOIN Specialty_Table Sp ON Do.Specialty = Sp.Specialty_Id";
?>
<aside id="colorlib-hero" class="hero">
	<div class="flexslider">
		<ul class="slides">
			<li style="background-image: url(images/img_bg_1.jpg);">
				<div class="overlay"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12 text-center slider-text">
							<div class="slider-text-inner">
								<h1>Find Specialized <strong>Doctors</strong></h1>
								<h2>In your nearby locations</h2>
							</div>
						</div>
					</div>
				</div>
			</li>
		</ul>
	</div>
</aside>
<div id="colorlib-doctor">
	<div class="container">
		<form method="GET" action="">
			<div class="row form-group">
				<div class="col-md-5">
					<input type="text" value="Specialty" class="form-control">
				</div>
				<div class="col-md-5">
					<?php
					$query2="SELECT * FROM Specialty_Table";
					$rows2=mysqli_query($con,$query2);
					echo "<select name='txt1' class='form-control'>";
					while   ($data2 = mysqli_fetch_array($rows2))
					{
						echo "<option value='$data2[Specialty_Id]'> " . $data2[Specialty_Id] . ": " . $data2[Specialty_Type] . " </option>";                        
					}
					echo "</select>";
					?>
				</div>
				<div class="form-group">
					<input type="submit" name="btn1" value="Search" class="btn btn-primary">
				</div>
			</div>
		</form>
		<form method="GET" action="">
			<div class="row form-group">
				<div class="col-md-5">
					<input type="text" value="Location" class="form-control">
				</div>
				<div class="col-md-5">
					<?php
					$query3="SELECT * FROM Location_Table Lo JOIN Cities_Table Ct ON Lo.City = Ct.City_Id JOIN States_Table St ON Lo.State = St.State_Id ORDER BY Lo.Location_Id";
					$rows3=mysqli_query($con,$query3);
					echo "<select name='txt2' class='form-control'>";
					while   ($data3=mysqli_fetch_array($rows3) )
					{
						echo "<option value='$data3[Location_Id]'> " . $data3[Location_Id] . ": " . $data3[State_Name] . "," . $data3[City_Name] . " </option>";                        
					}
					echo "</select>";
					?>
				</div>
				<div class="form-group">
					<input type="submit" name="btn2" value="Search" class="btn btn-primary">
				</div>
			</div>
		</form>
		<div class="row">
			<?php
			if(isset($_GET["btn1"]))
			{
				$Search = $_GET["txt1"];
				$que1 = "SELECT * FROM Doctors_Table Do JOIN Specialty_Table Sp ON Do.Specialty = Sp.Specialty_Id WHERE Sp.Specialty_Id = '$Search'";
			}
			if (isset($_GET["btn2"])) {

				$Search = $_GET["txt2"];
				$que1 = "SELECT * FROM Doctors_Table Do JOIN Location_Table Lo ON Do.Location = Lo.Location_Id JOIN Cities_Table Ct ON Lo.City = Ct.City_Id JOIN States_Table St ON Lo.State = St.State_Id WHERE Lo.Location_Id = '$Search'";
			}
			$sel1 = mysqli_query($con, $que1);
			if(isset($_GET['wh'])){
				$us = $_GET['wh'];
			}
			while($data1 = mysqli_fetch_assoc($sel1)){
				echo "<div class='col-md-3 col-sm-6 col-xs-12 animate-box text-center'>
				<div class='doctor'>
				<div class='staff-img' style='background-image: url(./Pages/" . $data1['Doctors_Image'] . ");'></div>
				<div class='desc'>
				<h3><a href='./"; echo $stat = (empty($us)) ? "DocInfo.php" : "Appointment.php"; echo "?Id=".$data1['Doctors_Id']."'>" . $data1['Doctors_Name'] . "</a></h3>
				<span>" . $data1['Specialty_Type'] . "</span>
				</div>
				</div>
				</div>";
			}
			?>
		</div>
	</div>
</div>
<?php include('footer.php');?>
<!--
<div class="col-md-3 col-sm-6 col-xs-12 animate-box text-center">
					<div class="doctor">
						<div class="staff-img" style="background-image: url(images/staff-2.jpg);"></div>
						<div class="desc">
							<h3><a href="#">Dr. Edward Dughlas</a></h3>
							<span>Orthopedic Surgeon</span>
							<ul class="colorlib-social">
								<li><a href="#"><i class="icon-facebook2"></i></a></li>
								<li><a href="#"><i class="icon-twitter2"></i></a></li>
								<li><a href="#"><i class="icon-linkedin2"></i></a></li>
								<li><a href="#"><i class="icon-instagram"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 animate-box text-center">
					<div class="doctor">
						<div class="staff-img" style="background-image: url(images/staff-3.jpg);"></div>
						<div class="desc">
							<h3><a href="#">Dr. Peter Parker</a></h3>
							<span>Health Care</span>
							<ul class="colorlib-social">
								<li><a href="#"><i class="icon-facebook2"></i></a></li>
								<li><a href="#"><i class="icon-twitter2"></i></a></li>
								<li><a href="#"><i class="icon-linkedin2"></i></a></li>
								<li><a href="#"><i class="icon-instagram"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 animate-box text-center">
					<div class="doctor">
						<div class="staff-img" style="background-image: url(images/staff-1.jpg);"></div>
						<div class="desc">
							<h3><a href="#">Dr. Liza Thomas</a></h3>
							<span>Patient Services Manager</span>
							<ul class="colorlib-social">
								<li><a href="#"><i class="icon-facebook2"></i></a></li>
								<li><a href="#"><i class="icon-twitter2"></i></a></li>
								<li><a href="#"><i class="icon-linkedin2"></i></a></li>
								<li><a href="#"><i class="icon-instagram"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

<div id="colorlib-appointment">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center">
				<h2 class="line-block">Make an appointment</h2>
				<p class="line-block"><a href="./Appointment.php" class="btn btn-primary btn-outline btn-cta">Book an Appointment <i class="icon-calendar3"></i></a></p>
			</div>
		</div>
	</div>
</div>
-->