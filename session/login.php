<?php

session_start();
$_SESSION['BaseURL'] = "http://" . $_SERVER['HTTP_HOST']."/scrapattack/";
include("../include/config.php"); //including config.php in our file

if(isset($_POST) && !empty($_POST))
{
$username = mysql_real_escape_string(stripslashes($_POST['username'])); //Storing username in $username variable.
$password = mysql_real_escape_string(stripslashes($_POST['password'])); //Storing password in $password variable.

$match = "select uid, username, email from users where username = '".$username."' and password = '".$password."';"; 

$qry = mysql_query($match);

$num_rows = mysql_num_rows($qry); 

		if ($num_rows <= 0) { 
		$_SESSION['active']= false;
		echo "Sorry, there is no username $username with the specified password.";
		echo "Try again";
		exit; 

		} # end if 
		else
		{
		$row = mysql_fetch_row($qry);
		$_SESSION['uid']= $row[0];
		$_SESSION['active']= true;
		$_SESSION['username']= $row[1];
		} # end else
	header("location:".$_SESSION['BaseURL']."index.php");
		
} # end post if

?>
