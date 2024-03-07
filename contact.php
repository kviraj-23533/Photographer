<?php

include "ums/inc/connection.php";
   
   
if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$contact = $_POST['contact'];
	$subject = $_POST['subject'];
	$email = $_POST['email'];
	$messa = $_POST['messa'];
	$status = "pending";
	
	
	$sql = "INSERT INTO contact(Name,Phone_no,subject,email,messa,is_deleted)
	VALUES ('".$name."','".$contact."','".$subject."','".$email."','".$messa."','".$status."')";
	
	if (mysqli_query ($connection,$sql)) {
		echo " <script type='text/javascript'>alert('Requested!!!');location.href='index.php'</script>";  	           
	
	}else{
		
		echo " <script type='text/javascript'>alert('Error!!!. Try again.!!!');</script>";
	}
}

?>
<!DOCTYPE html>
<php lang="en">
<head>
<title>photography.com</title>
	
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Photo Session Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->
    
	<!-- css files -->
	<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
	<link rel="stylesheet" href="css/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->
	
	<!--web font-->
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=devanagari,latin-ext" rel="stylesheet">
	<!--//web font-->

</head>

<body>

<!-- header -->
<header>
	<div class="container-fliud px-sm-5 px-3">
		<nav class="navbar navbar-expand-lg navbar-light">
			<a class="navbar-brand" href="index.html">
				<i class="fas fa-camera-retro"></i> photo <span>session</span>
			</a>
			<button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mx-auto text-center">
					<li class="nav-item mr-lg-3">
						<a class="nav-link" href="index.php">Home
							<span class="sr-only">(current)</span>
						</a>
					</li>
					<li class="nav-item  mr-lg-3">
						<a class="nav-link" href="about.php">about</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="Package.php">Service</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="Gallery.php">Gallery</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="Booking.php">Booking</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="contact.php">contact</a>
					</li>
				</ul>
				<div class="buttons mt-lg-0 mt-3">
					<a href="#"><i class="sign in"></i></a>
					<a href="#"><i class=""></i></a>
					<a href="#"><i class=""></i></a>
				</div>
				
			</div>
		</nav>
	</div>
</header>
<!-- //header -->

<!-- banner -->
<section class="inner-banner">
	
</section>
<!-- //banner -->

<!-- contact form -->
<section class="contact booking py-5">
	<div class="container py-sm-3">
		<h1 class="heading text-capitalize mb-lg-5 mb-4">Contact Us</h1>
		<form action="#" method="post">
			<div class="row main-agile-sectns">
				<div class="col-md-6 agileits-btm-spc form-text1">
					<input type="text" name="name" placeholder="Enter Your Name" required>
				</div>
				<div class="col-md-6 agileits-btm-spc form-text2">
					<input type="text" name="contact" placeholder="Enter Phone Number" required>
				</div>
			</div>
			<div class="row main-agile-sectns">
				<div class="col-md-6 agileits-btm-spc form-text1">
					<input type="text" name="subject" placeholder="Enter Subject" required>
				</div>
				
				<div class="col-md-6 agileits-btm-spc form-text1">
					<input type="email" name="email" placeholder="Enter Your Email" required>
				</div>
			</div>
			<div class="main-agile-sectns ">
				<div class="agileits-btm-spc form-text2 p-0">
					<textarea placeholder="Enter Your Message Here" name="messa"></textarea>
				</div>
			</div>
			<input type="submit" value="Submit" name="submit">
		</form>
	</div>
</section>
<!-- contact form -->

	</div>
</section>
<!-- footer -->
<footer class="py-5">
	<div class="container">
		<div class="row footer_grids">
			<div class="col-lg-6 footer_left">
				<h2><a class="footer-logo" href="index.html">
				<i class="fas fa-camera-retro"></i> photo <span>session</span>
				</a></h2>
				<p>photograper is the art, application and practice of creating durable images by recoding light or other electromagnetic radiation, either eletronically by means of an image sensor, or chemically by means of a light-sensitive material such as photographic film.</p>
			</div>
			<div class="col-lg-3 col-md-6 mt-lg-0 mt-5 footer_middle">
				<h3 class="mb-sm-4 mb-3">Twitter Feed</h3>
				<ul>
					<li class="mb-2">Ut aut reiciendis voluptatibus <a href="#">http://example.com</a> alias.
						<span><i class="fab mr-1 fa-twitter" aria-hidden="true"></i> 02 days ago</span></li>
					<li>Itaque earum rerum hic tenetur a sapiente <a href="#">http://example.com</a>
					<span><i class="fab mr-1 fa-twitter" aria-hidden="true"></i> 03 days ago</span></li>
				</ul>
			</div>
			<div class="col-lg-3 col-md-6 mt-lg-0 mt-5 footer_right">
				<h3 class="mb-sm-4 mb-3">Contact Info</h3>
				<p> <i class="fas mr-1 fa-map-marker"></i> puththalam road, wariyapola </p>
				<p> <i class="fas mr-1 fa-envelope"></i> <a href="mailto:info@example.com">info@Sudasuna.com</a> </p>
				<p> <i class="fas mr-1 fa-phone"></i> 0375730627 </p>
				<p> <i class="fas mr-1 fa-clock"></i> Everyday 8:30a.m.–5.00p.m.</p>
			</div>
		</div>
		<div class="copyright text-center mt-5">
			<p>© 2018 Photo Session. All Rights Reserved </a> </p>
		</div>
	</div>
</footer>
<!-- //footer -->

	<!-- js -->
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
	<!-- //js -->	
	
	<!-- start-smoth-scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
	<!-- here stars scrolling icon -->
	<script>
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
	<!-- start-smoth-scrolling -->

</body>
</html>