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
				<?php 
				$parent = wp_get_post_parent_id(get_the_id());
				if($parent){ ?>
					<div class="metabox metabox--position-up metabox--with-home-link">
						<p><a class="metabox__blog-home-link" href="<?php echo get_the_permalink($parent); ?>"><i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title($parent); ?></a> <span class="metabox__main"><?php the_title(); ?></span></p>
					</div>
				<?php }
				
				?>
				
				<?php
					$isParent = get_pages(array(
						'child_of' => get_the_id()
					));
					if($parent or $isParent){ ?>

					<div class="page-links">
						<h2 class="page-links__title"><a href="<?php echo get_the_permalink($parent); ?>"><?php echo get_the_title($parent); ?></a></h2>
						<ul class="min-list">
							
							<?php 
								if($parent){
									$findChildrenOf = $parent;
								}else{
									$findChildrenOf = get_the_id();
								}
								echo wp_list_pages(array(
									'title_li' => NULL,
									'child_of' => $findChildrenOf,
									'sort_column' => 'post_date'
								))
							?>

							<!-- <li class="current_page_item"><a href="#">Our History</a></li>
							<li><a href="#">Our Goals</a></li> -->
						</ul>
					</div> 
					<?php }
				
				?>
				

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
