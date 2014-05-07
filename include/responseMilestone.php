<?php
//include db configuration file
include_once("config.php");

echo "Made it here 1";

if(isset($_POST["content_txt"]) && strlen($_POST["content_txt"])>0) 
{	//check $_POST["content_txt"] is not empty

	echo "Made it here 2";

	//sanitize post value, PHP filter FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH Strip tags, encode special characters.
	$contentToSave = filter_var($_POST["content_txt"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH); 
	$testIt = filter_var($_POST["test1"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH); 

	echo "test1 value is: " .$testIt;

	// Insert sanitize string in record
	if(mysql_query("INSERT INTO milestone(milestone_id, parentid, milestone_cd, milestone_value) VALUES('3', '152253e6-ccf8-11e3-b2d7-00ffd0', '1' '".$contentToSave."')"))
	{
		 //Record was successfully inserted, respond result back to index page
		  $my_id = mysql_insert_id(); //Get ID of last inserted row from MySQL
		  echo '<li id="item_'.$my_id.'">';
		  echo '<div class="del_wrapper"><a href="#" class="del_button" id="del-'.$my_id.'">';
		  echo '<img src="../img/icon_del.gif" border="0" />';
		  echo '</a></div>';
		  echo $contentToSave.'</li>';
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