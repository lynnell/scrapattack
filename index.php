<?php
session_start();
if (!isset($_SESSION['active']) && empty($_SESSION['active'])) {
	$_SESSION['active'] = false;
	$_SESSION['fid'] = null;
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>ScrapAttack - Precious Memories... Forever</title>
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
							
							</div>
          				</div>
        			</div>
      			</div>
    		</div>
			<!--end: Navigation-->

		</div>
		<!--end: Container-->

		<!--start: Container -->
    	<div class="container">

			<!-- start: Flexslider -->
			<div class="slider">

				<div class="flexslider">
					<ul class="slides">

						<li>
							<img src="img/slider/blankphotos.jpg" alt="" />
							<div class="slide-caption n hidden-phone">
								<h3>This is a caption</h3>
								<p>
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
								</p>
							</div>
						</li>

						<li>
							<img src="img/slider/motherdaughter.jpg" alt="" />
							<div class="slide-caption hidden-phone">
								<h3>This is a caption</h3>
								<p>
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
								</p>
							</div>
						</li>

						<li>
							<img src="img/slider/family.jpg" alt="" />
						</li>

					</ul>
				</div>

			</div>
			<!-- end: Flexslider -->

      		<!-- start: Hero Unit - Main hero unit for a primary marketing message or call to action -->
      		<div class="hero-unit">
        		<p>
					Precious memories... forever! &nbsp;&nbsp;ScrapAttack helps you capture the memories of your childs life in a private journal that combines scrapbooking with words, pictures, videos, and many other fun ways to create a record of your growth together as a family.
				</p>
        		<p><a class="btn btn-success btn-large" href="about.php">Learn more &raquo;</a></p>
      		</div>
			<!-- end: Hero Unit -->

      		<!-- start: Row -->
      		<div class="row">

        		<div class="span4">
          			<div class="icons-box">
						<i class="ico-ok circle big"></i>
						<div class="title"><h3>Memories</h3></div>
						<p>
							Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
						</p>
						<div class="clear"></div>
					</div>
        		</div>

        		<div class="span4">
          			<div class="icons-box">
						<i class="ico-ipad circle big"></i>
						<div class="title"><h3>Mobile</h3></div>
						<p>
							Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
						</p>
						<div class="clear"></div>
					</div>
        		</div>

        		<div class="span4">
          			<div class="icons-box">
						<i class="ico-heart circle big"></i>
						<div class="title"><h3>Fun to Use</h3></div>
						<p>
							Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
						</p>
						<div class="clear"></div>
					</div>
        		</div>

      		</div>
			<!-- end: Row -->

			<hr>


		</div>
		<!--end: Container-->

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
								<a href="index.html"><img src="img/logo-footer-menu.png" alt="logo" /></a>
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

				<p>
					&copy; 2013, creativeLabs. <a href="http://bootstrapmaster.com" alt="Bootstrap Themes">Bootstrap Themes</a> Designed by BootstrapMaster in Poland <img src="img/poland.png" alt="Poland" style="margin-top:-4px">
				</p>

		</div>
		<!-- end: Container  -->

	</div>
	<!-- end: Copyright -->

<!-- start: Java Script -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery-1.8.2.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/flexslider.js"></script>
<script src="js/carousel.js"></script>
<script def src="js/custom.js"></script>
<!-- end: Java Script -->

</body>
</html>
