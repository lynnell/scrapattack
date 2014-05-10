$(document).ready(function() {

	//##### send add record Ajax request to responseMilestone.php #########
	$("#MilestoneSubmit").click(function (e) {
		
			//alert("In milestone.js 1");
			e.preventDefault();
			if($("#contentText").val()==='')
			{
				alert("Please enter some text!");
				return false;
			}
		 	var myData = 'content_txt='+ $("#contentText").val(); //build a post data structure
		 	//alert("myData part1 is: " + myData);
		 	
		 	//var myData = myData + '&milestoneDropdownTEST='+ $("#milestoneDropdownTEST").val();
		 	var myData = myData + '&milestoneDropdown='+ $("#milestoneDropdown").val();
		 	//alert("myData part2 is: " + myData);

			jQuery.ajax({
			type: "POST", // HTTP method POST or GET
			url: "../include/responseMilestone.php", //Where to make Ajax calls
			dataType:"text", // Data type, HTML, json etc.
			data:myData, //Form variables
			success:function(response){
				$("#responds").append(response);
				$("#contentText").val(''); //empty text field on successful
			},
			error:function (xhr, ajaxOptions, thrownError){
				alert(thrownError);
			}
			});
	});

	//##### Send delete Ajax request to responseMilestone.php #########
	$("body").on("click", "#responds .delMilestone_button", function(e) {
	alert("test point milestone.js");
		 e.returnValue = false;
		 var clickedID = this.id.split('-'); //Split string (Split works as PHP explode)
		 var DbNumberID = clickedID[1]; //and get number from array
		 //alert(DbNumberID);
		 var myData = 'recordToDelete='+ DbNumberID; //build a post data structure
		 
			jQuery.ajax({
			type: "POST", // HTTP method POST or GET
			url: "../include/responseMilestone.php", //Where to make Ajax calls
			dataType:"text", // Data type, HTML, json etc.
			data:myData, //Form variables
			//alert("BEFORE Made it to success function");
			success:function(response){
				//on success, hide  element user wants to delete.
				alert(myData);
				//alert("Made it to success function");
				$('#item_'+DbNumberID).fadeOut("slow");
			},
			error:function (xhr, ajaxOptions, thrownError){
				//On error, we alert user
				alert(thrownError);
			}
			});
	});

});