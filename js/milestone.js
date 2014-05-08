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
		 	alert("myData part1 is: " + myData);


		 	var a = document.getElementById("#milestoneDropdownTEST");

		 	alert($('#milestoneDropdownTEST').val());

		 	//var myDataDROPDOWN = 'milestoneDropdown='+ $(document.getElementById("#milestoneDropdown").val()); //build a post data structure
		 	//alert("myData part1 is: " + myDataDROPDOWN);


		 	//alert("milestoneDropdown is: " + document.getElementById("#milestoneDropdown").value);
		 	//alert("milestoneDropdown is: " + $(document.getElementById("#milestoneDropdown").val()));

		 	var myData = myData + 'milestoneDropdownTEST='+ $("#milestoneDropdownTEST").val();
		 	alert("myData part2 is: " + myData);

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
	$("body").on("click", "#responds .del_button", function(e) {
	alert("test point journal.js");
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