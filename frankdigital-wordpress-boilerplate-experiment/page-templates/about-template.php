<?php
/**
 * Template Name: About Template
 *
 * Description: A page template for the Homepage
 */

get_header(); ?>
	
	<section role="main">
		<div class="heading-wrap">
			<div class="width-980 mobile-padding">
	
			<h1><?php the_title(); ?></h1>
			
			</div>
		</div>
	
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			
			<div class="width-980 mobile-padding">
				
				<h2>Compressive Images</h2>
			
				<img class="img-big left" src="<?php echo get_template_directory_uri(); ?>/-/img/imgtestbig.jpg">
				<p class="left">
					Image Size: 71kb<br>
					Real Size: 1000px by 625px<br>
					Image Quality: 25%<br>
					Scaled: 500px wide
					Comment: 
				</p>

				<img class="img-small left" src="<?php echo get_template_directory_uri(); ?>/-/img/imgtestsmall.jpg">
				<p class="left">
					Image Size: 91kb<br>
					Real Size: 500px by 313px<br>
					Image Quality: 85%<br>
					Scaled: none
				</p>
				
				<i class="clearfix"></i>
			
			</div>
			
		<?php endwhile; ?>
	
		<?php else: ?>
	
		<div>
			
			<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
			
		</div>
	
	<?php endif; ?>
	
	</section>
	
<?php //get_sidebar(); ?>

<?php get_footer(); ?>
