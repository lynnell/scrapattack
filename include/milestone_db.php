<?php

# test
function insertMilestone($parentid, $milestone_cd, $milestone_value){
	
	
	$qry = "INSERT INTO 
	`journal` (`journalid`, `parentid`, `milestone_cd`,`milestone_value`) 
	VALUES 
	(uuid(),'".$parentid."','".$milestone_cd."','".$milestone_value."')";
	
	echo $qry;
	mysql_query($qry);
	$id = mysql_insert_id();
	
	return $id;
	
	
}

function getMilestoneList($fid){
		$query = "SELECT milestone_cd, milestone_value FROM milestone
					where parentid = '$fid';";
			
		$result = mysql_query($query);
		return $result;
}

function updateMilestone($fid, $firstname, $middlename, $lastname, $birthdate){

			$query = "UPDATE familymembers
			set
			firstname = '$firstname',
			middlename = '$middlename',
			lastname =  '$lastname'
			where id = '$fid';";
		 echo $query;
			$q= mysql_query($query );
}

?>