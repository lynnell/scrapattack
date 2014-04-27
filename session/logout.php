<?php

session_start();
		$_SESSION['uid']= null;
		$_SESSION['active']= false;
		$_SESSION['username']= null;
header("location:../index.php");		

?>
