<!DOCTYPE html>
<?php
session_start();
$uid = $_SESSION['uid'];
$fid = $_GET['fid'];
$jid = '1'; #$_GET['jid'];


include($_SERVER['DOCUMENT_ROOT']."/scrapattack/include/config.php"); //including config.php in our file
include($_SERVER['DOCUMENT_ROOT']."/scrapattack/include/child_db.php"); 
include($_SERVER['DOCUMENT_ROOT']."/scrapattack/include/journal_db.php"); 
include($_SERVER['DOCUMENT_ROOT']."/scrapattack/include/milestone_db.php"); 


if (isset($_POST) && !empty($_POST) && !empty($_GET['fid'])) {	
// Now checking user name and password is entered or not.
			$_SESSION['fid'] = $_GET['fid'];
			$firstname= mysql_real_escape_string($_POST['firstname']);
			$middlename = mysql_real_escape_string($_POST['middlename']);
			$lastname= mysql_real_escape_string($_POST['lastname']);
				if (empty($_POST['birthdate']))
				{
				$birthdate = '00/00/0000';
				}
				else
				{
				$birthdate= mysql_real_escape_string($_POST['birthdate']);
				}	
			
			updateChild($_GET['fid'], $firstname, $middlename, $lastname, $birthdate);
}	 
elseif (!empty($_GET['fid']) )
{

			$row = getChild($_GET['fid']); 
			$firstname = $row[0];
			$middlename  = $row[1]; 
			$lastname  = $row[2];
			$birthdate  = $row[3];
			$profile_image = $row[4];
			$_SESSION['fid'] = $fid;

}
else 
{

		$firstname= "";
		$middlename = "";
		$lastname= "";
		$birthdate = "";
	} 		

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


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>        
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>        

 <!-- this has to be custom for each tab MUST LOAD AFTER JQUERY -->
<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>	

<script>
 function saveUser()
{
 var firstName = document.getElementById("firstname").value;
 var middleName = document.getElementById("middlename").value;
 var lastName = document.getElementById("lastname").value;
 var fid = document.getElementById("fid").value;
   
if (window.XMLHttpRequest)
   {// code for IE7+, Firefox, Chrome, Opera, Safari
   xmlhttp=new XMLHttpRequest();
   }
 else
   {// code for IE6, IE5
   xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
   }
 xmlhttp.onreadystatechange=function()
   {
   if (xmlhttp.readyState==4 && xmlhttp.status==200)
     {
     //document.getElementById("UserInformation").innerHTML=xmlhttp.responseText;
     }
	}
	xmlhttp.open("GET","../include/saveChild.php?firstName="+firstName+"&middleName="+middleName+"&lastName="+lastName+"&fid="+fid,true);
	xmlhttp.send();
 }

function addList()
{

	// Create an Option object       
    var opt = document.createElement("milestoneDropdown");        

    // Assign text and value to Option object
    opt.text = "Favorite Toy";
    opt.value = "Fav Toy";

    // Add an Option object to Drop Down List Box
    document.getElementById("milestoneDropdown").options.add(opt);

}

 </script>
     <!-- start: CSS -->
  	<link href="../css/liststyle.css" rel="stylesheet" type="text/css" />
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/bootstrap-responsive.css" rel="stylesheet">
	<link href="../css/style.css" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Boogaloo">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Economica:700,400italic">
	<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" />
    <link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css"> 


      
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>        
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>        
<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" />         
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
 <!-- this has to be custom for each tab MUST LOAD AFTER JQUERY -->
<script type="text/javascript" src="../js/journal.js"></script>  	
<script type="text/javascript" src="../js/milestone.js"></script>  	


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
include("../session/menu_child.php");
?>
			<!--end: Navigation-->
			
		</div>
		<!--end: Container-->
		
		
					<!-- start: Tabs -->
						<div class="title"><h3><?php echo $firstname ." ". $middlename ?></h3></div>

						<ul class="tabs-nav">
							<li class="active"><a href="#tab1"><i class="mini-ico-glass"></i> Profile</a></li>
							<li><a href="#tab2"><i class="mini-ico-list"></i> Milestones</a></li>							
							<li><a href="#tab3"><i class="mini-ico-list"></i> Journals</a></li>
							<li><a href="#tab4"><i class="mini-ico-pencil"></i> Photos</a></li>
						</ul>

						<div class="tabs-container">
						<!-- START:  EDIT PROFILE -->
			<div class="tab-content" id="tab1">
							<!-- start: Contact Form -->
				<div class="span3">
<?php 

echo '<img src ="data:image/jpeg;base64,'.base64_encode($profile_image).'"/>';
 ?>

				</div>
			<div class="span3">

					<!-- <form action="<?php $_SERVER['PHP_SELF']?>" method="post" > -->
	<fieldset>
				<div class="clearfix">
					<label for="name"><span>Name:</span></label>
					<div class="input">
						<input tabindex="1" size="18" id="firstname" name="firstname" type="text" value="<?php echo $firstname; ?>">
						<input tabindex="1" size="18" id="middlename" name="middlename" type="text" value="<?php echo $middlename; ?>">
						<input tabindex="1" size="18" id="lastname" name="lastname" type="text" value="<?php echo $lastname; ?>">
					</div>
				</div>
				<div class="clearfix">
					<label for="age"><span>Age</span></label>
					<div class="input">
						<input id="datepicker" tabindex="2" size="25" name="birthdate" type="text" value="<?php echo $birthdate; ?>" class="input-xlarge">
					</div>
				</div>
				<div class="clearfix">
					<label for="note"><span>Note:</span></label>
					<div class="input">
						<textarea tabindex="3" class="input-xlarge" id="note" name="body" rows="7"></textarea>
					</div>
				</div>
				<div class="actions">
					<button onclick="saveUser()"  type="button " class="btn btn-succes btn-large">Save Profile</button>
					<button tabindex="3" type="submit" class="btn btn-succes btn-large">Cancel</button>
				</div>
	</fieldset>
					<!-- </form> -->
				</div>
				<!-- end: Contact Form -->			
			</div>				
			
<div class="tab-content" id="tab2">
		
	<div class="title" ><h3>Milestone Moments For <?php echo $firstname ." ". $middlename ?></h3></div>
	<div class="span4">	
	<div class="form_style">
				<input id="milestone_value"  size="20" name="milestone_value"  type="text" value=""><br>
								
				<?php
				$queryLookup2 = "SELECT milestone_cd, milestone_desc from milestoneLookup where milestoneType = 'First Years';";
				$resultLookup2 = mysql_query($queryLookup2);
				echo '<select name="milestoneDropdown" id="milestoneDropdown" >';
				while($res2=mysql_fetch_array($resultLookup2))
				{
					echo '<option value="'.$res2["milestone_cd"].'">'.$res2["milestone_desc"].'</option>';													
				}
				echo '</select>';
				
				?><br>
				
				3. Click "Add Milestone".<BR> 					
				<button id="MilestoneSubmit">Add Milestone</button>
	</div>								
	</div>	

<div class="span5">
								<ul style="height: 400px; overflow-y: scroll;" id="milestoneresponds">
												<?php
												//$result = getMilestoneList($fid) ;
												$query = "SELECT * from milestone;";
												$result = mysql_query($query);

												while($row=mysql_fetch_array($result))
												{  
												  $queryLookup = "SELECT milestone_cd, milestone_desc from milestoneLookup where milestone_cd = '".$row["milestone_cd"]."';";
												  $resultLookup = mysql_query($queryLookup);
												  $res=mysql_fetch_array($resultLookup);
												  //echo 'Hey - milestone_desc is: '.$res["milestone_desc"];
												  echo '<li id="item_'.$row["milestoneid"].'">';
												  echo '<div class="del_wrapper"><a href="#" class="mdel_button" id="del-'.$row["milestoneid"].'">';
											
												echo '<img src="../img/icon_del.gif" border="0" />';
												  echo '</a></div>';
												  echo  '<p>'.$res["milestone_desc"].': <br><p>'. $row["milestone_value"].'</li>';
												}
												?>
											</ul>
</div>

</div> <!-- end tab 2 -->
			<div class="tab-content" id="tab3">
					<div class="span4">		
					<div class="title" ><h3>Add Thought</h3></div>					
							<div class="form_style">
								Date:<p><input id="journal_date"  size="20" name="journal_date"  type="text" value=""><br>
								Journal Title:<p><input  id="journal_title" size="20" name="journal_title" type="text" value=""><br>
								Journal Entry:<p><textarea name="journal_text" id="journal_text" cols="45" rows="5"></textarea><br>
								<button id="JournalSubmit">Add Journal</button>
							</div>
					</div>	
					<div class="span5">	
					<div class="title" ><h3>Loving Thoughts For <?php echo $firstname ." ". $middlename ?></h3></div>

								<ul style="height: 400px; overflow-y: scroll;" id="journalresponds">
												<?php
												$Result = mysql_query("SELECT journalid, journal_note,journal_title FROM journal");
												while($row = mysql_fetch_array($Result))
												{
												echo '<li id="item_'.$row["journalid"].'">';
												echo '<div class="del_wrapper"><a href="#" class="del_button" id="del-'.$row["journalid"].'">';
												echo '<img src="../img/icon_del.gif" border="0" />';
												echo '</a></div>';
												echo '<div class="edit_wrapper"><a href="#" class="edit_button" id="edit-'.$row["journalid"].'">';
												echo '<img src="../img/icon_edit.gif" border="0" />';
												echo '</a></div>';												
												echo '1-28-2014<br>'; 
												echo  '<p>'.$row["journal_title"].'<br><p>'. $row["journal_note"].'</li>';
												}
												?>
								</ul>
													<hr>
													<br>
				</div>
	
						
			</div> <!-- end tab 3 -->

				
				<div class="tab-content" id="tab4">
							<div class="title" ><h3>Fun Photos For <?php echo $firstname ." ". $middlename ?></h3></div>

								<ul style="height: 400px; overflow-y: scroll;" id="responds">
												<?php
												//MySQL query - make this a function
												$Result = mysql_query("SELECT journalid, journal_note,journal_title FROM journal");

												//get all records from add_delete_record table
												while($row = mysql_fetch_array($Result))
												{
												  echo '<li id="item_'.$row["journalid"].'">';
												  echo '<div class="del_wrapper"><a href="#" class="del_button" id="del-'.$row["journalid"].'">';
												  echo '<img src="../img/icon_del.gif" border="0" />';
												  echo '</a></div>';
												  echo '1-28-2014<br>'; 
												  echo  '<p>'.$row["journal_title"].'<br><p>'. $row["journal_note"].'</li>';
												}

												//close db connection
												mysql_close($link);
												?>
								</ul>
													<div class="form_style">
												
													
													<button id="PhotoSubmit">Add Photo</button>
													</div>
				</div> <!-- end tab 4 -->
			</div>
						<!-- end: Tabs -->
		
		
	<!-- start: Container -->

		<div class="span4">
					TEST POINT - fid: <input  id="fid" size="20" name="fid" type="text" value="<?php echo $fid; ?>"><br>
					TEST POINT - uid: <input  id="uid" size="20" name="uid" type="text" value="<?php echo $uid; ?>">
	</div>
	

	<!-- end: Map -->

		</div>
		<!-- end: Container  -->


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