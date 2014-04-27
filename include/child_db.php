<?php


function insertChild($parentid, $firstname, $middlename, $lastname){
	$qry = "INSERT INTO familymembers
	(id, parentid, firstname, middlename, lastname) 
	VALUES 
	(UUID(),'".$parentid."','".$firstname."','".$middlename."','".$lastname."')";
	echo $qry;
	mysql_query($qry);
	$id = mysql_insert_id();
	
	return $id;
}

function getChild($fid){
		$match = "SELECT firstname, middlename, lastname, DATE_FORMAT(birthdate,'%m-%d-%Y') FROM familymembers WHERE id =  '".$fid."';"; 
		$qry = mysql_query($match);
		$num_rows = mysql_num_rows($qry); 
				if ($num_rows <= 0) { 
				exit; 
				} # end if 
				else
				{
				$row = mysql_fetch_row($qry);
				} # end else	
	return $row;
}

function updateChild($fid, $firstname, $middlename, $lastname, $birthdate){

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