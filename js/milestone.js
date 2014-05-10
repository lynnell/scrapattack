$(document).ready(function() {

	//##### send add record Ajax request to responseMilestone.php #########
	$("#MilestoneSubmit").click(function (e) {
		
		e.preventDefault();
			if($("#milestone_value").val()==='')
			{
				alert("Please enter some text!");
				return false;
			}
		 	var myData = 'milestone_value='+ $("#milestone_value").val(); //build a post data structure
		 	//var myData = myData + '&milestoneDropdownTEST='+ $("#milestoneDropdownTEST").val();
		 	var myData = myData + '&milestoneDropdown='+ $("#milestoneDropdown").val();
	 	

			jQuery.ajax({
			type: "POST", // HTTP method POST or GET
			url: "../include/responseMilestone.php", //Where to make Ajax calls
			dataType:"text", // Data type, HTML, json etc.
			data:myData, //Form variables
			success:function(response){
				$("#milestoneresponds").append(response);
				$("#milestone_value").val(''); //empty text field on successful
			},
			error:function (xhr, ajaxOptions, thrownError){
				alert(thrownError);
			}
			});
	});

	//##### Send delete Ajax request to responseMilestone.php #########
	$("body").on("click", "#milestoneresponds .mdel_button", function(e) {
		 e.returnValue = false;
		 var clickedID = this.id.split('-'); //Split string (Split works as PHP explode)
		 var DbNumberID = clickedID[1]; //and get number from array
		 var myData = 'recordToDelete='+ DbNumberID; //build a post data structure
			jQuery.ajax({
			type: "POST", // HTTP method POST or GET
			url: "../include/responseMilestone.php", //Where to make Ajax calls
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