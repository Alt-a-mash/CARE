<?php include('header.php');?>
<div class="colorlib-loader"></div>
<aside id="colorlib-hero">
	<div class="flexslider">
		<ul class="slides">
			<li style="background-image: url(images/img_bg_6.jpg);">
				<div class="overlay"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 col-md-pull-2 slider-text">
							<div class="slider-text-inner">
								<h1>Different Diseases <br>and their Cure</h1>

							</div>
						</div>
					</div>
				</div>
			</li>
		</ul>
	</div>
</aside>
<div id="colorlib-services">
	<div class="container">
		<div class="row animate-box">
			<div class="col-md-6 col-md-offset-3 text-center colorlib-heading">
				<h2>Our Services</h2>
				<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
			</div>
		</div>
		<div class="row">
			<?php
			$que1 = "SELECT * FROM Disease_Table";
			$sel1 = mysqli_query($con, $que1);
			while($data1 = mysqli_fetch_assoc($sel1)){
				echo "<div class='col-md-4 animate-box'>
				<div class='services'>
				<span class='icon'>
				<i class='flaticon-healthy-1'></i>
				</span>
				<div class='desc'>
				<h3><a href='#'>" . $data1['Disease_Name'] . "</a></h3>
				<h5>" . $data1['Disease_Symptom'] . "</h5>
				<h6>" . $data1['Disease_Prevention'] . "</h6>
				<h6>" . $data1['Disease_Cure'] . "</h6>
				<p>" . $data1['Disease_Description'] . "</p>
				</div>
				</div>
				</div>";
			}
			?>
			<!--<div class="col-md-4 animate-box">
				<div class="services">
					<span class="icon">
						<i class="flaticon-hospital"></i>
					</span>
					<div class="desc">
						<h3><a href="#">Medical Counseling</a></h3>
						<p>Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 animate-box">
				<div class="services">
					<span class="icon">
						<i class="flaticon-ambulance"></i>
					</span>
					<div class="desc">
						<h3><a href="#">Emergency Services</a></h3>
						<p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli</p>
					</div>
				</div>
			</div>-->
		</div>
		<!--<div class="row">
			<div class="col-md-4 animate-box">
				<div class="services">
					<span class="icon">
						<i class="flaticon-blood-donation"></i>
					</span>
					<div class="desc">
						<h3><a href="#">Blood Bank</a></h3>
						<p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 animate-box">
				<div class="services">
					<span class="icon">
						<i class="flaticon-radiation"></i>
					</span>
					<div class="desc">
						<h3><a href="#">Operation Theater</a></h3>
						<p>Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 animate-box">
				<div class="services">
					<span class="icon">
						<i class="flaticon-medical"></i>
					</span>
					<div class="desc">
						<h3><a href="#">Free Medicine</a></h3>
						<p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli</p>
					</div>
				</div>
			</div>
		</div>-->
	</div>
</div>
<?php include('footer.php');?>