<?php 

    /* Template Name: Completed Projects */

    get_header();

    ?>

<section class="inner-heading">

    <div class="container">

        <h1>Portfolio</h1>

    </div>

</section>

<!--portfolio-area start-->

<section class="bg-gray portfolio-area">

    <!--container start-->

    <div class="container">

        <div class="section-title">

            <h3>Completed <span>Projects</span></h3>

            <p>Take a closer look at our projects. Aakar Group has a team of highly qualified Engineers, Architects, Interior Designers and skilled Workers who are dedicated to fulfil client’s requirements. </p>

        </div>

        <div class="portfolio-inner">

            <div class="row">

                <!--row start-->

                <ul class="portfolio-posts">

					<?php 

						$args = array(

							'post_type' => 'portfolios',

							'orderby'	=> 'ID',

							'order'		=> 'ASC',

							'tax_query' => array(

								array(

									'taxonomy' => 'portfolios_categories',

									'field'    => 'slug',

									'terms'    => 'completed-projects',

								),

							),

						);

						$loop = new WP_Query( $args );

						while ( $loop->have_posts() ) : $loop->the_post(); 

					?>

                    <!--col start-->

                    <li class="col-md-4 col-sm-6 col-xs-12 ">

                        <a href="<?php echo get_the_post_thumbnail_url(get_the_id(), 'full'); ?>" title="<?php echo get_the_title(); ?>" class="lightbox-image" data-fancybox="gallery">

                            <div class="image-hover-effect-2 zooming">

                                <img src="<?php echo get_the_post_thumbnail_url(get_the_id(), 'full'); ?>" alt="<?php echo get_the_title(); ?>">	

                                <div class="caption">

                                    <h3><?php echo get_the_title(); ?></h3>

                                </div>

                                <div class="link-wrap">

                                    <h3><?php echo get_the_title(); ?></h3>

                                </div>

                            </div>

                        </a>

                    </li>

					<?php endwhile;	?>                   

                </ul>

                <!--row end--> 

            </div>

        </div>

    </div>

    <!--container end--> 

</section>

<!--portfolio-area end--> 

<section class="whychoose-wrap">

    <!--container start-->

    <div class="container">

        <!--row start-->

        <div class="row">

            <?php 

				$args = array(

					'post_type' => 'portfolio_videos',

					'orderby'	=> 'ID',

					'order'		=> 'ASC',

					'tax_query' => array(

						array(

							'taxonomy' => 'portfolio_videos_categories',

							'field'    => 'slug',

							'terms'    => 'completed-projects-portfolio',

						),

					),

				);

				$loop = new WP_Query( $args );

				while ( $loop->have_posts() ) : $loop->the_post(); 

			?>

            <div class="col-md-4">

                <div class="about-video-item">

                    <div class="about-video-img"> 

					    <img src="<?php echo get_the_post_thumbnail_url(get_the_id(), 'full'); ?>" alt="<?php echo get_the_title(); ?>">

						<a href="<?php echo get_post_meta(get_the_id(),'portfolio_video_link',true);?>" class="video-play mfp-iframe xs-video"><i class="fa fa-play"></i>

						</a> 

					</div>

                </div>

            </div>

            <?php endwhile;	?>              

        </div>

        <!--row end--> 

    </div>

    <!--container end--> 

</section>

<?php get_footer(); ?>