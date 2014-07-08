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
		
	

	 // FILL HOME TABLE FUNCT.

 	 //GOALS

 	 $('#home-clone-add').click(function() {
	console.log ('addHomeRow was clicked');

	var $all_rows = $('#homeTable >tbody >tr');

	if($all_rows.length > 0){
		$('button.home-remove').removeClass("hide");	
	};

	var $tr = $('#homeTable tbody>tr:last');
	var $clone = $('#homeTable tbody>tr:first').clone();
	console.log ($tr);
    $clone.find(':text').val('');
    $tr.after($clone);
    console.log('clone was added');
	}); 

 
	$('button.home-remove').click(function() {
	var $all_rows = $('#homeTable >tbody >tr');
	console.log($all_rows.length);
	if($all_rows.length < 3){
		$('button.home-remove').addClass("hide");
	}
		$('#homeTable tbody>tr:last').remove('tr');
	});	

	 //PENALTIES

	$('#home-pen-add').click(function() {
	console.log ('addHomeRow was clicked');

	var $all_rows = $('#homePenTable >tbody >tr');

	if($all_rows.length > 0){
		$('button.pen-remove').removeClass("hide");	
	};

	var $tr = $('#homePenTable tbody>tr:last');
	var $clone = $('#homePenTable tbody>tr:first').clone();
	console.log ($tr);
    $clone.find(':text').val('');
    $tr.after($clone);
    console.log('clone was added');
	}); 

 
	$('button.pen-remove').click(function() {
	var $all_rows = $('#homePenTable >tbody >tr');
	console.log($all_rows.length);
	if($all_rows.length < 3){
		$('button.pen-remove').addClass("hide");
	}
		$('#homePenTable tbody>tr:last').remove('tr');
	});	

	 // FILL AWAY TABLE FUNCT.

	 //GOALS

	$('#away-clone-add').click(function() {

	var $all_rows = $('#awayTable >tbody >tr');

	console.log($all_rows.length)

	if($all_rows.length > 0){
		$('button.away-remove').removeClass("hide");	
	};

	var $tr = $('#awayTable tbody>tr:last');
	var $clone = $('#awayTable tbody>tr:first').clone();
	console.log ($tr);
    $clone.find(':text').val('');
    $tr.after($clone);
    console.log('clone was added');
	}); 

 
	$('button.away-remove').click(function() {
	var $all_rows = $('#awayTable >tbody >tr');
	console.log($all_rows.length);
	if($all_rows.length < 3){
		$('button.away-remove').addClass("hide");
	}
		$('#awayTable tbody>tr:last').remove('tr');
	});	

	//PEALTIES

	$('#away-pen-add').click(function() {
	console.log ('addHomeRow was clicked');

	var $all_rows = $('#homePenTable >tbody >tr');

	if($all_rows.length > 0){
		$('button.awayPen-remove').removeClass("hide");	
	};

	var $tr = $('#awayPenTable tbody>tr:last');
	var $clone = $('#awayPenTable tbody>tr:first').clone();
	console.log ($tr);
    $clone.find(':text').val('');
    $tr.after($clone);
    console.log('clone was added');
	}); 

 
	$('button.awayPen-remove').click(function() {
	var $all_rows = $('#awayPenTable >tbody >tr');
	console.log($all_rows.length);
	if($all_rows.length < 3){
		$('button.awayPen-remove').addClass("hide");
	}
		$('#awayPenTable tbody>tr:last').remove('tr');
	});	






});