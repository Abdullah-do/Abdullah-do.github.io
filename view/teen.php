<?php

include_once '../controller/Sessioncontroller.php';



$id = 3;
$Sessioncontroller = new Sessioncontroller();
$sessions = $Sessioncontroller->GetAllSession($id);
$errmsg="";

?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="codepixer">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Egyptian Museum</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
	<!--
			CS
			============================================= -->
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/main.css">
	<link href="./css/css7/met-zodiac-generated.css" rel="stylesheet">
    <link rel="stylesheet" href="css/css7/style.css">



	<style>
		.session{
			font-size: 20px;
		}
		
		h5 {

    font-size: 20px;
    font-family: "Poppins-Medium";
    color: #88d200;
    font-weight: 500; }
	.details{
		font-size: 25px;
	}
	.btn{
		
		position: relative;
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 12px 24px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 8px;
    left: 250px;

	}


	</style>
</head>

<body>

	<header id="header" id="home">
		<div class="container header-top">
			<div class="row">


				<div class="col-6 top-head-right">
					<ul>
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
						<li><a href="#"><i class="fa fa-behance"></i></a></li>
					</ul>
				</div>
				<div class="col-6 top-head-left">
					<li><a href="profile.php"><i class='fa fa-user'></i></a></li>
				</div>
			</div>
		</div>
		<hr>
		<div class="container">
			<div class="row align-items-center justify-content-between d-flex">
				<div id="logo">
					<a href="main.html"><img src="img/logo-transparent-png.png" alt="" title="" /></a>
				</div>
				<nav id="nav-menu-container">
					<ul class="nav-menu">
						<li class="menu-active"><a href="main.html">Home</a></li>
						<li><a href="gallery.php">Gallery</a></li>
						<li><a href="event.php">Events</a></li>

						<li><a href="Reserve restaurant.php">Restaurant</a></li>
						<li><a href="Membership.php">Membership</a></li>
						<li><a href="reserve study room.php">Study Rooms</a></li>
						<li><a href="contact.php">Contact</a></li>

						<li><a href="allproducts_shop.php">Shop</a></li>
						<li><a href="donation.php">Donate</a></li>
						<li><a href="feedback.php">FeedBack</a></li>

					</ul>
				</nav><!-- #nav-menu-container -->
			</div>
		</div>
	</header><!-- #header -->


	<!-- start banner Area -->
	<section class="banner-area relative" id="home">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row fullscreen d-flex align-items-center justify-content-center">
				<div class="banner-content col-lg-8">

					<h1 class="text-white">
						teen study room
					</h1>


				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->









			<div class="main-wrapper wrapper" id="main-content">
    <div class="wor">
        <div class="med-hide lrg-c2"></div>
        <div class="content content-centered">    <section class="image-block image-block--xlarge image-block--text-above-below z-container">
    </section>
    <h1 class="page-title">
teen Guides
</h1>

    <div class="rich-text z-container">
<p class = "details">
A study room dedicated to ancient Egypt can be a great way to introduce kids to this fascinating civilization. It can be decorated with various replicas of ancient Egyptian artifacts, such as pyramids, sphinxes, hieroglyphics decoders, board games, pottery, and mummy replicas. A bookshelf filled with books about ancient Egypt can also be a great addition, with titles ranging from children's books to more in-depth histories.</p>
<p class = "details">Kids can learn about the daily life, culture, art, religion, and achievements of ancient Egyptians through various interactive and educational activities, such as playing board games, decoding hieroglyphics, or creating their own pottery. This study room can not only provide a fun and engaging learning experience for kids but also foster a deeper appreciation for history and other cultures.</p>
    </div>

			<?php
					foreach($sessions as $Session){
						?>

					<div class="promo-area--body z-container">
							<div class="promo-area__image-container">
									<img src="<?php echo 'view/'.$Session["image"]?>" class="image-block__image" alt="Cover of a brochure with a very colorful illustration of visitors and families on The Met&#39;s Plaza.">
							</div>
							<div class="image-block__description rich-text">
								<h3><?php echo $Session["S_name"] ?></h3>
								<h5>Duration: </h5><span class = "session"><?php echo $Session["S_duration"] ?> hours</span><br>
								<h5>Cost: </h5><span class = "session"><?php echo $Session["S_fee"] ?> $</span><br>
								<h5>Start Date: </h5><span class = "session"><?php echo $Session["s_schdule"]?></span><br>
								<div>
								<p class = "details"><?php echo $Session["S_details"]?></p>
								</div>
								
							</div>
						</div>


							<?php
					}






					?>

	
	
</div>

        

		
<!-- End Reservation Form -->
        <div class="med-hide lrg-c2"></div>
    </div>
</div>
			











	<!-- start footer Area -->
	<footer class="footer-area section-gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>About Us</h6>
						<p>
							Welcome to our museum's website! Explore our exhibits, collections,
							and programs dedicated to preserving the unique history and culture of our region.
							Discover a world of education and enrichment through virtual tours, online exhibits,
							educational resources, and event listings.
							Thank you for visiting and we hope to see you soon.
						</p>
						<p class="footer-text">

							Copyright &copy;
							<script>document.write(new Date().getFullYear());</script> All rights reserved.

						</p>
					</div>
				</div>
				<div class="col-lg-5  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Newsletter</h6>
						<p>Stay update with our latest</p>
						<div class="" id="mc_embed_signup">
							<form target="_blank" novalidate="true"
								action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
								method="get" class="form-inline">
								<input class="form-control" name="EMAIL" placeholder="Enter Email"
									onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '"
									required="" type="email">
								<button class="click-btn btn btn-default"><span
										class="lnr lnr-arrow-right"></span></button>
								<div style="position: absolute; left: -5000px;">
									<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value=""
										type="text">
								</div>

								<div class="info"></div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
					<div class="single-footer-widget">
						<h6>Follow Us</h6>
						<p>Let us be social</p>
						<div class="footer-social d-flex align-items-center">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- End footer Area -->

	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
		integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
		crossorigin="anonymous"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script type="text/javascript"
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
	<script src="js/easing.min.js"></script>
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/imagesloaded.pkgd.min.js"></script>
	<script src="js/justified.min.js"></script>
	<script src="js/jquery.sticky.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/parallax.min.js"></script>
	<script src="js/mail-script.js"></script>
	<script src="js/main.js"></script>
</body>

</html>
