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
                        <li class="active" data-slide-to="0" data-target=
                        "#silesia-carousel"></li>
                        <li data-slide-to="1" data-target=
                        "#silesia-carousel"></li>
                        <li data-slide-to="2" data-target=
                        "#silesia-carousel"></li>
                    </ol><!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img alt="First slide" src=
                            "<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/img/slider.jpg"> 
                            <!-- Static Header -->
                            <div class="header-text hidden-xs">
                                <div class="col-md-6">
                                    <h2>Fast & effective</h2>
                                    <h4>teeth whitening system</h4>
                                    <p>Zoom professional whitening is the most
                                    requested whitening procedure by patients
                                    because it's proven to be safe, effective
                                    and conveniently fast.</p>
                                    <a href="#" class="btn btn-lg btn-slider">Teeth whitening &gt;</a>
                                </div>
                            </div><!-- /header-text -->
                        </div>
                        <div class="carousel-item">
                            <img alt="Second slide" src=
                            "<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/img/teeth.jpg"> <!-- Static Header -->
                            <div class="header-text hidden-xs">
                                <div class="col-md-6">
                                    <h2>Fast & effective</h2>
                                    <h4>teeth whitening system</h4>
                                    <p>Zoom professional whitening is the most
                                    requested whitening procedure by patients
                                    because it's proven to be safe, effective
                                    and conveniently fast.</p>
                                    <a href="#" class="btn btn-lg btn-slider">Teeth whitening &gt;</a>
                                </div>
                            </div><!-- /header-text -->
                        </div>
                        <div class="carousel-item">
                            <img alt="Third slide" src=
                            "<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/img/smile.jpg"> <!-- Static Header -->
                            <div class="header-text hidden-xs">
                                <div class="col-md-6">
                                    <h2>Fast & effective</h2>
                                    <h4>teeth whitening system</h4>
                                    <p>Zoom professional whitening is the most
                                    requested whitening procedure by patients
                                    because it's proven to be safe, effective
                                    and conveniently fast.</p>
                                    <a href="#" class="btn btn-lg btn-slider">Teeth whitening &gt;</a>
                                </div>
                            </div><!-- /header-text -->
                        </div>
                    </div><!-- Controls -->
                     <a class="left carousel-control" data-slide="prev" href=
                    "#silesia-carousel"><span class=
                    "glyphicon glyphicon-chevron-left"></span></a> <a class=
                    "right carousel-control" data-slide="next" href=
                    "#silesia-carousel"><span class=
                    "glyphicon glyphicon-chevron-right"></span></a>
                </div><!-- /carousel -->
            </div>
        </div><!-- /Slider -->

<?php
get_sidebar();
get_footer();
