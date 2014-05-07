$(document).ready(function() {

	//##### send add record Ajax request to response.php #########
	$("#JournalSubmit").click(function (e) {
			e.preventDefault();
			if($("#ournal_title").val()==='')
			{
				alert("Please enter journal!");
				return false;
			}
		 	var myData = 'journal_text='+ $("#journal_text").val(); //build a post data structure
		 	var myData =+ 'journal_date='+ $("#journal_date").val(); //build a post data structure			
		 	var myData =+ 'journal_title='+ $("#journal_title").val(); //build a post data structure			
			jQuery.ajax({
			type: "POST", // HTTP method POST or GET
			url: "../include/saveJournal.php", //Where to make Ajax calls
			dataType:"text", // Data type, HTML, json etc.
			data:myData, //Form variables
			success:function(response){
				$("#responds").append(response);
				$("#journal_text").val(''); //empty text field on successful
			},
			error:function (xhr, ajaxOptions, thrownError){
				alert(thrownError);
			}
			});
	});

	//##### Send delete Ajax request to response.php #########
	$("body").on("click", "#responds .del_button", function(e) {
	alert("test point journal.js");
		 e.returnValue = false;
		 var clickedID = this.id.split('-'); //Split string (Split works as PHP explode)
		 var DbNumberID = clickedID[1]; //and get number from array
		 var myData = 'recordToDelete='+ DbNumberID; //build a post data structure
		 
			jQuery.ajax({
			type: "POST", // HTTP method POST or GET
			url: "../include/saveJournal.php", //Where to make Ajax calls
			dataType:"text", // Data type, HTML, json etc.
			data:myData, //Form variables
			success:function(response){
				//on success, hide  element user wants to delete.
				$('#item_'+DbNumberID).fadeOut("slow");
			},
			error:function (xhr, ajaxOptions, thrownError){
				//On error, we alert user
				alert(thrownError);
			}
			});
	});

});