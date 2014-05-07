<?php
include($_SERVER['DOCUMENT_ROOT']."/scrapattack/include/config.php"); //including config.php in our file
if($_SESSION['active']){
 $uid =  $_SESSION['uid'];
} 
 
?>
	<link href="../css/bootstrap.css" rel="stylesheet">
	<link href="../css/bootstrap-responsive.css" rel="stylesheet">
	<link href="../css/style.css" rel="stylesheet">

<div class="navbar navbar-inverse">
		<div class="navbar-inner">
				<div class="container">
	          				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
	            				<span class="icon-bar"></span>
	            				<span class="icon-bar"></span>
	            				<span class="icon-bar"></span>
	          				</a>
							<div class="nav-collapse collapse">
            				<ul class="nav">
              					<li class="active"><a href="<?php $_SERVER['DOCUMENT_ROOT']?>/scrapattack/index.php">Home</a></li>
              					<li><a href="<?php $_SERVER['DOCUMENT_ROOT']?>/scrapattack/about.php">About</a></li>
              					<li class="dropdown">
                					<a href="#" class="dropdown-toggle" data-toggle="dropdown">My Family<b class="caret"></b></a>
                					<ul class="dropdown-menu">
                  						<li><a href="<?php $_SERVER['DOCUMENT_ROOT']?>/scrapattack/family/editProfile.php ">Edit Profile</a></li>
                 						<li class="divider"></li> 						
										<li><a href="<?php $_SERVER['DOCUMENT_ROOT']?>/scrapattack/family/addChild.php ">Add Family Member</a></li>
                  						<li class="divider"></li>
                  						<li class="nav-header">Family</li>
                  						<li><a href="#">My Family</a></li>
																	<?php
																	
																	if($_SESSION['active'])
																	{
																			$query = "select uid, username, email, familymembers.firstname ffn, familymembers.middlename ffm, familymembers.id fid from users, familymembers 
																			where users.uid = familymembers.parentid and
																			users.uid = '".$uid."';";
																			$result = mysql_query($query); 
																			#echo mysql_error();
																			while($res=mysql_fetch_array($result))
																			{ 
																		?>
																			<li><a href ="/scrapattack/family/familymember.php?fid=<?php echo $res['fid']; ?> "><?php echo $res['ffn'] . ' ' . $res['ffm']  ;  ?></a></li>
																			<?php 
																			} 
																	}
																	?>
               						</ul>
												</li>
              					<li><a href="<?php $_SERVER['DOCUMENT_ROOT']?>/scrapattack/contact.php">Contact</a></li>
            				</ul>
							</div>
						<div>						
								<?php
								
								if($_SESSION['active']){
								?>
									<input onclick=window.location.href="<?php echo $_SESSION['BaseURL'] ."./session/logout.php"?>" text="Logout" value="Logout" type="button" />
								<?php
								}
								else
								{
								?>
									<form action="session/login.php" method="post">
										<div class="nav-collapse collapse" valign="top">
												<div style="float: right;">&nbsp;&nbsp;<input value="Log In" tabindex="3" type="submit"  /></div>
											<div style="float: right;>
												<div style="float: left;">Password: &nbsp;<input class="inputtext" type="password" name="password" id="pass" value="" tabindex="2" />&nbsp;&nbsp;</div>
												<div style="float: right;">Username: &nbsp;<input class="inputtext" type="text" name="username" id="email" value="" tabindex="1" />&nbsp;&nbsp;</div>
											</div>
										</div>
									</form>
									<!-- <form action="session/login.php" method="post">
										<div class="nav-collapse collapse" valign="top">
											<table cellspacing="0" align="right">
											<tr>
											<td class="logintext"><label class="logintext">Email or Phone: &nbsp;</label></td>
											<td><input type="text" class="inputtext" name="username" id="email" value="" tabindex="1" /></td>
											<td class="logintext"><label class="logintext">&nbsp;&nbsp;&nbsp;&nbsp;Password: &nbsp;</label></td>
											<td><input type="password" class="inputtext" name="password" id="pass" tabindex="2" /></td>
											<td valign="top"><input value="Log In" tabindex="4" type="submit"  /></td>
											</tr>
											</table>
										</div>
									</form> -->
								<?php
								}
								?>
						</div>
				</div>
		</div>
</div>
