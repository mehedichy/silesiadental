jQuery(document).ready(function($){

	$(".dropdown-menu").hide();
    $(".dropdown").hover(
        function() { $('.dropdown-menu', this).stop().fadeIn("fast");},
        function() { $('.dropdown-menu', this).stop().fadeOut("fast");
    });

    $('nav.navbar ul.navbar-nav > li').addClass('nav-item');
    $('nav.navbar ul.navbar-nav>li>a').addClass('nav-link');
});