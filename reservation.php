<?php
include("connect.php");
?>

<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>In2iT Foods Corner</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:300,300i,400,400i,500,600i,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Sigatisfy" rel="stylesheet">
	
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/bootstrap.css">

	<link rel="stylesheet" href="css/flexslider.css">
	<link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">

	<link rel="stylesheet" href="css/style.css">

	<script src="js/modernizr-2.6.2.min.js"></script>

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-center logo-wrap">
						<div id="fh5co-logo"><a href="index.html">In2iT Foods Corner<span>.</span></a></div>
					</div>
					<div class="col-xs-12 text-center menu-1 menu-wrap">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="menu.php">Menu</a></li>
							<li class="has-dropdown">
								<a href="gallery.php">Gallery</a>
								<ul class="dropdown">
									<li><a href="#">Events</a></li>
									<li><a href="#">Food</a></li>
									<li><a href="#">Coffees</a></li>
								</ul>
							</li>
							<li class="active"><a href="reservation.php">Reservation</a></li>
							<li><a href="about.php">About</a></li>
							<li><a href="contact.php">Contact</a></li>
						</ul>
					</div>
				</div>
				
			</div>
		<!-- </div> -->
	</nav>

	<header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image: url(images/hero_1.jpeg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="display-t js-fullheight">
						<div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
							<h1>Reserved a Table Today!</h1>
							<h2>Brought to you by <a  target="_blank">In2iT Technologies Pvt. Ltd.</a></h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	
	<div id="fh5co-reservation-form" class="fh5co-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12 fh5co-heading animate-box">
					<h2>Reservation</h2>
					<div class="row">
						<div class="col-md-6">
							<p>In2iT Foods Corner provides the facility of booking your table at your finger tip. You have to search our website and in Reservation Section You can Book your table at your convinience.<br> To book a table, Fill the given form below. We will end your confirmation on your e-mail/mobile...</p>
							</div>
					</div>
				</div>
				
				<div class="col-md-6 col-md-push-6 col-sm-6 col-sm-push-6">
					<form action="reservation.php" id="form-wrap" method="post">
						<div class="row form-group">
							<div class="col-md-12">
								<label for="name">Your Name</label>
								<input type="text" class="form-control" id="name" name="name"  >
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<label for="many">How Many People</label>
								<select name="many" id="many" class="form-control custom_select">
									<option value="1" color="black">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4+</option>
								</select>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<label for="taskdatetime">When</label>
								<input type="date" name="dateb" class="form-control"/>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<input type="submit" class="btn btn-primary btn-outline btn-lg" value="Submit Form" name="submit">
							</div>
						</div>

					</form>
				</div>
	<?php
$n= $_POST['name'];
$m= $_POST['many'];
$d= $_POST['dateb'];
  

if($_POST['submit'])
{
    $sql= "INSERT INTO reserve(name,many,dateb) VALUES('$n','$m','$d')";
   if ($conn->query($sql) === TRUE) {
    echo "your table has been booked";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}



?>
			
				
			</div>
		</div>
	</div>

	<div id="fh5co-featured-testimony" class="fh5co-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12 fh5co-heading animate-box">
					<h2>Testimony</h2>
					<div class="row">
						<div class="col-md-6">
							<p> Since We have opened this foods corner in Greater Noida , We have Served a Large number of Customers. Here are some of our testimonials....</p>
							</div>
					</div>
				</div><div class="col-md-5 animate-box img-to-responsive animate-box" data-animate-effect="fadeInLeft">
						<img src="images/person_1.jpg" alt="">
				</div>
				<div class="col-md-7 animate-box" data-animate-effect="fadeInRight">
					<blockquote>
						<p> &ldquo; It is the best restaurent amonst all which I have visited in Greater noida. The service are good enough here. The staff give their proper attention to all. I refer everyone to visit this restaurent once, they become lover of the foods available there..."</p>
						<p class="author"><cite>Alia Bhatt</cite></p>
					</blockquote>
				</div>
			</div>
		</div>
	</div>

	

	
	
	<div id="fh5co-started" class="fh5co-section animate-box" style="background-image: url(images/hero_1.jpeg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Book a Table</h2>
					<p>In2iT Foods Corner provides the facility of booking your table at your finger tip. You have to search our website and in Reservation Section You can Book your table at your convinience.<br> To book a table Click on button below..</p>
					<p><a href="reservation.php" class="btn btn-primary btn-outline">Book Now</a></p>
				</div>
			</div>
		</div>
	</div>

	<footer id="fh5co-footer" role="contentinfo" class="fh5co-section">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-4 fh5co-widget">
					<h4>In2iT Foods Corner</h4>
					<p>It is one of the best restaurent in Greater Noida. A step tken by In2iT Technologies Pvt. Ltd.</p>
				</div>
				<div class="col-md-2 col-md-push-1 fh5co-widget">
					<h4>Links</h4>
					<ul class="fh5co-footer-links">
						<li><a href="index.php">Home</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="menu.php">Menu</a></li>
						<li><a href="gallery.php">Gallery</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-md-push-1 fh5co-widget">
					<h4>Categories</h4>
					<ul class="fh5co-footer-links">
						<li><a href="#">Landing Page</a></li>
						<li><a href="#">Real Estate</a></li>
						<li><a href="#">Personal</a></li>
						<li><a href="#">Business</a></li>
						<li><a href="#">e-Commerce</a></li>
					</ul>
				</div>

				<div class="col-md-4 col-md-push-1 fh5co-widget">
					<h4>Contact Information</h4>
					<ul class="fh5co-footer-links">
						<li> SEZ,Plot No. 21, Sector -Techzone IV,Greater Noida <br> U.P. 201306</li>
						<li><a href="#">+91 9874563214</a></li>
						<li><a href="#">info@in2itfoodscorner.com</a></li>
					</ul>
				</div>

			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">All Rights Reserved.</small> 
						<small class="block">Designed by <a href="#" target="_blank">Naval Kishore</a> </small>
					</p>
					<p>
						<ul class="fh5co-social-icons">
							<li><a href="#"><i class="icon-twitter2"></i></a></li>
							<li><a href="#"><i class="icon-facebook2"></i></a></li>
							<li><a href="#"><i class="icon-linkedin2"></i></a></li>
							<li><a href="#"><i class="icon-dribbble2"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>


	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up22"></i></a>
	</div>
	
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/jquery.flexslider-min.js"></script>

	<script src="js/moment.min.js"></script>
	<script src="js/bootstrap-datetimepicker.js"></script>
	

	<script src="js/main.js"></script>

	</body>
</html>

