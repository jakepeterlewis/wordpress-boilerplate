<?php
/**
 * Template Name: Home Template
 *
 * Description: A page template for the Homepage
 */

get_header(); ?>
	
	<section role="main">
	
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	
		<section class="slider-wrapper-top">
			<div class="slider-top">
				<div class="slide">
					<img src="<?php echo get_template_directory_uri(); ?>/-/img/slide-1.jpg" alt="Generic Slide 1">
					<div class="rsText">
						<div class="rsTextContent">
							<h2 class="rsABlock">
								Generic Slide 1
							</h2>
							<p class="rsABlock">
								Do you see any Teletubbies in here? Do you see a slender plastic tag clipped to my shirt with my name printed on it?
							</p>
						</div>
					</div>
				</div>
			
				<div class="slide">
					<img src="<?php echo get_template_directory_uri(); ?>/-/img/slide-2.jpg" alt="Generic Slide 2">
					<div class="rsText">
						<div class="rsTextContent">
							<h2 class="rsABlock">
								Generic Slide 2
							</h2>
							<p class="rsABlock">
								Do you see any Teletubbies in here? Do you see a slender plastic tag clipped to my shirt with my name printed on it?
							</p>
						</div>
					</div>
				</div>
			
				<div class="slide">
					<img src="<?php echo get_template_directory_uri(); ?>/-/img/slide-3.jpg" alt="Generic Slide 3">
					<div class="rsText">
						<div class="rsTextContent">
							<h2 class="rsABlock">
								Generic Slide 3
							</h2>
							<p class="rsABlock">
								Do you see any Teletubbies in here? Do you see a slender plastic tag clipped to my shirt with my name printed on it?
							</p>
						</div>
					</div>
				</div>
				
				<div class="slide">
					<img src="<?php echo get_template_directory_uri(); ?>/-/img/slide-4.jpg" alt="Generic Slide 3">
					<div class="rsText">
						<div class="rsTextContent">
							<h2 class="rsABlock">
								Generic Slide 4
							</h2>
							<p class="rsABlock">
								Do you see any Teletubbies in here? Do you see a slender plastic tag clipped to my shirt with my name printed on it?
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<!-- <h2 class="heading-1">Random Heading</h2> -->
		
		<section class="slider-wrapper">
			<div class="slider width-980">
				<div class="slide">
					<article>
						<img src="<?php echo get_template_directory_uri(); ?>/-/img/yoda.png" alt="">
						<h2>Are you ready for the truth?</h2>
						<p>Do you see any Teletubbies in here? Do you see a slender plastic tag clipped to my shirt with my name printed on it? Do you see a little Asian child with a blank expression on his face sitting outside on a mechanical helicopter that shakes when you put quarters in it? No? Well, that's what you see at a toy store.</p>
					</article>
					
					<article>
						<img src="<?php echo get_template_directory_uri(); ?>/-/img/yoda.png" alt="">
						<h2>I'm serious as a heart attack</h2>
						<p>You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the world once and got a taste for murder. After the avalanche, it took us a week to climb out. Now, I don't know exactly when we turned on each other, but I know that seven of us survived the slide... and only five made it out.</p>
					</article>
					
					<article>
						<img src="<?php echo get_template_directory_uri(); ?>/-/img/yoda.png" alt="">
						<h2>Are you ready for the truth?</h2>
						<p>Your bones don't break, mine do. That's clear. Your cells react to bacteria and viruses differently than mine. You don't get sick, I do. That's also clear. But for some reason, you and I react the exact same way to water. We swallow it too fast, we choke. We get some in our lungs, we drown.</p>
					</article>
					<i class="clearfix"></i>
				</div>
				
				<div class="slide">
					<article>
						<img src="<?php echo get_template_directory_uri(); ?>/-/img/yoda.png" alt="">
						<h2>Are you ready for the truth?</h2>
						<p>Do you see any Teletubbies in here? Do you see a slender plastic tag clipped to my shirt with my name printed on it? Do you see a little Asian child with a blank expression on his face sitting outside on a mechanical helicopter that shakes when you put quarters in it? No? Well, that's what you see at a toy store.</p>
					</article>
					
					<article>
						<img src="<?php echo get_template_directory_uri(); ?>/-/img/yoda.png" alt="">
						<h2>I'm serious as a heart attack</h2>
						<p>You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the world once and got a taste for murder. After the avalanche, it took us a week to climb out. Now, I don't know exactly when we turned on each other, but I know that seven of us survived the slide... and only five made it out.</p>
					</article>
					
					<article>
						<img src="<?php echo get_template_directory_uri(); ?>/-/img/yoda.png" alt="">
						<h2>Are you ready for the truth?</h2>
						<p>Your bones don't break, mine do. That's clear. Your cells react to bacteria and viruses differently than mine. You don't get sick, I do. That's also clear. But for some reason, you and I react the exact same way to water. We swallow it too fast, we choke. We get some in our lungs, we drown.</p>
					</article>
					<i class="clearfix"></i>
				</div>
				
				<div class="slide">
					<article>
						<img src="<?php echo get_template_directory_uri(); ?>/-/img/yoda.png" alt="">
						<h2>Are you ready for the truth?</h2>
						<p>Do you see any Teletubbies in here? Do you see a slender plastic tag clipped to my shirt with my name printed on it? Do you see a little Asian child with a blank expression on his face sitting outside on a mechanical helicopter that shakes when you put quarters in it? No? Well, that's what you see at a toy store.</p>
					</article>
					
					<article>
						<img src="<?php echo get_template_directory_uri(); ?>/-/img/yoda.png" alt="">
						<h2>I'm serious as a heart attack</h2>
						<p>You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the world once and got a taste for murder. After the avalanche, it took us a week to climb out. Now, I don't know exactly when we turned on each other, but I know that seven of us survived the slide... and only five made it out.</p>
					</article>
					
					<article>
						<img src="<?php echo get_template_directory_uri(); ?>/-/img/yoda.png" alt="">
						<h2>Are you ready for the truth?</h2>
						<p>Your bones don't break, mine do. That's clear. Your cells react to bacteria and viruses differently than mine. You don't get sick, I do. That's also clear. But for some reason, you and I react the exact same way to water. We swallow it too fast, we choke. We get some in our lungs, we drown.</p>
					</article>
					<i class="clearfix"></i>
				</div>
				
			</div>
			<div class="slide-arrows">
				<a class="arrows left prev-slide">
					<span class="arrow-part top">
					</span>
					<span class="arrow-part bottom">
					</span>
				</a>
				
				<a class="arrows right next-slide">
					<span class="arrow-part top">
					</span>
					<span class="arrow-part bottom">
					</span>
				</a>
			</div>
		</section>
			
	<?php endwhile; ?>
	
	<?php else: ?>
	
		<div>
			
			<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
			
		</div>
	
	<?php endif; ?>
	
	</section>
	
<?php //get_sidebar(); ?>

<?php get_footer(); ?>
