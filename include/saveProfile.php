<?php
	$firstname= mysql_real_escape_string($_GET['firstname']);
	$lastname= mysql_real_escape_string($_GET['lastname']);
	
	$address1= mysql_real_escape_string($_GET['address1']);
	$address2= mysql_real_escape_string($_GET['address2']);
	$city= mysql_real_escape_string($_GET['city']);
	$state= mysql_real_escape_string($_GET['state']);	
	$zipcode = mysql_real_escape_string(stripslashes($_GET['zipcode']));
	$phone = mysql_real_escape_string(stripslashes($_GET['phone']));
	$uid=mysql_real_escape_string($_SESSION['id']);	
	
	$query = "UPDATE users
	set
	firstname = '$firstname',
	lastname =  '$lastname',
	address1=  '$address1',
	address2 = 	'$address2',
	city = '$city',
	state = '$state',
	zip = '$zipcode',
	phone = '$phone'
	where uid = '$uid';";

?>