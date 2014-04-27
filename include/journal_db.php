<?php

# test
function insertJournal($parentid, $journal_title, $journal_note){
	
	
	$qry = "INSERT INTO 
	`journal` (`journalid`, `parentid`, `journal_note`,`journal_title`) 
	VALUES 
	(uuid(),'".$parentid."','".$journal_title."','".$journal_note."')";
	
	echo $qry;
	mysql_query($qry);
	$id = mysql_insert_id();
	
	return $id;
	
	
}

function getJournalList($fid){
		$query = "SELECT journal_note,journal_title FROM journal
					where parentid = '$fid';";
			
		$result = mysql_query($query);
		return $result;
}

function updateJournal($fid, $firstname, $middlename, $lastname, $birthdate){

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