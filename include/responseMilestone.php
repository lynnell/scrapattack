<?php
//include db configuration file
include("../include/config.php"); //including config.php in our file


if(isset($_POST["milestone_value"]) )
//&& strlen($_POST["milestone_desc"])>0) 
{	//check $_POST["content_txt"] is not empty

	//sanitize post value, PHP filter FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH Strip tags, encode special characters.
	$milestone_value = filter_var($_POST["milestone_value"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH); 
	$milestoneCd = filter_var($_POST["milestoneDropdown"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH); 
	// Insert sanitize string in record
	
	$mySQL = "INSERT INTO milestone(parentid, milestone_cd, milestone_value) VALUES('152253e6-ccf8-11e3-b2d7-00ffd0', '" .$milestoneCd. "', '" .$milestone_value. "')";
	//echo $mySQL;
	if(mysql_query($mySQL))
	{
		 //Record was successfully inserted, respond result back to index page
		  $my_id = mysql_insert_id(); //Get ID of last inserted row from MySQL
		  echo '<li id="item_'.$my_id.'">';
		  echo '<div class="del_wrapper"><a href="#" class="mdel_button" id="del-'.$my_id.'">';
		  echo '<img src="../img/icon_del.gif" border="0" />';
		  echo '</a></div>';
		  echo $milestone_value. '<br>' .$milestoneCd .'</li>';
		  mysql_close($link); //close db connection

	}else{
		
		header('HTTP/1.1 500 '.mysql_error()); //display sql errors.. must not output sql errors in live mode.
		header('HTTP/1.1 500 Looks like mysql error, could not insert record!');
		exit();
	}
	

}

elseif(isset($_POST["recordToDelete"]) && strlen($_POST["recordToDelete"])>0 && is_numeric($_POST["recordToDelete"]))
{	//do we have a delete request? $_POST["recordToDelete"]

	//sanitize post value, PHP filter FILTER_SANITIZE_NUMBER_INT removes all characters except digits, plus and minus sign.
	$idToDelete = filter_var($_POST["recordToDelete"],FILTER_SANITIZE_NUMBER_INT); 
	//try deleting record using the record ID we received from POST
	if(!mysql_query("DELETE FROM milestone WHERE milestoneid=".$idToDelete))
	{    
		//If mysql delete query was unsuccessful, output error 
		header('HTTP/1.1 500 Could not delete record!');
		exit();
	}
	mysql_close($link); //close db connection
}
else
{
	//Output error
	header('HTTP/1.1 500 Error occurred, Could not process request!');
    exit();
}

?>