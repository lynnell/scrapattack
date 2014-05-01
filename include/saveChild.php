<?php
#$_SESSION['BaseURL'] = "http://" . $_SERVER['HTTP_HOST']."/scrapattack/";
include("../include/config.php"); //including config.php in our file


$firstname = $_GET['firstName'];
$middlename = $_GET['middleName'];
$lastname = $_GET['lastName'];
$fid = $_GET['fid'];

			$query = "UPDATE familymembers
			set
			firstname = '$firstname',
			middlename = '$middlename',
			lastname = '$lastname'			
			where id = '$fid';";
			$q= mysql_query($query );

?>