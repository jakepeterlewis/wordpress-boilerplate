<?php
/**
 * Description: The default template
 */

get_header(); ?>
	
	<section role="main">
	
		<h1><?php the_title(); ?></h1>
	
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	
		<div>
		
			<?php the_content(); ?>
		
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
