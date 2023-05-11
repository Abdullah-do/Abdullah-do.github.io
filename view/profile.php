<?php
require_once "../controller/ProfileController.php";
require_once "../module/client.php";
session_start();
$ProfileController =new ProfileController();
$id = $_SESSION["user_id"];

$info = $ProfileController->GetAlluserinfo($id);
if(isset($_POST["firstName"])&&isset($_POST["email"])&&isset($_POST["pass"])
&&isset($_POST["age"])&&isset($_POST["phoneNumber"])&&isset($_POST["nation"])){

  if(!empty($_POST["firstName"])&&!empty($_POST["email"])&&!empty($_POST["pass"])
  &&!empty($_POST["age"])&&!empty($_POST["phoneNumber"])&&!empty($_POST["nation"])){
  $Client = new Client();
  $Client->setName($_POST["firstName"]);
  $Client->setEmail($_POST["email"]);
  $Client->setPass($_POST["pass"]);
  $Client->setAge($_POST["age"]);
  $Client->setPhone($_POST["phoneNumber"]);
  $Client->setNationality($_POST["nation"]);
  
    if($ProfileController->updateuser($Client,$id)){

    }
    else
    $errmsg="somthing wrong";
  }
  
  
}
  

if(isset($_POST["card holder name"])&&isset($_POST["cvv"])&&isset($_POST["visa_number"])){
  if(!empty($_POST["card holder name"])&&!empty($_POST["cvv"])&&!empty($_POST["visa_number"])){
  $Client = new Client();
  $Client->setcard_date($_POST["Expired_Date"]);
  $Client->setcard_holder_name($_POST["card holder name"]);
  $Client->setvisa_cvv($_POST["cvv"]);
  $Client->setvisa_number($_POST["visa_number"]);
  if($ProfileController->updatevisa($Client,$id)){

  }
  else
    $errmsg="somthing wrong";

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
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/solve-event-gallery.css">

    <link rel="stylesheet" href="css/css7\core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="css/css7\theme-default.css" class="template-customizer-theme-css" />


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
						profile
					</h1>


				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->








            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Account Settings /</span> Account</h4>

              <div class="wor">
                <div class="col-md-12">
                  <ul class="nav nav-pills flex-column flex-md-row mb-3">
                    
                    
                  </ul>
                  <div class="card mb-4">
                    <h5 class="card-header">Profile Details</h5>
                    <!-- Account -->
                   
                    <hr class="my-0" />
                    <div class="card-body">
                      <form id="formAccountSettings" method="POST" enctype ="multipart/form-data" action ="profile.php">
                        <div class="wor">
                          <div class="mb-3 col-md-6">
                            <label for="firstName" class="form-label">Name</label>
                            <input
                              class="form-control"
                              type="text"
                              id="firstName"
                              name="firstName"
                              
                              value="<?php echo $info[0]["User_Name"];?>"
                              
                             
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="email" class="form-label">E-mail</label>
                            <input
                              class="form-control"
                              type="text"
                              id="email"
                              name="email"
                              value="<?php echo $info[0]["Email"]?>"
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label class="form-label" for="phoneNumber">password</label>
                           
                              
                              <input
                                type="text"
                                id="phoneNumber"
                                name="pass"
                                class="form-control"
                                value="<?php echo $info[0]["password"] ?>"
                              />
                            </div>
                          <div class="mb-3 col-md-6">
                            <label for="zipCode" class="form-label">age</label>
                           <input
                              type="text"
                              class="form-control"
                              id="age"
                              name="age"
                              
                              maxlength="3"
                              value = "<?php echo $info[0]["age"]?>"
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label class="form-label" for="phoneNumber">Phone Number</label>
                            <div class="input-group input-group-merge">
                              
                              <input
                                type="text"
                                id="phoneNumber"
                                name="phoneNumber"
                                class="form-control"
                                value = "<?php echo $info[0]["phone_no"]?>"
                              />
                            </div>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label class="form-label" for="country">nationalty</label>
                            <select id="country" class="select2 form-select" name ="nation">
                              <option value = ""><?php echo $info[0]["nationality"]?></option>
                              <option value="Australia">Australia</option>
                              <option value="Bangladesh">Bangladesh</option>
                              <option value="Belarus">Belarus</option>
                              <option value="Brazil">Brazil</option>
                              <option value="Canada">Canada</option>
                              <option value="China">China</option>
                              <option value="France">France</option>
                              <option value="Germany">Germany</option>
                              <option value="India">India</option>
                              <option value="Indonesia">Indonesia</option>
                              <option value="Italy">Italy</option>
                              <option value="Japan">Japan</option>
                              <option value="Korea">Korea, Republic of</option>
                              <option value="Mexico">Mexico</option>
                              <option value="Philippines">Philippines</option>
                              <option value="Russia">Russian Federation</option>
                              <option value="South Africa">South Africa</option>
                              <option value="Thailand">Thailand</option>
                              <option value="Turkey">Turkey</option>
                              <option value="Ukraine">Ukraine</option>
                              <option value="United Arab Emirates">United Arab Emirates</option>
                              <option value="United Kingdom">United Kingdom</option>
                              <option value="United States">United States</option>
                              <option value="Egypt">Egypt</option>
                            </select>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="email" class="form-label">card date</label>
                            <input
                              class="form-control"
                              type="date"
                              name = "card_date"
                              value="<?php echo $info[0]["Expired_Date"]?>"
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="email" class="form-label">card holder name</label>
                            <input
                              class="form-control"
                              type="text"
                              id="card holder name"
                              name="card holder name"
                              value="<?php echo $info[0]["Card_Holder_Name"]?>"
                              
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="zipCode" class="form-label">visa cvv</label>
                           <input
                              type="text"
                              class="form-control"
                              id="age"
                              name="cvv"
                              value="<?php echo $info[0]["Cvv"]?>"
                              maxlength="3"
                              
                            />
                          </div>
                         <div class="mb-3 col-md-6">
                            <label for="zipCode" class="form-label">visa number</label>
                           <input
                              type="text"
                              class="form-control"
                              id="age"
                             name="visa_number"

                              maxlength="16"
                              value="<?php echo $info[0]["Visa_number"]?>"
                            />
                          </div>
                        </div>
                        <div class="mt-2">
                          <button type="submit" class="btn btn-primary me-2">Save changes</button>
                          <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                          <a href="add visa.php"><button type="button" class="btn btn-outline-secondary">add visa</button></a>
                        </div>
                      </form>
                    </div>
                    <!-- /Account -->
                  </div>
                  
                </div>
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

      <script src="js\js7\pages-account-settings-account.js"></script>
</body>

</html>
