<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
		
		<!-- dns prefetch -->
		<link href="//www.google-analytics.com" rel="dns-prefetch">
		
		<!-- meta -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		
		<!-- icons -->
		<link href="<?php echo get_template_directory_uri(); ?>/-/img/icons/favicon.ico" rel="shortcut icon">
		<link href="<?php echo get_template_directory_uri(); ?>/-/img/icons/touch.png" rel="apple-touch-icon-precomposed">
			
		<!-- Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Kavoon|Metrophobic' rel='stylesheet' type='text/css'>
			
		<!-- css + javascript -->
		<?php wp_head(); ?>
		 <script>
// 		!function(){
// 			// configure legacy, retina, touch requirements @ conditionizr.com
// 			conditionizr()
// 		}()
 		</script>
	</head>
	<body <?php body_class(); ?>>
	
		<!-- wrapper -->
		<div class="wrapper">
	
			<!-- header -->
			<header class="header clear" role="banner">
				
				<div class="width-980 logo-wrap">
				
					<!-- logo -->
					<div class="logo">
						<a href="<?php echo home_url(); ?>">
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<img src="<?php echo get_template_directory_uri(); ?>/-/img/logo.svg" alt="Logo" class="logo-img">
						</a>
					</div>
					
				</div>
				<!-- /logo -->
				
				<!-- nav -->
				<nav class="nav" role="navigation">
					<div class="width-980">
						<input type="checkbox" id="toggle" class="hide">
						<label for="toggle" class="toggle show-mobile" onclick=""><span></span></label>
						<?php html5blank_nav(); ?>
						<i class="clearfix"></i>
					</div>
				</nav>
				<!-- /nav -->
				
				<i class="clearfix"></i>
			
			</header>
			<!-- /header -->
			
			<div class="main">