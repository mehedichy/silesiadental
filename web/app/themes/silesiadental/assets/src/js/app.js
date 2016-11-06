jQuery(document).ready(function($){

	"use strict";

    $('.menu > ul > li:has( > ul)').addClass('menu-dropdown-icon');
    //Checks if li has sub (ul) and adds class for toggle icon - just an UI


    $('.menu > ul > li > ul:not(:has(ul))').addClass('normal-sub');
    //Checks if drodown menu's li elements have anothere level (ul), if not the dropdown is shown as regular dropdown, not a mega menu (thanks Luka Kladaric)

    $(".menu > ul").before("<a href=\"#\" class=\"menu-mobile\">Navigation</a>");

    //Adds menu-mobile class (for mobile toggle menu) before the normal menu
    //Mobile menu is hidden if width is more then 959px, but normal menu is displayed
    //Normal menu is hidden if width is below 959px, and jquery adds mobile menu
    //Done this way so it can be used with wordpress without any trouble

    $(".menu > ul > li").hover(function (e) {
        if ($(window).width() > 943) {
            $(this).children("ul").stop(true, false).fadeToggle(150);
            e.preventDefault();
        }
    });
    //If width is more than 943px dropdowns are displayed on hover

    $(".menu > ul > li").click(function () {
        if ($(window).width() <= 943) {
            $(this).children("ul").fadeToggle(150);
        }
    });
    //If width is less or equal to 943px dropdowns are displayed on click (thanks Aman Jain from stackoverflow)

    $(".menu-mobile").click(function (e) {
        $(".menu > ul").toggleClass('show-on-mobile');
        e.preventDefault();
    });
    //when clicked on mobile-menu, normal menu is shown as a list, classic rwd menu story (thanks mwl from stackoverflow)

	//======= Mega menu
	/*$(".dropdown-menu").hide();
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
	}*/

	/*$('.menu > ul > li > ul').addClass('dropdown-menu');
	$('.menu > ul:nth-child(2)').addClass('dropdown');
	$(".menu > ul > li:nth-child(2) > a").attr("data-toggle","dropdown");*/
    /*//======= Menu class addition
    $('nav.navbar ul.navbar-nav > li').addClass('nav-item');
    //$('nav.navbar ul.navbar-nav > li:nth-child(2)').addClass('dropdown menu-large');
    $('nav.navbar ul.navbar-nav>li>a').addClass('nav-link');
    //$("nav.navbar ul.navbar-nav > li:nth-child(2) > a").attr("data-toggle","dropdown");*/


    $(".datepicker").attr("placeholder", "Date");

});
