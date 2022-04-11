<?php include('header.php');?>
	<div class="colorlib-loader"></div><aside id="colorlib-hero" class="hero">
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
			<div class="row">
				<div class="col-md-10 col-md-offset-1 animate-box">
					<h3>Plase Fill the bellow form</h3>
					<form method="POST" action="./php/Insert.php">
						<div class="row form-group">
							<div class="col-md-6">
								<label for="fname">Name</label>
								<input pattern="^[A-Za-z]+\s?[A-Za-z]+" name="Ptxt1" type="text" id="fname" class="form-control mb" placeholder="Your firstname">
							</div>
							<div class="col-md-6">
								<label for="message">Username</label><br>
								<?php
								$query1="SELECT * FROM Users_Table WHERE User_Role = 3";
								$rows1=mysqli_query($con,$query1);
								echo "<select name='Ptxt5' id='subject' class='form-control'>";
								while   ($data1=mysqli_fetch_array($rows1) )
								{
									echo "<option value='$data1[User_Id]'> " . $data1['Username'] . " </option>";                        
								}
								echo "</select>";
								?>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<label for="address">Address</label>
								<input type="text" name="Ptxt2" id="subject" class="form-control" placeholder="Your lastname">
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<label for="subject">Phone</label>
								<input pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="Ptxt3" type="text" id="subject" class="form-control" placeholder="Your phone number">
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<label for="email">Email</label>
								<input pattern="^[A-Za-z0-9-_]+(\.[_A-Za-z0-9-]+)*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)*(\.[A-Za-z]{2,4})" type="text" name="Ptxt4" id="email" class="form-control" placeholder="Your email address">
							</div>
						</div>
						<div class="form-group text-center">
							<input type="submit" name="Pbtn1" value="Done" class="btn btn-primary">
						</div>
					</form>		
				</div>
			</div>
		</div>
	</div>
	<?php include('footer.php');?>