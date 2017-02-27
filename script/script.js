$.noConflict();
 var j = jQuery.noConflict(); 
j(document).ready(function (){
	////////////////////   Toggle Overlay   ///////////////////
	function toggleOverlay(){
		var overlay = document.getElementById('overlay');
		var ErrMsg = document.getElementById('ErrMsg');
		overlay.style.opacity = .8;
		if(overlay.style.display == "block"){
			j("#overlay").fadeOut(420);
			j("#ErrMsg").hide("fast");
			
		} 
		else {
			j("#overlay").fadeIn(420);
			j("#ErrMsg").show("fast");
		}
	}
	
	j("#overlay").click(function(){
		toggleOverlay();
	});
});