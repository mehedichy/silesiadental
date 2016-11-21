jQuery(document).ready(function($){

	function initMainNavigation( container ) {

		// Add dropdown toggle that display child menu items.
		container.find( '.menu-item-has-children > a' );

		container.find( 'li.menu-item-has-children > a.main-menu-link' ).click( function( e ) {
			var _this = $( this );
			e.preventDefault();
			_this.parent().toggleClass( 'toggle-on' );
			_this.next( '.sub-menu' ).toggleClass( 'show' );

			console.log( _this );
		} );
	}
	initMainNavigation( $( '.menu-container' ) );


	//$(".datepicker").attr("placeholder", "Date");

	// FAQs
	$('.collapse.in').prev('.panel-heading').addClass('active');
	$('#accordion, #bs-collapse')
	.on('show.bs.collapse', function (a) {
		$(a.target).prev('.panel-heading').addClass('active');
	})
	.on('hide.bs.collapse', function (a) {
		$(a.target).prev('.panel-heading').removeClass('active');
	});



	 // Get the modal
	//  lightbox.option({
	//   'resizeDuration': 200,
	//   'wrapAround': true
	// });
			

});

//=== Initialize lightense-images
/*window.addEventListener('load', function () {
  var el = document.querySelectorAll('img:not(.no-lightense),.lightense');
  Lightense(el);
}, false);*/

