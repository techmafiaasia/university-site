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
		<?php
		while ( have_posts() ) :
			the_post(); ?>

			<div class="page-banner">
				<div class="page-banner__bg-image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/ocean.jpg);"></div>
				<div class="page-banner__content container container--narrow">
				<h1 class="page-banner__title"><?php the_title(); ?></h1>
				<div class="page-banner__intro">
					<p>Dont forget to replace me later</p>
				</div>
				</div>  
			</div>

			<div class="container container--narrow page-section">
				<div class="metabox metabox--position-up metabox--with-home-link">
						<p>
							<a class="metabox__blog-home-link" href="<?php echo site_url('/blog');  ?>">
								<i class="fa fa-home" aria-hidden="true"></i> 
								Blog Home 
							</a>
							<span class="metabox__main">posted by <?php the_author_posts_link(); ?> on <?php the_time('s M Y'); ?> on <?php echo get_the_category_list(', '); ?>
							</span>
						</p>
				</div>
				<div class="generic-content">
					<?php the_content(); ?>
				</div>

			</div>

			
		
	   <?php 	endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
//get_sidebar();
get_footer();

