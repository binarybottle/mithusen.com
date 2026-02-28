new WOW().init();
var $j = jQuery.noConflict();
$j(document).ready(function(){

	var owl = $j('.owl-carousel');

	function owlInitTitle() {
    	var title=$j("#gallery-1").attr("data-title");
		$j(".sounda").html(title);
		console.log("initialized owl")
	}

	
	owl.owlCarousel({
        loop:true,
        autoPlay:false,
		items:1,
		center:true,
		onInitialized : owlInitTitle
    });
		
	/*$j('.tprev').click(function(){
		owl = $j(this).parent().parent().find('> .owl-carousel').data('owlCarousel');
		owl.prev();
	});
	$j('.tnext').click(function(){
		owl = $j(this).parent().parent().find('> .owl-carousel').data('owlCarousel');
		owl.next();
	});
	
	$j('.tpreva').click(function(){
		owl = $j(this).parent().parent().find('> .owl-carousel').data('owlCarousel');
		owl.prev();
	});
	$j('.tnextz').click(function(){
		owl = $j(this).parent().parent().find('> .owl-carousel').data('owlCarousel');
		owl.next();
	});*/
	$j('span.cross').click(function(){
		$j("#sidebar").fadeOut();
	});
	$j('#thought-menu').click(function(){
		$j("#sidebar").fadeIn();
	});
	$j(".navbar-toggle").click(function(){
		$j(".navbar-collapse").toggle();
	});
	$j( ".keywords a" ).click(function() {
		if($j(window).width()<541)
			$j("html, body").animate({ scrollTop: "0" });
	
		$j(".keywords a img").css('opacity','0');
		$j(this).find('img').css('opacity','1');	
	});
	
	$j('.loadIt').click(function(e) {
        $j('.load-content').slideToggle();
    }); 
	
	
	
});









