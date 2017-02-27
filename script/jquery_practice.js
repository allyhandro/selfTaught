//tells code when to run; the document.ready sets start when the html file has completely loaded.
$(document).ready(function() { 
	$('input#name-submit').on('click', function(){
		var name = $('input#name').val();
		if($.trim(name) != ''){
			$.post('name.php', {name: name}, function(data){
				$('div#name-data').text(data);
			});
		}
	});


// 	$("p").hide();
// 	
// 	$("h1").click(function(){
// 		$("p").show(1000);
// 		$("p").next("div").css("background-color","red");
// 	});
	
	
// 	$("h1,h2").mouseenter(function(){
// 		$(this).css({"margin-left": "+=50px",
// 					 "background-color": "yellow"});
// 	});
// 	
// 	$("h1,h2").mouseleave(function(){
// 		$(this).css({"margin-left": "-=50px",
// 					 "background-color": "orange"});
// 	});

	
// 	$("h1").click(function(){
// 		$("h2").animate({
// 			"font-size": "toggle",
// 			"width": "50%",
// 			"left":"+=100px"	
// 		}, 1000, function(){
// 			$("p").animate({
// 				"opacity":"toggle"
// 			});
// 		
// 		});
// 	});



	
	// $("h1").click(function(){
// 		$(this).next().slideToggle(300);
// 	});
	
	// $("h1").mouseenter(function(){
// 		$(this).css("background-color","red");
// 	});
// 
// 	$("h1").mouseleave(function(){
// 		$(this).css("background-color","yellow");
// 		$(this).unbind("mouseleave");
// 	});	
});