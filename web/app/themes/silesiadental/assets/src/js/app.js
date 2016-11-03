jQuery(document).ready(function($){

	//======= Mega menu
	$(".dropdown-menu").hide();
    $(".dropdown").hover(
        function() { $('.dropdown-menu', this).stop().fadeIn("fast");},
        function() { $('.dropdown-menu', this).stop().fadeOut("fast");
    });

    var devicewidth= $(window).width();
	if ( devicewidth <= 768 ){
		$('.dropdown').unbind('mouseenter mouseleave');
		$('.dropdown').click(function(){
			$(".dropdown-menu").toggle();
		});
	}

    //======= Menu class addition
    $('nav.navbar ul.navbar-nav > li').addClass('nav-item');
    //$('nav.navbar ul.navbar-nav > li:nth-child(2)').addClass('dropdown menu-large');
    $('nav.navbar ul.navbar-nav>li>a').addClass('nav-link');
    //$("nav.navbar ul.navbar-nav > li:nth-child(2) > a").attr("data-toggle","dropdown");


    $(".datepicker").attr("placeholder", "Date");

});
