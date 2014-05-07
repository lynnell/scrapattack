<!DOCTYPE html>
<?php
session_start();
$uid =  "1";        # $_SESSION['uid'];
$_SESSION['fid']  =  "152253e6-ccf8-11e3-b2d7-00ffd0"; 

include($_SERVER['DOCUMENT_ROOT']."/scrapattack/include/config.php"); //including config.php in our file
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
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/bootstrap-responsive.css" rel="stylesheet">
	<link href="../css/style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Boogaloo">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Economica:700,400italic">
	<!-- end: CSS -->

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
  
  <script>
  $(document).ready(function() {
    $("#datepicker").datepicker();
  });
  
  
  function loadJournal()
  {
  alert("test");
  }
  
  
  
  </script>
		
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
						<a class="brand" href="index.html"><img src="../img/logo.png"></a>
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
			
	
			<!-- start: Contact Form -->
					<div class="span3">
							<div class="title"><h4>Edit Profile</h4></div>
							<!-- start: Contact Form -->
							<div id="contact-form">
									<fieldset>
										<div class="clearfix">
										<label for="age"><span>Profile Name</span></label>
											<div class="input">
												<input required id="firstname" tabindex="" size="25" name="firstname" type="text" value="" class="input-xlarge">
												<input required id="lastname" tabindex="" size="25" name="lastname" type="text" value="" class="input-xlarge">
											</div>
										</div>
									
										<div class="clearfix">
											<label for="message"><span>Address</span></label>
											<div class="input">
												<input required id="address1" tabindex="" size="30" name="address1" type="text" value="" class="input-xlarge">
												<input required id="address2" tabindex="" size="30" name="address2" type="text" value="" class="input-xlarge">
												<input required id="city" tabindex="" size="30" name="city" type="text" value="" class="input-xlarge">
												<input required id="state" tabindex="" size="2" name="state" type="text" value="" class="input-xlarge">
												<input required id="zip" tabindex="" size="10" name="zip" type="text" value="" class="input-xlarge">
																						
											</div>
										</div>

										<div class="actions">
					<button onclick="saveProfile()"  type="button " class="btn btn-succes btn-large">Save Profile</button>
					<button tabindex="3" type="button" class="btn btn-succes btn-large">Cancel</button>
										</div>
									</fieldset>
							</div>
							<!-- end: Contact Form -->
						</div>
			<!-- end: Contact Form -->



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

			<!-- start: Social Sites -->
			<div class="span7">
				<div class="title"><h4>Follow US!</h4></div>
				<ul class="social-bookmarks">
					<li class="aim"><a href="#">aim</a></li>
					<li class="apple"><a href="#">apple</a></li>
					<li class="behance"><a href="#">behance</a></li>
					<li class="blogger"><a href="#">blogger</a></li>
					<li class="cargo"><a href="#">cargo</a></li>
					<li class="delicious"><a href="#">delicious</a></li>
					<li class="deviantart"><a href="#">deviantart</a></li>
					<li class="digg"><a href="#">digg</a></li>
					<li class="dopplr"><a href="#">dopplr</a></li>
					<li class="dribbble"><a href="#">dribbble</a></li>
					<li class="ember"><a href="#">ember</a></li>
					<li class="evernote"><a href="#">evernote</a></li>
					<li class="facebook"><a href="https://www.facebook.com/brankic1979themes">facebook</a></li>
					<li class="flickr"><a href="http://www.flickr.com/photos/brankic1979/">flickr</a></li>
					<li class="forrst"><a href="#">forrst</a></li>
					<li class="github"><a href="#">github</a></li>
					<li class="google"><a href="#">google</a></li>
					<li class="googleplus"><a href="#">googleplus</a></li>
					<li class="gowalla"><a href="#">gowalla</a></li>
					<li class="grooveshark"><a href="#">grooveshark</a></li>
					<li class="html5"><a href="#">html5</a></li>
					<li class="icloud"><a href="#">icloud</a></li>
					<li class="lastfm"><a href="#">lastfm</a></li>
					<li class="linkedin"><a href="#">linkedin</a></li>
					<li class="metacafe"><a href="#">metacafe</a></li>
					<li class="mixx"><a href="#">mixx</a></li>
					<li class="myspace"><a href="#">myspace</a></li>
					<li class="netvibes"><a href="#">netvibes</a></li>
					<li class="newsvine"><a href="#">newsvine</a></li>
					<li class="orkut"><a href="#">orkut</a></li>
					<li class="paypal"><a href="#">paypal</a></li>
					<li class="picasa"><a href="#">picasa</a></li>
					<li class="pinterest"><a href="#">pinterest</a></li>
					<li class="plurk"><a href="#">plurk</a></li>
					<li class="posterous"><a href="#">posterous</a></li>
					<li class="reddit"><a href="#">reddit</a></li>
					<li class="rss"><a href="#">rss</a></li>
					<li class="skype"><a href="#">skype</a></li>
					<li class="stumbleupon"><a href="#">stumbleupon</a></li>
					<li class="technorati"><a href="#">technorati</a></li>
					<li class="tumblr"><a href="#">tumblr</a></li>
					<li class="twitter"><a href="#">twitter</a></li>
					<li class="vimeo"><a href="#">vimeo</a></li>
					<li class="wordpress"><a href="#">wordpress</a></li>
					<li class="yahoo"><a href="#">yahoo</a></li>
					<li class="yelp"><a href="#">yelp</a></li>
					<li class="youtube"><a href="#">youtube</a></li>
					<li class="zerply"><a href="#">zerply</a></li>
					<li class="zootool"><a href="#">zootool</a></li>
				</ul>
			</div>
			<!-- end: Social Sites -->

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

									<li><a href="about.html">About</a></li>

									<!-- <li><a href="services.html">Services</a></li>

									<li><a href="pricing.html">Pricing</a></li> -->

									<li><a href="contact.html">Contact</a></li>

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
<script src="../js/jquery-1.8.2.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/flexslider.js"></script>
<script src="../js/carousel.js"></script>
<script def src="../js/custom.js"></script>
<!-- end: Java Script -->

</body>
</html>