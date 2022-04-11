<?php include('header.php');?>
<?php $DId = $_GET['Id'];?>
<div class="colorlib-loader"></div>
<aside id="colorlib-hero">
	<div class="flexslider">
		<ul class="slides">
			<li style="background-image: url(images/img_bg_2.jpg);">
				<div class="overlay"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 col-md-pull-2 slider-text">
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

<div class="colorlib-departments">
	<div class="container">
		<div class="row">
			<?php
			$que1 = "SELECT * FROM Doctors_Table Do JOIN Users_Table Us ON Do.User_Id = Us.User_Id JOIN Roles_Table Rt ON Us.User_Role = Rt.Role_Id JOIN Specialty_Table Sp ON Do.Specialty = Sp.Specialty_Id JOIN Location_Table Lo ON Do.Location = Lo.Location_Id JOIN Cities_Table Ct ON Lo.City = Ct.City_Id JOIN States_Table St ON Lo.State = St.State_Id WHERE Do.Doctors_Id = '$DId'";
			$sel1 = mysqli_query($con, $que1);
			while($data1 = mysqli_fetch_assoc($sel1)){
				echo "<div class='department-wrap animate-box'>
				<div class='grid-1 col-md-6' style='background-image: url(./Pages/" . $data1['Doctors_Image'] . ");'></div>
				<div class='grid-2 col-md-6'>
				<div class='desc'>
				<h2>Doctor's Info</h2>
				<div class='department-info'>
				<div class='block'>
				<h2>Name</h2>
				<span>" . $data1['Doctors_Name'] . "</span><br>
				</div>
				<div class='block'>
				<h2>Personal Info</h2>
				<span><b>Address: </b>" . $data1['Doctors_Address'] . "</span><br>
				<span><b>Phone No: </b>" . $data1['Doctors_Phone'] . "</span><br>
				<span><b>Email Id: </b>" . $data1['Doctors_Email'] . "</span>
				</div>
				<div class='block'>
				<h2>Specialty</h2>
				<span>" . $data1['Specialty_Type'] . "</span>
				</div>
				<div class='block'>
				<h2>Location</h2>
				<span>" . $data1['State_Name'] . ", " . $data1['City_Name'] . "</span>
				</div>
				</div>
				</div>
				</div>
				</div>";
			}
			?>
		</div>
	</div>
</div>
			<!--<div class="col-md-4">
				<div class="blog-entry">
					<a href="blog.html" class="blog-img" style="background-image: url(images/blog-2.jpg);">
						<p class="date">
							<span>31</span>
							<span>Jan. 2017</span>
						</p>
					</a>
					<div class="desc">
						<h3><a href="blog.html">live better get to know your medical technology</a></h3>
						<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
						<p><a href="#">Read more <i class="icon-arrow-right3"></i></a></p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="blog-entry">
					<a href="blog.html" class="blog-img" style="background-image: url(images/blog-3.jpg);">
						<p class="date">
							<span>30</span>
							<span>Jan. 2017</span>
						</p>
					</a>
					<div class="desc">
						<h3><a href="blog.html">Eating apple is the source of energy</a></h3>
						<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
						<p><a href="#">Read more <i class="icon-arrow-right3"></i></a></p>
					</div>
				</div>
			</div>-->
		</div>
	</div>
</div>
<?php include('footer.php');?>