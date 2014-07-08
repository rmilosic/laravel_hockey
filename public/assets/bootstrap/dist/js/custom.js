$(document).ready(function(){
console.log('jquery runs');
	
	 $('li.seasondd').click(
	 	function(){
	 		console.log ('season was clicked');
	 		if($(this).children('ul').hasClass("hide"))
	       	{
	     		$(this).children('ul').removeClass("hide");
	     	}
	   		else 
	   		{
	   			$(this).children('ul').addClass("hide");
	   		}

	      
	    });
		
	



	$('#home-clone-add').click(function() {
	console.log ('addHomeRow was clicked');
	
	var $tr = $('#homeTable tbody>tr:last');
	var $clone = $('#homeTable tbody>tr:first').clone();
	console.log ($tr);
    $clone.find(':text').val('');
    $tr.after($clone);
    console.log('clone was added');
	}); 
 


});