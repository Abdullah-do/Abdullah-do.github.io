<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<?php
include "../module/reserved_ticket.php";
include "../Controller/Ticketcontroller.php";
include "../module/user.php";
include "../Controller/UserController.php";
session_start();
$errmsg = "";
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['mobile']) && isset($_POST['Exhibition']) && isset($_POST['date']) && isset($_POST['price']) && isset($_POST['travelars'])) {
	$reservedticket1 = new Reserved_ticket;
	$ticketcontroller = new Ticket_controlloer;
	$reservedticket1->set_Quantity($_POST['travelars']);
	$reservedticket1->set_Date($_POST['date']);
	$reservedticket1->set_price($_POST['price']);
	$user1 = new UserController;
	$usersinfo = $user1->getuser();
	foreach ($usersinfo as $userinfo):
		if ($userinfo['Email'] == $_POST['email']) {
			$reservedticket1->set_User_id($userinfo['user_id']);
			// $_SESSION["errmsg"] = "Your information are saved";
		}
	endforeach;
	foreach ($usersinfo as $userinfo):
		if ($userinfo['Email'] == $_POST['email'] && $userinfo['Admin_check'] == 1) {
			$reservedticket1->set_MS_Discount(0.1);
			$reservedticket1->set_price($reservedticket1->get_price() * 0.9);
		} else if ($userinfo['Email'] == $_POST['email'] && $userinfo['Admin_check'] != 1) {
			$reservedticket1->set_MS_Discount(0); //visitor
		}
	endforeach;
	$ticketcontroller->reserve_ticket($reservedticket1);

}
// if (isset($_POST['Emaill'])) {
// 	$ticketcontroller1 = new Ticket_controlloer;
// 	$user2 = new UserController;
// 	$usersinfo = $user2->getuser();
// 	foreach ($usersinfo as $userinfo):
// 		if ($userinfo['Email'] == $_POST['Emaill']) {
// 			$ticketcontroller1->delete_ticket($userinfo['user_id']);
// 			echo $userinfo['user_id'];
// 		}
// 	endforeach;
// }

?>
=======
>>>>>>> parent of f757b96 (Delete Buy Tickett.php)
=======
>>>>>>> parent of f757b96 (Delete Buy Tickett.php)
=======
>>>>>>> parent of f757b96 (Delete Buy Tickett.php)

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
	<!-- endinject -->
	<link rel="shortcut icon" href="https://www.bootstrapdash.com/demo/star-admin2-free/template/images/favicon.png">

</head>

<body>

	<header id="header" id="home">
		<div class="container header-top">
			<div class="row">
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD


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
=======
=======
>>>>>>> parent of f757b96 (Delete Buy Tickett.php)
=======
>>>>>>> parent of f757b96 (Delete Buy Tickett.php)
				
			  
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
			
				<li><a href="Reserve restaurant.html">Restaurant</a></li>
				<li><a href="Membership.php">Membership</a></li>
				<li><a href="reserve study room.php">Study Rooms</a></li>
				
			   
				<li><a href="allproducts_shop.php">Shop</a></li>
				<li><a href="donation.php">Donate</a></li>
				<li><a href="feedback.php">FeedBack</a></li>
							  
			  </ul>
			</nav><!-- #nav-menu-container -->		    		
		  </div>
	  </div>
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> parent of f757b96 (Delete Buy Tickett.php)
=======
>>>>>>> parent of f757b96 (Delete Buy Tickett.php)
=======
>>>>>>> parent of f757b96 (Delete Buy Tickett.php)
	</header><!-- #header -->


	<!-- start banner Area -->
	<section class="banner-area relative" id="home">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row fullscreen d-flex align-items-center justify-content-center">
				<div class="banner-content col-lg-8">

					<h1 class="text-white">
						Buy Ticket
					</h1>


				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->
	<section class="upcoming-exibition-area section-gap">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-70 col-lg-8">
					<div class="title text-center">
						<h1 class="mb-10">Checkout our Event's Tickets</h1>
						<p>You can buy any Ticket from here</p>
					</div>
				</div>
			</div>
			<div class="container-scroller">
				<!-- partial:../../partials/_navbar.php -->
				<!-- partial -->
				<div class="container-fluid page-body-wrapper">
					<!-- partial:../../partials/_settings-panel.php -->

					<!-- partial -->
					<!-- partial:../../partials/_sidebar.php -->
					<nav class="sidebar sidebar-offcanvas" id="sidebar">
					</nav>
					<!-- partial -->
					<div class="main-panel">
						<div class="content-wrapper">
							<div class="roww">
								<div class="col-md-6 grid-margin stretch-card">
									<div class="card">
										<div class="card-body">
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
											<form class="forms-sample" action="Buy Tickett.php" method="POST">
=======
											<form class="forms-sample">
>>>>>>> parent of f757b96 (Delete Buy Tickett.php)
=======
											<form class="forms-sample">
>>>>>>> parent of f757b96 (Delete Buy Tickett.php)
=======
											<form class="forms-sample">
>>>>>>> parent of f757b96 (Delete Buy Tickett.php)
												<div class="form-group row">
													<label for="exampleInputUsername2" class="col-sm-3 col-form-label"
														style="font-weight: 700;    color: #697a8d;">Name</label>
													<div class="col-sm-9" style="    margin-top: 10px;">
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
														<input required type="text" class="form-control"
															id="exampleInputConfirmPassword2" name="name"
															placeholder="your name" required>
=======
														<input type="text" class="form-control"
															id="exampleInputUsername2" placeholder="Username">
>>>>>>> parent of f757b96 (Delete Buy Tickett.php)
=======
														<input type="text" class="form-control"
															id="exampleInputUsername2" placeholder="Username">
>>>>>>> parent of f757b96 (Delete Buy Tickett.php)
=======
														<input type="text" class="form-control"
															id="exampleInputUsername2" placeholder="Username">
>>>>>>> parent of f757b96 (Delete Buy Tickett.php)
													</div>
												</div>
												<div class="form-group row">
													<label for="exampleInputEmail2" class="col-sm-3 col-form-label"
														style="font-weight: 700;   color: #697a8d;">Email</label>
													<div class="col-sm-9" style="    margin-top: 10px;">
														<input required type="email" class="form-control"
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
															id="exampleInputConfirmPassword2" name="email"
															placeholder="Email" required>
=======
															id="exampleInputEmail2" placeholder="Email">
>>>>>>> parent of f757b96 (Delete Buy Tickett.php)
=======
															id="exampleInputEmail2" placeholder="Email">
>>>>>>> parent of f757b96 (Delete Buy Tickett.php)
=======
															id="exampleInputEmail2" placeholder="Email">
>>>>>>> parent of f757b96 (Delete Buy Tickett.php)
													</div>
												</div>
												<div class="form-group row">
													<label for="exampleInputMobile" class="col-sm-3 col-form-label"
														style="font-weight: 700;    color: #697a8d;">Mobile</label>
													<div class="col-sm-9" style="    margin-top: 10px;">
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
														<input required type="text" class="form-control"
															id="exampleInputConfirmPassword2" name="mobile"
															placeholder="Phone number" required>
=======
														<input type="text" class="form-control" id="exampleInputMobile"
															placeholder="Mobile number">
>>>>>>> parent of f757b96 (Delete Buy Tickett.php)
=======
														<input type="text" class="form-control" id="exampleInputMobile"
															placeholder="Mobile number">
>>>>>>> parent of f757b96 (Delete Buy Tickett.php)
=======
														<input type="text" class="form-control" id="exampleInputMobile"
															placeholder="Mobile number">
>>>>>>> parent of f757b96 (Delete Buy Tickett.php)
													</div>
												</div>
												<div class="form-group row">
													<label for="exampleInputConfirmPassword2"
														class="col-sm-3 col-form-label"
														style="font-weight: 700;    color: #697a8d;">Exhibition</label>
													<div class="col-sm-9" style="    margin-top: 10px;">
														<input required type="text" class="form-control"
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
															id="exampleInputConfirmPassword2" name="Exhibition"
															placeholder="Exhibition name" required>
=======
															id="exampleInputConfirmPassword2"
															placeholder="Exhibition name">
>>>>>>> parent of f757b96 (Delete Buy Tickett.php)
=======
															id="exampleInputConfirmPassword2"
															placeholder="Exhibition name">
>>>>>>> parent of f757b96 (Delete Buy Tickett.php)
=======
															id="exampleInputConfirmPassword2"
															placeholder="Exhibition name">
>>>>>>> parent of f757b96 (Delete Buy Tickett.php)
													</div>
												</div>
												<div class="form-group row">
													<label for="exampleInputConfirmPassword2"
														class="col-sm-3 col-form-label"
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
														style="font-weight: 700;    color: #697a8d;"
														required>Date</label>
													<div class="col-sm-9" style="    margin-top: 10px;">
														<input required type="date" class="form-control"
															id="exampleInputConfirmPassword2" name="date"
															placeholder="Date" required>
=======
=======
>>>>>>> parent of f757b96 (Delete Buy Tickett.php)
=======
>>>>>>> parent of f757b96 (Delete Buy Tickett.php)
														style="font-weight: 700;    color: #697a8d;">Date</label>
													<div class="col-sm-9" style="    margin-top: 10px;">
														<input type="date" class="form-control"
															id="exampleInputConfirmPassword2" placeholder="Date"
															value="2021-06-18">
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> parent of f757b96 (Delete Buy Tickett.php)
=======
>>>>>>> parent of f757b96 (Delete Buy Tickett.php)
=======
>>>>>>> parent of f757b96 (Delete Buy Tickett.php)
													</div>
												</div>
												<div class="form-group row">
													<label for="exampleInputConfirmPassword2"
														class="col-sm-3 col-form-label"
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
														style="font-weight: 700;    color: #697a8d;"
														required>Price</label>
													<div class="col-sm-9" style="    margin-top: 10px;">
														<input required type="text" class="form-control"
															id="exampleInputConfirmPassword2" name="price"
															placeholder="price of ticket" required>
													</div>
												</div>
												<div class="form-group row">
													<label for="exampleInputUsername2" class="col-sm-3 col-form-label"
														style="font-weight: 700;    color: #697a8d;">Travelars</label>
													<div class="col-sm-9" style="    margin-top: 10px;">
														<input required type="text" required class="form-control"
															id="exampleInputConfirmPassword2" name="travelars"
															placeholder="number of tickets">
=======
=======
>>>>>>> parent of f757b96 (Delete Buy Tickett.php)
=======
>>>>>>> parent of f757b96 (Delete Buy Tickett.php)
														style="font-weight: 700;    color: #697a8d;">Time</label>
													<div class="col-sm-9" style="    margin-top: 10px;">
														<input type="time" class="form-control" value="12:30:00"
															id="exampleInputConfirmPassword2" placeholder="Time">
													</div>
												</div>
												<div class="form-group row">
													<label for="exampleInputConfirmPassword2"
														class="col-sm-3 col-form-label"
														style="font-weight: 700;    color: #697a8d;">Travelers</label>
													<div class="col-sm-9" style="    margin-top: 10px;">
														<input type="text" class="form-control"
															id="exampleInputConfirmPassword2"
															placeholder="Number of Travelers">
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> parent of f757b96 (Delete Buy Tickett.php)
=======
>>>>>>> parent of f757b96 (Delete Buy Tickett.php)
=======
>>>>>>> parent of f757b96 (Delete Buy Tickett.php)
													</div>
												</div>
												<button class="btn btn-light" style="background-color: #a38c07;"
													style="font-weight:bolder;"><span style="font-size: medium;">Buy
														Ticket</span></button>
												<button class="btn btn-light">Cancel</button>
											</form>
										</div>
									</div>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
									<div class="card">
										<div class="card-body">
											<form class="forms-sample" action="Buy Tickett.php" method="POST">
												<div class="form-group row">
													<label for="exampleInputEmail2" class="col-sm-3 col-form-label"
														style="font-weight: 700;   color: #697a8d;">Email</label>
													<div class="col-sm-9" style="    margin-top: 10px;">
														<input required type="email" class="form-control"
															id="exampleInputConfirmPassword2" name="Emaill"
															placeholder="Email" required>
													</div>
												</div>
												<button class="btn btn-light" style="background-color: #a38c07;"
													style="font-weight:bolder;"><span style="font-size: medium;">Delete
														Ticket</span></button>
											</form>
										</div>
									</div>
=======
>>>>>>> parent of f757b96 (Delete Buy Tickett.php)
=======
>>>>>>> parent of f757b96 (Delete Buy Tickett.php)
=======
>>>>>>> parent of f757b96 (Delete Buy Tickett.php)
								</div>
							</div>
						</div>
						<!-- content-wrapper ends -->
						<!-- partial:../../partials/_footer.php -->
						<!-- partial -->
					</div>
					<!-- main-panel ends -->
				</div>
				<!-- page-body-wrapper ends -->
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
								<button class="click-btn btn btn-default"><span class="lnr lnr-arrow-right"></span>
								</button>
=======
								<button class="click-btn btn btn-default"><span
									class="lnr lnr-arrow-right"></span>
										</button>
>>>>>>> parent of f757b96 (Delete Buy Tickett.php)
=======
								<button class="click-btn btn btn-default"><span
									class="lnr lnr-arrow-right"></span>
										</button>
>>>>>>> parent of f757b96 (Delete Buy Tickett.php)
=======
								<button class="click-btn btn btn-default"><span
									class="lnr lnr-arrow-right"></span>
										</button>
>>>>>>> parent of f757b96 (Delete Buy Tickett.php)
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