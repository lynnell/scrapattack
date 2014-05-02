<?php
header('Content-type: image/JPG');
include($_SERVER['DOCUMENT_ROOT']."/scrapattack/include/config.php"); //including config.php in our file


$fid = $_GET['fid'];

$query = "SELECT profile_image FROM familymembers WHERE id =  '".$fid."';"; 
	

 	$result = mysql_query($query); 

				while($res=mysql_fetch_array($result))
				{ 
				echo '<img src ="data:image/jpeg;base64,'.base64_encode($res['profile_image']).'"/>';

				} 

?>
