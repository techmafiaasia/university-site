<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package university-site
 */

get_header();
?>

	<main id="primary" class="site-main">
  <div class="page-banner">
				<div class="page-banner__bg-image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/ocean.jpg);"></div>
				<div class="page-banner__content container container--narrow">
				<h1 class="page-banner__title">All Events</h1>
				<div class="page-banner__intro">
					<p>See what is going on in our world</p>
				</div>
				</div>  
			</div>
	
			<div class="container container--narrow page-section">
      <?php
        while(have_posts()){
          the_post(); ?>
                  <div class="event-summary">
                        <a class="event-summary__date t-center" href="<?php the_permalink(); ?>">
                        <span class="event-summary__month"><?php the_time('M'); ?></span>
                        <span class="event-summary__day"><?php the_time('j'); ?></span>
                        </a>
                        <div class="event-summary__content">
                        <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                        <p><?php echo wp_trim_words(get_the_content(), 18); ?> <a href="<?php the_permalink(); ?>" class="nu gray">Learn more</a></p>
                        </div>
                    </div>
        <?php }
        echo paginate_links();
      ?>
    
			</div>
	  

	</main><!-- #main -->

<?php
//get_sidebar();
get_footer();

