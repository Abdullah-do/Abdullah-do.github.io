<?php
session_start();
	if(!isset($_SESSION["useRole"]))
	{
		if($_SESSION["userRole"]!="Admin"){
		header("location:../view/index.php");
		}
	}
	else{
		if($_SESSION["userRole"]!="Admin"){
			header("location:../view/index.php");
			}
	}
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
			CSS
			============================================= -->
	<link rel="stylesheet" href="css/css6/csss/linearicons.css">
	<link rel="stylesheet" href="css/css6/csss/font-awesome.min.css">
	<link rel="stylesheet" href="css/css6/csss/bootstrap.css">
	<link rel="stylesheet" href="css/css6/csss/magnific-popup.css">
	<link rel="stylesheet" href="css/css6/csss/nice-select.css">
	<link rel="stylesheet" href="css/css6/csss/animate.min.css">
	<link rel="stylesheet" href="css/css6/csss/owl.carousel.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/css6/feather.css">
	<link rel="stylesheet" href="css/css6/materialdesignicons.min.css">
	<link rel="stylesheet" href="css/css6/themify-icons.css">
	<link rel="stylesheet" href="css/css6/typicons.css">
	<link rel="stylesheet" href="css/css6/simple-line-icons.css">
	<link rel="stylesheet" href="css/css6/vendor.bundle.base.css">

	<!-- endinject -->
	<!-- Plugin css for this page -->
	<link rel="stylesheet" href="css/css6/select2.min.css">
	<link rel="stylesheet" href="css/css6/select2-bootstrap.min.css">
	<!-- End plugin css for this page -->
	<!-- inject:css -->
	<link rel="stylesheet" href="css/css6/style.css">
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
			  <a href="main.html"><img src="img/logo-transparent-png.png"  alt="" title="" /></a>
			</div>
			<nav id="nav-menu-container">
			  <ul class="nav-menu">
				<li class="menu-active"><a href="main.html">Home</a></li>
				<li><a href="gallery.php">Gallery</a></li>
				<li><a href="event.php">Events</a></li>
			
				<li><a href="Reserve restaurant.php">Restaurant</a></li>
				<li><a href="Membership.php">Membership</a></li>
				<li><a href="reserve study room.php">Study Rooms</a></li>
				
			   
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
						Gallery
					</h1>


				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->
	<section class="gallery-area section-gap gallery-page-area" id="gallery">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-70 col-lg-8">
					<div class="title text-center">
						<h1 class="mb-10">Our Exhibition Gallery</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
							labore et dolore magna aliqua.</p>
					</div>
				</div>
			</div>
			<div class="row mb-5">
				<div class="col-md-6 col-lg-4 mb-3" style="font-family: 'Poppins', sans-serif;
				margin: 0;
				padding: 0;
				box-sizing: border-box;
				scroll-behavior: smooth;">
					<div class="card h-100" style="    box-shadow: 0 5px 20px rgba(1 1 1 / 15%);
					border-radius: 10px;
					margin: 15px;">
						<img class="card-img-top" src="img/gallery/egy1.jpg" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Old Kingdom – from the 3rd to 6th Dynasties</h5>
							<p class="card-text">
								This is the first great period of Egyptian history, when its kings – the pharaohs – are
								buried in monumental pyramids.
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 mb-3" style="font-family: 'Poppins', sans-serif;
				margin: 0;
				padding: 0;
				box-sizing: border-box;
				scroll-behavior: smooth;">
					<div class="card h-100" style="    box-shadow: 0 5px 20px rgba(1 1 1 / 15%);
					border-radius: 10px;
					margin: 15px;">
						<img class="card-img-top" src="img/gallery/egy2.jpg" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">First Intermediate Period – from the 7th to early 11th Dynasties</h5>
							<p class="card-text">
								The kingdom falls apart and power shifts from the court to provincial elites, with open
								conflicts erupting.
							</p>

						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 mb-3" style="font-family: 'Poppins', sans-serif;
				margin: 0;
				padding: 0;
				box-sizing: border-box;
				scroll-behavior: smooth;">
					<div class="card h-100" style="    box-shadow: 0 5px 20px rgba(1 1 1 / 15%);
					border-radius: 10px;
					margin: 15px;">
						<img class="card-img-top" src="img/gallery/egy7.jpg" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Late Period – 26th to the final 31st Dynasties</h5>
							<p class="card-text">
								Egypt's independence is restored but twice cut short by Persian rule – the second
								invasion causing the fall of the last true pharaoh.
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 mb-3" style="font-family: 'Poppins', sans-serif;
				margin: 0;
				padding: 0;
				box-sizing: border-box;
				scroll-behavior: smooth;">
					<div class="card h-100" style="    box-shadow: 0 5px 20px rgba(1 1 1 / 15%);
					border-radius: 10px;
					margin: 15px;">
						<img class="card-img-top" src="img/gallery/egy4.jpg" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Second Intermediate Period – 13th to 17th Dynasties</h5>
							<p class="card-text">
								Egypt's political integrity is undermined by a rapid succession of weak rulers, who lose
								much of their power to the leaders of Canaanite settlers – the Hyksos.
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 mb-3" style="font-family: 'Poppins', sans-serif;
				margin: 0;
				padding: 0;
				box-sizing: border-box;
				scroll-behavior: smooth;">
					<div class="card h-100" style="    box-shadow: 0 5px 20px rgba(1 1 1 / 15%);
					border-radius: 10px;
					margin: 15px;">
						<img class="card-img-top" src="img/gallery/egy3.jpg" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Middle Kingdom – Late 11th to 12th Dynasties</h5>
							<p class="card-text">
								Egypt is reunited under a long succession of powerful kings, who bring a golden age that
								will long be remembered by later generations.
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 mb-3" style="font-family: 'Poppins', sans-serif;
				margin: 0;
				padding: 0;
				box-sizing: border-box;
				scroll-behavior: smooth;">
					<div class="card h-100" style="    box-shadow: 0 5px 20px rgba(1 1 1 / 15%);
					border-radius: 10px;
					margin: 15px;">
						<img class="card-img-top" src="img/gallery/egy9.jpg" alt="Card image cap" height="200"
							width="100">
						<div class="card-body">
							<h5 class="card-title">Art and civilisation</h5>
							<p class="card-text">
								In 1824, Charles Townley's famous collection of Greek and Roman sculptures, acquired on
								his Grand Tours in Italy, came to the British Museum. They joined the collections of
								prints and drawings, gems, coins, bronzes, vases and other classical antiquities from
								fellow connoisseurs such as Sir William Hamilton and Richard Payne Knight.

								These men studied each other's collections to learn about the 'progress' of art, from
								'primitive' beginnings in early civilisations to what they considered to be the height
								of artistic achievement – the sculpture and architecture of classical Greece.

								This became the standard against which to measure all art and led, in late 18th-century
								Britain, to a classical revival in architecture and the decorative arts.
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 mb-3" style="font-family: 'Poppins', sans-serif;
				margin: 0;
				padding: 0;
				box-sizing: border-box;
				scroll-behavior: smooth;">
					<div class="card h-100" style="    box-shadow: 0 5px 20px rgba(1 1 1 / 15%);
					border-radius: 10px;
					margin: 15px;">
						<img class="card-img-top" src="img/gallery/egy5.jpg" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">New Kingdom – 18th to 20th Dynasties</h5>
							<p class="card-text">
								This is Egypt's age of empire, with pharaonic rule at its peak extending to the shores
								of the Euphrates and deep into modern-day Sudan.
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 mb-3" style="font-family: 'Poppins', sans-serif;
				margin: 0;
				padding: 0;
				box-sizing: border-box;
				scroll-behavior: smooth;">
					<div class="card h-100" style="    box-shadow: 0 5px 20px rgba(1 1 1 / 15%);
					border-radius: 10px;
					margin: 15px;">
						<img class="card-img-top" src="img/gallery/egy8.jpg" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Greco-Roman Period</h5>
							<p class="card-text">
								Alexander the Great's conquers Egypt and the rest of the Persian empire, heralding
								centuries of Greek and then Roman rule, which ultimately sees Christianity replace the
								native religion.
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 mb-3" style="font-family: 'Poppins', sans-serif;
				margin: 0;
				padding: 0;
				box-sizing: border-box;
				scroll-behavior: smooth;">
					<div class="card h-100" style="    box-shadow: 0 5px 20px rgba(1 1 1 / 15%);
					border-radius: 10px;
					margin: 15px;">
						<img class="card-img-top" src="img/gallery/egy10.jpg" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Classifying the world</h5>
							<p class="card-text">
								Everything gathered in the 18th century had to be classified and organised so that it
								could be more easily understood and used.

								King George III's library was presented to the nation by George IV and was housed in the
								room that is now the Enlightenment Gallery (his library is now in the British Library).
								The coins and medals collection was among the first part of the library to arrive at the
								Museum and they were arranged by country and ruler to help bring past history alive.
								George III was also keenly interested in the navy, navigation and scientific discoveries
								and collected instruments and working models.
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 mb-3" style="font-family: 'Poppins', sans-serif;
				margin: 0;
				padding: 0;
				box-sizing: border-box;
				scroll-behavior: smooth;">
					<div class="card h-100" style="    box-shadow: 0 5px 20px rgba(1 1 1 / 15%);
					border-radius: 10px;
					margin: 15px;">
						<img class="card-img-top" src="img/gallery/egy12.jpg" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Ritual and religion</h5>
							<p class="card-text">
								Christian mistrust of superstition and idols, rituals and magic led to ignorance about
								other religions.

								Enlightenment scholars attempted to dispel this by studying the ancient and modern
								religions they encountered. They researched rituals and cults in different cultures,
								collected religious artefacts, grouped gods into families and examined their attributes
								and functions.

								They wanted to find similarities that might shed light on the origins of the world's
								religions. Much of this activity took place within the context of colonialism.
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 mb-3" style="font-family: 'Poppins', sans-serif;
				margin: 0;
				padding: 0;
				box-sizing: border-box;
				scroll-behavior: smooth;">
					<div class="card h-100" style="  box-shadow: 0 5px 20px rgba(1 1 1 / 15%);
					border-radius: 10px;
					margin: 15px;">
						<img class="card-img-top" src="img/gallery/egy6.jpg" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Third Intermediate Period – 21st to 25th Dynasties</h5>
							<p class="card-text">
								Renewed political fragmentation allows Egypt to be invaded by its southern neighbour and
								former colony, the kingdom of Kush.
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 mb-3" style="font-family: 'Poppins', sans-serif;
				margin: 0;
				padding: 0;
				box-sizing: border-box;
				scroll-behavior: smooth;">
					<div class="card h-100" style="    box-shadow: 0 5px 20px rgba(1 1 1 / 15%);
					border-radius: 10px;
					margin: 15px;">
						<img class="card-img-top" src="img/gallery/egy11.jpg" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Ancient scripts</h5>
							<p class="card-text">
								The Enlightenment led to a fevered interest in deciphering the mysterious forms of
								Egyptian hieroglyphs and the cuneiform inscriptions found in lands described in the
								Bible as well as early forms of Sanskrit in India.

								Scholars 'cracked the codes' in the 19th century, opening up thousands of years of
								history.

								At the same time, antiquaries deciphered runes and other early forms of writing,
								revealing more of our own history. This was a period when significant numbers of
								antiquities, acquired from collectors, diplomats and through excavation, entered the
								British Museum.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
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