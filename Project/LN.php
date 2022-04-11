<?php include('header.php');?>
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
								<h1>All the Latest News from the Medical World</h1>
								
							</div>
						</div>
					</div>
				</div>
			</li>		   	
		</ul>
	</div>
</aside>
<div id="colorlib-blog">
	<div class="container">
		<div class="row animate-box">
			<div class="col-md-6 col-md-offset-3 text-center colorlib-heading">
				<h2>Medical News</h2>
				<p>Medical news and health news headlines posted throughout the day, every day.</p>
			</div>
		</div>
		<div class="row">
			<?php
			$que1 = "SELECT * FROM News_Table";
			$sel1 = mysqli_query($con, $que1);
			while($data1 = mysqli_fetch_assoc($sel1)){
				echo "<div class='col-md-4'>
				<div class='blog-entry'>
				<a class='blog-img' style='background-image: url(./Pages/" . $data1['News_Image'] . ");'>
				<p class='date'>
				<span>" . $data1['News_Id'] . "</span>
				<span>" . $data1['News_Date'] . "</span>
				</p>
				</a>
				<div class='desc'>
				<h3>" . $data1['Medical_News'] . "</h3>
				</div>
				</div>
				</div>";
			}
			?>
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