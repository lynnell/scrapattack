<?php
#$_SESSION['BaseURL'] = "http://" . $_SERVER['HTTP_HOST']."/scrapattack/";
include("../include/config.php"); //including config.php in our file


$parentid = $_GET['parentid'];
$journal_title = $_GET['journal_title'];
$journal_note = $_GET['journal_note'];

	$qry = "INSERT INTO 
	`journal` ( `parentid`, `journal_note`,`journal_title`) 
	VALUES 
	('".$parentid."','".$journal_note."','".$journal_title."')";
echo $qry;

/*
			$query = "UPDATE familymembers
			set
			firstname = '$firstname',
			middlename = '$middlename',
			lastname =  '$lastname'
			where id = '$fid';";
		 echo $query;
			$q= mysql_query($query );
*/
?>
