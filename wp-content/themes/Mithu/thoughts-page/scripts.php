<script>
var $j = jQuery.noConflict();
//
if($j('.bow').length){
	setTimeout(function(){
		$j('.bow').addClass('animated zoomIn').css('visibility','visible');
		//new WOW().init();
	},1500);
}

/*$j(document).ready(function(e) {
    $j('.open-comments').click(function(e) {
        e.preventDefault();
		e.stopPropagation();
		$j('.modal').modal('hide');
		$j('#comments').modal('show');
    });
}); */


if($j('#mr_star').length){
	function LoopAnimate() {
	  // Add animation class to star after 5 secons
	  setTimeout(function() {
		document.getElementById("mr_star").className += " animate";
	  }, 3000);
	  // remove animation class after 9seconds
	  setTimeout(function() {
		var star = document.getElementById("mr_star"),
		  starCont = document.getElementById("star-cont");
	
		star.className = " star"; 
		randomMargin(); //add random margin
	  }, 7000);
	
	}
	// Call LoopAnimate every 15seconds
	LoopAnimate();
	window.setInterval(function() {
	 LoopAnimate();
	
	}, 5000);
	
	//function to add a random margin
	function randomMargin() {
	  var num = Math.floor(Math.random() * 201) - 100,
		starCont = document.getElementById("star-cont"),
		starContMargin = getComputedStyle(starCont).getPropertyValue("margin-left");
	  num += "%";
	
	  starCont.style.marginLeft = num;
	  console.log(num);
	}
}
</script>