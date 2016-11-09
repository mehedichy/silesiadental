<?php
/**
 * Template Name: Front Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Dawn
 */

get_header(); ?>

	<!-- Slider -->
    <div class="container-fluid">
        <div class="row">
            <!-- Carousel -->
            <div class="carousel slide" data-ride="carousel" id=
            "silesia-carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li class="active" data-slide-to="0" data-target="#silesia-carousel"></li>
                    <li data-slide-to="1" data-target="#silesia-carousel"></li>
                    <li data-slide-to="2" data-target="#silesia-carousel"></li>
                </ol><!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img alt="First slide" src=
                        "<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/img/slider.jpg" class="no-lightense"> 
                        <!-- Static Header -->
                        <div class="header-text hidden-xs">
                            <div class="col-md-6">
                                <h2>Fast & effective</h2>
                                <h4>teeth whitening system</h4>
                                <p>Zoom professional whitening is the most requested whitening procedure by patients
                                because it's proven to be safe, effective and conveniently fast.</p>
                                <a href="#" class="btn btn-lg btn-slider">Teeth whitening <span>&gt;</span></a>
                            </div>
                        </div><!-- /header-text -->
                    </div>
                    <div class="carousel-item">
                        <img alt="Second slide" src=
                        "<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/img/teeth.jpg" class="no-lightense"> <!-- Static Header -->
                        <div class="header-text hidden-xs">
                            <div class="col-md-6">
                                <h2>Fast & effective</h2>
                                <h4>teeth whitening system</h4>
                                <p>Zoom professional whitening is the most requested whitening procedure by patients
                                because it's proven to be safe, effective and conveniently fast.</p>
                                <a href="#" class="btn btn-lg btn-slider">Teeth whitening &gt;</a>
                            </div>
                        </div><!-- /header-text -->
                    </div>
                    <div class="carousel-item">
                        <img alt="Third slide" src=
                        "<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/img/smile.jpg" class="no-lightense"> <!-- Static Header -->
                        <div class="header-text hidden-xs">
                            <div class="col-md-6">
                                <h2>Fast & effective</h2>
                                <h4>teeth whitening system</h4>
                                <p>Zoom professional whitening is the most requested whitening procedure by patients
                                because it's proven to be safe, effective and conveniently fast.</p>
                                <a href="#" class="btn btn-lg btn-slider">Teeth whitening &gt;</a>
                            </div>
                        </div><!-- /header-text -->
                    </div>
                </div><!-- Controls -->
                 <a class="left carousel-control" data-slide="prev" href="#silesia-carousel"><span class=
                "glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" data-slide="next" href=
                "#silesia-carousel"><span class="glyphicon glyphicon-chevron-right"></span></a>
            </div><!-- /carousel -->
        </div>
    </div><!-- /Slider -->

    <!-- Info Bar -->
    <div class="info-bar">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="media">
                        <div class="media-left">
                            <i aria-hidden="true" class="fa fa-clock-o fa-3x"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Openning Hours</h4>
                            <p>Sat-Wed, 8am-8pm<br>
                            Thu, 8am-6pm<br>
                            Closed on Fridays</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="media">
                        <div class="media-left">
                            <i aria-hidden="true" class="fa fa-map-marker fa-3x"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Location</h4>
                            <address>
	                            Diera, Port Saeed, Centurion Star bldg.,
	                            <br />
	                            Metro Exit 2, Bloack A, Office 302
	                            <br />
	                            P.O. BOX: 40466,Dubai, UAE
	                            <br />
	                            <a href="https://goo.gl/za59A4">Find Us</a></p>
                            </address>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="media">
                        <div class="media-left">
                            <i aria-hidden="true" class="fa fa-mobile fa-3x"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Call us today!</h4>
                            <p>Tel.: +971 4 228 4770<br>
                            Mob.: -971 50 412 7876</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /Info Bar -->

    <!-- Appointment -->
    <div class="appointment">
        <div class="container">
            <div class="row">
            	<div class="col-md-12">
            		<h1>Book an <span>appointment</span></h1>
            		<div class="form-div">
            			<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 1 ); } ?>
            		</div>
            	</div>
            </div>
        </div>
    </div><!-- /Appointment -->

    <!-- Services -->
    <div class="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="services-box">
                        <img class="no-lightense" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/img/teeth-whitening.png">
                        <h2>Teeth <span>whitening</span></h2>
                        <p>Zoom professional whitening is the most requested
                        whitening procedure by patients.</p>
                        <a href="/cosmetic-dentistry/#teeth-whitening" class="btn btn-lg btn-readmore"><span>Read more</span></a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="services-box">
                        <img class="no-lightense" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/img/crown.png">
                        <h2><span>Crowns</span> & Bridges</h2>
                        <p>Crowns are made to match the color of your natural
                        teeth, and it trengthens an impaired tooth.</p>
                        <a href="/replacing-teeth/#crowns-bridges" class="btn btn-lg btn-readmore"><span>Read more</span></a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="services-box">
                        <img class="no-lightense" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/img/implant.png">
                        <h2>Dental <span>implants</span></h2>
                        <p>We are known to be the best dental clinic in Dubai
                        for dental implants with the highest success rate.</p>
                        <a href="#" class="btn btn-lg btn-readmore"><span>Read more</span></a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="services-box">
                        <img class="no-lightense" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/img/checkup.png">
                        <h2>Dental <span>checkup</span></h2>
                        <p>We make sure you get superior dental checkup using
                        unparalleled technologies.</p>
                        <a href="#" class="btn btn-lg btn-readmore"><span>Read more</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /Services -->

    <!-- Hospital View -->
    <div class="hospital" style="max-height: 402px;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m0!3m2!1sen!2sbd!4v1466665322198!6m8!1m7!1s466qD8vS-8kAAAQvO3TL3A!2m2!1d25.25410663770023!2d55.32890193067852!3f36!4f0!5f0.7820865974627469" width="100%" height="402px" frameborder="0" style="border:0" allowfullscreen>
        </iframe>
    </div><!-- /Hospital View -->

    <!-- Highlights -->
    <div class="highlight">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h1>20 yeas of<br>
                    dental <span>excellence</span></h1>
                    <p>Silesia Dental Clinic is the leading and most trusted dental healthcare provider in Dubai with a
                    cutting edge dental clinic in Port Saeed, an advanced dental laboratory and a team of highly competent dental
                    specialists, dentists and support staff.</p>
                    <a href="#" class="btn btn-lg btn-highlights">Find Out More</a>
                </div>
            </div>
        </div>
    </div><!-- /Highlights -->

<?php
get_sidebar();
get_footer();
