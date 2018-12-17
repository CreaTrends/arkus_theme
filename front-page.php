<?php
/**
 * Template Name: Front Page 
 * The template used for displaying fullwidth page content in fullwidth.php
 *
 * @package creatrends
 */
get_header(); ?>
<style type="text/css" id="custom-background-css-override">
        .about-us:after { background-image: url('<?php echo esc_attr(get_theme_mod( 'aboutus_default_thumbnail')); ?>'); }
    </style>
<!-- welcome message -->
<header id="slider-masthead" class="carousel slide carousel-fade masthead">
    
    <!-- items -->
    <div class="carousel-inner">
        <!-- item single -->
        <?php
        $args = array(
            'post_type' => 'slider',
            'posts_per_page' => '-1',
            'orderby' => 'menu_order',
            'order' => 'ASC'
        );
        $args['tax_query'] = array(
            array( 'taxonomy' => 'slider-loc', 'field' => 'slug', 'terms' => 'masthead' )
        );
        $the_query = new WP_Query( $args );
        
        $slides = array();
        $iteration = 0;
        if ( $the_query->have_posts() ) {
            while ( $the_query->have_posts() ) {
                $the_query->the_post();
                $imghtml = get_the_post_thumbnail_url(get_the_ID(), 'staconstanza-slider');
                $url = get_post_meta(get_the_ID(), 'slider-url', true);
        ?>
        <!-- item single -->
        <div class="carousel-item <?php echo $iteration == 0 ? 'active':'' ?>" style="background-image: url(<?php echo $imghtml;?>)">
            
            <div class="container">
                <div class="carousel-caption ">
                    <div class="intro-text">
                        <div class="intro-lead-in"><?php echo get_the_content() ?></div>
                        <div class="intro-heading text-uppercase"><?php echo get_the_title() ?></div>
                        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="<?php echo $url;?>">Conócenos</a>
                    </div>
                </div>
            </div>
        </div>
        <?php 
        $iteration++;
            }
            wp_reset_query();
        }
        ?>
        <a class="carousel-control-prev" href="#slider-masthead" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#slider-masthead" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
        
    </div>
</header>
<!-- welcome -->
<section class="welcome pb-5 pb-md-0" id="welcome">
    <div class="container">
        <div class="row">
            
            <div class="col-md-6">
                <small class="small-line"><?php echo esc_attr(get_theme_mod( 'welcome_textbox1', 'WELCOME TO THE BOOTSTRAP THEME' )); ?></small>
               <h3 class="service-heading mt-0">
                <?php echo esc_attr(get_theme_mod( 'welcome_textbox2', 'WELCOME TO THE BOOTSTRAP THEME' )); ?>
                
                </h3>
                <p class="mb-2">
                    <?php echo esc_attr(get_theme_mod( 'textarea_setting', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.' )); ?>
                </p>
                <a href="<?php echo esc_attr(get_theme_mod( 'welcome_button', '#' )); ?>" title="Read More" class="btn btn-primary">
                    <?php _e('Read More','ultrabootstrap'); ?>
                </a>
            </div>
            <div class="col-md-6 d-none d-md-block  ">
                <img class="featurette-image img-fluid mx-auto" src="<?php echo esc_attr(get_theme_mod( 'default_thumbnail')); ?>" alt="Product 1">
            </div>
            
        </div>
    </div>
</section>

<!-- promo section  -->

<section class="al-cta" id="info">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-3">
                <div class="media mb-3">
                    <div class="promo-icon mr-3">
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                    <div class="media-body">
                        <h5 class="mt-0">Lun-Vier: 08:00 - 18:00</h5>
                        Servicio de emergencia
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <div class="media mb-3">
                    <div class="promo-icon mr-3">
                        <i class="fas fa-clipboard-list"></i>
                    </div>
                    <div class="media-body">
                        <h5 class="mt-0">Inspeccion & Informes</h5>
                        Informes Certificados 
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <div class="media mb-3">
                    <div class="promo-icon mr-3">
                        <i class="fas fa-headset"></i>
                    </div>
                    <div class="media-body">
                        <h5 class="mt-0">Llamanos al +5691234567</h5>
                        De Lunes a Viernes 08:00 Hrs a 18:00 Hrs
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <div class="media mb-3">
                    <div class="promo-icon mr-3">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="media-body">
                        <h5 class="mt-0">Agenda Tu Hora</h5>
                        De Lunes a Viernes 08:00 Hrs a 18:00 Hrs
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end promo section  -->

<!-- about us -->

<section class="about-us" id="about_us" >
    <div class="container">
        <div class="row justify-content-start">
            <div class="col-lg-6 pr-5">
                <small class="small-line white"><?php echo esc_attr(get_theme_mod( 'aboutus_textbox1', 'WELCOME TO THE BOOTSTRAP THEME' )); ?></small>
                <h3 class="about-heading text-white mb-2">
                    <?php echo esc_attr(get_theme_mod( 'aboutus_textbox2', 'WELCOME TO THE BOOTSTRAP THEME' )); ?>
                </h3>
                <p class=" text-white">
                    <?php echo esc_attr(get_theme_mod( 'aboutus_textarea_setting', 'texto aqui' )); ?>
                </p>
                <a href="<?php echo esc_attr(get_theme_mod( 'welcome_button', '#' )); ?>" title="Read More" class="btn btn-secondaryColor">
                    <?php _e('Read More','ultrabootstrap'); ?>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- Services -->
<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 mb-5">
                <h2 class="section-title mb-4">Conoce Nuestros servicios.</h2>
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                <a href="#" title="Read More" class="btn btn-primaryColor">Nuestros servicios</a>
            </div>
            <div class="col-12 col-md-8">
                <div class="row justify-content-between">
                    <div class="col-12 col-md-6 mb-2">
                        <div class="card">
                            <div class="card-body">
                                <div class="media">
                                  
                                  <div class="media-body">
                                    <h4 class="heading-icon ">Informes Certificados</h4>
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mb-2">
                        <div class="card">
                            <div class="card-body">
                                <div class="media">
                                  
                                  <div class="media-body">
                                    <h4 class="heading-icon ">Informes Certificados</h4>
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mb-2">
                        <div class="card">
                            <div class="card-body">
                                <div class="media">
                                  
                                  <div class="media-body">
                                    <h4 class="heading-icon ">Informes Certificados</h4>
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mb-2">
                        <div class="card">
                            <div class="card-body">
                                <div class="media">
                                  
                                  <div class="media-body">
                                    <h4 class="heading-icon ">Informes Certificados</h4>
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>


<!-- Portfolio -->

<section class="bg-light" id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <small class="small-line line-center">Portafolio</small>
                <h2 class="section-title mb-4">Nuestros proyectos</h2>
                <h3 class="section-subheading text-muted">Aliquam interdum volutpat lectus at tincidunt. In ut dapibus leo. Nam at lectus sit amet tortor lacinia euismod eu a est. Donec rutrum neque eleifend egestas aliquet. Aenean non viverra arcu, </h3>
            </div>
        </div>
        <div class="row">
            <?php
                $args = array(
                    'post_type' => 'proyecto',
                    'posts_per_page' => '-1',
                    'orderby' => 'menu_order',
                    'order' => 'ASC',
                    'meta_query'=> array(
                        array(
                            'key' => 'proyecto_destacado', // this key will change!
                            'compare' => '=',
                            'value' => 'Destacado',
                        )
                    ),
                    'meta_key' => 'proyecto_destacado',
                    'orderby' => 'meta_value',
                );
                $loop = new WP_Query($args);                                   
                if ($loop->have_posts()) :  while ($loop->have_posts()) : $loop->the_post();

                $meta = get_post_meta( get_the_ID(),'proyecto_subtitulo' );
                $video = get_post_meta( get_the_ID(),'youtube_video',true ) ? get_post_meta( get_the_ID(),'youtube_video',true ) : false;
                
            ?>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal<?php echo get_the_ID();?>" 
                    data-src="<?php echo $video;?>">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <div class="portfolio-caption-inner text-left">
                                <h4 class="portfolio-title"><?php the_title();?></h4>
                                <p class="mb-3"><?php echo get_post_meta( get_the_ID(),'proyecto_subtitulo',true );?></p>
                            </div>
                        </div>
                    </div>
                    <img class="img-fluid" src="<?php the_post_thumbnail_url('arkus-feature'); ?>" alt="">
                </a>
            </div>
            <?php
                endwhile;
                    wp_reset_postdata();
                endif; 
            ?>
            
            <!-- <div class="col-md-4 col-sm-6 portfolio-item">
                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fas fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="https://images.unsplash.com/photo-1525478440856-b40668b83b79?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=feb1336540c16a3624298971cd59fe7d&auto=format&fit=crop&w=400&h=300&q=60" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4 class="portfolio-title">Parque Industrial Santiago</h4>
                    <p class="text-muted">Estudio de terreno</p>
                </div>
            </div> -->
        </div>
    </div>
</section>
<?php
    $args = array(
        'post_type' => 'proyecto',
        'posts_per_page' => '-1',
        'orderby' => 'menu_order',
        'order' => 'ASC',
        'meta_query'=> array(
            array(
                'key' => 'proyecto_destacado', // this key will change!
                'compare' => '=',
                'value' => 'Destacado',
            )
        ),
        'meta_key' => 'proyecto_destacado',
        'orderby' => 'meta_value',
    );
    $loop = new WP_Query($args);                                   
    if ($loop->have_posts()) :  while ($loop->have_posts()) : $loop->the_post();

    $meta = get_post_meta( get_the_ID());
    $video = get_post_meta( get_the_ID(),'youtube_video',true ) ? get_post_meta( get_the_ID(),'youtube_video',true ) : false;
    
?>
<!-- Modal <?php echo get_the_ID();?> -->
<div class="portfolio-modal modal fade" id="portfolioModal<?php echo get_the_ID();?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h5 class="service-heading mt-0"><?php the_title();?></h5>
                            <small class="small-line line-center"><?php echo get_post_meta( get_the_ID(),'proyecto_subtitulo',true);?></small>
                            <?php if(get_post_meta( get_the_ID(),'youtube_video',true)){?>
                            <div class="embed-responsive embed-responsive-16by9 mb-5 mt-3">
                                <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always"></iframe>
                            </div>
                            <?php } ?>
                            <?php
                            $images = rwmb_meta( 'prefix-image_advanced_1', array( 'size' => 'arkus-feature' ) );
                            ?>
                            <div class="container-fluid mt-3">
                                <div class="row">
                                <?php 
                                foreach ( $images as $image ) {
                                    //echo '<a href="', $image['full_url'], '" class="p-2" ><img src="', $image['url'], '" class="img-fluid"></a>';
                                    echo '<div class="col-12 col-md-4">';
                                    echo '<img src="', $image['url'], '" class="img-fluid">';
                                    echo '</div>';
                                }
                            ?>
                            </div>
                            </div>
                                
                            <p><?php the_content();?></p>
                            <ul class="list-inline">
                                <?php if(get_post_meta( get_the_ID(),'proyecto_fecha',true)){?>
                                <li>Fecha: <?php echo get_post_meta( get_the_ID(),'proyecto_fecha',true);?></li>
                                <?php } ?>
                                <?php if(get_post_meta( get_the_ID(),'proyecto_cliente',true)){?>
                                <li>Cliente: <?php echo get_post_meta( get_the_ID(),'proyecto_cliente',true);?></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    endwhile;
        wp_reset_postdata();
    endif; 
?>
<?php get_footer();?>