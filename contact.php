<!DOCTYPE html>
<?php
session_start();
?>

<html lang="en">
<head>

	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>ScrapAttack - Contact</title>
	<meta name="description" content="FreeME:Bootstrap Theme"/>
	<meta name="keywords" content="Template, Theme, web, html5, css3" />
	<meta name="author" content="Łukasz Holeczek from creativeLabs"/>
	<!-- end: Meta -->

	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- end: Mobile Specific -->

	<!-- start: Facebook Open Graph -->
	<meta property="og:title" content=""/>
	<meta property="og:description" content=""/>
	<meta property="og:type" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:image" content=""/>
	<!-- end: Facebook Open Graph -->

    <!-- start: CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Boogaloo">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Economica:700,400italic">
	<!-- end: CSS -->

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>

	<!--start: Wrapper -->
	<div id="wrapper">

		<!--start: Container -->
		<div class="container">


			<!--start: Header -->
			<header>

				<!--start: Row -->
				<div class="row">

					<!--start: Logo -->
					<div class="logo span4">
						<a class="brand" href="index.html"><img src="img/logo.png"></a>
					</div>
					<!--end: Logo -->

					<!--start: Social Links -->
					<div class="span8">
						<div id="social-links">
							<ul class="social-small-grid">
								<li>
									<div class="social-small-item">
										<div class="social-small-info-wrap">
											<div class="social-small-info">
												<div class="social-small-info-front social-small-twitter">
													<a href="http://twitter.com"></a>
												</div>
												<div class="social-small-info-back social-small-twitter-hover">
													<a href="http://twitter.com"></a>
												</div>
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="social-small-item">
										<div class="social-small-info-wrap">
											<div class="social-small-info">
												<div class="social-small-info-front social-small-facebook">
													<a href="http://facebook.com"></a>
												</div>
												<div class="social-small-info-back social-small-facebook-hover">
													<a href="http://facebook.com"></a>
												</div>
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="social-small-item">
										<div class="social-small-info-wrap">
											<div class="social-small-info">
												<div class="social-small-info-front social-small-dribbble">
													<a href="http://dribbble.com"></a>
												</div>
												<div class="social-small-info-back social-small-dribbble-hover">
													<a href="http://dribbble.com"></a>
												</div>
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="social-small-item">
										<div class="social-small-info-wrap">
											<div class="social-small-info">
												<div class="social-small-info-front social-small-flickr">
													<a href="http://flickr.com"></a>
												</div>
												<div class="social-small-info-back social-small-flickr-hover">
													<a href="http://flickr.com"></a>
												</div>
											</div>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<!--end: Social Links -->

				</div>
				<!--end: Row -->

			</header>
			<!--end: Header-->

			<!--start: Navigation-->
<?php
include($_SERVER['DOCUMENT_ROOT']."/scrapattack/session/menu_child.php");
?>
			<!--end: Navigation-->

		</div>
		<!--end: Container-->

		<!-- start: Container -->
		<div class="container">
		<div class="title"><h4>ScrapAttack Headquarters</h4></div>
		Select a Headquarters<br> 
		 <select id="headquarters" class="headquarters">    
		 <option value="OShaughnessy Science Hall, University of St Thomas, St Paul, MN, United States" selected="selected">Saint Paul, MN - USA</option>    
		 <option value="Five Islands Village, Saint John's, Antigua and Barbuda">Saint John's Island</option>  
		 <option value="Oudebildtdijk 1200, 9075 NR Westhoek, Nederland">Westhoek - Nederland</option>
		 <option value="2801 Coconut Avenue,Honolulu, HI 96815">Honolulu, HI - USA</option>
		 </select>
			<!-- start: Map -->
			<div>

				<!-- starts: Google Maps -->
				<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
				<div id="googlemaps" class="google-map google-map-full" style="height:350px; margin-bottom: 20px;"></div>
				
				<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
				<script src="js/jquery.gmap.min.js"></script>
				
				
				
				
				<script type="text/javascript">
				
				$('#headquarters').change(function() {
						$('#googlemaps').gMap({
							maptype: 'ROADMAP',
							scrollwheel: true,
							zoom: 15,
							markers: [
								{
									address: $('#headquarters').val(), // Your Adress Here
									html: '',
									popup: false,
								}

							],

						});
				
				});
				
				
				
				
				

				</script>
				
				<!-- end: Google Maps -->
			</div>

			<!-- end: Map -->

		</div>
		<!-- end: Container  -->

		<!-- start: Container -->
		<div class="container">

			<!-- start: Contact Form -->
			<div class="span4">
				<div class="title"><h4>Contact Form</h4></div>

				<!-- start: Contact Form -->
				<div id="contact-form">

					<form method="post" action="">

						<fieldset>
							<div class="clearfix">
								<label for="name"><span>Name:</span></label>
								<div class="input">
									<input tabindex="1" size="18" id="name" name="name" type="text" value="">
								</div>
							</div>

							<div class="clearfix">
								<label for="email"><span>Email:</span></label>
								<div class="input">
									<input tabindex="2" size="25" id="email" name="email" type="text" value="" class="input-xlarge">
								</div>
							</div>

							<div class="clearfix">
								<label for="message"><span>Message:</span></label>
								<div class="input">
									<textarea tabindex="3" class="input-xlarge" id="message" name="body" rows="7"></textarea>
								</div>
							</div>

							<div class="actions">
								<button tabindex="3" type="submit" class="btn btn-succes btn-large">Send message</button>
							</div>
						</fieldset>

					</form>

				</div>
				<!-- end: Contact Form -->

			</div>
			<!-- end: Contact Form -->

			

		</div>
		<!-- end: Container -->

		<!--start: Container -->
    	<div class="container">

      		<!-- start: Footer Menu -->
			<div id="footer-menu" class="hidden-tablet hidden-phone">

				<!-- start: Container -->
				<div class="container">

					<!-- start: Row -->
					<div class="row">

						<!-- start: Footer Menu Logo -->
						<div class="span1">
							<div id="footer-menu-logo">
								<a href="#"><img src="img/logo-footer-menu.png" alt="logo" /></a>
							</div>
						</div>
						<!-- end: Footer Menu Logo -->

						<!-- start: Footer Menu Links-->
						<div class="span10">

							<div id="footer-menu-links">

								<ul id="footer-nav">

									<li><a href="index.html">Home</a></li>

									<li><a href="about.php">About</a></li>

									<!-- <li><a href="services.html">Services</a></li>

									<li><a href="pricing.html">Pricing</a></li> -->

									<li><a href="contact.php">Contact</a></li>

								</ul>

							</div>

						</div>
						<!-- end: Footer Menu Links-->

						<!-- start: Footer Menu Back To Top -->
						<div class="span1">

							<div id="footer-menu-back-to-top">
								<a href="#"></a>
							</div>

						</div>
						<!-- end: Footer Menu Back To Top -->

					</div>
					<!-- end: Row -->

				</div>
				<!-- end: Container  -->

			</div>
			<!-- end: Footer Menu -->



		</div>
		<!-- end: Container  -->

	</div>
	<!-- end: Wrapper  -->


	<!-- start: Copyright -->
	<div id="copyright">

		<!-- start: Container -->
		<div class="container">

			<div class="span12">
				<p>
					&copy; 2013, creativeLabs. <a href="http://bootstrapmaster.com" alt="Bootstrap Themes">Bootstrap Themes</a> Designed by BootstrapMaster in Poland <img src="img/poland.png" alt="Poland" style="margin-top:-4px">
				</p>
			</div>

		</div>
		<!-- end: Container  -->

	</div>
	<!-- end: Copyright -->

<!-- start: Java Script -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/bootstrap.js"></script>
<script src="js/flexslider.js"></script>
<script src="js/carousel.js"></script>
<script def src="js/custom.js"></script>
<!-- end: Java Script -->

</body>
</html>