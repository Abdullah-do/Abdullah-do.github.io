<?php
require_once '../module/Membership.php';


if (isset($_POST['name']) && isset($_POST['country']) && isset($_POST['address']) && isset($_POST['email']) && isset($_POST['phonenumber']) && isset($_POST['mtype'])) {
	$form = new Membership;
	$form->setname($_POST['name']);
	$form->setcountry($_POST['country']);
	$form->setaddress($_POST['address']);
	$form->setemail($_POST['email']);
	$form->setphonenumber($_POST['phonenumber']);
	$form->setmtype($_POST['mtype']);
	echo 'name' . $form->getname();
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
	<link rel="stylesheet" href="css/solve.css">
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
	</header><!-- #header -->


	<!-- start banner Area -->
	<section class="banner-area relative" id="home">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row fullscreen d-flex align-items-center justify-content-center">
				<div class="banner-content col-lg-8" style="margin-bottom: 350px;">

					<h1 class="text-white">
						Membership Subscribtion
					</h1>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-----------------------------------------------START CODE----------------------------------------->
	<section>
		<form method="POST" action="Membership.php">
			<div class="content-wrapper">
				<!-- Content -->

				<div class="container-xxl flex-grow-1 container-p-y">
					<h4 class="fw-bold py-3 mb-4" style="margin-top: 50px;margin-left: 380px;">Membership Details </h4>

					<div class="row">
						<!-- Basic -->
						<div class="col-md-6" style="margin-left: 380px;">
							<div class="card mb-4">

								<div class="card-body demo-vertical-spacing demo-only-element">
									<div class="input-group" style="    margin-top: 2rem !important;
			margin-bottom: 0 !important;">
										<span class="input-group-text" id="basic-addon11">Name</span>
										<input type="text" class="form-control" aria-label="Name" aria-describedby="basic-addon11"
											name="name" />
									</div>
									<div class="mb-3" style="    margin-top: 2rem !important;
			margin-bottom: 0 !important;">
										<label for="exampleFormControlSelect1" class="form-label">Country</label>
										<select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example"
											name="country">
											<option value="">Please Select</option>
											<option value="United States">United States</option>
											<option value="Afghanistan">Afghanistan</option>
											<option value="Albania">Albania</option>
											<option value="Algeria">Algeria</option>
											<option value="American Samoa">American Samoa</option>
											<option value="Andorra">Andorra</option>
											<option value="Angola">Angola</option>
											<option value="Anguilla">Anguilla</option>
											<option value="Antigua and Barbuda">
												Antigua and Barbuda
											</option>
											<option value="Argentina">Argentina</option>
											<option value="Armenia">Armenia</option>
											<option value="Aruba">Aruba</option>
											<option value="Australia">Australia</option>
											<option value="Austria">Austria</option>
											<option value="Azerbaijan">Azerbaijan</option>
											<option value="The Bahamas">The Bahamas</option>
											<option value="Bahrain">Bahrain</option>
											<option value="Bangladesh">Bangladesh</option>
											<option value="Barbados">Barbados</option>
											<option value="Belarus">Belarus</option>
											<option value="Belgium">Belgium</option>
											<option value="Belize">Belize</option>
											<option value="Benin">Benin</option>
											<option value="Bermuda">Bermuda</option>
											<option value="Bhutan">Bhutan</option>
											<option value="Bolivia">Bolivia</option>
											<option value="Bosnia and Herzegovina">
												Bosnia and Herzegovina
											</option>
											<option value="Botswana">Botswana</option>
											<option value="Brazil">Brazil</option>
											<option value="Brunei">Brunei</option>
											<option value="Bulgaria">Bulgaria</option>
											<option value="Burkina Faso">Burkina Faso</option>
											<option value="Burundi">Burundi</option>
											<option value="Cambodia">Cambodia</option>
											<option value="Cameroon">Cameroon</option>
											<option value="Canada">Canada</option>
											<option value="Cape Verde">Cape Verde</option>
											<option value="Cayman Islands">Cayman Islands</option>
											<option value="Central African Republic">
												Central African Republic
											</option>
											<option value="Chad">Chad</option>
											<option value="Chile">Chile</option>
											<option value="China">China</option>
											<option value="Christmas Island">
												Christmas Island
											</option>
											<option value="Cocos (Keeling) Islands">
												Cocos (Keeling) Islands
											</option>
											<option value="Colombia">Colombia</option>
											<option value="Comoros">Comoros</option>
											<option value="Congo">Congo</option>
											<option value="Cook Islands">Cook Islands</option>
											<option value="Costa Rica">Costa Rica</option>
											<option value="Cote d&#x27;Ivoire">
												Cote d&#x27;Ivoire
											</option>
											<option value="Croatia">Croatia</option>
											<option value="Cuba">Cuba</option>
											<option value="Curaçao">Curaçao</option>
											<option value="Cyprus">Cyprus</option>
											<option value="Czech Republic">Czech Republic</option>
											<option value="Democratic Republic of the Congo">
												Democratic Republic of the Congo
											</option>
											<option value="Denmark">Denmark</option>
											<option value="Djibouti">Djibouti</option>
											<option value="Dominica">Dominica</option>
											<option value="Dominican Republic">
												Dominican Republic
											</option>
											<option value="Ecuador">Ecuador</option>
											<option selected="" value="Egypt">Egypt</option>
											<option value="El Salvador">El Salvador</option>
											<option value="Equatorial Guinea">
												Equatorial Guinea
											</option>
											<option value="Eritrea">Eritrea</option>
											<option value="Estonia">Estonia</option>
											<option value="Ethiopia">Ethiopia</option>
											<option value="Falkland Islands">
												Falkland Islands
											</option>
											<option value="Faroe Islands">Faroe Islands</option>
											<option value="Fiji">Fiji</option>
											<option value="Finland">Finland</option>
											<option value="France">France</option>
											<option value="French Polynesia">
												French Polynesia
											</option>
											<option value="Gabon">Gabon</option>
											<option value="The Gambia">The Gambia</option>
											<option value="Georgia">Georgia</option>
											<option value="Germany">Germany</option>
											<option value="Ghana">Ghana</option>
											<option value="Gibraltar">Gibraltar</option>
											<option value="Greece">Greece</option>
											<option value="Greenland">Greenland</option>
											<option value="Grenada">Grenada</option>
											<option value="Guadeloupe">Guadeloupe</option>
											<option value="Guam">Guam</option>
											<option value="Guatemala">Guatemala</option>
											<option value="Guernsey">Guernsey</option>
											<option value="Guinea">Guinea</option>
											<option value="Guinea-Bissau">Guinea-Bissau</option>
											<option value="Guyana">Guyana</option>
											<option value="Haiti">Haiti</option>
											<option value="Honduras">Honduras</option>
											<option value="Hong Kong">Hong Kong</option>
											<option value="Hungary">Hungary</option>
											<option value="Iceland">Iceland</option>
											<option value="India">India</option>
											<option value="Indonesia">Indonesia</option>
											<option value="Iran">Iran</option>
											<option value="Iraq">Iraq</option>
											<option value="Ireland">Ireland</option>
											<option value="Israel">Israel</option>
											<option value="Italy">Italy</option>
											<option value="Jamaica">Jamaica</option>
											<option value="Japan">Japan</option>
											<option value="Jersey">Jersey</option>
											<option value="Jordan">Jordan</option>
											<option value="Kazakhstan">Kazakhstan</option>
											<option value="Kenya">Kenya</option>
											<option value="Kiribati">Kiribati</option>
											<option value="North Korea">North Korea</option>
											<option value="South Korea">South Korea</option>
											<option value="Kosovo">Kosovo</option>
											<option value="Kuwait">Kuwait</option>
											<option value="Kyrgyzstan">Kyrgyzstan</option>
											<option value="Laos">Laos</option>
											<option value="Latvia">Latvia</option>
											<option value="Lebanon">Lebanon</option>
											<option value="Lesotho">Lesotho</option>
											<option value="Liberia">Liberia</option>
											<option value="Libya">Libya</option>
											<option value="Liechtenstein">Liechtenstein</option>
											<option value="Lithuania">Lithuania</option>
											<option value="Luxembourg">Luxembourg</option>
											<option value="Macau">Macau</option>
											<option value="Macedonia">Macedonia</option>
											<option value="Madagascar">Madagascar</option>
											<option value="Malawi">Malawi</option>
											<option value="Malaysia">Malaysia</option>
											<option value="Maldives">Maldives</option>
											<option value="Mali">Mali</option>
											<option value="Malta">Malta</option>
											<option value="Marshall Islands">
												Marshall Islands
											</option>
											<option value="Martinique">Martinique</option>
											<option value="Mauritania">Mauritania</option>
											<option value="Mauritius">Mauritius</option>
											<option value="Mayotte">Mayotte</option>
											<option value="Mexico">Mexico</option>
											<option value="Micronesia">Micronesia</option>
											<option value="Moldova">Moldova</option>
											<option value="Monaco">Monaco</option>
											<option value="Mongolia">Mongolia</option>
											<option value="Montenegro">Montenegro</option>
											<option value="Montserrat">Montserrat</option>
											<option value="Morocco">Morocco</option>
											<option value="Mozambique">Mozambique</option>
											<option value="Myanmar">Myanmar</option>
											<option value="Nagorno-Karabakh">
												Nagorno-Karabakh
											</option>
											<option value="Namibia">Namibia</option>
											<option value="Nauru">Nauru</option>
											<option value="Nepal">Nepal</option>
											<option value="Netherlands">Netherlands</option>
											<option value="Netherlands Antilles">
												Netherlands Antilles
											</option>
											<option value="New Caledonia">New Caledonia</option>
											<option value="New Zealand">New Zealand</option>
											<option value="Nicaragua">Nicaragua</option>
											<option value="Niger">Niger</option>
											<option value="Nigeria">Nigeria</option>
											<option value="Niue">Niue</option>
											<option value="Norfolk Island">Norfolk Island</option>
											<option value="Turkish Republic of Northern Cyprus">
												Turkish Republic of Northern Cyprus
											</option>
											<option value="Northern Mariana">
												Northern Mariana
											</option>
											<option value="Norway">Norway</option>
											<option value="Oman">Oman</option>
											<option value="Pakistan">Pakistan</option>
											<option value="Palau">Palau</option>
											<option value="Palestine">Palestine</option>
											<option value="Panama">Panama</option>
											<option value="Papua New Guinea">
												Papua New Guinea
											</option>
											<option value="Paraguay">Paraguay</option>
											<option value="Peru">Peru</option>
											<option value="Philippines">Philippines</option>
											<option value="Pitcairn Islands">
												Pitcairn Islands
											</option>
											<option value="Poland">Poland</option>
											<option value="Portugal">Portugal</option>
											<option value="Puerto Rico">Puerto Rico</option>
											<option value="Qatar">Qatar</option>
											<option value="Republic of the Congo">
												Republic of the Congo
											</option>
											<option value="Romania">Romania</option>
											<option value="Russia">Russia</option>
											<option value="Rwanda">Rwanda</option>
											<option value="Saint Barthelemy">
												Saint Barthelemy
											</option>
											<option value="Saint Helena">Saint Helena</option>
											<option value="Saint Kitts and Nevis">
												Saint Kitts and Nevis
											</option>
											<option value="Saint Lucia">Saint Lucia</option>
											<option value="Saint Martin">Saint Martin</option>
											<option value="Saint Pierre and Miquelon">
												Saint Pierre and Miquelon
											</option>
											<option value="Saint Vincent and the Grenadines">
												Saint Vincent and the Grenadines
											</option>
											<option value="Samoa">Samoa</option>
											<option value="San Marino">San Marino</option>
											<option value="Sao Tome and Principe">
												Sao Tome and Principe
											</option>
											<option value="Saudi Arabia">Saudi Arabia</option>
											<option value="Senegal">Senegal</option>
											<option value="Serbia">Serbia</option>
											<option value="Seychelles">Seychelles</option>
											<option value="Sierra Leone">Sierra Leone</option>
											<option value="Singapore">Singapore</option>
											<option value="Slovakia">Slovakia</option>
											<option value="Slovenia">Slovenia</option>
											<option value="Solomon Islands">Solomon Islands</option>
											<option value="Somalia">Somalia</option>
											<option value="Somaliland">Somaliland</option>
											<option value="South Africa">South Africa</option>
											<option value="South Ossetia">South Ossetia</option>
											<option value="South Sudan">South Sudan</option>
											<option value="Spain">Spain</option>
											<option value="Sri Lanka">Sri Lanka</option>
											<option value="Sudan">Sudan</option>
											<option value="Suriname">Suriname</option>
											<option value="Svalbard">Svalbard</option>
											<option value="eSwatini">eSwatini</option>
											<option value="Sweden">Sweden</option>
											<option value="Switzerland">Switzerland</option>
											<option value="Syria">Syria</option>
											<option value="Taiwan">Taiwan</option>
											<option value="Tajikistan">Tajikistan</option>
											<option value="Tanzania">Tanzania</option>
											<option value="Thailand">Thailand</option>
											<option value="Timor-Leste">Timor-Leste</option>
											<option value="Togo">Togo</option>
											<option value="Tokelau">Tokelau</option>
											<option value="Tonga">Tonga</option>
											<option value="Transnistria Pridnestrovie">
												Transnistria Pridnestrovie
											</option>
											<option value="Trinidad and Tobago">
												Trinidad and Tobago
											</option>
											<option value="Tristan da Cunha">
												Tristan da Cunha
											</option>
											<option value="Tunisia">Tunisia</option>
											<option value="Turkey">Turkey</option>
											<option value="Turkmenistan">Turkmenistan</option>
											<option value="Turks and Caicos Islands">
												Turks and Caicos Islands
											</option>
											<option value="Tuvalu">Tuvalu</option>
											<option value="Uganda">Uganda</option>
											<option value="Ukraine">Ukraine</option>
											<option value="United Arab Emirates">
												United Arab Emirates
											</option>
											<option value="United Kingdom">United Kingdom</option>
											<option value="Uruguay">Uruguay</option>
											<option value="Uzbekistan">Uzbekistan</option>
											<option value="Vanuatu">Vanuatu</option>
											<option value="Vatican City">Vatican City</option>
											<option value="Venezuela">Venezuela</option>
											<option value="Vietnam">Vietnam</option>
											<option value="British Virgin Islands">
												British Virgin Islands
											</option>
											<option value="Isle of Man">Isle of Man</option>
											<option value="US Virgin Islands">
												US Virgin Islands
											</option>
											<option value="Wallis and Futuna">
												Wallis and Futuna
											</option>
											<option value="Western Sahara">Western Sahara</option>
											<option value="Yemen">Yemen</option>
											<option value="Zambia">Zambia</option>
											<option value="Zimbabwe">Zimbabwe</option>
											<option value="other">Other</option>
										</select>


										</select>
									</div>

									<div class="input-group" style="    margin-top: 2rem !important;
			margin-bottom: 0 !important;">
										<span class="input-group-text" id="basic-addon11">Address</span>
										<input type="text" class="form-control" aria-label="Quantity" aria-describedby="basic-addon11"
											name="address" />
									</div>
									<div class="input-group" style="    margin-top: 2rem !important;
			margin-bottom: 0 !important;">
										<span class="input-group-text" id="basic-addon11">Email</span>
										<input type="email" placeholder="example@example.com" class="form-control" aria-label="Quantity"
											aria-describedby="basic-addon11" required name="email" />
									</div>
									<div class="input-group" style="    margin-top: 2rem !important;
			margin-bottom: 0 !important;">
										<span class="input-group-text" id="basic-addon11">Phone Number</span>
										<input type="text" class="form-control" aria-label="Quantity" aria-describedby="basic-addon11"
											name="phonenumber" />
									</div>

									<div class="mb-3" style="    margin-top: 2rem !important;
			margin-bottom: 0 !important;">
										<label for="exampleFormControlSelect1" class="form-label">Membership Type</label>
										<select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example"
											name="mtype">
											<option value="">Please Select</option>
											<option value="United States">Standard ($100)</option>
											<option value="Afghanistan">Premeium ($200)</option>
											<option value="Albania">Ultimate ($300)</option>
										</select>
									</div>

									<button type="submit" class="btn btn-primary" style="    margin-top: 2rem !important;
		margin-bottom: 0 !important;">Submit</button>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</form>
	</section>

	<!-----------------------------------------------END CODE----------------------------------------->
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
							Discover a world of education and enrichment through virtual tours, online exhibits, educational
							resources, and event listings.
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
								<input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''"
									onblur="this.placeholder = 'Enter Email '" required="" type="email">
								<button class="click-btn btn btn-default"><span class="lnr lnr-arrow-right"></span></button>
								<div style="position: absolute; left: -5000px;">
									<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
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

	<script src="js/js4/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
		integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
		crossorigin="anonymous"></script>
	<script src="js/js4/vendor/bootstrap.min.js"></script>
	<script type="text/javascript"
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
	<script src="js/js4/easing.min.js"></script>
	<script src="js/js4/hoverIntent.js"></script>
	<script src="js/js4/superfish.min.js"></script>
	<script src="js/js4/jquery.ajaxchimp.min.js"></script>
	<script src="js/js4/jquery.magnific-popup.min.js"></script>
	<script src="js/js4/owl.carousel.min.js"></script>
	<script src="js/js4/imagesloaded.pkgd.min.js"></script>
	<script src="js/js4/justified.min.js"></script>
	<script src="js/js4/jquery.sticky.js"></script>
	<script src="js/js4/jquery.nice-select.min.js"></script>
	<script src="js/js4/parallax.min.js"></script>
	<script src="js/js4/mail-script.js"></script>
	<script src="js/js4/main.js"></script>
</body>

</html>